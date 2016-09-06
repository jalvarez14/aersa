<?php 

namespace Application\Administracion\Controller\Reportes;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class CierresinventariosController extends AbstractActionController {
    
    public function indexAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $iva = \TasaivaQuery::create()->filterByIdtasaiva(1)->findOne()->getTasaivaValor();
            $iva = $iva / 100 + 1;
            $post_data = $request->getPost();
            $mes = $post_data['mes'];
            $ano = $post_data['ano'];
            $ingresos = array();
            if ($mes == 1 || $mes == 3 || $mes == 5 || $mes == 7 || $mes == 8 || $mes == 10 || $mes == 12)
                $dias = 31;
            else if ($mes == 4 || $mes == 6 || $mes == 9 || $mes == 11)
                $dias = 30;
            else
                $dias = (checkdate($mes, 29, $ano)) ? 29 : 28;
            $totali = 0;
            $flujosefectivos = \FlujoefectivoQuery::create()->filterByFlujoefectivoFecha(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-' . $dias . ' 23:59:59'))->filterByFlujoefectivoOrigen('ingreso')->orderByIdcompra()->find();
            $flujoefectivo = new \Flujoefectivo();
            $inicio = $ano . '-' . $mes . '-01 00:00:00';
            $fin = $ano . '-' . $mes . '-' . $dias . ' 23:59:59';
            foreach ($flujosefectivos as $flujoefectivo) {
                $cheque = true;
                if ($flujoefectivo->getFlujoefectivoMediodepago() == 'cheque') {
                    $fecha = $flujoefectivo->getFlujoefectivoFechacobrocheque();
                    if (!($inicio < $fecha) && ($fecha < $fin))
                        $cheque = false;
                }

                if ($cheque) {
                    if (isset($ingresos[$flujoefectivo->getIngresorubro()][$flujoefectivo->getIdcuentabancaria()])) {
                        $ingresos[$flujoefectivo->getIngresorubro()][$flujoefectivo->getIdcuentabancaria()]+=str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                    } else {
                        $ingresos[$flujoefectivo->getIngresorubro()][$flujoefectivo->getIdcuentabancaria()] = str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                    }
                    $totali+=str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                }
            }
            $reportei = array();
            $rubrosingresos = \RubroingresoQuery::create()->find();
            $rubroingreso = new \Rubroingreso();
            $rubroingresoarray = array();
            $fila = 0;
            $arraytotalesi = array();
            foreach ($rubrosingresos as $rubroingreso) {
                $valuefila = array();
                $valuefila['nombre'] = $rubroingreso->getRubroingresoNombre();
                $totalf = 0;
                $objbancos = \CuentabancariaQuery::create()->filterByIdempresa($idempresa)->orderByCuentabancariaBanco()->orderByIdcuentabancaria()->find();
                $objbanco = new \Cuentabancaria();
                $numbanco = 1;
                foreach ($objbancos as $objbanco) {
                    $cantidadcuent = "";
                    if (isset($ingresos[strtolower($rubroingreso->getRubroingresoNombre())][$objbanco->getIdcuentabancaria()])) {
                        $cantidadcuent = $ingresos[strtolower($rubroingreso->getRubroingresoNombre())][$objbanco->getIdcuentabancaria()];
                        $totalf+=$ingresos[strtolower($rubroingreso->getRubroingresoNombre())][$objbanco->getIdcuentabancaria()];
                    }
                    $valuefila['banco' . $numbanco] = $cantidadcuent;
                    $numbanco++;
                }
                $valuefila['total'] = $totalf;
                if ($totalf != 0)
                    $porcentaje = number_format(($totalf * 100) / $totali, 2);
                else
                    $porcentaje = 0;
                $valuefila['pct'] = $porcentaje;
                $reportei[$fila] = $valuefila;
                $fila++;
            }
            $totalesi = array();
            foreach ($reportei as $reportei1) {
                foreach ($reportei1 as $key => $value) {
                    if (strpos($key, 'banco') !== false) {
                        if (isset($totalesi[$key]))
                            $totalesi[$key]+=($value != "") ? $value : 0;
                        else
                            $totalesi[$key] = ($value != "") ? $value : 0;
                    }
                }
            }
            $totalesi['total'] = $totali;
            $totalesi['pct'] = "100";

            $reporte = array();
            $flujosefectivos = \FlujoefectivoQuery::create()->filterByFlujoefectivoFecha(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-' . $dias . ' 23:59:59'))->filterByFlujoefectivoOrigen('compra')->orderByIdcompra()->find();
            $flujoefectivo = new \Flujoefectivo();
            $pagos = array();

            $inicio = $ano . '-' . $mes . '-01 00:00:00';
            $fin = $ano . '-' . $mes . '-' . $dias . ' 23:59:59';
            foreach ($flujosefectivos as $flujoefectivo) {
                $cheque = true;
                if ($flujoefectivo->getFlujoefectivoMediodepago() == 'cheque') {
                    $fecha = $flujoefectivo->getFlujoefectivoFechacobrocheque();
                    if (!($inicio < $fecha) && ($fecha < $fin))
                        $cheque = false;
                }
                if ($cheque) {
                    array_push($pagos, array('idcompra' => $flujoefectivo->getIdcompra(), 'banco' => $flujoefectivo->getCuentabancaria()->getCuentabancariaBanco(), 'saldo' => str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad())));
                }
            }
            for ($i = 0; $i < count($pagos); $i++) {
                $idcompra = $pagos[$i]['idcompra'];
                $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($idcompra)->find();
                $compradetalle = new \Compradetalle();
                $pendiente = 0;
                $cantidadpagar = 0;
                $saldo = number_format($pagos[$i]['saldo'], 5);
                $saldo = str_replace(",", "", $saldo);
                //echo "saldo inicial $saldo <br>";
                foreach ($comprasdetalles as $compradetalle) {
                    do {
                        $categoria = $compradetalle->getProducto()->getIdsubcategoria();
                        if ($saldo < 0) {
                            if (isset($pagos[$i + 1]['idcompra'])) {
                                if ($pagos[$i + 1]['idcompra'] == $idcompra) {
                                    $i++;
                                    $saldo = number_format($pagos[$i]['saldo'], 6);
                                } else
                                    break;
                            } else
                                break;
                            $saldo = str_replace(",", "", $saldo);
                            //echo "aumento de saldo $saldo <br>";
                        }
                        if ($pendiente != 0) {
                            if ($saldo >= $pendiente) {
                                //echo "if de pendiente $pendiente <br>";
                                if (isset($reporte[$categoria][$pagos[$i]['banco']]))
                                    $reporte[$categoria][$pagos[$i]['banco']] += $pendiente;
                                else
                                    $reporte[$categoria][$pagos[$i]['banco']] = $pendiente;
                                $saldo = number_format($saldo - $pendiente, 6);
                                $pendiente = 0;
                                $cantidadpagar = 0;
                            } else {
                                //echo "else de pendiente $pendiente <br>";
                                if (isset($reporte[$categoria][$pagos[$i]['banco']])) {
                                    $reporte[$categoria][$pagos[$i]['banco']] += $saldo;
                                    $pendiente -= number_format($saldo, 6);
                                } else {
                                    $reporte[$categoria][$pagos[$i]['banco']] = $saldo;
                                    $pendiente -= number_format($saldo, 6);
                                }
                                $saldo = number_format($pendiente, 6);
                                $saldo = $saldo * -1;
                            }
                        } else {
                            //echo "sin pendiente <br>";
                            $cantidadpagar = ($compradetalle->getProducto()->getProductoIva()) ? number_format(($compradetalle->getCompradetalleSubtotal() * $iva), 6) : number_format($compradetalle->getCompradetalleSubtotal(), 6);
                            $cantidadpagar = str_replace(",", "", $cantidadpagar);
                            //echo "cantidad a pagar $cantidadpagar y saldo $saldo <br>";
                            if ($saldo >= $cantidadpagar) {
                                //echo "saldo mayor = $saldo <br>";
                                if (isset($reporte[$categoria][$pagos[$i]['banco']]))
                                    $reporte[$categoria][$pagos[$i]['banco']] += $cantidadpagar;
                                else
                                    $reporte[$categoria][$pagos[$i]['banco']] = $cantidadpagar;
                                $saldo = number_format($saldo - $cantidadpagar, 6);
                                $saldo = str_replace(",", "", $saldo);
                                $cantidadpagar = 0;
                            } else {
                                //echo "saldo menor = $saldo <br>";
                                if (isset($reporte[$categoria][$pagos[$i]['banco']])) {
                                    //echo "envio de saldo a reporte if<br>";
                                    $reporte[$categoria][$pagos[$i]['banco']] += $saldo;
                                    $pendiente = number_format(($cantidadpagar - $saldo), 6);
                                } else {
                                    //echo "envio de saldo a reporte else<br>";
                                    $reporte[$categoria][$pagos[$i]['banco']] = $saldo;
                                    $pendiente = number_format(($cantidadpagar - $saldo), 6);
                                }
                                $saldo = number_format(($saldo - $cantidadpagar), 6);
                                $saldo = str_replace(",", "", $saldo);
                                $cantidadpagar = number_format($pendiente, 6);
                            }
                        }
                    } while ($cantidadpagar != 0 || $i < count($pagos));
                }
            }
            $objbancos = \CuentabancariaQuery::create()->filterByIdempresa($idempresa)->orderByCuentabancariaBanco()->find();
            $objbanco = new \Cuentabancaria();
            $arraybancos = array();
            $arraybancos2 = array();
            $numero = 1;
            foreach ($objbancos as $key => $objbanco) {
                array_push($arraybancos2, $objbanco->getCuentabancariaBanco());
            }

            foreach ($arraybancos2 as $key => $value) {
                $arraybancos['banco' . ($key + 1)] = $value;
            }


            for ($i = (count($arraybancos)); $i < 8; $i++) {
                $arraybancos['banco' . ($i + 1)] = "";
            }
            $totales = array();
            $totalg = 0;
            foreach ($reporte as $banco) {
                foreach ($banco as $key => $value) {
                    if (isset($totales[$key]))
                        $totales[$key]+=$value;
                    else
                        $totales[$key] = $value;
                    $totalg+=$value;
                }
            }

            $arraytotales = array();
            for ($i = 0; $i < count($arraybancos2); $i++) {
                $value = "";
                if (isset($totales[$arraybancos2[$i]]))
                    $value = $totales[$arraybancos2[$i]];
                $arraytotales['banco' . ($i + 1)] = $value;
            }
            $arraytotales['total'] = $totalg;
            $arraytotales['pct'] = "100";


            $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
            $sucursal = \SucursalQuery::create()->findPk($idsucursal)->getSucursalNombre();

            $objcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
            $categoria = new \Categoria();
            $reportec = array();
            $fila = 0;
            foreach ($objcategorias as $categoria) {
                $valuefila = array();
                $valuefila['nombre'] = $categoria->getCategoriaNombre();
                $totalf = 0;
                for ($i = 1; $i < count($arraybancos2) + 1; $i++) {
                    $cantidadbanco = "";
                    if (isset($reporte[$categoria->getIdcategoria()][$arraybancos2[$i - 1]])) {
                        $cantidadbanco = $reporte[$categoria->getIdcategoria()][$arraybancos2[$i - 1]];
                        $totalf+=$reporte[$categoria->getIdcategoria()][$arraybancos2[$i - 1]];
                    }
                    $valuefila['banco' . $i] = $cantidadbanco;
                }
                $valuefila['total'] = $totalf;
                $porcentaje = ($totalf!=0) ? number_format(($totalf * 100) / $totalg, 6) : 0;
                $valuefila['pct'] = $porcentaje;
                $reportec[$fila] = $valuefila;

                $fila++;
            }
            $objcategorias = \CategoriaQuery::create()->find();
            $categoria = new \Categoria();
            $reportesc = array();
            $fila = 0;
            foreach ($objcategorias as $categoria) {
                if ($categoria->getIdcategoriapadre() != null) {
                    $valuefila = array();
                    $valuefila['nombre'] = $categoria->getCategoriaNombre();
                    $totalf = 0;
                    for ($i = 1; $i < count($arraybancos2) + 1; $i++) {
                        $cantidadbanco = "";
                        if (isset($reporte[$categoria->getIdcategoria()][$arraybancos2[$i - 1]])) {
                            $cantidadbanco = $reporte[$categoria->getIdcategoria()][$arraybancos2[$i - 1]];
                            $totalf+=$reporte[$categoria->getIdcategoria()][$arraybancos2[$i - 1]];
                        }
                        $valuefila['banco' . $i] = $cantidadbanco;
                    }
                    $valuefila['total'] = $totalf;
                    $porcentaje = ($totalf!=0) ? number_format(($totalf * 100) / $totalg, 6) : 0;
                    $valuefila['pct'] = $porcentaje;
                    $reportesc[$fila] = $valuefila;
                    $fila++;
                }
            }
            $template = '/flujoefectivomensual' . count($arraybancos2) . 'B.xlsx';
            $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
            $config = array(
                'template' => $template,
                'templateDir' => $templateDir
            );
            $a = array('nombre' => $nombreEmpresa, 'sucursal' => $sucursal);
            $R = new \PHPReport($config);
            $R->load(
                    array(
                        array(
                            'id' => 'compania',
                            'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $sucursal),
                        ),
                        array(
                            'id' => 'reporte',
                            'data' => array('mes' => $mes, 'ano' => $ano),
                        ),
                        array(
                            'id' => 'banco',
                            'data' => $arraybancos,
                        ),
                        array(
                            'id' => 'ingreso',
                            'repeat' => true,
                            'data' => $reportei,
                        ),
                        array(
                            'id' => 'subt',
                            'data' => $arraytotales,
                        ),
                        array(
                            'id' => 'ingresot',
                            'data' => $totalesi,
                        ),
                        array(
                            'id' => 'subcat',
                            'repeat' => true,
                            'data' => $reportesc,
                        )
                    )
            );
            if (isset($post_data['generar_pdf']))
                echo $R->render('PDF');
            else
                echo $R->render('excel');
            exit;
        }
        //INTANCIAMOS NUESTRA VISTA
        $form = new \Application\Administracion\Form\Reportes\CierresinventariosForm();
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/administracion/reportes/cierresinventarios/index');
        return $view_model;
    }
}


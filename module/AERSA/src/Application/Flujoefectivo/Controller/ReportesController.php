<?php

namespace Application\Flujoefectivo\Controller;

include getcwd() . '/vendor/jasper/phpreport/PHPReport.php';

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ReportesController extends AbstractActionController {

    public function mensualAction() {
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
                                    $saldo = number_format($pagos[$i]['saldo'], 5);
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
                                $saldo = number_format($saldo - $pendiente, 5);
                                $pendiente = 0;
                                $cantidadpagar = 0;
                            } else {
                                //echo "else de pendiente $pendiente <br>";
                                if (isset($reporte[$categoria][$pagos[$i]['banco']])) {
                                    $reporte[$categoria][$pagos[$i]['banco']] += $saldo;
                                    $pendiente -= number_format($saldo, 5);
                                } else {
                                    $reporte[$categoria][$pagos[$i]['banco']] = $saldo;
                                    $pendiente -= number_format($saldo, 5);
                                }
                                $saldo = number_format($pendiente, 5);
                                $saldo = $saldo * -1;
                            }
                        } else {
                            //echo "sin pendiente <br>";
                            $cantidadpagar = ($compradetalle->getProducto()->getProductoIva()) ? number_format(($compradetalle->getCompradetalleSubtotal() * $iva), 5) : number_format($compradetalle->getCompradetalleSubtotal(), 5);
                            $cantidadpagar = str_replace(",", "", $cantidadpagar);
                            //echo "cantidad a pagar $cantidadpagar y saldo $saldo <br>";
                            if ($saldo >= $cantidadpagar) {
                                //echo "saldo mayor = $saldo <br>";
                                if (isset($reporte[$categoria][$pagos[$i]['banco']]))
                                    $reporte[$categoria][$pagos[$i]['banco']] += $cantidadpagar;
                                else
                                    $reporte[$categoria][$pagos[$i]['banco']] = $cantidadpagar;
                                $saldo = number_format($saldo - $cantidadpagar, 5);
                                $saldo = str_replace(",", "", $saldo);
                                $cantidadpagar = 0;
                            } else {
                                //echo "saldo menor = $saldo <br>";
                                if (isset($reporte[$categoria][$pagos[$i]['banco']])) {
                                    //echo "envio de saldo a reporte if<br>";
                                    $reporte[$categoria][$pagos[$i]['banco']] += $saldo;
                                    $pendiente = number_format(($cantidadpagar - $saldo), 5);
                                } else {
                                    //echo "envio de saldo a reporte else<br>";
                                    $reporte[$categoria][$pagos[$i]['banco']] = $saldo;
                                    $pendiente = number_format(($cantidadpagar - $saldo), 5);
                                }
                                $saldo = number_format(($saldo - $cantidadpagar), 5);
                                $saldo = str_replace(",", "", $saldo);
                                $cantidadpagar = number_format($pendiente, 5);
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
                $porcentaje = number_format(($totalf * 100) / $totalg, 2);
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
                    $porcentaje = number_format(($totalf * 100) / $totalg, 2);
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
        $min = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('asc')->findOne()->getCuentaporcobrarFecha('Y');
        $max = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('desc')->findOne()->getCuentaporcobrarFecha('Y');
        $ano_array = array();
        for ($i = $min; $i <= $max; $i++) {
            $ano_array[$i] = $i;
        }

        $form = new \Application\Flujoefectivo\Form\ReporteForm($ano_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/flujoefectivo/reportes/mensual');
        return $view_model;
    }

    public function reportemAction() {
        $iva = \TasaivaQuery::create()->filterByIdtasaiva(1)->findOne()->getTasaivaValor();
        $iva = $iva / 100 + 1;
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $mes = $this->params()->fromQuery('mes');
        $ano = $this->params()->fromQuery('ano');
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
            foreach ($comprasdetalles as $compradetalle) {
                do {
                    $categoria = $compradetalle->getProducto()->getIdsubcategoria();
                    if ($saldo < 0) {
                        if (isset($pagos[$i + 1]['idcompra'])) {
                            if ($pagos[$i + 1]['idcompra'] == $idcompra) {
                                $i++;
                                $saldo = number_format($pagos[$i]['saldo'], 5);
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
                            $saldo = number_format($saldo - $pendiente, 5);
                            $pendiente = 0;
                            $cantidadpagar = 0;
                        } else {
                            //echo "else de pendiente $pendiente <br>";
                            if (isset($reporte[$categoria][$pagos[$i]['banco']])) {
                                $reporte[$categoria][$pagos[$i]['banco']] += $saldo;
                                $pendiente -= number_format($saldo, 5);
                            } else {
                                $reporte[$categoria][$pagos[$i]['banco']] = $saldo;
                                $pendiente -= number_format($saldo, 5);
                            }
                            $saldo = number_format($pendiente, 5);
                            $saldo = $saldo * -1;
                        }
                    } else {
                        //echo "sin pendiente <br>";
                        $cantidadpagar = ($compradetalle->getProducto()->getProductoIva()) ? number_format(($compradetalle->getCompradetalleSubtotal() * $iva), 5) : number_format($compradetalle->getCompradetalleSubtotal(), 5);
                        $cantidadpagar = str_replace(",", "", $cantidadpagar);
                        //echo "cantidad a pagar $cantidadpagar y saldo $saldo <br>";
                        if ($saldo >= $cantidadpagar) {
                            //echo "saldo mayor = $saldo <br>";
                            if (isset($reporte[$categoria][$pagos[$i]['banco']]))
                                $reporte[$categoria][$pagos[$i]['banco']] += $cantidadpagar;
                            else
                                $reporte[$categoria][$pagos[$i]['banco']] = $cantidadpagar;
                            $saldo = number_format($saldo - $cantidadpagar, 5);
                            $saldo = str_replace(",", "", $saldo);
                            $cantidadpagar = 0;
                        } else {
                            //echo "saldo menor = $saldo <br>";
                            if (isset($reporte[$categoria][$pagos[$i]['banco']])) {
                                //echo "envio de saldo a reporte if<br>";
                                $reporte[$categoria][$pagos[$i]['banco']] += $saldo;
                                $pendiente = number_format(($cantidadpagar - $saldo), 5);
                            } else {
                                //echo "envio de saldo a reporte else<br>";
                                $reporte[$categoria][$pagos[$i]['banco']] = $saldo;
                                $pendiente = number_format(($cantidadpagar - $saldo), 5);
                            }
                            $saldo = number_format(($saldo - $cantidadpagar), 5);
                            $saldo = str_replace(",", "", $saldo);
                            $cantidadpagar = number_format($pendiente, 5);
                        }
                    }
                } while ($cantidadpagar != 0 || $i < count($pagos));
            }
        }
        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $categoria = new \Categoria();
        $totalg = 0;
        $bancos = 0;
        $nombrebancos = "";
        $totales = array();
        foreach ($reporte as $banco) {
            foreach ($banco as $key => $value) {
                if (isset($totales[$key]))
                    $totales[$key]+=$value;
                else
                    $totales[$key] = $value;
                $totalg+=$value;
            }
        }
        $objbancos = \CuentabancariaQuery::create()->filterByIdempresa($idempresa)->orderByCuentabancariaBanco()->find();
        $objbanco = new \Cuentabancaria();
        $arraybancos = array();
        $numbancos=0;
        foreach ($objbancos as $objbanco) {
            $numbancos++;
            $nombrebancos.="<th> " . $objbanco->getCuentabancariaBanco() . " </th>";
            array_push($arraybancos, $objbanco->getCuentabancariaBanco());
        }
        $thead = "<thead> <th>Concepto</th> " . $nombrebancos . " <th>Total</th> </thead>";
        $reporteg = array();
        $reporteg[0] = $thead;
        $reporteg[1] = '<tbody id="tbody">';
        $fila = 2;
        $colorcat = "bgcolor='#ADD8E6'";
        $colorfila = "bgcolor='#F2F2F2'";
        $colori = "bgcolor='#819FF7'";
        foreach ($reportei as $reportei1) {
            $textofila = "<tr $colori> <td>" . $reportei1['nombre'] . " </td> ";
            for($i=1;$i<=count($objbancos);$i++) {
                $textofila.="<td>" . $reportei1['banco'.$i] . "</td>";
                $totalesi[$key]+=($value != "") ? $value : 0;
                if(isset($arraytotalesi['banco'.$i]))
                $arraytotalesi['banco'.$i]+=($reportei1['banco'.$i] != "") ? $reportei1['banco'.$i] : 0;
                else 
                    $arraytotalesi['banco'.$i]=($reportei1['banco'.$i] != "") ? $reportei1['banco'.$i] : 0;
            }
            $textofila.="<td>".$reportei1['total']."</td></tr>";
            $reporteg[$fila] = $textofila;
            $fila++;
        }
        $totalf=0;
        $textofila = "<tr $colori> <td>Total</td> ";
            for($i=1;$i<=count($objbancos);$i++) {
                $textofila.="<td>" . $arraytotalesi['banco'.$i] . "</td>";
                $totalf+=$arraytotalesi['banco'.$i];
            }
            $textofila.="<td>".$totalf."</td></tr>";
            $reporteg[$fila] = $textofila;
            $fila++;
        foreach ($categorias as $categoria) {
            $totalf = 0;
            $textofila = "<tr $colorcat> <td>" . $categoria->getCategoriaNombre() . " </td> ";
            foreach ($arraybancos as $bank) {
                if (isset($reporte[$categoria->getIdcategoria()][$bank])) {
                    $textofila.="<td>" . $reporte[$categoria->getIdcategoria()][$bank] . "</td>";
                    $totalf+=$reporte[$categoria->getIdcategoria()][$bank];
                } else
                    $textofila.="<td></td>";
            }
            $textofila.="<td>$totalf</td></tr>";
            $reporteg[$fila] = $textofila;

            $total = 0;
            $subcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre($categoria->getIdcategoria())->find();
            $subcategoria = new \Categoria();
            foreach ($subcategorias as $subcategoria) {
                $fila++;
                $totalf = 0;
                $textofila = (($fila % 2) == 1) ? "<tr $colorfila> " : "<tr> ";
                $textofila.= "<td>" . $subcategoria->getCategoriaNombre() . " </td> ";
                foreach ($arraybancos as $bank) {
                    if (isset($reporte[$subcategoria->getIdcategoria()][$bank])) {
                        $textofila.="<td>" . $reporte[$subcategoria->getIdcategoria()][$bank] . "</td>";
                        $totalf+=$reporte[$subcategoria->getIdcategoria()][$bank];
                    } else
                        $textofila.="<td></td>";
                }
                $textofila.="<td>$totalf</td></tr>";
                $reporteg[$fila] = $textofila;
            }
            $fila++;
        }
        $textofila = (($fila % 2) == 1) ? "<tr $colorfila> " : "<tr> ";
        $textofila.= "<td> Total </td> ";
        foreach ($arraybancos as $bank) {
            if (isset($totales[$bank]))
                $textofila.="<td>" . $totales[$bank] . "</td>";
            else
                $textofila.="<td></td>";
        }
        $textofila.="<td>$totalg</td></tr>";
        $reporteg[$fila] = $textofila;
        $fila++;
        $reporteg[$fila] = '</tbody>';
//        echo "<table>";
//        for($i=0;$i<count($reporteg);$i++) {
//            echo $reporteg[$i];
//        }
//        echo "</table>";
//        exit;
        return $this->getResponse()->setContent(json_encode($reporteg));
    }

    public function anualAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $ano = $post_data['ano'];
            $iva = \TasaivaQuery::create()->filterByIdtasaiva(1)->findOne()->getTasaivaValor();
            $iva = $iva / 100 + 1;
            $reporte = array();
            $pagos = array();
            for ($i = 1; $i < 13; $i++) {
                if ($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 8 || $i == 10 || $i == 12)
                    $dias = 31;
                else if ($i == 4 || $i == 6 || $i == 9 || $i == 11)
                    $dias = 30;
                else
                    $dias = (checkdate($i, 29, $ano)) ? 29 : 28;
                $mes = sprintf("%02d", $i);
                $flujosefectivos = \FlujoefectivoQuery::create()->filterByFlujoefectivoFecha(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-' . $dias . ' 23:59:59'))->filterByFlujoefectivoOrigen('compra')->orderByIdcompra()->find();
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
                        if (isset($pagos[$i][$flujoefectivo->getIdcompra()]))
                            $pagos[$i][$flujoefectivo->getIdcompra()]+=str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                        else
                            $pagos[$i][$flujoefectivo->getIdcompra()] = str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                    }
                }
            }
            for ($i = 1; $i < 13; $i++) {
                if (isset($pagos[$i]))
                    foreach ($pagos[$i] as $idcompra => $cantidad) {
                        $saldo = number_format($cantidad, 5);
                        $saldo = str_replace(",", "", $saldo);
                        $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($idcompra)->find();
                        $compradetalle = new \Compradetalle();
                        foreach ($comprasdetalles as $compradetalle) {
                            $categoria = $compradetalle->getProducto()->getIdsubcategoria();
                            $cantidadpagar = ($compradetalle->getProducto()->getProductoIva()) ? number_format(($compradetalle->getCompradetalleSubtotal() * $iva), 5) : number_format($compradetalle->getCompradetalleSubtotal(), 5);
                            $cantidadpagar = str_replace(",", "", $cantidadpagar);
                            if ($saldo >= $cantidadpagar) {
                                if (isset($reporte[$categoria]['mes' . $i]))
                                    $reporte[$categoria]['mes' . $i]+= str_replace(",", "", $cantidadpagar);
                                else
                                    $reporte[$categoria]['mes' . $i] = str_replace(",", "", $cantidadpagar);
                                $saldo = $saldo - $cantidadpagar;
                                $saldo = str_replace(",", "", $saldo);
                            } else {
                                if (isset($reporte[$categoria]['mes' . $i]))
                                    $reporte[$categoria]['mes' . $i]+= str_replace(",", "", $saldo);
                                else
                                    $reporte[$categoria]['mes' . $i] = str_replace(",", "", $saldo);
                                $saldo = ($saldo - $cantidadpagar);
                                $saldo = str_replace(",", "", $saldo);
                            }
                            if ($saldo <= 0)//siempre se comprueba para saber si se tiene saldo suficioente
                                break;
                        }
                    }
            }
            $reportesc = array();
            $totales = array();
            foreach ($reporte as $repot) {
                foreach ($repot as $repo => $value) {
                    $value = str_replace(",", "", $value);
                    if (isset($totales[$repo]))
                        $totales[$repo]+=$value;
                    else
                        $totales[$repo] = $value;
                }
            }

            $totalg = 0;
            foreach ($reporte as $cat) {
                foreach ($cat as $saldo) {
                    $saldo = str_replace(",", "", $saldo);
                    $totalg+=$saldo;
                }
            }
            $fila = 0;
            $arraytotalessub = array();
            for ($i = 1; $i < 13; $i++) {
                $value = "";
                if (isset($totales['mes' . $i]))
                    $value = $totales['mes' . $i];
                $arraytotalessub['mes' . $i] = $value;
            }
            $arraytotalessub['total'] = $totalg;
            $arraytotalessub['pct'] = "100";
            $categorias = \CategoriaQuery::create()->find();
            $categoria = new \Categoria();
            foreach ($categorias as $categoria) {
                if ($categoria->getIdcategoriapadre() != null) {
                    $valuefila = array();
                    $valuefila['nombre'] = $categoria->getCategoriaNombre();
                    $totalf = 0;
                    for ($i = 1; $i < 13; $i++) {
                        $cantidadmes = "";
                        if (isset($reporte[$categoria->getIdcategoria()]['mes' . $i])) {
                            $cantidadmes = $reporte[$categoria->getIdcategoria()]['mes' . $i];
                            $totalf+=$reporte[$categoria->getIdcategoria()]['mes' . $i];
                        }
                        $valuefila['mes' . $i] = $cantidadmes;
                    }
                    $valuefila['total'] = $totalf;
                    $porcentaje = number_format(($totalf * 100) / $totalg, 2);
                    $valuefila['pct'] = $porcentaje;
                    $reportesc[$fila] = $valuefila;
                    $fila++;
                }
            }
            $totali = 0;
            for ($i = 1; $i < 13; $i++) {
                if ($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 8 || $i == 10 || $i == 12)
                    $dias = 31;
                else if ($i == 4 || $i == 6 || $i == 9 || $i == 11)
                    $dias = 30;
                else
                    $dias = (checkdate($i, 29, $ano)) ? 29 : 28;
                $mes = sprintf("%02d", $i);
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
                        if (isset($ingresos[$flujoefectivo->getIngresorubro()]['mes' . $i])) {
                            $ingresos[$flujoefectivo->getIngresorubro()]['mes' . $i]+=str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                        } else {
                            $ingresos[$flujoefectivo->getIngresorubro()]['mes' . $i] = str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                        }
                        $totali+=str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                    }
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
                for ($i = 1; $i < 13; $i++) {
                    $cantidadmes = "";
                    if (isset($ingresos[strtolower($rubroingreso->getRubroingresoNombre())]['mes' . $i])) {
                        $cantidadmes = $ingresos[strtolower($rubroingreso->getRubroingresoNombre())]['mes' . $i];
                        $totalf+=$ingresos[strtolower($rubroingreso->getRubroingresoNombre())]['mes' . $i];
                    }
                    $valuefila['mes' . $i] = $cantidadmes;
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
                    if (strpos($key, 'mes') !== false) {
                        if (isset($totalesi[$key]))
                            $totalesi[$key]+=($value != "") ? $value : 0;
                        else
                            $totalesi[$key] = ($value != "") ? $value : 0;
                    }
                }
            }
            $totalesi['total'] = $totali;
            $totalesi['pct'] = "100";
            for ($i = 1; $i < 13; $i++) {
                $value = "";
                if (isset($totales['mes' . $i]))
                    $value = $totales['mes' . $i];
                $arraytotalesi['mes' . $i] = $value;
            }
            $arraytotalesi['total'] = $totali;
            $arraytotalesi['pct'] = "100";

            $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
            $sucursal = \SucursalQuery::create()->findPk($idsucursal)->getSucursalNombre();
            $template = '/flujoefectivoanual.xlsx';
            $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
            $config = array(
                'template' => $template,
                'templateDir' => $templateDir
            );


            $R = new \PHPReport($config);
            $R->load(
                    array(
                        array(
                            'id' => 'compania',
                            'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $sucursal),
                        ),
                        array(
                            'id' => 'reporte',
                            'data' => array('anio' => $ano),
                        ),
                        array(
                            'id' => 'ingreso',
                            'repeat' => true,
                            'data' => $reportei,
                        ),
                        array(
                            'id' => 'subt',
                            'data' => $arraytotalessub,
                        ),
                        array(
                            'id' => 'sub',
                            'repeat' => true,
                            'data' => $reportesc,
                        ),
                        array(
                            'id' => 'ingresot',
                            'data' => $totalesi,
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
        $min = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('asc')->findOne()->getCuentaporcobrarFecha('Y');
        $max = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('desc')->findOne()->getCuentaporcobrarFecha('Y');
        $ano_array = array();
        for ($i = $min; $i <= $max; $i++) {
            $ano_array[$i] = $i;
        }

        $form = new \Application\Flujoefectivo\Form\ReporteForm($ano_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/flujoefectivo/reportes/anual');
        return $view_model;
    }

    public function reporteaAction() {
        $iva = \TasaivaQuery::create()->filterByIdtasaiva(1)->findOne()->getTasaivaValor();
        $iva = $iva / 100 + 1;
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $ano = $this->params()->fromQuery('ano');
        $reporte = array();
        $pagos = array();
        $reporte[$categoria]['mes' . $i] = str_replace(",", "", $saldo);
        for ($i = 1; $i < 13; $i++) {
            if ($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 8 || $i == 10 || $i == 12)
                $dias = 31;
            else if ($i == 4 || $i == 6 || $i == 9 || $i == 11)
                $dias = 30;
            else
                $dias = (checkdate($i, 29, $ano)) ? 29 : 28;
            $mes = sprintf("%02d", $i);
            $flujosefectivos = \FlujoefectivoQuery::create()->filterByFlujoefectivoFecha(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-' . $dias . ' 23:59:59'))->filterByFlujoefectivoOrigen('compra')->orderByIdcompra()->find();
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
                    if (isset($pagos[$i][$flujoefectivo->getIdcompra()]))
                        $pagos[$i][$flujoefectivo->getIdcompra()]+=str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                    else
                        $pagos[$i][$flujoefectivo->getIdcompra()] = str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                }
            }
        }
        for ($i = 1; $i < 13; $i++) {
            if (isset($pagos[$i]))
                foreach ($pagos[$i] as $idcompra => $cantidad) {
                    $saldo = number_format($cantidad, 5);
                    $saldo = str_replace(",", "", $saldo);
                    $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($idcompra)->find();
                    $compradetalle = new \Compradetalle();
                    foreach ($comprasdetalles as $compradetalle) {
                        $categoria = $compradetalle->getProducto()->getIdsubcategoria();
                        $cantidadpagar = ($compradetalle->getProducto()->getProductoIva()) ? number_format(($compradetalle->getCompradetalleSubtotal() * $iva), 5) : number_format($compradetalle->getCompradetalleSubtotal(), 5);
                        $cantidadpagar = str_replace(",", "", $cantidadpagar);
                        if ($saldo >= $cantidadpagar) {
                            if (isset($reporte[$categoria]['mes' . $i]))
                                $reporte[$categoria]['mes' . $i]+= str_replace(",", "", $cantidadpagar);
                            else
                                $reporte[$categoria]['mes' . $i] = str_replace(",", "", $cantidadpagar);
                            $saldo = $saldo - $cantidadpagar;
                            $saldo = str_replace(",", "", $saldo);
                        } else {
                            if (isset($reporte[$categoria]['mes' . $i]))
                                $reporte[$categoria]['mes' . $i]+= str_replace(",", "", $saldo);
                            else
                                $reporte[$categoria]['mes' . $i] = str_replace(",", "", $saldo);
                            $saldo = ($saldo - $cantidadpagar);
                            $saldo = str_replace(",", "", $saldo);
                        }
                        if ($saldo <= 0)//siempre se comprueba para saber si se tiene saldo suficioente
                            break;
                    }
                }
        }

        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $categoria = new \Categoria();
        $totalg = 0;
        $bancos = 0;
        $nombrebancos = "";
        $totales = array();

        $thead = "<thead> <th>Concepto</th><th>Ene</th><th>Feb</th><th>Mar</th><th>Abr</th><th>May</th><th>Jun</th><th>Jul</th><th>Ago</th><th>Sep</th><th>Oct</th><th>Nov</th><th>Dic</th><th>Total</th><th>Porcentaje</th></thead>";
        $reporteg = array();
        $reporteg[0] = $thead;
        $reporteg[1] = '<tbody id="tbody">';
        $fila = 2;
        $colorcat = "bgcolor='#ADD8E6'";
        $colorfila = "bgcolor='#F2F2F2'";
        $colori = "bgcolor='#819FF7'";
        $totalg = 0;
        foreach ($reporte as $cat) {
            foreach ($cat as $saldo) {
                $saldo = str_replace(",", "", $saldo);
                $totalg+=$saldo;
            }
        }
        $ingresos = array();
        $totali = 0;
        for ($i = 1; $i < 13; $i++) {
            if ($i == 1 || $i == 3 || $i == 5 || $i == 7 || $i == 8 || $i == 10 || $i == 12)
                $dias = 31;
            else if ($i == 4 || $i == 6 || $i == 9 || $i == 11)
                $dias = 30;
            else
                $dias = (checkdate($i, 29, $ano)) ? 29 : 28;
            $mes = sprintf("%02d", $i);
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
                    if (isset($ingresos[$flujoefectivo->getIngresorubro()]['mes' . $i])) {
                        $ingresos[$flujoefectivo->getIngresorubro()]['mes' . $i]+=str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                    } else {
                        $ingresos[$flujoefectivo->getIngresorubro()]['mes' . $i] = str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                    }
                    $totali+=str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                }
            }
        }

        $rubrosingresos = \RubroingresoQuery::create()->find();
        $rubroingreso = new \Rubroingreso();
        foreach ($rubrosingresos as $rubroingreso) {
            $totalf = 0;
            $textofila = "<tr $colori> <td>" . $rubroingreso->getRubroingresoNombre() . " </td> ";
            for ($i = 1; $i < 13; $i++) {
                if (isset($ingresos[strtolower($rubroingreso->getRubroingresoNombre())]['mes' . $i])) {
                    $textofila.="<td>" . $ingresos[strtolower($rubroingreso->getRubroingresoNombre())]['mes' . $i] . "</td>";
                    $totalf+=$ingresos[strtolower($rubroingreso->getRubroingresoNombre())]['mes' . $i];
                } else
                    $textofila.="<td></td>";
            }
            $textofila.="<td>$totalf</td>";
            $porcentaje = ($totalf!=0) ? number_format(($totalf * 100) / $totali, 2) : 0;
            $textofila.="<td>$porcentaje%</td></tr>";
            $reporteg[$fila] = $textofila;
            $fila++;
        }


        $totalesi = array();
        foreach ($ingresos as $reportei1) {
            foreach ($reportei1 as $key => $value) {
                if (strpos($key, 'mes') !== false) {
                    if (isset($totalesi[$key]))
                        $totalesi[$key]+=($value != "") ? $value : 0;
                    else
                        $totalesi[$key] = ($value != "") ? $value : 0;
                }
            }
        }
        $totalf = 0;
        $textofila = "<tr $colori> <td> Totales </td> ";
        for ($i = 1; $i < 13; $i++) {
            if (isset($totalesi['mes' . $i])) {
                $textofila.="<td>" . $totalesi['mes' . $i] . "</td>";
                $totalf+=$totalesi['mes' . $i];
            } else
                $textofila.="<td></td>";
        }
        $textofila.="<td>$totalf</td>";
        $textofila.="<td>100%</td></tr>";
        $reporteg[$fila] = $textofila;
        $fila++;

        foreach ($categorias as $categoria) {
            $totalf = 0;
            $textofila = "<tr $colorcat> <td>" . $categoria->getCategoriaNombre() . " </td> ";
            for ($i = 1; $i < 13; $i++) {
                if (isset($reporte[$categoria->getIdcategoria()]['mes' . $i])) {
                    $textofila.="<td>" . $reporte[$categoria->getIdcategoria()]['mes' . $i] . "</td>";
                    $totalf+=$reporte[$categoria->getIdcategoria()]['mes' . $i];
                } else
                    $textofila.="<td></td>";
            }
            $textofila.="<td>$totalf</td>";
            $porcentaje = number_format(($totalf * 100) / $totalg, 2);
            $textofila.="<td>$porcentaje%</td></tr>";
            $reporteg[$fila] = $textofila;

            $total = 0;
            $subcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre($categoria->getIdcategoria())->find();
            $subcategoria = new \Categoria();
            foreach ($subcategorias as $subcategoria) {
                $fila++;
                $totalf = 0;
                $textofila = (($fila % 2) == 1) ? "<tr $colorfila> " : "<tr> ";
                $textofila.= "<td>" . $subcategoria->getCategoriaNombre() . " </td> ";
                for ($i = 1; $i < 13; $i++) {
                    if (isset($reporte[$subcategoria->getIdcategoria()]['mes' . $i])) {
                        $textofila.="<td>" . $reporte[$subcategoria->getIdcategoria()]['mes' . $i] . "</td>";
                        $totalf+=$reporte[$subcategoria->getIdcategoria()]['mes' . $i];
                    } else
                        $textofila.="<td></td>";
                }
                $textofila.="<td>$totalf</td>";
                $porcentaje = number_format(($totalf * 100) / $totalg, 2);
                $textofila.="<td>$porcentaje%</td></tr>";
                $reporteg[$fila] = $textofila;
            }
            $fila++;
        }
        $textofila = "<tr $colorcat><td>Totales</td>";
        $totales = array();
        foreach ($reporte as $repot) {
            foreach ($repot as $repo => $value) {
                $value = str_replace(",", "", $value);
                if (isset($totales[$repo]))
                    $totales[$repo]+=$value;
                else
                    $totales[$repo] = $value;
            }
        }
        for ($i = 1; $i < 13; $i++) {
            if (isset($totales['mes' . $i]))
                $textofila.="<td>" . $totales['mes' . $i] . "</td>";
            else
                $textofila.="<td></td>";
        }
        $textofila.="<td>$totalg</td><td>100%</td></tr>";
        $reporteg[$fila] = $textofila;
        $fila++;
        $reporteg[$fila] = '</tbody>';
        return $this->getResponse()->setContent(json_encode($reporteg));
    }

}

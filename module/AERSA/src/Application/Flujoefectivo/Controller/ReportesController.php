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
            $reporte = array();
            $flujosefectivos = \FlujoefectivoQuery::create()->filterByFlujoefectivoFecha(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-31 23:59:59'))->filterByFlujoefectivoOrigen('compra')->orderByIdcompra()->find();
            $flujoefectivo = new \Flujoefectivo();
            $pagos = array();
            $inicio = $ano . '-' . $mes . '-01 00:00:00';
            $fin = $ano . '-' . $mes . '-31 23:59:59';
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
                        $categoria = $compradetalle->getProducto()->getIdcategoria();
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
                for ($i = 1; $i < count($arraybancos2)+1; $i++) {
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
                    for ($i = 1; $i < count($arraybancos2)+1; $i++) {
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
            $template = '/flujoefectivomensual'.count($arraybancos2).'B.xlsx';
            $templateDir = $_SERVER['DOCUMENT_ROOT'] . 'application/files/jasper/templates';
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
                            'id' => 'categoria',
                            'repeat' => true,
                            'data' => $reportec,
                        ),
                        array(
                            'id' => 'total',
                            'data' => $arraytotales,
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
        $reporte = array();
        $flujosefectivos = \FlujoefectivoQuery::create()->filterByFlujoefectivoFecha(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-31 23:59:59'))->filterByFlujoefectivoOrigen('compra')->orderByIdcompra()->find();
        $flujoefectivo = new \Flujoefectivo();
        //var_dump($flujosefectivos->toArray());exit;
        $pagos = array();
        $inicio = $ano . '-' . $mes . '-01 00:00:00';
        $fin = $ano . '-' . $mes . '-31 23:59:59';
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
                    $categoria = $compradetalle->getProducto()->getIdcategoria();
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
        foreach ($objbancos as $objbanco) {
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
        for ($i = 1; $i < 13; $i++) {
            $mes = sprintf("%02d", $i);
            $flujosefectivos = \FlujoefectivoQuery::create()->filterByFlujoefectivoFecha(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-31 23:59:59'))->filterByFlujoefectivoOrigen('compra')->orderByIdcompra()->find();
            $flujoefectivo = new \Flujoefectivo();

            $inicio = $ano . '-' . $mes . '-01 00:00:00';
            $fin = $ano . '-' . $mes . '-31 23:59:59';
            foreach ($flujosefectivos as $flujoefectivo) {
                $cheque = true;
                if ($flujoefectivo->getFlujoefectivoMediodepago() == 'cheque') {
                    $fecha = $flujoefectivo->getFlujoefectivoFechacobrocheque();
                    if (!($inicio < $fecha) && ($fecha < $fin))
                        $cheque = false;
                }
                if ($cheque) {
                    if (isset($pagos[$flujoefectivo->getIdcompra()]))
                        $pagos[$i][$flujoefectivo->getIdcompra()]+=str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                    else
                        $pagos[$i][$flujoefectivo->getIdcompra()] = str_replace(",", "", $flujoefectivo->getFlujoefectivoCantidad());
                }
            }
        }

        for ($i = 1; $i < 13; $i++) {
            foreach ($pagos[$i] as $idcompra => $cantidad) {
                $saldo = number_format($cantidad, 5);
                //ya tengo todo el saldo, solo debo de iterar en los detalles de la compra y poner la cantidad y crear el array para cada categoria.
                $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($idcompra)->find();
                $compradetalle = new \Compradetalle();
                foreach ($comprasdetalles as $compradetalle) {
                    $categoria = $compradetalle->getProducto()->getIdcategoria();
                    $cantidadpagar = ($compradetalle->getProducto()->getProductoIva()) ? number_format(($compradetalle->getCompradetalleSubtotal() * $iva), 5) : number_format($compradetalle->getCompradetalleSubtotal(), 5);
                    if ($saldo >= $cantidadpagar) {
                        if (isset($reporte[$categoria]['mes' . $i]))
                            $reporte[$categoria]['mes' . $i]+= str_replace(",", "", $cantidadpagar);
                        else
                            $reporte[$categoria]['mes' . $i] = str_replace(",", "", $cantidadpagar);
                        $saldo = $saldo - $cantidadpagar;
                    } else {
                        if (isset($reporte[$categoria][$pagos[$i]['banco']]))
                            $reporte[$categoria]['mes' . $i]+= str_replace(",", "", $saldo);
                        else
                            $reporte[$categoria]['mes' . $i] = str_replace(",", "", $saldo);
                        $saldo = ($saldo - $cantidadpagar);
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
        $totalg = 0;
        foreach ($reporte as $cat) {
            foreach ($cat as $saldo) {
                $saldo = str_replace(",", "", $saldo);
                $totalg+=$saldo;
            }
        }
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

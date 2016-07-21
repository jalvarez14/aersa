<?php

namespace Application\Flujoefectivo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ReportesController extends AbstractActionController {

    public function mensualAction() {
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
        $view_model->setTemplate('/application/flujoefectivo/reportes/mensual');
        return $view_model;
    }

    public function reportemAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $mes = $this->params()->fromQuery('mes');
        $ano = $this->params()->fromQuery('ano');
        $added = array();
        $reporte = array();
        $compras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-31 23:59:59'))->find();
        $compra = new \Compra();


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
                array_push($pagos, array('idcompra' => $flujoefectivo->getIdcompra(), 'banco' => $flujoefectivo->getCuentabancaria()->getCuentabancariaBanco(), 'saldo' => $flujoefectivo->getFlujoefectivoCantidad()));
            }
        }

//        foreach ($pagos as $key1 => $key2) {
//            foreach ($key2 as $key3 => $value) {
//            }
//        }
//        exit;
        for ($i = 0; $i < count($pagos); $i++) {
            $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($pagos[$i]['idcompra'])->find();
            $compradetalle = new \Compradetalle();
            $saldo = floatval($pagos[$i]['saldo']);
            $pendiente=0;
            $cantidadpagar=0;
            
            $x=0;
            foreach ($comprasdetalles as $compradetalle) {
                $x++;
                if($x==10)
                    exit;
                do {
                    echo " iteracion ".$x."<br>";
                    echo " saldo ".$saldo."<br>";
                    echo " i ".$i."<br>";
                    echo " idcompra ".$pagos[$i]['idcompra']."<br>";
                    if($i==20)
                        exit;
                    if($saldo<0) {
                        
                        $i++;
                        $saldo=floatval($pagos[$i]['saldo']);
                        echo " aumento saldo ".$saldo."<br>";
                    }
                    if ($pendiente != 0) {
                        if ($saldo > $pendiente) {
                            if (isset($reporte[$categoria][$pagos[$i]['banco']]))
                                $reporte[$categoria][$pagos[$i]['banco']] += $pendiente;
                            else
                                $reporte[$categoria][$pagos[$i]['banco']] = $pendiente;
                            echo "asaldo   $saldo   <br>";
                            echo " pendiente   baaa$pendiente   <br>";
                                $saldo2=  floatval($saldo-$pendiente);
                            echo "dsaldo   $saldo2   <br>";
                            $saldo=$saldo2;
                            echo 6.8 - 6.8;
                            echo "if pendienteaaaa<br>";
                            $pendiente = 0;
                            $cantidadpagar= 0;
                        } else {
                            if (isset($reporte[$categoria][$pagos[$i]['banco']])) {
                                $reporte[$categoria][$pagos[$i]['banco']] += $saldo;
                                $pendiente -= $saldo;
                            } else {
                                $reporte[$categoria][$pagos[$i]['banco']] = $saldo;
                                $pendiente -= $saldo;
                            }
                            $saldo=-$pendiente;
                        }
                        
                    } else {
                        $categoria = $compradetalle->getProducto()->getIdcategoria();
                        $cantidadpagar = ($compradetalle->getProducto()->getProductoIva()) ? ($compradetalle->getCompradetalleSubtotal() * 1.16) : floatval($compradetalle->getCompradetalleSubtotal());
                        echo " cantidadpagar dentro".$cantidadpagar."<br>";
                        if ($saldo >= $cantidadpagar) {
                            echo "if<br>";
                            if (isset($reporte[$categoria][$pagos[$i]['banco']]))
                                $reporte[$categoria][$pagos[$i]['banco']] += $cantidadpagar;
                            else
                                $reporte[$categoria][$pagos[$i]['banco']] = $cantidadpagar;
                            echo "saldoif ".$saldo."<br>";
                            echo "cantidadpagarif ".$cantidadpagar."<br>";
                            echo "saldo resta antes ".$saldo."<br>";
                            echo  "cantidad $cantidadpagar<br>";
                            $saldo=$saldo-$cantidadpagar;
                            echo "saldo resta ".$saldo."<br>";
                            $cantidadpagar = 0;
                        } else {
                            echo "else<br>";
                            if (isset($reporte[$categoria][$pagos[$i]['banco']])) {
                                $reporte[$categoria][$pagos[$i]['banco']] += $saldo;
                                $pendiente = $cantidadpagar - $saldo;
                            } else {
                                $reporte[$categoria][$pagos[$i]['banco']] = $saldo;
                                $pendiente = $cantidadpagar - $saldo;
                                
                            }
                            //$cantidadpagar = $cantidadpagar - $saldo;
                            $saldo=$saldo-$cantidadpagar;
                            $cantidadpagar=$pendiente;
                        }
                    }   
                    echo " cantidadpagar ".$cantidadpagar."<br>";
                    echo " saldoa ".$saldo."<br>";
                        echo " pendiente ".$pendiente."<br>";
                        
                        echo " validacion".($cantidadpagar!= 0)."<br>";
                        echo " ------------<br>";
                } while ($cantidadpagar != 0);
            }
        }
        
        exit;
        foreach ($pagos as $idcompra => $objbanco) {

            foreach ($objbanco as $banco => $saldo) { {
                    do {
                        do {
                            if ($pendiente != 0) {
                                if ($saldo > $pendiente) {
                                    if (isset($reporte[$categoria][$banco]))
                                        $reporte[$categoria][$banco] += $pendiente;
                                    else
                                        $reporte[$categoria][$banco] = $pendiente;
                                    $pendiente = 0;
                                } else {
                                    if (isset($reporte[$categoria][$banco])) {
                                        $reporte[$categoria][$banco] += $saldo;
                                        $pendiente -= $saldo;
                                    } else {
                                        $reporte[$categoria][$banco] = $saldo;
                                        $pendiente -= $saldo;
                                    }
                                }
                                $saldo-=$pendiente;
                            } else {
                                
                            }
                        } while ($saldo >= 0 || $cantidadpagar != 0);
                        if ($saldo >= 0)
                            next($objbanco);
                    } while ($cantidadpagar != 0);
                }
            }
        }

        var_dump($reporte);
        exit;

        foreach ($flujosefectivos as $flujoefectivo) {
            $adding = true;
            $idcompra = $flujoefectivo->getIdcompra();
            $com = \CompraQuery::create()->filterByIdcompra($idcompra)->find();
            $a = true;
            foreach ($com as $com2) {
                if ($com2->getCompraEstatuspago() != "pagada")
                    $a = false;
            }
            if ($a) {
                foreach ($added as $add) {
                    if ($idcompra == $add)
                        $adding = false;
                }
                if ($adding) {
                    $flujos = \FlujoefectivoQuery::create()->filterByIdcompra($idcompra)->find();
                    $flujo = new \Flujoefectivo();
                    $band = true;
                    foreach ($flujos as $flujo) {
                        $fecha = $ano . '-' . $mes;
                        $string = $flujo->getFlujoefectivoFecha();
                        if ((substr($string, 0, strlen($fecha))) != $fecha)
                            $band = false;
                    }
                    if ($band) {
                        array_push($added, $idcompra);
                        $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($idcompra)->find();
                        $compradetalle = new \Compradetalle();
                        foreach ($comprasdetalles as $compradetalle) {
                            $key = $compradetalle->getProducto()->getIdcategoria();
                            $value = $compradetalle->getCompradetalleSubtotal();
                            if (isset($reporte[$key])) {
                                $reporte[$key] = $value + $reporte[$key];
                            } else {
                                $reporte[$key] = $value;
                            }
                        }
                    }
                }
            }
        }
//        foreach ($compras as $compra) {
//            $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
//            $compradetalle = new \Compradetalle();
//            foreach ($comprasdetalles as $compradetalle) {
//                $key = $compradetalle->getProducto()->getIdcategoria();
//                $value = $compradetalle->getCompradetalleSubtotal();
//                if (isset($reporte[$key])) {
//                    $reporte[$key] = $value + $reporte[$key];
//                } else {
//                    $reporte[$key] = $value;
//                }
//            }
//        }
        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $categoria = new \Categoria();
        $reporteg = array();
        $totalg = 0;
        foreach ($reporte as $report) {
            $totalg+=$report;
        }
        foreach ($categorias as $categoria) {
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][0] = 0;
            $total = 0;
            $subcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre($categoria->getIdcategoria())->find();
            $subcategoria = new \Categoria();
            foreach ($subcategorias as $subcategoria) {
                if (isset($reporte[$subcategoria->getIdcategoria()])) {
                    $reporteg[$subcategoria->getCategoriaNombre()][0] = $reporte[$subcategoria->getIdcategoria()];
                    $reporteg[$subcategoria->getCategoriaNombre()][1] = ($reporte[$subcategoria->getIdcategoria()] * 100) / $totalg;
                    $total+=$reporte[$subcategoria->getIdcategoria()];
                } else {
                    $reporteg[$subcategoria->getCategoriaNombre()][0] = 0;
                }
            }
            if (isset($reporte[$categoria->getIdcategoria()])) {
                $reporteg['Otros ' . $categoria->getCategoriaNombre()][0] = $reporte[$categoria->getIdcategoria()];
                $reporteg['Otros ' . $categoria->getCategoriaNombre()][1] = ($reporte[$categoria->getIdcategoria()] * 100) / $totalg;
                $total += $reporte[$categoria->getIdcategoria()];
            }
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][0] = $total;
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][1] = ($total * 100) / $totalg;
        }

        //$flujoefectivo = \FlujoefectivoQuery::create()->filterByFlujoefectivoOrigen('compra')->filterByFlujoefectivoFecha(array('min' => $ano.'-'.$mes.'-01 00:00:00','max' => $ano.'-'.$mes.'-31 23:59:59'))->find();
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
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $ano = $this->params()->fromQuery('ano');
        $added = array();
        $reporte = array();
        $compras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $ano . '-01-01 00:00:00', 'max' => $ano . '-12-31 23:59:59'))->find();
        $compra = new \Compra();
        $flujosefectivos = \FlujoefectivoQuery::create()->filterByFlujoefectivoFecha(array('min' => $ano . '-01-01 00:00:00', 'max' => $ano . '-12-31 23:59:59'))->filterByFlujoefectivoOrigen('compra')->find();
        $flujoefectivo = new \Flujoefectivo();
        foreach ($flujosefectivos as $flujoefectivo) {
            $adding = true;
            $idcompra = $flujoefectivo->getIdcompra();
            $com = \CompraQuery::create()->filterByIdcompra($idcompra)->find();
            $a = true;
            foreach ($com as $com2) {
                if ($com2->getCompraEstatuspago() != "pagada")
                    $a = false;
            }
            if ($a) {
                foreach ($added as $add) {
                    if ($idcompra == $add)
                        $adding = false;
                }
                if ($adding) {
                    $flujos = \FlujoefectivoQuery::create()->filterByIdcompra($idcompra)->find();
                    $flujo = new \Flujoefectivo();
                    $band = true;
                    foreach ($flujos as $flujo) {
                        $fecha = $ano . '-' . $mes;
                        $string = $flujo->getFlujoefectivoFecha();
                        if ((substr($string, 0, strlen($fecha))) != $fecha)
                            $band = false;
                    }
                    if ($band) {
                        array_push($added, $idcompra);
                        $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($idcompra)->find();
                        $compradetalle = new \Compradetalle();
                        foreach ($comprasdetalles as $compradetalle) {
                            $key = $compradetalle->getProducto()->getIdcategoria();
                            $value = $compradetalle->getCompradetalleSubtotal();
                            if (isset($reporte[$key])) {
                                $reporte[$key] = $value + $reporte[$key];
                            } else {
                                $reporte[$key] = $value;
                            }
                        }
                    }
                }
            }
        }

        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $categoria = new \Categoria();
        $reporteg = array();
        $totalg = 0;
        foreach ($reporte as $report) {
            $totalg+=$report;
        }
        foreach ($categorias as $categoria) {
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][0] = 0;
            $total = 0;
            $subcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre($categoria->getIdcategoria())->find();
            $subcategoria = new \Categoria();
            foreach ($subcategorias as $subcategoria) {
                if (isset($reporte[$subcategoria->getIdcategoria()])) {
                    $reporteg[$subcategoria->getCategoriaNombre()][0] = $reporte[$subcategoria->getIdcategoria()];
                    $reporteg[$subcategoria->getCategoriaNombre()][1] = ($reporte[$subcategoria->getIdcategoria()] * 100) / $totalg;
                    $total+=$reporte[$subcategoria->getIdcategoria()];
                } else {
                    $reporteg[$subcategoria->getCategoriaNombre()][0] = 0;
                }
            }
            if (isset($reporte[$categoria->getIdcategoria()])) {
                $reporteg['Otros ' . $categoria->getCategoriaNombre()][0] = $reporte[$categoria->getIdcategoria()];
                $reporteg['Otros ' . $categoria->getCategoriaNombre()][1] = ($reporte[$categoria->getIdcategoria()] * 100) / $totalg;
                $total += $reporte[$categoria->getIdcategoria()];
            }
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][0] = $total;
            $reporteg["<h5>" . $categoria->getCategoriaNombre() . "</h5>"][1] = ($total * 100) / $totalg;
        }

        return $this->getResponse()->setContent(json_encode($reporteg));
    }

}

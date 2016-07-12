<?php

namespace Application\Reportes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ReportesController extends AbstractActionController {

    public function variacioncostosAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $productos = array();
            $post_data = $request->getPost();
            $ano_inicio = $post_data['ano_inicial'];
            $mes_inicio = $post_data['mes_inicial'];
            $ano_fin = $post_data['ano_final'];
            $mes_fin = $post_data['mes_final'];
            foreach ($post_data as $key => $value) {
                if (strpos($key, '-'))
                    array_push($productos, substr($key, 9));
            }
            $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
            $reporte = array("<div align='center'><h3>" . ucfirst($empresa) . "</h3></div>");
            $reporte[1] = "<div align='center'><h3>VARIACIONES DE LOS COSTOS DEL " . $mes_inicio . "/" . $ano_inicio . " VS " . $mes_fin . "/" . $ano_fin . "</h3></div>";
            $color = true;
            $fila = 2;
            $compra = new \Compra();
            foreach ($productos as $idproducto) {
                $objproducto = \ProductoQuery::create()->findPk($idproducto);
                $nombre = $objproducto->getProductoNombre();
                $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                $compras = \CompraQuery::create()
                        ->filterByCompraFechacompra
                        (array('min' => $ano_inicio . '-' . $mes_inicio . '-01 00:00:00', 'max' => $ano_inicio . '-' . $mes_inicio . '-31 23:59:59'))->find();
                
                $total = 0;
                $cantidad = 0;
                foreach ($compras as $compra) {
                    $objcomprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->filterByIdproducto($idproducto)->find();
                    $objcompradetalle = new \Compradetalle();
                    foreach ($objcomprasdetalles as $objcompradetalle) {
                        $cantidad++;
                        $total+=$objcompradetalle->getCompradetalleCostounitario();
                    }
                }
                $costoold = ($total != 0 && $cantidad != 0) ? $total / $cantidad : 0;
                $search=$ano_fin.'-'.$mes_fin;
                
                $compras = \CompraQuery::create()
                        ->filterByCompraFechacompra
                        (array('min' => $ano_fin . '-' . $mes_fin . '-01 00:00:00', 'max' => $ano_fin . '-' . $mes_fin . '-31 23:59:59'))->find();
                $total = 0;
                $cantidad = 0;
                foreach ($compras as $compra) {
                    $objcomprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->filterByIdproducto($idproducto)->find();
                    $objcompradetalle = new \Compradetalle();
                    foreach ($objcomprasdetalles as $objcompradetalle) {
                        $cantidad++;
                        $total+=$objcompradetalle->getCompradetalleCostounitario();
                    }
                }
                $costonew = ($total != 0 && $cantidad != 0) ? $total / $cantidad : 0;
                $variacion = $costoold - $costonew;
                $variacion = ($variacion<0) ? $variacion*-1:$variacion;
                $porcentajevar = (($costonew / $costoold) * 100) - 100;
                $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                $color = !$color;
                $porcentajevar = ($costoold<$costonew)? $porcentajevar*-1: $porcentajevar;
                $porcentajevar = ($variacion==0)? 0: $porcentajevar;
                $reporte[$fila] = "<tr bgcolor='" . $bg . "'><td> " . $nombre . " </td><td> " . $unidad . " </td><td> " . $costoold . " </td><td> " . $costonew . " </td><td> " . $variacion . " </td><td> " . $porcentajevar . "% </td></tr>";
                $fila++;
            }

            $view_model = new ViewModel();
            $view_model->setVariables(array(
                'form' => $form,
                'reporte' => $reporte,
                'messages' => $this->flashMessenger(),
            ));
            $view_model->setTemplate('/application/reportes/reportes/variacioncostosreporte');
            return $view_model;
        }

        //INTANCIAMOS NUESTRA VISTA
        $min = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('asc')->findOne()->getCuentaporcobrarFecha('Y');
        $max = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('desc')->findOne()->getCuentaporcobrarFecha('Y');
        $ano_array = array();
        for ($i = $min; $i <= $max; $i++) {
            $ano_array[$i] = $i;
        }
        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $productos = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
        $form = new \Application\Reportes\Form\ReporteForm($ano_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'categorias' => $categorias,
            'productos' => $productos,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/reportes/reportes/variacioncostos');
        return $view_model;
    }

    public function reportevcaAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $mes = $this->params()->fromQuery('mes');
        $ano = $this->params()->fromQuery('ano');
        $added = array();
        $reporte = array();
        $compras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-31 23:59:59'))->find();
        $compra = new \Compra();
        $flujosefectivos = \FlujoefectivoQuery::create()->filterByFlujoefectivoFecha(array('min' => $ano . '-' . $mes . '-01 00:00:00', 'max' => $ano . '-' . $mes . '-31 23:59:59'))->filterByFlujoefectivoOrigen('compra')->find();
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
                            //echo $compradetalle->getIdcompradetalle()." precio ".$compradetalle->getCompradetalleSubtotal()." cat ".$compradetalle->getProducto()->getIdcategoria()." | ";
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
//                //echo $compradetalle->getIdcompradetalle()." precio ".$compradetalle->getCompradetalleSubtotal()." cat ".$compradetalle->getProducto()->getIdcategoria()." | ";
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
        return $this->getResponse()->setContent(json_encode($reporteg));
    }

    public function reportevcAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $productos = $this->params()->fromQuery('productos');
        $mes_inicio = $this->params()->fromQuery('imes');
        $mes_fin = $this->params()->fromQuery('fmes');
        $ano_inicio = $this->params()->fromQuery('iano');
        $ano_fin = $this->params()->fromQuery('fano');

        exit;

        return $this->getResponse()->setContent(json_encode($subcategorias));
    }

}

<?php

namespace Application\Reportes\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class CardexController extends AbstractActionController {

    public function indexAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $idalmacen=$post_data['idalmacen'];
            $ts = strtotime("now");
            $start = (date('w', $ts) == 0) ? $ts : strtotime('last monday', $ts);
            $inicio_semana=date('Y-m-d',$start);
            $fin_semana = date('Y-m-d', strtotime('next sunday', $start));
            
            $fin_semana_anterior=date('Y-m-d', strtotime('last sunday', $start));
            $fin_semana_anterior=$fin_semana_anterior." 23:59:59";
            
            $inicio_semana=$inicio_semana." 00:00:00   ";
            $fin_semana=$fin_semana." 23:59:59";
            
            //inventario anterior
            $inventario_anterior= \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->filterByIdsucursal($idsucursal)->filterByIdalmacen($idalmacen)->exists();
            if($inventario_anterior)
                $id_inventario_anterior= \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->findOne()->getIdinventariomes();
            
            $objcompras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();
            $objventas = \VentaQuery::create()->filterByVentaFechaventa(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->find();
            
            $objrequisicionesOrigen= \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->find();
            $objordentabOrigen= \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->find();
            
            $objrequisicionesDestino= \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->find();
            $objordentabDestino= \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->find();
            
            $objajusteinvSobs= \AjusteinventarioQuery::create()->filterByAjusteinventarioFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByAjusteinventarioTipo("sobrante")->find();
            $objajusteinvFals= \AjusteinventarioQuery::create()->filterByAjusteinventarioFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByAjusteinventarioTipo("faltante")->find();
            
            $objdevoluciones= \DevolucionQuery::create()->filterByDevolucionFechadevolucion(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->find();
            
            
            $bginfo = "#ADD8E6";
            $bgfila = "#F2F2F2";
            $bgfila2 = "#FFFFFF";
            $color = true;
            $objproductos= \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
            $objproducto = new \Producto();
            $reporte=array();
            foreach ($objproductos as $objproducto) {
                $nombreProducto=$objproducto->getProductoNombre();
                $unidad=$objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                $categoria=$objproducto->getCategoriaRelatedByIdcategoria()->getCategoriaNombre();
                $subcategoria=$objproducto->getCategoriaRelatedByIdsubcategoria()->getCategoriaNombre();
                $exisinicial=0;
                if($inventario_anterior) {
                    $exisinicial=\InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($objproducto->getIdproducto())->findOne()->getInventariomesdetalleStockfisico();
                }
                $compra=0;
                $totalProductoCompra=0;
                $objcompras2=$objcompras;
                foreach ($objcompras2 as $objcompra) {
                    $objcompradetalles= \CompradetalleQuery::create()
                            ->filterByIdcompra($objcompra->getIdcompra())
                            ->filterByIdalmacen($idalmacen)
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objcompradetalle=new \Compradetalle();
                    foreach ($objcompradetalles as $objcompradetalle) {
                        $compra+=$objcompradetalle->getCompradetalleCantidad();
                        $totalProductoCompra+=$objcompradetalle->getCompradetalleSubtotal();
                    }
                }
                $costoPromedio=($compra!=0&&$totalProductoCompra!=0) ? $totalProductoCompra/$compra : 0;
                $costoPromedio=($costoPromedio>0) ? $costoPromedio*-1 : $costoPromedio;
                
                $saldoIni=$costoPromedio*$exisinicial;
                array_push($reporte, "<tr bgcolor='" . $bginfo . "'><td>Producto: $nombreProducto</td><td>Unidad: $unidad</td><td>Categoria: $categoria</td><td>Subcategoria: $subcategoria</td><td>Existenica Ini $exisinicial</td><td>Saldo Ini: $saldoIni</td><td>CP: $costoPromedio</td></tr>");
                
                $objcompra=new \Compra();
                foreach ($objcompras as $objcompra) {
                    $objcompradetalles= \CompradetalleQuery::create()
                            ->filterByIdcompra($objcompra->getIdcompra())
                            ->filterByIdalmacen($idalmacen)
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objcompradetalle=new \Compradetalle();
                    foreach ($objcompradetalles as $objcompradetalle) {
                        $colorbg = ($color) ? $bgfila : $bgfila2;
                        $color = !$color;
                        $fecha=$objcompra->getCompraFechacompra('d/m/Y');
                        $folio=$objcompra->getCompraFolio();
                        $proceso="Compra";
                        $prove=$objcompra->getProveedor()->getProveedorNombrecomercial();
                        $entrada=$objcompradetalle->getCompradetalleCantidad();
                        $exisinicial+=$objcompradetalle->getCompradetalleCantidad();
                        $entradaefec=$objcompradetalle->getCompradetalleCantidad()*$costoPromedio;
                        $saldoIni+=$objcompradetalle->getCompradetalleCantidad()*$costoPromedio;
                        array_push($reporte, "<tr bgcolor='".$colorbg."'><td>$fecha</td><td>$folio</td><td>$proceso</td><td>$prove</td><td>$entrada</td><td></td><td>$exisinicial</td><td>$entradaefec</td><td></td><td>$saldoIni</td><td>$costoPromedio</td></tr>");
                    }
                }
                //array_push($reporte, "<tr bgcolor='".$colorbg."'><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>");
                $objrequisicion= new \Requisicion();
                foreach ($objrequisicionesDestino as $objrequisicion) {
                    $objrequisiciondetalles= \RequisiciondetalleQuery::create()
                            ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objrequisiciondetalle = new \Requisiciondetalle();
                    foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                        $colorbg = ($color) ? $bgfila : $bgfila2;
                        $color = !$color;
                        $fecha=$objrequisicion->getRequisicionFecha('d/m/Y');
                        $folio=$objrequisicion->getRequisicionFolio();
                        $proceso="Requisicion";
                        $prove="";
                        $entrada=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                        $exisinicial+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                        $entradaefec=$objrequisiciondetalle->getRequisiciondetalleCantidad()*$costoPromedio;
                        $saldoIni+=$objrequisiciondetalle->getRequisiciondetalleCantidad()*$costoPromedio;
                        array_push($reporte, "<tr bgcolor='".$colorbg."'><td>$fecha</td><td>$folio</td><td>$proceso</td><td>$prove</td><td>$entrada</td><td></td><td>$exisinicial</td><td>$entradaefec</td><td></td><td>$saldoIni</td><td>$costoPromedio</td></tr>");
                    }
                }
                
                $objordentab= new \Ordentablajeria();
                foreach ($objordentabDestino as $objordentab) {
                    $objordentabdetalles= \OrdentablajeriadetalleQuery::create()
                            ->filterByIdordentablajeria($objordentab->getIdordentablajeria())
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objordentabdetalle = new \Ordentablajeriadetalle();
                    foreach ($objordentabdetalles as $objordentabdetalle) {
                        $colorbg = ($color) ? $bgfila : $bgfila2;
                        $color = !$color;
                        $fecha=$objordentab->getOrdentablajeriaFecha('d/m/Y');
                        $folio=$objordentab->getOrdentablajeriaFolio();
                        $proceso="Orden tablajeria";
                        $prove="";
                        $entrada=$objordentabdetalle->getOrdentablajeriadetalleCantidad();
                        $exisinicial+=$objordentabdetalle->getOrdentablajeriadetalleCantidad();
                        $entradaefec=$objordentabdetalle->getOrdentablajeriadetalleCantidad()*$costoPromedio;
                        $saldoIni+=$objordentabdetalle->getOrdentablajeriadetalleCantidad()*$costoPromedio;
                        array_push($reporte, "<tr bgcolor='".$colorbg."'><td>$fecha</td><td>$folio</td><td>$proceso</td><td>$prove</td><td>$entrada</td><td></td><td>$exisinicial</td><td>$entradaefec</td><td></td><td>$saldoIni</td><td>$costoPromedio</td></tr>");
                    }
                }
                
                $objajusteinvSob= new \Ajusteinventario();
                foreach ($objajusteinvSobs as $objajusteinvSob) {
                        if($objajusteinvSob->getIdproducto()==$objproducto->getIdproducto()) {
                        $colorbg = ($color) ? $bgfila : $bgfila2;
                        $color = !$color;
                        $fecha=$objajusteinvSob->getAjusteinventarioFecha('d/m/Y');
                        $folio=$objajusteinvSob->getIdajusteinventario();
                        $proceso="Ajuste inv";
                        $prove="";
                        $entrada=$objajusteinvSob->getAjusteinventarioCantidad();
                        $exisinicial+=$objajusteinvSob->getAjusteinventarioCantidad();
                        $entradaefec=$objajusteinvSob->getAjusteinventarioCantidad()*$costoPromedio;
                        $saldoIni+=$objajusteinvSob->getAjusteinventarioCantidad()*$costoPromedio;
                        array_push($reporte, "<tr bgcolor='".$colorbg."'><td>$fecha</td><td>$folio</td><td>$proceso</td><td>$prove</td><td>$entrada</td><td></td><td>$exisinicial</td><td>$entradaefec</td><td></td><td>$saldoIni</td><td>$costoPromedio</td></tr>");
                        }
                }
                
                $objventa = new \Venta();
                foreach ($objventas as $objventa) {
                    $objventadetalles = \VentadetalleQuery::create()
                            ->filterByIdventa($objventa->getIdventa())
                            ->filterByIdalmacen($idalmacen)
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objventadetalle = new \Ventadetalle();
                    foreach ($objventadetalles as $objventadetalle) {
                        $colorbg = ($color) ? $bgfila : $bgfila2;
                        $color = !$color;
                        $fecha=$objventa->getVentaFechaventa('d/m/Y');
                        $folio=$objventa->getVentaFolio();
                        $proceso="Venta";
                        $prove="";
                        $salida=$objventadetalle->getVentadetalleCantidad();
                        $exisinicial-=$objventadetalle->getVentadetalleCantidad();
                        $salidaefec=$objventadetalle->getVentadetalleCantidad()*$costoPromedio;
                        $saldoIni-=$objventadetalle->getVentadetalleCantidad()*$costoPromedio;
                        array_push($reporte, "<tr bgcolor='".$colorbg."'><td>$fecha</td><td>$folio</td><td>$proceso</td><td>$prove</td><td></td><td>$salida</td><td>$exisinicial</td><td></td><td>$salidaefec</td><td>$saldoIni</td><td>$costoPromedio</td></tr>");
                    }
                }
                
                $objrequisicion= new \Requisicion();
                foreach ($objrequisicionesOrigen as $objrequisicion) {
                    $objrequisiciondetalles= \RequisiciondetalleQuery::create()
                            ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                            ->filterByIdpadre(NULL)
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objrequisiciondetalle = new \Requisiciondetalle();
                    foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                        $colorbg = ($color) ? $bgfila : $bgfila2;
                        $color = !$color;
                        $fecha=$objrequisicion->getRequisicionFecha('d/m/Y');
                        $folio=$objrequisicion->getRequisicionFolio();
                        $proceso="Requisicion";
                        $prove="";
                        $salida=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                        $exisinicial-=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                        $salidaefec=$objrequisiciondetalle->getRequisiciondetalleCantidad()*$costoPromedio;
                        $saldoIni-=$objrequisiciondetalle->getRequisiciondetalleCantidad()*$costoPromedio;
                        array_push($reporte, "<tr bgcolor='".$colorbg."'><td>$fecha</td><td>$folio</td><td>$proceso</td><td>$prove</td><td></td><td>$salida</td><td>$exisinicial</td><td></td><td>$salidaefec</td><td>$saldoIni</td><td>$costoPromedio</td></tr>");
                    }
                }
                
                $objordentab= new \Ordentablajeria();
                foreach ($objordentabOrigen as $objordentab) {
                    $objordentabdetalles= \OrdentablajeriadetalleQuery::create()
                            ->filterByIdordentablajeria($objordentab->getIdordentablajeria())
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objordentabdetalle = new \Ordentablajeriadetalle();
                    foreach ($objordentabdetalles as $objordentabdetalle) {
                        $colorbg = ($color) ? $bgfila : $bgfila2;
                        $color = !$color;
                        $fecha=$objordentab->getOrdentablajeriaFecha('d/m/Y');
                        $folio=$objordentab->getOrdentablajeriaFolio();
                        $proceso="Orden tablajeria";
                        $prove="";
                        $salida=$objordentabdetalle->getOrdentablajeriadetalleCantidad();
                        $exisinicial-=$objordentabdetalle->getOrdentablajeriadetalleCantidad();
                        $salidaefec=$objordentabdetalle->getOrdentablajeriadetalleCantidad()*$costoPromedio;
                        $saldoIni-=$objordentabdetalle->getOrdentablajeriadetalleCantidad()*$costoPromedio;
                        array_push($reporte, "<tr bgcolor='".$colorbg."'><td>$fecha</td><td>$folio</td><td>$proceso</td><td>$prove</td><td></td><td>$salida</td><td>$exisinicial</td><td></td><td>$salidaefec</td><td>$saldoIni</td><td>$costoPromedio</td></tr>");
                    }
                }
                
                $objdevolucion= new \Devolucion();
                foreach ($objdevoluciones as $objdevolucion) {
                    $objdevoluciondetalles = \DevoluciondetalleQuery::create()
                            ->filterByIddevolucion($objdevolucion->getIddevolucion())
                            ->filterByIdalmacen($idalmacen)
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                    $objdevoluciondetalle = new \Devoluciondetalle();
                    foreach ($objdevoluciondetalles as $objdevoluciondetalle) {
                        $colorbg = ($color) ? $bgfila : $bgfila2;
                        $color = !$color;
                        $fecha=$objdevolucion->getDevolucionFechadevolucion('d/m/Y');
                        $folio=$objdevolucion->getDevolucionFolio();
                        $proceso="Devolucion";
                        $prove="";
                        $salida=$objdevoluciondetalle->getDevoluciondetalleCantidad();
                        $exisinicial-=$objdevoluciondetalle->getDevoluciondetalleCantidad();
                        $salidaefec=$objdevoluciondetalle->getDevoluciondetalleCantidad()*$costoPromedio;
                        $saldoIni-=$objdevoluciondetalle->getDevoluciondetalleCantidad()*$costoPromedio;
                        array_push($reporte, "<tr bgcolor='".$colorbg."'><td>$fecha</td><td>$folio</td><td>$proceso</td><td>$prove</td><td></td><td>$salida</td><td>$exisinicial</td><td></td><td>$salidaefec</td><td>$saldoIni</td><td>$costoPromedio</td></tr>");
                    }
                }
                
                $objajusteinvFal= new \Ajusteinventario();
                foreach ($objajusteinvFals as $objajusteinvFal) {
                        if($objajusteinvFal->getIdproducto()==$objproducto->getIdproducto()) {
                        $colorbg = ($color) ? $bgfila : $bgfila2;
                        $color = !$color;
                        $fecha=$objajusteinvFal->getAjusteinventarioFecha('d/m/Y');
                        $folio=$objajusteinvFal->getIdajusteinventario();
                        $proceso="Ajuste inv";
                        $prove="";
                        $salida=$objajusteinvFal->getAjusteinventarioCantidad();
                        $exisinicial-=$objajusteinvFal->getAjusteinventarioCantidad();
                        $salidaefec=$objajusteinvFal->getAjusteinventarioCantidad()*$costoPromedio;
                        $saldoIni+=$objajusteinvFal->getAjusteinventarioCantidad()*$costoPromedio;
                        array_push($reporte, "<tr bgcolor='".$colorbg."'><td>$fecha</td><td>$folio</td><td>$proceso</td><td>$prove</td><td></td><td>$salida</td><td>$exisinicial</td><td></td><td>$salidaefec</td><td>$saldoIni</td><td>$costoPromedio</td></tr>");
                        }
                }
                
            }
            
            return $this->getResponse()->setContent(json_encode($reporte));
            var_dump($reporte);exit;
            
        }
        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL---
        //$collection = \CuentabancariaQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();

        //INTANCIAMOS NUESTRA VISTA        
        $almacen_array = array();
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->find();
        foreach ($almacenes as $almacen) {
            $id = $almacen->getIdalmacen();
            $almacen_array[$id] = $almacen->getAlmacenNombre();
        }
        
        $auditor_array = array();
        $usuarios= \UsuarioQuery::create()->filterByIdrol(4)->useUsuariosucursalQuery()->filterByIdsucursal($idsucursal)->endUse()->find();
        $usuario = new \Usuario();
        foreach ($usuarios as $usuario) {
            $id = $usuario->getIdusuario();
            $auditor_array[$id] = $usuario->getUsuarioNombre();
        }
        
        
        $ts = strtotime("now");
        $start = (date('w', $ts) == 0) ? $ts : strtotime('last monday', $ts);
        //dia inicio de semana date('Y-m-d',$start);
        $fecha = date('Y-m-d', strtotime('next sunday', $start));
        
        $form = new \Application\Reportes\Form\CardexForm($fecha,$almacen_array,$auditor_array);
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/reportes/cardex/index');
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }


    public function almacenAction() {
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $idalmacen=$post_data['idalmacen'];
            if(\AlmacenQuery::create()->filterByIdalmacen($idalmacen)->exists())
                $nombre=  \AlmacenQuery::create()->filterByIdalmacen($idalmacen)->findOne()->getAlmacenEncargado();
            else
               $nombre="";
            return $this->getResponse()->setContent(json_encode($nombre));
        }
    }
}

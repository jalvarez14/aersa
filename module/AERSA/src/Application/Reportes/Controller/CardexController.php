<?php

namespace Application\Reportes\Controller;

include getcwd() . '/vendor/jasper/phpreport/PHPReport.php';

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
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $archivo = false;
            if (isset($post_data['generar_excel']) || isset($post_data['generar_pdf'])) {
                $alm = array();
                $post_data['inicio'] = $post_data['fecha_inicio'];
                $post_data['fin'] = $post_data['fecha_fin'];
                $archivo = true;
                foreach ($post_data as $key => $value) {
                    if (strpos($key, '-'))
                        array_push($alm, substr($key, 4));
                }
                $post_data['almacenes'] = $alm;
            }
            $reporte = array();
            $reporteHead = array();
            foreach ($post_data['almacenes'] as $idalmacen) {
                $inicioSpli = explode('/', $post_data['inicio']);
                $finSpli = explode('/', $post_data['fin']);

                $inicio_semana = $inicioSpli[2] . "-" . $inicioSpli[1] . "-" . $inicioSpli[0] . " 00:00:00   ";
                $fin_semana = $finSpli[2] . "-" . $finSpli[1] . "-" . $finSpli[0] . " 23:59:59";

                $fin_semana_anterior = date('Y-m-d', strtotime('last sunday', strtotime($inicioSpli[2] . "-" . $inicioSpli[1] . "-" . $inicioSpli[0])));
                $fin_semana_anterior = $fin_semana_anterior . " 23:59:59";

                //inventario anterior
                $inventario_anterior = \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->filterByIdsucursal($idsucursal)->filterByIdalmacen($idalmacen)->exists();
                if ($inventario_anterior)
                    $id_inventario_anterior = \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->filterByIdsucursal($idsucursal)->filterByIdalmacen($idalmacen)->findOne()->getIdinventariomes();

                $objcompras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();
                $sqlcompras = "⁠⁠⁠select count(idcompra) from compra where idcompra in (SELECT idcompra FROM `compradetalle` WHERE idproducto=24022 and idalmacen=$idalmacen) and '$inicio_semana'<=compra_fechacompra and compra_fechacompra>= '$fin_semana' and idsucursal=$idsucursal;";

                $objventas = \VentaQuery::create()->filterByVentaFechaventa(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->find();
                $sqlventas = "⁠⁠⁠select count(idventa) from venta where idventa in (SELECT idventa FROM `ventadetalle` WHERE idproducto=24022 and idalmacen=$idalmacen) and '$inicio_semana'<=venta_fechaventa and venta_fechaventa>= '$fin_semana' and idsucursal=$idsucursal;";

                $objrequisicionesOrigen = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->find();
                $sqlrequisiciones = "⁠⁠⁠select count(idrequisicion) from requisicion where idrequisicion in (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=24022) and idalmacenorigen=$idalmacen and '$inicio_semana'<=requisicion_fecha and requisicion_fecha>= '$fin_semana'  and idsucursalorigen=$idsucursal;";

                $objordentabOrigen = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->find();
                $sqlordentab = "";

                $objrequisicionesDestino = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->find();
                $sqlrequisicionesDestino = "";

                $objordentabDestino = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->find();
                $sqlordentabDestino = "";

                $objajusteinvSobs = \AjusteinventarioQuery::create()->filterByAjusteinventarioFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByAjusteinventarioTipo("sobrante")->find();
                $sqlajusteinvSobs = "";

                $objajusteinvFals = \AjusteinventarioQuery::create()->filterByAjusteinventarioFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByAjusteinventarioTipo("faltante")->find();
                $sqlajusteinvFals = "";

                $objdevoluciones = \DevolucionQuery::create()->filterByDevolucionFechadevolucion(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->find();
                $sqldevoluciones = "";

                $bginfo = "#ADD8E6";
                $bgfila = "#F2F2F2";
                $bgfila2 = "#FFFFFF";
                $color = true;
                $objproductos = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
                $objproducto = new \Producto();
                
                foreach ($objproductos as $objproducto) {
                    $pedido = true;
                    if (isset($post_data['productos'])) {
                        if (in_array($objproducto->getIdproducto(), $post_data['productos'])) 
                            $pedido = true;
                        else
                            $pedido = false;
                    }

                    if ($pedido) {
                        $reporteProcesos = array();
                        $nombreProducto = $objproducto->getProductoNombre();
                        $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                        $categoria = $objproducto->getCategoriaRelatedByIdcategoria()->getCategoriaNombre();
                        $subcategoria = $objproducto->getCategoriaRelatedByIdsubcategoria()->getCategoriaNombre();
                        $exisinicial = 0;

                        if ($inventario_anterior) {
                            $exisinicial2 = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($objproducto->getIdproducto())->exists();
                            if ($exisinicial2)
                                $exisinicial = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($objproducto->getIdproducto())->findOne()->getInventariomesdetalleStockfisico();
                        }
                        $compra = 0;
                        $totalProductoCompra = 0;
                        $objcompras2 = $objcompras;
                        foreach ($objcompras2 as $objcompra) {
                            $objcompradetalles = \CompradetalleQuery::create()
                                    ->filterByIdcompra($objcompra->getIdcompra())
                                    ->filterByIdalmacen($idalmacen)
                                    ->filterByIdproducto($objproducto->getIdproducto())
                                    ->find();
                            $objcompradetalle = new \Compradetalle();
                            foreach ($objcompradetalles as $objcompradetalle) {
                                $compra+=$objcompradetalle->getCompradetalleCantidad();
                                $totalProductoCompra+=$objcompradetalle->getCompradetalleSubtotal();
                            }
                        }
                        $costoPromedio = ($compra != 0 && $totalProductoCompra != 0) ? $totalProductoCompra / $compra : 0;
                        $costoPromedio = ($costoPromedio < 0) ? $costoPromedio * -1 : $costoPromedio;
                        $rowhead=0;
                        if ($objproducto->getProductoTipo() == 'subreceta' && $exisinicial != 0) {
                            $recetasObj = \RecetaQuery::create()->filterByIdproducto($objproducto->getIdproducto())->find();
                            $recetaObj = new \Receta();
                            foreach ($recetasObj as $recetaObj) {
                                if (isset($post_data['productos'])) {
                                    if (in_array($recetaObj->getIdproductoreceta(), $post_data['productos'])) {
                                        if (isset($reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'])) {
                                            $recini = $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'];
                                            $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'] = $recini + ($recetaObj->getRecetaCantidad() * $exisinicial);
                                        } else {
                                            $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'] = ($recetaObj->getRecetaCantidad() * $exisinicial);
                                        }
                                    }
                                } else {
                                    if (isset($reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'])) {
                                        $recini = $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'];
                                        $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'] = $recini + ($recetaObj->getRecetaCantidad() * $exisinicial);
                                    } else {
                                        $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'] = ($recetaObj->getRecetaCantidad() * $exisinicial);
                                    }
                                }
                            }
                            $exisinicial = 0;
                        }
                        $saldoIni = $costoPromedio * $exisinicial;
                        
                        $reporteHead[$idalmacen][$objproducto->getIdproducto()]['producto'] = $nombreProducto;
                        $reporteHead[$idalmacen][$objproducto->getIdproducto()]['unidad'] = $unidad;
                        $reporteHead[$idalmacen][$objproducto->getIdproducto()]['categoria'] = $categoria;
                        $reporteHead[$idalmacen][$objproducto->getIdproducto()]['subcategoria'] = $subcategoria;
                        $reporteHead[$idalmacen][$objproducto->getIdproducto()]['existenciaIni'] = $exisinicial;
                        $reporteHead[$idalmacen][$objproducto->getIdproducto()]['saldoIni'] = $saldoIni;
                        $reporteHead[$idalmacen][$objproducto->getIdproducto()]['cp'] = $costoPromedio;
                        $reporteHead[$idalmacen][$objproducto->getIdproducto()]['saldoIni'] = $saldoIni;
                        $row = 0;
                        $objcompra = new \Compra();
                        foreach ($objcompras as $objcompra) {
                            $objcompradetalles = \CompradetalleQuery::create()
                                    ->filterByIdcompra($objcompra->getIdcompra())
                                    ->filterByIdalmacen($idalmacen)
                                    ->filterByIdproducto($objproducto->getIdproducto())
                                    ->find();
                            $objcompradetalle = new \Compradetalle();
                            foreach ($objcompradetalles as $objcompradetalle) {
                                $colorbg = ($color) ? $bgfila : $bgfila2;
                                $color = !$color;
                                $fecha = $objcompra->getCompraFechacompra('d/m/Y');
                                $folio = $objcompra->getCompraFolio();
                                $proceso = "Compra";
                                $prove = $objcompra->getProveedor()->getProveedorNombrecomercial();
                                $entrada = $objcompradetalle->getCompradetalleCantidad();
                                $exisinicial+=$objcompradetalle->getCompradetalleCantidad();
                                $entradaefec = $objcompradetalle->getCompradetalleCantidad() * $costoPromedio;
                                $saldoIni+=$objcompradetalle->getCompradetalleCantidad() * $costoPromedio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['fecha'] = $fecha;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['folio'] = $folio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['proceso'] = $proceso;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['prove'] = $prove;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entrada'] = $entrada;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salida'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['exisinicial'] = $exisinicial;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entradaefec'] = $entradaefec;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salidaefec'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['saldoIni'] = $saldoIni;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                $row++;
                            }
                        }

                        $objrequisicion = new \Requisicion();
                        foreach ($objrequisicionesDestino as $objrequisicion) {
                            $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                    ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                    ->filterByIdproducto($objproducto->getIdproducto())
                                    ->find();
                            $objrequisiciondetalle = new \Requisiciondetalle();
                            foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                                $colorbg = ($color) ? $bgfila : $bgfila2;
                                $color = !$color;
                                $fecha = $objrequisicion->getRequisicionFecha('d/m/Y');
                                $folio = $objrequisicion->getRequisicionFolio();
                                $proceso = "Requisicion";
                                $prove = "";
                                $entrada = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                $exisinicial+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                $entradaefec = $objrequisiciondetalle->getRequisiciondetalleCantidad() * $costoPromedio;
                                $saldoIni+=$objrequisiciondetalle->getRequisiciondetalleCantidad() * $costoPromedio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['fecha'] = $fecha;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['folio'] = $folio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['proceso'] = $proceso;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['prove'] = $prove;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entrada'] = $entrada;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salida'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['exisinicial'] = $exisinicial;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entradaefec'] = $entradaefec;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salidaefec'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['saldoIni'] = $saldoIni;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                $row++;
                            }
                        }

                        $objordentab = new \Ordentablajeria();
                        foreach ($objordentabDestino as $objordentab) {
                            $objordentabdetalles = \OrdentablajeriadetalleQuery::create()
                                    ->filterByIdordentablajeria($objordentab->getIdordentablajeria())
                                    ->filterByIdproducto($objproducto->getIdproducto())
                                    ->find();
                            $objordentabdetalle = new \Ordentablajeriadetalle();
                            foreach ($objordentabdetalles as $objordentabdetalle) {
                                $colorbg = ($color) ? $bgfila : $bgfila2;
                                $color = !$color;
                                $fecha = $objordentab->getOrdentablajeriaFecha('d/m/Y');
                                $folio = $objordentab->getOrdentablajeriaFolio();
                                $proceso = "Orden tablajeria";
                                $prove = "";
                                $entrada = $objordentabdetalle->getOrdentablajeriadetalleCantidad();
                                $exisinicial+=$objordentabdetalle->getOrdentablajeriadetalleCantidad();
                                $entradaefec = $objordentabdetalle->getOrdentablajeriadetalleCantidad() * $costoPromedio;
                                $saldoIni+=$objordentabdetalle->getOrdentablajeriadetalleCantidad() * $costoPromedio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['fecha'] = $fecha;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['folio'] = $folio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['proceso'] = $proceso;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['prove'] = $prove;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entrada'] = $entrada;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salida'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['exisinicial'] = $exisinicial;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entradaefec'] = $entradaefec;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salidaefec'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['saldoIni'] = $saldoIni;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                $row++;
                            }
                        }

                        $objajusteinvSob = new \Ajusteinventario();
                        foreach ($objajusteinvSobs as $objajusteinvSob) {
                            if ($objajusteinvSob->getIdproducto() == $objproducto->getIdproducto()) {
                                $colorbg = ($color) ? $bgfila : $bgfila2;
                                $color = !$color;
                                $fecha = $objajusteinvSob->getAjusteinventarioFecha('d/m/Y');
                                $folio = $objajusteinvSob->getIdajusteinventario();
                                $proceso = "Ajuste inv";
                                $prove = "";
                                $entrada = $objajusteinvSob->getAjusteinventarioCantidad();
                                $exisinicial+=$objajusteinvSob->getAjusteinventarioCantidad();
                                $entradaefec = $objajusteinvSob->getAjusteinventarioCantidad() * $costoPromedio;
                                $saldoIni+=$objajusteinvSob->getAjusteinventarioCantidad() * $costoPromedio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['fecha'] = $fecha;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['folio'] = $folio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['proceso'] = $proceso;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['prove'] = $prove;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entrada'] = $entrada;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salida'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['exisinicial'] = $exisinicial;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entradaefec'] = $entradaefec;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salidaefec'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['saldoIni'] = $saldoIni;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                $row++;
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
                                $fecha = $objventa->getVentaFechaventa('d/m/Y');
                                $folio = $objventa->getVentaFolio();
                                $proceso = "Venta";
                                $prove = "";
                                $salida = $objventadetalle->getVentadetalleCantidad();
                                $exisinicial-=$objventadetalle->getVentadetalleCantidad();
                                $salidaefec = $objventadetalle->getVentadetalleCantidad() * $costoPromedio;
                                $saldoIni-=$objventadetalle->getVentadetalleCantidad() * $costoPromedio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['fecha'] = $fecha;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['folio'] = $folio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['proceso'] = $proceso;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['prove'] = $prove;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entrada'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salida'] = $salida;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['exisinicial'] = $exisinicial;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entradaefec'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salidaefec'] = $salidaefec;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['saldoIni'] = $saldoIni;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                $row++;
                            }
                        }

                        $objrequisicion = new \Requisicion();
                        foreach ($objrequisicionesOrigen as $objrequisicion) {
                            $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                    ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                    ->filterByIdpadre(NULL)
                                    ->filterByIdproducto($objproducto->getIdproducto())
                                    ->find();
                            $objrequisiciondetalle = new \Requisiciondetalle();
                            foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                                $colorbg = ($color) ? $bgfila : $bgfila2;
                                $color = !$color;
                                $fecha = $objrequisicion->getRequisicionFecha('d/m/Y');
                                $folio = $objrequisicion->getRequisicionFolio();
                                $proceso = "Requisicion";
                                $prove = "";
                                $salida = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                $exisinicial-=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                $salidaefec = $objrequisiciondetalle->getRequisiciondetalleCantidad() * $costoPromedio;
                                $saldoIni-=$objrequisiciondetalle->getRequisiciondetalleCantidad() * $costoPromedio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['fecha'] = $fecha;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['folio'] = $folio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['proceso'] = $proceso;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['prove'] = $prove;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entrada'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salida'] = $salida;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['exisinicial'] = $exisinicial;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entradaefec'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salidaefec'] = $salidaefec;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['saldoIni'] = $saldoIni;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                $row++;
                            }
                        }

                        $objordentab = new \Ordentablajeria();
                        foreach ($objordentabOrigen as $objordentab) {
                            $objordentabdetalles = \OrdentablajeriadetalleQuery::create()
                                    ->filterByIdordentablajeria($objordentab->getIdordentablajeria())
                                    ->filterByIdproducto($objproducto->getIdproducto())
                                    ->find();
                            $objordentabdetalle = new \Ordentablajeriadetalle();
                            foreach ($objordentabdetalles as $objordentabdetalle) {
                                $colorbg = ($color) ? $bgfila : $bgfila2;
                                $color = !$color;
                                $fecha = $objordentab->getOrdentablajeriaFecha('d/m/Y');
                                $folio = $objordentab->getOrdentablajeriaFolio();
                                $proceso = "Orden tablajeria";
                                $prove = "";
                                $salida = $objordentabdetalle->getOrdentablajeriadetalleCantidad();
                                $exisinicial-=$objordentabdetalle->getOrdentablajeriadetalleCantidad();
                                $salidaefec = $objordentabdetalle->getOrdentablajeriadetalleCantidad() * $costoPromedio;
                                $saldoIni-=$objordentabdetalle->getOrdentablajeriadetalleCantidad() * $costoPromedio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['fecha'] = $fecha;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['folio'] = $folio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['proceso'] = $proceso;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['prove'] = $prove;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entrada'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salida'] = $salida;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['exisinicial'] = $exisinicial;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entradaefec'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salidaefec'] = $salidaefec;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['saldoIni'] = $saldoIni;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                $row++;
                            }
                        }

                        $objdevolucion = new \Devolucion();
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
                                $fecha = $objdevolucion->getDevolucionFechadevolucion('d/m/Y');
                                $folio = $objdevolucion->getDevolucionFolio();
                                $proceso = "Devolucion";
                                $prove = "";
                                $salida = $objdevoluciondetalle->getDevoluciondetalleCantidad();
                                $exisinicial-=$objdevoluciondetalle->getDevoluciondetalleCantidad();
                                $salidaefec = $objdevoluciondetalle->getDevoluciondetalleCantidad() * $costoPromedio;
                                $saldoIni-=$objdevoluciondetalle->getDevoluciondetalleCantidad() * $costoPromedio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['fecha'] = $fecha;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['folio'] = $folio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['proceso'] = $proceso;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['prove'] = $prove;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entrada'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salida'] = $salida;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['exisinicial'] = $exisinicial;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entradaefec'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salidaefec'] = $salidaefec;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['saldoIni'] = $saldoIni;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                $row++;
                            }
                        }

                        $objajusteinvFal = new \Ajusteinventario();
                        foreach ($objajusteinvFals as $objajusteinvFal) {
                            if ($objajusteinvFal->getIdproducto() == $objproducto->getIdproducto()) {
                                $colorbg = ($color) ? $bgfila : $bgfila2;
                                $color = !$color;
                                $fecha = $objajusteinvFal->getAjusteinventarioFecha('d/m/Y');
                                $folio = $objajusteinvFal->getIdajusteinventario();
                                $proceso = "Ajuste inv";
                                $prove = "";
                                $salida = $objajusteinvFal->getAjusteinventarioCantidad();
                                $exisinicial-=$objajusteinvFal->getAjusteinventarioCantidad();
                                $salidaefec = $objajusteinvFal->getAjusteinventarioCantidad() * $costoPromedio;
                                $saldoIni+=$objajusteinvFal->getAjusteinventarioCantidad() * $costoPromedio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['fecha'] = $fecha;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['folio'] = $folio;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['proceso'] = $proceso;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['prove'] = $prove;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entrada'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salida'] = $salida;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['exisinicial'] = $exisinicial;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['entradaefec'] = '';
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['salidaefec'] = $salidaefec;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['saldoIni'] = $saldoIni;
                                $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                $row++;
                            }
                        }
                    }
                }
            }
            foreach ($post_data['almacenes'] as $idalmacen) {
                $objproductos = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
                $objproducto = new \Producto();
                $nombreAlmacen = \AlmacenQuery::create()->filterByIdalmacen($idalmacen)->findOne()->getAlmacenNombre();
                if ($archivo)
                    array_push($reporte, array('uno' => 'Almacen:', 'dos' => $nombreAlmacen, 'tres' => '', 'cuatro' => '', 'cinco' => '', 'seis' => '', 'siete' => '', 'ocho' => '', 'nueve' => '', 'diez' => '', 'once' => ''));
                else
                    array_push($reporte, "<tr><td>Almacen:</td><td>$nombreAlmacen</td></tr>");
                foreach ($objproductos as $objproducto) {
                    $pedido = true;
                    if (isset($post_data['productos'])) {
                        if (in_array($objproducto->getIdproducto(), $post_data['productos']))
                            $pedido = true;
                        else
                            $pedido = false;
                    }

                    if ($pedido) {
                        $nombreProducto = $reporteHead[$idalmacen][$objproducto->getIdproducto()]['producto'];
                        $unidad = $reporteHead[$idalmacen][$objproducto->getIdproducto()]['unidad'];
                        $categoria = $reporteHead[$idalmacen][$objproducto->getIdproducto()]['categoria'];
                        $subcategoria = $reporteHead[$idalmacen][$objproducto->getIdproducto()]['subcategoria'];
                        $exisinicial = $reporteHead[$idalmacen][$objproducto->getIdproducto()]['existenciaIni'];
                        $saldoIni = $reporteHead[$idalmacen][$objproducto->getIdproducto()]['saldoIni'];
                        $costoPromedio = $reporteHead[$idalmacen][$objproducto->getIdproducto()]['cp'];
                        $saldoIni = $reporteHead[$idalmacen][$objproducto->getIdproducto()]['saldoIni'];
                        if ($archivo)
                            array_push($reporte, array('uno' => 'Producto:', 'dos' => $nombreProducto, 'tres' => 'Unidad:' . $unidad, 'cuatro' => 'Categoria:', 'cinco' => $categoria, 'seis' => 'Subcategoria:', 'siete' => $subcategoria, 'ocho' => 'Existencia Ini: ' . $exisinicial, 'nueve' => 'Saldo Ini: ' . $saldoIni, 'diez' => 'CP: ' . $costoPromedio, 'once' => ''));
                        else
                            array_push($reporte, "<tr bgcolor='" . $bginfo . "'><td>Producto: $nombreProducto</td><td>Unidad: $unidad</td><td>Categoria: $categoria</td><td>Subcategoria: $subcategoria</td><td>Existenica Ini $exisinicial</td><td>Saldo Ini: $saldoIni</td><td>CP: $costoPromedio</td></tr>");
                        if (isset($reporteProce[$idalmacen][$objproducto->getIdproducto()])) {
                            foreach ($reporteProce[$idalmacen][$objproducto->getIdproducto()] as $reporte2) {
                                $fecha = $reporte2['fecha'];
                                $folio = $reporte2['folio'];
                                $proceso = $reporte2['proceso'];
                                $prove = $reporte2['prove'];
                                $entrada = $reporte2['entrada'];
                                $salida = $reporte2['salida'];
                                $exisinicial = $reporte2['exisinicial'];
                                $entradaefec = $reporte2['entradaefec'];
                                $salidaefec = $reporte2['salidaefec'];
                                $saldoIni = $reporte2['saldoIni'];
                                $costoPromedio = $reporte2['costoPromedio'];
                                if ($archivo)
                                    array_push($reporte, array('uno' => $fecha, 'dos' => $folio, 'tres' => $proceso, 'cuatro' => $prove, 'cinco' => $entrada, 'seis' => $salida, 'siete' => $exisinicial, 'ocho' => $entradaefec, 'nueve' => $salidaefec, 'diez' => $saldoIni, 'once' => $costoPromedio));
                                else
                                    array_push($reporte, "<tr bgcolor='" . $colorbg . "'><td>$fecha</td><td>$folio</td><td>$proceso</td><td>$prove</td><td>$entrada</td><td>$salida</td><td>$exisinicial</td><td>$entradaefec</td><td>$salidaefec</td><td>$saldoIni</td><td>$costoPromedio</td></tr>");
                            }
                        }
                    }
                }
            }
            if ($archivo) {
                $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
                $template = '/kardex.xlsx';
                $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';

                $config = array(
                    'template' => $template,
                    'templateDir' => $templateDir
                );
                $R = new \PHPReport($config);
                $R->load(array(
                    array(
                        'id' => 'compania',
                        'data' => array('nombre' => $nombreEmpresa),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'reporte',
                        'data' => array('fechainicio' => $post_data['inicio'], 'fechafinal' => $post_data['fin']),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'col',
                        'repeat' => true,
                        'data' => $reporte,
                        'minRows' => 2,
                    )
                        )
                );
                if (isset($post_data['generar_pdf']))
                    echo $R->render('PDF');
                else
                    echo $R->render('excel');
                exit();
            } else {
                return $this->getResponse()->setContent(json_encode($reporte));
                exit;
            }
        }
        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL---
        //$collection = \CuentabancariaQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();
        //INTANCIAMOS NUESTRA VISTA        
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->find();

        $ts = strtotime("now");
        $start = (date('w', $ts) == 0) ? $ts : strtotime('last monday', $ts);
        //dia inicio de semana date('Y-m-d',$start);
        $fecha = date('Y-m-d', strtotime('next sunday', $start));
        $form = new \Application\Reportes\Form\CardexForm();
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/reportes/cardex/index');
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'almacenes' => $almacenes,
        ));
        return $view_model;
    }

    public function almacenAction() {
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $idalmacen = $post_data['idalmacen'];
            if (\AlmacenQuery::create()->filterByIdalmacen($idalmacen)->exists())
                $nombre = \AlmacenQuery::create()->filterByIdalmacen($idalmacen)->findOne()->getAlmacenEncargado();
            else
                $nombre = "";
            return $this->getResponse()->setContent(json_encode($nombre));
        }
    }

    public function bAction() {
        $request = $this->getRequest();
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $post_data = $request->getPost();
        $prod = array();
        //$search = $post_data['texto'];
        $search = $this->params()->fromQuery('q');
        $query = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre('%' . $search . '%', \Criteria::LIKE)->filterByProductoBaja(0, \Criteria::EQUAL)->orderByProductoNombre('asc')->find();
        return $this->getResponse()->setContent(json_encode(\Shared\GeneralFunctions::collectionToAutocomplete($query, 'idproducto', 'producto_nombre', array('producto_iva', 'producto_costo', array('unidadmedida', 'idunidadmedida', 'unidadmedida_nombre', 'UnidadmedidaQuery')))));
//            $producto= new \Producto();
//            foreach ($query as $producto) {
//                $idpr=$producto->getIdproducto();
//                $name=$producto->getProductoNombre();
//                array_push($prod,"<option value='$idpr'>$name</option>");
//            }
//            return $this->getResponse()->setContent(json_encode($prod));
    }

}

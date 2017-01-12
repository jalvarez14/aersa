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
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $archivo = false;
            
            if (isset($post_data['generar_excel']) || isset($post_data['generar_pdf'])) {
                $alm = array();
                $post_data['inicio'] = $post_data['fecha_inicio'];
                $post_data['fin'] = $post_data['fecha_fin'];
                $archivo = true;
//                foreach ($post_data as $key => $value) {
//                    if (strpos($key, '-'))
//                        array_push($alm, substr($key, 4));
//                }
            }
            $productosArray = array();
            $reporte = array();
            $reporteHead = array();
            $inicioSpli = explode('/', $post_data['inicio']);
            $finSpli = explode('/', $post_data['fin']);

            $inicio_semana = $inicioSpli[2] . "-" . $inicioSpli[1] . "-" . $inicioSpli[0] . " 00:00:00";
            $fin_semana = $finSpli[2] . "-" . $finSpli[1] . "-" . $finSpli[0] . " 23:59:59";

            $fin_semana_anterior = date('Y-m-d', strtotime('last sunday', strtotime($inicioSpli[2] . "-" . $inicioSpli[1] . "-" . $inicioSpli[0])));
            $fin_semana_anterior = $fin_semana_anterior . " 23:59:59";
            $num_pod = 0;
            $idalmacen=$post_data['almacenes'];
                $objproductos = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
                $objproducto = new \Producto();
            $inventario_anterior = \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->filterByIdsucursal($idsucursal)->filterByIdalmacen($idalmacen)->exists();
            if ($inventario_anterior)
            {
                $id_inventario_anterior = \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->filterByIdsucursal($idsucursal)->filterByIdalmacen($idalmacen)->findOne()->getIdinventariomes();
                
            }
            
                foreach ($objproductos as $objproducto) {

                    $pedido = true;
                    $idproducto = $objproducto->getIdproducto();
                    if (isset($post_data['productos'])) {
                        if (in_array($idproducto, $post_data['productos']))
                            $pedido = true;
                        else
                            $pedido = false;
                    }
                    if ($pedido) {
                        $conn = \Propel::getConnection();
                        $sqlcompras = "SELECT count(idcompra) FROM compra WHERE idcompra IN (SELECT idcompra FROM `compradetalle` WHERE idproducto=$idproducto AND idalmacen=$idalmacen) AND '$inicio_semana' <= compra_fechacompra AND compra_fechacompra <= '$fin_semana' AND idsucursal=$idsucursal;";
                        $st = $conn->prepare($sqlcompras);
                        $st->execute();
                        $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                        if ($results[0]['count(idcompra)'] != 0)
                            array_push($productosArray, $idproducto);
                        if (!in_array($idproducto, $productosArray)) {
                            $sqlventas = "SELECT count(idventa) FROM venta WHERE idventa IN (SELECT idventa FROM `ventadetalle` WHERE idproducto=24022 AND idalmacen=$idalmacen) AND '$inicio_semana' <= venta_fechaventa AND venta_fechaventa <= '$fin_semana' AND idsucursal=$idsucursal;";
                            $st = $conn->prepare($sqlventas);
                            $st->execute();
                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                            if ($results[0]['count(idventa)'] != 0)
                                array_push($productosArray, $idproducto);
                        } if (!in_array($idproducto, $productosArray)) {
                            $sqlrequisicionesOrigen = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idproducto) AND idalmacenorigen=$idalmacen AND '$inicio_semana' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana'  AND idsucursalorigen=$idsucursal;";
                            $st = $conn->prepare($sqlrequisicionesOrigen);
                            $st->execute();
                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);

                            if ($results[0]['count(idrequisicion)'] != 0)
                                array_push($productosArray, $idproducto);
                        }
                        if (!in_array($idproducto, $productosArray)) {

                            $sqlrequisicionesDestino = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idproducto) AND idalmacendestino=$idalmacen AND '$inicio_semana' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana'  AND idsucursaldestino=$idsucursal;";
                            $st = $conn->prepare($sqlrequisicionesDestino);
                            $st->execute();
                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                            if ($results[0]['count(idrequisicion)'] != 0 && !in_array($idproducto, $productosArray))
                                array_push($productosArray, $idproducto);
                        } if (!in_array($idproducto, $productosArray)) {

                            $sqlordentabOrigen = "SELECT count(idordentablajeria) FROM ordentablajeria WHERE idordentablajeria IN (SELECT idordentablajeria FROM `ordentablajeriadetalle` WHERE idproducto=$idproducto) AND idalmacenorigen=$idalmacen AND '$inicio_semana' <= ordentablajeria_fecha AND ordentablajeria_fecha <= '$fin_semana' AND idsucursal=$idsucursal;";
                            $st = $conn->prepare($sqlordentabOrigen);
                            $st->execute();
                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                            if ($results[0]['count(idordentablajeria)'] != 0)
                                array_push($productosArray, $idproducto);
                        } if (!in_array($idproducto, $productosArray)) {
                            $sqlordentabDestino = "SELECT count(idordentablajeria) FROM ordentablajeria WHERE idordentablajeria IN (SELECT idordentablajeria FROM `ordentablajeriadetalle` WHERE idproducto=$idproducto) AND idalmacendestino=$idalmacen AND '$inicio_semana' <= ordentablajeria_fecha AND ordentablajeria_fecha <= '$fin_semana' AND idsucursal=$idsucursal;";
                            $st = $conn->prepare($sqlordentabDestino);
                            $st->execute();
                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                            if ($results[0]['count(idordentablajeria)'] != 0)
                                array_push($productosArray, $idproducto);
                        } if (!in_array($idproducto, $productosArray)) {
                            $sqlajusteinvSobs = "SELECT count(idajusteinventario) FROM ajusteinventario WHERE idproducto=$idproducto AND idalmacen=$idalmacen AND '$inicio_semana' <= ajusteinventario_fecha AND ajusteinventario_fecha <= '$fin_semana' AND idsucursal=$idsucursal AND ajusteinventario_tipo='sobrante';";
                            $st = $conn->prepare($sqlajusteinvSobs);
                            $st->execute();
                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                            if ($results[0]['count(idajusteinventario)'] != 0)
                                array_push($productosArray, $idproducto);
                        } if (!in_array($idproducto, $productosArray)) {
                            $sqlajusteinvFals = "SELECT count(idajusteinventario) FROM ajusteinventario WHERE idproducto=$idproducto AND idalmacen=$idalmacen AND '$inicio_semana' <= ajusteinventario_fecha AND ajusteinventario_fecha <= '$fin_semana' AND idsucursal=$idsucursal AND ajusteinventario_tipo='faltante';";
                            $st = $conn->prepare($sqlajusteinvFals);
                            $st->execute();
                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                            if ($results[0]['count(idajusteinventario)'] != 0)
                                array_push($productosArray, $idproducto);
                        } if (!in_array($idproducto, $productosArray)) {
                            $sqldevoluciones = "SELECT count(iddevolucion) FROM devolucion WHERE iddevolucion IN (SELECT iddevolucion FROM `devoluciondetalle` WHERE idproducto=$idproducto AND idalmacen=$idalmacen) AND '$inicio_semana' <= devolucion_fechadevolucion AND devolucion_fechadevolucion <= '$fin_semana' AND idsucursal=$idsucursal;";
                            $st = $conn->prepare($sqldevoluciones);
                            $st->execute();
                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                            if ($results[0]['count(iddevolucion)'] != 0)
                                array_push($productosArray, $idproducto);
                        }
                        
                        if (!in_array($idproducto, $productosArray) && $inventario_anterior==1) {
                            $existenciaanterior;
                            
                            
                            $existe = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($idproducto)->exists();
                            if ($existe==1)
                            {
                                //echo "exis: ".\InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($idproducto)->findOne()->getInventariomesdetalleTotalfisico();
                                $existenciaanterior = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($idproducto)->findOne()->getInventariomesdetalleTotalfisico();
                            if ($existenciaanterior != 0)
                                array_push($productosArray, $idproducto);
                            }
                        }
                    }
                }
             $idalmacen=$post_data['almacenes'];



                //inventario anterior
                $inventario_anterior = \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->filterByIdsucursal($idsucursal)->filterByIdalmacen($idalmacen)->exists();
                if ($inventario_anterior)
                    $id_inventario_anterior = \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->filterByIdsucursal($idsucursal)->filterByIdalmacen($idalmacen)->findOne()->getIdinventariomes();

                $objcompras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();


                $objventas = \VentaQuery::create()->filterByVentaFechaventa(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->find();


                $objrequisicionesOrigen = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->find();

                $objordentabOrigen = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->find();

                $objrequisicionesDestino = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->find();

                $objordentabDestino = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->find();

                $objajusteinvSobs = \AjusteinventarioQuery::create()->filterByAjusteinventarioFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByAjusteinventarioTipo("sobrante")->find();

                $objajusteinvFals = \AjusteinventarioQuery::create()->filterByAjusteinventarioFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByAjusteinventarioTipo("faltante")->find();

                $objdevoluciones = \DevolucionQuery::create()->filterByDevolucionFechadevolucion(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->find();

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
                        if (in_array($objproducto->getIdproducto(), $productosArray)) {
                            $reporteProcesos = array();
                            $nombreProducto = $objproducto->getProductoNombre();
                            $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                            $categoria = $objproducto->getCategoriaRelatedByIdcategoria()->getCategoriaNombre();
                            $subcategoria = $objproducto->getCategoriaRelatedByIdsubcategoria()->getCategoriaNombre();
                            $exisinicial = 0;

                            if ($inventario_anterior) {
                                $exisinicial2 = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($objproducto->getIdproducto())->exists();
                                if ($exisinicial2)
                                    $exisinicial = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($objproducto->getIdproducto())->findOne()->getInventariomesdetalleTotalfisico();
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
                            /*
                            $objreq= new \Requisicion();
                            $objrequisiciones= $objrequisicionesDestino;
                            foreach ($objrequisiciones as $objreq) {
                                $objreqdets = \RequisiciondetalleQuery::create()
                                        ->filterByIdrequisicion($objreq->getIdrequisicion())
                                        ->filterByIdproducto($objproducto->getIdproducto())
                                        ->find();
                                $objreqdet = new \Requisiciondetalle();
                                foreach ($objreqdets as $objreqdet) {
                                    $compra+=$objreqdet->getRequisiciondetalleCantidad();
                                    $totalProductoCompra+=$objreqdet->getRequisiciondetalleSubtotal();
                                }
                            }
                            
                            $objrequisiciones= $objrequisicionesOrigen;
                            foreach ($objrequisiciones as $objreq) {
                                $objreqdets = \RequisiciondetalleQuery::create()
                                        ->filterByIdrequisicion($objreq->getIdrequisicion())
                                        ->filterByIdproducto($objproducto->getIdproducto())
                                        ->find();
                                $objreqdet = new \Requisiciondetalle();
                                foreach ($objreqdets as $objreqdet) {
                                    $compra+=$objreqdet->getRequisiciondetalleCantidad();
                                    $totalProductoCompra+=$objreqdet->getRequisiciondetalleSubtotal();
                                }
                            }
                            */
                            $idp=$objproducto->getIdproducto();
                            $time=strtotime($inicio_semana);
                            $month=date("n",$time);
                            $year=date("Y",$time);
                            
                            $sqlcostopromedioinicial = "SELECT sum(compradetalle_subtotal)/sum(compradetalle_cantidad) FROM `compradetalle` WHERE idcompra IN (SELECT idcompra FROM `compra` where compra_tipo='compra' and idempresa=$idempresa and idsucursal=$idsucursal and idalmacen=$idalmacen and YEAR(compra_fechacompra)=$year and MONTH(compra_fechacompra)=$month) and idproducto=$idp;";

                            $st = $conn->prepare($sqlcostopromedioinicial);
                            $st->execute();
                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                            
                            $costoPromedio = (!is_null($results)) ? $results[0]["sum(compradetalle_subtotal)/sum(compradetalle_cantidad)"] : $objproducto->getProductoCosto();
                           
                            $costoPromedio;
                            $rowhead = 0;
//                            if ($objproducto->getProductoTipo() == 'subreceta' && $exisinicial != 0) {
//                                $recetasObj = \RecetaQuery::create()->filterByIdproducto($objproducto->getIdproducto())->find();
//                                $recetaObj = new \Receta();
//                                foreach ($recetasObj as $recetaObj) {
//                                    if (isset($post_data['productos'])) {
//                                        if (in_array($recetaObj->getIdproductoreceta(), $post_data['productos'])) {
//                                            if (isset($reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'])) {
//                                                $recini = $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'];
//                                                $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'] = $recini + ($recetaObj->getRecetaCantidad() * $exisinicial);
//                                            } else {
//                                                $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'] = ($recetaObj->getRecetaCantidad() * $exisinicial);
//                                            }
//                                        }
//                                    } else {
//                                        if (isset($reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'])) {
//                                            $recini = $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'];
//                                            $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'] = $recini + ($recetaObj->getRecetaCantidad() * $exisinicial);
//                                        } else {
//                                            $reporteHead[$idalmacen][$recetaObj->getIdproductoreceta()]['existenciaIni'] = ($recetaObj->getRecetaCantidad() * $exisinicial);
//                                        }
//                                    }
//                                }
//                                $exisinicial = 0;
//                            }
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
                                
                            
                            $time=strtotime($objcompra->getCompraFechacompra());
                            $month=date("n",$time);
                            $year=date("Y",$time);
                            
                            /*$sqlcostopromedioinicial = "SELECT sum(compradetalle_subtotal)/sum(compradetalle_cantidad) FROM `compradetalle` WHERE idcompra IN (SELECT idcompra FROM `compra` WHERE compra_tipo='compra' and idempresa=$idempresa and idsucursal=$idsucursal and idalmacen=$idalmacen and YEAR(compra_fechacompra)=$year and MONTH(compra_fechacompra)=$month) and idproducto=$idp;";

                            $st = $conn->prepare($sqlcostopromedioinicial);
                            $st->execute();
                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                            $costoPromedio2 = (!is_null($results)) ? $results[0]["sum(compradetalle_subtotal)/sum(compradetalle_cantidad)"] : $costoPromedio;
                            */
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
                                    //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                    $row++;
                                }
                            }
                            
                            
                            

                            $objrequisicion = new \Requisicion();
                            /*
                            foreach ($objrequisicionesDestino as $objrequisicion) {
                                if($objproducto->getProductoTipo()=="simple") //cuando el producto es simple solo se consideran los padres
                                {
                                $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                        ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                        ->filterByIdpadre(NULL)
                                        ->filterByRequisicionDetalleContable(1) //como entradas sólo se consideran los hoja raiz que sean contables
                                        ->filterByIdproducto($objproducto->getIdproducto())
                                        ->find();
                                }
                                if($objproducto->getProductoTipo()=="subreceta") //cuando el producto es simple solo se consideran los padres
                                {
                                    $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                    ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                    ->filterByIdpadre(NULL)
                                    ->filterByRequisicionDetalleContable(0) //como entradas sólo se consideran los productos raiz que no sean contables
                                    ->filterByIdproducto($objproducto->getIdproducto())
                                    ->find();
                                }
                                
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
                            */
                            
                            foreach ($objrequisicionesDestino as $objrequisicion) {
                                $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                ->filterByIdproducto($objproducto->getIdproducto())
                                ->find();
                                
                                
                                $objrequisiciondetalle = new \Requisiciondetalle();
                                foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                                    
                                    ///
                                    
                                    if ($objproducto->getProductoTipo()=="subreceta" && is_null($objrequisiciondetalle->getIdPadre()) ) //producto receta sin padre se verifica directamente si se considera como simple o no
                                    {
                                        $idprod=$objproducto->getIdProducto();
                                        $cantidad = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                        $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idprod) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                        
                                        $st = $conn->prepare($sqlrequisicioningreso);
                                        $st->execute();
                                        $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                        
                                        $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idprod) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                        $st2 = $conn->prepare($sqlrequisicionegreso);
                                        $st2->execute();
                                        $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                        
                                        
                                        if (($results[0]['count(idrequisicion)'] > 0) || ($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] > 0)) // receta que se recibe ó (recibe y envía) POR LO TANTO SE CONSIDERA SIMPLE
                                        {
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
                                            //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                            
                                        }
                                        
                                        
                                    }
                                    if ($objproducto->getProductoTipo()=="simple" && is_null($objrequisiciondetalle->getIdPadre()) && $objrequisiciondetalle->getRequisicionDetalleContable()==1) //simple que no salio de una receta
                                    {
                                        
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
                                        //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                        
                                    }
                                    if ($objproducto->getProductoTipo()=="simple" && !is_null($objrequisiciondetalle->getIdPadre()) && $objrequisiciondetalle->getRequisicionDetalleContable()==1) //simple que si salio de una receta, SE DEBE DE CONOCER AL PADRE PARA SABER SI EL SIMPLE SE CONSIDERA O NO
                                    {
                                        //conocer el producto del cual salió, puede ser el nivel superior, dos niveles arriba, hasta 6 niveles arriba
                                        //$conn = \Propel::getConnection();
                                        //se conoce el papa
                                        $requisicion_detalle_padre = \RequisiciondetalleQuery::create()->findPk($objrequisiciondetalle->getIdpadre());
                                        //echo '<pre>'.$objrequisiciondetalle->getIdrequisiciondetalle().'</pre>';
                                        //exit();
                                        $padrenivel1=$requisicion_detalle_padre->getIdPadre();
                                        
                                        
                                        if($padrenivel1=='')
                                        {
                                            $idpadrenivel1=$requisicion_detalle_padre->getIdProducto();
                                            $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel1) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                            $st = $conn->prepare($sqlrequisicioningreso);
                                            $st->execute();
                                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                            
                                            $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel1) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                            $st2 = $conn->prepare($sqlrequisicionegreso);
                                            $st2->execute();
                                            $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                            
                                            if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)) // SÍ SÓLO SE ENVIO Y NO RECIBIO
                                            {
                                                
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
                                                //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                            }
                                            
                                        }
                                        else //el papa nivel 1 no es la raiz
                                        {
                                            
                                            $requisicion_detalle_padrenivel2 = \RequisiciondetalleQuery::create()->findPk($padrenivel1);
                                            $padrenivel2=$requisicion_detalle_padrenivel2->getIdPadre();
                                            
                                            if($padrenivel2=='')
                                            {
                                                
                                                $idpadrenivel2=$requisicion_detalle_padre->getIdProducto();
                                                
                                                $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel2) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                $st = $conn->prepare($sqlrequisicioningreso);
                                                $st->execute();
                                                $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                
                                                $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel2) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                $st2 = $conn->prepare($sqlrequisicionegreso);
                                                $st2->execute();
                                                $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                
                                                if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)) // SÍ SÓLO SE ENVIO Y NO RECIBIO
                                                {
                                                    
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
                                                    //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                }
                                            }
                                            else //el papa nivel 2 no es la raiz
                                            {
                                                $requisicion_detalle_padrenivel3 = \RequisiciondetalleQuery::create()->findPk($padrenivel2);
                                                $padrenivel3=$requisicion_detalle_padrenivel3->getIdPadre();
                                                
                                                if($padrenivel3=='')
                                                {
                                                    $idpadrenivel3=$requisicion_detalle_padrenivel2->getIdProducto();
                                                    $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel3) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                    $st = $conn->prepare($sqlrequisicioningreso);
                                                    $st->execute();
                                                    $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                    
                                                    $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel3) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                    $st2 = $conn->prepare($sqlrequisicionegreso);
                                                    $st2->execute();
                                                    $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                    
                                                    if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)) // SÍ SÓLO SE ENVIO Y NO RECIBIO
                                                    {
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
                                                       // $reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                    }
                                                }
                                                else //si papá nivel 3 no es la raiz
                                                {
                                                    $requisicion_detalle_padrenivel4 = \RequisiciondetalleQuery::create()->findPk($padrenivel3);
                                                    $padrenivel4=$requisicion_detalle_padrenivel4->getIdPadre();
                                                    if($padrenivel4=='')
                                                    {
                                                        $idpadrenivel4=$requisicion_detalle_padrenivel3->getIdProducto();
                                                        $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel4) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                        $st = $conn->prepare($sqlrequisicioningreso);
                                                        $st->execute();
                                                        $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                        
                                                        $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel4) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                        $st2 = $conn->prepare($sqlrequisicionegreso);
                                                        $st2->execute();
                                                        $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                        
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
                                                        //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                    }
                                                    else //si papá nivel 4 no es la raiz
                                                    {
                                                        $requisicion_detalle_padrenivel5 = \RequisiciondetalleQuery::create()->findPk($padrenivel4);
                                                        $padrenivel5=$requisicion_detalle_padrenivel5->getIdPadre();
                                                        
                                                        if($padrenivel5=='')
                                                        {
                                                            $idpadrenivel5=$requisicion_detalle_padrenivel4->getIdProducto();
                                                            $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel5) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                            $st = $conn->prepare($sqlrequisicioningreso);
                                                            $st->execute();
                                                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                            
                                                            $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel5) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                            $st2 = $conn->prepare($sqlrequisicionegreso);
                                                            $st2->execute();
                                                            $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                            
                                                            if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)) // SÍ SÓLO SE ENVIO Y NO RECIBIO
                                                            {
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
                                                                //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                            }
                                                        }
                                                        else //si el papá nivel 5 no es la raiz
                                                        {
                                                            $requisicion_detalle_padrenivel6 = \RequisiciondetalleQuery::create()->findPk($padrenivel5);
                                                            $padrenivel6=$vrequisicion_detalle_padrenivel6->getIdPadre();
                                                            
                                                            if($padrenivel6=='')
                                                            {
                                                                $idpadrenivel6=$requisicion_detalle_padrenivel5->getIdProducto();
                                                                $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel6) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                                $st = $conn->prepare($sqlrequisicioningreso);
                                                                $st->execute();
                                                                $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                                
                                                                $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel6) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                                $st2 = $conn->prepare($sqlrequisicionegreso);
                                                                $st2->execute();
                                                                $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                                
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
                                                                //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                                
                                                            }
                                                            else //si el papa 6 no es nivel
                                                            {
                                                                $requisicion_detalle_padrenivel7 = \RequisiciondetalleQuery::create()->findPk($padrenivel6);
                                                                $padrenivel7=$requisicion_detalle_padrenivel7->getIdPadre();
                                                                if($padrenivel7=='')
                                                                {
                                                                    $idpadrenivel7=$requisicion_detalle_padrenivel6->getIdProducto();
                                                                    $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel7) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                                    $st = $conn->prepare($sqlrequisicioningreso);
                                                                    $st->execute();
                                                                    $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                                    
                                                                    $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel7) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                                    $st2 = $conn->prepare($sqlrequisicionegreso);
                                                                    $st2->execute();
                                                                    $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                                    
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
                                                                    //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                                }
                                                            }
                                                            
                                                        }
                                                    }
                                                }
                                                
                                            }
                                            
                                        }
                                        
                                       
                                    }
                                    
                                    ///
                                    
                                    //$venta+=$objventadetalle->getVentadetalleCantidad();
                                $row++;}
                                
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
                                    //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
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
                                    //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                    $row++;
                                }
                            }

                            $objventa = new \Venta();
                            /*
                            foreach ($objventas as $objventa) {
                                $objventadetalles = \VentadetalleQuery::create()
                                        ->filterByIdventa($objventa->getIdventa())
                                        ->filterByIdalmacen($idalmacen)
                                        ->filterByIdproducto($objproducto->getIdproducto())
                                        ->filterByVentaDetalleContable(1) //para contemplar sólo los productos que son contables
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
                            }*/
                            
                            
                            ///inicia venta como en inventarios
                            foreach ($objventas as $objventa) {
                                $objventadetalles = \VentadetalleQuery::create()
                                ->filterByIdventa($objventa->getIdventa())
                                ->filterByIdalmacen($idalmacen)
                                ->filterByIdproducto($objproducto->getIdproducto())
                                ->find();
                                
                                
                                $objventadetalle = new \Ventadetalle();
                                foreach ($objventadetalles as $objventadetalle) {
                                    
                                    ///
                                    
                                    if ($objproducto->getProductoTipo()=="subreceta" && $objventadetalle->getIdPadre()!="NULL" ) //producto receta
                                    {
                                        //$conn = \Propel::getConnection();
                                        //se conoce el papa
                                        $venta_detalle_padre = \VentadetalleQuery::create()->findPk($objventadetalle->getIdpadre());
                                        $padrereceta=$venta_detalle_padre->getIdPadre();
                                        
                                        if($padrereceta=='' || $venta_detalle_padre->getProducto()->getProductoTipo()=="plu")
                                        {
                                            
                                            
                                            
                                            //$conn = \Propel::getConnection();
                                            $idprod=$objproducto->getIdProducto();
                                            $cantidad = $objventadetalle->getVentadetalleCantidad();
                                            $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idprod) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                            
                                            $st = $conn->prepare($sqlrequisicioningreso);
                                            $st->execute();
                                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                            
                                            $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idprod) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                            $st2 = $conn->prepare($sqlrequisicionegreso);
                                            $st2->execute();
                                            $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                            
                                            
                                            if (($results[0]['count(idrequisicion)'] > 0) || ($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] > 0))
                                            {
                                                
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
                                                //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                $row++;
                                                
                                            }
                                            
                                        }
                                    }
                                    if ($objproducto->getProductoTipo()=="simple" && $objventadetalle->getIdPadre()=="NULL" && $objventadetalle->getVentaDetalleContable()==1) //simple que no salio de una receta
                                    {
                                        //se explosiona si el producto es simple y no tiene registro padre
                                        $venta_detalle_padre = \VentadetalleQuery::create()->findPk($objventadetalle->getIdpadre());
                                        $producto_padre = $venta_detalle_padre->getIdproducto();
                                        $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT iddrequisicion FROM `requisiciondetalle` WHERE idproducto=$producto_padre) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                        $st = $conn->prepare($sqlrequisicioningreso);
                                        $st->execute();
                                        $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                        
                                        $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT iddrequisicion FROM `requisiciondetalle` WHERE idproducto=$objproducto->getIdProducto()) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                        $st2 = $conn->prepare($sqlrequisicionegreso);
                                        $st2->execute();
                                        $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                        
                                        
                                        if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)  || ($results[0]['count(idrequisicion)'] == 0 && $results2[0]['count(idrequisicion)'] ==0))
                                        {
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
                                            //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                            $row++;
                                        }
                                    }
                                    if ($objproducto->getProductoTipo()=="simple" && $objventadetalle->getIdPadre()!="NULL" && $objventadetalle->getVentaDetalleContable()==1) //simple que si salio de una receta
                                    {
                                        //conocer el producto del cual salió, puede ser el nivel superior, dos niveles arriba, hasta 6 niveles arriba
                                        //$conn = \Propel::getConnection();
                                        //se conoce el papa
                                        $venta_detalle_padre = \VentadetalleQuery::create()->findPk($objventadetalle->getIdpadre());
                                        $padrenivel1=$venta_detalle_padre->getIdPadre();
                                        
                                        
                                        if($padrenivel1=='' || $venta_detalle_padre->getProducto()->getProductoTipo()=="plu")
                                        {
                                            
                                            /*$idpadrenivel1=$venta_detalle_padre->getIdProducto();
                                             $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel1) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                             $st = $conn->prepare($sqlrequisicioningreso);
                                             $st->execute();
                                             $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                             
                                             $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel1) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                             $st2 = $conn->prepare($sqlrequisicionegreso);
                                             $st2->execute();
                                             $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);*/
                                            
                                            //if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)  || ($results[0]['count(idrequisicion)'] == 0 && $results2[0]['count(idrequisicion)'] ==0))
                                            //{
                                            
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
                                            //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                            $row++;
                                            //}
                                            
                                        }
                                        else //el papa nivel 1 no es la raiz
                                        {
                                            
                                            $venta_detalle_padrenivel2 = \VentadetalleQuery::create()->findPk($padrenivel1);
                                            $padrenivel2=$venta_detalle_padrenivel2->getIdPadre();
                                            
                                            //echo "Prod 2 ".$objventadetalle->getIdventaDetalle()." ".$padrenivel2;
                                            if($padrenivel2=='' || $venta_detalle_padrenivel2->getProducto()->getProductoTipo()=="plu")
                                            {
                                                
                                                
                                                $idpadrenivel2=$venta_detalle_padre->getIdProducto();
                                                
                                                
                                                $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel2) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                $st = $conn->prepare($sqlrequisicioningreso);
                                                $st->execute();
                                                $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                
                                                $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel2) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                $st2 = $conn->prepare($sqlrequisicionegreso);
                                                $st2->execute();
                                                $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                
                                                if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)  || ($results[0]['count(idrequisicion)'] == 0 && $results2[0]['count(idrequisicion)'] ==0))
                                                {
                                                    
                                                    
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
                                                    //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                    $row++;
                                                }
                                            }
                                            else //el papa nivel 2 no es la raiz
                                            {
                                                $venta_detalle_padrenivel3 = \VentadetalleQuery::create()->findPk($padrenivel2);
                                                $padrenivel3=$venta_detalle_padrenivel3->getIdPadre();
                                                
                                                if($padrenivel3=='' || $venta_detalle_padrenivel3->getProducto()->getProductoTipo()=="plu")
                                                {
                                                    $idpadrenivel3=$venta_detalle_padrenivel2->getIdProducto();
                                                    $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel3) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                    $st = $conn->prepare($sqlrequisicioningreso);
                                                    $st->execute();
                                                    $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                    
                                                    $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel3) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                    $st2 = $conn->prepare($sqlrequisicionegreso);
                                                    $st2->execute();
                                                    $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                    
                                                    if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)  || ($results[0]['count(idrequisicion)'] == 0 && $results2[0]['count(idrequisicion)'] ==0))
                                                    {
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
                                                        //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                        $row++;
                                                    }
                                                }
                                                else //si papá nivel 3 no es la raiz
                                                {
                                                    $venta_detalle_padrenivel4 = \VentadetalleQuery::create()->findPk($padrenivel3);
                                                    $padrenivel4=$venta_detalle_padrenivel4->getIdPadre();
                                                    if($padrenivel4==''|| $venta_detalle_padrenivel4->getProducto()->getProductoTipo()=="plu")
                                                    {
                                                        $idpadrenivel4=$venta_detalle_padrenivel3->getIdProducto();
                                                        $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel4) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                        $st = $conn->prepare($sqlrequisicioningreso);
                                                        $st->execute();
                                                        $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                        
                                                        $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel4) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                        $st2 = $conn->prepare($sqlrequisicionegreso);
                                                        $st2->execute();
                                                        $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                        
                                                        if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)  || ($results[0]['count(idrequisicion)'] == 0 && $results2[0]['count(idrequisicion)'] ==0))
                                                        {
                                                            $$colorbg = ($color) ? $bgfila : $bgfila2;
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
                                                            //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                            $row++;
                                                        }
                                                    }
                                                    else //si papá nivel 4 no es la raiz
                                                    {
                                                        $venta_detalle_padrenivel5 = \VentadetalleQuery::create()->findPk($padrenivel4);
                                                        $padrenivel5=$venta_detalle_padrenivel5->getIdPadre();
                                                        
                                                        if($padrenivel5=='' || $venta_detalle_padrenivel5->getProducto()->getProductoTipo()=="plu")
                                                        {
                                                            $idpadrenivel5=$venta_detalle_padrenivel4->getIdProducto();
                                                            $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel5) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                            $st = $conn->prepare($sqlrequisicioningreso);
                                                            $st->execute();
                                                            $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                            
                                                            $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel5) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                            $st2 = $conn->prepare($sqlrequisicionegreso);
                                                            $st2->execute();
                                                            $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                            
                                                            if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)  || ($results[0]['count(idrequisicion)'] == 0 && $results2[0]['count(idrequisicion)'] ==0))
                                                            {
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
                                                                //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                                $row++;
                                                            }
                                                        }
                                                        else //si el papá nivel 5 no es la raiz
                                                        {
                                                            $venta_detalle_padrenivel6 = \VentadetalleQuery::create()->findPk($padrenivel5);
                                                            $padrenivel6=$venta_detalle_padrenivel6->getIdPadre();
                                                            
                                                            if($padrenivel6=='' || $venta_detalle_padrenivel6->getProducto()->getProductoTipo()=="plu")
                                                            {
                                                                $idpadrenivel6=$venta_detalle_padrenivel5->getIdProducto();
                                                                $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel6) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                                $st = $conn->prepare($sqlrequisicioningreso);
                                                                $st->execute();
                                                                $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                                
                                                                $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel6) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                                $st2 = $conn->prepare($sqlrequisicionegreso);
                                                                $st2->execute();
                                                                $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                                
                                                                if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)  || ($results[0]['count(idrequisicion)'] == 0 && $results2[0]['count(idrequisicion)'] ==0))
                                                                {
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
                                                                    //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                                    $row++;
                                                                }
                                                                
                                                            }
                                                            else //si el papa 6 no es nivel
                                                            {
                                                                $venta_detalle_padrenivel7 = \VentadetalleQuery::create()->findPk($padrenivel6);
                                                                $padrenivel7=$venta_detalle_padrenivel7->getIdPadre();
                                                                if($padrenivel7=='' || $venta_detalle_padrenivel7->getProducto()->getProductoTipo()=="plu")
                                                                {
                                                                    $idpadrenivel7=$venta_detalle_padrenivel6->getIdProducto();
                                                                    $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel7) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                                    $st = $conn->prepare($sqlrequisicioningreso);
                                                                    $st->execute();
                                                                    $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                                                    
                                                                    $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idpadrenivel7) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                                                    $st2 = $conn->prepare($sqlrequisicionegreso);
                                                                    $st2->execute();
                                                                    $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                                                    
                                                                    if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)  || ($results[0]['count(idrequisicion)'] == 0 && $results2[0]['count(idrequisicion)'] ==0))
                                                                    {
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
                                                                        //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                                                        $row++;
                                                                    }
                                                                }
                                                            }
                                                            
                                                        }
                                                    }
                                                }
                                                
                                            }
                                            
                                        }
                                        
                                        
                                        /*
                                         //se explosiona
                                         $conn = \Propel::getConnection();
                                         //obtener papá
                                         
                                         $venta_detalle_padre = \VentadetalleQuery::create()->findPk($objventadetalle->getIdpadre());
                                         $producto_padre = $venta_detalle_padre->getIdproducto();
                                         $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$producto_padre) AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                         //var_dump($sqlrequisicioningreso);
                                         $st = $conn->prepare($sqlrequisicioningreso);
                                         $st->execute();
                                         $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                                         
                                         $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$producto_padre) AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                                         $st2 = $conn->prepare($sqlrequisicionegreso);
                                         $st2->execute();
                                         $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                                         
                                         
                                         if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)  || ($results[0]['count(idrequisicion)'] == 0 && $results2[0]['count(idrequisicion)'] ==0))
                                         {
                                         
                                         if(isset($arrayReporte[$idpr][$exp]))
                                         {
                                         $exp='inventariomesdetalle_egresoventa';
                                         $explosion=$arrayReporte[$idpr][$exp]+ ($cant * $stockFisico);
                                         $arrayReporte[$idpr][$exp] = $explosion;
                                         }
                                         else
                                         {
                                         $exp='inventariomesdetalle_egresoventa';
                                         $arrayReporte[$idpr][$exp] = $objventadetalle->getVentadetalleCantidad();
                                         }
                                         
                                         
                                         
                                         
                                         $venta+=$objventadetalle->getVentadetalleCantidad();
                                         }*/
                                    }
                                    
                                    ///
                                    
                                    //$venta+=$objventadetalle->getVentadetalleCantidad();
                                }
                                
                            }
                            ///termina venta como en inventarios
                            

                            $objrequisicion = new \Requisicion();
                            foreach ($objrequisicionesOrigen as $objrequisicion) {
                                
                                if($objproducto->getProductoTipo()=="simple") //cuando el producto es simple solo se consideran los padres
                                {
                                /*$objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                        ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                        ->filterByIdpadre(NULL, \Criteria::NOT_EQUAL)
                                        ->filterByIdproducto($objproducto->getIdproducto())
                                        ->find();*/
                                $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                //->filterByIdpadre(NULL) //como salidas cuando es simple sólo se consideran los productos hojas que sean contables
                                ->filterByRequisicionDetalleContable(1)
                                ->filterByIdproducto($objproducto->getIdproducto())
                                ->find();
                                }
                                if($objproducto->getProductoTipo()=="subreceta")//cuando el producto es subreceta solo se consideran los hijos
                                {
                                    /*$objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                     ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                     ->filterByIdpadre(NULL, \Criteria::NOT_EQUAL)
                                     ->filterByIdproducto($objproducto->getIdproducto())
                                     ->find();*/
                                   $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                    ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                    ->filterByIdpadre(NULL, \Criteria::NOT_EQUAL)//como salidas cuando es receta sólo se consideran los productos hojas que sean contables
                                    ->filterByRequisicionDetalleContable(1)
                                    ->filterByIdproducto($objproducto->getIdproducto())
                                    ->find();
                                }
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
                                    //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                    $row++;
                                }
                            }

                            $objordentab = new \Ordentablajeria();
                            foreach ($objordentabOrigen as $objordentab) {
                                $objordentabdetalles = \OrdentablajeriaQuery::create()
                                        ->filterByIdordentablajeria($objordentab->getIdordentablajeria())
                                        ->filterByIdproducto($objproducto->getIdproducto())
                                        ->find();
                                $objordentabdetalle = new \Ordentablajeria();
                                foreach ($objordentabdetalles as $objordentabdetalle) {
                                    $colorbg = ($color) ? $bgfila : $bgfila2;
                                    $color = !$color;
                                    $fecha = $objordentab->getOrdentablajeriaFecha('d/m/Y');
                                    $folio = $objordentab->getOrdentablajeriaFolio();
                                    $proceso = "Orden tablajeria";
                                    $prove = "";
                                    $salida = $objordentabdetalle->getOrdentablajerianumeroporciones();
                                    $exisinicial-=$objordentabdetalle->getOrdentablajerianumeroporciones();
                                    $salidaefec = $objordentabdetalle->getOrdentablajerianumeroporciones() * $costoPromedio;
                                    $saldoIni-=$objordentabdetalle->getOrdentablajerianumeroporciones() * $costoPromedio;
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
                                    //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
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
                                    //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
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
                                    //$reporteProce[$idalmacen][$objproducto->getIdproducto()][$row]['costoPromedio'] = $costoPromedio;
                                    $row++;
                                }
                            }
                        }
                    }
                }

            $idalmacen=$post_data['almacenes'];
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
                        if (isset($reporteHead[$idalmacen][$objproducto->getIdproducto()]['producto'])) {
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
                                        array_push($reporte, array('uno' => $fecha, 'dos' => $folio, 'tres' => $proceso, 'cuatro' => $prove, 'cinco' => $entrada, 'seis' => $salida, 'siete' => $exisinicial, 'ocho' => $entradaefec, 'nueve' => $salidaefec, 'diez' => $saldoIni, 'once' => ''));
                                    else
                                        array_push($reporte, "<tr bgcolor='" . $colorbg . "'><td>$fecha</td><td>$folio</td><td>$proceso</td><td>$prove</td><td>$entrada</td><td>$salida</td><td>$exisinicial</td><td>$entradaefec</td><td>$salidaefec</td><td>$saldoIni</td><td></td></tr>");
                                }
                            }
                        }
                    }
                }
            if ($archivo) {
                $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
                $template = '/kardex.xlsx';
                $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates/';
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
        $semana_act = \SucursalQuery::create()->filterByIdsucursal($idsucursal)->findOne()->getSucursalMesactivo();
        $anio_act = \SucursalQuery::create()->filterByIdsucursal($idsucursal)->findOne()->getSucursalAnioactivo();
        $time = strtotime("1 January $anio_act", time());
        $day = date('w', $time);
        $time += ((7 * $semana_act) + 1 - $day) * 24 * 3600;
        $time += 6 * 24 * 3600;
        $fecha = date('Y-m-d', $time);

        $form = new \Application\Reportes\Form\CardexForm();
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/reportes/cardex/index');
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'almacenes' => $almacenes,
            'fecha' => $fecha,
        ));
        return $view_model;
    }

    public function almacenAction() {
//        $request = $this->getRequest();
//        if ($request->isPost()) {
//            $post_data = $request->getPost();
//            $idalmacen = $post_data['idalmacen'];
//            if (\AlmacenQuery::create()->filterByIdalmacen($idalmacen)->exists())
//                $nombre = \AlmacenQuery::create()->filterByIdalmacen($idalmacen)->findOne()->getAlmacenEncargado();
//            else
//                $nombre = "";
//            return $this->getResponse()->setContent(json_encode($nombre));
//        }
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $id = $post_data['idalmacen'];
            $inventario_anterior = \InventariomesQuery::create()->filterByIdalmacen($id)->exists();
            $fecha = array();
            $cont=0;
            if ($inventario_anterior) {
                $fechas = \InventariomesQuery::create()->filterByIdalmacen($id)->orderByInventariomesFecha('desc')->find();
                $fechasobj= new \Inventariomes();
                foreach($fechas as $fechasobj) {
                    $cont++;
                    if($cont<11){ 
                        $date = $fechasobj->getInventariomesFecha('d-m-Y');
                        $date = strtotime($date);
                        $date = strtotime("+1 day", $date);
                        $date=date('j-n-Y', $date);
                        array_push($fecha, $date);
                    }
                }
            }
                
            return $this->getResponse()->setContent(json_encode($fecha));
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
        $query = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre('%' . $search . '%', \Criteria::LIKE)->filterByProductoBaja(0, \Criteria::EQUAL)->orderByProductoNombre('asc')->filterByProductoTipo('plu', \Criteria::NOT_EQUAL)->find();
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

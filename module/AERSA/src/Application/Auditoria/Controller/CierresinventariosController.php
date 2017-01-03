<?php
    
    namespace Application\Auditoria\Controller;
    
    
    
    use Zend\Mvc\Controller\AbstractActionController;
    use Zend\View\Model\ViewModel;
    use Zend\Console\Request as ConsoleRequest;
    
    class CierresinventariosController extends AbstractActionController {
        
        public function indexAction() {
            $session = new \Shared\Session\AouthSession();
            $session = $session->getData();
            
            $idempresa = $session['idempresa'];
            $idsucursal = $session['idsucursal'];
            $inventarios = \InventariomesQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->orderByInventariomesFecha('desc')->find();
            
            $view_model = new ViewModel();
            $view_model->setTemplate('/application/auditoria/cierresinventarios/index');
            $view_model->setVariables(array(
                                            'messages' => $this->flashMessenger(),
                                            'inventarios' => $inventarios,
                                            ));
            return $view_model;
        }
        
        public function nuevoAction() {
            
            //CARGAMOS LA SESSION PARA HACER VALIDACIONES
            $session = new \Shared\Session\AouthSession();
            $session = $session->getData();
            
            $idempresa = $session['idempresa'];
            $idsucursal = $session['idsucursal'];
            
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
            $usuarios = \UsuarioQuery::create()->filterByIdrol(4)
            ->useUsuariosucursalQuery()
            ->filterByIdsucursal($idsucursal)
            ->endUse()
            ->find();
            $usuario = new \Usuario();
            foreach ($usuarios as $usuario) {
                $id = $usuario->getIdusuario();
                $auditor_array[$id] = $usuario->getUsuarioNombre();
            }
            $request = $this->getRequest();
            if ($request->isPost()) {
                
                $post_data = $request->getPost();
                
                $idalmacen = $post_data['idalmacen'];
                $post_data['idusuario'] = $session['idusuario'];
                $idauditor = $post_data['idauditor'];
                $post_data['idempresa'] = $idempresa;
                $post_data['idsucursal'] = $idsucursal;
                //$post_data["inventariomes_fecha"] = date_create_from_format('d/m/Y', $post_data["inventariomes_fecha"]);
                $post_data["inventariomes_fecha"] = date_create_from_format('m/d/Y', $post_data["inventariomes_fecha"]);
                $inventariocierremes = new \Inventariomes();
                foreach ($post_data as $key => $value) {
                    if (\InventariomesPeer::getTableMap()->hasColumn($key)) {
                        $inventariocierremes->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                
                $otroinventariocierremes = \InventariomesQuery::create()
                ->filterByIdalmacen($inventariocierremes->getIdalmacen())
                ->filterByIdsucursal($inventariocierremes->getIdsucursal())
                ->filterByInventariomesFecha($inventariocierremes->getInventariomesFecha())
                ->exists();
                if ($otroinventariocierremes) {
                    $otroinventariocierremes = \InventariomesQuery::create()
                    ->filterByIdalmacen($inventariocierremes->getIdalmacen())
                    ->filterByIdsucursal($inventariocierremes->getIdsucursal())
                    ->filterByInventariomesFecha($inventariocierremes->getInventariomesFecha())
                    ->findOne();
                    $otroinventariocierremes->delete();
                }
                
                $inventariocierremes->save();
                foreach ($post_data['reporte'] as $reporte) {
                    $inventariocierremes_detalle = new \Inventariomesdetalle();
                    foreach ($reporte as $key => $value) {
                        if (\InventariomesdetallePeer::getTableMap()->hasColumn($key)) {
                            $inventariocierremes_detalle->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                        }
                    }
                    if (isset($reporte['inventariomesdetalle_revisada'])) {
                        $inventariocierremes_detalle->setInventariomesdetalleRevisada(1);
                    }
                    $inventariocierremes_detalle->setIdinventariomes($inventariocierremes->getIdinventariomes());
                    $inventariocierremes_detalle->save();
                }
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/auditoria/cierresemana');
            }
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
            
            $form = new \Application\Auditoria\Form\CierresinventariosForm($almacen_array, $auditor_array);
            $view_model = new ViewModel();
            $view_model->setTemplate('/application/auditoria/cierresinventarios/nuevo');
            $view_model->setVariables(array(
                                            'form' => $form,
                                            'messages' => $this->flashMessenger(),
                                            'fecha'=>$fecha,
                                            ));
            return $view_model;
        }
        
        public function batchAction() {
            //ini_set("log_errors", 1);
            //ini_set("error_log", "/home/aersa/public_html/logs/error_log.txt");
            //error_reporting(E_ALL);
            //CARGAMOS LA SESSION PARA HACER VALIDACIONES
            $session = new \Shared\Session\AouthSession();
            $session = $session->getData();
            $conn = \Propel::getConnection();

            $request = $this->getRequest();
            if ($request->isPost()) {
                $idempresa = $session['idempresa'];
                $idsucursal = $session['idsucursal'];
                $post_data = $request->getPost();
                /* obtiene todos los datos en este formato:
                 array(5) { ["CLAVE"]=> string(1) "2" ["NOMBRE"]=> string(4) "test" ["UNIDAD"]=> string(5) "Pieza" ["CANTIDAD"]=> string(1) "1" ["TOTAL"]=> string(1) "1" }
                 array(5) { ["CLAVE"]=> string(1) "3" ["NOMBRE"]=> string(19) "Servicio de tequila" ["UNIDAD"]=> string(7) "Botella" ["CANTIDAD"]=> string(1) "5" ["TOTAL"]=> string(1) "5" }
                 array(5) { ["CLAVE"]=> string(1) "4" ["NOMBRE"]=> string(17) "Botella Don Julio" ["UNIDAD"]=> string(5) "Pieza" ["CANTIDAD"]=> string(1) "7" ["TOTAL"]=> string(1) "7" }
                 array(5) { ["CLAVE"]=> string(1) "5" ["NOMBRE"]=> string(6) "Fresca" ["UNIDAD"]=> string(5) "Pieza" ["CANTIDAD"]=> string(1) "8" ["TOTAL"]=> string(1) "8" }
                 */
                $idalmacen = $post_data['almacen'];
                $idusuario = $post_data['auditor'];
                $productosReporte = array();
                
                foreach ($post_data['inventario']["Sheet1"] as $producto) {
                    if (isset($producto['CLAVE']))
                        if ($producto['CLAVE'] != 'CLAVE' && (count($producto) == 6 || count($producto) == 5))
                            $productosReporte[$producto['CLAVE']] = $producto['TOTAL'];
                }
                
                
                $semana_act = \SucursalQuery::create()->filterByIdsucursal($idsucursal)->findOne()->getSucursalMesactivo();
                $anio_act = \SucursalQuery::create()->filterByIdsucursal($idsucursal)->findOne()->getSucursalAnioactivo();
                $time = strtotime("1 January $anio_act", time());
                $day = date('w', $time);
                $time += ((7 * $semana_act) + 1 - $day) * 24 * 3600;
                $time += 6 * 24 * 3600;
                $fecha = date('Y-m-d', $time);
                
                $start = strtotime('last monday', $time);
                $inicio_semana = date('Y-m-d', strtotime('last monday', $time));
                
                $fin_semana2 = date('Y-m-d', $time);
                
                $fin_semana_anterior = date('Y-m-d', strtotime('last sunday', $start));
                $fin_semana_anterior = $fin_semana_anterior . " 23:59:59";
                
                //para definir si una receta se explosiona o no, se debe de comparar un periodo de 6 meses previos, por ello, se calcula la fecha seleccionada menos 6 meses
                $fecharequisicion6meses = strtotime ('-6 month', strtotime($fin_semana2));
                $fecharequisicion6meses = date('Y-m-d',  $fecharequisicion6meses);
                $fecharequisicion6meses = $fecharequisicion6meses. " 00:00:00" ;
                
                
                $inicio_semana = $inicio_semana . " 00:00:00";
                $fin_semana2 =  date_create_from_format('m/d/Y H:i:s', $post_data["fecha"]." 23:59:59");
                $fin_semana = $fin_semana2->format("Y-m-d H:i:s");
            
                //si existe un inventario anterior al que se desea registrar, la fecha de inicio para considerar los movimientos de procesos es el día siguiente al inventario anterior (un día lunes)
                $inventario_anterior = \InventariomesQuery::create()->filterByIdalmacen($idalmacen)->orderByInventariomesFecha('desc')->exists();
                if ($inventario_anterior)
                {
                    $id_inventario_anterior = \InventariomesQuery::create()->filterByIdalmacen($idalmacen)->orderByInventariomesFecha('desc')->findOne()->getIdinventariomes();
                    $inicio_semana2 = \InventariomesQuery::create()->filterByIdalmacen($idalmacen)->orderByInventariomesFecha('desc')->findOne()->getInventariomesFecha();
                    $inicio_semana3 = strtotime ('+1 day', strtotime($inicio_semana2));
                    $inicio_semana3 = date('Y-m-d',  $inicio_semana3);
                    $inicio_semana  = $inicio_semana3. " 00:00:00";
                }
                else //si no existe un inventario anterior al que se desea registrar, la fecha de inicio para considerar los movimientos de procesos es el día siguiente a la fecha de la semana revisada (un día lunes)
                {
                    //si es el primer inventario, la fecha de inicio es un dia después de la semana revisada
                    $idsuc= $session['idsucursal'];
                    $semana_rev = \SemanarevisadaQuery::create()->filterByIdsucursal($idsuc)->orderByIdsemanarevisada(\Criteria::DESC)->findOne()->getSemanarevisadasemana();
                    
                    $anio_act = \SemanarevisadaQuery::create()->filterByIdsucursal($idsuc)->orderByIdsemanarevisada(\Criteria::DESC)->findOne()->getSemanarevisadaanio();
                    $time = strtotime("1 January $anio_act", time());
                    $day = date('w', $time);
                    $time += ((7 * $semana_rev) + 2 - $day) * 24 * 3600;
                    $time += 6 * 24 * 3600;
                    $inicio_semana = date('Y-m-d', $time)." 00:00:00";


                }
                
                
                $objcompras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();
                $objventas = \VentaQuery::create()->filterByVentaFechaventa(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->find();
                
                $objrequisicionesOrigen = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->filterByIdsucursalorigen($idsucursal)->find();
                $objordentabOrigen = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->filterByIdsucursal($idsucursal)->find();
                
                $objrequisicionesDestino = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->filterByIdsucursaldestino($idsucursal)->find();
                $objordentabDestino = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->filterByIdsucursal($idsucursal)->find();
                
                $objdevoluciones = \DevolucionQuery::create()->filterByDevolucionFechadevolucion(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->filterByIdalmacen($idalmacen)->find();
                
                
                $reporte = array();
                $arrayReporte = array();
                $sobrante = 0;
                $faltante = 0;
                $falim = 0;
                $fbebi = 0;
                $impFisTotal = 0;
                $bgfila = "#F2F2F2";
                $bgfila2 = "#FFFFFF";
                $color = true;
                $row = 0;
                $rowmax = 0;
                $categoriasObj = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->orderByCategoriaNombre('asc')->find();
                $categoriaObj = new \Categoria();
                foreach ($categoriasObj as $categoriaObj) {
                    $objproductos = \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByIdsubcategoria($categoriaObj->getIdcategoria())->orderByProductoNombre('asc')->find();
                    $objproducto = new \Producto();
                    foreach ($objproductos as $objproducto) {
                        $exisinicial = 0;
                        /////
                        $idprod=$objproducto->getIdProducto();
                        $req = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto=$idprod) AND (idalmacendestino= $idalmacen or idalmacenorigen= $idalmacen) AND '$inicio_semana' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                        $st = $conn->prepare($req);
                        $st->execute();
                        $resreq = $st->fetchAll(\PDO::FETCH_ASSOC);
                        
                        $compras = "SELECT count(idcompra) FROM compra WHERE idcompra IN (SELECT idcompra FROM `compradetalle` WHERE idproducto=$idprod AND idalmacen= $idalmacen) AND '$inicio_semana' <= compra_fechacompra AND compra_fechacompra <= '$fin_semana';";
                        $st = $conn->prepare($compras);
                        $st->execute();
                        $rescompras = $st->fetchAll(\PDO::FETCH_ASSOC);
                        
                        $ventas = "SELECT count(idventa) FROM venta WHERE idventa IN (SELECT idventa FROM `ventadetalle` WHERE idproducto=$idprod AND idalmacen= $idalmacen) AND '$inicio_semana' <= venta_fechaventa AND venta_fechaventa <= '$fin_semana';";
                        $st2 = $conn->prepare($ventas);
                        $st2->execute();
                        $resventas = $st2->fetchAll(\PDO::FETCH_ASSOC);
                        
                        $dev = "SELECT count(iddevolucion) FROM devolucion WHERE iddevolucion IN (SELECT iddevolucion FROM `devoluciondetalle` WHERE idproducto=$idprod AND idalmacen= $idalmacen) AND '$inicio_semana' <= devolucion_fechadevolucion AND devolucion_fechadevolucion <= '$fin_semana';";
                        $st3 = $conn->prepare($dev);
                        $st3->execute();
                        $resdev = $st3->fetchAll(\PDO::FETCH_ASSOC);
                        
                        $tabsalida = "SELECT count(idordentablajeria) FROM ordentablajeria WHERE (idalmacenorigen= $idalmacen or idalmacenorigen= $idalmacen) AND idproducto=$idprod AND '$inicio_semana' <= ordentablajeria_fecha AND ordentablajeria_fecha <= '$fin_semana';";
                        $st4 = $conn->prepare($tabsalida);
                        $st4->execute();
                        $restabsalida = $st4->fetchAll(\PDO::FETCH_ASSOC);
                        
                        $tabentrada = "SELECT count(idordentablajeria) FROM ordentablajeria WHERE idordentablajeria IN (SELECT idordentablajeria FROM `ordentablajeriadetalle` WHERE idproducto=$idprod) AND (idalmacenorigen= $idalmacen or idalmacenorigen= $idalmacen) AND '$inicio_semana' <= ordentablajeria_fecha AND ordentablajeria_fecha <= '$fin_semana';";
                        $st5 = $conn->prepare($tabentrada);
                        $st5->execute();
                        $restabentrada = $st5->fetchAll(\PDO::FETCH_ASSOC);
                        
                        $stockFisico = 0;
                        if (isset($productosReporte[$objproducto->getIdproducto()]))
                            $stockFisico = (isset($arrayReporte[$objproducto->getIdproducto()]['inventariomesdetalle_stockfisico'])) ? $arrayReporte[$objproducto->getIdproducto()]['inventariomesdetalle_stockfisico'] + $productosReporte[$objproducto->getIdproducto()]: $productosReporte[$objproducto->getIdproducto()];
                        /////
                        
                        if ($objproducto->getCategoriaRelatedByIdsubcategoria()->getCategoriaAlmacenable()) {
                            if ($inventario_anterior) {
                                $exisinicial = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($objproducto->getIdproducto())->exists();
                                if ($exisinicial)
                                    $exisinicial = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($objproducto->getIdproducto())->findOne()->getInventariomesdetalleTotalfisico();
                                //                            if ($objproducto->getProductoTipo() == 'subreceta') {
                                //                                $recetasObj = \RecetaQuery::create()->filterByIdproducto($objproducto->getIdproducto())->find();
                                //                                $recetaObj = new \Receta();
                                //                                foreach ($recetasObj as $recetaObj) {
                                //                                    $idpr = $recetaObj->getIdproductoreceta();
                                //                                    $pos = 'inventariomesdetalle_stockinicial';
                                //                                    $cant = $recetaObj->getRecetaCantidad();
                                //                                    if (isset($arrayReporte[$idpr]['inventariomesdetalle_diferencia'])) {
                                //                                        $arrayReporte[$idpr][$pos] = $arrayReporte[$idpr][$pos] + ($cant * $exisinicial);
                                //                                        $arrayReporte[$idpr]['inventariomesdetalle_stockteorico'] += ($cant * $exisinicial);
                                //                                        $stockTeorico = $arrayReporte[$idpr]['inventariomesdetalle_stockteorico'];
                                //                                        $stockFisico = $arrayReporte[$idpr]['inventariomesdetalle_stockfisico'];
                                //                                        $dif = $stockFisico - $stockTeorico;
                                //                                        $arrayReporte[$idpr]['inventariomesdetalle_diferencia'] = $dif;
                                //                                        $costoPromedio = $arrayReporte[$idpr]['inventariomesdetalle_costopromedio'];
                                //                                        $difImporte = $dif * $costoPromedio;
                                //                                        if (0 < $arrayReporte[$idpr]['inventariomesdetalle_difimporte'])
                                //                                            $sobrante-=$arrayReporte[$idpr]['inventariomesdetalle_difimporte'];
                                //                                        else
                                //                                            $faltante-=$arrayReporte[$idpr]['inventariomesdetalle_difimporte'];
                                //
                                //                                        $arrayReporte[$idpr]['inventariomesdetalle_difimporte'] = $difImporte;
                                //                                        if (0 < $difImporte)
                                //                                            $sobrante+=$difImporte;
                                //                                        else
                                //                                            $faltante+=$difImporte;
                                //                                    } else {
                                //                                        $arrayReporte[$idpr][$pos] = ($cant * $exisinicial);
                                //                                    }
                                //                                }
                                //                                $exisinicial = 0;
                                //                            }
                            }
                            
                            
                            
                            //si el producto tiene algún movimiento o stockfisico se procesa, en caso contrario no se considera
                    if($resreq[0]['count(idrequisicion)']>0 || $resventas[0]['count(idventa)']>0 || $resdev[0]['count(iddevolucion)']>0 || $restabsalida[0]['count(idordentablajeria)']>0 || $restabentrada[0]['count(idordentablajeria)']>0 || $stockfisico>0 || $exisinicial!=0 || $productosReporte[$objproducto->getIdproducto()]>0 || $rescompras[0]['count(idcompra)']>0  ){
                        
                        
                        //}
                        //echo '<pre>'.$objproducto->getProductoNombre().'</pre>';
                        //file_put_contents("/Applications/AMPPS/www/aersa/public/logs/error_log.txt", $objproducto->getProductoNombre()."\n",FILE_APPEND);
                        
                        if (isset($arrayReporte[$objproducto->getIdproducto()]['inventariomesdetalle_stockinicial']))
                            $exisinicial+=$arrayReporte[$objproducto->getIdproducto()]['inventariomesdetalle_stockinicial'];
                        $totalProductoCompra = 0;
                        $compra = 0;
                        foreach ($objcompras as $objcompra) {
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
                        
                        
                        //Para las requisiciones de subrecetas aplica el mismo criterio que ventas y stock fisico
                        //Recibió
                            //simple
                        //Envío
                            //subreceta
                        //Recibió y envío
                            //simple
                        
                        
                        
                        $requisicionIng = 0;
                        /*
                        if ($objproducto->getProductoTipo()=="simple")
                        {
                            foreach ($objrequisicionesDestino as $objrequisicion) {
                                $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                ->filterByIdpadre(NULL)
                                ->filterByRequisicionDetalleContable(1) //como entradas sólo se consideran los productos raiz que no sean contables
                                ->filterByIdproducto($objproducto->getIdproducto())
                                ->find();
                                $objrequisiciondetalle = new \Requisiciondetalle();
                                foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                                    $requisicionIng+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                }
                            }
                        }
                        
                        if ($objproducto->getProductoTipo()=="subreceta")
                        {
                            foreach ($objrequisicionesDestino as $objrequisicion) {
                                $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                ->filterByIdpadre(NULL)
                                ->filterByRequisicionDetalleContable(0) //como entradas sólo se consideran los productos raiz que no sean contables
                                ->filterByIdproducto($objproducto->getIdproducto())
                                ->find();
                                $objrequisiciondetalle = new \Requisiciondetalle();
                                foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                                    $requisicionIng+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                }
                            }
                        } */
                        
                        
                        /// inicia bloque para considerar si una receta es simple o se descompone en los ingresos de requisiciones
                        
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
                                            $exp='inventariomesdetalle_ingresorequisicion';
                                            $explosion=$arrayReporte[$idprod][$exp] + $cantidad;
                                            $arrayReporte[$idprod][$exp] = $explosion;
                                            $requisicionIng+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                            
                                        }
                                        
                                    
                                }
                                if ($objproducto->getProductoTipo()=="simple" && is_null($objrequisiciondetalle->getIdPadre()) && $objrequisiciondetalle->getRequisicionDetalleContable()==1) //simple que no salio de una receta
                                {
                                    
                                        $exp='inventariomesdetalle_ingresorequisicion';
                                        $idprod=$objproducto->getIdProducto();
                                        $cantidad = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                        if(isset($arrayReporte[$idprod][$exp]))
                                        {
                                            $explosion=$arrayReporte[$idprod][$exp]+ $cantidad;
                                            $arrayReporte[$idprod][$exp] = $explosion;
                                            $requisicionIng+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                            
                                        }
                                        else
                                        {
                                            $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                            $requisicionIng+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                            
                                        }
                                        //$requisicionIng+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                    
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
                                            $exp='inventariomesdetalle_ingresorequisicion';
                                            if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                            {
                                                //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                $requisicionIng = $explosion;
                                            }
                                            else
                                            {
                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                $requisicionIng = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                            }
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
                                                
                                                $exp='inventariomesdetalle_ingresorequisicion';
                                                if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                {
                                                    //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                    $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                    $requisicionIng = $explosion;
                                                }
                                                else
                                                {
                                                    
                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $objventadetalle->getVentadetalleCantidad();
                                                    $requisicionIng = $objventadetalle->getVentadetalleCantidad();
                                                }
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
                                                    $exp='inventariomesdetalle_ingresorequisicion';
                                                    if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                    {
                                                        //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                        $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                        $requisicionIng = $explosion;
                                                    }
                                                    else
                                                    {
                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                        $requisicionIng = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                    }
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
                                                    
                                                    if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)) // SÍ SÓLO SE ENVIO Y NO RECIBIO
                                                    {
                                                        $exp='inventariomesdetalle_ingresorequisicion';
                                                        if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                        {
                                                            //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                            $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                            $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                            $requisicionIng = $explosion;
                                                        }
                                                        else
                                                        {
                                                            $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                            $requisicionIng = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                        }
                                                    }
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
                                                            $exp='inventariomesdetalle_ingresorequisicion';
                                                            if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                            {
                                                                $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                                $requisicionIng = $explosion;
                                                            }
                                                            else
                                                            {
                                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                $requisicionIng = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                            }
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
                                                            
                                                            if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)) // SÍ SÓLO SE ENVIO Y NO RECIBIO
                                                            {
                                                                $exp='inventariomesdetalle_ingresorequisicion';
                                                                if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                                {
                                                                    //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                                    $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                                    $requisicionIng = $explosion;
                                                                }
                                                                else
                                                                {
                                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                    $requisicionIng = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                }
                                                            }
                                                            
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
                                                                
                                                                if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)) // SÍ SÓLO SE ENVIO Y NO RECIBIO
                                                                {
                                                                    $exp='inventariomesdetalle_ingresorequisicion';
                                                                    if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                                    {
                                                                        //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                                        $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                                        $requisicionIng = $explosion;
                                                                    }
                                                                    else
                                                                    {
                                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                        $requisicionIng = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                    }
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
                        
                        /// termina bloque para desmembrar o no las recetas en los INGRESOS de REQUISICIONES
                        
                        
                        
                        
                        $requisicionEg = 0;
                        
                        /*if ($objproducto->getProductoTipo()=="simple")
                        {
                            foreach ($objrequisicionesOrigen as $objrequisicion) {
                                $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                //->filterByIdpadre(NULL)
                                ->filterByRequisicionDetalleContable(1) //como salidas cuando es simple sólo se consideran los productos hojas que sean contables
                                ->filterByIdproducto($objproducto->getIdproducto())
                                ->find();
                                $objrequisiciondetalle = new \Requisiciondetalle();
                                foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                                    $requisicionEg+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                }
                            }
                            
                        }
                        
                        if ($objproducto->getProductoTipo()=="subreceta")
                        {
                            foreach ($objrequisicionesOrigen as $objrequisicion) {
                                $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                ->filterByIdpadre(NULL,  \Criteria::NOT_EQUAL)
                                ->filterByRequisicionDetalleContable(1) //como salidas cuando es simple sólo se consideran los productos hojas que sean contables
                                ->filterByIdproducto($objproducto->getIdproducto())
                                ->find();
                                $objrequisiciondetalle = new \Requisiciondetalle();
                                foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                                    $requisicionEg+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                }
                            }
                            
                        }*/
                        
                        ///// INICIA BLOQUE PARA SABER SI DESMEMBRAR O NO LAS REQUISICIONES EGRESO DE RECETAS
                        
                        foreach ($objrequisicionesOrigen as $objrequisicion) {
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
                                        $exp='inventariomesdetalle_egresorequisicion';
                                        $explosion=$cantidad;
                                        $arrayReporte[$idprod][$exp] = $explosion;
                                        $requisicionEg+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                        
                                    }
                                    
                                    
                                }
                                
                                
                                if ($objproducto->getProductoTipo()=="simple" && is_null($objrequisiciondetalle->getIdPadre()) && $objrequisiciondetalle->getRequisicionDetalleContable()==1) //simple que no salio de una receta
                                {
                                    $exp='inventariomesdetalle_egresorequisicion';
                                    if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                    {
                                        $explosion=$arrayReporte[$idpr][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();;
                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                    }
                                    else
                                    {
                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                    }
                                    $requisicionEg+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                                    
                                }
                                if ($objproducto->getProductoTipo()=="simple" && !is_null($objrequisiciondetalle->getIdPadre()) && $objrequisiciondetalle->getRequisicionDetalleContable()==1) //simple que si salio de una receta, SE DEBE DE CONOCER AL PADRE PARA SABER SI EL SIMPLE SE CONSIDERA O NO
                                {
                                    //conocer el producto del cual salió, puede ser el nivel superior, dos niveles arriba, hasta 6 niveles arriba
                                    //$conn = \Propel::getConnection();
                                    //se conoce el papa
                                    $requisicion_detalle_padre = \RequisiciondetalleQuery::create()->findPk($objrequisiciondetalle->getIdpadre());
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
                                            $exp='inventariomesdetalle_egresorequisicion';
                                            if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                            {
                                                //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                $requisicionEg = $explosion;
                                            }
                                            else
                                            {
                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                $requisicionEg = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                            }
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
                                                
                                                $exp='inventariomesdetalle_egresorequisicion';
                                                if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                {
                                                    //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                    $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                    $requisicionEg = $explosion;
                                                }
                                                else
                                                {
                                                    
                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                    $requisicionEg = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                }
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
                                                    $exp='inventariomesdetalle_egresorequisicion';
                                                    if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                    {
                                                        //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                        $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                        $requisicionEg = $explosion;
                                                    }
                                                    else
                                                    {
                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                        $requisicionEg = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                    }
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
                                                    
                                                    if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)) // SÍ SÓLO SE ENVIO Y NO RECIBIO
                                                    {
                                                        $exp='inventariomesdetalle_egresorequisicion';
                                                        if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                        {
                                                            //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                            $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                            $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                            $requisicionEg = $explosion;
                                                        }
                                                        else
                                                        {
                                                            $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                            $requisicionEg = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                        }
                                                    }
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
                                                            $exp='inventariomesdetalle_egresorequisicion';
                                                            if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                            {
                                                                //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                                $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                                $requisicionEg = $explosion;
                                                            }
                                                            else
                                                            {
                                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                $requisicionEg = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                            }
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
                                                            
                                                            if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)) // SÍ SÓLO SE ENVIO Y NO RECIBIO
                                                            {
                                                                $exp='inventariomesdetalle_egresorequisicion';
                                                                if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                                {
                                                                    //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                                    $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                                    $requisicionEg = $explosion;
                                                                }
                                                                else
                                                                {
                                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                    $requisicionEg = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                }
                                                            }
                                                            
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
                                                                
                                                                if (($results[0]['count(idrequisicion)'] > 0 && $results2[0]['count(idrequisicion)'] ==0)) // SÍ SÓLO SE ENVIO Y NO RECIBIO
                                                                {
                                                                    $exp='inventariomesdetalle_egresorequisicion';
                                                                    if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                                    {
                                                                        //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                                        $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                                        $requisicionEg = $explosion;
                                                                    }
                                                                    else
                                                                    {
                                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                        $requisicionEg = $objrequisiciondetalle->getRequisiciondetalleCantidad();
                                                                    }
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
                        
                        ///// termina bloque para desmembrar o no las recetas en los EGRESOS de tablajería
                        
                        
                        $ordenTabIng = 0;
                        foreach ($objordentabDestino as $objordentab) {
                            $objordentabdetalles = \OrdentablajeriadetalleQuery::create()
                            ->filterByIdordentablajeria($objordentab->getIdordentablajeria())
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                            $objordentabdetalle = new \Ordentablajeriadetalle();
                            foreach ($objordentabdetalles as $objordentabdetalle) {
                                $ordenTabIng+=$objordentabdetalle->getOrdentablajeriadetalleCantidad();
                            }
                        }
                        
                        $venta = 0;
                        
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
                                            $exp='inventariomesdetalle_egresoventa';
                                            $explosion=$cantidad;
                                            $arrayReporte[$idprod][$exp] = $explosion;                                            
                                            $venta+=$objventadetalle->getVentadetalleCantidad();
                                        
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
                                            
                                            if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                            {
                                                $exp='inventariomesdetalle_egresoventa';
                                                //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objventadetalle->getVentadetalleCantidad();
                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                $venta = $explosion;
                                            }
                                            else
                                            {
                                                $exp='inventariomesdetalle_egresoventa';
                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $objventadetalle->getVentadetalleCantidad();
                                                $venta = $objventadetalle->getVentadetalleCantidad();
                                            }
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
                                                
                                                
                                                 $exp='inventariomesdetalle_egresoventa';
                                                if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                {
                                                    $exp='inventariomesdetalle_egresoventa';
                                                    //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                    $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objventadetalle->getVentadetalleCantidad();
                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                    $venta = $explosion;
                                                }
                                                else
                                                {
                                                    
                                                    $exp='inventariomesdetalle_egresoventa';
                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $objventadetalle->getVentadetalleCantidad();
                                                    $venta = $objventadetalle->getVentadetalleCantidad();
                                                }
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
                                                    $exp='inventariomesdetalle_egresoventa';
                                                    
                                                    if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                    {
                                                        $exp='inventariomesdetalle_egresoventa';
                                                        //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                        $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objventadetalle->getVentadetalleCantidad();
                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                        $venta = $explosion;
                                                    }
                                                    else
                                                    {
                                                        $exp='inventariomesdetalle_egresoventa';
                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $objventadetalle->getVentadetalleCantidad();
                                                        $venta = $objventadetalle->getVentadetalleCantidad();
                                                    }
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
                                                        $exp='inventariomesdetalle_egresoventa';
                                                        if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                        {
                                                            $exp='inventariomesdetalle_egresoventa';
                                                            //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                            $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objventadetalle->getVentadetalleCantidad();
                                                            $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                            $venta = $explosion;
                                                        }
                                                        else
                                                        {
                                                            $exp='inventariomesdetalle_egresoventa';
                                                            $arrayReporte[$objproducto->getIdProducto()][$exp] = $objventadetalle->getVentadetalleCantidad();
                                                            $venta = $objventadetalle->getVentadetalleCantidad();
                                                        }
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
                                                            $exp='inventariomesdetalle_egresoventa';
                                                            if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                            {
                                                                $exp='inventariomesdetalle_egresoventa';
                                                                //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                                $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objventadetalle->getVentadetalleCantidad();
                                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                                $venta = $explosion;
                                                            }
                                                            else
                                                            {
                                                                $exp='inventariomesdetalle_egresoventa';
                                                                $arrayReporte[$objproducto->getIdProducto()][$exp] = $objventadetalle->getVentadetalleCantidad();
                                                                $venta = $objventadetalle->getVentadetalleCantidad();
                                                            }
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
                                                                $exp='inventariomesdetalle_egresoventa';
                                                                if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                                {
                                                                    $exp='inventariomesdetalle_egresoventa';
                                                                    //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                                    $explosion=$arrayReporte[$objproducto->getProducto()][$exp]+ $objventadetalle->getVentadetalleCantidad();
                                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                                    $venta = $explosion;
                                                                }
                                                                else
                                                                {
                                                                    $exp='inventariomesdetalle_egresoventa';
                                                                    $arrayReporte[$objproducto->getIdProducto()][$exp] = $objventadetalle->getVentadetalleCantidad();
                                                                    $venta = $objventadetalle->getVentadetalleCantidad();
                                                                }
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
                                                                    $exp='inventariomesdetalle_egresoventa';
                                                                    if(isset($arrayReporte[$objproducto->getIdProducto()][$exp]))
                                                                    {
                                                                        $exp='inventariomesdetalle_egresoventa';
                                                                        //$explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ ($cant * $stockFisico);
                                                                        $explosion=$arrayReporte[$objproducto->getIdProducto()][$exp]+ $objventadetalle->getVentadetalleCantidad();
                                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $explosion;
                                                                        $venta = $explosion;
                                                                    }
                                                                    else
                                                                    {
                                                                        $exp='inventariomesdetalle_egresoventa';
                                                                        $arrayReporte[$objproducto->getIdProducto()][$exp] = $objventadetalle->getVentadetalleCantidad();
                                                                        $venta = $objventadetalle->getVentadetalleCantidad();
                                                                    }
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
                        
                        
                        
                        
                        
                        $ordenTabEg = 0;
                        /*foreach ($objordentabOrigen as $objordentab) {
                            $objordentabdetalles = \OrdentablajeriadetalleQuery::create()
                            ->filterByIdordentablajeria($objordentab->getIdordentablajeria())
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                            $objordentabdetalle = new \Ordentablajeriadetalle();
                            foreach ($objordentabdetalles as $objordentabdetalle) {
                                $ordenTabEg+=$objordentabdetalle->getOrdentablajeriadetalleCantidad();
                            }
                        }*/
                        
                        
                        foreach ($objordentabOrigen as $objordentab) {
                            $objordentabdetalles = \OrdentablajeriaQuery::create()
                            ->filterByIdordentablajeria($objordentab->getIdordentablajeria())
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                            
                            $objordentabdetalle = new \Ordentablajeria();
                            foreach ($objordentabdetalles as $objordentabdetalle) {
                                $ordenTabEg+=$objordentabdetalle->getOrdentablajerianumeroporciones();
                            }
                        }
                        
                        $devolucion = 0;
                        foreach ($objdevoluciones as $objdevolucion) {
                            $objdevoluciondetalles = \DevoluciondetalleQuery::create()
                            ->filterByIddevolucion($objdevolucion->getIddevolucion())
                            ->filterByIdalmacen($idalmacen)
                            ->filterByIdproducto($objproducto->getIdproducto())
                            ->find();
                            $objdevoluciondetalle = new \Devoluciondetalle();
                            foreach ($objdevoluciondetalles as $objdevoluciondetalle) {
                                $devolucion+=$objdevoluciondetalle->getDevoluciondetalleCantidad();
                            }
                        }
                        
                        $ajusteSob=0;
                        $ajusteSobObjs= \AjusteinventarioQuery::create()->filterByAjusteinventarioFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->filterByIdalmacen($idalmacen)->filterByIdproducto($objproducto->getIdproducto())->filterByAjusteinventarioTipo('sobrante')->find();
                        $ajusteSobObj=new \Ajusteinventario();
                        
                        foreach ($ajusteSobObjs as $ajusteSobObj) {
                            $ajusteSob+=$ajusteSobObj->getAjusteinventarioCantidad();
                        }
                        
                        $ajusteFal=0;
                        $ajusteFalObjs= \AjusteinventarioQuery::create()->filterByAjusteinventarioFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->filterByIdalmacen($idalmacen)->filterByIdproducto($objproducto->getIdproducto())->filterByAjusteinventarioTipo('faltante')->find();
                        $ajusteFalObj=new \Ajusteinventario();
                        
                        foreach ($ajusteFalObjs as $ajusteFalObj) {
                            $ajusteFal+=$ajusteFalObj->getAjusteinventarioCantidad();
                        }
                        
                        $ajuste=$ajusteSob - $ajusteFal;
                        
                        
                        $stockTeorico=0;
                        $stockTeorico = ($compra + $requisicionIng + $ordenTabIng + $exisinicial) - ($venta + $requisicionEg + $ordenTabEg);
                        $stockTeorico+=$ajuste;
                        
                        
                        $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                        $stockFisico = 0;
                        if (isset($productosReporte[$objproducto->getIdproducto()]))
                            $stockFisico = (isset($arrayReporte[$objproducto->getIdproducto()]['inventariomesdetalle_stockfisico'])) ? $arrayReporte[$objproducto->getIdproducto()]['inventariomesdetalle_stockfisico'] + $productosReporte[$objproducto->getIdproducto()]: $productosReporte[$objproducto->getIdproducto()];
                        
                        // para saber si explosionar o no, se verifican las requisiciones como ingreso y egreso al almacen seleccionado
                        $idproduc= $objproducto->getIdproducto();
                        //$conn = \Propel::getConnection();
                        $sqlrequisicioningreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto= '$idproduc') AND idalmacendestino= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana'";
                        $st = $conn->prepare($sqlrequisicioningreso);
                        $st->execute();
                        $results = $st->fetchAll(\PDO::FETCH_ASSOC);
                        
                        $sqlrequisicionegreso = "SELECT count(idrequisicion) FROM requisicion WHERE idrequisicion IN (SELECT idrequisicion FROM `requisiciondetalle` WHERE idproducto='$idproduc') AND idalmacenorigen= $idalmacen AND '$fecharequisicion6meses' <= requisicion_fecha AND requisicion_fecha <= '$fin_semana';";
                        $st2 = $conn->prepare($sqlrequisicionegreso);
                        $st2->execute();
                        $results2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                        //
                        
                        // si el producto receta fue recibido en el almacen como requisición o bien, no fue ni enviado ni recibido al almacen, la receta se EXPLOSIONA
                        // si la receta está compuesta a su vez de múltiples recetas en diferentes niveles, se desglosa todo el árbol de la receta para obtener los productos simples u hojas del árbol
                        if (($stockFisico != 0 && $objproducto->getProductoTipo() == 'subreceta') && (($results[0]['count(idrequisicion)'] == 0 && $results2[0]['count(idrequisicion)'] >0)  || ($results[0]['count(idrequisicion)'] == 0 && $results2[0]['count(idrequisicion)'] ==0))) {
                            
                            $recetasObj = \RecetaQuery::create()->filterByIdproducto($objproducto->getIdproducto())->find();
                            $recetaObj = new \Receta();
                            foreach ($recetasObj as $recetaObj) {
                                
                                $idpr = $recetaObj->getIdproductoreceta();
                                
                                
                                $productoquery1 = \ProductoQuery::create()->filterByIdproducto($idpr)->findOne();
                                
                                $tipopr= $productoquery1->getProductoTipo();
                                //si el producto de la receta primer nivel es hijo
                                if($tipopr=="subreceta")
                                {
                                    
                                    $recetasObjnivel2 = \RecetaQuery::create()->filterByIdproducto($idpr)->find();
                                    $recetaObjnivel2 = new \Receta();
                                    //se recorren elementos de la receta nivel 2
                                     foreach ($recetasObjnivel2 as $recetaObjnivel2) {
                                         $idprnivel2=$recetaObjnivel2->getIdproductoreceta();
                                         $productoquery2 = \ProductoQuery::create()->filterByIdproducto($idprnivel2)->findOne();
                                         $tipopr2= $productoquery2->getProductoTipo();
                                         //si el producto de la receta segundo nivel es hijo
                                         if($tipopr2=="subreceta")
                                         {
                                             $recetasObjnivel3 = \RecetaQuery::create()->filterByIdproducto($idprnivel2)->find();
                                             $recetaObjnivel3 = new \Receta();
                                             //se recorren elementos de la receta nivel 2
                                             
                                             foreach ($recetasObjnivel3 as $recetaObjnivel3) {
                                                 $idprnivel3=$recetaObjnivel3->getIdproductoreceta();
                                                 $productoquery3 = \ProductoQuery::create()->filterByIdproducto($idprnivel3)->findOne();
                                                 $tipopr3= $productoquery3->getProductoTipo();
                                                 //si el producto de la receta tercer nivel es hijo
                                                 if($tipopr3=="subreceta")
                                                 {
                                                     $recetasObjnivel4 = \RecetaQuery::create()->filterByIdproducto($idprnivel3)->find();
                                                     $recetaObjnivel4 = new \Receta();
                                                     //se recorren elementos de la receta nivel 3
                                                     foreach ($recetasObjnivel4 as $recetaObjnivel4) {
                                                         $idprnivel4=$recetaObjnivel4->getIdproductoreceta();
                                                         $productoquery4 = \ProductoQuery::create()->filterByIdproducto($idprnivel4)->findOne();
                                                         $tipopr4= $productoquery4->getProductoTipo();
                                                         //si el producto de la receta cuarto nivel es hijo
                                                         if($tipopr4=="subreceta")
                                                         {
                                                             $recetasObjnivel5 = \RecetaQuery::create()->filterByIdproducto($idprnivel4)->find();
                                                             $recetaObjnivel5 = new \Receta();
                                                             //se recorren elementos de la receta nivel 4
                                                             foreach ($recetasObjnivel5 as $recetaObjnivel5) {
                                                                 $idprnivel5=$recetaObjnivel5->getIdproductoreceta();
                                                                 $productoquery5 = \ProductoQuery::create()->filterByIdproducto($idprnivel5)->findOne();
                                                                 $tipopr5= $productoquery5->getProductoTipo();
                                                                 //si el producto de la receta quinto nivel es hijo
                                                                 if($tipopr5=="subreceta")
                                                                 {
                                                                     $recetasObjnivel6 = \RecetaQuery::create()->filterByIdproducto($idprnivel5)->find();
                                                                     $recetaObjnivel6 = new \Receta();
                                                                     //se recorren elementos de la receta nivel 5
                                                                     
                                                                     foreach ($recetasObjnivel6 as $recetaObjnivel6) {
                                                                         $idprnivel6=$recetaObjnivel6->getIdproductoreceta();
                                                                         $productoquery6 = \ProductoQuery::create()->filterByIdproducto($idprnivel6)->findOne();
                                                                         $tipopr6= $productoquery6->getProductoTipo();
                                                                         //si el producto de la receta sexto nivel es hijo
                                                                         if($tipopr6=="subreceta")
                                                                         {
                                                                             
                                                                         }
                                                                         else
                                                                         {
                                                                             $pos = 'inventariomesdetalle_stockfisico';
                                                                             $exp='inventariomesdetalle_explosion';
                                                                             $cant = $recetaObjnivel6->getRecetaCantidad()*$recetaObjnivel5->getRecetaCantidad()*$recetaObjnivel4->getRecetaCantidad()*$recetaObjnivel3->getRecetaCantidad()*$recetaObjnivel2->getRecetaCantidad()*$recetaObj->getRecetaCantidad();
                                                                             if (isset($arrayReporte[$idprnivel6]['inventariomesdetalle_diferencia'])) {
                                                                                 ////
                                                                                 //$arrayReporte[$idpr]['inventariomesdetalle_stockteorico'] += ($cant * $stockFisico);
                                                                                 $stockTeorico = $arrayReporte[$idprnivel6]['inventariomesdetalle_stockteorico'];
                                                                                 $explosion=$arrayReporte[$idprnivel6][$exp] + ($cant * $stockFisico);
                                                                                 $arrayReporte[$idprnivel6][$exp] = $explosion;
                                                                                 $stockFisicoh = $arrayReporte[$idprnivel6]['inventariomesdetalle_stockfisico'];
                                                                                 $arrayReporte[$idprnivel6]['inventariomesdetalle_totalfisico']=$explosion+$stockFisicoh;
                                                                                 $totalFisico=$arrayReporte[$idprnivel6]['inventariomesdetalle_totalfisico'];
                                                                                 $dif =$totalFisico - $stockTeorico;
                                                                                 $arrayReporte[$idprnivel6]['inventariomesdetalle_diferencia'] = $dif;
                                                                                 $costoPromedio = $arrayReporte[$idprnivel6]['inventariomesdetalle_costopromedio'];
                                                                                 $difImporte = $dif * $costoPromedio;
                                                                                 if (0 < $arrayReporte[$idprnivel6]['inventariomesdetalle_difimporte'])
                                                                                     $sobrante-=$arrayReporte[$idprnivel6]['inventariomesdetalle_difimporte'];
                                                                                 else
                                                                                     $faltante-=$arrayReporte[$idprnivel6]['inventariomesdetalle_difimporte'];
                                                                                 
                                                                                 $arrayReporte[$idprnivel6]['inventariomesdetalle_difimporte'] = $difImporte;
                                                                                 if (0 < $difImporte)
                                                                                     $sobrante+=$difImporte;
                                                                                 else
                                                                                     $faltante+=$difImporte;
                                                                             } else {
                                                                                 $arrayReporte[$idprnivel6][$exp] =(isset($arrayReporte[$idprnivel6][$exp]))?  $arrayReporte[$idprnivel6][$exp]+($cant * $stockFisico): ($cant * $stockFisico);
                                                                             }
                                                                         }
                                                                     }
                                                                 }
                                                                 else
                                                                 {
                                                                     $pos = 'inventariomesdetalle_stockfisico';
                                                                     $exp='inventariomesdetalle_explosion';
                                                                     $cant = $recetaObjnivel5->getRecetaCantidad()*$recetaObjnivel4->getRecetaCantidad()*$recetaObjnivel3->getRecetaCantidad()*$recetaObjnivel2->getRecetaCantidad()*$recetaObj->getRecetaCantidad();
                                                                     if (isset($arrayReporte[$idprnivel5]['inventariomesdetalle_diferencia'])) {
                                                                         ////
                                                                         //$arrayReporte[$idpr]['inventariomesdetalle_stockteorico'] += ($cant * $stockFisico);
                                                                         $stockTeorico = $arrayReporte[$idprnivel5]['inventariomesdetalle_stockteorico'];
                                                                         $explosion=$arrayReporte[$idprnivel5][$exp] + ($cant * $stockFisico);
                                                                         $arrayReporte[$idprnivel5][$exp] = $explosion;
                                                                         $stockFisicoh = $arrayReporte[$idprnivel5]['inventariomesdetalle_stockfisico'];
                                                                         $arrayReporte[$idprnivel5]['inventariomesdetalle_totalfisico']=$explosion+$stockFisicoh;
                                                                         $totalFisico=$arrayReporte[$idprnivel5]['inventariomesdetalle_totalfisico'];
                                                                         $dif =$totalFisico - $stockTeorico;
                                                                         $arrayReporte[$idprnivel5]['inventariomesdetalle_diferencia'] = $dif;
                                                                         $costoPromedio = $arrayReporte[$idprnivel5]['inventariomesdetalle_costopromedio'];
                                                                         $difImporte = $dif * $costoPromedio;
                                                                         if (0 < $arrayReporte[$idprnivel5]['inventariomesdetalle_difimporte'])
                                                                             $sobrante-=$arrayReporte[$idprnivel5]['inventariomesdetalle_difimporte'];
                                                                         else
                                                                             $faltante-=$arrayReporte[$idprnivel5]['inventariomesdetalle_difimporte'];
                                                                         
                                                                         $arrayReporte[$idprnivel5]['inventariomesdetalle_difimporte'] = $difImporte;
                                                                         if (0 < $difImporte)
                                                                             $sobrante+=$difImporte;
                                                                         else
                                                                             $faltante+=$difImporte;
                                                                     } else {
                                                                         $arrayReporte[$idprnivel5][$exp] =(isset($arrayReporte[$idprnivel5][$exp]))?  $arrayReporte[$idprnivel5][$exp]+($cant * $stockFisico): ($cant * $stockFisico);
                                                                     }
                                                                 }
                                                             }
                                                         }
                                                         else
                                                         {
                                                             $pos = 'inventariomesdetalle_stockfisico';
                                                             $exp='inventariomesdetalle_explosion';
                                                             $cant = $recetaObjnivel4->getRecetaCantidad()*$recetaObjnivel3->getRecetaCantidad()*$recetaObjnivel2->getRecetaCantidad()*$recetaObj->getRecetaCantidad();
                                                             if (isset($arrayReporte[$idprnivel4]['inventariomesdetalle_diferencia'])) {
                                                                 ////
                                                                 //$arrayReporte[$idpr]['inventariomesdetalle_stockteorico'] += ($cant * $stockFisico);
                                                                 $stockTeorico = $arrayReporte[$idprnivel4]['inventariomesdetalle_stockteorico'];
                                                                 $explosion=$arrayReporte[$idprnivel4][$exp] + ($cant * $stockFisico);
                                                                 $arrayReporte[$idprnivel4][$exp] = $explosion;
                                                                 $stockFisicoh = $arrayReporte[$idprnivel4]['inventariomesdetalle_stockfisico'];
                                                                 $arrayReporte[$idprnivel4]['inventariomesdetalle_totalfisico']=$explosion+$stockFisicoh;
                                                                 $totalFisico=$arrayReporte[$idprnivel4]['inventariomesdetalle_totalfisico'];
                                                                 $dif =$totalFisico - $stockTeorico;
                                                                 $arrayReporte[$idprnivel4]['inventariomesdetalle_diferencia'] = $dif;
                                                                 $costoPromedio = $arrayReporte[$idprnivel4]['inventariomesdetalle_costopromedio'];
                                                                 $difImporte = $dif * $costoPromedio;
                                                                 if (0 < $arrayReporte[$idprnivel4]['inventariomesdetalle_difimporte'])
                                                                     $sobrante-=$arrayReporte[$idprnivel4]['inventariomesdetalle_difimporte'];
                                                                 else
                                                                     $faltante-=$arrayReporte[$idprnivel4]['inventariomesdetalle_difimporte'];
                                                                 
                                                                 $arrayReporte[$idprnivel4]['inventariomesdetalle_difimporte'] = $difImporte;
                                                                 if (0 < $difImporte)
                                                                     $sobrante+=$difImporte;
                                                                 else
                                                                     $faltante+=$difImporte;
                                                             } else {
                                                                 $arrayReporte[$idprnivel4][$exp] =(isset($arrayReporte[$idprnivel4][$exp]))?  $arrayReporte[$idprnivel4][$exp]+($cant * $stockFisico): ($cant * $stockFisico);
                                                             }
                                                         }
                                                     }

                                                 }
                                                 else
                                                 {
                                                     $pos = 'inventariomesdetalle_stockfisico';
                                                     $exp='inventariomesdetalle_explosion';
                                                     $cant = $recetaObjnivel3->getRecetaCantidad()*$recetaObjnivel2->getRecetaCantidad()*$recetaObj->getRecetaCantidad();
                                                     if (isset($arrayReporte[$idprnivel3]['inventariomesdetalle_diferencia'])) {
                                                         ////
                                                         //$arrayReporte[$idpr]['inventariomesdetalle_stockteorico'] += ($cant * $stockFisico);
                                                         $stockTeorico = $arrayReporte[$idprnivel3]['inventariomesdetalle_stockteorico'];
                                                         $explosion=$arrayReporte[$idprnivel3][$exp] + ($cant * $stockFisico);
                                                         $arrayReporte[$idprnivel3][$exp] = $explosion;
                                                         $stockFisicoh = $arrayReporte[$idprnivel3]['inventariomesdetalle_stockfisico'];
                                                         $arrayReporte[$idprnivel3]['inventariomesdetalle_totalfisico']=$explosion+$stockFisicoh;
                                                         $totalFisico=$arrayReporte[$idprnivel3]['inventariomesdetalle_totalfisico'];
                                                         $dif =$totalFisico - $stockTeorico;
                                                         $arrayReporte[$idprnivel3]['inventariomesdetalle_diferencia'] = $dif;
                                                         $costoPromedio = $arrayReporte[$idprnivel3]['inventariomesdetalle_costopromedio'];
                                                         $difImporte = $dif * $costoPromedio;
                                                         if (0 < $arrayReporte[$idprnivel3]['inventariomesdetalle_difimporte'])
                                                             $sobrante-=$arrayReporte[$idprnivel3]['inventariomesdetalle_difimporte'];
                                                         else
                                                             $faltante-=$arrayReporte[$idprnivel3]['inventariomesdetalle_difimporte'];
                                                         
                                                         $arrayReporte[$idprnivel3]['inventariomesdetalle_difimporte'] = $difImporte;
                                                         if (0 < $difImporte)
                                                             $sobrante+=$difImporte;
                                                         else
                                                             $faltante+=$difImporte;
                                                     } else {
                                                         $arrayReporte[$idprnivel3][$exp] =(isset($arrayReporte[$idprnivel3][$exp]))?  $arrayReporte[$idprnivel3][$exp]+($cant * $stockFisico): ($cant * $stockFisico);
                                                     }
                                                 }
                                             }
                                         }
                                         else
                                         {
                                             
                                             $pos = 'inventariomesdetalle_stockfisico';
                                             $exp='inventariomesdetalle_explosion';
                                             $cant = $recetaObjnivel2->getRecetaCantidad()*$recetaObj->getRecetaCantidad();
                                             if (isset($arrayReporte[$idpr]['inventariomesdetalle_diferencia'])) {
                                                 ////
                                                 //$arrayReporte[$idpr]['inventariomesdetalle_stockteorico'] += ($cant * $stockFisico);
                                                 $stockTeorico = $arrayReporte[$idprnivel2]['inventariomesdetalle_stockteorico'];
                                                 $explosion=$arrayReporte[$idprnivel2][$exp] + ($cant * $stockFisico);
                                                 $arrayReporte[$idprnivel2][$exp] = $explosion;
                                                 $stockFisicoh = $arrayReporte[$idprnivel2]['inventariomesdetalle_stockfisico'];
                                                 $arrayReporte[$idprnivel2]['inventariomesdetalle_totalfisico']=$explosion+$stockFisicoh;
                                                 $totalFisico=$arrayReporte[$idprnivel2]['inventariomesdetalle_totalfisico'];
                                                 $dif =$totalFisico - $stockTeorico;
                                                 $arrayReporte[$idprnivel2]['inventariomesdetalle_diferencia'] = $dif;
                                                 $costoPromedio = $arrayReporte[$idprnivel2]['inventariomesdetalle_costopromedio'];
                                                 $difImporte = $dif * $costoPromedio;
                                                 if (0 < $arrayReporte[$idprnivel2]['inventariomesdetalle_difimporte'])
                                                     $sobrante-=$arrayReporte[$idprnivel2]['inventariomesdetalle_difimporte'];
                                                 else
                                                     $faltante-=$arrayReporte[$idprnivel2]['inventariomesdetalle_difimporte'];
                                                 
                                                 $arrayReporte[$idprnivel2]['inventariomesdetalle_difimporte'] = $difImporte;
                                                 if (0 < $difImporte)
                                                     $sobrante+=$difImporte;
                                                 else
                                                     $faltante+=$difImporte;
                                             } else {
                                                 $arrayReporte[$idprnivel2][$exp] =(isset($arrayReporte[$idprnivel2][$exp]))?  $arrayReporte[$idprnivel2][$exp]+($cant * $stockFisico): ($cant * $stockFisico);
                                             }
                                         }
                                         
                                     }
                                
                                }
                                else
                                {
                                    
                                    $pos = 'inventariomesdetalle_stockfisico';
                                    $exp='inventariomesdetalle_explosion';
                                    $cant = $recetaObj->getRecetaCantidad();
                                    if (isset($arrayReporte[$idpr]['inventariomesdetalle_diferencia'])) {
                                        ////
                                        //$arrayReporte[$idpr]['inventariomesdetalle_stockteorico'] += ($cant * $stockFisico);
                                        $stockTeorico = $arrayReporte[$idpr]['inventariomesdetalle_stockteorico'];
                                        $explosion=$arrayReporte[$idpr][$exp] + ($cant * $stockFisico);
                                        $arrayReporte[$idpr][$exp] = $explosion;
                                        $stockFisicoh = $arrayReporte[$idpr]['inventariomesdetalle_stockfisico'];
                                        $arrayReporte[$idpr]['inventariomesdetalle_totalfisico']=$explosion+$stockFisicoh;
                                        $totalFisico=$arrayReporte[$idpr]['inventariomesdetalle_totalfisico'];
                                        $dif =$totalFisico - $stockTeorico;
                                        $arrayReporte[$idpr]['inventariomesdetalle_diferencia'] = $dif;
                                        $costoPromedio = $arrayReporte[$idpr]['inventariomesdetalle_costopromedio'];
                                        $difImporte = $dif * $costoPromedio;
                                        if (0 < $arrayReporte[$idpr]['inventariomesdetalle_difimporte'])
                                            $sobrante-=$arrayReporte[$idpr]['inventariomesdetalle_difimporte'];
                                        else
                                            $faltante-=$arrayReporte[$idpr]['inventariomesdetalle_difimporte'];
                                    
                                        $arrayReporte[$idpr]['inventariomesdetalle_difimporte'] = $difImporte;
                                        if (0 < $difImporte)
                                            $sobrante+=$difImporte;
                                        else
                                            $faltante+=$difImporte;
                                    } else {
                                        $arrayReporte[$idpr][$exp] =(isset($arrayReporte[$idpr][$exp]))?  $arrayReporte[$idpr][$exp]+($cant * $stockFisico): ($cant * $stockFisico);
                                    }
                                }
                            }//termina for each de elementos de la receta primer nivel
                        
                            /*if ($objproducto->getIdProducto()==22711)
                            {
                                echo " com".$compra." reqin ".$requisicionIng." oin ".$ordenTabIng." exis".$exisinicial." venta ".$venta." reqeg ".$requisicionEg." oe".$ordenTabEg;
                                exit();
                                $stockTeorico=0 $compra + $requisicionIng + $ordenTabIng + $exisinicial) - ($venta + $requisicionEg + $ordenTabEg);
                            }*/
                            $stockFisico = 0; // si el producto padre es subreceta, no se le coloca stockfisico
                            if($exisinicial==0)
                            {
                                $stockTeorico=0; // se resetea el stockteorico para evitar que se cargue a otro producto
                            }
                            else
                            {
                                $stockTeorico= ($compra + $requisicionIng + $ordenTabIng + $exisinicial) - ($venta + $requisicionEg + $ordenTabEg);
                            }
                            
                        }
                            $idproducto = $objproducto->getIdproducto();
                            $explosion=(isset($arrayReporte[$idproducto]['inventariomesdetalle_explosion'])) ? $arrayReporte[$idproducto]['inventariomesdetalle_explosion']  : 0;
                            $totalFisico=$explosion+$stockFisico;
                            $dif =$totalFisico - $stockTeorico;
                        
                        $has_compras = \CompraQuery::create()->filterByIdsucursal($idsucursal)->count();
                        if ($has_compras > 0) {
                            $costoPromedio = ($compra != 0 && $totalProductoCompra != 0) ? $totalProductoCompra / $compra : 0;
                            $costoPromedio = $costoPromedio;
                        } else {
                            $costoPromedio = $objproducto->getProductoCosto();
                        }
                        
                        
                        $colorbg = ($color) ? $bgfila : $bgfila2;
                        $color = !$color;
                        
                        
                        $costoPromedio = ($costoPromedio == 0) ? $objproducto->getProductoCosto() : $costoPromedio;
                        
                        $impFis = $totalFisico * $costoPromedio;
                        //$stockFisico = ($stockFisico == 0) ? "0" : $stockFisico;
                        
                        $subcat=$objproducto->getCategoriaRelatedByIdsubcategoria()->getCategoriaNombre();
                        $difImporte = $dif * $costoPromedio;
                        if (0 < $difImporte)
                            $sobrante+=$difImporte;
                        else
                            $faltante+=$difImporte;
                        $cat = $objproducto->getCategoriaRelatedByIdcategoria()->getIdcategoria();
                        if ($cat == 1)
                            $falim+=$impFis;
                        if ($cat == 2)
                            $fbebi+=$impFis;
                        $impFisTotal+=$impFis;
                        $idproducto = $objproducto->getIdproducto();
                        $nomPro = $objproducto->getProductoNombre();
                        $arrayReporte[$idproducto]['colorbg'] = $colorbg;
                        $arrayReporte[$idproducto]['idcategoria'] = $colorbg;
                        $arrayReporte[$idproducto]['row'] = $row;
                        $arrayReporte[$idproducto]['cat'] = $cat;
                        $arrayReporte[$idproducto]['nomPro'] = $nomPro;
                        $arrayReporte[$idproducto]['inventariomesdetalle_stockinicial'] = $exisinicial;
                        $arrayReporte[$idproducto]['inventariomesdetalle_ingresocompra'] = $compra;
                        $arrayReporte[$idproducto]['inventariomesdetalle_ingresorequisicion'] = $requisicionIng;
                        $arrayReporte[$idproducto]['inventariomesdetalle_ingresoordentablajeria'] = $ordenTabIng;
                        $arrayReporte[$idproducto]['inventariomesdetalle_egresoventa'] = $venta;
                        $arrayReporte[$idproducto]['inventariomesdetalle_egresorequisicion'] = $requisicionEg;
                        $arrayReporte[$idproducto]['inventariomesdetalle_egresoordentablajeria'] = $ordenTabEg;
                        $arrayReporte[$idproducto]['inventariomesdetalle_egresodevolucion'] = $devolucion;
                        $arrayReporte[$idproducto]['inventariomesdetalle_stockteorico'] = $stockTeorico;
                        $arrayReporte[$idproducto]['unidad'] = $unidad;
                        $arrayReporte[$idproducto]['inventariomesdetalle_stockfisico'] = $stockFisico;
                        $arrayReporte[$idproducto]['inventariomesdetalle_importefisico'] = $impFis;
                        $arrayReporte[$idproducto]['inventariomesdetalle_diferencia'] = $dif;
                        $arrayReporte[$idproducto]['inventariomesdetalle_costopromedio'] = $costoPromedio;
                        $arrayReporte[$idproducto]['inventariomesdetalle_difimporte'] = $difImporte;
                        $arrayReporte[$idproducto]['inventariomesdetalle_explosion'] = $explosion;
                        $arrayReporte[$idproducto]['inventariomesdetalle_totalfisico'] = $totalFisico;
                        $arrayReporte[$idproducto]['inventariomesdetalle_reajuste'] = $ajuste;
                        $arrayReporte[$idproducto]['subcategoria'] =$subcat;
                        $row++;
                        $rowmax=$row;
                        }
                    }
                    }
                }
                
                $categoriasObj = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->orderByCategoriaNombre('asc')->find();
                $categoriaObj = new \Categoria();
                foreach ($categoriasObj as $categoriaObj) {
                    $nombreSubcategoria = $categoriaObj->getCategoriaNombre();
                    array_push($reporte, "<tr><td>$nombreSubcategoria</td></tr>");
                    $objproductos = \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByIdsubcategoria($categoriaObj->getIdcategoria())->filterByProductoTipo(array('simple', 'subreceta'))->orderByProductoNombre('asc')->find();
                    $objproducto = new \Producto();
                    foreach ($objproductos as $objproducto) {
                        
                        if($objproducto->getCategoriaRelatedByIdsubcategoria()->getCategoriaAlmacenable())
                        {
                            
                        $idproducto = $objproducto->getIdproducto();
                        $colorbg = $arrayReporte[$idproducto]['colorbg'];
                        $cat = $arrayReporte[$idproducto]['idcategoria'];
                        $row = $arrayReporte[$idproducto]['row'];
                        $nomPro = $arrayReporte[$idproducto]['nomPro'];
                        $exisinicial = $arrayReporte[$idproducto]['inventariomesdetalle_stockinicial'];
                        $compra = $arrayReporte[$idproducto]['inventariomesdetalle_ingresocompra'];
                        $requisicionIng = $arrayReporte[$idproducto]['inventariomesdetalle_ingresorequisicion'];
                        $ordenTabIng = $arrayReporte[$idproducto]['inventariomesdetalle_ingresoordentablajeria'];
                        $venta = $arrayReporte[$idproducto]['inventariomesdetalle_egresoventa'];
                        $requisicionEg = $arrayReporte[$idproducto]['inventariomesdetalle_egresorequisicion'];
                        $ordenTabEg = $arrayReporte[$idproducto]['inventariomesdetalle_egresoordentablajeria'];
                        $devolucion = $arrayReporte[$idproducto]['inventariomesdetalle_egresodevolucion'];
                        $stockTeorico = $arrayReporte[$idproducto]['inventariomesdetalle_stockteorico'];
                        $unidad = $arrayReporte[$idproducto]['unidad'];
                        $stockFisico = $arrayReporte[$idproducto]['inventariomesdetalle_stockfisico'];
                        $impFis = $arrayReporte[$idproducto]['inventariomesdetalle_importefisico'];
                        $dif = $arrayReporte[$idproducto]['inventariomesdetalle_diferencia'];
                        $costoPromedio = $arrayReporte[$idproducto]['inventariomesdetalle_costopromedio'];
                        $costoPromedio = abs($costoPromedio);
                        $difImporte = $arrayReporte[$idproducto]['inventariomesdetalle_difimporte'];
                        $explosion = $arrayReporte[$idproducto]['inventariomesdetalle_explosion'];
                        $totalFisico=$arrayReporte[$idproducto]['inventariomesdetalle_totalfisico'];
                        $ajuste=$arrayReporte[$idproducto]['inventariomesdetalle_reajuste'];
                        $subcat=$arrayReporte[$idproducto]['subcategoria'];
                            
                            if($explosion!=0 && $stockFisico==0 && $stockTeorico==0)
                            {
                                $nomPro = $objproducto->getProductoNombre();
                                $arrayReporte[$idproducto]['nomPro'] = $nomPro;
                                $arrayReporte[$idproducto]['unidad'] = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                                $unidad =$objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                                $row= $rowmax++;
                                $exisinicial = 0;
                                $compra = 0;
                                $requisicionIng = 0;
                                $ordenTabIng =0;
                                $venta = 0;
                                $requisicionEg = 0;
                                $ordenTabEg = 0;
                                $devolucion = 0;
                                $stockTeorico = 0;
                                $stockFisico = 0;
                                $impFis = 0;
                                $dif = 0-$explosion;
                                $costoPromedio = abs($objproducto->getProductoCosto());
                                $difImporte = (0-$explosion)*$objproducto->getProductoCosto();
                                $explosion = $explosion;
                                $totalFisico=$explosion;
                                $ajuste=0;
                                $subcat=$nombreSubcategoria;
                                ///
                                
                                $arrayReporte[$idproducto]['inventariomesdetalle_stockinicial'] = 0;
                                $arrayReporte[$idproducto]['inventariomesdetalle_ingresocompra'] = 0;
                                $arrayReporte[$idproducto]['inventariomesdetalle_ingresorequisicion'] = 0;
                                $arrayReporte[$idproducto]['inventariomesdetalle_ingresoordentablajeria'] = 0;
                                $arrayReporte[$idproducto]['inventariomesdetalle_egresoventa'] = 0;
                                $arrayReporte[$idproducto]['inventariomesdetalle_egresorequisicion'] = 0;
                                $arrayReporte[$idproducto]['inventariomesdetalle_egresoordentablajeria'] = 0;
                                $arrayReporte[$idproducto]['inventariomesdetalle_egresodevolucion'] = 0;
                                $arrayReporte[$idproducto]['inventariomesdetalle_stockteorico'] = 0;
                                //$arrayReporte[$idproducto]['unidad'] = $unidad;
                                $arrayReporte[$idproducto]['inventariomesdetalle_stockfisico'] = 0;
                                $arrayReporte[$idproducto]['inventariomesdetalle_importefisico'] = 0;
                                $arrayReporte[$idproducto]['inventariomesdetalle_diferencia'] = 0-$explosion;
                                $arrayReporte[$idproducto]['inventariomesdetalle_costopromedio'] = $objproducto->getProductoCosto();
                                $arrayReporte[$idproducto]['inventariomesdetalle_difimporte'] = (0-$explosion)*$objproducto->getProductoCosto();
                                $arrayReporte[$idproducto]['inventariomesdetalle_explosion'] = $explosion;
                                $arrayReporte[$idproducto]['inventariomesdetalle_totalfisico'] = $explosion;
                                $arrayReporte[$idproducto]['inventariomesdetalle_reajuste'] = 0;
                                $arrayReporte[$idproducto]['subcategoria'] =$subcat;
                            }
                            if($dif!=0 || $explosion!=0 || $stockFisico!=0)
                            {
                        array_push
                        ($reporte,
                         "<tr id='$idproducto' bgcolor='" . $colorbg . "'>"
                         . "<td><input type='hidden' name='reporte[$row][idcategoria]' value='$cat'/><input type='hidden' name='reporte[$row][idproducto]' value='$idproducto' />$idproducto</td>"
                         . "<td>$nomPro</td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_stockinicial]' value='$exisinicial'> $exisinicial</td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_ingresocompra]' value='$compra'>$compra</td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_ingresorequisicion]' value='$requisicionIng'>$requisicionIng</td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_ingresoordentablajeria]' value='$ordenTabIng'>$ordenTabIng</td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresoventa]' value='$venta'>$venta</td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresorequisicion]' value='$requisicionEg'>$requisicionEg</td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresoordentablajeria]' value='$ordenTabEg'>$ordenTabEg</td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresodevolucion]' value='$devolucion'>$devolucion</td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_reajuste]' value='$ajuste'>$ajuste</td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_stockteorico]' value='$stockTeorico'>$stockTeorico</td>"
                         . "<td>$unidad</td><td><input class='numero' required type='text' name='reporte[$row][inventariomesdetalle_stockfisico]' value='$stockFisico'></td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_explosion]' value='$explosion'>$explosion</td>"
                         . "<td class='inventariomesdetalle_totalfisico'><input type='hidden'  name='reporte[$row][inventariomesdetalle_totalfisico]' value='$totalFisico'><span>$totalFisico</span></td>"
                         . "<td class='inventariomesdetalle_importefisico'><input type='hidden'  name='reporte[$row][inventariomesdetalle_importefisico]' value='$impFis'><span>$impFis</span></td>"
                         . "<td class='inventariomesdetalle_diferencia'><input type='hidden'  name='reporte[$row][inventariomesdetalle_diferencia]' value='$dif'> <span>$dif</span></td>"
                         . "<td><input type='hidden'  name='reporte[$row][inventariomesdetalle_costopromedio]' value='$costoPromedio'>$costoPromedio</td>"
                         . "<td class='inventariomesdetalle_difimporte'><input type='hidden'  name='reporte[$row][inventariomesdetalle_difimporte]' value='$difImporte'><span>$difImporte</span></td>"
                         . "<td>$subcat</td>"
                         . "<td><input type='checkbox' name='reporte[$row][inventariomesdetalle_revisada]'></td>"
                         . "</tr>");
                        }
                        }
                        
                    }
                }
                //colocar otro for de subcategoria y dentro otro de producto para ordenar
                $total = $sobrante + $faltante;
                $responsable = \AlmacenQuery::create()->filterByIdalmacen($idalmacen)->findOne()->getAlmacenEncargado();
                if ($responsable == "")
                    $responsable = "N/A";
                array_push($reporte, "<tr><td>Responsable</td><td>$responsable</td><td></td><td></td><td></td><td></td><td><td></td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Final alimentos</td><td class='inventariomes_finalalimentos'><input type='hidden'  name='inventariomes_finalalimentos' value='$falim'><span>$falim</span></td></tr>");
                array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Final bebidas</td><td class='inventariomes_finalbebidas'><input type='hidden'  name='inventariomes_finalbebidas' value='$fbebi'><span>$fbebi</span></td></tr>");
                array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Sobrante</td><td class='inventariomes_sobrantes'><input type='hidden'  name='inventariomes_sobrantes' value='$sobrante'><span>$sobrante</span></td></tr>");
                array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Faltante</td><td class='inventariomes_faltantes'><input type='hidden'  name='inventariomes_faltantes' value='$faltante'><span>$faltante</span></td></tr>");
                array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Total</td><td class='inventariomes_total'><input type='hidden'  name='inventariomes_total' value='$total'><span>$total</span></td></tr>");
                array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Importe Fisico</td><td class='inventariomes_totalimportefisico'><input type='hidden'  name='inventariomes_totalimportefisico' value='$impFisTotal'><span>$impFisTotal</span></td></tr>");
                return $this->getResponse()->setContent(json_encode($reporte));
            }
            $conn->useDebug(false);
            Propel::close();
        }
        
        public function encargadoAction() {
            $session = new \Shared\Session\AouthSession();
            $session = $session->getData();
            
            $request = $this->getRequest();
            if ($request->isPost()) {
                $post_data = $request->getPost();
                $id = $post_data['id'];
                $nombre = \AlmacenQuery::create()->filterByIdalmacen($id)->findOne()->getAlmacenEncargado();
                $con = true;
                if ($nombre == "")
                    $con = false;
                $inventario_anterior = \InventariomesQuery::create()->filterByIdalmacen($id)->exists();
                $fecha=null;
                if ($inventario_anterior)
                {
                    $fecha = \InventariomesQuery::create()->filterByIdalmacen($id)->orderByInventariomesFecha('desc')->findOne()->getInventariomesFecha('Y-m-d');
                }
                else
                {
                    $idsuc= $session['idsucursal'];
                    $semana_rev = \SemanarevisadaQuery::create()->filterByIdsucursal($idsuc)->findOne()->getSemanarevisadasemana();
                    
                    $anio_act = \SemanarevisadaQuery::create()->filterByIdsucursal($idsuc)->findOne()->getSemanarevisadaanio();
                    $time = strtotime("1 January $anio_act", time());
                    $day = date('w', $time);
                    $time += ((7 * $semana_rev) + 1 - $day) * 24 * 3600;
                    $time += 6 * 24 * 3600;
                    $fecha = date('Y-m-d', $time);
                }
                $resp=array('con' => $con,'fecha'=>$fecha);
                return $this->getResponse()->setContent(json_encode($resp));
            }
        }
        
        public function editarAction() {
            $session = new \Shared\Session\AouthSession();
            $session = $session->getData();
            
            $idempresa = $session['idempresa'];
            $idsucursal = $session['idsucursal'];
            $request = $this->getRequest();
            $id = $this->params()->fromRoute('id');
            $exist = \InventariomesQuery::create()->filterByIdinventariomes($id)->exists();
            if ($exist) {
                $inventariomes = \InventariomesQuery::create()->findPk($id);
                if ($request->isPost()) {
                    $post_data = $request->getPost();
                    if (isset($post_data['generar_pdf']) || isset($post_data['generar_excel'])) {
                        $reporte = array();
                        $subcategoriasObj = \CategoriaQuery::create()->filterByIdcategoriapadre(1)->orderByCategoriaNombre('asc')->find();
                        $subcategoriaObj = new \Categoria();
                        array_push($reporte, array('uno' => 'ID', 'dos' => 'Nomb', 'tres' => 'ExistIni', 'cuatro' => 'Cmpr', 'cinco' => 'ReqIng', 'seis' => 'OrdTabIng', 'siete' => 'Vnt', 'ocho' => 'ReqEg', 'nueve' => 'OrdTabEg', 'diez' => 'Dev', 'once' => 'Ajst', 'doce' => 'StT', 'trece' => 'Unid', 'catorce' => 'StF', 'quince' => 'Explo', 'dieciseis' => 'FisTot', 'diecisiete' => 'ImpFis', 'dieciocho' => 'DifCant', 'diecinueve' => 'CostProm', 'veinte' => 'DifImp', 'veintiuno' => 'SubCat', 'veintidos' => 'Revisado'));
                        foreach ($subcategoriasObj as $subcategoriaObj) {
                            array_push($reporte, array('uno' => 'Subcategoria', 'dos' => $subcategoriaObj->getCategoriaNombre(), 'tres' => '', 'cuatro' => '', 'cinco' => '', 'seis' => '', 'siete' => '', 'ocho' => '', 'nueve' => '', 'diez' => '', 'once' => '', 'doce' => '', 'trece' => '', 'catorce' => '', 'quince' => '', 'dieciseis' => '', 'diecisiete' => '', 'dieciocho' => '', 'diecinueve' => '', 'veinte' => '', 'veintiuno' => '', 'veintidos' => ''));
                            $productosObj = \ProductoQuery::create()->filterByIdsubcategoria($subcategoriaObj->getIdcategoria())->orderByProductoNombre('asc')->find();
                            $objproducto = new \Producto();
                            foreach ($productosObj as $objproducto) {
                                $exists = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id)->filterByIdproducto($objproducto->getIdproducto())->exists();
                                if ($exists) {
                                    $inventariomesdetalle = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id)->filterByIdproducto($objproducto->getIdproducto())->findOne();
                                    $idproducto = $objproducto->getIdproducto();
                                    $productoNombre = $objproducto->getProductoNombre();
                                    $categoria = $objproducto->getCategoriaRelatedByIdcategoria()->getCategoriaNombre();
                                    $stockinicial = $inventariomesdetalle->getInventariomesdetalleStockinicial();
                                    $ingresocompra = $inventariomesdetalle->getInventariomesdetalleIngresocompra();
                                    $ingresorequisicion = $inventariomesdetalle->getInventariomesdetalleIngresorequisicion();
                                    $ingresoordentablajeria = $inventariomesdetalle->getInventariomesdetalleIngresoordentablajeria();
                                    $egresoventa = $inventariomesdetalle->getInventariomesdetalleEgresoventa();
                                    $egresorequisicion = $inventariomesdetalle->getInventariomesdetalleEgresorequisicion();
                                    $egresoordentablajeria = $inventariomesdetalle->getInventariomesdetalleEgresoordentablajeria();
                                    $egresodevolucion = $inventariomesdetalle->getInventariomesdetalleEgresodevolucion();
                                    $stockteorico = $inventariomesdetalle->getInventariomesdetalleStockteorico();
                                    $unidadMedida = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                                    $stockfisico = $inventariomesdetalle->getInventariomesdetalleStockfisico();
                                    $explosion = $inventariomesdetalle->getInventariomesdetalleExplosion();
                                    $totalFisico = $inventariomesdetalle->getInventariomesdetalleTotalfisico();
                                    $importefisico = $inventariomesdetalle->getInventariomesdetalleImportefisico();
                                    $diferencia = $inventariomesdetalle->getInventariomesdetalleDiferencia();
                                    $costopromedio = $inventariomesdetalle->getInventariomesdetalleCostopromedio();
                                    $difimporte = $inventariomesdetalle->getInventariomesdetalleDifimporte();
                                    $revisada = (bool) ($inventariomesdetalle->getInventariomesdetalleRevisada()) ? "Si" : "No";
                                    $ajuste= $inventariomesdetalle->getInventariomesdetalleReajuste();
                                    $subcat= \ProductoQuery::create()->filterByIdproducto($idproducto)->findOne()->getCategoriaRelatedByIdsubcategoria()->getCategoriaNombre();
                                    array_push($reporte, array('uno' => $idproducto, 'dos' => $productoNombre, 'tres' => $stockinicial, 'cuatro' => $ingresocompra, 'cinco' => $ingresorequisicion, 'seis' => $ingresoordentablajeria, 'siete' => $egresoventa, 'ocho' => $egresorequisicion, 'nueve' => $egresoordentablajeria, 'diez' => $egresodevolucion , 'once' => $ajuste, 'doce' => $stockteorico, 'trece' => $unidadMedida, 'catorce' => $stockfisico, 'quince' => $explosion, 'dieciseis' => $totalFisico, 'diecisiete' => $importefisico, 'dieciocho' => $diferencia, 'diecinueve' => $costopromedio, 'veinte' => $difimporte, 'veintiuno' => $subcat,'veintidos' => $revisada));
                                }
                            }
                        }
                        $subcategoriasObj = \CategoriaQuery::create()->filterByIdcategoriapadre(2)->orderByCategoriaNombre('asc')->find();
                        $subcategoriaObj = new \Categoria();
                        foreach ($subcategoriasObj as $subcategoriaObj) {
                            array_push($reporte, array('uno' => 'Subcategoria', 'dos' => $subcategoriaObj->getCategoriaNombre(), 'tres' => '', 'cuatro' => '', 'cinco' => '', 'seis' => '', 'siete' => '', 'ocho' => '', 'nueve' => '', 'diez' => '', 'once' => '', 'doce' => '', 'trece' => '', 'catorce' => '', 'quince' => '', 'dieciseis' => '', 'diecisiete' => '', 'dieciocho' => '', 'diecinueve' => '', 'veinte' => '', 'veintiuno' => '','veintidos' => ''));
                            $productosObj = \ProductoQuery::create()->filterByIdsubcategoria($subcategoriaObj->getIdcategoria())->orderByProductoNombre('asc')->find();
                            $objproducto = new \Producto();
                            foreach ($productosObj as $objproducto) {
                                $exists = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id)->filterByIdproducto($objproducto->getIdproducto())->exists();
                                if ($exists) {
                                    $inventariomesdetalle = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id)->filterByIdproducto($objproducto->getIdproducto())->findOne();
                                    $idproducto = $objproducto->getIdproducto();
                                    $productoNombre = $objproducto->getProductoNombre();
                                    $categoria = $objproducto->getCategoriaRelatedByIdcategoria()->getCategoriaNombre();
                                    $stockinicial = $inventariomesdetalle->getInventariomesdetalleStockinicial();
                                    $ingresocompra = $inventariomesdetalle->getInventariomesdetalleIngresocompra();
                                    $ingresorequisicion = $inventariomesdetalle->getInventariomesdetalleIngresorequisicion();
                                    $ingresoordentablajeria = $inventariomesdetalle->getInventariomesdetalleIngresoordentablajeria();
                                    $egresoventa = $inventariomesdetalle->getInventariomesdetalleEgresoventa();
                                    $egresorequisicion = $inventariomesdetalle->getInventariomesdetalleEgresorequisicion();
                                    $egresoordentablajeria = $inventariomesdetalle->getInventariomesdetalleEgresoordentablajeria();
                                    $egresodevolucion = $inventariomesdetalle->getInventariomesdetalleEgresodevolucion();
                                    $stockteorico = $inventariomesdetalle->getInventariomesdetalleStockteorico();
                                    $unidadMedida = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                                    $stockfisico = $inventariomesdetalle->getInventariomesdetalleStockfisico();
                                    $explosion = $inventariomesdetalle->getInventariomesdetalleExplosion();
                                    $totalFisico = $inventariomesdetalle->getInventariomesdetalleTotalfisico();
                                    $importefisico = $inventariomesdetalle->getInventariomesdetalleImportefisico();
                                    $diferencia = $inventariomesdetalle->getInventariomesdetalleDiferencia();
                                    $costopromedio = $inventariomesdetalle->getInventariomesdetalleCostopromedio();
                                    $difimporte = $inventariomesdetalle->getInventariomesdetalleDifimporte();
                                    $revisada = (bool) ($inventariomesdetalle->getInventariomesdetalleRevisada()) ? "Si" : "No";
                                    $ajuste= $inventariomesdetalle->getInventariomesdetalleReajuste();
                                    $subcat= \ProductoQuery::create()->filterByIdproducto($idproducto)->findOne()->getCategoriaRelatedByIdsubcategoria()->getCategoriaNombre();
                                    array_push($reporte, array('uno' => $idproducto, 'dos' => $productoNombre, 'tres' => $stockinicial, 'cuatro' => $ingresocompra, 'cinco' => $ingresorequisicion, 'seis' => $ingresoordentablajeria, 'siete' => $egresoventa, 'ocho' => $egresorequisicion, 'nueve' => $egresoordentablajeria, 'diez' => $egresodevolucion , 'once' => $ajuste, 'doce' => $stockteorico, 'trece' => $unidadMedida, 'catorce' => $stockfisico, 'quince' => $explosion, 'dieciseis' => $totalFisico, 'diecisiete' => $importefisico, 'dieciocho' => $diferencia, 'diecinueve' => $costopromedio, 'veinte' => $difimporte, 'veintiuno' => $subcat, 'veintidos' => $revisada));
                                }
                            }
                        }
                        $subcategoriasObj = \CategoriaQuery::create()->filterByIdcategoriapadre(3)->orderByCategoriaNombre('asc')->find();
                        $subcategoriaObj = new \Categoria();
                        foreach ($subcategoriasObj as $subcategoriaObj) {
                            array_push($reporte, array('uno' => 'Subcategoria', 'dos' => $subcategoriaObj->getCategoriaNombre(), 'tres' => '', 'cuatro' => '', 'cinco' => '', 'seis' => '', 'siete' => '', 'ocho' => '', 'nueve' => '', 'diez' => '', 'once' => '', 'doce' => '', 'trece' => '', 'catorce' => '', 'quince' => '', 'dieciseis' => '', 'diecisiete' => '', 'dieciocho' => '', 'diecinueve' => '', 'veinte' => '', 'veintiuno' => '', 'veintidos' => ''));
                            $productosObj = \ProductoQuery::create()->filterByIdsubcategoria($subcategoriaObj->getIdcategoria())->orderByProductoNombre('asc')->find();
                            $objproducto = new \Producto();
                            foreach ($productosObj as $objproducto) {
                                $exists = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id)->filterByIdproducto($objproducto->getIdproducto())->exists();
                                if ($exists) {
                                    $inventariomesdetalle = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id)->filterByIdproducto($objproducto->getIdproducto())->findOne();
                                    $idproducto = $objproducto->getIdproducto();
                                    $productoNombre = $objproducto->getProductoNombre();
                                    $categoria = $objproducto->getCategoriaRelatedByIdcategoria()->getCategoriaNombre();
                                    $stockinicial = $inventariomesdetalle->getInventariomesdetalleStockinicial();
                                    $ingresocompra = $inventariomesdetalle->getInventariomesdetalleIngresocompra();
                                    $ingresorequisicion = $inventariomesdetalle->getInventariomesdetalleIngresorequisicion();
                                    $ingresoordentablajeria = $inventariomesdetalle->getInventariomesdetalleIngresoordentablajeria();
                                    $egresoventa = $inventariomesdetalle->getInventariomesdetalleEgresoventa();
                                    $egresorequisicion = $inventariomesdetalle->getInventariomesdetalleEgresorequisicion();
                                    $egresoordentablajeria = $inventariomesdetalle->getInventariomesdetalleEgresoordentablajeria();
                                    $egresodevolucion = $inventariomesdetalle->getInventariomesdetalleEgresodevolucion();
                                    $stockteorico = $inventariomesdetalle->getInventariomesdetalleStockteorico();
                                    $unidadMedida = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                                    $stockfisico = $inventariomesdetalle->getInventariomesdetalleStockfisico();
                                    $explosion = $inventariomesdetalle->getInventariomesdetalleExplosion();
                                    $totalFisico = $inventariomesdetalle->getInventariomesdetalleTotalfisico();
                                    $importefisico = $inventariomesdetalle->getInventariomesdetalleImportefisico();
                                    $diferencia = $inventariomesdetalle->getInventariomesdetalleDiferencia();
                                    $costopromedio = $inventariomesdetalle->getInventariomesdetalleCostopromedio();
                                    $difimporte = $inventariomesdetalle->getInventariomesdetalleDifimporte();
                                    $revisada = (bool) ($inventariomesdetalle->getInventariomesdetalleRevisada()) ? "Si" : "No";
                                    $ajuste= $inventariomesdetalle->getInventariomesdetalleReajuste();
                                    $subcat= \ProductoQuery::create()->filterByIdproducto($idproducto)->findOne()->getCategoriaRelatedByIdsubcategoria()->getCategoriaNombre();
                                    array_push($reporte, array('uno' => $idproducto, 'dos' => $productoNombre, 'tres' => $stockinicial, 'cuatro' => $ingresocompra, 'cinco' => $ingresorequisicion, 'seis' => $ingresoordentablajeria, 'siete' => $egresoventa, 'ocho' => $egresorequisicion, 'nueve' => $egresoordentablajeria, 'diez' => $egresodevolucion , 'once' => $ajuste, 'doce' => $stockteorico, 'trece' => $unidadMedida, 'catorce' => $stockfisico, 'quince' => $explosion, 'dieciseis' => $totalFisico, 'diecisiete' => $importefisico, 'dieciocho' => $diferencia, 'diecinueve' => $costopromedio, 'veinte' => $difimporte, 'veintiuno' => $subcat,'veintidos' => $revisada));
                                }
                            }
                        }
                        
                        $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
                        $nombreSucursal = \SucursalQuery::create()->findPk($idsucursal)->getSucursalNombre();
                        $nombreAlmacen = \AlmacenQuery::create()->findPk($inventariomes->getIdalmacen())->getAlmacenNombre();
                        $fecha = \InventariomesQuery::create()->filterByIdinventariomes($id)->findOne()->getInventariomesFecha();
                        $auditor= \InventariomesQuery::create()->filterByIdinventariomes($id)->findOne()->getUsuarioRelatedByIdauditor()->getUsuarioNombre();
                        $revisada= \InventariomesQuery::create()->filterByIdinventariomes($id)->findOne()->getInventariomesRevisada();
                        $revisada=($revisada==1) ? "Si" : "No";
                        $template = '/cierresemana.xlsx';
                        $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
                        
                        $config = array(
                                        'template' => $template,
                                        'templateDir' => $templateDir
                                        );
                        $R = new \PHPReport($config);
                        $R->load(array(
                                       array(
                                             'id' => 'compania',
                                             'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $nombreSucursal, 'almacen' => $nombreAlmacen),
                                             ),
                                       array(
                                             'id' => 'reporte',
                                             'data' => array('fecha' => $fecha, 'auditor' => $auditor, 'revision' => $revisada),
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
                        foreach ($post_data as $key => $value) {
                            if (\InventariomesPeer::getTableMap()->hasColumn($key)) {
                                $inventariomes->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                            }
                        }
                        if ($post_data['inventariomes_revisada']) {
                            $inventariomes->setIdauditor($session['idusuario']);
                        }
                        $inventariomes->save();
                        
                        //Requisicion DETALLES
                        $inventariomes->getInventariomesdetalles()->delete();
                        foreach ($post_data['reporte'] as $reporte) {
                            $inventariocierremes_detalle = new \Inventariomesdetalle();
                            foreach ($reporte as $key => $value) {
                                if (\InventariomesdetallePeer::getTableMap()->hasColumn($key)) {
                                    $inventariocierremes_detalle->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                                }
                            }
                            if (isset($reporte['inventariomesdetalle_revisada'])) {
                                $inventariocierremes_detalle->setInventariomesdetalleRevisada(1);
                            }
                            $inventariocierremes_detalle->setIdinventariomes($inventariomes->getIdinventariomes());
                            $inventariocierremes_detalle->save();
                        }
                        $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                        return $this->redirect()->toUrl('/auditoria/cierresemana');
                    }
                }
                $fecha = $inventariomes->getInventariomesFecha();
                
                $semana_act = \SucursalQuery::create()->filterByIdsucursal($idsucursal)->findOne()->getSucursalMesactivo();
                $anio_act = \SucursalQuery::create()->filterByIdsucursal($idsucursal)->findOne()->getSucursalAnioactivo();
                $time = strtotime("1 January $anio_act", time());
                $day = date('w', $time);
                $time += ((7 * $semana_act) + 1 - $day) * 24 * 3600;
                $time += 6 * 24 * 3600;
                
                $fecha = date('Y-m-d', $time);
                
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
                
                $almacen_array = array();
                $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->find();
                foreach ($almacenes as $almacen) {
                    $id = $almacen->getIdalmacen();
                    $almacen_array[$id] = $almacen->getAlmacenNombre();
                }
                
                $auditor_array = array();
                $usuarios = \UsuarioQuery::create()->filterByIdrol(4)->useUsuariosucursalQuery()->filterByIdsucursal($idsucursal)->endUse()->find();
                $usuario = new \Usuario();
                foreach ($usuarios as $usuario) {
                    $id = $usuario->getIdusuario();
                    $auditor_array[$id] = $usuario->getUsuarioNombre();
                }
                
                $form = new \Application\Auditoria\Form\CierresinventariosForm($almacen_array, $auditor_array);
                $form->setData($inventariomes->toArray(\BasePeer::TYPE_FIELDNAME));
                $reporte = array();
                $categoriasObj = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->orderByCategoriaNombre('asc')->find();
                $categoriaObj = new \Categoria();
                foreach ($categoriasObj as $categoriaObj) {
                    $nombreSubcategoria = $categoriaObj->getCategoriaNombre();
                    array_push($reporte, "<tr><td>$nombreSubcategoria</td></tr>");
                    $objproductos = \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByIdsubcategoria($categoriaObj->getIdcategoria())->orderByProductoNombre('asc')->find();
                    $objproducto = new \Producto();
                    foreach ($objproductos as $objproducto) {
                        $exists = \InventariomesdetalleQuery::create()->filterByIdinventariomes($inventariomes->getIdinventariomes())->filterByIdproducto($objproducto->getIdproducto())->exists();
                        if ($exists) {
                            $inventariomesdetalle = \InventariomesdetalleQuery::create()->filterByIdinventariomes($inventariomes->getIdinventariomes())->filterByIdproducto($objproducto->getIdproducto())->findOne();
                            $id = $inventariomesdetalle->getIdinventariomesdetalle();
                            $idproducto = $objproducto->getIdproducto();
                            $productoNombre = $objproducto->getProductoNombre();
                            $categoria = $objproducto->getCategoriaRelatedByIdcategoria()->getCategoriaNombre();
                            $stockinicial = $inventariomesdetalle->getInventariomesdetalleStockinicial();
                            $ingresocompra = $inventariomesdetalle->getInventariomesdetalleIngresocompra();
                            $ingresorequisicion = $inventariomesdetalle->getInventariomesdetalleIngresorequisicion();
                            $ingresoordentablajeria = $inventariomesdetalle->getInventariomesdetalleIngresoordentablajeria();
                            $egresoventa = $inventariomesdetalle->getInventariomesdetalleEgresoventa();
                            $egresorequisicion = $inventariomesdetalle->getInventariomesdetalleEgresorequisicion();
                            $egresoordentablajeria = $inventariomesdetalle->getInventariomesdetalleEgresoordentablajeria();
                            $egresodevolucion = $inventariomesdetalle->getInventariomesdetalleEgresodevolucion();
                            $stockteorico = $inventariomesdetalle->getInventariomesdetalleStockteorico();
                            $unidadMedida = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                            $stockfisico = $inventariomesdetalle->getInventariomesdetalleStockfisico();
                            $importefisico = $inventariomesdetalle->getInventariomesdetalleImportefisico();
                            $diferencia = $inventariomesdetalle->getInventariomesdetalleDiferencia();
                            $costopromedio = $inventariomesdetalle->getInventariomesdetalleCostopromedio();
                            $difimporte = $inventariomesdetalle->getInventariomesdetalleDifimporte();
                            $explosion = $inventariomesdetalle->getInventariomesdetalleExplosion();
                            $totalFisico = $inventariomesdetalle->getInventariomesdetalleTotalfisico();
                            $ajuste = $inventariomesdetalle->getInventariomesdetalleReajuste();
                            $subcat= \ProductoQuery::create()->filterByIdproducto($idproducto)->findOne()->getCategoriaRelatedByIdsubcategoria()->getCategoriaNombre();
                            $revisada = (bool) ($inventariomesdetalle->getInventariomesdetalleRevisada()) ? "checked" : "";
                            array_push($reporte, "<tr>
                                       <td>
                                       <input type='hidden' name='reporte[$id][idcategoria]' value='$categoria'/>
                                       <input type='hidden' name='reporte[$id][idproducto]' value='$idproducto' />$idproducto
                                       </td>
                                       <td>
                                       $productoNombre
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_stockinicial]' value='$stockinicial'> $stockinicial
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_ingresocompra]' value='$ingresocompra'>$ingresocompra
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_ingresorequisicion]' value='$ingresorequisicion'>$ingresorequisicion
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_ingresoordentablajeria]' value='$ingresoordentablajeria'>$ingresoordentablajeria
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_egresoventa]' value='$egresoventa'>$egresoventa
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_egresorequisicion]' value='$egresorequisicion'>$egresorequisicion
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_egresoordentablajeria]' value='$egresoordentablajeria'>$egresoordentablajeria
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_egresodevolucion]' value='$egresodevolucion'>$egresodevolucion
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_reajuste]' value='$ajuste'>$ajuste
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_stockteorico]' value='$stockteorico'>$stockteorico
                                       </td>
                                       <td>
                                       $unidadMedida
                                       </td>
                                       <td>
                                       <input required type='text' name='reporte[$id][inventariomesdetalle_stockfisico]' value='$stockfisico'>
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_explosion]' value='$explosion'>$explosion
                                       </td>
                                       <td class='inventariomesdetalle_totalfisico'>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_totalfisico]' value='$totalFisico'>
                                       <span>$totalFisico</span>
                                       </td>
                                       <td class='inventariomesdetalle_importefisico'>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_importefisico]' value='$importefisico'>
                                       <span>$importefisico</span>
                                       </td>
                                       <td class='inventariomesdetalle_diferencia'>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_diferencia]' value='$diferencia'>
                                       <span>$diferencia</span>
                                       </td>
                                       <td>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_costopromedio]' value='$costopromedio'>$costopromedio
                                       </td>
                                       <td class='inventariomesdetalle_difimporte'>
                                       <input type='hidden'  name='reporte[$id][inventariomesdetalle_difimporte]' value='$difimporte'>
                                       <span>$difimporte</span>
                                       </td>
                                       <td>
                                       $subcat
                                       </td>
                                       <td>
                                       <input type='checkbox' name='reporte[$id][inventariomesdetalle_revisada]' $revisada
                                       </td>
                                       </tr>");
                                       }
                                       }
                                       }
                                       
                                       
                                       $encargado = $inventariomes->getAlmacen()->getAlmacenEncargado();
                                       if ($encargado == "")
                                       $encargado = "N/A";
                                       $view_model = new ViewModel();
                                       $view_model->setTemplate('/application/auditoria/cierresinventarios/editar');
                                       $view_model->setVariables(array(
                                                                       'form' => $form,
                                                                       'reporte' => $reporte,
                                                                       'messages' => $this->flashMessenger(),
                                                                       'encargado' => $encargado,
                                                                       'idempresa' => $idempresa,
                                                                       'inventariomes' => $inventariomes,
                                                                       'fecha'=>$fecha,
                                                                       ));
                                       return $view_model;
                                       } else {
                                       return $this->redirect()->toUrl('/auditoria/cierresemana');
                                       }
                                       }
                                       
                                       public function eliminarAction() {
                                       $request = $this->getRequest();
                                       if ($request->isPost()) {
                                       $id = $this->params()->fromRoute('id');
                                       $inventariomes = \InventariomesQuery::create()->findPk($id);
                                       $inventariomes->delete();
                                       $inventariomesdetalles = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id)->find();
                                       foreach ($inventariomesdetalles as $inventariomesdetalle) {
                                       $inventariomesdetalle->delete();
                                       }
                                       $this->flashMessenger()->addSuccessMessage('Inventario cierre semana eliminada satisfactoriamente!');
                                       return $this->redirect()->toUrl('/auditoria/cierresemana');
                                       }
                                       }
                                       
                                       }
    

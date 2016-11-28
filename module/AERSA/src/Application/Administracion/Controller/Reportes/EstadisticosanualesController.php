<?php

namespace Application\Administracion\Controller\Reportes;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class EstadisticosanualesController extends AbstractActionController {

    public function indexAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $year = $post_data['anio'];
            $reporte = array();
            $mes = array();
            for ($numero_mes = 1; $numero_mes <= 12; $numero_mes++) {
                if (checkdate($numero_mes, '31', $year))
                    $fin = 31;
                elseif (checkdate($numero_mes, '30', $year))
                    $fin = 30;
                elseif (checkdate($numero_mes, '28', $year))
                    $fin = 28;
                else
                    $fin = 29;
                
                $diaI = date('D', strtotime("$year-$numero_mes-01"));
                $diaF = date('D', strtotime("$year-$numero_mes-$fin"));
                
                if ($diaI == 'Mon')
                    $mes[$numero_mes]['i'] = date("Y-m-d", strtotime("$year-$numero_mes-01"));
                else {
                    if ($diaI == 'Tue' || $diaI == 'Wed' || $diaI == 'Thu') {
                        $mes[$numero_mes]['i'] = date("Y-m-d", strtotime('last Monday', strtotime("$year-$numero_mes-01")));
                    } else {
                        $mes[$numero_mes]['i'] = date("Y-m-d", strtotime('next Monday', strtotime("$year-$numero_mes-01")));
                    }
                }

                if ($diaF == 'Sun')
                    $mes[$numero_mes]['f'] = date("Y-m-d", strtotime("$year-$numero_mes-$fin"));
                else {
                    if ($diaF == 'Mon' || $diaF == 'Tue' || $diaF == 'Wed') {
                        $mes[$numero_mes]['f'] = date("Y-m-d", strtotime('last Sunday', strtotime("$year-$numero_mes-$fin")));
                    } else {
                        $inicio = $mes[$numero_mes]['f'] = date("Y-m-d", strtotime('next Sunday', strtotime("$year-$numero_mes-$fin")));
                    }
                }
            }

            for ($numero_mes = 1; $numero_mes <= 12; $numero_mes++) {
                $inicio = $mes[$numero_mes]['i'];
                $fin = $mes[$numero_mes]['f'];
//==============================================================================            
/********************************************************************************************************************************/
                //ventas netas sin iva presente
                $ingresos = \IngresoQuery::create()->filterByIdsucursal($idsucursal)->filterByIngresoFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                $ingreso = new \Ingreso();
                $ventasNetasAlimentos = 0;
                $ventasNetasBebidas = 0;
                foreach ($ingresos as $ingreso) {
                    $ingresosDetalles = \IngresodetalleQuery::create()->filterByIdingreso($ingreso->getIdingreso())->find();
                    $ingresoDetalle = new \Ingresodetalle();
                    foreach ($ingresosDetalles as $ingresoDetalle) {
                        if ($ingresoDetalle->getIdrubroingreso() == 1)
                            $ventasNetasAlimentos+=$ingresoDetalle->getIngresodetalleSub();
                        elseif ($ingresoDetalle->getIdrubroingreso() == 2)
                            $ventasNetasBebidas+=$ingresoDetalle->getIngresodetalleSub();
                    }
                }

//inventario incial presente
                $prevSunday = date('Y-m-d', strtotime('last sunday', strtotime($inicio)));
                $inventariosMes = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->filterByInventariomesFecha($prevSunday)->find();
                $inventarioMes = new \Inventariomes();
                $invIniAlimentos = 0;
                $invIniBebidas = 0;
                foreach ($inventariosMes as $inventarioMes) {
                    $invIniAlimentos+=$inventarioMes->getInventariomesFinalalimentos();
                    $invIniBebidas+=$inventarioMes->getInventariomesFinalbebidas();
                }

//compras del mes presente
                $compraMesAlimentos = 0;
                $compraMesBebidas = 0;
                $iva = \TasaivaQuery::create()->filterByIdtasaiva(1)->findOne()->getTasaivaValor();
                $iva = $iva / 100 + 1;

                $almacenesActi = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->filterByAlmacenEstatus(1)->find();
                $almacen = new \Almacen();
                foreach ($almacenesActi as $almacen) {
                    $compras = \CompraQuery::create()->filterByIdsucursal()->filterByIdalmacen($almacen->getIdalmacen())->filterByCompraFechacompra(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                    $compra = new \Compra();
                    foreach ($compras as $compra) {
                        $comprasDetalle = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
                        $compraDetalle = new \Compradetalle();
                        foreach ($comprasDetalle as $compraDetalle) {
                            $cantidad = number_format(($compraDetalle->getCompradetalleSubtotal() * $iva), 6);
                            $cantidad = str_replace(",", "", $cantidad);
                            if ($compraDetalle->getProducto()->getIdcategoria() == 1)
                                $compraMesAlimentos+=$cantidad;
                            elseif ($compraDetalle->getProducto()->getIdcategoria() == 2)
                                $compraMesBebidas+=$cantidad;
                        }
                    }
                }

                //existencias presente
                $existenciaAlimentos = $invIniAlimentos + $compraMesAlimentos;
                $existenciaBebidas = $invIniBebidas + $compraMesBebidas;

                //inventario final presente
                $invFinAlimentos = 0;
                $invFinBebidas = 0;
                $inventariosFinMes = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->filterByInventariomesFecha($fin)->find();
                $inventarioFinMes = new \Inventariomes();
                foreach ($inventariosFinMes as $inventarioFinMes) {
                    $invFinAlimentos+=$inventarioFinMes->getInventariomesFinalalimentos();
                    $invFinBebidas+=$inventarioFinMes->getInventariomesFinalbebidas();
                }

                //costo bruto presente
                $costoBrutoAlimentos = $existenciaAlimentos - $invFinAlimentos;
                $costoBrutoBebidas = $existenciaBebidas - $invFinBebidas;

                //creditos al costo presente
                $creditosCostAlimentos = 0;
                $creditosCostBebidas = 0;

                $cortesiasAlimentos = 0;
                $cortesiasBebidas = 0;
                $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Cortesia')->find();
                $concepto = new \Conceptosalida();
                foreach ($conceptos as $concepto) {
                    $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                    $requisicion = new \Requisicion();
                    foreach ($requisiciones as $requisicion) {
                        $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                        $requisiciondetalle = new \Requisiciondetalle();
                        foreach ($requisiciondetalles as $requisiciondetalle) {
                            $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                                $cortesiasAlimentos+=$cantidad;
                            elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                                $cortesiasBebidas+=$cantidad;
                        }
                    }
                }

                $consumoEmplAlimentos = 0;
                $consumoEmplBebidas = 0;
                $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Consumos de empleados')->find();
                $concepto = new \Conceptosalida();
                foreach ($conceptos as $concepto) {
                    $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                    $requisicion = new \Requisicion();
                    foreach ($requisiciones as $requisicion) {
                        $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                        $requisiciondetalle = new \Requisiciondetalle();
                        foreach ($requisiciondetalles as $requisiciondetalle) {
                            $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                                $consumoEmplAlimentos+=$cantidad;
                            elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                                $consumoEmplBebidas+=$cantidad;
                        }
                    }
                }

                $consumoEjecAlimentos = 0;
                $consumoEjecBebidas = 0;
                $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Consumos de ejecutivos')->find();
                $concepto = new \Conceptosalida();
                foreach ($conceptos as $concepto) {
                    $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                    $requisicion = new \Requisicion();
                    foreach ($requisiciones as $requisicion) {
                        $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                        $requisiciondetalle = new \Requisiciondetalle();
                        foreach ($requisiciondetalles as $requisiciondetalle) {
                            $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                                $consumoEjecAlimentos+=$cantidad;
                            elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                                $consumoEjecBebidas+=$cantidad;
                        }
                    }
                }

                $transpasoSerAlimentos = 0;
                $transpasoSerBebidas = 0;
                $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Traspaso a servicio')->find();
                $concepto = new \Conceptosalida();
                foreach ($conceptos as $concepto) {
                    $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                    $requisicion = new \Requisicion();
                    foreach ($requisiciones as $requisicion) {
                        $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                        $requisiciondetalle = new \Requisiciondetalle();
                        foreach ($requisiciondetalles as $requisiciondetalle) {
                            $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                                $transpasoSerAlimentos+=$cantidad;
                            elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                                $transpasoSerBebidas+=$cantidad;
                        }
                    }
                }

                $mermaAlimentos = 0;
                $mermaBebidas = 0;
                $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Mermas')->find();
                $concepto = new \Conceptosalida();
                foreach ($conceptos as $concepto) {
                    $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                    $requisicion = new \Requisicion();
                    foreach ($requisiciones as $requisicion) {
                        $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                        $requisiciondetalle = new \Requisiciondetalle();
                        foreach ($requisiciondetalles as $requisiciondetalle) {
                            $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                                $mermaAlimentos+=$cantidad;
                            elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                                $mermaBebidas+=$cantidad;
                        }
                    }
                }

                $creditosCostAlimentos = $consumoEmplAlimentos + $consumoEjecAlimentos + $cortesiasAlimentos + $transpasoSerAlimentos + $mermaAlimentos;
                $creditosCostBebidas = $consumoEmplBebidas + $consumoEjecBebidas + $cortesiasBebidas + $transpasoSerBebidas + $mermaBebidas;

                //Costo neto de venta presente
                $costVentAlimentos = $costoBrutoAlimentos - $creditosCostAlimentos;
                $costVentBebidas = $costoBrutoBebidas - $creditosCostBebidas;

                //% costo de venta presente
                $porcCostoVentaAlimentos = ($costVentAlimentos != 0 || $ventasNetasAlimentos != 0) ? $costVentAlimentos / $ventasNetasAlimentos : 0;
                $porcCostoVentaBebidas = ($costVentBebidas != 0 || $ventasNetasBebidas != 0) ? $costVentBebidas / $ventasNetasBebidas : 0;

                //ventas x rubro presente
                $ventasRubroAlimentos = 0;
                $ventasRubroBebidas = 0;
                $ventas = \VentaQuery::create()->filterByIdsucursal($idsucursal)->filterByVentaFechaventa(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                $venta = new \Venta();

                foreach ($ventas as $venta) {
                    $ventadetalles = \VentadetalleQuery::create()->filterByIdventa($venta->getIdventa())->find();
                    $ventadetalle = new \Ventadetalle();

                    foreach ($ventadetalles as $ventadetalle) {
                        if ($ventadetalle->getProducto()->getIdcategoria() == 1)
                            $ventasRubroAlimentos+=$ventadetalle->getVentadetalleSubtotal();
                        if ($ventadetalle->getProducto()->getIdcategoria() == 2)
                            $ventasRubroBebidas+=$ventadetalle->getVentadetalleSubtotal();
                    }
                }

                //venta promedio diaria sin iva presente
                //dias activos
                $ingresos = \IngresoQuery::create()
                        ->filterByIngresoFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))
                        ->filterByIdsucursal($idsucursal)
                        ->orderByIngresoFecha("asc")
                        ->find();
                $dato = null;
                $dias_activos = 0;
                $ingreso = new \Ingreso();
                foreach ($ingresos as $ingreso) {
                    if ($dato == null)
                        $dato = $ingreso->getIngresoFecha('d/m/Y');
                    if ($dato != $ingreso->getIngresoFecha('d/m/Y')) {
                        $dato = $ingreso->getIngresoFecha('d/m/Y');
                        $dias_activos++;
                    }
                }

                $ventasPromDiar = (($ventasNetasAlimentos + $ventasNetasBebidas) != 0 || $dias_activos != 0) ? ($ventasNetasAlimentos + $ventasNetasBebidas) / $dias_activos : 0;

                //Consumo promedio p/empleado diario presente
                //(sumatoria de comedor empleados/dias activos)/promedio empleados
                $inicioSplit = explode('-', $inicio); //2015-09-07
                $finSplit = explode('-', $fin); //2015-09-07
                //$inicio = $inicioSpli[2]-1 . "-" . $inicioSpli[1] . "-" . $inicioSpli[0];
                //$fin = $finSpli[2] . "-" . $finSpli[1] . "-" . $finSpli[0];
                $trabajadorespromedio = 0;
                if ($inicioSplit[2] != $finSplit[2]) {
                    for ($anio = $inicioSplit[2]; $anio <= $finSplit[2]; $anio++) {
                        $objtrabajadorespromedios = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($anio)->find();
                        $objtrabajadorespromedio = new \Trabajadorespromedio();
                        foreach ($objtrabajadorespromedios as $objtrabajadorespromedio) {
                            $trabajadorespromedio+=$objtrabajadorespromedio->getTrabajadorespromedioCantidad();
                        }
                    }
                } else {
                    for ($mes = $inicioSplit[1]; $mes <= $finSplit[1]; $mes++) {
                        $obj = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($inicioSplit[2])->filterByTrabajadorespromedioMes($mes)->findOne();
                        if ($obj != null) {
                            $trabajadorespromedio+=$obj->getTrabajadorespromedioCantidad();
                        }
                    }
                }

                $consumoPromEmpl = ($trabajadorespromedio != 0) ? (($consumoEmplAlimentos + $consumoEmplBebidas) / $dias_activos) / $trabajadorespromedio : 0;


                //listado de productos con subcategorias presente
                $comprasObj = \CompraQuery::create()->filterByIdsucursal($idsucursal)->filterByCompraFechacompra(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                $compraObj = new \Compra();
                $requisicionesObj = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByRequisicionFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                $requisicionObj = new \Requisicion();

                $productosAlimentos = array();
                $productosBebidas = array();
                foreach ($comprasObj as $compraObj) {
                    $compradetalles = \CompradetalleQuery::create()->filterByIdcompra($compraObj->getIdcompra())->find();
                    $compradetalle = new \Compradetalle();
                    foreach ($compradetalles as $compradetalle) {
                        $idsubcat = $compradetalle->getProducto()->getIdsubcategoria();
                        if ($compradetalle->getProducto()->getIdcategoria() == 1) {
                            if (isset($productosAlimentos[$idsubcat])) {
                                $productosAlimentos[$idsubcat]+=$compradetalle->getCompradetalleSubtotal();
                            } else {
                                $productosAlimentos[$idsubcat] = $compradetalle->getCompradetalleSubtotal();
                            }
                        } elseif ($compradetalle->getProducto()->getIdcategoria() == 2) {
                            if (isset($productosBebidas[$idsubcat])) {
                                $productosBebidas[$idsubcat]+=$compradetalle->getCompradetalleSubtotal();
                            } else {
                                $productosBebidas[$idsubcat] = $compradetalle->getCompradetalleSubtotal();
                            }
                        }
                    }
                }

                foreach ($requisicionesObj as $requisicionObj) {
                    if ($requisicionObj->getAlmacenRelatedByIdalmacendestino()->getAlmacenNombre() != "Almacén general") {
                        $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicionObj->getIdrequisicion())->find();
                        $requisiciondetalle = new \Requisiciondetalle();
                        foreach ($requisiciondetalles as $requisiciondetalle) {
                            $idsubcat = $requisiciondetalle->getProducto()->getIdsubcategoria();
                            if ($requisiciondetalle->getProducto()->getIdcategoria() == 1) {
                                if (isset($productosAlimentos[$idsubcat])) {
                                    $productosAlimentos[$idsubcat]+=$requisiciondetalle->getRequisiciondetalleSubtotal();
                                } else {
                                    $productosAlimentos[$idsubcat] = $requisiciondetalle->getRequisiciondetalleSubtotal();
                                }
                            } elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2) {
                                if (isset($productosBebidas[$idsubcat])) {
                                    $productosBebidas[$idsubcat]+=$requisiciondetalle->getRequisiciondetalleSubtotal();
                                } else {
                                    $productosBebidas[$idsubcat] = $requisiciondetalle->getRequisiciondetalleSubtotal();
                                }
                            }
                        }
                    }
                }

/********************************************************************************************************************************/
//==============================================================================

                $reporte[$numero_mes]['ingreso_sin_iva'] = $ventasNetasAlimentos + $ventasNetasBebidas;
                $reporte[$numero_mes]['costo_de_venta'] = $costVentAlimentos + $costVentBebidas;
                $porc=(($costVentAlimentos+$costVentBebidas)!=0 || ($ventasNetasAlimentos+$ventasNetasBebidas)!=0) ? ($costVentAlimentos+$costVentBebidas)/($ventasNetasAlimentos3+$ventasNetasBebidas) : 0;
                $reporte[$numero_mes]['porc_costo_venta'] = $porc;
                $reporte[$numero_mes]['rubro_ventas_alimentos'] = $ventasRubroAlimentos;
                $reporte[$numero_mes]['rubro_ventas_bebidas'] = $ventasRubroBebidas;
                $reporte[$numero_mes]['compras_mes_alimentos'] = $compraMesAlimentos;
                $reporte[$numero_mes]['compras_mes_bebidas'] = $compraMesBebidas;
                $reporte[$numero_mes]['total_compras'] = $compraMesBebidas + $compraMesAlimentos;
                $reporte[$numero_mes]['venta_promedio_diaria'] = $ventasPromDiar;
                $reporte[$numero_mes]['consumo_promedioP/empleado_diario'] = $consumoPromEmpl;
                $reporte[$numero_mes]['cortesias_alimentos'] = $cortesiasAlimentos;
                $reporte[$numero_mes]['cortesias_bebidas'] = $cortesiasBebidas;
                $reporte[$numero_mes]['consumo_ejecutivo_alimentos'] = $consumoEjecAlimentos;
                $reporte[$numero_mes]['consumo_ejecutivo_bebidas'] = $consumoEjecBebidas;
                $reporte[$numero_mes]['merma_alimentos'] = $mermaAlimentos;
                $reporte[$numero_mes]['merma_bebidas'] = $mermaBebidas;


                $subcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre(1)->orderByCategoriaNombre('asc')->find();
                $subcategoria = new \Categoria();

                $total = 0;

                foreach ($subcategorias as $subcategoria) {
                    $semana = (isset($productosAlimentos[$subcategoria->getIdcategoria()])) ? $productosAlimentos[$subcategoria->getIdcategoria()] : 0;
                    $subid = $subcategoria->getIdcategoria();
                    $total+=$semana;
                    $reporte[$numero_mes]['sub'][$subid] = $semana;
                }
                $reporte[$numero_mes]['total_subcat_alimentos'] = $total;

                $total = 0;

                $subcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre(2)->orderByCategoriaNombre('asc')->find();
                $subcategoria = new \Categoria();
                foreach ($subcategorias as $subcategoria) {
                    $semana = (isset($productosBebidas[$subcategoria->getIdcategoria()])) ? $productosBebidas[$subcategoria->getIdcategoria()] : 0;
                    $subid = $subcategoria->getIdcategoria();
                    $total+=$semana;
                    $reporte[$numero_mes]['sub'][$subid] = $semana;
                }

                $reporte[$numero_mes]['total_subcat_bebidas'] = $total;
            }
            
            
//            for ($numero_mes = 1; $numero_mes <= 12; $numero_mes++) {
//                
//                var_dump($reporte[$numero_mes]);
//                echo '<br>';
//            }
//            exit;
            $reporteArray=array();
            //'#FFFFFF' : '#F2F2F2'
            $linea="<tr bgcolor='#FFFFFF'><td>Concepto</td><td>Ene</td><td>Feb</td><td>Mar</td><td>Abr</td><td>May</td><td>Jun</td><td>Jul</td><td>Ago</td><td>Sep</td><td>Oct</td><td>Nov</td><td>Dic</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#F2F2F2'><td>% Costo de venta</td><td>".$reporte[1]['porc_costo_venta']."</td><td>".$reporte[2]['porc_costo_venta']."</td><td>".$reporte[3]['porc_costo_venta']."</td><td>".$reporte[4]['porc_costo_venta']."</td><td>".$reporte[5]['porc_costo_venta']."</td><td>".$reporte[6]['porc_costo_venta']."</td><td>".$reporte[7]['porc_costo_venta']."</td><td>".$reporte[8]['porc_costo_venta']."</td><td>".$reporte[9]['porc_costo_venta']."</td><td>".$reporte[10]['porc_costo_venta']."</td><td>".$reporte[11]['porc_costo_venta']."</td><td>".$reporte[12]['porc_costo_venta']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#FFFFFF'><td>Ventas por rubro</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#F2F2F2'><td>Alimentos</td><td>".$reporte[1]['rubro_ventas_alimentos']."</td><td>".$reporte[2]['rubro_ventas_alimentos']."</td><td>".$reporte[3]['rubro_ventas_alimentos']."</td><td>".$reporte[4]['rubro_ventas_alimentos']."</td><td>".$reporte[5]['rubro_ventas_alimentos']."</td><td>".$reporte[6]['rubro_ventas_alimentos']."</td><td>".$reporte[7]['rubro_ventas_alimentos']."</td><td>".$reporte[8]['rubro_ventas_alimentos']."</td><td>".$reporte[9]['rubro_ventas_alimentos']."</td><td>".$reporte[10]['rubro_ventas_alimentos']."</td><td>".$reporte[11]['rubro_ventas_alimentos']."</td><td>".$reporte[12]['rubro_ventas_alimentos']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#FFFFFF'><td>Bebidas</td><td>".$reporte[1]['rubro_ventas_bebidas']."</td><td>".$reporte[2]['rubro_ventas_bebidas']."</td><td>".$reporte[3]['rubro_ventas_bebidas']."</td><td>".$reporte[4]['rubro_ventas_bebidas']."</td><td>".$reporte[5]['rubro_ventas_bebidas']."</td><td>".$reporte[6]['rubro_ventas_bebidas']."</td><td>".$reporte[7]['rubro_ventas_bebidas']."</td><td>".$reporte[8]['rubro_ventas_bebidas']."</td><td>".$reporte[9]['rubro_ventas_bebidas']."</td><td>".$reporte[10]['rubro_ventas_bebidas']."</td><td>".$reporte[11]['rubro_ventas_bebidas']."</td><td>".$reporte[12]['rubro_ventas_bebidas']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#F2F2F2'><td>Compras del mes</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#FFFFFF'><td>Alimentos</td><td>".$reporte[1]['compras_mes_alimentos']."</td><td>".$reporte[2]['compras_mes_alimentos']."</td><td>".$reporte[3]['compras_mes_alimentos']."</td><td>".$reporte[4]['compras_mes_alimentos']."</td><td>".$reporte[5]['compras_mes_alimentos']."</td><td>".$reporte[6]['compras_mes_alimentos']."</td><td>".$reporte[7]['compras_mes_alimentos']."</td><td>".$reporte[8]['compras_mes_alimentos']."</td><td>".$reporte[9]['compras_mes_alimentos']."</td><td>".$reporte[10]['compras_mes_alimentos']."</td><td>".$reporte[11]['compras_mes_alimentos']."</td><td>".$reporte[12]['compras_mes_alimentos']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#F2F2F2'><td>Bebidas</td><td>".$reporte[1]['compras_mes_bebidas']."</td><td>".$reporte[2]['compras_mes_bebidas']."</td><td>".$reporte[3]['compras_mes_bebidas']."</td><td>".$reporte[4]['compras_mes_bebidas']."</td><td>".$reporte[5]['compras_mes_bebidas']."</td><td>".$reporte[6]['compras_mes_bebidas']."</td><td>".$reporte[7]['compras_mes_bebidas']."</td><td>".$reporte[8]['compras_mes_bebidas']."</td><td>".$reporte[9]['compras_mes_bebidas']."</td><td>".$reporte[10]['compras_mes_bebidas']."</td><td>".$reporte[11]['compras_mes_bebidas']."</td><td>".$reporte[12]['compras_mes_bebidas']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#FFFFFF'><td>Venta promedio diaria</td><td>".$reporte[1]['venta_promedio_diaria']."</td><td>".$reporte[2]['venta_promedio_diaria']."</td><td>".$reporte[3]['venta_promedio_diaria']."</td><td>".$reporte[4]['venta_promedio_diaria']."</td><td>".$reporte[5]['venta_promedio_diaria']."</td><td>".$reporte[6]['venta_promedio_diaria']."</td><td>".$reporte[7]['venta_promedio_diaria']."</td><td>".$reporte[8]['venta_promedio_diaria']."</td><td>".$reporte[9]['venta_promedio_diaria']."</td><td>".$reporte[10]['venta_promedio_diaria']."</td><td>".$reporte[11]['venta_promedio_diaria']."</td><td>".$reporte[12]['venta_promedio_diaria']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr  bgcolor='#F2F2F2'><td>Comsumo promedioP/empleado díario</td><td>".$reporte[1]['consumo_promedioP/empleado_diario']."</td><td>".$reporte[2]['consumo_promedioP/empleado_diario']."</td><td>".$reporte[3]['consumo_promedioP/empleado_diario']."</td><td>".$reporte[4]['consumo_promedioP/empleado_diario']."</td><td>".$reporte[5]['consumo_promedioP/empleado_diario']."</td><td>".$reporte[6]['consumo_promedioP/empleado_diario']."</td><td>".$reporte[7]['consumo_promedioP/empleado_diario']."</td><td>".$reporte[8]['consumo_promedioP/empleado_diario']."</td><td>".$reporte[9]['consumo_promedioP/empleado_diario']."</td><td>".$reporte[10]['consumo_promedioP/empleado_diario']."</td><td>".$reporte[11]['consumo_promedioP/empleado_diario']."</td><td>".$reporte[12]['consumo_promedioP/empleado_diario']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr  bgcolor='#FFFFFF'><td>Cortesias</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr  bgcolor='#F2F2F2'><td>Alimentos</td><td>".$reporte[1]['cortesias_alimentos']."</td><td>".$reporte[2]['cortesias_alimentos']."</td><td>".$reporte[3]['cortesias_alimentos']."</td><td>".$reporte[4]['cortesias_alimentos']."</td><td>".$reporte[5]['cortesias_alimentos']."</td><td>".$reporte[6]['cortesias_alimentos']."</td><td>".$reporte[7]['cortesias_alimentos']."</td><td>".$reporte[8]['cortesias_alimentos']."</td><td>".$reporte[9]['cortesias_alimentos']."</td><td>".$reporte[10]['cortesias_alimentos']."</td><td>".$reporte[11]['cortesias_alimentos']."</td><td>".$reporte[12]['cortesias_alimentos']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr  bgcolor='#FFFFFF'><td>Bebidas</td><td>".$reporte[1]['cortesias_bebidas']."</td><td>".$reporte[2]['cortesias_bebidas']."</td><td>".$reporte[3]['cortesias_bebidas']."</td><td>".$reporte[4]['cortesias_bebidas']."</td><td>".$reporte[5]['cortesias_bebidas']."</td><td>".$reporte[6]['cortesias_bebidas']."</td><td>".$reporte[7]['cortesias_bebidas']."</td><td>".$reporte[8]['cortesias_bebidas']."</td><td>".$reporte[9]['cortesias_bebidas']."</td><td>".$reporte[10]['cortesias_bebidas']."</td><td>".$reporte[11]['cortesias_bebidas']."</td><td>".$reporte[12]['cortesias_bebidas']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr  bgcolor='#F2F2F2'><td>Consumo ejecutivo</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#FFFFFF'><td>Alimentos</td><td>".$reporte[1]['consumo_ejecutivo_alimentos']."</td><td>".$reporte[2]['consumo_ejecutivo_alimentos']."</td><td>".$reporte[3]['consumo_ejecutivo_alimentos']."</td><td>".$reporte[4]['consumo_ejecutivo_alimentos']."</td><td>".$reporte[5]['consumo_ejecutivo_alimentos']."</td><td>".$reporte[6]['consumo_ejecutivo_alimentos']."</td><td>".$reporte[7]['consumo_ejecutivo_alimentos']."</td><td>".$reporte[8]['consumo_ejecutivo_alimentos']."</td><td>".$reporte[9]['consumo_ejecutivo_alimentos']."</td><td>".$reporte[10]['consumo_ejecutivo_alimentos']."</td><td>".$reporte[11]['consumo_ejecutivo_alimentos']."</td><td>".$reporte[12]['consumo_ejecutivo_alimentos']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#F2F2F2'><td>Bebidas</td><td>".$reporte[1]['consumo_ejecutivo_bebidas']."</td><td>".$reporte[2]['consumo_ejecutivo_bebidas']."</td><td>".$reporte[3]['consumo_ejecutivo_bebidas']."</td><td>".$reporte[4]['consumo_ejecutivo_bebidas']."</td><td>".$reporte[5]['consumo_ejecutivo_bebidas']."</td><td>".$reporte[6]['consumo_ejecutivo_bebidas']."</td><td>".$reporte[7]['consumo_ejecutivo_bebidas']."</td><td>".$reporte[8]['consumo_ejecutivo_bebidas']."</td><td>".$reporte[9]['consumo_ejecutivo_bebidas']."</td><td>".$reporte[10]['consumo_ejecutivo_bebidas']."</td><td>".$reporte[11]['consumo_ejecutivo_bebidas']."</td><td>".$reporte[12]['consumo_ejecutivo_bebidas']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#FFFFFF'><td>Mermas</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#F2F2F2'><td>Alimentos</td><td>".$reporte[1]['merma_alimentos']."</td><td>".$reporte[2]['merma_alimentos']."</td><td>".$reporte[3]['merma_alimentos']."</td><td>".$reporte[4]['merma_alimentos']."</td><td>".$reporte[5]['merma_alimentos']."</td><td>".$reporte[6]['merma_alimentos']."</td><td>".$reporte[7]['merma_alimentos']."</td><td>".$reporte[8]['merma_alimentos']."</td><td>".$reporte[9]['merma_alimentos']."</td><td>".$reporte[10]['merma_alimentos']."</td><td>".$reporte[11]['merma_alimentos']."</td><td>".$reporte[12]['merma_alimentos']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#FFFFFF'><td>Bebidas</td><td>".$reporte[1]['merma_bebidas']."</td><td>".$reporte[2]['merma_bebidas']."</td><td>".$reporte[3]['merma_bebidas']."</td><td>".$reporte[4]['merma_bebidas']."</td><td>".$reporte[5]['merma_bebidas']."</td><td>".$reporte[6]['merma_bebidas']."</td><td>".$reporte[7]['merma_bebidas']."</td><td>".$reporte[8]['merma_bebidas']."</td><td>".$reporte[9]['merma_bebidas']."</td><td>".$reporte[10]['merma_bebidas']."</td><td>".$reporte[11]['merma_bebidas']."</td><td>".$reporte[12]['merma_bebidas']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $linea="<tr bgcolor='#F2F2F2'><td>Alimentos</td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td></tr>";
            array_push($reporteArray, $linea);
            
            
            $subcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre(1)->orderByCategoriaNombre('asc')->find();
            $subcategoria = new \Categoria();
            $color=true;
            foreach ($subcategorias as $subcategoria) {
                $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                $color = !$color;
                $subid = $subcategoria->getIdcategoria();
                $nombre=$subcategoria->getCategoriaNombre();
                $linea="<tr bgcolor='" . $bg . "'><td>$nombre</td><td>".$reporte[1]['sub'][$subid]."</td><td>".$reporte[2]['sub'][$subid]."</td><td>".$reporte[3]['sub'][$subid]."</td><td>".$reporte[4]['sub'][$subid]."</td><td>".$reporte[5]['sub'][$subid]."</td><td>".$reporte[6]['sub'][$subid]."</td><td>".$reporte[7]['sub'][$subid]."</td><td>".$reporte[8]['sub'][$subid]."</td><td>".$reporte[9]['sub'][$subid]."</td><td>".$reporte[10]['sub'][$subid]."</td><td>".$reporte[11]['sub'][$subid]."</td><td>".$reporte[12]['sub'][$subid]."</td></tr>";
                array_push($reporteArray, $linea);
            }
            $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                $color = !$color;
            $linea="<tr bgcolor='" . $bg . "'><td>Total</td><td>".$reporte[1]['total_subcat_alimentos']."</td><td>".$reporte[2]['total_subcat_alimentos']."</td><td>".$reporte[3]['total_subcat_alimentos']."</td><td>".$reporte[4]['total_subcat_alimentos']."</td><td>".$reporte[5]['total_subcat_alimentos']."</td><td>".$reporte[6]['total_subcat_alimentos']."</td><td>".$reporte[7]['total_subcat_alimentos']."</td><td>".$reporte[8]['total_subcat_alimentos']."</td><td>".$reporte[9]['total_subcat_alimentos']."</td><td>".$reporte[10]['total_subcat_alimentos']."</td><td>".$reporte[11]['total_subcat_alimentos']."</td><td>".$reporte[12]['total_subcat_alimentos']."</td></tr>";
            array_push($reporteArray, $linea);
            
            $subcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre(2)->orderByCategoriaNombre('asc')->find();
            $subcategoria = new \Categoria();
            foreach ($subcategorias as $subcategoria) {
                $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                $color = !$color;
                $subid = $subcategoria->getIdcategoria();
                $nombre=$subcategoria->getCategoriaNombre();
                $linea="<tr bgcolor='" . $bg . "'><td>$nombre</td><td>".$reporte[1]['sub'][$subid]."</td><td>".$reporte[2]['sub'][$subid]."</td><td>".$reporte[3]['sub'][$subid]."</td><td>".$reporte[4]['sub'][$subid]."</td><td>".$reporte[5]['sub'][$subid]."</td><td>".$reporte[6]['sub'][$subid]."</td><td>".$reporte[7]['sub'][$subid]."</td><td>".$reporte[8]['sub'][$subid]."</td><td>".$reporte[9]['sub'][$subid]."</td><td>".$reporte[10]['sub'][$subid]."</td><td>".$reporte[11]['sub'][$subid]."</td><td>".$reporte[12]['sub'][$subid]."</td></tr>";
                array_push($reporteArray, $linea);
            }
            $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                $color = !$color;
            
            $linea="<tr bgcolor='" . $bg . "'><td>Total</td><td>".$reporte[1]['total_subcat_bebidas']."</td><td>".$reporte[2]['total_subcat_bebidas']."</td><td>".$reporte[3]['total_subcat_bebidas']."</td><td>".$reporte[4]['total_subcat_bebidas']."</td><td>".$reporte[5]['total_subcat_bebidas']."</td><td>".$reporte[6]['total_subcat_bebidas']."</td><td>".$reporte[7]['total_subcat_bebidas']."</td><td>".$reporte[8]['total_subcat_bebidas']."</td><td>".$reporte[9]['total_subcat_bebidas']."</td><td>".$reporte[10]['total_subcat_bebidas']."</td><td>".$reporte[11]['total_subcat_bebidas']."</td><td>".$reporte[12]['total_subcat_bebidas']."</td></tr>";
            array_push($reporteArray, $linea);
            
            return $this->getResponse()->setContent(json_encode($reporteArray));
            exit;
        }

        //INTANCIAMOS NUESTRA VISTA
        $min = 0;
        $max = 0;
        $ingresos = false;
        $compra = false;
        $inventariomes = false;
        $requisicion = false;
        $venta = false;
        $no_data = false;
        if (\IngresoQuery::create()->filterByIdsucursal($idsucursal)->exists()) {
            $ingresos = true;
            $min = \IngresoQuery::create()->filterByIdsucursal($idsucursal)->orderByIngresoFecha('asc')->findOne()->getIngresoFecha('Y');
            $max = \IngresoQuery::create()->filterByIdsucursal($idsucursal)->orderByIngresoFecha('desc')->findOne()->getIngresoFecha('Y');
        }

        if (\CompraQuery::create()->filterByIdsucursal($idsucursal)->exists()) {
            $compra = true;
            $minC = \CompraQuery::create()->filterByIdsucursal($idsucursal)->orderByCompraFechacompra('asc')->findOne()->getCompraFechacompra('Y');
            $maxC = \CompraQuery::create()->filterByIdsucursal($idsucursal)->orderByCompraFechacompra('desc')->findOne()->getCompraFechacompra('Y');
            if ($minC > $min)
                $min = $minC;
            if ($maxC > $max)
                $max = $maxC;
        }

        if (\InventariomesQuery::create()->filterByIdsucursal($idsucursal)->exists()) {
            $inventariomes = true;
            $minI = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->orderByInventariomesFecha('asc')->findOne()->getInventariomesFecha('Y');
            $maxI = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->orderByInventariomesFecha('desc')->findOne()->getInventariomesFecha('Y');
            if ($minI > $min)
                $min = $minI;
            if ($maxI > $max)
                $max = $maxI;
        }

        if (\RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->exists()) {
            $requisicion = true;
            $minR = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->orderByRequisicionFecha('asc')->findOne()->getRequisicionFecha('Y');
            $maxR = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->orderByRequisicionFecha('desc')->findOne()->getRequisicionFecha('Y');
            if ($minR > $min)
                $min = $minR;
            if ($maxR > $max)
                $max = $maxR;
        }

        if (\VentaQuery::create()->filterByIdsucursal($idsucursal)->exists()) {
            $venta = true;
            $minV = \VentaQuery::create()->filterByIdsucursal($idsucursal)->orderByVentaFechaventa('asc')->findOne()->getVentaFechaventa('Y');
            $maxV = \VentaQuery::create()->filterByIdsucursal($idsucursal)->orderByVentaFechaventa('desc')->findOne()->getVentaFechaventa('Y');
            if ($minV > $min)
                $min = $minV;
            if ($maxV > $max)
                $max = $maxV;
        }

        if ($ingresos || $compra || $inventariomes || $requisicion || $venta) {
            $no_data = false;
        } else {
            $no_data = true;
        }
        $ano_array = array();
        for ($i = $min; $i <= $max; $i++) {
            $ano_array[$i] = $i;
        }

        $form = new \Application\Administracion\Form\Reportes\EstadisticosanualesForm($ano_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'no_data' => $no_data,
        ));
        $view_model->setTemplate('/application/administracion/reportes/estadisticosanuales/index');
        return $view_model;
    }

}

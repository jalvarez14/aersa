<?php

namespace Application\Administracion\Controller\Reportes;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class EstadisticosmensualesController extends AbstractActionController {

    public function indexAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            //var_dump($post_data);
            $inicio = $post_data['fecha_inicial'];
            $fin = $post_data['fecha_final'];
            $inicioSpli = explode('/', $inicio);
            $finSpli = explode('/', $fin);
            $inicio = $inicioSpli[2] . "-" . $inicioSpli[1] . "-" . $inicioSpli[0];
            $fin = $finSpli[2] . "-" . $finSpli[1] . "-" . $finSpli[0];

            $semana = (int) date('W', mktime(0, 0, 0, $inicioSpli[1], $inicioSpli[0], $inicioSpli[2]));

            $semana2 = (int) date('W', mktime(0, 0, 0, $finSpli[1], $finSpli[0], $finSpli[2]));

            $retraso = $semana2 - $semana;
            //semana -1
            if (date("D", mktime(0, 0, 0, $inicioSpli[1] - 1, $inicioSpli[0], $inicioSpli[2])) == "Mon")
                $inicio2 = $inicioSpli[2] . "-" . ($inicioSpli[1] - 1) . "-" . $inicioSpli[0];
            else
                $inicio2 = date('Y-m-d', strtotime('last monday', strtotime($inicioSpli[2] . "-" . ($inicioSpli[1] - 1) . "-" . $inicioSpli[0])));

            if (date("D", mktime(0, 0, 0, $finSpli[1] - 1, $finSpli[0], $finSpli[2])) == "Sun")
                $fin2 = $finSpli[2] . "-" . ($finSpli[1] - 1) . "-" . $finSpli[0];
            else
                $fin2 = date('Y-m-d', strtotime('next sunday', strtotime($finSpli[2] . "-" . ($finSpli[1] - 1) . "-" . $finSpli[0])));

            $semana = (int) date('W', mktime(0, 0, 0, $inicioSpli[1] - 1, $inicioSpli[0], $inicioSpli[2]));

            $semana2 = (int) date('W', mktime(0, 0, 0, $finSpli[1] - 1, $finSpli[0], $finSpli[2]));
            if ($retraso < ($semana2 - $semana))
                $inicio2 = date('Y-m-d', strtotime('last monday', strtotime('last monday', strtotime($inicioSpli[2] . "-" . ($inicioSpli[1] - 1) . "-" . $inicioSpli[0]))));
            if ($retraso > ($semana - $semana2))
                $inicio2 = date('Y-m-d', strtotime('next monday', strtotime('last monday', strtotime($inicioSpli[2] . "-" . ($inicioSpli[1] - 1) . "-" . $inicioSpli[0]))));
            //semana -2
            if (date("D", mktime(0, 0, 0, $inicioSpli[1] - 2, $inicioSpli[0], $inicioSpli[2])) == "Mon")
                $inicio3 = $inicioSpli[2] . "-" . ($inicioSpli[1] - 2) . "-" . $inicioSpli[0];
            else
                $inicio3 = date('Y-m-d', strtotime('last monday', strtotime($inicioSpli[2] . "-" . ($inicioSpli[1] - 2) . "-" . $inicioSpli[0])));

            if (date("D", mktime(0, 0, 0, $finSpli[1] - 2, $finSpli[0], $finSpli[2])) == "Sun")
                $fin3 = $finSpli[2] . "-" . ($finSpli[1] - 2) . "-" . $finSpli[0];
            else
                $fin3 = date('Y-m-d', strtotime('next sunday', strtotime($finSpli[2] . "-" . ($finSpli[1] - 2) . "-" . $finSpli[0])));

            $semana = (int) date('W', mktime(0, 0, 0, $inicioSpli[1] - 2, $inicioSpli[0], $inicioSpli[2]));
            $semana2 = (int) date('W', mktime(0, 0, 0, $finSpli[1] - 2, $finSpli[0], $finSpli[2]));
            if ($retraso < ($semana2 - $semana))
                $inicio3 = date('Y-m-d', strtotime('last monday', strtotime('last monday', strtotime($inicioSpli[2] . "-" . ($inicioSpli[1] - 2) . "-" . $inicioSpli[0]))));
            if ($retraso > ($semana - $semana2))
                $inicio3 = date('Y-m-d', strtotime('next monday', strtotime('last monday', strtotime($inicioSpli[2] . "-" . ($inicioSpli[1] - 2) . "-" . $inicioSpli[0]))));

            //anio -1
            if (date("D", mktime(0, 0, 0, $inicioSpli[1], $inicioSpli[0], $inicioSpli[2] - 1)) == "Mon")
                $inicio0 = $inicioSpli[2] . "-" . ($inicioSpli[1] - 2) . "-" . $inicioSpli[0];
            else
                $inicio0 = date('Y-m-d', strtotime('last monday', strtotime($inicioSpli[2] - 1 . "-" . ($inicioSpli[1]) . "-" . $inicioSpli[0])));

            if (date("D", mktime(0, 0, 0, $finSpli[1], $finSpli[0], $finSpli[2] - 1)) == "Sun")
                $fin0 = $finSpli[2] - 1 . "-" . ($finSpli[1]) . "-" . $finSpli[0];
            else
                $fin0 = date('Y-m-d', strtotime('next sunday', strtotime($finSpli[2] - 1 . "-" . ($finSpli[1]) . "-" . $finSpli[0])));

            $semana = (int) date('W', mktime(0, 0, 0, $inicioSpli[1], $inicioSpli[0], $inicioSpli[2] - 1));
            $semana2 = (int) date('W', mktime(0, 0, 0, $finSpli[1], $finSpli[0], $finSpli[2] - 1));
            if ($retraso < ($semana2 - $semana))
                $inicio0 = date('Y-m-d', strtotime('last monday', strtotime('last monday', strtotime($inicioSpli[2] - 1 . "-" . ($inicioSpli[1]) . "-" . $inicioSpli[0]))));
            if ($retraso > ($semana - $semana2))
                $inicio0 = date('Y-m-d', strtotime('next monday', strtotime('last monday', strtotime($inicioSpli[2] - 1 . "-" . ($inicioSpli[1]) . "-" . $inicioSpli[0]))));


/********************************************************************************************************************************/
/********************************************************************************************************************************/
/********************************************************************************************************************************/
/********************************************************************************************************************************/

            //ventas netas sin iva anio pasado
            $ingresos = \IngresoQuery::create()->filterByIdsucursal($idsucursal)->filterByIngresoFecha(array('min' => $inicio0 . ' 00:00:00', 'max' => $fin0 . ' 23:59:59'))->find();
            $ingreso = new \Ingreso();
            $ventasNetasAlimentos0 = 0;
            $ventasNetasBebidas0 = 0;
            foreach ($ingresos as $ingreso) {
                $ingresosDetalles = \IngresodetalleQuery::create()->filterByIdingreso($ingreso->getIdingreso())->find();
                $ingresoDetalle = new \Ingresodetalle();
                foreach ($ingresosDetalles as $ingresoDetalle) {
                    if ($ingresoDetalle->getIdrubroingreso() == 1)
                        $ventasNetasAlimentos0+=$ingresoDetalle->getIngresodetalleSub();
                    elseif ($ingresoDetalle->getIdrubroingreso() == 2)
                        $ventasNetasBebidas0+=$ingresoDetalle->getIngresodetalleSub();
                }
            }

            //inventario incial anio pasado
            $prevSunday = date('Y-m-d', strtotime('last sunday', strtotime($inicio0)));

            $inventariosMes = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->filterByInventariomesFecha($prevSunday)->find();
            $inventarioMes = new \Inventariomes();
            $invIniAlimentos0 = 0;
            $invIniBebidas0 = 0;
            foreach ($inventariosMes as $inventarioMes) {
                $invIniAlimentos0+=$inventarioMes->getInventariomesFinalalimentos();
                $invIniBebidas0+=$inventarioMes->getInventariomesFinalbebidas();
            }
            //compras del mes anio pasado
            $compraMesAlimentos0 = 0;
            $compraMesBebidas0 = 0;
            $iva = \TasaivaQuery::create()->filterByIdtasaiva(1)->findOne()->getTasaivaValor();
            $iva = $iva / 100 + 1;

            $almacenesActi = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->filterByAlmacenEstatus(1)->find();
            $almacen = new \Almacen();
            foreach ($almacenesActi as $almacen) {
                $compras = \CompraQuery::create()->filterByIdsucursal()->filterByIdalmacen($almacen->getIdalmacen())->filterByCompraFechacompra(array('min' => $inicio0 . ' 00:00:00', 'max' => $fin0 . ' 23:59:59'))->find();
                $compra = new \Compra();
                foreach ($compras as $compra) {
                    $comprasDetalle = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
                    $compraDetalle = new \Compradetalle();
                    foreach ($comprasDetalle as $compraDetalle) {
                        $cantidad = number_format(($compraDetalle->getCompradetalleSubtotal() * $iva), 6);
                        $cantidad = str_replace(",", "", $cantidad);
                        if ($compraDetalle->getProducto()->getIdcategoria() == 1)
                            $compraMesAlimentos0+=$cantidad;
                        elseif ($compraDetalle->getProducto()->getIdcategoria() == 2)
                            $compraMesBebidas0+=$cantidad;
                    }
                }
            }

            //existencias anio pasado
            $existenciaAlimentos0 = $invIniAlimentos0 + $compraMesAlimentos0;
            $existenciaBebidas0 = $invIniBebidas0 + $compraMesBebidas0;

            //inventario final anio pasado
            $invFinAlimentos0 = 0;
            $invFinBebidas0 = 0;
            $inventariosFinMes = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->filterByInventariomesFecha($fin0)->find();
            $inventarioFinMes = new \Inventariomes();
            foreach ($inventariosFinMes as $inventarioFinMes) {
                $invFinAlimentos0+=$inventarioFinMes->getInventariomesFinalalimentos();
                $invFinBebidas0+=$inventarioFinMes->getInventariomesFinalbebidas();
            }

            //costo bruto anio pasado
            $costoBrutoAlimentos0 = $existenciaAlimentos0 - $invFinAlimentos0;
            $costoBrutoBebidas0 = $existenciaBebidas0 - $invFinBebidas0;

            //creditos al costo anio pasado
            $creditosCostAlimentos0 = 0;
            $creditosCostBebidas0 = 0;
            $creditosCostConsolidado = 0;

            $cortesiasAlimentos0 = 0;
            $cortesiasBebidas0 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Cortesia')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio0 . ' 00:00:00', 'max' => $fin0 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $cortesiasAlimentos0+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $cortesiasBebidas0+=$cantidad;
                    }
                }
            }

            $consumoEmplAlimentos0 = 0;
            $consumoEmplBebidas0 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Consumos de empleados')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio0 . ' 00:00:00', 'max' => $fin0 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $consumoEmplAlimentos0+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $consumoEmplBebidas0+=$cantidad;
                    }
                }
            }

            $consumoEjecAlimentos0 = 0;
            $consumoEjecBebidas0 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Consumos de ejecutivos')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio0 . ' 00:00:00', 'max' => $fin0 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $consumoEjecAlimentos0+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $consumoEjecBebidas0+=$cantidad;
                    }
                }
            }

            $transpasoSerAlimentos0 = 0;
            $transpasoSerBebidas0 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Traspaso a servicio')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio0 . ' 00:00:00', 'max' => $fin0 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $transpasoSerAlimentos0+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $transpasoSerBebidas0+=$cantidad;
                    }
                }
            }

            $mermaAlimentos0 = 0;
            $mermaBebidas0 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Mermas')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio0 . ' 00:00:00', 'max' => $fin0 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $mermaAlimentos0+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $mermaBebidas0+=$cantidad;
                    }
                }
            }

            $creditosCostAlimentos0 = $consumoEmplAlimentos0 + $consumoEjecAlimentos0 + $cortesiasAlimentos0 + $transpasoSerAlimentos0 + $mermaAlimentos0;
            $creditosCostBebidas0 = $consumoEmplBebidas0 + $consumoEjecBebidas0 + $cortesiasBebidas0 + $transpasoSerBebidas0 + $mermaBebidas0;

            //Costo neto de venta anio pasado
            $costVentAlimentos0 = $costoBrutoAlimentos0 - $creditosCostAlimentos0;
            $costVentBebidas0 = $costoBrutoBebidas0 - $creditosCostBebidas0;

            //% costo de venta anio pasado
            $porcCostoVentaAlimentos0 = ($costVentAlimentos0 !=0 || $ventasNetasAlimentos0 !=0)?$costVentAlimentos0 / $ventasNetasAlimentos0: 0;
            $porcCostoVentaBebidas0 = ($costVentBebidas0 !=0 || $ventasNetasBebidas0!=0) ? $costVentBebidas0 / $ventasNetasBebidas0: 0;

            //ventas x rubro anio pasado
            $ventasRubroAlimentos0 = 0;
            $ventasRubroBebidas0 = 0;
            $ventas = \VentaQuery::create()->filterByIdsucursal($idsucursal)->filterByVentaFechaventa(array('min' => $inicio0 . ' 00:00:00', 'max' => $fin0 . ' 23:59:59'))->find();
            $venta = new \Venta();

            foreach ($ventas as $venta) {
                $ventadetalles = \VentadetalleQuery::create()->filterByIdventa($venta->getIdventa())->find();
                $ventadetalle = new \Ventadetalle();

                foreach ($ventadetalles as $ventadetalle) {
                    if ($ventadetalle->getProducto()->getIdcategoria() == 1)
                        $ventasRubroAlimentos0+=$ventadetalle->getVentadetalleSubtotal();
                    if ($ventadetalle->getProducto()->getIdcategoria() == 2)
                        $ventasRubroBebidas0+=$ventadetalle->getVentadetalleSubtotal();
                }
            }

            //venta promedio diaria sin iva anio pasado
            //dias activos
            $ingresos = \IngresoQuery::create()
                    ->filterByIngresoFecha(array('min' => $inicio0 . ' 00:00:00', 'max' => $fin0 . ' 23:59:59'))
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

            $ventasPromDiar0 = (($ventasNetasAlimentos0 + $ventasNetasBebidas0) != 0 || $dias_activos != 0) ? ($ventasNetasAlimentos0 + $ventasNetasBebidas0) / $dias_activos : 0;

            //Consumo promedio p/empleado diario anio pasado
            //(sumatoria de comedor empleados/dias activos)/promedio empleados
            $inicio0Split = explode('-', $inicio0); //2015-09-07
            $fin0Split = explode('-', $fin0); //2015-09-07
            //$inicio = $inicioSpli[2]-1 . "-" . $inicioSpli[1] . "-" . $inicioSpli[0];
            //$fin = $finSpli[2] . "-" . $finSpli[1] . "-" . $finSpli[0];
            $trabajadorespromedio = 0;
            if ($inicio0Split[2] != $fin0Split[2]) {
                for ($anio = $inicio0Split[2]; $anio <= $fin0Split[2]; $anio++) {
                    $objtrabajadorespromedios = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($anio)->find();
                    $objtrabajadorespromedio = new \Trabajadorespromedio();
                    foreach ($objtrabajadorespromedios as $objtrabajadorespromedio) {
                        $trabajadorespromedio+=$objtrabajadorespromedio->getTrabajadorespromedioCantidad();
                    }
                }
            } else {
                for ($mes = $inicio0Split[1]; $mes <= $fin0Split[1]; $mes++) {
                    $obj = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($inicio0Split[2])->filterByTrabajadorespromedioMes($mes)->findOne();
                    if ($obj != null) {
                        $trabajadorespromedio+=$obj->getTrabajadorespromedioCantidad();
                    }
                }
            }

            $consumoPromEmpl0 = ($trabajadorespromedio != 0) ? (($consumoEmplAlimentos0 + $consumoEmplBebidas0) / $dias_activos) / $trabajadorespromedio : 0;


            //listado de productos con subcategorias anio pasado
            $comprasObj = \CompraQuery::create()->filterByIdsucursal($idsucursal)->filterByCompraFechacompra(array('min' => $inicio0 . ' 00:00:00', 'max' => $fin0 . ' 23:59:59'))->find();
            $compraObj = new \Compra();
            $requisicionesObj = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByRequisicionFecha(array('min' => $inicio0 . ' 00:00:00', 'max' => $fin0 . ' 23:59:59'))->find();
            $requisicionObj = new \Requisicion();

            $productosAlimentos0 = array();
            $productosBebidas0 = array();
            foreach ($comprasObj as $compraObj) {
                $compradetalles = \CompradetalleQuery::create()->filterByIdcompra($compraObj->getIdcompra())->find();
                $compradetalle = new \Compradetalle();
                foreach ($compradetalles as $compradetalle) {
                    $idproducto = $compradetalle->getIdproducto();
                    if ($compradetalle->getProducto()->getIdcategoria() == 1) {
                        if (isset($productosAlimentos0[$idproducto])) {
                            $productosAlimentos0[$idproducto]+=$compradetalle->getCompradetalleSubtotal();
                        } else {
                            $productosAlimentos0[$idproducto] = $compradetalle->getCompradetalleSubtotal();
                        }
                    } elseif ($compradetalle->getProducto()->getIdcategoria() == 2) {
                        if (isset($productosBebidas0[$idproducto])) {
                            $productosBebidas0[$idproducto]+=$compradetalle->getCompradetalleSubtotal();
                        } else {
                            $productosBebidas0[$idproducto] = $compradetalle->getCompradetalleSubtotal();
                        }
                    }
                }
            }

            foreach ($requisicionesObj as $requisicionObj) {
                if ($requisicionObj->getAlmacenRelatedByIdalmacendestino()->getAlmacenNombre() != "Almacén general") {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicionObj->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $idproducto = $requisiciondetalle->getIdproducto();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1) {
                            if (isset($productosAlimentos0[$idproducto])) {
                                $productosAlimentos0[$idproducto]+=$requisiciondetalle->getRequisiciondetalleSubtotal();
                            } else {
                                $productosAlimentos0[$idproducto] = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            }
                        } elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2) {
                            if (isset($productosBebidas0[$idproducto])) {
                                $productosBebidas0[$idproducto]+=$requisiciondetalle->getRequisiciondetalleSubtotal();
                            } else {
                                $productosBebidas0[$idproducto] = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            }
                        }
                    }
                }
            }






/********************************************************************************************************************************/
/********************************************************************************************************************************/
/********************************************************************************************************************************/
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
            $porcCostoVentaAlimentos = ($costVentAlimentos !=0 || $ventasNetasAlimentos !=0) ? $costVentAlimentos / $ventasNetasAlimentos : 0;
            $porcCostoVentaBebidas = ($costVentBebidas!=0 || $ventasNetasBebidas!=0) ? $costVentBebidas / $ventasNetasBebidas : 0;

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
                    $idproducto = $compradetalle->getIdproducto();
                    if ($compradetalle->getProducto()->getIdcategoria() == 1) {
                        if (isset($productosAlimentos[$idproducto])) {
                            $productosAlimentos[$idproducto]+=$compradetalle->getCompradetalleSubtotal();
                        } else {
                            $productosAlimentos[$idproducto] = $compradetalle->getCompradetalleSubtotal();
                        }
                    } elseif ($compradetalle->getProducto()->getIdcategoria() == 2) {
                        if (isset($productosBebidas[$idproducto])) {
                            $productosBebidas[$idproducto]+=$compradetalle->getCompradetalleSubtotal();
                        } else {
                            $productosBebidas[$idproducto] = $compradetalle->getCompradetalleSubtotal();
                        }
                    }
                }
            }

            foreach ($requisicionesObj as $requisicionObj) {
                if ($requisicionObj->getAlmacenRelatedByIdalmacendestino()->getAlmacenNombre() != "Almacén general") {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicionObj->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $idproducto = $requisiciondetalle->getIdproducto();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1) {
                            if (isset($productosAlimentos[$idproducto])) {
                                $productosAlimentos[$idproducto]+=$requisiciondetalle->getRequisiciondetalleSubtotal();
                            } else {
                                $productosAlimentos[$idproducto] = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            }
                        } elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2) {
                            if (isset($productosBebidas[$idproducto])) {
                                $productosBebidas[$idproducto]+=$requisiciondetalle->getRequisiciondetalleSubtotal();
                            } else {
                                $productosBebidas[$idproducto] = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            }
                        }
                    }
                }
            }


/********************************************************************************************************************************/
/********************************************************************************************************************************/
/********************************************************************************************************************************/
/********************************************************************************************************************************/
            //ventas netas sin iva -1 semana
            $ingresos = \IngresoQuery::create()->filterByIdsucursal($idsucursal)->filterByIngresoFecha(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))->find();
            $ingreso = new \Ingreso();
            $ventasNetasAlimentos2 = 0;
            $ventasNetasBebidas2 = 0;
            $ventasNetasConsolidado2 = 0;
            foreach ($ingresos as $ingreso) {
                $ingresosDetalles = \IngresodetalleQuery::create()->filterByIdingreso($ingreso->getIdingreso())->find();
                $ingresoDetalle = new \Ingresodetalle();
                foreach ($ingresosDetalles as $ingresoDetalle) {
                    if ($ingresoDetalle->getIdrubroingreso() == 1)
                        $ventasNetasAlimentos2+=$ingresoDetalle->getIngresodetalleSub();
                    elseif ($ingresoDetalle->getIdrubroingreso() == 2)
                        $ventasNetasBebidas2+=$ingresoDetalle->getIngresodetalleSub();
                }
            }
            
            //inventario incial -1 semana
            $prevSunday = date('Y-m-d', strtotime('last sunday', strtotime($inicio2)));

            $inventariosMes = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->filterByInventariomesFecha($prevSunday)->find();
            $inventarioMes = new \Inventariomes();
            $invIniAlimentos2 = 0;
            $invIniBebidas2 = 0;
            foreach ($inventariosMes as $inventarioMes) {
                $invIniAlimentos2+=$inventarioMes->getInventariomesFinalalimentos();
                $invIniBebidas2+=$inventarioMes->getInventariomesFinalbebidas();
            }
            //compras del mes -1 semana
            $compraMesAlimentos2 = 0;
            $compraMesBebidas2 = 0;
            $iva = \TasaivaQuery::create()->filterByIdtasaiva(1)->findOne()->getTasaivaValor();
            $iva = $iva / 100 + 1;

            $almacenesActi = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->filterByAlmacenEstatus(1)->find();
            $almacen = new \Almacen();
            foreach ($almacenesActi as $almacen) {
                $compras = \CompraQuery::create()->filterByIdsucursal()->filterByIdalmacen($almacen->getIdalmacen())->filterByCompraFechacompra(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))->find();
                $compra = new \Compra();
                foreach ($compras as $compra) {
                    $comprasDetalle = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
                    $compraDetalle = new \Compradetalle();
                    foreach ($comprasDetalle as $compraDetalle) {
                        $cantidad = number_format(($compraDetalle->getCompradetalleSubtotal() * $iva), 6);
                        $cantidad = str_replace(",", "", $cantidad);
                        if ($compraDetalle->getProducto()->getIdcategoria() == 1)
                            $compraMesAlimentos2+=$cantidad;
                        elseif ($compraDetalle->getProducto()->getIdcategoria() == 2)
                            $compraMesBebidas2+=$cantidad;
                    }
                }
            }

            //existencias -1 semana
            $existenciaAlimentos2 = $invIniAlimentos2 + $compraMesAlimentos2;
            $existenciaBebidas2 = $invIniBebidas2 + $compraMesBebidas2;

            //inventario final -1 semana
            $invFinAlimentos2 = 0;
            $invFinBebidas2 = 0;
            $inventariosFinMes = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->filterByInventariomesFecha($fin2)->find();
            $inventarioFinMes = new \Inventariomes();
            foreach ($inventariosFinMes as $inventarioFinMes) {
                $invFinAlimentos2+=$inventarioFinMes->getInventariomesFinalalimentos();
                $invFinBebidas2+=$inventarioFinMes->getInventariomesFinalbebidas();
            }

            //costo bruto -1 semana
            $costoBrutoAlimentos2 = $existenciaAlimentos2 - $invFinAlimentos2;
            $costoBrutoBebidas2 = $existenciaBebidas2 - $invFinBebidas2;

            //creditos al costo -1 semana
            $creditosCostAlimentos2 = 0;
            $creditosCostBebidas2 = 0;

            $cortesiasAlimentos2 = 0;
            $cortesiasBebidas2 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Cortesia')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $cortesiasAlimentos2+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $cortesiasBebidas2+=$cantidad;
                    }
                }
            }

            $consumoEmplAlimentos2 = 0;
            $consumoEmplBebidas2 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Consumos de empleados')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $consumoEmplAlimentos2+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $consumoEmplBebidas2+=$cantidad;
                    }
                }
            }

            $consumoEjecAlimentos2 = 0;
            $consumoEjecBebidas2 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Consumos de ejecutivos')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $consumoEjecAlimentos2+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $consumoEjecBebidas2+=$cantidad;
                    }
                }
            }

            $transpasoSerAlimentos2 = 0;
            $transpasoSerBebidas2 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Traspaso a servicio')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $transpasoSerAlimentos2+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $transpasoSerBebidas2+=$cantidad;
                    }
                }
            }

            $mermaAlimentos2 = 0;
            $mermaBebidas2 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Mermas')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $mermaAlimentos2+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $mermaBebidas2+=$cantidad;
                    }
                }
            }

            $creditosCostAlimentos2 = $consumoEmplAlimentos2 + $consumoEjecAlimentos2 + $cortesiasAlimentos2 + $transpasoSerAlimentos2 + $mermaAlimentos2;
            $creditosCostBebidas2 = $consumoEmplBebidas2 + $consumoEjecBebidas2 + $cortesiasBebidas2 + $transpasoSerBebidas2 + $mermaBebidas2;

            //Costo neto de venta -1 semana
            $costVentAlimentos2 = $costoBrutoAlimentos2 - $creditosCostAlimentos2;
            $costVentBebidas2 = $costoBrutoBebidas2 - $creditosCostBebidas2;

            //% costo de venta -1 semana
            $porcCostoVentaAlimentos2 = ($costVentAlimentos2 !=0 || $ventasNetasAlimentos2 !=0) ? $costVentAlimentos2 / $ventasNetasAlimentos2 : 0;
            $porcCostoVentaBebidas2 = ($costVentBebidas2!=0 || $ventasNetasBebidas2!=0) ? $costVentBebidas2 / $ventasNetasBebidas2 : 0;

            //ventas x rubro -1 semana
            $ventasRubroAlimentos2 = 0;
            $ventasRubroBebidas2 = 0;
            $ventas = \VentaQuery::create()->filterByIdsucursal($idsucursal)->filterByVentaFechaventa(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))->find();
            $venta = new \Venta();

            foreach ($ventas as $venta) {
                $ventadetalles = \VentadetalleQuery::create()->filterByIdventa($venta->getIdventa())->find();
                $ventadetalle = new \Ventadetalle();

                foreach ($ventadetalles as $ventadetalle) {
                    if ($ventadetalle->getProducto()->getIdcategoria() == 1)
                        $ventasRubroAlimentos2+=$ventadetalle->getVentadetalleSubtotal();
                    if ($ventadetalle->getProducto()->getIdcategoria() == 2)
                        $ventasRubroBebidas2+=$ventadetalle->getVentadetalleSubtotal();
                }
            }

            //venta promedio diaria sin iva -1 semana
            //dias activos
            $ingresos = \IngresoQuery::create()
                    ->filterByIngresoFecha(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))
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

            $ventasPromDiar2 = (($ventasNetasAlimentos2 + $ventasNetasBebidas2) != 0 || $dias_activos != 0) ? ($ventasNetasAlimentos2 + $ventasNetasBebidas2) / $dias_activos : 0;

            //Consumo promedio p/empleado diario -1 semana
            //(sumatoria de comedor empleados/dias activos)/promedio empleados
            $inicio2Split = explode('-', $inicio2); //2015-09-07
            $fin2Split = explode('-', $fin2); //2015-09-07
            //$inicio = $inicioSpli[2]-1 . "-" . $inicioSpli[1] . "-" . $inicioSpli[0];
            //$fin = $finSpli[2] . "-" . $finSpli[1] . "-" . $finSpli[0];
            $trabajadorespromedio = 0;
            if ($inicio2Split[2] != $fin2Split[2]) {
                for ($anio = $inicio2Split[2]; $anio <= $fin2Split[2]; $anio++) {
                    $objtrabajadorespromedios = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($anio)->find();
                    $objtrabajadorespromedio = new \Trabajadorespromedio();
                    foreach ($objtrabajadorespromedios as $objtrabajadorespromedio) {
                        $trabajadorespromedio+=$objtrabajadorespromedio->getTrabajadorespromedioCantidad();
                    }
                }
            } else {
                for ($mes = $inicio2Split[1]; $mes <= $fin2Split[1]; $mes++) {
                    $obj = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($inicio2Split[2])->filterByTrabajadorespromedioMes($mes)->findOne();
                    if ($obj != null) {
                        $trabajadorespromedio+=$obj->getTrabajadorespromedioCantidad();
                    }
                }
            }

            $consumoPromEmpl2 = ($trabajadorespromedio != 0) ? (($consumoEmplAlimentos2 + $consumoEmplBebidas2) / $dias_activos) / $trabajadorespromedio : 0;


            //listado de productos con subcategorias -1 semana
            $comprasObj = \CompraQuery::create()->filterByIdsucursal($idsucursal)->filterByCompraFechacompra(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))->find();
            $compraObj = new \Compra();
            $requisicionesObj = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByRequisicionFecha(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))->find();
            $requisicionObj = new \Requisicion();

            $productosAlimentos2 = array();
            $productosBebidas2 = array();
            foreach ($comprasObj as $compraObj) {
                $compradetalles = \CompradetalleQuery::create()->filterByIdcompra($compraObj->getIdcompra())->find();
                $compradetalle = new \Compradetalle();
                foreach ($compradetalles as $compradetalle) {
                    $idproducto = $compradetalle->getIdproducto();
                    if ($compradetalle->getProducto()->getIdcategoria() == 1) {
                        if (isset($productosAlimentos2[$idproducto])) {
                            $productosAlimentos2[$idproducto]+=$compradetalle->getCompradetalleSubtotal();
                        } else {
                            $productosAlimentos2[$idproducto] = $compradetalle->getCompradetalleSubtotal();
                        }
                    } elseif ($compradetalle->getProducto()->getIdcategoria() == 2) {
                        if (isset($productosBebidas2[$idproducto])) {
                            $productosBebidas2[$idproducto]+=$compradetalle->getCompradetalleSubtotal();
                        } else {
                            $productosBebidas2[$idproducto] = $compradetalle->getCompradetalleSubtotal();
                        }
                    }
                }
            }

            foreach ($requisicionesObj as $requisicionObj) {
                if ($requisicionObj->getAlmacenRelatedByIdalmacendestino()->getAlmacenNombre() != "Almacén general") {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicionObj->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $idproducto = $requisiciondetalle->getIdproducto();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1) {
                            if (isset($productosAlimentos2[$idproducto])) {
                                $productosAlimentos2[$idproducto]+=$requisiciondetalle->getRequisiciondetalleSubtotal();
                            } else {
                                $productosAlimentos2[$idproducto] = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            }
                        } elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2) {
                            if (isset($productosBebidas2[$idproducto])) {
                                $productosBebidas2[$idproducto]+=$requisiciondetalle->getRequisiciondetalleSubtotal();
                            } else {
                                $productosBebidas2[$idproducto] = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            }
                        }
                    }
                }
            }


/********************************************************************************************************************************/
/********************************************************************************************************************************/
/********************************************************************************************************************************/
/********************************************************************************************************************************/

            //ventas netas sin iva -2 semana
            $ingresos = \IngresoQuery::create()->filterByIdsucursal($idsucursal)->filterByIngresoFecha(array('min' => $inicio3 . ' 00:00:00', 'max' => $fin3 . ' 23:59:59'))->find();
            $ingreso = new \Ingreso();
            $ventasNetasAlimentos3 = 0;
            $ventasNetasBebidas3 = 0;
            foreach ($ingresos as $ingreso) {
                $ingresosDetalles = \IngresodetalleQuery::create()->filterByIdingreso($ingreso->getIdingreso())->find();
                $ingresoDetalle = new \Ingresodetalle();
                foreach ($ingresosDetalles as $ingresoDetalle) {
                    if ($ingresoDetalle->getIdrubroingreso() == 1)
                        $ventasNetasAlimentos3+=$ingresoDetalle->getIngresodetalleSub();
                    elseif ($ingresoDetalle->getIdrubroingreso() == 2)
                        $ventasNetasBebidas3+=$ingresoDetalle->getIngresodetalleSub();
                }
            }
            
            //inventario incial -1 semana
            $prevSunday = date('Y-m-d', strtotime('last sunday', strtotime($inicio3)));

            $inventariosMes = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->filterByInventariomesFecha($prevSunday)->find();
            $inventarioMes = new \Inventariomes();
            $invIniAlimentos3 = 0;
            $invIniBebidas3 = 0;
            foreach ($inventariosMes as $inventarioMes) {
                $invIniAlimentos3+=$inventarioMes->getInventariomesFinalalimentos();
                $invIniBebidas3+=$inventarioMes->getInventariomesFinalbebidas();
            }
            //compras del mes -1 semana
            $compraMesAlimentos3 = 0;
            $compraMesBebidas3 = 0;
            $iva = \TasaivaQuery::create()->filterByIdtasaiva(1)->findOne()->getTasaivaValor();
            $iva = $iva / 100 + 1;

            $almacenesActi = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->filterByAlmacenEstatus(1)->find();
            $almacen = new \Almacen();
            foreach ($almacenesActi as $almacen) {
                $compras = \CompraQuery::create()->filterByIdsucursal()->filterByIdalmacen($almacen->getIdalmacen())->filterByCompraFechacompra(array('min' => $inicio3 . ' 00:00:00', 'max' => $fin3 . ' 23:59:59'))->find();
                $compra = new \Compra();
                foreach ($compras as $compra) {
                    $comprasDetalle = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
                    $compraDetalle = new \Compradetalle();
                    foreach ($comprasDetalle as $compraDetalle) {
                        $cantidad = number_format(($compraDetalle->getCompradetalleSubtotal() * $iva), 6);
                        $cantidad = str_replace(",", "", $cantidad);
                        if ($compraDetalle->getProducto()->getIdcategoria() == 1)
                            $compraMesAlimentos3+=$cantidad;
                        elseif ($compraDetalle->getProducto()->getIdcategoria() == 2)
                            $compraMesBebidas3+=$cantidad;
                    }
                }
            }

            //existencias -1 semana
            $existenciaAlimentos3 = $invIniAlimentos3 + $compraMesAlimentos3;
            $existenciaBebidas3 = $invIniBebidas3 + $compraMesBebidas3;

            //inventario final -1 semana
            $invFinAlimentos3 = 0;
            $invFinBebidas3 = 0;
            $inventariosFinMes = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->filterByInventariomesFecha($fin3)->find();
            $inventarioFinMes = new \Inventariomes();
            foreach ($inventariosFinMes as $inventarioFinMes) {
                $invFinAlimentos3+=$inventarioFinMes->getInventariomesFinalalimentos();
                $invFinBebidas3+=$inventarioFinMes->getInventariomesFinalbebidas();
            }

            //costo bruto -1 semana
            $costoBrutoAlimentos3 = $existenciaAlimentos3 - $invFinAlimentos3;
            $costoBrutoBebidas3 = $existenciaBebidas3 - $invFinBebidas3;

            //creditos al costo -1 semana
            $creditosCostAlimentos3 = 0;
            $creditosCostBebidas3 = 0;

            $cortesiasAlimentos3 = 0;
            $cortesiasBebidas3 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Cortesia')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio3 . ' 00:00:00', 'max' => $fin3 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $cortesiasAlimentos3+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $cortesiasBebidas3+=$cantidad;
                    }
                }
            }

            $consumoEmplAlimentos3 = 0;
            $consumoEmplBebidas3 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Consumos de empleados')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio3 . ' 00:00:00', 'max' => $fin3 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $consumoEmplAlimentos3+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $consumoEmplBebidas3+=$cantidad;
                    }
                }
            }

            $consumoEjecAlimentos3 = 0;
            $consumoEjecBebidas3 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Consumos de ejecutivos')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio3 . ' 00:00:00', 'max' => $fin3 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $consumoEjecAlimentos3+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $consumoEjecBebidas3+=$cantidad;
                    }
                }
            }

            $transpasoSerAlimentos3 = 0;
            $transpasoSerBebidas3 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Traspaso a servicio')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio3 . ' 00:00:00', 'max' => $fin3 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $transpasoSerAlimentos3+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $transpasoSerBebidas3+=$cantidad;
                    }
                }
            }

            $mermaAlimentos3 = 0;
            $mermaBebidas3 = 0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Mermas')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio2 . ' 00:00:00', 'max' => $fin2 . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $cantidad = $requisiciondetalle->getRequisiciondetalleSubtotal();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1)
                            $mermaAlimentos3+=$cantidad;
                        elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2)
                            $mermaBebidas3+=$cantidad;
                    }
                }
            }

            $creditosCostAlimentos3 = $consumoEmplAlimentos3 + $consumoEjecAlimentos3 + $cortesiasAlimentos3 + $transpasoSerAlimentos3 + $mermaAlimentos3;
            $creditosCostBebidas3 = $consumoEmplBebidas3 + $consumoEjecBebidas3 + $cortesiasBebidas3 + $transpasoSerBebidas3 + $mermaBebidas3;

            //Costo neto de venta -1 semana
            $costVentAlimentos3 = $costoBrutoAlimentos3 - $creditosCostAlimentos3;
            $costVentBebidas3 = $costoBrutoBebidas3 - $creditosCostBebidas3;

            //% costo de venta -1 semana
            $porcCostoVentaAlimentos3 = ($costVentAlimentos3 !=0 || $ventasNetasAlimentos3 !=0) ? $costVentAlimentos3 / $ventasNetasAlimentos3 : 0;
            $porcCostoVentaBebidas3 = ($costVentBebidas3!=0 || $ventasNetasBebidas3!=0) ? $costVentBebidas3 / $ventasNetasBebidas3 : 0;

            //ventas x rubro -1 semana
            $ventasRubroAlimentos3 = 0;
            $ventasRubroBebidas3 = 0;
            $ventas = \VentaQuery::create()->filterByIdsucursal($idsucursal)->filterByVentaFechaventa(array('min' => $inicio3 . ' 00:00:00', 'max' => $fin3 . ' 23:59:59'))->find();
            $venta = new \Venta();

            foreach ($ventas as $venta) {
                $ventadetalles = \VentadetalleQuery::create()->filterByIdventa($venta->getIdventa())->find();
                $ventadetalle = new \Ventadetalle();

                foreach ($ventadetalles as $ventadetalle) {
                    if ($ventadetalle->getProducto()->getIdcategoria() == 1)
                        $ventasRubroAlimentos3+=$ventadetalle->getVentadetalleSubtotal();
                    if ($ventadetalle->getProducto()->getIdcategoria() == 2)
                        $ventasRubroBebidas3+=$ventadetalle->getVentadetalleSubtotal();
                }
            }

            //venta promedio diaria sin iva -1 semana
            //dias activos
            $ingresos = \IngresoQuery::create()
                    ->filterByIngresoFecha(array('min' => $inicio3 . ' 00:00:00', 'max' => $fin3 . ' 23:59:59'))
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

            $ventasPromDiar3 = (($ventasNetasAlimentos3 + $ventasNetasBebidas3) != 0 && $dias_activos != 0) ? ($ventasNetasAlimentos3 + $ventasNetasBebidas3) / $dias_activos : 0;
            //$ventasPromDiar2 = (($ventasNetasAlimentos2 + $ventasNetasBebidas2) != 0 && $dias_activos != 0) ? ($ventasNetasAlimentos2 + $ventasNetasBebidas2) / $dias_activos : 0;
            //Consumo promedio p/empleado diario -1 semana
            //(sumatoria de comedor empleados/dias activos)/promedio empleados
            $inicio3Split = explode('-', $inicio3); //2015-09-07
            $fin3Split = explode('-', $fin3); //2015-09-07
            //$inicio = $inicioSpli[2]-1 . "-" . $inicioSpli[1] . "-" . $inicioSpli[0];
            //$fin = $finSpli[2] . "-" . $finSpli[1] . "-" . $finSpli[0];
            $trabajadorespromedio = 0;
            if ($inicio3Split[2] != $fin3Split[2]) {
                for ($anio = $inicio3Split[2]; $anio <= $fin3Split[2]; $anio++) {
                    $objtrabajadorespromedios = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($anio)->find();
                    $objtrabajadorespromedio = new \Trabajadorespromedio();
                    foreach ($objtrabajadorespromedios as $objtrabajadorespromedio) {
                        $trabajadorespromedio+=$objtrabajadorespromedio->getTrabajadorespromedioCantidad();
                    }
                }
            } else {
                for ($mes = $inicio3Split[1]; $mes <= $fin3Split[1]; $mes++) {
                    $obj = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($inicio3Split[2])->filterByTrabajadorespromedioMes($mes)->findOne();
                    if ($obj != null) {
                        $trabajadorespromedio+=$obj->getTrabajadorespromedioCantidad();
                    }
                }
            }

            $consumoPromEmpl3 = ($trabajadorespromedio != 0) ? (($consumoEmplAlimentos3+ $consumoEmplBebidas3) / $dias_activos) / $trabajadorespromedio : 0;


            //listado de productos con subcategorias -1 semana
            $comprasObj = \CompraQuery::create()->filterByIdsucursal($idsucursal)->filterByCompraFechacompra(array('min' => $inicio3 . ' 00:00:00', 'max' => $fin3 . ' 23:59:59'))->find();
            $compraObj = new \Compra();
            $requisicionesObj = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByRequisicionFecha(array('min' => $inicio3 . ' 00:00:00', 'max' => $fin3 . ' 23:59:59'))->find();
            $requisicionObj = new \Requisicion();

            $productosAlimentos3 = array();
            $productosBebidas3 = array();
            foreach ($comprasObj as $compraObj) {
                $compradetalles = \CompradetalleQuery::create()->filterByIdcompra($compraObj->getIdcompra())->find();
                $compradetalle = new \Compradetalle();
                foreach ($compradetalles as $compradetalle) {
                    $idproducto = $compradetalle->getIdproducto();
                    if ($compradetalle->getProducto()->getIdcategoria() == 1) {
                        if (isset($productosAlimentos3[$idproducto])) {
                            $productosAlimentos3[$idproducto]+=$compradetalle->getCompradetalleSubtotal();
                        } else {
                            $productosAlimentos3[$idproducto] = $compradetalle->getCompradetalleSubtotal();
                        }
                    } elseif ($compradetalle->getProducto()->getIdcategoria() == 2) {
                        if (isset($productosBebidas3[$idproducto])) {
                            $productosBebidas3[$idproducto]+=$compradetalle->getCompradetalleSubtotal();
                        } else {
                            $productosBebidas3[$idproducto] = $compradetalle->getCompradetalleSubtotal();
                        }
                    }
                }
            }

            foreach ($requisicionesObj as $requisicionObj) {
                if ($requisicionObj->getAlmacenRelatedByIdalmacendestino()->getAlmacenNombre() != "Almacén general") {
                    $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicionObj->getIdrequisicion())->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisiciondetalles as $requisiciondetalle) {
                        $idproducto = $requisiciondetalle->getIdproducto();
                        if ($requisiciondetalle->getProducto()->getIdcategoria() == 1) {
                            if (isset($productosAlimentos3[$idproducto])) {
                                $productosAlimentos3[$idproducto]+=$requisiciondetalle->getRequisiciondetalleSubtotal();
                            } else {
                                $productosAlimentos3[$idproducto] = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            }
                        } elseif ($requisiciondetalle->getProducto()->getIdcategoria() == 2) {
                            if (isset($productosBebidas3[$idproducto])) {
                                $productosBebidas3[$idproducto]+=$requisiciondetalle->getRequisiciondetalleSubtotal();
                            } else {
                                $productosBebidas3[$idproducto] = $requisiciondetalle->getRequisiciondetalleSubtotal();
                            }
                        }
                    }
                }
            }
            
/********************************************************************************************************************************/
/********************************************************************************************************************************/
/********************************************************************************************************************************/
/********************************************************************************************************************************/
        $reporte=array();
        $nombreEmpresa=  \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
        array_push($reporte, "<tr><td>$nombreEmpresa</td></tr>");
        array_push($reporte, "<tr><td>Análisis comparativo estadístico</td></tr>");
        array_push($reporte, "<tr><td>$inicio - $fin</td></tr>");
        array_push($reporte, "<tr><td>Concepto</td><td>$inicio3 - $fin3</td><td>$inicio2 - $fin2</td><td>$inicio - $fin</td><td>$inicio0 - $fin0</td><td>%</td></tr>");
        array_push($reporte, "<tr><td>Ingresos sin IVA</td><td>".$ventasNetasAlimentos3+$ventasNetasBebidas3."</td><td> ".$ventasNetasAlimentos2+$ventasNetasBebidas2."</td><td>".$ventasNetasAlimentos+$ventasNetasBebidas."</td><td>".$ventasNetasAlimentos0+$ventasNetasBebidas0."</td><td></td></tr>");
        array_push($reporte, "<tr><td>Costo de venta</td><td>".$costVentAlimentos3+$costVentBebidas3."</td><td>".$costVentAlimentos2+$costVentBebidas2."</td><td>".$costVentAlimentos+$costVentBebidas."</td><td>".$costVentAlimentos0+$costVentBebidas0."</td><td></td></tr>");    
        $porc3=(($costVentAlimentos3+$costVentBebidas3)!=0 || ($ventasNetasAlimentos3+$ventasNetasBebidas3)!=0) ? ($costVentAlimentos3+$costVentBebidas3)/($ventasNetasAlimentos3+$ventasNetasBebidas3) : 0;
        $porc2=(($costVentAlimentos2+$costVentBebidas2)!=0 || ($ventasNetasAlimentos2+$ventasNetasBebidas2)!=0) ? ($costVentAlimentos2+$costVentBebidas2)/($ventasNetasAlimentos3+$ventasNetasBebidas2) : 0;
        $porc=(($costVentAlimentos+$costVentBebidas)!=0 || ($ventasNetasAlimentos+$ventasNetasBebidas)!=0) ? ($costVentAlimentos+$costVentBebidas)/($ventasNetasAlimentos3+$ventasNetasBebidas) : 0;
        $porc0=(($costVentAlimentos0+$costVentBebidas0)!=0 || ($ventasNetasAlimentos0+$ventasNetasBebidas0)!=0) ? ($costVentAlimentos0+$costVentBebidas0)/($ventasNetasAlimentos3+$ventasNetasBebidas0) : 0;
        array_push($reporte, "<tr><td>% Costo de venta</td><td>$porc3</td><td>$porc2</td><td>$porc</td><td>$porc0</td><td></td></tr>");    
        array_push($reporte, "<tr><td>Ventas por rubro</td><td></td><td></td><td></td><td></td><td></td></tr>");
        $porc=($ventasRubroAlimentos!=0 || ($ventasNetasAlimentos+$ventasNetasBebidas)!=0)? ($ventasRubroAlimentos/($ventasNetasAlimentos+$ventasNetasBebidas)):0;
        array_push($reporte, "<tr><td>Alimentos</td><td>$ventasRubroAlimentos3</td><td>$ventasRubroAlimentos2</td><td>$ventasRubroAlimentos</td><td>$ventasRubroAlimentos0</td><td>$porc %</td></tr>");
        $porc=($ventasRubroAlimentos!=0||($ventasNetasAlimentos+$ventasNetasBebidas)!=0)?($ventasRubroAlimentos/($ventasNetasAlimentos+$ventasNetasBebidas)):0;
        array_push($reporte, "<tr><td>Bebidas</td><td>$ventasRubroBebidas3</td><td>$ventasRubroBebidas2</td><td>$ventasRubroBebidas</td><td>$ventasRubroBebidas0</td><td>$porc %</td></tr>");
        array_push($reporte, "<tr><td>Compras del mes</td><td></td><td></td><td></td><td></td><td></td></tr>");
        $porc=($compraMesAlimentos!=0||($ventasNetasAlimentos+$ventasNetasBebidas)!=0)?($compraMesAlimentos/($ventasNetasAlimentos+$ventasNetasBebidas)):0;
        array_push($reporte, "<tr><td>Alimentos</td><td>$compraMesAlimentos3</td><td>$compraMesAlimentos2</td><td>$compraMesAlimentos</td><td>$compraMesAlimentos0</td><td>$porc %</td></tr>");
        $porc=($compraMesBebidas!=0||($ventasNetasAlimentos+$ventasNetasBebidas)!=0)? ($compraMesBebidas/($ventasNetasAlimentos+$ventasNetasBebidas)):0;
        array_push($reporte, "<tr><td>Bebidas</td><td>$compraMesBebidas3</td><td>$compraMesBebidas2</td><td>$compraMesBebidas</td><td>$compraMesBebidas0</td><td>$porc %</td></tr>");
        $porc=($compraMesBebidas+$compraMesAlimentos!=0||($ventasNetasAlimentos+$ventasNetasBebidas)!=0)?($compraMesBebidas+$compraMesAlimentos/($ventasNetasAlimentos+$ventasNetasBebidas)):0;
        array_push($reporte, "<tr><td>Total</td><td>".$compraMesBebidas3+$compraMesAlimentos3."</td><td>".$compraMesBebidas2+$compraMesAlimentos2."</td><td>".$compraMesBebidas+$compraMesAlimentos."</td><td>".$compraMesBebidas0+$compraMesAlimentos0."</td><td>"." %</td></tr>");
        array_push($reporte, "<tr><td>Venta promedio diaria</td><td>$ventasPromDiar3</td><td>$ventasPromDiar2</td><td>$ventasPromDiar</td><td>$ventasPromDiar0</td><td></td></tr>");
        array_push($reporte, "<tr><td>Comsumo promedioP/empleado díario</td><td>$consumoPromEmpl3</td><td>$consumoPromEmpl2</td><td>$consumoPromEmpl</td><td>$consumoPromEmpl0</td><td></td></tr>");
        array_push($reporte, "<tr><td>Cortesias</td><td></td><td></td><td></td><td></td><td></td></tr>");
        array_push($reporte, "<tr><td>Alimentos</td><td>$cortesiasAlimentos3</td><td>$cortesiasAlimentos2</td><td>$cortesiasAlimentos</td><td>$cortesiasAlimentos0</td><td></td></tr>");
        array_push($reporte, "<tr><td>Bebidas</td><td>$cortesiasBebidas3</td><td>$cortesiasBebidas2</td><td>$cortesiasBebidas</td><td>$cortesiasBebidas0</td><td></td></tr>");
        array_push($reporte, "<tr><td>Consumo ejecutivo</td><td></td><td></td><td></td><td></td><td></td></tr>");
        array_push($reporte, "<tr><td>Alimentos</td><td>$consumoEjecAlimentos3</td><td>$consumoEjecAlimentos2</td><td>$consumoEjecAlimentos</td><td>$consumoEjecAlimentos0</td><td></td></tr>");
        array_push($reporte, "<tr><td>Bebidas</td><td>$consumoEjecBebidas3</td><td>$consumoEjecBebidas2</td><td>$consumoEjecBebidas</td><td>$consumoEjecBebidas0</td><td></td></tr>");
        array_push($reporte, "<tr><td>Mermas</td><td>$mermaAlimentos3</td><td>$mermaAlimentos2</td><td>$mermaAlimentos</td><td>$mermaAlimentos0</td><td></td></tr>");
        array_push($reporte, "<tr><td>Bebidas</td><td>$mermaBebidas3</td><td>$mermaBebidas2</td><td>$mermaBebidas</td><td>$mermaBebidas0</td><td></td></tr>");
        array_push($reporte, "<tr><td>Alimentos</td><td></td><td></td><td></td><td></td><td></td></tr>");
        $productos=  \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByIdcategoria(1)->orderByProductoNombre()->find();
        $producto= new \Producto();
        $total3=0;
        $total2=0;
        $total=0;
        $total0=0;
        foreach ($productos as $producto) {
            $semana3=(isset($productosAlimentos3[$producto->getIdproducto()]))? $productosAlimentos3[$producto->getIdproducto()]:0;
            $semana2=(isset($productosAlimentos2[$producto->getIdproducto()]))? $productosAlimentos2[$producto->getIdproducto()]:0;
            $semana=(isset($productosAlimentos[$producto->getIdproducto()]))? $productosAlimentos[$producto->getIdproducto()]:0;
            $semana0=(isset($productosAlimentos0[$producto->getIdproducto()]))? $productosAlimentos0[$producto->getIdproducto()]:0;
            $nombre=$producto->getProductoNombre();
            $total3+=$semana3;
            $total2+=$semana2;
            $total+=$semana;
            $total0+=$semana0;
            array_push($reporte, "<tr><td>$nombre</td><td>$semana3</td><td>$semana2</td><td>$semana</td><td>$semana0</td><td></td></tr>");
        }
        array_push($reporte, "<tr><td>Total</td><td>$total3</td><td>$total2</td><td>$total</td><td>$total0</td><td></td></tr>");
        array_push($reporte, "<tr><td>Bebidas</td><td></td><td></td><td></td><td></td><td></td></tr>");
        $total3=0;
        $total2=0;
        $total=0;
        $total0=0;
        $productos=  \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByIdcategoria(2)->orderByProductoNombre()->find();
        $producto= new \Producto();
        foreach ($productos as $producto) {
            $semana3=(isset($productosBebidas3[$producto->getIdproducto()]))? $productosBebidas3[$producto->getIdproducto()]:0;
            $semana2=(isset($productosBebidas2[$producto->getIdproducto()]))? $productosBebidas2[$producto->getIdproducto()]:0;
            $semana=(isset($productosBebidas[$producto->getIdproducto()]))? $productosBebidas[$producto->getIdproducto()]:0;
            $semana0=(isset($productosBebidas0[$producto->getIdproducto()]))? $productosBebidas0[$producto->getIdproducto()]:0;
            $nombre=$producto->getProductoNombre();
            $total3+=$semana3;
            $total2+=$semana2;
            $total+=$semana;
            $total0+=$semana0;
            array_push($reporte, "<tr><td>$nombre</td><td>$semana3</td><td>$semana2</td><td>$semana</td><td>$semana0</td><td></td></tr>");
        }
        array_push($reporte, "<tr><td>Total</td><td>$total3</td><td>$total2</td><td>$total</td><td>$total0</td><td></td></tr>");
        return $this->getResponse()->setContent(json_encode($reporte));
        exit;






















//inventario incial
            $prevSunday = date('Y-m-d', strtotime('last sunday', strtotime($inicio)));

            $inventariosMes = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->filterByInventariomesFecha($prevSunday)->find();
            $inventarioMes = new \Inventariomes();
            $invIniAlimentos = 0;
            $invIniBebidas = 0;
            $invIniConsolidado = 0;
            foreach ($inventariosMes as $inventarioMes) {
                $invIniAlimentos+=$inventarioMes->getInventariomesFinalalimentos();
                $invIniBebidas+=$inventarioMes->getInventariomesFinalbebidas();
            }
            $invIniConsolidado = $invIniBebidas + $invIniAlimentos;

            //compras del mes
            $compraMesAlimentos = 0;
            $compraMesBebidas = 0;
            $compraMesConsolidado = 0;
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
            $compraMesConsolidado = $compraMesAlimentos + $compraMesBebidas;
            //existencias
            $existenciaAlimentos = $invIniAlimentos + $compraMesAlimentos;
            $existenciaBebidas = $invIniBebidas + $compraMesBebidas;
            $existenciaConsolidado = $invIniConsolidado + $compraMesConsolidado;

            //inventario final
            $invFinAlimentos = 0;
            $invFinBebidas = 0;
            $invFinConsolidado = 0;
            $inventariosFinMes = \InventariomesQuery::create()->filterByIdsucursal($idsucursal)->filterByInventariomesFecha($fin)->find();
            $inventarioFinMes = new \Inventariomes();
            foreach ($inventariosFinMes as $inventarioFinMes) {
                $invFinAlimentos+=$inventarioFinMes->getInventariomesFinalalimentos();
                $invFinBebidas+=$inventarioFinMes->getInventariomesFinalbebidas();
            }
            $invFinConsolidado = $invFinAlimentos + $invFinBebidas;

            //costo bruto
            $costoBrutoAlimentos = $existenciaAlimentos - $invFinAlimentos;
            $costoBrutoBebidas = $existenciaBebidas - $invFinBebidas;
            $costoBrutoConsolidado = $existenciaConsolidado - $invFinConsolidado;

            //creditos al costo
            $creditosCostAlimentos = 0;
            $creditosCostBebidas = 0;
            $creditosCostConsolidado = 0;

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
            $creditosCostConsolidado = $creditosCostAlimentos + $creditosCostBebidas;

            //Costo neto de venta
            $costVentAlimentos = $costoBrutoAlimentos - $creditosCostAlimentos;
            $costVentBebidas = $costoBrutoBebidas - $creditosCostBebidas;
            $costVentConsolidado = $costoBrutoConsolidado - $creditosCostConsolidado;

            //venta promedio diaria sin iva
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
            $ventasPromDiar = ($ventasNetasConsolidado != 0 || $dias_activos != 0) ? $ventasNetasConsolidado / $dias_activos : 0;

            //Consumo promedio p/empleado diario
            //(sumatoria de comedor empleados/dias activos)/promedio empleados
            $inicio = $inicioSpli[2] . "-" . $inicioSpli[1] . "-" . $inicioSpli[0];
            $fin = $finSpli[2] . "-" . $finSpli[1] . "-" . $finSpli[0];
            $trabajadorespromedio = 0;
            if ($inicioSpli[2] != $finSpli[2]) {
                for ($anio = $inicioSpli[2]; $anio <= $finSpli[2]; $anio++) {
                    $objtrabajadorespromedios = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($anio)->find();
                    $objtrabajadorespromedio = new \Trabajadorespromedio();
                    foreach ($objtrabajadorespromedios as $objtrabajadorespromedio) {
                        $trabajadorespromedio+=$objtrabajadorespromedio->getTrabajadorespromedioCantidad();
                    }
                }
            } else {
                for ($mes = $inicioSpli[1]; $mes <= $finSpli[1]; $mes++) {
                    $obj = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($inicioSpli[2])->filterByTrabajadorespromedioMes($mes)->findOne();
                    if ($obj != null) {
                        $trabajadorespromedio+=$obj->getTrabajadorespromedioCantidad();
                    }
                }
            }

            $consumoPromEmpl = ($trabajadorespromedio != 0) ? (($consumoEmplAlimentos + $consumoEmplBebidas) / $dias_activos) / $trabajadorespromedio : 0;


            //porcentajes
            $porcComprasMesAlimentos = ($compraMesAlimentos != 0 || $ventasNetasAlimentos != 0) ? $compraMesAlimentos / $ventasNetasAlimentos : 0;
            $porcComprasMesBebidas = ($compraMesBebidas != 0 || $ventasNetasBebidas != 0) ? $compraMesBebidas / $ventasNetasBebidas : 0;
            $porcComprasMesConsolidado = ($compraMesConsolidado != 0 || $ventasNetasConsolidado != 0) ? $compraMesConsolidado / $ventasNetasConsolidado : 0;

            $porcCostoBrutoAlimentos = ($costoBrutoAlimentos != 0 || $ventasNetasAlimentos != 0) ? $costoBrutoAlimentos / $ventasNetasAlimentos : 0;
            $porcCostoBrutoBebidas = ($costoBrutoBebidas != 0 || $ventasNetasBebidas != 0) ? $costoBrutoBebidas / $ventasNetasBebidas : 0;
            $porcCostoBrutoConsolidado = ($costoBrutoConsolidado != 0 || $ventasNetasConsolidado != 0) ? $costoBrutoConsolidado / $ventasNetasConsolidado : 0;

            $porcCostoNetoVentaAlimentos = ($costVentAlimentos != 0 || $ventasNetasAlimentos != 0) ? $costVentAlimentos / $ventasNetasAlimentos : 0;
            $porcCostoNetoVentaBebidas = ($costVentBebidas != 0 || $ventasNetasBebidas != 0) ? $costVentBebidas / $ventasNetasBebidas : 0;
            $porcCostoNetoVentaConsolidado = ($costVentConsolidado != 0 || $ventasNetasConsolidado != 0) ? $costVentConsolidado / $ventasNetasConsolidado : 0;

            $porcComedorEmplAlimentos = ($consumoEmplAlimentos != 0 || $ventasNetasAlimentos != 0) ? $consumoEmplAlimentos / $ventasNetasAlimentos : 0;
            $porcComedorEmplBebidas = ($consumoEmplBebidas != 0 || $ventasNetasBebidas != 0) ? $consumoEmplBebidas / $ventasNetasBebidas : 0;

            $porcConsumoEjecAlimentos = ($consumoEjecAlimentos != 0 || $ventasNetasAlimentos != 0) ? $consumoEjecAlimentos / $ventasNetasAlimentos : 0;
            $porcConsumoEjecBebidas = ($consumoEjecBebidas != 0 || $ventasNetasBebidas != 0) ? $consumoEjecBebidas / $ventasNetasBebidas : 0;

            $porcCortesiasAlimentos = ($cortesiasAlimentos != 0 || $ventasNetasAlimentos != 0) ? $cortesiasAlimentos / $ventasNetasAlimentos : 0;
            $porcCortesiasBebidas = ($cortesiasBebidas != 0 || $ventasNetasBebidas != 0) ? $cortesiasBebidas / $ventasNetasBebidas : 0;

            $porcTranspAlimentos = ($transpasoSerAlimentos != 0 || $ventasNetasAlimentos != 0) ? $transpasoSerAlimentos / $ventasNetasAlimentos : 0;
            $porcTranspBebidas = ($transpasoSerBebidas != 0 || $ventasNetasBebidas != 0) ? $transpasoSerBebidas / $ventasNetasBebidas : 0;

            $porcMermasAlimentos = ($mermaAlimentos != 0 || $ventasNetasAlimentos != 0) ? $mermaAlimentos / $ventasNetasAlimentos : 0;
            $porcMermasBebidas = ($mermaBebidas != 0 || $ventasNetasBebidas != 0) ? $mermaBebidas / $ventasNetasBebidas : 0;

            //reporte
            $nombreEmpresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
            $reporte = array();

            array_push($reporte, "<tr><td>$nombreEmpresa</td></tr>");
            array_push($reporte, "<tr><td>Cierre inventario mes</td></tr>");
            array_push($reporte, "<tr><td>$inicio - $fin</td></tr>");
            array_push($reporte, "<tr><td>Concepto</td><td>Alimento</td><td>%</td><td>Bebidas</td><td></td><td>Consolidado</td><td>%</td></tr>");
            array_push($reporte, "<tr><td>Ventas netas sin IVA</td><td>$ventasNetasAlimentos</td><td></td><td>$ventasNetasBebidas</td><td></td><td>$ventasNetasConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Inventario inicial</td><td>$invIniAlimentos</td><td></td><td>$invIniBebidas</td><td></td><td>$invIniConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Compras del mes</td><td>$compraMesAlimentos</td><td>$porcComprasMesAlimentos %</td><td>$compraMesBebidas</td><td>$porcComprasMesBebidas %</td><td>$compraMesConsolidado</td><td>$porcComprasMesConsolidado %</td></tr>");
            array_push($reporte, "<tr><td>Existencia</td><td>$existenciaAlimentos</td><td></td><td>$existenciaBebidas</td><td></td><td>$existenciaConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Inventario Final</td><td>$invFinAlimentos</td><td></td><td>$invFinBebidas</td><td></td><td>$invFinConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Costo bruto</td><td>$costoBrutoAlimentos</td><td>$porcCostoBrutoAlimentos %</td><td>$costoBrutoBebidas</td><td>$porcCostoBrutoBebidas %</td><td>$costoBrutoConsolidado</td><td>$porcCostoBrutoConsolidado %</td></tr>");
            array_push($reporte, "<tr><td>Creditos al costo</td><td>$creditosCostAlimentos</td><td></td><td>$creditosCostBebidas</td><td></td><td>$creditosCostConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Costo neto venta</td><td>$costVentAlimentos</td><td>$porcCostoNetoVentaAlimentos %</td><td>$costVentBebidas</td><td>$porcCostoNetoVentaBebidas %</td><td>$costVentConsolidado</td><td>$porcCostoNetoVentaConsolidado %</td></tr>");
            array_push($reporte, "<tr><td>Venta promedio diaria sin IVA</td><td></td><td></td><td>$ventasPromDiar</td><td></td><td>$dias_activos dias activo</td><td></td></tr>");
            array_push($reporte, "<tr><td>Consumo promedio P/Empleado diario</td><td></td><td></td><td>$consumoPromEmpl</td><td></td><td></td><td></td></tr>");
            array_push($reporte, "<tr><td>Comedor empleado</td><td>$consumoEmplAlimentos</td><td>$porcConsumoEjecAlimentos %</td><td>$consumoEmplBebidas</td><td>$porcConsumoEjecBebidas %</td><td></td><td></td></tr>");
            array_push($reporte, "<tr><td>Consumo ejecutivo</td><td>$consumoEjecAlimentos</td><td>$porcConsumoEjecAlimentos %</td><td>$consumoEjecBebidas</td><td>$porcConsumoEjecBebidas %</td><td></td><td></td></tr>");
            array_push($reporte, "<tr><td>Cortesias</td><td>$cortesiasAlimentos</td><td>$porcCortesiasAlimentos %</td><td>$cortesiasBebidas</td><td>$porcCortesiasBebidas %</td><td></td><td></td></tr>");
            array_push($reporte, "<tr><td>Transpaso a servicio</td><td>$transpasoSerAlimentos</td><td>$porcTranspAlimentos %</td><td>$transpasoSerBebidas</td><td>$porcTranspBebidas %</td><td></td><td></td></tr>");
            array_push($reporte, "<tr><td>Mermas</td><td>$mermaAlimentos</td><td>$porcMermasAlimentos %</td><td>$mermaBebidas</td><td>$porcMermasBebidas %</td><td></td><td></td></tr>");
            return $this->getResponse()->setContent(json_encode($reporte));
            exit;
        }

        //INTANCIAMOS NUESTRA VISTA
        $form = new \Application\Administracion\Form\Reportes\EstadisticosmensualesForm();
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/administracion/reportes/estadisticosmensuales/index');
        return $view_model;
    }

}

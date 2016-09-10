<?php

namespace Application\Administracion\Controller\Reportes;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class CierresinventariosController extends AbstractActionController {

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

            //ventas netas sin iva
            $ingresos = \IngresoQuery::create()->filterByIdsucursal($idsucursal)->filterByIngresoFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
            $ingreso = new \Ingreso();
            $ventasNetasAlimentos = 0;
            $ventasNetasBebidas = 0;
            $ventasNetasConsolidado = 0;
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
            $ventasNetasConsolidado = $ventasNetasAlimentos + $ventasNetasBebidas;

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
            
            $cortesiasAlimentos=0;
            $cortesiasBebidas=0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Cortesia')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles=  \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle= new \Requisiciondetalle();
                    foreach($requisiciondetalles as $requisiciondetalle) {
                        $cantidad=$requisiciondetalle->getRequisiciondetalleSubtotal();
                        if($requisiciondetalle->getProducto()->getIdcategoria()==1)
                            $cortesiasAlimentos+=$cantidad;
                        elseif($requisiciondetalle->getProducto()->getIdcategoria()==2)
                            $cortesiasBebidas+=$cantidad;
                    }
                }
            }
            
            $consumoEmplAlimentos=0;
            $consumoEmplBebidas=0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Consumos de empleados')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles=  \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle= new \Requisiciondetalle();
                    foreach($requisiciondetalles as $requisiciondetalle) {
                        $cantidad=$requisiciondetalle->getRequisiciondetalleSubtotal();
                        if($requisiciondetalle->getProducto()->getIdcategoria()==1)
                            $consumoEmplAlimentos+=$cantidad;
                        elseif($requisiciondetalle->getProducto()->getIdcategoria()==2)
                            $consumoEmplBebidas+=$cantidad;
                    }
                }
            }
            
            $consumoEjecAlimentos=0;
            $consumoEjecBebidas=0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Consumos de ejecutivos')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles=  \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle= new \Requisiciondetalle();
                    foreach($requisiciondetalles as $requisiciondetalle) {
                        $cantidad=$requisiciondetalle->getRequisiciondetalleSubtotal();
                        if($requisiciondetalle->getProducto()->getIdcategoria()==1)
                            $consumoEjecAlimentos+=$cantidad;
                        elseif($requisiciondetalle->getProducto()->getIdcategoria()==2)
                            $consumoEjecBebidas+=$cantidad;
                    }
                }
            }
            
            $transpasoSerAlimentos=0;
            $transpasoSerBebidas=0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Traspaso a servicio')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles=  \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle= new \Requisiciondetalle();
                    foreach($requisiciondetalles as $requisiciondetalle) {
                        $cantidad=$requisiciondetalle->getRequisiciondetalleSubtotal();
                        if($requisiciondetalle->getProducto()->getIdcategoria()==1)
                            $transpasoSerAlimentos+=$cantidad;
                        elseif($requisiciondetalle->getProducto()->getIdcategoria()==2)
                            $transpasoSerBebidas+=$cantidad;
                    }
                }
            }
            
            $mermaAlimentos=0;
            $mermaBebidas=0;
            $conceptos = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre('Mermas')->find();
            $concepto = new \Conceptosalida();
            foreach ($conceptos as $concepto) {
                $requisiciones = \RequisicionQuery::create()->filterByIdsucursalorigen($idsucursal)->filterByIdconceptosalida($concepto->getIdconceptosalida())->filterByRequisicionFecha(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisiciondetalles=  \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
                    $requisiciondetalle= new \Requisiciondetalle();
                    foreach($requisiciondetalles as $requisiciondetalle) {
                        $cantidad=$requisiciondetalle->getRequisiciondetalleSubtotal();
                        if($requisiciondetalle->getProducto()->getIdcategoria()==1)
                            $mermaAlimentos+=$cantidad;
                        elseif($requisiciondetalle->getProducto()->getIdcategoria()==2)
                            $mermaBebidas+=$cantidad;
                    }
                }
            }
            
            $creditosCostAlimentos=$consumoEmplAlimentos+$consumoEjecAlimentos+$cortesiasAlimentos+$transpasoSerAlimentos+$mermaAlimentos;
            $creditosCostBebidas=$consumoEmplBebidas+$consumoEjecBebidas+$cortesiasBebidas+$transpasoSerBebidas+$mermaBebidas;
            $creditosCostConsolidado=$creditosCostAlimentos+$creditosCostBebidas;
            
            //Costo neto de venta
            $costVentAlimentos = $costoBrutoAlimentos - $creditosCostAlimentos;
            $costVentBebidas = $costoBrutoBebidas - $creditosCostBebidas;
            $costVentConsolidado = $costoBrutoConsolidado - $creditosCostConsolidado;

            //venta promedio diaria sin iva
            
                //dias activos
            $ingresos = \IngresoQuery::create()
                    ->filterByIngresoFecha(array('min' => $inicio. ' 00:00:00', 'max' => $fin . ' 23:59:59'))
                    ->filterByIdsucursal($idsucursal)
                    ->orderByIngresoFecha("asc")
                    ->find();
            $dato = null;
            $dias_activos = 1;
            $ingreso = new \Ingreso();
            
            $ventasPromDiar=$ventasNetasConsolidado/$dias_activos;  
            
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
                    $obj=\TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($inicioSpli[2])->filterByTrabajadorespromedioMes($mes)->findOne();
                    if($obj!=null) {
                        $trabajadorespromedio+=$obj->getTrabajadorespromedioCantidad();
                    }
                }
            }
            
            $consumoPromEmpl=($trabajadorespromedio!=0) ? (($consumoEmplAlimentos+$consumoEmplBebidas)/$dias_activos)/$trabajadorespromedio : 0;
            
            //reporte
            $nombreEmpresa=  \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
            $reporte=array();
            
            array_push($reporte, "<tr><td>$nombreEmpresa</td></tr>");
            array_push($reporte, "<tr><td>Cierre inventario mes</td></tr>");
            array_push($reporte, "<tr><td>$inicio - $fin</td></tr>");
            array_push($reporte, "<tr><td>Concepto</td><td>Alimento</td><td>%</td><td>Bebidas</td><td></td><td>Consolidado</td><td>%</td></tr>");
            array_push($reporte, "<tr><td>Ventas netas sin IVA</td><td>$ventasNetasAlimentos</td><td></td><td>$ventasNetasBebidas</td><td></td><td>$ventasNetasConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Inventario inicial</td><td>$invIniAlimentos</td><td></td><td>$invIniBebidas</td><td></td><td>$invIniConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Compras del mes</td><td>$compraMesAlimentos</td><td></td><td>$compraMesBebidas</td><td></td><td>$compraMesConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Existencia</td><td>$existenciaAlimentos</td><td></td><td>$existenciaBebidas</td><td></td><td>$existenciaConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Inventario Final</td><td>$invFinAlimentos</td><td></td><td>$invFinBebidas</td><td></td><td>$invFinConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Costo bruto</td><td>$costoBrutoAlimentos</td><td></td><td>$costoBrutoBebidas</td><td></td><td>$costoBrutoConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Creditos al costo</td><td>$creditosCostAlimentos</td><td></td><td>$creditosCostBebidas</td><td></td><td>$creditosCostConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Costo neto venta</td><td>$costVentAlimentos</td><td></td><td>$costVentBebidas</td><td></td><td>$costVentConsolidado</td><td></td></tr>");
            array_push($reporte, "<tr><td>Venta promedio diaria sin IVA</td><td></td><td></td><td>$ventasPromDiar</td><td></td><td>$dias_activos dias activo</td><td></td></tr>");
            array_push($reporte, "<tr><td>Consumo promedio P/Empleado diario</td><td></td><td></td><td>$consumoPromEmpl</td><td></td><td></td><td></td></tr>");
            array_push($reporte, "<tr><td>Comedor empleado</td><td>$consumoEmplAlimentos</td><td></td><td>$consumoEmplBebidas</td><td></td><td></td><td></td></tr>");
            array_push($reporte, "<tr><td>Consumo ejecutivo</td><td>$consumoEjecAlimentos</td><td></td><td>$consumoEjecBebidas</td><td></td><td></td><td></td></tr>");
            array_push($reporte, "<tr><td>Cortesias</td><td>$cortesiasAlimentos</td><td></td><td>$cortesiasBebidas</td><td></td><td></td><td></td></tr>");
            array_push($reporte, "<tr><td>Transpaso a servicio</td><td>$transpasoSerAlimentos</td><td></td><td>$transpasoSerBebidas</td><td></td><td></td><td></td></tr>");
            array_push($reporte, "<tr><td>Mermas</td><td>$mermaAlimentos</td><td></td><td>$mermaBebidas</td><td></td><td></td><td></td></tr>");
            return $this->getResponse()->setContent(json_encode($reporte));
            exit;
        }
        
        //INTANCIAMOS NUESTRA VISTA
        $form = new \Application\Administracion\Form\Reportes\CierresinventariosForm();
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/administracion/reportes/cierresinventarios/index');
        return $view_model;
    }

}

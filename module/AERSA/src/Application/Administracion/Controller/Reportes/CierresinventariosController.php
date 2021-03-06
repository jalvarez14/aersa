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
            $inicio = (isset($post_data['fecha_inicial'])) ? $post_data['fecha_inicial'] : $post_data['fecha_inicio'];
            $fin = (isset($post_data['fecha_final'])) ? $post_data['fecha_final'] : $post_data['fecha_fin'];
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
                $compras = \CompraQuery::create()->filterByIdsucursal($idsucursal)->filterByIdalmacen($almacen->getIdalmacen())->filterByCompraFechacompra(array('min' => $inicio . ' 00:00:00', 'max' => $fin . ' 23:59:59'))->find();
                
                $compra = new \Compra();
                foreach ($compras as $compra) {
                    $comprasDetalle = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
                    $compraDetalle = new \Compradetalle();
                    foreach ($comprasDetalle as $compraDetalle) {
                        //$cantidad = number_format(($compraDetalle->getCompradetalleSubtotal() * $iva), 6);
                        $cantidad = $compraDetalle->getCompradetalleSubtotal();
                        //$cantidad = str_replace(",", "", $cantidad);
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
                if ($dato == null) {
                    $dato = $ingreso->getIngresoFecha('d/m/Y');
                    $dias_activos++;
                }
                if ($dato != $ingreso->getIngresoFecha('d/m/Y')) {
                    $dato = $ingreso->getIngresoFecha('d/m/Y');
                    $dias_activos++;
                }
            }
            $ventasPromDiar = ($ventasNetasConsolidado != 0 && $dias_activos != 0) ? $ventasNetasConsolidado / $dias_activos : 0;

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



            if (isset($post_data['generar_excel']) || isset($post_data['generar_pdf'])) {
                $inicio =$post_data['fecha_inicio'];
                $fin =$post_data['fecha_fin'];
                array_push($reporte, array('uno'=>'Concepto','dos'=>'Alimento','tres'=>'%','cuatro'=>'Bebidas','cinco'=>'%','seis'=>'Consolidado','siete'=>'%'));
                array_push($reporte, array('uno'=>'Ventas netas sin IVA','dos'=>$ventasNetasAlimentos,'tres'=>($ventasNetasAlimentos/$ventasNetasConsolidado),'cuatro'=>$ventasNetasBebidas,'cinco'=>($ventasNetasBebidas/$ventasNetasConsolidado),'seis'=>$ventasNetasConsolidado,'siete'=>''));
                array_push($reporte, array('uno'=>'Inventario inicial','dos'=>$invIniAlimentos,'tres'=>'','cuatro'=>$invIniBebidas,'cinco'=>'','seis'=>$invIniConsolidado,'siete'=>''));
                array_push($reporte, array('uno'=>'Compras del mes','dos'=>$compraMesAlimentos,'tres'=>$porcComprasMesAlimentos,'cuatro'=>$compraMesBebidas,'cinco'=>$porcComprasMesBebidas,'seis'=>$compraMesConsolidado,'siete'=>$porcComprasMesConsolidado));
                array_push($reporte, array('uno'=>'Existencia','dos'=>$existenciaAlimentos,'tres'=>'','cuatro'=>$existenciaBebidas,'cinco'=>'','seis'=>$existenciaConsolidado,'siete'=>''));
                array_push($reporte, array('uno'=>'Inventario Final','dos'=>$invFinAlimentos,'tres'=>'','cuatro'=>$invFinBebidas,'cinco'=>'','seis'=>$invFinConsolidado,'siete'=>''));
                array_push($reporte, array('uno'=>'Costo bruto','dos'=>$costoBrutoAlimentos,'tres'=>$porcCostoBrutoAlimentos,'cuatro'=>$costoBrutoBebidas,'cinco'=>$porcCostoBrutoBebidas,'seis'=>$costoBrutoConsolidado,'siete'=>$porcCostoBrutoConsolidado));
                array_push($reporte, array('uno'=>'Créditos al costo','dos'=>$creditosCostAlimentos,'tres'=>'','cuatro'=>$creditosCostBebidas,'cinco'=>'','seis'=>$creditosCostConsolidado,'siete'=>''));
                array_push($reporte, array('uno'=>'Costo neto venta','dos'=>$costVentAlimentos,'tres'=>$porcCostoNetoVentaAlimentos,'cuatro'=>$costVentBebidas,'cinco'=>$porcCostoNetoVentaBebidas,'seis'=>$costVentConsolidado,'siete'=>$porcCostoNetoVentaConsolidado));
                array_push($reporte, array('uno'=>'Venta promedio diaria sin IVA','dos'=>'','tres'=>'','cuatro'=>$ventasPromDiar,'cinco'=>'','seis'=>$dias_activos.' dias activo','siete'=>''));
                array_push($reporte, array('uno'=>'Consumo promedio P/Empleado diario','dos'=>'','tres'=>'','cuatro'=>$consumoPromEmpl,'cinco'=>'','seis'=>'Consolidado','siete'=>'%'));
                array_push($reporte, array('uno'=>'Comedor empleado','dos'=>$consumoEmplAlimentos,'tres'=>$porcConsumoEjecAlimentos,'cuatro'=>$consumoEmplBebidas,'cinco'=>$porcConsumoEjecBebidas,'seis'=>'','siete'=>''));
                array_push($reporte, array('uno'=>'Consumo ejecutivo','dos'=>$consumoEjecAlimentos,'tres'=>$porcConsumoEjecAlimentos,'cuatro'=>$consumoEjecBebidas,'cinco'=>$porcConsumoEjecBebidas,'seis'=>'','siete'=>''));
                array_push($reporte, array('uno'=>'Cortesías','dos'=>$cortesiasAlimentos,'tres'=>$porcCortesiasAlimentos,'cuatro'=>$cortesiasBebidas,'cinco'=>$porcCortesiasBebidas,'seis'=>'','siete'=>''));
                array_push($reporte, array('uno'=>'Traspaso a servicio','dos'=>$transpasoSerAlimentos,'tres'=>$porcTranspAlimentos,'cuatro'=>$transpasoSerBebidas,'cinco'=>$porcTranspBebidas,'seis'=>'','siete'=>''));
                array_push($reporte, array('uno'=>'Mermas','dos'=>$mermaAlimentos,'tres'=>$porcMermasAlimentos,'cuatro'=>$mermaBebidas,'cinco'=>$porcMermasBebidas,'seis'=>'','siete'=>''));
                $template = '/cierremes.xlsx';
                $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
                $sucursal = \SucursalQuery::create()->findPk($idsucursal)->getSucursalNombre();
                //var_dump($reporte);exit;
                $config = array(
                    'template' => $template,
                    'templateDir' => $templateDir
                );
                $R = new \PHPReport($config);
                $R->load(array(
                    array(
                        'id' => 'compania',
                        'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $sucursal),
                    ),
                    array(
                        'id' => 'reporte',
                        'data' => array('fechainicio' => $inicio, 'fechafinal' => $fin),
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
            } else {
                $porcalim=($ventasNetasAlimentos/$ventasNetasConsolidado);
                $porc=100;
                $porcbeb=($ventasNetasBebidas/$ventasNetasConsolidado);
                $porcalim*=100;
                $porcbeb*=100;
                $porcComprasMesAlimentos*=100;
                $porcCostoBrutoAlimentos*=100;
                $porcCostoNetoVentaAlimentos*=100;
                $porcComprasMesBebidas*=100;
                $porcCostoBrutoBebidas*=100;
                $porcCostoNetoVentaBebidas*=100;
                $porcConsumoEjecBebidas*=100;
                $porcTranspBebidas*=100;
                $porcComprasMesConsolidado*=100;
                $porcCostoBrutoConsolidado*=100;
                $porcCostoNetoVentaConsolidado*=100;
                $porcMermasAlimentos*=100;
                $porcMermasBebidas*=100;
                array_push($reporte, "<tr><td>$nombreEmpresa</td></tr>");
                array_push($reporte, "<tr><td>Cierre inventario mes</td></tr>");
                array_push($reporte, "<tr><td>$inicio - $fin</td></tr>");
                array_push($reporte, "<tr><td>Concepto</td><td>Alimento</td><td>%</td><td>Bebidas</td><td>%</td><td>Consolidado</td><td>%</td></tr>");
                array_push($reporte, "<tr><td>Ventas netas sin IVA</td><td>".number_format($ventasNetasAlimentos,2)."</td><td>".number_format($porcalim,2)."</td><td>".number_format($ventasNetasBebidas,2)."</td><td>".number_format($porcbeb,2)." %</td><td>".number_format($ventasNetasConsolidado,2)."</td><td></td></tr>");
                array_push($reporte, "<tr><td>Inventario inicial</td><td>".number_format($invIniAlimentos,2)."</td><td></td><td>".number_format($invIniBebidas,2)."</td><td></td><td>".number_format($invIniConsolidado,2)."</td><td></td></tr>");
                array_push($reporte, "<tr><td>Compras del mes</td><td>".number_format($compraMesAlimentos,2)."</td><td>".number_format($porcComprasMesAlimentos,2)." %</td><td>".number_format($compraMesBebidas,2)."</td><td>".number_format($porcComprasMesBebidas,2)." %</td><td>".number_format($compraMesConsolidado,2)."</td><td>".number_format($porcComprasMesConsolidado,2)." %</td></tr>");
                array_push($reporte, "<tr><td>Existencia</td><td>".number_format($existenciaAlimentos,2)."</td><td></td><td>".number_format($existenciaBebidas,2)."</td><td></td><td>".number_format($existenciaConsolidado,2)."</td><td></td></tr>");
                array_push($reporte, "<tr><td>Inventario Final</td><td>".number_format($invFinAlimentos,2)."</td><td></td><td>".number_format($invFinBebidas,2)."</td><td></td><td>".number_format($invFinConsolidado,2)."</td><td></td></tr>");
                array_push($reporte, "<tr><td>Costo bruto</td><td>".number_format($costoBrutoAlimentos,2)."</td><td>".number_format($porcCostoBrutoAlimentos,2)." %</td><td>".number_format($costoBrutoBebidas,2)."</td><td>".number_format($porcCostoBrutoBebidas,2)." %</td><td>".number_format($costoBrutoConsolidado,2)."</td><td>".number_format($porcCostoBrutoConsolidado,2)." %</td></tr>");
                array_push($reporte, "<tr><td>Créditos al costo</td><td>".number_format($creditosCostAlimentos,2)."</td><td></td><td>".number_format($creditosCostBebidas,2)."</td><td></td><td>".number_format($creditosCostConsolidado,2)."</td><td></td></tr>");
                array_push($reporte, "<tr><td>Costo neto venta</td><td>".number_format($costVentAlimentos,2)."</td><td>".number_format($porcCostoNetoVentaAlimentos,2)." %</td><td>".number_format($costVentBebidas,2)."</td><td>".number_format($porcCostoNetoVentaBebidas,2)." %</td><td>".number_format($costVentConsolidado,2)."</td><td>".number_format($porcCostoNetoVentaConsolidado,2)." %</td></tr>");
                array_push($reporte, "<tr><td>Venta promedio diaria sin IVA</td><td></td><td></td><td>".number_format($ventasPromDiar,2)."</td><td></td><td>$dias_activos dias activo</td><td></td></tr>");
                array_push($reporte, "<tr><td>Consumo promedio P/Empleado diario</td><td></td><td></td><td>".number_format($consumoPromEmpl,2)."</td><td></td><td></td><td></td></tr>");
                array_push($reporte, "<tr><td>Comedor empleado</td><td>".number_format($consumoEmplAlimentos,2)."</td><td>".number_format($porcConsumoEjecAlimentos,2)." %</td><td>".number_format($consumoEmplBebidas,2)."</td><td>".number_format($porcConsumoEjecBebidas,2)." %</td><td></td><td></td></tr>");
                array_push($reporte, "<tr><td>Consumo ejecutivo</td><td>".number_format($consumoEjecAlimentos,2)."</td><td>".number_format($porcConsumoEjecAlimentos,2)." %</td><td>".number_format($consumoEjecBebidas,2)."</td><td>".number_format($porcConsumoEjecBebidas,2)." %</td><td></td><td></td></tr>");
                array_push($reporte, "<tr><td>Cortesías</td><td>".number_format($cortesiasAlimentos,2)."</td><td>".number_format($porcCortesiasAlimentos,2)." %</td><td>".number_format($cortesiasBebidas,2)."</td><td>".number_format($porcCortesiasBebidas,2)." %</td><td></td><td></td></tr>");
                array_push($reporte, "<tr><td>Traspaso a servicio</td><td>".number_format($transpasoSerAlimentos,2)."</td><td>".number_format($porcTranspAlimentos,2)." </td><td>".number_format($transpasoSerBebidas,2)."</td><td>".number_format($porcTranspBebidas,2)." %</td><td></td><td></td></tr>");
                array_push($reporte, "<tr><td>Mermas</td><td>".number_format($mermaAlimentos,2)."</td><td>".number_format($porcMermasAlimentos,2)." %</td><td>".number_format($mermaBebidas,2)."</td><td>".number_format($porcMermasBebidas,2)." %</td><td></td><td></td></tr>");
                return $this->getResponse()->setContent(json_encode($reporte));
            }
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

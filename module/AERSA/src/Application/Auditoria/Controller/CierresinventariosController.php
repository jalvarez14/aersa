<?php

namespace Application\Auditoria\Controller;
include getcwd() . '/vendor/jasper/phpreport/PHPReport.php';

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class CierresinventariosController extends AbstractActionController {

    public function indexAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $inventarios = \InventariomesQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();

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
        $usuarios = \UsuarioQuery::create()->filterByIdrol(4)->useUsuariosucursalQuery()->filterByIdsucursal($idsucursal)->endUse()->find();
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
        $form = new \Application\Auditoria\Form\CierresinventariosForm($fecha, $almacen_array, $auditor_array);
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/auditoria/cierresinventarios/nuevo');
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        return $view_model;
    }

    public function batchAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();


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
            
            $start=strtotime('last monday', $time);
            $inicio_semana = date('Y-m-d', strtotime('last monday', $time));
            
            $fin_semana = date('Y-m-d', $time);

            $fin_semana_anterior = date('Y-m-d', strtotime('last sunday', $start));
            $fin_semana_anterior = $fin_semana_anterior . " 23:59:59";

            
            $inicio_semana = $inicio_semana . " 00:00:00   ";
            $fin_semana = $fin_semana . " 23:59:59";

            
            //inventario anterior
            $inventario_anterior = \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->filterByIdalmacen($idalmacen)->exists();
            if ($inventario_anterior)
                $id_inventario_anterior = \InventariomesQuery::create()->filterByInventariomesFecha($fin_semana_anterior)->findOne()->getIdinventariomes();

            $objcompras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();
            $objventas = \VentaQuery::create()->filterByVentaFechaventa(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->find();

            $objrequisicionesOrigen = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->find();
            $objordentabOrigen = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacenorigen($idalmacen)->find();

            $objrequisicionesDestino = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->find();
            $objordentabDestino = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdalmacendestino($idalmacen)->find();

            $objdevoluciones = \DevolucionQuery::create()->filterByDevolucionFechadevolucion(array('min' => $inicio_semana, 'max' => $fin_semana))->filterByIdsucursal($idsucursal)->find();



            $reporte = array();
            $sobrante = 0;
            $faltante = 0;
            $falim = 0;
            $fbebi = 0;
            $impFisTotal = 0;
            $bgfila = "#F2F2F2";
            $bgfila2 = "#FFFFFF";
            $color = true;
            $row = 0;
            $categoriasObj = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->orderByCategoriaNombre('asc')->find();
            $categoriaObj = new \Categoria();
            foreach ($categoriasObj as $categoriaObj) {
                $nombreSubcategoria = $categoriaObj->getCategoriaNombre();
                array_push($reporte, "<tr><td>$nombreSubcategoria</td></tr>");
                $objproductos = \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByIdsubcategoria($categoriaObj->getIdcategoria())->orderByProductoNombre('asc')->find();
                $objproducto = new \Producto();
                foreach ($objproductos as $objproducto) {
                    $exisinicial = 0;
                    if ($objproducto->getCategoriaRelatedByIdsubcategoria()->getCategoriaAlmacenable(1)) {
                        if ($inventario_anterior) {
                            $exisinicial = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($objproducto->getIdproducto())->exists();
                            if ($exisinicial)
                                $exisinicial = \InventariomesdetalleQuery::create()->filterByIdinventariomes($id_inventario_anterior)->filterByIdproducto($objproducto->getIdproducto())->findOne()->getInventariomesdetalleStockfisico();
                        }
                    }
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

                    $requisicionIng = 0;
                    foreach ($objrequisicionesDestino as $objrequisicion) {
                        $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                ->filterByIdproducto($objproducto->getIdproducto())
                                ->find();
                        $objrequisiciondetalle = new \Requisiciondetalle();
                        foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                            $requisicionIng+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                        }
                    }

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
                            $venta+=$objventadetalle->getVentadetalleCantidad();
                        }
                    }

                    $requisicionEg = 0;
                    foreach ($objrequisicionesOrigen as $objrequisicion) {
                        $objrequisiciondetalles = \RequisiciondetalleQuery::create()
                                ->filterByIdrequisicion($objrequisicion->getIdrequisicion())
                                ->filterByIdpadre(NULL)
                                ->filterByIdproducto($objproducto->getIdproducto())
                                ->find();
                        $objrequisiciondetalle = new \Requisiciondetalle();
                        foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                            $requisicionEg+=$objrequisiciondetalle->getRequisiciondetalleCantidad();
                        }
                    }

                    $ordenTabEg = 0;
                    foreach ($objordentabOrigen as $objordentab) {
                        $objordentabdetalles = \OrdentablajeriadetalleQuery::create()
                                ->filterByIdordentablajeria($objordentab->getIdordentablajeria())
                                ->filterByIdproducto($objproducto->getIdproducto())
                                ->find();
                        $objordentabdetalle = new \Ordentablajeriadetalle();
                        foreach ($objordentabdetalles as $objordentabdetalle) {
                            $ordenTabEg+=$objordentabdetalle->getOrdentablajeriadetalleCantidad();
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

                    $stockTeorico = ($compra + $requisicionIng + $ordenTabIng + $exisinicial) - ($venta + $requisicionEg + $ordenTabEg);

                    $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                    $stockFisico = 0;
                    if (isset($productosReporte[$objproducto->getIdproducto()]))
                        $stockFisico = $productosReporte[$objproducto->getIdproducto()];

                    $dif = $stockTeorico - $stockFisico;

                    $has_compras = \CompraQuery::create()->filterByIdsucursal($idsucursal)->count();
                    if ($has_compras > 0) {
                        $costoPromedio = ($compra != 0 && $totalProductoCompra != 0) ? $totalProductoCompra / $compra : 0;
                        $costoPromedio = ($costoPromedio > 0) ? $costoPromedio * -1 : $costoPromedio;
                    } else {
                        $costoPromedio = $objproducto->getProductoCosto();
                    }
                    $difImporte = $dif * $costoPromedio;
                    if (0 < $difImporte)
                        $sobrante+=$difImporte;
                    else
                        $faltante+=$difImporte;
                    $colorbg = ($color) ? $bgfila : $bgfila2;
                    $color = !$color;
                    $impFis = $stockFisico * $costoPromedio;

                    $costoPromedio = ($costoPromedio == 0) ? $objproducto->getProductoCosto() : $costoPromedio;
                    //$stockFisico = ($stockFisico == 0) ? "0" : $stockFisico;
                    $cat = $objproducto->getCategoriaRelatedByIdcategoria()->getIdcategoria();
                    if ($cat == 1)
                        $falim+=$impFis;
                    if ($cat == 2)
                        $fbebi+=$impFis;
                    $impFisTotal+=$impFis;
                    $idproducto = $objproducto->getIdproducto();
                    $nomPro = $objproducto->getProductoNombre();
                    //<input type='hidden'  name='' value=''>
                    array_push($reporte, "<tr id='$idproducto' bgcolor='" . $colorbg . "'><td><input type='hidden' name='reporte[$row][idcategoria]' value='$cat'/><input type='hidden' name='reporte[$row][idproducto]' value='$idproducto' />$idproducto</td><td>$nomPro</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_stockinicial]' value='$exisinicial'> $exisinicial</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_ingresocompra]' value='$compra'>$compra</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_ingresorequisicion]' value='$requisicionIng'>$requisicionIng</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_ingresoordentablajeria]' value='$ordenTabIng'>$ordenTabIng</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresoventa]' value='$venta'>$venta</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresorequisicion]' value='$requisicionEg'>$requisicionEg</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresoordentablajeria]' value='$ordenTabEg'>$ordenTabEg</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_egresodevolucion]' value='$devolucion'>$devolucion</td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_stockteorico]' value='$stockTeorico'>$stockTeorico</td><td>$unidad</td><td><input required type='text' name='reporte[$row][inventariomesdetalle_stockfisico]' value='$stockFisico'></td><td class='inventariomesdetalle_importefisico'><input type='hidden'  name='reporte[$row][inventariomesdetalle_importefisico]' value='$impFis'><span>$impFis</span></td><td class='inventariomesdetalle_diferencia'><input type='hidden'  name='reporte[$row][inventariomesdetalle_diferencia]' value='$dif'> <span>$dif</span></td><td><input type='hidden'  name='reporte[$row][inventariomesdetalle_costopromedio]' value='$costoPromedio'>$costoPromedio</td><td class='inventariomesdetalle_difimporte'><input type='hidden'  name='reporte[$row][inventariomesdetalle_difimporte]' value='$difImporte'><span>$difImporte</span></td><td><input type='checkbox' name='reporte[$row][inventariomesdetalle_revisada]'></td></tr>");
                    $row++;
                }
            }
            $total = $sobrante + $faltante;
            $responsable = \AlmacenQuery::create()->filterByIdalmacen($idalmacen)->findOne()->getAlmacenEncargado();
            if ($responsable == "")
                $responsable = "N/A";
            array_push($reporte, "<tr><td>Responsable</td><td>$responsable</td><td></td><td><td></td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Final alimentos</td><td class='inventariomes_finalalimentos'><input type='hidden'  name='inventariomes_finalalimentos' value='$falim'><span>$falim</span></td></tr>");
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Final bebidas</td><td class='inventariomes_finalbebidas'><input type='hidden'  name='inventariomes_finalbebidas' value='$fbebi'><span>$fbebi</span></td></tr>");
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Sobrante</td><td class='inventariomes_sobrantes'><input type='hidden'  name='inventariomes_sobrantes' value='$sobrante'><span>$sobrante</span></td></tr>");
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Faltante</td><td class='inventariomes_faltantes'><input type='hidden'  name='inventariomes_faltantes' value='$faltante'><span>$faltante</span></td></tr>");
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Total</td><td class='inventariomes_total'><input type='hidden'  name='inventariomes_total' value='$total'><span>$total</span></td></tr>");
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Importe Fisico</td><td class='inventariomes_totalimportefisico'><input type='hidden'  name='inventariomes_totalimportefisico' value='$impFisTotal'><span>$impFisTotal</span></td></tr>");
            return $this->getResponse()->setContent(json_encode($reporte));
        }
    }

    public function encargadoAction() {
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $id = $post_data['id'];
            $nombre = \AlmacenQuery::create()->filterByIdalmacen($id)->findOne()->getAlmacenEncargado();
            $con = true;
            if ($nombre == "")
                $con = false;
            return $this->getResponse()->setContent(json_encode($con));
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
                    foreach ($subcategoriasObj as $subcategoriaObj) {
                        array_push($reporte, array('uno' => 'Subcategoria', 'dos' => $subcategoriaObj->getCategoriaNombre(), 'tres' => '', 'cuatro' => '', 'cinco' => '', 'seis' => '', 'siete' => '', 'ocho' => '', 'nueve' => '', 'diez' => '', 'once' => '', 'doce' => '', 'trece' => '', 'catorce' => '', 'quince' => '', 'dieciseis' => '', 'diecisiete' => '', 'dieciocho' => ''));
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
                                $importefisico = $inventariomesdetalle->getInventariomesdetalleImportefisico();
                                $diferencia = $inventariomesdetalle->getInventariomesdetalleDiferencia();
                                $costopromedio = $inventariomesdetalle->getInventariomesdetalleCostopromedio();
                                $difimporte = $inventariomesdetalle->getInventariomesdetalleDifimporte();
                                $revisada = (bool) ($inventariomesdetalle->getInventariomesdetalleRevisada()) ? "Si" : "No";
                                array_push($reporte, array('uno' => $idproducto, 'dos' => $productoNombre, 'tres' => $stockinicial, 'cuatro' => $ingresocompra, 'cinco' => $ingresorequisicion, 'seis' => $ingresoordentablajeria, 'siete' => $egresoventa, 'ocho' => $egresorequisicion, 'nueve' => $egresoordentablajeria, 'diez' => $egresodevolucion, 'once' => $stockteorico, 'doce' => $unidadMedida, 'trece' => $stockfisico, 'catorce' => $importefisico, 'quince' => $diferencia, 'dieciseis' => $costopromedio, 'diecisiete' => $difimporte, 'dieciocho' => $revisada));
                            }
                        }
                    }
                    $subcategoriasObj = \CategoriaQuery::create()->filterByIdcategoriapadre(2)->orderByCategoriaNombre('asc')->find();
                    $subcategoriaObj = new \Categoria();
                    foreach ($subcategoriasObj as $subcategoriaObj) {
                        array_push($reporte, array('uno' => 'Subcategoria', 'dos' => $subcategoriaObj->getCategoriaNombre(), 'tres' => '', 'cuatro' => '', 'cinco' => '', 'seis' => '', 'siete' => '', 'ocho' => '', 'nueve' => '', 'diez' => '', 'once' => '', 'doce' => '', 'trece' => '', 'catorce' => '', 'quince' => '', 'dieciseis' => '', 'diecisiete' => '', 'dieciocho' => ''));
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
                                $importefisico = $inventariomesdetalle->getInventariomesdetalleImportefisico();
                                $diferencia = $inventariomesdetalle->getInventariomesdetalleDiferencia();
                                $costopromedio = $inventariomesdetalle->getInventariomesdetalleCostopromedio();
                                $difimporte = $inventariomesdetalle->getInventariomesdetalleDifimporte();
                                $revisada = (bool) ($inventariomesdetalle->getInventariomesdetalleRevisada()) ? "Si" : "No";
                                array_push($reporte, array('uno' => $idproducto, 'dos' => $productoNombre, 'tres' => $stockinicial, 'cuatro' => $ingresocompra, 'cinco' => $ingresorequisicion, 'seis' => $ingresoordentablajeria, 'siete' => $egresoventa, 'ocho' => $egresorequisicion, 'nueve' => $egresoordentablajeria, 'diez' => $egresodevolucion, 'once' => $stockteorico, 'doce' => $unidadMedida, 'trece' => $stockfisico, 'catorce' => $importefisico, 'quince' => $diferencia, 'dieciseis' => $costopromedio, 'diecisiete' => $difimporte, 'dieciocho' => $revisada));
                            }
                        }
                    }
                    $subcategoriasObj = \CategoriaQuery::create()->filterByIdcategoriapadre(3)->orderByCategoriaNombre('asc')->find();
                    $subcategoriaObj = new \Categoria();
                    foreach ($subcategoriasObj as $subcategoriaObj) {
                        array_push($reporte, array('uno' => 'Subcategoria', 'dos' => $subcategoriaObj->getCategoriaNombre(), 'tres' => '', 'cuatro' => '', 'cinco' => '', 'seis' => '', 'siete' => '', 'ocho' => '', 'nueve' => '', 'diez' => '', 'once' => '', 'doce' => '', 'trece' => '', 'catorce' => '', 'quince' => '', 'dieciseis' => '', 'diecisiete' => '', 'dieciocho' => ''));
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
                                $importefisico = $inventariomesdetalle->getInventariomesdetalleImportefisico();
                                $diferencia = $inventariomesdetalle->getInventariomesdetalleDiferencia();
                                $costopromedio = $inventariomesdetalle->getInventariomesdetalleCostopromedio();
                                $difimporte = $inventariomesdetalle->getInventariomesdetalleDifimporte();
                                $revisada = (bool) ($inventariomesdetalle->getInventariomesdetalleRevisada()) ? "Si" : "No";
                                array_push($reporte, array('uno' => $idproducto, 'dos' => $productoNombre, 'tres' => $stockinicial, 'cuatro' => $ingresocompra, 'cinco' => $ingresorequisicion, 'seis' => $ingresoordentablajeria, 'siete' => $egresoventa, 'ocho' => $egresorequisicion, 'nueve' => $egresoordentablajeria, 'diez' => $egresodevolucion, 'once' => $stockteorico, 'doce' => $unidadMedida, 'trece' => $stockfisico, 'catorce' => $importefisico, 'quince' => $diferencia, 'dieciseis' => $costopromedio, 'diecisiete' => $difimporte, 'dieciocho' => $revisada));
                            }
                        }
                    }

                    $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
                    $fecha = \InventariomesQuery::create()->filterByIdinventariomes($id)->findOne()->getInventariomesFecha();
                    $template = '/inventariocierresemana.xlsx';
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
                        ),
                        array(
                            'id' => 'reporte',
                            'data' => array('fecha' => $fecha),
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

            $form = new \Application\Auditoria\Form\CierresinventariosForm($fecha, $almacen_array, $auditor_array);
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
                                        <input type='hidden'  name='reporte[$id][inventariomesdetalle_stockteorico]' value='$stockteorico'>$stockteorico
                                    </td>
                                    <td>
                                        $unidadMedida
                                    </td>
                                    <td>
                                        <input required type='text' name='reporte[$id][inventariomesdetalle_stockfisico]' value='$stockfisico'>
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

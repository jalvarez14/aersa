<?php

namespace Application\Reportes\Controller;

include getcwd() . '/vendor/jasper/phpreport/PHPReport.php';

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
            $documento = true;
            if (isset($post_data['generar_reporte']))
                $documento = false;
            foreach ($post_data as $key => $value) {
                if (strpos($key, '-'))
                    array_push($productos, substr($key, 9));
            }
            $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
            $fila = 0;
            if (!$documento) {
                $reporte = array("<div align='center'><h3>" . ucfirst($empresa) . "</h3></div>");
                $reporte[1] = "<div align='center'><h3>VARIACIONES DE LOS COSTOS DEL " . $mes_inicio . "/" . $ano_inicio . " VS " . $mes_fin . "/" . $ano_fin . "</h3></div>";
                $fila = 2;
            }
            $color = true;
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
                $search = $ano_fin . '-' . $mes_fin;

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
                $variacion = ($variacion < 0) ? $variacion * -1 : $variacion;
                if ($costoold == 0)
                    $porcentajevar = -100;
                else
                    $porcentajevar = (($costonew / $costoold) * 100) - 100;
                $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                $color = !$color;
                $porcentajevar = ($costoold == 0 && $costonew != 0) ? $porcentajevar * -1 : $porcentajevar;
                $porcentajevar = ($variacion == 0) ? 0 : $porcentajevar;
                $costoold = ($costoold == 0) ? "NA" : $costoold;
                $costonew = ($costonew == 0) ? "NA" : $costonew;
                $variacion = ($variacion == 0) ? "NA" : $variacion;
                $porcentajevar = ($porcentajevar == 0) ? "NA" : $porcentajevar . '%';
                if ($documento)
                    $reporte[$fila] = array('clave' => $idproducto, 'nombre' => $nombre, 'unidad' => $unidad, 'costold' => $costoold, 'costnew' => $costonew, 'var' => $variacion, 'pctvar' => $porcentajevar);
                else
                    $reporte[$fila] = "<tr bgcolor='" . $bg . "'><td> " . $nombre . " </td><td> " . $unidad . " </td><td> " . $costoold . " </td><td> " . $costonew . " </td><td> " . $variacion . " </td><td> " . $porcentajevar . " </td></tr>";
                $fila++;
            }
            if ($documento) {
                $template = '/variacioncostos.xlsx';
                $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
                $inicio = $mes_inicio . "/" . $ano_inicio;
                $fin = $mes_fin . "/" . $ano_fin;
                $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
                $sucursal = \SucursalQuery::create()->findPk($idsucursal)->getSucursalNombre();
                $config = array(
                    'template' => $template,
                    'templateDir' => $templateDir
                );
                $R = new \PHPReport($config);
                $R->load(array(
                    array(
                        'id' => 'compania',
                        'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $sucursal),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'fecha',
                        'data' => array('inicial' => $inicio, 'final' => $fin),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'prod',
                        'repeat' => true,
                        'data' => $reporte,
                        'minRows' => 2,
                        'format' => array(
                            'price' => array('number' => array('prefix' => '$', 'decimals' => 2)),
                            'total' => array('number' => array('prefix' => '$', 'decimals' => 2))
                        )
                    )
                        )
                );
                if (isset($post_data['generar_pdf']))
                    echo $R->render();
                else
                    echo $R->render('excel');
                exit();
            } else {
                $view_model = new ViewModel();
                $view_model->setVariables(array(
                    'reporte' => $reporte,
                    'messages' => $this->flashMessenger(),
                ));
                $view_model->setTemplate('/application/reportes/reportes/variacioncostosreporte');
                return $view_model;
            }
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

    public function formatoinventarioAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $productos = array();
            $idcategorias = array();
            $post_data = $request->getPost();
            $template = '/formatoinventario.xlsx';
            $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
            $formato = $post_data['formato'];
            foreach ($post_data as $key => $value) {
                if (strpos($key, '-'))
                    array_push($idcategorias, substr($key, 9));
            }
            
            foreach ($idcategorias as $id) {
                $idproductos = array();
                $productosObj= \ProductoQuery::create()->filterByIdsubcategoria($id)->filterByIdempresa($idempresa)->filterByProductoTipo(array('simple','subreceta'))->orderByProductoNombre('asc')->find();
                $productoObj=new \Producto();
                foreach ($productosObj as $productoObj) {
                    array_push($idproductos, $productoObj->getIdproducto());
                }
                $categoria=  \CategoriaQuery::create()->filterByIdcategoria($id)->findOne()->getCategoriaNombre();
                $almacen = \AlmacenQuery::create()->findPk($post_data['almacen'])->getAlmacenNombre();
                $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
                foreach ($idproductos as $idproducto) {
                    $objproducto = \ProductoQuery::create()->findPk($idproducto);
                    $nombre = $objproducto->getProductoNombre();
                    $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                    array_push($productos, array('subcat'=> $categoria, 'clave' => $objproducto->getIdproducto(), 'nombre' => $nombre, 'unidad' => $unidad));
                }
            }

            $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
            $sucursal = \SucursalQuery::create()->findPk($idsucursal)->getSucursalNombre();

            $config = array(
                'template' => $template,
                'templateDir' => $templateDir
            );
            $R = new \PHPReport($config);
            $R->load(array(
                array(
                    'id' => 'compania',
                    'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $sucursal, 'almacen' => $almacen),
                    'format' => array(
                        'date' => array('datetime' => 'd/m/Y')
                    )
                ),
                array(
                    'id' => 'prod',
                    'repeat' => true,
                    'data' => $productos,
                    'minRows' => 2,
                    'format' => array(
                    )
                )
                    )
            );
            if ($formato == "PDF")
                echo $R->render('PDF');
            else
                echo $R->render('excel');
            exit();
        }
        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $objalmacenes = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->filterByAlmacenEstatus(1)->find();
        $almacenes = array();
        foreach ($objalmacenes as $objalmacen) {
            $almacenes[$objalmacen->getIdalmacen()] = $objalmacen->getAlmacenNombre();
        }

        $subcatsAlimentos = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->filterByIdcategoriapadre(1)->orderByCategoriaNombre('asc')->find();
        $subcatsBebidas = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->filterByIdcategoriapadre(2)->orderByCategoriaNombre('asc')->find();
        $subcatsGastos = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->filterByIdcategoriapadre(3)->orderByCategoriaNombre('asc')->find();
        $form = new \Application\Reportes\Form\FormatoinventarioForm($almacenes);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'categorias' => $categorias,
            'subcatsAlimentos' => $subcatsAlimentos,
            'subcatsBebidas' => $subcatsBebidas,
            'subcatsGastos' => $subcatsGastos,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/reportes/reportes/formatoinventario');
        return $view_model;
    }

    public function getrecientesAction() {
        $dias = $this->params()->fromQuery('dias');
        $fecha = date('Y-m-d', strtotime('-' . $dias . ' day'));
        $hoy = date('Y-m-d');
        $fecha.=' 00:00:00';
        $hoy.=' 23:59:59';
        $idproductos = array();
        $compras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $fecha, 'max' => $hoy))->find();
        $compra = new \Compra();
        foreach ($compras as $compra) {
            $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
            $compradetalle = new \Compradetalle();
            foreach ($comprasdetalles as $compradetalle) {
                if (!in_array($compradetalle->getIdproducto(), $idproductos))
                    array_push($idproductos, $compradetalle->getIdproducto());
            }
        }
        $requisiciones = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $fecha, 'max' => $hoy))->find();
        $requisicion = new \Requisicion();
        foreach ($requisiciones as $requisicion) {
            $requisicionesdetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
            $requisiciondetalle = new \Requisiciondetalle();
            foreach ($requisicionesdetalles as $requisiciondetalle) {
                if (!in_array($requisiciondetalle->getIdproducto(), $idproductos))
                    array_push($idproductos, $requisiciondetalle->getIdproducto());
            }
        }
        $ordenestablajeria = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $fecha, 'max' => $hoy))->find();
        $ordentablajeria = new \Ordentablajeria();
        foreach ($ordenestablajeria as $ordentablajeria) {
            $ordenestablajeriadetalles = \OrdentablajeriadetalleQuery::create()->filterByIdordentablajeria($ordentablajeria->getIdordentablajeria())->find();
            $ordentablajeriadetalle = new \Ordentablajeriadetalle();
            foreach ($ordenestablajeriadetalles as $ordentablajeriadetalle) {
                if (!in_array($ordentablajeriadetalle->getIdproducto(), $idproductos))
                    array_push($idproductos, $ordentablajeriadetalle->getIdproducto());
            }
        }

        return $this->getResponse()->setContent(json_encode($idproductos));
    }

    public function entradasporcomprasAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $productos = array();
            $almacenes = array();
            $proveedores = array();
            $post_data = $request->getPost();
            $fecha_inicial = date_create_from_format('d/m/Y', $post_data["fecha_inicial"]);
            $fecha_final = date_create_from_format('d/m/Y', $post_data["fecha_final"]);
            date_time_set($fecha_inicial, 0, 0, 0);
            date_time_set($fecha_final, 23, 59, 59);
            //echo date_format($fecha_inicial, 'Y-m-d H:i:s') . "\n";
            $documento = true;
            if (isset($post_data['generar_reporte']))
                $documento = false;
            foreach ($post_data as $key => $value) {
                if (strpos($key, 'almacen-') !== false) {
                    array_push($almacenes, substr($key, 8));
                }
                if (strpos($key, 'proveedor-') !== false) {
                    array_push($proveedores, substr($key, 10));
                }
                if (strpos($key, 'producto-') !== false) {
                    array_push($productos, substr($key, 9));
                }
            }
            $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
            $fila = 0;
            if (!$documento) {
                $reporte = array("<div align='center'><h3>" . ucfirst($empresa) . "</h3></div>");
                $reporte[1] = "<div align='center'><h3>RELACIÓN DE ENTRADAS POR COMPRA DEL " . $post_data["fecha_final"] . " AL " . $post_data["fecha_inicial"] . "</h3></div>";
                $fila = 2;
            }
            $color = true;
            $bgproveedor = "#819FF7";
            $bginfo = "#ADD8E6";
            $bgfila = "#F2F2F2";
            $bgfila2 = "#FFFFFF";
            $bgtotalg = "#EE4444";
            $compra = new \Compra();
            $completo = 1;
            $objproveedores = \ProveedorQuery::create()->filterByIdempresa($idempresa)->orderByProveedorNombrecomercial('asc')->find();
            $objproveedor = new \Proveedor();
            $proveedoresord = array();
            do {
                foreach ($objproveedores as $objproveedor) {
                    foreach ($proveedores as $idproveedor) {
                        if ($objproveedor->getIdproveedor() == $idproveedor) {
                            if (!isset($proveedoresord[$idproveedor])) {
                                $proveedoresord[$idproveedor] = "a";
                                $completo++;
                            }
                        }
                    }
                }
            } while ($completo <= count($proveedores));
            $proveedores = array();
            foreach ($proveedoresord as $key => $value) {
                array_push($proveedores, $key);
            }
            $completo = 1;
            $objalmacenes = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->orderByAlmacenNombre('asc')->find();
            $objalmacen = new \Almacen();
            $almacenesord = array();
            do {
                foreach ($objalmacenes as $objalmacen) {
                    foreach ($almacenes as $idalmacen) {
                        if ($objalmacen->getIdalmacen() == $idalmacen) {
                            if (!isset($almacenesord[$idalmacen])) {
                                $almacenesord[$idalmacen] = "a";
                                $completo++;
                            }
                        }
                    }
                }
            } while ($completo <= count($almacenes));
            $almacenes = array();
            foreach ($almacenesord as $key => $value) {
                array_push($almacenes, $key);
            }
            $totalg = 0;
            foreach ($proveedores as $idproveedor) {
                $nombreProveedor = \ProveedorQuery::create()->findPk($idproveedor)->getProveedorNombrecomercial();
                if ($documento)
                    $reporte[$fila] = array('clave' => '', 'nombre' => $nombreProveedor, 'unidad' => '', 'cantidad' => '', 'cu' => '', 'sub' => '');
                else
                    $reporte[$fila] = "<tr bgcolor='" . $bgproveedor . "'><td>$nombreProveedor</td><td></td><td></td><td></td><td></td><td></td></tr>";
                $fila++;
                $totalp = 0;
                foreach ($almacenes as $idalmacen) {
                    $objcompras = \CompraQuery::create()->filterByIdproveedor($idproveedor)->filterByIdalmacen($idalmacen)->filterByCompraFechacompra(array('min' => $fecha_inicial, 'max' => $fecha_final))->find();
                    $objcompra = new \Compra();
                    $totalc = 0;
                    foreach ($objcompras as $objcompra) {
                        $objcomprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($objcompra->getIdcompra())->find();
                        $objcompradetalle = new \Compradetalle();
                        $info = true;
                        $color = true;
                        foreach ($objcomprasdetalles as $objcompradetalle) {
                            foreach ($productos as $idproducto) {
                                if ($objcompradetalle->getIdproducto() == $idproducto) {
                                    if ($info) {
                                        $nombreAlmacen = \AlmacenQuery::create()->findPk($idalmacen)->getAlmacenNombre();
                                        if ($documento)
                                            $reporte[$fila] = array('clave' => '', 'nombre' => $nombreAlmacen, 'unidad' => $objcompra->getCompraFechacompra('Y/m/d'), 'cantidad' => $objcompra->getIdcompra(), 'cu' => '', 'sub' => '');
                                        else
                                            $reporte[$fila] = "<tr bgcolor='" . $bginfo . "'><td> " . $nombreAlmacen . " </td><td> " . $objcompra->getCompraFechacompra('Y/m/d') . " </td><td> " . $objcompra->getIdcompra() . " </td></tr>";
                                        $info = false;
                                        $fila++;
                                    }
                                    $totalc+=$objcompradetalle->getCompradetalleSubtotal();
                                    $totalp+=$objcompradetalle->getCompradetalleSubtotal();
                                    $totalg+=$objcompradetalle->getCompradetalleSubtotal();
                                    $nombreProducto = \ProductoQuery::create()->findPk($idproducto)->getProductoNombre();
                                    $unidadProducto = \ProductoQuery::create()->findPk($idproducto)->getUnidadmedida()->getUnidadmedidaNombre();
                                    $colorbg = ($color) ? $bgfila : $bgfila2;
                                    $color = !$color;
                                    if ($documento)
                                        $reporte[$fila] = array('clave' => $idproducto, 'nombre' => $nombreProducto, 'unidad' => $unidadProducto, 'cantidad' => $objcompradetalle->getCompradetalleCantidad(), 'cu' => $objcompradetalle->getCompradetalleCostounitario(), 'sub' => $objcompradetalle->getCompradetalleSubtotal());
                                    else
                                        $reporte[$fila] = "<tr bgcolor='" . $colorbg . "'><td> " . $idproducto . " </td><td> " . $nombreProducto . " </td><td>$unidadProducto</td><td> " . $objcompradetalle->getCompradetalleCantidad() . " </td><td> " . $objcompradetalle->getCompradetalleCostounitario() . " </td><td> " . $objcompradetalle->getCompradetalleSubtotal() . " </td></tr>";
                                    $fila++;
                                }
                            }
                        }
                        if ($totalc != 0) {
                            if ($documento)
                                $reporte[$fila] = array('clave' => '', 'nombre' => '', 'unidad' => '', 'cantidad' => '', 'cu' => 'Total', 'sub' => $totalc);
                            else
                                $reporte[$fila] = "<tr bgcolor='" . $bgfila . "'><td></td><td></td><td></td><td></td><td> Total </td><td> " . $totalc . " </td></tr>";
                            $fila++;
                        }
                    }
                }
                if ($totalp != 0) {
                    if ($documento)
                        $reporte[$fila] = array('clave' => '', 'nombre' => '', 'unidad' => '', 'cantidad' => '', 'cu' => 'Total', 'sub' => $totalp);
                    else
                        $reporte[$fila] = "<tr bgcolor='" . $bgfila . "'><td></td><td></td><td></td><td></td><td> Total </td><td> " . $totalp . " </td></tr>";
                    $fila++;
                }
                if ($documento)
                    $reporte[$fila] = array('clave' => '', 'nombre' => '', 'unidad' => '', 'cantidad' => '', 'cu' => '', 'sub' => '');
            }
            if ($documento)
                $reporte[$fila] = array('clave' => '', 'nombre' => '', 'unidad' => '', 'cantidad' => '', 'cu' => 'Total', 'sub' => $totalg);
            else
                $reporte[$fila] = "<tr bgcolor='" . $bgtotalg . "'><td></td><td></td><td></td><td></td><td> Total </td><td> " . $totalg . " </td></tr>";
            $fila++;

            if ($documento) {
                $template = '/entradasporcompras.xlsx';
                $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
                $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
                $sucursal = \SucursalQuery::create()->findPk($idsucursal)->getSucursalNombre();
                $config = array(
                    'template' => $template,
                    'templateDir' => $templateDir
                );
                $R = new \PHPReport($config);
                $R->load(array(
                    array(
                        'id' => 'compania',
                        'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $sucursal),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'fecha',
                        'data' => array('inicio' => $post_data["fecha_inicial"], 'fin' => $post_data["fecha_final"]),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'reporte',
                        'repeat' => true,
                        'data' => $reporte,
                        'minRows' => 2,
                    )
                        )
                );
                if (isset($post_data['generar_pdf']))
                    echo $R->render();
                else
                    echo $R->render('excel');
                exit();
            } else {
                $view_model = new ViewModel();
                $view_model->setVariables(array(
                    'reporte' => $reporte,
                    'messages' => $this->flashMessenger(),
                ));
                $view_model->setTemplate('/application/reportes/reportes/entradasporcomprasreporte');
                return $view_model;
            }
        }

        //INTANCIAMOS NUESTRA VISTA
        $mes_min = \FlujoefectivoQuery::create()->filterByFlujoefectivoOrigen('compra')->orderByFlujoefectivoFecha('asc')->findOne()->getFlujoefectivoFecha('m');
        $anio_min = \FlujoefectivoQuery::create()->filterByFlujoefectivoOrigen('compra')->orderByFlujoefectivoFecha('asc')->findOne()->getFlujoefectivoFecha('Y');
        $mes_max = \FlujoefectivoQuery::create()->filterByFlujoefectivoOrigen('compra')->orderByFlujoefectivoFecha('desc')->findOne()->getFlujoefectivoFecha('m');
        $anio_max = \FlujoefectivoQuery::create()->filterByFlujoefectivoOrigen('compra')->orderByFlujoefectivoFecha('desc')->findOne()->getFlujoefectivoFecha('Y');

        $productos = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
        $proveedores = \ProveedorQuery::create()->filterByIdempresa($idempresa)->find();
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->find();
        $form = new \Application\Reportes\Form\EntradasporcomprasForm();
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'productos' => $productos,
            'proveedores' => $proveedores,
            'almacenes' => $almacenes,
            'mes_min' => $mes_min,
            'anio_min' => $anio_min,
            'mes_max' => $mes_max,
            'anio_max' => $anio_max,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/reportes/reportes/entradasporcompras');
        return $view_model;
    }

    public function informeacumuladosAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $inicio = explode('/', $post_data['fecha_inicial']);
            $fin = explode('/', $post_data['fecha_final']);

            $fromyear = $inicio[2];
            $frommonth = $inicio[1];
            $fromday = $inicio[0];

            $toyear = $fin[2];
            $tomonth = $fin[1];
            $to_day = $fin[0];
            $ingresos = \IngresoQuery::create()
                    ->filterByIngresoFecha(array('min' => $fromyear . '-' . $frommonth . '-' . $fromday . ' 00:00:00', 'max' => $toyear . '-' . $tomonth . '-' . $to_day . ' 23:59:59'))
                    ->filterByIdsucursal($idsucursal)
                    ->filterByIdempresa($idempresa)
                    ->orderByIngresoFecha("asc")
                    ->find();
            $dato = null;
            $dias_activos = 1;
            $ingreso = new \Ingreso();
            foreach ($ingresos as $ingreso) {
                if ($dato == null)
                    $dato = $ingreso->getIngresoFecha('d/m/Y');
                if ($dato != $ingreso->getIngresoFecha('d/m/Y')) {
                    $dato = $ingreso->getIngresoFecha('d/m/Y');
                    $dias_activos++;
                }
            }
            $ventas_alimentos = 0;
            $ventas_bebidas = 0;
            foreach ($ingresos as $ingreso) {
                $ingresosdetalles = \IngresodetalleQuery::create()->filterByIdingreso($ingreso->getIdingreso())->find();
                $ingresodetalle = new \Ingresodetalle();
                foreach ($ingresosdetalles as $ingresodetalle) {
                    if ($ingresodetalle->getIdrubroingreso() == 1) {
                        $ventas_alimentos+=$ingresodetalle->getIngresodetalleSub();
                    }
                    if ($ingresodetalle->getIdrubroingreso() == 2) {
                        $ventas_bebidas+=$ingresodetalle->getIngresodetalleSub();
                    }
                }
            }
            $ventas_totales = $ventas_alimentos + $ventas_bebidas;
            $porcentaje_ventas_alimentos = ($ventas_alimentos != 0) ? ($ventas_alimentos * 100) / $ventas_totales : 0;
            $porcentaje_ventas_bebidas = ($ventas_bebidas != 0) ? ($ventas_bebidas * 100) / $ventas_totales : 0;
            $compras_alimentos = 0;
            $compras_bebidas = 0;
            $cantidad = 0;
            $iva = ((\TasaivaQuery::create()->findOne()->getTasaivaValor()) / 100) + 1;
            $compras = \CompraQuery::create()
                    ->filterByCompraFechacompra(array('min' => $fromyear . '-' . $frommonth . '-' . $fromday . ' 00:00:00', 'max' => $toyear . '-' . $tomonth . '-' . $to_day . ' 23:59:59'))
                    ->filterByIdsucursal($idsucursal)
                    ->filterByIdempresa($idempresa)
                    ->find();
            $compra = new \Compra();
            foreach ($compras as $compra) {
                $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
                $compradetalle = new \Compradetalle();
                foreach ($comprasdetalles as $compradetalle) {
                    $idcategoria = $compradetalle->getProducto()->getIdcategoria();
                    $cantidad = ($compradetalle->getCompradetalleSubtotal() / $iva);
                    if ($idcategoria == 1) {
                        $compras_alimentos+=$cantidad;
                    }
                    if ($idcategoria == 2) {
                        $compras_bebidas+=$cantidad;
                    }
                }
            }
            $compras_totales = $compras_alimentos + $compras_bebidas;
            $porcentaje_alimentos_compras = ($ventas_alimentos != 0) ? ($compras_alimentos * 100) / $ventas_alimentos : 0;
            $porcentaje_bebidas_compras = ($ventas_bebidas != 0) ? ($compras_bebidas * 100) / $ventas_bebidas : 0;
            $porcentaje_total_compras = ($ventas_totales != 0) ? ($compras_totales * 100) / $ventas_totales : 0;
            $venta_promedio = $ventas_totales / $dias_activos;

            $cortesia_alimentos = 0;
            $cortesia_bebidas = 0;
            $conceptossalidas = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre("Consumos de empleados")->find();
            $conceptosalida = new \Conceptosalida();
            foreach ($conceptossalidas as $conceptosalida) {
                $requisiciones = \RequisicionQuery::create()->filterByIdconceptosalida($conceptosalida->getIdconceptosalida())->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisicionesdetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->filterByIdpadre(NULL)->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisicionesdetalles as $requisiciondetalle) {
                        $idcategoria = $requisiciondetalle->getProducto()->getIdcategoria();
                        $cantidad = ($requisiciondetalle->getRequisiciondetalleSubtotal() / $iva);
                        if ($idcategoria == 1) {
                            $cortesia_alimentos+=$cantidad;
                        }
                        if ($idcategoria == 2) {
                            $cortesia_bebidas+=$cantidad;
                        }
                    }
                }
            }

            $conceptossalidas = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre("Cortesia")->find();
            $conceptosalida = new \Conceptosalida();
            foreach ($conceptossalidas as $conceptosalida) {
                $requisiciones = \RequisicionQuery::create()->filterByIdconceptosalida($conceptosalida->getIdconceptosalida())->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisicionesdetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->filterByIdpadre(NULL)->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisicionesdetalles as $requisiciondetalle) {
                        $idcategoria = $requisiciondetalle->getProducto()->getIdcategoria();
                        $cantidad = ($requisiciondetalle->getRequisiciondetalleSubtotal() / $iva);
                        if ($idcategoria == 1) {
                            $cortesia_alimentos+=$cantidad;
                        }
                        if ($idcategoria == 2) {
                            $cortesia_bebidas+=$cantidad;
                        }
                    }
                }
            }

            $trabajadorespromedio = 0;
            if ($fromyear != $toyear) {
                for ($anio = $fromyear; $anio <= $toyear; $anio++) {
                    $objtrabajadorespromedios = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($anio)->find();
                    $objtrabajadorespromedio = new \Trabajadorespromedio();
                    foreach ($objtrabajadorespromedios as $objtrabajadorespromedio) {
                        $trabajadorespromedio+=$objtrabajadorespromedio->getTrabajadorespromedioCantidad();
                    }
                }
            } else {
                for ($mes = $frommonth; $mes <= $tomonth; $mes++) {
                    $obj = \TrabajadorespromedioQuery::create()->filterByIdsucursal($idsucursal)->filterByIdempresa($idempresa)->filterByTrabajadorespromedioAnio($fromyear)->filterByTrabajadorespromedioMes($mes)->findOne();
                    if ($obj != null) {
                        $trabajadorespromedio+=$obj->getTrabajadorespromedioCantidad();
                    }
                }
            }
            $promedio_cortesias_alimentos = ($trabajadorespromedio != 0) ? $cortesia_alimentos / $trabajadorespromedio : $cortesia_alimentos;
            $promedio_cortesias_bebidas = ($trabajadorespromedio != 0) ? $cortesia_bebidas / $trabajadorespromedio : $cortesia_alimentos;

            $ejecutivos_alimentos = 0;
            $ejecutivos_bebidas = 0;
            $conceptossalidas = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre("Consumos de ejecutivos")->find();
            $conceptosalida = new \Conceptosalida();
            foreach ($conceptossalidas as $conceptosalida) {
                $requisiciones = \RequisicionQuery::create()->filterByIdconceptosalida($conceptosalida->getIdconceptosalida())->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisicionesdetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->filterByIdpadre(NULL)->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisicionesdetalles as $requisiciondetalle) {
                        $idcategoria = $requisiciondetalle->getProducto()->getIdcategoria();
                        $cantidad = ($requisiciondetalle->getRequisiciondetalleSubtotal() / $iva);
                        if ($idcategoria == 1) {
                            $ejecutivos_alimentos+=$cantidad;
                        }
                        if ($idcategoria == 2) {
                            $ejecutivos_bebidas+=$cantidad;
                        }
                    }
                }
            }


            $mermas_alimentos = 0;
            $mermas_bebidas = 0;
            $conceptossalidas = \ConceptosalidaQuery::create()->filterByConceptosalidaNombre("Mermas")->find();
            $conceptosalida = new \Conceptosalida();
            foreach ($conceptossalidas as $conceptosalida) {
                $requisiciones = \RequisicionQuery::create()->filterByIdconceptosalida($conceptosalida->getIdconceptosalida())->find();
                $requisicion = new \Requisicion();
                foreach ($requisiciones as $requisicion) {
                    $requisicionesdetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->filterByIdpadre(NULL)->find();
                    $requisiciondetalle = new \Requisiciondetalle();
                    foreach ($requisicionesdetalles as $requisiciondetalle) {
                        $idcategoria = $requisiciondetalle->getProducto()->getIdcategoria();
                        $cantidad = ($requisiciondetalle->getRequisiciondetalleSubtotal() / $iva);
                        if ($idcategoria == 1) {
                            $mermas_alimentos+=$cantidad;
                        }
                        if ($idcategoria == 2) {
                            $mermas_bebidas+=$cantidad;
                        }
                    }
                }
            }

            $array_alimentos = array();
            $array_bebidas = array();
            $total_alimentos = 0;
            $total_bebidas = 0;
            $idalmacengeneral = \AlmacenQuery::create()->filterByAlmacenNombre("Almacén general")->filterByIdsucursal($idsucursal)->findOne()->getIdalmacen();
            $idcreditosalcosto = \AlmacenQuery::create()->filterByAlmacenNombre("Créditos al costo")->filterByIdsucursal($idsucursal)->findOne()->getIdalmacen();
            $compras = \CompraQuery::create()
                    ->filterByCompraFechacompra(array('min' => $fromyear . '-' . $frommonth . '-' . $fromday . ' 00:00:00', 'max' => $toyear . '-' . $tomonth . '-' . $to_day . ' 23:59:59'))
                    //                    ->filterByIdsucursal($idsucursal)
//                    ->filterByIdempresa($idempresa)
                    ->find();
            $compra = new \Compra();
            foreach ($compras as $compra) {
                if ($idalmacengeneral != $compra->getIdalmacen() && $idcreditosalcosto != $compra->getIdalmacen()) {
                    $objcomprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
                    $objcompradetalle = new \Compradetalle();
                    foreach ($objcomprasdetalles as $objcompradetalle) {
                        $idcategoria = $objcompradetalle->getProducto()->getIdcategoria();
                        $subcategorianombre = $objcompradetalle->getProducto()->getCategoriaRelatedByIdsubcategoria()->getCategoriaNombre();
                        $subcategorianombre = ucfirst($subcategorianombre);
                        $cantidad = ($compradetalle->getCompradetalleSubtotal() / $iva);
                        if ($idcategoria == 1) {
                            if (isset($array_alimentos[$subcategorianombre]))
                                $array_alimentos[$subcategorianombre]+=$cantidad;
                            else
                                $array_alimentos[$subcategorianombre] = $cantidad;
                            $total_alimentos+=$cantidad;
                        }
                        if ($idcategoria == 2) {
                            if (isset($array_bebidas[$subcategorianombre]))
                                $array_bebidas[$subcategorianombre]+=$cantidad;
                            else
                                $array_bebidas[$subcategorianombre] = $cantidad;
                            $total_bebidas+=$cantidad;
                        }
                    }
                }
            }



            $requisiciones = \RequisicionQuery::create()
                    ->filterByRequisicionFecha(array('min' => $fromyear . '-' . $frommonth . '-' . $fromday . ' 00:00:00', 'max' => $toyear . '-' . $tomonth . '-' . $to_day . ' 23:59:59'))
                    ->filterByIdempresa($idempresa)
                    ->find();
            $requisicion = new \Requisicion();
            foreach ($requisiciones as $requisicion) {
                if ($idalmacengeneral != $requisicion->getIdalmacendestino() && $idcreditosalcosto != $requisicion->getIdalmacendestino()) {
                    $objrequisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->filterByIdpadre(NULL)->find();
                    $objrequisiciondetalle = new \Requisiciondetalle();
                    foreach ($objrequisiciondetalles as $objrequisiciondetalle) {
                        $idcategoria = $objrequisiciondetalle->getProducto()->getIdcategoria();
                        $subcategorianombre = $objrequisiciondetalle->getProducto()->getCategoriaRelatedByIdsubcategoria()->getCategoriaNombre();
                        $subcategorianombre = ucfirst($subcategorianombre);
                        $cantidad = ($objrequisiciondetalle->getRequisiciondetalleSubtotal() / $iva);
                        if ($idcategoria == 1) {
                            if (isset($array_alimentos[$subcategorianombre]))
                                $array_alimentos[$subcategorianombre]+=$cantidad;
                            else
                                $array_alimentos[$subcategorianombre] = $cantidad;
                            $total_alimentos+=$cantidad;
                        }
                        if ($idcategoria == 2) {
                            if (isset($array_bebidas[$subcategorianombre]))
                                $array_bebidas[$subcategorianombre]+=$cantidad;
                            else
                                $array_bebidas[$subcategorianombre] = $cantidad;
                            $total_bebidas+=$cantidad;
                        }
                    }
                }
            }

            $porcentaje_bruto_alimentos = ($ventas_alimentos != 0) ? ($total_alimentos * 100) / $ventas_alimentos : 0;
            $porcentaje_bruto_bebidas = ($ventas_bebidas) ? ($total_bebidas * 100) / $ventas_bebidas : 0;
            $bgazul = "#819FF7";
            $bgazulclaro = "#ADD8E6";
            $bgfila = "#F2F2F2";
            $bgfila2 = "#FFFFFF";
            $bgrojo = "#EA6363";
            $bgverde = "#93F995";
            $reporte = array();
            $reporte[0] = "<tr bgcolor='" . $bgrojo . "'><td>Ventas totales</td><td>$ventas_totales</td><td></td></tr>";
            $reporte[1] = "<tr bgcolor='" . $bgazul . "'><td>Ventas por rubro</td><td></td><td></td></tr>";
            $reporte[3] = "<tr bgcolor='" . $bgfila . "'><td>Alimentos</td><td>$ventas_alimentos</td><td>$porcentaje_ventas_alimentos</td></tr>";
            $reporte[4] = "<tr bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td>$ventas_bebidas</td><td>$porcentaje_ventas_bebidas</td></tr>";
            $reporte[5] = "<tr bgcolor='" . $bgazul . "'><td>Porcentaje bruto</td><td></td><td></td></tr>";
            $reporte[6] = "<tr bgcolor='" . $bgfila . "'><td>Alimentos</td><td></td><td>$porcentaje_bruto_alimentos</td></tr>";
            $reporte[7] = "<tr bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td></td><td>$porcentaje_bruto_bebidas</td></tr>";
            $reporte[8] = "<tr bgcolor='" . $bgazul . "'><td>Compras del mes</td><td></td><td></td></tr>";
            $reporte[9] = "<tr bgcolor='" . $bgfila . "'><td>Alimentos</td><td>$compras_alimentos</td><td>$porcentaje_alimentos_compras</td></tr>";
            $reporte[10] = "<tr bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td>$compras_bebidas</td><td>$porcentaje_bebidas_compras</td></tr>";
            $reporte[11] = "<tr  bgcolor='" . $bgrojo . "'><td>Total</td><td>$compras_totales</td><td>$porcentaje_total_compras</td></tr>";
            $reporte[12] = "<tr bgcolor='" . $bgverde . "'><td>Venta promedio diaria</td><td>$venta_promedio</td><td>$dias_activos días</td></tr>";
            $reporte[13] = "<tr bgcolor='" . $bgazul . "'><td>Consumo promedio p/empleado diario</td><td></td><td></td></tr>";
            $reporte[14] = "<tr bgcolor='" . $bgazulclaro . "'><td>Cortesia</td><td></td><td></td></tr>";
            $reporte[15] = "<tr bgcolor='" . $bgfila . "'><td>Alimento</td><td>$cortesia_alimentos</td><td></td></tr>";
            $reporte[16] = "<tr  bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td>$cortesia_bebidas</td><td></td></tr>";
            $reporte[17] = "<tr bgcolor='" . $bgazulclaro . "'><td>Consumo ejecutivo</td><td></td><td></td></tr>";
            $reporte[18] = "<tr bgcolor='" . $bgfila . "'><td>Alimento</td><td>$ejecutivos_alimentos</td><td></td></tr>";
            $reporte[19] = "<tr bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td>$ejecutivos_bebidas</td><td></td></tr>";
            $reporte[20] = "<tr bgcolor='" . $bgazulclaro . "'><td>Mermas</td><td></td><td></td></tr>";
            $reporte[21] = "<tr bgcolor='" . $bgfila . "'><td>Alimento</td><td>$mermas_alimentos</td><td></td></tr>";
            $reporte[22] = "<tr bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td>$mermas_bebidas</td><td></td></tr>";
            $reporte[23] = "<tr bgcolor='" . $bgazul . "'><td>Alimentos</td><td></td><td></td></tr>";
            $i = 24;
            $color = true;
            foreach ($array_alimentos as $key => $value) {
                $bgcolor = ($color) ? $bgfila : $bgfila2;
                $color = !$color;
                $porcentaje = ($value * 100) / $total_alimentos;
                $reporte[$i] = "<tr bgcolor='" . $bgcolor . "'><td>$key</td><td>$value</td><td>$porcentaje</td></tr>";
                $i++;
            }
            $reporte[$i] = "<tr bgcolor='" . $bgrojo . "'><td>Total</td><td>$ventas_alimentos</td><td>$porcentaje_ventas_alimentos</td></tr>";
            $i++;
            $reporte[$i] = "<tr bgcolor='" . $bgazul . "'><td>Bebidas</td><td></td><td></td></tr>";
            $i++;
            $color = true;
            foreach ($array_bebidas as $key => $value) {
                $bgcolor = ($color) ? $bgfila : $bgfila2;
                $color = !$color;
                $porcentaje = ($value * 100) / $total_bebidas;
                $reporte[$i] = "<tr bgcolor='" . $bgcolor . "'><td>$key</td><td>$value</td><td>$porcentaje</td></tr>";
                $i++;
            }
            $reporte[$i] = "<tr bgcolor='" . $bgrojo . "'><td>Total</td><td>$ventas_bebidas</td><td>$porcentaje_ventas_bebidas</td></tr>";
            $i++;

            return $this->getResponse()->setContent(json_encode($reporte));
            exit;
            if ($documento) {
                $template = '/variacioncostos.xlsx';
                $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
                $inicio = $mes_inicio . "/" . $ano_inicio;
                $fin = $mes_fin . "/" . $ano_fin;
                $nombreEmpresa = \EmpresaQuery::create()->findPk($idempresa)->getEmpresaNombrecomercial();
                $sucursal = \SucursalQuery::create()->findPk($idsucursal)->getSucursalNombre();
                $config = array(
                    'template' => $template,
                    'templateDir' => $templateDir
                );
                $R = new \PHPReport($config);
                $R->load(array(
                    array(
                        'id' => 'compania',
                        'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $sucursal),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'fecha',
                        'data' => array('inicial' => $inicio, 'final' => $fin),
                        'format' => array(
                            'date' => array('datetime' => 'd/m/Y')
                        )
                    ),
                    array(
                        'id' => 'prod',
                        'repeat' => true,
                        'data' => $reporte,
                        'minRows' => 2,
                        'format' => array(
                            'price' => array('number' => array('prefix' => '$', 'decimals' => 2)),
                            'total' => array('number' => array('prefix' => '$', 'decimals' => 2))
                        )
                    )
                        )
                );
                if (isset($post_data['generar_pdf']))
                    echo $R->render();
                else
                    echo $R->render('excel');
                exit();
            } else {
                $view_model = new ViewModel();
                $view_model->setVariables(array(
                    'reporte' => $reporte,
                    'messages' => $this->flashMessenger(),
                ));
                $view_model->setTemplate('/application/reportes/reportes/variacioncostosreporte');
                return $view_model;
            }
        }

        //INTANCIAMOS NUESTRA VISTA
        $no_data = false;
        $mes_min = 0;
        $anio_min = 0;
        $mes_max = 0;
        $anio_max = 0;
        if (\FlujoefectivoQuery::create()->filterByIdsucursal($idsucursal)->orderByFlujoefectivoFecha('asc')->exists()) {
            $mes_min = \FlujoefectivoQuery::create()->filterByIdsucursal($idsucursal)->orderByFlujoefectivoFecha('asc')->findOne()->getFlujoefectivoFecha('m');
            $anio_min = \FlujoefectivoQuery::create()->filterByIdsucursal($idsucursal)->orderByFlujoefectivoFecha('asc')->findOne()->getFlujoefectivoFecha('Y');
            $mes_max = \FlujoefectivoQuery::create()->filterByIdsucursal($idsucursal)->orderByFlujoefectivoFecha('desc')->findOne()->getFlujoefectivoFecha('m');
            $anio_max = \FlujoefectivoQuery::create()->filterByIdsucursal($idsucursal)->orderByFlujoefectivoFecha('desc')->findOne()->getFlujoefectivoFecha('Y');
        } else {
            $no_data = true;
        }
        if (checkdate($mes_max, 31, $anio_max)) {
            $dia_max = 31;
        } else if (checkdate($mes_max, 30, $anio_max)) {
            $dia_max = 30;
        } elseif (checkdate($mes_max, 29, $anio_max)) {
            $dia_max = 29;
        } else {
            $dia_max = 28;
        }

        $form = new \Application\Reportes\Form\InformeacumuladosForm();
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'mes_min' => $mes_min,
            'anio_min' => $anio_min,
            'mes_max' => $mes_max,
            'anio_max' => $anio_max,
            'dia_max' => $dia_max,
            'messages' => $this->flashMessenger(),
            'no_data' => $no_data,
        ));
        $view_model->setTemplate('/application/reportes/reportes/informeacumulados');
        return $view_model;
    }
    
    public function recetasAction() {
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/reportes/recetas/index');
        return $view_model;
    }
    
    public function recetasdetalleAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $reporte= array();
        $productosObj= \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByProductoTipo('subreceta')->orderByProductoNombre('asc')->find();
        $productoObj=new \Producto();
        foreach ($productosObj as $productoObj) {
            $recetasObj= \RecetaQuery::create()->filterByIdproducto($productoObj->getIdproducto())->find();
            $recetaObj=new \Receta();
            $idProducto=$productoObj->getIdproducto();
            $nombreProducto=$productoObj->getProductoNombre();
            $totalReceta=0;
            $bgazulclaro = "#ADD8E6";
            $bgazul = "#819FF7";
            array_push($reporte, "<tr bgcolor='" . $bgazul . "'><td>Clave:</td><td>$idProducto</td><td>Producto:</td><td>$nombreProducto</td><td></td><td></td><td></td></tr>");
            array_push($reporte, "<tr bgcolor='" . $bgazulclaro . "'><td>ProdPadre</td><td>ProdHijo</td><td>Tipo</td><td>Clave</td><td>Cantidad</td><td>Costo</td><td>Total</td></tr>");
            $color=true;
            foreach ($recetasObj as $recetaObj) {
                $producto=  \ProductoQuery::create()->filterByIdproducto($recetaObj->getIdproductoreceta())->findOne();
                $clave=$producto->getIdproducto();
                $nombre=$producto->getProductoNombre();
                $cantidad=$recetaObj->getRecetaCantidad();
                $costo=$producto->getProductoCosto();
                $tipo=$producto->getProductoTipo();
                $total=$costo*$cantidad;
                if($producto->getProductoTipo()=='subreceta') {
                    $recetasDetalleObj= \RecetaQuery::create()->filterByIdproducto($producto->getIdproducto())->find();
                    $recetaDetalleObj=new \Receta();
                    foreach ($recetasDetalleObj as $recetaDetalleObj) {
                        $productoDetalle=  \ProductoQuery::create()->filterByIdproducto($recetaDetalleObj->getIdproductoreceta())->findOne();
                        $claveDetalle=$productoDetalle->getIdproducto();
                        $nombreDetalle=$productoDetalle->getProductoNombre();
                        $cantidadDetalle=$recetaDetalleObj->getRecetaCantidad();
                        $unidadDetalle=$productoDetalle->getUnidadmedida()->getUnidadmedidaNombre();
                        $costoDetalle=$productoDetalle->getProductoCosto();
                        $totalDetalle=$costoDetalle*$cantidadDetalle;
                        $totalReceta+=$totalDetalle;
                        $tipoDetalle=$productoDetalle->getProductoTipo();
                        $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                        $color = !$color;
                        array_push($reporte, "<tr bgcolor='" . $bg . "'><td>$nombre</td><td>$nombreDetalle</td><td>$tipoDetalle</td><td>$claveDetalle</td><td>$cantidadDetalle</td><td>$costoDetalle</td><td>$totalDetalle</td></tr>");
                    }
                } else {
                    $totalReceta+=$total;
                    $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                    $color = !$color;
                    array_push($reporte, "<tr bgcolor='" . $bg . "'><td></td><td>$nombre</td><td>$tipo</td><td>$clave</td><td>$cantidad</td><td>$costo</td><td>$total</td></tr>");
                }
            }
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td>Total</td><td>$totalReceta</td></tr>");
        }
        $fecha = date('d/m/Y');
        $empresa=  \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
        $sucursal= \SucursalQuery::create()->filterByIdsucursal($idsucursal)->findOne()->getSucursalNombre();
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'fecha' => $fecha,
            'empresa' => $empresa,
            'sucursal' => $sucursal,
            'reporte' => $reporte,
        ));
        $view_model->setTemplate('/application/reportes/recetas/detalle');
        return $view_model;    
        echo "a";
        exit;   
    }
    
    public function recetasresumenAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $reporte= array();
        $productosObj= \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByProductoTipo('subreceta')->orderByProductoNombre('asc')->find();
        $productoObj=new \Producto();
        foreach ($productosObj as $productoObj) {
            $recetasObj= \RecetaQuery::create()->filterByIdproducto($productoObj->getIdproducto())->find();
            $recetaObj=new \Receta();
            $idProducto=$productoObj->getIdproducto();
            $nombreProducto=$productoObj->getProductoNombre();
            $totalReceta=0;
            $bgazulclaro = "#ADD8E6";
            $bgazul = "#819FF7";
            array_push($reporte, "<tr bgcolor='" . $bgazul . "'><td>Clave:</td><td>$idProducto</td><td>Producto:</td><td>$nombreProducto</td><td></td><td></td></tr>");
            array_push($reporte, "<tr bgcolor='" . $bgazulclaro . "'><td>Clave</td><td>Nombre Producto</td><td>Cantidad</td><td>Unidad</td><td>Costo</td><td>Total</td></tr>");
            $color=true;
            foreach ($recetasObj as $recetaObj) {
                $producto=  \ProductoQuery::create()->filterByIdproducto($recetaObj->getIdproductoreceta())->findOne();
                $clave=$producto->getIdproducto();
                $nombre=$producto->getProductoNombre();
                $cantidad=$recetaObj->getRecetaCantidad();
                $unidad=$producto->getUnidadmedida()->getUnidadmedidaNombre();
                $costo=$producto->getProductoCosto();
                $total=$costo*$cantidad;
                $totalReceta+=$total;
                $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                $color = !$color;
                array_push($reporte, "<tr bgcolor='" . $bg . "'><td>$clave</td><td>$nombre</td><td>$cantidad</td><td>$unidad</td><td>$costo</td><td>$total</td></tr>");
            }
            array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td>Total</td><td>$totalReceta</td></tr>");
        }
        $fecha = date('d/m/Y');
        $empresa=  \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
        $sucursal= \SucursalQuery::create()->filterByIdsucursal($idsucursal)->findOne()->getSucursalNombre();
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'fecha' => $fecha,
            'empresa' => $empresa,
            'sucursal' => $sucursal,
            'reporte' => $reporte,
        ));
        $view_model->setTemplate('/application/reportes/recetas/resumen');
        return $view_model;    
        echo "a";
        exit;   
    }

}

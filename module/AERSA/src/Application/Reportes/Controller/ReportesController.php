<?php

namespace Application\Reportes\Controller;



use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ReportesController extends AbstractActionController {

    public function variacioncostosAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $conn = \Propel::getConnection();
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
                {
                    $mes1inicio =$ano_inicio . '-' . $mes_inicio . '-01 00:00:00';
                    $mes1final =$ano_inicio . '-' . $mes_inicio . '-31 23:59:59';
                    //var_dump(substr($key, 9));
                    //exit();
                    $idprod=(int)substr($key, 9);
                    $compras = "SELECT count(idcompra) FROM `compra` WHERE compra_tipo='compra' and idcompra IN (SELECT idcompra FROM `compradetalle` WHERE idproducto=$idprod) AND idsucursal=$idsucursal AND '$mes1inicio' <= compra_fechacompra AND compra_fechacompra <= '$mes1final';";
                    $st = $conn->prepare($compras);
                    $st->execute();
                    $rescomprasmes1 = $st->fetchAll(\PDO::FETCH_ASSOC);
                    
                    $mes2inicio =$ano_fin . '-' . $mes_fin . '-01 00:00:00';
                    $mes2final =$ano_fin . '-' . $mes_fin . '-31 23:59:59';
                    
                    
                    $compras2 = "SELECT count(idcompra) FROM `compra` WHERE compra_tipo='compra' and idcompra IN (SELECT idcompra FROM `compradetalle` WHERE idproducto=$idprod) AND idsucursal=$idsucursal AND '$mes2inicio' <= compra_fechacompra AND compra_fechacompra <= '$mes2final';";
                    $st2 = $conn->prepare($compras2);
                    $st2->execute();
                    $rescomprasmes2 = $st2->fetchAll(\PDO::FETCH_ASSOC);
                    
                    if($rescomprasmes1[0]["count(idcompra)"]>0 || $rescomprasmes2[0]["count(idcompra)"]>0)
                    {
                        
                    array_push($productos, substr($key, 9));
                    }
                    
                        
                }
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
                
                //if($rescomprasmes1>0 || $rescomprasmes2>0)
                //{
                    
                $objproducto = \ProductoQuery::create()->findPk($idproducto);
                $nombre = $objproducto->getProductoNombre();
                $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                $compras = \CompraQuery::create()
                                ->filterByCompraFechacompra
                                        (array('min' => $ano_inicio . '-' . $mes_inicio . '-01 00:00:00', 'max' => $ano_inicio . '-' . $mes_inicio . '-31 23:59:59'))->find();

                $total = 0;
                $cantidad = 0;
                
                $costoviejo = "SELECT sum(compradetalle_subtotal)/sum(compradetalle_cantidad) FROM `compradetalle` WHERE idcompra IN (SELECT idcompra FROM `compra` WHERE compra_tipo='compra' and '$mes1inicio' <= compra_fechacompra AND compra_fechacompra <= '$mes1final' AND idsucursal=$idsucursal) AND  idproducto=$idproducto ;";
                $st = $conn->prepare($costoviejo);
                $st->execute();
                $valorcostoviejo = $st->fetchAll(\PDO::FETCH_ASSOC);
                //var_dump($costoviejo);
                //exit();
                if(!is_null($valorcostoviejo[0]["sum(compradetalle_subtotal)/sum(compradetalle_cantidad)"]))
                {
                    $costoold = $valorcostoviejo[0]["sum(compradetalle_subtotal)/sum(compradetalle_cantidad)"];
                }
                else
                {
                    $costoold = 0;
                }
                
                
                /*foreach ($compras as $compra) {
                    $objcomprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->filterByIdproducto($idproducto)->find();
                    $objcompradetalle = new \Compradetalle();
                    foreach ($objcomprasdetalles as $objcompradetalle) {
                        $cantidad++;
                        $total+=$objcompradetalle->getCompradetalleCostounitario();
                    }
                }*/
                
                //$costoold = ($total != 0 && $cantidad != 0) ? $total / $cantidad : 0;
                
                $search = $ano_fin . '-' . $mes_fin;

                $compras = \CompraQuery::create()
                                ->filterByCompraFechacompra
                                        (array('min' => $ano_fin . '-' . $mes_fin . '-01 00:00:00', 'max' => $ano_fin . '-' . $mes_fin . '-31 23:59:59'))->find();
                $total = 0;
                $cantidad = 0;
                
                $costonuevo = "SELECT sum(compradetalle_subtotal)/sum(compradetalle_cantidad) FROM `compradetalle` WHERE idcompra IN (SELECT idcompra FROM `compra` WHERE compra_tipo='compra' and '$mes2inicio' <= compra_fechacompra AND compra_fechacompra <= '$mes2final' AND idsucursal=$idsucursal) AND  idproducto=$idproducto ;";
                $st = $conn->prepare($costonuevo);
                $st->execute();
                $valorcostonuevo = $st->fetchAll(\PDO::FETCH_ASSOC);
                //echo "nuevo ".$valorcostonuevo;
                
                /*foreach ($compras as $compra) {
                    $objcomprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->filterByIdproducto($idproducto)->find();
                    $objcompradetalle = new \Compradetalle();
                    foreach ($objcomprasdetalles as $objcompradetalle) {
                        $cantidad++;
                        $total+=$objcompradetalle->getCompradetalleCostounitario();
                    }
                }*/
                
                //$costonew = ($total != 0 && $cantidad != 0) ? $total / $cantidad : 0;
                
                if(!is_null($valorcostonuevo[0]["sum(compradetalle_subtotal)/sum(compradetalle_cantidad)"]))
                {
                    $costonew = $valorcostonuevo[0]["sum(compradetalle_subtotal)/sum(compradetalle_cantidad)"];
                }
                else
                {
                    $costonew = 0;
                }
                
                
                //echo " ".$$costoold." - ".$costonew;
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
            //}//termina validación si el producto tiene compras
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
                    echo $R->render('PDF');
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
        $ano_array = array();
        $no_data = 0;
        $exists = \CompraQuery::create()->orderByCompraFechacompra('asc')->exists();
        if ($exists) {
            $min = \CompraQuery::create()->orderByCompraFechacompra('asc')->findOne()->getCompraFechacompra('Y');
            $max = \CompraQuery::create()->orderByCompraFechacompra('desc')->findOne()->getCompraFechacompra('Y');
            for ($i = $min; $i <= $max; $i++) {
                $ano_array[$i] = $i;
            }
        } else {
            $no_data = 1;
        }
        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $productos = \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByProductoTipo("simple")->find();
        $form = new \Application\Reportes\Form\ReporteForm($ano_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'categorias' => $categorias,
            'productos' => $productos,
            'messages' => $this->flashMessenger(),
            'no_data' => $no_data,
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
            $subRecintes = array();
            $prodRecientes = array();
            $post_data = $request->getPost();
            if ($post_data['movimientos_recientes'] == "Si") {
                $prodRecientes = $this->getrecientesProdAction($post_data['almacen']);
            }
            $template = '/formatoinventario.xlsx';
            $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
            $formato = $post_data['formato'];
            foreach ($post_data as $key => $value) {
                if (strpos($key, '-'))
                    array_push($idcategorias, substr($key, 9));
            }

//            $subcatsAlimentos = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->filterByIdcategoriapadre(1)->orderByCategoriaNombre('asc')->find();
//            $subcatsBebidas = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->filterByIdcategoriapadre(2)->orderByCategoriaNombre('asc')->find();
//            $subcatsGastos = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->filterByIdcategoriapadre(3)->orderByCategoriaNombre('asc')->find();
//
//            $subcat = new \Categoria();
//            foreach ($subcatsAlimentos as $subcat) {
//                if (in_array($subcat->getIdcategoria(), $idcategorias)) {
//                    $id = $subcat->getIdcategoria();
//                    $idproductos = array();
//                    $productosObj = \ProductoQuery::create()->filterByIdsubcategoria($id)->filterByIdempresa($idempresa)->filterByProductoTipo(array('simple', 'subreceta'))->filterByProductoBaja(0)->orderByProductoNombre('asc')->find();
//                    $productoObj = new \Producto();
//                    foreach ($productosObj as $productoObj) {
//                        array_push($idproductos, $productoObj->getIdproducto());
//                    }
//                    $categoria = \CategoriaQuery::create()->filterByIdcategoria($id)->findOne()->getCategoriaNombre();
//                    $almacen = \AlmacenQuery::create()->findPk($post_data['almacen'])->getAlmacenNombre();
//                    $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
//                    foreach ($idproductos as $idproducto) {
//                        $objproducto = \ProductoQuery::create()->findPk($idproducto);
//                        $nombre = $objproducto->getProductoNombre();
//                        $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
//                        array_push($productos, array('subcat' => $categoria, 'clave' => $objproducto->getIdproducto(), 'nombre' => $nombre, 'unidad' => $unidad));
//                    }
//                } elseif (in_array($subcat->getIdcategoria(), $subRecintes)) {
//                    $id = $subcat->getIdcategoria();
//                    $idproductos = array();
//                    $productosObj = \ProductoQuery::create()->filterByIdsubcategoria($id)->filterByIdempresa($idempresa)->filterByProductoTipo(array('simple', 'subreceta'))->filterByProductoBaja(0)->orderByProductoNombre('asc')->find();
//                    $productoObj = new \Producto();
//                    foreach ($productosObj as $productoObj) {
//                        if(in_array($productoObj->getIdproducto(), $prodRecientes))
//                            array_push($idproductos, $productoObj->getIdproducto());
//                    }
//                    $categoria = \CategoriaQuery::create()->filterByIdcategoria($id)->findOne()->getCategoriaNombre();
//                    $almacen = \AlmacenQuery::create()->findPk($post_data['almacen'])->getAlmacenNombre();
//                    $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
//                    foreach ($idproductos as $idproducto) {
//                        $objproducto = \ProductoQuery::create()->findPk($idproducto);
//                        $nombre = $objproducto->getProductoNombre();
//                        $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
//                        array_push($productos, array('subcat' => $categoria, 'clave' => $objproducto->getIdproducto(), 'nombre' => $nombre, 'unidad' => $unidad));
//                    }
//                }
//            }
//
//            foreach ($subcatsBebidas as $subcat) {
//                if (in_array($subcat->getIdcategoria(), $idcategorias)) {
//                    $id = $subcat->getIdcategoria();
//                    $idproductos = array();
//                    $productosObj = \ProductoQuery::create()->filterByIdsubcategoria($id)->filterByIdempresa($idempresa)->filterByProductoTipo(array('simple', 'subreceta'))->filterByProductoBaja(0)->orderByProductoNombre('asc')->find();
//                    $productoObj = new \Producto();
//                    foreach ($productosObj as $productoObj) {
//                        array_push($idproductos, $productoObj->getIdproducto());
//                    }
//                    $categoria = \CategoriaQuery::create()->filterByIdcategoria($id)->findOne()->getCategoriaNombre();
//                    $almacen = \AlmacenQuery::create()->findPk($post_data['almacen'])->getAlmacenNombre();
//                    $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
//                    foreach ($idproductos as $idproducto) {
//                        $objproducto = \ProductoQuery::create()->findPk($idproducto);
//                        $nombre = $objproducto->getProductoNombre();
//                        $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
//                        array_push($productos, array('subcat' => $categoria, 'clave' => $objproducto->getIdproducto(), 'nombre' => $nombre, 'unidad' => $unidad));
//                    }
//                } elseif (in_array($subcat->getIdcategoria(), $subRecintes)) {
//                    $id = $subcat->getIdcategoria();
//                    $idproductos = array();
//                    $productosObj = \ProductoQuery::create()->filterByIdsubcategoria($id)->filterByIdempresa($idempresa)->filterByProductoTipo(array('simple', 'subreceta'))->filterByProductoBaja(0)->orderByProductoNombre('asc')->find();
//                    $productoObj = new \Producto();
//                    foreach ($productosObj as $productoObj) {
//                        if(in_array($productoObj->getIdproducto(), $prodRecientes))
//                            array_push($idproductos, $productoObj->getIdproducto());
//                    }
//                    $categoria = \CategoriaQuery::create()->filterByIdcategoria($id)->findOne()->getCategoriaNombre();
//                    $almacen = \AlmacenQuery::create()->findPk($post_data['almacen'])->getAlmacenNombre();
//                    $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
//                    foreach ($idproductos as $idproducto) {
//                        $objproducto = \ProductoQuery::create()->findPk($idproducto);
//                        $nombre = $objproducto->getProductoNombre();
//                        $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
//                        array_push($productos, array('subcat' => $categoria, 'clave' => $objproducto->getIdproducto(), 'nombre' => $nombre, 'unidad' => $unidad));
//                    }
//                }
//            }
//
//            foreach ($subcatsGastos as $subcat) {
//                if (in_array($subcat->getIdcategoria(), $idcategorias)) {
//                    $id = $subcat->getIdcategoria();
//                    $idproductos = array();
//                    $productosObj = \ProductoQuery::create()->filterByIdsubcategoria($id)->filterByIdempresa($idempresa)->filterByProductoTipo(array('simple', 'subreceta'))->filterByProductoBaja(0)->orderByProductoNombre('asc')->find();
//                    $productoObj = new \Producto();
//                    foreach ($productosObj as $productoObj) {
//                        array_push($idproductos, $productoObj->getIdproducto());
//                    }
//                    $categoria = \CategoriaQuery::create()->filterByIdcategoria($id)->findOne()->getCategoriaNombre();
//                    $almacen = \AlmacenQuery::create()->findPk($post_data['almacen'])->getAlmacenNombre();
//                    $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
//                    foreach ($idproductos as $idproducto) {
//                        $objproducto = \ProductoQuery::create()->findPk($idproducto);
//                        $nombre = $objproducto->getProductoNombre();
//                        $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
//                        array_push($productos, array('subcat' => $categoria, 'clave' => $objproducto->getIdproducto(), 'nombre' => $nombre, 'unidad' => $unidad));
//                    }
//                } elseif (in_array($subcat->getIdcategoria(), $subRecintes)) {
//                    $id = $subcat->getIdcategoria();
//                    $idproductos = array();
//                    $productosObj = \ProductoQuery::create()->filterByIdsubcategoria($id)->filterByIdempresa($idempresa)->filterByProductoTipo(array('simple', 'subreceta'))->filterByProductoBaja(0)->orderByProductoNombre('asc')->find();
//                    $productoObj = new \Producto();
//                    foreach ($productosObj as $productoObj) {
//                        if(in_array($productoObj->getIdproducto(), $prodRecientes))
//                            array_push($idproductos, $productoObj->getIdproducto());
//                    }
//                    $categoria = \CategoriaQuery::create()->filterByIdcategoria($id)->findOne()->getCategoriaNombre();
//                    $almacen = \AlmacenQuery::create()->findPk($post_data['almacen'])->getAlmacenNombre();
//                    $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
//                    foreach ($idproductos as $idproducto) {
//                        $objproducto = \ProductoQuery::create()->findPk($idproducto);
//                        $nombre = $objproducto->getProductoNombre();
//                        $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
//                        array_push($productos, array('subcat' => $categoria, 'clave' => $objproducto->getIdproducto(), 'nombre' => $nombre, 'unidad' => $unidad));
//                    }
//                }
//            }


            foreach ($idcategorias as $id) {
                $idproductos = array();
                $productosObj = \ProductoQuery::create()->filterByIdsubcategoria($id)->filterByIdempresa($idempresa)->filterByProductoTipo(array('simple', 'subreceta'))->filterByProductoBaja(0)->orderByProductoNombre('asc')->find();
                $productoObj = new \Producto();
                if ($post_data['movimientos_recientes'] == "No") {
                    foreach ($productosObj as $productoObj) {
                        array_push($idproductos, $productoObj->getIdproducto());
                    }
                } else {
                    foreach ($productosObj as $productoObj) {
                        if (in_array($productoObj->getIdproducto(), $prodRecientes))
                            array_push($idproductos, $productoObj->getIdproducto());
                    }
                }
                $categoria = \CategoriaQuery::create()->filterByIdcategoria($id)->findOne()->getCategoriaNombre();
                $almacen = \AlmacenQuery::create()->findPk($post_data['almacen'])->getAlmacenNombre();
                $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
                foreach ($idproductos as $idproducto) {
                    $objproducto = \ProductoQuery::create()->findPk($idproducto);
                    $nombre = $objproducto->getProductoNombre();
                    $unidad = $objproducto->getUnidadmedida()->getUnidadmedidaNombre();
                    array_push($productos, array('subcat' => $categoria, 'clave' => $objproducto->getIdproducto(), 'nombre' => $nombre, 'unidad' => $unidad));
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

    public function getrecientesSubcatAction() {
        $dias = $this->params()->fromQuery('dias');
        $fecha = date('Y-m-d', strtotime('-28 day'));
        $hoy = date('Y-m-d');
        $fecha.=' 00:00:00';
        $hoy.=' 23:59:59';
        $idsubcategorias = array();
        $compras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $fecha, 'max' => $hoy))->find();
        $compra = new \Compra();
        foreach ($compras as $compra) {
            $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
            $compradetalle = new \Compradetalle();
            foreach ($comprasdetalles as $compradetalle) {
                if (!in_array($compradetalle->getProducto()->getIdsubcategoria(), $idsubcategorias))
                    array_push($idsubcategorias, $compradetalle->getProducto()->getIdsubcategoria());
            }
        }
        $requisiciones = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $fecha, 'max' => $hoy))->find();
        $requisicion = new \Requisicion();
        foreach ($requisiciones as $requisicion) {
            $requisicionesdetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
            $requisiciondetalle = new \Requisiciondetalle();
            foreach ($requisicionesdetalles as $requisiciondetalle) {
                if (!in_array($requisiciondetalle->getProducto()->getIdsubcategoria(), $idsubcategorias))
                    array_push($idsubcategorias, $requisiciondetalle->getProducto()->getIdsubcategoria());
            }
        }
        $ordenestablajeria = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $fecha, 'max' => $hoy))->find();
        $ordentablajeria = new \Ordentablajeria();
        foreach ($ordenestablajeria as $ordentablajeria) {
            $ordenestablajeriadetalles = \OrdentablajeriadetalleQuery::create()->filterByIdordentablajeria($ordentablajeria->getIdordentablajeria())->find();
            $ordentablajeriadetalle = new \Ordentablajeriadetalle();
            foreach ($ordenestablajeriadetalles as $ordentablajeriadetalle) {
                if (!in_array($ordentablajeriadetalle->getProducto()->getIdsubcategoria(), $idsubcategorias))
                    array_push($idsubcategorias, $ordentablajeriadetalle->getProducto()->getIdsubcategoria());
            }
        }

        return $idsubcategorias;
    }

    public function getrecientesProdAction($idAlmacen) {
        $dias = $this->params()->fromQuery('dias');
        $fecha = date('Y-m-d', strtotime('-35 day'));
        $hoy = date('Y-m-d');
        $fecha.=' 00:00:00';
        $hoy.=' 23:59:59';
        $idproductos = array();
        $compras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $fecha, 'max' => $hoy))->find();
        $compra = new \Compra();
        foreach ($compras as $compra) {
            $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->filterByIdalmacen($idAlmacen)->find();
            $compradetalle = new \Compradetalle();
            foreach ($comprasdetalles as $compradetalle) {
                if (!in_array($compradetalle->getIdproducto(), $idproductos))
                    array_push($idproductos, $compradetalle->getIdproducto());
            }
        }
        $requisiciones = \RequisicionQuery::create()->filterByRequisicionFecha(array('min' => $fecha, 'max' => $hoy))->filterByIdalmacenorigen($idAlmacen)->_or()->filterByIdalmacendestino($idAlmacen)->find();
        $requisicion = new \Requisicion();
        foreach ($requisiciones as $requisicion) {
            $requisicionesdetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($requisicion->getIdrequisicion())->find();
            $requisiciondetalle = new \Requisiciondetalle();
            foreach ($requisicionesdetalles as $requisiciondetalle) {
                if (!in_array($requisiciondetalle->getIdproducto(), $idproductos))
                    array_push($idproductos, $requisiciondetalle->getIdproducto());
            }
        }
        $ordenestablajeria = \OrdentablajeriaQuery::create()->filterByOrdentablajeriaFecha(array('min' => $fecha, 'max' => $hoy))->filterByIdalmacenorigen($idAlmacen)->_or()->filterByIdalmacendestino($idAlmacen)->find();
        $ordentablajeria = new \Ordentablajeria();
        foreach ($ordenestablajeria as $ordentablajeria) {
            $ordenestablajeriadetalles = \OrdentablajeriadetalleQuery::create()->filterByIdordentablajeria($ordentablajeria->getIdordentablajeria())->find();
            $ordentablajeriadetalle = new \Ordentablajeriadetalle();
            foreach ($ordenestablajeriadetalles as $ordentablajeriadetalle) {
                if (!in_array($ordentablajeriadetalle->getIdproducto(), $idproductos))
                    array_push($idproductos, $ordentablajeriadetalle->getIdproducto());
            }
        }
        
        $ajustesinventario = \AjusteinventarioQuery::create()->filterByAjusteinventarioFecha(array('min' => $fecha, 'max' => $hoy))->filterByIdalmacen($idAlmacen)->find();
        $ajusteinventario = new \Ajusteinventario();
        foreach ($ajustesinventarios as $ajusteinventario) {
                if (!in_array($ajusteinventario->getIdproducto(), $idproductos))
                    array_push($idproductos, $ajusteinventario->getIdproducto());
        }
        
        $explosionesreceta = \ExplosionrecetaQuery::create()->filterByExplosionrecetaFecha(array('min' => $fecha, 'max' => $hoy))->filterByIdalmacen($idAlmacen)->find();
        $explosionreceta = new \Explosionreceta();
        foreach ( $explosionesreceta as  $explosionreceta) {
                if (!in_array($explosionreceta->getIdproducto(), $idproductos))
                    array_push($idproductos, $explosionreceta->getIdproducto());
        }
        
        $invsmes= \InventariomesQuery::create()->filterByInventariomesFecha(array('min' => $fecha, 'max' => $hoy))->filterByIdalmacen($idAlmacen)->find();
        $invmes = new \Inventariomes();
        foreach ($invsmes as $invmes) {
            $invmesdetalles = \InventariomesdetalleQuery::create()->filterByIdinventariomes($invmes->getIdinventariomes())->find();
            $invmesdetalle = new \Inventariomesdetalle();
            foreach ($invmesdetalles as $invmesdetalle) {
                if($invmesdetalle->getInventariomesdetalleTotalfisico() > 0){
                     if (!in_array($invmesdetalle->getIdproducto(), $idproductos)){
                        array_push($idproductos, $invmesdetalle->getIdproducto());
                     }
                }
               
            }
        }

        return $idproductos;
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
                $reporte[1] = "<div align='center'><h3>RELACIÓN DE ENTRADAS POR COMPRA DEL " . $post_data["fecha_inicial"] . " AL " . $post_data["fecha_final"] . "</h3></div>";
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
            $objalmacenes = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->filterByAlmacenEstatus(1)->orderByAlmacenNombre('asc')->find();
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
                    $objcompras = \CompraQuery::create()->filterByIdproveedor($idproveedor)->filterByIdalmacen($idalmacen)->filterByCompraFechacompra(array('min' => $fecha_inicial, 'max' => $fecha_final))->filterByCompraTipo('compra')->find();
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
                                            $reporte[$fila] = array('clave' => '', 'nombre' => $nombreAlmacen, 'unidad' => $objcompra->getCompraFechacompra('Y/m/d'), 'cantidad' => $objcompra->getCompraFolio(), 'cu' => '', 'sub' => '');
                                        else
                                            $reporte[$fila] = "<tr bgcolor='" . $bginfo . "'><td> " . $nombreAlmacen . " </td><td> " . $objcompra->getCompraFechacompra('Y/m/d') . " </td><td> " . $objcompra->getCompraFolio() . " </td></tr>";
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
                        $totalc=0;
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
                $template = '/entradascompras.xlsx';
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
                    echo $R->render('PDF');
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
        $mes_min = 0;
        $anio_min = 0;
        $mes_max = 0;
        $anio_max = 0;
        $existencia = 1;
        $exits = \CompraQuery::create()->orderByCompraFechacompra('asc')->filterByIdsucursal($idsucursal)->exists();
        if ($exits) {
            $mes_min = \CompraQuery::create()->orderByCompraFechacompra('asc')->filterByIdsucursal($idsucursal)->findOne()->getCompraFechacompra('m');
            $anio_min = \CompraQuery::create()->orderByCompraFechacompra('asc')->filterByIdsucursal($idsucursal)->findOne()->getCompraFechacompra('Y');
            $mes_max = \CompraQuery::create()->orderByCompraFechacompra('desc')->filterByIdsucursal($idsucursal)->findOne()->getCompraFechacompra('m');
            $anio_max = \CompraQuery::create()->orderByCompraFechacompra('desc')->filterByIdsucursal($idsucursal)->findOne()->getCompraFechacompra('Y');
        } else {
            $existencia = 0;
        }
        $productos = \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByProductoTipo('simple')->find();
        $proveedores = \ProveedorQuery::create()->filterByIdempresa($idempresa)->find();
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($idsucursal)->filterByAlmacenEstatus(1)->find();
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
            'existencia' => $existencia,
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

            $reporte = array();

            if (isset($post_data['generar_pdf']) || isset($post_data['generar_excel'])) {
                array_push($reporte, array('uno'  => 'Concepto', 'dos' => 'Total', 'tres' => 'Porcentaje'));
                array_push($reporte, array('uno'  => 'Ventas totales', 'dos' => $ventas_totales, 'tres' => ''));
                
                array_push($reporte, array('uno'  => 'Ventas por rubro', 'dos' => '', 'tres' => ''));
                array_push($reporte, array('uno'  => 'Alimentos', 'dos' => $ventas_alimentos, 'tres' => $porcentaje_ventas_alimentos));
                array_push($reporte, array('uno'  => 'Bebidas', 'dos' => $ventas_bebidas, 'tres' => $porcentaje_ventas_bebidas));
                array_push($reporte, array('uno'  => 'Porcentaje bruto', 'dos' => '', 'tres' => ''));
                array_push($reporte, array('uno'  => 'Alimentos', 'dos' => '', 'tres' => $porcentaje_bruto_alimentos));
                array_push($reporte, array('uno'  => 'Bebidas', 'dos' => '', 'tres' => $porcentaje_bruto_bebidas));
                array_push($reporte, array('uno'  => 'Compras del mes', 'dos' => '', 'tres' => ''));
                array_push($reporte, array('uno'  => 'Alimentos', 'dos' => $compras_alimentos, 'tres' => $porcentaje_alimentos_compras));
                array_push($reporte, array('uno'  => 'Bebidas', 'dos' => $compras_bebidas, 'tres' => $porcentaje_bebidas_compras));
                array_push($reporte, array('uno'  => 'Total', 'dos' => $compras_totales, 'tres' => $porcentaje_total_compras));
                array_push($reporte, array('uno'  => 'Venta promedio diaria', 'dos' => $venta_promedio, 'tres' => $dias_activos.' días'));
                array_push($reporte, array('uno'  => 'Consumo promedio p/empleado diario', 'dos' => '', 'tres' => ''));
                array_push($reporte, array('uno'  => 'Cortesia', 'dos' => '', 'tres' => ''));
                array_push($reporte, array('uno'  => 'Alimento', 'dos' => $cortesia_alimentos, 'tres' => ''));
                array_push($reporte, array('uno'  => 'Bebidas', 'dos' => $cortesia_bebidas, 'tres' => ''));
                array_push($reporte, array('uno'  => 'Consumo ejecutivo', 'dos' => '', 'tres' => ''));
                array_push($reporte, array('uno'  => 'Alimento', 'dos' => $ejecutivos_alimentos, 'tres' => ''));
                array_push($reporte, array('uno'  => 'Bebidas', 'dos' => '$ejecutivos_bebidas', 'tres' => ''));
                array_push($reporte, array('uno'  => 'Mermas', 'dos' => '', 'tres' => ''));
                array_push($reporte, array('uno'  => 'Alimento', 'dos' => $mermas_alimentos, 'tres' => ''));
                array_push($reporte, array('uno'  => 'Bebidas', 'dos' => $mermas_bebidas, 'tres' => ''));
                array_push($reporte, array('uno'  => 'Alimentos', 'dos' => '', 'tres' => ''));
                foreach ($array_alimentos as $key => $value) {
                    $porcentaje = ($value * 100) / $total_alimentos;
                    array_push($reporte, array('uno'  => $key, 'dos' => $value, 'tres' => $porcentaje));
                }
                array_push($reporte, array('uno'  => 'Total', 'dos' => $ventas_alimentos, 'tres' => $porcentaje_ventas_alimentos));
                array_push($reporte, array('uno'  => 'Bebidas', 'dos' => '', 'tres' => ''));
                foreach ($array_bebidas as $key => $value) {
                    $porcentaje = ($value * 100) / $total_bebidas;
                    array_push($reporte, array('uno'  => $key, 'dos' => $value, 'tres' => $porcentaje));
                }
                array_push($reporte, array('uno'  => 'Total', 'dos' => $ventas_bebidas, 'tres' => $porcentaje_ventas_bebidas));
                array_push($reporte, array('uno'  => '', 'dos' => '', 'tres' => ''));
                $template = '/informeacumulado.xlsx';
                $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
                $inicio = $post_data['fecha_inicial'];
                $fin = $post_data['fecha_final'];
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
                    ),
                    array(
                        'id' => 'reporte',
                        'data' => array('fecha' => $inicio.' - '.$fin),
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
                $bgazul = "#819FF7";
                $bgazulclaro = "#ADD8E6";
                $bgfila = "#F2F2F2";
                $bgfila2 = "#FFFFFF";
                $bgrojo = "#EA6363";
                $bgverde = "#93F995";
                array_push($reporte , "<tr bgcolor='" . $bgrojo . "'><td>Ventas totales</td><td>$ventas_totales</td><td></td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgazul . "'><td>Ventas por rubro</td><td></td><td></td></tr>");
                array_push($reporte ,"<tr bgcolor='" . $bgfila . "'><td>Alimentos</td><td>$ventas_alimentos</td><td>$porcentaje_ventas_alimentos</td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td>$ventas_bebidas</td><td>$porcentaje_ventas_bebidas</td></tr>");
                array_push($reporte ,"<tr bgcolor='" . $bgazul . "'><td>Porcentaje bruto</td><td></td><td></td></tr>");
                array_push($reporte ,"<tr bgcolor='" . $bgfila . "'><td>Alimentos</td><td></td><td>$porcentaje_bruto_alimentos</td></tr>");
                array_push($reporte ,"<tr bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td></td><td>$porcentaje_bruto_bebidas</td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgazul . "'><td>Compras del mes</td><td></td><td></td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgfila . "'><td>Alimentos</td><td>$compras_alimentos</td><td>$porcentaje_alimentos_compras</td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td>$compras_bebidas</td><td>$porcentaje_bebidas_compras</td></tr>");
                array_push($reporte , "<tr  bgcolor='" . $bgrojo . "'><td>Total</td><td>$compras_totales</td><td>$porcentaje_total_compras</td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgverde . "'><td>Venta promedio diaria</td><td>$venta_promedio</td><td>$dias_activos días</td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgazul . "'><td>Consumo promedio p/empleado diario</td><td></td><td></td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgazulclaro . "'><td>Cortesia</td><td></td><td></td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgfila . "'><td>Alimento</td><td>$cortesia_alimentos</td><td></td></tr>");
                array_push($reporte , "<tr  bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td>$cortesia_bebidas</td><td></td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgazulclaro . "'><td>Consumo ejecutivo</td><td></td><td></td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgfila . "'><td>Alimento</td><td>$ejecutivos_alimentos</td><td></td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td>$ejecutivos_bebidas</td><td></td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgazulclaro . "'><td>Mermas</td><td></td><td></td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgfila . "'><td>Alimento</td><td>$mermas_alimentos</td><td></td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgfila2 . "'><td>Bebidas</td><td>$mermas_bebidas</td><td></td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgazul . "'><td>Alimentos</td><td></td><td></td></tr>");
                $color = true;
                foreach ($array_alimentos as $key => $value) {
                    $bgcolor = ($color) ? $bgfila : $bgfila2;
                    $color = !$color;
                    $porcentaje = ($value * 100) / $total_alimentos;
                    array_push($reporte , "<tr bgcolor='" . $bgcolor . "'><td>$key</td><td>$value</td><td>$porcentaje</td></tr>");
                }
                array_push($reporte , "<tr bgcolor='" . $bgrojo . "'><td>Total</td><td>$ventas_alimentos</td><td>$porcentaje_ventas_alimentos</td></tr>");
                array_push($reporte , "<tr bgcolor='" . $bgazul . "'><td>Bebidas</td><td></td><td></td></tr>");
                $color = true;
                foreach ($array_bebidas as $key => $value) {
                    $bgcolor = ($color) ? $bgfila : $bgfila2;
                    $color = !$color;
                    $porcentaje = ($value * 100) / $total_bebidas;
                    array_push($reporte , "<tr bgcolor='" . $bgcolor . "'><td>$key</td><td>$value</td><td>$porcentaje</td></tr>");
                }
                array_push($reporte ,"<tr bgcolor='" . $bgrojo . "'><td>Total</td><td>$ventas_bebidas</td><td>$porcentaje_ventas_bebidas</td></tr>");
                return $this->getResponse()->setContent(json_encode($reporte));
            }
            exit;
        }

        //INTANCIAMOS NUESTRA VISTA
        $no_data = 0;
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
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $empresa = \EmpresaQuery::create()->findPk($session['idempresa']);  
        
        if($session['idrol'] == 5){
            if(!$empresa->getEmpresaHabilitarrecetas()){
                return $this->redirect()->toUrl("/");
            }
        }
        $categorias = \CategoriaQuery::create()->filterByIdcategoria(array('1','2','3'))->find();

        $subcatsAlimentos = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->filterByIdcategoriapadre(1)->orderByCategoriaNombre('asc')->find();
        $subcatsBebidas = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->filterByIdcategoriapadre(2)->orderByCategoriaNombre('asc')->find();
        $subcatsGastos = \CategoriaQuery::create()->filterByCategoriaAlmacenable(1)->filterByIdcategoriapadre(3)->orderByCategoriaNombre('asc')->find();
        
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/reportes/recetas/index');
        $view_model->setVariables(array(
            'categorias' => $categorias,
            'subcatsAlimentos' => $subcatsAlimentos,
            'subcatsBebidas' => $subcatsBebidas,
            'subcatsGastos' => $subcatsGastos,
        ));
        return $view_model;
    }

    public function recetasdetalleAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $request = $this->getRequest();
        $archivo = false;
        $idcategorias=array();
        $post_data = $request->getPost();
        if(isset($post_data['generar_excel'])||isset($post_data['generar_pdf'])) {
            $formato = (isset($post_data['generar_pdf'])) ? "PDF" : "excel";
            $archivo = true;
            foreach ($post_data as $key => $value) {
                if (strpos($key, '-'))
                    array_push($idcategorias, substr($key, 9));
            }
        } else {
        foreach ($post_data['subcat'] as $key => $value) {
                if (strpos($value, '-'))
                    array_push($idcategorias, substr($value, 9));
            }
        }
        $reporte = array();
        $productosObj = \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByProductoTipo(array('subreceta', 'plu'))->filterByIdsubcategoria($idcategorias)->orderByProductoNombre('asc')->find();
        $productoObj = new \Producto();
        foreach ($productosObj as $productoObj) {
            $recetasObj = \RecetaQuery::create()->filterByIdproducto($productoObj->getIdproducto())->find();
            $recetaObj = new \Receta();
            $idProducto = $productoObj->getIdproducto();
            $unidad= $productoObj->getUnidadmedida()->getUnidadmedidaNombre();
            $nombreProducto = $productoObj->getProductoNombre();
            $totalReceta = 0;
            $bgazulclaro = "#ADD8E6";
            $bgazul = "#819FF7";
            if ($archivo) {
                array_push($reporte, array('uno' => 'Clave:', 'dos' => $idProducto, 'tres' => 'Producto', 'cuatro' => $nombreProducto, 'cinco' => 'Unidad:', 'seis' => $unidad, 'siete' => '','ocho'=>'','nueve'=>''));
                array_push($reporte, array('uno' => 'ProdPadre','dos'=>'Unidad', 'tres' => 'ProdHijo','cuatro'=>'Unidad', 'cinco' => 'Tipo', 'seis' => 'Clave', 'siete' => 'Cantidad', 'ocho' => 'Costo', 'nueve' => 'Total'));
            } else {
                array_push($reporte, "<tr bgcolor='" . $bgazul . "'><td>Clave:</td><td>$idProducto</td><td>Producto:</td><td>$nombreProducto</td><td>Unidad:</td><td>$unidad</td><td></td><td></td><td></td></tr>");
                array_push($reporte, "<tr bgcolor='" . $bgazulclaro . "'><td>ProdPadre</td><td>Unidad</td><td>ProdHijo</td><td>Unidad</td><td>Tipo</td><td>Clave</td><td>Cantidad</td><td>Costo</td><td>Total</td></tr>");
            }
            $color = true;
            foreach ($recetasObj as $recetaObj) {
                $producto = \ProductoQuery::create()->filterByIdproducto($recetaObj->getIdproductoreceta())->findOne();
                $clave = $producto->getIdproducto();
                $nombre = $producto->getProductoNombre();
                $unidad = $producto->getUnidadmedida()->getUnidadmedidaNombre();
                $cantidad = $recetaObj->getRecetaCantidad();
                $costo = $producto->getProductoCosto();
                $tipo = $producto->getProductoTipo();
                $total = $costo * $cantidad;
                if ($producto->getProductoTipo() == 'subreceta' || $producto->getProductoTipo() == 'plu') {
                    $recetasDetalleObj = \RecetaQuery::create()->filterByIdproducto($producto->getIdproducto())->find();
                    $recetaDetalleObj = new \Receta();
                    foreach ($recetasDetalleObj as $recetaDetalleObj) {
                        $productoDetalle = \ProductoQuery::create()->filterByIdproducto($recetaDetalleObj->getIdproductoreceta())->findOne();
                        $claveDetalle = $productoDetalle->getIdproducto();
                        $nombreDetalle = $productoDetalle->getProductoNombre();
                        $cantidadDetalle = $recetaDetalleObj->getRecetaCantidad()*$cantidad;
                        $unidadDetalle = $productoDetalle->getUnidadmedida()->getUnidadmedidaNombre();
                        $costoDetalle = $productoDetalle->getProductoCosto();
                        $totalDetalle = $costoDetalle * $cantidadDetalle;
                        //if($productoDetalle->getProductoTipo()!="simple")
                        $totalReceta+=$totalDetalle;
                        $tipoDetalle = $productoDetalle->getProductoTipo();
                        $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                        $color = !$color;
                        if ($archivo) {
                            array_push($reporte, array('uno' => $nombre, 'dos' => $unidad, 'tres' => $nombreDetalle, 'cuatro' => $unidadDetalle ,'cinco' => $tipoDetalle, 'seis' => $claveDetalle, 'siete' => $cantidadDetalle, 'ocho' => $costoDetalle, 'nueve' => $totalDetalle));
                        } else {
                            array_push($reporte, "<tr bgcolor='" . $bg . "'><td>$nombre</td><td>$unidad</td><td>$nombreDetalle</td><td>$unidadDetalle</td><td>$tipoDetalle</td><td>$claveDetalle</td><td>$cantidadDetalle</td><td>$costoDetalle</td><td>$totalDetalle</td></tr>");
                        }
                    }
                } else {
                    $totalReceta+=$total;
                    $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                    $color = !$color;
                    if ($archivo) {
                        array_push($reporte, array('uno' => '', 'dos'=>'','tres' => $nombre,'cuatro'=>$unidad, 'cinco' => $tipo, 'seis' => $clave, 'siete' => $cantidad, 'ocho' => $costo, 'nueve' => $total));
                    } else {
                        array_push($reporte, "<tr bgcolor='" . $bg . "'><td></td><td></td><td>$nombre</td><td>$unidad</td><td>$tipo</td><td>$clave</td><td>$cantidad</td><td>$costo</td><td>$total</td></tr>");
                    }
                }
            }
            if ($archivo) {
                array_push($reporte, array('uno' => '', 'dos' => '', 'tres' => '', 'cuatro' => '', 'cinco' => '','seis'=>'','siete'=>'', 'ocho' => 'Total', 'nueve' => $totalReceta));
            } else {
                array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td>Total</td><td>$totalReceta</td></tr>");
            }
        }
        $fecha = date('d/m/Y');
        $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
        $sucursal = \SucursalQuery::create()->filterByIdsucursal($idsucursal)->findOne()->getSucursalNombre();
        if ($archivo) {
            $template = '/recetaresdetallada2.xlsx';
            $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
            $config = array(
                'template' => $template,
                'templateDir' => $templateDir
            );
            $R = new \PHPReport($config);
            $R->load(array(
                array(
                    'id' => 'compania',
                    'data' => array('nombre' => $empresa),
                ),
                array(
                    'id' => 'reporte',
                    'data' => array('fecha' => $fecha),
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
            echo $R->render($formato);
            exit();
        } else {
            return $this->getResponse()->setContent(json_encode($reporte));
            $view_model = new ViewModel();
            $view_model->setVariables(array(
                'fecha' => $fecha,
                'empresa' => $empresa,
                'sucursal' => $sucursal,
                'reporte' => $reporte,
            ));
            $view_model->setTemplate('/application/reportes/recetas/detalle');
            return $view_model;
        }
        exit;
    }

    public function recetasresumenAction() {
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $reporte = array();
        $archivo = false;
        $request = $this->getRequest();
        $idcategorias=array();
        $post_data = $request->getPost();
//        foreach ($post_data['subcat'] as $key => $value) {
//                if (strpos($value, '-'))
//                    array_push($idcategorias, substr($value, 9));
//            }
        
        if(isset($post_data['generar_excel'])||isset($post_data['generar_pdf'])) {
            $formato = (isset($post_data['generar_pdf'])) ? "PDF" : "excel";
            $archivo = true;
            foreach ($post_data as $key => $value) {
                if (strpos($key, '-'))
                    array_push($idcategorias, substr($key, 9));
            }
        } else {
        foreach ($post_data['subcat'] as $key => $value) {
                if (strpos($value, '-'))
                    array_push($idcategorias, substr($value, 9));
            }
        }
        
       
//        if ($request->isPost()) {
//            
//            $formato = (isset($post_data['generar_pdf'])) ? "PDF" : "excel";
//            $archivo = true;
//        }
            
        $productosObj = \ProductoQuery::create()->filterByIdempresa($idempresa)->filterByProductoTipo(array('subreceta', 'plu'))->filterByIdsubcategoria($idcategorias)->orderByProductoNombre('asc')->find();
        $productoObj = new \Producto();
        foreach ($productosObj as $productoObj) {
            $recetasObj = \RecetaQuery::create()->filterByIdproducto($productoObj->getIdproducto())->find();
            $recetaObj = new \Receta();
            $idProducto = $productoObj->getIdproducto();
            $unidad=$productoObj->getUnidadmedida()->getUnidadmedidaNombre();
            $nombreProducto = $productoObj->getProductoNombre();
            $totalReceta = 0;
            $bgazulclaro = "#ADD8E6";
            $bgazul = "#819FF7";
            if ($archivo) {
                array_push($reporte, array('uno' => 'Clave:', 'dos' => $idProducto, 'tres' => 'Producto', 'cuatro' => $nombreProducto, 'cinco' => 'Unidad', 'seis' => $unidad));
                array_push($reporte, array('uno' => 'Clave', 'dos' => 'Nombre Producto', 'tres' => 'Cantidad', 'cuatro' => 'Unidad', 'cinco' => 'Costo', 'seis' => 'Total'));
            } else {
                array_push($reporte, "<tr bgcolor='" . $bgazul . "'><td>Clave:</td><td>$idProducto</td><td>Producto:</td><td>$nombreProducto</td><td>Unidad:</td><td>$unidad</td></tr>");
                array_push($reporte, "<tr bgcolor='" . $bgazulclaro . "'><td>Clave</td><td>Nombre Producto</td><td>Cantidad</td><td>Unidad</td><td>Costo</td><td>Total</td></tr>");
            }
            $color = true;
            foreach ($recetasObj as $recetaObj) {
                $producto = \ProductoQuery::create()->filterByIdproducto($recetaObj->getIdproductoreceta())->findOne();
                $clave = $producto->getIdproducto();
                $nombre = $producto->getProductoNombre();
                $cantidad = $recetaObj->getRecetaCantidad();
                $unidad = $producto->getUnidadmedida()->getUnidadmedidaNombre();
                $costo = $producto->getProductoCosto();
                $total = $costo * $cantidad;
                $totalReceta+=$total;
                $bg = ($color) ? '#FFFFFF' : '#F2F2F2';
                $color = !$color;
                if ($archivo)
                    array_push($reporte, array('uno' => $clave, 'dos' => $nombre, 'tres' => $cantidad, 'cuatro' => $unidad, 'cinco' => $costo, 'seis' => $total));
                else
                    array_push($reporte, "<tr bgcolor='" . $bg . "'><td>$clave</td><td>$nombre</td><td>$cantidad</td><td>$unidad</td><td>$costo</td><td>$total</td></tr>");
            }
            if ($archivo)
                array_push($reporte, array('uno' => '', 'dos' => '', 'tres' => '', 'cuatro' => '', 'cinco' => 'Total', 'seis' => $totalReceta));
            else
                array_push($reporte, "<tr><td></td><td></td><td></td><td></td><td>Total</td><td>$totalReceta</td></tr>");
        }
        $fecha = date('d/m/Y');
        $empresa = \EmpresaQuery::create()->filterByIdempresa($idempresa)->findOne()->getEmpresaNombrecomercial();
        $sucursal = \SucursalQuery::create()->filterByIdsucursal($idsucursal)->findOne()->getSucursalNombre();
        if ($archivo) {
            $template = '/recetaresresumen2.xlsx';
            $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
            $config = array(
                'template' => $template,
                'templateDir' => $templateDir
            );
            $R = new \PHPReport($config);
            $R->load(array(
                array(
                    'id' => 'compania',
                    'data' => array('nombre' => $empresa),
                ),
                array(
                    'id' => 'reporte',
                    'data' => array('fecha' => $fecha),
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
            echo $R->render($formato);
            exit();
        } else {
            return $this->getResponse()->setContent(json_encode($reporte));
            exit;
            $view_model = new ViewModel();
            $view_model->setVariables(array(
                'fecha' => $fecha,
                'empresa' => $empresa,
                'sucursal' => $sucursal,
                'reporte' => $reporte,
            ));
            $view_model->setTemplate('/application/reportes/recetas/resumen');
            return $view_model;
        }
        exit;
    }

}

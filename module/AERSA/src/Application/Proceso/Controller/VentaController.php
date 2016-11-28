<?php

namespace Application\Proceso\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class VentaController extends AbstractActionController {

    public function indexAction() 
    {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);

        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();

        $collection = \VentaQuery::create()->filterByIdsucursal($session['idsucursal'])->orderByVentaFechaventa(\Criteria::DESC)->find();

        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/venta/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'idrol' => $session['idrol'],
        ));
        return $view_model;
    }
    
    public function nuevoproductoAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $entity = new \Producto();
            foreach ($post_data as $key => $value){
                if(\ProductoPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value,  \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            $entity->setIdempresa($session['idempresa']);
            $entity->save();
            $entity_array = $entity->toArray(\BasePeer::TYPE_FIELDNAME);
            
            $almacen = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->find();
            $almacen_array = \Shared\GeneralFunctions::collectionToSelectArray($almacen, 'idalmacen', 'almacen_nombre');
            $habilitar_unidad = \ProductoQuery::create()->filterByIdproducto($entity->getIdproducto())->filterByProductoTipo(array('plu','subreceta'))->filterByIdcategoria(2)->exists();
            
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $entity_array, 'almacenes' => $almacen_array,'habilitar_unidad' => $habilitar_unidad)));
        }
        
    }
    
    public function nuevosubrecetaAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
            
            
            //ASIGNAMOS EL PRODUCTO AL ALMACEN
            
            $productosucrusalalmacen = new \Productosucursalalmacen();
            $productosucrusalalmacen->setIdproducto($post_data['idproducto'])
                                    ->setIdalmacen($post_data['idalmacen'])
                                    ->setIdsucursal($session['idsucursal'])
                                    ->setIdempresa($session['idempresa'])
                                    ->save();
            
                             
            
            $tmp['idproducto'] = $post_data['idproducto'];
            $tmp['idalmacen'] = $post_data['idalmacen'];
            $tmp['almacen_nombre'] = $productosucrusalalmacen->getAlmacen()->getAlmacenNombre();
            $tmp['receta']= array();
            
            //VALIDAMOS SI EL PRODUCTO TIENE RECETA
            if(isset($post_data['subreceta'])){
                foreach ($post_data['subreceta'] as $detalle){
                    $receta = new \Receta();
                    $receta->setIdproducto($post_data['idproducto'])
                           ->setIdproductoreceta($detalle['idproducto'])
                           ->setRecetaCantidad($detalle['receta_cantidad'])
                           ->setRecetaCantidadoriginal($detalle['receta_cantidadoriginal'])
                           ->setRecetaUnidad($detalle['receta_unidad'])
                           ->save();
                }
                
                $receta = \RecetaQuery::create()->filterByIdproducto($post_data['idproducto'])->find();
                $detalle = new \Receta();
                foreach ($receta as $detalle){
                    $tmp2['idproducto'] = $detalle->getIdproductoreceta();
                    $tmp2['producto'] = $detalle->getProductoRelatedByIdproductoreceta()->getProductoNombre();
                    $tmp2['cantidad'] = $detalle->getRecetaCantidad() * $post_data['cantidad'];
                    $tmp['receta'][] = $tmp2;
                }
                
              
                
            }
            
            
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $tmp)));
            
           
        }
    }
    
    public function nuevoAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $post_data["venta_fechaventa"] = date_create_from_format('d/m/Y', $post_data["venta_fechaventa"]);
            
            $entity = new \Venta();
            foreach ($post_data as $key => $value){
                if(\VentaPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value,  \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //SETEAMOS LA FECHA DE CREACION
            $entity->setVentaFechacreacion(new \DateTime())
                   ->setIdempresa($session['idempresa'])
                   ->setIdsucursal($session['idsucursal'])
                   ->setIdusuario($session['idusuario']);
           
            if($post_data['venta_revisada']){
                $entity->setIdauditor($session['idusuario']);
            }
           
            $entity->save();
            
            //DETALLES
            foreach ($post_data['productos'] as $producto){
                $venta_detalle = new \Ventadetalle();
                $venta_detalle->setIdventa($entity->getIdventa())
                              ->setVentadetalleRevisada(0)
                              ->setIdalmacen($producto['idalmacen'])
                              ->setIdproducto($producto['idproducto'])
                              ->setVentadetalleCantidad($producto['cantidad'])
                              ->setVentadetalleSubtotal($producto['subtotal']);
                
                if(isset($producto['revisada'])){
                    $venta_detalle->setVentadetalleRevisada(1);
                }
                
                $productocontable = \ProductoQuery::create()->filterByIdproducto($producto['idproducto'])->findOne()->getProductoTipo();

                if($productocontable =='simple'){
                    $venta_detalle->setVentadetalleContable(1);
                }
                
                $venta_detalle->save();
                
                //SI TIENE RECETA
                $producto = \ProductoQuery::create()->findPk($producto['idproducto']);
                $has_receta = \RecetaQuery::create()->filterByIdproducto($producto->getIdproducto())->exists();
                if($has_receta){
                    $receta = \RecetaQuery::create()->filterByIdproducto($producto->getIdproducto())->find();
                    $detalle = new \Receta();
                    foreach ($receta as $detalle){
                        $venta_detalle_receta = new \Ventadetalle();
                        $venta_detalle_receta->setIdventa($entity->getIdventa())
                                             ->setVentadetalleRevisada($venta_detalle->getVentadetalleRevisada())
                                             ->setIdalmacen($venta_detalle->getIdalmacen())
                                             ->setIdproducto($detalle->getIdproductoreceta())
                                             ->setVentadetalleCantidad($detalle->getRecetaCantidad() * $venta_detalle->getVentadetalleCantidad())
                                             ->setVentadetalleSubtotal(0)
                                             ->setIdpadre($venta_detalle->getIdventadetalle());
                        
                      
                        if($detalle->getProductoRelatedByIdproductoreceta()->getProductoTipo() == 'simple'){
                            $venta_detalle_receta->setVentadetalleContable(1);
                        }
                        $venta_detalle_receta->save();
                        $idpadre1=$venta_detalle_receta->getIdventadetalle();
                        $productorecnivel2= $detalle->getIdproductoreceta();
                        
                        //receta 2do nivel
                        $productonivel2 = \ProductoQuery::create()->findPk($productorecnivel2);
                        
                        $has_recetanivel2 = \RecetaQuery::create()->filterByIdproducto($productonivel2->getIdproducto())->exists();
                        if($has_recetanivel2){
                            
                            $receta2 = \RecetaQuery::create()->filterByIdproducto($productonivel2->getIdproducto())->find();
                            $detalle2 = new \Receta();
                            foreach ($receta2 as $detalle2){
                                //var_dump("his");
                                //exit();
                                $venta_detalle_receta = new \Ventadetalle();
                                $venta_detalle_receta->setIdventa($entity->getIdventa())
                                ->setVentadetalleRevisada($venta_detalle->getVentadetalleRevisada())
                                ->setIdalmacen($venta_detalle->getIdalmacen())
                                ->setIdproducto($detalle2->getIdproductoreceta())
                                ->setVentadetalleCantidad($detalle2->getRecetaCantidad() * $venta_detalle->getVentadetalleCantidad())
                                ->setVentadetalleSubtotal(0)
                                ->setIdpadre($idpadre1);
                                
                                if($detalle2->getProductoRelatedByIdproductoreceta()->getProductoTipo() == 'simple'){
                                    $venta_detalle_receta->setVentadetalleContable(1);
                                }
                                $venta_detalle_receta->save();
                                
                                $productorecnivel3= $detalle2->getIdproductoreceta();
                                $cantidadpadre2=$detalle2->getRecetaCantidad() * $venta_detalle->getVentadetalleCantidad();
                                $idpadre2=$venta_detalle_receta->getIdventadetalle();
                                //receta 3er nivel
                                $productonivel3 = \ProductoQuery::create()->findPk($productorecnivel3);
                                
                                $has_recetanivel3 = \RecetaQuery::create()->filterByIdproducto($productonivel3->getIdproducto())->exists();
                                
                                if($has_recetanivel3){
                                    $receta3 = \RecetaQuery::create()->filterByIdproducto($productonivel3->getIdproducto())->find();
                                    $detalle3 = new \Receta();
                                    foreach ($receta3 as $detalle3){
                                        //var_dump("his");
                                        //exit();
                                        $venta_detalle_receta = new \Ventadetalle();
                                        $venta_detalle_receta->setIdventa($entity->getIdventa())
                                        ->setVentadetalleRevisada($venta_detalle->getVentadetalleRevisada())
                                        ->setIdalmacen($venta_detalle->getIdalmacen())
                                        ->setIdproducto($detalle3->getIdproductoreceta())
                                        //->setVentadetalleCantidad($detalle3->getRecetaCantidad() * $venta_detalle->getVentadetalleCantidad())
                                        ->setVentadetalleCantidad($detalle3->getRecetaCantidad()* $cantidadpadre2)
                                        ->setVentadetalleSubtotal(0)
                                        ->setIdpadre($idpadre2);
                                        
                                        if($detalle3->getProductoRelatedByIdproductoreceta()->getProductoTipo() == 'simple'){
                                            $venta_detalle_receta->setVentadetalleContable(1);
                                        }
                                        $venta_detalle_receta->save();
                                        
                                        $productorecnivel4= $detalle3->getIdproductoreceta();
                                        $cantidadpadre3=$detalle3->getRecetaCantidad() * $cantidadpadre2;
                                        $idpadre3=$venta_detalle_receta->getIdventadetalle();
                                        //receta 4to nivel
                                        $productonivel4 = \ProductoQuery::create()->findPk($productorecnivel4);
                                        
                                        $has_recetanivel4 = \RecetaQuery::create()->filterByIdproducto($productonivel4->getIdproducto())->exists();
                                        
                                        if($has_recetanivel4){
                                            $receta4 = \RecetaQuery::create()->filterByIdproducto($productonivel4->getIdproducto())->find();
                                            $detalle4 = new \Receta();
                                            foreach ($receta4 as $detalle4){
                                                //var_dump("his");
                                                //exit();
                                                $venta_detalle_receta = new \Ventadetalle();
                                                $venta_detalle_receta->setIdventa($entity->getIdventa())
                                                ->setVentadetalleRevisada($venta_detalle->getVentadetalleRevisada())
                                                ->setIdalmacen($venta_detalle->getIdalmacen())
                                                ->setIdproducto($detalle4->getIdproductoreceta())
                                                //->setVentadetalleCantidad($detalle4->getRecetaCantidad() * $venta_detalle->getVentadetalleCantidad())
                                                ->setVentadetalleCantidad($detalle4->getRecetaCantidad()* $cantidadpadre3)
                                                ->setVentadetalleSubtotal(0)
                                                ->setIdpadre($idpadre3);
                                                
                                               if($detalle4->getProductoRelatedByIdproductoreceta()->getProductoTipo() == 'simple'){
                                                    $venta_detalle_receta->setVentadetalleContable(1);
                                                }
                                                $venta_detalle_receta->save();
                                                
                                                $productorecnivel5= $detalle4->getIdproductoreceta();
                                                $cantidadpadre4=$detalle4->getRecetaCantidad() * $cantidadpadre3;
                                                $idpadre4=$venta_detalle_receta->getIdventadetalle();
                                                //receta 5to nivel
                                                $productonivel5 = \ProductoQuery::create()->findPk($productorecnivel5);
                                                
                                                $has_recetanivel5 = \RecetaQuery::create()->filterByIdproducto($productonivel5->getIdproducto())->exists();
                                                
                                                if($has_recetanivel5){
                                                    $receta5 = \RecetaQuery::create()->filterByIdproducto($productonivel5->getIdproducto())->find();
                                                    $detalle5 = new \Receta();
                                                    foreach ($receta5 as $detalle5){
                                                        //var_dump("his");
                                                        //exit();
                                                        $venta_detalle_receta = new \Ventadetalle();
                                                        $venta_detalle_receta->setIdventa($entity->getIdventa())
                                                        ->setVentadetalleRevisada($venta_detalle->getVentadetalleRevisada())
                                                        ->setIdalmacen($venta_detalle->getIdalmacen())
                                                        ->setIdproducto($detalle5->getIdproductoreceta())
                                                        //->setVentadetalleCantidad($detalle5->getRecetaCantidad() * $venta_detalle->getVentadetalleCantidad())
                                                        ->setVentadetalleCantidad($detalle5->getRecetaCantidad()* $cantidadpadre4)
                                                        ->setVentadetalleSubtotal(0)
                                                        ->setIdpadre($idpadre4);
                                                        
                                                        if($detalle5->getProductoRelatedByIdproductoreceta()->getProductoTipo() == 'simple'){
                                                            $venta_detalle_receta->setVentadetalleContable(1);
                                                        }
                                                        $venta_detalle_receta->save();
                                                        
                                                        
                                                        $productorecnivel6= $detalle5->getIdproductoreceta();
                                                        $cantidadpadre5=$detalle5->getRecetaCantidad() * $cantidadpadre4;
                                                        $idpadre5=$venta_detalle_receta->getIdventadetalle();
                                                        //receta 6to nivel
                                                        $productonivel6 = \ProductoQuery::create()->findPk($productorecnivel6);
                                                        
                                                        $has_recetanivel6 = \RecetaQuery::create()->filterByIdproducto($productonivel6->getIdproducto())->exists();
                                                        if($has_recetanivel6){
                                                            $receta6 = \RecetaQuery::create()->filterByIdproducto($productonivel6->getIdproducto())->find();
                                                            $detalle6 = new \Receta();
                                                            foreach ($receta6 as $detalle6){
                                                                //var_dump("his");
                                                                //exit();
                                                                $venta_detalle_receta = new \Ventadetalle();
                                                                $venta_detalle_receta->setIdventa($entity->getIdventa())
                                                                ->setVentadetalleRevisada($venta_detalle->getVentadetalleRevisada())
                                                                ->setIdalmacen($venta_detalle->getIdalmacen())
                                                                ->setIdproducto($detalle6->getIdproductoreceta())
                                                                //->setVentadetalleCantidad($detalle6->getRecetaCantidad() * $venta_detalle->getVentadetalleCantidad())
                                                                ->setVentadetalleCantidad($detalle6->getRecetaCantidad()* $cantidadpadre5)
                                                                ->setVentadetalleSubtotal(0)
                                                                ->setIdpadre($idpadre5);
                                                                
                                                                if($detalle6->getProductoRelatedByIdproductoreceta()->getProductoTipo() == 'simple'){
                                                                    $venta_detalle_receta->setVentadetalleContable(1);
                                                                }
                                                                $venta_detalle_receta->save();
                                                                
                                                                $productorecnivel7= $detalle6->getIdproductoreceta();
                                                                $cantidadpadre6=$detalle6->getRecetaCantidad() * $cantidadpadre5;
                                                                $idpadre6=$venta_detalle_receta->getIdventadetalle();
                                                                //receta 7mo nivel
                                                                $productonivel7 = \ProductoQuery::create()->findPk($productorecnivel7);
                                                                
                                                                $has_recetanivel7 = \RecetaQuery::create()->filterByIdproducto($productonivel7->getIdproducto())->exists();
                                                                if($has_recetanivel7){
                                                                    $receta7 = \RecetaQuery::create()->filterByIdproducto($productonivel7->getIdproducto())->find();
                                                                    $detalle7 = new \Receta();
                                                                    foreach ($receta7 as $detalle7){
                                                                        //var_dump("his");
                                                                        //exit();
                                                                        echo "idprod: ".$detalle7->getIdproductoreceta();
                                                                        $venta_detalle_receta = new \Ventadetalle();
                                                                        $venta_detalle_receta->setIdventa($entity->getIdventa())
                                                                        ->setVentadetalleRevisada($venta_detalle->getVentadetalleRevisada())
                                                                        ->setIdalmacen($venta_detalle->getIdalmacen())
                                                                        ->setIdproducto($detalle7->getIdproductoreceta())
                                                                        //->setVentadetalleCantidad($detalle7->getRecetaCantidad() * $venta_detalle->getVentadetalleCantidad())
                                                                        ->setVentadetalleCantidad($detalle7->getRecetaCantidad()* $cantidadpadre6)
                                                                        ->setVentadetalleSubtotal(0)
                                                                        ->setIdpadre($idpadre6);
                                                                        
                                                                        if($detalle7->getProductoRelatedByIdproductoreceta()->getProductoTipo() == 'simple'){
                                                                            $venta_detalle_receta->setVentadetalleContable(1);
                                                                        }
                                                                        $venta_detalle_receta->save();
                                                                        
                                                                        $productorecnivel8= $detalle7->getIdproductoreceta();
                                                                        $cantidadpadre7=$detalle7->getRecetaCantidad() * $cantidadpadre6;
                                                                        $idpadre7=$venta_detalle_receta->getIdventadetalle();
                                                                        //receta 6to nivel
                                                                        $productonivel8 = \ProductoQuery::create()->findPk($productorecnivel8);
                                                                        
                                                                        $has_recetanivel8 = \RecetaQuery::create()->filterByIdproducto($productonivel8->getIdproducto())->exists();
                                                                        if($has_recetanivel8){
                                                                            
                                                                            $receta8 = \RecetaQuery::create()->filterByIdproducto($productonivel8->getIdproducto())->find();
                                                                            $detalle8 = new \Receta();
                                                                            foreach ($receta8 as $detalle8){
                                                                                //var_dump("his");
                                                                                //exit();
                                                                                $venta_detalle_receta = new \Ventadetalle();
                                                                                $venta_detalle_receta->setIdventa($entity->getIdventa())
                                                                                ->setVentadetalleRevisada($venta_detalle->getVentadetalleRevisada())
                                                                                ->setIdalmacen($venta_detalle->getIdalmacen())
                                                                                ->setIdproducto($detalle8->getIdproductoreceta())
                                                                                //->setVentadetalleCantidad($detalle7->getRecetaCantidad() * $venta_detalle->getVentadetalleCantidad())
                                                                                ->setVentadetalleCantidad($detalle8->getRecetaCantidad()* $cantidadpadre7)
                                                                                ->setVentadetalleSubtotal(0)
                                                                                ->setIdpadre($idpadre7);
                                                                                
                                                                                if($detalle8->getProductoRelatedByIdproductoreceta()->getProductoTipo() == 'simple'){
                                                                                    $venta_detalle_receta->setVentadetalleContable(1);
                                                                                }
                                                                                $venta_detalle_receta->save();
                                                                                
                                                                            }
                                                                        }
                                                                    }
                                                                }
                                                                
                                                            }
                                                            
                                                        }
                                                        
                                                    }
                                                    
                                                }
                                            }
                                            
                                        }
                                        
                                    }
                                }
                                
                            }
                        }
                    }
                }
                              
            }
            
            //REDIRECCIONAMOS AL LISTADO
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/venta');
           
        }
        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();
        
        $form = new \Application\Proceso\Form\VentaForm();
        
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/venta/nuevo');
        $view_model->setVariables(array(
            'form' => $form,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'idrol' => $session['idrol'],
        ));

        return $view_model;
    }
    
    public function validatefolioAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $folio = $this->params()->fromQuery('folio');
        $edit = (!is_null($this->params()->fromQuery('edit'))) ?$this->params()->fromQuery('edit') : false;
        
        if($edit){
            
             $id = $this->params()->fromQuery('id');
             $entity = \VentaQuery::create()->findPk($id);
             
             $exist = \VentaQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByVentaFolio($entity->getVentaFolio(),  \Criteria::NOT_EQUAL)->filterByVentaFolio($folio,  \Criteria::LIKE)->exists();
        }else{
            $exist = \VentaQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByVentaFolio($folio,  \Criteria::EQUAL)->exists();
        }
        
        return $this->getResponse()->setContent(json_encode($exist));
    }
    
    public function validateproductexistAction(){
        
        

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            $exist = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre($post_data['product_name'],  \Criteria::LIKE)->exists();
            
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'exist' => $exist)));

                       
        }
        
        
        
    }
    
    public function renameproductAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $producto = \ProductoQuery::create()->findPk($post_data['idproduct']);
            $producto->setProductoNombre($post_data['product_name']);
            $producto->save();
            
            return $this->getResponse()->setContent(json_encode(array('response' => true)));
        }
        
    }
    
    public function validateproductAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
            $date = date_create_from_format('d/m/Y H:i', $post_data['venta_fecha']." 00:00");
            
            
            $producto_nombe = $post_data['producto_nombre'];
            $producto_cantidad = $post_data['producto_cantidad'];
            $producto_subtotal = $post_data['producto_subtotal'];
            $producto_preciounitario = 0;
            if($producto_cantidad != 0){
                $producto_preciounitario = $producto_subtotal / $producto_cantidad;
            }
            
            

            //VALIDAMOS SI EXISTE EL PRODUCTO
            $exist = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre($producto_nombe)->exists();
            
            //SI EXISTE
            if($exist){
                $producto = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre($producto_nombe)->findOne();
               
                $productosucursalalmacen = \ProductosucursalalmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByIdproducto($producto->getIdproducto())->findOne();
                $inventario_exist = \InventariomesQuery::create()->filterByIdalmacen($productosucursalalmacen->getIdalmacen())->filterByInventariomesFecha($date,  \Criteria::GREATER_EQUAL)->exists();
                if($inventario_exist){
                    return $this->getResponse()->setContent(json_encode(array('response' => false, 'create' => false, 'rename' => false, 'msg' => "No es posible afectar un almacén que cuenta con inventario de cierre de semana”")));
                }
                
                
                $type = $producto->getProductoTipo();
                //SI EL PRODUCTO ES PLU
                if($type == 'plu'){

                    $almacen = $productosucursalalmacen->getAlmacen();
                    
                    $tmp['idproducto'] = $producto->getIdproducto();
                    $tmp['producto'] = $producto->getProductoNombre();
                    $tmp['idalmacen'] = $almacen->getIdalmacen();
                    $tmp['almacen_nombre'] = $almacen->getAlmacenNombre();
                    $tmp['cantidad'] = $producto_cantidad;
                    $tmp['precio_unitario'] = $producto_preciounitario;
                    $tmp['subtotal'] = $producto_subtotal;
                    $tmp['receta'] = array();
                    
                    //VERIFICAMOS SI EL PRODUCTO TIENE RECETA
                    $has_receta = \RecetaQuery::create()->filterByIdproducto($producto->getIdproducto())->exists();
                    if($has_receta){
                        $receta = \RecetaQuery::create()->filterByIdproducto($producto->getIdproducto())->find();
                        $detalle = new \Receta();
                        foreach ($receta as $detalle){
                            $tmp2['idproducto'] = $detalle->getIdproductoreceta();
                            $tmp2['producto'] = $detalle->getProductoRelatedByIdproductoreceta()->getProductoNombre();
                            $tmp2['cantidad'] = $detalle->getRecetaCantidad() * $producto_cantidad;
                            $tmp['receta'][] = $tmp2;
                        }
                    }
                    return $this->getResponse()->setContent(json_encode(array('response' => true, 'create' => false, 'rename' => false, 'data' => $tmp)));
                //SI EL PRODUCTO NO ES PLU    
                }else{
                    $tmp['idproducto'] = $producto->getIdproducto();
                    $tmp['producto'] = $producto_nombe;
                    $tmp['cantidad'] = $producto_cantidad;
                    $tmp['precio_unitario'] = $producto_preciounitario;
                    $tmp['subtotal'] = $producto_subtotal;
                    return $this->getResponse()->setContent(json_encode(array('response' => true, 'create' => false, 'rename' => true, 'data' => $tmp)));
                }
            //SI NO EXISTE EL PRODUCTO    
            }else{
                $tmp['producto'] = $producto_nombe;
                $tmp['cantidad'] = $producto_cantidad;
                $tmp['subtotal'] = $producto_subtotal;
                
                return $this->getResponse()->setContent(json_encode(array('response' => true, 'create' => true, 'rename' => false, 'data' => $tmp)));
               
            }
            
        }
        
    }
    
    public function getrecetaAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            
            $receta = \RecetaQuery::create()->joinProductoRelatedByIdproductoreceta()->withColumn('producto_nombre')->filterByIdproducto($post_data['idproducto'])->find()->toArray();
            
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $receta)));
        }
    }


    public function editarAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        
        //VERIFICAMOS SI EXISTE
        $exist = \VentaQuery::create()->filterByIdventa($id)->exists();
        
        if ($exist) {
            
             // OBTENEMOS EL MES Y EL ANIO ACTIVO DE LA SUCURSAL
            $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
            $anio_activo = $sucursal->getSucursalAnioactivo();
            $mes_activo = $sucursal->getSucursalMesactivo();
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \VentaQuery::create()->findPk($id);
            
            if($request->isPost()){
                
                $post_data = $request->getPost();
                
                $post_data["venta_fechaventa"] = date_create_from_format('d/m/Y', $post_data["venta_fechaventa"]);

                foreach ($post_data as $key => $value){
                    if(\VentaPeer::getTableMap()->hasColumn($key)){
                        $entity->setByName($key, $value,  \BasePeer::TYPE_FIELDNAME);
                    }
                }
                
                if($post_data['venta_revisada']){
                    $entity->setIdauditor($session['idusuario']);
                }

                $entity->save();
                
                //REDIRECCIONAMOS AL LISTADO
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/procesos/venta');
                        
                
            }
            
            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Proceso\Form\VentaForm();
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            //CAMBIAMOS LOS VALORES DE FECHAS
            $form->get('venta_fechaventa')->setValue($entity->getVentaFechaventa('d/m/Y'));
            
            //LE PONEMOS LA CLASE VALID AL FOLIO
            $form->get('venta_folio')->setAttribute('class', 'form-control valid');
            
            //LOS DETALLES DE LA DEVOLUCION
            $detalles = \VentadetalleQuery::create()->filterByIdventa($entity->getIdventa())->filterByIdpadre(NULL,  \Criteria::EQUAL)->find();
            
            $view_model = new ViewModel();
            $view_model->setTemplate('/application/proceso/venta/editar');
            $view_model->setVariables(array(
                'messages' => $this->flashMessenger(),
                'form' => $form,
                'entity' => $entity,
                'detalles' => $detalles,
                'anio_activo' => $anio_activo,
                'mes_activo' => $mes_activo,
                'mes_ordentablajeria' => $entity->getVentaFechaventa('m'),
                'anio_ordentablajeria' => $entity->getVentaFechaventa('Y'),
                'idrol' => $session['idrol'],
            ));

            return $view_model;
            
        }
        
 
        
    }
    
    public function eliminarAction() {

        $request = $this->getRequest();

        if ($request->isPost()) {

            $id = $this->params()->fromRoute('id');
            
            $entity = \VentaQuery::create()->findPk($id);
            $entity->delete();

            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/procesos/venta');
        }
    }



}   

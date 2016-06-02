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

        $collection = \VentaQuery::create()->filterByIdsucursal($session['idsucursal'])->orderByIdventa(\Criteria::DESC)->find();

        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/venta/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
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
            
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'data' => $entity_array, 'almacenes' => $almacen_array)));
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
                           ->setRecetaCantidad($detalle['cantidad'])
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
                        
                        $venta_detalle_receta->save();
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
            
             $exist = \VentaQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByVentaFolio($entity->getVentaFolio(),  \Criteria::NOT_EQUAL)->getVentaFolio($folio,  \Criteria::LIKE)->exists();
        }else{
            $exist = \VentaQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByVentaFolio($folio,  \Criteria::EQUAL)->exists();
        }
        
        return $this->getResponse()->setContent(json_encode($exist));
    }
    
    public function validateproductAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        if($request->isPost()){
            $post_data = $request->getPost();
           
            $producto_nombe = $post_data['producto_nombre'];
            $producto_cantidad = $post_data['producto_cantidad'];
            $producto_subtotal = $post_data['producto_subtotal'];
            $producto_preciounitario = $producto_subtotal / $producto_cantidad;
            
            //VALIDAMOS SI EXISTE EL PRODUCTO
            $exist = \ProductoQuery::create()->filterByProductoNombre($producto_nombe)->exists();
            //SI EXISTE
            if($exist){
                $producto = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre($producto_nombe)->findOne();
                $type = $producto->getProductoTipo();
                //SI EL PRODUCTO ES PLU
                if($type == 'plu'){
                    
                    //OBTENEMOS EL ALMACEN DONDE SE DEBE DE REGISTRAR
                    $productosucursalalmacen = \ProductosucursalalmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByIdproducto($producto->getIdproducto())->findOne();
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

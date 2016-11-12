<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Dashboard\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class IndexController extends AbstractActionController
{
    
    public function validateprocessbyinventariomesAction(){
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            $date = date_create_from_format('d/m/Y H:i', $post_data['date']." 00:00");
            $result = true;
            foreach ($post_data['almacen'] as $almacen){
                $exist = \InventariomesQuery::create()->filterByIdalmacen($almacen)->filterByInventariomesFecha($date,  \Criteria::GREATER_EQUAL)->exists();
                if($exist){
                    $result = false;
                }
            }
            
            return $this->getResponse()->setContent(json_encode($result));
        }
    }
    
    public function getalmacenesbyinventarioAction(){
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            $date = date_create_from_format('d/m/Y H:i', $post_data['date']." 00:00");
            
            $result_array = array();
            $almacenes_array = \AlmacenQuery::create()->filterByAlmacenEstatus(1)->select(array('Idalmacen'))->filterByIdsucursal($session['idsucursal'])->find()->toArray();
            foreach ($almacenes_array as $almacen){
                $exist = \InventariomesQuery::create()->filterByIdalmacen($almacen)->filterByInventariomesFecha($date,  \Criteria::GREATER_EQUAL)->exists();
                if(!$exist){
                    $almacen_nombre = \AlmacenQuery::create()->findPk($almacen);
                    $almacen_nombre = $almacen_nombre->getAlmacenNombre();
                    $result_array[$almacen] = $almacen_nombre;
                }
            }
            return $this->getResponse()->setContent(json_encode($result_array));
        }
       
    }
    
    public function getultimasemanarevisadaAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $exist = \SemanarevisadaQuery::create()->filterByIdsucursal($session['idsucursal'])->exists();
        if($exist){
            $semana_revisada = \SemanarevisadaQuery::create()->filterByIdsucursal($session['idsucursal'])->orderByIdsemanarevisada(\Criteria::DESC)->findOne();
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'semanarevisada' => $semana_revisada->toArray(\BasePeer::TYPE_FIELDNAME))));      
        }else{
            return $this->getResponse()->setContent(json_encode(array('response' => false)));
        }
    }
        

    public function validateproductAction(){
        $request = $this->getRequest();
        if($request->isPost()){
            
            $session = new \Shared\Session\AouthSession();
            $session = $session->getData();
            
            $post_data = $request->getPost();
            $edit = ($post_data['edit'] == "true") ? true : false;
            
            if($edit == "true"){
             $id = $post_data['id'];
             $entity = \ProductoQuery::create()->findPk($id);
             $exist = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre($entity->getProductoNombre(),  \Criteria::NOT_EQUAL)->filterByProductoNombre($post_data['producto_nombre'])->exists();
            }else{
                $exist = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre($post_data['producto_nombre'],  \Criteria::EQUAL)->exists();
            }
           
            
            return $this->getResponse()->setContent(json_encode($exist));
        }
    }
    
    public function indexAction()
    {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
    }
    
    public function getproveedoresAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $search = $this->params()->fromQuery('q');
        $cfdi = $this->params()->fromQuery('cfdi') ? (int)$this->params()->fromQuery('cfdi') : 0;
            
        $query = \ProveedorQuery::create()->filterByIdempresa($session['idempresa'])->filterByProveedorNombrecomercial('%'.$search.'%',  \Criteria::LIKE)->_or()->filterByProveedorRazonsocial('%'.$search.'%',  \Criteria::LIKE)->find();
        
        if(!$cfdi){
             
            $result = array();
            $entity = new \Proveedor();
            foreach ($query as $entity){
                $id = $entity->getIdproveedor();
                $value = $entity->getProveedorNombrecomercial()." - ".$entity->getProveedorRazonsocial();
                $tmp['id'] = $id;
                $tmp['value'] = $value;
                $result[] = $tmp;
            }
             
        }else{
            
            $result = array();
            $entity = new \Proveedor();
            foreach ($query as $entity){
                $id = $entity->getIdproveedor();
                $value = $entity->getProveedorNombrecomercial()." - ".$entity->getProveedorRazonsocial();
                if(!\ProveedorescfdiQuery::create()->filterByIdproveedor($id)->exists()){
                    $tmp['id'] = $id;
                    $tmp['value'] = $value;
                    $result[] = $tmp;
                }
                
            }
        }
                
       
        

        return $this->getResponse()->setContent(json_encode($result));

        
        
    }
    
    public function getproductosAction(){

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $search = $this->params()->fromQuery('q');
        $type = $this->params()->fromQuery('type') ? $this->params()->fromQuery('type') : false;
       
        if($type == 'simple'){
            $query = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoTipo('simple')->filterByProductoNombre('%'.utf8_encode($search).'%',  \Criteria::LIKE)->filterByProductoBaja(0,  \Criteria::EQUAL)->find();
        }else{
            $query = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre('%'.$search.'%',  \Criteria::LIKE)->filterByProductoBaja(0,  \Criteria::EQUAL)->find();
        }
        
        return $this->getResponse()->setContent(json_encode(\Shared\GeneralFunctions::collectionToAutocomplete($query, 'idproducto', 'producto_nombre',array('producto_iva','producto_costo',array('unidadmedida','idunidadmedida','unidadmedida_nombre','UnidadmedidaQuery')))));

    }
    
    public function getproductosrecetaAction(){

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
       
        $search = $this->params()->fromQuery('q');
        $idproducto = $this->params()->fromQuery('idproducto');
        $query = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre('%'.$search.'%',  \Criteria::LIKE)->filterByProductoBaja(0,  \Criteria::EQUAL)->filterByIdproducto($idproducto,  \Criteria::NOT_EQUAL)->find();

        
        return $this->getResponse()->setContent(json_encode(\Shared\GeneralFunctions::collectionToAutocomplete($query, 'idproducto', 'producto_nombre',array('producto_iva','producto_costo','producto_rendimiento',array('unidadmedida','idunidadmedida','unidadmedida_nombre','UnidadmedidaQuery')))));

    }
    
    public function getproductossimplesAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $search = $this->params()->fromQuery('q');
        $query = \ProductoQuery::create()
                ->filterByIdempresa($session['idempresa'])
                ->filterByProductoNombre('%'.$search.'%',  \Criteria::LIKE)
                ->filterByProductoTipo("simple",  \Criteria::EQUAL)
                ->filterByProductoBaja(0)
                ->find();
        
         return $this->getResponse()->setContent(json_encode(\Shared\GeneralFunctions::collectionToAutocomplete($query, 'idproducto', 'producto_nombre',array('producto_iva',array('unidadmedida','idunidadmedida','unidadmedida_nombre','UnidadmedidaQuery')))));

        
    }

}

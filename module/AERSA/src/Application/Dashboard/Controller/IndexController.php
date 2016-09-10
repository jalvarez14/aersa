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
            $query = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoTipo('simple')->filterByProductoNombre('%'.$search.'%',  \Criteria::LIKE)->filterByProductoBaja(0,  \Criteria::EQUAL)->find();
        }else{
            $query = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre('%'.$search.'%',  \Criteria::LIKE)->filterByProductoBaja(0,  \Criteria::EQUAL)->find();
        }
        
        
        
        return $this->getResponse()->setContent(json_encode(\Shared\GeneralFunctions::collectionToAutocomplete($query, 'idproducto', 'producto_nombre',array('producto_iva',array('unidadmedida','idunidadmedida','unidadmedida_nombre','UnidadmedidaQuery')))));

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

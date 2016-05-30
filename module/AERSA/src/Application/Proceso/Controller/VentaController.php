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
    
    public function nuevoAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
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



}   

<?php

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class TrabajadorespromedioController extends AbstractActionController
{
    public function indexAction()
    {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();


        $collection = \TrabajadorespromedioQuery::create()->filterByIdsucursal($session['idsucursal'])->find();




        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/trabajadorespromedio/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;
    }
    public function nuevoAction()
    {
        
        
        $request = $this->getRequest();
        
        //INTANCIAMOS NUESTRO FORMULARIO
        $form = new \Application\Catalogo\Form\TrabajadorpromedioForm();
        

        if($request->isPost())
        {
            $session = new \Shared\Session\AouthSession();
            $session = $session->getData();
        
            $post_data = $request->getPost();
                
            $exists = \TrabajadorespromedioQuery::create()
                    ->filterByTrabajadorespromedioAnio($post_data['trabajadorespromedio_anio'])
                    ->filterByTrabajadorespromedioMes($post_data['trabajadorespromedio_mes'])
                    ->filterByIdsucursal($session['idsucursal'])
                    ->find();
            
            
            foreach ($exists as $item ) 
            {
                echo "mylord";
                $this->flashMessenger()->addErrorMessage('Ya un registro con este mes y año anterior');
                return $this->redirect()->toUrl('/catalogo/trabajador_promedio/nuevo');
            }
            //Metemos los datos de las entidades
            $entity = new \Trabajadorespromedio();

            foreach ($post_data as $key => $value) {
                $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
            }
            
            $entity->setIdempresa($session['idempresa']);
            $entity->setIdsucursal($session['idsucursal']);
            $entity->save();

            $this->flashMessenger()->addSuccessMessage('Registro creado correctamente!');

            return $this->redirect()->toUrl('/catalogo/trabajador_promedio');

           
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),

        ));
        $view_model->setTemplate('/application/catalogo/trabajadorespromedio/nuevo');
        return $view_model;

    }
    
    public function editarAction()
    {   
        $id = $this->params()->fromRoute('id');
        
        $exists = \TrabajadorespromedioQuery::create()->filterByIdtrabajadorespromedio($id)->exists();
        if($exists)
        {
            $entity = \TrabajadorespromedioQuery::create()->findPk($id);
            $request = $this->getRequest();

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\TrabajadorpromedioForm();
            

            if($request->isPost())
            {
                $session = new \Shared\Session\AouthSession();
                $session = $session->getData();

                $post_data = $request->getPost();


                //Metemos los datos de las entidades
                

                foreach ($post_data as $key => $value) 
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);

                $entity->setIdempresa($session['idempresa']);
                $entity->setIdsucursal($session['idsucursal']);
                $entity->save();

                $this->flashMessenger()->addSuccessMessage('Registro modificado correctamente!');

                return $this->redirect()->toUrl('/catalogo/trabajador_promedio');


            }
            
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
        }
        else
            return $this->redirect()->toUrl('/catalogo/trabajador_promedio');

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            'id'        => $id,

        ));
        $view_model->setTemplate('/application/catalogo/trabajadorespromedio/editar');
        return $view_model;
    }
    
    public function eliminarAction() 
    {
        $request = $this->getRequest();

        if ($request->isPost()) 
        {

            $id = $this->params()->fromRoute('id');

            $entity = \TrabajadorespromedioQuery::create()->findPk($id);
            $entity->delete();

            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/catalogo/trabajador_promedio');
        }
    }
}
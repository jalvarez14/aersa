<?php

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class AlmacenController extends AbstractActionController
{
    public function indexAction()
    {

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();

        $view_model->setTemplate('/application/catalogo/almacen/index');
        return $view_model;
    }
    public function nuevoAction()
    {
        
        $idSuc = $this->params()->fromRoute('suc');
        $idEmp = $this->params()->fromRoute('emp');
        
        $request = $this->getRequest();
        
        //INTANCIAMOS NUESTRO FORMULARIO
        $form = new \Application\Catalogo\Form\AlmacenForm();
        
        $suc = \SucursalQuery::create()->findPk($idSuc);
        $emp = \EmpresaQuery::create()->findPk($idEmp);
        
        if($request->isPost())
        {
            
            $post_data = $request->getPost();
                
            
            $exists = \AlmacenQuery::create()
                    ->filterByIdsucursal($idSuc)
                    ->filterByAlmacenNombre($post_data['almacen_nombre'])
                    ->exists();
            
            if(!$exists)
            {
                //Metemos los datos de las entidades
                $entity = new \Almacen();

                foreach ($post_data as $key => $value) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }

                $entity->setIdsucursal($idSuc);
                $entity->save();

                $this->flashMessenger()->addSuccessMessage('Almacen creado correctamente!');

                return $this->redirect()->toUrl('/catalogo/empresa/sucursal/editar/'.$idSuc.'/'.$idEmp);
            
            }
            else 
            {   
                $this->flashMessenger()->addErrorMessage('Ya hay un almacen con este nombre para esta sucursal');
                return $this->redirect()->toUrl('/catalogo/almacen/nuevo/'.$idSuc.'/'.$idEmp);
            }
           
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            'sucursal'  => $suc,
            'empresa'   => $emp,
        ));
        $view_model->setTemplate('/application/catalogo/almacen/nuevo');
        return $view_model;

    }
    
    public function editarAction()
    {
        $almacenesPrincipales = array(
            'Almacén general',
            'Cocina',
            'Barra',
            'Créditos al costo',
            'Bonificados',
            'Consignación',
            'Servicio',
        );
        
        $id     = $this->params()->fromRoute('id');
        $idSuc  = $this->params()->fromRoute('suc');
        $idEmp  = $this->params()->fromRoute('emp');
        
        $request = $this->getRequest();
        
        $exists         = \AlmacenQuery::create()->filterByIdalmacen($id)->exists();
        
        if($exists)
        {
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \AlmacenQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\AlmacenForm();
            if(in_array($entity->getAlmacenNombre(), $almacenesPrincipales))
            {
                $element = $form->get('almacen_nombre');
                $element->setAttribute('disabled', 'disabled');
            }
            
            //SI NOS ENVIAN UNA PETICION POST
            if($request->isPost())
            {
                $post_data = $request->getPost();
                
                $exists = \AlmacenQuery::create()
                    ->filterByIdsucursal($idSuc)
                    ->filterByAlmacenNombre($post_data['almacen_nombre'])
                    ->exists();
                
                
                if(!$exists)
                {
                    foreach ($post_data as $key => $value)
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);

                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Almacen editado correctamente');
                    return $this->redirect()->toUrl('/catalogo/empresa/sucursal/editar/'.$idSuc.'/'.$idEmp);
                }
                else
                {
                    $this->flashMessenger()->addErrorMessage('Ya hay un almacen con este nombre para esta sucursal');
                    return $this->redirect()->toUrl('/catalogo/almacen/editar/'.$id.'/'.$idSuc.'/'.$idEmp);
                }

                
            }
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $empresa = \EmpresaQuery::create()->findPk($idEmp);
            $sucursal = \SucursalQuery::create()->findPk($idSuc);
        }
        else
            return $this->redirect()->toUrl('/catalogo/usuario');
        
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'              => $form,
            'messages'          => $this->flashMessenger(),
            'almacen'           => $entity,
            'empresa'           => $empresa,
            'sucursal'          => $sucursal,
        ));
        $view_model->setTemplate('/application/catalogo/almacen/editar');
        return $view_model;

    }
    
}

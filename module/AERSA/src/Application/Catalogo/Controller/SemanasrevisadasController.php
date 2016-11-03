<?php

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class IvaController extends AbstractActionController
{
    public function indexAction()
    {
        return $this->redirect()->toUrl('/catalogo/iva/editar/1');
        
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A SU ROL
        
        //SI SE TRATA DE UN ADMIN DE AERSA
        if($session['idrol'] == 1){
            $collection = \TasaivaQuery::create()->orderByTasaivaValor()->find();
        }


        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/iva/index');
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
        $form = new \Application\Catalogo\Form\IvaForm();
        
        if($request->isPost())
        {
            
            $post_data = $request->getPost();
            
            //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
            
            $collection = \TasaivaQuery::create()->find();
            
            if(count($collection)<2)
            {
                //CREAMOS NUESTRA ENTIDAD VACIA
                $entity = new \TasaIva();
                
                //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                foreach ($post_data as $key => $value){
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                
                $entity->save();

                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                
                return $this->redirect()->toUrl('/catalogo/iva');
           }
           else
           {
                $this->flashMessenger()->addErrorMessage('No se pueden agregar mas de dos registros');
           }

        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/catalogo/iva/nuevo');
        return $view_model;
    }
    
    public function editarAction()
    {
        $request = $this->getRequest();
        
        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        
        //VERIFICAMOS SI EXISTE
        $exist = \TasaivaQuery::create()->exists();
        
        if($exist)
        {
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \TasaivaQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\IvaForm();
            $form->get('tasaiva_valor')->setAttribute('required', true);
            
            //SI NOS ENVIAN UNA PETICION POST
            if($request->isPost()){
                
                $post_data = $request->getPost();
                
                //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS

                $exist = \TasaivaQuery::create()->find($post_data['idtasaiva']);
                if($exist)
                {

                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }

                    //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
                    $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
                    
                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');

                    return $this->redirect()->toUrl('/catalogo/iva/editar/1');

                    
                }
                else
                {
                    $this->flashMessenger()->addErrorMessage('No se pudo modificar la entidad, quiza esto se deba a algún problema de la url');
                }
                
            }
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
        }
        else
            return $this->redirect()->toUrl('/catalogo/iva');
        

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/catalogo/iva/editar');
        return $view_model;

    }
    
    
    public function eliminarAction()
    {
        
        $request = $this->getRequest();
        echo "string";
        if($request->isPost())
        {
            echo "string";
            $id = $this->params()->fromRoute('id');
            
            $entity = \TasaivaQuery::create()->findPk($id);
            $entity->delete();
            
            $this->flashMessenger()->addSuccessMessage('Tasa de IVA eliminada satisfactoriamente!');

            return $this->redirect()->toUrl('/catalogo/iva');
            
        }
        
    }

}

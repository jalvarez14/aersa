<?php
namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ProveedorController extends AbstractActionController
{
    public function indexAction()
    {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A SU ROL
        
        //SI SE TRATA DE UN ADMIN DE AERSA
        if($session['idrol'] == 1){
            $collection = \EmpresaQuery::create()->orderByIdempresa(\Criteria::DESC)->find();
        }
        
        $proveedores = \ProveedorQuery::create()->filterByIdempresa($session['idempresa'])->find();
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/proveedor/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $proveedores,
            'session'   => $session,
        ));
        return $view_model;

    }
    
    public function nuevoAction()
    {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        $emp = \EmpresaQuery::create()->findPk($session['idempresa']);
        
        $empresa= array();
        $empresa[$emp->getIdempresa()] = $emp->getEmpresaNombrecomercial();
        $form = new \Application\Catalogo\Form\ProveedorForm($empresa);
        $element = $form->get('idempresa');
        $element->setAttribute('disabled', 'disabled');
        
        if ($request->isPost()) 
        {
            $post_data = $request->getPost();

            //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
            $exist = \ProveedorQuery::create()->filterByProveedorNombrecomercial($post_data['proveedor_nombrecomercial'])->exists();

            if (!$exist) 
            {

                //CREAMOS NUESTRA ENTIDAD VACIA
                $entity = new \Proveedor();

                foreach ($post_data as $key => $value) {
                    
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }

                //SETEAMOS EL STATUS Y EL PASSWORD
                $entity->setIdempresa($session['idempresa']);

                $entity->save();
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/catalogo/proveedor');

            } 
            else 
            {
                $this->flashMessenger()->addErrorMessage('Este nombre de proveedor ya está duplicado');
                return $this->redirect()->toUrl('/catalogo/proveedor/nuevo');
            }
             
            
        }
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            'empresa'   => $emp,
            'session'   => $session,
        ));
        $view_model->setTemplate('/application/catalogo/proveedor/nuevo');
        return $view_model;
        
       
        
    }
    
    public function editarAction() 
    {

        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');

        //VERIFICAMOS SI EXISTE
        $exist = \ProveedorQuery::create()->filterByIdproveedor($id)->exists();

        if ($exist) 
        {
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \ProveedorQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\ProveedorForm();
                
            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) 
            {
                $post_data = $request->getPost();
                //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                foreach ($post_data as $key => $value)
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                
                $entity->save();

                $this->flashMessenger()->addSuccessMessage('Registro actualizado satisfactoriamente!');

                return $this->redirect()->toUrl('/catalogo/proveedor');
            }
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
        } 
        else 
            return $this->redirect()->toUrl('/catalogo/proveedor');
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            'proveedor' => $entity,
        ));
        $view_model->setTemplate('/application/catalogo/proveedor/editar');
        return $view_model;
    }
    
}

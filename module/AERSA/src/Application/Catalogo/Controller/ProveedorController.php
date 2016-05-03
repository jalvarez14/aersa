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
        
        $proveedores = \ProveedorQuery::create()->find();
        
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
        //$emp = \EmpresaQuery::create()->findPk(2);
        
        $empresa= array();
        $empresa[$emp->getIdempresa()] = $emp->getEmpresaNombrecomercial();
        $form = new \Application\Catalogo\Form\ProveedorForm($empresa);
        
        
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
                $entity->setIdempresa($post_data['idempresa']);

                $entity->save();
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/catalogo/proveedor/nuevo');

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
    
}

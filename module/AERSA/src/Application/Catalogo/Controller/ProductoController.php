<?php
namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ProductoController extends AbstractActionController
{
    public function indexAction()
    {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A SU ROL
        
        //SI SE TRATA DE UN ADMIN DE AERSA
        if($session['idempresa'] == 1)
            $collection = \EmpresaQuery::create()->findPk($session['idempresa']);
        
        
        
        $proveedores = \ProveedorQuery::create()->find();

        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/producto/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;

    }
    
    public function nuevoAction()
    {
        
        $request = $this->getRequest();
        
        $emp = \EmpresaQuery::create()->find();
    
        $form = new \Application\Catalogo\Form\ProveedorForm();
        
        
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
        ));
        $view_model->setTemplate('/application/catalogo/proveedor/nuevo');
        return $view_model;
        
       
        
    }

}

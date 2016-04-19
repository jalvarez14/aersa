<?php
namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ProveedorController extends AbstractActionController
{
    public function indexAction()
    {
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/proveedor/index');
        return $view_model;

    }
    
    public function nuevoAction()
    {
       
        $request = $this->getRequest();
        
        $form = new \Application\Catalogo\Form\ProveedorForm();
        
        if ($request->isPost()) 
        {
            /*
            $post_data = $request->getPost();

            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $post_data['usuario_estatus'] = 3;
            $form->setData($post_data);

            //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
            $exist = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->exists();

            if (!$exist) {

                //CREAMOS NUESTRA ENTIDAD VACIA
                $entity = new \Usuario();

                //INTANCIAMOS NUESTRO FILTRO
                $filter = new \Application\Catalogo\Filter\UsuarioFilter();

                //LE PONEMOS EL FILTRO A NUESTRO FORMULARIO
                $form->setInputFilter($filter->getInputFilter());

                //VERIFICAMOS QUE SEA VALIDO
                if ($form->isValid()) {

                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value) {
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }

                    //SETEAMOS EL STATUS Y EL PASSWORD
                    $entity->setUsuarioEstatus(1);
                    $entity->setUsuarioPassword(md5($post_data['usuario_password']));

                  
                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');


                    return $this->redirect()->toUrl('/catalogo/usuario');
                } 
                else 
                {


                }
            } else {
                $this->flashMessenger()->addErrorMessage('El nombre de usuario ya se encuentra registrado, por favor utilice uno distinto');
            }
             
             */
        }
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/catalogo/proveedor/nuevo');
        return $view_model;
        
       
        
    }

}

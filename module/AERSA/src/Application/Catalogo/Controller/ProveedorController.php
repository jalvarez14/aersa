<?php
namespace Application\Catalogo\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ProveedorController extends AbstractActionController
{
    
    public function associatevendorAction(){
         $request = $this->getRequest();
          //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
            
         if ($request->isPost()){
             $post_data = $request->getPost();
            
             $cfdi = new \Proveedorescfdi();
             $cfdi->setIdproveedor($post_data['idproveedor'])
                  ->setProveedorescfdiNombre($post_data['emisor_nombre'])
                  ->setIdempresa($session['idempresa'])
                  ->save();       
         }
         
         return $this->getResponse()->setContent(json_encode(array('response' => true,'proveedor' => array('id' => $cfdi->getIdproveedor(), 'value' => $cfdi->getProveedor()->getProveedorNombrecomercial(). " - ". $cfdi->getProveedor()->getProveedorRazonsocial()))));
    }
    
    public function validateproveedorcfdiAction(){
         //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
         if ($request->isPost()){
             $post_data = $request->getPost();
             
             $query = \ProveedorescfdiQuery::create()->filterByIdempresa($session['idempresa'])->filterByProveedorescfdiNombre($post_data['emisor_nombre'])->exists();
             if(!$query){
                 return $this->getResponse()->setContent(json_encode(array('response' => false)));
             }else{
                  $cfdi = \ProveedorescfdiQuery::create()->filterByIdempresa($session['idempresa'])->filterByProveedorescfdiNombre($post_data['emisor_nombre'])->findOne();
                  return $this->getResponse()->setContent(json_encode(array('response' => true,'proveedor' => array('id' => $cfdi->getIdproveedor(), 'value' => $cfdi->getProveedor()->getProveedorNombrecomercial(). " - ". $cfdi->getProveedor()->getProveedorRazonsocial()))));
             }
             
       
         }
    }
    
    
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
            $exist = \ProveedorQuery::create()->filterByProveedorNombrecomercial($post_data['proveedor_nombrecomercial'])->filterByIdempresa($session['idempresa'])->exists();

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
                
                /*
                 * Cada vez que se registre un proveedor a nivel de empresa se debe de crear un registro en tabla abonoproveedor 
                 * para cada una de las sucursales y el balance seteado en 0
                 */
                $sucursales = \SucursalQuery::create()->filterByIdempresa($session['idempresa'])->find();
                foreach ($sucursales as $sucursal){
                    $abonoproveedor = new \Abonoproveedor();
                    $abonoproveedor->setIdempresa($session['idempresa'])
                                   ->setIdsucursal($sucursal->getIdsucursal())
                                   ->setIdproveedor($entity->getIdproveedor())
                                   ->setAbonoproveedorBalance(0)
                                   ->save();
                   
                }

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
    
    public function batchAction(){
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            foreach ($post_data['proveedores'] as $proveedor){
                $exist = \ProveedorQuery::create()->filterByIdempresa($session['idempresa'])->filterByProveedorNombrecomercial($proveedor['Nombre'])->exists();
                if(!$exist){
                    $entity = new \Proveedor();
                    $entity->setIdempresa($session['idempresa'])
                           ->setProveedorNombrecomercial($proveedor['Nombre'])
                           ->setProveedorRazonsocial($proveedor['Razon social'])
                           ->setProveedorRfc($proveedor['RFC']) 
                           ->setProveedorTelefono($proveedor['Telefono'])
                           ->save();
                }
                $sucursales = \SucursalQuery::create()->filterByIdempresa($session['idempresa'])->find();
                $sucursal = new \Sucursal();
                foreach ($sucursales as $sucursal){
                    $abono_proveedor = new \Abonoproveedor();
                    $abono_proveedor->setIdempresa($session['idempresa'])
                                    ->setIdsucursal($sucursal->getIdsucursal())
                                    ->setIdproveedor($entity->getIdproveedor())
                                    ->setAbonoproveedorBalance(0)
                                    ->save();
                            
                }
            }
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->getResponse()->setContent(json_encode(array('response' => true)));
            
        }
    }
    
    public function  exportAction() {
        $request = $this->getRequest();
        if($request->isPost()){
            $session = new \Shared\Session\AouthSession();
            $session = $session->getData();
            $post_data = $request->getPost();
            $proveedoresObj= \ProveedorQuery::create()->filterByIdempresa($session['idempresa'])->orderByProveedorNombrecomercial('asc')->find();
            $proveedorObj = new \Proveedor();
            $reporte=array();
            foreach ($proveedoresObj as $proveedorObj) {
                array_push($reporte, array('nombre' => $proveedorObj->getProveedorNombrecomercial(), 'razonsocial' => $proveedorObj->getProveedorRazonsocial(), 'rfc' => $proveedorObj->getProveedorRfc(), 'telefono' => $proveedorObj->getProveedorTelefono()));
            }
            $template = '/proveedores.xlsx';
            $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
            $config = array(
                'template' => $template,
                'templateDir' => $templateDir
            );
            $R = new \PHPReport($config);
            $R->load(array(
                array(
                    'id' => 'proveedor',
                    'repeat' => true,
                    'data' => $reporte,
                    'minRows' => 2,
                )
                    )
            );
            $formato=(isset($post_data['generar_pdf'])) ? 'PDF': 'excel';
            echo $R->render($formato);
            exit;
        } else { 
            return $this->redirect()->toUrl('/catalogo/proveedor');
        }
    }
    
}

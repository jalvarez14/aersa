<?php

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class SucursalController extends AbstractActionController
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


        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/empresa/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;

    }
    
    public function nuevoAction()
    {
        $id = $this->params()->fromRoute('id');
        $empresa_nombre = \EmpresaQuery::create()->findPk($id);
        
        $request = $this->getRequest();
        
        //INTANCIAMOS NUESTRO FORMULARIO
        $form = new \Application\Catalogo\Form\SucursalForm();
        
        if($request->isPost())
        {
            
            $post_data = $request->getPost();
                
            //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
            $almacenista    = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['almacenista_username'])->exists();
            $auditor        = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['auditor_username'])->exists();
            
            if(!$almacenista && !$auditor)
            {
                //Metemos los datos de las entidades
                $sucursalEntity         = setSucursal($post_data,null,$id);
                $almacenistaEntity      = setAlmacenista($post_data);
                $auditorEntity          = setAuditor($post_data);
                
                //Guardamos las entidades
                $sucursalEntity->save();
                $almacenistaEntity->save();
                $auditorEntity->save();
                
                //Seteamos las dos relaciones para los usuarios creados
                $relacion1 = setUsuarioSucursal( $almacenistaEntity->getIdusuario() ,$sucursalEntity->getIdsucursal() );
                $relacion1->save();
                $relacion2 = setUsuarioSucursal($auditorEntity->getIdusuario() ,$sucursalEntity->getIdsucursal());
                $relacion2->save();
                
                
                //Creamos los 6 almacenes por defecto
                createAlmacenes($sucursalEntity->getIdsucursal());

                $this->flashMessenger()->addSuccessMessage('Sucursal agregada correctamente!');

                return $this->redirect()->toUrl('/catalogo/empresa/editar/'.$id);


            }
            else
            {
                if($auditor)
                    $this->flashMessenger()->addErrorMessage('El nombre de usuario para almacenista ya se encuentra registrado, por favor utilice uno distinto');
                if($almacenista)
                    $this->flashMessenger()->addErrorMessage('El nombre de usuario para auditor ya se encuentra registrado, por favor utilice uno distinto');
                
                return $this->redirect()->toUrl('/catalogo/empresa/sucursal/nuevo/'.$id);
        
            }
            
           
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            'id'        => $id,
            'empresa'   => $empresa_nombre,
        ));
        $view_model->setTemplate('/application/catalogo/sucursal/nuevo');
        return $view_model;

    }
    
    public function editarAction()
    {
        $id = $this->params()->fromRoute('id');
        $emp = $this->params()->fromRoute('emp');
        
        $empresa_nombre = \EmpresaQuery::create()->findPk($emp);
        
        $request = $this->getRequest();
        
        $exists         = \SucursalQuery::create()->filterByIdsucursal($id)->exists();
        
        if($exists)
        {
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \SucursalQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\SucursalForm();
            /*
            $element = $form->get('sucursal_nombre');
            $element->setAttribute('disabled', 'disabled');
            */
            
            //SI NOS ENVIAN UNA PETICION POST
            if($request->isPost())
            {
                
                $post_data = $request->getPost();
                
                
                //Ingresamos los nuevos datos de la sucursal
                $entity->setSucursalNombre(                     $post_data['sucursal_nombre']);
                $entity->setSucursalEstatus(                    $post_data['sucursal_estatus']);
                $entity->setSucursalAnioactivo(                 $post_data['sucursal_anioactivo']);
                $entity->setSucursalMesactivo(                  $post_data['sucursal_mesactivo']);
                $entity->setSucursalHabilitarproductos(         $post_data['sucursal_habilitarproductos']);
                $entity->setSucursalHabilitarrecetas(           $post_data['sucursal_habilitarrecetas']);
                
                $entity->save();

                $this->flashMessenger()->addSuccessMessage('Sucural actualizada correctamente');

                return $this->redirect()->toUrl('/catalogo/empresa/editar/'.$emp);

                    

                
            }
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $entityUsers = \UsuariosucursalQuery::create()->select(array('idusuario'))->filterByIdsucursal($id)->find()->toArray();
            $administradores = \UsuarioQuery::create()->filterByIdusuario($entityUsers)->find();
            
            $almacenes  = \AlmacenQuery::create()->filterByIdsucursal($id)->find();
        }
        else
            return $this->redirect()->toUrl('/catalogo/usuario');
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'              => $form,
            'messages'          => $this->flashMessenger(),
            'administradores'   => $administradores,
            'almacenes'         => $almacenes,
            'sucursales'        => $entity,
            'id'                => $id,
            'empresa'           => $empresa_nombre,
        ));
        $view_model->setTemplate('/application/catalogo/sucursal/editar');
        return $view_model;

    }
    
    public function eliminarAction()
    {
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $id = $this->params()->fromRoute('id');
            
            $entity = \UsuarioQuery::create()->findPk($id);
            $entity->delete();
            
            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/catalogo/usuario');
            
        }
        
    }
    
    public function checkuserAction()
    {
        $user = $this->params()->fromRoute('username');
        $result = \UsuarioQuery::create()->filterByUsuarioUsername($user)->find()->toArray();
        return $this->getResponse()->setContent(json_encode($result));      
    }
}

function setAlmacenista($data,$entity = null)
{
    if($entity == null)
        $entity = new \Usuario();
    
    $entity->setUsuarioNombre($data['almacenista_nombre']);
    $entity->setUsuarioEstatus($data['almacenista_estatus']);
    $entity->setUsuarioUsername($data['almacenista_username']);
    $entity->setUsuarioPassword(md5($data['almacenista_password']));
    
    //Rol 5 = almacenista
    $entity->setIdrol(5);
    return $entity;
}
function setAuditor($data,$entity = null)
{
    if($entity == null)
        $entity = new \Usuario();
    
    $entity->setUsuarioNombre($data['auditor_nombre']);
    $entity->setUsuarioEstatus($data['auditor_estatus']);
    $entity->setUsuarioUsername($data['auditor_username']);
    $entity->setUsuarioPassword(md5($data['auditor_password']));
    
    //Rol 4 = auditor
    $entity->setIdrol(4);
    return $entity;
}
function setSucursal($data, $entity = null,$idEmp)
{
    if($entity == null)
        $entity = new \Sucursal();
    
    $entity->setSucursalNombre($data['sucursal_nombre']);
    $entity->setSucursalEstatus($data['sucursal_estatus']);
    $entity->setSucursalAnioactivo($data['sucursal_anioactivo']);
    $entity->setSucursalMesactivo($data['sucursal_mesactivo']);
    $entity->setSucursalHabilitarproductos($data['sucursal_habilitarproductos']);
    $entity->setSucursalHabilitarrecetas($data['sucursal_habilitarrecetas']);
    $entity->setIdempresa($idEmp);
    
    return $entity;
}
function setUsuarioSucursal($idUser,$idSuc,$entity= null)
{
    if($entity == null)
        $entity = new \Usuariosucursal();
    
    $entity->setIdusuario($idUser);
    $entity->setIdsucursal($idSuc);
    
    return $entity;
}
function createAlmacenes($idSuc)
{
    $almacen = new \Almacen();
    $almacen->setAlmacenNombre('Almacén general');
    $almacen->setAlmacenEstatus(1);
    $almacen->setIdsucursal($idSuc);
    $almacen->setAlmacenEncargado("");
    $almacen->save();
    
    $almacen = new \Almacen();
    $almacen->setAlmacenNombre('Cocina');
    $almacen->setAlmacenEstatus(1);
    $almacen->setIdsucursal($idSuc);
    $almacen->setAlmacenEncargado("");
    $almacen->save();
    
    $almacen = new \Almacen();
    $almacen->setAlmacenNombre('Barra');
    $almacen->setAlmacenEstatus(1);
    $almacen->setIdsucursal($idSuc);
    $almacen->setAlmacenEncargado("");
    $almacen->save();
    
    $almacen = new \Almacen();
    $almacen->setAlmacenNombre('Créditos al costo');
    $almacen->setAlmacenEstatus(1);
    $almacen->setIdsucursal($idSuc);
    $almacen->setAlmacenEncargado("");
    $almacen->save();
    
    $almacen = new \Almacen();
    $almacen->setAlmacenNombre('Bonificados');
    $almacen->setAlmacenEstatus(1);
    $almacen->setIdsucursal($idSuc);
    $almacen->setAlmacenEncargado("");
    $almacen->save();
    
    $almacen = new \Almacen();
    $almacen->setAlmacenNombre('Consignación');
    $almacen->setAlmacenEstatus(1);
    $almacen->setIdsucursal($idSuc);
    $almacen->setAlmacenEncargado("");
    $almacen->save();
    
    $almacen = new \Almacen();
    $almacen->setAlmacenNombre('Servicio');
    $almacen->setAlmacenEstatus(1);
    $almacen->setIdsucursal($idSuc);
    $almacen->setAlmacenEncargado("");
    $almacen->save();
    
    
}

function getAdministradores($sucursal)
{
    
}
<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class AdministradorController extends AbstractActionController
{
    public function indexAction()
    {
        echo "hola";
        $id = $this->params()->fromRoute('id');
        
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
        $view_model->setTemplate('/application/catalogo/administrador/index' );
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
        $form = new \Application\Catalogo\Form\EmpresaForm();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            //VALIDAMOS QUE LA EMPRESA NO EXISTA EN LA BASE DE DATOS
            $exist = \EmpresaQuery::create()->filterByEmpresaNombrecomercial($post_data['empresa_nombrecomercial'])->exists();
            
            if(!$exist)
            {
                //CREAMOS NUESTRA ENTIDAD VACIA
                $empresaEntity  = setEmpresaData($post_data);
                $userEntity     = setusuarioData($post_data);
                
                //Guardamos las entidades
                $empresaEntity->save();
                $userEntity->save();
                
                //Obtenemos la relación
                $relacion   = setRelacion($empresaEntity,$userEntity);
                //Guardamos la relación
                $relacion->save();
                    
                $this->flashMessenger()->addSuccessMessage('Empresa registrada satisfactoriamente!');

                return $this->redirect()->toUrl('/catalogo/empresa');
            }
            else
            {
                $this->flashMessenger()->addErrorMessage('El nombre de empresa ya se encuentra registrado, por favor utilice uno distinto');
            }
            
           
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/catalogo/empresa/nuevo');
        return $view_model;

    }
    
    public function editarAction()
    {
        
        $request = $this->getRequest();
        
        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        
        //VERIFICAMOS SI EXISTE
        $exist              = \EmpresaQuery::create()->filterByIdempresa($id)->exists();
        $user               = \UsuarioempresaQuery::create()->filterByIdempresa($id)->find();
        $idAdmins           = array();
        foreach ($user as $item)
            $idaAdmins[] = $item->getIdusuario();
        //Obtener los administradores de la empresa
        $administradores    = \UsuarioQuery::create()->filterByIdusuario($idaAdmins)->find();
        
        $sucursales         = \SucursalQuery::create()->filterByIdempresa($id)->find();
        
        if($exist)
        {
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \EmpresaQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\EmpresaForm();
            
            //SI NOS ENVIAN UNA PETICION POST
            if($request->isPost())
            {
                
                $post_data = $request->getPost();
                
                $filter = new \Application\Catalogo\Filter\UsuarioFilter();
                
                //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
                $exist = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->filterByUsuarioUsername($entity->getUsuarioUsername(), \Criteria::NOT_EQUAL)->exists();
               
                if(!$exist)
                {

                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }

                    //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
                    $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
                    
                    //VALIDAMOS SI ES UN FORMULARIO VALIDO
                    $form->setInputFilter($filter->getInputFilter());


                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');

                    return $this->redirect()->toUrl('/catalogo/usuario');

                    
                }else
                {
                    $this->flashMessenger()->addErrorMessage('El nombre de usuario ya se encuentra registrado, por favor utilice uno distinto');
                }
                
            }
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            
           
        }
        else
        {
            return $this->redirect()->toUrl('/catalogo/usuario');
        }
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'              => $form,
            'messages'          => $this->flashMessenger(),
            'administradores'   => $administradores,
            'sucursales'        => $sucursales,
        ));
        $view_model->setTemplate('/application/catalogo/empresa/editar');
        return $view_model;

    }
    
    public function eliminarAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $id = $this->params()->fromRoute('id');
            
            $entity = \UsuarioQuery::create()->findPk($id);
            $entity->delete();
            
            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/catalogo/usuario');
            
        }
        
    }
    
    public function administradorAction()
    {
        $request = $this->getRequest();
        
        //INTANCIAMOS NUESTRO FORMULARIO
        $form = new \Application\Catalogo\Form\EmpresaForm();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            //VALIDAMOS QUE LA EMPRESA NO EXISTA EN LA BASE DE DATOS
            $exist = \EmpresaQuery::create()->filterByEmpresaNombrecomercial($post_data['empresa_nombrecomercial'])->exists();
            
            if(!$exist)
            {
                //CREAMOS NUESTRA ENTIDAD VACIA
                $empresaEntity  = setEmpresaData($post_data);
                $userEntity     = setusuarioData($post_data);
                
                //Guardamos las entidades
                $empresaEntity->save();
                $userEntity->save();
                
                //Obtenemos la relación
                $relacion   = setRelacion($empresaEntity,$userEntity);
                //Guardamos la relación
                $relacion->save();
                    
                $this->flashMessenger()->addSuccessMessage('Empresa registrada satisfactoriamente!');

                return $this->redirect()->toUrl('/catalogo/empresa');
            }
            else
            {
                $this->flashMessenger()->addErrorMessage('El nombre de empresa ya se encuentra registrado, por favor utilice uno distinto');
            }
            
           
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/catalogo/empresa/nuevo');
        return $view_model;
    }

}

function setEmpresaData($data)
{
    $entity  = new \Empresa();
    
    $entity->setEmpresaNombrecomercial($data['empresa_nombrecomercial']);
    $entity->setEmpresaRazonsocial($data['empresa_razonsocial']);
    $entity->setEmpresaEstatus($data['empresa_estatus']);
    $entity->setEmpresaAdministracion($data['empresa_administracion']);
    return($entity);
}

function setusuarioData($data)
{
    $entity  = new \Usuario();
    
    //Todo usuario ingresado por parte de empresa se le asigna administrador por defecto
    $entity->setIdrol(1);
    
    $entity->setUsuarioNombre($data['usuario_nombre']);
    $entity->setUsuarioEstatus($data['usuario_estatus']);
    $entity->setUsuarioUsername($data['usuario_username']);
    $entity->setUsuarioPassword(md5($data['usuario_password']));
    
    return($entity);
}
function setRelacion($empresa,$usuario)
{
    $empresa = $empresa->getIdEmpresa();
    $usuario = $usuario->getIdusuario();
    
    $entity = new \Usuarioempresa();
    $entity->setIdempresa($empresa);
    $entity->setIdusuario($usuario);
    
    return $entity;
}
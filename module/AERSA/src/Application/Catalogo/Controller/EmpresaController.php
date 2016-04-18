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

class EmpresaController extends AbstractActionController
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
        $request = $this->getRequest();
        
        //INTANCIAMOS NUESTRO FORMULARIO
        $form = new \Application\Catalogo\Form\EmpresaForm();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            
            //VALIDAMOS QUE LA EMPRESA NO EXISTA EN LA BASE DE DATOS
            $exist = \EmpresaQuery::create()->filterByEmpresaNombrecomercial($post_data['empresa_nombrecomercial'])->exists();
            
            if(!$exist)
            {
                $exist = \UsuarioQuery::create()->filterByUsuarioNombre($post_data['usuario_username'])->exists();
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
                    $this->flashMessenger()->addErrorMessage('Ya hay registrado un usuario con ese nombre de usuario');
                    return $this->redirect()->toUrl('/catalogo/empresa/nuevo');
                }
            }
            else
            {
                $this->flashMessenger()->addErrorMessage('El nombre de empresa ya se encuentra registrado, por favor utilice uno distinto');
                return $this->redirect()->toUrl('/catalogo/empresa/nuevo');
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
                
                $correctName = \EmpresaQuery::create()->filterByEmpresaNombrecomercial($post_data['empresa_nombrecomercial'])->exists();
                if(!$correctName || $entity->getEmpresaNombrecomercial() == $post_data['empresa_nombrecomercial'])
                {

                    //Seteamos los datos de la entidad
                    $entity = setEmpresaData($post_data,$entity);
                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Empresa '.$entity->getEmpresaNombrecomercial().' actualizada satisfactoriamente!');

                    return $this->redirect()->toUrl('/catalogo/empresa');

                }
                else
                {
                    $this->flashMessenger()->addErrorMessage('El nombre de empresa ya se encuentra registrado, por favor utilice uno distinto');
                    return $this->redirect()->toUrl('/catalogo/empresa/editar/'.$id);
                }
                
            }
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
        }
        else
        {
            //$this->flashMessenger()->addErrorMessage('La empresa que estas tratando de editar no esta registrada en el sistema');
            //return $this->redirect()->toUrl('/catalogo/empresa');
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

function setEmpresaData($data,$entity = Null)
{
    if($entity == null)
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
    $entity->setIdrol(3);
    
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
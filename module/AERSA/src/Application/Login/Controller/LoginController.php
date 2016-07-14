<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Login\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class LoginController extends AbstractActionController
{
    public function inAction()
    {

        //REMPLAZAMOS EL LAYOUT
        $this->layout('application/layout/loign_layout');
        
        $request = $this->getRequest();
        
        //SI SE TRATA DE UNA PETICION POST
        if($request->isPost()){
        
            $post_data = $request->getPost();
            
            //VALIDAMOS SI LOS DATOS DE ACCESO SON CORRECTOS Y SI SE ENCUENTRA ACTIVO
            $exist = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->filterByUsuarioPassword(md5($post_data['usuario_password']))->filterByUsuarioEstatus(1)->exists();
            
            if($exist){
                
                $usuario = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->filterByUsuarioPassword(md5($post_data['usuario_password']))->filterByUsuarioEstatus(1)->findOne();
              
                //CREAMOS NUESTRA PRESESSION
                $session = new \Shared\Session\AouthSession();
                $session->Create(array(
                    "idusuario"         => $usuario->getIdusuario(),
                    "idrol"             => $usuario->getIdrol(),
                    "usuario_nombre"    => $usuario->getUsuarioNombre(),
                    "usuario_username"  => $usuario->getUsuarioUsername(),
                ));
                
                return $this->redirect()->toUrl('/login/select');


            }else{
                return $this->redirect()->toUrl('/login');
            }
 
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        return $view_model;

    }
    
    public function outAction()
    {
        $session = new \Shared\Session\AouthSession();
        $session->Close();
        return $this->redirect()->toUrl('/login');

    }
    
    public function selectAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
           
            if(isset($post_data['area_trabajo'])){
                if($post_data['area_trabajo'] == 1){
                    return $this->redirect()->toUrl('/');

                }elseif ($post_data['area_trabajo'] == 2) {

                    if($post_data["idsucursal"] != 'admin'){

                        $session = new \Shared\Session\AouthSession();
                        $session->setEmpresaAndSucursal($post_data['idempresa'], $post_data['idsucursal']);
                        return $this->redirect()->toUrl('/');

                    }else{
                        $session = new \Shared\Session\AouthSession();
                        $session->setEmpresa($post_data['idempresa']);
                        return $this->redirect()->toUrl('/');
                    }
                }
            }else{
                $session = new \Shared\Session\AouthSession();
                $session->setEmpresaAndSucursal($post_data['idempresa'], $post_data['idsucursal']);
                return $this->redirect()->toUrl('/');
            }
            
        }
        
        
        $this->layout('application/layout/select_layout');
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        //De acuero al rol seleccionamos la vista
        $view_model = new ViewModel();
        
        $empresas = array();
        
        if($session['idrol'] == 1){ //ADMINISTRADOR AERSA
            $view_model->setTemplate('/application/login/select_admin_aersa');
            $empresas = \Shared\GeneralFunctions::collectionToSelectArray(\EmpresaQuery::create()->find(),'idempresa','empresa_nombrecomercial');
        }
        
        if($session['idrol'] == 2){ //ADMINISTRADOR AERSA
            $view_model->setTemplate('/application/login/select_auditor_aersa');
            
            $usuario_empresas = \UsuarioempresaQuery::create()->filterByIdusuario($session['idusuario'])->find();
            $empresas = array();
            $usuario_empresa = new \Usuarioempresa();
            foreach ($usuario_empresas as $usuario_empresa){
                $id = $usuario_empresa->getIdempresa();
                $empresas[$id] = $usuario_empresa->getEmpresa()->getEmpresaNombrecomercial();
            }
        }
        
        if($session['idrol'] == 3){ //ADMINISTRADOR AERSA
            $view_model->setTemplate('/application/login/select_admin_empresa');
            
            $usuario_empresas = \UsuarioempresaQuery::create()->filterByIdusuario($session['idusuario'])->find();
            $empresa = \UsuarioempresaQuery::create()->filterByIdusuario($session['idusuario'])->findOne();
            $empresas = array();
            $usuario_empresa = new \Usuarioempresa();
            foreach ($usuario_empresas as $usuario_empresa){
                $id = $usuario_empresa->getIdempresa();
                $empresas[$id] = $usuario_empresa->getEmpresa()->getEmpresaNombrecomercial();
            }
            $sucursales = \SucursalQuery::create()->filterByIdempresa($empresa->getIdempresa())->find();
            $sucursales_array = array();
            $sucursal = new \Sucursal();
            foreach ($sucursales as $sucursal){
                $id = $sucursal->getIdsucursal();
                $sucursales_array[$id] = $sucursal->getSucursalNombre();
            }
        }
        

        $form = new \Application\Login\Form\SelectForm($session['idrol'],$empresas,$sucursales_array);
        
        $view_model->setVariables(array(
            'session' => $session,
            'form' => $form,
        ));
        return $view_model;

        
    }
    
    public function getsucursalesAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
           
            $idempresa = $post_data['id'];
            
            $sucursales = \SucursalQuery::create()->filterByIdempresa($idempresa)->find();
            
            $sucursales = \Shared\GeneralFunctions::collectionToSelectArray($sucursales, 'idsucursal', 'sucursal_nombre');
            
            return $this->getResponse()->setContent(json_encode($sucursales));
           
            
        }
        
    }
    

}

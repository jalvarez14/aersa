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
        
        $this->layout('application/layout/select_layout');
        
    }
    

}

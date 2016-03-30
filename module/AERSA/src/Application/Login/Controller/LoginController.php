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
        
        if($request->isPost()){
        
            $post_data = $request->getPost();
            echo '<pre>';var_dump($post_data); echo '</pre>';exit();
        }
        
        
        
        
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        return $view_model;

    }

}

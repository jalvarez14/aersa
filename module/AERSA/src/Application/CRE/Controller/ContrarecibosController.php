<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\CRE\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ContrarecibosController extends AbstractActionController
{

    public function indexAction()
    {
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $view_model = new ViewModel();
        $view_model->setTemplate('application/cre/contrarecibos/index');
        return $view_model;
        
        
        

    }
    
    public function nuevoAction()
    {
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        

        $view_model = new ViewModel();
        $view_model->setTemplate('application/cre/contrarecibos/nuevo');
        return $view_model;
        
        
        

    }


}

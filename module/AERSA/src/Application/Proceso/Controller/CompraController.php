<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Proceso\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class CompraController extends AbstractActionController {
    
    public function indexAction() {

        $collection = \CompraQuery::create()->find();
        
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/compra/index');
            $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;

    }
    public function nuevoregistroAction() {
        
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/compra/nuevoregistro');
//        $view_model->setVariables(array(
//            'messages' => $this->flashMessenger(),
//            'collection' => $collection,
//        ));
        return $view_model;
    }
}

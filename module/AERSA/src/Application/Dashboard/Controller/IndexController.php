<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Dashboard\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
    }
    
    public function getproveedoresAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $search = $this->params()->fromQuery('q');
        
        $query = \ProveedorQuery::create()->filterByIdempresa($session['idempresa'])->filterByProveedorNombrecomercial('%'.$search.'%',  \Criteria::LIKE)->find();
        $result = \Shared\GeneralFunctions::collectionToAutocomplete($query, 'idproveedor', 'proveedor_nombrecomercial');
        
        return $this->getResponse()->setContent(json_encode($result));

        
        
    }
    
    public function getproductosAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $search = $this->params()->fromQuery('q');
        $query = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoNombre('%'.$search.'%',  \Criteria::LIKE)->find();

        return $this->getResponse()->setContent(json_encode(\Shared\GeneralFunctions::collectionToAutocomplete($query, 'idproducto', 'producto_nombre')));

        
    }

}

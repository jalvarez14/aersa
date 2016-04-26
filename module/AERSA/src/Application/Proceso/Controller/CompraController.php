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
    
    public function validatefolioAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $folio = $this->params()->fromQuery('folio');
        
        $to = new \DateTime();
        $from = date("Y-m-d", strtotime("-2 months")); $from = new \DateTime($from);

        $exist = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByCompraFechacompra(array('min' => $from,'to' => $to))->filterByCompraFolio($folio,  \Criteria::LIKE)->exists();
        
        return $this->getResponse()->setContent(json_encode($exist));
    }


    public function nuevoregistroAction() {
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $post_files = $request->getFiles();
            
            echo '<pre>';var_dump($post_data);'</pre>';
            echo '<pre>';var_dump($post_files);'</pre>';exit();
        }
        
        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();
        
        $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Créditos al costo',  \Criteria::NOT_EQUAL)->find();
        $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');
        
        $form = new \Application\Proceso\Form\CompraForm($almecenes);
        
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/compra/nuevoregistro');
        $view_model->setVariables(array(
            'form' => $form,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'almacenes' => json_encode($almecenes) //LO PASAMOS EN JSON POR QUE LO VAMOS A TRABAJR CON NUESTRO JS
        ));

        return $view_model;
    }
}

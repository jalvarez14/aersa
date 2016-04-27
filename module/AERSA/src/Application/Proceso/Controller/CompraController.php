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
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $collection = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->find();
        
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
            
            $post_data["compra_fechacompra"] = date_create_from_format('d/m/Y', $post_data["compra_fechacompra"]);
            $post_data["compra_fechaentrega"] = date_create_from_format('d/m/Y', $post_data["compra_fechaentrega"]);
           
            $entity = new \Compra();
            foreach ($post_data as $key => $value){
                if(\CompraPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value,  \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            
            //SETEAMOS LA FECHA DE CREACION
            $entity->setCompraFechacreacion(new \DateTime())
                   ->setIdempresa($session['idempresa'])
                   ->setIdsucursal($session['idsucursal'])
                   ->setIdusuario($session['idusuario']);
            
            
            if($post_data['compra_revisada']){
                $entity->setIdauditor($session['idusuario']);
            }
            
            $entity->save();
            
            //EL COMPROBANTE
            if(!empty($post_files['compra_factura']['name'])){
                
                $type = $post_files['compra_factura']['type'];
                $type = explode('/', $type);
                $type = $type[1];
               
                $target_path = "/application/files/compras/";
                $target_path = $target_path . 'compra_'.$entity->getIdcompra() .'.'.$type;
                
                if(move_uploaded_file($_FILES['compra_factura']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$target_path)){
                    $entity->setCompraFactura($target_path);
                    $entity->save();
                }

            }
           
            //COMPRA DETALLES
            foreach ($post_data['productos'] as $producto){
                
                $compra_detalle = new \Compradetalle();
                $compra_detalle->setIdcompra($entity->getIdcompra())
                               ->setCompradetalleRevisada(0)
                               ->setIdproducto($producto['idproducto'])
                               ->setIdalmacen($producto['almacen'])
                               ->setCompradetalleCantidad($producto['cantidad'])
                               ->setCompradetalleCostounitario($producto['costo_unitario'])
                               ->setCompradetalleDescuento($producto['descuento'])
                               ->setCompradetalleIeps($producto['ieps'])
                               ->setCompradetalleSubtotal($producto['subtotal']);
                
                if(isset($producto['revisada'])){
                    $compra_detalle->setCompradetalleRevisada(1);
                }
                
                $compra_detalle->save();
                
            }
            
            //REDIRECCIONAMOS AL LISTADO
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/compra');
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

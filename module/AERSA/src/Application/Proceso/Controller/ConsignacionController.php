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

class ConsignacionController extends AbstractActionController {
    
    public function indexAction() {
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
         
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();
        
        $collection = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByCompraTipo('consignacion')->orderByCompraFechacreacion(\Criteria::DESC)->find();
      
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/consignacion/index');
            $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
        ));
        return $view_model;

    }
    
    public function validatefolioAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $folio = $this->params()->fromQuery('folio');
        $edit = (!is_null($this->params()->fromQuery('edit'))) ?$this->params()->fromQuery('edit') : false;

        $to = new \DateTime();
        $from = date("Y-m-d", strtotime("-2 months")); $from = new \DateTime($from);
        
        if($edit){
             $id = $this->params()->fromQuery('id');
             $entity = \CompraQuery::create()->findPk($id);
            
             $exist = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByCompraFechacompra(array('min' => $from,'to' => $to))->filterByCompraFolio($entity->getCompraFolio(),  \Criteria::NOT_EQUAL)->filterByCompraFolio($folio,  \Criteria::LIKE)->exists();
        }else{
            $exist = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByCompraFechacompra(array('min' => $from,'to' => $to))->filterByCompraFolio($folio,  \Criteria::LIKE)->exists();
        }

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
                               ->setCompradetalleCantidad($producto['cantidad'])
                               ->setCompradetallePrecio($producto['precio'])
                               ->setCompradetalleCostounitario($producto['costo_unitario'])
                               ->setCompradetalleDescuento($producto['descuento'])
                               ->setCompradetalleIeps($producto['ieps'])
                               ->setCompradetalleSubtotal($producto['subtotal']);
                
                if($entity->getCompraTipo() == 'compra' || $entity->getCompraTipo() == 'consignacion'){
                    $compra_detalle->setIdalmacen($producto['almacen']);
                }
                
                if(isset($producto['revisada'])){
                    $compra_detalle->setCompradetalleRevisada(1);
                }
                
                $compra_detalle->save();
                
            }
            
            //REDIRECCIONAMOS AL LISTADO
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/consignacion');
        }
        
        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();
        
        $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Consignación',  \Criteria::EQUAL)->find();
        $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');
        
        $form = new \Application\Proceso\Form\ConsignacionForm($almecenes);
        $form->get('compra_tipo')->setValue('consignacion');
        
        //Obtenemos el iva
        $iva = \TasaivaQuery::create()->findOne();
        $iva = $iva->getTasaivaValor();
       
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/consignacion/nuevoregistro');
        $view_model->setVariables(array(
            'form' => $form,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'almacenes' => json_encode($almecenes), //LO PASAMOS EN JSON POR QUE LO VAMOS A TRABAJR CON NUESTRO JS
            'iva' => $iva,
        ));

        return $view_model;
    }
    
    public function editarAction(){
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
       
        //VERIFICAMOS SI EXISTE
        $exist = \CompraQuery::create()->filterByIdcompra($id)->exists();
        
        if($exist){
            
            // OBTENEMOS EL MES Y EL ANIO ACTIVO DE LA SUCURSAL
            $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
            $anio_activo = $sucursal->getSucursalAnioactivo();
            $mes_activo = $sucursal->getSucursalMesactivo();
            
             //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \CompraQuery::create()->findPk($id);
            
            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) {

                $post_data = $request->getPost();
                $post_files = $request->getFiles();

                $post_data["compra_fechacompra"] = date_create_from_format('d/m/Y', $post_data["compra_fechacompra"]);
                $post_data["compra_fechaentrega"] = date_create_from_format('d/m/Y', $post_data["compra_fechaentrega"]);

                foreach ($post_data as $key => $value) {
                    if (\CompraPeer::getTableMap()->hasColumn($key)) {
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                
                if ($post_data['compra_revisada']) {
                    $entity->setIdauditor($session['idusuario']);
                }

                $entity->save();

                //EL COMPROBANTE
                if (!empty($post_files['compra_factura']['name'])) {

                    $type = $post_files['compra_factura']['type'];
                    $type = explode('/', $type);
                    $type = $type[1];

                    $target_path = "/application/files/compras/";
                    $target_path = $target_path . 'compra_' . $entity->getIdcompra() . '.' . $type;

                    if (move_uploaded_file($_FILES['compra_factura']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                        $entity->setCompraFactura($target_path);
                        $entity->save();
                    }
                }

                //COMPRA DETALLES
                $entity->getCompradetalles()->delete();
                
                foreach ($post_data['productos'] as $producto) {

                    $compra_detalle = new \Compradetalle();
                    $compra_detalle->setIdcompra($entity->getIdcompra())
                            ->setCompradetalleRevisada(0)
                            ->setIdproducto($producto['idproducto'])
                            ->setIdalmacen($producto['almacen'])
                            ->setCompradetalleCantidad($producto['cantidad'])
                            ->setCompradetallePrecio($producto['precio'])
                            ->setCompradetalleCostounitario($producto['costo_unitario'])
                            ->setCompradetalleDescuento($producto['descuento'])
                            ->setCompradetalleIeps($producto['ieps'])
                            ->setCompradetalleSubtotal($producto['subtotal']);

                    if (isset($producto['revisada'])) {
                        $compra_detalle->setCompradetalleRevisada(1);
                    }

                    $compra_detalle->save();
                }

                //REDIRECCIONAMOS AL LISTADO
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/procesos/consignacion');
            }

            //NUESTROS ALMACENES
            $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Consignación',  \Criteria::EQUAL)->find();
            $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');
            
            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Proceso\Form\ConsignacionForm($almecenes);
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            //CAMBIAMOS LOS VALORES DE FECHAS
            $form->get('compra_fechacompra')->setValue($entity->getCompraFechacompra('d/m/Y'));
            $form->get('compra_fechaentrega')->setValue($entity->getCompraFechaentrega('d/m/Y'));
            $form->get('compra_fechacreacion')->setValue($entity->getCompraFechacreacion('Y/m/d'));
            //SETEAMOS EL VALOR AUTOCOMPLETE
            $form->get('idproveedor_autocomplete')->setValue($entity->getProveedor()->getProveedorNombrecomercial());
            
            //LE PONEMOS LA CLASE VALID AL FOLIO
            $form->get('compra_folio')->setAttribute('class', 'form-control valid');
            
            //LOS DETALLES DE LA COMPRA
            $compra_detalle = \CompradetalleQuery::create()->filterByIdcompra($entity->getIdcompra())->find();
            
            //COUNT
            $count = \CompradetalleQuery::create()->orderByIdcompradetalle(\Criteria::DESC)->findOne();
            $count = $count->getIdcompradetalle() + 1;
   
            //Obtenemos el iva
            $iva = \TasaivaQuery::create()->findOne();
            $iva = $iva->getTasaivaValor();

            $view_model = new ViewModel();
            $view_model->setTemplate('/application/proceso/consignacion/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
                'compra_detalle' => $compra_detalle,
                'anio_activo' => $anio_activo,
                'mes_activo' => $mes_activo,
                'almacenes' => $almecenes,
                'count' => $count,
                'iva' => $iva,
            ));
            
            return $view_model;

        }else{
            return $this->redirect()->toUrl('/procesos/compra');
        }
        
    }
    
    public function eliminarAction() {

        $request = $this->getRequest();

        if ($request->isPost()) {

            $id = $this->params()->fromRoute('id');

            $entity = \CompraQuery::create()->findPk($id);
            $entity->delete();

            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/procesos/consignacion');
        }
    }
}

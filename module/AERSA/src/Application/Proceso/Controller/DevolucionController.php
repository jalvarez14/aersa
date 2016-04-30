<?php

namespace Application\Proceso\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class DevolucionController extends AbstractActionController {
    
    public function indexAction() {
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
         $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
         
         $anio_activo = $sucursal->getSucursalAnioactivo();
         $mes_activo = $sucursal->getSucursalMesactivo();
        
        $collection = \DevolucionQuery::create()->filterByIdsucursal($session['idsucursal'])->find();
        
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/devolucion/index');
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
           
            $post_data["devolucion_fechacreacion"] = date_create_from_format('d/m/Y', $post_data["devolucion_fechacreacion"]);
            //$post_data["devolucion_fechaentrega"] = date_create_from_format('d/m/Y', $post_data["devolucion_fechaentrega"]);
           
            $entity = new \Devolucion();
            foreach ($post_data as $key => $value){
                if(\DevolucionPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value,  \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            
            //SETEAMOS LA FECHA DE CREACION
            $entity->setDevolucionFechacreacion(new \DateTime())
                   ->setIdempresa($session['idempresa'])
                   ->setIdsucursal($session['idsucursal'])
                   ->setIdusuario($session['idusuario']);
            
            
            if($post_data['devolucion_revisada']){
                $entity->setIdauditor($session['idusuario']);
            }
           
            $entity->save();
            
            //EL COMPROBANTE
            if(!empty($post_files['devolucion_factura']['name'])){
                
                $type = $post_files['devolucion_factura']['type'];
                $type = explode('/', $type);
                $type = $type[1];
               
                $target_path = "/application/files/devoluciones/";
                $target_path = $target_path . 'devolucion_'.$entity->getIddevolucion() .'.'.$type;
                
                if(move_uploaded_file($_FILES['devolucion_factura']['tmp_name'],$_SERVER['DOCUMENT_ROOT'].$target_path)){
                    $entity->setDevolucionFactura($target_path);
                    $entity->save();
                }

            }
           
            //DEVOLUCION DETALLES
            foreach ($post_data['productos'] as $producto){
                
                $devolucion_detalle = new \Devoluciondetalle();
                $devolucion_detalle->setIddevolucion($entity->getIddevolucion())
                               ->setdevoluciondetalleRevisada(0)
                               ->setIdproducto($producto['idproducto'])
                               ->setDevoluciondetalleCantidad($producto['cantidad'])
                               //->setDevoluciondetallePrecio($producto['precio'])
                               //->setDevoluciondetalleCostounitario($producto['costo_unitario'])
                               ->setDevoluciondetalleDescuento($producto['descuento'])
                               ->setDevoluciondetalleIeps($producto['ieps'])
                               ->setDevoluciondetalleSubtotal($producto['subtotal']);
                

                $devolucion_detalle->setIdalmacen($producto['almacen']);
                
                if(isset($producto['revisada'])){
                    $devolucion_detalle->setDevoluciondetalleRevisada(1);
                }
                
                $devolucion_detalle->save();
                
            }
            
            //REDIRECCIONAMOS AL LISTADO
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/devolucion');
        }
        
        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();
        
        $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Créditos al costo',  \Criteria::NOT_EQUAL)->find();
        $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');
        
        $form = new \Application\Proceso\Form\DevolucionForm($almecenes);
        
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/devolucion/nuevoregistro');
        $view_model->setVariables(array(
            'form' => $form,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'almacenes' => json_encode($almecenes) //LO PASAMOS EN JSON POR QUE LO VAMOS A TRABAJR CON NUESTRO JS
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
        $exist = \DevolucionQuery::create()->filterByIddevolucion($id)->exists();
        
        if($exist){
            
            // OBTENEMOS EL MES Y EL ANIO ACTIVO DE LA SUCURSAL
            $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
            $anio_activo = $sucursal->getSucursalAnioactivo();
            $mes_activo = $sucursal->getSucursalMesactivo();
            
             //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \DevolucionQuery::create()->findPk($id);
            
            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) {

                $post_data = $request->getPost();
                $post_files = $request->getFiles();

                $post_data["devolucion_fechacreacion"] = date_create_from_format('d/m/Y', $post_data["decolucion_fechacreacion"]);
                //$post_data["compra_fechaentrega"] = date_create_from_format('d/m/Y', $post_data["compra_fechaentrega"]);

                foreach ($post_data as $key => $value) {
                    if (\DevolucionPeer::getTableMap()->hasColumn($key)) {
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                //SETEAMOS LA FECHA DE CREACION
                $entity->setDevolucionFechacreacion(new \DateTime())
                        ->setIdempresa($session['idempresa'])
                        ->setIdsucursal($session['idsucursal']);

                if ($post_data['devolucion_revisada']) {
                    $entity->setIdauditor($session['idusuario']);
                }

                $entity->save();

                //EL COMPROBANTE
                if (!empty($post_files['devolucion_factura']['name'])) {

                    $type = $post_files['devolucion_factura']['type'];
                    $type = explode('/', $type);
                    $type = $type[1];

                    $target_path = "/application/files/devoluciones/";
                    $target_path = $target_path . 'devolucion_' . $entity->getIddevolucion() . '.' . $type;

                    if (move_uploaded_file($_FILES['devolucion_factura']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                        $entity->setDevolucionFactura($target_path);
                        $entity->save();
                    }
                }

                //Devolucion DETALLES
                $entity->getDevoluciondetalles()->delete();
                
                foreach ($post_data['productos'] as $producto) {

                    $devolucion_detalle = new \Devoluciondetalle();
                    $devolucion_detalle->setIddevolucion($entity->getIddevolucion())
                            ->setDevoluciondetalleRevisada(0)
                            ->setIdproducto($producto['idproducto'])
                            ->setIdalmacen($producto['almacen'])
                            ->setDevoluciondetalleCantidad($producto['cantidad'])
                            ->setDevoluciondetallePrecio($producto['precio'])
                            ->setDevoluciondetalleCostounitario($producto['costo_unitario'])
                            ->setDevoluciondetalleDescuento($producto['descuento'])
                            ->setDevoluciondetalleIeps($producto['ieps'])
                            ->setDevoluciondetalleSubtotal($producto['subtotal']);

                    if (isset($producto['revisada'])) {
                        $devolucion_detalle->setDevoluciondetalleRevisada(1);
                    }

                    $devolucion_detalle->save();
                }

                //REDIRECCIONAMOS AL LISTADO
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/procesos/devolucion');
            }

            //NUESTROS ALMACENES
            $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Créditos al costo',  \Criteria::NOT_EQUAL)->find();
            $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');
            
            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Proceso\Form\DevolucionForm($almecenes);
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            //CAMBIAMOS LOS VALORES DE FECHAS
            $form->get('devolucion_fechacreacion')->setValue($entity->getDevolucionFechacreacion('d/m/Y'));
            //$form->get('compra_fechaentrega')->setValue($entity->getCompraFechaentrega('d/m/Y'));
            
            //SETEAMOS EL VALOR AUTOCOMPLETE
            $form->get('idproveedor_autocomplete')->setValue($entity->getProveedor()->getProveedorNombrecomercial());
            
            //LE PONEMOS LA CLASE VALID AL FOLIO
            $form->get('devolucion_folio')->setAttribute('class', 'form-control valid');
            
            //LOS DETALLES DE LA DEVOLUCION
            $devolucion_detalle = \DevoluciondetalleQuery::create()->filterByIddevolucion($entity->getIddevolucion())->find();
            
            //COUNT
            $count = \DevoluciondetalleQuery::create()->orderByIddevoluciondetalle(\Criteria::DESC)->findOne();
            $count = $count->getIddevoluciondetalle() + 1;
   
            
            $view_model = new ViewModel();
            $view_model->setTemplate('/application/proceso/devolucion/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
                'devolucion_detalle' => $devolucion_detalle,
                'anio_activo' => $anio_activo,
                'mes_activo' => $mes_activo,
                'almacenes' => $almecenes,
                'count' => $count
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

            return $this->redirect()->toUrl('/procesos/compra');
        }
    }
}

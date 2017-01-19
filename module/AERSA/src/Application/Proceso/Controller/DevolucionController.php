<?php

namespace Application\Proceso\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class DevolucionController extends AbstractActionController {
    
    public function getalmacenesbyinventarioAction(){
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            $date = date_create_from_format('d/m/Y H:i', $post_data['date']." 00:00");
            
            $result_array = array();
            $almacenes_array = \AlmacenQuery::create()->filterByAlmacenNombre('Créditos al costo',  \Criteria::NOT_EQUAL)->filterByAlmacenEstatus(1)->select(array('Idalmacen'))->filterByIdsucursal($session['idsucursal'])->find()->toArray();
            foreach ($almacenes_array as $almacen){
                $exist = \InventariomesQuery::create()->filterByIdalmacen($almacen)->filterByInventariomesFecha($date,  \Criteria::GREATER_EQUAL)->exists();
                if(!$exist){
                    $almacen_nombre = \AlmacenQuery::create()->findPk($almacen);
                    $almacen_nombre = $almacen_nombre->getAlmacenNombre();
                    $result_array[$almacen] = $almacen_nombre;
                }
            }
            return $this->getResponse()->setContent(json_encode($result_array));
        }
       
    }
    
    public function indexAction() {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);

        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();

        $collection = \DevolucionQuery::create()->filterByIdsucursal($session['idsucursal'])->orderByDevolucionFechadevolucion(\Criteria::DESC)->find();

        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/devolucion/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'idrol' => $session['idrol'],
        ));
        return $view_model;
    }

    public function validatefolioAction() {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $folio = $this->params()->fromQuery('folio');

        $to = new \DateTime();
        $from = date("Y-m-d", strtotime("-2 months"));
        $from = new \DateTime($from);

        $exist = \DevolucionQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByDevolucionFechadevolucion(array('min' => $from, 'to' => $to))->filterByDevolucionFolio($folio, \Criteria::LIKE)->exists();

        return $this->getResponse()->setContent(json_encode($exist));
    }

    public function nuevoregistroAction() {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $request = $this->getRequest();

        if ($request->isPost()) {

            $post_data = $request->getPost();
            $post_files = $request->getFiles();



            $post_data["devolucion_fechacreacion"] = date_create_from_format('d/m/Y', $post_data["devolucion_fechacreacion"]);


            $entity = new \Devolucion();
            foreach ($post_data as $key => $value) {

                if (\DevolucionPeer::getTableMap()->hasColumn($key)) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }


            //SETEAMOS LA FECHA DE CREACION
            $entity->setDevolucionFechacreacion(new \DateTime())
                    ->setIdempresa($session['idempresa'])
                    ->setIdsucursal($session['idsucursal'])
                    ->setIdusuario($session['idusuario']);

            $entity->setDevolucionFechadevolucion($post_data["devolucion_fechacreacion"]);


            if ($post_data['devolucion_revisada']) {
                $entity->setIdauditor($session['idusuario']);
            }

            $entity->save();

            //EL COMPROBANTE
            if (!empty($post_files['devolucion_factura']['name'])) {

                $type = $post_files['devolucion_factura']['type'];
                $type = explode('/', $type);
                $type = $type[1];

                $target_path = "application/files/devoluciones/";
                $target_path = $target_path . 'devolucion_' . $entity->getIddevolucion() . '.' . $type;

                if (move_uploaded_file($post_files['devolucion_factura']['name'], $_SERVER['DOCUMENT_ROOT'] . $target_path)) {

                    $entity->setDevolucionFactura($target_path);
                    $entity->save();
                }
            }

            //DEVOLUCION DETALLES
            foreach ($post_data['productos'] as $producto) {

                $devolucion_detalle = new \Devoluciondetalle();
                $devolucion_detalle->setIddevolucion($entity->getIddevolucion())
                        ->setdevoluciondetalleRevisada(0)
                        ->setIdproducto($producto['idproducto'])
                        ->setDevoluciondetalleCantidad($producto['cantidad'])
                        ->setDevoluciondetalleCostounitario($producto['precio'])
                        ->setDevoluciondetalleCostounitarioneto($producto['costo_unitario'])
                        ->setDevoluciondetalleDescuento($producto['descuento'])
                        ->setDevoluciondetalleIeps($producto['ieps'])
                        ->setDevoluciondetalleSubtotal($producto['subtotal']);


                $devolucion_detalle->setIdalmacen($producto['almacen']);

                if (isset($producto['revisada'])) {
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

        $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Créditos al costo', \Criteria::NOT_EQUAL)->find();
        $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');

        $form = new \Application\Proceso\Form\DevolucionForm($almecenes);

        $iva = \TasaivaQuery::create()->findOne();

        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/devolucion/nuevoregistro');
        $view_model->setVariables(array(
            'form' => $form,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'almacenes' => json_encode($almecenes), //LO PASAMOS EN JSON POR QUE LO VAMOS A TRABAJR CON NUESTRO JS
            'iva' => $iva,
            'idrol' => $session['idrol'],
        ));

        return $view_model;
    }

    public function editarAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        $type = $this->params()->fromRoute('type');
        //VERIFICAMOS SI EXISTE
        $exist = \DevolucionQuery::create()->filterByIddevolucion($id)->exists();

        if ($exist) {
            // OBTENEMOS EL MES Y EL ANIO ACTIVO DE LA SUCURSAL
            $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
            $anio_activo = $sucursal->getSucursalAnioactivo();
            $mes_activo = $sucursal->getSucursalMesactivo();

            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \DevolucionQuery::create()->findPk($id);

            //SI NOS ENVIAN UNA PETICION POST
            if ($type != NULL) {
                
                $fecha = $entity->getDevolucionFechadevolucion('d/m/Y');
                $provee=$entity->getProveedor()->getProveedorNombrecomercial();
                $folio= $entity->getDevolucionFolio();
                $factura=($entity->getDevolucionFactura()!=NULL) ? "Si" : "No";
                $alm=$entity->getAlmacen()->getAlmacenNombre();
                $rev=($entity->getDevolucionRevisada()==1)? "Si" : "No";
                $creado=$entity->getUsuarioRelatedByIdusuario()->getUsuarioNombre();
                $auditor=($entity->getIdauditor()!=NULL) ? $entity->getUsuarioRelatedByIdauditor()->getUsuarioNombre() : "";
                
                $dev=array('fecha'=>$fecha,'proveedor'=>$provee,'folio'=>$folio,'factura'=>$factura,'alm'=>$alm,'rev'=>$rev,'creado'=>$creado,'auditor'=>$auditor,'total'=>$totalbruto);
                
                $subtotal=$entity->getDevolucionSubtotal();
                $iepse=$entity->getDevolucionIeps();
                $iva=$entity->getDevolucionIva();
                $total=$entity->getDevolucionTotal();
                
                $totalArray=array('sub'=>$subtotal,'ieps'=>$iepse,'iva'=>$iva,'total'=>$total);
                $col = array();
                $devdetallesobj = \DevoluciondetalleQuery::create()->filterByIddevolucion($id)->find();
                $devdetalleobj = new \Devoluciondetalle();
                array_push($col, array('uno' => 'Producto','dos' => 'Unidad', 'tres' => 'Cantidad','cuatro' => 'Precio', 'cinco' =>'C.U. Neto','seis' => 'Desc. (%)', 'siete' => 'IEPS (%)','ocho' => 'Subtotal','nueve' => 'Revisada','diez' => 'Almacen'));
                
                foreach ($devdetallesobj as $devdetalleobj) {
                    $prod=$devdetalleobj->getProducto()->getProductoNombre();
                    $unidad=$devdetalleobj->getProducto()->getUnidadmedida()->getUnidadmedidaNombre();
                    $cantidad=$devdetalleobj->getDevoluciondetalleCantidad();
                    $precio=$devdetalleobj->getDevoluciondetalleCostounitario();
                    $cuneto=$devdetalleobj->getDevoluciondetalleCostounitarioneto();
                    $desc=$devdetalleobj->getDevoluciondetalleDescuento();
                    $ieps=$devdetalleobj->getDevoluciondetalleIeps();
                    $subtot=$devdetalleobj->getDevoluciondetalleSubtotal();
                    $rev = ($devdetalleobj->getDevoluciondetalleRevisada() == 1) ? "Si" : "No";
                    $almd=$devdetalleobj->getAlmacen()->getAlmacenNombre();
                    array_push($col, array('uno' => $prod,'dos' => $unidad, 'tres' => $cantidad,'cuatro' => $precio, 'cinco' =>$cuneto, 'seis' => $desc, 'siete' => $ieps,'ocho' => $subtot,'nueve' => $rev,'diez' => $almd));
                }
                $nombreEmpresa = \EmpresaQuery::create()->findPk($session['idempresa'])->getEmpresaNombrecomercial();
                $nombreSucursal = \SucursalQuery::create()->findPk($session['idsucursal'])->getSucursalNombre();

                $template = '/devolucion.xlsx';
                $templateDir = $_SERVER['DOCUMENT_ROOT'] . '/application/files/jasper/templates';
                
                $config = array(
                    'template' => $template,
                    'templateDir' => $templateDir
                );
                $R = new \PHPReport($config);
                $R->load(array(
                    array(
                        'id' => 'compania',
                        'data' => array('nombre' => $nombreEmpresa, 'sucursal' => $nombreSucursal),
                    ),
                    array(
                        'id' => 'dev',
                        'data' => $dev,
                    ),
                    array(
                        'id' => 'total',
                        'data' => $totalArray,
                    ),
                    array(
                        'id' => 'col',
                        'repeat' => true,
                        'data' => $col,
                        'minRows' => 2,
                    )
                        )
                );
                if ($type == 'pdf')
                    echo $R->render('PDF');
                else
                    echo $R->render('excel');
                exit();
            }
            if ($request->isPost()) {

                $post_data = $request->getPost();
                $post_files = $request->getFiles();

                $post_data["devolucion_fechadevolucion"] = date_create_from_format('d/m/Y', $post_data["devolucion_fechadevolucion"]);
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
                    $notification_exist = \NotificacionQuery::create()->filterByNotificacionProceso("devolucion")->filterByIdproceso($entity->getIddevolucion())->exists();
                    if($notification_exist){
                         $notification = \NotificacionQuery::create()->filterByNotificacionProceso("devolucion")->filterByIdproceso($entity->getIddevolucion())->findOne();
                         $notification->setRol1(1)->save();
                         $notification->setRol2(1)->save();
                         $notification->setRol3(1)->save();
                         $notification->setRol4(1)->save();
                         $notification->setRol5(1)->save();
                    }
                }

                $entity->save();

                //EL COMPROBANTE
                if (!empty($post_files['devolucion_factura']['name'])) {

                    $file_type = $post_files['devolucion_factura']['type'];
                    $file_type = explode('/', $file_type);
                    $file_type = $file_type[1];

                    $target_path = "/application/files/devoluciones/";
                    $target_path = $target_path . 'devolucion_' . $entity->getIddevolucion() . '.' . $file_type;
                    
                   
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
                            ->setDevoluciondetalleCostounitario($producto['precio'])
                            ->setDevoluciondetalleCostounitarioneto($producto['costo_unitario'])
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
            $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Créditos al costo', \Criteria::NOT_EQUAL)->find();
            $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Proceso\Form\DevolucionForm($almecenes);

            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

            //CAMBIAMOS LOS VALORES DE FECHAS
            $form->get('devolucion_fechadevolucion')->setValue($entity->getDevolucionFechadevolucion('d/m/Y'));

            //SETEAMOS EL VALOR AUTOCOMPLETE
            $form->get('idproveedor_autocomplete')->setValue($entity->getProveedor()->getProveedorNombrecomercial());

            //LE PONEMOS LA CLASE VALID AL FOLIO
            $form->get('devolucion_folio')->setAttribute('class', 'form-control valid');

            //LOS DETALLES DE LA DEVOLUCION
            $devolucion_detalle = \DevoluciondetalleQuery::create()->filterByIddevolucion($entity->getIddevolucion())->find();


            //COUNT
            $count = \DevoluciondetalleQuery::create()->orderByIddevoluciondetalle(\Criteria::DESC)->findOne();
            $count = $count->getIddevoluciondetalle() + 1;

            $iva = \TasaivaQuery::create()->findOne();

            $view_model = new ViewModel();
            $view_model->setTemplate('/application/proceso/devolucion/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
                'devolucion_detalle' => $devolucion_detalle,
                'anio_activo' => $anio_activo,
                'mes_activo' => $mes_activo,
                'almacenes' => $almecenes,
                'count' => $count,
                'mes_devolucion' => $entity->getDevolucionFechacreacion('m'),
                'anio_devolucion' => $entity->getDevolucionFechacreacion('Y'),
                'iva' => $iva,
                'idrol' => $session['idrol'],
            ));

            return $view_model;
        } else {
            return $this->redirect()->toUrl('/procesos/devolucion');
        }
    }

    public function eliminarAction() {

        $request = $this->getRequest();

        if ($request->isPost()) {

            $id = $this->params()->fromRoute('id');

            $entity = \DevolucionQuery::create()->findPk($id);
            $entity->delete();

            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/procesos/devolucion');
        }
    }

}

<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Proceso\Controller;
include getcwd() . '/vendor/jasper/phpreport/PHPReport.php';

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class CompraController extends AbstractActionController {

    public function agregarproveedorAction() {
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $compra = \CompraQuery::create()->findPk($post_data['idcompra']);
            $compra->setIdproveedor($post_data['idproveedor'])->save();
            //REDIRECCIONAMOS AL LISTADO
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/compra');
        }
    }

    public function indexAction() {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);

        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();

        $collection = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->orderByCompraFechacompra(\Criteria::DESC)->filterByCompraTipo('consignacion', \Criteria::NOT_EQUAL)->find();

        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/compra/index');
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
        $edit = (!is_null($this->params()->fromQuery('edit'))) ? $this->params()->fromQuery('edit') : false;
        $idproveedor = $this->params()->fromQuery('idproveedor');

        $to = new \DateTime();
        $from = date("Y-m-d", strtotime("-2 months"));
        $from = new \DateTime($from);

        if ($edit) {
            $id = $this->params()->fromQuery('id');
            $entity = \CompraQuery::create()->findPk($id);
            $exist = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByCompraFechacompra(array('min' => $from, 'to' => $to))->filterByCompraTipo('consignacion', \Criteria::NOT_EQUAL)->filterByCompraFolio($entity->getCompraFolio(), \Criteria::NOT_EQUAL)->filterByCompraFolio($folio, \Criteria::LIKE)->filterByIdproveedor($idproveedor)->exists();
        } else {
            $exist = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByCompraFechacompra(array('min' => $from, 'to' => $to))->filterByCompraTipo('consignacion', \Criteria::NOT_EQUAL)->filterByCompraFolio($folio, \Criteria::EQUAL)->filterByIdproveedor($idproveedor)->exists();
        }

        return $this->getResponse()->setContent(json_encode($exist));
    }

    public function nuevoregistroAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $request = $this->getRequest();

        if ($request->isPost()) {

            $post_data = $request->getPost();

            $post_files = $request->getFiles();

            $post_data["compra_fechacompra"] = date_create_from_format('d/m/Y', $post_data["compra_fechacompra"]);
            $post_data["compra_fechaentrega"] = date_create_from_format('d/m/Y', $post_data["compra_fechaentrega"]);

            $entity = new \Compra();
            foreach ($post_data as $key => $value) {
                if (\CompraPeer::getTableMap()->hasColumn($key)) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }


            //SETEAMOS LA FECHA DE CREACION
            $entity->setCompraFechacreacion(new \DateTime())
                    ->setIdempresa($session['idempresa'])
                    ->setIdsucursal($session['idsucursal'])
                    ->setIdusuario($session['idusuario']);


            if ($post_data['compra_revisada']) {
                $entity->setIdauditor($session['idusuario']);
            }

            //ANTES DE GUARDAR VERIFICAMOS QUE NO EXISTA UNA COMPRA CON EL MISMO FOLIO
            $to = new \DateTime();
            $from = date("Y-m-d", strtotime("-2 months"));
            $from = new \DateTime($from);
            $folio_exists = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByCompraFechacompra(array('min' => $from, 'to' => $to))->filterByCompraTipo('consignacion', \Criteria::NOT_EQUAL)->filterByCompraFolio($entity->getCompraFolio(), \Criteria::NOT_EQUAL)->filterByCompraFolio($entity->getCompraFolio(), \Criteria::LIKE)->filterByIdproveedor($entity->getIdproveedor())->exists();
            if (!$folio_exists) {
                $entity->save();
            } else {
                //COMPRA EXISTENTE
                $compra_existente = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByCompraFechacompra(array('min' => $from, 'to' => $to))->filterByCompraTipo('consignacion', \Criteria::NOT_EQUAL)->filterByCompraFolio($entity->getCompraFolio(), \Criteria::NOT_EQUAL)->filterByCompraFolio($entity->getCompraFolio(), \Criteria::LIKE)->filterByIdproveedor($entity->getIdproveedor())->findOne();
                $compra_existente->delete();
                $entity->save();
                $this->flashMessenger()->addWarningMessage('Ocurrio un error de conexion durante el proceso de guardar, validar la compra registrada!');
            }

            //DESPUES DE GUARDAR TAMBIEN VALIDAMOS QUE NO SE HAYAN CREADO 2 COMPRAS Y SI ES ASI ELIMINAMOS LA DE MENOR TOTAL
            $compra_existente = $compra_existente = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByCompraFechacompra(array('min' => $from, 'to' => $to))->filterByCompraTipo('consignacion', \Criteria::NOT_EQUAL)->filterByCompraFolio($entity->getCompraFolio(), \Criteria::NOT_EQUAL)->filterByCompraFolio($entity->getCompraFolio(), \Criteria::LIKE)->filterByIdproveedor($entity->getIdproveedor())->count();
            if ($compra_existente > 1) {
                $compra_existente = $compra_existente = \CompraQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByCompraFechacompra(array('min' => $from, 'to' => $to))->filterByCompraTipo('consignacion', \Criteria::NOT_EQUAL)->filterByCompraFolio($entity->getCompraFolio(), \Criteria::NOT_EQUAL)->filterByCompraFolio($entity->getCompraFolio(), \Criteria::LIKE)->filterByIdproveedor($entity->getIdproveedor())->orderByCompraTotal(\Criteria::DESC)->findOne();
                $compra_existente->delete();
                $this->flashMessenger()->addWarningMessage('Ocurrio un error de conexion durante el proceso de guardar, validar la compra registrada!');
            }

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
            foreach ($post_data['productos'] as $producto) {

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

                if ($entity->getCompraTipo() == 'compra') {
                    $compra_detalle->setIdalmacen($producto['almacen']);
                    if (isset($producto['revisada'])) {
                        $product = \ProductoQuery::create()->findPk($producto['idproducto']);
                        $product->setProductoCosto($producto['costo_unitario'])->save();
                        \Application\Catalogo\Controller\ProductoController::updateSubreceta($product->getIdproducto());
                    }
                }

                if (isset($producto['revisada'])) {
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

        $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Créditos al costo', \Criteria::NOT_EQUAL)->find();
        $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');

        $form = new \Application\Proceso\Form\CompraForm($almecenes);

        //Obtenemos el iva
        $iva = \TasaivaQuery::create()->findOne();
        $iva = $iva->getTasaivaValor();

        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/compra/nuevoregistro');
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
        $exist = \CompraQuery::create()->filterByIdcompra($id)->exists();

        if ($exist) {

            // OBTENEMOS EL MES Y EL ANIO ACTIVO DE LA SUCURSAL
            $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
            $anio_activo = $sucursal->getSucursalAnioactivo();
            $mes_activo = $sucursal->getSucursalMesactivo();

            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \CompraQuery::create()->findPk($id);
            if ($type != NULL) {
                $fecha = $entity->getCompraFechacompra('d/m/Y');
                $proveedor = $entity->getProveedor()->getProveedorNombrecomercial();
                $fechaentrega = $entity->getCompraFechaentrega();
                $almacen = $entity->getAlmacen()->getAlmacenNombre();
                $creado = $entity->getUsuarioRelatedByIdusuario()->getUsuarioNombre();
                $tipo = $entity->getCompraTipo();
                $folio = $entity->getCompraFolio();
                $factura = ($entity->getCompraFactura() != NULL) ? "Si" : "No";
                $revision = ($entity->getCompraRevisada() == 1) ? "Si" : "No";
                $auditor = ($entity->getIdauditor()!=NULL) ? $entity->getUsuarioRelatedByIdauditor()->getUsuarioNombre() : "";
                $compra = array('fecha' => $fecha, 'proveedor' => $proveedor, 'fechaentrega' => $fechaentrega, 'almacen' => $almacen, 'creado' => $creado, 'tipo' => $tipo, 'folio' => $folio, 'factura' => $factura, 'revision' => $revision, 'auditor' => $auditor);
                
                $col = array();
                $comprasdetallesobj=  \CompradetalleQuery::create()->filterByIdcompra($id)->find();
                $compradetalleobj=  new \Compradetalle();
                array_push($col, array('uno'=>'Producto','dos'=>'Unidad','tres'=>'Cantidad','cuatro'=>'Precio','cinco'=>'C.U.Neto','seis'=>'Des. %','siete'=>'IEPS %','ocho'=>'Subtotal','nueve'=>'Revisada','diez'=>'Almacen'));
                foreach ($comprasdetallesobj as $compradetalleobj) {
                    $prod=$compradetalleobj->getProducto()->getProductoNombre();
                    $unid=$compradetalleobj->getProducto()->getUnidadmedida()->getUnidadmedidaNombre();
                    $cant=$compradetalleobj->getCompradetalleCantidad();
                    $prec=$compradetalleobj->getCompradetallePrecio();
                    $cuneto=$compradetalleobj->getCompradetalleCostounitarioneto();
                    $desc=$compradetalleobj->getCompradetalleDescuento();
                    $ieps=$compradetalleobj->getCompradetalleIeps();
                    $subtotal=$compradetalleobj->getCompradetalleSubtotal();
                    $rev=($compradetalleobj->getCompradetalleRevisada()==1) ? "Si": "No";
                    $alm=$compradetalleobj->getAlmacen()->getAlmacenNombre();
                    array_push($col, array('uno'=>$prod,'dos'=>$unid,'tres'=>$cant,'cuatro'=>$prec,'cinco'=>$cuneto,'seis'=>$desc,'siete'=>$ieps,'ocho'=>$subtotal,'nueve'=>$rev,'diez'=>$alm));
                }
                $subtotal_c=$entity->getCompraSubtotal();
                $ieps_c=$entity->getCompraIeps();
                $iva_c=$entity->getCompraIva();
                $total_c=$entity->getCompraTotal();
                $costo=array('sub'=>$subtotal_c,'ieps'=>$ieps_c,'iva'=>$iva_c,'total'=>$total_c);
                
                $nombreEmpresa = \EmpresaQuery::create()->findPk($session['idempresa'])->getEmpresaNombrecomercial();
                $nombreSucursal = \SucursalQuery::create()->findPk($session['idsucursal'])->getSucursalNombre();
                    
                $template = '/compras.xlsx';
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
                        'id' => 'compra',
                        'data' => $compra,
                    ),
                    array(
                        'id' => 'costo',
                        'repeat' => true,
                        'data' => $costo,
                    )
                    ,
                    array(
                        'id' => 'col',
                        'repeat' => true,
                        'data' => $col,
                        'minRows' => 2,
                    )
                        )
                );
                if ($type=='pdf')
                    echo $R->render('PDF');
                else
                    echo $R->render('excel');
                exit();
            }

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

                    if ($entity->getCompraTipo() == 'compra') {
                        $compra_detalle->setIdalmacen($producto['almacen']);
                        if (isset($producto['revisada'])) {
                            $product = \ProductoQuery::create()->findPk($producto['idproducto']);
                            $product->setProductoCosto($producto['costo_unitario'])->save();
                            \Application\Catalogo\Controller\ProductoController::updateSubreceta($product->getIdproducto());
                        }
                    }

                    if (isset($producto['revisada'])) {
                        $compra_detalle->setCompradetalleRevisada(1);
                    }

                    $compra_detalle->save();
                }

                //REDIRECCIONAMOS AL LISTADO
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/procesos/compra');
            }

            //NUESTROS ALMACENES
            $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Créditos al costo', \Criteria::NOT_EQUAL)->find();
            $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Proceso\Form\CompraForm($almecenes);

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
            $compra_detalle = \CompradetalleQuery::create()->filterByIdcompra($entity->getIdcompra())->orderByIdcompradetalle(\Criteria::ASC)->find();


            //COUNT
            $count = \CompradetalleQuery::create()->orderByIdcompradetalle(\Criteria::DESC)->findOne();
            $count = $count->getIdcompradetalle() + 1;

            //Obtenemos el iva
            $iva = \TasaivaQuery::create()->findOne();
            $iva = $iva->getTasaivaValor();

            $view_model = new ViewModel();
            $view_model->setTemplate('/application/proceso/compra/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
                'compra_detalle' => $compra_detalle,
                'anio_activo' => $anio_activo,
                'mes_activo' => $mes_activo,
                'almacenes' => $almecenes,
                'count' => $count,
                'iva' => $iva,
                'idrol' => $session['idrol'],
            ));

            return $view_model;
        } else {
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

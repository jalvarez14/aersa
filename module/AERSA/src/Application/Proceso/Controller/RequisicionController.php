<?php

namespace Application\Proceso\Controller;
include getcwd() . '/vendor/jasper/phpreport/PHPReport.php';

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class RequisicionController extends AbstractActionController {

    public function indexAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idusuario = $session['idusuario'];
        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $collection = \RequisicionQuery::create()->orderByRequisicionFecha(\Criteria::DESC)->filterByIdempresa($idempresa)->filterByIdsucursalorigen($idsucursal)->_or()->filterByIdsucursaldestino($idsucursal)->find();
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/requisicion/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
            'idusuario' => $idusuario,
            'anio_activo' => $anio_activo,
            'idsucursal' => $idsucursal,
            'mes_activo' => $mes_activo,
            'idrol' => $session['idrol'],
        ));
        return $view_model;
    }

    public function nuevoAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idusuario = $session['idusuario'];
        $request = $this->getRequest();

        //FOLIO DEFAULT
        $folio_default = \FoliorequisicionQuery::create()->filterByIdsucursal($session['idsucursal'])->exists();
        if ($folio_default) {
            $folio_default = \FoliorequisicionQuery::create()->filterByIdsucursal($session['idsucursal'])->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);
            $folio_default = $folio_default['folio'];
        } else {
            $folio_default = 1001;
        }

        if ($request->isPost()) {
            $post_data = $request->getPost();
            // echo '<pre>';var_dump($post_data);echo '</pre>';exit();
            $requisicion = new \Requisicion();
            $post_data["requisicion_fecha"] = date_create_from_format('d/m/Y', $post_data["requisicion_fecha"]);
            $post_data["idusuario"] = $idusuario;
            if ($post_data["requisicion_revisada"] == 1)
                $post_data["idauditor"] = $idusuario;
            foreach ($post_data as $key => $value) {
                if (\RequisicionPeer::getTableMap()->hasColumn($key)) {
                    $requisicion->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }

            //SETEAMOS LA FECHA DE CREACION
            $requisicion->setRequisicionFechacreacion(new \DateTime())
                    ->setIdempresa($session['idempresa']);

            $requisicion->save();

            //REQUISICION FOLIO
            if ($folio_default == $post_data['requisicion_folio']) {
                $folio_exist = \FoliorequisicionQuery::create()->filterByIdsucursal($session['idsucursal'])->exists();
                if ($folio_exist) {
                    $folio_requisicion = \FoliorequisicionQuery::create()->filterByIdsucursal($session['idsucursal'])->findOne();
                    $folio_requisicion->setFolio($folio_default + 1);
                    $folio_requisicion->save();
                } else {
                    $folio_requisicion = new \Foliorequisicion();
                    $folio_requisicion->setFolio($folio_default + 1);
                    $folio_requisicion->setIdempresa($session['idempresa']);
                    $folio_requisicion->setIdsucursal($session['idsucursal']);
                    $folio_requisicion->save();
                }
            }

            //REQUISICION DETALLES
            foreach ($post_data['productos'] as $producto) {
                $tipopro = \ProductoQuery::create()->filterByIdproducto($producto['idproducto'])->findOne();

                $requisicion_detalle = new \Requisiciondetalle();
                foreach ($producto as $key => $value) {
                    if (\RequisiciondetallePeer::getTableMap()->hasColumn($key)) {
                        $requisicion_detalle->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                $requisicion_detalle->setRequisiciondetallePreciounitario($tipopro->getProductoCosto());
                if (isset($producto['requisiciondetalle_revisada'])) {
                    $requisicion_detalle->setRequisiciondetalleRevisada(1);
                }
                $requisicion_detalle->setIdrequisicion($requisicion->getIdrequisicion());

                $requisicion_detalle->save();

                if ($tipopro->getProductoTipo() != 'simple') {
                    $receta = new \Receta();
                    $receta = \RecetaQuery::create()->filterByIdproducto($tipopro->getIdproducto())->find();
                    foreach ($receta as $pro) {
                        $requisiciond = new \Requisiciondetalle();
                        $costouni = \ProductoQuery::create()->filterByIdproducto($pro->getIdproductoreceta())->findOne()->getProductoCosto();
                        $requisiciond->setIdrequisicion($requisicion->getIdrequisicion())
                                ->setIdproducto($pro->getIdproductoreceta())
                                ->setRequisiciondetalleCantidad($pro->getRecetaCantidad() * $requisicion_detalle->getRequisiciondetalleCantidad())
                                ->setRequisiciondetalleRevisada($requisicion_detalle->getRequisiciondetalleRevisada())
                                ->setRequisiciondetallePreciounitario($costouni)
                                ->setRequisiciondetalleSubtotal($costouni * ($pro->getRecetaCantidad() * $requisicion_detalle->getRequisiciondetalleCantidad()))
                                ->setIdpadre($requisicion_detalle->getIdrequisiciondetalle());
                        $requisiciond->save();
                    }
                }
            }
            //REDIRECCIONAMOS AL LISTADO
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/requisicion');
        }
        $sucursalorg = \SucursalQuery::create()->filterByIdsucursal($session['idsucursal'])->findOne();

        $sucursaldes_array = array();
        $sucursaldes = \SucursalQuery::create()->filterByIdempresa($idempresa)->find();
        foreach ($sucursaldes as $sucursal) {

            $id = $sucursal->getIdsucursal();
            $sucursaldes_array[$id] = $sucursal->getSucursalNombre();
        }

        $almacen_array = array();
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->find();
        foreach ($almacenes as $almacen) {
            $id = $almacen->getIdalmacen();
            $almacen_array[$id] = $almacen->getAlmacenNombre();
        }

        $concepto_array = array();
        $conceptos = \ConceptosalidaQuery::create()->find();
        foreach ($conceptos as $concepto) {
            $id = $concepto->getIdconceptosalida();
            $concepto_array[$id] = $concepto->getConceptosalidaNombre();
        }

        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();

        //INTANCIAMOS NUESTRA VISTA
        $form = new \Application\Proceso\Form\RequisicionForm($sucursalorg, $almacen_array, $sucursaldes_array, $concepto_array);
        $form->get('requisicion_folio')->setValue($folio_default);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'idrol' => $session['idrol'],
        ));
        $view_model->setTemplate('/application/proceso/requisicion/nuevo');
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
        $exist = \RequisicionQuery::create()->filterByIdrequisicion($id)->exists();

        if ($exist) {

            // OBTENEMOS EL MES Y EL ANIO ACTIVO DE LA SUCURSAL
            $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
            $anio_activo = $sucursal->getSucursalAnioactivo();
            $mes_activo = $sucursal->getSucursalMesactivo();
            $entity = \RequisicionQuery::create()->findPk($id);
            //SI NOS ENVIAN UNA PETICION POST
            if ($type != NULL) {
                $fecha = $entity->getRequisicionFecha('d/m/Y');
                $sucorg = $entity->getSucursalRelatedByIdsucursalorigen()->getSucursalNombre();
                $sucdes = $entity->getSucursalRelatedByIdsucursaldestino()->getSucursalNombre();
                $consal = $entity->getConceptosalida()->getConceptosalidaNombre();
                $creado = $entity->getUsuarioRelatedByIdusuario()->getUsuarioNombre();
                $folio = $entity->getRequisicionFolio();
                $almorg = $entity->getAlmacenRelatedByIdalmacenorigen()->getAlmacenNombre();
                $almdes = $entity->getAlmacenRelatedByIdalmacendestino()->getAlmacenNombre();
                $revision = ($entity->getRequisicionRevisada() == 1) ? "Si" : "No";
                $auditor = ($entity->getIdauditor() != NULL) ? $entity->getUsuarioRelatedByIdauditor()->getUsuarioNombre() : "";
                $total = $entity->getRequisicionTotal();
                $requisicion = array('fecha' => $fecha, 'sucorg' => $sucorg, 'sucdes' => $sucdes, 'consal' => $consal, 'creado' => $creado, 'folio' => $folio, 'almorg' => $almorg, 'almdes' => $almdes, 'revision' => $revision, 'auditor' => $auditor, 'total' => $total);
                $col = array();
                $requisicionesdetallesobj = \RequisiciondetalleQuery::create()->filterByIdrequisicion($id)->find();
                $requisiciondetalleobj = new \Requisiciondetalle();
                array_push($col, array('uno' => 'Tipo', 'dos' => 'Producto', 'tres' => 'Unidad', 'cuatro' => 'Cantidad', 'cinco' => 'Precio unitario', 'seis' => 'Subtotal', 'siete' => 'Revisada'));
                foreach ($requisicionesdetallesobj as $requisiciondetalleobj) {
                    $tipo = $requisiciondetalleobj->getProducto()->getProductoTipo();
                    $prod = $requisiciondetalleobj->getProducto()->getProductoNombre();
                    $unidad = $requisiciondetalleobj->getProducto()->getUnidadmedida()->getUnidadmedidaNombre();
                    $cantidad = $requisiciondetalleobj->getRequisiciondetalleCantidad();
                    $preciou = $requisiciondetalleobj->getRequisiciondetallePreciounitario();
                    $subtotal = $requisiciondetalleobj->getRequisiciondetalleSubtotal();
                    $rev = ($requisiciondetalleobj->getRequisiciondetalleRevisada() == 1) ? "Si" : "No";
                    array_push($col, array('uno' => $tipo, 'dos' => $prod, 'tres' => $unidad, 'cuatro' => $cantidad, 'cinco' => $preciou, 'seis' => $subtotal, 'siete' => $rev));
                }
                $nombreEmpresa = \EmpresaQuery::create()->findPk($session['idempresa'])->getEmpresaNombrecomercial();
                $nombreSucursal = \SucursalQuery::create()->findPk($session['idsucursal'])->getSucursalNombre();

                $template = '/requisiciones.xlsx';
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
                        'id' => 'requisicion',
                        'data' => $requisicion,
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
                $post_data["requisicion_fecha"] = date_create_from_format('d/m/Y', $post_data["requisicion_fecha"]);
                foreach ($post_data as $key => $value) {
                    if (\RequisicionPeer::getTableMap()->hasColumn($key)) {
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                if ($post_data['requisicion_revisada']) {
                    $entity->setIdauditor($session['idusuario']);
                }
                $entity->save();

                //Requisicion DETALLES
                $entity->getRequisiciondetalles()->delete();
                foreach ($post_data['productos'] as $producto) {
                    $requisicion_detalle = new \Requisiciondetalle();
                    foreach ($producto as $key => $value) {
                        if (\RequisiciondetallePeer::getTableMap()->hasColumn($key)) {
                            $requisicion_detalle->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                        }
                    }

                    if (isset($producto['requisiciondetalle_revisada'])) {
                        $requisicion_detalle->setRequisiciondetalleRevisada(1);
                    }
                    $requisicion_detalle->setIdrequisicion($entity->getIdrequisicion());
                    $requisicion_detalle->save();
                    $tipopro = \ProductoQuery::create()->filterByIdproducto($requisicion_detalle->getIdproducto())->findOne();
                    if ($tipopro->getProductoTipo() != 'simple') {
                        $receta = new \Receta();
                        $receta = \RecetaQuery::create()->filterByIdproducto($tipopro->getIdproducto())->find();
                        foreach ($receta as $pro) {
                            $requisiciond = new \Requisiciondetalle();
                            $costouni = \ProductoQuery::create()->filterByIdproducto($pro->getIdproductoreceta())->findOne()->getProductoCosto();
                            $requisiciond->setIdrequisicion($entity->getIdrequisicion())
                                    ->setIdproducto($pro->getIdproductoreceta())
                                    ->setRequisiciondetalleCantidad($pro->getRecetaCantidad() * $requisicion_detalle->getRequisiciondetalleCantidad())
                                    ->setRequisiciondetalleRevisada($requisicion_detalle->getRequisiciondetalleRevisada())
                                    ->setRequisiciondetallePreciounitario($costouni)
                                    ->setRequisiciondetalleSubtotal($costouni * ($pro->getRecetaCantidad() * $requisicion_detalle->getRequisiciondetalleCantidad()))
                                    ->setIdpadre($requisicion_detalle->getIdrequisiciondetalle());
                            $requisiciond->save();
                        }
                    }
                }
                //REDIRECCIONAMOS AL LISTADO
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/procesos/requisicion');
            }


            if ($session['idsucursal'] == $entity->getIdsucursalorigen()) {
                $sucursalorg = \SucursalQuery::create()->filterByIdsucursal($session['idsucursal'])->findOne();

                $sucursaldes_array = array();
                $sucursaldes = \SucursalQuery::create()->filterByIdempresa($session['idempresa'])->find();
                foreach ($sucursaldes as $sucursal) {

                    $id = $sucursal->getIdsucursal();
                    $sucursaldes_array[$id] = $sucursal->getSucursalNombre();
                }

                $almacen_array = array();
                $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->find();
                foreach ($almacenes as $almacen) {
                    $id = $almacen->getIdalmacen();
                    $almacen_array[$id] = $almacen->getAlmacenNombre();
                }

                $concepto_array = array();
                $conceptos = \ConceptosalidaQuery::create()->find();
                foreach ($conceptos as $concepto) {
                    $id = $concepto->getIdconceptosalida();
                    $concepto_array[$id] = $concepto->getConceptosalidaNombre();
                }

                $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
                $anio_activo = $sucursal->getSucursalAnioactivo();
                $mes_activo = $sucursal->getSucursalMesactivo();

                //INTANCIAMOS NUESTRA ENTIDAD
                $id = $this->params()->fromRoute('id');

                //INTANCIAMOS NUESTRO FORMULARIO
                $form = new \Application\Proceso\Form\RequisicionForm($sucursalorg, $almacen_array, $sucursaldes_array, $concepto_array);

                //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
                $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

                //CAMBIAMOS LOS VALORES DE FECHAS
                $form->get('requisicion_fecha')->setValue($entity->getRequisicionFecha('d/m/Y'));
                $form->get('requisicion_fechacreacion')->setValue($entity->getRequisicionFechacreacion('Y/m/d'));

                //LE PONEMOS LA CLASE VALID AL FOLIO
                $form->get('requisicion_folio')->setAttribute('class', 'form-control valid');

                //LOS DETALLES DE LA COMPRA
                $requisiciondetalle = \RequisiciondetalleQuery::create()->filterByIdrequisicion($entity->getIdrequisicion())->filterByIdpadre(NULL)->find();

                //COUNT
                $count = \RequisiciondetalleQuery::create()->orderByIdrequisiciondetalle(\Criteria::DESC)->findOne();
                $count = $count->getIdrequisiciondetalle() + 1;

                $sucursal_destino = $entity->getIdsucursaldestino();
                $almacen_origen = $entity->getIdalmacenorigen();
                $almacen_destino = $entity->getIdalmacendestino();
                $concepto_salida = $entity->getIdconceptosalida();
                $distinto_origen = 0;
                $view_model = new ViewModel();
                $view_model->setTemplate('/application/proceso/requisicion/editar');
                $view_model->setVariables(array(
                    'form' => $form,
                    'entity' => $entity,
                    'requisiciondetalle' => $requisiciondetalle,
                    'anio_activo' => $anio_activo,
                    'mes_activo' => $mes_activo,
                    'sucursal_destino' => $sucursal_destino,
                    'almacen_origen' => $almacen_origen,
                    'almacen_destino' => $almacen_destino,
                    'concepto_salida' => $concepto_salida,
                    'count' => $count,
                    'idrol' => $session['idrol'],
                    'distinto_origen' => $distinto_origen,
                ));

                return $view_model;
            } else {
                $sucursalorg = \SucursalQuery::create()->filterByIdsucursal($entity->getIdsucursalorigen())->findOne();
                $sucursal_destino = $entity->getSucursalRelatedByIdsucursaldestino()->getSucursalNombre();
                $almacen_origen = $entity->getAlmacenRelatedByIdalmacenorigen()->getAlmacenNombre();
                $almacen_destino = $entity->getAlmacenRelatedByIdalmacendestino()->getAlmacenNombre();
                $concepto_salida = $entity->getConceptosalida()->getConceptosalidaNombre();

                $almacen_array = array();
                $sucursaldes_array = array();
                $concepto_array = array();
                $form = new \Application\Proceso\Form\RequisicionForm($sucursalorg, $almacen_array, $sucursaldes_array, $concepto_array);

                //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
                $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

                //CAMBIAMOS LOS VALORES DE FECHAS
                $form->get('requisicion_fecha')->setValue($entity->getRequisicionFecha('d/m/Y'));
                $form->get('requisicion_fechacreacion')->setValue($entity->getRequisicionFechacreacion('Y/m/d'));

                //LE PONEMOS LA CLASE VALID AL FOLIO
                $form->get('requisicion_folio')->setAttribute('class', 'form-control valid');

                //LOS DETALLES DE LA COMPRA
                $requisiciondetalle = \RequisiciondetalleQuery::create()->filterByIdrequisicion($entity->getIdrequisicion())->filterByIdpadre(NULL)->find();

                //COUNT
                $count = \RequisiciondetalleQuery::create()->orderByIdrequisiciondetalle(\Criteria::DESC)->findOne();
                $count = $count->getIdrequisiciondetalle() + 1;

                $sucursal_destino = $entity->getSucursalRelatedByIdsucursaldestino()->getSucursalNombre();
                $almacen_origen = $entity->getAlmacenRelatedByIdalmacenorigen()->getAlmacenNombre();
                $almacen_destino = $entity->getAlmacenRelatedByIdalmacendestino()->getAlmacenNombre();
                $concepto_salida = $entity->getConceptosalida()->getConceptosalidaNombre();
                $distinto_origen = 1;
                $view_model = new ViewModel();
                $view_model->setTemplate('/application/proceso/requisicion/editar');
                $view_model->setVariables(array(
                    'form' => $form,
                    'entity' => $entity,
                    'requisiciondetalle' => $requisiciondetalle,
                    'anio_activo' => $anio_activo,
                    'mes_activo' => $mes_activo,
                    'sucursal_destino' => $sucursal_destino,
                    'almacen_origen' => $almacen_origen,
                    'almacen_destino' => $almacen_destino,
                    'concepto_salida' => $concepto_salida,
                    'count' => $count,
                    'idrol' => $session['idrol'],
                    'distinto_origen' => $distinto_origen,
                ));

                return $view_model;
            }
        } else {
            return $this->redirect()->toUrl('/procesos/requisicion');
        }
    }

    public function eliminarAction() {
        $request = $this->getRequest();
        if ($request->isPost()) {
            $id = $this->params()->fromRoute('id');
            $requisicion = \RequisicionQuery::create()->findPk($id);
            $requisicion->delete();
            $requisiciondetalles = \RequisiciondetalleQuery::create()->filterByIdrequisicion($id)->find();
            foreach ($requisiciondetalles as $requisiciondetalle) {
                $requisiciondetalle->delete();
            }
            $this->flashMessenger()->addSuccessMessage('Requisicion eliminada satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/requisicion');
        }
    }

    public function getalmdesAction() {
        $cat = $this->params()->fromRoute('id');
        $result = \AlmacenQuery::create()->filterByIdsucursal($cat)->filterByAlmacenEstatus(1)->find()->toArray();
        return $this->getResponse()->setContent(json_encode($result));
    }

    public function gettipoproAction() {
        $cat = $this->params()->fromRoute('id');
        $result = \ProductoQuery::create()->filterByIdproducto($cat)->findOne()->toArray();
        return $this->getResponse()->setContent(json_encode($result));
    }

    public function getconcepsalAction() {
        $almorg = $this->params()->fromRoute('almorg');
        $almdes = $this->params()->fromRoute('almdes');
        $sucorg = $this->params()->fromRoute('sucorg');
        $sucdes = $this->params()->fromRoute('sucdes');
        if ($sucorg == $sucdes) {
            $misma = 1;
        } else {
            $misma = 0;
        }
        $result = \ConceptosalidaQuery::create()->filterByAlmacendestino($almdes)->filterByAlmacenorigen($almorg)->filterByMismasucursal($misma)->find()->toArray();
        return $this->getResponse()->setContent(json_encode($result));
    }

    public function getresAction() {
        $id = $this->params()->fromRoute('id');
        $resetas = new \Receta();
        $resetas = \RecetaQuery::create()->filterByIdproducto($id)->find();
        $producto = new \Producto();
        $result = [];
        foreach ($resetas as $reseta) {
            $producto = \ProductoQuery::create()->filterByIdproducto($reseta->getIdproductoreceta())->findOne();
            $preciouni = $producto->getProductoCosto();
            $result[$producto->getProductoNombre()][0] = $reseta->getRecetaCantidad();
            $result[$producto->getProductoNombre()][1] = $preciouni;
        }
        return $this->getResponse()->setContent(json_encode($result));
    }

    public function validatefolioAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $folio = $this->params()->fromQuery('folio');
        $edit = (!is_null($this->params()->fromQuery('edit'))) ? $this->params()->fromQuery('edit') : false;
        $to = new \DateTime();
        $from = date("Y-m-d", strtotime("-2 months"));
        $from = new \DateTime($from);
        if ($edit) {
            $id = $this->params()->fromQuery('id');
            $entity = \RequisicionQuery::create()->findPk($id);

            $exist = \RequisicionQuery::create()->filterByIdsucursalorigen($session['idsucursal'])
                    ->filterByRequisicionFechacreacion(array('min' => $from, 'to' => $to))
                    ->filterByRequisicionFolio($entity->getRequisicionFolio(), \Criteria::NOT_EQUAL)
                    ->filterByRequisicionFolio($folio, \Criteria::LIKE)
                    ->exists();
        } else {
            $exist = \RequisicionQuery::create()->filterByIdsucursalorigen($session['idsucursal'])->filterByRequisicionFechacreacion(array('min' => $from, 'to' => $to))->filterByRequisicionFolio($folio, \Criteria::LIKE)->exists();
        }
        return $this->getResponse()->setContent(json_encode($exist));
    }

    public function getproductosAction() {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $search = $this->params()->fromQuery('q');
        $query = \ProductoQuery::create()->filterByIdempresa($session['idempresa'])->filterByProductoTipo(array('simple', 'subreceta'))->filterByProductoNombre('%' . $search . '%', \Criteria::LIKE)->filterByProductoBaja(0, \Criteria::EQUAL)->find();
        return $this->getResponse()->setContent(json_encode(\Shared\GeneralFunctions::collectionToAutocomplete($query, 'idproducto', 'producto_nombre', array('producto_iva', 'producto_costo', array('unidadmedida', 'idunidadmedida', 'unidadmedida_nombre', 'UnidadmedidaQuery')))));
    }

}

<?php

namespace Application\Proceso\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class TablajeriaController extends AbstractActionController {

    public function indexAction() 
    {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
         
         $anio_activo = $sucursal->getSucursalAnioactivo();
         $mes_activo = $sucursal->getSucursalMesactivo();

        $collection = \OrdentablajeriaQuery::create()->filterByIdsucursal($session['idsucursal'])->orderByIdordentablajeria(\Criteria::DESC)->find();

        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/ordentablajeria/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
        ));
        return $view_model;
    }
    
    public function getproductosAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $search = $this->params()->fromQuery('q');
        $query = \ProductoQuery::create()->filterByIdunidadmedida(array(3,5))->filterByIdempresa($session['idempresa'])->filterByProductoNombre('%'.$search.'%',  \Criteria::LIKE)->find();
        
        
        $array = array();
        $producto = new \Producto();
        foreach ($query as $producto){
            $tmp = $producto->toArray(\BasePeer::TYPE_FIELDNAME);
            $tmp['unidad_medida'] = strtolower($producto->getUnidadmedida()->getUnidadmedidaNombre());
            $has_plantilla = $producto->getPlantillatablajerias()->count();
            if($has_plantilla > 0){
                $tmp['plantilla_tablajeria'] = array();
                $plantilatablajeria = \PlantillatablajeriaQuery::create()->filterByIdproducto($producto->getIdproducto())->findOne();
                $plantilatablajeria_detalles = \PlantillatablajeriadetalleQuery::create()->filterByIdplantillatablajeria($plantilatablajeria->getIdplantillatablajeria())->find();
                $detalle = new \Plantillatablajeriadetalle();
                foreach ($plantilatablajeria_detalles as $detalle){
                    $tmp2['idproducto'] = $detalle->getIdproducto();
                    $tmp2['producto_nombe'] = $detalle->getProducto()->getProductoNombre();
                    $tmp2['unidad_medida'] = strtolower($detalle->getProducto()->getUnidadmedida()->getUnidadmedidaNombre());
                    $tmp['plantilla_tablajeria'][] = $tmp2;
                }
            }else{
                $tmp['plantilla_tablajeria'] = false;
            }
            if($tmp['unidad_medida'] == 'porcion'){
                $pesoporcion = 0;
                $exist = \OrdentablajeriadetalleQuery::create()->filterByIdproducto($producto->getIdproducto())->useOrdentablajeriaQuery()->orderByOrdentablajeriaFecha(\Criteria::ASC)->endUse()->exists();
                if($exist){
                    $ordentablajeriadetalle = \OrdentablajeriadetalleQuery::create()->filterByIdproducto($producto->getIdproducto())->useOrdentablajeriaQuery()->orderByOrdentablajeriaFecha(\Criteria::ASC)->endUse()->findOne();
                    $pesoporcion = $ordentablajeriadetalle->getOrdentablajeriadetallePesoporcion();
                }else{
                    $pesoporcion = $producto->getProductoRendimiento();
                }
                 $tmp['pesoporcion'] = $pesoporcion;
            }
            $array[] = $tmp;
        }
        
        return $this->getResponse()->setContent(json_encode($array));
    }

    public function nuevoAction() 
    {

        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $request = $this->getRequest();

        if ($request->isPost()) 
        {

            $post_data = $request->getPost();
            
            $post_data["ordentablajeria_fecha"] = date_create_from_format('d/m/Y', $post_data["ordentablajeria_fecha"]);
            $post_data["ordentablajeria_preciokilo"] = preg_replace('/[^\d\.]/', '', $post_data["ordentablajeria_preciokilo"]);
            $post_data["ordentablajeria_totalbruto"] = preg_replace('/[^\d\.]/', '', $post_data["ordentablajeria_totalbruto"]);
            $post_data["ordentablajeria_precioneto"] = preg_replace('/[^\d\.]/', '', $post_data["ordentablajeria_precioneto"]);
            
           
           
            $entity = new \Ordentablajeria();
            foreach ($post_data as $key => $value) {

                if (\OrdentablajeriaPeer::getTableMap()->hasColumn($key)) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
           
            //SETEAMOS EL CAMPO ESPORCION
            if($entity->getProducto()->getUnidadmedida()->getUnidadmedidaNombre() == 'Kilogramos'){
                $entity->setOrdentablajeriaEsporcion(false);
            }else{
                $entity->setOrdentablajeriaEsporcion(true);
            }

            //SETEAMOS LA FECHA DE CREACION
            $entity->setOrdentablajeriaFechacreacion(new \DateTime())
                    ->setIdempresa($session['idempresa'])
                    ->setIdsucursal($session['idsucursal'])
                    ->setIdusuario($session['idusuario']);


            if ($post_data['ordentablajeria_revisada']) {
                $entity->setIdauditor($session['idusuario']);
            }
            
           
            $entity->save();

            //DETALLES
            foreach ($post_data['productos'] as $producto) {

                $ordentablajeria_detalle = new \Ordentablajeriadetalle();
                $ordentablajeria_detalle->setIdordentablajeria($entity->getIdordentablajeria())
                        ->setOrdentablajeriadetalleRevisada(0)
                        ->setIdproducto($producto['idproducto'])
                        ->setOrdentablajeriadetalleCantidad($producto['cantidad'])
                        ->setOrdentablajeriadetallePesoporcion($producto['pesoporcion'])
                        ->setOrdentablajeriadetallePrecioporcion($producto['precioporcion'])
                        ->setOrdentablajeriadetallePesototal($producto['pesototal'])
                        ->setOrdentablajeriadetalleSubtotal($producto['subtotal']);


                if (isset($producto['revisada'])) {
                    $ordentablajeria_detalle->setOrdentablajeriadetalleRevisada(1);
                }

                $ordentablajeria_detalle->save();
            }
          
            //REDIRECCIONAMOS AL LISTADO
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/tablajeria');
        }

        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();

        $almecenes = \AlmacenQuery::create()
                ->filterByIdsucursal($session['idsucursal'])
                ->filterByAlmacenEstatus(1)
                ->find();
        
        $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');

        $form = new \Application\Proceso\Form\TablajeriaForm($almecenes);

        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/ordentablajeria/nuevo');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'form' => $form,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'almacenes' => json_encode($almecenes), //LO PASAMOS EN JSON POR QUE LO VAMOS A TRABAJR CON NUESTRO JS
 
        ));

        return $view_model;
    }

    public function editarAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');

        //VERIFICAMOS SI EXISTE
        $exist = \OrdentablajeriaQuery::create()->filterByIdordentablajeria($id)->exists();

        if ($exist) {
            // OBTENEMOS EL MES Y EL ANIO ACTIVO DE LA SUCURSAL
            $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
            $anio_activo = $sucursal->getSucursalAnioactivo();
            $mes_activo = $sucursal->getSucursalMesactivo();

            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \OrdentablajeriaQuery::create()->findPk($id);

            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) {

                $post_data = $request->getPost();
               

                $post_data["ordentablajeria_fecha"] = date_create_from_format('d/m/Y', $post_data["ordentablajeria_fecha"]);
                $post_data["ordentablajeria_preciokilo"] = preg_replace('/[^\d\.]/', '', $post_data["ordentablajeria_preciokilo"]);
                $post_data["ordentablajeria_totalbruto"] = preg_replace('/[^\d\.]/', '', $post_data["ordentablajeria_totalbruto"]);
                $post_data["ordentablajeria_precioneto"] = preg_replace('/[^\d\.]/', '', $post_data["ordentablajeria_precioneto"]);

                foreach ($post_data as $key => $value) {

                    if (\OrdentablajeriaPeer::getTableMap()->hasColumn($key)) {
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }

                if ($post_data['ordentablajeria_revisada']) {
                    $entity->setIdauditor($session['idusuario']);
                }

                $entity->save();


                //DETALLES
                $entity->getOrdentablajeriadetalles()->delete();
                foreach ($post_data['productos'] as $producto) {

                    $ordentablajeria_detalle = new \Ordentablajeriadetalle();
                    $ordentablajeria_detalle->setIdordentablajeria($entity->getIdordentablajeria())
                            ->setOrdentablajeriadetalleRevisada(0)
                            ->setIdproducto($producto['idproducto'])
                            ->setOrdentablajeriadetalleCantidad($producto['cantidad'])
                            ->setOrdentablajeriadetallePesoporcion($producto['pesoporcion'])
                            ->setOrdentablajeriadetallePrecioporcion($producto['precioporcion'])
                            ->setOrdentablajeriadetallePesototal($producto['pesototal'])
                            ->setOrdentablajeriadetalleSubtotal($producto['subtotal']);


                    if (isset($producto['revisada'])) {
                        $ordentablajeria_detalle->setOrdentablajeriadetalleRevisada(1);
                    }

                    $ordentablajeria_detalle->save();
                }

                //REDIRECCIONAMOS AL LISTADO
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/procesos/tablajeria');
            }

            //NUESTROS ALMACENES
            $almecenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->find();
            $almecenes = \Shared\GeneralFunctions::collectionToSelectArray($almecenes, 'idalmacen', 'almacen_nombre');

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Proceso\Form\TablajeriaForm($almecenes);

            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

            //CAMBIAMOS LOS VALORES DE FECHAS
            $form->get('ordentablajeria_fecha')->setValue($entity->getOrdentablajeriaFecha('d/m/Y'));

            //SETEAMOS EL VALOR AUTOCOMPLETE
            $form->get('idproducto_autocomplete')->setValue($entity->getProducto()->getProductoNombre());
            $form->get('producto_unidadmedida')->setValue(strtolower($entity->getProducto()->getUnidadmedida()->getUnidadmedidaNombre()));
            
            if($entity->getProducto()->getUnidadmedida()->getUnidadmedidaNombre() == 'Porcion'){
                $form->get('ordentablajeria_pesobruto')->setLabel('Porciones');
            }
            
            //LE PONEMOS LA CLASE VALID AL FOLIO
            $form->get('ordentablajeria_folio')->setAttribute('class', 'form-control valid');

            //MONEY FORMAT
            $form->get('ordentablajeria_preciokilo')->setValue(money_format('%(#1n',$entity->getOrdentablajeriaPreciokilo()));
            $form->get('ordentablajeria_totalbruto')->setValue(money_format('%(#1n',$entity->getOrdentablajeriaTotalbruto()));
            
            //LOS DETALLES DE LA DEVOLUCION
            $detalles = \OrdentablajeriadetalleQuery::create()->filterByIdordentablajeria($entity->getIdordentablajeria())->find();
            
            $has_plantila = \PlantillatablajeriaQuery::create()->filterByIdproducto($entity->getIdproducto())->count();

            //COUNT
            $count = \OrdentablajeriadetalleQuery::create()->orderByIdordentablajeriadetalle(\Criteria::DESC)->findOne();
            $count = $count->getIdordentablajeriadetalle() + 1;
            
            $view_model = new ViewModel();
            $view_model->setTemplate('/application/proceso/ordentablajeria/editar');
            $view_model->setVariables(array(
                'messages' => $this->flashMessenger(),
                'form' => $form,
                'entity' => $entity,
                'detalles' => $detalles,
                'anio_activo' => $anio_activo,
                'mes_activo' => $mes_activo,
                'almacenes' => $almecenes,
                'count' => $count,
                'has_plantilla' => $has_plantila,
                'mes_ordentablajeria' => $entity->getOrdentablajeriaFecha('m'),
                'anio_ordentablajeria' => $entity->getOrdentablajeriaFecha('Y'),
            ));

            return $view_model;
        } else {
            return $this->redirect()->toUrl('/procesos/tablajeria');
        }
    }

    public function eliminarAction() {

        $request = $this->getRequest();

        if ($request->isPost()) {

            $id = $this->params()->fromRoute('id');
           
            $entity = \OrdentablajeriaQuery::create()->findPk($id);
            $entity->delete();

            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/procesos/tablajeria');
        }
    }
    
    public function validatefolioAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $folio = $this->params()->fromQuery('folio');
        $edit = (!is_null($this->params()->fromQuery('edit'))) ?$this->params()->fromQuery('edit') : false;

        if($edit){
             $id = $this->params()->fromQuery('id');
             $entity = \OrdentablajeriaQuery::create()->findPk($id);
            
             $exist = \OrdentablajeriaQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByOrdentablajeriaFolio($entity->getOrdentablajeriaFolio(),  \Criteria::NOT_EQUAL)->filterByOrdentablajeriaFolio($folio,  \Criteria::LIKE)->exists();
        }else{
            $exist = \OrdentablajeriaQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByOrdentablajeriaFolio($folio,  \Criteria::EQUAL)->exists();
        }
        
        return $this->getResponse()->setContent(json_encode($exist));
    }

}   

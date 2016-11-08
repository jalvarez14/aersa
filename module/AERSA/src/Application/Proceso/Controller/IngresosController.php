<?php
namespace Application\Proceso\Controller;


use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class IngresosController extends AbstractActionController {
    
    public function indexAction() {
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
         
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();
        
        $collection = \IngresoQuery::create()->filterByIdsucursal($session['idsucursal'])->orderByIngresoFecha(\Criteria::DESC)->find();
        
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/ingresos/index');
            $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'idrol' => $session['idrol'],
        ));
            
        return $view_model;

    }
    
    public function nuevoAction(){
        
        $request = $this->getRequest();
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        if ($request->isPost()) {
            
            $post_data = $request->getPost();
            
            $post_data["ingreso_fecha"] = date_create_from_format('d/m/Y', $post_data["ingreso_fecha"]);
            
            $entity = new \Ingreso();
            foreach ($post_data as $key => $value){
                if(\IngresoPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value,  \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //SETEAMOS LA FECHA DE CREACION
            $entity->setIngresoFechacreacion(new \DateTime())
                   ->setIdempresa($session['idempresa'])
                   ->setIdsucursal($session['idsucursal'])
                   ->setIdusuario($session['idusuario']);
            
            
            if($post_data['ingreso_revisada']){
                $entity->setIdauditor($session['idusuario']);
            }

            $entity->save();
           
            
            //LOS DETALLES
            foreach ($post_data['ingresodetalle'] as $key_rubro => $value_detalle){
                foreach ($value_detalle as $key_concepto => $value_concepto){
                    
                    $ingreso_detalle = new \Ingresodetalle();
                    $ingreso_detalle->setIdingreso($entity->getIdingreso())
                                    ->setIdrubroingreso($key_rubro)
                                    ->setIdconceptoingreso($key_concepto)
                                    ->setIngresodetalleSub($value_concepto['subtotal'])
                                    ->setIngresodetalleIva($value_concepto['iva'])
                                    ->setIngresodetalleTotal($value_concepto['total'])
                                    ->setIngresodetalleRevisada(0);
                    
                    if(isset($value_concepto['revisada'])){
                        $ingreso_detalle->setIngresodetalleRevisada(1);
                    }
                    
                    $ingreso_detalle->save();

                }
            }
            
            //REDIRECCIONAMOS AL LISTADO
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/ingresos');

        }
        
        
        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();
        
        $rubros = \RubroingresoQuery::create()->find();
        $concepto_ingresos = \ConceptoingresoQuery::create()->find();
        
        //Formulario
        $form = new \Application\Proceso\Form\IngresosForm();
        
        //Obtenemos el iva
        $iva = \TasaivaQuery::create()->findOne();
        $iva = $iva->getTasaivaValor();
      
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'rubros' => $rubros,
            'concepto_ingresos' => $concepto_ingresos,
            'form' => $form,
            'mes_activo' => $mes_activo,
            'anio_activo' => $anio_activo,
            'iva' => $iva,
            'idrol' => $session['idrol'],
        ));
        $view_model->setTemplate('/application/proceso/ingresos/nuevo');
        return $view_model;
        
    }
    
    public function validatefolioAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $folio = $this->params()->fromQuery('folio');
        $id = (!is_null($this->params()->fromQuery('id'))) ?$this->params()->fromQuery('id') : false;

        $to = new \DateTime();
        $from = date("Y-m-d", strtotime("-2 months")); $from = new \DateTime($from);
        
        if($id){
            $entity = \IngresoQuery::create()->findPk($id);
             $exist = \IngresoQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByIngresoFecha(array('min' => $from,'to' => $to))->filterByIngresoFolio($entity->getIngresoFolio(),  \Criteria::NOT_EQUAL)->filterByIngresoFolio($folio,  \Criteria::LIKE)->exists();
        }else{
             $exist = \IngresoQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByIngresoFecha(array('min' => $from,'to' => $to))->filterByIngresoFolio($folio,  \Criteria::LIKE)->exists();
        }
       
        
        return $this->getResponse()->setContent(json_encode($exist));
    }
    
    public function eliminarAction() {

        $request = $this->getRequest();

        if ($request->isPost()) {

            $id = $this->params()->fromRoute('id');

            $entity = \IngresoQuery::create()->findPk($id);
            $entity->delete();

            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/procesos/ingresos');
        }
    }
    
    public function editarAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        $type = $this->params()->fromRoute('type');
        //VERIFICAMOS SI EXISTE
        $exist = \IngresoQuery::create()->filterByIdingreso($id)->exists();
        
        if($exist){
            
            // OBTENEMOS EL MES Y EL ANIO ACTIVO DE LA SUCURSAL
            $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
            $anio_activo = $sucursal->getSucursalAnioactivo();
            $mes_activo = $sucursal->getSucursalMesactivo();
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \IngresoQuery::create()->findPk($id);
            if ($type != NULL) {
                
                $fecha = $entity->getIngresoFecha('d/m/Y');
                $folio= $entity->getIngresoFolio();
                $rev=($entity->getIngresoRevisada()==1)? "Si" : "No";
                $creado=$entity->getUsuarioRelatedByIdusuario()->getUsuarioNombre();
                $auditor=($entity->getIdauditor()!=NULL) ? $entity->getUsuarioRelatedByIdauditor()->getUsuarioNombre() : "";
                
                $ingreso=array('fecha'=>$fecha,'folio'=>$folio,'rev'=>$rev,'creado'=>$creado,'auditor'=>$auditor);
                
                $col = array();
                $ingresodetallesobj = \IngresodetalleQuery::create()->filterByIdingreso($id)->filterByIdrubroingreso(1)->orderByIdconceptoingreso('asc')->find();
                $ingresodetalleobj = new \Ingresodetalle();
                array_push($col, array('uno' => 'Conceptos','dos' => 'Subtotal', 'tres' => 'IVA','cuatro' => 'Total', 'cinco' =>'Revisada'));
                array_push($col, array('uno' => 'Alimentos','dos' => '', 'tres' => '','cuatro' => '', 'cinco' =>''));
                foreach ($ingresodetallesobj as $ingresodetalleobj) {
                    $concepto=$ingresodetalleobj->getConceptoingreso()->getConceptoingresoNombre();
                    $subtotal=$ingresodetalleobj->getIngresodetalleSub();
                    $iva=$ingresodetalleobj->getIngresodetalleIva();
                    $total=$ingresodetalleobj->getIngresodetalleTotal();
                    $rev = ($ingresodetalleobj->getIngresodetalleRevisada() == 1) ? "Si" : "No";
                    array_push($col, array('uno' => $concepto,'dos' => $subtotal, 'tres' => $iva,'cuatro' => $total, 'cinco' =>$rev));
                }
                
                $ingresodetallesobj = \IngresodetalleQuery::create()->filterByIdingreso($id)->filterByIdrubroingreso(2)->orderByIdconceptoingreso('asc')->find();
                $ingresodetalleobj = new \Ingresodetalle();
                array_push($col, array('uno' => 'Bebidas','dos' => '', 'tres' => '','cuatro' => '', 'cinco' =>''));
                foreach ($ingresodetallesobj as $ingresodetalleobj) {
                    $concepto=$ingresodetalleobj->getConceptoingreso()->getConceptoingresoNombre();
                    $subtotal=$ingresodetalleobj->getIngresodetalleSub();
                    $iva=$ingresodetalleobj->getIngresodetalleIva();
                    $total=$ingresodetalleobj->getIngresodetalleTotal();
                    $rev = ($ingresodetalleobj->getIngresodetalleRevisada() == 1) ? "Si" : "No";
                    array_push($col, array('uno' => $concepto,'dos' => $subtotal, 'tres' => $iva,'cuatro' => $total, 'cinco' =>$rev));
                }
                
                $ingresodetallesobj = \IngresodetalleQuery::create()->filterByIdingreso($id)->filterByIdrubroingreso(3)->orderByIdconceptoingreso('asc')->find();
                $ingresodetalleobj = new \Ingresodetalle();
                array_push($col, array('uno' => 'Miscelanea','dos' => '', 'tres' => '','cuatro' => '', 'cinco' =>''));
                foreach ($ingresodetallesobj as $ingresodetalleobj) {
                    $concepto=$ingresodetalleobj->getConceptoingreso()->getConceptoingresoNombre();
                    $subtotal=$ingresodetalleobj->getIngresodetalleSub();
                    $iva=$ingresodetalleobj->getIngresodetalleIva();
                    $total=$ingresodetalleobj->getIngresodetalleTotal();
                    $rev = ($ingresodetalleobj->getIngresodetalleRevisada() == 1) ? "Si" : "No";
                    array_push($col, array('uno' => $concepto,'dos' => $subtotal, 'tres' => $iva,'cuatro' => $total, 'cinco' =>$rev));
                }
                
                $total_alm=$entity->getIngresoTotalalimento();
                $total_beb=$entity->getIngresoTotalbebida();
                $total_mis=$entity->getIngresoTotalmiscelanea();
                array_push($col, array('uno' => 'Total alimento','dos' => $total_alm, 'tres' => '','cuatro' => '', 'cinco' =>''));
                array_push($col, array('uno' => 'Total bebidas','dos' => $total_beb, 'tres' => '','cuatro' => '', 'cinco' =>''));
                array_push($col, array('uno' => 'Total miscelanea','dos' => $total_mis, 'tres' => '','cuatro' => '', 'cinco' =>''));
                
                $nombreEmpresa = \EmpresaQuery::create()->findPk($session['idempresa'])->getEmpresaNombrecomercial();
                $nombreSucursal = \SucursalQuery::create()->findPk($session['idsucursal'])->getSucursalNombre();

                $template = '/ingresos.xlsx';
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
                        'id' => 'ing',
                        'data' => $ingreso,
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
            
             if ($request->isPost()){
                 
                 $post_data = $request->getPost();
                 
                 $post_data["ingreso_fecha"] = date_create_from_format('d/m/Y', $post_data["ingreso_fecha"]);

                $entity = \IngresoQuery::create()->findPk($id);
                foreach ($post_data as $key => $value) {
                    if (\IngresoPeer::getTableMap()->hasColumn($key)) {
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                
                if ($post_data['compra_revisada']) {
                    $entity->setIdauditor($session['idusuario']);
                }
                
                $entity->save();
                
                //DETALLES
                $entity->getIngresodetalles()->delete();
                
                foreach ($post_data['ingresodetalle'] as $key_rubro => $value_detalle) {
                    foreach ($value_detalle as $key_concepto => $value_concepto) {

                        $ingreso_detalle = new \Ingresodetalle();
                        $ingreso_detalle->setIdingreso($entity->getIdingreso())
                                ->setIdrubroingreso($key_rubro)
                                ->setIdconceptoingreso($key_concepto)
                                ->setIngresodetalleSub($value_concepto['subtotal'])
                                ->setIngresodetalleIva($value_concepto['iva'])
                                ->setIngresodetalleTotal($value_concepto['total'])
                                ->setIngresodetalleRevisada(0);

                        if (isset($value_concepto['revisada'])) {
                            $ingreso_detalle->setIngresodetalleRevisada(1);
                        }

                        $ingreso_detalle->save();
                    }
                }

                
            //REDIRECCIONAMOS AL LISTADO
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/ingresos');
            
            
            }
             
             
            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Proceso\Form\IngresosForm();
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $form->get('ingreso_fecha')->setValue($entity->getIngresoFecha('d/m/Y'));
            $form->get('ingreso_fechacreacion')->setValue($entity->getIngresoFechacreacion('Y/m/d'));

            //LE PONEMOS LA CLASE VALID AL FOLIO
            $form->get('ingreso_folio')->setAttribute('class', 'form-control valid');
            
            $rubros = \RubroingresoQuery::create()->find();
            $concepto_ingresos = \ConceptoingresoQuery::create()->find();
            
            $detalles_array = array();
            $detalles = $entity->getIngresodetalles();
            $detalle = new \Ingresodetalle();
            foreach ($detalles as $detalle){
                $idrubro = $detalle->getIdrubroingreso();
                $idconcepto = $detalle->getIdconceptoingreso();
                $detalles_array[$idrubro][$idconcepto] = $detalle->toArray();
            }
            
            //Obtenemos el iva
            $iva = \TasaivaQuery::create()->findOne();
            $iva = $iva->getTasaivaValor();
            
            $view_model = new ViewModel();
            $view_model->setTemplate('/application/proceso/ingresos/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
                'anio_activo' => $anio_activo,
                'mes_activo' => $mes_activo,
                'detalles' => $detalles,
                'rubros' => $rubros,
                'concepto_ingresos' => $concepto_ingresos,
                'detalles' => $detalles_array,
                'iva' => $iva,
                'idrol' => $session['idrol'],
            ));
            
            return $view_model;
            
           
            
        }else{
            return $this->redirect()->toUrl('/procesos/ingresos');
        }
        
        
        
        
        
        
    }

}

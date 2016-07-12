<?php

namespace Application\Flujoefectivo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\PhpEnvironment\Request;
use Zend\Console\Request as ConsoleRequest;

class IngresosController extends AbstractActionController {

    public function indexAction() {
        
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL---
         $collection = \IngresoQuery::create()->filterByIdsucursal($idsucursal)->orderByIngresoFechacreacion(\Criteria::DESC)->find();
         
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/flujoefectivo/ingresos/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
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
        $exist = \IngresoQuery::create()->filterByIdingreso($id)->exists();
       
        if($exist){
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \IngresoQuery::create()->findPk($id);
            
            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Proceso\Form\IngresosForm();
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $form->get('ingreso_fecha')->setValue($entity->getIngresoFecha('d/m/Y'));
            $form->get('ingreso_fecha')->setAttribute('disabled', true);
            $form->get('ingreso_folio')->setAttribute('disabled', true);
            $form->get('ingreso_revisada')->setAttribute('disabled', true);
            
            $form->get('ingreso_fechacreacion')->setValue($entity->getIngresoFechacreacion('Y/m/d'));

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
            
            //SUMATORIA DEL FLUJO DE EFECTIVO
            $flujoefectivo_bebidas = \FlujoefectivoQuery::create()->filterByIdingreso($entity->getIdingreso())->filterByIngresorubro('bebidas')->withColumn('sum(flujoefectivo_cantidad)','sum')->findOne()->toArray();
            $flujoefectivo['bebidas'] = $flujoefectivo_bebidas = (!is_null($flujoefectivo_bebidas['sum'])) ? $flujoefectivo_bebidas['sum'] :0.00;
            
            $flujoefectivo_alimentos = \FlujoefectivoQuery::create()->filterByIdingreso($entity->getIdingreso())->filterByIngresorubro('alimentos')->withColumn('sum(flujoefectivo_cantidad)','sum')->findOne()->toArray();
            $flujoefectivo['alimentos'] = $flujoefectivo_alimentos = (!is_null($flujoefectivo_alimentos['sum'])) ? $flujoefectivo_alimentos['sum'] :0.00;
            
            $flujoefectivo_miscelanea = \FlujoefectivoQuery::create()->filterByIdingreso($entity->getIdingreso())->filterByIngresorubro('miscelanea')->withColumn('sum(flujoefectivo_cantidad)','sum')->findOne()->toArray();
            $flujoefectivo['miscelanea'] = $flujoefectivo_miscelanea = (!is_null($flujoefectivo_miscelanea['sum'])) ? $flujoefectivo_bebidas['sum'] :0.00;

            $view_model = new ViewModel();
            $view_model->setTemplate('/application/flujoefectivo/ingresos/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'entity' => $entity,
                'detalles' => $detalles,
                'rubros' => $rubros,
                'concepto_ingresos' => $concepto_ingresos,
                'detalles' => $detalles_array,
                'messages' => $this->flashMessenger(),
                'flujoefectivo' => $flujoefectivo
            ));
            
            return $view_model;
        }else{
            return $this->redirect()->toUrl('/flujoefectivo/ingresos');
        }
    }
    
    public function nuevoAction(){
        
        $request = $this->getRequest();
        if($request->isPost()){
            
            //CARGAMOS LA SESSION PARA HACER VALIDACIONES
            $session = new \Shared\Session\AouthSession();
            $session = $session->getData();
            
            $post_data = $request->getPost();
            $post_files = $request->getFiles();
           
            $post_data["flujoefectivo_fecha"] = date_create_from_format('d/m/Y', $post_data["flujoefectivo_fecha"]);
            
            $entity = new \Flujoefectivo();
            foreach ($post_data as $key => $value){
                if(\FlujoefectivoPeer::getTableMap()->hasColumn($key)){
                    $entity->setByName($key, $value,  \BasePeer::TYPE_FIELDNAME);
                }
            }
            
            //SETEAMOS LA FECHA DE CREACION
            $entity->setIdempresa($session['idempresa'])
                   ->setIdsucursal($session['idsucursal'])
                   ->setIdusuario($session['idusuario']);
                   
            
            $entity->setFlujoefectivoOrigen('ingreso');
            $entity->save();
            
            //EL COMPROBANTE
            if (!empty($post_files['flujoefectivo_comprobante']['name'])) {

                $type = $post_files['flujoefectivo_comprobante']['type'];
                $type = explode('/', $type);
                $type = $type[1];

                $target_path = "/application/files/ingresos/";
                if(!file_exists($_SERVER['DOCUMENT_ROOT'].$target_path)){
                    mkdir($_SERVER['DOCUMENT_ROOT'].$target_path, 0777);
                }

                $target_path = $target_path . 'ingresos' . $entity->getIdflujoefectivo() . '.' . $type;

                if (move_uploaded_file($_FILES['flujoefectivo_comprobante']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                    $entity->setFlujoefectivoComprobante($target_path);
                    $entity->save();
                }
            }
            
            //Actualizamos balance de cuenta bancaria
            $bank_account = $entity->getCuentabancaria();
            $current_balance = $bank_account->getCuentabancariaBalance();
            $new_balance = $current_balance + $entity->getFlujoefectivoCantidad();
            $bank_account->setCuentabancariaBalance($new_balance)->save();
            
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            
            return $this->redirect()->toUrl('/flujoefectivo/ingresos/editar/'.$entity->getIdingreso());
            
            
           
            
        }
    }
    
    public function getdetailsAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            
            //CARGAMOS LA SESSION PARA HACER VALIDACIONES
            $session = new \Shared\Session\AouthSession();
            $session = $session->getData();

            $idempresa = $session['idempresa'];
            $idsucursal = $session['idsucursal'];
        
        
            $post_data = $request->getPost();
            
            $details_array = array();
            $collection = \FlujoefectivoQuery::create()->filterByIdingreso($post_data['idingreso'])->filterByIngresorubro($post_data['rubro'])->find();
            $entity = new \Flujoefectivo();
            foreach ($collection as $entity){
                $tmp['id'] = $entity->getIdflujoefectivo();
                $tmp['date'] = $entity->getFlujoefectivoFecha('d/m/Y');
                $tmp['cuenta'] = $entity->getCuentabancaria()->getCuentabancariaBanco().' - '. $entity->getCuentabancaria()->getCuentabancariaNocuenta();
                $tmp['medio'] = ucfirst($entity->getFlujoefectivoMediodepago());
                $tmp['referencia'] = $entity->getFlujoefectivoReferencia();
                if(!is_null($entity->getFlujoefectivoComprobante())){
                     $tmp['comprobante'] = '<a target="_blank" href="'.$entity->getFlujoefectivoComprobante().'"><i class="fa fa-file"></i></a>';
                }else{
                    $tmp['comprobante'] = 'N/D';
                }
                $tmp['options'] = '<a href="javascript:;" class="delete_modal"><i class="fa fa-trash"></i> Eliminar </a>';
                
                $details_array[] = $tmp;

            }
            
            //Tambien cargamos las cuentas bancarias
            $cuentas_bancarias = \CuentabancariaQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();
            $cuentas_bancarias_array = \Shared\GeneralFunctions::collectionToSelectArray($cuentas_bancarias, 'idcuentabancaria', 'cuentabancaria_banco',array('cuentabancaria_nocuenta'),' - ');
            
            return $this->getResponse()->setContent(json_encode(array('details' => $details_array,'bank_accounts' => $cuentas_bancarias_array)));

        }
    }

}

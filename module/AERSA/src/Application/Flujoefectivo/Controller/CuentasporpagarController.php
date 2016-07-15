<?php

namespace Application\Flujoefectivo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class CuentasporpagarController extends AbstractActionController {

    public function indexAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL
        $collection = \CompraQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->orderByCompraFechacompra(\Criteria::DESC)->find();

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/flujoefectivo/cuentasporpagar/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
            'session' => $session,
        ));
        
        return $view_model;
    }
    
    public function eliminarmovimientoAction(){

        $request = $this->getRequest();

        if ($request->isPost()) {

            $id = $this->params()->fromRoute('id');
            
            $entity = \FlujoefectivoQuery::create()->findPk($id);
            
            
            if($entity->getFlujoefectivoPago() == 'bonificacion'){
                $entity->delete();
            }elseif($entity->getFlujoefectivoPago() == 'cuenta'){
                
                $cuentabancaria = $entity->getCuentabancaria();
                $current_balance = $cuentabancaria->getCuentabancariaBalance();
                $new_balance = $current_balance + $entity->getFlujoefectivoCantidad();
                $cuentabancaria->setCuentabancariaBalance($new_balance);
                
                if($entity->getFlujoefectivoMediodepago() == 'cheque'){
                    if($entity->getFlujoefectivoChequecirculacion()){
                        $cuentabancaria->save();
                    }
                }else{
                    $cuentabancaria->save();
                }
                $entity->delete();
            }elseif($entity->getFlujoefectivoPago() == 'abono'){
                $abonoproveedor = \AbonoproveedorQuery::create()->filterByIdproveedor($entity->getIdproveedor())->findOne();
                $current_balance = $abonoproveedor->getAbonoproveedorBalance();
                $new_balance = $current_balance + $entity->getFlujoefectivoCantidad();
                $abonoproveedor->setAbonoproveedorBalance($new_balance)->save();
                
                $entity->delete();
            }
            

            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/flujoefectivo/cuentasporpagar/editar/'.$entity->getIdcompra());
        }
    }
    
    public function editarmovimientoAction() {
         $request = $this->getRequest();
          if ($request->isPost()) {
              
              $id = $this->params()->fromRoute('id');
              
              $entity = \FlujoefectivoQuery::create()->findPk($id);
              
              $post_data = $request->getPost();
              $post_data['flujoefectivo_fechacobrocheque'] = date_create_from_format('d/m/Y', $post_data['flujoefectivo_fechacobrocheque']);
              
              $entity->setFlujoefectivoChequecirculacion(1)
                     ->setFlujoefectivoFechacobrocheque($post_data['flujoefectivo_fechacobrocheque'])
                     ->save();
              
              //DESCONTAMOS DE LA CUENTA BANCARIA
                $cuentabancaria = $entity->getCuentabancaria();
                $current_balace =$cuentabancaria->getCuentabancariaBalance();
                $new_balance =  $current_balace - $entity->getFlujoefectivoCantidad();
                $cuentabancaria->setCuentabancariaBalance($new_balance)->save();
                
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/flujoefectivo/cuentasporpagar/editar/'.$entity->getIdcompra());
              

          }
    }

    public function editarAction() {
        
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $idusuario = $session['idusuario'];
        
        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        
        $exist = \CompraQuery::create()->filterByIdcompra($id)->exists();
        if ($exist) {
            
            $compra = \CompraQuery::create()->findPk($id);
            
            if($request->isPost()){
                $post_data = $request->getPost();
                $post_files = $request->getFiles();
                
               
                $post_data['flujoefectivo_fecha'] = date_create_from_format('d/m/Y', $post_data['flujoefectivo_fecha']);
                if(isset($post_data['flujoefectivo_fechacobrocheque'])){
                    $post_data['flujoefectivo_fechacobrocheque'] = date_create_from_format('d/m/Y', $post_data['flujoefectivo_fechacobrocheque']);
                }
                
                $entity = new \Flujoefectivo();
                foreach ($post_data as $key => $value){
                    if(\FlujoefectivoPeer::getTableMap()->hasColumn($key) && $value!=""){
                        $entity->setByName($key, $value,  \BasePeer::TYPE_FIELDNAME);
                    }
                }
                
                $entity->setIdempresa($idempresa);
                $entity->setIdsucursal($idsucursal);
                $entity->setIdusuario($idusuario);
                
                $entity->setFlujoefectivoOrigen('compra');
                $entity->setFlujoefectivoTipo('egreso');
                
                
                
                $entity->save();
                
                //DE ACUERDO AL PAGO REALIZAMOS CIERTAS ACCIONES
                if($entity->getFlujoefectivoPago() == 'cuenta'){
                    //Retiramos de cuenta bancaria
                    $cuentabancaria = $entity->getCuentabancaria();
                    $current_balace =$cuentabancaria->getCuentabancariaBalance();
                    $new_balance =  $current_balace - $entity->getFlujoefectivoCantidad();
                    $cuentabancaria->setCuentabancariaBalance($new_balance);
                    if($entity->getFlujoefectivoMediodepago() != 'cheque'){
                        $cuentabancaria->save();
                    }else{
                        if($entity->getFlujoefectivoChequecirculacion()){
                            $cuentabancaria->save();
                        }
                    }
                }elseif($entity->getFlujoefectivoPago() == 'abono'){
                    //Descontamos del abono a proveedor
                    $abonoproveedor = \AbonoproveedorQuery::create()->filterByIdproveedor($entity->getIdproveedor())->findOne();
                    $current_balace = $abonoproveedor->getAbonoproveedorBalance();
                    $new_balance =  $current_balace - $entity->getFlujoefectivoCantidad();
                    $abonoproveedor->setAbonoproveedorBalance($new_balance)->save();  
                    $entity->setFlujoefectivoMediodepago('abono')->save();
                }
                elseif($entity->getFlujoefectivoPago() == 'bonificacion'){
                    
                    
                    
                    $entity->setFlujoefectivoMediodepago('bonificacion');
                    $entity->setFlujoefectivoCantidad($compra->getCompraTotal());
                    $entity->save();

                }
                
                //EL COMPROBANTE
                if (!empty($post_files['flujoefectivo_comprobante']['name'])) {

                    $type = $post_files['flujoefectivo_comprobante']['type'];
                    $type = explode('/', $type);
                    $type = $type[1];

                    $target_path = "/application/files/cuentasporpagar/";
                    if(!file_exists($_SERVER['DOCUMENT_ROOT'].$target_path)){
                        mkdir($_SERVER['DOCUMENT_ROOT'].$target_path, 0777);
                    }

                    $target_path = $target_path . 'cuentasporpagar_' . $entity->getIdflujoefectivo() . '.' . $type;

                    if (move_uploaded_file($_FILES['flujoefectivo_comprobante']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                        $entity->setFlujoefectivoComprobante($target_path);
                        $entity->save();
                    }
                }
                

                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/flujoefectivo/cuentasporpagar/editar/'.$entity->getIdcompra());

                
                
                
            }

            $cuentas_bancarias = \CuentabancariaQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();
            $cuentas_bancarias_array = \Shared\GeneralFunctions::collectionToSelectArray($cuentas_bancarias, 'idcuentabancaria', 'cuentabancaria_banco',array('cuentabancaria_nocuenta'),' - ');

            $form = new \Application\Flujoefectivo\Form\CuentaporpagarForm($cuentas_bancarias_array);
            $form->get('idcompra')->setValue($compra->getIdcompra());
            $form->get('idproveedor')->setValue($compra->getIdproveedor());
            
            //TOTAL Y RESTANTE
            $total = $compra->getCompraTotal();
            $flujo_efectivo = \FlujoefectivoQuery::create()->filterByIdcompra($compra->getIdcompra())->filterByFlujoefectivoTipo('egreso')->withColumn('SUM(flujoefectivo_cantidad)','flujoefectivo_total')->findOne()->toArray();
            $pagado = (!is_null($flujo_efectivo['flujoefectivo_total'])) ? $flujo_efectivo['flujoefectivo_total'] : 0;
            $restan = $total - $pagado;
            if($restan <= 0){
                $compra->setCompraEstatuspago('pagada')->save();
            }else{
                $compra->setCompraEstatuspago('nopagada')->save();
            }
            
            //MOVIMIENTOS
            $movimientos = \FlujoefectivoQuery::create()->filterByIdcompra($compra->getIdcompra())->orderByFlujoefectivoFecha(\Criteria::DESC)->find();
            
            if(\FlujoefectivoQuery::create()->filterByIdcompra($compra->getIdcompra())->filterByFlujoefectivoPago(array('abono','cuenta'))->exists()){
                $form->remove('flujoefectivo_pago');
                $form->add(array(
                    'name' => 'flujoefectivo_pago',
                    'type' => 'Select',
                    'options' => array(
                        'label' => 'Pago *',
                        'empty_option' => 'Sin especificar',
                        'value_options' => array(
                            'cuenta' => 'Cuenta',
                            'abono' => 'Abono',
                        ),
                    ),
                    'attributes' => array(
                        'required' => true,
                        'class' => 'form-control',
                    ),
                ));
            }
            
            //ABONO PROVEEDOR
            $abono_proveedor = 0;
            if(\AbonoproveedorQuery::create()->filterByIdproveedor($compra->getIdproveedor())->exists()){
                $abonoproveedor = \AbonoproveedorQuery::create()->filterByIdproveedor($compra->getIdproveedor())->findOne();
                $abono_proveedor = $abonoproveedor->getAbonoproveedorBalance();
            }
            
            //¿NUEVO MOVIMIENTO?
            $nuevo_movimiento = true;
            if($restan <= 0){
                $nuevo_movimiento = false;
            }
           
            $view_model = new ViewModel();
            $view_model->setTemplate('/application/flujoefectivo/cuentasporpagar/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'messages' => $this->flashMessenger(),
                'total' => $total,
                'restan' => $restan,
                'compra' => $compra,
                'movimientos' => $movimientos,
                'abonoproveedor' => $abono_proveedor,
                'nuevo_movimiento' => $nuevo_movimiento,
                'session' => $session,
            ));
            return $view_model;
        } else {
            return $this->redirect()->toUrl('/flujoefectivo/cuentasporpagar');
        }
    }

    public function getbalanceAction(){
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            $cuentabancaria = \CuentabancariaQuery::create()->findPk($post_data['id']);
            $balance = $cuentabancaria->getCuentabancariaBalance();
            return $this->getResponse()->setContent(json_encode(array('response' => true, 'balance' => $balance)));
            
        }
    }
    
    public function validarcantidadAction(){
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $pago = $post_data['pago'];
            $cantidad = $post_data['cantidad'];
            
            if($pago == 'cuenta'){
                $cuenbancaria = \CuentabancariaQuery::create()->findPk($post_data['cuentabancaria']);
                $balance = $cuenbancaria->getCuentabancariaBalance();
                if ($cantidad <= $balance) {
                    return $this->getResponse()->setContent(json_encode(array('response' => true)));
                } elseif ($cantidad > $balance) {
                    return $this->getResponse()->setContent(json_encode(array('response' => false, 'msj' => 'Fondos insuficientes')));
                }
            }elseif($pago == 'abono'){
                $abono_proveedor = 0;
                if(\AbonoproveedorQuery::create()->filterByIdproveedor($post_data['idproveedor'])->exists()){
                    $abonoproveedor = \AbonoproveedorQuery::create()->filterByIdproveedor($post_data['idproveedor'])->findOne();
                    $abono_proveedor = $abonoproveedor->getAbonoproveedorBalance();
                }
                if($cantidad<=$abono_proveedor){
                    return $this->getResponse()->setContent(json_encode(array('response' => true)));
                }elseif ($cantidad > $abono_proveedor) {
                    return $this->getResponse()->setContent(json_encode(array('response' => false, 'msj' => 'Fondos insuficientes')));
                }
                
            }
            
            
           
            
            

        }
    }
    
  
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}

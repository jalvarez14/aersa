<?php

namespace Application\Flujoefectivo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Http\PhpEnvironment\Request;
use Zend\Console\Request as ConsoleRequest;

class SaldoproveedoresController extends AbstractActionController {

    public function indexAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL---
        $collection = \AbonoproveedorQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/flujoefectivo/saldoproveedores/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;
    }

    public function movimientosAction() {

        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $id = $this->params()->fromRoute('id');

        $exist = \AbonoproveedorQuery::create()->filterByIdproveedor($id)->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->exists();

        if ($exist) {
            //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL---
            $abonoproveedor = \AbonoproveedorQuery::create()->filterByIdproveedor($id)->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->findOne();
            $id = $abonoproveedor->getIdabonoproveedor();
            $abonoproveedordetalle = \AbonoproveedordetalleQuery::create()->filterByIdabonoproveedor($id)->find();
            $proveedor = $abonoproveedor->getProveedor();
            //INTANCIAMOS NUESTRA VISTA
            $form = new \Application\Flujoefectivo\Form\SaldoproveedoresForm();
            $form->setData($abonoproveedor->toArray(\BasePeer::TYPE_FIELDNAME));
            $form->setData($proveedor->toArray(\BasePeer::TYPE_FIELDNAME));

            $view_model = new ViewModel();
            $view_model->setTemplate('/application/flujoefectivo/saldoproveedores/movimientos');
            $view_model->setVariables(array(
                'form' => $form,
                'messages' => $this->flashMessenger(),
                'abonoproveedor' => $abonoproveedor,
                'abonoproveedordetalle' => $abonoproveedordetalle,
                'proveedor' => $proveedor,
            ));
            return $view_model;
        } else {
            return $this->redirect()->toUrl('/flujoefectivo/saldoproveedores');
        }
    }

    public function abonoAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $idusuario = $session['idusuario'];
        $id = $this->params()->fromRoute('id');
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $post_files = $request->getFiles();
            
            $idabonoproveedor = \AbonoproveedorQuery::create()->filterByIdproveedor($id)->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->findOne()->getIdabonoproveedor();
            $abonoproveedordetalle = new \Abonoproveedordetalle();
            $post_data["abonoproveedordetalle_fechaabono"] = date_create_from_format('d/m/Y', $post_data["abonoproveedordetalle_fechaabono"]);
            if (isset($post_data["abonoproveedordetalle_fechacobrocheque"]))
                $post_data["abonoproveedordetalle_fechacobrocheque"] = date_create_from_format('d/m/Y', $post_data["abonoproveedordetalle_fechacobrocheque"]);
            foreach ($post_data as $key => $value) {
                if (\AbonoproveedordetallePeer::getTableMap()->hasColumn($key)) {
                    $abonoproveedordetalle->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            $abonoproveedordetalle->setIdusuario($idusuario);
            $abonoproveedordetalle->setIdabonoproveedor($idabonoproveedor);
            $abonoproveedordetalle->setAbonoproveedordetalleTipo("abono");
            $cuenta = new \Cuentabancaria();
            $cuenta = \CuentabancariaQuery::create()->filterByIdcuentabancaria($abonoproveedordetalle->getIdcuentabancaria())->findOne();
            $balance = $cuenta->getCuentabancariaBalance() - $abonoproveedordetalle->getAbonoproveedordetalleCantidad();
            $cuenta->setCuentabancariaBalance($balance);
            
            $abonoproveedor = new \Abonoproveedor();
            $abonoproveedor = \AbonoproveedorQuery::create()->filterByIdabonoproveedor($idabonoproveedor)->findOne();
            $balance = $abonoproveedor->getAbonoproveedorBalance() + $abonoproveedordetalle->getAbonoproveedordetalleCantidad();
            
            $abonoproveedor->setAbonoproveedorBalance($balance);
            if(($abonoproveedordetalle->getAbonoproveedordetalleMediodepago() != 'cheque')||($abonoproveedordetalle->getAbonoproveedordetalleMediodepago() == 'cheque')&&((bool)$abonoproveedordetalle->getAbonoproveedordetalleChequecirculacion()==true))
                $cuenta->save();
            $abonoproveedor->save();
            $abonoproveedordetalle->save();
            if (!empty($post_files['abonoproveedordetalle_comprobante']['name'])) {
                $type = $post_files['abonoproveedordetalle_comprobante']['type'];
                $type = explode('/', $type);
                $type = $type[1];

                $target_path = "/application/files/abonoproveedordetalle/";
                if(!file_exists($_SERVER['DOCUMENT_ROOT'].$target_path)){
                    mkdir($_SERVER['DOCUMENT_ROOT'].$target_path, 0777);
                }
                $target_path = $target_path . 'abonoproveedordetalle_' . $abonoproveedordetalle->getIdabonoproveedordetalle() . '.' . $type;

                if (move_uploaded_file($_FILES['abonoproveedordetalle_comprobante']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                    $abonoproveedordetalle->setAbonoproveedordetalleComprobante($target_path);
                    $abonoproveedordetalle->save();
                }
            }
            return $this->redirect()->toUrl('/flujoefectivo/saldoproveedores/movimientos/' . $id);
        }
        //INTANCIAMOS NUESTRA VISTA
        $cuentas_array = array();
        $cuentas = \CuentabancariaQuery::create()->filterByIdsucursal($idsucursal)->find();
        foreach ($cuentas as $cuenta) {
            $idcuenta = $cuenta->getIdcuentabancaria();
            $cuentas_array[$idcuenta] = $cuenta->getCuentabancariaBanco() . " - " . $cuenta->getCuentabancariaNocuenta() . " - " . $cuenta->getCuentabancariaBalance();
        }

        $proveedor = \ProveedorQuery::create()->filterByIdproveedor($id)->findOne()->getProveedorNombrecomercial();
        $form = new \Application\Flujoefectivo\Form\AbonoproveedordetalleForm($cuentas_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'proveedor' => $proveedor,
            'id' => $id,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/flujoefectivo/saldoproveedores/abono');
        return $view_model;
    }

    public function saldoAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idsucursal = $session['idsucursal'];
        $cantidad = $this->params()->fromQuery('cantidad');
        $cuentas_array = array();
        $cuentas = \CuentabancariaQuery::create()->filterByIdsucursal($idsucursal)->find();
        foreach ($cuentas as $cuenta) {
            if ($cantidad <= $cuenta->getCuentabancariaBalance()) {
                array_push($cuentas_array, $cuenta->toArray());
            }
        }
        return $this->getResponse()->setContent(json_encode($cuentas_array));
    }

    public function validaterefAction() {
        $referencia = $this->params()->fromQuery('referencia');
        $edit = (!is_null($this->params()->fromQuery('edit'))) ? $this->params()->fromQuery('edit') : false;
        if ($edit) {
            $id = $this->params()->fromQuery('id');
        } else {
            $exist = \AbonoproveedordetalleQuery::create()->filterByAbonoproveedordetalleReferencia($referencia)->exists();
        }
        return $this->getResponse()->setContent(json_encode($exist));
    }
    
    public function editarmovimientoAction() {
        $request = $this->getRequest();
        if ($request->isPost()) {

            $id = $this->params()->fromRoute('id');
            $entity = \AbonoproveedordetalleQuery::create()->findPk($id);

            $post_data = $request->getPost();
            $post_data['abonoproveedordetalle_fechacobrocheque'] = date_create_from_format('d/m/Y', $post_data['abonoproveedordetalle_fechacobrocheque']);

            $entity->setAbonoproveedordetalleChequecirculacion(1)
                    ->setAbonoproveedordetalleFechacobrocheque($post_data['abonoproveedordetalle_fechacobrocheque'])
                    ->save();
            
            //DESCONTAMOS DE LA CUENTA BANCARIA
            $cuentabancaria = $entity->getCuentabancaria();
            $current_balace = $cuentabancaria->getCuentabancariaBalance();
            $new_balance = $current_balace - $entity->getAbonoproveedordetalleCantidad();
            $cuentabancaria->setCuentabancariaBalance($new_balance)->save();
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/flujoefectivo/saldoproveedores/movimientos/' . $entity->getAbonoproveedor()->getIdproveedor());
        }
    }

}

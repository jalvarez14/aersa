<?php

namespace Application\Flujoefectivo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
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
        if($exist) {
            //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL---
            $abonoproveedor = \AbonoproveedorQuery::create()->findPk($id);
            $abonoproveedordetalle = \AbonoproveedordetalleQuery::create()->filterByIdabonoproveedor($id)->find();
            $proveedor = $abonoproveedor->getProveedor();
            //INTANCIAMOS NUESTRA VISTA
            $form = new \Application\Flujoefectivo\Form\SaldoproveedoresForm($proveedor_nombre);
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
            $abonoproveedordetalle = new \Abonoproveedordetalle();
            $post_data["abonoproveedordetalle_fechaabono"]= date_create_from_format('d/m/Y', $post_data["abonoproveedordetalle_fechaabono"]);
            foreach ($post_data as $key => $value) {
                if (\AbonoproveedordetallePeer::getTableMap()->hasColumn($key)) {
                    $abonoproveedordetalle->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            $abonoproveedordetalle->setIdusuario($idusuario);
            $abonoproveedordetalle->setIdabonoproveedor($id);
            $abonoproveedordetalle->setAbonoproveedordetalleTipo("abono");
            if($abonoproveedordetalle->getAbonoproveedordetalleMediodepago()=='transferencia') {
                $cuenta = new \Cuentabancaria();
                $cuenta = \CuentabancariaQuery::create()->filterByIdcuentabancaria($abonoproveedordetalle->getIdcuentabancaria())->findOne();
                $balance = $cuenta->getCuentabancariaBalance() - $abonoproveedordetalle->getAbonoproveedordetalleCantidad();
                $cuenta->setCuentabancariaBalance($balance);
                $cuenta->save();
            } else {
                $abonoproveedordetalle->setAbonoproveedordetalleMediodepago(NULL);
            }
            $abonoproveedor = new \Abonoproveedor();
            $abonoproveedor = \AbonoproveedorQuery::create()->filterByIdabonoproveedor($id)->findOne();
            $balance=$abonoproveedor->getAbonoproveedorBalance() + $abonoproveedordetalle->getAbonoproveedordetalleCantidad();
            $abonoproveedor->setAbonoproveedorBalance($balance);
            $abonoproveedor->save();
            $abonoproveedordetalle->save();
            return $this->redirect()->toUrl('/flujoefectivo/saldoproveedores/movimientos/'.$id);
        }
        //INTANCIAMOS NUESTRA VISTA
        $cuentas_array = array();
        $cuentas = \CuentabancariaQuery::create()->filterByIdsucursal($idsucursal)->find();
        foreach ($cuentas as $cuenta) {
            $idcuenta = $cuenta->getIdcuentabancaria();
            $cuentas_array[$idcuenta] = $cuenta->getCuentabancariaBanco()." - ".$cuenta->getCuentabancariaNocuenta()." - ".$cuenta->getCuentabancariaBalance();
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
            if($cantidad <= $cuenta->getCuentabancariaBalance()) {
                array_push($cuentas_array, $cuenta->toArray());
            }
        }
        return $this->getResponse()->setContent(json_encode($cuentas_array));
    }
}

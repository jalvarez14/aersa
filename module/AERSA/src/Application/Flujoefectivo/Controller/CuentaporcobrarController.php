<?php

namespace Application\Flujoefectivo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class CuentaporcobrarController extends AbstractActionController {

    public function indexAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL---
        $collection = \CuentaporcobrarQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/flujoefectivo/cuentaporcobrar/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;
    }

    public function nuevoAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $idusuario = $session['idusuario'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $post_files = $request->getFiles();
            $post_data["cuentaporcobrar_fecha"] = date_create_from_format('d/m/Y', $post_data["cuentaporcobrar_fecha"]);
            $cuentaporcobrar = new \Cuentaporcobrar();
            foreach ($post_data as $key => $value) {
                if (\CuentaporcobrarPeer::getTableMap()->hasColumn($key)) {
                    $cuentaporcobrar->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            $cuentaporcobrar->setIdempresa($idempresa);
            $cuentaporcobrar->setIdsucursal($idsucursal);
            $cuentaporcobrar->setIdusuario($idusuario);
            $cuentaporcobrar->setCuentaporcobrarEstatuspago(FALSE);
            $cuentaporcobrar->save();
            if (!empty($post_files['cuentaporcobrar_comprobante']['name'])) {
                $type = $post_files['cuentaporcobrar_comprobante']['type'];
                $type = explode('/', $type);
                $type = $type[1];

                $target_path = "/application/files/cuentaporcobrar/";
                if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                    mkdir($_SERVER['DOCUMENT_ROOT'] . $target_path, 0777);
                }
                $target_path = $target_path . 'cuentaporcobrar_' . $cuentaporcobrar->getIdcuentaporcobrar() . '.' . $type;

                if (move_uploaded_file($_FILES['cuentaporcobrar_comprobante']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                    $cuentaporcobrar->setCuentaporcobrarComprobante($target_path);
                    $cuentaporcobrar->save();
                }
            }

            return $this->redirect()->toUrl('/flujoefectivo/cuentaporcobrar');
        }
        //INTANCIAMOS NUESTRA VISTA
        $form = new \Application\Flujoefectivo\Form\CuentaporcobrarForm();
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/flujoefectivo/cuentaporcobrar/nuevo');
        return $view_model;
    }

    public function movimientosAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $id = $this->params()->fromRoute('id');
        $exit = \CuentaporcobrarQuery::create()->filterByIdcuentaporcobrar($id)->exists();
        if ($exit) {
            $request = $this->getRequest();
            $cuentaporcobrar = \CuentaporcobrarQuery::create()->findPk($id);
            if ($request->isPost()) {
                $idempresa = $session['idempresa'];
                $idsucursal = $session['idsucursal'];
                $idusuario = $session['idusuario'];
                $post_data = $request->getPost();
                $post_files = $request->getFiles();
                $post_data["cuentaporcobrar_fecha"] = date_create_from_format('d/m/Y', $post_data["cuentaporcobrar_fecha"]);
                if ($cuentaporcobrar->getCuentaporcobrarComprobante() != NULL)
                    $comprobante = $cuentaporcobrar->getCuentaporcobrarComprobante();
                foreach ($post_data as $key => $value) {
                    if (\CuentaporcobrarPeer::getTableMap()->hasColumn($key)) {
                        $cuentaporcobrar->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                $cuentaporcobrar->setIdempresa($idempresa);
                $cuentaporcobrar->setIdsucursal($idsucursal);
                $cuentaporcobrar->setIdusuario($idusuario);
                $cuentaporcobrar->setCuentaporcobrarEstatuspago(FALSE);
                if (!empty($post_files['cuentaporcobrar_comprobante']['name'])) {
                    $type = $post_files['cuentaporcobrar_comprobante']['type'];
                    $type = explode('/', $type);
                    $type = $type[1];

                    $target_path = "/application/files/cuentaporcobrar/";
                    if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                        mkdir($_SERVER['DOCUMENT_ROOT'] . $target_path, 0777);
                    }
                    $target_path = $target_path . 'cuentaporcobrar_' . $cuentaporcobrar->getIdcuentaporcobrar() . '.' . $type;

                    if (move_uploaded_file($_FILES['cuentaporcobrar_comprobante']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                        $cuentaporcobrar->setCuentaporcobrarComprobante($target_path);
                        $cuentaporcobrar->save();
                    }
                } else {
                    $cuentaporcobrar->setCuentaporcobrarComprobante($comprobante);
                    $cuentaporcobrar->save();
                }
                return $this->redirect()->toUrl('/flujoefectivo/cuentaporcobrar/movimientos/'.$cuentaporcobrar->getIdcuentaporcobrar());
            }

            $flujoefectivo = \FlujoefectivoQuery::create()->filterByIdcuentaporcobrar($cuentaporcobrar->getIdcuentaporcobrar())->filterByFlujoefectivoOrigen('cuentaporcobrar')->find();
            $form = new \Application\Flujoefectivo\Form\CuentaporcobrarForm();
            $form->setData($cuentaporcobrar->toArray(\BasePeer::TYPE_FIELDNAME));

            $view_model = new ViewModel();
            $view_model->setTemplate('/application/flujoefectivo/cuentaporcobrar/movimientos');
            $view_model->setVariables(array(
                'form' => $form,
                'cuentaporcobrar' => $cuentaporcobrar,
                'messages' => $this->flashMessenger(),
                'flujoefectivo' => $flujoefectivo,
            ));
            return $view_model;
        } else {
            return $this->redirect()->toUrl('/flujoefectivo/cuentaporcobrar');
        }
    }

    public function pagoAction() {
        $request = $this->getRequest();
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idsucursal = $session['idsucursal'];
        $id = $this->params()->fromRoute('id');
        $exit = \CuentaporcobrarQuery::create()->filterByIdcuentaporcobrar($id)->exists();
        if ($exit) {
            if ($request->isPost()) {
                $post_data = $request->getPost();
                $post_files = $request->getFiles();
                $post_data["flujoefectivo_fecha"] = date_create_from_format('d/m/Y', $post_data["flujoefectivo_fecha"]);
                if (isset($post_data["flujoefectivo_fechacobrocheque"]))
                    $post_data["flujoefectivo_fechacobrocheque"] = date_create_from_format('d/m/Y', $post_data["flujoefectivo_fechacobrocheque"]);
                $flujoefectivo = new \Flujoefectivo();
                foreach ($post_data as $key => $value) {
                    if (\FlujoefectivoPeer::getTableMap()->hasColumn($key)) {
                        $flujoefectivo->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                }
                $flujoefectivo->setIdempresa($session['idempresa']);
                $flujoefectivo->setIdsucursal($session['idsucursal']);
                $flujoefectivo->setIdusuario($session['idusuario']);
                $flujoefectivo->setFlujoefectivoOrigen('cuentaporcobrar');
                $flujoefectivo->setIdcuentaporcobrar($id);
                $flujoefectivo->setFlujoefectivoPago('cuenta');
                $flujoefectivo->setFlujoefectivoTipo('ingreso');
                $cuentabancaria = new \Cuentabancaria();
                $cuentabancaria = \CuentabancariaQuery::create()->findPk($flujoefectivo->getIdcuentabancaria());
                $cuentabancaria->setCuentabancariaBalance($cuentabancaria->getCuentabancariaBalance() + $flujoefectivo->getFlujoefectivoCantidad());
                $cuentaporcobrar = new \Cuentaporcobrar();
                $cuentaporcobrar = \CuentaporcobrarQuery::create()->findPk($id);
                $cuentaporcobrar->setCuentaporcobrarAbonado($flujoefectivo->getFlujoefectivoCantidad() + $cuentaporcobrar->getCuentaporcobrarAbonado());

                if (($cuentaporcobrar->getCuentaporcobrarAbonado() == $cuentaporcobrar->getCuentaporcobrarCantidad()))
                    $cuentaporcobrar->setCuentaporcobrarEstatuspago(true);
                $cuentaporcobrar->save();
                $flujoefectivo->save();
                if (($flujoefectivo->getFlujoefectivoMediodepago() != 'cheque') || ($flujoefectivo->getFlujoefectivoMediodepago() == 'cheque') && ((bool) $flujoefectivo->getFlujoefectivoChequecirculacion() == true))
                    $cuentabancaria->save();

                if (!empty($post_files['flujoefectivo_comprobante']['name'])) {
                    $type = $post_files['flujoefectivo_comprobante']['type'];
                    $type = explode('/', $type);
                    $type = $type[1];

                    $target_path = "/application/files/flujoefectivocuentaporcobrar/";
                    if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                        mkdir($_SERVER['DOCUMENT_ROOT'] . $target_path, 0777);
                    }

                    $target_path = $target_path . 'flujoefectivocuentaporcobrar_' . $flujoefectivo->getIdflujoefectivo() . '.' . $type;

                    if (move_uploaded_file($_FILES['flujoefectivo_comprobante']['tmp_name'], $_SERVER['DOCUMENT_ROOT'] . $target_path)) {
                        $flujoefectivo->setFlujoefectivoComprobante($target_path);
                        $flujoefectivo->save();
                    }
                }
                return $this->redirect()->toUrl('/flujoefectivo/cuentaporcobrar/movimientos/' . $id);
            }

            $cuentas_array = array();
            $cuentas = \CuentabancariaQuery::create()->filterByIdsucursal($idsucursal)->find();
            foreach ($cuentas as $cuenta) {
                $idcuenta = $cuenta->getIdcuentabancaria();
                $cuentas_array[$idcuenta] = $cuenta->getCuentabancariaBanco() . " - " . $cuenta->getCuentabancariaNocuenta() . " - " . $cuenta->getCuentabancariaBalance();
            }
            $cuentaporcobrar = \CuentaporcobrarQuery::create()->findPk($id);

            $form = new \Application\Flujoefectivo\Form\FlujoefectivocuentaporcobrarForm($cuentas_array);

            $view_model = new ViewModel();
            $view_model->setTemplate('/application/flujoefectivo/cuentaporcobrar/pago');
            $view_model->setVariables(array(
                'form' => $form,
                'id' => $id,
                'cuentaporcobrar' => $cuentaporcobrar,
                'messages' => $this->flashMessenger(),
            ));
            return $view_model;
        } else {
            return $this->redirect()->toUrl('/flujoefectivo/cuentaporcobrar');
        }
    }

    public function eliminarAction() {
        $request = $this->getRequest();
        if ($request->isPost()) {
            $id = $this->params()->fromRoute('id');
            $cuentabancaria = \CuentabancariaQuery::create()->findPk($id)->delete();
            $this->flashMessenger()->addSuccessMessage('Cuenta bancaria eliminada satisfactoriamente!');
            return $this->redirect()->toUrl('/flujoefectivo/cuentabancaria');
        }
    }

    public function validarcuentaAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        $banco = $this->params()->fromQuery('banco');
        $cuenta = $this->params()->fromQuery('cuenta');

        $edit = (!is_null($this->params()->fromQuery('edit'))) ? $this->params()->fromQuery('edit') : false;
        if ($edit) {
            $id = $this->params()->fromQuery('id');
            $exist = \CuentabancariaQuery::create()
                    ->filterByIdempresa($idempresa)
                    ->filterByIdsucursal($idsucursal)
                    ->filterByCuentabancariaBanco($banco)
                    ->filterByCuentabancariaNocuenta($cuenta)
                    ->filterByIdcuentabancaria($id, \Criteria::NOT_EQUAL)
                    ->exists();
        } else {
            $exist = \CuentabancariaQuery::create()
                    ->filterByIdempresa($idempresa)
                    ->filterByIdsucursal($idsucursal)
                    ->filterByCuentabancariaBanco($banco)
                    ->filterByCuentabancariaNocuenta($cuenta)
                    ->exists();
        }
        return $this->getResponse()->setContent(json_encode($exist));
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
            $current_balace = $cuentabancaria->getCuentabancariaBalance();
            $new_balance = $current_balace + $entity->getFlujoefectivoCantidad();
            $cuentabancaria->setCuentabancariaBalance($new_balance)->save();

            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->redirect()->toUrl('/flujoefectivo/cuentaporcobrar/movimientos/' . $entity->getIdcuentaporcobrar());
        }
    }

}

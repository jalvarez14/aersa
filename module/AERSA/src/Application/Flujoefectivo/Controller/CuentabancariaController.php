<?php

namespace Application\Flujoefectivo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class CuentabancariaController extends AbstractActionController {

    public function indexAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL---
        $collection = \CuentabancariaQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal(1)->find();

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/flujoefectivo/cuentabancaria/index');
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
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $post_data['idempresa'] = $session['idempresa'];
            $post_data['idsucursal'] = $session['idsucursal'];
            $cuentabancaria = new \Cuentabancaria();
            foreach ($post_data as $key => $value) {
                if (\CuentabancariaPeer::getTableMap()->hasColumn($key)) {
                    $cuentabancaria->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            $cuentabancaria->setIdempresa($idempresa);
            $cuentabancaria->setIdsucursal("1");
            $cuentabancaria->save();
            return $this->redirect()->toUrl('/flujoefectivo/cuentabancaria');
        }
        //INTANCIAMOS NUESTRA VISTA
        $form = new \Application\Flujoefectivo\Form\CuentabancariaForm();
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/flujoefectivo/cuentabancaria/nuevo');
        return $view_model;
    }

    public function editarAction() {
        $request = $this->getRequest();
        $id = $this->params()->fromRoute('id');
        $exist = \CuentabancariaQuery::create()->filterByIdcuentabancaria($id)->exists();
        if ($exist) {
            $cuentabancaria = \CuentabancariaQuery::create()->findPk($id);
            if ($request->isPost()) {
                $post_data = $request->getPost();
                foreach ($post_data as $key => $value) {
                    if (\CuentabancariaPeer::getTableMap()->hasColumn($key))
                        $cuentabancaria->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                $cuentabancaria->save();
                //REDIRECCIONAMOS AL LISTADO
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/flujoefectivo/cuentabancaria');
            }
            $form = new \Application\Flujoefectivo\Form\CuentabancariaForm();
            $form->setData($cuentabancaria->toArray(\BasePeer::TYPE_FIELDNAME));

            $view_model = new ViewModel();
            $view_model->setTemplate('/application/flujoefectivo/cuentabancaria/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'cuentabancaria' => $cuentabancaria,
                'messages' => $this->flashMessenger(),
            ));
            return $view_model;
        } else {
            return $this->redirect()->toUrl('/flujoefectivo/cuentabancaria');
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
                    ->filterByIdsucursal(1)
                    ->filterByCuentabancariaBanco($banco)
                    ->filterByCuentabancariaNocuenta($cuenta)
                    ->filterByIdcuentabancaria($id, \Criteria::NOT_EQUAL)
                    ->exists();
        } else {
            $exist = \CuentabancariaQuery::create()
                    ->filterByIdempresa($idempresa)
                    ->filterByIdsucursal(1)
                    ->filterByCuentabancariaBanco($banco)
                    ->filterByCuentabancariaNocuenta($cuenta)
                    ->exists();
        }
        return $this->getResponse()->setContent(json_encode($exist));
    }

}

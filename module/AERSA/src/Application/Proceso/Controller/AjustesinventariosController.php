<?php

namespace Application\Proceso\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class AjustesinventariosController extends AbstractActionController {

    public function indexAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL---
        $collection = \CuentabancariaQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/ajusteinventario/index');
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
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $post_data['idempresa'] = $session['idempresa'];
            $post_data['idsucursal'] = $session['idsucursal'];
            $cuentabancaria = new \Ajustesinventarios();
            foreach ($post_data as $key => $value) {
                if (\AjustesinventariosPeer::getTableMap()->hasColumn($key)) {
                    $cuentabancaria->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            $cuentabancaria->setIdempresa($idempresa);
            $cuentabancaria->setIdsucursal($idsucursal);
            $cuentabancaria->save();
            return $this->redirect()->toUrl('/flujoefectivo/cuentabancaria');
        }
        //INTANCIAMOS NUESTRA VISTA
        $form = new \Application\Flujoefectivo\Form\AjustesinventariosForm();
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
        $exist = \AjustesinventariosQuery::create()->filterByIdcuentabancaria($id)->exists();
        if ($exist) {
            $cuentabancaria = \AjustesinventariosQuery::create()->findPk($id);
            if ($request->isPost()) {
                $post_data = $request->getPost();
                foreach ($post_data as $key => $value) {
                    if (\AjustesinventariosPeer::getTableMap()->hasColumn($key))
                        $cuentabancaria->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                $cuentabancaria->save();
                //REDIRECCIONAMOS AL LISTADO
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/flujoefectivo/cuentabancaria');
            }
            $form = new \Application\Flujoefectivo\Form\AjustesinventariosForm();
            $form->setData($cuentabancaria->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $flujoefectivo = \FlujoefectivoQuery::create()->filterByIdcuentabancaria($cuentabancaria->getIdcuentabancaria())->find();
            $saldoproveedor = \AbonoproveedordetalleQuery::create()->filterByIdcuentabancaria($cuentabancaria->getIdcuentabancaria())->find();
            
            $view_model = new ViewModel();
            $view_model->setTemplate('/application/flujoefectivo/cuentabancaria/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'cuentabancaria' => $cuentabancaria,
                'messages' => $this->flashMessenger(),
                'flujoefectivo' => $flujoefectivo,
                'saldoproveedor' => $saldoproveedor,
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
            $cuentabancaria = \AjustesinventariosQuery::create()->findPk($id)->delete();
            $this->flashMessenger()->addSuccessMessage('Cuenta bancaria eliminada satisfactoriamente!');
            return $this->redirect()->toUrl('/flujoefectivo/cuentabancaria');
        }
    }

}

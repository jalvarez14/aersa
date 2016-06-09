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
        ));
        
        return $view_model;
    }

    public function editarAction() {
        
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        
        $request = $this->getRequest();
        $id = $this->params()->fromRoute('id');
        
        $exist = \CompraQuery::create()->filterByIdcompra($id)->exists();
        if ($exist) {
            
            $compra = \CompraQuery::create()->findPk($id);
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
           
            $view_model = new ViewModel();
            $view_model->setTemplate('/application/flujoefectivo/cuentasporpagar/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'messages' => $this->flashMessenger(),
                'total' => $total,
                'restan' => $restan,
            ));
            return $view_model;
        } else {
            return $this->redirect()->toUrl('/flujoefectivo/cuentasporpagar');
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

}

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
        $collection = \AjusteinventarioQuery::create()->filterByIdsucursal($idsucursal)->find();

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/proceso/ajusteinventario/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
            'idrol' => $session['idrol'],
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
            $post_data['idusuario'] = $session['idusuario'];
            $post_data["ajusteinventario_fecha"] = date_create_from_format('d/m/Y', $post_data["ajusteinventario_fecha"]);
            $ajusteinventario = new \Ajusteinventario();
            foreach ($post_data as $key => $value) {
                if (\AjusteinventarioPeer::getTableMap()->hasColumn($key)) {
                    $ajusteinventario->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
            }
            $ajusteinventario->save();
            return $this->redirect()->toUrl('/procesos/ajustesinventarios');
        }
        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();
        
        $almacen_array = array();
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->find();
        foreach ($almacenes as $almacen) {
            $id = $almacen->getIdalmacen();
            $almacen_array[$id] = $almacen->getAlmacenNombre();
        }
        //INTANCIAMOS NUESTRA VISTA
        $form = new \Application\Proceso\Form\AjustesinventariosForm($almacen_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'anio_activo' => $anio_activo,
            'mes_activo' => $mes_activo,
            'idrol' => $session['idrol'],
        ));
        $view_model->setTemplate('/application/proceso/ajusteinventario/nuevo');
        return $view_model;
    }

    public function editarAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $request = $this->getRequest();
        $id = $this->params()->fromRoute('id');
        $exist = \AjusteinventarioQuery::create()->filterByIdajusteinventario($id)->exists();
        if ($exist) {
            $ajusteinventario = \AjusteinventarioQuery::create()->findPk($id);
            if ($request->isPost()) {
                $post_data = $request->getPost();
                foreach ($post_data as $key => $value) {
                    if (\AjusteinventarioPeer::getTableMap()->hasColumn($key))
                        $ajusteinventario->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                $ajusteinventario->save();
                //REDIRECCIONAMOS AL LISTADO
                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/procesos/ajustesinventarios');
            }
            $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
            $anio_activo = $sucursal->getSucursalAnioactivo();
            $mes_activo = $sucursal->getSucursalMesactivo();
            $producto_nombre=$ajusteinventario->getProducto()->getProductoNombre();
            
            $almacen_array = array();
            $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->find();
            foreach ($almacenes as $almacen) {
                $id = $almacen->getIdalmacen();
                $almacen_array[$id] = $almacen->getAlmacenNombre();
            }
            $form = new \Application\Proceso\Form\AjustesinventariosForm($almacen_array);
            $form->setData($ajusteinventario->toArray(\BasePeer::TYPE_FIELDNAME));
            $form->get('ajusteinventario_fecha')->setValue($ajusteinventario->getAjusteinventarioFecha('d/m/Y'));
            $view_model = new ViewModel();
            $view_model->setTemplate('/application/proceso/ajusteinventario/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'cuentabancaria' => $ajusteinventario,
                'messages' => $this->flashMessenger(),
                'anio_activo' => $anio_activo,
                'mes_activo' => $mes_activo,
                'producto_nombre' => $producto_nombre,
                'idrol' => $session['idrol'],
            ));
            return $view_model;
        } else {
            return $this->redirect()->toUrl('/procesos/ajustesinventarios');
        }
    }

    public function eliminarAction() {
        $request = $this->getRequest();
        if ($request->isPost()) {
            $id = $this->params()->fromRoute('id');
            $ajusteinventario = \AjusteinventarioQuery::create()->findPk($id)->delete();
            $this->flashMessenger()->addSuccessMessage('Ajuste de inventario eliminada satisfactoriamente!');
            return $this->redirect()->toUrl('/procesos/ajustesinventarios');
        }
    }

}

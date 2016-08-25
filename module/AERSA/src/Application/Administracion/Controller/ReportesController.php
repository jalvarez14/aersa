<?php

namespace Application\Administracion\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ReportesController extends AbstractActionController {

    public function cierresinventariosAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA Y SUCURSAL---
        //$collection = \CuentabancariaQuery::create()->filterByIdempresa($idempresa)->filterByIdsucursal($idsucursal)->find();

        //INTANCIAMOS NUESTRA VISTA        
        $mes_activo =  \SucursalQuery::create()->findPk($idsucursal)->getSucursalMesactivo();
        $anio=date("Y");
        
        if(checkdate($mes_activo,31,$anio))
            $fecha="$anio/$mes_activo/31";
        else if(checkdate($mes_activo,30,$anio))
            $fecha="$anio/$mes_activo/30";
        else if(checkdate($mes_activo,29,$anio))
            $fecha="$anio/$mes_activo/29";
        else
            $fecha="$anio/$mes_activo/28";
        
        $almacen_array = array();
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->find();
        foreach ($almacenes as $almacen) {
            $id = $almacen->getIdalmacen();
            $almacen_array[$id] = $almacen->getAlmacenNombre();
        }
        
        $auditor_array = array();
        $usuarios= \UsuarioQuery::create()->filterByIdrol(4)->useUsuariosucursalQuery()->filterByIdsucursal($idsucursal)->endUse()->find();
        $usuario = new \Usuario();
        foreach ($usuarios as $usuario) {
            $id = $usuario->getIdusuario();
            $auditor_array[$id] = $usuario->getUsuarioNombre();
        }
        
        $form = new \Application\Administracion\Form\CierresinventariosForm($fecha,$almacen_array,$auditor_array);
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/administracion/reportes/cierresinventarios');
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;
    }

    
    public function batchAction(){
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $request = $this->getRequest();
        
        if($request->isPost()){
            $post_data = $request->getPost();
            foreach ($post_data['proveedores'] as $proveedor){
                $exist = \ProveedorQuery::create()->filterByIdempresa($session['idempresa'])->filterByProveedorNombrecomercial($proveedor['Nombre'])->exists();
                if(!$exist){
                    $entity = new \Proveedor();
                    $entity->setIdempresa($session['idempresa'])
                           ->setProveedorNombrecomercial($proveedor['Nombre'])
                           ->setProveedorRazonsocial($proveedor['Razon social'])
                           ->setProveedorRfc($proveedor['RFC']) 
                           ->setProveedorTelefono($proveedor['Telefono'])
                           ->save();
                }
                $sucursales = \SucursalQuery::create()->filterByIdempresa($session['idempresa'])->find();
                $sucursal = new \Sucursal();
                foreach ($sucursales as $sucursal){
                    $abono_proveedor = new \Abonoproveedor();
                    $abono_proveedor->setIdempresa($session['idempresa'])
                                    ->setIdsucursal($sucursal->getIdsucursal())
                                    ->setIdproveedor($entity->getIdproveedor())
                                    ->setAbonoproveedorBalance(0)
                                    ->save();
                            
                }
            }
            
            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
            return $this->getResponse()->setContent(json_encode(array('response' => true)));
            
        }
    }
}

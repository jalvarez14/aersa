<?php

namespace Application\Flujoefectivo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ReportesController extends AbstractActionController {

    public function mensualAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $idsucursal = $session['idsucursal'];
        //INTANCIAMOS NUESTRA VISTA
        $min = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('asc')->findOne()->getCuentaporcobrarFecha('Y');
        $max = \CuentaporcobrarQuery::create()->orderByCuentaporcobrarFecha('desc')->findOne()->getCuentaporcobrarFecha('Y');
        $ano_array= array ();
        for ($i = $min; $i <= $max; $i++) {
            $ano_array[$i]=$i;
        }
        
        $form = new \Application\Flujoefectivo\Form\ReportemensualForm($ano_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/flujoefectivo/reportes/mensual');
        return $view_model;
    }
    
    public function reportemAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $mes = $this->params()->fromQuery('mes');
        $ano = $this->params()->fromQuery('ano');
        $reporte = array();
        $compras = \CompraQuery::create()->filterByCompraFechacompra(array('min' => $ano.'-'.$mes.'-01 00:00:00','max' => $ano.'-'.$mes.'-31 23:59:59'))->find();
        $compra = new \Compra();
        foreach ($compras as $compra) {
            $comprasdetalles = \CompradetalleQuery::create()->filterByIdcompra($compra->getIdcompra())->find();
            $compradetalle = new \Compradetalle();
            foreach ($comprasdetalles as $compradetalle) {
                $key=$compradetalle->getProducto()->getIdcategoria();
                $value=$compradetalle->getCompradetalleSubtotal();
                //echo $compradetalle->getIdcompradetalle()." precio ".$compradetalle->getCompradetalleSubtotal()." cat ".$compradetalle->getProducto()->getIdcategoria()." | ";
                if(isset($reporte[$key])) {
                    $reporte[$key]=$value+$reporte[$key];
                } else {
                    $reporte[$key]=$value;
                }
            }
        }
        $categorias = \CategoriaQuery::create()->filterByIdcategoriapadre(NULL)->find();
        $categoria = new \Categoria();
        $reporteg = array ();
        $totalg=0;
        foreach ($reporte as $report) {
            $totalg+=$report;
        }
        foreach ($categorias as $categoria) {
            $reporteg["<h5>".$categoria->getCategoriaNombre()."</h5>"][0] = 0;
            $total=0;
            $subcategorias = \CategoriaQuery::create()->filterByIdcategoriapadre($categoria->getIdcategoria())->find();
            $subcategoria = new \Categoria();
            foreach ($subcategorias as $subcategoria) {
                if(isset($reporte[$subcategoria->getIdcategoria()])) {
                    $reporteg[$subcategoria->getCategoriaNombre()][0] = $reporte[$subcategoria->getIdcategoria()];
                    $reporteg[$subcategoria->getCategoriaNombre()][1] = ($reporte[$subcategoria->getIdcategoria()]*100)/$totalg;
                    $total+=$reporte[$subcategoria->getIdcategoria()];
                } else {
                    $reporteg[$subcategoria->getCategoriaNombre()][0] = 0;
                }
            }
            if(isset($reporte[$categoria->getIdcategoria()])) {
                $reporteg['Otros '.$categoria->getCategoriaNombre()][0] = $reporte[$categoria->getIdcategoria()];
                $reporteg['Otros '.$categoria->getCategoriaNombre()][1] = ($reporte[$categoria->getIdcategoria()]*100)/$totalg;
                $total += $reporte[$categoria->getIdcategoria()];
            }
            $reporteg["<h5>".$categoria->getCategoriaNombre()."</h5>"][0] = $total;
            $reporteg["<h5>".$categoria->getCategoriaNombre()."</h5>"][1] = ($total*100)/$totalg;
        }
        foreach ($reporteg as $report0) {
            foreach ($report0 as $report1) {
                
            }
            
        }

        //$flujoefectivo = \FlujoefectivoQuery::create()->filterByFlujoefectivoOrigen('compra')->filterByFlujoefectivoFecha(array('min' => $ano.'-'.$mes.'-01 00:00:00','max' => $ano.'-'.$mes.'-31 23:59:59'))->find();
        return $this->getResponse()->setContent(json_encode($reporteg));
    }

    public function anualAction() {
        echo "entro A";
        exit;
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

}

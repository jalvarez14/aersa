<?php
namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ProductosasociacionController extends AbstractActionController
{
    public function indexAction()
    {
        
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A SU ROL
        
        //SI SE TRATA DE UN ADMIN DE AERSA
        if($session['idempresa'] == 1)
            $emp = \EmpresaQuery::create()->findPk($session['idempresa']);
        
        $productos = \ProductoQuery::create()->filterByProductoTipo('plu',  \Criteria::EQUAL)->find();
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $post_data = $request->getPost();
            
            $status = $post_data['status'];
            
            //Seteamos campos en nulo para que no estorben
            $post_data['datatable_length'] = null;
            $post_data['status'] = null;
            foreach ($post_data as $checked)
            {   
                if($checked != null)
                {  
                    $prod = \ProductosucursalalmacenQuery::create()->findPk($checked);
                    if($prod == null)
                    {
                        $prod = new \Productosucursalalmacen();
                        $prod->setIdproducto($checked);
                        $prod->setIdalmacen($status);
                        $prod->setIdempresa($session['idempresa']);
                        $prod->setIdsucursal($session['idsucursal']);
                    }
                    else
                        $prod->setIdalmacen($status);
                    
                    $prod->save();
                }
            }
            $this->flashMessenger()->addSuccessMessage('Productos guardados satisfactoriamente!');
            return $this->redirect()->toUrl('/catalogo/asociacionproductos');
        }
        
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->find();
                
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/productosasociacion/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'productos' => $productos,
            'almacenes' => $almacenes,
        ));
        return $view_model;

    }   

    
}

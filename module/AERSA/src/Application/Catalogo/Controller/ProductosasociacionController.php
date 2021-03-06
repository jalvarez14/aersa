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
        

        $productos = \ProductoQuery::create()
                ->filterByProductoTipo('plu',  \Criteria::EQUAL)
                ->filterByIdempresa($session['idempresa'])
                ->find();
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $post_data = $request->getPost();
      

            $status = $post_data['status'];
           
            $prod = \ProductosucursalalmacenQuery::create()->filterByIdproducto($post_data['id'])->filterByIdsucursal($session['idsucursal'])->find()->delete();
            

            foreach ($post_data['id'] as $checked)
            {   

                    $prod = new \Productosucursalalmacen();
                    $prod->setIdproducto($checked);
                    $prod->setIdalmacen($status);
                    $prod->setIdempresa($session['idempresa']);
                    $prod->setIdsucursal($session['idsucursal']);
                   

                    $prod->save();
                  
            }
            $this->flashMessenger()->addSuccessMessage('Productos guardados satisfactoriamente!');
            return $this->redirect()->toUrl('/catalogo/asociacionproductos');
        }
        
        $almacenes = \AlmacenQuery::create()->filterByIdsucursal($session['idsucursal'])->filterByAlmacenEstatus(1)->filterByAlmacenNombre('Créditos al costo',  \Criteria::NOT_EQUAL)->filterByAlmacenNombre('Consignación',  \Criteria::NOT_EQUAL)->filterByAlmacenNombre('Bonificados',  \Criteria::NOT_EQUAL)->find();
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/productosasociacion/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'productos' => $productos,
            'almacenes' => $almacenes,
            'session' => $session,
        ));
        return $view_model;

    }   

    
}

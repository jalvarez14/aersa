<?php

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class PlantillatablajeriaController extends AbstractActionController {
    public function indexAction()
    {

        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA
        
        //SI SE TRATA DE UN ADMIN DE AERSA
//        if($session['idrol'] == 1){
//            $collection = \CategoriaQuery::create()->find();
//        }
        //$idempresa=$session['idempresa'];

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA
        
        $idempresa=1;
        $collection = \PlantillatablajeriaQuery::create()->filterByIdempresa($idempresa)->find();

        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/tablajeria/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;
    }
    
    public function nuevoAction()
    {
        $idempresa=1;
        //$idempresa=$session['idempresa'];
        $request = $this->getRequest();
        if($request->isPost()){
            
            $post_data = $request->getPost();
            $plantillatablajeria = new \Plantillatablajeria();
            foreach ($post_data as $key => $data){
                if($key != 'idempresa')
                    $plantillatablajeria->setByName($key, $data, \BasePeer::TYPE_FIELDNAME);
                else
                    $plantillatablajeria->setByName($key, $idempresa, \BasePeer::TYPE_FIELDNAME);
            }
            $plantillatablajeria->save();
            
            return  $this->redirect()->toUrl('/catalogo/tablajeria');

        }
        

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA
        
        
        $producto_array = array();
        $productos = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
        foreach ($productos as $producto){
            
            $id = $producto->getIdproducto();
            $producto_array[$id] = $producto->getProductoNombre();
        }

        //INTANCIAMOS NUESTRA VISTA
        $form = new \Application\Catalogo\Form\PlantillatablajeriaForm($producto_array);
        
        $view_model = new ViewModel();
        $view_model->setVariables(array
        (

            'form'      => $form,
            'messages'  => $this->flashMessenger(),
        ));
        
        $view_model->setTemplate('/application/catalogo/tablajeria/nuevo');
        return $view_model;
    }
    
    public function editarAction()
    {
        $request = $this->getRequest();
        $id = $this->params()->fromRoute('id');
        $exist = \PlantillatablajeriaQuery::create()->filterByIdplantillatablajeria($id)->exists(); 
        if($exist){
            $plantillatablajeria = \PlantillatablajeriaQuery::create()->findPk($id);
            if($request->isPost()){
                $post_data =  $request->getPost();
                foreach ($post_data as $key => $data){
                    $plantillatablajeria->setByName($key, $data, \BasePeer::TYPE_FIELDNAME);
                }
                $plantillatablajeria->save();
                return  $this->redirect()->toUrl('/catalogo/tablajeria');
            }
            $producto_array = array();
            $productos = \ProductoQuery::create()->find();
            foreach ($productos as $producto) {

                $id = $producto->getIdproducto();
                $producto_array[$id] = $producto->getProductoNombre();
            }
            $form = new \Application\Catalogo\Form\PlantillatablajeriaForm($producto_array);
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($plantillatablajeria->toArray(\BasePeer::TYPE_FIELDNAME));
             //ENVIAMOS A LA VISTA
            $view_model = new ViewModel();
            $view_model->setVariables(array(
                'form'      => $form,
                'messages'  => $this->flashMessenger(),
                ));
            $view_model->setTemplate('/application/catalogo/tablajeria/editar');
            return $view_model;
        }else{
            return $this->redirect()->toUrl('/catalogo/tablajeria');
        }
    }
    
    public function eliminarAction()
        {
        $request = $this->getRequest();
        if($request->isPost())
            {
            $id = $this->params()->fromRoute('id');
            $plantilla = \PlantillatablajeriaQuery::create()->findPk($id);
            $plantilla->delete();
            $this->flashMessenger()->addSuccessMessage('Plantilla de tablajeria eliminada satisfactoriamente!');
            return $this->redirect()->toUrl('/catalogo/tablajeria');       
            }
        }
}

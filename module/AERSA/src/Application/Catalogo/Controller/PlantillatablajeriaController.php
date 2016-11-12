<?php

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class PlantillatablajeriaController extends AbstractActionController {

    public function indexAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA
        //SI SE TRATA DE UN ADMIN DE AERSA
//        if($session['idrol'] == 1){
//            $collection = \CategoriaQuery::create()->find();
//        }
        $idempresa = $session['idempresa'];

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA ---
        //$idempresa=1;
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

    public function nuevoAction() {
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idempresa = $session['idempresa'];
        $request = $this->getRequest();
        if ($request->isPost()) {
            $post_data = $request->getPost();
            $plantillatablajeria = new \Plantillatablajeria();
            unset($post_data['idproducto_autocomplete']);
            if (isset($post_data['productos'])) {
                $productos = $post_data['productos'];
                unset($post_data['productos']);
                foreach ($post_data as $key => $data) {
                        $plantillatablajeria->setByName($key, $data, \BasePeer::TYPE_FIELDNAME);
                }
                $plantillatablajeria->setIdempresa($idempresa);
                $plantillatablajeria->save();
                $idplantillatablajeria = $plantillatablajeria->getIdplantillatablajeria();
                foreach ($productos as $producto) {
                    $plantillatablajeriadetalle = new \Plantillatablajeriadetalle();
                    $producto['idplantillatablajeria'] = $idplantillatablajeria;
                    foreach ($producto as $key => $data) {
                        $plantillatablajeriadetalle->setByName($key, $data, \BasePeer::TYPE_FIELDNAME);
                    }
                    $plantillatablajeriadetalle->save();
                }
                return $this->redirect()->toUrl('/catalogo/tablajeria');
            }
        }



        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A LA EMPRESA


        $producto_array = array();
        $productos = \ProductoQuery::create()->filterByIdempresa($idempresa)->find();
        foreach ($productos as $producto) {

            $id = $producto->getIdproducto();
            $producto_array[$id] = $producto->getProductoNombre();
        }
        //INTANCIAMOS NUESTRA VISTA
        $form = new \Application\Catalogo\Form\PlantillatablajeriaForm($producto_array);
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/catalogo/tablajeria/nuevo');
        return $view_model;
    }

    public function editarAction() {
        $request = $this->getRequest();
        $id = $this->params()->fromRoute('id');
        $exist = \PlantillatablajeriaQuery::create()->filterByIdplantillatablajeria($id)->exists();
        if ($exist) {
            $plantillatablajeria = \PlantillatablajeriaQuery::create()->findPk($id);
            if ($request->isPost()) {
                
                $post_data = $request->getPost();
                if (isset($post_data['plantillatablajeria_detalle'])) {
                    foreach ($post_data as $key => $value) {
                        if (\PlantillatablajeriadetallePeer::getTableMap()->hasColumn($key)) {
                            $plantillatablajeria->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                        }
                    }
                    $plantillatablajeria->setPlantillatablajeriaDescripcion($post_data['plantillatablajeria_descripcion']);
                    $plantillatablajeria->save();
                    $plantillatablajeria->getPlantillatablajeriadetalles()->delete();
                    foreach ($post_data['plantillatablajeria_detalle'] as $producto) {
                        $plantillatablajeria_detalle = new \Plantillatablajeriadetalle();
                        $plantillatablajeria_detalle->setIdplantillatablajeria($plantillatablajeria->getIdplantillatablajeria())
                                ->setIdproducto($producto['idproducto']);
                        $plantillatablajeria_detalle->save();
                    }
        
                    //REDIRECCIONAMOS AL LISTADO
                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                    return $this->redirect()->toUrl('/catalogo/tablajeria');
                }

                return $this->redirect()->toUrl('/catalogo/tablajeria');
            }
            $form = new \Application\Catalogo\Form\PlantillatablajeriaForm();
            $form->setData($plantillatablajeria->toArray(\BasePeer::TYPE_FIELDNAME));
            //SETEAMOS EL VALOR AUTOCOMPLETE
            $form->get('idproducto_autocomplete')->setValue($plantillatablajeria->getProducto()->getProductoNombre());
            //LOS DETALLES DE LA PLANTILLA TABLAJERIA
            $plantillatablajeria_detalle = \PlantillatablajeriadetalleQuery::create()->filterByIdplantillatablajeria($plantillatablajeria->getIdplantillatablajeria())->find();

            //COUNT
            $count = \PlantillatablajeriadetalleQuery::create()->orderByIdplantillatablajeriadetalle(\Criteria::DESC)->findOne();
            $count = $count->getIdplantillatablajeriadetalle() + 1;

            $view_model = new ViewModel();
            $view_model->setTemplate('/application/catalogo/tablajeria/editar');
            $view_model->setVariables(array(
                'form' => $form,
                'plantillatablajeria' => $plantillatablajeria,
                'plantillatablajeria_detalle' => $plantillatablajeria_detalle,
                'count' => $count,
                'messages' => $this->flashMessenger(),
            ));
            return $view_model;
        } else {
            return $this->redirect()->toUrl('/catalogo/tablajeria');
        }
    }

    public function eliminarAction() {
        $request = $this->getRequest();
        if ($request->isPost()) {
            $id = $this->params()->fromRoute('id');
            $plantilla = \PlantillatablajeriaQuery::create()->findPk($id);
            $plantilla->delete();
            $plantilladetalles = \PlantillatablajeriadetalleQuery::create()->filterByIdplantillatablajeria($id)->find();
            foreach ($plantilladetalles as $plantilladetalle) {
                $plantilladetalle->delete();
            }
            $this->flashMessenger()->addSuccessMessage('Plantilla de tablajeria eliminada satisfactoriamente!');
            return $this->redirect()->toUrl('/catalogo/tablajeria');
        }
    }

}
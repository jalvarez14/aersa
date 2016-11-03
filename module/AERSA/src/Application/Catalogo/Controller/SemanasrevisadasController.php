<?php

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class SemanasrevisadasController extends AbstractActionController
{
    
    public function verAction()
    {

        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $idsucursal = $this->params()->fromRoute('id');
        $sucursal = \SucursalQuery::create()->findPk($idsucursal);
        $collection = \SemanarevisadaQuery::create()->filterByIdsucursal($idsucursal)->find();
        
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/semanarevisada/ver');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
            'sucursal' => $sucursal,
        ));
        return $view_model;

    }
    
    public function indexAction()
    {

        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        $idsucursal = $this->params()->fromRoute('id');
      
        $collection = \SucursalQuery::create()->filterByIdempresa($session['idempresa'])->find();
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/semanarevisada/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,

        ));
        return $view_model;

    }
    
    public function nuevoAction()
    {
        
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $idsucursal = $this->params()->fromRoute('id');
         
        $request = $this->getRequest();

        if($request->isPost())
        {
           
            
            $post_data = $request->getPost();
            
            //CREAMOS NUESTRA ENTIDAD VACIA
            $entity = new \Semanarevisada();

            //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
            foreach ($post_data as $key => $value){
                $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
            }
            
            $entity->setIdsucursal($idsucursal);
            $entity->setIdempresa($session['idempresa']);
            $entity->setSemanarevisadaEstatus(1);
           
            $entity->save();

            $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');

            return $this->redirect()->toUrl('/catalogo/semanasrevisadas/ver/'.$idsucursal);
           

        }
        
        $form = new \Application\Catalogo\Form\SemanasrevisadasForm();
        
        $count = \SemanarevisadaQuery::create()->filterByIdsucursal($idsucursal)->count();
       
        if($count > 0){
             //OBTENEMOS EL ULTIMO REGISTRO
             $ultima_semana = \SemanarevisadaQuery::create()->filterByIdsucursal($idsucursal)->orderByIdsemanarevisada(\Criteria::DESC)->findOne();
             //OBTENEMOS EL NUMERO DE SEMANAS DEL AÑO DEL ULTIMO REGISTRO
             $week_array = \Shared\GeneralFunctions::getWeekArray($ultima_semana->getSemanarevisadaAnio());
            
             if(isset($week_array[$ultima_semana->getSemanarevisadaSemana() +1])){
                $form->get('semanarevisada_anio')->setValue($ultima_semana->getSemanarevisadaAnio());
                $form->get('semanarevisada_anio')->setAttribute('readonly', true);
                // $form->get('semanarevisada_semana')->setValueOptions($week_array);
                $key = $ultima_semana->getSemanarevisadaSemana() +1;
                $value = $week_array[$ultima_semana->getSemanarevisadaSemana() +1];
                $form->get('semanarevisada_semana')->setValueOptions(array($key=> $value));
                $form->get('semanarevisada_semana')->setValue($ultima_semana->getSemanarevisadaSemana() +1);
               
             }else{
                 $anio = $ultima_semana->getSemanarevisadaAnio() + 1;
                 $week_array = \Shared\GeneralFunctions::getWeekArray($anio);
                 $form->get('semanarevisada_anio')->setValue($anio);
                 $form->get('semanarevisada_anio')->setAttribute('readonly', true);
                 // $form->get('semanarevisada_semana')->setValueOptions($week_array);
                 $key = 1;
                 $value = $week_array[1];
                 $form->get('semanarevisada_semana')->setValueOptions(array($key=> $value));
                 $form->get('semanarevisada_semana')->setValue($ultima_semana->getSemanarevisadaSemana() +1);
                 
             }
            
        }
        
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'idsucursal' => $idsucursal,
        ));
        $view_model->setTemplate('/application/catalogo/semanarevisada/nuevo');
        return $view_model;
    }
    
    public function editarAction()
    {
        $request = $this->getRequest();
        
        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        
        //VERIFICAMOS SI EXISTE
        $exist = \TasaivaQuery::create()->exists();
        
        if($exist)
        {
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \TasaivaQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\IvaForm();
            $form->get('tasaiva_valor')->setAttribute('required', true);
            
            //SI NOS ENVIAN UNA PETICION POST
            if($request->isPost()){
                
                $post_data = $request->getPost();
                
                //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS

                $exist = \TasaivaQuery::create()->find($post_data['idtasaiva']);
                if($exist)
                {

                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }

                    //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
                    $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
                    
                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');

                    return $this->redirect()->toUrl('/catalogo/iva/editar/1');

                    
                }
                else
                {
                    $this->flashMessenger()->addErrorMessage('No se pudo modificar la entidad, quiza esto se deba a algún problema de la url');
                }
                
            }
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
        }
        else
            return $this->redirect()->toUrl('/catalogo/iva');
        

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
        ));
        $view_model->setTemplate('/application/catalogo/iva/editar');
        return $view_model;

    }
    
    
    public function eliminarAction()
    {
        
        $request = $this->getRequest();
       
        if($request->isPost())
        {
           
            $id = $this->params()->fromRoute('id');
            
            $entity = \SemanarevisadaQuery::create()->findPk($id);
            
            $entity->delete();
            
            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/catalogo/semanasrevisadas/ver/'.$entity->getIdsucursal());
            
        }
        
    }

}

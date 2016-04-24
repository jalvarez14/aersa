<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;



    
    
class CategoriaController extends AbstractActionController
{
    
    
    public function indexAction()
    {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A SU ROL
        
        //SI SE TRATA DE UN ADMIN DE AERSA
        if($session['idrol'] == 1){
            $collection = \CategoriaQuery::create()->find();
        }


        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/categoria/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;
    }
    
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        //Obtenemos los nombres de las categorias definidas como padre
        $dataForm = getPadres();
        
        //Instanciamos el form y le mandamos las categorias padre
        $form = new \Application\Catalogo\Form\CategoriasForm($dataForm);
        
        if($request->isPost())
        {
            
            $post_data = $request->getPost();
            
            //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
            $exist = \CategoriaQuery::create()->filterByCategoriaNombre(($post_data['categoria_nombre']))->exists();
            
            if(!$exist)
            {

                                
                //VERIFICAMOS QUE SEA VALIDO
                if( !($post_data['idcategoriapadre'] == 0 && $post_data['categoria_almacenable'] == 1) )
                {
                    //Le ponemos la información a la entidad
                    $entity = setCategoriaData($post_data);
                    
                    //Guardamos la entidad
                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Categoria guardada satisfactoriamente!');
                    
                    return $this->redirect()->toUrl('/catalogo/categoria');
                }
                else
                {
                    $this->flashMessenger()->addErrorMessage('No se le puede asignar almacenable a una categoria principal');
                    return $this->redirect()->toUrl('/catalogo/categoria/nuevo');
                }
                
            }
            else
            {
                $this->flashMessenger()->addErrorMessage('Ya se ingreso una categoria con este nombre anteriormente');
                return $this->redirect()->toUrl('/catalogo/categoria');
            }
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array
        (

            'form'      => $form,
            'padres'    => $dataForm,
            'messages'  => $this->flashMessenger(),
        ));

        $view_model->setTemplate('/application/catalogo/categoria/nuevo');
        return $view_model;
    }
    
    public function editarAction()
    {
        
        $request = $this->getRequest();
        
        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        
        //VERIFICAMOS SI EXISTE
        $exist = \CategoriaQuery::create()->filterByIdcategoria($id)->exists();
        
        if($exist)
        {
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \CategoriaQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\CategoriasForm(getPadres());
            
            //SI NOS ENVIAN UNA PETICION POST
            if($request->isPost())
            {
                
                $post_data = $request->getPost();
                
                
                //VERIFICAMOS QUE NO EXISTA UN NOMBRE DE CATEGORIA IGUAL, EN CASO QUE EL NOMBRE SEA DIFERENTE AL ORIGINAL
                $exist = \CategoriaQuery::create()->filterByCategoriaNombre($post_data['categoria_nombre'])->exists();
                
                if($entity->getCategoriaNombre() == $post_data['categoria_nombre'] || !($exist) )
                {
                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }

                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Categoria guardada satisfactoriamente!');
                    return $this->redirect()->toUrl('/catalogo/categoria');
                    
                }
                else
                {
                    $this->flashMessenger()->addErrorMessage('El nombre de la categoria ya existe, por favor utilice otro nombre');
                    return $this->redirect()->toUrl('/catalogo/categoria/editar/'.$id);
                }
                
            }
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            $collection = \CategoriaQuery::create()->filterByIdcategoriapadre($id)->find();
           
        }
        else
        {
            return $this->redirect()->toUrl('/catalogo/categoria/editar/'.$id);
        }
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'          => $form,
            'messages'      => $this->flashMessenger(),
            'collection'    => $collection,
        ));
        
        $view_model->setTemplate('/application/catalogo/categoria/editar');
        return $view_model;

    }
    
    
    public function eliminarAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            
            $entity = \CategoriaQuery::create()->findPk($id);
            $entity->delete();
            
            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/catalogo/categoria');
            
        }
        
    }
    
    public function nuevasubAction()
    {
        $request = $this->getRequest();
        
        $id = $this->params()->fromRoute('id');
        //Obtenemos los nombres de las categorias definidas como padre
        
        //Instanciamos el form y le mandamos las categorias padre
        $form = new \Application\Catalogo\Form\CategoriasForm($dataForm);
        
        if($request->isPost())
        {
            
            $post_data = $request->getPost();
            
            //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
            $exist = \CategoriaQuery::create()->filterByCategoriaNombre(($post_data['categoria_nombre']))->exists();
            
            if(!$exist)
            {      
        
                //Le ponemos la información a la entidad
                $entity = setCategoriaData($post_data,$id);

                //Guardamos la entidad
                $entity->save();

                $this->flashMessenger()->addSuccessMessage('Categoria guardada satisfactoriamente!');
                return $this->redirect()->toUrl('/catalogo/categoria/editar/'.$id);   
            }
            else
            {
                $this->flashMessenger()->addErrorMessage('Ya se ingreso una categoria con este nombre anteriormente');
                //return $this->redirect()->toUrl('/catalogo/categoria');
            }
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array
        (

            'form'      => $form,
            'padres'    => $dataForm,
            'messages'  => $this->flashMessenger(),
            'id'        => $id,
        ));

        $view_model->setTemplate('/application/catalogo/categoria/nuevasub');
        return $view_model;
    }
    
    public function editarsubAction()
    {
        
        $request = $this->getRequest();
        
        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        
        //VERIFICAMOS SI EXISTE
        $exist = \CategoriaQuery::create()->filterByIdcategoria($id)->exists();
        
        if($exist)
        {
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \CategoriaQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\CategoriasForm(getPadres());
            
            //SI NOS ENVIAN UNA PETICION POST
            if($request->isPost())
            {
                
                $post_data = $request->getPost();
                
                
                //VERIFICAMOS QUE NO EXISTA UN NOMBRE DE CATEGORIA IGUAL, EN CASO QUE EL NOMBRE SEA DIFERENTE AL ORIGINAL
                $exist = \CategoriaQuery::create()->filterByCategoriaNombre($post_data['categoria_nombre'])->exists();
                
                if($entity->getCategoriaNombre() == $post_data['categoria_nombre'] || !($exist) )
                {
                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value){
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }

                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Categoria guardada satisfactoriamente!');
                    return $this->redirect()->toUrl('/catalogo/categoria');
                    
                }
                else
                {
                    $this->flashMessenger()->addErrorMessage('El nombre de la categoria ya existe, por favor utilice otro nombre');
                    return $this->redirect()->toUrl('/catalogo/categoria/editar/'.$id);
                }
                
            }
            
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            $collection = \CategoriaQuery::create()->filterByIdcategoriapadre($id)->find();
           
        }
        else
        {
            return $this->redirect()->toUrl('/catalogo/categoria/editarsub/'.$id);
        }
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'          => $form,
            'messages'      => $this->flashMessenger(),
            'collection'    => $collection,
        ));
        
        $view_model->setTemplate('/application/catalogo/categoria/editarsub');
        return $view_model;

    }
    
    public function getsubcatAction()
    {
        $cat = $this->params()->fromRoute('idcategoria');
        $result = \CategoriaQuery::create()->filterByIdcategoriapadre($cat)->find()->toArray();
        return $this->getResponse()->setContent(json_encode($result));      
    }
}

function setCategoriaData ($data,$padre = null)
{
    $entity = new \Categoria();
    
    $entity->setCategoriaNombre($data['categoria_nombre']);
    $entity->setCategoriaAlmacenable($data['categoria_almacenable']);
    
    if($padre != null)
        $entity->setIdcategoriapadre($padre);
    
    return $entity;
}
function getPadres()
{
    $padres = \CategoriaQuery::create()->filterByIdcategoriapadre()->find();
        /*
        $nombres = array();
        foreach ($padres as $item) 
        {
            $id = $item->getIdCategoria();
            $nombres[$id] = $item->getCategoriaPadre();
        }
        $nombres = \CategoriaQuery::create()->filterByIdCategoria($nombres)->find();

        $dataForm = array();
        */
    foreach ($padres as $item ) 
        $dataForm[$item->getIdCategoria()] = $item->getCategoriaNombre();

    return $dataForm;
}

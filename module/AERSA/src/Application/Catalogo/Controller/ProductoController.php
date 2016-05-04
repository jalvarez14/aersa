<?php
namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class ProductoController extends AbstractActionController
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
        
        $productos = \ProductoQuery::create()->find();

        
        
                
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/producto/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'productos' => $productos,
        ));
        return $view_model;

    }
    
    public function nuevoAction()
    {
        $request = $this->getRequest();
        
        $categorias = array();
        $subcategorias = array();
        
        $cats   = \CategoriaQuery::create()->filterByIdcategoriapadre(null)->find();

        //Crear arreglo de datos para formulario en campo categorias
        foreach ($cats as $item)
            $categorias[$item->getIdCategoria()] = $item->getCategorianombre();
        

        $form = new \Application\Catalogo\Form\ProductosForm($categorias);
        
        if ($request->isPost()) 
        {
            $session = new \Shared\Session\AouthSession();
            $session = $session->getData();
            
            $post_data = $request->getPost();

            //VALIDACION PENDIENTE
            //$exist = \ProductoQuery::create()->filterByProductoNombre($post_data['producto_nombre'])->exists();

            //CREAMOS NUESTRA ENTIDAD VACIA
            $entity = new \Producto();

            foreach ($post_data as $key => $value) {
                if( $value != '')
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
            }
            $entity->setIdempresa($session['idempresa']);
            
            $entity->save();
            $this->flashMessenger()->addSuccessMessage('Producto registrado satisfactoriamente!');
            return $this->redirect()->toUrl('/catalogo/producto');
            
        }
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            
        ));
        $view_model->setTemplate('/application/catalogo/producto/nuevo');
        return $view_model;
        
    }
    
    public function editarAction() 
    {

        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');

        //VERIFICAMOS SI EXISTE
        $exist = \ProductoQuery::create()->filterByIdproducto($id)->exists();

        if ($exist) 
        {
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \ProductoQuery::create()->findPk($id);
            
            //Bandera para campo rendimiento
            $isBebida = false;
            if($entity->getIdcategoria() == "2")
                $isBebida= true;
            
            //Obtenemos las categorias y subcategorias
            $cats   = \CategoriaQuery::create()->filterByIdcategoriapadre(null)->find();
            $sub    = \CategoriaQuery::create()->filterByIdcategoriapadre(null, \Criteria::NOT_EQUAL)->find();
            
            //Obtenemos los códigos de barras
            $cbarras = \CodigobarrasQuery::create()->filterByIdproducto($id)->find();
            
            //Obtenemos las recetas
            $recetas = \RecetaQuery::create()->filterByIdproducto($id)->find();
            
            //Crear arreglo de datos para formulario en campo categorias
            foreach ($cats as $item)
                $categorias[$item->getIdCategoria()] = $item->getCategorianombre();

            //Crear arreglo de datos para formulario en campo subcategorias
            foreach ($sub as $item)
                $subcategorias[$item->getIdCategoria()] = $item->getCategorianombre();
                
            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\ProductosForm($categorias,$subcategorias);
                
            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) 
            {
                $post_data = $request->getPost();
                //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                foreach ($post_data as $key => $value)
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                
                $entity->save();

                $this->flashMessenger()->addSuccessMessage('Registro actualizado satisfactoriamente!');

                return $this->redirect()->toUrl('/catalogo/producto/editar/'.$id);
            }
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
        } 
        else 
            return $this->redirect()->toUrl('/catalogo/producto');

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            'cbarras'   => $cbarras,
            'recetas'   => $recetas,
            'producto'  => $entity,
            'isBebida'  => $isBebida,
        ));
        $view_model->setTemplate('/application/catalogo/producto/editar');
        return $view_model;
    }

    public function nuevocodigoAction()
    {
        $id = $this->params()->fromRoute('id');
        
        $prod = \ProductoQuery::create()->findPk($id);
        
        $request = $this->getRequest();
        
        $form = new \Application\Catalogo\Form\CodigoBarrasForm();
        
        if ($request->isPost()) 
        {
            $post_data = $request->getPost();

            //VALIDACION PENDIENTE
            $exists = \CodigobarrasQuery::create()->filterByCodigobarrasCodigo($post_data['codigobarras_codigo'])->exists();
            
            if(!$exists)
            {
                //CREAMOS NUESTRA ENTIDAD VACIA
                $entity = new \Codigobarras();
                
                foreach ($post_data as $key => $value) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }
                $entity->setIdproducto($id);
                $entity->save();
                
                $this->flashMessenger()->addSuccessMessage('Código registrado satisfactoriamente!');
                return $this->redirect()->toUrl('/catalogo/producto/editar/'.$id);
            }
            else
            {
                $this->flashMessenger()->addErrorMessage('Ya existe un código de barras idéntico');
                return $this->redirect()->toUrl('/catalogo/producto/nuevocodigo/'.$id);
            }

            
        }
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            'producto'  => $prod,
            
        ));
        $view_model->setTemplate('/application/catalogo/producto/nuevocodigo');
        return $view_model;
        
    }
    
    public function editarcodigoAction() 
    {

        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        $prod = $this->params()->fromRoute('prod');
        
        //VERIFICAMOS SI EXISTE
        $exist = \ProductoQuery::create()->filterByIdproducto($prod)->exists();
        
        if ($exist) 
        {
            $producto = \ProductoQuery::create()->findPk($prod);
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \CodigobarrasQuery::create()->findPk($id);
            
            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\CodigoBarrasForm();
            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) 
            {
                $post_data = $request->getPost();
                //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                foreach ($post_data as $key => $value)
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                
                $entity->save();

                $this->flashMessenger()->addSuccessMessage('Codigo modificado correctamente!');
                return $this->redirect()->toUrl('/catalogo/producto/editar/'.$prod);
            }
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
        } 
        else 
            return $this->redirect()->toUrl('/catalogo/producto');
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            'cbarras'   => $entity,
            'producto'  => $producto,
        ));
        $view_model->setTemplate('/application/catalogo/producto/editarcodigo');
        return $view_model;
    }
    
    public function eliminarcodigoAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $prod = $this->params()->fromRoute('prod');
            
            $entity = \CodigobarrasQuery::create()->findPk($id);
            $entity->delete();
            
            $this->flashMessenger()->addSuccessMessage('Código eliminado correctamente!');

            return $this->redirect()->toUrl('/catalogo/producto/editar/'.$prod);
            
        }
        
    }
    
    public function nuevasubrecetaAction()
    {
        $id = $this->params()->fromRoute('id');
        
        $prod = \ProductoQuery::create()->findPk($id);
        
        $request = $this->getRequest();
        
        $collection  = \ProductoQuery::create()->filterByProductoTipo('simple')->find();
        $productos = array();
        foreach ($collection as $item)
                $productos[$item->getIdproducto()] = $item->getProductoNombre();
        
        $form = new \Application\Catalogo\Form\SubrecetaForm($productos);
        
        
        if ($request->isPost()) 
        {
            $post_data = $request->getPost();
            
            $exists = \RecetaQuery::create()->filterByIdproducto($post_data['idproductoreceta'])->exists();
            
            
            //CREAMOS NUESTRA ENTIDAD VACIA
            $entity = new \Receta();

            foreach ($post_data as $key => $value) {
                
                $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
            }
            $entity->setIdproducto($id);
            $entity->save();

            $this->flashMessenger()->addSuccessMessage('Sub receta registrada correctamente!');
            return $this->redirect()->toUrl('/catalogo/producto/editar/'.$id);




            
        }
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            'producto'  => $prod,
            
        ));
        $view_model->setTemplate('/application/catalogo/producto/nuevasubreceta');
        return $view_model;
        
    }
    
    public function editarsubrecetaAction() 
    {

        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        $prod = $this->params()->fromRoute('prod');
        
        //VERIFICAMOS SI EXISTE
        $exist = \ProductoQuery::create()->filterByIdproducto($prod)->exists();
        
        if ($exist) 
        {
            $producto = \ProductoQuery::create()->findPk($prod);
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \RecetaQuery::create()->filterByIdproductoreceta($id)->findOne();
            
            
            $form = new \Application\Catalogo\Form\SubrecetaForm();
            
            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) 
            {
                $post_data = $request->getPost();
                //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                $entity->setRecetaCantidad($post_data[receta_cantidad]);
                $entity->save();

                $this->flashMessenger()->addSuccessMessage('Sub receta modificada correctamente!');
                return $this->redirect()->toUrl('/catalogo/producto/editar/'.$prod);
            }
            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
        } 
        else 
            return $this->redirect()->toUrl('/catalogo/producto');
        
        $dataProd = \ProductoQuery::create()->filterByIdproducto($id)->findOne();
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form'      => $form,
            'messages'  => $this->flashMessenger(),
            'receta'    => $entity,
            'producto'  => $producto,
            'data'      => $dataProd,
        ));
        $view_model->setTemplate('/application/catalogo/producto/editarsubreceta');
        return $view_model;
    }
    
    public function eliminarsubrecetaAction()
    {
        $request = $this->getRequest();
        if($request->isPost())
        {
            $id = $this->params()->fromRoute('id');
            $prod = $this->params()->fromRoute('prod');
            
            $entity = \RecetaQuery::create()->findPk($id);
            $entity->delete();
            
            $this->flashMessenger()->addSuccessMessage('Sub receta eleminada correctamente!');

            return $this->redirect()->toUrl('/catalogo/producto/editar/'.$prod);
            
        }
        
    }
    

    
}

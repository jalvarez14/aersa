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

class UsuarioController extends AbstractActionController {

    public function indexAction() {
        //CARGAMOS LA SESSION PARA HACER VALIDACIONES
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();

        //OBTENEMOS LA COLECCION DE REGISTROS DE ACUERDO A SU ROL
        //SI SE TRATA DE UN ADMIN DE AERSA
        if ($session['idrol'] == 1) {
            $collection = \UsuarioQuery::create()->filterByIdrol(array(1, 2))->filterByIdusuario($session['idusuario'], \Criteria::NOT_EQUAL)->orderByIdusuario(\Criteria::DESC)->find();
        }



        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setTemplate('/application/catalogo/usuario/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'collection' => $collection,
        ));
        return $view_model;
    }

    public function nuevoAction() 
    {
        $request = $this->getRequest();

        //INTANCIAMOS NUESTRO FORMULARIO
        $form = new \Application\Catalogo\Form\UsuarioForm();
        $empresas = \EmpresaQuery::create()->find();
        
        if ($request->isPost()) 
        {
            
            $post_data = $request->getPost();

            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $post_data['usuario_estatus'] = 3;
            $form->setData($post_data);

            //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
            $exist = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->exists();

            if (!$exist) 
            {
                

                //CREAMOS NUESTRA ENTIDAD VACIA
                $entity = new \Usuario();

                //INTANCIAMOS NUESTRO FILTRO
                $filter = new \Application\Catalogo\Filter\UsuarioFilter();

                //LE PONEMOS EL FILTRO A NUESTRO FORMULARIO
                $form->setInputFilter($filter->getInputFilter());
                
                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value) {
                        if($key != 'idempresas')
                            $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                    }
                    //SETEAMOS EL STATUS Y EL PASSWORD
                    $entity->setUsuarioPassword(md5($post_data['usuario_password']));
                    $entity->save();
                    
                    
                    foreach ($post_data['idempresas'] as $item)
                    {
                        $relacion = setRelacion($item, $entity->getIdusuario ());
                        $relacion->save();
                    }
                    
                    
                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');


                    return $this->redirect()->toUrl('/catalogo/usuario');
                
            } else {
                $this->flashMessenger()->addErrorMessage('El nombre de usuario ya se encuentra registrado, por favor utilice uno distinto');
            }
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'empresas' => $empresas,
        )); 
        $view_model->setTemplate('/application/catalogo/usuario/nuevo');
        return $view_model;
    }

    public function editarAction() {

        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');

        //VERIFICAMOS SI EXISTE
        $exist = \UsuarioQuery::create()->filterByIdusuario($id)->exists();
        
        if ($exist) {
            
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \UsuarioQuery::create()->findPk($id);
            $empresas = \EmpresaQuery::create()->find();
            
            //OBTENEMOS LA RELACION CON USUARIO EMPRESA
            $usuario_empresa_array = array();
            $usuario_empresas = \UsuarioempresaQuery::create()->filterByIdusuario($entity->getIdusuario())->find();
            foreach ($usuario_empresas as $empresa){
                $usuario_empresa_array[] = $empresa->getIdempresa();
            }
         
            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\UsuarioForm();
            $form->get('usuario_estatus')->setAttribute('required', true);

            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) {

                $post_data = $request->getPost();
                
               
 
                $filter = new \Application\Catalogo\Filter\UsuarioFilter();

                //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
                $exist = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->filterByUsuarioUsername($entity->getUsuarioUsername(), \Criteria::NOT_EQUAL)->exists();

                if (!$exist) {

                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value){
                        if(\UsuarioPeer::getTableMap()->hasColumn($key)){
                            $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                        }
                    }

                    //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
                    $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

                    //VALIDAMOS SI ES UN FORMULARIO VALIDO
                    $form->setInputFilter($filter->getInputFilter());

                    $entity->save();
                    
                    $usuario_empresas = \UsuarioempresaQuery::create()->filterByIdusuario($entity->getIdusuario())->find()->delete();
                    //Las empresas  a las que va teener acceso en caso de ser auditor
                    if($entity->getIdrol() == 2){
                        
                        foreach ($post_data['idempresas'] as $value){
                            
                            $usuario_empresa = new \Usuarioempresa();
                            $usuario_empresa->setIdempresa($value)
                                            ->setIdusuario($entity->getIdusuario())
                                            ->save();
                            
                        }
                        
                    }
                    
                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');

                    return $this->redirect()->toUrl('/catalogo/usuario');
                } else {
                    $this->flashMessenger()->addErrorMessage('El nombre de usuario ya se encuentra registrado, por favor utilice uno distinto');
                }
            }

            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

            //CAMBIAMOS ALGUNOS VALORES
            $form->get('usuario_password')->setLabel('Nueva contraseña');
            $form->get('usuario_password')->setValue('');
        } else {
            return $this->redirect()->toUrl('/catalogo/usuario');
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'empresas' => $empresas,
            'idrol' => $entity->getIdrol(),
            'usuario_empresa' => json_encode($usuario_empresa_array),
                
        ));
        $view_model->setTemplate('/application/catalogo/usuario/editar');
        return $view_model;
    }

    public function changepasswordAction() {

        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');

        //VERIFICAMOS SI EXISTE
        $exist = \UsuarioQuery::create()->filterByIdusuario($id)->exists();

        if ($exist) {

            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \UsuarioQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\UsuarioForm();

            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) {

                $post_data = $request->getPost();
                $filter = new \Application\Catalogo\Filter\UsuarioFilter();

                //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                foreach ($post_data as $key => $value) {
                    $entity->setByName($key, md5($value), \BasePeer::TYPE_FIELDNAME);
                }

                //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
                $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

                //VALIDAMOS SI ES UN FORMULARIO VALIDO
                $form->setInputFilter($filter->getInputFilter());

                if ($form->isValid()) {

                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');

                    return $this->redirect()->toUrl('/catalogo/usuario');
                }
            }
        } else {
            return $this->redirect()->toUrl('/catalogo/usuario');
        }
    }

    public function eliminarAction() {

        $request = $this->getRequest();

        if ($request->isPost()) {

            $id = $this->params()->fromRoute('id');

            $entity = \UsuarioQuery::create()->findPk($id);
            $entity->delete();

            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/catalogo/usuario');
        }
    }

    public function administradorAction() {
        $request = $this->getRequest();

        //INTANCIAMOS NUESTRO FORMULARIO
        $form = new \Application\Catalogo\Form\UsuarioForm();

        $idEmp = $this->params()->fromRoute('id');
        $emp = \EmpresaQuery::create()->findPk($idEmp);

        if ($request->isPost()) {

            $post_data = $request->getPost();

            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $post_data['usuario_estatus'] = 1;
            $form->setData($post_data);

            //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
            $exist = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->exists();

            if (!$exist) {

                //CREAMOS NUESTRA ENTIDAD VACIA
                $entity = new \Usuario();

                //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                foreach ($post_data as $key => $value) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }

                //SETEAMOS EL STATUS Y EL PASSWORD
                $entity->setUsuarioPassword(md5($post_data['usuario_passoword']));
                $entity->setIdrol(3);
                $entity->save();

                //Proceso para establecer la relación con la empresa

                $relacion = setRelacion($idEmp, $entity->getIdusuario());
                $relacion->save();


                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/catalogo/empresa/editar/' . $idEmp);
            } else {
                $this->flashMessenger()->addErrorMessage('El nombre de usuario ya se encuentra registrado, por favor utilice uno distinto');
            }
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'id' => $idEmp,
            'empresa' => $emp,
        ));
        $view_model->setTemplate('/application/catalogo/usuario/administrador');
        return $view_model;
    }

    public function editaradministradorAction() {
        $request = $this->getRequest();
        
        
        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        $emp = $this->params()->fromRoute('emp');
        
        $id = $this->params()->fromRoute('id');
        $idEmp = $this->params()->fromRoute('emp');
        $idSuc = $this->params()->fromRoute('suc');
        
        //Buscamos el nombre de la empresa que se está editando
        $exists = \EmpresaQuery::create()->filterByIdempresa($emp)->exists();
        if ($exists)
            $emp_nombre = \EmpresaQuery::create()->findPk($emp);
        else
            $emp_nombre = "";

        //VERIFICAMOS SI EXISTE
        $exist = \UsuarioQuery::create()->filterByIdusuario($id)->exists();

        if ($exist) 
        {

            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \UsuarioQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\UsuarioForm();
            $form->get('usuario_estatus')->setAttribute('required', true);

            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) 
            {

                $post_data = $request->getPost();

                $filter = new \Application\Catalogo\Filter\UsuarioFilter();

                //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
                $exist = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->filterByUsuarioUsername($entity->getUsuarioUsername(), \Criteria::NOT_EQUAL)->exists();

                if (!$exist) {

                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value)
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);

                    //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
                    $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

                    //VALIDAMOS SI ES UN FORMULARIO VALIDO
                    $form->setInputFilter($filter->getInputFilter());

                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');

                    return $this->redirect()->toUrl('/catalogo/empresa/editar/' . $emp);
                } else {
                    $this->flashMessenger()->addErrorMessage('El nombre de usuario ya se encuentra registrado, por favor utilice uno distinto');
                    return $this->redirect()->toUrl('/catalogo/usuario/editaradministrador/' . $id . '/' . $emp);
                }
            }

            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $entity->setUsuarioPassword('');
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
        } else
            return $this->redirect()->toUrl('/catalogo/empresa/editar/' . $emp);

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'empresa' => $emp_nombre,
        ));
        $view_model->setTemplate('/application/catalogo/usuario/editaradministrador');
        return $view_model;
    }

    public function eliminaradministradorAction() {
        $request = $this->getRequest();

        if ($request->isPost()) {

            $id = $this->params()->fromRoute('id');
            $emp = $this->params()->fromRoute('emp');
            $entity = \UsuarioQuery::create()->findPk($id);
            $entity->delete();

            $this->flashMessenger()->addSuccessMessage('Registro eliminado satisfactoriamente!');

            return $this->redirect()->toUrl('/catalogo/empresa/editar/' . $emp);
        }
    }
    
    public function changepasswordadministradorAction() 
    {

        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id     = $this->params()->fromRoute('id');
        $idEmp  = $this->params()->fromRoute('emp');
        
        
        //VERIFICAMOS SI EXISTE
        $exist = \UsuarioQuery::create()->filterByIdusuario($id)->exists();

        if ($exist) 
        {

            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \UsuarioQuery::create()->findPk($id);

            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) 
            {
                $post_data = $request->getPost();
                $entity->setUsuarioPassword(md5($post_data['usuario_password']));
                $entity->save();
                
                $this->flashMessenger()->addSuccessMessage('Contraseña modificada correctamente!');
                return $this->redirect()->toUrl('/catalogo/empresa/editar/'.$idEmp);
                
            }
        } else 
            return $this->redirect()->toUrl('/catalogo/empresa');
    }
    
    public function auditorAction() {
        $request = $this->getRequest();
        $idEmp = $this->params()->fromRoute('emp');
        $emp = \EmpresaQuery::create()->findPk($idEmp);
        $idSuc = $this->params()->fromRoute('suc');

        //INTANCIAMOS NUESTRO FORMULARIO
        $form = new \Application\Catalogo\Form\UsuarioForm();

        if ($request->isPost()) {

            $post_data = $request->getPost();

            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $post_data['usuario_estatus'] = 1;
            $form->setData($post_data);

            //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
            $exist = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->exists();

            if (!$exist) {

                //CREAMOS NUESTRA ENTIDAD VACIA
                $entity = new \Usuario();

                //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                foreach ($post_data as $key => $value) {
                    $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);
                }

                //SETEAMOS EL STATUS Y EL PASSWORD
                $entity->setUsuarioPassword(md5($post_data['usuario_passoword']));
                $entity->save();

                //Proceso para establecer la relación con la empresa

                $relacion = setRelacionUS($idSuc, $entity->getIdusuario());
                $relacion->save();


                $this->flashMessenger()->addSuccessMessage('Registro guardado satisfactoriamente!');
                return $this->redirect()->toUrl('/catalogo/empresa/sucursal/editar/' . $idSuc . '/' . $idEmp);
            } else {
                $this->flashMessenger()->addErrorMessage('El nombre de usuario ya se encuentra registrado, por favor utilice uno distinto');
                return $this->redirect()->toUrl('/catalogo/usuario/auditor/' . $idSuc . '/' . $idEmp);
            }
        }

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages' => $this->flashMessenger(),
            'idSuc' => $idSuc,
            'idEmp' => $idEmp,
            'empresa' => $emp
        ));
        $view_model->setTemplate('/application/catalogo/usuario/auditor');
        return $view_model;
    }

    public function editarauditorAction() 
    {
        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id = $this->params()->fromRoute('id');
        $idEmp = $this->params()->fromRoute('emp');
        $idSuc = $this->params()->fromRoute('suc');



        //VERIFICAMOS SI EXISTE
        $existU = \UsuarioQuery::create()->filterByIdusuario($id)->exists();
        $existS = \SucursalQuery::create()->filterByIdsucursal($idSuc)->exists();
        $existE = \EmpresaQuery::create()->filterByIdempresa($idEmp)->exists();

        if ($existU && $existE && $existS) 
        {
            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \UsuarioQuery::create()->findPk($id);
            $emp = \EmpresaQuery::create()->findPk($idEmp);
            $suc = \SucursalQuery::create()->findPk($idSuc);

            

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\UsuarioForm();

            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) 
            {

                $post_data = $request->getPost();

                $filter = new \Application\Catalogo\Filter\UsuarioFilter();

                //VALIDAMOS QUE EL USUARIO NO EXISTA EN LA BASE DE DATOS
                $exist = \UsuarioQuery::create()->filterByUsuarioUsername($post_data['usuario_username'])->filterByUsuarioUsername($entity->getUsuarioUsername(), \Criteria::NOT_EQUAL)->exists();

                if (!$exist) 
                {

                    //LE PONEMOS LOS DATOS A NUESTRA ENTIDAD
                    foreach ($post_data as $key => $value)
                        $entity->setByName($key, $value, \BasePeer::TYPE_FIELDNAME);

                    //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
                    $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));

                    //VALIDAMOS SI ES UN FORMULARIO VALIDO
                    $form->setInputFilter($filter->getInputFilter());

                    $entity->save();

                    $this->flashMessenger()->addSuccessMessage('Personal editado satisfactoriamente!');
                    return $this->redirect()->toUrl('/catalogo/empresa/sucursal/editar/'.$idSuc.'/'.$idEmp);
                    
                } 
                else 
                {
                    $this->flashMessenger()->addErrorMessage('El nombre de usuario ya se encuentra registrado, por favor utilice uno distinto');
                    return $this->redirect()->toUrl('/catalogo/usuario/editaradministrador/' . $id . '/' . $emp);
                }
            }

            //LE PONEMOS LOS DATOS A NUESTRO FORMULARIO
            $form->setData($entity->toArray(\BasePeer::TYPE_FIELDNAME));
            
            $form->get('usuario_password')->setLabel('Nueva contraseña');
            $form->get('usuario_password')->setValue('');
            
        } else
            return $this->redirect()->toUrl('/catalogo/empresa/sucursal/editar/' . $idSuc . '/' . $idEmp);

        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'form' => $form,
            'messages'  => $this->flashMessenger(),
            'empresa'   => $emp,
            'sucursal'  => $suc,
            'user'      => $entity,
        ));
        $view_model->setTemplate('/application/catalogo/usuario/editarauditor');
        return $view_model;
    }
    
    public function changepasswordauditorAction() 
    {

        $request = $this->getRequest();

        //CACHAMOS EL ID QUE RECIBIMOS POR LA RUTA
        $id     = $this->params()->fromRoute('id');
        $idEmp  = $this->params()->fromRoute('emp');
        $idSuc  = $this->params()->fromRoute('suc');
        
        
        //VERIFICAMOS SI EXISTE
        $exist = \UsuarioQuery::create()->filterByIdusuario($id)->exists();

        if ($exist) 
        {

            //INTANCIAMOS NUESTRA ENTIDAD
            $entity = \UsuarioQuery::create()->findPk($id);

            //INTANCIAMOS NUESTRO FORMULARIO
            $form = new \Application\Catalogo\Form\UsuarioForm();

            //SI NOS ENVIAN UNA PETICION POST
            if ($request->isPost()) 
            {
                $post_data = $request->getPost();
                $entity->setUsuarioPassword(md5($post_data['usuario_password']));
                $entity->save();
                
                $this->flashMessenger()->addSuccessMessage('Contraseña modificada correctamente!');
                return $this->redirect()->toUrl('/catalogo/usuario/editarauditor/'.$id.'/'.$idSuc.'/'.$idEmp);
                
            }
        } else 
            return $this->redirect()->toUrl('/catalogo/empresa');
    }

    public function checkuserAction()
    {
        $user = $this->params()->fromRoute('username');
        $result = \UsuarioQuery::create()->filterByUsuarioUsername($user)->find()->toArray();
        return $this->getResponse()->setContent(json_encode($result));      
    }
    
            }

function setRelacion($empresa, $usuario) {
    $entity = new \Usuarioempresa();
    $entity->setIdempresa($empresa);
    $entity->setIdusuario($usuario);

    return $entity;
}

function setRelacionUS($sucursal, $usuario) {
    $entity = new \Usuariosucursal();
    $entity->setIdsucursal($sucursal);
    $entity->setIdusuario($usuario);

    return $entity;
}

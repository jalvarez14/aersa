<?php
namespace Application\Catalogo\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class AltaproductosController extends AbstractActionController
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
        $view_model->setTemplate('/application/catalogo/altaproductos/index');
        $view_model->setVariables(array(
            'messages' => $this->flashMessenger(),
            'productos' => $productos,
        ));
        return $view_model;

    }   

    
}

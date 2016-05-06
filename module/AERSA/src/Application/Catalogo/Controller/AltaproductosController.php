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


        $emp = \EmpresaQuery::create()->findPk($session['idempresa']);
        
        $productos = \ProductoQuery::create()->find();
        $request = $this->getRequest();
        
        if($request->isPost())
        {
            $post_data = $request->getPost();
            
            $status = $post_data['status'];
            
            foreach ($post_data['id'] as $checked)
            {   
                $prod = \ProductoQuery::create()->findPk($checked);
                $prod->setProductoBaja($status);
                $prod->save();
            }
            $this->flashMessenger()->addSuccessMessage('Productos guardados satisfactoriamente!');
            return $this->redirect()->toUrl('/catalogo/altaproductos');
        }
        
                
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

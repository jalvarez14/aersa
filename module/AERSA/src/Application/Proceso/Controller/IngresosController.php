<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Proceso\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Console\Request as ConsoleRequest;

class IngresosController extends AbstractActionController {
    
    public function indexAction() {
    
    }
    
    public function nuevoAction(){
        
        $session = new \Shared\Session\AouthSession();
        $session = $session->getData();
        
        $sucursal = \SucursalQuery::create()->findPk($session['idsucursal']);
        $anio_activo = $sucursal->getSucursalAnioactivo();
        $mes_activo = $sucursal->getSucursalMesactivo();
        
        $rubros = \RubroingresoQuery::create()->find();
        $concepto_ingresos = \ConceptoingresoQuery::create()->find();
        
        //Formulario
        $form = new \Application\Proceso\Form\IngresosForm();
        
        //INTANCIAMOS NUESTRA VISTA
        $view_model = new ViewModel();
        $view_model->setVariables(array(
            'rubros' => $rubros,
            'concepto_ingresos' => $concepto_ingresos,
            'form' => $form,
            'mes_activo' => $mes_activo,
            'anio_activo' => $anio_activo,
        ));
        $view_model->setTemplate('/application/proceso/ingresos/nuevo');
        return $view_model;
        
    }

}

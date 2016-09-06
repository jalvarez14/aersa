<?php

namespace Application\Administracion\Form\Reportes;

use Zend\Form\Form;

class CierresinventariosForm extends Form {
    
    public function __construct() {
        
        parent::__construct('cardexForm');
        
        $this->add(array(
            'name' => 'fecha_inicio',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Fecha inicio *'
            )
        ));
        
        $this->add(array(
            'name' => 'fecha_fin',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Fecha fin *'
            )
        ));
    }
   
}

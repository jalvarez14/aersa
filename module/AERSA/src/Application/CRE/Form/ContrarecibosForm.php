<?php

namespace Application\CRE\Form;

use Zend\Form\Form;

class ContrarecibosForm extends Form {
    
    public function __construct($sucursales_array = array()) {
        
        parent::__construct('ContrarecibosForm');

        $this->add(array(
            'name' => 'idsucursal',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'value_options' => $sucursales_array,
            ),
        ));

    }
   
}

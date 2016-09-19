<?php

namespace Application\Administracion\Form\Reportes;

use Zend\Form\Form;

class EstadisticosanualesForm extends Form {
    
    public function __construct($ano_array = array()) {
        
        parent::__construct('estadisticosanualesForm');
        
        $this->add(array(
            'name' => 'anio',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Año *',
                'empty_option' => 'Seleccione un año',
                'value_options' => $ano_array,
            ),
        ));
    }
}
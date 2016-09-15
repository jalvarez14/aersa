<?php

namespace Application\Administracion\Form\Reportes;

use Zend\Form\Form;

class EstadisticosmensualesForm extends Form {
    
    public function __construct() {
        
        parent::__construct('estadisticosmensualesForm');
        
        $this->add(array(
            'name' => 'fecha_inicio',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'pattern' => '\d{1,2}/\d{1,2}/\d{4}',
                'label' => 'Fecha inicio *'
            )
        ));
        
        $this->add(array(
            'name' => 'fecha_fin',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'pattern' => '\d{1,2}/\d{1,2}/\d{4}',
                'label' => 'Fecha fin *'
            )
        ));
    }
   
}

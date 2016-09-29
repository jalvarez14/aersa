<?php

namespace Application\Reportes\Form;

use Zend\Form\Form;

class CardexForm extends Form {
    
    public function __construct() {
        
        parent::__construct('cardexForm');
        
        $this->add(array(
            'name' => 'responsable',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'disabled' => true,
            ),
            'options' => array(
                'label' => 'Responsable',
            ),
        ));
        
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

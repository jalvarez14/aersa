<?php

namespace Application\Reportes\Form;

use Zend\Form\Form;

class EntradasporcomprasForm extends Form {

    public function __construct() {

        parent::__construct('entradasporcomprasForm');
        
        $this->add(array(
            'name' => 'fecha_inicial',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Desde *'
            )
        ));
        
        $this->add(array(
            'name' => 'fecha_final',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Al *'
            )
        ));
       
    }

}

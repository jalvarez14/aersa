<?php

namespace Application\Reportes\Form;

use Zend\Form\Form;

class InformeacumuladosForm extends Form {

    public function __construct($anio_array = array()) {

        parent::__construct('informeacumuladosForm');

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

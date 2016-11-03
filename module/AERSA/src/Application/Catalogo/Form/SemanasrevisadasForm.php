<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class SemanasrevisadasForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('SemanasrevisadasForm');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'semanarevisada_anio',
            'type' => 'Text',
            'options' => array(
                'label' => 'Año *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'semanarevisada_semana',
            'type' => 'Select',
            'options' => array(
                'label' => 'Semana *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
    }
}

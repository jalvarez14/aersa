<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class CodigoBarrasForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('codigobarras_form');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idcodigobarras',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'codigobarras_codigo',
            'type' => 'Text',
            'options' => array(
                'label' => 'Codigo *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'codigobarras_cantidad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cantidad *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));

        
    }
}

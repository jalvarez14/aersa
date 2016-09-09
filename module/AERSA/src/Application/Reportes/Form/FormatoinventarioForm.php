<?php

namespace Application\Reportes\Form;

use Zend\Form\Form;

class FormatoinventarioForm extends Form {

    public function __construct($almacen = array()) {

        parent::__construct('formatoinventarioForm');

        $this->add(array(
            'name' => 'almacen',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Almacen *',
                
                'value_options' => $almacen,
            ),
        ));

        $this->add(array(
            'name' => 'formato',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Formato *',
                
                'value_options' => array(
                    'PDF' => 'PDF',
                    'excel' => 'Excel',
                ),
            ),
        ));
        
        $this->add(array(
            'name' => 'movimientos_recientes',
            'type' => 'Select',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Movimientos recientes *',
                
                'value_options' => array(
                    'Si' => 'Si',
                    'No' => 'No',
                ),
            ),
        ));
        
        $this->add(array(
            'name' => 'recientes_dias',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Dias *',
            ),
        ));
    }

}

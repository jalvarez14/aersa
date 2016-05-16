<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class AlmacenForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('almacen_form');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idalmacen',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'almacen_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'almacen_encargado',
            'type' => 'Text',
            'options' => array(
                'label' => 'Encargado',
            ),
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
        ));

        
        $this->add(array(
            'name' => 'almacen_estatus',
            'type' => 'Select',
            'options' => array(
                'label' => 'Estatus *',
                'value_options' => array(
                    1 => 'Activo',
                    0 => 'Inactivo'
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));

        
    }
}

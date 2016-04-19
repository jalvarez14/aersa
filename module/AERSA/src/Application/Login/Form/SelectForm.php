<?php

namespace Application\Login\Form;

use Zend\Form\Form;

class SelectForm extends Form
{
    public function __construct($idrol,$empresas=array())
    {
        // we want to ignore the name passed
        parent::__construct('select_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'area_trabajo',
            'type' => 'Select',
            'options' => array(
                'empty_option' => 'Área de trabajo',
                'value_options' => array(
                    1 => 'Administración AERSA',
                    2 => 'Empresas'
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control placeholder-no-fix',
            ),
        ));
        
        $this->add(array(
            'name' => 'idempresa',
            'type' => 'Select',
            'options' => array(
                'empty_option' => 'Empresa',
                'value_options' => $empresas,
            ),
            'attributes' => array(
                'required' => false,
                'class' => 'form-control placeholder-no-fix',
            ),
        ));
        
        $this->add(array(
            'name' => 'idsucursal',
            'type' => 'Select',
            'options' => array(
                'empty_option' => 'Sucursal',
                'value_options' => array(),
            ),
            'attributes' => array(
                'required' => false,
                'disabled' => true,
                'class' => 'form-control placeholder-no-fix',
            ),
        ));

    }
}

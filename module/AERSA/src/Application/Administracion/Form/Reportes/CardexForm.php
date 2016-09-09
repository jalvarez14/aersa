<?php

namespace Application\Administracion\Form\Reportes;

use Zend\Form\Form;

class CardexForm extends Form {
    
    public function __construct($fecha,$almacen_array = array(),$auditor_array = array()) {
        
        parent::__construct('cardexForm');
        
        $this->add(array(
            'name' => 'almacen',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Alamacen *',
                'empty_option' => 'Seleccione un almacen',
                'value_options' => $almacen_array,
            ),
        ));
        
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
            'name' => 'fecha',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'disabled' => true,
                'value' => $fecha,
            ),
            'options' => array(
                'label' => 'Fecha',
            ),
        ));
        
        $this->add(array(
            'name' => 'auditor',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Auditor *',
                'empty_option' => 'Seleccione un auditor',
                'value_options' => $auditor_array,
            ),
        ));
        
        $this->add(array(
            'name' => 'revisada',
            'type' => 'Select',
            'options' => array(
                'label' => 'Revisión *',
                
                'value_options' => array(
                    1 => 'Revisada',
                    0 => 'No revisada',
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        )); 
    }
   
}

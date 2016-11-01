<?php

namespace Application\Auditoria\Form;

use Zend\Form\Form;

class CierresinventariosForm extends Form {
    
    public function __construct($almacen_array = array(),$auditor_array = array()) {
        
        parent::__construct('cierresinventariosForm');
        
        $this->add(array(
            'name' => 'idalmacen',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                    'label' => 'Alamacén *',
                'empty_option' => 'Seleccione un almacén',
                'value_options' => $almacen_array,
            ),
        ));
        
        $this->add(array(
            'name' => 'inventariomes_fecha',
            'type' => 'Date',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'pattern' => '\d{1,2}/\d{1,2}/\d{4}',
                'label' => 'Fecha *'
            )
        ));
        
        $this->add(array(
            'name' => 'idauditor',
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
            'name' => 'inventariomes_revisada',
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

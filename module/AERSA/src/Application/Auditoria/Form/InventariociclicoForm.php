<?php

namespace Application\Auditoria\Form;

use Zend\Form\Form;

class InventariociclicoForm extends Form {
    
    public function __construct($fecha,$almacen_array = array(),$auditor_array = array()) {
        
        parent::__construct('cierresinventariosForm');
        
        $this->add(array(
            'name' => 'idalmacen',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                    'label' => 'Almacén *',
                'empty_option' => 'Seleccione un almacén',
                'value_options' => $almacen_array,
            ),
        ));
        
        $this->add(array(
           'name'  => 'inventariomes_fecha',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
                'value' => $fecha,
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
        
    }
   
}

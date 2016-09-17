<?php

namespace Application\Administracion\Form\Reportes;

use Zend\Form\Form;

class MonitoreotablajeriaForm extends Form {
    
    public function __construct($ano_array = array()) {
        
        parent::__construct('monitoreotablajeriaForm');
        
        $this->add(array(
            'name' => 'mes',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Mes *',
                'empty_option' => 'Seleccione un mes',
                'value_options' => array(
                    '01' => 'Enero',
                    '02' => 'Febrero',
                    '03' => 'Marzo',
                    '04' => 'Abril',
                    '05' => 'Mayo',
                    '06' => 'Junio',
                    '07' => 'Julio',
                    '08' => 'Agosto',
                    '09' => 'Septiembre',
                    '10' => 'Octubre',
                    '11' => 'Noviembre',
                    '12' => 'Diciembre',
                ),
            ),
        ));
        
        $this->add(array(
            'name' => 'anio',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Año *',
                'empty_option' => 'Seleccione un año',
                'value_options' => $ano_array,
            ),
        ));
    }
}
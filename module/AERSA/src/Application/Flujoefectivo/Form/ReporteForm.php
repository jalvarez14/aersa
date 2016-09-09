<?php

namespace Application\Flujoefectivo\Form;

use Zend\Form\Form;

class ReporteForm extends Form {

    public function __construct($ano_array = array()) {

        parent::__construct('reporteForm');

        $this->add(array(
            'name' => 'ano',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Año *',
                
                'value_options' => $ano_array,
            ),
        ));

        $this->add(array(
            'name' => 'mes',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Mes *',
                
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
    }

}

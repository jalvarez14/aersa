<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class TrabajadorpromedioForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('trabajadorespromedio_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idtrabajadorpromedio',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'trabajadorespromedio_anio',
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
            'name' => 'trabajadorespromedio_mes',
            'type' => 'Select',
            'options' => array(
                'label' => 'Mes *',
                
                'value_options' => array(
                    1 => 'Enero',
                    2 => 'Febrero',
                    3 => 'Marzo',
                    4 => 'Abril',
                    5 => 'Mayo',
                    6 => 'Junio',
                    7 => 'Julio',
                    8 => 'Agosto',
                    9 => 'Septiembre',
                    10 => 'Octubre',
                    11 => 'Noviembre',
                    12 => 'Diciembre'
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'trabajadorespromedio_cantidad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Trabajadores *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));

        
        
    }
}

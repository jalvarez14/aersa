<?php

namespace Application\Proceso\Form;

use Zend\Form\Form;

    class IngresosForm extends Form{
    public function __construct () {
        parent::__construct('CompraForm');
        
        $this->add(array(
           'name'  => 'idingreso',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'ingreso_folio',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Folio *',
                'required' => true,
            )
        ));
        
        $this->add(array(
            'name' => 'ingreso_fecha',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Fecha *'
            )
        )); 
        
        $this->add(array(
            'name' => 'ingreso_revisada',
            'type' => 'Select',
            'options' => array(
                'label' => 'Revisión *',
                'empty_option' => 'Sin especificar',
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

        $this->add(array(
           'name'  => 'ingreso_totalalimento',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name'  => 'ingreso_totalbebida',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name'  => 'ingreso_totalmiscelanea',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));

    }
}
?>
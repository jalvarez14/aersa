<?php

namespace Application\Proceso\Form;

use Zend\Form\Form;

    class VentaForm extends Form{
    public function __construct () {
        parent::__construct('CompraForm');
        
        $this->add(array(
           'name'  => 'idventa',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'venta_revisada',
            'type' => 'Select',
            'options' => array(
                'label' => 'Revisión *',
                
                'value_options' => array(
                     0 => 'No revisada',
                    1 => 'Revisada',
                   
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        )); 

        $this->add(array(
            'name' => 'venta_fechaventa',
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
            'name' => 'venta_folio',
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
           'name'  => 'venta_total',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));

    }
}
?>
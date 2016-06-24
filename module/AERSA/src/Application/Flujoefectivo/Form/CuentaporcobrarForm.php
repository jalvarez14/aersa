<?php

namespace Application\Flujoefectivo\Form;

use Zend\Form\Form;

class CuentaporcobrarForm extends Form {
    
    public function __construct() {
        
        parent::__construct('cuentaporcobrarForm');
        
        $this->add(array(
           'name' => 'idcuentaporcobrar',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
           'name' => 'idempresa',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
           'name' => 'idsucursal',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
           'name' => 'idusuario',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'cuentaporcobrar_cantidad',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Cantidad *',
            ),
        ));
        
        $this->add(array(
            'name' => 'cuentaporcobrar_cliente',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Cliente *',
            ),
        ));
        
        $this->add(array(
            'name' => 'cuentaporcobrar_fecha',
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
            'name' => 'cuentaporcobrar_referencia',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Referencia ',
            ),
        ));
        
        $this->add(array(
            'name' => 'cuentaporcobrar_abonado',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Abonado ',
            ),
        ));
        
        $this->add(array(
            'name' => 'cuentaporcobrar_comprobante',
            'type' => 'File',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Comprobante ',
            ),
        ));
        
    }
   
}

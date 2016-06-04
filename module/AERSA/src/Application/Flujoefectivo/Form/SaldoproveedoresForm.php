<?php

namespace Application\Flujoefectivo\Form;

use Zend\Form\Form;

class SaldoproveedoresForm extends Form {
    
    public function __construct() {
        
        parent::__construct('saldoproveedorForm');
        
        
        
        $this->add(array(
           'name' => 'idabonoproveedor',
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
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name' => 'idproveedor',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        
        $this->add(array(
            'name' => 'abonoproveedor_balance',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Saldo ',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_nombrecomercial',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
                
            ),
            'options' => array(
                'label' => 'Proveedor ',
            ),
        ));
        
    }
   
}

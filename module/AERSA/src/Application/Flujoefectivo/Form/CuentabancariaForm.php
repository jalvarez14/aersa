<?php

namespace Application\Flujoefectivo\Form;

use Zend\Form\Form;

class CuentabancariaForm extends Form {
    
    public function __construct() {
        
        parent::__construct('plantillatablajeriaForm');
        
        $this->add(array(
           'name' => 'idcuentabancaria',
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
            'name' => 'cuentabancaria_banco',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Banco *',
            ),
        ));
        
        $this->add(array(
            'name' => 'cuentabancaria_nocuenta',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'No. cuenta *',
            ),
        ));
        
        $this->add(array(
            'name' => 'cuentabancaria_balance',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Saldo inicial *',
            ),
        ));
        
    }
   
}

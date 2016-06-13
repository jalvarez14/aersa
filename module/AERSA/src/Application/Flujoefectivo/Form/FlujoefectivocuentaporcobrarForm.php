<?php

namespace Application\Flujoefectivo\Form;

use Zend\Form\Form;

class FlujoefectivocuentaporcobrarForm extends Form {
    
    public function __construct($cuentas_array = array()) {
        
        parent::__construct('flujoefectivocuentaporcobrarForm');
        
        $this->add(array(
            'name' => 'flujoefectivo_fecha',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Fecha *',
            ),
        ));
        
        $this->add(array(
            'name' => 'flujoefectivo_cantidad',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Cantidad * ',
            ),
        ));
        
        $this->add(array(
            'name' => 'idcuentabancaria',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Cuenta bancaria *',
                'value_options' => $cuentas_array,
            ),
        ));
        
        $this->add(array(
            'name' => 'flujoefectivo_mediodepago',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Medio de pago *',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                    'cheque' => 'Cheque',
                    'efectivo' => 'Efectivo',
                    'transferencia' => 'Transferencia',
                ),
            ),
        ));
        
        $this->add(array(
            'name' => 'flujoefectivo_referencia',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Referencia *',
            ),
        ));
        
        $this->add(array(
            'name' => 'flujoefectivo_comprobante',
            'type' => 'File',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Comprobante *'
            )
        ));
        
        $this->add(array(
            'name' => 'flujoefectivo_chequecirculacion',
            'id' => 'flujoefectivo_chequecirculacion',
            'type' => 'Select',
            'options' => array(
                'label' => 'Cobrado *',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                    1 => 'Si',
                    0 => 'No',
                ),
            ),
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
        )); 
        
        $this->add(array(
            'name' => 'flujoefectivo_fechacobrocheque',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Fecha cobro cheque *'
            )
        ));
        
    }
   
}

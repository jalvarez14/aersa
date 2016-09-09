<?php

namespace Application\Flujoefectivo\Form;

use Zend\Form\Form;

class CuentaporpagarForm extends Form {
    
    public function __construct($idcuentabancaria=array()) {
        
        parent::__construct('CuentaporpagarForm');
        
        $this->add(array(
           'name' => 'idcompra',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true, 
            ),
        ));

        $this->add(array(
           'name' => 'idproveedor',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true, 
            ),
        ));
        
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
            'name' => 'flujoefectivo_pago',
            'type' => 'Select',
            'options' => array(
                'label' => 'Pago *',
                
                'value_options' => array(
                    'cuenta' => 'Cuenta',
                    'abono' => 'Abono',
                    'bonificacion' => 'Bonificación'
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                
            ),
        ));
                
        $this->add(array(
            'name' => 'idcuentabancaria',
            'type' => 'Select',
            'options' => array(
                
                'label' => 'Cuenta bancaria',
                'value_options' => $idcuentabancaria,
            ),
            'attributes' => array(
                'class' => 'form-control',
                'disabled' => true,
            ),
        ));

        $this->add(array(
            'name' => 'flujoefectivo_cantidad',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'disabled' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Cantidad *',
            ),
        ));
        
        $this->add(array(
            'name' => 'flujoefectivo_mediodepago',
            'type' => 'Select',
            'options' => array(
                'label' => 'Medio de pago',
                
                'value_options' => array(
                    'cheque' => 'Cheque',
                    'efectivo' => 'Efectivo',
                    'transferencia' => 'Transferencia',
                ),
            ),
            'attributes' => array(
                'class' => 'form-control',
                'disabled' => true,
                
            ),
        ));
        
        $this->add(array(
            'name' => 'flujoefectivo_referencia',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Referencia',
               
            ),
        ));
        
        $this->add(array(
            'name' => 'flujoefectivo_chequecirculacion',
            'type' => 'Select',
            'options' => array(
                
                'label' => '¿Cobrado?',
                'value_options' => array(
                    1 => 'Si',
                    0 => 'No',
                ),
            ),
            'attributes' => array(
                 'disabled' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'flujoefectivo_fechacobrocheque',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'disabled' => true,
            ),
            'options' => array(
                'label' => 'Fecha de cobro',
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
                'label' => 'Comprobante'
            )
        ));
        
        
        

        
    }
   
}

<?php

namespace Application\Flujoefectivo\Form;

use Zend\Form\Element;

use Zend\Form\Form;

class AbonoproveedordetalleForm extends Form {
    
    public function __construct($cuentas_array = array()) {
        parent::__construct('abonoproveedordetalleForm');
        $this->addElements();
        $this->add(array(
           'name' => 'idabonoproveedordetalle',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
                
            ),
        ));
        
        $this->add(array(
           'name' => 'idabonoproveedor',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
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
           'name' => 'idusuario',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'abonoproveedordetalle_fechaabono',
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
            'name' => 'abonoproveedordetalle_cantidad',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Cantidad *'
            )
        ));
        
        $this->add(array(
            'name' => 'abonoproveedordetalle_tipo',
            'type' => 'Select',
            'options' => array(
                'label' => 'Tipo *',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                    'abono' => 'Abono',
                    'egreso' => 'Egreso',
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        )); 
        
        $this->add(array(
            'name' => 'abonoproveedordetalle_referencia',
            'type' => 'Text',
            'attributes' => array(
                'required' => false ,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Referencia'
            )
        ));
        
        $this->add(array(
            'name' => 'abonoproveedordetalle_comprobante',
            'type' => 'File',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Comprobante'
            )
        ));
        
        $this->add(array(
            'name' => 'abonoproveedordetalle_mediodepago',
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
            'name' => 'abonoproveedordetalle_chequecirculacion',
            'id' => 'abonoproveedordetalle_chequecirculacion',
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
            'name' => 'abonoproveedordetalle_fechacobrocheque',
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
    
     public function addElements()
    {
        // File Input
        $file = new Element\File('image-file');
        $file->setLabel('Avatar Image Upload')
             ->setAttribute('id', 'image-file');
        $this->add($file);
    }
   
}

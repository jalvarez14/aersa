<?php

namespace Application\Proceso\Form;

use Zend\Form\Form;

    class ConsignacionForm extends Form{
    public function __construct ($almacen_array = array()) {
        parent::__construct('ConsignacionForm');
        
        $this->add(array(
           'name'  => 'idcompra',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
           'name'  => 'compra_fechacreacion',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'compra_fechacompra',
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
           'name'  => 'idproveedor',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name' => 'idproveedor_autocomplete',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
              'options' => array(
                'label' => 'Proveedor *',
            ),
        ));
        
        
        $this->add(array(
            'name' => 'compra_fechaentrega',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Fecha de entrega'
            )
        ));
        
        
        $this->add(array(
            'name' => 'idalmacen',
            'type' => 'Select',
            'options' => array(
                'label' => 'Almacén *',
                
                'value_options' => $almacen_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'compra_tipo',
            'type' => 'Select',
            'options' => array(
                'label' => 'Tipo *',
                
                'value_options' => array(
                    'consignacion' => 'Consignacion',
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));  
        
        $this->add(array(
            'name' => 'compra_revisada',
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
            'name' => 'compra_folio',
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
            'name' => 'compra_factura',
            'type' => 'File',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Factura'
            )
        ));
        
        $this->add(array(
           'name'  => 'compra_subtotal',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name'  => 'compra_iva',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name'  => 'compra_ieps',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name'  => 'compra_total',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
  
    }
}
?>
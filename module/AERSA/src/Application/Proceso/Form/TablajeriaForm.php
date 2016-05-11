<?php

namespace Application\Proceso\Form;

use Zend\Form\Form;

    class TablajeriaForm extends Form{
    public function __construct ($almacen_array = array()) {
        parent::__construct('TablajeriaForm');
        
        $this->add(array(
           'name'  => 'idordentablajeria',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
            'name' => 'ordentablajeria_fechacreacion',
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
            'name' => 'ordentablajeria_fechao',
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
            'name' => 'idalmacen',
            'type' => 'Select',
            'options' => array(
                'label' => 'Almacen *',
                'empty_option' => 'Sin especificar',
                'value_options' => $almacen_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'ordentablajeria_revisada',
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
            'name' => 'ordentablajeria_folio',
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
            'name' => 'ordentablajeria_factura',
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
           'name'  => 'ordentablajeria_subtotal',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name'  => 'ordentablajeria_iva',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name'  => 'ordentablajeria_ieps',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name'  => 'ordentablajeria_total',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
  
    }
}
?>
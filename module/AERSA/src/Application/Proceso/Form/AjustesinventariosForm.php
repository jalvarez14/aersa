<?php

namespace Application\Proceso\Form;

use Zend\Form\Form;

class AjustesinventariosForm extends Form {
    
    public function __construct($almacen_array = array()) {
        
        parent::__construct('ajusteinventarioForm');
        
        $this->add(array(
           'name' => 'idajusteinventario',
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
           'name' => 'idproducto',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
           'name' => 'idproducto_autocomplete',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
              'options' => array(
                'label' => 'Producto *',
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
            'name' => 'ajusteinventario_cantidad',
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
            'name' => 'ajusteinventario_comentario',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
                'data-autosize-on' => 'true',
                'style' => 'resize: vertical',
            ),
            'options' => array(
                'label' => 'Comentario ',
            ),
        ));
        
        $this->add(array(
            'name' => 'ajusteinventario_fecha',
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
            'name' => 'ajusteinventario_tipo',
            'type' => 'Select',
            'options' => array(
                'label' => 'Tipo *',
                
                'value_options' => array(
                    'sobrante' => 'Sobrante',
                    'faltante' => 'Faltante',
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        )); 
        
        
    }
   
}

<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class PlantillatablajeriaForm extends Form {
    
    public function __construct($producto_array = array()) {
        
        parent::__construct('plantillatablajeriaForm');
        
        $this->add(array(
           'name' => 'idplantillatablajeria',
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
           'name' => 'idproducto',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
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
            'name' => 'plantillatablajeria_nombre',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Nombre *',
            ),
        ));
        
        $this->add(array(
            'name' => 'plantillatablajeria_descripcion',
            'type' => 'Textarea',
            'attributes' => array(
                'class' => 'form-control autosizeme',
                'data-autosize-on' => 'true',
                'style' => 'resize: vertical',
            ),
            'options' => array(
                'label' => 'Descripción',
            ),
        ));
        
    }
   
}

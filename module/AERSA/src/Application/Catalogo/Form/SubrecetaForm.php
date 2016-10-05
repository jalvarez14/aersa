<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class SubrecetaForm extends Form
{
    public function __construct($productos = array())
    {
        // we want to ignore the name passed
        parent::__construct('subreceta_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idreceta',
            'type' => 'Hidden',
        ));

       
        $this->add(array(
            'name' => 'idproductoreceta',
            'type' => 'Select',
            'options' => array(
                'label' => 'Producto *',
                'value_options' => $productos
            ),
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'receta_cantidadoriginal',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cantidad *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'receta_cantidad',
            'type' => 'Text',
            'options' => array(
                'label' => 'Cantidad normalizada *',
            ),
            'attributes' => array(
                'required' => false,
                'readonly' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'receta_unidad',
            'type' => 'Select',
            'options' => array(
                'label' => 'Unidad *',
                'value_options' => array(
                    'Botella' => 'Botella',
                    'Pieza' => 'Pieza',
                    'Onza' => 'Onza',
                    'Copa vino 187.5 ML' => 'Copa vino 187.5 ML',
                    'Copa vino 150 ML' => 'Copa vino 150 ML',
  
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));  
        
    }
}

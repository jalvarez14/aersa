<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class ProductoForm extends Form
{
    public function __construct($idempresa = array())
    {
        // we want to ignore the name passed
        parent::__construct('producto_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idproducto',
            'type' => 'Hidden',
        ));
        $this->add(array(
            'name' => 'idempresa',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'producto_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre producto *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'idcategoria',
            'type' => 'Select',
            'options' => array(
                'label' => 'Categoria *',
                'value_options' => array(
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'idsubcategoria',
            'type' => 'Select',
            'options' => array(
                'label' => 'Subcategoria *',
                'value_options' => array(
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        
        $this->add(array(
            'name' => 'producto_rendimiento',
            'type' => 'Text',
            'options' => array(
                'label' => 'Rendimiento *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'producto _ultimocosto',
            'type' => 'Text',
            'options' => array(
                'label' => 'Costo *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_telefono',
            'type' => 'Text',
            'options' => array(
                'label' => 'Telefono *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_calle',
            'type' => 'Text',
            'options' => array(
                'label' => 'Calle',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_numero',
            'type' => 'Text',
            'options' => array(
                    'label' => 'Número exterior',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_interior',
            'type' => 'Text',
            'options' => array(
                    'label' => 'Número interior',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_colonia',
            'type' => 'Text',
            'options' => array(
                    'label' => 'Colonia',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_ciudad',
            'type' => 'Text',
            'options' => array(
                    'label' => 'Ciudad',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_estado',
            'type' => 'Text',
            'options' => array(
                    'label' => 'Estado',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
         $this->add(array(
            'name' => 'proveedor_codigopostal',
            'type' => 'Text',
            'options' => array(
                    'label' => 'Código postal',
            ),
            'attributes' => array(
                'class' => 'form-control',
            ),
        ));
        
        

    }
}

<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class ProductosForm extends Form
{
    public function __construct($categorias = array(),$subcategorias = array())
    {
        // we want to ignore the name passed
        parent::__construct('producto_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idproducto',
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
                'label' => 'Categoría *',
                
                'value_options' => $categorias,
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
                'label' => 'Subcategoría',
                
                'value_options' => $subcategorias
            ),
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'idunidadmedida',
            'type' => 'Select',
            'options' => array(
                'label' => 'Unidad de medida *',
                'value_options' => array(
                    1 => 'Pieza',
                    2 => 'Botella',
                    3 => 'Kilogramos',
                    4 => 'Litros',
                    5 => 'Porcion',
                    6 => 'Caja'
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'producto_tipo',
            'type' => 'Select',
            'options' => array(
                'label' => 'Tipo *',
                'value_options' => array(
                    'simple' => 'Simple',
                    'subreceta' => 'Subreceta',
                    'plu' => 'Botón de venta'
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'producto_iva',
            'type' => 'Select',
            'options' => array(
                'label' => 'IVA *',
                'value_options' => array(
                    1 => 'Si',
                    0 => 'No',
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'producto_rendimientooriginal',
            'type' => 'Number',
            'options' => array(
                'label' => 'Rendimiento *',
            ),
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
                 'step' => 'any',
            ),
        ));
        $this->add(array(
            'name' => 'producto_rendimiento',
            'type' => 'Number',
            'options' => array(
                'label' => 'Rendimiento normalizado*',
            ),
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
                'step' => 'any',
            ),
        ));
        
        $this->add(array(
            'name' => 'producto_costo',
            'type' => 'Number',
            'options' => array(
                'label' => 'Costo *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'step' => 'any',
            ),
        ));
        
        $this->add(array(
            'name' => 'producto_ultimocosto',
            'type' => 'Number',
            'options' => array(
                'label' => 'Último costo *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'step' => 'any',
            ),
        ));
        
        $this->add(array(
            'name' => 'producto_precio',
            'type' => 'Text',
            'options' => array(
                'label' => 'Precio *',
            ),
            'attributes' => array(
                'required' => false,
                'disabled' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'producto_stock',
            'type' => 'Text',
            'options' => array(
                'label' => 'Stock *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'disabled' => 'disabled',
                'value' => '0',
            ),
        ));
        
        
        
        $this->add(array(
            'name' => 'producto_baja',
            'type' => 'Select',
            'options' => array(
                'label' => 'Baja *',
                'value_options' => array(
                    0 => 'No',
                    1 => 'Si',
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));        

    }
}

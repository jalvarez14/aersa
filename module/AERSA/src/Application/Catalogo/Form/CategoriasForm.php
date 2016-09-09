<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class CategoriasForm extends Form
{
    public function __construct($padres)
    {
        // we want to ignore the name passed
        parent::__construct('categoria_form');
        $this->setAttribute('method', 'post');

        $this->add(array(
            'name' => 'idcategoria',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'categoria_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        $this->add(array(
            'name' => 'idcategoriapadre',
            'type' => 'select',
            'options' => array(
                'label' => 'Padre *',
                
                    
                'value_options' => $padres,
            ),
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'categoria_almacenable',
            'type' => 'Checkbox',
            'options' => array(
                'label' => 'Almacenable',
                'checked_value' => 1,
                'unchecked_value' => 0

            ),
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
        ));

        
    }
}

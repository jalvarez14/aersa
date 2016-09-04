<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class EmpresaForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('empresa_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idempresa',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'empresa_nombrecomercial',
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
            'name' => 'empresa_razonsocial',
            'type' => 'Text',
            'options' => array(
                'label' => 'Razón social *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empresa_estatus',
            'type' => 'Select',
            'options' => array(
                'label' => 'Estatus *',
                'value_options' => array(
                    1 => 'Activo',
                    0 => 'Inactivo'
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empresa_administracion',
            'type' => 'Checkbox',
            'options' => array(
                'label' => 'Administrable',
                'checked_value' => 1,
                'unchecked_value' => 0

            ),
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empresa_habilitarproductos',
            'type' => 'Select',
            'options' => array(
                'label' => 'Productos *',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                    1 => 'Habilitar',
                    0 => 'No habilitar'
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'empresa_habilitarrecetas',
            'type' => 'Select',
            'options' => array(
                'label' => 'Recetas *',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                    1 => 'Habilitar',
                    0 => 'No habilitar'
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        //Los siguientes campos no son propios de la tabla empresa
        //pero son necesarios para crear una nueva empresa
        
            $this->add(array(
                'name' => 'usuario_nombre',
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
                'name' => 'usuario_estatus',
                'type' => 'Select',
                'options' => array(
                    'label' => 'Estatus *',
                    'value_options' => array(
                        1 => 'Activo',
                        0 => 'Inactivo'
                    ),
                ),
                'attributes' => array(
                    'required' => false,
                    'class' => 'form-control',
                ),
            ));

            $this->add(array(
                'name' => 'usuario_username',
                'type' => 'Text',
                'options' => array(
                    'label' => 'Nombre de usuario *',
                ),
                'attributes' => array(
                    'required' => true,
                    'class' => 'form-control',
                ),
            ));

            $this->add(array(
                'name' => 'usuario_password',
                'type' => 'Password',
                'options' => array(
                    'label' => 'Contraseña *',
                ),
                'attributes' => array(
                    'required' => true,
                    'class' => 'form-control',
                ),
            ));
        
        //Terminan los campos de usuario
    }
}

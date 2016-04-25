<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class UsuarioForm extends Form
{
    public function __construct()
    {
        // we want to ignore the name passed
        parent::__construct('usuario_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idusuario',
            'type' => 'Hidden',
        ));
        
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
            'name' => 'idrol',
            'type' => 'Select',
            'options' => array(
                'label' => 'Rol *',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                    1 => 'Administrador',
                    2 => 'Auditor'
                ),
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
                'empty_option' => 'Sin especificar',
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
        
        $this->add(array(
            'name' => 'idempresas',
            'type' => 'Select',
            'options' => array(
                'label' => 'Empresas a cargo *',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control test',
                'multiple'  => 'multiple',
            ),
        ));
        
    }
}

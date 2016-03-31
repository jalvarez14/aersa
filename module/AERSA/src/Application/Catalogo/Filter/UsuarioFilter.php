<?php

namespace Application\Catalogo\Filter;

 // Add these import statements
 use Zend\InputFilter\InputFilter;
 use Zend\InputFilter\InputFilterAwareInterface;
 use Zend\InputFilter\InputFilterInterface;


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
    }
}

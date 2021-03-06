<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class SucursalForm extends Form
{
    public function __construct($array_weeks = array())
    {
        // we want to ignore the name passed
        parent::__construct('sucursal_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idsucursal',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'sucursal_nombre',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre Sucursal *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'sucursal_estatus',
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
            'name' => 'sucursal_habilitarproductos',
            'type' => 'Select',
            'options' => array(
                'label' => 'Productos *',
                
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
            'name' => 'sucursal_habilitarrecetas',
            'type' => 'Select',
            'options' => array(
                'label' => 'Recetas *',
                
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
            'name' => 'sucursal_mesactivo',
            'type' => 'Select',
            'options' => array(
                'label' => 'Semana activa *',
                
                'value_options' => $array_weeks,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'sucursal_anioactivo',
            'type' => 'Number',
            'options' => array(
                'label' => 'Año activo *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        
        
        
        //Los siguientes campos no pertenecen a sucursal pero son necesarios para la insercion    
        
        //Auditor
        $this->add(array(
            'name' => 'auditor_nombre',
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
            'name' => 'auditor_estatus',
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
            'name' => 'auditor_username',
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
            'name' => 'auditor_password',
            'type' => 'Password',
            'options' => array(
                'label' => 'Contraseña *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        //Almacenista
        $this->add(array(
            'name' => 'almacenista_nombre',
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
            'name' => 'almacenista_estatus',
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
            'name' => 'almacenista_username',
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
            'name' => 'almacenista_password',
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

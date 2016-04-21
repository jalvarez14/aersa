<?php

namespace Application\Catalogo\Form;

use Zend\Form\Form;

class ProveedorForm extends Form
{
    public function __construct($idempresa = array())
    {
        // we want to ignore the name passed
        parent::__construct('proveedor_form');
        $this->setAttribute('method', 'post');
        
        $this->add(array(
            'name' => 'idproveedor',
            'type' => 'Hidden',
        ));
        
        $this->add(array(
            'name' => 'idempresa',
            'type' => 'Select',
            'options' => array(
                'label' => 'Empresa *',
                'value_options' => $idempresa
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_nombrecomercial',
            'type' => 'Text',
            'options' => array(
                'label' => 'Nombre comercial *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_razonsocial',
            'type' => 'Text',
            'options' => array(
                'label' => 'Razon social *',
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'proveedor_RFC',
            'type' => 'Text',
            'options' => array(
                'label' => 'RFC *',
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

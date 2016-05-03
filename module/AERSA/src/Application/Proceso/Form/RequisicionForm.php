<?php

namespace Application\Proceso\Form;

use Zend\Form\Form;

class PlantillatablajeriaForm extends Form {
    
    public function __construct($producto_array = array()) {
        
        parent::__construct('requisicionForm');
        
        $this->add(array(
           'name' => 'idrequisicion',
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
            'name' => 'sucursal_nombre',
            'type' => 'Text',
            'attributes' => array(
                'class' => 'form-control',
                'disabled' => true,
            ),
            'value' => $sucursal->getSucursalNombre(),
        ));
        
        $this->add(array(
           'name' => 'idsucursalorigen',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
            'value' => $sucursal->getIdsucursal(),
        ));
        
        $this->add(array(
            'name' => 'idalmacenorigen',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Alamacen origen *',
                'empty_option' => 'Seleccione un almacen',
                'value_options' => $almacenorg_array,
            ),
        ));
        
        $this->add(array(
            'name' => 'idsucursaldestino',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Sucursal destino *',
                'empty_option' => 'Seleccione una sucursal',
                'value_options' => $sucursaldes_array,
            ),
        ));
        
        $this->add(array(
            'name' => 'idalmacendestino',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Almacen destino *',
                'empty_option' => 'Seleccione un almacen',
                'value_options' => $almacendes_array,
            ),
        ));
        
        $this->add(array(
           'name' => 'idusuario',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name' => 'idauditor',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
            'name' => 'idconceptosalida',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Concepto salida *',
                'empty_option' => 'Seleccione un concepto',
                'value_options' => $concepto_array,
            ),
        ));
        
        $this->add(array(
            'name' => 'requisicion_fecha',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Fecha *'
            )
        ));
        
        $this->add(array(
            'name' => 'requisicion_revisada',
            'type' => 'Select',
            'options' => array(
                'label' => 'Revisión *',
                'empty_option' => 'Sin especificar',
                'value_options' => array(
                    1 => 'Revisada',
                    0 => 'No revisada',
                ),
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        )); 
        
        $this->add(array(
            'name' => 'requisicion_folio',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Folio *',
                'required' => true,
            )
        ));
        
        $this->add(array(
           'name'  => 'requisicion_total',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
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
    }
   
}

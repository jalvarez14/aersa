<?php

namespace Application\Proceso\Form;

use Zend\Form\Form;

class RequisicionForm extends Form {
    
    public function __construct($sucursalorg,$almacen_array = array(),$sucursaldes_array = array(), $concepto_array = array()) {
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
                'value' => $sucursalorg->getSucursalNombre()
                
            ),
            'options' => array(
                'label' => 'Sucursal origen',
            ),
            
        ));
        
        $this->add(array(
           'name' => 'idsucursalorigen',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
                'value' => $sucursalorg->getIdsucursal(),
            ),
            
        ));
        
        $this->add(array(
            'name' => 'idalmacenorigen',
            'type' => 'Select',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control'
            ),
            'options' => array(
                'label' => 'Almacén origen *',
                'value_options' => $almacen_array,
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
                'label' => 'Almacén destino *',
                'value_options' => $almacen_array,
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
                'empty_option' => 'Seleccione un concepto'
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
            'name' => 'requisicion_fechacreacion',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'requisicion_revisada',
            'type' => 'Select',
            'options' => array(
                'label' => 'Revisión *',
                
                'value_options' => array(
                    0 => 'No revisada',
                    1 => 'Revisada',
                    
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

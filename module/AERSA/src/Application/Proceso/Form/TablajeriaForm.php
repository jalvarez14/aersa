<?php

namespace Application\Proceso\Form;

use Zend\Form\Form;

    class TablajeriaForm extends Form{
    public function __construct ($almacen_array = array()) {
        parent::__construct('TablajeriaForm');
        
        $this->add(array(
           'name'  => 'idordentablajeria',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => true,
            ),
        ));
        
        $this->add(array(
           'name'  => 'idproducto',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
        
        $this->add(array(
           'name'  => 'producto_unidadmedida',
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
        
        $this->add(array(
            'name' => 'idalmacenorigen',
            'type' => 'Select',
            'options' => array(
                'label' => 'Almacen origen *',
                'empty_option' => 'Sin especificar',
                'value_options' => $almacen_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
        $this->add(array(
            'name' => 'idalmacendestino',
            'type' => 'Select',
            'options' => array(
                'label' => 'Almacen destino *',
                'empty_option' => 'Sin especificar',
                'value_options' => $almacen_array,
            ),
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
        ));
        
         $this->add(array(
           'name'  => 'idproveedor',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
         
        $this->add(array(
            'name' => 'ordentablajeria_fecha',
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
            'name' => 'ordentablajeria_fechacreacion',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Fecha '
            )
        ));
        
        
        $this->add(array(
            'name' => 'ordentablajeria_pesobruto',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Peso bruto *'
            )
        ));
        
        
        $this->add(array(
            'name' => 'ordentablajeria_preciokilo',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
              
                'disabled' => true,
            ),
            'options' => array(
                'label' => 'Precio Kilo '
            )
        ));
        
        $this->add(array(
            'name' => 'ordentablajeria_pesoneto',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'disabled' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Peso neto'
            )
        ));
        
        $this->add(array(
            'name' => 'ordentablajeria_precioneto',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
                'disabled' => true,
            ),
            'options' => array(
                'label' => 'Precio neto'
            )
        ));
        
        $this->add(array(
            'name' => 'ordentablajeria_inyeccion',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Inyección '
            )
        ));
        
        $this->add(array(
            'name' => 'ordentablajeria_merma',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Merma '
            )
        ));
        $this->add(array(
            'name' => 'ordentablajeria_porcentajemerma',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => '% merma '
            )
        ));
        $this->add(array(
            'name' => 'ordentablajeria_aprovechamiento',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => '% aprovechamiento '
            )
        ));
               
        
        $this->add(array(
            'name' => 'ordentablajeria_revisada',
            'type' => 'Select',
            'options' => array(
                'label' => 'Revisada ',
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
            'name' => 'ordentablajeria_folio',
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
            'name' => 'ordentablajeria_esporcion',
            'type' => 'Select',
            'options' => array(
                'label' => 'Es porcion ',
                'empty_option' => 'Sin especificar',
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
            'name' => 'ordentablajeria_numeroporciones',
            'type' => 'Text',
            'attributes' => array(
                'required' => false,
                'class' => 'form-control',
                'disabled' => true,
                //'placeholder' => 'porciones',
            ),
            'options' => array(
                'label' => 'Porciones ',
                
            )
        ));

        

  
    }
}
?>
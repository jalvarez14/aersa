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
            'name' => 'idalmacenorigen',
            'type' => 'Select',
            'options' => array(
                'label' => 'Almacen *',
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
            'name' => 'idalmacendestino',
            'type' => 'Select',
            'options' => array(
                'label' => 'Almacen destino *',
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
           'name'  => 'idproveedor',
            'type' => 'Hidden',
            'attributes' => array(
                'required' => false,
            ),
        ));
         
        $this->add(array(
            'name' => 'ordentablajeria_fechacreacion',
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
                'label' => 'Fecha *'
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
                'label' => 'Peso bruto*'
            )
        ));
        
        
        $this->add(array(
            'name' => 'ordentablajeria_preciokilo',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Precio Kg *'
            )
        ));
        
        $this->add(array(
            'name' => 'ordentablajeria_pesoneto',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Peso *'
            )
        ));
        
        $this->add(array(
            'name' => 'ordentablajeria_precioneto',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Pracio neto *'
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
                'label' => 'Inyección *'
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
                'label' => 'Merma *'
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
                'label' => 'Aprovechamiento *'
            )
        ));
        
        
        $this->add(array(
            'name' => 'ordentablajeria_revisada',
            'type' => 'Select',
            'options' => array(
                'label' => 'Revisada *',
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
                'label' => 'Es porcion *',
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
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Porciones *',
                'required' => true,
            )
        ));

        

  
    }
}
?>
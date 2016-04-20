<?php

namespace Application\Proceso\Form;

use Zend\Form\Form;

    class CompraForm extends Form{
    public function __construct ($idempresa, $idsucursal, $idusuario) {
        parent::__construct('CompraForm');
        
        $this->add(array(
           'name'  => 'idcompra',
            'type' => 'Hidden',
            
            'attributes' => array(
                'required' => true,
            ),
        ));
        $this->add(array(
            'name' => 'compra_fechacompra',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Fecha'
            )
        ));
        //autocomplete
        $this->add(array(
           'name'  => 'idproveedor',
            'type' => 'Hidden',
            
            'attributes' => array(
                'required' => true,
            ),
        ));
        $this->add(array(
            'name' => 'compra_fechaentrega',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Fecha de entrega'
            )
        ));
        $this->add(array(
           'name'  => 'idalmacen',
            'type' => 'Hidden',
            
            'attributes' => array(
                'required' => true,
            ),
        ));      
        $this->add(array(
            'name' => 'compra_folio',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Folio'
            )
        ));
        $this->add(array(
            'name' => 'compra_factura',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Factura'
            )
        ));
        $this->add(array(
            'name' => 'compra_revisada',
            'type' => 'Text',
            'attributes' => array(
                'required' => true,
                'class' => 'form-control',
            ),
            'options' => array(
                'label' => 'Revisión'
            )
        ));     
    }
}
?>
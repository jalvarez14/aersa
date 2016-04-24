<?php

namespace Application\Catalogo\Filter;

 // Add these import statements
 use Zend\InputFilter\InputFilter;
 use Zend\InputFilter\InputFilterAwareInterface;
 use Zend\InputFilter\InputFilterInterface;


class UsuarioFilter implements InputFilterAwareInterface
{
    
    protected $inputFilter;
    
    public function getInputFilter() {
        
        if (!$this->inputFilter) {
            
            $inputFilter = new InputFilter();
            
            $inputFilter->add(array(
                'name' => 'idusuario',
                'required' => false,
                'filters' => array(
                    array('name' => 'Int'),
                ),
            ));
            
            $inputFilter->add(array(
                'name' => 'idrol',
                'required' => true,
                'filters' => array(
                    array('name' => 'Int'),
                ),
            ));
            
            $inputFilter->add(array(
                'name' => 'usuario_nombre',
                'required' => true,
                'filters' => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            
            $inputFilter->add(array(
                'name' => 'usuario_username',
                'required' => true,
                'filters' => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            
            $inputFilter->add(array(
                'name' => 'usuario_password',
                'required' => true,
                'filters' => array(
                    array('name' => 'StripTags'),
                    array('name' => 'StringTrim'),
                ),
            ));
            
            $this->inputFilter = $inputFilter;

  
        }
        
        return $this->inputFilter;
        
    }

    
    public function setInputFilter(InputFilterInterface $inputFilter)
     {
         throw new \Exception("Not used");
     }


}

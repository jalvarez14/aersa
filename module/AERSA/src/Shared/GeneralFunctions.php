<?php

namespace Shared;

class GeneralFunctions {
   
    
    public static function collectionToSelectArray($collection, $primary_key,$value){
       
        $array = array();
        foreach ($collection as $entity){
            $id = $entity->getByName($primary_key, \BasePeer::TYPE_FIELDNAME);
            $array[$id] = $entity->getByName($value, \BasePeer::TYPE_FIELDNAME);
        }
        
        return $array;
       
        
    }
    
    public static function collectionToAutocomplete($collection, $primary_key,$value,$columns = array()){
       
        $array = array();
        foreach ($collection as $entity){
            
            $id = $entity->getByName($primary_key, \BasePeer::TYPE_FIELDNAME);
            $a = array('id' => $id,'value' => $entity->getByName($value, \BasePeer::TYPE_FIELDNAME));
            
            foreach ($columns as $column){
                $a[$column] = $entity->getByName($column, \BasePeer::TYPE_FIELDNAME);
            }
            
            $array[] = $a;

        }
        
        
        
        return $array;
       
        
    }
    
}

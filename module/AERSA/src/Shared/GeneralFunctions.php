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
    
}

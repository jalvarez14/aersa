<?php

namespace Shared;

class GeneralFunctions {
   
    
    public static function collectionToSelectArray($collection, $primary_key,$value,$columns = array(),$separator=" "){
       
        $array = array();
        foreach ($collection as $entity){
            $id = $entity->getByName($primary_key, \BasePeer::TYPE_FIELDNAME);
            $val = $entity->getByName($value, \BasePeer::TYPE_FIELDNAME);
            
            foreach ($columns as $column){
                $val.= $separator.$entity->getByName($column, \BasePeer::TYPE_FIELDNAME);
            }
           
            $array[$id] = $val;
            
        }
         
        return $array;
       
        
    }
    
    public static function collectionToAutocomplete($collection, $primary_key,$value,$columns = array(),$autocomplete='twitter'){
       
        $array = array();
        if($autocomplete == 'twitter'){
            $autocomplete_variable = 'value';
        }elseif ($autocomplete == 'select2') {
            
        }
        
        foreach ($collection as $entity){
            
            $id = $entity->getByName($primary_key, \BasePeer::TYPE_FIELDNAME);
            $a = array('id' => $id,'value' => $entity->getByName($value, \BasePeer::TYPE_FIELDNAME));
           
            foreach ($columns as $column){
              
                if(is_array($column)){     
                    $class_name = $column[3];
                    $column_name = $column[2];
                    $q = new $class_name;
                    $result_array = $q->create()->filterBy(\BasePeer::translateFieldname($column[0], $column[1], \BasePeer::TYPE_FIELDNAME, \BasePeer::TYPE_PHPNAME), $entity->getByName($column[1], \BasePeer::TYPE_FIELDNAME))->findOne()->toArray(\BasePeer::TYPE_FIELDNAME);
                    $a[$column_name] = $result_array[$column_name];
                }else{
                    $a[$column] = $entity->getByName($column, \BasePeer::TYPE_FIELDNAME);
                }
    
                
            }
            
            $array[] = $a;

        }
        
        
        
        return $array;
       
        
    }
    
    public static function getCurrentWeek(){
        return (date('W'));
    }
    
    public static function getWeekArray($year){
        
        setlocale(LC_ALL,"es_ES");

        $number_weeks = idate('W', mktime(0, 0, 0, 12, 27, $year));
        $first_day = date("d-m-Y", strtotime("monday", mktime(0, 0, 0, 1, 1,$year)));
     
        $start = $first_day;
        $weeks_array = array();
        $months = array("Ene","Feb","Mar","Abr","May","Jun","Jul","Ago","Sep","Oct","Nov","Dic");
        
        for($i = 1; $i<=$number_weeks; $i++){
            
            
            $idstartmonth = (int)date('m', strtotime($start)) -1;
            $start_month = $months[$idstartmonth];

            $idendmonth = date('m', strtotime($start. ' + 6 days')) -1;
            $end_month = $months[$idendmonth];
            
            $weeks_array[$i] = date('d', strtotime($start))."-".$start_month." - ".date('d', strtotime($start. ' + 6 days'))."-".$end_month;
            
            $start = date('d-m-Y', strtotime($start. ' + 7 days'));
                   

        }
       
        return $weeks_array;

    }
    
}

function num_weeks_in_year() {
        
        $year = date('Y');
        $year = 2004;
	$daySum=0;

	for($x=1;$x<=12;$x++) 

		$daySum += cal_days_in_month(CAL_GREGORIAN, $x, $year);

	return $daySum/7;

}


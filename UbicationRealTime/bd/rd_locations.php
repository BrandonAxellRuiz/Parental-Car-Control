<?php 

error_reporting(1);
session_start(1);
require_once("Connecction.php");
$conexion = new Connecction;
$conexionm = $conexion -> dbConectionm();



    if($_GET['name']!=""){
        
        
        $sql = "SELECT * FROM `ubication_real` WHERE name_tester = :name_tester AND status = :status ORDER BY id_ubication_real DESC LIMIT 20";
        
        $array_set = array(
    		
    		'status' => '1',
    		'name_tester' => $_GET['name']
    
    	);
    
    }else{
        
        $sql = "SELECT * FROM `ubication_real` WHERE status = :status ORDER BY id_ubication_real DESC LIMIT 20";
        
        $array_set = array(
    		
    		'status' => '1'
    
    	);
    
    }
    
    	
    
    	$result = $conexionm -> prepare($sql);
    	$result -> execute($array_set);
    	$row = $result -> fetchAll();
    	if(count($row)>0){
    	    
    	    echo json_encode($row, JSON_UNESCAPED_UNICODE);
    	
    	}else{
    	
        }
    	
    	    
    
    		

?>
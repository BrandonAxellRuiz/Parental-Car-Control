<?php 

error_reporting(1);
session_start(1);


if($_POST['latitud'] == $_SESSION['latitud'] && $_POST['longitud'] == $_SESSION['longitud']){
    
    echo 2;
    
}else{
    
    $_SESSION['latitud'] = $_POST['latitud'];
    $_SESSION['longitud'] = $_POST['longitud']; 
    
    if($_POST['name']!="" && $_POST['latitud']!="" && $_POST['longitud']!=""){
    
    	require_once("Connecction.php");
    	$conexion = new Connecction;
    	$conexionm = $conexion -> dbConectionm();
    
    	$result = $conexionm -> prepare("SELECT * FROM `ubication_real` WHERE name_tester = :name_tester AND status = :status");
    	$result -> execute(array(
    		
    		'name_tester' => $_POST['name'],
    		'status' => '1'
    
    	));
    	$row = $result -> fetchAll();
    	if(count($row)>0){
    
    		foreach ($row as $row) {
    
    			$result_u = $conexionm -> prepare("UPDATE `ubication_real` SET latitud = :latitud, long = :long, time_create = :time_create, date_create = :date_create WHERE id_ubication_real = :id_ubication_real");
    			$result_u -> execute(array(
    				
    				'id_ubication_real' => $row['id_ubication_real'],
    				'latitud' => $_POST['latitud'],
    				'long' => $_POST['longitud'],
    				'time_create' => date("g:i"),
    				'date_create' => date("Y/m/d")
   
    			));
    
    			if(count($result_u -> rowCount())>0){
    
    		        echo 1;

    			}else{
    
    				echo 0;
    
    			}
    		}
    
    
    	}else{
    
    		$result_in = $conexionm -> prepare("INSERT INTO `ubication_real`(`name_tester`, `latitud`, `long`, `time_create`, `date_create`, `status`) VALUES(:name_tester, :latitud, :long, :time_create, :date_create, :status)");
    		$result_in -> execute(array(
    			
    			'name_tester' => $_POST['name'], 
    			'latitud' => $_POST['latitud'],
    			'long' => $_POST['longitud'],
    			'time_create' => date("g:i"),
    			'date_create' => date("Y/m/d"),
    			'status' => '1'
    
    		));
    
    		if(count($conexionm -> lastInsertId())>0){
    
    			echo 1;
    
    		}else{
    
    			echo 0;
    		}
    
    
    	}
    	
    }else{
    
    	echo -1;
    
    }
    
    
   
    
}

?>
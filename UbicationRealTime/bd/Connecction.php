 <?php

class connecction{
  /* ================== conexion para FIREBIRD o INTERBASE  =============================*/
   function dbConectionf ()  {
      $conexion = null;                                // Se inicializa variable a nul

       try {
              $conexion = new PDO("firebird:dbname=localhost:C:\\Program Files\\Firebird\\Firebird_2_5\\extintores_del_norte\\SERGIOBRAVOGAS.fdb", "SYSDBA", "masterkey");
               }
            catch(PDOException $e){
                            echo "Failed to get DB handle: " . $e->getMessage();
                             exit;    
                                      }
          return $conexion;
     }


   /* ================== conexion para MYSQL  =============================*/

   
   function dbConectionm ()	{
      $conexion = null;                                // Se inicializa variable a nul
  		# code...
  			$usr  = "donecomm_solti";
  		$pwd  = "Answer18*";
  		$host = "localhost";
  		$db   = "donecomm_soluciones_en_ti";
  		
  		 try {
  		       $conexion = new PDO("mysql:host=$host;dbname=$db;",$usr,$pwd);
                //$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	           }
  	        catch(PDOException $e){
                            echo "Failed to get DB handle: " . $e->getMessage();
                             exit;    
                                      }
          return $conexion;
  	 }




  /* ================== conexion para SQLSERVER =============================*/


  function dbConections ()  {
     $conexion = null;     
      
                          // Se inicializa variable a nul
      $hostname = "BRANDONANSWER\SQLANSWER"; 
  	// Nombre del Servidor SQL Server\Instancia, puerto
     // $port = 1433;                          
           // no siempre lo usa
      $dbname = "tutores_ut";                
  	       // Nombre de la BD
      //$username = "brand";                      
  	      // Usuario de la BD
      $pw = ""; 
      try {
        $conexion = new PDO ("sqlsrv:Server=".$hostname.";Database=".$dbname.";Encrypt=false"); // Se ejecutan los parametros
        //$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  	  }
  	  
  	  
    catch(PDOException $e){
           $msgErrorSQL  = "<div style='display:table-cell; vertical-align:middle; text-align:center'>";
           $msgErrorSQL .= "<img src='images/DB-conexion-error.png'><br />";
           $msgErrorSQL .= "La Conexión SQL Server no se pudo establecer.<br />";
           $msgErrorSQL .= "Informe al Administrador del Sistema. <br />";
           $msgErrorSQL .= "Failed to get DB handle: " . $e->getMessage() . "\n";
           $msgErrorSQL .= "</div></br>";
  	echo $msgErrorSQL;
                  exit;    
    }
    return $conexion;
  	}



}
  /* ================================ foreach para saber que drivers estan activos ===========================*/
  /*foreach(PDO::getAvailableDrivers() as $driver) {
    echo $driver.'<br />';
  }*/

  ?>

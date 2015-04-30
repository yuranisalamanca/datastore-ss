<?php 
	$host = "localhost";
	$db_name = "datastoress";
	$username = "jy_user";
	$password = "datastoress";

	try {
    	$conexion = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
	}
  
	catch(PDOException $exception){
    	echo "Connection error: " . $exception->getMessage();
	}
 ?>
<?php 
	/**
	* 
	*/
	class Users {
		
		function getUsers(){
			include 'lib/db_connect.php';
			$query = "SELECT * from users";
			$result = $conexion->query($query);	
			return $result;
		}
	}
	
 ?>
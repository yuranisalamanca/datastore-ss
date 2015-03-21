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

		function getAutentificacion($usuario, $contrasenia){
			include 'lib/db_connect.php';
			$query = "SELECT * FROM users WHERE usuario = ?, contraseña = ?";
			$result = $conexion->prepare($query);
			$result->bindParam(1, $usuario);
			$result->bindParam(2, $contrasenia);
			$result->execute();
			if($row = fetch_array($result)){
				
			}
		}
	}
	
 ?>
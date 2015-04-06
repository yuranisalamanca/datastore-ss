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

		function login($usuario, $contrasenia){
			include 'lib/db_connect.php';
			$query = "SELECT * FROM users WHERE usuario = ? AND contrasenia = ?";
			$result = $conexion->prepare($query);
			$result->bindParam(1, $usuario);
			$result->bindParam(2, $contrasenia);
			$result->execute();
			$resultado = $result->fetchAll();

			if($resultado!=null){
				foreach ($resultado as $fila) {
					SESSION_START();
					$_SESSION['nombre']= $fila['nombre'];
					$_SESSION['apellido'] = $fila['apellido'];
					$_SESSION['clavedropbox'] = $fila['clave_dropbox'];
					$_SESSION['clavedrive'] = $fila['clave_drive'];
					$_SESSION['clavemega'] = $fila['clave_mega'];
					echo $fila['nombre'];
				}	
				return true;						
			}
			else{
				return false;
			}
		}

		function logout(){
			include 'lib/db_connect.php';
			SESSION_START();
			//Borra los datos que hay en las variables de sesion
			SESSION_UNSET();
			//Destruye las variables de sesion
			SESSION_DESTROY();
		}
	}
	
 ?>
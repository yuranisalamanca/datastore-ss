<?php 

	include_once ("lib/users.php");
	$usuario =  new Users();	
	$result = $usuario->getUsers();
	//Iniciamos crando la parte superior de la tabla.
	$html= "<tr>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Email dropbox</td>
				<td>Contraseña dropbox</td>
				<td>Email drive</td>
				<td>Contraseña drive</td>
				<td>Email mega</td>
				<td>Contraseña mega</td>
			</tr>";
	//  con este foreach se recorren las filas retornadas con la consulta de los usuarios.
	foreach ($result as $row) {
		$html.= "<tr>";
		$html.= "<td>".$row["nombre"]."</td>";
		$html.= "<td>".$row["apellido"]."</td>";
		$html.= "<td>".$row["email_dropbox"]."</td>";
		$html.= "<td>".$row["contrasenia_dropbox"]."</td>";
		$html.= "<td>".$row["email_drive"]."</td>";
		$html.= "<td>".$row["contrasenia_drive"]."</td>";
		$html.= "<td>".$row["email_mega"]."</td>";
		$html.= "<td>".$row["contrasenia_mega"]."</td>";
		$html.= "</tr>";
	}
	echo $html;
?>


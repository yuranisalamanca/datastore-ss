<?php 
	include_once ("lib/users.php");
	$usuario =  new Users();	
	$username = $_POST['username'];
	$password = $_POST['password'];
	$result = $usuario->login($username,$password);


	if(!$result){
		echo "<script>alert('Por favor verifique sus datos')</script>";
	}else{
		header('Location: ../views/principal1.php');
	}

 ?>
<?php 
	include_once ("lib/users.php");
	$usuario =  new Users();
	$usuario->logout();
	header('Location: ../views/index.html');

 ?>
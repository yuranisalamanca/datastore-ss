<?php 
	session_start();
	
	require_once "Dropbox/autoload.php";
	use \Dropbox as dbx;
	
	$appInfo = dbx\AppInfo::loadFromJsonFile("./app-info.json");
   	$clientIdentifier = "Datastoress";
   	$redirectUri = "http://localhost:8090/Datastoress/php/recibir.php";
   	$csrfTokenStore = new dbx\ArrayEntryStore($_SESSION, 'token');
   	$getWebAuth = new dbx\WebAuth($appInfo, $clientIdentifier, $redirectUri, $csrfTokenStore, null);

   	$_SESSION['WebAuth'] = $getWebAuth;
   	$authorizeUrl = $getWebAuth->start();
	header("Location: $authorizeUrl");
 ?>
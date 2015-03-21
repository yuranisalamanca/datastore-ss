<?php 
	require_once "Dropbox/autoload.php";
	use \Dropbox as dbx;

$appInfo = dbx\AppInfo::loadFromJsonFile("app-info.json");
$webAuth = new dbx\WebAuthNoRedirect($appInfo, "Datastoress");
$authorizeUrl = $webAuth->start();

//echo "1. Go to: " . $authorizeUrl . "\n";
//echo "2. Click \"Allow\" (you might have to log in first).\n";
//echo "3. Copy the authorization code.\n";
//$authCode = \trim(\readline("Enter the authorization code here: "));
$authorizeUrl = $authorizeUrl."&redirect_uri=http://localhost/Datastoress/php/recibir.php";
//$authorizeUrl = $authorizeUrl;
header("Location: ".$authorizeUrl);
/*
list($accessToken, $dropboxUserId) = $webAuth->finish("S776D67kj0QAAAAAAACH5xXqsljtLP_W4vOgR5kS4Wk");
print "Access Token: " . $accessToken . "\n";

$dbxClient = new dbx\Client($accessToken, "Datastoress");
$accountInfo = $dbxClient->getAccountInfo();
print_r($accountInfo);*/
?>
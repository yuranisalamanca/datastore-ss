<?php 
	require_once "Dropbox/autoload.php";
	use \Dropbox as dbx;

$appInfo = dbx\AppInfo::loadFromJsonFile("app-info.json");
$webAuth = new dbx\WebAuthNoRedirect($appInfo, "Datastoress");
$authorizeUrl = $webAuth->start();

echo "1. Go to: " . $authorizeUrl . "\n";
//echo "2. Click \"Allow\" (you might have to log in first).\n";
//echo "3. Copy the authorization code.\n";
//$authCode = \trim(\readline("Enter the authorization code here: "));

/* curl_init(): inicializar una sesión cURL*/
header("Location: ".$authorizeUrl);

/*$ch = curl_init($authorizeUrl);
$userAgent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; .NET CLR 1.1.4322)';
// add useragent 

/*curl_setopt — Configura una opción para una transferencia cURL
curl_setopt($ch, CURLOPT_USERAGENT, $userAgent);
/* CURLOPT_RETURNTRANSFER retorna la transferencia como un string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
/*curl_exec — Establece una sesión cURL
$output = curl_exec($ch);
*/

list($accessToken, $dropboxUserId) = $webAuth->finish("5hHUtrKVeowAAAAAAAAO1xYxpMu2NKBTfJQzYX2r_ec");
print "Access Token: " . $accessToken . "\n";

$dbxClient = new dbx\Client($accessToken, "Datastoress");
$accountInfo = $dbxClient->getAccountInfo();
print_r($accountInfo);
?>
<?php 
require_once "dropbox-sdk/Dropbox/autoload.php";
use \Dropbox as dbx;
//use \Dropbox as dbx;
SESSION_START();
/*

$appInfo = $_SESSION['appInfo'];
$webAuth = $_SESSION['webAuth'];
//$appInfo = dbx\AppInfo::loadFromJsonFile("dropbox-sdk/app-info.json");
//$webAuth = new dbx\WebAuthNoRedirect($appInfo, "Datastoress");
print_r($_GET["code"]);

$codigo = $_GET["code"]."";

list($accessToken, $dropboxUserId) = $webAuth->finish($codigo."");
print "Access Token: " . $accessToken . "\n";

*/
$getWebAuth = $_SESSION['WebAuth'];
try {
   list($accessToken, $userId, $urlState) = $getWebAuth->finish($_GET);
   assert($urlState === null);  // Since we didn't pass anything in start()
}
catch (dbx\WebAuthException_BadRequest $ex) {
   error_log("/dropbox-auth-finish: bad request: " . $ex->getMessage());
   // Respond with an HTTP 400 and display error page...
}
catch (dbx\WebAuthException_BadState $ex) {
   // Auth session expired.  Restart the auth process.
   header('Location: /dropbox-auth-start');
}
catch (dbx\WebAuthException_Csrf $ex) {
   error_log("/dropbox-auth-finish: CSRF mismatch: " . $ex->getMessage());
   // Respond with HTTP 403 and display error page...
}
catch (dbx\WebAuthException_NotApproved $ex) {
   error_log("/dropbox-auth-finish: not approved: " . $ex->getMessage());
}
catch (dbx\WebAuthException_Provider $ex) {
   error_log("/dropbox-auth-finish: error redirect from Dropbox: " . $ex->getMessage());
}
catch (dbx\Exception $ex) {
   error_log("/dropbox-auth-finish: error communicating with Dropbox API: " . $ex->getMessage());
}

$dbxClient = new dbx\Client($accessToken, "Datastoress");
$accountInfo = $dbxClient->getAccountInfo();
print_r($accountInfo);

echo "<br>";
echo "<br>";
echo "<br>";

$metaData = $dbxClient->getMetadataWithChildren("/");
//print_r($metaData['contents']);

//foreach($metaData as $file){
//   print_r($file['path']);
//}

foreach ($metaData['contents'] as $key => $value) {
   
   foreach ($value as $llave => $valor) {
      if ($llave=='is_dir' && $valor == 1) {
         $metaData2 = $dbxClient->getMetadataWithChildren($value['path']);
         foreach ($metaData2['contents'] as $key2 => $value2) {
            print_r($value2['path']);
            echo "<br>";
         }
      }
   }
   print_r($value['path']);
   echo "<br>";
}

?>
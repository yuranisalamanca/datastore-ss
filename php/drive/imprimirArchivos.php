<?php 
session_start();
$url_array = explode('?', 'http://'.$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI']);
$url = $url_array[0];
require_once 'google-api-php-client/src/Google_Client.php';
require_once 'google-api-php-client/src/contrib/Google_DriveService.php';

$client = new Google_Client();
$client->setClientId('939632221621-12nef07kiggh62irqgcgf6u4glp37cur.apps.googleusercontent.com');
$client->setClientSecret('NSKrnnvoG5KERS_9BLZZCAEt');
$client->setRedirectUri($url);
$client->setScopes(array('https://www.googleapis.com/auth/drive'));

if (isset($_GET['code'])) {
    //print_r($_GET['code']);
    $_SESSION['accessToken'] = $client->authenticate($_GET['code']);
//    header('location:'.$url);exit;
} elseif (!isset($_SESSION['accessToken'])) {
    $client->authenticate();
}
print_r($_SESSION['accessToken']);
$client->setAccessToken($_SESSION['accessToken']);
$service = new Google_DriveService($client);


  $result = array();
  $pageToken = NULL;

  do {
    try {
      $parameters = array();
      if ($pageToken) {
        $parameters['pageToken'] = $pageToken;
      }
      $files = $service->files->listFiles($parameters);
      print_r($files->getItems());
      $result = array_merge($result, $files->getItems());
      $pageToken = $files->getNextPageToken();
    } catch (Exception $e) {
      print "An error occurred: " . $e->getMessage();
      $pageToken = NULL;
    }
  } while ($pageToken);
//print_r(expression)

 ?>

 <!DOCTYPE html>
<html lang="es">
  <head>
        <meta charset="UTF-8">
        <title>Google Drive Example App</title>
    </head>
    <body>
        <ul>
            <?php foreach ($result as $file) { ?>
            <li><?php echo $file; ?></li>
            <?php } ?>
        </ul>
        <form method="post" action="<?php echo $url; ?>">
            <input type="submit" value="enviar" name="submit">
        </form>
    </body>
</html>
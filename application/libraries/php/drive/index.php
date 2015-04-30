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

//print_r($_SESSION['accessToken']);

$files= array();
$dir = dir('files');
while ($file = $dir->read()) {
    if ($file != '.' && $file != '..') {
        $files[] = $file;
    }
}
print_r($files);
$dir->close();
echo "chao";
if (!empty($_POST)) {
    $client->setAccessToken($_SESSION['accessToken']);
    $service = new Google_DriveService($client);
    $finfo = finfo_open(FILEINFO_MIME_TYPE);
    echo 'hola';
    print_r($finfo);
    $file = new Google_DriveFile();
    foreach ($files as $file_name) {
        $file_path = 'files/'.$file_name;
        $mime_type = finfo_file($finfo, $file_path);
        $file->setTitle($file_name);
        $file->setDescription('This is a '.$mime_type.' document');
        $file->setMimeType($mime_type);
        $service->files->insert(
            $file,
            array(
                'data' => file_get_contents($file_path),
                'mimeType' => $mime_type
            )
        );
    }
    finfo_close($finfo);

    header('location:'.$url);exit;
}
include 'main.php';

<?php 
	/**
	* 	
	*/
	class DriveModel extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		public function autentificar(){
			session_start();
			$url_array = explode('?', 'http://'.$_SERVER ['HTTP_HOST'].$_SERVER['REQUEST_URI']);
			$url = $url_array[0];
			require_once '../libraries/drive/google-api-php-client/src/Google_Client.php';
			require_once '../libraries/drive/google-api-php-client/src/contrib/Google_DriveService.php';
			$client = new Google_Client();
			$client->setClientId('939632221621-12nef07kiggh62irqgcgf6u4glp37cur.apps.googleusercontent.com');
			$client->setClientSecret('NSKrnnvoG5KERS_9BLZZCAEt');
			$client->setRedirectUri($url);
			$client->setScopes(array('https://www.googleapis.com/auth/drive'));
			$service = new Google_DriveService($client);

			if (isset($_GET['code'])) {
			    //print_r($_GET['code']);
			    $_SESSION['accessToken'] = $client->authenticate($_GET['code']);
			//    header('location:'.$url);exit;
			} elseif (!isset($_SESSION['accessToken'])) {
			    $client->authenticate();
			}

			$client->setAccessToken($_SESSION['accessToken']);

			return $service;
		}

		public function cargarArchivos($service){
			$result = array();
		 	$pageToken = NULL;

		 // do {
			try {
			      $parameters = array();
			      if ($pageToken) {
			        $parameters['pageToken'] = $pageToken;
			      }
			      $files = $service->files->listFiles($parameters);
			      print_r(sizeof($files["items"]));
			      //print_r($files);
			      $result = array_merge($result, $files["items"]);
			      $_SESSION['result'] = $result;
			        foreach ($result as $value) {
			          echo $value["title"];
			          echo "<br>";
			        }
			      //$pageToken = $files->getNextPageToken();
			    } catch (Exception $e) {
			      print "An error occurred: " . $e->getMessage();
			      //$pageToken = NULL;
			    }
		}
	}
 ?>
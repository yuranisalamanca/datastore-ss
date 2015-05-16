<?php 
	require_once "/application/libraries/dropbox-sdk/Dropbox/autoload.php";
	use \Dropbox as dbx;
	/**
	* 
	*/
	class Usuario extends CI_Controller
	{
		private $dbxClient = null;

		function __construct()
		{
			parent::__construct();
		}

		public function login(){
			$this->load->model('usuarioModel');
			if($this->input->post('username')!=null && $this->input->post('password')!=null){
				$username=$this->input->post('username');
				$password=$this->input->post('password');
				$usuario=$this->usuarioModel->login($username, $password);
				
				if($usuario!=null){
					//$this->load->model('dropboxModel');
					//$this->dropboxModel->autentificar();
					$this->load->view('header');
					$this->load->view('principal1');
					$this->load->view('footer');		
				}else{
					$_POST['mensajeerror'] = "Por favor verifique la contrase&ntilde;a o el nombre de usuario";
					
					$this->load->view('header');
					$this->load->view('index');
					$this->load->view('footer');

				}
			}
		}

		public function recuperar(){
			$this->load->model('usuarioModel');
			if($this->input->post('email')!=null){
				$email = $this->input->post('email');
				$usuario=$this->usuarioModel->recuperar($email);
				if($usuario!=null){
					$this->load->library('email');
					/*$config['protocol'] = 'smtp';
					$config["smtp_host"] = 'smtp.gmail.com';
					$config["smtp_user"] = 'yuranisalamanca@gmail.com';
					$config["smtp_pass"] = '';
					$config['charset'] = 'utf-8';
					$config['wordwrap'] = TRUE;

					$config['validate'] = true;
					$this->email->initialize($config);*/



					$this->email->from('alejas_024@hotmail.com', 'Datastoress');
					$this->email->to($usuario->email);  

					$this->email->subject('Correo de Prueba');
					$this->email->message('Probando la clase email');	

					$this->email->send();
					echo $this->email->print_debugger();


					$_POST['recuperar'] = "Los datos se han enviado al correo".$usuario->email;
					$this->load->view('header');
					$this->load->view('recuperar');
					$this->load->view('footer');
				}else{
					$_POST['recuperar'] = "El correo electronico no existe";

					$this->load->view('header');
					$this->load->view('recuperar');
					$this->load->view('footer');

				}
			}
		}

		public function logout(){
			setcookie("val","",time()-3600,"/");
			//$this->load->view('header');
			//$this->load->view('index');
			//$this->load->view('footer');
			redirect('', 'refresh');
		}

		public function createUser(){
			$this->load->model('usuarioModel');
			if($this->input->post('nombreU')!=null && $this->input->post('apellidoU')!=null
				&&$this->input->post('correoU')!=null && $this->input->post('usuarioU')!=null
				&&$this->input->post('contraseniaU')!=null && $this->input->post('contraseniaConfirmU')!=null){
				$contrasenia = $this->input->post('contraseniaU');
				$confirmar = $this->input->post('contraseniaConfirmU');
				if($contrasenia == $confirmar){
					$nombre  = $this->input->post('nombreU');
					$apellido = $this->input->post('apellidoU');
					$email = $this->input->post('correoU');
					$usuario = $this->input->post('contraseniaU');
					$usuario=$this->usuarioModel->createUser($nombre, $apellido,$email,$usuario,$contrasenia);
					if($usuario!=null){

					$_POST['exitoAgregar'] = "El usuario se ha agregado satisfactoriamente";
					
					

					}

				}
				else{
					//TO DO exception
				}
			}

		}

		public function imprimir()
		{
			$this->load->model('megaModel');
			$mega = $this->megaModel->imprimir();
		}

		public function imprimirDropbox()
		{
			$this->load->model('dropboxModel');
			$this->dropboxModel->autentificar();
		}

		public function recibirDropbox()
		{
			SESSION_START();
			
			$getWebAuth = $_SESSION['WebAuth'];
			//print_r($getWebAuth);
			//echo "<br>";
			try {
				//print_r($_GET);
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

			$this->dbxClient = new dbx\Client($accessToken, "Datastoress");
			$_SESSION['dbxClient'] = $this->dbxClient;
			//setcookie("val[dbxClient]", $this->dbxClient);
			$accountInfo = $this->dbxClient->getAccountInfo();
			print_r($accountInfo);

			echo "<br>";
			echo "<br>";
			echo "<br>";

			$metaData = $this->dbxClient->getMetadataWithChildren("/");
			//print_r($metaData['contents']);

			//foreach($metaData as $file){
			//   print_r($file['path']);
			//}

			foreach ($metaData['contents'] as $key => $value) {
			   
			  // foreach ($value as $llave => $valor) {
			  //    if ($llave=='is_dir' && $valor == 1) {
			  //       $metaData2 = $dbxClient->getMetadataWithChildren($value['path']);
			  //       foreach ($metaData2['contents'] as $key2 => $value2) {
			  //          print_r($value2['path']);
			  //          echo "<br>";
			  //       }
			   //   }
			   //}
			   print_r($value['path']);
			   echo "<br>";
			}
		}

		public function descargar()
		{
			SESSION_START();
			print_r($_SESSION['dbxClient']);
			$this->dbxClient = $_SESSION['dbxClient'];
			$f = fopen("C:\Comenzar.pdf", "w+b");

			$fileMetadata = $this->dbxClient->getFile("/Comenzar.pdf", $f);
			fclose($f);
			print_r($fileMetadata);
		}
	}
 ?>
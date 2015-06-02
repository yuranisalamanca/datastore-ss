<?php 
	//require_once "/application/libraries/dropbox-sdk/Dropbox/autoload.php";
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
					$this->email->from('info@datastoress.esy.es', 'Datastoress');
					$this->email->to($usuario->email);  

					$this->email->subject('Recuperacion de contraseña');
					$this->email->message('Hola '.$usuario->usuario.', su contraseña es: '.$usuario->contrasenia);	
					$this->email->send();

					$mensaje['estado']='success';
					$mensaje['mensaje']='Los datos se han enviado al correo '.$usuario->email;
				}else{
					$mensaje['estado']='error';
					$mensaje['errores']='El correo electronico ingresado no existe';
				}
				echo json_encode($mensaje);
			}
		}

		public function logout(){
			setcookie("val","",time()-3600,"/");
			//$this->load->view('header');
			//$this->load->view('index');
			//$this->load->view('footer');
			redirect('', 'refresh');
		}

		/*
			Funcion que permite al usuario cambiar la contraseña de su cuenta Datastores'SS
		*/
		public function cambiar(){
			$this->load->model('usuarioModel');
			if($this->input->post('email')!=null && $this->input->post('password')!=null
				&&$this->input->post('passwordnew')!=null && $this->input->post('passwordcheck')!=null){
				$passwordnew = $this->input->post('passwordnew');
				$passwordcheck = $this->input->post('passwordcheck');
				$mensaje['estado'] =  "error";
				
				if($passwordnew!=$passwordcheck){
					$mensaje['errores']= 'Verifique la nueva contraseña';
				}else{
					$email=$this->input->post('email');
					$passwordActual = $this->input->post('password');
					$usuario=$this->usuarioModel->cambiarContrasenia($email,$passwordActual,$passwordnew);
					if($usuario == null){
						$mensaje['errores'] = 'El email o la contraseña actual no son validos';
					}else{
						$mensaje['estado'] = "success";
						$mensaje['mensaje'] = "Su contraseña se ha cambiado exitosamente";
					}
				}
				echo json_encode($mensaje);
			}
		}

		/*
			Funcion que permite crear la informacion general de una cuenta Datastore'SS
		*/
		public function createuser(){
			$this->load->model('usuarioModel');
			if($this->input->post('nombreU')!=null && $this->input->post('apellidoU')!=null
				&&$this->input->post('correoU')!=null && $this->input->post('usuarioU')!=null
				&&$this->input->post('contraseniaU')!=null && $this->input->post('contraseniaConfirmU')!=null){
					
					$contrasenia = $this->input->post('contraseniaU');
					$confirmar = $this->input->post('contraseniaConfirmU');
					$email = $this->input->post('correoU');
					$usuario = $this->input->post('usuarioU');

					$mensaje['estado'] =  "error";
					
					$usuarioMail=$this->usuarioModel->recuperar($email);
					$usuarioNick=$this->usuarioModel->searchUserByUsername($usuario);

					if($usuarioMail== null){
						if($usuarioNick == null){
							if($contrasenia!=$confirmar){
								$mensaje['errores']= 'Verifique la nueva contraseña';
							}else{					
								$nombre  = $this->input->post('nombreU');
								$apellido = $this->input->post('apellidoU');
								

								SESSION_START();
								$_SESSION['email'] = $email;

								$usuario=$this->usuarioModel->createuser($nombre, $apellido,$email,$usuario,$contrasenia);
								
								if($usuario==null){
									$mensaje['errores']= 'No se pudo agregar el usuario';
								}else{
									$mensaje['estado'] =  "success";
									$mensaje['mensaje'] ="El usuario se agrego exitosamente";
								}
							}
						}else{
							$mensaje['estado'] =  "error";
							$mensaje['errores'] =  "El nick ingresado ya existe";
							//El nick ingresado ya existe		
						}
					}else{
						$mensaje['errores'] =  "El correo ingresado ya existe";
					}	
					echo json_encode($mensaje);				
			}

		}

		public function agregarDropbox(){
			$this->load->model('usuarioModel');
			if($this->input->post('nombreU')!=null && $this->input->post('apellidoU')!=null
				&&$this->input->post('correoU')!=null && $this->input->post('usuarioU')!=null
				&&$this->input->post('contraseniaU')!=null && $this->input->post('contraseniaConfirmU')!=null){
					
					$contrasenia = $this->input->post('contraseniaU');
					$confirmar = $this->input->post('contraseniaConfirmU');
					$mensaje['estado'] =  "error";
					
					if($contrasenia!=$confirmar){
						$mensaje['errores']= 'Verifique la nueva contraseña';
					}else{					
						$nombre  = $this->input->post('nombreU');
						$apellido = $this->input->post('apellidoU');
						$email = $this->input->post('correoU');
						$usuario = $this->input->post('contraseniaU');

						SESSION_START();
						$_SESSION['email'] = $email;

						$usuario=$this->usuarioModel->createUser($nombre, $apellido,$email,$usuario,$contrasenia);
						


						if($usuario==null){
							//TODO - No se pudo agregar el usuario				
						}else{
							//TODO- El usuario se agrego exitosamente
						}
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
			print_r($accessToken);
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

		public function cliente()
		{
			$this->dbxClient = new dbx\Client("S776D67kj0QAAAAAAACYfYHv93fohJ2b0pNXs2O_ofCs4Ky2AcYLA3U51ulCv2Sl", "Datastoress");
			$accountInfo = $this->dbxClient->getAccountInfo();
			print_r($accountInfo);
		}
	}
 ?>
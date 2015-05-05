<?php 
	/**
	* 
	*/
	class Usuario extends CI_Controller
	{
		
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
				}else{
					$_POST['mensajeerror'] = "Por favor verifique la contrase&ntilde;a o el nombre de usuario";
					
					$this->load->view('header');
					$this->load->view('index');
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
	}
 ?>
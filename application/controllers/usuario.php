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
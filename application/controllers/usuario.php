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
				if($usuario){
					$this->load->view('header');
					$this->load->view('principal1');
				}
			}
			
		}

		public function logout(){
			setcookie("val","",time()-3600,"/");
			$this->load->view('header');
			$this->load->view('index');
			$this->load->view('footer');

		}
	}
 ?>
<?php 
	/**
	* 
	*/
	class UsuarioController extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function login(){
			$this->load->model('usuario');

			if($this->input->post('username')!=null && $this->input->post('password')!=null){
				$username=$this->input->post('username');
				$password=$this->input->post('password');
				$usuario=$this->usuario->login($username, $password);
			}
			
		}
	}
 ?>
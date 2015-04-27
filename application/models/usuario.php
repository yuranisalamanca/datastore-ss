<?php 
	/**
	* 
	*/
	class Usuario extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
	}

	public function login ($usuario, $contrasenia){
		//$query = "SELECT * FROM users WHERE usuario = ? AND contrasenia = ?";
		//$this->db->query($query, array($usuario, $contrasenia));

		$query = $this->db->get_where('users', array('usuario'=>$usuario, 'contrasenia'=>$contrasenia));
		if($query->num_rows>0){
			$arreglo = array();
			$cont++;
			foreach ($query->result() as $row) {
				$arreglo[$cont]['nombre'] = $row->nombre;
				$arreglo[$cont]['apellido']= $row->apellido;
				$arreglo[$cont]['clavedropbox'] = $row->clave_dropbox;
				$arreglo[$cont]['clavedrive'] = $row->clave_drive;
				$arreglo[$cont]['clavemega'] = $row->clave_mega;
				$cont++;
			}
			return true;

			setcookie("chsm", "logedin", time()+3600, "/", "localhost");
			header("Location: /Chat");
			exit;
			} else {
				echo "login fallido";
				$this->cargarVista("index");
			
		}
		return false;
	}
 ?>
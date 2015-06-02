<?php 
	/**
	* 
	*/
	class UsuarioModel extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
	

	public function login ($usuario, $contrasenia){
		//$query = "SELECT * FROM users WHERE usuario = ? AND contrasenia = ?";
		//$this->db->query($query, array($usuario, $contrasenia));

		$query = $this->db->get_where('users', array('usuario'=>$usuario, 'contrasenia'=>$contrasenia));
		if($query->num_rows>0){
			$row = $query->row();
			setcookie("val[name]", $row->nombre);
			setcookie("val[apellido]",$row->apellido);
			setcookie("val[clavedropbox]", $row->clave_dropbox);
			setcookie("val[clavedrive]", $row->clave_drive);
			setcookie("val[clavemega]", $row->clave_mega);
			return true;
			} else {
				return false;
			
		}
	}

	public function recuperar($email){
		$query = $this->db->get_where('users', array('email' => $email));
		if($query->num_rows>0){
			$row = $query->row();
			return $row;
		}else{
			return false;
		}
	}

	public function createUser($nombre, $apellido, $email, $usuario, $contrasenia){
		$data = array(
			'nombre'=>$nombre,
			'apellido'=>$apellido,
			'email'=>$email,
			'usuario'=>$usuario,
			'contrasenia'=>$contrasenia
			);
		return $this->db->insert('users',$data);
	}

	
	
	}
 ?>
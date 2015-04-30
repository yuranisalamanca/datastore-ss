<?php

	//echo getcwd();
	require_once '/application/libraries/mega/lib/mega.class.php';
	/**
	 * 
	 */
	 class MegaModel extends CI_Model
	 {
	 	
	 	private $mega = null;

	 	function __construct()
	 	{
	 		parent::__construct();
	 		$this->mega = new Mega();
	 		$this->load->database();
	 	}

	 	public function imprimir()
	 	{
	 		$mega = new Mega();
			$mega->user_login_session("jdsernae@gmail.com", "zmxncbv");
	 		//$mega = MEGA::create_from_user("jdsernae@gmail.com", "zmxncbv");

			//$files = $mega->node_list();
			//print_r($files);z
			//print_r($files['f'][4]['a']['n']);

			// Get file info
			//$file_info = $mega->node_file_info($files['f'][4]);

			//$file = api_req(array('a' => 'f', 'c' => 1));
			//print_r($file);
			//print_r($file_info);
	 	}
	 } 
 ?>
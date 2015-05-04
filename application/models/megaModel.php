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

			$files = $mega->node_list();
			//print_r($files);
			//print_r($files['f'][3]['a']['n']);
			//print_r($files['f'][4]['a']['n']);
			print_r($files['f'][3]);

			// Get file info
			//$file_info = $mega->node_file_info($files['f'][4]);
			$cont = 0;
			/*foreach ($files['f'][$cont] as $key => $value) {
				//print_r($key);
				//echo "<br><br>";
				//print_r($value);
				if ($key == 'a' ) {
					print_r($files['f'][$cont][$key]['n']);
				}
				$cont++;
			}*/
			//$file = api_req(array('a' => 'f', 'c' => 1));
			//print_r($file);
			echo "<br><br>";
			//print_r($file_info);
	 	}
	 } 
 ?>
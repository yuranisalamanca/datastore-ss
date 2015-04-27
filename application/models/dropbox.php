<?php 
	/**
	* 
	*/
	class Dropbox extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
	}

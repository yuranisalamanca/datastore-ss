<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('header');
		$this->load->view('index');
		$this->load->view('footer');
	}
	public function cuenta()
	{
		//$this->load->view('header');
		$this->load->view('cuenta');
		//$this->load->view('footer');

	}
	public function drive(){
		$this->load->view('cuentaDrive');
	}
	public function dropbox(){
		$this->load->view('cuentaDropbox');
	}
	public function mega(){
		$this->load->view('cuentaMega');
	}
	public function recuperar(){
		$this->load->view('recuperar');
	}
	public function cambiar(){
		$this->load->view('cambiar');
	}
	public function principal()
	{
		$this->load->view('header');
		$this->load->view('principal1');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
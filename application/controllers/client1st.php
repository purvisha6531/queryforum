<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class client1st extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 public function __construct() {
        parent::__construct();
        $this->load->library('session');
    }
	public function index()
	{
		$this->load->helper('url');
		$this->load->library('session');
		
		$this->load->view('client1st');
	}
	
	public function logout()
		{
			$this->load->helper("form");
	;
			$this->load->helper('url');
		$this->load->library('session');
		$this->session->sess_destroy();
		//$this->load->library('../controllers/Welcome');
		//$this->Welcome->index();
	//$this->load->view('Home');
			//$this->load->view('Home');
		redirect(‘view/home’);
			
		
		}
}

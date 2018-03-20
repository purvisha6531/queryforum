<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Changepassword extends CI_Controller {

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
	public function index()
	{
		$this->load->helper('url');
			$this->load->library('session');
			$this->load->helper("form");
		
		$this->load->model('M_Changepassword');
	
		
		$this->load->view('Changepassword');
	}
	public function password()
	{
		$this->load->helper('url');
			$this->load->library('session');
			$this->load->helper("form");
		
		
		$cpass=$this->input->post("cpass");
		$npass=$this->input->post("npass");
		$rpass=$this->input->post("rpass");
		

			
		$data["valid"]="";
		$this->load->model('M_Changepassword');
	
$res = $this->M_Changepassword->pass($cpass);
		
		if($res == 1){
			 $this->M_Changepassword->ChangePass($npass);
		$data["valid"]="Password Updated";	
		}
		else{
				$data["valid"]="Invalid Current Password.";	
		}
		
		
		
	//	$data['ProjectId'] = $projectid;
	
		
		
		$this->load->view('Changepassword',$data);
		
		
		
	}
}

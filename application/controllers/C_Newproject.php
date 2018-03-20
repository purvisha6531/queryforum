<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Newproject extends CI_Controller {

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
		$this->load->helper("form");
		$this->load->library('session');
		
		
		 //$this->session->set_userdata('username','purvisha');
		
		
		$this->load->model('M_Newproject');
		
		$resClient = $this->M_Newproject->getClientDetail($this->session->userdata('username'));
	     $data['qry2'] = $resClient;
		
		$data['qry']=$this->M_Newproject->loadlanguage();

		$data['qry1']=$this->M_Newproject->getnum();
		$this->load->view('Newproject',$data);
		
		

		
	
	}
	public function project()
	{
		$projectid=$this->input->post("projectid");
		$projecttile=$this->input->post("projecttitle");
		$logourl=$this->input->post("logourl");
		$clientid=$this->input->post("clientid");
		$languageid=$this->input->post("languageid");
		$project=$this->input->post("project");
		$requestdate=$this->input->post("requestdate");
		
	
		
		$this->load->model('M_Newproject');
		
	//	$data['ProjectId'] = $projectid;
		$data['ProjectTitle'] = $projecttile;
		$data['LogoURL'] =  $logourl;
		$data['ClientId'] = $clientid;
		$data['LanguageId'] = $languageid;
		$data['ProjectDetail']=$project;
		$data['StartDate']="";
		$data['EndDate']="";
		$data['RequestDate'] = $requestdate;
		$data['Status'] = "-1";
		
		
		
	
$res = $this->M_Newproject->newproject($data);
		
	
				$data["valid"]="Inserted";
					
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->view('client1st',$data);
		
	}
	
	
	public function unset_session_data() { 
         //loading session library
         $this->load->library('session');
			
         //removing session data 
         $this->session->unset_userdata('username'); 
         $this->load->view('client1st'); 
      } 
	 
	  
	  
	
}

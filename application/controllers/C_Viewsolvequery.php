<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Viewsolvequery extends CI_Controller {

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
		$this->load->helper("form");
		$this->load->helper('url');
		$this->load->library('session');
		//$this->load->view('Viewsolvequery');
		$this->load->model('M_Viewsolvequery');
		
		$data['qry1']=$this->M_Viewsolvequery->project();
		$data['d']=$this->M_Viewsolvequery->displaydata(); 
		 
		//$data['qry']=$this->M_Viewstatus->loadlanguage();
				
		$this->load->view('Viewsolvequery',$data);
	}
	
	public function project()
	{
		$this->load->helper("form");
		$this->load->helper('url');
		$this->load->library('session');
		
		
		
		
		$this->load->model('M_Viewsolvequery');
		$data['qry1']=$this->M_Viewsolvequery->project();
		$data['qry']=$this->M_Viewsolvequery->module();
		$data['question']=$this->M_Viewsolvequery->question();
		$data['d']=$this->M_Viewsolvequery->displaydata(); 
		
	
		//$data['qry']=$this->M_Viewstatus->loadlanguage();
				
		$this->load->view('Viewsolvequery',$data);
	}
	
	
	
	
	
	public function projectModules(){
	$this->load->helper("form");
		$this->load->helper('url');
		$this->load->library('session');
		
		$projectid=$this->input->post("projectid");
		
		$this->load->model('M_Viewsolvequery');
		$data['qry1']=$this->M_Viewsolvequery->project();
		$data['modules']=$this->M_Viewsolvequery->module($projectid);
		//$data['question']=$this->M_Viewsolvequery->question();
			$data['d']=$this->M_Viewsolvequery->displaydata(); 
				
		$this->load->view('Viewsolvequery',$data);
		
	}
	
	public function question(){
		
		$this->load->helper("form");
		$this->load->helper('url');
		$this->load->library('session');

		
		$moduleid=$this->input->post("moduleid");
		
		$this->load->model('M_Viewsolvequery');
		$data['qry1']=$this->M_Viewsolvequery->project();
		//$data['modules']=$this->M_Viewsolvequery->module();
		$data['question']=$this->M_Viewsolvequery->question($moduleid);
		
		$data['d']=$this->M_Viewsolvequery->displaydata(); 
				
		$this->load->view('Viewsolvequery',$data);
		
	}
}

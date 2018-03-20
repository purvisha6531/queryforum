<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Viewmorestatusmore extends CI_Controller {

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
		
		$pid = "";
		if($this->input->get('id')!=null)
		{
		$pid = $this->input->get("id");
		}
		$this->load->model('M_Viewmorestatusmore'); 
		$data['d']=$this->M_Viewmorestatusmore->displaydata($pid); 
		$data['query']=$this->M_Viewmorestatusmore->moduledata($pid);
		$data['q']=$this->M_Viewmorestatusmore->employeedata($pid);
		
				$this->load->view('Viewmorestatusmore',$data);
	}
	
	
	
}


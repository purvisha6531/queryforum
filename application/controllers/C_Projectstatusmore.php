<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_Projectstatusmore extends CI_Controller {

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
		$this->load->model('M_Projectstatusmore'); 
		$data['query']=$this->M_Projectstatusmore->moduledata($pid);
		$data['query1']=$this->M_Projectstatusmore->projectstatus($pid);
		$data['pid'] = $pid ;
		$this->load->view('Projectstatusmore',$data);
	}
	
	
	public function query()
	{
		$sub=$this->input->post("submitid");
		$question=$this->input->post("que");
		$imgurl=$this->input->post("imgurl");
		$date=$this->input->post("date");
		$view=$this->input->post("view");
		
		
		$this->load->model('M_Projectstatusmore');
		
		$data['QuestionId']="";
		$data['SubmitId']=$sub;
		$data['Question'] = $question;
		$data['ImgURL']=$imgurl;
		$data['DateOfQuestion']=$date;
		$data['ViewedCount']=$view;
		
		$res = $this->M_Projectstatusmore->qry($data);
		
		$data["valid"]="Inserted";
					
		$this->load->helper("form");
		$this->load->helper("url");
		$this->load->library('session');
		$this->load->view('client1st',$data);
	}
}

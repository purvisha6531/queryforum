<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_OurProcess extends CI_Controller {

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
		
		$this->load->model("M_Home");
		$data['qry']=$this->M_Home->loadstate();
		$data['qry1']=$this->M_Home->loadcountry();
		$this->load->view('OurProcess',$data);
	}
	
	public function checkValidate()
	{

	$this->load->helper("form");
			$this->load->helper("url");	
			
		$uname = $this->input->post("uname");
		$password=$this->input->post("pass");
		
		$this->load->model('M_Home');
		
		$numUser= $this->M_Home->isValid($uname,$password);
		
		if($numUser == 1)
		{
			// $userType = $this->M_Home->getUserType($uname);
			 $userType = $this->M_Home->getUserType($uname); ;
		//echo  $userType ;
			 if($userType  == 1)
			 {
				 $data["valid"]= "";
		    // $this->load->view('PHPDevlop',$data);
			header("location: ../../web/index.php");
			 }
			 if($userType  == 4)
			 {
				 $data["valid"]= "";
				// echo $uname;
		
			//header("location: ../../web/employee.php?Uname=$uname");
			header("location: ../../web/employee.php?Uname=$uname");
			 }
			if($userType == 2)
			{	 
				$data["valid"]= "";
				$this->load->library('session');
		
		
		 $this->session->set_userdata('username',$uname);
		
		//$this->load->view('client1st',$data);
		header("location: ../client1st/");
		//echo $userType ;
			 }
			
	//secho  $userType ;
				
		}
		else
		{
			$data["valid"]= "User is invalid";
			$this->load->view('AboutUs',$data);
		}
		
	
		
	
		
	}
	
	public function reginsert()
	{
		$name=$this->input->post("name");
		$add=$this->input->post("address");
		$pincode=$this->input->post("pincode");
		$stateid=$this->input->post("stateid");
		$countryid=$this->input->post("countryid");
		$emailid=$this->input->post("email");
		$password=$this->input->post("pass");
		
		
		$this->load->model('M_Home');
		
		
		$data['UserName'] = $emailid;
	    $data['Password'] = $password;
		$data['UserTypeId'] ="2";
		$res = $this->M_Home->InsLogin($data);
		
		unset($data);
		
		
		$this->load->model('M_Home');
		$data['ClientId'] = "";
		$data['Name'] = $name;
		$data['Address'] = $add;
		$data['Pincode'] = $pincode;
		$data['StateId'] = $stateid;
		$data['CountryId'] = $countryid;
		$data['EmailId'] = $emailid;
	    $data['Status'] = "-1";
		
		
		/*$data['ClientId'] = "";
		$data['Name'] = "aaa";
		$data['Address'] = "aa";
		$data['Pincode'] = "222";
		$data['StateId'] = "1";
		$data['CountryId'] ="1";
		$data['EmailId'] = "dd";
		$data['Password'] ="11s";
		$data['Status'] = "-1";*/
		
		$res = $this->M_Home->Valid($data);
		
		
	
				$data["valid"]="Inserted";
					
		$this->load->helper("form");
		$this->load->helper("url");
	$this->load->library('session');
		
		
		 $this->session->set_userdata('username',$emailid);
		
		//$this->load->view('client1st',$data);
		header("location: ../client1st/");
		
	}
}

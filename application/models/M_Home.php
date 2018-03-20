<?php
	
	class M_Home extends CI_Model{
	
		function isValid($u,$p)
		{
			$this->load->database();
			$qry = $this->db->query("select * from login where username='$u' and password='$p'");
			$num = $qry->num_rows();
			return $num;
		}
		function loadstate()
		{
			$this->load->database();
			 return $this->db->query('select * from statemaster');
		}
		function loadcountry()
		{
			$this->load->database();
			 return $this->db->query('select * from countrymaster');
		}
		
		function Valid($data)
		{
		
			$this->load->database();
			$qry = $this->db->insert('clientmaster',$data);
			return $qry;
		}
		function InsLogin($data)
		{
		
			$this->load->database();
	
			$qry1 = $this->db->insert('login',$data);
			return $qry1;
		}
		function getUserType($u){
		$this->load->database();
			$qry = $this->db->query("select UserTypeId from Login where UserName='$u'")->row();
			$num = $qry->UserTypeId;
			return $num;
		}
		
	}

?>
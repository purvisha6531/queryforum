<?php
	
	class M_Newproject extends CI_Model{
	
	
	
	   function getClientDetail($emailid)
		{
			$this->load->database();
			$query = $this->db->query("select * from clientmaster where EmailId='$emailid'");
			return $query; 
		}
	
		function loadlanguage()
		{
			$this->load->database();
			 return $this->db->query('select * from languagemaster');
		}
		function newproject($data)
		{
		
			$this->load->database();
			
			
			$qry = $this->db->insert('projectmaster',$data);
	
			
			return $qry;
		}
		function getnum()
		{
			$this->load->database();
			$qry = $this->db->query("select * from projectmaster");
			$num = $qry->num_rows();
			return $num+1;
		}
		
		
		
		
	}
?>
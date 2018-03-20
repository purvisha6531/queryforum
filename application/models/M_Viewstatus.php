<?php
	
	class M_Viewstatus extends CI_Model{

		 function getClientDetail($name)
		{
			$this->load->database();
			$query = $this->db->query("select * from clientmaster where Name='$name'");
			return $query; 
		}
		function loadlanguage($languageid)
		{
			$this->load->database();
			$query=$this->db->query("select LanguageName from languagemaster where LanguageId='$languageid'");
			return $query;
		}
		
		
		
		function displaydata()
		{
			$this->load->database();
			$query = $this->db->query("select p.ProjectId,p.ProjectTitle,p.LogoURL,L.LanguageName,p.ProjectDetail,p.StartDate,p.EndDate,p.RequestDate,p.Status from projectmaster p inner join languagemaster L on p.LanguageId=L.LanguageId INNER JOIN clientmaster c on c.ClientId=p.ClientId where c.EmailId='".$this->session->userdata('username')."'");
			
		
			
			
			return $query;
		}
		
		
	}
?>

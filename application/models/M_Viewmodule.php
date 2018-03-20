<?php
	
	class M_Viewmodule extends CI_Model{

		
		function displaydata()
		{
			$this->load->database();
			//$query = $this->db->query("select * from modulemaster");
			
			$query= $this->db->query("
select m.ModuleId,m.ModuleName,p.ProjectTitle,m.Detail,m.FlowImgURL,m.UploadURL from modulemaster m INNER join projectmaster p on m.ProjectId=p.ProjectId INNER JOIN clientmaster c on c.ClientId=p.ClientId where c.EmailId='".$this->session->userdata('username')."'");
			return $query;
			
			
			
			
			
			
			
		}
		
		
	}
?>

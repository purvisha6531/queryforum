<?php
	
	class M_Viewmorestatusmore extends CI_Model{

		
		
		function displaydata($id)
		{
			$this->load->database();
			//$query = $this->db->query("select ProjectTitle,ProjectDetail,LanguageId from projectmaster where ProjectId='$id'");
			$query=$this->db->query("	
			select p.ProjectId,p.ProjectTitle,p.ProjectDetail,p.LogoURL,p.StartDate,p.EndDate,p.RequestDate,p.LogoURL,l.LanguageName from projectmaster p INNER join languagemaster l on p.Languageid=l.LanguageId where Projectid='$id'");
					
			return $query;
		}
		
		
		
		function moduledata($id)
		{
			$this->load->database();
			$query=$this->db->query(" select m.ModuleId,m.ModuleName,p.ProjectTitle,m.Detail,m.FlowImgURL,m.UploadURL from modulemaster m INNER join projectmaster p on m.ProjectId=p.ProjectId WHERE p.Projectid='$id'");
			return $query;
		}
		
		
		function employeedata($id)
		{
		$this->load->database();
		$query=$this->db->query("select p.ProjectId,m.ModuleId,p.ProjectTitle,m.ModuleName,e.Employeeid,e.EmployeeName from projectmaster p INNER join modulemaster m on m.Projectid=p.Projectid INNER join projectassignment pa on m.ModuleId=pa.ModuleId INNER join employeemaster e on pa.EmployeeId=e.EmployeeId WHERE p.ProjectId='$id'");
		return $query;
		}
	}
?>

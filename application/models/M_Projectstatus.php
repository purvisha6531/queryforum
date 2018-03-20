<?php
	
	class M_Projectstatus extends CI_Model{
	
	
	
		function displaydata()
		{
			$this->load->database();
			
			$query = $this->db->query("select pr.ProjectId,pr.ProjectTitle, p.ProjectStatusId,p.ProjectStatusName,m.ModuleId,m.ModuleName,e.EmployeeId,e.EmployeeName,p1.DateOfStatus,p1.Msg,p1.Status,p1.Remark from projectstatusdetail p1 inner join projectstatusmaster p on p.ProjectStatusId=p1.ProjectStatusId inner join modulemaster m on m.ModuleId=p1.ModuleId inner join projectmaster pr on pr.ProjectId=m.ProjectId INNER JOIN employeemaster e on e.EmployeeId=p1.EmployeeId inner join clientmaster c on c.ClientId=pr.ClientId where c.EmailID='".$this->session->userdata('username')."'");
			
			return $query;
		}
}
?>
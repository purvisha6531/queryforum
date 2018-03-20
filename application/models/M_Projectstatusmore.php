<?php
	
	class M_Projectstatusmore extends CI_Model{
	
	function moduledata($id)
		{
			$this->load->database();
			$query=$this->db->query(" select m.ModuleId,m.ModuleName,p.ProjectTitle,m.Detail,m.FlowImgURL,m.UploadURL from modulemaster m INNER join projectmaster p on m.ProjectId=p.ProjectId WHERE p.Projectid='$id'");
			return $query;
			
			
			
		}
		
	function projectstatus($id)
	{
		$this->load->database();
		$query=$this->db->query("select p1.submitid,pr.ProjectId,pr.ProjectTitle, p.ProjectStatusId,p.ProjectStatusName,m.ModuleId,m.ModuleName,e.EmployeeId,e.EmployeeName,p1.DateOfStatus,p1.Msg,p1.Status,p1.Remark from projectstatusdetail p1 inner join projectstatusmaster p on p.ProjectStatusId=p1.ProjectStatusId inner join modulemaster m on m.ModuleId=p1.ModuleId INNER JOIN employeemaster e on e.EmployeeId=p1.EmployeeId inner join projectmaster pr on pr.ProjectId=m.ProjectId WHERE pr.Projectid='$id'");
		return $query;
	}
	
	
	function qry($data)
		{
		
			$this->load->database();
			$qry = $this->db->insert('queruforumquestion',$data);
			return $qry;
		}
		
}
?>
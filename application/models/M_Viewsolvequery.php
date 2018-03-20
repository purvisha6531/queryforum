<?php
	
	class M_Viewsolvequery extends CI_Model{

		
		
		function displaydata()
		{
			$this->load->database();
			//$query = $this->db->query("select ProjectTitle,ProjectDetail,LanguageId from projectmaster where ProjectId='$id'");
			$query=$this->db->query("	
			select q.questionid,p.submitid,q.question,q.imgurl,q.dateofquestion,q.ViewedCount,m.moduleid,p.employeeid,m.modulename,pr.projectid,pr.ProjectTitle,c.clientid,pr.clientid,a.answer,a.questionid from queruforumquestion q inner join projectstatusdetail p on p.submitid=q.submitid inner join modulemaster m on m.moduleid=p.moduleid inner join projectmaster pr on m.projectid=pr.projectid inner join queruforumanswer a on a.questionid=q.questionid
			
			inner join clientmaster c on c.clientid=pr.clientid where c.EmailId='".$this->session->userdata('username')."'");
				if($query){
					return $query;
				}	
			
		}
		function project()
		{
			$this->load->database();
			 return $this->db->query('select ProjectId,ProjectTitle from projectmaster');
		}
		function module($id)
		{
			$this->load->database();
			return $this->db->query("select ModuleId,ModuleName from modulemaster where projectid=$id");
		}
		function question($id)
		
		{
			$this->load->database();
			//$query = $this->db->query("select ProjectTitle,ProjectDetail,LanguageId from projectmaster where ProjectId='$id'");
			$query=$this->db->query("
			select q.questionid,p.submitid,q.question,q.imgurl,q.dateofquestion,q.ViewedCount,m.ModuleId,p.employeeid,m.modulename from queruforumquestion q inner join projectstatusdetail p on p.submitid=q.submitid inner join modulemaster m on m.ModuleId=p.moduleid where m.moduleid=$id");
			
			if($query){
					return $query;
				}	
		}
		
		
	}
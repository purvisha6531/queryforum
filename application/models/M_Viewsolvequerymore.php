<?php
	
	class M_Viewsolvequerymore extends CI_Model{

		
		
		function displaydata($id)
		{
			$this->load->database();
			//$query = $this->db->query("select ProjectTitle,ProjectDetail,LanguageId from projectmaster where ProjectId='$id'");
		//	$query=$this->db->query("select Answer from queruforumanswer where QuestionId='$id'");
					
			
			$query=$this->db->query("select a.answerid,q.questionid,q.question,a.answer,a.imgUrl,a.dateofanswer,q.submitid,pr.submitid ,pr.moduleid,m.moduleid,p.projectid,m.projectid,p.projecttitle,m.modulename from queruforumanswer a inner join queruforumquestion q on q.questionid=a.questionid inner join projectstatusdetail pr on pr.submitid=q.submitid inner join modulemaster m on m.moduleid=pr.moduleid inner join projectmaster p on p.projectid=m.projectid where q.questionid='$id'");
			return $query;
		}
	}
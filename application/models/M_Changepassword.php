<?php
	
	class M_Changepassword extends CI_Model{
		
		
		function pass($cpass)
		{
			$this->load->database();
			$num =  $this->db->query("select * from login where password='$cpass' and username='".$_SESSION['username']."'");
				return($num->num_rows());
		}
		
		function ChangePass($npass)
		{
			$this->load->database();
			$num =  $this->db->query("update login set Password='$npass' where username='".$_SESSION['username']."'");
				
		}
	
	}
<?php

include("conection.php");
$str ="";
$empname="";
						$qry=mysql_query("select c.ChatId,c.Msg,ch.ChatId,ch.EmployeeId,c.employeeId from chatdetail c inner join chatmaster ch on ch.ChatId=c.ChatId where ch.EmployeeId=".$_POST["source1"]." ");
								if($qry)
	  {
	     while($rw=mysql_fetch_assoc($qry))
		 {
		 extract($rw);
			
			 if($employeeId == "0"){
			 $str=$str. "<div class='row'><div class='col-xs-offset-8 col-lg-2'>$Msg</div></div>";
				 
			 }
			 else{
				$str = $str."<div class='row'><div class=' col-lg-2'>$Msg</div></div>"; 
					
			 }
			// $str = $str."<div class='row'><div class='col-lg-2'>$Msg</div></div>";
		 }
	  }
else 
{
 $str = mysql_error();
}
echo $str;

?>
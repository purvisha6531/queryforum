<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/index.dwt.php" codeOutsideHTMLIsLocked="false" -->
<?php
include('conection.php');
?>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<meta charset="UTF-8">
   
    <title>Director | Dashboard</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="keywords" content="Admin, Bootstrap 3, Template, Theme, Responsive">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
    <!-- bootstrap 3.0.2 -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons -->
    <link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="css/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="css/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="css/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- fullCalendar -->
    <!-- <link href="css/fullcalendar/fullcalendar.css" rel="stylesheet" type="text/css" /> -->
    <!-- Daterange picker -->
    <link href="css/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- iCheck for checkboxes and radio inputs -->
    <link href="css/iCheck/all.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <!-- <link href="css/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" /> -->
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- Theme style -->
    <link href="css/style.css" rel="stylesheet" type="text/css" />



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
          <![endif]-->

          <style type="text/css">

          </style>
    <script src='//cdn.tinymce.com/4/tinymce.min.js'></script>
<script>
tinymce.init({
  selector: 'textarea',
  height: 500,
  
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });
 </script> 


<!-- InstanceBeginEditable name="head" -->
		<?php
 
	$msg="";
	$StateId=$StateName=$CountryName=$CountryId="";
	 
	 $qry= mysql_query("select max(StateId)+1 from statemaster");
								   $stateid=mysql_fetch_row($qry);
								   $StateId=$stateid[0];
	//insert code
	if(isset($_POST['insert']))
	{
	   $stateid= $_POST['stateid'];
	   $statename=$_POST['statename'];
	   $countryid=$_POST['CountryId'];
	   
	   $qry = mysql_query("insert into statemaster values($stateid,'$statename','$countryid');");
	   if(!$qry)
	   {
	   $msg = mysql_error();
	   }
	   else
	   {
	   $msg = "Record inserted.";
	   }
	}
	
	 $qry= mysql_query("select max(StateId)+1 from statemaster");
								   $stateid=mysql_fetch_row($qry);
								   $StateId=$stateid[0];

///edit btn code
	if(isset($_GET["stateid"]) && $_GET['flg']=="Edit")
	{
	    $qry = mysql_query("select StateId,StateName,CountryId from statemaster where stateid=".$_GET['stateid']."");
	    $rw = mysql_fetch_assoc($qry); 
	    extract($rw);
	}
	///update button code
	if(isset($_POST['update']))
	{
	  $stateid= $_POST['stateid'];
	   $statename=$_POST['statename'];
	   $countryid=$_POST['CountryId'];
	   $qry =mysql_query("update statemaster set statename='$statename',countryid='$countryid' where stateid=$stateid");
	if(!$qry)
	   {
	   $msg = mysql_error();
	   }
	   else
	   {
	   $msg = "Record Updated...";
	   header('location: statemaster.php');
	   }
	}
	//delete code
	if(isset($_GET["stateid"]) && $_GET['flg']=="Delete")
	{
	    $qry = mysql_query("delete from statemaster where stateid=".$_GET['stateid']."");
	   if($qry){
	    header('location: statemaster.php');
	   }
	   else
	   {
		   $msg = mysql_error();
	   }
	}

?>






<!-- InstanceEndEditable -->



</head>

 <body class="skin-black   ">
        <!-- header logo: style can be found in header.less -->
        <header class="header">
           <a href="../employee/login.php">Logout</a>
			
            <!-- Header Nsavbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top" role="navigation">
                <!-- Sidebar toggle button-->
                <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
              
			  		
                    </nav>
                </header>
                <div class="wrapper row-offcanvas row-offcanvas-left">
                    <!-- Left side column. contains the logo and sidebar -->
                    <aside class="left-side sidebar-offcanvas">
                        <!-- sidebar: style can be found in sidebar.less -->
                        <section class="sidebar">
                            <!-- Sidebar user panel -->
                          <!---  <div class="user-panel">
                                <div class="pull-left image">
                                    <img src="img/26115.jpg" class="img-circle" alt="User Image" />
                                </div>
                               <div class="pull-left info">
                                    <p>Hello, Jane</p>

                                    <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                                </div>
                            </div>-->
                            <!-- search form -->
							
							<div class="row logomargin">
							<center>
							<img src="image/logo.png" height="60px" width="60px" /> 
								<h3 class="logofont">QUERY FORUM</h3>
							</center>
							</div>
							
                           <!-- <form action="#" method="get" class="sidebar-form">
                                <div class="input-group">
                                    <input type="text" name="q" class="form-control" placeholder="Search..."/>
                                    <span class="input-group-btn">
                                        <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                                    </span>
                                </div>
                            </form>-->
                            <!-- /.search form -->
                            <!-- sidebar menu: : style can be found in sidebar.less -->
                            
                            
                           
                            
                            
                            
                            
                            <ul class="sidebar-menu">
                                <li class="active">
                                    <a href="../index.php">
                                        <i class="fa fa-dashboard"></i> <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="mainmasterpage.php">
                                        <i class="fa fa-gavel"></i> <span>Master Tables</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="../user/mainuserpage.php">
                                        <i class="fa fa-globe"></i> <span>Users</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="../project/mainprojectpage.php">
                                        <i class="fa fa-glass"></i> <span>Project Detail</span>
                                     </a>
                                </li>

                            </ul>
                            
                            <?php
							$qry = mysql_query("select EmployeeId,EmployeeName from employeemaster");
							
							echo "<center>";
							echo "<table>";
							echo "<th class='font'>Employee Name</th>";
							if($qry)
	  {
	     while($rw=mysql_fetch_assoc($qry))
		 {
		 extract($rw);
		 
		 echo "<tr><td class='font'><a href='#' onclick=showPopup($EmployeeId,'".$EmployeeName."');>$EmployeeName</a></td></tr>";
		 
		
		 }
	  }
							
							echo "</table>";
							echo "</center>";
	 
							
							?>
                            
                            
                            
                        </section>
                        <!-- /.sidebar -->
                    </aside>

                    <aside class="right-side">

                <!-- Main content -->
				
				  <form method="post" >
                           	<div class="chat_window">
						<div class="top_menu">
						
				 
			 <input type="hidden" id="chatid" name="chatid" />
							<div class="title">
					<div id="EmployeeName"> </div>
					<input type="hidden" id="EmployeeId" name="EmployeeId"/>  
		
			
							
							Chat</div></div>
						
							<ul class="messages">
								
								<input type="hidden" name="Date" value="<?php echo  date("Y-m-d"); ?>" >
								
								<input type="hidden" name="Time" value="<?php
   echo time();?>">

		<div id="msgs"> </div>						
														
																												</ul>
						<div class="bottom_wrapper clearfix">
                <div class="message_input_wrapper">
                  <input type="text" class="message_input" plsssaceholder="Type your message here..." name="txtmsg" /></div>
                   <div class="send_message"><div class="icon"></div>
                    <input type="submit" value="SEND" name="sub" class="btn-primary"  ></div></div></div>
					 
						</form>
			
			<?php
						
							$msg="";
	$empname=$ChatId=$chatid=$txtmsg="";
						
	
						
						if(isset($_POST['sub']))
	{
	  
			$empname=$_POST['EmployeeId'];
			$date=$_POST['Date'];
			$time=$_POST['Time'];
	 
	  	$qry= mysql_query("select *  from chatmaster where EmployeeId=$empname");
	  	 if(mysql_num_rows($qry)==0)
		 {
		  $qry = mysql_query("insert into chatmaster values('','$empname','$date','$time');");
		
		  $qry= mysql_query("select max(ChatId) from chatmaster");
								   $chatid=mysql_fetch_row($qry);
								   $ChatId=$chatid[0];
		 }
		else{
			$qry= mysql_query("select ChatId from chatmaster where EmployeeId=$empname");
								   $chatid=mysql_fetch_row($qry);
								   $ChatId=$chatid[0];
		}
		
		
		
		
		$empname=$_POST['EmployeeId'];
		$txtmsg=$_POST['txtmsg'];
	   
	   $qry = mysql_query("insert into chatdetail values('','$ChatId','','$txtmsg','','');");
	   if(!$qry)
	   {
	  echo mysql_error();
	   }
	   else
	   {
	   $msg = "Record inserted.";
	   }
	}?>
			
			
			
			
			
				
<!-- InstanceBeginEditable name="body" -->

	  <section class="content">

	<div class="row bgwhite margin">
		
			<ul class="breadcrumb">
                                <li><a href="../index.php"><i class="fa fa-home"></i> Home</a></li>
                                <li><a href="mainmasterpage.php">Master Table</a></li>
								<li class="logofont active">State Master</li>
      </ul>
		
		
		
		<center><h3 class="logofont">State Master</h3></center>
		
	</div>

</section>	

	


	<div class="col-xs-offset-2 col-lg-8">
		<div class="row bg">
		
			<div class="form-group">
                                   <div class="row">
                                   <div class="col-lg-4">  </div>
                                   <div class="col-lg-5"> </div>
                                   </div>
          </div>

			 <form method="post" action="">
                           <div class="form-group">
                           <div class="row">
                           <div class="col-lg-4">
                          	 <label class="black">Enter StateId</label>
                           </div>
                            <div class="col-lg-5">
     <input type="text" name="stateid" class="form-control" required="Enter StateId" value="<?php if(isset($StateId)) { echo $StateId; }?>" />
                            </div>
                            </div>
               </div>
                                   <div class="form-group">
                                   <div class="row">
                                   <div class="col-lg-4">  </div>
                                   <div class="col-lg-5"> </div>
                                   </div>
                                   </div>
                                  
                           <div class="form-group">
                           <div class="row">
                           <div class="col-lg-4">
                          	 <label class="black">Enter State Name</label>
                           </div>
                            <div class="col-lg-5">
  <input type="text" name="statename" class="form-control" required="Enter State Name" value="<?php if(isset($StateName)) { echo $StateName; }?> "/>
                            </div>
                            </div>
               </div>
                            		<div class="form-group">
                                   <div class="row">
                                   <div class="col-lg-4">  </div>
                                   <div class="col-lg-5"> </div>
                                   </div>
                                   </div>
                                   
                                   	<div class="form-group">
                                   <div class="row">
                                   <div class="col-lg-4">
                                   <label class="black">Select Country</label>
                                   </div>
                                   <div class="col-lg-5">
                                   <select name="CountryId" class="form-control">
                                   <option>Select Country</option>
								   <?php
               $qry = mysql_query("select * from countrymaster");
        while($rw = mysql_fetch_row($qry))             
             {
               echo "<option value=".$rw[0]."> ".$rw[1]." </option>";
             }


         ?>
</select>   
                                   </div>
                                   </div>
                                   </div>	
                                   
                                   <div class="form-group">
                                   <div class="row">
                                   <div class="col-lg-4">  </div>
                                   <div class="col-lg-5"> </div>
                                   </div>
                                   </div>
                                   
                             <div class="form-group">
                             <div class="row">
                                   <div class="col-lg-4">  </div>
                                   <div class="col-lg-5">
                                   <input type="submit" class="btn btn-primary" name="insert" value="Insert" />
                                   <input type="submit" class="btn btn-primary" name="update" value="Update" />
                                   </div>
                               </div>
               </div>
                              		 <div class="form-group">
                                   <div class="row">
                                   <div class="col-lg-12"></div>
                                   </div>
                                   </div>
          </form>
	</div>
	</div>

<div  class="show">
<?php
     $qry = mysql_query("select StateId,StateName,CountryId from statemaster");
	 
	 echo "<center>";
	  echo "<table class='table-responsive'>";
	  echo "<tr><th> State Id </th><th> State Name </th><th>Country Name</th><th></th><th></th></tr>";
	  if($qry)
	  {
	     while($rw=mysql_fetch_assoc($qry))
		 {
		 extract($rw);
		    $qry1 = mysql_query("select countryname from countrymaster where countryid=$CountryId");
			$rw1 = mysql_fetch_row($qry1);
		 echo "<tr><td>$StateId</td><td>$StateName</td><td>".$rw1[0]."</td>
		 <td>
		  <button class='btn btn-default btn-xs'>
		<a href=?stateid=$StateId&flg=Edit><i class='fa fa-pencil'></a></i></button>
	
		  <button class='btn btn-default btn-xs'>
		 <a href=?stateid=$StateId&flg=Delete><i class='fa fa-times'></a></i></button></td></tr>";
		 }
	  }
      echo "</table>";
	  echo "</center>";

?>  


<!-- InstanceEndEditable -->

				 
				
				
               <!-- /.content -->
              <!-- /.right-side -->

        </div><!-- ./wrapper -->


       
       
      
        <!-- jQuery 2.0.2 -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <script src="js/jquery.min.js" type="text/javascript"></script>
 <script>
	
	  
	  function showPopup(EmployeeId,EmployeeName)
	  {
		  
		   $.ajax({
        type: 'post',
        url: 'chat.php',
        data: {
            source1: EmployeeId
            
        },
        success: function( data ) {
            $("#msgs").html(data);
			
        }
    });
		  
	         $(".chat_window").fadeIn();
		  
			  $("#EmployeeId").val(EmployeeId);
			  $("#EmployeeName").text(EmployeeName);
		  
		  
		  
		  
		  
	  }
	  
	</script>
        <!-- jQuery UI 1.10.3 -->
        <script src="js/jquery-ui-1.10.3.min.js" type="text/javascript"></script>
        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <!-- daterangepicker -->
        <script src="js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>

        <script src="js/plugins/chart.js" type="text/javascript"></script>

        <!-- datepicker
        <script src="js/plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>-->
        <!-- Bootstrap WYSIHTML5
        <script src="js/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js" type="text/javascript"></script>-->
        <!-- iCheck -->
        <script src="js/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
        <!-- calendar -->
        <script src="js/plugins/fullcalendar/fullcalendar.js" type="text/javascript"></script>

        <!-- Director App -->
        <script src="js/Director/app.js" type="text/javascript"></script>

        <!-- Director dashboard demo (This is only for demo purposes) -->
        <script src="js/Director/dashboard.js" type="text/javascript"></script>

        <!-- Director for demo purposes -->
        <script type="text/javascript">
            $('input').on('ifChecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().addClass('highlight');
                $(this).parents('li').addClass("task-done");
                console.log('ok');
            });
            $('input').on('ifUnchecked', function(event) {
                // var element = $(this).parent().find('input:checkbox:first');
                // element.parent().parent().parent().removeClass('highlight');
                $(this).parents('li').removeClass("task-done");
                console.log('not');
            });

        </script>
        <script>
            $('#noti-box').slimScroll({
                height: '400px',
                size: '5px',
                BorderRadius: '5px'
            });

            $('input[type="checkbox"].flat-grey, input[type="radio"].flat-grey').iCheck({
                checkboxClass: 'icheckbox_flat-grey',
                radioClass: 'iradio_flat-grey'
            });
</script>
<script type="text/javascript">
    $(function() {
                "use strict";
                //BAR CHART
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(220,220,220,0.2)",
                            strokeColor: "rgba(220,220,220,1)",
                            pointColor: "rgba(220,220,220,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [65, 59, 80, 81, 56, 55, 40]
                        },
                        {
                            label: "My Second dataset",
                            fillColor: "rgba(151,187,205,0.2)",
                            strokeColor: "rgba(151,187,205,1)",
                            pointColor: "rgba(151,187,205,1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(151,187,205,1)",
                            data: [28, 48, 40, 19, 86, 27, 90]
                        }
                    ]
                };
            new Chart(document.getElementById("linechart").getContext("2d")).Line(data,{
                responsive : true,
                maintainAspectRatio: false,
            });

            });
            // Chart.defaults.global.responsive = true;
</script>
   
</body>
<!-- InstanceEnd --></html>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/client.dwt.php" codeOutsideHTMLIsLocked="false" -->

	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />
<!-- InstanceBeginEditable name="doctitle" -->

<title>QueryForum</title>


<!-- InstanceEndEditable -->

<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>css/home.css">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url();?>css/icomoon.css">
	<!-- Simple Line Icons -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/simple-line-icons.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/superfish.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url();?>css/flexslider.css">

	<link rel="stylesheet" href="<?php echo base_url();?>css/style.css">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url();?>js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
<script>
	
	  
	  function showPopup(submitid,ModuleId,ModuleName,EmployeeId,EmployeeName)
	  {
	         $(".popup").fadeIn();
		  $("#submitid").val(submitid);
		    $("#ModuleId").val(ModuleId);
			  $("#ModuleName").text(ModuleName);
			  $("#EmployeeId").val(EmployeeId);
			  $("#EmployeeName").text(EmployeeName);
	  }
	  
	</script>
	
<!-- InstanceEndEditable -->

	</head>
	<body>
  

    
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<div id="fh5co-header">
			<header id="fh5co-header-section">
            	
				<div class="container">
					<div class="nav-header">
						
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><img src="<?php echo base_url();?>img/logo.png" width="50" height="50"><a>QUERY FORUM</a></h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
							<!-- 	<li>
									<a class="active" href="index.html">Home</a>
								</li> -->
                                
                                	
								<li><a href="<?php echo site_url('client1st');?>">HOME</a></li>
								
								<li>
									<a href="<?php echo site_url('C_Newproject');?>" class="fh5co-sub-ddown">New Project</a>
									
								</li>
								<li>
									<a href="<?php echo site_url('C_Viewstatus');?>" class="fh5co-sub-ddown">View Status</a>
									 
								</li>
								
								<li>
									<a href="<?php echo site_url('C_Projectstatus');?>" class="fh5co-sub-ddown">Project Status</a>
									 
								</li>
                               
								<li>
									<a href="#" class="fh5co-sub-ddown">Forum</a>
									<ul class="fh5co-sub-menu ">
									<li><a href="<?php echo site_url('C_Viewsolvequery');?>">View Solve Forum</a></li>
									 
									</ul>
								</li>
                                <li>
									<a href="#" class="fh5co-sub-ddown">Profile</a>
									 <ul class="fh5co-sub-menu ">
									 	<li><a href="<?php echo site_url('C_Changepassword');?>">Change Password</a></li>
									 	<li><a href="<?php echo site_url('C_Editprofile');?>">Edit Profile</a></li>
									</ul>
								</li>
                                
								 <li class="table-bordered" style="padding:5px;border-radius:2px;">
									  <?php
	  if($this->session->userdata('username')!= "")
	 {
		 echo "<span class='text-success bg-success'>".$this->session->userdata('username')."</span>";
	 }
	 else
	 {
	 header("location: ../index.php/Welcome");
	 }
	?>
    
    
    <center>
    	<a href="<?php echo site_url('client1st')?>/logout" class="btn lnk">Logout</a></center>
    
								</li>
								
                               <!----- <li>
									<a href="services.html" class="fh5co-sub-ddown">HIRE</a>
									 <ul class="fh5co-sub-menu">
									 	<li><a href="#">Hire IOS Devloper</a></li>
									 	<li><a href="#">Hire WEB Designer</a></li>
                                         <li><a href="#">Hire PHP Devloper</a></li>
                                         <li><a href="#">Hire Asp.Net Devloper</a></li>
									</ul>
								</li>---->
                                
							</ul>
						</nav>
					</div>
                   
				</div>
			</header>		
		</div>
		<!-- end:fh5co-header -->
	<div class="container">
    <!-- InstanceBeginEditable name="body" -->
	<style>
	 .popup{height:auto;width:500px;
	 border:1px solid black;
	 border-radius:5px;
	box-shadow : 5px 5px 5px;
	display:none;
	position:relative;
	}
	</style>
	
	 
			
		<form method="post" action="C_Projectstatusmore/query">	
	<div class="popup">
	
	   <div class="container">
	   
	      
		    
			 
			
				 <h2>Post Query</h2>
				 
			 <input type="hidden" id="submitid" name="submitid" />
			<div class="row">
					<div class="col-lg-2"><label class="marginlabel">Module Name </label> </div>
					<div class="col-lg-3"><div id="ModuleName"> </div></div>
					<input type="hidden" id="ModuleId" name="ModuleId"/>  </div>
		
			
			<div class="row">
					<div class="col-lg-2"><label class="marginlabel">Employee Name </label> </div>
					<div class="col-lg-3"><div id="EmployeeName"> </div></div>
					<input type="hidden" id="EmployeeId" name="EmployeeId"/>  
			</div>
			
			
			<div class="row">
					<div class="col-lg-2"><label>Question </label> </div>
					<div class="col-lg-3"><textarea  name="que" class="form-control"></textarea> </div>
					
			</div>
			
		
			
			<div class="row">
					<div class="col-lg-2"><label>Img URL </label> </div>
					<div class="col-lg-3"><input type="text"  name="imgurl" class="form-control"  /></div>
					
			</div>
			
			
			<div class="row">
					<div class="col-lg-2"><label>Date Of Question </label> </div>
					<div class="col-lg-3"><input type="text"  name="date" class="form-control"   /></div>
					
			</div>
			
			<div class="row">
					<div class="col-lg-2"><label>Viewed Count </label> </div>
					<div class="col-lg-3"><input type="text"  name="view" class="form-control" /></div>
					
			</div>
			
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-3"><input type="submit" name="sub" value="Post Query" /></div>
			</div>
			
			
			
			 
		</div>
		
		</div>
	
	
	<div class="container">
<div class="row">
			<div class="col-lg-2"></div>
				<div class="col-lg-8 bg">
				
			
			<h3 class="text-center">  Module Details  </h3>
    <table border="1" class="table table-bordered table-responsive">  
      <tbody> 
	 
        <tr> <th>Module Name</th><th>Module Detail</th><th>Flow Image Url</th><th>Upload Url</th></tr> 
          <?php  
         foreach ($query->result() as $row)  
         {  
            ?>
           <tr> <td><?php echo $row->ModuleName;?></td>
		  		<td><?php echo $row->Detail;?></td>
				<td><?php echo $row->FlowImgURL;?></td>
		   		<td><?php echo $row->UploadURL;?></td>
				</tr>
		   
   			 
         <?php }  
         ?>  
   </tbody>
   </table>
			</div>
			
		
		</div>
		</div>
			
	<div class="container">
	<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8 bg">
				
			
			
			
			<h3 class="text-center">  Project Status Details  </h3>
    <table border="1" class="table table-bordered table-responsive">  
      <tbody> 
	  
	<tr> <th>Project status Name</th><th>Module Name</th><th>Employee name</th> <th>Message</th> </tr>
        
          <?php  
         foreach ($query1->result() as $row)  
         {  
		 
		 $submitid = $row->submitid;
		 $modulename = $row->ModuleName;
		 $moduleid =$row->ModuleId;
		  $employeeid =$row->EmployeeId;
		   $employeename =$row->EmployeeName;
            ?>
			<tr><td><?php echo $row->ProjectStatusName;?></td>
			<td><?php echo $row->ModuleName;?></td>
			<td><?php echo $row->EmployeeName; ?></td>
			<td><?php echo $row->Msg;?></td>
			<td> <a  id="<?php echo $row->submitid;?>"  onClick="<?php echo "showPopup('$submitid','$moduleid','$modulename','$employeeid','$employeename');"; ?>"   class="lnk"> Post Query</a></td>
			
			
		   </tr>
		   
   			
            </tr>  
         <?php }  
  	?>
	  
	  </tbody>
	  </table>
	  </div>
	 
	  
</div>	
</div>
	
	
<!-- InstanceEndEditable -->
    
    </div>
		

		
		
        
        
       
        
		<footer id="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="copyright">
							<p><small>&copy; 2016 Free HTML5 <a href="index.html">Energy</a>. All Rights Reserved. <br> Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash </a></small></p>
						</div>
					</div>
					<div class="col-md-6">
						<div class="row">
							
							<div class="col-md-6">
								<h3>Subscribe</h3>
								<p>Far far away, behind the word mountains, far from the countries</p>
								<form action="#" id="form-subscribe">
									<div class="form-field">
										<input type="email" placeholder="Email Address" id="email">
										<input type="submit" id="submit" value="Send">
									</div>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-2">
						<ul class="social-icons">
							<li>
								<a href="#"><i class="icon-twitter-with-circle"></i></a>
								<a href="#"><i class="icon-facebook-with-circle"></i></a>
								<a href="#"><i class="icon-instagram-with-circle"></i></a>
								<a href="#"><i class="icon-linkedin-with-circle"></i></a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->
		
        
        <!--LOGIN-->
        






	<!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

	<script src="<?php echo base_url();?>js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url();?>js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url();?>js/bootstrap.min.js"></script>
	<!-- Waypoints -->
    
	<script src="<?php echo base_url();?>js/jquery.waypoints.min.js"></script>
	<!-- Superfish -->
	<script src="<?php echo base_url();?>js/hoverIntent.js"></script>
	<script src="<?php echo base_url();?>js/superfish.js"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url();?>js/jquery.flexslider-min.js"></script>
	<!-- Stellar -->
	<script src="<?php echo base_url();?>js/jquery.stellar.min.js"></script>
	<!-- Counters -->
	<script src="<?php echo base_url();?>js/jquery.countTo.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="<?php echo base_url();?>js/main.js"></script>

	</body>
<!-- InstanceEnd --></html>


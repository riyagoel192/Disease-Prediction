<?php
//require('db_conn.php');
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <title></title>

  <!-- Custom fonts for this template-->
 <!--  <link href="css/all.min.css" rel="stylesheet" type="text/css"> --> 
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- Custom styles for this template-->
  <link href="styles/sb-admin-2.min.css" rel="stylesheet">

  <style>
  	
  #faq-ques1
  {
  		height: 180px;
  		width: 510px;
  		position: absolute;
  		margin-top:90px;
  		margin-left:260px;
  		box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);
  }

  a
  {
  	text-decoration: none;
  }
  	
  </style>
  
</head>

<body id="page-top">

  	<div id="page-bottom" style="height: 100px;width: 1124px;margin-left: 224px;position: absolute;">
		
		<!-- Topbar -->
        <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
        	<h5 style="margin-left: 410px;color:#32c69a;"><center>Welcome to your panel</center></h5>
        </nav>

	</div>

	<div id="page-bottom-ref" style="height: 111px;width: 1124px;margin-left: 224px;position: absolute;margin-top: 481px;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);">

        	<h5 style="margin-left: 20px;color: #4b4f;">Other Useful Referrence Links:</h5>

        	<ul style="list-style-type: square;color: #4b4fe2;">
        		<li><a href="https://www.who.int/news-room/q-a-detail/q-a-coronaviruses">Advisory from WHO about Corona Virus</a></li>
        		<li><a href="https://www.cdc.gov/coronavirus/2019-ncov/about/index.html">Detailed summary about Corona Virus</a></li>
        		<li><a href="https://www.mohfw.gov.in/">Updates from Indian Ministry of Health and Welfare</a></li>
        	</ul>

	</div>

	<div id="faq-ques1">
		
		<h5><b>Why use our product?</b></h5>
		<ul style="list-style-type: none;">
		<li id="ans1"><a href="#">View Solution</a></li>
		</ul>

	</div>

	<div id="faq-ans1" style="height: 110px;width: 470px;position: absolute;margin-top:150px;margin-left:280px;"></div>

	<div id="faq-ques2" style="height: 180px;width: 510px;position: absolute;margin-top:280px;margin-left:260px;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);">
		
		<h5><b>Is the whole procedure completely online?</b></h5>
		<ul style="list-style-type: none;">
		<li id="ans2"><a href="#">View Solution</a></li>
		</ul>

	</div>

	<div id="faq-ans2" style="height: 110px;width: 470px;position: absolute;margin-top:336px;margin-left:280px;"></div>

	<div id="faq-ques3" style="height: 180px;width: 530px;position: absolute;margin-top:90px;margin-left:800px;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);">
		
		<h5><b>How soon will I get the results?</b></h5>
		<ul style="list-style-type: none;">
		<li id="ans3"><a href="#">View Solution</a></li>
		</ul>		

	</div>

	<div id="faq-ans3" style="height: 110px;width: 470px;position: absolute;margin-top:150px;margin-left:820px;"></div>

	<div id="faq-ques4" style="height: 180px;width: 530px;position: absolute;margin-top:280px;margin-left:800px;box-shadow: 0 4px 10px 0 rgba(0,0,0,0.5);">
		
		<h5><b>Can a layman use it?</b></h5>
		<ul style="list-style-type: none;">
		<li id="ans4"><a href="#">View Solution</a></li>
		</ul>
		
	</div>

	<div id="faq-ans4" style="height: 110px;width: 470px;position: absolute;margin-top:336px;margin-left:820px;"></div>


	<!-- Page Wrapper -->
  	<div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Welcome User</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="userpanel.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Contents
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>My Appointments</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Settings</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="faq.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>FAQ's</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="enquiry.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Make an Enquiry</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="general_info.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>General Info</span></a>
      </li>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Logout</span></a>
      </li>
      </li>
  </div>
  </ul>
	<!-- End of Sidebar -->



	<script type="text/javascript">
		$("#ans1").click(function(){
    		document.getElementById('faq-ans1').innerHTML='Our system not only intelligently predicts the chances of someone suffering from Corona Virus by using state-of-the-art technology that efficiently and accurately diagnoses it, but also has an in-built recomendation system that helps you tackle this issue head on.';
		});

		$("#ans2").click(function(){
    		document.getElementById('faq-ans2').innerHTML='Yes, the whole process is completely online. You just need your preliminary test reports and you are ready to go.';
		});

		$("#ans3").click(function(){
    		document.getElementById('faq-ans3').innerHTML='Saving our customers time, money and effort has always been one of the core values that has driven the development of this product. Keeping in line with this, we have have developed our product to be smart, efficient and resourceful.';
		});

		$("#ans4").click(function(){
    		document.getElementById('faq-ans4').innerHTML='Absolutely yes. Our product has been built keeping user-friendliness in mind. Its easy to navigate and maneuver around. Still in case of any doubt, please feel free to reach out to us. We are always there for you.';
		});

	</script>

</body>
</html>
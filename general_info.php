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
    
  /*#spread
  {
      height: 530px;
      width: 360px;
      position: absolute;
      margin-top:120px;
      margin-left:610px;
      box-shadow: 0px 4px 10px 0px rgba(50,198,154,1.4);
  }*/

 /* #protect
  {
      height: 530px;
      width: 360px;
      position: absolute;
      margin-top:120px;
      margin-left:980px;
      box-shadow: 0 4px 10px 0 rgba(50,198,154,1.4);
  }*/

  a
  {
    text-decoration: none;
  }

  h4
  {
      text-shadow: 2px 2px 5px #32c69a;
      font-family: cursive;
  }


  /*Flip card */

  .flip-card-1 {
      height: 530px;
      width: 360px;
      position: absolute;
      margin-top:120px;
      margin-left:240px;
      box-shadow: 0 4px 10px 0 rgba(50,198,154,1.4);
}


  .flip-card-2 {
      height: 530px;
      width: 360px;
      position: absolute;
      margin-top:120px;
      box-shadow: 0 4px 10px 0 rgba(50,198,154,1.4);
      margin-left:610px;
}


  .flip-card-3 {
      height: 530px;
      width: 360px;
      position: absolute;
      margin-top:120px;
      margin-left:980px;
      box-shadow: 0 4px 10px 0 rgba(50,198,154,1.4);
}

.flip-card-inner {
  position: relative;
  height: 530px;
  width: 360px;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 10px 0 rgba(50,198,154,1.4);
}

.flip-card-1:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-2:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-3:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  height: 530px;
  width: 360px;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}


.flip-card-back {
  background-color: #fff;
  color: black;
  transform: rotateY(180deg);
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

  <!-- <div id="symptoms"> -->
    
    <div class="flip-card-1">
      <div class="flip-card-inner">
        <div class="flip-card-front">

          <h4><center>What are the symptoms of COVID-19?</center></h4><br>
          <p style="margin-left: 8px;">The most common symptoms of COVID-19 are <b>fever</b>, <b>tiredness</b>, and <b>dry cough</b>. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. <br><br>Some people become infected but don’t develop any symptoms and don't feel unwell. Most people recover from the disease without needing special treatment. <br><br>Older people, and those with underlying medical problems like high blood pressure, heart problems or diabetes, are more likely to develop serious illness.<br><br>People with fever, cough and difficulty breathing should seek medical attention.</p><br><br>

        </div>

        <div class="flip-card-back">
         <img src="https://www.aljazeera.com/mritems/Images/2020/1/30/edf4c87c34d141dca5db422a5ac127a0_18.jpg" style="height: 150px;width: 300px;margin-left: 30px;margin-top: 30px;">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQtYJIvVfJC8lvl07jnTEoLE6WklDWOgTa5qttqcO1fgHgDCDsS&s" style="height: 150px;width: 300px;margin-left: 30px;margin-top: 20px;">
         <img src="https://www.mercurynews.com/wp-content/uploads/2020/03/hypatia-h_96ea1a200366abca7d3b34fd5af19c3a-h_5d7e9beb6b9e83bd3fec44a709698450.jpg?w=978" style="height: 150px;width: 300px;margin-left: 30px;margin-top: 20px;">
        </div>


      </div>
    </div>
    <!-- <h4><center>What are the symptoms of COVID-19?</center></h4><br> -->

    <!-- <marquee direction="UP" onmouseover="stop()" onmouseout="start()" scrolldelay="150" loop="" > -->
      
      
     <!--  <p style="margin-left: 8px;">The most common symptoms of COVID-19 are <b>fever</b>, <b>tiredness</b>, and <b>dry cough</b>. Some patients may have aches and pains, nasal congestion, runny nose, sore throat or diarrhea. These symptoms are usually mild and begin gradually. <br><br>Some people become infected but don’t develop any symptoms and don't feel unwell. Most people recover from the disease without needing special treatment. <br><br>Older people, and those with underlying medical problems like high blood pressure, heart problems or diabetes, are more likely to develop serious illness.<br><br>People with fever, cough and difficulty breathing should seek medical attention.</p><br><br> -->

    <!-- </marquee> -->
    
  <!-- </div> end of symptoms-->


  <div class="flip-card-2">
    <div class="flip-card-inner">
      <div class="flip-card-front">
    
      <h4><center>How does COVID-19 spread?</center></h4><br>
      <br>
       <!-- <marquee direction="UP" onmouseover="stop()" onmouseout="start()" scrolldelay="150" loop="" > -->
      
      <p style="margin-left: 8px;">People can catch COVID-19 from others who have the virus. The disease can spread from person to person through small droplets from the nose or mouth which are spread when a person with COVID-19 coughs or exhales.<br><br>These droplets land on objects and surfaces around the person. Other people then catch COVID-19 by touching these objects or surfaces, then touching their eyes, nose or mouth.<br><br>People can also catch COVID-19 if they breathe in droplets from a person with COVID-19 who coughs out or exhales droplets. This is why it is important to stay more than 1 meter (3 feet) away from a person who is sick.
      </p><br><br>
    </div>

    <div class="flip-card-back">
      <img src="https://news3lv.com/resources/media/7921beb2-2c6d-4810-9a17-61abb44cd2ee-large16x9_9fdc52b444737ab11a1ef6cd11eae351ec59b5e8_s2_n2.png?1580480468100" style="height: 250px;width: 320px;margin-left: 10px;margin-top: 30px;">
      <img src="https://ars.els-cdn.com/content/image/1-s2.0-S2210909915301004-gr3.jpg" style="height: 200px;width: 320px;margin-left: 10px;margin-top: 30px;">
    </div>

  </div>
</div>

    <!-- </marquee> -->
    

  

  <div class="flip-card-3">
    <div class="flip-card-inner">
      <div class="flip-card-front">
    
      <h4><center>What can I do to prevent the spread of disease?</center></h4>

       <!-- <marquee direction="UP" onmouseover="stop()" onmouseout="start()" scrolldelay="150" loop="" > -->
      <p style="margin-left: 8px;">You can reduce your chances of being infected or spreading COVID-19 by taking some simple precautions:
         <ul style="margin-left: -20px;font-size: 15px;">
          <li>Regularly and thoroughly clean your hands with an alcohol-based hand rub or wash them with soap and water.</li>
          <li>Maintain at least 1 metre (3 feet) distance between yourself and anyone who is coughing or sneezing.</li>
          <li>Avoid touching eyes, nose and mouth.</li>
          <li>Make sure you, and the people around you, follow good respiratory hygiene.</li>
          <li>Stay home if you feel unwell. If you have a fever, cough and difficulty breathing, seek medical attention and call in advance. Follow the directions of your local health authority.</li>
          <li>Keep up to date on the latest COVID-19 hotspots. Avoid traveling to places – especially if you are an older person or have heart or lung disease.</li>
        </ul> 
      </p>
      <br><br>
    </div>

    <div class="flip-card-back">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQW7JN_cHnnxXpf-hvYhVVPBS-5dRiUW9n5ngfW8-enT3TFAqITgQ&s" style="height: 150px;width: 300px;margin-left: 30px;margin-top: 30px;">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfSHb-iWrEwE-xXQjkwQOijnsRpCJKvfkWFwFNvNIWkCTOr5ZW&s" style="height: 150px;width: 300px;margin-left: 30px;margin-top: 20px;">
         <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ84foiTq1beOSjmZZzInlx0X1mDqChqRHVEx2N3TprmtvpcdSU&s" style="height: 150px;width: 300px;margin-left: 30px;margin-top: 20px;">
        </div>


      </div>
    </div>

    <!-- </marquee> -->

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

  
</body>
</html>

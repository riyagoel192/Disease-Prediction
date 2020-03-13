<?php

if (isset($_GET['submit'])) {
     $name= $_GET['name'];
     $email=$_GET['email'];
     $password=$_GET['password'];
     $phone=$_GET['phn'];
     //Database connection
      $conn=new mysqli('localhost','root','','test2');
      if($conn->connect_error){
         die('Connection Failed : '.$conn->connection_error);
      }
      else{
         $stmt=$conn->prepare("insert into registration(name,email,password,phone)
             values(?,?,?,?)");
         $stmt->bind_param("ssss",$name,$email,$password,$phone);
         $stmt->execute();
        echo"Registered Succesfully...";
        header('Location:index.php');
         $stmt->close();
         $conn->close();
}
 }

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<script src="dist/sweetalert.min.js"></script>
	<link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
    <link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
    <link rel="stylesheet" type="text/css" href="styles/responsive.css">
    <!-- main css -->
     <link rel="stylesheet" href="styles/reg_style.css" /> 
     <link rel="stylesheet" type="text/css" href="styles/main_styles.css">

     <style>
        
        .bg {
  /* The image used */
  background-image: url("https://makeovertravelplasticsurgery.com/wp-content/uploads/2017/12/filling-out-medical-forms-1.jpg");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-repeat: no-repeat;
  background-size: cover;
    }


    </style>
</head>

<body class="bg">
	<div class="loginBox">
			<img src="https://cdn0.iconfinder.com/data/icons/user-icon-profile-businessman-finance-vector-illus/100/19-1User-512.png" class="user">
			<h2>Register Here</h2>
			<form action="" method="GET">
						<input type="text" name="name" placeholder="Enter your name" required><br><br>
						<!-- <input type="text" name="college" placeholder="Enter college name" required><br><br> -->
    					<input type="text" name="email" placeholder="Type your email" required><br><br>
    					<input type="password" name="password" placeholder="Enter password" required><br><br>
    					<input type="text" name="phn" placeholder="Enter phone number" required><br><br>
    					<input type="submit" name="submit" value="Sign Up">
    		</form>
	</div>

</body>
</html>
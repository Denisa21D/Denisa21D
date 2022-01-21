<?php
session_start();

$con=mysqli_connect("localhost","root","","lavendardb");

if (isset($_POST['signin'])) {
	$email=mysqli_real_escape_string($con,$_POST['email']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
	$password=md5($password);
	$q1="select * from Customer where C_email='$email' and C_password='$password'";
	$exe_q1=mysqli_query($con,$q1);

	if (mysqli_num_rows($exe_q1)>=1) {
		 // output data of each row
   
       
    
		
		$r= mysqli_fetch_assoc($exe_q1);
	    $_SESSION['username']=$email;
		$_SESSION['mess']="";
		
		header("location:Profile.php");
	}
	else{
		
	    $_SESSION['username']="NULL";
		$_SESSION['mess']="You are not logged in. Please enter valid email and password!";
		//header("location:login.php");
	}
}

?>

<html>
<head>
<link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
<link href="bootstrap.css" rel='stylesheet' type='text/css' />
<link href="style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery.min.js"></script>
    <title>Lavendar</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css2/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css2/animate.css">
    
    <link rel="stylesheet" href="css2/owl.carousel.min.css">
    <link rel="stylesheet" href="css2/owl.theme.default.min.css">
    <link rel="stylesheet" href="css2/magnific-popup.css">

    <link rel="stylesheet" href="css2/aos.css">

    <link rel="stylesheet" href="css2/ionicons.min.css">

    <link rel="stylesheet" href="css2/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css2/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css2/flaticon.css">
    <link rel="stylesheet" href="css2/icomoon.css">
    <link rel="stylesheet" href="css2/style.css">
</head>
<body  style=" background-image: url('images/s2-unsplash.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover; ">
   
    <!-- start menu -->
    <div class="menu" style=" background-image: url('images/s2-unsplash.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;" >
	  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php">Lavender<small> Feel it</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
			  	   <li class="nav-item active"><a href="login.php" class="nav-link">login</a></li>
			   <li class="nav-item"><a href="Signup.php" class="nav-link">Signup</a></li>
	     

	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
	</div>
	<!-- end menu -->
       <div class="main"  >
          <div class="login_top">
          	<div class="container">
			  <div class="col-md-6">
				 <div class="login-page">
					<h4 class="title" style="color: #000000;">New Customers</h4>
					<p>if you don't have account Create now </p>
					<div class="button1" style="background-color: #000000;">
					   <a href="signup.php"><input style="background-color: #000000;" type="submit" name="Submit" value="Create an Account"></a>
					 </div>
					 <div class="clear"></div>
				  </div>
				</div>
				<div class="col-md-6">
				 <div class="login-page">
				  <div class="login-title">
	           		<h4 class="title" style="color: #000000;" >Registered Customers</h4>
					<div id="loginbox" class="loginbox">
						 <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
						  <fieldset class="input">
						    <p id="login-form-username">
						      <label for="modlgn_username">Email</label>
	
							  <input id="modlgn_username"  class="inputbox" type="text" name="email" placeholder="Email address" id="email" autofocus>
						    </p>
						    <p id="login-form-password">
						      <label for="modlgn_passwd">Password</label>
							  <input type="Password" class="inputbox" name="password" placeholder="Password">
						    </p>
						    <div class="remember" >
							 			<input type="submit" style="background-color: #000000;" class="button" name="signin" value="LOGIN" /><span><?php echo $_SESSION['mess']; ?></span>

							 </div>
						  </fieldset>
						 </form>
					</div>
			      </div>
				</div>
				<div class="clear" style="background-color: #000000;"></div>
			  </div>
			</div>
		  </div>
         </div>
         <div class="footer-bottom" style=" background-image: url('images/s2-unsplash.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  margin-top: 21.75%;" >

		 </div>
		 <div class="copyright" style="background-color: #000000;">
		  <div class="container" style="background-color: #000000;">
		    <div class="copy" style="background-color: #000000;">
		        <p>© 2020 <a href="http://w3layouts.com" target="_blank">Customized Lavender</a></p>
		    </div>
		    <div class="social" style="background-color: #000000;">	
			
		    </div>
		   <div class="clear" style="background-color: #000000;"></div>
		  </div>
	   </div>
	    <div class="copyright" style="background-color: #000000;">
		  <div class="container" style="background-color: #000000;">
		    <div class="copy" style="background-color: #000000;">
		    
		    </div>
		    <div class="social" style="background-color: #000000;">	
			
		    </div>
		   <div class="clear" style="background-color: #000000;"></div>
		  </div>
	   </div>
</body>
</html>
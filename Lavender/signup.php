<?php
session_start();
$con=mysqli_connect("localhost","root","","lavendardb");
$firstName=$lastName=$email=$mobileNum=$password=$repassword="";
$firstErr=$lastErr=$emailErr=$mobileErr=$passwordErr=$repasswordErr="";
$error=false;

// Check connection
// Check connection
if (!$con) {
	$_SESSION['mess']="Connection failed" . mysqli_connect_error();
	header("location:index.php");
    die("Connection failed: " . mysqli_connect_error());
	
}
//echo "Connected successfully";


if(isset($_POST['signup'])){
  
	/* for first name validation  */
   if(empty($_POST['first'])){
    $error=true;
      $firstErr="First name is required!";
   }
   elseif (strlen($_POST['first'])<3) {
     $error=true;
       	$firstErr="First name length must be three char!";
       }    
       else if (!preg_match("/^[a-z A-Z]*$/", $_POST['first'])) {
         $error=true;
       	$firstErr="First name must be alphabatic!";
       }
       else{
       	$firstName=dataCleaner($_POST['first']);
       }

             /* for last name validation  */
         if(empty($_POST['last'])){
           $error=true;
      $lastErr="Address is required!";
   }
   elseif (strlen($_POST['last'])<3) {
     $error=true;
       	$lastErr="Last name length must be three char!";
       }    
       else if (!preg_match("/^[a-z A-Z 0-9 ,_]*$/", $_POST['last'])) {
         $error=true;
       	$lastErr="Last name must be alphabatic!";
       }
       else{
        
       	$lastName=dataCleaner($_POST['last']);
       }

       /* for email validation  */
       if(empty($_POST['email'])){
         $error=true;
       	$emailErr="Email is required!";
       }
       else if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
         $error=true;
       	$emailErr="Invalid email format!";
       }
       else{
         
       	$email=dataCleaner($_POST['email']);
       }

       /* for mobile number validation  */
        if(empty($_POST['number'])){
          
          $mobileNum="";
        }
        else if (strlen($_POST['number'])<12) {
           $error=true;
        	$mobileErr="Invalid number size!".strlen($_POST['number']);
        }
        else if (!preg_match("/^[+0-9]*$/", $_POST['number'])) {
           $error=true;
        	$mobileErr="Invalid number format!";
        }
        else{
    
        	$mobileNum=dataCleaner($_POST['number']);
        }

        /* for password validation  */
          if (empty($_POST['pass'])) {
             $error=true;
          	$passwordErr="Password is required!";
          }
          else if (strlen($_POST['pass'])<8 || strlen($_POST['pass'])>12) {
             $error=true;
          	$passwordErr="Password must be 8-12 characters!";
          }
          else if (!preg_match("/^[a-zA-Z0-9!@#$%^&*(){}]*$/", $_POST['pass'])) {
             $error=true;
          	$passwordErr="Password must be alphabatic, numeric and special chars!";
          }
          else {
        
           $password=dataCleaner($_POST['pass']);
          }

          /* for Repassword validation  */
             if (empty($_POST['repass'])) {
               $error=true;
          	$repasswordErr="Repassword is required!";
          }
          else if (strlen($_POST['repass'])<8 || strlen($_POST['repass'])>12) {
             $error=true;
          	$repasswordErr="Repassword must be 8-12 characters!";
          }
          else if (!preg_match("/^[a-zA-Z0-9!@#$%^&*(){}]*$/", $_POST['repass'])) {
             $error=true;
          	$repasswordErr="Repassword must be alphabatic, numeric and special chars!";
          }
          else if($_POST['repass'] != $_POST['pass']){
             $error=true;
            $repasswordErr="Password are not matched!";
          }
          else {
          
           $repassword=dataCleaner($_POST['repass']);
          }

          
            if(!$error){ 
  $password=md5($password);

  
  $link = mysqli_connect("localhost", "root", "", "lavendardb");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Prepare an insert statement
$sql = "insert into Customer (C_name,C_Address,C_email,C_phone,C_password) VALUES (?, ?, ?, ?, ?)";
 
if($stmt = mysqli_prepare($link, $sql)){
    // Bind variables to the prepared statement as parameters
    mysqli_stmt_bind_param($stmt, "sssss", $firstName, $lastName, $email, $mobileNum, $password);
    
   
    mysqli_stmt_execute($stmt);
   
    
    $_SESSION['mess'] = "Records inserted successfully.";
} else{
    $_SESSION['mess'] = "ERROR: Could not prepare query: $sql. " . mysqli_error($link);
}
 
// Close statement
mysqli_stmt_close($stmt);
 
// Close connection
mysqli_close($link);
  
  
  
  $_SESSION['username']=$firstName;
  $_SESSION['mess']="Now You are successfully registered.";
  header("location:login.php");
  
  
  
}
else{
  $_SESSION['username']=null;
  $_SESSION['mess']="error";
  //header("location:index.php");
}
                  

}


function dataCleaner($var){
$var=trim($var);
$var=stripslashes($var);
$var=htmlspecialchars($var);
return $var;
}
?>



<!DOCTYPE HTML>
<html>
<head>
<title>Lavendar</title>
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
<body style=" background-image: url('images/s2-unsplash.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">

    <!-- start menu -->
    <div class="menu" style=" background-image: url('images/s2-unsplash.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
	  	<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	  <a class="navbar-brand" href="index.php">Lavendar<small>Feel it</small></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	             <li class="nav-item "><a href="index.php" class="nav-link">Home</a></li>
			  	   <li class="nav-item "><a href="login.php" class="nav-link">login</a></li>
			   <li class="nav-item  active"><a href="Signup.php" class="nav-link">Signup</a></li>
	      

	        </ul>
	      </div>
		  </div>
	  </nav>
    <!-- END nav -->
	</div>
	<!-- end menu -->
        <div class="main" style=" background-image: url('images/s2-unsplash.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;">
          <div class="register-grids">
          	<div class="container">
						  <form method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
								<div class="register-top-grid">
										<h3 style="color: #fff;">PERSONAL INFORMATION</h3>
										<div>
											<span style="color: #fff;">Name<label>*</label></span>
												<input type="text" id="First" name="first" placeholder="First Name..." value="<?php echo $firstName;?>">
<span id="e1" style ="color:red"><?php  echo $firstErr; ?> </span>
										</div>
										<div>
											<span style="color: #fff;">Email<label>*</label></span>
										<input type="text" id="email" name="email"  placeholder="Email address..." value="<?php echo $email;?>">
<span id="e3" style ="color:red"><?php echo $emailErr; ?></span>
										</div>
										<div>
											<span style="color: #fff;">Number<label>*</label></span>
<input type="text" id="number" name="number" placeholder="Mobile Number..." value="<?php echo $mobileNum;?>">
<span id="e4" style ="color:red"><?php echo $mobileErr; ?></span>
										</div>
										<div>
											<span style="color: #fff;">ADDRESS<label>*</label></span>
<input type="text" id="Last" name="last"  placeholder="Address..." value="<?php echo $lastName;?>">
<span id="e2" style ="color:red"><?php echo $lastErr; ?></span>
										</div>
										<div>
											<span style="color: #fff;">Password<label>*</label></span>
<input type="password" id="Pass" name="pass"  placeholder="Password..." value="<?php echo $password;?>">
<span id="e5" style ="color:red"><?php echo $passwordErr; ?></span>
										</div>
										<div>
											<span style="color: #fff;">Re-Password<label>*</label></span>
<input type="password" id="Passc" name="repass"  placeholder="Retype Password..." value="<?php echo $repassword;?>">
<span id="e6" style ="color:red"><?php echo $repasswordErr; ?></span>
										</div>
										<div class="clear"> </div>
											<a class="news-letter" href="#">
												<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
											</a>
										<div class="clear"> </div>
								
							<input type="submit"  class="btn btn--radius btn--green" name="signup"  value="REGISTER"><span style="color:White">"<?php echo $_SESSION["mess"]?>"</span>
                         
						</form>
					</div>
				</div>
         </div>
         <div class="footer-bottom" style=" background-image: url('images/s2-unsplash.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
  margin-top: 14.5%;">
  </div>
		  <div class="copyright" style="background-color: #000000;">
		  <div class="container" style="background-color: #000000;">
		    <div class="copy" style="background-color: #000000;">
		        <p>© 2020 <a href="http://w3layouts.com" target="_blank">Customized Lavendar</a></p>
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
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
			<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title>Lavendar</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

  
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/logo1.png" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <!---link rel="stylesheet" href="css/style.css--->
	<link rel="stylesheet" id="s" type="text/css" href="css/style.css">
	    <!---link rel="stylesheet" href="css/style.css--->
	<link rel="stylesheet"  type="text/css" href="css/Theme.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">


    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
	<script src="addcart.js"></script>
	<script src="Theme.js"></script>
	<style>
/* The container */
.container1 {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 22px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default checkbox */
.container1 input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 0;
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  margin-top:10px
}

/* On mouse-over, add a grey background color */
.container1:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the checkbox is checked, add a blue background */
.container1 input:checked ~ .checkmark {
  background-color: #2196F3;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container1 input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container1 .checkmark:after {
  left: 9px;
  top: 5px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 3px 3px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<script>
var s=true;
var c=true;
var v=true;
var sl=true;
var sp=true;




function order(){

       
      if(!s && !c && !v){
        Additem(6);
        window.alert("order placed");
       }
      else if(!s && !c && !sp){
        Additem(0);
        window.alert("order placed");
       }
      else if(!s && !c && !sl){
         Additem(2);
         window.alert("order placed");
     }
     else if(!s && !c){
        Additem(4);
        window.alert("order placed");
	   }
    

close1();
location.reload();

}
function close1(){


document.getElementById("box").style.display = "none";//<!-- this line make  div  not visible -->*/

} 


window.onclick = function(event) {//<!-- default function -->*/
    if (event.target == document.getElementById("box")) {//<!-- when the mouse clicks this condition check the mouse pointer is outside the small(hello box div) and clicked close all div -->*/
        document.getElementById("box").style.display  = "none";//<!-- this line make  div  not visible -->*/
    }
}
var cakeitem=[];
var top1=0;
function box(){
//window.alert("work"+top1+"  "+typeof(top));
if(top1==0){

window.alert("Please drop item");

}else if(top1==1){
    window.alert("please select a better combination");
}
else if(top1==2){
 if(cakeitem[0]=='lf' && cakeitem[1]=='oil'){
 document.getElementById("cake_images").src="images/lavenderInfusedoil.jpg";
  box4();
 }else if(cakeitem[1]=='lf' && cakeitem[0]=='oil'){
 
  //window.alert("two Strwbery chocolate cake");
 document.getElementById("cake_images").src="images/lavenderInfusedoil.jpg";
 box4();
 
 }else{
 
    window.alert("please select a better combination");
 }
  
}
else if(top1==3){

    if(cakeitem[0]=='lf' && cakeitem[1]=='oil'&& cakeitem[2]=='soap'){
 
 document.getElementById("cake_images").src="images/s6-unsplash.jpg";
  box4();
 }

else if(cakeitem[0]=='lf' && cakeitem[1]=='soap'&& cakeitem[2]=='oil'){
 
 document.getElementById("cake_images").src="images/s6-unsplash.jpg";
  box4();
 }

else if(cakeitem[0]=='soap' && cakeitem[1]=='oil'&& cakeitem[2]=='lf'){
 
 document.getElementById("cake_images").src="images/s6-unsplash.jpg";
  box4();
 }

 else if(cakeitem[0]=='soap' && cakeitem[1]=='lf'&& cakeitem[2]=='oil'){
 
 document.getElementById("cake_images").src="images/s6-unsplash.jpg";
  box4();
 }

else if(cakeitem[0]=='oil' && cakeitem[1]=='lf'&& cakeitem[2]=='soap'){
 
 document.getElementById("cake_images").src="images/s6-unsplash.jpg";
  box4();
 }

//////


if(cakeitem[0]=='lf' && cakeitem[1]=='oil'&& cakeitem[2]=='salt'){
 
 document.getElementById("cake_images").src="images/salt1.jpg";
  box4();
 }

else if(cakeitem[0]=='lf' && cakeitem[1]=='salt'&& cakeitem[2]=='oil'){
 
 document.getElementById("cake_images").src="images/salt1.jpg";
  box4();
 }

else if(cakeitem[0]=='salt' && cakeitem[1]=='oil'&& cakeitem[2]=='lf'){
 
 document.getElementById("cake_images").src="images/salt1.jpg";
  box4();
 }

 else if(cakeitem[0]=='salt' && cakeitem[1]=='lf'&& cakeitem[2]=='oil'){
 
 document.getElementById("cake_images").src="images/salt1.jpg";
  box4();
 }

else if(cakeitem[0]=='oil' && cakeitem[1]=='lf'&& cakeitem[2]=='salt'){
 
 document.getElementById("cake_images").src="images/salt1.jpg";
  box4();
 }

 /////////

 if(cakeitem[0]=='lf' && cakeitem[1]=='oil'&& cakeitem[2]=='sugar'){
 
 document.getElementById("cake_images").src="images/sugarScrub.png";
  box4();
 }

else if(cakeitem[0]=='lf' && cakeitem[1]=='sugar'&& cakeitem[2]=='oil'){
 
 document.getElementById("cake_images").src="images/sugarScrub.png";
  box4();
 }

else if(cakeitem[0]=='sugar' && cakeitem[1]=='oil'&& cakeitem[2]=='lf'){
 
 document.getElementById("cake_images").src="images/sugarScrub.png";
  box4();
 }

 else if(cakeitem[0]=='sugar' && cakeitem[1]=='lf'&& cakeitem[2]=='oil'){
 
 document.getElementById("cake_images").src="images/sugarScrub.png";
  box4();
 }

else if(cakeitem[0]=='oil' && cakeitem[1]=='lf'&& cakeitem[2]=='sugar'){
 
 document.getElementById("cake_images").src="images/sugarScrub.png";
  box4();
 }




}

else if(top1==4 || top1==5){
    window.alert("please select only three items.");

}

}


function allowDrop(ev) {
  ev.preventDefault();
}

function drag(ev) {
  ev.dataTransfer.setData("text", ev.target.id);
}

function drop(ev) {
  ev.preventDefault();
  var data = ev.dataTransfer.getData("text");
  if(data=='lf' && s){
  ev.target.appendChild(document.getElementById(data));
  //window.alert(document.getElementById(data)+"   "+data);
  cakeitem[top1]=document.getElementById(data).id;
  //window.alert(cakeitem[top1]);
  top1++;
   document.getElementById('cs').checked=true;
   s=false;
   //window.alert(top1);
   }else if(data=='oil' && c){
  ev.target.appendChild(document.getElementById(data));
  //window.alert(document.getElementById(data)+"   "+data);
  cakeitem[top1]=document.getElementById(data).id;
  //window.alert(cakeitem[top1]);
  top1++;
  document.getElementById('cc').checked=true;
    c=false;
   ////window.alert(top1);
   }else  if(data=='sugar' && v){
  ev.target.appendChild(document.getElementById(data));
  //window.alert(document.getElementById(data)+"   "+data);
  cakeitem[top1]=document.getElementById(data).id;
  //window.alert(cakeitem[top1]);
  top1++;
   document.getElementById('cv').checked=true;
     v=false;
   //window.alert(top1);
   }else  if(data=='salt' && sl){
  ev.target.appendChild(document.getElementById(data));
  //window.alert(document.getElementById(data)+"   "+data);
  cakeitem[top1]=document.getElementById(data).id;
  //window.alert(cakeitem[top1]);
  top1++;
   document.getElementById('ol').checked=true;
     sl=false;
   //window.alert(top1);
   }else  if(data=='soap' && sp){
  ev.target.appendChild(document.getElementById(data));
  //window.alert(document.getElementById(data)+"   "+data);
  cakeitem[top1]=document.getElementById(data).id;
  //window.alert(cakeitem[top1]);
  top1++;
   document.getElementById('sl').checked=true;
     sp=false;
   //window.alert(top1);
   }
}
function itemc(value){

if(value=='lf'){
cakeitem[top1]=value;
top1++;
s=false;
}else if(value=='oil'){
    cakeitem[top1]=value;
    top1++;
    c=false;
    }
else if(value=='sugar'){
    cakeitem[top1]=value;
    top1++;
    v=false;
    }
else if(value=='salt'){
    cakeitem[top1]=value;
    top1++;
    sl=false;
    }
else if(value=='soap'){
    cakeitem[top1]=value;
    top1++;
    sp=false;
    }

}
</script>
</head>

<body onload="Theme();update();">

<!-- TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTHHHHHHHHHHHHHHHHHHHHHHHHHHHHEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE-->		
					


<div id="box"  style= "display: none;"><!-- big div which is not visible till you click the button -->

<div id="inside-the-box4" style= "display: none; z-index:10; " ><!-- small div color white having all the things inside  -->

<span class="close" onclick="close1()">&times;</span><!-- small cross to close the big div   -->

<table style="table-layout: fixed; width: 100%;">
<tr>
<th ><h2 style="  font-weight: bold; color: #000000;"><strong>Your product looks like that</strong></h2></th>



</tr>
<tr>
<td   style="width:50%;" >
  	<img id="cake_images" src="st.jpg" style="   display: block; margin-left: auto; margin-right: auto;width: 50%;" id ="letred">

  </td>
  <td   style="width:50%;" >
  	<button class="button button1" onclick="order();">Place Order<button>

  </td>
  </tr>
  
  
  
  </table>
  
  
</div><!-- small div end here all thing you up in -->
</div><!-- big div end here all thing you up in -->





					
			<!--ENNNNNNNNNNNNNNNNNNNNNNNNNNNNDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDD TTTTTTTTTTTTTTTTTTTTTTTTTTTTTTTHHHHHHHHHHHHHHHHHHHHHHHHHHHHEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEEE-->					
	









     <!-- Start Main Top -->
     <div  class="main-top">
        <div class="container-fluid" id="mainheader">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">

                    <div class="right-phone-box">
                        <p>Call US :- <a href="#"> +xxx xxx  xxx xxxx</a></p>
                    </div>
                    <div class="our-link">
                        <ul>
                            <li><a href="#"><i class="fa fa-user s_color"></i> My Account</a></li>
                            <li><a     onclick="box4()"><i class="fas fa-setting"></i>Theme</a></li>
                            <li><a href="#"><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                
                    <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Scrubs
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Oils
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Lavander soaps
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Salts
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%!  
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header"   >
        <!-- Start Navigation -->
        <nav id="mainheader1"   class="navbar navbar-expand-lg navbar-light con navbar-default bootsnav" >
            <div class="container"   >
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="index.php"><img src="images/logo1.png" width="130" height="110" class="logo" alt="No image"></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp">
                        <li class="nav-item active"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a id="b1" class="nav-link" href="about.php">About Us</a></li>
                        <li class="dropdown">
                            <a id="b35" href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown">SHOP</a>
                            <ul class="dropdown-menu">
							
                                <li><a href="cart.php">Cart</a></li>
                                <li><a href="checkout.php">Checkout</a></li>
                                <li><a href="my-account.html">My Account</a></li>
                             
                            </ul>
                        </li>
                           <li class="nav-item"><a id="b36" class="nav-link" href="Design.php">Design Product</a></li>
						 <li class="nav-item"><a id="b36" class="nav-link" href="login.php">login</a></li>
						  <li class="nav-item"><a id="b38" class="nav-link" href="signup.php">Signup</a></li>
                        <li class="nav-item"><a  id="b39" class="nav-link" href="contact-us.php">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        <li class="side-menu">
							<a href="#">
								<i id="b46" class="fa fa-shopping-bag" ></i>
								<span  class="badge" id="item_number">0</span>
								<p id="b47">My Cart</p>
							</a>
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list"  id="cart_list">
					
					
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->
            </div>
            <!-- Start Side Menu -->
            <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">
                     
                    </ul>
                </li>
            </div>
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->

    <!-- Start All Title Box -->
    <div class="all-title-box" style="background: url('./images/s2-unsplash.jpg') no-repeat center center;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Customize Product</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Customize Product</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">

            <div class="row">
			          
				<div class="col-lg-6">
                    <div class="banner-frame" id='dropid' ondrop="drop(event)" ondragover="allowDrop(event)" style=" border: 2px solid black; max-height:400px;"><h2><br></h2>
					<h2><br></h2>
					<h2><br></h2>
					<h2><br></h2>
					<h2><br></h2>
					<h2><br></h2>
					<h2><br></h2>
					<h2><br></h2>
					<h2><br></h2>
					<h2><br></h2>
				    <h2><br></h2>
					<h2><br></h2>
					<h2><br></h2>
                    </div>
                </div>
								<div class="col-lg-6">
								<table>
								
								<td>
<div class="banner-frame"  width="100px" style=" border: 2px solid black; min-height:400px;  height: 100%;
  width: 100%;"> <ul>
  <li><img id="lf" src="images/lf.jpg" draggable="true" value="Lavendar" ondragstart="drag(event)"  width="100px"  height="100px" ></li>
  <li><img id="oil" src="images/oil.jpg" draggable="true" value="oil" ondragstart="drag(event)" width="100px"  height="100px"></li>
   <li><img id="sugar" src="images/sugar.jpg" draggable="true" value="sugar" ondragstart="drag(event)" width="100px"  height="100px"></li>
   <li><img id="salt" src="images/salt.jpg" draggable="true" value="salt" ondragstart="drag(event)" width="100px"  height="100px"></li>
   <li><img id="soap" src="images/soap.jpg" draggable="true" value="soap" ondragstart="drag(event)" width="100px"  height="100px"></li>
  
  <li><button class="button button1" onclick="box()" value="process">Make it</button></li>
</ul></div>
								
								</td>
								
								
									<td>

																<div class="banner-frame" width="100px" style="   height: 100%;
  width: 100%;">
<h1>Custom Checkboxes</h1>
<label class="container1">Lavender flower
  <input id="cs" type="checkbox" onclick="itemc('lf');">
  <span class="checkmark"></span>
</label>
<label class="container1">Essential oil
  <input id="cc" type="checkbox" onclick="itemc('oil');">
  <span class="checkmark"></span>
</label>
<label class="container1">Sugar
  <input id="cv" type="checkbox" onclick="itemc('sugar');">
  <span class="checkmark"></span>
</label>
<label class="container1">Sea salt 
  <input id="ol" type="checkbox" onclick="itemc('salt');">
  <span class="checkmark"></span>
</label>
<label class="container1">Soap base
  <input id="sl" type="checkbox" onclick="itemc('soap');">
  <span class="checkmark"></span>
</label>






                    </div>
								</td>
								
								
								</table>
								
								
								
								
								
								
          </div>



                
            </div>
          




    <!-- Start Footer  -->
    <footer>
        <div class="footer-main" id="mainheader5">
            <div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Business Time</h3>
							<ul class="list-time">
								<li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Newsletter</h3>
							<form class="newsletter-box">
								<div class="form-group">
									<input class="" type="email" name="Email" placeholder="Email Address*" />
									<i class="fa fa-envelope"></i>
								</div>
								<button id="b25" class="btn hvr-hover" type="submit">Submit</button>
							</form>
						</div>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<div class="footer-top-box">
							<h3>Social Media</h3>
							<p></p>
							<ul>
                                <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
                            </ul>
						</div>
					</div>
				</div>
				<hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>Customized Lavender Products</h4>
                            <p>We are here to let you decide</p> 
							<p>How your product will look like and How you can design it</p> 							
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Our Sitemap</a></li>
                                <li><a href="#">Terms &amp; Conditions</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Delivery Information</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address:xxxxxxxxxx <br>xxxxxxxxxxxxx,<br> xxxxxxxxxxxxxxx </p>
                                </li>
                                <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+xxxxxxxxxxxx">+xxxxxxxxxxxxxxxx</a></p>
                                </li>
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:contactinfo@gmail.com">Customized@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

 <!-- Start copyright  -->
 <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved. &copy; 2020 <a href="#">Lavender</a>
    </div>
    <!-- End copyright  -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>

    <!-- ALL JS FILES -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/jquery.superslides.min.js"></script>
    <script src="js/bootstrap-select.js"></script>
    <script src="js/inewsticker.js"></script>
    <script src="js/bootsnav.js."></script>
    <script src="js/images-loded.min.js"></script>
    <script src="js/isotope.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/baguetteBox.min.js"></script>
    <script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
	<script src='Theme.js'></script>
</body>

</html>
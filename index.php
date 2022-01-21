
<?php 
    // some php stuff 
	
	
	
	
?> 
		<script type="text/javascript" src="addcart.js"></script>
	<script type="text/javascript" src="Theme.js"></script>

<Script type="text/javascript">


Theme();




function Theme(){

	var x="";
	if(get_theme()==null){
		
		
	}else{
	x = get_theme();}
	switch(x){
		
		case "W":

  
		//window.alert("wood");
		gowood();
		break;
		
		case "D":
		//window.alert("Drak");
		godark();
		break;
		case "C":
		//window.alert("deafult");
		godefault();
		break;
		
		
		default:
		
		godefault();
		
	}
	
	
	
}
function set_theme(value){
	
var theme=value;
localStorage.setItem("theme", theme);
	
	
	
}

function get_theme(){
	

	
	return localStorage.getItem("theme");
	
}


function box4(){
document.getElementById("box").style="padding-top :50px;";<!-- this line create the border cross the big div  -->*/
document.getElementById("box").style.display = "block";<!-- this line make  div visible -->*/
  document.getElementById("mainheader1").style = "z-index:2;";
document.getElementById("inside-the-box4").style.display = "block";<!-- this line make  div visible -->*/
}

function gowood(){
	
	set_theme("W");
	
		 document.getElementById("s").href="css/styleW.css"; 



  document.getElementById("inside-the-box4").style = " background-image: url('images/Wood.jpg');"; 
  //document.getElementById("box").style = "background-color: rgba(222,184,135,0.7);"; 
   /* Black w/ opacity */
///<  Change of back ground images and other images   >
document.getElementById("mainheader").style = " background-image: url('images/Wood.jpg');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:2;  color:#8B0000;";
 
  document.getElementById("mainheader1").style = " background-image: url('images/Wood.jpg')    !important;"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:1;  color:#8B0000;";
  
  
  		   var b="b";
  for(var i=46;i<48;i++){
	  b="b";
	  b=b+i;
	 document.getElementById(b).style="color:white;";  
	  
  }
    document.getElementById("mainheader2").style = " background-image: url('images/Wood.jpg')     !important;"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";
      document.getElementById("mainheader3").style = " background-image: url('images/Wood.jpg');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";
        document.getElementById("mainheader4").style = " background-image: url('images/Wood.jpg');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";
        document.getElementById("mainheader5").style = " background-image: url('images/Wood.jpg');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";
 



}

function godefault(){
	set_theme("C");
	 document.getElementById("s").href="css/style.css"; 
	 

  document.getElementById("inside-the-box4").style = "background-image: url('images/D.png');"; 
 
///<  Change of back ground images and other images   >
document.getElementById("mainheader").style = " background-image: url('');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:2;  ";
  document.getElementById("mainheader1").style = " background-image: url('')       !important;"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:1;  ";
    document.getElementById("mainheader2").style = " background-image: url('');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";
      document.getElementById("mainheader3").style = " background-image: url('');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";
        document.getElementById("mainheader4").style = " background-image: url('');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";
        document.getElementById("mainheader5").style = " background-image: url('');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";
  //<     change button color and front      >

      var b="b";
  for(var i=46;i<48;i++){
	  b="b";
	  b=b+i;
	 document.getElementById(b).style="color:black;";  
	  
  }

  


}

function godark(){
	set_theme("D");
  //window.alert("Dark");
 document.getElementById("s").href="css/styleD.css"; 
 document.getElementById("inside-the-box4").style = " background-image: url('images/mainD.jpg');";
    var b="b";
  for(var i=46;i<48;i++){
	  b="b";
	  b=b+i;
	 document.getElementById(b).style="color:white;";  
	  
  }

document.getElementById("mainheader").style = " background-image: url('images/mainD.jpg')       !important;"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:2;  color:#8B0000;";

  document.getElementById("mainheader1").style = " background-image: url('images/mainD.jpg')       !important;"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:1;  color:#8B0000;";

 
    document.getElementById("mainheader2").style = " background-image: url('images/mainD.jpg');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";
      document.getElementById("mainheader3").style = " background-image: url('images/mainD.jpg');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";

 
 try{
	 
        document.getElementById("mainheader4").style = " background-image: url('images/mainD.jpg');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";
        document.getElementById("mainheader5").style = " background-image: url('images/mainD.jpg');"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:-1;";
	 
 }catch(err){
	 
		    var b="b";
  for(var i=48;i<50;i++){
	  b="b";
	  b=b+i;
	 document.getElementById(b).style="color:white;";  
	  
  } 
	 
 }
 
 
  //<     change button color and front      >

  
  
  
  	  document.getElementsByTagName("H5")[0].setAttribute("class", "c1");
	  //document.getElementsByTagName("H5")[0].setAttribute("backgroud-color", "#121f1f");


}

function close1(){


document.getElementById("box").style.display = "none";//<!-- this line make  div  not visible -->*/

} 


window.onclick = function(event) {//<!-- default function -->*/
    if (event.target == document.getElementById("box")) {//<!-- when the mouse clicks this condition check the mouse pointer is outside the small(hello box div) and clicked close all div -->*/
        document.getElementById("box").style.display  = "none";//<!-- this line make  div  not visible -->*/
    }
}


</script>



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

	<style>


	
	
	</style>
	
	
	
	
</head>

<body onload="update();Theme();" >


<div id="box"  style= "display: none;"><!-- big div which is not visible till you click the button -->

<div id="inside-the-box4" style= "display: none;" ><!-- small div color white having all the things inside  -->

<span class="close" onclick="close1()">&times;</span><!-- small cross to close the big div   -->
<table style="table-layout: fixed; width: 100%;">
<tr>
<th>Background</th>
<th>Front</th>
<th>color</th>
<th>select</th>

</tr>
<tr>
<td   style="width:100%;" >
   <img src="images/def1.png" style="   display: block; margin-left: auto; margin-right: auto;width: 100%;" id ="letred">
  </td><td>
	  <h2 style="color:#b0b435; font-family: 'Dosis', sans-serif;">Dosis</h2>
  </td>
  <td>
   
  
     <h2 style="color:#b0b435;font-family: 'Dosis', sans-serif; ">Green</h2>
	</td>
	<td>
	
		<button class="button button1" style=" font-family: 'Dosis', sans-serif;" onclick="godefault()" >Default</button>
  </td>
  </tr>
  
  <tr>
<td   style="width:50%;"  >
   <img src="images/w1.png" style="   display: block; margin-left: auto; margin-right: auto;width: 100%;" id ="letred">
  </td>
	<td>
	  <h2 style="color:rgb(222,184,135); font-family: Arial, Helvetica, sans-serif;">Ariel</h2>
  </td>
  <td>
   
  
     <h2 style="color:rgb(222,184,135);">Brown</h2>
	</td>
  
	<td>
	

    <button class="button button2" style=" font-family: Arial, Helvetica, sans-serif;" onclick="gowood()">Wood</button>

  </td>
  </tr>
  
  <tr>
<td   style="width:50%;"  >
   <img src="images/n1.png" style="   display: block; margin-left: auto; margin-right: auto;width: 100%;" id ="letred" >
  </td>
<td>
	  <h2 style="color:Grey; font-family: Times New Roman, Times, serif;">Times New Roman</h2>
  </td>
  <td>
   
  
     <h2 style="color:#121f1f;"></h2>
	   <h2 style="color:Grey; font-family: Times New Roman, Times, serif;">Grey</h2>
	</td>
	<td>
	
	    <button class="button button3"style=" font-family: Times New Roman, Times, serif;" onclick="godark()">NIGHT</button>
  </td>
  </tr>
  
  </table>
  
  
</div><!-- small div end here all thing you up in -->




</div><!-- big div end here the black one -->









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

   

    <!-- Start Slider -->
    <div id="slides-shop" class="cover-slides" style="z-index:0">
        <ul class="slides-container">
            <li class="text-center">
                <img src="images/s2-unsplash.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Customized Lavender Products</strong></h1>
                            <p class="m-b-40">We let you design your own lavender products.</p>
                            <p><a id="b2" class="btn hvr-hover" href="#">Shop Now</a></p>

                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/s3-unsplash.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Customized Lavender Products</strong></h1>
                            <p class="m-b-40">We let you design your own lavender products.</p>
                            <p><a id="b2" class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="images/s1-unsplash.jpg" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="m-b-20"><strong>Customized Lavender Products</strong></h1>
                            <p class="m-b-40">We let you design your own lavender products.</p>
                            <p><a id="b2" class="btn hvr-hover" href="#">Shop Now</a></p>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <div class="slides-navigation">
            <a href="#" id="b2" class="next"><i id="b2" class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" id="b2" class="prev"><i id="b2" class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop" id="mainheader2"  >
        <div class="container"   >
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box" >
                        <img class="img-fluid" src="images/s4-unsplash(1).jpg" alt="" />
                        <a id="b3" class="btn hvr-hover" href="#">Lavender Salt</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box" >
                        <img class="img-fluid" src="images/s5-unsplash.jpg" alt="" />
                        <a id="b4" class="btn hvr-hover" href="#">Lavender Oil</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <div class="shop-cat-box" >
                        <img class="img-fluid" src="images/s6-unsplash.jpg" alt="" />
                        <a id="b5" class="btn hvr-hover" href="#">Lavender Soap</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products" id="mainheader3"  >
		<div class="container"  >
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12"  >
					<div class="offer-box-products"  >
						<img class="img-fluid" src="images/s4-unsplash.jpg" alt=""   />
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12"  >
					<div class="offer-box-products" >
						<img class="img-fluid" src="images/s7-unsplash(2).jpg" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Products  -->
    <div class="products-box" id="mainheader4"  >
        <div class="container"  >
            <div class="row">
                <div class="col-lg-12"  >
                    <div class="title-all text-center">
                        <h1>Lavender Product</h1>
                    </div>
                </div>
            </div>
            <div class="row"  >
                <div class="col-lg-12"  >
                    <div class="special-menu text-center">
                        <div class="button-group filter-button-group">
                            <button id="b6" class="active" data-filter="*">All</button>
                            <button id ="b7" data-filter=".top-featured">Top featured</button>
                            <button id ="b8" data-filter=".best-seller">Best seller</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row special-list" >
                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale" id="b26">Sale</p>
                            </div>
                            <img src="images/s4-unsplash(1).jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a id ="b9" href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a id ="b10" href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a id ="b11" href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" id="b16" onclick="Additem(0);">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lavender Salt</h4>
                            <h5 id="b32"> £7.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new" id="b27" >New</p>
                            </div>
                            <img src="images/s5-unsplash.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a id ="b12" href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a id ="b13" href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a id ="b14" href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" id="b15" onclick="Additem(2);" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lavender Oil</h4>
                            <h5 id="b28"> £19.79</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale" id="b29">Sale</p>
                            </div>
                            <img src="images/s6-unsplash.jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a id="b33" href="#" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a id="b17" href="#" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a id="b18" href="#" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart"  id="b19" onclick="Additem(4);" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lavender Soap</h4>
                            <h5 id="b30"> £200</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid best-seller">
                    <div class="products-single fix">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="sale" id="b31">Sale</p>
                            </div>
                            <img src="images/s7-unsplash(1).jpg" class="img-fluid" alt="Image">
                            <div class="mask-icon">
                                <ul>
                                    <li><a href="#" id="b20" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                    <li><a href="#" id="b21" data-toggle="tooltip" data-placement="right" title="Compare"><i class="fas fa-sync-alt"></i></a></li>
                                    <li><a href="#" id="b22" data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                </ul>
                                <a class="cart" id="b23" onclick="Additem(6);" href="#">Add to Cart</a>
                            </div>
                        </div>
                        <div class="why-text">
                            <h4>Lavender Hand Scrub</h4>
                            <h5 id="b24">£100</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->


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
		<script src="addcart.js"></script>
	<script src="Theme.js"></script>
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

</body>

</html>
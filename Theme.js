

function Theme(){
	
	var x="";
	if(get_theme()==null){
		
		
	}else{
	x = get_theme();}
	switch(x){
		
		case "W":
		
		gowood();
		break;
		
		case "D":
		
		godark();
		break;
		case "C":
		
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
document.getElementById("box").style="padding-top :50px;";//<!-- this line create the border cross the big div  -->*/
document.getElementById("box").style.display = "block";//<!-- this line make  div visible -->*/
  document.getElementById("mainheader1").style = " background-image: url('images/Wood.jpg')    !important;"+
  "background-repeat: no-repeat;"+
  "background-attachment: fixed;"+
  "background-size: cover;"+"z-index:1;  color:#8B0000;";
document.getElementById("inside-the-box4").style.display = "block";//<!-- this line make  div visible -->*/
}

function gowood(){
	
	set_theme("W");
	 //window.alert("wood");
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
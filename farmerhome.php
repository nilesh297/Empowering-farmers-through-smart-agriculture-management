<!DOCTYPE html>
<?php
session_start();
$username=$_SESSION['username'];
if($username==true)
{
}
else{
header('location:index.php');
}
?>

<html>
<head>
<link rel='stylesheet' type='text/css' href='style2.css'/>
<meta charset="utf-8">
<style>
.slideshow-container{
position:relative;
margin:auto;
height:360px;
}
.dot{
height:12px;
width:12px;
margin-top:0px;
background-color:#bbb;
border-radius:50%;
}
.active:{
background-color:#717171;
}
.fade{
-webkit-animation-name:fade;
-webkit-animation-duration:3s;
animation-name:fade;
animation-duration:3s;
}

#features{
width:900px;
height:500px;
margin-left:5px;
float:left;
background-color:#E6E6FA;
}
#feature1{
width:270px;
height:350px;
border:2px solid green;
margin-left:30px;
float:left;
background-color:#05386B;
}
#feature2{
width:270px;
height:350px;
border:2px solid green;
margin-left:10px;
float:left;
background-color:#05386B;
}
#pricing{
width:430px;
height:500px;
background-color:#E6E6FA;
float:right;
}

</style>
<body style="background-color:white">
<div class="logo">
<img src="agri\logoimg.png" width="100%" height="180px"/>
</img>
</div>

<ul>
<li> <a class="active" href="#home"> Home </a> </li>
<li> <a class="" href="farmhome.php"> Farm Mangement </a> </li>
<li> <a class="" href="farmerregister.php"> Register Product</a> </li>
<li> <a class="" href="farmerrate.php"> Current Rates </a> </li>
<li> <a class="" href="farmercontact.php"> Contact us </a> </li>
<li><a class="" href="logout.php"> Logout </a> </li>
</ul>
</header>

<div class="slideshow-container">

<div class="mySlides fade">
<img class="image" src="agri/2.jpg" style="width:100%;height:360px;">
</div>

<div class="mySlides fade">
<img class="image"  src="agri/Vl6AXJGaZE.jpg" style="width:100%;height:360px;">
</div>

<div class="mySlides fade">
<img  class="image"  src="agri/9f4c2UqAGX.jpg" style="width:100%;height:360px;">
</div>
</div>
<div style="text-align:center">
<span class="dot"></span>
<span class="dot"> </span>
<span class="dot"> </span>
</div>

<script>
var slideIndex=0;
showSlides();

function showSlides(){
var i;
var slides = document.getElementsByClassName("mySlides");
var dots = document.getElementsByClassName("dot");
for(i=0;i<slides.length;i++){
slides[i].style.display="none";
}
slideIndex++;
if (slideIndex > slides.length) { slideIndex=1}
for(i=0;i<dots.length;i++) {
dots[i].className=dots[i].className.replace("active","");
}
slides[slideIndex-1].style.display="block";
dots[slideIndex-1].className+="active";
setTimeout(showSlides,2000);
}
</script>
<div id="features">
<br>
<center><label style="font-size:43px;font-family:candara header;color:grey">
Key features of AgriGear</label><br></center>
</br>
<div id="feature1">
<br>
<img src="Desert.jpg" style="border-radius:100px;margin-left:50px;width:150px;height:150px"/>
<center><label style="font-size:35px;font-family:candara header;color:white">
Precision Farming </label><br></center>

<center><p style="font-size:22px;color:green;margin-left:10px;margin-right:10px;"> Advanced tools for precision farming</p></center>
</div>

<div id="feature2">
<br>
<img src="Desert.jpg" style="border-radius:100px;margin-left:50px;width:150px;color:green;height:150px"/>
<center><label style="font-size:35px;font-family:candara header;color:white">
Real-Time Monitor</label><br></center>
<center><p style="font-size:22px;color:green;"> Farmers have access to real-time monitoring </p></center>
</div>

<div id="feature2">
<br>
<img src="Desert.jpg" style="border-radius:100px;margin-left:50px;width:150px;color:green;height:150px"/>
<center><label style="font-size:35px;font-family:candara header;color:white">
Sustainable Farming</label><br></center>
<center><p style="font-size:22px;color:green;text-align:justify; margin-left:25px;margin-right:25px;"> Promote sustainable </p></center>

</div>
</div>

<div id="pricing">
<br>
<center><label style="font-size:43px;font-family:candara header;color:grey">Important of  AgriGear</label><br><br></center>
<center><img src="agri/23.png" style="width:250px;height:170px;"/>
<center><p style="font-size:22px;color:#05386B; text-align:justify; margin-left:20px;margin-right:15px;font-family:">Our mission is to empower farmers through innovative smart agriculture management solutions. We provide accessible, technology-driven tools and resources to enhance productivity, promote sustainable practices, and improve farmers' livelihoods</p></center>
</div>

<div class="footer">
<div id="leftfooter">
<p style="font-size:19px"> Our Main office <br> </p>
<p style="font-size:16px"> B-12, Tapan Complex, <br>
Opp. HDFC Bank<br> Bhagyanagar, Aurangabad <br> 431001</p>
</div>

<div id="rightfooter">
				<h2 style="color:white;font-size:18px">Follow us on Social Media</h2>
	<P style="color:white;font-size:15px">Facebook/agriGear</p>
	<p style="color:white;font-size:15px">Instagram/@agriGear</p>
			</div>
		<div id="leftfooter2"><center> <p style="color:white;font-size:15px">  &copy; All Copyright reserved By AgriGear Project team </p></center> </div>
</div>
</html>
<?
include("config.php");
require("session.php");
echo $_SESSION['username'];
?>
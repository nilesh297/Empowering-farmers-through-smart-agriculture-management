<?php
include("config.php");
if(isset($_POST['login'])) {
  $username=$_POST['username'];
 $password=$_POST['password'];
  $usertype=$_POST['usertype'];

  $sql="select username,password,usertype from farmerinfo";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($rows=mysqli_fetch_assoc($result))
{
  if(($username==$rows["username"]&& $password==$rows["password"] && $usertype==$rows["usertype"])  === TRUE)
  {
     if($usertype == "Farmer")
	 { 
	    header("Location:farmerhome.php");
	 }
	 if($usertype == "retailer")
	 { 
	    header("Location:retailerhome.php");
	 }
	 if($usertype == "admin")
	 { 
	    header("Location:adminhome.php");
	 }
   }
 }
 }
  else{
  echo "<script>alert('Invalid Username and Password')</script>";
  header('refresh:1; url=index.php');
  }
  }
   mysqli_close($conn);
   ?>
   
   
   
   
   
   
   
   <div id="image">

<div class="slideshow-container">

<div class="mySlides fade">
<img src="Lighthouse.jpg" style="width:100%">
</div>

<div class="mySlides fade">
<img src="Desert.jpg" style="width:100%">
</div>

<div class="mySlides fade">
<img src="Tulips.jpg" style="width:100%">
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
</div>




<div id="left">
<br>
<center> <div id="center"> <label style="font-size:43px;">Our</label>
<label style="font-size:43px;color:#228B22">Solution</label></center>
<p style="font-size:23px;color:#228B22">Agri Marketplace is a digital B2B market solution that brings 
together Farmers and Industrial Buyers.</p>
<p style="font-size:23px;color:black">We drive agricultural transactions through our digital
 platform in combination with our partnership network.Agri marketplace accomodates online payments between buyers
 and sellers,product quality check options,and end to end logistics services </p>
</div>
</div>















<div class="slideshow-container">

<div class="mySlides fade">
<img src="Lighthouse.jpg" style="width:100%">
</div>

<div class="mySlides fade">
<img src="Desert.jpg" style="width:100%">
</div>

<div class="mySlides fade">
<img src="Tulips.jpg" style="width:100%">
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
</div>




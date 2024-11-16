<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='style2.css'/>
<meta charset="utf-8">
<style>
#left{
background-color:#E6E6FA;
float:left;
width:988px;
height:500px;
font-color:;
font-size:1.12em;
font-family:;
}
#center{
width:600px;
border-left:3px black solid;
border-right:3px black solid;

}
#loginbox{
float:right;
width:360px;
height:500px;
background-color:#71C671;
}
img{
opacity:0;
filter:alpha(opacity=50);
}

.bg-text{
background-color:rgb(0,0,0);
background-color:rgba(0,0,0,0.4);
color:white;
font-weight:bold;
border:;
position:absolute;
top:12%;
left:50%;
transform:translate(-50%,-50%);
z-index:3;
width:100%;
height:145px;
padding:;
}

</style>
<body style="background-color:white">
<header>
<div class="header" style="background:url(Jellyfish.jpg); margin-top:0px; height:150px;width:1350px">

</div>
<ul>
<li> <a class="active" href="#home"> Home </a> </li>
<li> <a class="" href="register.php"> Register</a> </li>
<li> <a class="service.html" href=""> Our Services </a> </li>
<li> <a class="contact.html" href=""> Contact us </a> </li>
<li><a class="about.html" href=""> About Us </a> </li>
<li><a class="#" href="">Farmer Login</a> </li>
<li><a class="#" href="">Retailer Login</a> </li> 
<li><a class="#" href="">Admin Login</a> </li> 


</ul>
</header>
<div id="left">
<center> <div id="center"> <h1 style="font-size:35px"> <marquee> Welcome to Krishitrade.com </marquee> </h1></div> </center>
<p style="font-size:19px"> Tutor For Tuition is non-profit organisation that brings 1-on-1 tutoring to understand youth around the nation
Equal opportunities for all students to receive the skills needed to thrive.</p>
</div>

<div id="loginbox">

<form action="" method="POST">
<center>
<h1 style="font-size:30px"> Login here </h1>
<label style="font-size:26px"><b>User Name</b></label><br>
<input type="text" name="mobile" placeholder="Enter username"> <br><br>
<label style="font-size:26px"><b>Password</b></label><br>
<input type="text" name="password" placeholder="Enter password"> <br> <br>
<label style="font-size:26px"><b>User Type</b></label><br>
<select>
<option value="Farmer"> Farmer </option>
<option value="retailer"> Retailer</option>
</select> </br><br>
<input type="submit" name="login" value="login" id="submit">
<br>
<br>
<a href="" style="font-size:18px"> Forgot password </a> &nbsp &nbsp <a href="" style="font-size:18px"> New user? Register here!</a>
</form>

</div>

<div id="footer">
<li style="font-size:18px; color:white">  <a href="about.html" style="color:white"> About us </a> </li>
<li style="font-size:18px; color:white">  <a href="about.html" style="color:white"> Contact us </a> </li>
<li style="font-size:18px; color:white"> This website is designed for the project purpose </li>
</div>

<?php


include("config.php");
if(isset($_POST['login'])) {
$mobile=$_POST['mobile'];
$password=$_POST['password'];


$sql="select mobile,password from farmerinfo";

$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($rows=mysqli_fetch_assoc($result))
{
  if(($mobile==$rows["mobile"]&& $password==$rows["password"]) === TRUE)
  {
  header("Location:farmerhome.php");
   }
  else{
  
  echo "<script>alert('Invalid Username and Password')</script>";
  header('refresh:1; url=index.php');
  }
   }
   }
  }
   mysqli_close($conn);
   ?>

</body>
</html>
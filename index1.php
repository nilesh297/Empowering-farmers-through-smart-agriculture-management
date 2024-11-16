<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='style2.css'/>
<meta charset="utf-8">
<style>
#left{
background-color:#E6E6FA;
float:left;
width:980px;
height:500px;
font-color:;
font-size:1.12em;
font-family:;
border-radius: 18px 18px;
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
border-radius: 18px 18px;
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

.button{
background-color:#4CAF50;
border:none;
color:white;
padding:20px 125px;
text-decoration:none;
display:inline-block;
font-size:16px;
margin:4px 2px;
cursor:pointer;
}

</style>
<body style="background-color:white">
<header>
<div class="header" style="background:url(Jellyfish.jpg); margin-top:0px; height:150px">

</div>
<ul>
<li> <a class="active" href="#home"> Home </a> </li>
<li> <a class="" href="register.php"> Register New User</a> </li>

<li> <a class="" href="contact.php"> Contact us </a> </li>
<li><a class="" href="about.php"> About Us </a> </li>


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
<input type="text" name="username" placeholder="Enter username"> <br><br>
<label style="font-size:26px"><b>Password</b></label><br>
<input type="text" name="password" placeholder="Enter password"> <br> <br>
<label style="font-size:26px"><b>User Type</b></label><br>
<select name="usertype">
<option value="Farmer"> Farmer </option>
<option value="retailer"> Retailer</option>
<option value="admin"> Admin</option>
</select> </br><br>
<input type="submit" name="login" value="login" id="submit">
<br>
<br>
<a href="" style="font-size:18px"> Forgot password </a> &nbsp &nbsp <a href="" style="font-size:18px"> New user? Register here!</a>
</form>

</div>



</div>

<div id="footer">
<li style="font-size:18px; color:white">  <a href="about.html" style="color:white"> About us </a> </li>
<li style="font-size:18px; color:white">  <a href="about.html" style="color:white"> Contact us </a> </li>
<li style="font-size:18px; color:white"> This website is designed for the project purpose </li>
</div>

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

</body>
</html>
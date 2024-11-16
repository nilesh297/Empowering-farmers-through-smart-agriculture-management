<!DOCTYPE html>
<html>
<head>
<script language='javascript'>
javascript:window.history.forward(1);
</script>
<link rel='stylesheet' type='text/css' href='style2.css'/>
<meta charset="utf-8">
<style>
#left{
float:left;
width:70%;
height:512px;
font-color:;
font-size:1.12em;
font-family:;
background:url("342.jpg");
}
#center{
width:360px;
}
#loginbox{
float:right;
border:5px black solid;
width:29.1%;
height:500px;
border-radius:;
background-color:#05386B;
color:#ff;
transform:translate(0%,0%);
}

input[type=text],input[type=password],select{
width:150px;
padding:10px;
margin:5px 0 22px 0;
display:inline-block;
border: 1px solid black bottom;
background:#f1f1f1;
}
input[type=text]:focus,input[type=password]:focus,select:focus{
background-color:#ddd;
outline:none;
}


</style>

<?php
session_start();
include("config.php");
?>
</head>
<body>
<div class="logo">
<img src="agri\logoimg.png" width="100%" height="180px"/>
</img>
</div>

<ul>
<li> <a class="active" href="#home"> Home </a> </li>
<li> <a class="" href="register.php"> Register New User</a> </li>
<li> <a class="" href="contact.php"> Contact Us </a> </li>
<li><a class="" href="about.php"> About Us </a> </li>

</ul>

<div id="left">
<br>
<center> <div id="center;"> <label style="font-size:43px;color:#228B22">Our</label>
<label style="font-size:43px;color:black">Solution</label></center>
<p style="font-size:23px;color:black;text-align:justify;margin-left:20px;margin-right:15px;">The platform for the farmer where he can easily input and store records of their purchases and sell like seeds, fertilizers and crop  in one convenient place.
 <br>Provide a platform for farmers to manage the records of  bills , upload receipts related to their farm activities for easy reference and record-keeping. <br> <br>
&#10004; Farmers can track their and profits more effectively leading to better financial management and planning for the future.<br>
&#10004; Unlimited access to a Indian Market from anywhere and anytime.<br>
&#10004; Tansparent and reliable information.<br>
&#10004; Data and receipts are stored securely on the website , protecting sensitive information of farmers from theft or unauthorized access.

.<br>
&#10004; Custom support and insight.
 </p>
</div>
</div>
<div id="loginbox">
<br> 
<form action="" method="POST">
<center>
<label style="font-size:35px;color:White;margin-left:10px">  <b> Login here <b> </p>
</center>

<label style="color:white;font-size:26px;margin-left:10px"><b>Usertype</b></label>
&nbsp;
<select name="usertype" style="width:170px">
<option value=""> Select </option>
<option value="Farmer"> Farmer </option>
<option value="retailer"> Retailer</option>
<option value="admin"> Admin</option>
</select> </br>

<label style="color:white;font-size:26px;margin-left:10px"><b>Username</b></label>
<input type="text" name="username" placeholder="Enter username"> <br>
<label style="color:white;font-size:26px;margin-left:10px"><b>Password</b></label>
&nbsp;<input type="password" name="password" placeholder="Enter password" id="">

<center> <input type="submit" name="login" value="Login" id="submit"> <center>
<br>
<a href="forgotpassword.php" style="font-size:18px; color:white;"> Forgot password </a> 
</form>
</div>

<div class="footer">
<div id="leftfooter">
<p style="font-size:19px"> Our Main office <br> </p>
<p style="font-size:16px"> B-12, Tapan Complex, <br>
Opp. HDFC Bank<br> Bhagyanagar, Aurangabad <br> 431001</p>
</div>

<div id="rightfooter">
				<h2 style="color:white;font-size:18px">Follow us on Social Media</h2>
					<P style="color:white;font-size:15px">Facebook/agritrade</p>
					<p style="color:white;font-size:15px">Instagram/@agritrade</p>
			</div>
		<div id="leftfooter2"><center> <p style="color:white;font-size:15px"> &copy; All Copyright reserved By Agritrade Project team. G</p></center> </div>
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
   $_SESSION['username']=$username;
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
 
 else
  {
 header('refresh:1; url=index.php');
   }
 
 }
 }
   
  
   
   
  }
   mysqli_close($conn);
   ?>
</body>
</html>
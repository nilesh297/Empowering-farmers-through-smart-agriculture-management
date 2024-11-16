<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='style2.css'/>
<meta charset="utf-8">
<style>
body{
background-color:#8B7D6B;
}
.container{
padding:16px;
background-color:white;
}

input[type=text],input[type=password],select{
width:600px;
padding:15px;
margin:5px 0 22px 0;
display:inline-block;
border:none;
background:#f1f1f1;
}

input[type-text]:focus,input[type=password]:focus,select:focus{
background-color:#ddd;
outline:none;
}
#center{
width:750px;
height:500px;
background-color:#E6E6FA;
font-color:
font-size:1.12em;
font-family:
}
hr{
border:1px solid #f1f1f1;
margin-bottom:25px;
}
.registerbtn{
background-color:#05386B;
color:white;
padding:16px 20px;
margin:8px 0;
border:none;
cursor:pointer;
width:400px;
opacity:0.9;
border-radius:10px;
}
.registerbtn:hover{
opacity:1;
}
.signin{
background-color:#f1f1f1;
text-align:center;
}

</style>
<body style="background-color:#E8E8E8">
<div class="logo">
<img src="agri\logoimg.png" width="100%" height="180px"/>
</img>
</div>

<ul>
<li> <a class="" href="index.php"> Home </a> </li>
<li> <a class="active" href="#register"> Register new user</a> </li>
<li> <a class="" href="contact.php"> Contact Us </a> </li>
<li><a class="" href="about.php"> About Us </a> </li>
</ul>

<center>
<div id="center">

 <form method="POST" action="">
 <div class="container">
 <h1 style="font-size:25px">Register</h1>
 <p style="font-size:16px">Please fill in this form to create an account</p>
 <hr>
 
 <label for="name" style="font-size:18px"><b>Name</b></label><br>
 <input type="text" placeholder="Enter Name" name="name" required><br>
 
 <label for="mob" style="font-size:18px"><b>Mobile No.</b></label><br>
 <input type="text" placeholder="Enter mobile no" maxlength="10" name="mobile"  Pattern="[0-9]{3}[0-9]{3}[0-9]{4}"required><br>
 
  <label for="address" style="font-size:18px"><b>Current Address (in detail)</b></label><br>
 <input type="text" placeholder="Enter address" name="address" required><br>
 
  <label for="username" style="font-size:18px"><b>Username</b></label><br>
 <input type="text" placeholder="Enter Username" name="username" required><br>
 
 <label for="password" style="font-size:18px"><b>Password</b></label><br>
 <input type="password" placeholder="Minimum 8 characters(should have atleast one uppercase,lowercase,number,character)" name="password" maxlength="20" Pattern="(?=.*[a-z])(?=.*[A-Z]).{8,}" required><br>
 <script>
 var password=document.getElementById("password"),
 confirm_password=document.getElementById("confirm_password");
 function validatePassword(){
 if(password.value!=confirm_password.value){
 confirm_password.setCustomValidity("passwords dont match");
 }
 else{
 confirm_password.setCustomValidity('');
 }
 }
 password.onChange=validatePassword;
 confirm_password.onKeyup=validatePassword;
 <input type="password" placeholder="Re-Enter your password" name="repass" required><br>
 </script>
 <label for="password" style="font-size:18px"><b> Confirm Password</b></label><br>
 <input type="password" placeholder="Re-Enter your password" name="repass" required><br>

 
 <label style="font-size:18px"><b>User Type</b></label><br>
<select name="usertype">
<option value="Farmer"> Farmer </option>
<option value="retailer"> Retailer</option>
</select> 
 
 <hr>
 <button type="submit" class="registerbtn" style="font-size:20px" name="register" >Register</button>
 </div>
 <div class="container signin">
 <p style="font-size:16px"> Already have an account <a href="index.php"> sign in</a> </p>
</form>
</div>
</center>


 
<?php
include("config.php");
if(isset($_POST['register'])) {
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$username=$_POST['username'];
$password=$_POST['password'];
$repass=$_POST['repass'];
$usertype=$_POST['usertype'];
if($password==$repass)
{
$sql="insert into farmerinfo (name,mobile,address,username,password,repass,usertype)values('$name','$mobile','$address','$username','$password','$repass','$usertype')";
if($conn->query($sql)==TRUE)
{
echo "<script>alert('User registered registered successfully')</script>";
 header('refresh:1; url=index.php');

}
else{
echo $conn->error;
}
}
else{
echo "<script>alert('Two password did not matches')</script>";

}
}

$conn->close();
?>


</body>
</html>
 
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='style2.css'/>
<meta charset="utf-8">
<style>

body{

background-color:#3CB371;
}
.container{
padding:16px;
background-color:white;
}
input[type=text],input[type=password] {
width:600px;
padding:15px;
margin:5px 0 22px 0;
display:inline-block;
border:none;
background:#f1f1f1;
}
input[type-text]:focus,input[type=password]:focus {
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
background-color:#4CAF50;
color:white;
padding:16px 20px;
margin:8px 0;
border:none;
cursor:pointer;
width:600px;
opacity:0.9;
}
.registerbtn:hover{
opacity:1;
}
.signin{
background-color:#f1f1f1;
text-align:center;
}

</style>
<body style="background-color:black">
<header>
<div class="header" style="background:url(Jellyfish.jpg); margin-top:0px; height:150px">

</div>
<ul>
<li> <a class="" href="index.php"> Home </a> </li>
<li> <a class="active" href="#register"> Register</a> </li>
<li> <a class="service.html" href=""> Our Services </a> </li>
<li> <a class="contact.html" href=""> contact us </a> </li>
<li><a class="about.html" href=""> About Us </a> </li>

</ul>
</header>
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
 <input type="text" placeholder="Enter mobile number" name="mobile" required><br>
 
  <label for="address" style="font-size:18px"><b>Address</b></label><br>
 <input type="text" placeholder="Enter address" name="address" required><br>
 
 <label for="password" style="font-size:18px"><b>Password</b></label><br>
 <input type="password" placeholder="Enter Password" name="password" required><br>
 
 <label for="psw-repeat" style="font-size:18px"><b>Repeat Password</b></label><br>
 <input type="password" placeholder="Confirm password" name="repassword" required><br>
 
 <hr>
 <button type="submit" class="registerbtn" style="font-size:20px" name="register" >Register</button>
 </div>
 <div class="container signin">
 <p style="font-size:16px"> Already have an account <a href="#"> sign in</a> </p>
</form>
</div>
</center>

 
<?php
include("config.php");
if(isset($_POST['register'])) {
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

$password=$_POST['password'];
$repassword=$_POST['repassword'];

$sql="insert into farmerinfo (name,mobile,address,password,repassword)values('$name','$mobile','$address','$password','$repassword')";
if($conn->query($sql)==TRUE)
{
echo "values inserted successfully";
}
else{
echo $conn->error;
}
}
$conn->close();
?>
</body>
</html>
 
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='style2.css'/>
<meta charset="utf-8">
<style>
</style>
<body style="background-color:white">
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
 <form method="POST" action="">
Enter your name:
 <input type="text" placeholder="Enter your name" name="name" id="text" required><br><br>
 
Enter your mob number:
 <input type="text" placeholder="Enter your mb.no." name="mobile" id="no" required><br><br>

Enter address:
 <input type="text" placeholder="Enter your address" name="address" id="address" required><br><br>
 
Enter email:
 <input type="text" placeholder="Enter your Email" name="email" id="address" required><br><br>


Enter your password:
 <input type="password" placeholder="Enter your password" name="password" id="password" required><br><br>

Re-enter your password:
 <input type="password" placeholder="Re-enter your password" name="repassword" id="password" required><br><br>


 <input type="submit" value="Register" name="register" id="reg"><br><br>
 </form>
</center>

<div id="footer">
<li style="font-size:18px; color:white">  <a href="about.html" style="color:white"> About us </a> </li>
<li style="font-size:18px; color:white">  <a href="about.html" style="color:white"> Contact us </a> </li>
<li style="font-size:18px; color:white"> This website is designed for the project purpose </li>
</div>



<?php
include("config.php");
if(isset($_POST['register'])) {
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$email=$_POST['email'];

$password=$_POST['password'];
$repassword=$_POST['repassword'];

$sql="insert into farmerinfo (name,mobile,address,email,password,repassword)values('$name','$mobile','$address','$email','$password','$repassword')";
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





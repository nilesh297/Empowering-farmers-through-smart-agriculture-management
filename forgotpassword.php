<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='style2.css'/>

<style>
#forgot{
width:500px;
height:500px;
background-color:#E6E6FA;
}
</style>
</head>
<body>
<div class="logo">
<img src="Desert.jpg" width="100%" height="150px"/>
</img>
</div>
<ul>
<li> <a class="active" href="index.php"> Home </a> </li>
<li> <a class="" href="register.php"> Register New User</a> </li>

<li> <a class="" href="contact.php"> Contact Us </a> </li>
<li><a class="" href="about.php"> About Us </a> </li>

</ul>
<center>
<div id="forgot">
<h1 style="font-size:25px"> Forgot Password??</h1>
 <p style="font-size:16px"> Enter you name and mobile no</p>
 <hr><form action="" method="POST">
 <label for="productname" style="font-size:18px"><b>Name</b></label><br>
 <input type="text"  placeholder="Enter name" name="name" required><br>
 
 <label for="quantity" style="font-size:18px;"><b> Mobile no.</b></label><br>
 <input type="password"  placeholder=" Enter mobile no." name="mobile" required><br>
 <input type="submit" name="submit" value="submit"/>
 </form>

 
 <?php
include("config.php");

if(isset($_POST['submit']))
{
$name=$_POST["name"];
$mobile=$_POST["mobile"];

$sql1="select * from farmerinfo where mobile='$mobile'";
$result1=mysqli_query($conn,$sql1);
if ($result1)
{
   while($rows=mysqli_fetch_assoc($result1))
   {
   $nam=$rows['name'];
 $username=$rows['username'];
 $password=$rows['password'];
 
 if($name==$nam)
 {
 echo "<br> Your Username is ".$username;
 echo " <br> <br>Your Password is ".$password;
 }
 }
}
}
?>
 </center>
  </div>
 </html>
 
 
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

</style>
<body style="background-color:white">

<div class="logo">
<img src="agri/logo.jpg" width="100%" height="180px"/>
</img>
</div>
<ul>
<li> <a class="" href="adminhome.php">Products Registered</a> </li>
<li> <a class="" href="acceptedproduct.php"> Accepted Products</a> </li>
<li> <a class="" href="updaterate.php"> Update Rates </a> </li>
<li> <a class="" href="orders.php">Products Orders </a> </li>
<li><a class="" href="users.php"> Registered Users </a> </li>
<li><a class="active" href="queries.php"> Queries </a> </li>
<li><a class="" href="logout.php"> Logout </a> </li>
</ul>
<center>
<table border="1">
<br>
<tr style="background-color:#63B8FF;color:black;margin-top:10px;height:70px">
<td style="width:300px">Name</td>
<td style="width:150px">Email</td>
<td style="width:700px">Message</td>
</tr>


<?php
include("config.php");

$sql1="SELECT * FROM contact"; 
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
while($rows=mysqli_fetch_assoc($result))
{
echo "<tr><td>".$rows["name"]."</td>"
."<td>".$rows["email"]."</td>"
."<td>".$rows["message"]."</td></tr>";
}
}
mysqli_close($conn);
?>
</center>
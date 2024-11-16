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
input[type=submit]
{
padding:5px 12px;
font-size:15px;
background-color:#63B8FF;
color:black;
}
</style>
<body style="background-color:white">
<div class="logo">
<img src="agri/logo.jpg" width="100%" height="180px"/>
</img>

</div>
<ul>
<li> <a class="active" href="#home">Products Registered</a> </li>
<li> <a class="" href="acceptedproduct.php"> Accepted Products</a> </li>
<li> <a class="" href="updaterate.php"> Update Rates </a> </li>
<li> <a class="" href="orders.php">Products Orders </a> </li>
<li> <a class="" href="acceptedorder.php">Accepted Orders </a> </li>
<li><a class="" href="users.php"> Registered Users </a> </li>
<li><a class="" href="queries.php"> Queries </a> </li>
<li><a class="" href="logout.php"> Logout </a> </li>
</ul>
</header>
<br>
<table border="1">
<tr style="background-color:#63B8FF;color:black;width:60px; height:65px">
<td style=" width:60px;"><center> Reg. ID </center></td>
<td style=" width:100px;"> <center>Type <center></td>
<td style=" width:150px;"> <center>Product Name </center></td>
<td style=" width:120px;"><center> Quantity</center></td>
<td style=" width:120px;"> <center>Unit</center></td>
<td style=" width:150px;"><center>Mobile</center></td>
<td style=" width:220px;"><center>Address</center></td>
<td style=" width:150px;"><center>Date</center></td>
<td style=" width:150px;"><center>Accept Product</center></td>
<td style=" width:150px;"><center>Reject Product</center></td>

</tr>



<?php
include("config.php");

$sql1="SELECT * FROM productreg"; 
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
while($rows=mysqli_fetch_assoc($result))
{
echo "<tr><td>".$rows["regid"]."</td>"
."<td>".$rows["type"]."</td>"
."<td>".$rows["productname"]."</td>"
."<td>".$rows["quantity"]."</td>"
."<td>".$rows["unit"]."</td>"
."<td>".$rows["mobile"]."</td>"
."<td>".$rows["address"]."</td>"
."<td>".$rows["date"]."</td>"
."<td><form action='accept.php' method='POST'><input type='hidden' name='regid' value=".$rows['regid'].">
<input type='submit' name='submit' Value='Accept Product'></form></td>"
."<td><form action='reject.php' method='POST'><input type='hidden' name='regid' value=".$rows['regid'].">
<input type='submit' name='submit' Value='Reject Product'></form></td></tr>";
}
}
mysqli_close($conn);
?>

</table>
</body>
</html>
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
<li> <a class="" href="adminhome.php">Products Registered</a> </li>
<li> <a class="active" href="acceptedproduct.php"> Accepted Products</a> </li>
<li> <a class="" href="updaterate.php"> Update Rates </a> </li>
<li> <a class="" href="orders.php">Products Orders </a> </li>
<li> <a class="" href="acceptedorder.php">Accepted Orders </a> </li>
<li><a class="" href="users.php"> Registered Users </a> </li>
<li><a class="" href="queries.php"> Queries </a> </li>
<li><a class="" href="logout.php"> Logout </a> </li>
</ul>

<table border="1">
<br>
<tr style="background-color:#63B8FF;color:black;width:60px; height:65px">
<td style=" width:80px;"> Reg id </td>
<td style=" width:140px;"> Type</td>
<td style=" width:180px;">Product Name</td>
<td style=" width:120px;">Quantity</td>
<td style=" width:100px;">Unit</td>
<td style=" width:180px;">Mobile</td>
<td style=" width:280px;">Address</td>
<td style=" width:150px;">Date</td>
<td style=" width:150px;">Reject Products</td>
</tr>



<?php
include("config.php");

$sql1="SELECT * FROM acceptedproduct"; 
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
."<td><form action='rejectaccepted.php' method='POST'><input type='hidden' name='regid' value=".$rows['regid'].">
<input type='submit' name='submit' Value='Reject Product'></form></td></tr>";
}
}
mysqli_close($conn);
?>

</table>

</body>
</html>
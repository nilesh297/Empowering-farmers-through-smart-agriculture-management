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
<li> <a class="" href="acceptedproduct.php"> Accepted Products</a> </li>
<li> <a class="" href="updaterate.php"> Update Rates </a> </li>
<li> <a class="active" href="orders.php">Products Orders </a> </li>
<li> <a class="" href="acceptedorder.php">Accepted Orders </a> </li>
<li> <a class="" href="users.php"> Registered Users </a> </li>
<li> <a class="" href="queries.php"> Queries </a> </li>
<li> <a class="" href="logout.php"> Logout </a> </li>
</ul>


<center>
<table border="1">
<tr style="background-color:#63B8FF;color:black;width:60px; height:65px">
<br>
<td style=" width:90px;">Order Id</td>
<td style=" width:160px;">Product Name</td>
<td style=" width:160px;"> Quantity</td>
<td style=" width:110px;">Unit</td>
<td style=" width:180px;">Mobile</td>
<td style=" width:250px;">Address</td>
<td style=" width:250px;">Date</td>
<td style=" width:170px;">Accept Order</td>
<td style=" width:170px;">Reject Product</td>
</tr>

<?php
include("config.php");

$sql1="SELECT * FROM orders"; 
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
while($rows=mysqli_fetch_assoc($result))
{
echo "<tr><td>".$rows["orderid"]."</td>"
."<td>".$rows["productname"]."</td>"
."<td>".$rows["quantity"]."</td>"
."<td>".$rows["unit"]."</td>"
."<td>".$rows["mobile"]."</td>"
."<td>".$rows["address"]."</td>"
."<td>".$rows["date"]."</td>"
."<td><form action='acceptorder.php' method='POST'><input type='hidden' name='orderid' value=".$rows['orderid'].">
<input type='submit' name='submit' Value='Accept Product'></form></td>"
."<td><form action='rejectorder.php' method='POST'><input type='hidden' name='orderid' value=".$rows['orderid'].">
<input type='submit' name='submit' Value='Reject Product'></form></td></tr>";
}
}
mysqli_close($conn);
?>
</table>

</body>
</html>
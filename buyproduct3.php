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
<li> <a class="" href="retailerhome"> Home </a> </li>
<li> <a class="active" href=""> Buy Product</a> </li>
<li> <a class="" href="retailerrate.php"> Current Rates </a> </li>
<li> <a class="" href="retailercontact.php"> Contact Us </a> </li>
<li><a class="" href=""> About Us </a> </li>
<li><a class="" href="index.php"> Logout </a> </li>
</ul>
</header>
<table border="1">
<tr style="background-color:green">
<td> Reg. ID</td>
<td> Type</td>
<td>Product Name</td>
<td>Quantity</td>
<td>Unit</td>
<td>Mobile</td>
<td>Address</td>
<td>Accept Product</td>
</tr>



<?php
include("config.php");

$sql1="SELECT * FROM acceptedproduct"; 
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>1)
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
."<td><form action='retaileraccept.php' method='POST'><input type='text' name='regid' value=".$rows['regid'].">
<input type='submit' name='submit' Value='Accept Product'></form></td> </tr>";
}
}
mysqli_close($conn);
?>

</table>
<div id="footer">
<li style="font-size:18px; color:white">  <a href="about.html" style="color:white"> About us </a> </li>
<li style="font-size:18px; color:white">  <a href="about.html" style="color:white"> Contact us </a> </li>
<li style="font-size:18px; color:white"> This website is designed for the project purpose </li>
</div>
</body>
</html>
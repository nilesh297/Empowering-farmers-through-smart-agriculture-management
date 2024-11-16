<!DOCTYPE html>
<?php
session_start();
$username=$_SESSION['username'];
if($username!=true)
{
header('location:index.php');
}

?>
<html>
<head>
<link rel='stylesheet' type='text/css' href='style2.css'/>
<meta charset="utf-8">
<style>
#ratelist{
width:800px;
height:500px;
background-color:#E6E6FA;
}
b{
 color:green;
 }
</style>
<body style="background-color:white">
<div class="logo">
<img src="agri\logoimg.png" width="100%" height="180px"/>
</img>
</div>
<ul>
<li> <a class="" href="farmerhome.php"> Home </a> </li>
<li> <a class="" href="farmerregister.php"> Register Products</a> </li>
<li> <a class="active" href=""> Current Rates </a> </li>
<li> <a class="" href="farmercontact.php"> Contact us </a> </li>
<li><a class="" href="logout.php"> Logout </a> </li>
</ul>

 


<center>
<div id="ratelist">

<div id="searchbox">
<form action="" method="POST">
 <br><label for="quantity" style="font-size:25px;">Search current rate </label>
 <input type="text"  placeholder="search" name="productname" style="width:200px;height:30px" required>
 <input type="submit" name="search" value="Search" style="padding:5px 50px;font-size:20px;background-color:#05386B;color:white;"/> <br> <br>
 </form>
 </div>
<?php
include("config.php");

if(isset($_POST['search']))
{
$productname=$_POST["productname"];

$sql1="select * from farmerrate where productname='$productname'";
$result1=mysqli_query($conn,$sql1);
if ($result1)
{
   while($rows=mysqli_fetch_assoc($result1))
   {
      $proname=$rows['productname'];
 $rate=$rows['rate'];
 if($productname==$proname)
 {
 echo " Current Rate of $productname at AgriTrade is <b>".$rate."</b>";
 echo"<br>";
 }
 }
}
}
?>
<hr>


<table border="1"  style="color:black;border:5px royalblue solid">
<br>
<tr style="background-color:#63B8FF;">
<td width="300px"><center>Product Name</center></td>
<td width="150px"><center>Rate </center></td>
</tr>


</center>

<?php
include("config.php");

$sql1="SELECT * FROM farmerrate"; 
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
while($rows=mysqli_fetch_assoc($result))
{
echo "<tr><td>".$rows["productname"]."</td>"
."<td>".$rows["rate"]."</td></tr>";
}
}
mysqli_close($conn);
?>
</table>
</div>
<div class="footer">
<div id="leftfooter">
<p style="font-size:19px"> Our Main office <br> </p>
<p style="font-size:16px"> B-12, Tapan Complex, <br>
Opp. HDFC Bank<br> Bhagyanagar, Aurangabad <br> 431001</p>
</div>

<div id="rightfooter">
				<h2 style="color:white;font-size:18px">Follow us on Social Media</h2>
	<P style="color:white;font-size:15px">Facebook/agriGear</p>
	<p style="color:white;font-size:15px">Instagram/@agriGear</p>
			</div>
		<div id="leftfooter2"><center> <p style="color:white;font-size:15px">  &copy; All Copyright reserved By AgriGear Project team </p></center> </div>
</div>
</body>
</html>
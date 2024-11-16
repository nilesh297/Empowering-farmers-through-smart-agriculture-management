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
.container{
padding:16px;
background-color:white;
margin-left:100px
}

input[type=text]{
width:400px;
padding:15px;
margin:5px 0 22px 0;
display:inline-block;
border:none;
background:#f1f1f1;
}

input[type-text]:focus{
background-color:#ddd;
outline:none;
}

select{
width:400px;
padding:15px;
margin:5px 0 22px 0;
display:inline-block;
border:none;
background:#f1f1f1;
}

select:focus{
background-color:#ddd;
outline:none;
}

#center{
width:750px;
height:950px;
background-color:white;
margin-left:300px;
}
hr{
border:1px solid #f1f1f1;
margin-bottom:25px;
}
.registerbtn{
background-color:#05386B;
color:white;
padding:16px 20px;
border-radius:15px 15px 15px 15px;
margin:8px 0;
border:none;
cursor:pointer;
width:400px;
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
<body style="background-color:#E8E8E8; ">
<div class="logo">
<img src="agri\logoimg.png" width="100%" height="180px"/>
</img>
</div>
<ul>
<li> <a class="" href="farmerhome.php"> Home </a> </li>
<li> <a class="" href="farmhome.php"> Farm Mangement </a> </li>
<li> <a class="active" href="#register">Product Register</a> </li>
<li> <a class="" href="farmerrate.php"> Current Rates </a> </li>
<li> <a class="" href="farmercontact.php"> Contact us </a> </li>
<li><a class="" href="logout.php"> Logout </a> </li>

</ul>


<div id="center">

 <div class="container">
  <form method="POST" action="">
 <div class="header" style="margin-left:150px">
 <h1 style="font-size:25px"> Product Register</h1>
 <p style="font-size:16px"> Fill the details of the product</p>
 </div>
 <hr></center>

 <label for="producttype" style="font-size:18px"><b>Product Type</b></label><br>
 <select name="type">
<option value="grain"> Grain</option>
<option value="vegetable"> Vegetable</option>
<option value="fruit"> Fruit</option>
</select> <br>
 <label for="productname" style="font-size:18px"><b>Product Name</b></label><br>
 <input type="text"  placeholder="Enter Product name" name="productname" required><br>
 
 <label for="quantity" style="font-size:18px;"><b>Quantity </b></label><br>
 <input type="text"  placeholder="Enter Quantity of product" name="quantity" required><br>
 
  <label for="quantity" style="font-size:18px;"><b>Unit </b></label><br>
  <select name="unit">
<option value="kg"> KG </option>
<option value="ton"> Quintal</option>
<option value="ton"> Tons</option>
<option value="dozen"> Dozen</option>
</select> 
 <br>
  <label for="quantity" style="font-size:18px;"><b> Active Mobile No. </b></label><br>
 <input type="text"  placeholder="Enter your mobile number" name="mobile" maxlength="10" name="mobile"  Pattern="[0-9]{3}[0-9]{3}[0-9]{4}"required><br>
 
   <label for="quantity" style="font-size:18px;"><b> Current Address </b></label><br>
 <input type="text"  placeholder="Enter your address" name="address" required><br>
 
  
 <hr>
 <button type="submit" class="registerbtn" style="font-size:20px" name="register" >Register</button>

</form>
</div>


<?php
include("config.php");
if(isset($_POST['register'])) {
$type=$_POST['type'];
$productname=$_POST['productname'];
$quantity=$_POST['quantity'];
$unit=$_POST['unit'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];
$date=date("d/m/Y");
$sql="insert into productreg(type,productname,quantity,unit,mobile,address,date)values('$type','$productname','$quantity','$unit','$mobile','$address','$date')";
if($conn->query($sql)==TRUE)
{
echo "<script>alert('Product registered successfully')</script>";
  header('refresh:1; url=farmerhome.php');
}
else{
echo $conn->error;
}
}

$conn->close();
?>
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
		<div id="leftfooter2"><center> <p style="color:white;font-size:15px"> All Copyright reserved By AgriGear Project team </p></center> </div>
</div>
</html>



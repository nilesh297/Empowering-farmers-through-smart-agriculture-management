<!DOCTYPE html>
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
height:1200px;
background-color:white;
margin-left:300px;
}
hr{
border:1px solid #f1f1f1;
margin-bottom:25px;
}
.registerbtn{
background-color:#4CAF50;
color:white;
padding:16px 20px;
border-radius:15px 15px 15px 15px;
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
<body style="background:url(Jellyfish.jpg); ">
<header>
<div class="header"  style="background:url(Lighthouse.jpg); margin-top:0px; height:150px">
</div>
<ul>
<li> <a class="active" href="retailerhome.php"> Home </a> </li>
<li> <a class="active" href=""> Buy Product</a> </li>
<li> <a class="" href="retailerrate.php"> Current Rates </a> </li>
<li> <a class="" href="retailercontact.php"> Contact Us </a> </li>
<li><a class="" href=""> About Us </a> </li>
<li><a class="" href="index.php"> Logout </a> </li>
</ul>

</ul>
</header>

<div id="center">



 <div class="container">
  <form method="POST" action="">
<center> <div class="header">
 <h1 style="font-size:25px"> Product Register</h1>
 <p style="font-size:16px"> Fill the details of the product</p>
 </div>
 <hr></center>
 <?php
include("config.php");
$sql1="SELECT * FROM orders"; 
$result=mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0)
{
while($rows=mysqli_fetch_assoc($result))
{
$rows1=$rows['orderid'];
}
}
?>
 <input type="hidden" name="id" value="<?php echo $rows1+1;?>"/>
<?php
mysqli_close($conn);
?>
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
 <input type="text"  placeholder="Enter your mobile number" name="mobile" required><br>
 
   <label for="quantity" style="font-size:18px;"><b> Current Address </b></label><br>
 <input type="text"  placeholder="Enter your address" name="address" required><br>
 
 
 <hr>
 <button type="submit" class="registerbtn" style="font-size:20px" name="register" > Order</button>

</form>
</div>


<?php
include("config.php");
if(isset($_POST['register'])) {
$id=$_POST['id'];
$productname=$_POST['productname'];
$quantity=$_POST['quantity'];
$unit=$_POST['unit'];
$mobile=$_POST['mobile'];
$address=$_POST['address'];

$sql="insert into orders(orderid,productname,quantity,unit,mobile,address)values('$id','$productname','$quantity','$unit','$mobile','$address')";
if($conn->query($sql)==TRUE)
{
echo "<script>alert('Product registered successfully')</script>";
}
else{
echo $conn->error;
}
}

$conn->close();
?>



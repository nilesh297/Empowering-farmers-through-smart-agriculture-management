
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
<style>
body{
background-color:white;
}
.container{
padding:16px;
background-color:white;
}

input[type=text],input[type=textarea],input[type=email]{
width:400px;
padding:15px;
margin:5px 0 22px 0;
display:inline-block;
border:none;
background:#f1f1f1;
margin-left:100px;
}

input[type-text]:focus,input[type=email]:focus{
background-color:#ddd;
outline:none;
}
#left{
float:left;
width:800px;
height:450px;
background-color:#E6E6FA;
font-size:1.12em;
}
#right{
float:right;
width:400px;
height:450px;
background-color:#white;
font-size:1.12em;
}
hr{
border:1px solid #f1f1f1;
margin-bottom:25px;
}
.registerbtn{
background-color:#05386B;
color:white;
padding:10px 20px;
margin:8px 0;
border:none;
cursor:pointer;
width:108px;
opacity:0.9;
}
.registerbtn:hover{
opacity:1;
}
#contactus{
width:1200px;
height:700px;
margin-left:50px;
}
</style>
</head>
<body>
<div class="logo">
<img src="agri\logoimg.png" width="100%" height="180px"/>
</img>
</div>
<ul>
<li> <a class="" href="farmerhome.php"> Home </a> </li>
<li> <a class="" href="farmhome.php"> Farm Mangement </a> </li>
<li> <a class="" href="farmerregister.php"> Register Products</a> </li>
<li> <a class="" href="farmerrate.php"> Current Rates </a> </li>
<li> <a class="active" href=""> Contact us </a> </li>
<li><a class="" href="logout.php"> Logout </a> </li>
</ul>

<div id="contactus">

<div id="left">

 <form method="POST" action="">
 <div class="container">
 <center> <h1 style="font-size:25px">Contact US</h1>
 <p style="font-size:16px">We will reply your query on your email id</p>
 <hr>
 </center>
 <label for="name" style="font-size:18px;margin-left:100px"><b>Name</b></label><br>
 <input type="text" placeholder="Enter Name" name="name" required><br>
 
 <label for="Email" style="font-size:18px;margin-left:100px"><b>Email</b></label><br>
 <input type="email" placeholder="Enter Email" name="email" required><br>
 
  <label for="address" style="font-size:18px;margin-left:100px"><b>Your Message</b></label><br>
 <input type="textarea" rows="4" cols="5" placeholder="Your Message" name="message" style="height:100px" required><br>
 
 <hr>

 <button type="submit" class="registerbtn" style="font-size:20px;margin-left:100px " name="Submit" >Submit</button>
 </div>
 </form>
 
 </div>
 
<br><br>
<div id="right">
<p style="color:#0D0D0D;font-size:22px"> connect with us <br> <br> </p>
<p style="color:#0D0D0D;font-size:19px" > For any support or queries </p>
<p style="color:#828282;font-size:16px">
Email us at agritrade@gmail.com<br> or call us on 0250-234334</p>

<p style="color:#0D0D0D;font-size:19px"> Our Main office <br> </p>
<p style="color:#828282;font-size:16px"> B-12, Tapan Complex, <br>
Opp. HDFC Bank<br> Bhagyanagar, Aurangabad <br> 431001</p>

<p style="color:#0D0D0D;font-size:19px"> Our Branch office <br> </p>
<p style="color:#828282;font-size:16px"> B-12, Tapan Complex, <br>
Opp. HDFC Bank<br> Bhagyanagar, Aurangabad <br> 431001</p>

</div>
</div>
<?php
include("config.php");
if(isset($_POST['Submit'])) {
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];

$sql="insert into contact(name,email,message)values('$name','$email','$message')";
if($conn->query($sql)==TRUE)
{
 echo "<script>alert('Message Submitted')</script>";
  header('refresh:1; url=farmerhome.php');
}
else{
echo $conn->error;
}
}

$conn->close();
?>
<div class="footer">
<div id="leftfooter">
<p style="font-size:19px"> Our Main office <br> </p>
<p style="font-size:16px"> B-12, Tapan Complex, <br>
Opp. HDFC Bank<br> Bhagyanagar, Aurangabad <br> 431001</p>
</div>

<div id="rightfooter">
				<h2 style="color:white;font-size:18px">Follow us on Social Media</h2>
					<P style="color:white;font-size:15px">Facebook/agritrade</p>
					<p style="color:white;font-size:15px">Instagram/@agritrade</p>
			</div>
		<div id="leftfooter2"><center> <p style="color:white;font-size:15px"> &copy;  All Copyright reserved By Agritrade Project team </p></center> </div>
</div>
</body>
</html>
 
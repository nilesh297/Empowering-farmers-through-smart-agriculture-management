
<!DOCTYPE html>
<html>
<head>
<link rel='stylesheet' type='text/css' href='style2.css'/>
<style>
body{
font-family:Arial,Helvetica,sans-serif;
background-color:white;
}


.container{
padding:16px;
background-color:white;
}

input[type=text],input[type=textarea]{
width:400px;
padding:15px;
margin:5px 0 22px 0;
display:inline-block;
border:none;
background:#f1f1f1;
margin-left:100px;
}

input[type-text]:focus{
background-color:#ddd;
outline:none;
}
#left{
float:left;
width:800px;
height:500px;
background-color:#E6E6FA;
font-size:1.12em;
}
#right{
float:right;
width:400px;
height:500px;
background-color:#white;
font-size:1.12em;
}
hr{
border:1px solid #f1f1f1;
margin-bottom:25px;
}
.registerbtn{
background-color:#4CAF50;
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
height:800px;
margin-left:50px;
}
</style>
</head>
<body>
<header>
<div class="header" style="background:url(Jellyfish.jpg); margin-top:0px; height:150px">

</div>
<ul>
<li> <a class="" href="farmerhome.html"> Home </a> </li>
<li> <a class="" href="farmerregister.html"> Register</a> </li>
<li> <a class="" href="rates.php"> current Rates </a> </li>
<li> <a class="active" href=""> contact us </a> </li>
<li><a class="" href="about.php"> About Us </a> </li>
<li><a class="" href="index.php"> Logout </a> </li>
</ul>
</header>
<div id="contactus">

<div id="left">

 <form method="POST" action="a.php">
 <div class="container">
 <center> <h1 style="font-size:25px">Contact US</h1>
 <p style="font-size:16px">Please fill out the quick form abnd we will be in touch</p>
 <hr>
 </center>
 <label for="name" style="font-size:18px;margin-left:100px"><b>Name</b></label><br>
 <input type="text" placeholder="Enter Name" name="name" required><br>
 
 <label for="Email" style="font-size:18px;margin-left:100px"><b>Email</b></label><br>
 <input type="text" placeholder="Enter Email" name="email" required><br>
 
  <label for="address" style="font-size:18px;margin-left:100px"><b>Your Message</b></label><br>
 <input type="textarea" rows="4" cols="5" placeholder="Your Message" name="message" style="height:100px" required><br>
 
 <hr>

 <button type="submit" class="registerbtn" style="font-size:20px;margin-left:100px " name="register" >Register</button>
 </div>
 </form>
 
 </div>
 
<br><br>
<div id="right">
<p style="color:#0D0D0D;font-size:22px"> connect with us <br> <br> </p>
<p style="color:#0D0D0D;font-size:16px" > For any support or queries </p>
<p style="color:#828282;font-size:16px">
Email us at agriGear@gmail.com<br> or call us on 0250-234334</p>

<p style="color:#0D0D0D;font-size:19px"> Our Main office <br> </p>
<p style="color:#828282;font-size:16px"> B-12, Tapan Complex, <br>
Opp. HDFC Bank<br> Bhagyanagar, Aurangabad <br> 431001</p>

<p style="color:#0D0D0D;font-size:19px"> Our Branch office <br> </p>
<p style="color:#828282;font-size:16px"> B-12, Tapan Complex, <br>
Opp. HDFC Bank<br> Bhagyanagar, Aurangabad <br> 431001</p>

</div>
</div>
</body>
</html>
 
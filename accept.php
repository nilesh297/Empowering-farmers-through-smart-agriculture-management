<?php
include("config.php");
$regid=$_POST['regid'];
if(isset($_POST['submit']))
{
$sql1="select * from productreg where regid='$regid'";
$result1=mysqli_query($conn,$sql1);
if ($result1)
{
   while($rows=mysqli_fetch_assoc($result1))
   {
     $regid=$rows['regid'];
  $type=$rows['type'];
 $productname=$rows['productname'];
 $quantity=$rows['quantity'];
$unit=$rows['unit'];
$mobile=$rows['mobile'];
$address=$rows['address'];
$date=$rows['date'];
 }
}
$sql="insert into acceptedproduct(regid,type,productname,quantity,unit,mobile,address,date)values('$regid','$type','$productname','$quantity','$unit','$mobile','$address','$date')";
if($conn->query($sql)==TRUE)
{
$sql2="Delete from productreg where regid='$regid'";
$result1=mysqli_query($conn,$sql2);
echo "<script>alert('Product accepted successfully')</script>";
header('location:adminhome.php');
}
else{
echo $conn->error;
}
}
$conn->close();
?>
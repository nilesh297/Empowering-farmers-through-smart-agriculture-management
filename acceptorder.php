<?php
include("config.php");
$orderid=$_POST['orderid'];
if(isset($_POST['submit']))
{
$sql1="select * from orders where orderid='$orderid'";
$result1=mysqli_query($conn,$sql1);
if ($result1)
{
   while($rows=mysqli_fetch_assoc($result1))
   {
     $orderid=$rows['orderid'];
 $productname=$rows['productname'];
 $quantity=$rows['quantity'];
$unit=$rows['unit'];
$mobile=$rows['mobile'];
$address=$rows['address'];
$date=$rows['date'];
 }
}
$sql="insert into acceptedorder(orderid,productname,quantity,unit,mobile,address,date)values('$orderid','$productname','$quantity','$unit','$mobile','$address','$date')";
if($conn->query($sql)==TRUE)
{
$sql2="Delete from orders where orderid='$orderid'";
$result1=mysqli_query($conn,$sql2);
echo "<script>alert('Order accepted successfully')</script>";
header('location:orders.php');
}
else{
echo $conn->error;
}
}
$conn->close();
?>
<?php
include("config.php");

if(isset($_POST['ivt'])){
$type=$rows['type'];
$productname=$rows['productname'];
$quantity=$rows['quantity'];
$unit=$rows['unit'];
$mobile=$rows['mobile'];
$address=$rows['address'];


$sql="insert into acceptedproduct(type,productname,quantity,unit,mobile,address)values('$type','$productname','$quantity','$unit','$mobile','$address')";
if($conn->query($sql)==TRUE)
{
echo "<script>alert('Product accepted successfully')</script>";
}
else{
echo $conn->error;
}
}

$conn->close();
?>
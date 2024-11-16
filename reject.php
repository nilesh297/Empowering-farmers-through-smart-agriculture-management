<?php
include("config.php");
$regid=$_POST['regid'];
if(isset($_POST['submit']))
{
$sql1="Delete from productreg where regid='$regid'";
$result1=mysqli_query($conn,$sql1);
if ($result1)
{
  //echo "Product Rejected";
  header("location:adminhome.php");
  
}

}
$conn->close();
?>
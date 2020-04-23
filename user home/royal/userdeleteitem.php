<?php
include("../dbconnect.php");

 $id =$_POST['login_id'];
 $proid=$_POST['product_id'];
 $qty=$_POST['quantity'];
 $sql2="INSERT INTO 'tble_cart'('login_id','product_id','quantity') VALUES ('$id','$proid','$qty')";
$result=mysqli_query($con,$sql2);
header("Location:  s.php");
?>

<?php
session_start();
include'../dbconnect.php';
$id=$_GET['id'];
$result= mysqli_query($con,"delete from tble_cart where cart_id='$id'");
echo "<script>window.onload=function(){alert('Product sucessfully deleted from the cart....!');window.location='j.php';}</script>";
?>
 
<?php
session_start();
include'../dbconnect.php';
 $id=$_GET['xid'];
$sql="delete  from tble_product,tble_images where product_id='$id'";
$result=mysqli_query($con,$sql);
echo "<script>window.onload=function(){alert('Product deleted sucessfully....!');window.location='viewproduct.php';}</script>";
?>
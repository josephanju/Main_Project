<?php
session_start();
include('../dbconnect.php');
$username=$_SESSION['unm'];
if(isset($_POST['submit']))

                             
							 $price=$_POST['price'];
							 
							 $quantity=$_POST['quantity'];
							 $id=$_POST['id'];
	               
$sql="UPDATE tble_product SET  price='$price',quantity='$quantity'
where category_id='$cid'";

$result=mysqli_query($con,$sql) or die(mysqli_error($con));
echo "<script>window.onload=function(){alert('Product updated sucessfully....!');window.location='viewproduct.php';}</script>";

?>
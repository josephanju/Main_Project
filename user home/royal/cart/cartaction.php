<?php
session_start();
$con=mysqli_connect("localhost","root","","royalfurniture");
$pid=$_POST['id'];
$uid=$_POST['uid'];
$da=date('Y-m-d');
$qry="select * from tbl_cart where login_id='$uid' and product_id='$pid'";
$res=mysqli_query($con,$qry);
if(mysqli_num_rows($res)>0)
{
	header("location:index.php?error=Product already in the cart and check your cart...");
}
else
	$qry="insert into tbl_cart(login_id,product_id,date) values('$uid','$pid','$da')";
$res=mysqli_query($con,$qry);
header('location:cart.php'); 
//echo "<script>window.onload=function(){alert('Product added to cart');window.location='cart.php?pid=$pid';}</script>";
}
?>
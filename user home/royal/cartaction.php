<?php
session_start();
$con=mysqli_connect("localhost","root","","royalfurniture");
if(isset($_POST['qty']))
{
	
	$getid=$_SESSION['unm'];
    $sql="select * from tble_login where username='$getid'";
	$result=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($result);
    $uid= $row['login_id'];
	$qty=$_POST['qty'];



	//$proid=$_POST['product_id'];
	$s=$_POST['id'];
	$sql="INSERT INTO tble_cart(login_id,product_id,quantity) VALUES ('$uid','$s','$qty')";
    $results = mysqli_query($con,$sql) or die(mysqli_error($con));
	if($results)
{
echo "<script>window.onload=function(){alert('Product added to the cart....!');window.location='j.php';}</script>";
}

}
?>

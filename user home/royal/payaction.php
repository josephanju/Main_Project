<?php 
session_start();
include '../dbconnect.php'; 

			 
	$id=$_POST['id'];
   	$l=$_POST['quantity'];
	$p=$_POST['product'];
	$name=$_POST['fname'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$district=$_POST['district'];
	$zip=$_POST['zip'];
	$phno=$_POST['phno'];
	$ctype=$_POST['cardtype'];
	$cname=$_POST['cardname'];
	$cno=$_POST['cardnumber'];
	$expdate=$_POST['expdate'];
	
    $total=$_POST['total'];
	
	
	                
                	 
                      $sql="select quantity from tble_product where product_id='$p'";
	                  $res=mysqli_query($con,$sql);
                     $row=mysqli_fetch_array($res);
                     $pqty= $row['quantity'];
					 
					 
					 $g=$pqty-$l;
					 
					 
					 
	$v="update  tble_product set quantity='$g' where product_id='$p'";
	$re = mysqli_query($con, $v);
	$a="INSERT INTO `tble_delivery_details`( `name`, `email_id`, `contact_no`, `address`, `pincode`, `location`, `district`,`login_id`) VALUES ('$name','$email','$phno','$address','$zip','$city','$district','$id')";
	$result = mysqli_query($con, $a);
	$b="INSERT INTO `tble_payment`(`email_id`, `card_type`, `card_holder_name`, `card_number`,  `expiry_date`,`total_amount`, `status`, `login_id`) VALUES ('$email','$ctype','$cname','$cno','$expdate','$total','1','$id')";
	$result1 = mysqli_query($con, $b);
if($result1)
{
	echo "<script>window.onload=function(){alert('Payment sucessfully ....!');window.location='../user home/t.php';}</script>";
}

	
	
	?>
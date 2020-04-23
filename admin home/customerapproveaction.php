<?php
session_start();
	include('../dbconnect.php');
	
	if(isset($_GET['login_id']))
	{
		$id=$_GET['login_id'];
	    $sql="SELECT * from tbl_login where login_id=$id";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($res);
		$approvel=$row['status']; 
		if($approvel== 0)
		{

			$sql="UPDATE tbl_login set status = '1' where login_id=$id";
			if(mysqli_query($con,$sql))
				header("location:../admin home/customer.php");
			else
				echo "<script>alert(Customer Approved)</script>";
		}
		if($approvel== 1)
		{
			$sql="UPDATE tbl_login set status = '0' where login_id=$id";
			if(mysqli_query($con,$sql))
			header("location:../admin home/customer.php");
			else
				echo "<script>alert(Customer Blocked)</script>";
		}
	}
?>
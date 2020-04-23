<?php
session_start();
	include('../dbconnect.php');
	
	if(isset($_GET['package_id']))
	{
		$id=$_GET['product_id'];
	    $sql="select * from tble_package where package_id=$id";
		$res=mysqli_query($con,$sql);
		$row=mysqli_fetch_array($res);
		$approvel=$row['status']; 
		if($approvel== 0)
		{

			$sql="update tble_package set status = '1' where package_id=$id";
			if(mysqli_query($con,$sql))
				header("location:../admin home/package.php");
			else
				echo "<script>alert(Package Approved)</script>";
		}
		if($approvel== 1)
		{
			$sql="update tble_package set status = '0' where package_id=$id";
			if(mysqli_query($con,$sql))
				header("location:../admin home/package.php");
			else
				echo "<script>alert(package  Blocked)</script>";
		}
	}
?>
<?php
session_start();
include'../dbconnect.php';
           $username=$_SESSION['unm'];
           $currentpassword = $_POST['cpassword'];
           $newpassword = $_POST['npassword'];
           //$confirmnewpassword = $_POST['confirmpassword'];
		   $sql="select password from tble_login where username='".$username."'	";
		   $row=mysqli_fetch_array(mysqli_query($con,$sql));
		   //echo $row['password'];
		   
		   
		   
		   if($row['password']!=$currentpassword)
			   echo 'Yur old password is not correct!';
		   else
		   {
			
		   mysqli_query($con,"update tble_login set password='".$newpassword."'  
		   where username='".$username."' AND password='".$currentpassword."'	");
				echo "<script>window.onload=function(){alert('Password updated sucessfully....!');window.location='../a/index.php';}</script>";		   
		   }
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   
		   ?>
		   
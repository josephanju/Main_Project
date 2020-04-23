<?php 
session_start();
    include '../dbconnect.php'; 
    
    
    if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$emailid=$_POST['email'];
		$contactno=$_POST['contactno'];
		//$aadharno=$_POST['aadharno'];
		$username=$_POST['username'];
		$password=$_POST['password'];
		$cpassword=$_POST['cpassword'];



		$sqls = "SELECT * FROM `tbl_login` WHERE username='$username'";
		$ress = mysqli_query($con, $sqls);

		if(mysqli_num_rows($ress)>0)
		{
			echo"<script> alert('This Email is already exist!!! Please choose another one');
			window.location ='../user reg/index.php';</script>";
		}
		else
		{

			$qry=("SELECT * FROM tbl_usertype where role='customer'");
			$rowk=mysqli_query($con,$qry);
			//echo $qry;
			$rowp=mysqli_fetch_array($rowk);
			$r=$rowp['usertypeid'];
			$query = "INSERT INTO `tbl_login`(`username`, `password`, `usertype`,`status`) VALUES ('$emailid','$password','$r',1)";
			//echo $query;

			$result = mysqli_query($con, $query);
			if($result)
			{
			
				$logid = mysqli_insert_id($con);
				$querys = "INSERT INTO `tbl_userreg`(`reg_id`,`name`, `email_id`, `contact_no`) VALUES ('$logid','$name','$emailid','$contactno')";
			 	//echo  $querys;
			}

			$results = mysqli_query($con, $querys);
			if ($results)
			 {

					echo "<script>alert('Registration successful');
					window.location.href='../login/index.php';</script>";
					//header("location:../login/index.php");
			}
			else{
					echo "<script>alert('Registration Failed');</script>";

				}

		}
	}

?>

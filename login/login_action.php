<?php
session_start();

//include '../dbconnect.php';
$con=mysqli_connect("localhost","root","","cbh_db");
//$error='';
if(isset($_POST['submit']))
{
	$username=$_POST['username'];
    $password=$_POST['password'];
    $_SESSION['unm']=$username;
	$qry="SELECT * FROM tbl_login where username='$username' and password='$password' ";
    $rowk=mysqli_query($con,$qry);
    //$res=mysqli_num_rows($rowk);
	//if($res)
	
			if($fetch=mysqli_fetch_array($rowk));
				{
					$role=$fetch['usertype'];
					if($username==$username && $password==$password && $role=="1" )
					{
						//$_session["login_id"]=$fetch['login_id'];
						//$_session["unm"]=$username;
						
						$_SESSION["login_id"]=$fetch['login_id'];
						$_SESSION["username"]=$username;
						
						header("location:../admin home/dashboard.php");
					
					}
					elseif($fetch['usertype']=='2' && $fetch['status']=='1')
					{
						//$_session["login_id"]=$fetch['login_id'];
						$_session["unm"]=$username;
						$_SESSION["id"]=$fetch['login_id'];
						//return $_SESSION["id"];
						echo $_SESSION["id"];
						header("location:../agency home/index.php");
						
					}
					elseif($fetch['usertype']=='3' && $fetch['status']=='1')
					{
						//$_session["login_id"]=$fetch['login_id'];
						$_session["unm"]=$username;
						header("location:../user home/index.php");
					
					}
				}
					
             } 
             else
             {
             echo '<script> alert("Unauthorized access!!!");</script>';
			 	header("location: login.php");
             }
          
		?>
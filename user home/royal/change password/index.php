<?php
session_start();
include'../../dbconnect.php';
if(!isset($_SESSION['unm']))
{
	header('location: ../a/index.php');
	exit;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>change password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>

<script>
function pwdChek() 
		{														
			if(document.getElementById("password").value == document.getElementById("cnpwd").value)
			{	
				return true;										
			}
			else
			{
				alert("***Password Mismatch***");
                                cnpwd.value="";
                                cnpwd.focus();
			  
					return false;
			}
		}
		
    </script>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form  action="pass_action.php" method="post" class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						<center> Change Password </center>
					</span>
                    <span class="txt1 p-b-11">
						Current Password
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "password is required">
						<input class="input100" type="password" name="cpassword" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						 New Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						
						<input class="input100" type="password" name="npassword" >
						<span class="focus-input100"></span>
					</div>
					<span class="txt1 p-b-11">
						 Re-enter  Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						
						<input class="input100" type="password" id="cnpwd" onchange="pwdChek();" name="cpassword" >
						<span class="focus-input100"></span>
					</div>
					
					<!--<center><input type="button" name="submit" value="update" /></center>-->
					
					

					<div class="container-login100-form-btn">
						<center><button class="login100-form-btn">
							&nbsp &nbsp Update 
						</button></center>
						
						
						</div>
<a href="../index.php">BACK TO HOME PAGE</a>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
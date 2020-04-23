<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
	<!-- Javascript and jQuery files -->
  
	  <script src="js/jquery.min.js"></script>
	  <script src="js/bootstrap.min.js"></script>
	  <script src="Home/js/jquery-1.10.2.js" type="text/javascript"></script>
      <script src="Home/js/bootstrap.js" type="text/javascript"></script>
      <script src="Home/js/login-register.js" type="text/javascript"></script>
      <script src="Home/js/jquery.min.js" type="text/javascript"></script>
      <script src="Home/js/jquery-ui.js" type="text/javascript"></script>
	  <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script> 
	  <script type="text/javascript" src="http://dev.jquery.com/view/trunk/plugins/validate/jquery.validate.js"></script>
	  <script type="text/javascript" language="javascript" src="javascripts1/jquery.js"></script>
      <script type="text/javascript" language="javascript" src="javascripts1/script.js"></script>
	  <script type="text/javascript"></script>
	  <script>
   
   $('.message a').click(function(){
   $('form').animate({height: "toggle", opacity: "toggle"}, "slow");
});
   
		function loginValid(mail,passwrd)

		{
                    	var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
			var passw=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
			
		   if(mail.value.match(mailformat))
			{
				
				//document.login.email.focus();
				if(passwrd.value.match(passw)) 
					{ 
			
					//window.location="succ_login.php";
					//window.location="succes_login.php";
					
					return true;
	
					}
					else
					{ 
				
					alert('Please enter a valid password...! Your password should be 8 to 20 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character');
					
					window.location="new_login.php";
					
					}
			}
		  else
			{
			alert("Please enter a valid Email-id and password !");
			document.login.email.focus();
			
			}


		}
	</script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
   <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
   <script src="js/3dslider.js"></script>
   </head>

		<meta charset="utf-8">
		<title>Registration user</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
   <body>
    <div class="wrapper">
    <div class="image-holder">
			
				<img src="images/a1.jpg" alt="">
			</div>
			<div class="form-inner">
			<form action="reg.php" method="post" enctype="multipart/form-data">
					<div class="form-header">
						<h3>Sign up</h3>
						</div>
						
					<div class="form-group">
					<input type="text" autocomplete="off" name="name" id="name" placeholder="Your name here:"  
						class="form-control" required>
						<span id="fullname_error_message" style="color:red" ></span>
					</div>

					<div class="form-group">
						<input type="email" autocomplete="off" name="email"  id="email" placeholder="Your E-mail here:"  class="form-control" required>
						<span id="email_error_message" style="color:red" ></span>	
					</div>

					<div class="form-group">
						<input type="text" autocomplete="off" name="contactno" id="contactno" placeholder="Your Contact no here:" class="form-control" required>
						<span id="phone_error_message" style="color:red"></span>
					</div>

					<div class="form-group">
						<input type="Password" autocomplete="off" name="password" id="password" placeholder="Your Password here:"class="form-control" required>
						<span id="password_error_message" style="color:red"></span>
					</div>

					<div class="form-group">
						<input type="Password"  autocomplete="off" name="cpassword" id="cpassword" placeholder="Confirm Your Password here:" class="form-control" required>
						<span id="cpassword_error_message" style="color:red"></span>
					</div>

					<button type="submit" name="submit">Register</button>
					<br>
					
					<center><p class="loginhere">Have already an account ? <a href="../login/index.php" class="loginhere-link">Login here</a></p></center>

					<p class="loginhere"><center><a href="../index.php" class="loginhere-link">Back to home here</a></p></center>
				
				</form>
			</div>
			
		</div>
		
		<script src="js/jquery-3.3.1.min.js"></script>
		<script src="js/jquery.form-validator.min.js"></script>
		<script src="js/main.js"></script>
	</body>
</html>
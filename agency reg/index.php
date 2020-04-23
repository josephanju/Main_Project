<?php
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
	  <script type="text/javascript"></script>
	  <script type="text/javascript" language="javascript" src="javascripts1/jquery.js"></script>
    <script type="text/javascript" language="javascript" src="javascripts1/script.js"></script>

	<meta charset="utf-8">
	<title>TravelAgency SignUp Form</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>

    <!-- internal javascrpt code -->
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
					
					window.location="../login/index.php";
					
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
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="reg.php" method="POST" id="signup-form" enctype="multipart/form-data">
				<h2>Register Account</h2>
 
				
								<div class="form-row">
                 					<label>Agency Name</label>
            						<input type="text" class="form-input" autocomplete="off" name="cname" id="cname" placeholder="Your Agency Name" onchange="Validatename()"; required>
            						<span id="fullname_error_message" style="color:red" ></span>


                            <label>Agency Email ID</label>
                            <input type="email" class="form-input"   autocomplete="off" name="email" id="email" placeholder="Your Email" onchange="Validateemail3()"; required>
                            <span id="email_error_message" style="color:red" ></span>	



                            <label>Mobile Number</label>
                            <input type="text" class="form-input" autocomplete="off" name="contactno" id="contactno" placeholder="Mobile No"onchange="Validatephone()"; required>
                            <span id="phone_error_message" style="color:red"></span>

                                    <br>
                    
                            <label>Aadhar Card No:</label>
				<div class="form-row">
					<input type="text" class="form-input" autocomplete="off" autocapitalize="off" name="aadharno" id="aadharno"  onblur="AadharValidate();" placeholder="Your Aadhar Number"/>
					<span id="aadhar_error_message" style="color:red" ></span>
				</div>
				<br>
				<label>Aadhar Card Holder Name:</label>
            	<input type="text" class="form-input" autocomplete="off" name="aadharname" id="aadharname" placeholder="Your Card Holder Name" onchange="Validatename()"; required>
            	<span id="aadharname_error_message" style="color:red"></span>



			          	<label for="Aadhar Image" class="control-label">Upload Aadhar</label>
			          	<input type="file" style="width:100%" class="form-control" name="picture"  id="picture" >
			          	 <span id="picture_error_message" style="color:red"></span>
    
			          	<br>
                            <label>Password</label>
                            <input type="password" class="form-input" name="password" id="password" placeholder="Your Password" onchange="Validatepass()"; required>
                            <span id="password_error_message" style="color:red"></span>


<br>
                            <label>Confirm Password</label>
                            <input type="password" class="form-input" name="cpassword" id="cpassword" placeholder=" Confirm Your Password" onchange="Validatecpassword()"; required>
                            <span id="cpassword_error_message" style="color:red"></span>

                          </div>

				<div class="form-row-last">
					<input type="submit" name="submit" id="submit" class="register" value="Register"/>
					<!--<input type="submit" name="register" class="register" value="Register">-->
				</div>
				<p class="loginhere">Have already an account ? <a href="../login/index.php" class="loginhere-link">Login here</a></p>
			</form>
		</div>
	</div>
</body>
</html>
<?php
session_start();
include'../dbconnect.php';
if(!isset($_SESSION['unm']))
{
	header('location: ../login/index.php');
	exit;
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>CBH | Admin Change Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<script>
	function checkpassword()

{

var passw=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;

		
if(document.getElementById("newpassword").value==null ||chngpwd.newpassword.value.length==0)
	{
	document.getElementById("errorpswrd").innerHTML="Mandatory Field!";

	}

else if(document.getElementById("newpassword").value.match(passw))
	{
	document.getElementById("errorpswrd").innerHTML=" ";
	
	}

	else
	{
	document.getElementById('errorpswrd').innerHTML="Please enter a valid password";
	   alert(' Your password should be 8 to 20 characters which contain at least one lowercase letter, one uppercase letter, one numeric digit, and one special character');
	   document.getElementById("newpassword").value="";
	   
		}

}

function checkCpassword()

{

var passw=/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[^a-zA-Z0-9])(?!.*\s).{8,15}$/;
var passwrd=document.getElementById("newpassword").value;
var cpasswrd=document.getElementById("confirmpassword").value;

		
if(document.getElementById("confirmpassword").value==null ||chngpwd.confirmpassword.value.length==0)
	{
	document.getElementById("errorCpswrd").innerHTML="Mandatory Field!";

	}

else if(document.getElementById("confirmpassword").value.match(passw))
	{
	document.getElementById("errorCpswrd").innerHTML=" ";
	
			if(passwrd==cpasswrd)
						{ 	document.getElementById("errorCpswrd").innerHTML=" ";
						
							}
						else{
						document.getElementById("errorCpswrd").innerHTML="Password and confirm password did not match!";
							document.getElementById("confirmpassword").value="";
						}
	}

	else
	{
	document.getElementById('errorCpswrd').innerHTML="Password and confirm password should be valid and same";
	document.getElementById("confirmpassword").value="";
	 }

}

	</script>
<!-- start-smoth-scrolling -->

<style>
	
	.errmessage
		{
			color:red;
			}
	</style>
	<script>
function valid()
{
if(document.chngpwd.newpassword.value!= document.chngpwd.confirmpassword.value)
{
alert("New Password and Confirm Password Field do not match  !!");
document.chngpwd.confirmpassword.focus();
return false;
}
return true;
}
</script>
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
<?php include('includes/header.php');?>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Profile <i class="fa fa-angle-right"></i> Change Password</li>
            </ol>
              <div class="panel-body">
					<form  action="pass_action.php" method="post" >

						<div class="form-group">
							<label class="col-md-2 control-label">Current Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password"  name="cpassword" class="form-control1" id="exampleInputPassword1" placeholder="Current Password" required>
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">New Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" name="npassword" placeholder="New Password" onblur="checkpassword()" required>
									<span id="errorpswrd" class="errmessage" >    </span>
								</div>
							</div>
						</div>

	<div class="form-group">
							<label class="col-md-2 control-label">Confirm Password</label>
							<div class="col-md-8">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-key"></i>
									</span>
									<input type="password" class="form-control1" name="confirmpassword" id="confirmpassword" placeholder="Confrim Password" onblur="checkCpassword()"required>
									<span id="errorCpswrd" class="errmessage" >    </span>


								</div>
							</div>
						</div> 

						<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" id="submit" class="btn-primary btn">Submit</button>
				<button type="reset" class="btn-inverse btn">Reset</button>
			</div>
		</div>
			
					</form>

</div>
</div>
</div>
</div>
 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include('includes/footer.php');?>
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
				<?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<script src="js/bootstrap.min.js"></script>
   
</body>
</html>








					
					

				
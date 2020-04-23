<?php
include('../dbconnect.php');
session_start();
if(!isset($_SESSION['unm']))
{
	header('location:../login/index.php');
	exit;
}
?>
<!DOCTYPE HTML>
<html>
<head>

<title>Change Password</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 

<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
				<?php include('includes/header.php');?>
<!--heder end here-->
	
		<!--grid-->
 	<div class="grid-form">
 		<ol class="breadcrumb">
			
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a> <i class="fa fa-angle-right"></i></li>
                <?php echo "<font color=red>Welcome  ".$_SESSION['unm'];"</font>" ?>
            </ol>
<!----->


</div>
<!---->
  <div class="grid-form1">
  	       <h3>Changepassword</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
				<form class="form-horizontal" action="pass_action.php" method="post">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label" >Current password</label>
									<div class="col-sm-8">
										<input type="password" name="cpassword" class="form-control1" id="password" placeholder="Current password" required/>
									</div>
									
								</div>
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">Newpassword</label>
									<div class="col-sm-8">
										<input type="password"  name="npassword" id="password" class="form-control1"  placeholder="New Passwrd" onchange="Validatepass()"; required/>
										<label class="errortext" style="display:nne; color:red" id="psw_3"></label><br>
                                               <script>
                                              function Validatepass()
                                              {
                                                   var password = document.getElementById('npass');
                                                     var filter = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}/;
                                                     if (!filter.test(password.value)) {
                                                      password.value="";
                                                      $("#psw_3").html('Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters ').fadeIn().delay(4000).fadeOut();
                                                      return false;
                                                      }
                                                  return false;
                                              }

                                              </script>

									</div>
								</div>
								
								
					
								<div class="form-group">
									<label for="mediuminput" class="col-sm-2 control-label">retypepassword</label>
									<div class="col-sm-8">
										<input type="password"  id="cnpwd"  name="cpassword" class="form-control1" id="rpass" placeholder="Retype Passwrd" onchange="Validatecpassword1()"; required>
										<label class="errortext" style="display:nne; color:red" id="password_2"></label><br>

<script>
                                      function Validatecpassword1()
                                      {
                                          var pas = document.getElementById('npass').value;
                                          var rpas = document.getElementById('rpass').value;
                                          if (pas!=rpas)
                                          {
                                          $("#password_2").html('Password Miss Match..!').fadeIn();
                                              return false;
                                          }
                                          if (pas==cpas)
                                          {
                                          $("#password_2").html('Password Miss Match..!').fadeOut();
                                              return false;
                                          }
                                          return true;
                                      }
                                      </script>

									</div>
								</div>
								 <div class="panel-footer">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<input type="submit" name="submit" id="submit" value="changepassword" class="btn-primary btn">
				
			</div>
		</div>
	 </div>
								
							</form>
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
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
</body>
</html>

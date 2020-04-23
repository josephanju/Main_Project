<?php
include('../dbconnect.php');
session_start();

if(!isset($_SESSION['unm']))
{
	header('location: ../a/index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
.contain
{
	width:100%;
	lenght:100%;
}
</style>
<title>supplier home</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Royal Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!--animate-->
<link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<link href='//fonts.googleapis.com/css?family=Kanit:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script src="js/responsiveslides.min.js"></script>
</head>
<body>
<div class="banner w3ls">
	<div class="container">
		<div class="header-nav wow fadeInUp animated" data-wow-delay=".5s">
			<nav class="navbar navbar-default">
				
				<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=" " /></a>
								</h1>
								
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				
				
				
			<style>



/* Sub Menu */

.tkvsoft ul {
	position: absolute;
	top: 40px;
	left: 0;

	opacity: 0;
	
	background: #fff;

}

.tkvsoft li:hover > ul { opacity: 1; }

.tkvsoft ul li {
	height: 0;
	overflow: hidden;
	padding: 0;
	

}

.tkvsoft li:hover > ul li {
	height: 36px;
	overflow: visible;
	padding: 0;
	
}

.tkvsoft ul li a {
	width: 200px;
	margin: 0;
padding:30px;
	border: none;
	
}

.tkvsoft ul li:last-child a { border: none; }

/* Icons */
</style>	

				                <nav class="cl-effect-1">
									<ul class="nav navbar-nav tkvsoft">
										<li><a class="active" href="index.php">Home</a></li>
										
										<li><a href="products.php">Products</a></li>
										
										
										<li><a href="">View</a>
										<ul>
										<li><a href="viewproduct.php">Products</a></li>
										<!--<li><a href="viewbooking.php">Booking</a></li>-->
										</ul>
										
										<li><a href="contact.php">Contact</a></li>
										<li><a href="notification.php">Notification</a></li>
										<li><a href="../edit_pro_supplier/index.php">Profile</a></li>
										<li><a href="../supplier home/change password/index.php">  Change Password</a></li>
										<li><a href="logout.php">Logout</a></li>
										<!--<li><a>My Account</a>
										<ul>
										<li><a href="../edit_pro_supplier/index.php">Profile</a></li>
										<li><a href="../change password/index.php"> Password</a></li>
										<li><a href="logout.php">Logout</a></li>
		                                </ul>-->
										
										
									</ul>
								</nav>
				</div>
				<!-- /navbar-collapse -->
			</nav>
		</div>
		<?php
					echo "<font color=white>Welcome  ".$_SESSION['unm'];"</font>"
					?>
		<div class="clearfix"></div>
		<div class="banner-info wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="col-md-5 ban-left">
							<img src="images/p10.jpg" alt=" "/>
						</div>
						<div class="col-md-7 ban-right">
							<h3>We Design Develop and Deliver Using 100% Natural Materials</h3>
							
						</div>
						<div class="clearfix"></div>
					</li>
					<li>
						<div class="col-md-5 ban-left">
							<img src="images/p3.jpg" alt=" "/>
						</div>
						<div class="col-md-7 ban-right">
							<h3>We Have Best Design Experts With Good Ideas In Designing</h3>
							
							
						</div>
						<div class="clearfix"></div>
					</li>
				</ul>
			</div>
			<div class="clearfix"></div>
			<script>
						// You can also use "$(window).load(function() {"
						$(function () {
						 // Slideshow 4
						$("#slider3").responsiveSlides({
							auto: true,
							pager: false,
							nav: true,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
			</script>

		</div>
	</div>
</div>
<!-- //banner -->
<!-- about -->


		

	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>
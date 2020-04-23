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
<title>| Contact :: </title>
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
<!-- start-smoth-scrolling -->
<script src="js/responsiveslides.min.js"></script>

</head>
<body>

<div class="banner w3ls page_head">
	<div class="container">
		<div class="header-nav wow fadeInUp animated" data-wow-delay=".5s">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a class="navbar-brand" href="index.html"><img src="images/logo.png" alt=" " /></a>
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

	-webkit-border-radius: 0 0 5px 5px;
	-moz-border-radius: 0 0 5px 5px;
	border-radius: 0 0 5px 5px;

	-webkit-transition: opacity .25s ease .1s;
	-moz-transition: opacity .25s ease .1s;
	-o-transition: opacity .25s ease .1s;
	-ms-transition: opacity .25s ease .1s;
	transition: opacity .25s ease .1s;
}

.tkvsoft li:hover > ul { opacity: 1; }

.tkvsoft ul li {
	height: 0;
	overflow: hidden;
	padding: 0;

	-webkit-transition: height .25s ease .1s;
	-moz-transition: height .25s ease .1s;
	-o-transition: height .25s ease .1s;
	-ms-transition: height .25s ease .1s;
	transition: height .25s ease .1s;
}

.tkvsoft li:hover > ul li {
	height: 36px;
	overflow: visible;
	padding: 0;
}

.tkvsoft ul li a {
	width: 200px;
	padding:40px;
	margin: 0;

	border: none;
	
}

.tkvsoft ul li:last-child a { border: none; }

/* Icons */



</style>
								<nav class="cl-effect-1">
									<ul class="nav navbar-nav tkvsoft">
										<li><a href="index.php">Home</a></li>
										
										<li><a href="products.php">Products</a></li>
										
										<li><a href="">View</a>
										<ul>
										<li><a href="viewproduct.php">Products</a></li>
										
										
		                                </ul>
										
										</li>
										<li><a class="active" href="contact.php">Contact</a></li>
										<li><a href="notification.php">Notifications</a></li>
										<li><a href="../edit_pro_supplier/index.php">Profile</a></li>
										<li><a href="../supplier home/change password/index.php">  Change Password</a></li>
										<li><a href="logout.php">Logout</a></li>
										
									</ul>
								</nav>
				</div>
				<!-- /navbar-collapse -->
			</nav>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
<!-- //banner -->
<!-- gallery -->
<div class="map all_pad wthree">
	<div class="container">
		
		<div class="contact-grids">
			<h2 class="title">Contact Us<span></span></h2>
				<div class="col-md-4 contact-grid agile text-center animated wow slideInLeft" data-wow-delay=".5s">
					<div class="contact-grid1">
						<i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>
						<h4>Address</h4>
						<p>Kainakary <span>Alappuzha.</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid agileits text-center animated wow slideInUp" data-wow-delay=".5s">
					<div class="contact-grid2">
						<i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>
						<h4>Call Us</h4>
						<p>8281634684<span>7510164684</span></p>
					</div>
				</div>
				<div class="col-md-4 contact-grid w3 text-center animated wow slideInRight" data-wow-delay=".5s">
					<div class="contact-grid3">
						<i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>
						<h4>Email</h4>
						<p><a href="tjteenajoseph1996@gmail.com">tjteenajoseph1996@gmail.com</a><span><a href="coolvava@gmail.com">coolvava@gmail.com</a></span></p>
					</div>
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //gallery -->


<!-- smooth scrolling -->
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
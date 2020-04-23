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
<title> | Gallery </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Royal Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="css/swipebox.css">
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
		<!-- swipe box js -->
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
		<!-- //swipe box js -->

</head>
<body>

<!-- banner -->
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
									<ul class="nav navbar-nav tkvsoft ">
										<li><a href="index.php">Home</a></li>
										<li><a href="about.php">About</a></li>
										<li><a href="products.php">Products</a></li>
										<li><a class="active" href="gallery.php">Gallery</a></li>
										
										<li><a href="">View</a>
										<ul>
										<li><a href="viewproduct.php">Products</a></li>
										<li><a href="viewbooking.php">Booking</a></li>
										</ul>
										
										
										</li>
										<li><a href="contact.php">Contact</a></li>
										<li><a href="">My Account</a>
										<ul>
										<li><a href="">Profile</a></li>
										<li><a href="">Change Password</a></li>
										<li><a href="logout.php">Logout</a></li>
		                                </ul>
										
										</li>
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
<div class="gallery all_pad">
	<div class="container">
		<h2 class="title">Latest Designs<span></span></h2>
		<div class="gal_grids">
			<div class="col-md-6 gal_left wthree">
				<a href="images/g6.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="port-8 effect-2">
						<div class="image-box">
							<img src="images/g6.jpg" alt="Image-2">
						</div>
						<div class="gal-desc">
							<h4>Royal Furnish</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 gal_left">
				<a href="images/g7.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="port-8 effect-2">
						<div class="image-box">
							<img src="images/g7.jpg" alt="Image-2">
						</div>
						<div class="gal-desc">
							<h4>Royal Furnish</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 gal_left gal-top agile">
				<a href="images/g3.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="port-8 effect-2">
						<div class="image-box">
							<img src="images/g3.jpg" alt="Image-2">
						</div>
						<div class="gal-desc">
							<h4>Royal Furnish</h4>
							<p>Lorem ipsum dolor consectetur adipiscing.</p>
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 gal_left gal-top">
				<a href="images/g4.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="port-8 effect-2">
						<div class="image-box">
							<img src="images/g4.jpg" alt="Image-2">
						</div>
						<div class="gal-desc">
							<h4>Royal Furnish</h4>
							<p>Lorem ipsum dolor consectetur adipiscing.</p>
							
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-4 gal_left gal-top">
				<a href="images/g5.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="port-8 effect-2">
						<div class="image-box">
							<img src="images/g5.jpg" alt="Image-2">
						</div>
						<div class="gal-desc">
							<h4>Royal Furnish</h4>
							<p>Lorem ipsum dolor consectetur adipiscing.</p>
							
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 gal_left agileits">
				<a href="images/g1.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="port-8 effect-2">
						<div class="image-box">
							<img src="images/g1.jpg" alt="Image-2">
						</div>
						<div class="gal-desc">
							<h4>Royal Furnish</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							
						</div>
					</div>
				</a>
			</div>
			<div class="col-md-6 gal_left w3">
				<a href="images/g2.jpg" class="b-link-stripe b-animate-go  swipebox">
					<div class="port-8 effect-2">
						<div class="image-box">
							<img src="images/g2.jpg" alt="Image-2">
						</div>
						<div class="gal-desc">
							<h4>Royal Furnish</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
							
						</div>
					</div>
				</a>
			</div>
			<div class="clearfix"></div>
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
<?php
session_start();

if(!isset($_SESSION['unm']))
{
	header('location:../a/index.php');
	exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<head>
<style>
</style>
</head>
<title> user cart </title>
 
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="keywords" content="Interior Spa Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
  
     <link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
      
	<link href="css/JiSlider.css" rel="stylesheet">
	<link href="cssa/style.css" rel="stylesheet" type="text/css" media="all" />
	<script type="text/javascript" src="jsa/jquery-1.11.1.min.js"></script>
	
	<link href="css/simpleLightbox.css" rel='stylesheet' type='text/css' />

	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>

<header class="top-head">
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light">
			<a class="navbar-brand" href="index.php">
				Royal
			</a>
			
			<button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<style>
.tkvsoft ul {
	position: absolute;
	
	z-index:9;

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
</style>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mx-auto text-center tkvsoft">
					<li class="nav-item   mr-lg-3">
						<a class="nav-link" href="index.php">Home
							
						</a>
					</li>
					
					<li class="nav-item  mr-lg-3">
						<a class="nav-link " href="t.php">Products</a>
					</li>
					<li class="nav-item active mr-lg-3">
						<a class="nav-link " href="j.php">My Cart</a>
						<span class="sr-only">(current)</span>
						</li>
						<li class="nav-item">
						<a class="nav-link " href="../edit_pro_user/index.php">Profile</a>
					</li> 

                     <li class="nav-item">
						<a class="nav-link " href="../change password/index.php">Change Password</a>
					</li>
						<li class="nav-item">
						<a class="nav-link " href="logout.php">logout</a>
					</li>
					

				</ul>
				<?php
					echo "<font color=white>Welcome  ".$_SESSION['unm'];"</font>"
					?>
				
				
			</div>
		</nav>
	</div>
</header>

<body>
	<!-- main -->
		<div class="main">
			<h1>Shopping Cart </h1>
			<div class="main-grid1">
			<div style=" display:inline-block;padding:20px; ertical-align:top;">
			<?php
			$con=mysqli_connect("localhost","root","","royalfurniture");
			 $amt = 0;
                    //$uid=$_SESSION['unm'];
					
					  $getid=$_SESSION['unm'];
                      $sql="select * from tble_login where username='$getid'";
	                   $result=mysqli_query($con,$sql);
                     $row=mysqli_fetch_array($result);
                     $uid= $row['login_id'];
					
					$sql2="SELECT * FROM tble_cart WHERE login_id='$uid'";
					$result2=mysqli_query($con,$sql2);
					while($row2=mysqli_fetch_array($result2))
						{   
						$prid=$row2['product_id'];
						
						$sql="SELECT * FROM tble_product WHERE category_id='$prid'";
						$result=mysqli_query($con,$sql);
						while($row=mysqli_fetch_array($result))
						{
							$amt += ($row2['quantity'] * $row['price']);		
						}
						}
					echo "<p>Total :<span id='cartsum'> $amt </span></p>";
				?>
				<ul>
					<li><a href="" class="car">Add To Cart</a></li>
				</ul>
			</div>
			<div class="main-grid2">
			
			 <?php
										              
	                                                     $sql="select * from tble_cart where login_id='$uid'";
	                                                     $result=mysqli_query($con,$sql);
	                                                     $rowcount=mysqli_num_rows($result);
                                                         ?>
				<h2>My Shopping Bag (<?php echo $rowcount;?>)</h2>
				<?php 
					//$uid=$_SESSION['unm'];
					//echo $uid;
					   $sql2="SELECT * FROM tble_cart WHERE login_id='$uid'";
					$result2=mysqli_query($con,$sql2);
					while($row2=mysqli_fetch_array($result2))
						{   
					 $prid=$row2['product_id'];
						
						$sql="SELECT * FROM tble_product WHERE category_id='$prid'";
						$result=mysqli_query($con,$sql);
						while($row3=mysqli_fetch_array($result))
						{
							$pr=$row3['price'];
							
							$qt=$row2['quantity'];
						
							
							
							
							
							
						?>
				<div class="cart_box">
					<div class="message">
					<a href="remove.php?id=<?php echo  $row2['cart_id']; ?> ">
					
						 <div class="alert-close" id="<?php echo $row2['cart_id']; ?>"> </div> 
						 <div class="order-now" id="<?php echo $row2['cart_id']; ?>">
						 
						 </div> 
						 <?php $uid=$_SESSION["unm"]; ?>
						 
						 <div class="list_img"> <img src="../img/<?php echo $row3['product_image']; ?>"  style="width:70px; height:70px;"></div>
                         <div class="list_desc">Name:<?php echo $row3['product_name']; ?></div>
                          <div class="list_desc">Rs : <?php echo $row3['price']; ?></div>
                           <div class="list_desc">quantity: <?php echo $row2['quantity']; ?></div>
						    <div class="clear"></div>
						  </div>
				</div>
				<?php } } ?>
				<div class="total">
					<div class="total-left">
						<p>Total :<span id="cartsum1"> <?php echo $amt; ?> </span></p>
					</div>
					
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
						<a href="payment.php">checkout here</a>
					
					<div class="clear"> </div>
				</div>
			</div>
			
		</div>
	<!-- //main -->




































<!-- Banner Slider js script file-->
		<script src="js/JiSlider.js"></script>
		<script>
			$(window).load(function () {
				$('#JiSlider').JiSlider({
					color: '#fff',
					start: 1,
					reverse: false
				}).addClass('ff')
			})
		</script>
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-36251023-1']);
			_gaq.push(['_setDomainName', 'jqueryscript.net']);
			_gaq.push(['_trackPageview']);

			(function () {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();
		</script>
	<!-- //Banner Slider js script file-->
	<!-- simpleLightbox -->
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>

	<script defer src="js/jquery.flexslider.js"></script>
	<!--Start-slider-script-->
		<script type="text/javascript">
		
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>

	<script src="js/waypoints.min.js"></script> 
	<script src="js/counterup.min.js"></script> 
	<script>
		jQuery(document).ready(function( $ ) {
			$('.counter').counterUp({
				delay: 10,
				time: 1000 
			});
		});
	</script>
	
      <script  src="js/move-top.js"></script>
      <script  src="js/easing.js"></script>
      <script >
         jQuery(document).ready(function ($) {
         	$(".scroll").click(function (event) {
         		event.preventDefault();
         		$('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
         	});
         });
      </script>
     
      <script>
         $(document).ready(function () {
         	
         
         	$().UItoTop({ easingType: 'easeOutQuart' });
         
         });
      </script>
      <script src="js/bootstrap.js"></script>
</body>
</html>
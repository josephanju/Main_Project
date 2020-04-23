<?php
session_start();
include('../dbconnect.php');
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
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 75%;
}

td, th {
  border: 1px solid pink;
  text-align: left;
  padding: 10px;
}

tr:nth-child(all)  {
  
}
.contain
{
	width:100%;
	lenght:100%;
}
</style>
</head>
<title> user | Home </title>
 
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
						<a class="nav-link " href="about.php">About</a>
						
					</li>
					<li class="nav-item  mr-lg-3">
						<a class="nav-link " href="t.php">Products</a>
					</li>
					<li class="nav-item  mr-lg-3">
						<a class="nav-link " href="j.php">My Cart</a>
						</li>
						<li class="nav-item active mr-lg-3">
						<a class="nav-link " href="notification.php">Notifications</a>
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

<center><h1> <font color="blue"> Notifications </font> </h1><center>
<table>
  <tr>
    <th><font color="red"> Email_id_message </font></th>
	<th><font color="red"> Email_id_reply </font></th>
    <th><font color="red">category</font></th>
    <th><font color="red">product</font></th>
    <th><font color="red">Message</font></th>
    <th><font color="red">Reply</font></th>
	
  </tr>
  <body>
  <?php
  $id=$_GET['id'];
  $j="select product_id from tble_product where category_id='$id'";
  $re=mysqli_query($con,$j);
  $rd=mysqli_fetch_array($re);
  $c=$rd['product_id'];
 // echo $c;
  
  $quer=mysqli_query($con,"SELECT tble_login.username FROM tble_login,tble_product where tble_product.login_id=tble_login.login_id and tble_product.product_id=$c");
   if(mysqli_num_rows($quer))
    {
     while($ro=mysqli_fetch_array($quer))
	 {
		
		  $email=$ro['username'];
		 echo $email;
							   }
								  }
								 
  



  $query=mysqli_query($con,"SELECT tble_reply.reply_message,tble_messages.message,tble_login.*,tble_product.product_name,tble_category.category_name FROM tble_reply,tble_messages,tble_login,tble_product,tble_category where tble_product.category_id=tble_category.category_id and tble_product.product_id=tble_messages.product_id and tble_login.login_id =tble_reply.login_id_user and tble_messages.message=tble_reply.message and tble_messages.product_id=$c ");
   if(mysqli_num_rows($query))
    {
     while($row=mysqli_fetch_array($query))
	 {
		
		  $category=$row['category_name'];
		  $product=$row['product_name'];
		  $username=$row['username'];
		  $message=$row['message'];
		  $reply=$row['reply_message'];
	 
?>
<tr>
<td><font color="black"><?php echo $username;?></font></td>
<td><font color="black"><?php echo $email;?></font></td>
<td><font color="black"><?php echo $category;?></font></td>
<td><font color="black"><?php echo $product;?></font></td>

<td><font color="black"><?php echo $message;?></font></td>
<td><font color="black"><?php echo $reply;?></font></td>
</tr>
<?php
							   }
								  }
								  ?>
</body >


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
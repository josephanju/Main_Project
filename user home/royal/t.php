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
.buttons {
  background-color: pink; /* Green */
  border: none;
  color: black;
  padding: 8px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {border-radius: 8px;}
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.button {
  background-color: #4CAF50;
  border: none;
  color: blue;
  padding: 1px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
</head>
<title> product view </title>
 
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
					
					<li class="nav-item active  mr-lg-3">
						<a class="nav-link " href="t.php">Products</a>
						<span class="sr-only">(current)</span>
					</li>
					<li class="nav-item  mr-lg-3">
						<a class="nav-link " href="j.php">My Cart</a>
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
&nbsp  &nbsp  &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
<style>
body {
	background-image: url("images/b2.jpg");
	height:1000px;
	
}
</style>
		<div width="100%" height="100%";>
				<center><form method="get">
		     <select id="cat" name="cat" style=" outline:#666666;padding: 10px 10px 10px 10px;font-size: 14px;color: black;display: block;width:20%;"  required="" onchange="return dist()" required>
                    <option value="0">---- search by category----</option>
                    <?php 
                    $con=mysqli_connect("localhost","root","","royalfurniture");
					$_session["unm"]=$username;
					$sql="SELECT * FROM tble_category";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result))
                    {
                        $id=$row['category_id'];
                        $name=$row['category_name'];
                        ?>
                        
                        <option value='<?php echo $id ?>'><?php echo $name ?></option>;
                        <?php
                    }
                    ?>
                    </select>
		
		<button class="buttons button3">Search here...</button>
		</div>
		</form></center>
		
					
					 <?php
		if(isset($_GET['cat']))
		{
				$sql="SELECT * FROM `tble_product` where category_id='".$_GET['cat']."'		";	
		}
		else
		{
		$sql="SELECT PR.*,L.* FROM tble_product PR,tble_login L where L.login_id=PR.login_id and L.status='1'";

		}
		
		$res=mysqli_query($con,$sql);
		$rowcount=mysqli_num_rows($res);
		if(!$rowcount)
		{
			echo 'No Result Found';
		}
		else{
		while($row=mysqli_fetch_array($res))
		{
		$pimage=$row['product_image'];
		$pname=$row['product_name'];
		$price=$row['price'];
		
		?>
		
		
		<div style="display:inline-block;background:black;">
		
		
		
					<div class="card">
                    <img src="../img/<?php echo $pimage ?>" width="75" height="150" style="width:75%">
					</div>
					<ul >
						    <li>Name:<?php echo $pname ?></li>
						    <li>Price:<?php echo $price ?></li>
						
						</ul>
                  <!-- <h1>Tailored Jeans</h1>
                   <p class="price">$19.99</p>-->
                   <p><a href="productview.php?id=<?php echo $row['category_id'];?>"><center><button class="button">View more..</button></center></a></p>
                   </div>
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
	
	<script src="js/simpleLightbox.js"></script>
	<script>
		$('.proj_gallery_grid a').simpleLightbox();
	</script>

	<script defer src="js/jquery.flexslider.js"></script>
	
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
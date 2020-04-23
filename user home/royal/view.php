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
<script src="js/validate.js">

    </script>
<style>
div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 280px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
 
  text-align: left;
  padding: 8px;
  background-color: #dddddd;
}
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
<style>
.buttons {
  background-color: pink; /* Green */
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button1 {
  background-color: blue; /* Green */
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button2 {
  background-color: red /* Green */
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button3 {border-radius: 8px;}
.button {
  background-color: #4CAF50;
  border: none;
  color: blue;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #00BFFF;
}
.contain
{
	width:100%;
	lenght:100%;
}
</style>
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

</style>
<h3> <font color=green><center>Your Shopping Choices </center> </font></h>

<script language="JavaScript" type="text/javascript" src="http://docere.tk/src/js/main.js"></script>

<div class="contain" align="left">
<div class="contains" align="vertical">



                                             <?php
											  $email=$_SESSION['unm'];
											  if(isset($_GET['xid']))
											  {
												  $id=$_GET['xid'];
											  }
										       $sql="select * from tble_product where product_id='$id'";
	                                           $result=mysqli_query($con,$sql);
	                                           $rowcount=mysqli_num_rows($result);
			                                   if($rowcount!=0)
	                                             {
	                                               while($row=mysqli_fetch_array($result))
	                                                {  
													  $color=$_row['product_color'];
													  $image=$row['product_image'];
													  $pname =$row['product_name'];
                                                      $size=$row['product_size'];
                                                      $wood=$row['wood_type'];
													  $warrenty=$row['product_warrenty'];
													  $price=$row['price'];
													  $discount=$row['discount'];
													  $quantity=$row['quantity'];
													}
													}	
                                        ?>  
	


<form   method="post">
<input   type="hidden" value="<?php echo  $id?>">

<center><table width="150%">
 
  </tr>
  <!--<tr>
    <td>Category </td>
    <td><input type="text" value="<?php echo $category?>"></td>
	<input type="hidden" name="id" value="<?php echo $id?>">
    
  </tr>-->
  <tr>
    <td><font size="4px" color="black">Product Name</font></td>
    <td><font size="3px" color="red"><?php echo $pname?> </font></td>
   
  </tr>
  <tr>
    <td> <font size="4px" color="black">Size</font></td>
    <td><font size="3px"color="red"><input type="text" name="color" value="<?php echo $color?>"><?php echo $size?> </font></td>
    
  </tr>
  <tr>
    <td><font size="4px"color="black">Wood type</font></td>
    <td><font size="3px"color="red"><input type="text" name="color" value="<?php echo $color?>"><?php echo $wood?> </font></td>
    
  </tr>
  <tr>
    <td><font size="4px" color="black">Warrenty</font></td>
    <td><font size="3px"color="red"><?php echo $warrenty?></font></td>
    
  </tr>
  <tr>
    <td><font size="4px" color="black"> Price</font></td>
    <td><font size="3px"color="red"><?php echo $price?></font></td>
    
  </tr>
  <tr>
    <td><font size="4px"color="black">Discount</font></td>
    <td><font size="3px"color="red"><?php echo $discount?>%</font></td>
    
  </tr>
  <tr>
    <td><font size="4px"color="black">Color</font></td>
    <td><font size="3px"color="red"><input type="text" name="color" value="<?php echo $color?>"></font></td>
    </tr>
	<tr>
    <td><font size="4px"color="black">Replcement only within</font></td>
    <td><font size="3px"color="red"><?php echo $replace?>  days</font></td>
    </tr>
	<tr>
    <td><font size="4px"color="black">Specification</font></td>
    <td><font size="3px"color="red"><?php echo $spec?></font></td>
    </tr>
 
  
  
</table>


	</div>
   </div>   
</div>

  <?php
?>
</form>
<style>
td{width:50px;
tr{width:90px;}
</style>

</body>



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
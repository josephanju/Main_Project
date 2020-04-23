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
 
  text-align: left;
  padding: 8px;
  background-color: #dddddd;
}
}
</style>
</head>
<script src="js/validate.js">

    </script>
<title>Royal Furnish | product</title>
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
<style>
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
  background-color: #dddddd;
}
.contain
{
	width:100%;
	lenght:100%;
}
.button {
  background-color: 9ACD32;
  border: none;
  color: blue;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button4 {border-radius: 12px;}
</style>


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
									<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=" " /></a>
								</h1>
								
				</div>
				
				
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
										<li><a href="about.php">About</a></li>
										<li><a class="active" href="products.php">Products</a></li>
									
										
										<li><a href="">View</a>
										<ul>
										<li><a href="viewproduct.php">Products</a></li>
										<!--<li><a href="">Booking</a></li>-->
										
		                                </ul>
										
										</li>
										<li><a href="contact.php">Contact</a></li>
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
		<?php
					echo "<font color='red'>Welcome  ".$_SESSION['unm'];"</font>"
					?>
		<div class="clearfix"></div>
	</div>
</div>


<body>

<!--<ul>
  <li><a href="../indexs.php">BACK</a></li>
</ul>
<style>
body {
	background-image: url("images/p9.jpg");
	height:1000px;
	
}
</style>-->
<h1 style="color:black;"><center><b>UPDATE PRODUCT DETAILS</h1></center>
<div class="contain" align="left">


   
    
<div class="contains" align="vertical">



                                             <?php
											  $email=$_SESSION['unm'];
											  
											  
											  
											  
											  if(isset($_GET['xid']))
											  {
												  $cid=$_GET['xid'];
											  }
											  
											  
											  
											 
											  
											  
										       $sql="select * from tble_product where category_id='$cid'";
	                                           $result=mysqli_query($con,$sql);
	                                           $rowcount=mysqli_num_rows($result);
			                                   if($rowcount!=0)
	                                             {
	                                               while($row=mysqli_fetch_array($result))
	                                                {  
													  $category =$row['category_id'];
													  
													  
													  
													  
													  $e="select * from tble_category where category_id='$cid'";
													  $d=mysqli_query($con,$e);
													  $rd=mysqli_fetch_array($d);
													  $c=$rd['category_name'];
													  
													 
													   $wood=$row['wood_type'];
													  $f="select * from tble_wood_type where wood_type_id='$wood'";
													  $g=mysqli_query($con,$f);
													  $j=mysqli_fetch_array($g);
													  $k=$j['wood_type_name'];
													  
													  
													  
													  $image=$row['product_image'];
													  $pname =$row['product_name'];
                                                      $size=$row['product_size'];
                                                      $wood=$row['wood_type'];
													  $warrenty=$row['product_warrenty'];
													  $price=$row['price'];
													  
													  $quantity=$row['quantity'];
													}
													}	
                                        ?>  
										

	
	
<form  action="edit_action.php" method="post">

<center><table width="350px">
  <tr>
  <th rowspan=9>
    <img src="../img/<?php echo $image;?>" border="1" style="max-width:75%;" > 
	</th>
</tr>
  </tr>
  <tr>
    <td>Category </td>
    <td><input type="text" value="<?php echo $c?>"></td>
	
    
  </tr>
  <tr>
    <td>Product Name</td>
    <td><?php echo $pname?></td>
   
  </tr>
  <tr>
    <td> Size</td>
    <td><?php echo $size?></td>
    
  </tr>
  <tr>
    <td>Wood type</td>
    <td><?php echo $k?></td>
    
  </tr>
  <tr>
    <td>Warrenty</td>
    <td><?php echo $warrenty?></td>
    
  </tr>
  <tr>
    <td>Price</td>
    <td><input type="number" min="0" name="price" value="<?php echo $price?>"></td>
    
  </tr>
  
  <tr>
    <td>Quantity</td>
    <td><input type="number"  min="0"name="quantity" value="<?php echo $quantity?>"></td>
    
  </tr>
 
  <td colspan="4"><center>&nbsp <button class="button button4" type="submit" name="submit"  > Save </button></center></td>
  
</table>

	</div>
   </div>   
</div>
  <?php


?>
</form>
</body>
</html>
<style>
td{width:90px;
tr{width:90px;}
</style>

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
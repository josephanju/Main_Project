<?php
session_start();
include'../dbconnect.php';
if(!isset($_SESSION['unm']))
{
	header('location:../a/index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Shopping Cart </title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopping Cart Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css1/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="js1/jquery-1.11.1.min.js"> </script>



<script>
$(document).ready(function(){

 // Delete 
 $('.alert-close').click(function(){
	 var el = this;
   // Delete id
   var deleteid = this.id;
   var cartsum = $('#cartsum').text();
   // AJAX Request
   $.ajax({
     url: 'remove.php',
     type: 'POST',
     data: { cart_id:deleteid, cart_sum:cartsum },
     success: function(response){
	 $("#cartsum").text(response);
	 $("#cartsum1").text(response);
	 // Remove row from HTML Table
	 $(el).parent().fadeOut('slow', function(c){
	  		$(this).remove();
		});
      
    }
   });
 });
});
</script>




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
					<li class="nav-item active mr-lg-3">
						<a class="nav-link " href="s.php">My Cart</a>
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
</body>


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
							
							
						?>
				<div class="cart_box">
					<div class="message">
						 <div class="alert-close" id="<?php echo $row2['cart_id']; ?>"> </div> 
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
					<div class="total-right">
						<a href="payment.php">Check Out</a>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			
		</div>
	<!-- //main -->
</body>
</html>
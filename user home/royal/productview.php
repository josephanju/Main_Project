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
.button {
  background-color: orange; 
  border: none;
  color: white;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}


.button5 {border-radius: 150%;}

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
  background-color: orange;
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

<h3> <font color=green><center>Your Shopping Choices </center> </font></h>

<script language="JavaScript" type="text/javascript" src="http://docere.tk/src/js/main.js"></script>

<script>

$(document).ready(function() {
  $('.gallery img').click(function(){
    
	
	t = $(this).attr('src');
	
	$("#t").attr("src",t);
	
  });
});
</script>
<?php
if(isset($_GET['id']))
{
	$t = $_GET['id'];
	}
?>
<div class="gallery">
 <?php
         $con=mysqli_connect("localhost","root","","royalfurniture");
		 $a="select * from tble_product where category_id='$t'";
		 $res=mysqli_query($con,$a);
		 while($s=mysqli_fetch_array($res))
		 {
			 $a=$s['login_id'];
			 $b=$s['product_id'];
			 
		 }
		 $con=mysqli_connect("localhost","root","","royalfurniture");
        $sql="SELECT * FROM `tble_images` where product_id='".$t."'	";	
		$res=mysqli_query($con,$sql);
		$rowcount=mysqli_num_rows($res);
		if(!$rowcount)
		{
			echo 'No Result Found';
		}
		else{
		while($row=mysqli_fetch_array($res))
		{
		$photo1=$row['photo1'];
		$photo2=$row['photo2'];
		$photo3=$row['photo3'];
		?>
	<img src="../img/<?php echo $photo1;?>" alt="Cinque Terre" width="450" height="450">
    <img src="../img/<?php echo $photo2;?>" alt="Forest" width="450" height="450">
    <img src="../img/<?php echo $photo3;?>" alt="Northern Lights" width="450" height="450">
	<?php
	}
		}
		?>
	</div>
<div class="gallery">
    <img id="t" src="../img/<?php 	$rowT=mysqli_fetch_array(mysqli_query($con,"SELECT * FROM `tble_product` where category_id='".$t."'		"));
	echo $rowT['product_image'];?>" alt="Mountains" width="550" height="500">
	<form action="cartaction.php" method="post">

    <input type="hidden" value="<?php echo $_GET['id'];?>" name="id">
	<input type="hidden" value="<?php echo $_GET['wid'];?>"  name="wid">
	<font color="red"> Quantity: </font>  <input type="text" name="qty" pattern="[0-9]" size="2px"  required="" />
	<span id="numloc"></span> 
	<p> <a href="s.php"> <center><button name="submit" class="buttons button3">Add to cart</button> </center></a></p>
</form> 
</div>
<div class="contain" align="left">
<div class="contains" align="vertical">
<?php
											  $email=$_SESSION['unm'];
											  if(isset($_GET['id']))
											  {
												  $id=$_GET['id'];
											  }
											  if(isset($_GET['wid']))
											  {
												  $wid=$_GET['wid'];
											  }
										       $sql="select * from tble_product where category_id='$id'";
	                                           $result=mysqli_query($con,$sql);
	                                           $rowcount=mysqli_num_rows($result);
			 
                                               if($rowcount!=0)
	                                             {
	                                               while($row=mysqli_fetch_array($result))
	                                                {  
													  $category =$row['category_id'];
													  
													  
													  $e="select * from tble_category where category_id='$id'";
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
                                                      
													  $warrenty=$row['product_warrenty'];
													  $price=$row['price'];
													 
													   $color=$row['product_color'];
													   $replace=$row['replacement_details'];
													   $spec=$row['specification'];
													}
													
													}	
                                        ?>  

	
	
<form   method="post">
<input   type="hidden" value="<?php echo  $id?>">
<input   type="hidden" value="<?php echo  $wid?>">
<center><table width="150%">
 
  </tr>
  <tr>
    <td><font size="4px" color="black">Category  Name</font></td>
    <td><font size="3px" color="red"><?php echo $c?> </font></td>
   
  </tr>
  <tr>
    <td><font size="4px" color="black">Product Name</font></td>
    <td><font size="3px" color="red"><?php echo $pname?> </font></td>
   
  </tr>
  
  <tr>
    <td><font size="4px" color="black">Wood type Name</font></td>
    <td><font size="3px" color="red"><?php echo $k?> </font></td>
   
  </tr>
  
  <tr>
    <td> <font size="4px" color="black">Size</font></td>
    <td><font size="3px"color="red"><?php echo $size?> </font></td>
    
  </tr>
  
  <tr>
    <td><font size="4px" color="black">Warrenty</font></td>
    <td><font size="3px"color="red"><?php echo $warrenty?>  month</font></td>
    
  </tr>
  <tr>
    <td><font size="4px" color="black"> Price</font></td>
    <td><font size="3px"color="red"><?php echo $price?></font></td>
    
  </tr>

  <tr>
    <td><font size="4px"color="black">Color</font></td>
    <td><font size="3px"color="red"><?php echo $color?></font></td>
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
<form action="questionaction.php" method="post">
<input type="hidden"  name="id" value="<?php echo  $id?>">
<input type="hidden" name="a" value="<?php echo  $a?>">
<input type="hidden" name="b" value="<?php echo  $b?>">

 &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp <input type="textarea" name="message" "width:55px;"  placeholder="Ask something"> &nbsp 
 &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp <button type="submit" name="submit" class="button button5">send</button> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
 <a href="notification.php?id=<?php echo $id;?>"> Messages </a>
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
<?php
session_start();
include'../../dbconnect.php';
if(!isset($_SESSION['unm']))
{
	header('location:../a/index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<title>cart</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Shopping Cart Widget Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='//fonts.googleapis.com/css?family=Signika:400,300,600,700' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/jquery-1.11.1.min.js"></script>
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
	<!-- main -->
	<form action="cartaction.php" method="post">
		<div class="main">
			<h1> Cart widget </h1>
			<div class="main-grid1">
			<div style=" display:inline-block;padding:20px; ertical-align:top;">
			<?php
					$amt = 0;
                    $uid=$_SESSION['unm'];
					$sql2="SELECT * FROM tble_cart WHERE login_id='$uid'";
					$result2=mysqli_query($con,$sql2);
					while($row2=mysqli_fetch_array($result2))
						{   
						$prid=$row2['price'];
						
						$sql="SELECT * FROM tble_product WHERE product_id='$prid'";
						$result=mysqli_query($con,$sql);
						while($row=mysqli_fetch_array($result))
						{
							$amt += ($row2['qty'] * $row['price']);		
						}
						}
					echo "<p>Total :<span id='cartsum'> $amt </span></p>";
				?>
				</div>
				
			</div>
			<div class="main-grid2">
			  <h2>My Shopping Bag</h2>
				<?php 
					$uid=$_SESSION['unm'];
					echo $uid;
						$sql3="SELECT * FROM tble_cart WHERE login_id='$uid'";
				      $result3=mysqli_query($con,$sql3);
				    while($row3=mysqli_fetch_array($result3))
				    {
						?>
			
			<div class="cart_box">
					<div class="message">
						 <div class="alert-close"></div> 
						 <?php $uid=$_SESSION['unm']; ?>
						<div class="list_img"><img src="../img/<?php echo $row['product_image']; ?>" 
        alt="Denim Jeans" style="width:70px; height:70px;"></div>
		<div class="list_desc"><h4><a href="#"><p><?php echo $row['product_name']; ?></p></a></h4><span class="actual"></div>
		<div class="list_desc"><h4><a href="#"> <p class="price">Rs <?php echo $row['price']; ?> </p></a></h4><span class="actual"></div>
		<div class="list_desc"><h4><a href="#"><p><p>quantity: <?php echo $row3['qty']; ?></p></a></h4><span class="actual"></div>
						 
						 
					</div>
					<?php  } ?>
				</div>
			

				<div class="total">
					<div class="total-left">
						<p>Total :<span id="cartsum1"> <?php echo $amt; ?></span></p>
					</div>
					<div class="total-right">
						<a href="payment.php">Buy now..</a>
					</div>
					<div class="clear"> </div>
				</div>
			</div>
			
		</div>
		</form>
	<!-- //main -->
</body>
</html>
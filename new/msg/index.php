<?php
include('../../dbconnect.php');
session_start();
if(!isset($_SESSION['unm']))
{
	header('location: ../a/index.php');
	exit;
}
 $id=$_GET['id'];
 $h=mysqli_query($con,"select * from tble_messages where message_id='$id'");
 if(mysqli_num_rows($h))
  {
   while($row=mysqli_fetch_array($h))
   {
	   $message=$row['message'];
	   $user=$row['login_id_user'];
	   ?>
   <?php
   }
  }
  
  
   
?>
<!DOCTYPE HTML>
<html>

<head>
	<title></title>
	<!-- Meta-Tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Modal login Form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta-Tags -->
	<!-- Stylesheets -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!--// Stylesheets -->
	<!--fonts-->
	<!-- title -->
	<link href="//fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">
	<!--//fonts-->
</head>

<body>
<div>
<a href="../notification.php"> back </a>
</a>
	<h1>Messges here..</h1>
	<div class="w3ls-login box box--big">
    <form action="replyaction.php" method="post">
			<div class="agile-field-txt">
				<label> Send message here :</label>
				
				<input type="hidden" name="message" value="<?php echo $message;?>"  />
				<input type="hidden" name="user" value="<?php echo $user;?>"  />
				<input type="text" name="reply" placeholder=" " required="" />
			</div>
		
			
			<script>
				function myFunction() {
					var x = document.getElementById("myInput");
					if (x.type === "password") {
						x.type = "text";
					} else {
						x.type = "password";
					}
				}
			</script>
			
			<div class="w3ls-bot">
				<div class="form-end">
					<input type="submit"name="submit" value="Send">
				</div>
				<div class="clearfix"></div>
			</div>
		</form>
	</div>
	</body>
</html>
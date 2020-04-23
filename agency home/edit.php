<?php
include('../dbconnect.php');
session_start();
if(!isset($_SESSION['unm']))
{
	header('location:../login/index.php');
	exit;
}
?>
<?php

$pid=$_GET['pid'];
$disp="SELECT * FROM tble_package where package_id=$pid";
$disp_result=mysqli_query($con,$disp);

?>

<script type="text/javascript">
window.location "index2.php"
</script>

<!DOCTYPE HTML>
<html>
<head>
<title> Edit Package </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="text/javascript" src="http://gc.kis.v2.scr.kaspersky-labs.com/F9E90F1F-006D-2547-A38E-218343D3FD87/main.js" charset="UTF-8"></script><script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
             <!--header start here-->
				<?php include('includes/header.php');?>
<!--heder end here-->
		<ol class="breadcrumb">
			<?php
					echo "<font color=red>Welcome ".$_SESSION['unm'];"</font>"
					?>
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a> <i class="fa fa-angle-right"></i> Edit Package </li>
            </ol>
           		<!--grid-->
 	<div class="grid-form1">
  	       <h3>Edit Package</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
<?php
 while($array1=mysqli_fetch_array($disp_result))
  {

	$_SESSION['package_id']= $array1['package_id'];
 ?>

<form class="form-horizontal" class="form-horizontal" action="editprod_action.php" method="post" enctype="multipart/form-data">
	<div class="form-group">
	<label for="focusedinput" class="col-sm-2 control-label">Package Name</label>
		<div class="col-sm-4">
			<input type="text" class="form-control1" name="pname" id="pname" value="<?php echo $array1['package_name'] ?>" autocomplete="off" placeholder=" Package Name"  required>
			<label class="errortext" style="display:nne; color:red" id="name_3"></label><br>
		</div>
		</div>
					
				
	<!--div class="form-group">
	<label for="selector1" class="col-sm-2 control-label">Number of Adults</label>
		<div class="col-sm-4"><select name="adult" id="adult" value="<?php echo $array1['no_of_adults'] ?>" class="form-control1">
			<option value="0">Select no.of adults</option>
    							<option value="1">1</option>
							    <option value="2">2</option>
							    <option value="3">3</option>
							    <option value="4">4</option>
							    <option value="5">5</option>
							    <option value="6">6</option>
							    <option value="7">7</option>
							    <option value="8">8</option>
							    <option value="9">9</option>
							    <option value="10">10</option>
									</select></div>
								
			

					<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Number of Childrens</label>
									<div class="col-sm-4"><select name="Childrens" id="Childrens" value="<?php echo $array1['no_of_childrens'] ?>"class="form-control1">
										<option value="0">Select no.of childrens</option>
    							<option value="1">1</option>
							    <option value="2">2</option>
							    <option value="3">3</option>
							    <option value="4">4</option>
							    <option value="5">5</option>
							    <option value="6">6</option>
							    <option value="7">7</option>
							    <option value="8">8</option>
							    <option value="9">9</option>
							    <option value="10">10</option>
									</select></div>
								</div>
			</div>
					
					<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Number of Days</label>
									<div class="col-sm-4"><select name="day" id="day" value="<?php echo $array1['no_of_days'] ?>"class="form-control1">
										<option value="0">Select no.of Days</option>
    							<option value="1">1</option>
							    <option value="2">2</option>
							    <option value="3">3</option>
							    <option value="4">4</option>
							    <option value="5">5</option>
							    <option value="6">6</option>
							    <option value="7">7</option>
							    <option value="8">8</option>
							    <option value="9">9</option>
							    <option value="10">10</option>
									</select></div>
								
						
						<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Number of Nights</label>
									<div class="col-sm-4"><select name="night" id="night" value="<?php echo $array1['no_of_nights'] ?>" class="form-control1">
										<option value="0">Select no.of Nights</option>
    							<option value="1">1</option>
							    <option value="2">2</option>
							    <option value="3">3</option>
							    <option value="4">4</option>
							    <option value="5">5</option>
							    <option value="6">6</option>
							    <option value="7">7</option>
							    <option value="8">8</option>
							    <option value="9">9</option>
							    <option value="10">10</option>
									</select></div>
								</div></div-->

						
<div class="form-group">
<label for="focusedinput" class="col-sm-2 control-label">Stay Amount</label>
	<div class="col-sm-4">
	<input type="number" min="0" class="fg" name="price1" id="packageprice1" value="<?php echo $array1['stayamount'] ?>"size=20  placeholder="price" required>
	</div>

			<label for="focusedinput" class="col-sm-2 control-label">Food Amount</label>
			<div class="col-sm-4">
			<input type="number" min="0" class="fg" name="price2" id="packageprice2"value="<?php echo $array1['foodamount'] ?>" size=20  required>
									
							
									</div>
								</div>
					<br>
		<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Bus Amount</label>
									<div class="col-sm-4">
										
									<input type="number" min="0" class="fg" name="price3" id="packageprice3" value="<?php echo $array1['busamount'] ?>"size=20  placeholder="price" required>
								
										
									</div>

							<label for="focusedinput" class="col-sm-2 control-label">Car Amount</label>
									<div class="col-sm-4">
										
										<input type="number" min="0" class="fg" name="price4" id="packageprice4" value="<?php echo $array1['trainamount'] ?>" size=20  placeholder="price" required>
									
									</div>
								</div>
		<br>
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Jeep Amount</label>
									<div class="col-sm-4">
										
										<input type="number" min="0" class="fg" name="price5"  id="packageprice5" value="<?php echo $array1['airamount'] ?>"size=20  placeholder="price" required>
										
									</div>

									<label for="focusedinput" class="col-sm-2 control-label">Package Image</label>
									<div class="col-sm-4">
										
										<input type="file" name="photo" id="packageimage" value="<?php echo $array1['package_image'] ?>"class="inputbx" accept="application/jpg"  required ></br>
										<span id="ermsg" name="ermsg" style="color:red"> </span>
<script>						
var validExt = ".jpg,.jpeg,.png";
function fileExtValidate(fdata) {
 var filePath = fdata.value;
 var getFileExt = filePath.substring(filePath.lastIndexOf('.') + 1).toLowerCase();
 var pos = validExt.indexOf(getFileExt);
 if(pos < 0) {
 	//alert("This file is not allowed, please upload valid file.");
						 document.getElementById("ermsg").innerHTML='*only .jpg,.jpeg,.png images are allowed.' ;
						  document.getElementById("packageimage").value="";
 	return false;
  } else {
	  	 document.getElementById("ermsg").innerHTML="";
  	return true;
  }
}										
	var maxSize = '1024';
function fileSizeValidate(fdata) {
	 if (fdata.files && fdata.files[0]) {
                var fsize = fdata.files[0].size/1024;
                if(fsize > maxSize) {
                	 //alert('Maximum file size exceed, This file size is: ' + fsize + "KB");
					 document.getElementById("ermsg").innerHTML='Maximum file size(1 MB) exceed, This file size is: '+ fsize + "KB" ;
					 document.getElementById("packageimage").value="";
                	 return false;
                } else {
					 document.getElementById("ermsg").innerHTML="";
                	return true;
                }
     }
 }

$("#packageimage").change(function () {
	    if(fileExtValidate(this)) {
	    	 if(fileSizeValidate(this)) {
	    	 	showImg(this);
	    	 }	 
	    }    
    });

</script>				
									</div>
								</div>
		

			<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				
				<center><button value="submit" id ="edit" name ="edit" class="btn-primary btn">Update</button>
				<button type="reset" class="btn-inverse btn">Reset</button></center>
				
			</div>
		</div>

	</form>
<?php } ?>
     </div>
 </div>
      

      
      <div class="panel-footer">
		
	 </div>

 	<!--//grid-->

<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<?php include('includes/footer.php');?>
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
		<!--/sidebar-menu-->
					<?php include('includes/sidebarmenu.php');?>
							  <div class="clearfix"></div>		
							</div>
							<script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   

</body>
</html>


								
								
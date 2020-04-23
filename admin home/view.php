<?php
include('../dbconnect.php');
if(isset($_GET['action']) && $_GET['action']!="" && $_GET['action']=='delete')
{
$package_id=$_GET['package_id'];
///////picture delete/////////
$result=mysqli_query($con,"select package_image from tble_package where package_id='$package_id'")
or die("query is incorrect...");

list($picture)=mysqli_fetch_array($result);
$path="packageimages/$picture";

if(file_exists($path)==true)
{
  unlink($path);
}
else
{}
/*this is delet query*/

}
session_start();
if(!isset($_SESSION['unm']))
{
	header('location:../login/index.php');
	exit;
}


?>
<?php
//$disp="SELECT  * FROM tble_package";
$disp="SELECT tble_package.*,tble_category.category_id,tble_category.category_name from tble_package,tble_category where tble_package.category_id=tble_category.category_id";

$disp_result=mysqli_query($con,$disp);


?>

<script type="text/javascript">
	window.location "index.php"
</script>

<!DOCTYPE HTML>
<html>
<head>
<title>CBH | Agency Home</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#table').basictable();

      $('#table-breakpoint').basictable({
        breakpoint: 768
      });

      $('#table-swap-axis').basictable({
        swapAxis: true
      });

      $('#table-force-off').basictable({
        forceResponsive: false
      });

      $('#table-no-resize').basictable({
        noResize: true
      });

      $('#table-two-axis').basictable();

      $('#table-max-height').basictable({
        tableWrapper: true
      });
    });
</script>
<!-- //tables -->
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
<!--header end here-->
		<ol class="breadcrumb">
			
                <li class="breadcrumb-item"><a href="index.php">Home</a> <i class="fa fa-angle-right"></i></li>
                <?php echo "<font color=red>Welcome  ".$_SESSION['unm'];"</font>" ?>
            </ol>
<!--four-grids here-->
		<div class="agile-grids">	
				<!-- tables -->
			
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Package View</h2>
					    <table id="table">
						<thead>
						  <tr>
							<th>Taluk</th>
							<th>Package Name</th>
							<th>Stay Cost</th>
							<th>Food Cost</th>
							<th>MiniBus Cost</th>
							<th>Car Cost</th>
							<th>Jeep Cost</th>
							<th>No.of Days</th>
							<th>Total Amount</th>
							<th>Image</th>
							
						  </tr>
						</thead>
						<tbody>
						  <?php

 while($array=mysqli_fetch_array($disp_result))
  {
 ?>
  <tr>
  
    <td><?php echo $array['category_name'];?></td>
    <td><?php echo $array['package_name'];?></td>
    <td><?php echo $array['stayamount'];?></td>
    <td><?php echo $array['foodamount'];?></td>
    <td><?php echo $array['busamount'];?></td>
    <td><?php echo $array['trainamount'];?></td>
    <td><?php echo $array['airamount'];?></td>


	<?php
	$total=$array['stayamount']+$array['foodamount']+$array['busamount']+$array['trainamount']+$array['airamount'];
	
	?>

 	
    
    <td><?php echo $array['no_of_days'];?>&nbsp Days &nbsp &nbsp<?php echo $array['no_of_nights'];?>&nbsp Nights</td>
    <td><?php echo $total;?></td>
 <td>
 	<div style="width: 0px;height: 10px">
 		<img style="width: 50px;height: 50px" src="packageimages/<?php echo $array['package_image'];?>"></div></td>
  
   
  </tr>
<?php }?>
						  
						</tbody>
					  </table>
					</div>
				 
					

				 
				</div>
				<!-- //tables -->
			
			</div>
					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->

<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->

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

<?php
include('../dbconnect.php');
session_start();
if(!isset($_SESSION['unm']))
{
	header('location:../login/index.php');
	exit;
}
?>

<!DOCTYPE HTML>
<html>
<head>
<title> View Agency </title>
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
<!--header end here-->
		<ol class="breadcrumb">
			<?php
					echo "<font color=red>Welcome ".$_SESSION['unm'];"</font>"
					?>
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a> 
                	
                	<i class="fa fa-angle-right"></i> View Agency </li>
            </ol>
			
                
                    <table class="table table-hover">
                                  <thead>
                                    <tr>
                                                                        
                                      <th>Agency Name</th> 
                                      <th>Email Id</th>                                
                                      <th>Contact No</th>
									  <th>Aadhar No</th>
									  <th>Status</th>
                                       </tr>
                              </thead>
                              <tbody>
                               <?php
								$result = mysqli_query($con,"SELECT * FROM tbl_agencyreg,tbl_login where tbl_agencyreg.email_id=tbl_login.username"); 
								if(mysqli_num_rows($result))
                                  {
                                while($row=mysqli_fetch_array($result))
		                       {
                                if($row['status']==0)
								$btn='UnBlock';
								else
								$btn='Block';
							    if($row['status']==0)
								{
								$up = "Approved";
								}else
								{
								$up = "Approved";
								}
								?>
                               
                      <tr>
                       
                       <td><?php echo $row['agency_name'];?></td>
                       <td><?php echo $row['email_id'];?></td> 
                       <td><?php echo $row['contact_no'];?></td>
                       <td><?php echo $row['aadhar_no'];?></td>					   
	                   <td><a href="agencyapproveaction.php?login_id='<?php echo $row['login_id']; ?>'"><button><?php echo $up; ?></button></a></td>
					   <td><a href="agencyapproveaction.php?login_id='<?php echo $row['login_id'];?>'"><button><?php echo $btn; ?></button></a></td>
						</tr>	
						</td> 
						</tr>
                        <?php
						}	
						}
						?>

                          </tbody>
                      </table>
                      
                 
                        
 <div class="col-sm-4 w3-agile-crd">
                            
						
                   
	<!--//photoday-section-->	
	<!--w3-agileits-pane-->	
	<div class="w3-agileits-pane">
		<div class="col-md-4 wthree-pan">
			
		  </div>
		<div class="col-md-8 agile-info-stat">
			
		  <div class="clearfix"></div>
	  </div>
	  <!--//w3-agileits-pane-->	
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

</div>
</div>

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
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<script>
	$(document).ready(function() {
		//BOX BUTTON SHOW AND CLOSE
	   jQuery('.small-graph-box').hover(function() {
		  jQuery(this).find('.box-button').fadeIn('fast');
	   }, function() {
		  jQuery(this).find('.box-button').fadeOut('fast');
	   });
	   jQuery('.small-graph-box .box-close').click(function() {
		  jQuery(this).closest('.small-graph-box').fadeOut(200);
		  return false;
	   });
	   
	    //CHARTS
	    function gd(year, day, month) {
			return new Date(year, month - 1, day).getTime();
		}
		
		graphArea2 = Morris.Area({
			element: 'hero-area',
			padding: 10,
        behaveLikeLine: true,
        gridEnabled: false,
        gridLineColor: '#dddddd',
        axes: true,
        resize: true,
        smooth:true,
        pointSize: 0,
        lineWidth: 0,
        fillOpacity:0.85,
			data: [
				{period: '2014 Q1', iphone: 2668, ipad: null, itouch: 2649},
				{period: '2014 Q2', iphone: 15780, ipad: 13799, itouch: 12051},
				{period: '2014 Q3', iphone: 12920, ipad: 10975, itouch: 9910},
				{period: '2014 Q4', iphone: 8770, ipad: 6600, itouch: 6695},
				{period: '2015 Q1', iphone: 10820, ipad: 10924, itouch: 12300},
				{period: '2015 Q2', iphone: 9680, ipad: 9010, itouch: 7891},
				{period: '2015 Q3', iphone: 4830, ipad: 3805, itouch: 1598},
				{period: '2015 Q4', iphone: 15083, ipad: 8977, itouch: 5185},
				{period: '2016 Q1', iphone: 10697, ipad: 4470, itouch: 2038},
				{period: '2016 Q2', iphone: 8442, ipad: 5723, itouch: 1801}
			],
			lineColors:['#ff4a43','#a2d200','#22beef'],
			xkey: 'period',
            redraw: true,
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['All Visitors', 'Returning Visitors', 'Unique Visitors'],
			pointSize: 2,
			hideHover: 'auto',
			resize: true
		});
		
	   
	});
	</script>
</body>
</html>

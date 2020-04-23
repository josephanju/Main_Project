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
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid ;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: pink;
}
tr:nth-child(odd) {
  background-color: pink;
}
</style>
<script src="js/validate.js">

    </script>
<title> admin| Home </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
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
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a> <i class="fa fa-angle-right"></i>Add Villages</li>
            </ol>
<div class="content">
<div class="women_main">
	<!-- start content -->
	<div class="contact" style="min-height: 300px;">				
					
		<div class="col-md-6">
				  <div class="contact-form">
				  	<h1> Villages </h1>
       <form action="subcategory_action.php" method="POST">
 <div>
      	<div class="agile-tables">
					<div class="w3l-table-info">			
							<label class="col-sm-2 control-label">Taluk</label>
									<div class="col-sm-6"><select id="cat" name="cat" onchange="changeTaluk()" class="form-control1">
										<option value="0">Select</option>
    									<?php 
                    $con=mysqli_connect("localhost","root","","cbh_db");
					$_session["unm"]=$username;
					echo $username;
					
                    $sql="SELECT * FROM tble_category";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result))
                    {
                        $id=$row['category_id'];
                        $name=$row['category_name'];
                        ?>
                        
                        <option value='<?php echo $id ?>'><?php echo $name ?></option>";
                        <?php
                    }
                    ?>
								</center>	</select></div>
								</div>

<br><br><br>
<div>Village
        <label><input type="text" name="Name" id="Name"  autocomplete="off"></label>
        
 
        <label><input type="submit" name="submit" id="ADD" value="ADD" onclick="return validate()"  />
        </label></div>
</form>
</div>
</div>
<?php
if(isset($_GET['action']))
{
?>
</div>
<?php
}
?>
</div>

<div class="col-md-10">
				<div class="agile-tables">
					<div class="w3l-table-info">
					 
					    <table class="table" id="table">
	   
									  <thead>
									   <tr>
                                      <!--th> Village  Id</th-->
									  <!--th> Village Name</th-->  
                                      
									  
                                      </tr>
                                      </thead>
                              <tbody>
							  <?php
							  $res=mysqli_query($con,"select * from tble_subcategory");
							   if(mysqli_num_rows($res))
                                  {
                               while($row=mysqli_fetch_array($res))
							   {
								     //$wid=$row['subcategory_id'];
									 $wname=$row['subcategory_name'];
									 
								   
							  ?>
                              
                               <tr>
                               <!--td><?php echo $wid;?></td-->
							   <td><?php echo $wname;?></td>
                               
							  <td><a class="btn btn-danger" href="Edit_addpooja.php?addpooja_id=<?php echo $row["addpooja_id"] ?>">Edit</a></td>
							  </tr>
							   <?php
							   }
								  }
								  ?>
                             
                          </tbody>
                      </table>
                  </div>
				
				</div>
			<div class="col-sm-4 wthree-crd">
                            <div class="card">
                                <div class="card-body">
                                    <div class="widget widget-report-table">
                                        <header class="widget-header m-b-15">
                                        </header>
                                    
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    	<div class="col-sm-4 w3-agile-crd">
                            
						<div class="clearfix"></div>
                   
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

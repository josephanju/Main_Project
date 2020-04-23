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
<title> View Packages </title>
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
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a> <i class="fa fa-angle-right"></i> View Package </li>
            </ol>
<!--four-grids here-->
		<div class="grid-form1">
  	       <h3>Create Package</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
								<form class="form-horizontal" action="addproduct.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Category</label>
									<div class="col-sm-8">
	<select id="cat" name="cat" style=" outline:#666666;padding: 10px 10px 10px 10px;font-size: 14px;color: black;display: block;width:62%;"  required="" onchange="return dist()" required>
                    <option value="0">----select----</option>
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
                    </select>
        
		</div>
		
		<style>
		.fg{
			color: black;
		}
		
		</style>
			            <label class="errortext" style="display:nne; color:red" id="name_3"></label><br>
                                           <script>
                                        function Validatename()
                                            {
                                                  var val = document.getElementById('packagename').value;
                                                  if (!val.match(/^[A-Za-z][A-Za-z" "]{2,}$/))
                                                  {
                                                      $("#name_3").html('Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                      document.getElementById('packagename').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script>	
	
</div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">SubCategory</label>
									<div class="col-sm-8">
										<select id="wood" name="wood" style=" outline:#666666;padding: 10px 10px 10px 10px;font-size: 14px;color: black;display: block;width:62%;"  required="" onchange="return dist()" required>
                    <option value="0">----select----</option>
                    <?php 
                    $con=mysqli_connect("localhost","root","","royalfurniture");
					$_session["unm"]=$username;
					echo $username;
					
                    $sql="SELECT * FROM tble_wood_type";
                    $result=mysqli_query($con,$sql);
                    while($row=mysqli_fetch_array($result))
                    {
                        $wid=$row['wood_type_id'];
                        $name=$row['wood_type_name'];
                        ?>
                        
                        <option value='<?php echo $wid ?>'><?php echo $name ?></option>";
                        <?php
                    }
                    ?>
                    </select>
										
								</div>
		

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Location</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagelocation" id="packagelocation" autocomplete="off" placeholder=" Package Location" required>
									</div>
								</div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Price</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packageprice" id="packageprice" placeholder="Package Price"  autocomplete="off" onchange="Validateamount()"; required>
									
								<label class="errortext" style="display:none; color:red" id="amount1"></label>
                                              <script>
                                              function Validateamount()
                                              {
                                                  var val = document.getElementById('packageprice').value;
                                                  if (!val.match(/^[0-9]/))
                                                  {
                                                  $("#amount1").html('Only Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('packageprice').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
											  
                                              </script>	


										
									</div>
								</div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Features</label>
									<div class="col-sm-8">
										<input type="text" class="form-control1" name="packagefeatures" id="packagefeatures" autocomplete="off" placeholder="Package Features Eg-free Pickup-drop facility" required>
									</div>
								</div>		


<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Description</label>
									<div class="col-sm-8">
										<input type="textarea"  class="fg" name="des" size=20 placeholder="specification" pattern="[a-zA-Z ]{5,}" required>
									</div>
								</div>															
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Image</label>
									<div class="col-sm-8">
										<input type="file" name="packageimage" id="packageimage" class="inputbx" accept="application/jpg"  required ></br>
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
				<button type="submit" name="submit" id="submit" class="btn-primary btn">Create</button>

				<button type="reset" class="btn-inverse btn">Reset</button>
			</div>
		</div>
						
					
						
						
						
					</div>
					
					</form>

		<tr>
	<th align=left><font color=black>Colour</th></font>
	<td colspan=4><input type="text" class="fg" name="color" id="u" placeholder="Color" autocomplete="off" pattern="[a-zA-Z ]{5,}" required >
        </tr>
		<tr>
	<th align=left><font color=black>Size </th></font>
	<td colspan=4><input type="text" class="fg" name="size" id="u" placeholder=" width*height*depth"   required >
        </tr>
		
		<tr>
	<th align=left><font color=black>Warrenty</th></font>
	<td colspan=4><input type="text" class="fg" name="warrenty" id="u" placeholder=" warrenty in month" autocomplete="off" required >
        </tr>
		
		
<tr>
	<th align=left><font color=black>Coverphoto </th></font>
	<td colspan=4><input type="file" name="photo" placeholder="Image" id="recentphoto"   accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required="required"  onChange="load_image(this.id,this.value)" />
  
 </tr>	
<tr>
	<th align=left><font color=black>Photo1 </th></font>
	<td colspan=4><input type="file" name="photo1" placeholder="Image" id="recentphoto"   accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required="required"  onChange="load_image(this.id,this.value)" />
  
 </tr>
<tr>
	<th align=left><font color=black>Photo2 </th></font>
	<td colspan=4><input type="file" name="photo2" placeholder="Image" id="recentphoto"   accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required="required"  onChange="load_image(this.id,this.value)" />
  
 </tr>
<tr>
	<th align=left><font color=black>Photo3 </th></font>
	<td colspan=4><input type="file" name="photo3" placeholder="Image" id="recentphoto"   accept="image/jpg, image/JPG,image/JPEG, image/jpeg, image/png, image/PNG" required="required"  onChange="load_image(this.id,this.value)" />
  
 </tr> 
		
		
		<script type="text/javascript">
function load_image(id,ext)
{
   if(validateExtension(ext) == false)
   {
      alert("Upload only JPEG or JPG or PNG format ");
      
      document.getElementById("recentphoto").value = "";
	  document.getElementById("file").focus();
	  
      return;
   }
}

function validateExtension(v)
{
      var allowedExtensions = new Array("jpg","JPG","jpeg","JPEG","png","PNG");
      for(var ct=0;ct<allowedExtensions.length;ct++)
      {
          sample = v.lastIndexOf(allowedExtensions[ct]);
          if(sample != -1){return true;}
      }
      return false;
}
</script></td>
</tr>

</td>
</tr>
</tr>

<tr>
	<th align=left><font color=black>Price </th></font>
	<td colspan=4><input type="number" min="0" class="fg" name="pprice" size=20 placeholder="price" required></td>
</tr>

<tr>
	<th align=left><font color=black>Quantity :</th></font>
	<td colspan=4><input type="number" min="0" class="fg" name="pqty" size=20 placeholder="Quantity" required></td>
</tr>
<tr>
	<th align=left><font color=black>Replacement day </th></font>
	<td colspan=4><input type="number" min="0" class="fg" name="replace" size=20 placeholder="replacement within days" required></td>
</tr>
<tr>
	<th align=left><font color=black>Specifcation </th></font>
	<td colspan=4><input type="textarea"  class="fg" name="des" size=20 placeholder="specification" pattern="[a-zA-Z ]{5,}" required></td>
</tr>





	<td colspan=2 align=center> <button name="submit"  class="button">Save</button>
	
</tr>
</table>
</form>

			
					
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
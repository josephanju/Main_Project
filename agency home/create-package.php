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
<title>CBH | Agency Package Creation</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
              <!--header start here-->
<?php include('includes/header.php');?>
							
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
	<ol class="breadcrumb">
		<?php
					echo "<font color=red>Welcome ".$_SESSION['unm'];"</font>"
					?>
                <li class="breadcrumb-item"><a href="index.php">Home</a><i class="fa fa-angle-right"></i>Create Package </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
 
<!---->
  <div class="grid-form1">
  	       <h3>Create Package</h3>
  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" class="form-horizontal" action="addpackage.php" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Package Name</label>
									<div class="col-sm-4">

								<input type="text" class="form-control1" name="pname" id="pname"  autocomplete="off" placeholder=" Package Name" onchange="Validatename()"; required>
								 
			            	<label class="errortext" style="display:nne; color:red" id="name_3"></label><br>
                                           <script>
                                        function Validatename()
                                            {
                                                  var val = document.getElementById('pname').value;
                                                  if (!val.match(/^[A-Za-z][A-Za-z" "]{2,}$/))
                                                  {
                                                      $("#name_3").html('Only Alphabets Allowed..!').fadeIn().delay(4000).fadeOut();
                                                      document.getElementById('pname').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
                                              </script>	
	
</div>
								</div>
					
	<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Taluk</label>
									<div class="col-sm-4"><select id="cat" name="cat" onchange="changeTaluk()" class="form-control1">
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
									</select></div>
								</div>
								<div class="form-group" id="villageList"></div>
<script type="text/javascript">
	function changeTaluk(){
		var xmlhttp=new XMLHttpRequest();
		xmlhttp.open("GET","changeVillage.php?taluk="+document.getElementById("cat").value,false);
		xmlhttp.send(null);

		document.getElementById("villageList").innerHTML=xmlhttp.responseText;
	}
</script>


<div class="form-group">
									<label for="txtarea1" class="col-sm-2 control-label">Package Description</label>
									<div class="col-sm-4"><textarea name="des" cols="50" rows="4" placeholder="Description"class="form-control1"></textarea></div>
								</div>
				
					<div class="form-group">
									<label for="selector1" class="col-sm-2 control-label">Number of Adults</label>
									<div class="col-sm-4"><select name="adult" id="adult" class="form-control1">
										<option value="0">0</option>Select no.of adults
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
									<div class="col-sm-4"><select name="Childrens" id="Childrens" class="form-control1">
										<option value="0">0</option>Select no.of childrens
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
									<div class="col-sm-4"><select name="day" id="day" class="form-control1">
										<option value="0">0</option>Select no.of Days
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
									<div class="col-sm-4"><select name="night" id="night" class="form-control1">
										<option value="0">0</option>Select no.of Nights
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
								</div></div>

						
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Stay Amount</label>
									<div class="col-sm-4">
										
										<input type="number" min="0" class="fg" name="price1" id="packageprice1"size=20  onchange="Validateamount()";placeholder="price" required>
									
								<label class="errortext" style="display:none; color:red" id="amount1"></label>
                                              <script>
                                              function Validateamount()
                                              {
                                                  var val = document.getElementById('packageprice1').value;
                                                  if (!val.match(/^[0-9]/))
                                                  {
                                                  $("#amount1").html('Only Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('packageprice1').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
											  
                                              </script>	


										
									</div>

									<label for="focusedinput" class="col-sm-2 control-label">Food Amount</label>
									<div class="col-sm-4">
										
										<input type="number" min="0" class="fg" name="price2" id="packageprice2" size=20  onchange="Validateamount()";placeholder="price" required>
									
								<label class="errortext" style="display:none; color:red" id="amount2"></label>
                                              <script>
                                              function Validateamount()
                                              {
                                                  var val = document.getElementById('packageprice2').value;
                                                  if (!val.match(/^[0-9]/))
                                                  {
                                                  $("#amount2").html('Only Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('packageprice2').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
											  
                                              </script>	


										
									</div>
								</div>
					<br>
		<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">MiniBus Amount</label>
									<div class="col-sm-4">
										
										<input type="number" min="0" class="fg" name="price3" id="packageprice3" size=20  onchange="Validateamount()";placeholder="price" required>
									
								<label class="errortext" style="display:none; color:red" id="amount3"></label>
                                              <script>
                                              function Validateamount()
                                              {
                                                  var val = document.getElementById('packageprice3').value;
                                                  if (!val.match(/^[0-9]/))
                                                  {
                                                  $("#amount3").html('Only Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('packageprice3').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
											  
                                              </script>	


										
									</div>

									<label for="focusedinput" class="col-sm-2 control-label">Car Amount</label>
									<div class="col-sm-4">
										
										<input type="number" min="0" class="fg" name="price4" id="packageprice4" size=20  onchange="Validateamount()";placeholder="price" required>
									
								<label class="errortext" style="display:none; color:red" id="amount4"></label>
                                              <script>
                                              function Validateamount()
                                              {
                                                  var val = document.getElementById('packageprice4').value;
                                                  if (!val.match(/^[0-9]/))
                                                  {
                                                  $("#amount4").html('Only Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('packageprice4').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
											  
                                              </script>	


										
									</div>
								</div>
		<br>
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Jeep Amount</label>
									<div class="col-sm-4">
										
										<input type="number" min="0" class="fg" name="price5"  id="packageprice5" size=20  onchange="Validateamount()";placeholder="price" required>
									
								<label class="errortext" style="display:none; color:red" id="amount5"></label>
                                              <script>
                                              function Validateamount()
                                              {
                                                  var val = document.getElementById('packageprice5').value;
                                                  if (!val.match(/^[0-9]/))
                                                  {
                                                  $("#amount5").html('Only Numbers Allowed..!').fadeIn().delay(4000).fadeOut();
                                                  document.getElementById('packageprice5').value = "";
                                                      return false;
                                                  }
                                                  return true;
                                              }
											  
                                              </script>	


										
									</div>

									<label for="focusedinput" class="col-sm-2 control-label">Package Image</label>
									<div class="col-sm-4">
										
										<input type="file" name="photo" id="packageimage" class="inputbx" accept="application/jpg"  required ></br>
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
				
				<center><button name="submit"  class="btn-primary btn">CREATE</button>
				<button type="reset" class="btn-inverse btn">Reset</button></center>
				
			</div>
		</div>

	</form>

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

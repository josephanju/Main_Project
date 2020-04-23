<?php
include('../dbconnect.php');
session_start();

if(!isset($_SESSION['unm']))
{
	header('location: ../a/index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<script src="js/validate.js">

    </script>
<title>add product</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Royal Furnish Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link rel="stylesheet" href="css/swipebox.css">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Kanit:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="js/numscroller-1.0.js"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<script src="js/responsiveslides.min.js"></script>
		<!-- swipe box js -->
			<script src="js/jquery.swipebox.min.js"></script> 
				<script type="text/javascript">
					jQuery(function($) {
						$(".swipebox").swipebox();
					});
			</script>
		<!-- //swipe box js -->

</head>
<style>
.button {
  padding: 15px 25px;
  font-size: 24px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 75px;
  box-shadow: 0 9px #999;
}

.button:hover {background-color: orange;}

.button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}
</style>












<body>
<!-- header -->

<!-- //header -->
<!-- banner -->
<div class="banner w3ls page_head">
	<div class="container">
		<div class="header-nav wow fadeInUp animated" data-wow-delay=".5s">
			<nav class="navbar navbar-default">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header logo">
								<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								<h1>
									<a class="navbar-brand" href="index.php"><img src="images/logo.png" alt=" " /></a>
								</h1>
								
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
				
				<style>



/* Sub Menu */

.tkvsoft ul {
	position: absolute;
	top: 40px;
	left: 0;

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

/* Icons */



</style>
								   <nav class="cl-effect-1">
									<ul class="nav navbar-nav tkvsoft">
										<li><a href="index.php">Home</a></li>
										
										<li><a class="active" href="products.php">Products</a></li>
									
										
										<li><a href="">View</a>
										<ul>
										<li><a href="viewproduct.php">Products</a></li>
										<!--<li><a href="">Booking</a></li>-->
										
		                                </ul>
										
										</li>
										<li><a href="contact.php">Contact</a></li>
										<li><a href="notification.php">Notifications</a></li>
										<li><a href="../edit_pro_supplier/index.php">Profile</a></li>
									<li><a href="../supplier home/change password/index.php">  Change Password</a></li>
										<li><a href="logout.php">Logout</a></li>
										
									</ul>
								</nav>
				</div>
				<!-- /navbar-collapse -->
			</nav>
		</div>
		<?php
					echo "<font color='white'>Welcome  ".$_SESSION['unm'];"</font>"
					?>
		<div class="clearfix"></div>
	</div>
</div>


<body >
<!--<ul>
  <li><a href="../indexs.php">BACK</a></li>
</ul>
<style>
body {
	background-image: url("images/p9.jpg");
	height:1000px;
	
}
</style>-->
  <center>  
<form action="addproduct.php" method="post" enctype="multipart/form-data">
<div>
<tr>
<p align="center">
<p align="center"><br><TR></tr><tr></tr>
<h1 style="color:black;"><center><b>PRODUCT DETAILS</h1></center>
 <TR></tr>
  <table width="500" height="200" align="center" cellpadding="1"cellspacing="1" border="3" style="background:pink; m"  >
<tr>
<div>
	<th align=left><font color=black>Category</th></font>
	<td colspan=4>
		
	<select id="cat" name="cat" style=" outline:#666666;padding: 10px 10px 10px 10px;font-size: 14px;color: black;display: block;width:62%;"  required="" onchange="return dist()" required>
                    <option value="0">----select----</option>
                    <?php 
                    $con=mysqli_connect("localhost","root","","royalfurniture");
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
        </tr>
		</div>
		
		<tr><style>
		.fg{
			color: black;
		}
		
		</style>
		
	<th align=left><font color=black>Product name</th>
	<td colspan=4><input type="text" class="fg" name="pname" autocomplete="off" id="pname" placeholder="product name"  pattern="[a-zA-Z ]{5,}"   required >
        </tr></font>
		<!--<tr>
	<th align=left><font color=black>Product Description</th></font>
	<td colspan=4><input type="text" class="fg" name="pdes" id="u" placeholder="product description" pattern="[a-zA-Z]+" required  oninput="this.reportValidity()" onchange="n()" required >
        </tr>-->
		<tr>
	<th align=left><font color=black>Colour</th></font>
	<td colspan=4><input type="text" class="fg" name="color" id="u" placeholder="Color" autocomplete="off" pattern="[a-zA-Z ]{5,}" required >
        </tr>
		<tr>
	<th align=left><font color=black>Size </th></font>
	<td colspan=4><input type="text" class="fg" name="size" id="u" placeholder=" width*height*depth"   required >
        </tr>
		<tr>
	<th align=left><font color=black>Wood type</th></font>
	<td colspan=4>
	
	
	
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
					
					
					
        </tr>
		<tr>
	<th align=left><font color=black>Warrenty</th></font>
	<td colspan=4><input type="text" class="fg" name="warrenty" id="u" placeholder=" warrenty in month" autocomplete="off" required >
        </tr>
		
		<!--<script>		
function Validate() 
{
    var val = document.getElementById('pname').value;
	if(val==" ")
	{
	alert('Name field is empty');
		            document.getElementById('pname').value = "";
        return false;
	}
    else if (!val.match(/^[A-Za-z][A-Za-z" "]{3,}$/)) 
    {
        alert('Only alphabets are allowed and Start with a Alphabet');
		            document.getElementById('pname').value = "";
        return false;
    }
	

    return true;
}

</script>-->
</td>
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
<!--<tr>
	<th align=left>Last name   </th>
	<td colspan=4><input type="text" name="ln" id="l" placeholder="Last name" required onchange='Validlast();'>
        </tr>
		
<script>		
function Validlast() 
{
    var val = document.getElementById('l').value;

    if (!val.match(/^[A-Za-z][A-Za-z" "]{3,}$/)) 
    {
        alert('Only alphabets are allowed and Start with a Alphabet');
		            document.getElementById('l').value = "";
        return false;
    }

    return true;
}

</script>-->
</td>
</tr>

<!--<tr>
	<th align=left>  :</th>
	<td colspan=4><input type="textarea" rows="4" cols="50" name="ad">
</textarea>
        </tr>

<tr>
<tr>
	<th align=left>Username  </th>
	<td colspan=4><input type="email" name="email" placeholder="Email" id='e' required onchange='Validem();'>
        </tr>
		
<script>		
function Validem() 
{
    var val = document.getElementById('e').value;

    if (!val.match(/([A-z0-9_\-\.]){1,}\@([A-z0-9_\-\.]){1,}\.([A-Za-z]){2,4}$/)) 
    {
        alert('Incorrect Email');
		
		     document.getElementById('e').value = "";
        return false;
    }

    return true;
}

</script>
</tr>-->
<!--<tr>
	<th align=left>UserName   :</th>
	<td colspan=4><input type="text" name="uname" placeholder="" required></td>
</tr>-

<tr>
<span>
	<th align=left>Password  </th>
	<td colspan=4><input type="password" rows=5 cols=40 id="pass" placeholder="Type Password" maxlength=8  required onchange='Validatb();'class="form-control" >
									</span>
									
										 </tr>-->
				
<!--<script>		
function Validatb() 
{
    var val = document.getElementById('pass').value;

    if (!val.match(/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,8}$/)) 
    {
       alert('Password should contain atleast a capital letter and small letter and a Number with length atleast 6 and atmost 8');
		
		     document.getElementById('pass').value = "";
        return false;
    }

    return true;
}

</script>-->
<!--<span>
	<th align=left>Confirm Password  </th>
	<td colspan=4><input type="password" name="pwd" rows=5 cols=40 id="cpass"  maxlength=8 placeholder="Retype Password" required onchange='check();'>
										<span id='message'></span>
									</span>-->
									 </tr>
	
<!--<script>
	function check(){
			if(document.getElementById("cpass").value!=document.getElementById("pass").value)
			{
				document.getElementById("message").style.color='red';
				document.getElementById("message").innerHTML='Passwords does not Match';
				
		            document.getElementById('cpass').value = "";
            }
		else{
			document.getElementById("message").style.color='green';
			document.getElementById("message").innerHTML='Passwords  Match';}
			}
	</script>-->
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
<!--<tr>
	<th align=left>   </th>
	<td colspan=4><select name="dis" size="1" required>
	<option value="1">--select--</</option>
	<option value="Kottayam">Kottayam</option>
	<option value="Pathanamthitta">Pathanamthitta</option>
	<option value="Kozhikode">Kozhikode</option>
	<option value="Alappuzha">Alappuzha</option>
	<option value="Idukki">Idukki</option>
	<option value="Kannur">Kannur</option>
	<option value="Palakkad">Palakkad</option>
	<option value="Malappuram">Malappuram</option>
	<option value="Wayanad">Wayanad</option>
	<option value="Kasargod">Kasargod</option>
	<option value="Ernakulam">Ernakulam</option>
	<option value="Kollam">Kollam</option>
	<option value="Thrissur">Thrissur</option>
	<option value="Thiruvananthapuram">Thiruvananthapuram</option></select>
	</td>
</tr>
<tr>
	<th align=left>Phone no  </th>
	<td colspan=4><input type="text" name="no"  id='c' maxlength='10' class="form-control" placeholder="Phone"  onchange='Validat();'>
       
	
<script>		
function Validat() 
{
    var val = document.getElementById('c').value;

    if (!val.match(/^[7-9][0-9]{1,9}$/)) 
    {
        alert('Only Numbers are allowed and must contain 10 number');
	
		
		            document.getElementById('c').value = "";
        return false;
    }

    return true;
}

</script>
</tr>-->





	<td colspan=2 align=center> <button name="submit"  class="button">Save</button>
	
</tr>
</table>
</form>

</body>
</html>
<style>
td{width:90px;
tr{width:90px;}
</style>

<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>



<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>
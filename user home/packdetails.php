<?php
session_start();
include('../dbconnect.php');
if(!isset($_SESSION['unm']))
{
  header('location:../login/index.php');
  exit;
}
$unm=$_SESSION['unm'];

$idselect="select * from tbl_login where username='$unm'";
$idselect2=mysqli_query($con,$idselect);
$idl=mysqli_fetch_array($idselect2);
$loginid=$idl['login_id'];

$package_id=$_GET['package_id'];
$package_sql=mysqli_query($con,"SELECT  tble_package.*,tble_category.category_name FROM `tble_package`,tble_category WHERE tble_package.category_id=tble_category.category_id AND tble_package.package_id=$package_id");
//$agency_sql=mysqli_query($con,"select agency_name from tbl_agencyreg where email_id='$unm'");
//$package1=mysqli_query($con,"select agency_name from tbl_agencyreg where email_id='$unm'");
$pack_row=mysqli_fetch_array($package_sql);
$pkid=$pack_row['package_id'];
//$package_name=$pack_row['package_name'];
//$package=mysqli_query($con,"SELECT tble_package.*,tble_category.category_id,tble_category.category_name from tble_package,tble_category,tbl_login where tble_package.category_id=tble_category.category_id and tbl_login.login_id=tble_package.login_id and  tble_category.category_id=$category_id");


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CBH | User Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">CloudBerry<span>Holidays</span></a>
        <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>-->
        <div><?php
          echo "<font color=red ;>Welcome  ".$_SESSION['unm'];"</font>"
          ?></div>
        
        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>
            <li class="nav-item"><a href="destination.php" class="nav-link">Destination</a></li>
            <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
            <li class="nav-item"><a href="logout.php" class="nav-link">Logout</a></li>

          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
    
    <div class="hero-wrap js-fullheight" style="background-image: url('images/b.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
          <!--<div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
            <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4"></div>-->
              <div><span class="ion-ios-play"></span>
            </a>
            <p class="caps" data-scrollax="properties: { translateY: '40%', opacity: 1.6 }">Exploring our amazing Alappuzha </p>
            <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Make Your Tour Amazing With Us</h1>
          </div>
        </div>
      </div>
    </div>
 <section>
   <div class="site-section bg-light">
      <div class="container">
         <div class="row justify-content-center pb-4">
          <div class="col-md-4 heading-section text-center ftco-animate">
            <h2 class="mb-4">Package Details</h2>
          </div>
        </div>
        
          <div class="col-md-8 col-lg-8">
          
             <form  method="POST" name="pform" id="pform">

              <div class="row form-group">
                 <label for="radio" class="col-sm-2 control-label">Place:</label>
                <div class="col-md-8">
                 <input type="text" name="name" id="name"  value="<?php echo $pack_row['category_name'];?>" class="form-control" readonly>
                </div>
              </div>

             <div class="row form-group">
              <label for="radio" class="col-sm-2 control-label">Package Name:</label>
                <div class="col-md-8">
                  <input type="text" name="name" id="name"  value="<?php echo $pack_row['package_name'];?>" class="form-control" readonly>
                </div>
              </div>

              <div class="row form-group">
                  <label for="radio" class="col-sm-2 control-label">Description:</label>
                <div class="col-md-8">
                  <input type="text" name="name" id="name"  value="<?php echo $pack_row['specification'];?>" class="form-control" readonly>
                  <!--textarea></textarea-->
                </div>
              </div>

              <div class="row form-group">
                <label for="radio" class="col-sm-2 control-label">No.of Days:</label>
                <div class="col-md-4">
                  <input type="text" name="name" id="name"  value="<?php echo $pack_row['no_of_days'];?>Days <?php echo $pack_row['no_of_nights'];?>Nights" class="form-control" readonly>
                </div>
              </div>

              <div class="row form-group">
                <label for="radio" class="col-sm-2 control-label">No.of Travellers:</label>
                <div class="col-md-4">
                  <input type="text" name="name" id="name"  value="<?php echo $pack_row['no_of_adults'];?>Adults <?php echo $pack_row['no_of_childrens'];?>Childrens" class="form-control" readonly>
                </div>
              </div>


                <div class="row form-group">
                <label for="radio" class="col-sm-2 control-label">Date:</label>
                <div class="col-md-8">
                  <?php 
                  $today=date("Y-m-d");
                  ?>
                  <input type="Date" min ="<?php echo $today;?>" name="bdate" id="bdate" class="form-control" required >
                </div>
              </div>

              <div class="row form-group">
                <label for="radio" class="col-sm-2 control-label">Stay Amount:</label>
                <div class="col-md-8">
                 <input type="number" name="stay" id="stay"  value="<?php echo $pack_row['stayamount'];?>" class="form-control" readonly>
                </div>
              </div>

              <div class=" row form-group">
                  <label for="checkbox" class="col-sm-2 control-label">Food:</label>
                  <div class="col-sm-4">
                    <div>
                            <input type="radio" id="food" name="food" value="<?php echo $pack_row['foodamount'];?>" onclick="calculate()">
                            <font color="black"><label for="">Yes</label></font>&nbsp;&nbsp;
                            <input type="radio" id="food" name="food" value="0" onclick="calculate()">
                            <font color="black"><label for="">No</label></font>
                      </div>
                  </div>
                </div>

 
              <div class="row form-group">
                  <label for="checkbox" class="col-sm-2 control-label">Travel:</label>
                  <div class="col-sm-4">
                  <div>

                  <input type="radio" id="Bus" name="travel" value="<?php echo $pack_row['busamount'];?>" 
                            onclick="calculate()">
                  <font color="black"><label for="Bus" name="ltraavel">MiniBus</label></font>&nbsp;&nbsp;&nbsp;
                            
                  

                  <input type="radio" id="car" name="travel" value="<?php echo $pack_row['trainamount'];?>" 
                            onclick="calculate()">
                  <font color="black"><label for="car" name="ltraavel">Car</label></font>&nbsp;&nbsp;
                            
                  

                  <input type="radio" id="jeep" name="travel" value="<?php echo $pack_row['airamount'];?>" 
                            onclick="calculate()">
                  <font color="black"><label for="jeep" name="ltraavel">Jeep</label></font>&nbsp;&nbsp;&nbsp;
                      </div>
                  </div>
                </div>


              <div class="row form-group">
                <label for="radio" class="col-sm-2 control-label">Total Amount:</label>
                <div class="col-md-8">
                 <input type="text" name="total" id="total"  value=0 class="form-control" >
                </div>
                
              </div>
                </div>
                <div class="row form-group">
                <div class="col-md-12" align=center>
                  <input type="submit" id="submit" name="submit" value="CONFIRM BOOKING" class="btn btn-primary rounded-0 btn-lg">
                </div>
              </div>
            </form>
          </div>
        
      </div>
    </div>
 </section>
 <script>
  function calculate(){
    var total=0;
    var tra=0;
    var fd=0;
    var sty=0;
    tra=Number(document.pform.travel.value);
    fd=Number(document.pform.food.value);
    sty=Number(document.pform.stay.value);
    total=tra+sty+fd;
    
    document.getElementById('total').value=total;
  }
 </script>


 <section class="ftco-counter img" id="section-counter">
      <div class="container">
        <div class="row d-flex">
                  <div class="col-md-6 d-flex">
                    
                    <a href="#" class="img" style="background-image: url(newimg/<?php echo $pack_row['package_image']?>);"></a>
                      
                  </div>
          <div class="col-md-6 pl-md-5 py-5">
          </div>
        </div>
      </div>
    </section>
 <footer class="ftco-footer bg-bottom" style="background-image: url(images/footer-bg.jpg);">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">cloudBerry Holidays</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Infromation</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">Online Enquiry</a></li>
                <li><a href="#" class="py-2 d-block">General Enquiries</a></li>
                <li><a href="#" class="py-2 d-block">Booking Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Privacy and Policy</a></li>
                <li><a href="#" class="py-2 d-block">Refund Policy</a></li>
                <li><a href="#" class="py-2 d-block">Call Us</a></li>
              </ul>
            </div>
          </div>
       
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Alappuzha</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9827392047</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">cloudBerryholidays@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
 &copy;<script>document.write(new Date().getFullYear());</script> CBH | CloudBerry Holidays  <i class="icon-heart color-danger" aria-hidden="true"></i>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>
<?php

if (isset($_POST["submit"])) {
  $bdate=$_POST['bdate'];
  $foodval=$_POST['food'];
  if ($foodval>0) {
    $food='YES';
  }
  else{
    $food='NO';
  }
  $vehicle=$_POST['travel'];
  $total=$_POST['total'];
 //echo "$bdate $food $total";
  $booked=mysqli_query($con,"select * from tble_booking where package_id=$pkid and login_id=$loginid");
  $booked=mysqli_num_rows($booked);
  if ($booked>0) {
     echo "<script>alert('You already inserted this package');
     window.location.href='index.php';</script>";
  }else{
      $bins="INSERT into tble_booking(package_id,login_id,dateofbooking,food,total) VALUES($pkid,$loginid,'$bdate','$food',$total)";
      $bins2=mysqli_query($con,$bins);



      if ($bins) {
        echo "<script>alert('Your Booking is Confirm. Please proceed with payment!');
        window.location.href='booknow.php?package_id=$pkid & loginid=$loginid';</script>";
      }
      else{
        echo "<script>alert('Failed');</script>";
      }
  }


  //echo "<script>alert($food);</script>";
  //action="booknow.php?package_id=<?php echo $view_row['package_id'];
}
?>
<?php
session_start();
include('../dbconnect.php');
if(!isset($_SESSION['unm']))
{
  

  header('location:../login/index.php');
  exit;
}

/*$category_id=$_GET['category_id'];
$category_sql=mysqli_query($con,"select * from tble_category where category_id=$category_id");
$cat_row=mysqli_fetch_array($category_sql);
$category_name=$cat_row['category_name'];
$package=mysqli_query($con,"SELECT tble_package.*,tble_category.category_name FROM `tble_package` ,tble_category WHERE tble_category.category_id=$category_id AND tble_package.category_id=tble_category.category_id");*/


?>
<!DOCTYPE html>
<html lang="en">
  <head>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 200%;
}

td, th {
  border: 2px solid #dddddd;
  text-align: center;
  padding: 10px;
}

tr:nth-child() {
  background-color: #dddddd;
}
</style>

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
    <?php
    include('../dbconnect.php');
      $pkid=$_GET['package_id'];
      $loginid=$_GET['loginid'];
      $val="select * from tble_booking where package_id=$pkid and login_id=$loginid";
      $val2=mysqli_query($con,$val);
      $val3=mysqli_fetch_array($val2);
      $bdate=$val3['dateofbooking'];
      $total=$val3['total'];

      $place="select * from tble_category where category_id in (select category_id from tble_package where package_id=$pkid)";
      $place2=mysqli_query($con,$place);
      $place3=mysqli_fetch_array($place2);
      $place=$place3['category_name'];
    ?>
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

    

    <section class="ftco-section ftco-no-pt">
      <div class="container">
        <div class="row justify-content-center pb-4">
          <div class="col-md-12 heading-section text-center ftco-animate">
            <h2 class="mb-4">Package Booking Details</h2>
          </div>
        </div>
        <div class="row">
          
            <div class="project-wrap">
              
                <form action="payment.php?package_id=<?php echo $view_row['package_id'];?>" method="POST">
                
                  <!--<span ><button class="price" id="booknow" name="booknow" type="submit">Book Now</button></span>-->

                  <table>
  <tr>
    <th>Place</th>
    <!--th>Stay</th>
    <th>Food</th>
    <th>Travelling</th-->
    <th>Date Of Booking</th>
    <th>Cost</th>
    <th>Status</th>
  </tr>
  <tr>
    <td><?php echo $place; ?></td>
    <!--td></td>
    <td></td>
    <td></td-->
    <td><?php echo $bdate; ?></td>
    <td><?php echo $total; ?></td>
    <td><a href="#">Confirm</a>&nbsp;&nbsp;<a href="cancel.php">Cancel</a></a></td>
  </tr>
 <tr>
    <td></td>
    <td></td>
    <!--td></td>
    <td></td-->
    <td></td>
    <td></td>
    <!--td><a href="confirm.php">Confirm</a> <a href="confirm.php">Cancel</a></a></td-->
  </tr>

</table>

                </form>
              
            </div>
         
          <?php
        
        ?>
          
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
<?php
session_start();
include '../dbconnect.php';
if(!isset($_SESSION['unm']))
{
	header('location:../a/index.php');
	exit;
}
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; 
  display: flex;
  -ms-flex-wrap: wrap; 
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; 
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%;
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; 
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  background-color: skyblue;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

label {

  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: orange;
  color: red;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 15%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: pink;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: blue;
}


@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>
            <?php
                	                 $getid=$_SESSION['unm'];
                      $sql="select * from tble_login where username='$getid'";
	                   $result=mysqli_query($con,$sql);
                     $row=mysqli_fetch_array($result);
                     $uid= $row['login_id'];
					 ?>

	<?php
	$total=0;
	$d="select * from tble_cart where login_id='$uid'";
	$result=mysqli_query($con,$d);
	$rowcount=mysqli_num_rows($result);
	while($row=mysqli_fetch_array($result))
		{
		  $pid=$row['product_id'];
		   $qut=$row['quantity'];
		 
		
	$dt="select * from tble_product where category_id='$pid'";
	$results=mysqli_query($con,$dt);
	
	while($rows=mysqli_fetch_array($results))
		{
		  $product=$rows['product_name'];
		  $rate=$rows['price'];
		  $l=$row['quantity'];
		  $p=$row['product_id'];
		  $t=$qut * $rate;
		  $total += ($row['quantity'] * $rows['price']);		
		?>
     
		<?php
		}
		}
		?>
		<a href="../user home/index.php"> Back to Home </a>
<div class="row">
  <div class="col-75">
    <div class="container">
      <form action="payaction.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fname"  >
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" name="email" id="email" />
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address"  >
			<label for="city"></i>city</label>
            <input type="text" id="city" name="city"  >
            <label for="city"></i>phone number</label>
            <input type="text" id="city" name="phno"  >
            <div class="row">
              <div class="col-50">
                <label for="state">District</label>
                <input type="text" id="district" name="district" >
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip"  >
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="ctype">Card Type</label>
            <input type="text" id="ctype" name="cardtype"   required="" >
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname"   required="" >
            <label for="ccnum">Card number</label>
            <input type="text" id="ccnum" name="cardnumber" pattern="[4567][0-9]{15}" >
			<input type="hidden" id="quantity" name="quantity" value="<?php echo $l?>">
			<input type="hidden" id="product" name="product" value="<?php echo $p?>">
			<div class="row">
              <div class="col-50">
            <label for="expmonth">Exp Date</label>
            <input type="month" id="expmonth" name="expdate" >

					 
					 
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
				<input type="hidden" id="expmonth" value="<?php echo $uid?>" name="id"/ >
                <input type="password" id="cvv" name="cvv"  pattern="^\d{3}$"  title="Three digits cvv number">
              </div>
            </div>
          </div>
          
        </div>
        
        <center> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp 
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
		&nbsp &nbsp &nbsp &nbsp &nbsp 		
		<input type="submit" value="Checkout here.." class="btn"> </center>
    
    </div>
  </div>
  
                     
					 
					 
  <?php
	$d="select * from tble_cart where login_id='$uid'";
	$result=mysqli_query($con,$d);
	$rowcount=mysqli_num_rows($result);
	?>
  <div class="col-25">
    <div class="container">
	  <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $rowcount;?></b></span></h4>
      <hr>
	  <p><?php echo $product;?> <span class="price"><?php echo $t; ?></span></p>
      <p>Total <span class="price" style="color:black"><b><?php echo $total; ?></b></span></p>
	  
	  <input type="hidden" name="total" value="<?php echo $total; ?>"/>
	  </form>
    </div>
  </div>
</div>

</body>
</html>

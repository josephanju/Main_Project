
<?php
//include('../connection.php');
//include("features/joomla-virtuemart/connection.php");
include('../dbconnect.php');
if(isset($_POST['forgot']))
{
	$email= $_POST['email'];
	$sql = "SELECT * FROM `tbl_login` WHERE username = '$email'";
	//$obj=new db();
  //$data=$obj->execute($sql);
  $data=mysqli_query($con,$sql);
  if(mysqli_num_rows($data)>0)
  {
    $row=mysqli_fetch_array($data);
    $mail=$row['username'];
  }
    $count = mysqli_num_rows($data);
	if($count == 1){
		
$to = "$mail";
$from="admin";
$subject = "Your Recovered Password";
$password=rand();
$pass=$password;

$message = "Please use this password to login " . $password;
$headers = "From: ".$from;        
if(mail($to, $subject, $message, $headers))
{
        echo "<script>";
        echo "alert('Your Password has been sent to your email id')";
        echo"</script>"; 
        $sql4="update tbl_login set password='$pass' where username='$mail'";
        //$obj->execute($sql4);
        mysqli_query($con,$sql4);

}
else{
        echo "<script>";
        echo "alert('Failed to Recover your password, try again')";
        echo "</script>";
	
}
	}else{
        echo "<script>";
        echo "alert('User name does not exist in database')";
        echo "</script>";
	}
}
?>

<html>
<head>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" >

<link rel="stylesheet" href="styles.css" >

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<style>
	body {
    background-image: url("images/bg_4.jpg");
    background-repeat: none;
  padding-top: 40px;
  padding-bottom: 40px;
  background-color: green;
}

.form-signin {
  max-width: 330px;
  padding: 15px;
  margin: 0 auto;
}
.form-signin .form-signin-heading,
.form-signin .checkbox {
  margin-bottom: 10px;
}
.form-signin .checkbox {
  font-weight: normal;
}
.form-signin .form-control {
  position: relative;
  height: auto;
  -webkit-box-sizing: border-box;
     -moz-box-sizing: border-box;
          box-sizing: border-box;
  padding: 10px;
  font-size: 16px;
}
.form-signin .form-control:focus {
  z-index: 2;
}
.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}
.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}
	</style>
    <title>CBH</title>
	</head>
    <form class="form-signin" method="POST">
    <br>
    <br>
    <br>
    <center><h2 class="form-signin-heading">Forgot Password</h2></center>
    <br>
    <br>
    <br>
    <br>
    <div class="input-group">
    <span class="input-group-addon" id="basic-addon1">@</span>
    <input type="text" name="email" class="form-control" placeholder="email"  autocomplete="off" required>
    </div>
        <br>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="forgot" id="forgot">Forgot Password</button>
    <BR>
    <a class="btn btn-lg btn-primary btn-block" href="index.php">Login</a>
    </form>
</html>

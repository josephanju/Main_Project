<?php
session_start();
include'../dbconnect.php';
if(isset($_POST['submit']))
{
$x=$_SESSION['unm'];
$sql="select * from tble_login where username='$x'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

$b=$row['login_id'];
//echo $b;
$message=$_POST['message'];
//echo $message;
$d=$_POST['id'];
//echo $d;
$s=$_POST['a'];
//echo $s;

$p=$_POST['b'];
//echo $p;
$a="INSERT INTO `tble_messages`( `login_id_user`, `login_id_supplier`, `product_id`, `message`) VALUES ('$b','$s','$p','$message') ";
echo mysqli_query($con,$a);



$c="select * from tble_messages  where  login_id='$b'";

}

?>



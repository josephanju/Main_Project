<?php
session_start();
include'../../dbconnect.php';
if(isset($_POST['submit']))
{
$x=$_SESSION['unm'];
$sql="select * from tble_login where username='$x'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);

$b=$row['login_id'];
$message=$_POST['message'];
$user=$_POST['user'];
$reply=$_POST['reply'];
$d="INSERT INTO `tble_reply`(`login_id_supplier`, `login_id_user`, `message`, `reply_message`) VALUES ('$b','$user','$message','$reply')";
$res=mysqli_query($con,$d);
if($res)
{
	echo "<script>window.onload=function(){alert('reply send sucessfully....!');window.location='../notification.php';}</script>";
}
 
}
?>
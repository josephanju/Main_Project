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


<?php
session_start();
include('../dbconnect.php');
if(isset($_POST['submit']))
{
$name=$_POST['Name'];
$sqls = "SELECT * FROM `tble_category` WHERE category_name='$name'";
$ress = mysqli_query($con, $sqls);
if(mysqli_num_rows($ress)>0)
{
echo"<script> alert('This Taluk is already exist!!! Please choose another one');
window.location ='addcategory.php';</script>";
}
	
else{

$sql="INSERT INTO `tble_category`( `category_name`) VALUES ('$name')";
$results = mysqli_query($con,$sql);


if($results)
{
echo "<script>window.onload=function(){alert('Taluk added....!');window.location='addcategory.php';}</script>";
}

}
}
?>
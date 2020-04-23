<?php
session_start();
include('../dbconnect.php');
if(isset($_POST['submit']))
{
$name=$_POST['Name'];
$sqls = "SELECT * FROM `tble_subcategory` WHERE subcategory_name='$name'";
$ress = mysqli_query($con, $sqls);
$ress2=mysqli_num_rows($ress);
if($ress2>0)
{
	echo"<script> alert('This village is already exist!!! Please choose another one');
window.location ='addsubcategory.php';</script>";
}
else{
	
$sql="INSERT INTO `tble_subcategory`( `subcategory_name`) VALUES ('$name')";
$results = mysqli_query($con,$sql);


if($results)
{
echo "<script>window.onload=function(){alert('Village added....!');window.location='addsubcategory.php';}</script>";
}

}
}
?>
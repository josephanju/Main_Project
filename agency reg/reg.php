<?php 
session_start();
include '../dbconnect.php'; 
if(isset($_POST['submit']))
{
	//$name=$_POST['name'];
	$cname=$_POST['cname'];
	//$clno=$_POST['clno'];
    $emailid=$_POST['email'];
    $contactno=$_POST['contactno'];
	$aadharno=$_POST['aadharno'];
	$aadharname=$_POST['aadharname'];
	$name =$_FILES['picture']['name'];
	//echo $name;
	$temp_name =$_FILES['picture']['tmp_name'];
	move_uploaded_file($temp_name,'upload/'.$name);

    $username=$_POST['email'];
    $password=md5($_POST['password']);
	$cpassword=$_POST['cpassword'];


$sqls = "SELECT * FROM `tbl_login` WHERE username='$username'";
$ress = mysqli_query($con, $sqls);
if(mysqli_num_rows($ress)>0)
{
echo"<script> alert('This Email is already exist!!! Please choose another one');
window.location ='../agency home/index.php';</script>";
}
else{	
$qry=("SELECT * FROM tbl_usertype where role='travelagency'");
$rowk=mysqli_query($con,$qry);
$rowp=mysqli_fetch_array($rowk);
$r=$rowp['usertypeid'];
if($password==$cpassword){
$query = "INSERT INTO `tbl_login`(`username`, `password`, `usertype`,`status`) VALUES ('$emailid', '$password', $r,1)";
}
else{
	
	echo "<script> alert('password does not match');</script>";
	
}
//echo $query;
$result = mysqli_query($con, $query);
if($result)
{
$logid = mysqli_insert_id($con);
$querys = "INSERT INTO `tbl_agencyreg`(`agency_name`,`email_id`,`contact_no`,`aadhar_no`,`aadhar_cardholder_name`,`picture`) VALUES('$cname','$emailid','$contactno','$aadharno','$aadharname','$name')";

}


$results = mysqli_query($con, $querys);
if ($results) {

	echo "<script>alert('Registration successful');
	window.location.href='../login/index.php';</script>";
	//header("location:../login/index.php");
}
else{
	echo "<script>alert('Registration Failed');</script>";

}

}

}
?>

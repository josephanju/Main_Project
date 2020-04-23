<?php
session_start();
include('../dbconnect.php');
$pid=$_SESSION['package_id'];
if(isset($_POST['submit']))
{
	     //$pname=$_POST['pname'];
		$package_name=$_POST['package_name'];
	     $stayamount= $_POST['stayamount'];
	       //$price= $_POST['price'];
	         //$qty= $_POST['qty'];
	         //$ship=$_POST['ship'];
	      // $image=$_POST['image'];

	    $sql1= "UPDATE  tble_package SET package_name='$package_name',stayamount='$stayamount' WHERE package_id='$pid'";
	    $result =mysqli_query($con,$sql1);

if($result==TRUE)
{
	
		echo "<script type='text/javascript'>
				
				
				window.location='view.php';
				</script>";
}

else
{
	
	echo "<script type='text/javascript'>
				
				alert('not updated'); 								
				</script>";
}

}
?>

<?php
session_start();
include('../dbconnect.php');
$pid=$_SESSION['package_id'];
if(isset($_POST['edit']))
{
	     $package_name=$_POST['package_name'];
	     /*$no_of_adults= $_POST['no_of_adults'];
	     $no_of_childrens= $_POST['no_of_childrens'];
	     $no_of_days= $_POST['no_of_days'];
	     $no_of_nights= $_POST['no_of_nights'];*/

	       $stayamount= $_POST['stayamount'];
	       $foodamount= $_POST['foodamount'];
	       $busamount= $_POST['busamount'];
	       $trainamount= $_POST['trainamount'];
	       $airamount= $_POST['airamount'];
	       $package_image=$_POST['package_image'];
	      // $image=$_POST['image'];

	$sql1= "UPDATE  tble_package SET package_name='$package_name',stayamount='$stayamount',foodamount='$foodamount',busamount='$busamount',trainamount='$trainamount',airamount='$airamount',package_image='$package_image' WHERE package_id='$pid'";

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

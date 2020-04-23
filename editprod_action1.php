<?php
session_start();
include("../../db.php");
$pid=$_SESSION['pro_id'];
if(isset($_POST['edit']))
{
	     $pname=$_POST['pname'];
	       $price= $_POST['price'];
	         $qty= $_POST['qty'];
	         $ship=$_POST['ship'];
	      // $image=$_POST['image'];

	    $sql1= "UPDATE  product SET pname='$pname',price='$price', qty='$qty',ship='$ship'  WHERE pro_id='$pid'";

	    $result =mysqli_query($conn,$sql1);

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

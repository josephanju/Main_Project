<?php   
session_start();
 include("../dbconnect.php");
$pid=$_SESSION['category_id'];

//$id=$_GET['addpooja_id'];

$name=$_POST['Name'];
//$pamount=$_POST['amount'];
	$qt="UPDATE tble_category SET Name='$name'WHERE category_id=$pid";
							
							//$updt=$conn->query($ql);

if ($con->query($qt) === TRUE) {
		
		
		echo"<script>  alert('Updated successfully');
		window.location='addpooja.php';
		</script>";
		
}
else
	
	{	
						echo"<script>  alert('Not Updated');
						window.location='Edit_addpooja.php';
						
						</script>";
						
	}
							?>
							
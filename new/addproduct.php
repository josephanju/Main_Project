<?php
session_start();
$con=mysqli_connect("localhost","root","","royalfurniture");
if(isset($_POST['submit']))
{
$category=$_POST['cat'];
$pname=$_POST['pname'];
$color=$_POST['color'];
$size=$_POST['size'];
$wood=$_POST['wood'];
$warrenty=$_POST['warrenty'];
$image=$_FILES['photo']['name'];
$photo1=$_FILES['photo1']['name'];
$photo2=$_FILES['photo2']['name'];
$photo3=$_FILES['photo3']['name'];
$pprice=$_POST['pprice'];

$pqty=$_POST['pqty'];
$replace=$_POST['replace'];
$des=$_POST['des'];

$getid=$_SESSION['unm'];
$sql="select * from tble_login where username='$getid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
echo $row['login_id'];

/*
$sql1="select * from tble_category where category_id='$category'";
$result1=mysqli_query($con,$sql1);
$rows=mysqli_fetch_array($result1);
echo $rows['category_name'];
*/





echo mysqli_query($con,"INSERT INTO `tble_product` (`login_id`, `category_id`, 
`product_name`, `product_color`, `product_size`, `wood_type`, `product_warrenty`, 
`product_image`, `price`,`quantity`, `replacement_details`,`specification`) 
VALUES (
'".$row['login_id']."',
'".$category."',
'".$pname."',
'".$color."',
'".$size."',
'".$wood."',
'".$warrenty."',
'".$image."',
'".$pprice."',

'".$pqty."',
'".$replace."',
'".$des."')   
 ") or die(mysqli_error($con));





$qry1="insert into tble_images(product_id,photo1,photo2,photo3) 
values('".$category."','".$photo1."','".$photo2."','".$photo3."')";
$res1=mysqli_query($con,$qry1);







echo "<script>window.onload=function(){alert('Product added....!');window.location='products.php';}</script>";
exit;
}
?>

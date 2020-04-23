<?php
session_start();
$con=mysqli_connect("localhost","root","","cbh_db");
if(isset($_POST['submit']))
{
$category=$_POST['cat'];
$pname=$_POST['pname'];
$wood=$_POST['wood'];
$des=$_POST['des'];
$adult=$_POST['adult'];
$Childrens=$_POST['Childrens'];
$day=$_POST['day'];
$night=$_POST['night'];
$price1=$_POST['price1'];
$price2=$_POST['price2'];
$price3=$_POST['price3'];
$price4=$_POST['price4'];
$price5=$_POST['price5'];
$image=$_FILES['photo']['name'];
//$photo1=$_FILES['photo1']['name'];
//$photo2=$_FILES['photo2']['name'];



$getid=$_SESSION['unm'];
$sql="select * from tbl_login where username='$getid'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result);
echo $row['login_id'];

/*
$sql1="select * from tble_category where category_id='$category'";
$result1=mysqli_query($con,$sql1);
$rows=mysqli_fetch_array($result1);
echo $rows['category_name'];
*/
$login=$row['login_id'];

$sql="INSERT INTO `tble_package` (`login_id`,  `category_id`, `package_name`, `subcategory`, `specification`, `no_of_adults`, `no_of_childrens`, `no_of_days`, `no_of_nights`, `stayamount`, `foodamount`, `busamount`, `trainamount`, `airamount`, `package_image`) VALUES ($login, $category, '$pname', '$wood', '$des', '$adult', '$Childrens', '$day', '$night', '$price1', '$price2', '$price3', '$price4', '$price5', '$image');";
//"INSERT INTO `tble_package` (`login_id`,  `category_id`, `package_name`, `subcategory`, `specification`, `no_of_adults`,  `no_of_childrens`, `no_of_days`,`no_of_nights`, `stayamount`,`foodamount`,`busamount`,`trainamount`,`airamount`, `package_image`) VALUES ($login, $category, '$pname', '$wood', '$des', '$adult', '$Childrens','$day','$night','$price1','$price2','$price3','$price4','$price5' '$image');";
$query=mysqli_query($con,$sql);

//echo mysqli_query($con,"INSERT INTO `tble_package`(`login_id`, `package_id`, `category_id`, `package_name`, `subcategory`, `specification`, `no_of_adults`, `no_of_days`, `price`, `package_image`) VALUES('".$row['login_id']."','".$category."','".$pname."','".$wood."','".$des."','".$ad."','".$day."','".$pprice."','".$image."')") or die(mysqli_error($con));

/*$qry1="insert into tble_images(product_id,photo1,photo2) 
values('".$category."','".$photo1."','".$photo2."')";
$res1=mysqli_query($con,$qry1);*/

echo "<script>window.onload=function(){alert('Package added....!');window.location='create-package.php';}</script>";
exit;
}
?>

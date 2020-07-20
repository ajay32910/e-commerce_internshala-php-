<?php
include'include/common.php';

$product_id=$_GET['id'];
$sql_query="DELETE FROM user_product WHERE product_id=$product_id";
$result=mysqli_query($con,$sql_query) or die(mysqli_error($con));
header('location:cart_page.php');

?>
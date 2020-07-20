<?php
include"include/common.php";
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$sql_insert="INSERT INTO user_product(user_id,product_id,status) VALUES($user_id,$item_id,'Added to cart')";
$result=mysqli_query($con,$sql_insert) or mysqli(error($con));
header('location:product_page.php');
?>
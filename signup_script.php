<?php
include"include/common.php";
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$regex="/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$/";
$pass=$_POST['password'];
$len=strlen($pass);
$pass=md5($pass);
$contact=$_POST['contact'];
$city=$_POST['city'];        
$address=mysqli_real_escape_string($con,$_POST['address']);
if(!preg_match($regex,$email))
{
  header('location: signup.php?msg=enter required email');  
}
if($len<6)
{
    header('location: signup.php?msg=enter correct format password');
}

     
$sql_fetch="SELECT user_id FROM users WHERE email='$email'";
$fetch_result=mysqli_query($con,$sql_fetch);
$num=mysqli_num_rows($fetch_result);
if($num==0){
$sql_query="INSERT INTO users(first_name,email,password,contact,city,address) VALUES('$name','$email','$pass','$contact','$city','$address')";
$result=mysqli_query($con,$sql_query) or die(mysqli_error($con));
header('location:login.php?msg=signup successfully!');
}else{
    echo"<h1>already register</h1>";
    $v=preg_match($regex,$email);
    echo $v;
}


?>


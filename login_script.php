<?php
include"include/common.php";
//$con=mysqli_connect("localhost","root","","ecommerce");
$email= $_POST['email'];

$pass1=$_POST['pass'];
$email=mysqli_real_escape_string($con,$email);
$regex="\[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
$len=strlen($pass1);
/*if(!preg_match($regex,$email))
{
    header('location:login.php?email_error=error in email');
}*/
if($len<6)
{
    header('location:login.php?pass_error=error in password');
}
  

$pass1=md5($pass1);
$fetch="SELECT user_id FROM users WHERE email='$email' and password='$pass1'";
$result=mysqli_query($con,$fetch) or die(mysqli_error($con));
$num=mysqli_num_rows($result);
if($num==0){
echo"there is no user with the email and password";

}
else{
    $row = mysqli_fetch_array($result);
    
    
    $_SESSION['email']="$email";
    $_SESSION['id']=$row['user_id'];
   header('location:product_page.php');
}
?>
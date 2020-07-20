<?php
include'include/common.php';
$id=$_SESSION['id'];
$old_pass=$_POST['pass'];
$new_pass=$_POST['newpass'];
$re_pass=$_POST['re_pass'];
$new_pass=md5($new_pass);
$re_pass=md5($re_pass);
$sql_query="SELECT password FROM users WHERE user_id=$id";
$result=mysqli_query($con,$sql_query);
$row=mysqli_fetch_array($result);
if(!strcmp($new_pass,$re_pass))
{
    header('location:setting.php?match=password did not match');
}
if($old_pass==$row['password'])
{
    
    $sql_query="UPDATE users SET password='$new_pass' WHERE user_id=$id";
    $result=mysqli_query($con,$sql_query) or die(mysqli_error($con));
    echo"password changed sucessfully!";
    //sleep(5);
    header('location:index.php');
}
else{
    //echo"password error!";
    header('location:setting.php?error=wrong password');
}
?>
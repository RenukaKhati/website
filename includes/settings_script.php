<?php
error_reporting(E_ERROR);
include'common.php';
$enteredold=mysqli_real_escape_string($con,$_POST['oldpassword']);
$new=mysqli_real_escape_string($con,$_POST['newpassword']);
$retype=mysqli_real_escape_string($con,$_POST['retypenewpassword']);
$email=$_SESSION['email'];
if(!isset($_SESSION['user_id']))
    header('location:index.php');
else {
$query="select email,password from users where password='$enteredold' and email='$email'";
$result=mysqli_query($con,$query);
echo mysqli_num_rows($result);
if(mysqli_num_rows($result)<1)
    echo"Please enter correct password";
else
{
$arr=mysqli_fetch_array($result);
if(strcmp($new,$retype)==0)
{
    $query2="update users set password='$new' where password='$enteredold'";
    mysqli_query($con,$query2);
}
else{
    echo"Please retype correct";
    
}
} 
}
?>


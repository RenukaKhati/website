<?php
include 'common.php';
$item_id=$_GET['item'];
$user_id=$_SESSION['user_id'];
$query="delete from users_items where user_id='$user_id' and item_id='$item_id'";
$result=mysqli_query($con,$query);
header('location:../cart.php')

?>

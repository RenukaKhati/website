<?php
include'common.php';

error_reporting(E_ERROR);
$item_id=$_GET['item'];
$user_id=$_SESSION['user_id'];
$query="insert into users_items(user_id, item_id, statuss) VALUES('$user_id', '$item_id', 'Added to cart')";
mysqli_query($con,$query);
header('location:../products.php');

?>


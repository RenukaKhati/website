<?php

function check_if_added_to_cart($item)
{
    error_reporting(E_ERROR);
    include'common.php';
    $user_id=$_SESSION['user_id'];
    $query="select id from users_items where item_id='$item' and user_id='$user_id' and statuss='Added to cart'";
    if(mysqli_num_rows(mysqli_query($con,$query))>=1)   
        return 1;    
    else
        return 0; 
}
?>


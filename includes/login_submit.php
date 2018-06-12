<?php
	include 'common.php';
	$username=mysqli_real_escape_string($con,$_POST['username']);
	$password=mysqli_real_escape_string($con,$_POST['password']);
        $password=md5($password);
	$query="select id,email from users where email='$username' and password='$password' ";
	$result=mysqli_query($con,$query);
	if($num=mysqli_num_rows($result)==0)
	{
            echo"invalid username and password";
	}
	
	else
	{
		$ans=mysqli_fetch_array($result);
		$_SESSION['email']=$ans['email'];
		$_SESSION['user_id']=$ans['id'];
		header('location: ../products.php'); 
                echo"GOOD JOB RENUKA";
        }	
?>
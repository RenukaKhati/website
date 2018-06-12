<?php 
$con=mysqli_connect("localhost","root","","store") or die(mysqli_error($con));
session_start();
           
$name=mysqli_real_escape_string($con,$_POST['name']);
$email=mysqli_real_escape_string($con,$_POST['email']);
$password=md5(mysqli_real_escape_string($con,$_POST['password']));
$contact=mysqli_real_escape_string($con,$_POST['contact']);
$city=mysqli_real_escape_string($con,$_POST['city']);
$address=mysqli_real_escape_string($con,$_POST['address']);
     
		$query="select id from users where email='$email' ";
		$result= mysqli_query($con,$query);
                if(mysqli_num_rows($result))
                {
                    die("username already exixts!!");
                }
		else
                    if(strlen($password)>7)
		{
                    $query2="insert into users(name,email,password,contact,city,address)values('$name','$email','$password','$contact','$city','$address')";
			mysqli_query($con,$query2);
			$_SESSION['email']=$email;
			$_SESSION['user_id']=mysqli_insert_id($con);
                        echo $_SESSION['user_id'];
			header('location: ../products.php');
		}
?>

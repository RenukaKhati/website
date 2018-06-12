<?php
error_reporting(E_ERROR);
include'./includes/common.php';
if(!isset($_SESSION['email']))
    header('location:index.php');
$user_id=$_SESSION['user_id'];
$query="update users_items set statuss='Confirmed' where user_id=$user_id";
mysqli_query($con,$query);
?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" type="text/css">
        <link rel="shortcut icon" href="./images/img16.png" type="image/png">
        <script type="text/javascript" src="./bootstrap/js/jquery-3.3.1.min.js">
        </script>
        <style>
            .navbar{
                margin-bottom:20px;
            }
            <?php
            include 'style.css';
            ?>
        </style>
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js">            
        </script>
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        
        <?php
                    include 'includes/header.php';
        ?>
        <div class=" success-jumbo">
        <div class="container">
        <div class="jumbotron success-jumbotron">
            <h3> Your order is confirmed. Thank you for shopping
                with us. <a href="products.php" style="text-decoration: none">Click here</a> to purchase any other item.</h3>
        </div>
        </div>
        </div>
        <?php
                    include 'includes/footer.php';
        ?>
    </body>
</html>

<?php
    include './includes/common.php';
    if(isset($_SESSION['email']))
    {
        header('location:products.php');
    }
    ?>
<html>
    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="./images/img16.png" type="image/png">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" type="text/css">
        
        <script type="text/javascript" src="./bootstrap/js/jquery-3.3.1.min.js">
        </script>
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js">            
        </script>
        <style>
            <?php include 'style.css';?>
        </style>
        
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
    <div class="container">
        <div class="col-xs-offset-3 col-xs-6">
            <div class="panel1">
                <div class="panel-heading">
                    <p></p>
                </div>
                
                <div class="panel-body login-heading">
                    <center>
                        <p class="text-warning"><h3>Login to make purchase</h3><br><br><br></p>  
                    </center>
                    
                    <form class="login-form" method="POST" action="./includes/login_submit.php">
                        <label for="username">Username</label>
                        <div class="form-group">
                        <input type="text" name="username" class="form-control">
                        </div>
                        
                        <label for="password">Password</label>
                        <div class="form-group">
                        <input type="text" name="password" class="form-control">
                        </div>
                        <center>
                        <input type="submit" class="btn btn-primary" value="Log In" style="align-items: center">
                        </center>
                    </form>
                
                <div class="panel-footer login-footer">
                    <center>
                    <p>Don't have an account? <a href="signup.php">Register</a></p>
                    </center>
                </div>
            </div>
        </div>
        </div>
    </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

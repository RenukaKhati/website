
<?php
if (isset($_SESSION['email'])) 
    {
        header('location: products.php'); 
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
        <?php include 'style.css'; ?>
        </style>
        
    </head>
    <body>
        <?php
        include 'includes/header.php';
        ?>
        
        <div class="container form signup-heading">
            <div class="row">
                <div class="col-xs-offset-4 col-xs-4">
                    <form action="./includes/signup_script.php" method="POST">
                        <h3><b>SIGN UP</b></h3><br>
                        <div class="form-group input-sm" class="font-signup">
                            <input type="text" name="name" placeholder="Name" class="form-control" required pattern="[A-Za-z]{1,32}" required>
                        </div>
                        
                        <div class="form-group input-sm" class="font-signup">
                                            <input type="text" name="email" placeholder="Email" class="form-control" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{7,}" title="Must contain a number, uppercase character & lowercase character with length atleast 8 characters" required>
                        </div>
                        
                        <div class="form-group input-sm" class="font-signup">
                            <input type="text" name="password" placeholder="Password" class="form-control" required pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain a number, uppercase & lowercase character with length atleast 8 characters" required=>
                        </div>
                        
                        <div class="form-group input-sm" class="font-signup">
                            <input type="text" name="contact" placeholder="Contact" class="form-control" required pattern="[7-9]{1}[0-9]{9}">
                        </div>
                        
                        <div class="form-group input-sm" class="font-signup">
                            <input type="text" name="city" placeholder="City" class="form-control" required>
                        </div>
                        
                        <div class="form-group input-sm" class="font-signup">
                            <input type="text" name="address" placeholder="Address" class="form-control" required>
                        </div>
                        
                        <div class="form-group input-sm" class="">
                            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>                
            </div>            
        </div>
        
        <?php
        include 'includes/footer.php';
        ?>
    </body>
</html>

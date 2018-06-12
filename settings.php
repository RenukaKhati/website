<?php
include'/includes/common.php';
if(!isset($_SESSION['email']))
    header('location:index.php');
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
        <link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <?php
        include'/includes/header.php';
        ?>
<div>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                    <form method="post" action="./includes/settings_script.php" style="margin-top:110px;margin-bottom: -115px;">
                        <h1><b>Change password!!</b></h1><br>
                        <div class="form-group">
                        <input type="text" name="oldpassword" placeholder="Old password" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="newpassword" placeholder="New password" class="form-control">
                        </div>
                        
                        <div class="form-group">
                            <input type="text" name="retypenewpassword" placeholder="Re-type new password" class="form-control">
                        </div>
                        
                        <button type="submit" class="btn-default btn-primary btn">Change</button>
        </form>
            </div> 
            </div>
        </div>
</div>
        <?php        include '/includes/footer.php';
        ?>
    </body>
</html>

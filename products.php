<?php
include'./includes/common.php';
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
                    include'includes/Check-if-added.php';
                    ?>
        
        <div class="jumbotron container text-center jumboo">
            <h1>Welcome to our Lifestyle Store!</h1>
            <p style="font-size: 15px">We have the best cameras, watches and shirts for you. No need to hunt
around, we have all in one place.</p>
        </div>
        <div class="cont">
            <div class="col-md-3 col-sd-6 products-img thumbnail">
                <img src="./images/img1.jpg" class="img-responsive"> 
                <p style="font-size: 12px"><b>Canon Eos 1300D</b></p>
                    <p style="font-size: 10px">Price: Rs. 24990.00</p>
                <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                        <?php 
                        
                    } else 
                        { 
                                if (check_if_added_to_cart("1")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=1" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
            </div>
            
            <div class="col-md-3 col-sm-6 products-img thumbnail">
                <img src="./images/img2.jpg" class="img-responsive">
                <p style="font-size: 12px"><b>Nikon D3400</b></p>
                    <p style="font-size: 10px">Price: Rs. 29489.00 </p>
                <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        
                    } else 
                        { if (check_if_added_to_cart("2")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=2" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
            </div>
       
        <div class="col-md-3 col-sm-6 products-img thumbnail">
                <img src="./images/img3.jpg" class="img-responsive">
                <p style="font-size: 12px"><b>Nikon D3400</b></p>
                    <p style="font-size: 10px">Price: Rs. 36990.00 </p>
                <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>  
                        <?php 
                        
                    } else 
                        { if (check_if_added_to_cart("3")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=3" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
            </div>
            
        
            <div class="col-md-3 col-sm-6 products-img thumbnail">
                <img src="./images/img4.jpg" class="img-responsive">
                <p style="font-size: 12px"><b>Samsung DV150F</b></p>
                    <p style="font-size: 10px">Price: Rs. 29000.00 </p>
                <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        
                    } else 
                        { if (check_if_added_to_cart("4")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=4" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
            </div>
            
            <div class="col-md-3 col-sm-6 products-img thumbnail">
                <img src="./images/img5.jpg" class="img-responsive">
                <p style="font-size: 12px"><b>Park Avenue shirts</b></p>
                    <p style="font-size: 10px">Price: Rs. 2000.00</p>
                <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        
                    } else 
                        { if (check_if_added_to_cart("5")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=5" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
            </div>
            
            <div class="col-md-3 col-sm-6 products-img thumbnail">
                <img src="./images/img6.jpg" class="img-responsive">
                <p style="font-size: 12px"><b>Siyaram's shirt</b></p>
                    <p style="font-size: 10px">Price: Rs. 1500.00</p>
                        <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        
                    } else 
                        { if (check_if_added_to_cart("6")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=6" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
            </div>
            
            <div class="col-md-3 col-sm-6 products-img thumbnail">
                <img src="./images/img7.jpg" class="img-responsive">
                <p style="font-size: 12px"><b>Raymond's shirt</b></p>
                    <p style="font-size: 10px">Price: Rs. 2500.00</p>
                <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        
                    } else 
                        { if (check_if_added_to_cart("7")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=7" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
            </div>
            
            <div class="col-md-3 col-sm-6 products-img thumbnail">
                <img src="./images/img8.jpg" class="img-responsive">
                <p style="font-size: 12px"><b>Park Avenue shirt</b></p>
                    <p style="font-size: 10px">Price: Rs. 2000.00</p>
               <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        
                    } else 
                        { if (check_if_added_to_cart("8")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=8" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
            </div>
            
            <div class="col-md-12 col-sm-12 products-img thumbnail">
                <img src="./images/img10.jpg" class="img-responsive">
                <p style="font-size: 12px"><b>Rolex Watch</p></b>
                    <p style="font-size: 10px">Price: Rs. 10000.00</p>
                <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        
                    } else 
                        { if (check_if_added_to_cart("9")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=9" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
            </div>
            
            <div class="col-md-3 col-sm-6 products-img thumbnail">
                <img src="./images/img15.jpg" class="img-responsive">
                <p style="font-size: 12px"><b>Titan watch</b></p>
                    <p style="font-size: 10px">Price: Rs. 15000.00</p>
                <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        
                    } else 
                        { if (check_if_added_to_cart("10")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=10" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
            </div>
            
            <div class="col-md-3 col-sm-6 products-img thumbnail">
                <img src="./images/img13.jpg" class="img-responsive">
                <p style="font-size: 12px"><b>Titan Raga</b></p>
                    <p style="font-size: 10px">Price: Rs. 5000.00</p>
                    <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        
                    } else 
                        { if (check_if_added_to_cart("11")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=11" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
                <button type="button" class="btn-primary form-control">Add to cart</button>
            </div>
            
            <div class="col-md-3 col-sm-6 products-img thumbnail">
                <img src="./images/img14.jpg" class="img-responsive">
                <p style="font-size: 12px"><b>Titan Raga</b></p>
                    <p style="font-size: 10px">Price: Rs. 8000.00</p>
                    <?php if (!isset($_SESSION['email'])) 
                    { 
                ?> 
                    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p> 
                        <?php 
                        
                    } else 
                        { if (check_if_added_to_cart("12")) 
                            {
                            ?>
                    <a href="#" class="btn btn-block btn-success">Added to cart</a>
                    <?php
                    } 
                    else 
                        { ?> 
                    <a href="includes/cart-add.php?item=12" name="add" class="btn btn-block btn-primary">Add to cart</a> 
                        <?php 
                        }
                        } 
                          ?>
                
        </div>
        </div>
        <?php
                    include 'includes/footer.php';
        ?>
    </body>
</html>

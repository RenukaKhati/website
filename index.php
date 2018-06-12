<?php
include'/includes/common.php';
	if (isset($_SESSION['email'])) 
	{	 
		header('location: ./products.php'); 
	}
?>
<html>

    <head>
        <title>Lifestyle Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="image1/img16.png" type="image/png">
        <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css" type="text/css">
        
        <script type="text/javascript" src="./bootstrap/js/jquery-3.3.1.min.js">
        </script>
       
         
        <style>
        <?php include './style.css'; ?>
        </style>
        
        <script type="text/javascript" src="./bootstrap/js/bootstrap.min.js">            
        </script>
        
       
    </head>
   
  
    <body>
       <?PHP
        include '/includes/header.php';
       ?>
        
        <div id="banner-image" class="container-fluid">
            <div  class="container">
                <div class="banner-content">
                    <div>
                        <p>
                            <b style="font-size: 20px">We sell lifestyle.</b>
                            <br>
                            <b style="font-size:10px">
                            Flat 50% OFF on premier brands
                            </b>
                        </p>
                    </div>
                    <a href="products.php" class="btn-danger btn btn-sd active ">Shop now</a>
                </div>
            </div>
            </div>
              
        <br><br>
        <div class="container index-img">
            <div class="row">
                <div class="col-xs-4">
                    <img src="images/camera.jpg" class="img-responsive img-thumbnail">
                    <center>
                        <p>
                            <a href ='products.php' style="text-decoration:none; color: black"><b>Cameras</b><br><p style="font-size: 10px">Choose among the best available in the world</p></a>
                        </p>
                    </center>
                </div>
                
                <div class="col-xs-4">
                    <img class="img-responsive img-thumbnail" src="./images/watch.jpg">
                     <center>
                         <p>
                            <a href ='products.php' style="text-decoration:none; color: black"><b>Watches</b><br><p style="font-size: 10px">Original watches from the best brands</p></a>
                        </p>
                    </center>
                </div>
                
                <div class="col-xs-4" >
                    <img src="./images/shirt.jpg" class="img-responsive img-thumbnail">
                     <center>
                        <p>
                            <a href ='products.php' style="text-decoration:none;color: black"><b >Shirts</b><br><p style="font-size: 10px">Our exquisite collection of shirts</p></a>
                        </p>
                    </center>
                </div>
                
                </div>
            </div>
        <?php
            include 'includes/footer.php';
        ?>
    </body>
    
</html>

<?php
error_reporting(E_ERROR);
include'./includes/common.php';
if(!isset($_SESSION['email']))
    header('location:index.php');
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
                    
        $id=$_GET['id'];
$user_id=$_SESSION['user_id'];
$query="select * from users_items as a, items as b where a.user_id='$user_id' and a.item_id=b.id";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==0)
{?>
        <a href="products.php" style="text-decoration:none"><input type="button" class="add-first btn-warning center-block" value="Add items to cart first!!"></a>
<?php
}
else 
{
    ?>
        <div class="container table-cart">
        <div class="row">
             <div class="table table-striped table-hover table-responsive container">
            <div class="table-responsive">
            <table align="center" class="table-bordered table-responsive table1 table-striped " >
                
     <tbody>
                    <tr>
                        <th>Item number</th>
                        <th>Item Name</th>
                        <th>Price</th>
                        <th></th>
                        
                    </tr>   
     
    <?php
    $sum=0;
    $num=0;
    $array_id;
    while($arr=mysqli_fetch_array($result))
    {
        $num++;
       $sum=$sum+$arr['price'];
       $id=arr['id'];
       array_push($array_id,arr['id']);
       $query2="select name,price from items where id='$id'";
       ?>
       
        <div class="col-sm-6 col-md-3">
            
            <tr>
                        <td><?php echo$num;?></td>
                        <td><?php echo$arr['name']?></td>
                        <td><?php echo$arr['price']?></td>
                        <td><a href="./includes/cart-remove.php?item=<?php echo$arr['item_id']?>" style="text-decoration:none" class="cart_item_link" >Remove</a></td>
                        
                    </tr>
            ?>
        </div>
    </div>
</div>
<?php
  }
  ?>
            <tr><td>Total</td>
            <td> </td>
            <td><?php echo$sum;?></td>
            <td><a href="success.php"><button type="button" class="btn-primary btn-danger">Confirm Order</button></a></td>
            </tr>
        </tbody>
            </table>
                <br><br>
            
                    
                <?php
  }
  ?>
        </div>
        </div>
        </div>
        </div>
       
        <?php
        include "includes/footer.php";
        ?>
    </body>
</html>

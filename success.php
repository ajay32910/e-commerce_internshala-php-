<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>success_page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="newcss.css" type="text/css">
    </head>
    
    <body>
        <?php
        include"include/common.php";
        $id=$_GET['id'];
        $sql_query="UPDATE user_product SET status='confirmed' WHERE user_id=$id";
        $result=mysqli_query($con,$sql_query);
        
        ?>
        <div class="jumbotron">
            <h3> Your order has been successfully placed!</h3>
        </div>
        <div class="container">
            <a href="product_page.php" class='btn btn-primary'>Click for more order!</a>
        </div>
    </body>
</html>

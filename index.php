<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>assignment2</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="php_css.css" type="text/css">
    </head>
    <body>
        <?php include"include/header.php";
              include"include/common.php";
             
              if(isset($_SESSION['email'])){
                  header('location:product_page.php');
              }
        ?>
        <div id="banner_image">
            <div class="container">
                <center>
                <div class="banner_content">
                    <h1>"we sell lifestyle."</h1>
                        <p>"flat 40% OFF on premium brands"</p>
                        <a href="product_page.php"> <button type="button" class="btn btn-danger btn-lg-active">Shop Now</button></a>
                    
                </div>
                </center>
            </div>
            
        </div>
        <?php include"include/footer.php"?>
    </body>
</html>

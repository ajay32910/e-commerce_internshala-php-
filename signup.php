<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
       <title>signup</title>
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
              include"include/common.php";?>
        <div class="container">
            <div class="row">
                <div class="col-xs-6 col-xs-offset-3">
                <form method="POST" action="signup_script.php">
                    <h1> SIGN UP</h1>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="email" placeholder="Email" required  pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'>
                        <div><?php if(isset($_get['msg']))echo $_GET['msg'];?></div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password" required pattern='\w{6,}'>
                        <div><?php if(isset($_get['msg'])) echo $_GET['msg'];?></div>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="digit" name="contact" placeholder="phone number" min-length='10' >
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="city" placeholder="City">
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" name="address" placeholder="Address">
                    </div>
                    <button class="btn btn-primary" type="submit">Submit</button>
                            
                </form>     
                </div>
                
       
            </div>
        </div>
         <?php include"include/footer.php"?>
            
    </body>
</html>

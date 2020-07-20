<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include"include/common.php"?>
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
<link rel="stylesheet" href="newcss.css" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <form method='POST' action='setting_script.php'>
                    <h3>Change Password</h3>
                    <div class="form-group">
                        <input class="form-control" type="password" name="pass" placeholder="Old password" pattern='\w{6,}'>
                        <div><?php if(isset($_GET['error'])) echo$_GET['error'];?></div>
                        
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="newpass" placeholder="New password" pattern='\w{6,}'>
                        
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="re_pass" placeholder="Re-type New password" pattern='\w{6,}'>
                        
                    </div>
                    <button type='submit' class="btn btn-primary">Change</button>
                </form>
                <div><?php if(isset($_GET['match'])) echo $_GET['match'];?></div>
            </div>
        </div>
        
        
        <footer>
                <div class="container">
                    <center>
                        "Copyright &copy; LifeStyle Store. All Rights Reserved" and "Contact Us:+91 9000000000"
                    </center>
                </div>
            </footer>
    </body>
</html>

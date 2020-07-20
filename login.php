<html>
    <head>
        <title>login</title>
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
                include"include/common.php"?>
 
        <div style="margin-top:70px">
            <div><?php if(isset($_GET['msg']))echo $_GET['msg']?></div>
            <div class="container">   
                <div class="row">
                    <div class="col-xs-6 col-xs-offset-3">
                <form method="POST" action="login_script.php">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             LOGIN
                        </div>
                        <div class="panel-body">
                            <p class="text-warning"> Login to make a purchase</p>
                            <div class="form-group">
                                <input class="form-control" type="text" name="email" placeholder="Email" required pattern='[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$'>
                                <div><?php if(isset($_GET['email_error'])) echo $_GET['email_error'];?></div>
                            </div>
                            <div class="form-group">
                                <input  class="form-control" type="password" name="pass" placeholder="Password" required pattern="\w{6,}">
                                 <div><?php if(isset($_GET['pass_error'])) echo $_GET['pass_error'];?></div>
                            </div>
                            <input class="btn btn-primary" type="submit" name="Login" value="Login">
                                
                        </div>
                        <div class="panel-footer">
                            Don't have an account?<a href="signup.php">Register</a>
                        </div>
                            
                    </div>        
                </form>
                    </div>
                </div>
            
            </div>
        </div>
               
       <?php include"include/footer.php"?>
       
   
    </body>
</html>
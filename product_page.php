<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<?php include "include/common.php"?>
<html>
    <head>
       <title>product_page</title>
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
        <?php include"include/header.php";
              include"include/check_added.php";?>
        <div class="container">
            <div class="jumbotron">
                <h1>
                    Welcome to our Lifestyle Store!
                </h1>
                <p>We have the best cameras,watches and shirts for you.No need to hunt around, we have all in one place</p>
            </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="photo/sony1.jpg" alt="sony1">
                        
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price:Rs.36000.00</p>
                            
                            <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(1,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                                
                        </div>
                        </div>
                    </div>
                        <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="photo/sony2.jpg" alt="sony2"  style="height:224px; width:224px"/>
                        
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price:Rs.40000.00</p>
                           <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(2,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="photo/sony3.jpg" alt="sony3" style="height:224px; width:224px"/>
                        
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price:Rs.50000.00</p>
                            <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(3,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                        </div>
                        </div>
                        </div>
                         <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="photo/sony4.jpg" alt="sony4" style="width:224px; height:224px"/>
                        
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price:Rs.80000.00</p>
                            <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(4,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                        </div>
                        </div>
                     
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="photo/titan1.jpg" alt="titan" id="imgproduct"/>
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price:Rs.1300.00</p>
                            <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(5,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="photo/titan2.jpg" alt="titan" style="height:224px;width:224px"/>
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price:Rs.3000.00</p>
                            <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(6,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="photo/titan3.jpg" alt="titan"/>
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price:Rs.800.00</p>
                           <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(7,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="thumbnail">
                        <img src="photo/titan4.jpg" alt="titan" class="imgproduct"/>
                        <div class="caption">
                            <h3>Titan Model #301 </h3>
                            <p>Price:Rs.8300.00</p>
                            <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(8,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="photo/shirt1.jpg" alt="shirt1" style="height:224px;width:224px"\>
                        
                        <div class="caption">
                            <h3>H&W</h3>
                            <p>Price:Rs.800.00</p>
                            <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(9,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                        </div>
                        </div>
                    </div>
                        <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="photo/shirt2.jpg" alt="shirt2"  style="height:224px; width:224px"/>
                        
                        <div class="caption">
                            <h3>Luis Phil</h3>
                            <p>Price:Rs.1000.00</p>
                            <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(10,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                        </div>
                        </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="photo/shirt3.jpg" alt="shirt3" style="height:224px; width:224px"/>
                        
                        <div class="caption">
                            <h3>Jhon Zok</h3>
                            <p>Price:Rs.1500.00</p>
                            <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(11,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                        </div>
                        </div>
                        </div>
                         <div class="col-md-3 col-sm-6">
                        <div class="thumbnail">
                            <img src="photo/shirt4.jpg" alt="shirt4" style="width:224px; height:224px"/>
                        
                        <div class="caption">
                            <h3>jhalsani</h3>
                            <p>Price:Rs.1300.00</p>
                            <?php if(!isset($_SESSION['email'])) {
                                echo'<a href=login.php><button class="btn btn-primary form-control">Add to cart</button></a>';
                               
                            }
                           else{
                                if(check_if_added(12,$con))
                                {
                                    echo'<a href="#" class="btn btn-block btn-success" disabled> Added to cart</a>';
                                }
                                else{
                                echo'<a href="cart_add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>';
                                    
                                }
                            }?>
                        </div>
                        </div>
                     
                </div>
            </div>
        </div>
       <?php include"include/footer.php"?>
    </body>
</html>

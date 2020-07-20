<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php include"include/common.php"?>
<html>
    <head>
        <title>cart_page</title>
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
        
         <?php $id=$_SESSION['id']; 
                $sql_query="SELECT us_pr_id AS num,name,price FROM user_product,product WHERE user_product.user_id=$id AND user_product.product_id=product.id AND user_product.status='Added to cart'";
                $result=mysqli_query($con,$sql_query);
                $num=mysqli_num_rows($result);
                if($num==0)
                {
                    echo"<h3> cart is empty!</h3>";
                    echo"<a href='product_page.php'>click here to add item</a>";
                }
                else{ ?>
                
                <?php include"include/header.php"?>
                
                     
                    
               
                    <div style="margin-top:60px">
                        <div class="container">
                           
                            <table class='table table-striped table-bordered'> 
                                    <tr>
                                        <th>item number</th>
                                        <th>item name</th>
                                        <th>price</th>
                                        <th>      </th>
                                    </tr>
                        
                        <?php
                            $row=mysqli_fetch_array($result);
                            $sum=$row['price'];
                            $i=1;
                            $id=$row['num'];?>
                        <tr>
                            <td><?php echo $i?></td>
                            <td><?php echo $row['name']?></td>
                            <td><?php echo $row['price']?></td>
                            <td><a href="cart_remove.php?id=<?php echo $row['num']?>" class='btn btn-primary'> Remove</a></td>
                             <?php
                                    $num--;
                                    $i++;
                            ?>
                            
                        </tr>"
                            
              <?php  while($num)
                     { 
                        $num--;
                        $row=mysqli_fetch_array($result);?>
                                
                    <tr>
                        <td><?php echo $i ?> </td>
                         <td><?php echo $row['name']?> </td>
                          <td><?php echo $row['price']?></td>
                          <?php
                                $i++;
                                $id.=",".$row['num'];
                          ?>
                          
                          <td><a href='cart_remove.php?id=<?php echo $row['num']?>' class="btn btn-primary">Remove</a> </td>
                           <?php
                            $sum+=$row['price'];
                           ?>
                     </tr>
                <?php }?>
                    <tr>
                        <td> </td>
                        <td>total </td>
                        <td><?php echo $sum; ?></td>
                        <td><a href="success.php?id=<?php echo$_SESSION['id']?>" class="btn btn-primary">Confirm order</a></td>
                    </tr>
                                 
                            </table> 
            
        </div>
        </div>
       <?php } ?>     
        
       <?php  include"include/footer.php";?>
    </body>
</html>

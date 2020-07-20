<?php
    //SS$con=mysqli_connect("localhost",'root','','ecommerce');
    function check_if_added($item_id,$con)
    {   
        //$con=mysqli_connect("localhost",'root','','ecommerce');
        $user_id=$_SESSION['id'];
        $sql_fetch="SELECT * FROM user_product WHERE product_id=$item_id AND user_id=$user_id AND status='Added to cart'";
        $result=mysqli_query($con,$sql_fetch);
        $num=mysqli_num_rows($result);
        if($num>=1)
        {
            return 1;
        }
        else
        {
            return 0;
        }
    }
?>



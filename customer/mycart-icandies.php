<?php
        include "conn.php";
        if(isset($_POST['add']))
        {
            $prodid = $_GET['pid'];
            $prod_quant = $_POST['quant'];
            $userid = 1;
            $cartid = 1;
            $storeid = $_GET['sid'];
        }
        $data= "INSERT INTO MyCart VALUES ('$cartid','$prod_quant','$userid','$prodid','$storeid')";
        
        if(mysql_query($data))
        {
            echo"<script>alert('Product Successfully added to your Cart!');</script>";
            echo"<script>location='icacandies.php?yon=yes&id=".$prodid."'</script>";
        }
        else
        {
            echo"<script>alert('Product already placed in your Cart!');</script>";
            echo"<script>location='icacandies.php?yon=no&id=".$prodid."'</script>";
        }
?>
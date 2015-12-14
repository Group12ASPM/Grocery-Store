<?php
    include "conn.php";
?>
<html>
<head>
<script src="js/jquery.js"></script>
<link rel="stylesheet" href="css/style1.css">
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<link href="https://fonts.googleapis.com/css?family=Slabo+27px" rel="stylesheet" type="text/css">
<title> Group 12 Shop</title>
</head>
<body>
<!--main div starts-->

<div id="main">

<div id="main1">
<!--inner div starts-->
<div id="innermain">
<img src="images/companylogo.png" width="100" height="80" style="position:relative; margin-left:10px;margin-top:15px">
</div>
<center>
<h1 style="margin-top:-150px; margin-bottom:20px;font-family: 'Lobster', cursive; color:#00b1b7; font-size:75px;">Online Grocery Store</h1>
</center>
</div>

<!--inner end starts-->

<div id="nav">
<ul>
<center>
<li><a href="index.php">Home</a></li>
<li><a href="search.php">Search</a></li>
<li><a href="coustmerreg.php">Register</a></li>
<li><a href="coustmer1.php">Login</a></li>
<li><a href="mycart.php">MyCart</a></li>
</ul>
</center>
</div>

<hr>
<img src="images/background.jpg" width="100%" height="400px">


<div id="nav">
</div>

<div id="left">
<br>
<center>
<ul>
<li style="color:black;font-weight:bold;font-family: 'Lobster', cursive;">SELECT STORE </li>
<li style="background-color:#B2E7E9"><a href="willys.php">Willys</a></li>
<li><a href="ica.php">ICA</a></li>
<li style="background-color:#B2E7E9"><a href="citygross.php">CityGross</a></li>
<li><a href="coop.php">Coop</a></li>
<li style="background-color:#B2E7E9"><a href="hemkop.php">Hemköp</a></li>
</ul>
</center>
</div>
<br>
</div>
<div id="right"></div>

<br>
<br>
<!--main starts-->
<section>
<p style="text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:25px"> MY CART </p>
<Br>
<br>
<!-- Row 1 for willys products in cart-->


<div id="mycart" style="width:90%;margin-bottom:100px;margin:auto">

<div class="datagrid">
<table align="center">

<thead>
<tr>
<th>No</th>
<th>Product Name</th>
<th width="40%">Product Image</th>
<th> Quantity </th>
<th> Unit Price </th>
<th> Total Price </th>
</tr>
</thead>

<tbody>

<!-- willys-->
<tr>
<td colspan="6">Willys Shopping List</td>
</tr>
<?php
    $wresult = mysql_query("SELECT * FROM products WHERE product_id IN (SELECT product_id FROM MyCart WHERE uid='1' AND cart_id='1' AND store_id='1') AND store_id='1'");
    $wsno=1;
    $finaltotal1=0;
    while ($wrow = mysql_fetch_assoc($wresult)) {
        $wproductid=$wrow['product_id'];
        
        echo "<tr class='alt'><td>".$wsno++."</td><td width='10%'>{$wrow['product_name']}</td><td><img src='data:image/jpeg;base64," . base64_encode( $wrow['Image']) . "' style='height:70px;position:relative;' width='20%' /></td>";
        
        $wres=mysql_query("SELECT quantity FROM MyCart WHERE product_id ='$wproductid' AND uid='1' AND cart_id='1' AND store_id='1'");
        while($wrowres = mysql_fetch_array($wres)) {
            echo "<td>{$wrowres['quantity']}</td>";
             $wquant=$wrowres['quantity'];
            $wpr=$wrow['price'];
            $wtotal=$wquant*$wpr;
            $finaltotal1=$finaltotal1+$wtotal;
        }
        echo "<td>{$wrow['price']} SEK</td> <td>".$wtotal." SEK </td></tr>";
    }
?>

<!-- ica-->
<tr>
<td colspan="6">ICA Shopping List</td>
</tr>
<?php
    $iresult = mysql_query("SELECT * FROM products WHERE product_id IN (SELECT product_id FROM MyCart WHERE uid='1' AND cart_id='1' AND store_id='2') AND store_id='2'");
    $isno=1;
     $finaltotal2=0;
    while ($irow = mysql_fetch_assoc($iresult)) {
        $iproductid=$irow['product_id'];
        
        echo "<tr class='alt'><td>".$isno++."</td><td width='10%'>{$irow['product_name']}</td><td><img src='data:image/jpeg;base64," . base64_encode( $irow['Image']) . "' style='height:70px;position:relative;' width='20%' /></td>";
        
        $ires=mysql_query("SELECT quantity FROM MyCart WHERE product_id ='$iproductid' AND uid='1' AND cart_id='1' AND store_id='2'");
        while($irowres = mysql_fetch_array($ires)) {
            
            echo "<td>{$irowres['quantity']}</td>";
            $iquant=$irowres['quantity'];
            $ipr=$irow['price'];
            $itotal=$iquant*$ipr;
            $finaltotal2=$finaltotal2+$itotal;
        }
      
        echo "<td>{$irow['price']} SEK</td><td>".$itotal." SEK </td></tr>";
    }
?>
<tr >
<td colspan="5"><span style="font-size:20px">GRAND TOTAL AMOUNT</span></td>
<?php
    $finaltotal=$finaltotal1+$finaltotal2;
    echo "<td><span style='font-size:20px'>".$finaltotal." SEK</span></td></tr>";
?>
</tbody>
</table>
</div>
<Br><Br><Br>
<center>
<a class="myButton2" href="order.php">Place Order</a>
</center>
<br><br>

</div>


</section>

<br>
<br>

<!-- footer-->
<div id="footer" style="bottom:0;">
<ul>
<center>
<Br>
<br>
<li><a href="privacy.php">Privacy Policy</a></li>
<li><a href="returnpolicy.php">Return Policy</a></li>
<li><a href="contact.php">Contact Us</a></li>
</ul>
</center>
<br>
<center>
<span style="color:white;align:center"> &copy; 2015 Group12Shop </span>
</center>
</div>

<!--footer end--> 

</div>
</body>



</html>

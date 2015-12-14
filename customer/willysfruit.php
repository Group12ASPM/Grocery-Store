
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
<h1 style="margin-top:-150px; margin-bottom:20px;font-family: 'Lobster', cursive; color:#00b1b7; font-size:75px;">Online Grocery Store - Willys </h1>
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


<div id="nav"></div>
<div id="left">
<br>
<center>
<ul>
<li style="color:black;font-weight:bold;font-family: 'Lobster', cursive;">SELECT STORE </li>
<li style="background-color:#B2E7E9;border:5px solid black"><a href="willys.php" style="color:Red">Willys</a></li>
<li><a href="ica.php">ICA</a></li>
<li style="background-color:#B2E7E9"><a href="">CityGross</a></li>
<li><a href="">Coop</a></li>
<li style="background-color:#B2E7E9"><a href="">Hemköp</a></li>

</ul>
<center>
</div>
<br>
<div id="right"></div>
</div>

<!--main starts-->

<!--left-->

<div style="background:#000080;color:white;display:inline-block;width:18%;">
<a href="willys.php" style="text-decoration:none;"><span style="color:white;font-weight:bold;font-family: 'Lobster', cursive;font-size:30px;">Back to List</span></a>
</div>

<!--right for fruits-->

<p style="text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:25px"> Welcome to <span style="color:red;font-weight:bold"> Willys </span> Online - Fruits</p>
<?php
    include "conn.php";
    $yon = $_GET['yon'];
    if($yon=='yes')
    {
        echo "<center><p id='addline' style='text-align:center;margin-bottom:25px;margin-top:25px;font-weight:bold;font-size:15px'> Product <span style='color:red;font-weight:bold'> SUCCESSFULLY </span> added to your cart!</p></center>";
    }
    ?>

<br>

<!--row for display-->
<!-- code from backend-->
<?php
    
    $pid = $_GET['id'];
    $result = mysql_query("SELECT Image,product_name,description,total_quantity,price FROM products WHERE store_id='1' AND product_id='$pid'");
    
    while($row = mysql_fetch_array($result))
    {
        echo "<div style='height:500px'>";
        echo "<h1 style='margin:20px;'>" . $row['product_name'] . "</h1>";
        echo "<img src='data:image/jpeg;base64," . base64_encode( $row['Image']) . "' style='height:200px;position:relative;margin-left:25%' width='50%' /><br><br>";
        echo "<p align='center'><b>Product Description:</b>" . $row['description'] . "<br><br><b>Price:</b>" .$row['price']. "kr<br><BR><b>Total Available Quantity:</b>" . $row['total_quantity'] . "</p><br>";
        echo "<center><form action='mycart-wfruits.php?pid=".$pid."&sid=1' method='post'>";
        echo "<select name='quant' id='quant'>";
        echo "<option value='1'>1</option>";
        echo "<option value='2'>2</option>";
        echo "<option value='3'>3</option>";
        echo "<option value='4'>4</option>";
        echo "<option value='5'>5</option>";
        echo "<option value='6'>6</option>";
        echo "<option value='7'>7</option>";
        echo "<option value='8'>8</option>";
        echo "<option value='9'>9</option>";
        echo "<option value='10'>10</option>";
        echo "</select>";
        echo "<input class='myButton2' type='submit' value='Add to Cart' id='add' name='add'/></form></center>";
        echo "</div>";
        
    }
    ?>
</div>




<!-- footer-->
<div id="footer">
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
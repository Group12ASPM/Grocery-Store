<?php
/**
 * The Header for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<title><?php wp_title( '|', true, 'right' ); ?></title>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	
	
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style2.css">


	<!--[if lt IE 9]>
	<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
	
	<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.min.js"></script>
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/mycss.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/sidebar.css">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
	
</head>

<body>
<!--main div starts-->

<div id="main"> 
	<div id="main1">

	<!--inner div starts-->

		<div id="innermain">
			<img src="<?php echo get_template_directory_uri(); ?>/images/companylogo.png" width="100" height="80" style="position:relative; margin-left:10px;margin-top:15px">
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
			</center>
		</ul>
	</div>
	<hr>
	<img src=" <?php echo get_template_directory_uri(); ?>/images/background.jpg" width="100%" height="400px">


	<div id="nav"></div>
	<div id="left">
		<br>
		<center>
			<ul>
				<li style="color:black;font-weight:bold;font-family: 'Lobster', cursive;">SELECT STORE </li>
				<li style="background-color:#B2E7E9"><a href="categorybook.php?qs=health">Willys</a></li>
				<li><a href="categorybook.php?qs=fiction">ICA</a></li>
				<li style="background-color:#B2E7E9"><a href="categorybook.php?qs=science">CityGross</a></li>
				<li><a href="categorybook.php?qs=Computers">Netto</a></li>
				<li style="background-color:#B2E7E9"><a href="categorybook.php?qs=yoga">Hemköp</a></li>
				<li><a href="categorybook.php?qs=Computers">Maxi</a></li>
				<li style="background-color:#B2E7E9"><a href="categorybook.php?qs=yoga">Coop</a></li>
				<li><a href="categorybook.php?qs=Computers">Fruckt</a></li>
				<li style="background-color:#B2E7E9"><a href="categorybook.php?qs=yoga">FoodWorld</a></li>
				<li><a href="categorybook.php?qs=Computers">Ratnadeep</a></li>
				<li style="background-color:#B2E7E9"><a href="categorybook.php?qs=yoga">Heritage Fresh</a></li>
			</ul>
		<center>
	</div>
	<br>
	<div id="right">

	</div>

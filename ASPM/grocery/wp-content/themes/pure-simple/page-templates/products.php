<?php
/**
 * Template Name: Products Page 
 * @package Pure_and_Simple
 * @since 1.0.0
 */

get_header(); ?>

<?php the_widget( 'Blog Left Sidebar' ); ?> 
<div id="right1" style="height:580px; margin-top:20px;" align="center">
	<div id="product-grid">
		<div class="txt-heading">Products</div>
		
			<div class="product-item">
				<form method="post" action="index.php?action=add&code=<?php// echo $product_array[$key]["code"]; ?>">
				<div class="product-image"><img src="<?php// echo $product_array[$key]["image"]; ?>"></div>
				<div><strong><?php// echo $product_array[$key]["name"]; ?></strong></div>
				<div class="product-price"><?php// echo "$".$product_array[$key]["price"]; ?></div>
				<div><input type="text" name="quantity" value="1" size="2" /><input type="submit" value="Add to cart" class="btnAddAction" /></div>
				</form>
			</div>
		
	</div>
</div>

<?php
get_footer();




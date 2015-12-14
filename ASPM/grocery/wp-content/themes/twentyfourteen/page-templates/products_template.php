<?php
/**
 * Template Name: Products Page 
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
<script>
( function( $ ) {
$( document ).ready(function() {
$('#cssmenu > ul > li > a').click(function() {
  $('#cssmenu li').removeClass('active');
  $(this).closest('li').addClass('active');	
  var checkElement = $(this).next();
  if((checkElement.is('ul')) && (checkElement.is(':visible'))) {
    $(this).closest('li').removeClass('active');
    checkElement.slideUp('normal');
  }
  if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {
    $('#cssmenu ul ul:visible').slideUp('normal');
    checkElement.slideDown('normal');
  }
  if($(this).closest('li').find('ul').children().length == 0) {
    return true;
  } else {
    return false;	
  }		
});
});
} )( jQuery );
</script>

<div class="content">
	<div id='cssmenu' style="margin: 67px 0px 0px 49px;float:left;">
		<ul>
			<li class=''><a href='#'><span>Categories</span></a></li>
			<?php 
			$args = array( 'taxonomy' => 'product_cat' );
			$terms = get_terms('product_cat', $args);

			if (count($terms) > 0) {
				$i =0;
				foreach ($terms as $term) {
					
					if($i == 0 ){
						echo "<li class='active'>";
					}else{
						echo "<li class=''>";
					}
						echo "<a href='" . get_term_link( $term->slug, 'product_cat' ) . "'><span>".$term->name."</span></a>";
					echo "</li>";
				}
				
			}
			?>
		</ul>
	</div>


	<div id="right1" style="margin-top: 48px; float: right;width: 72%;" align="center">
		<div id="product-grid">
			<div class="txt-heading"></div>
			<div style="float:left">
				<?php echo do_shortcode('[sale_products ]'); ?>
			</div>
					<?php 
					if(function_exists('wp_paginate')) {
				wp_paginate();
			}
			else {
				twentyfourteen_paging_nav();
			} 
			?>
		</div>
	</div>
</div>


<?php
get_footer();




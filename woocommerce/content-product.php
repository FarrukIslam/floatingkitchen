<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 2.6.1
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product, $post, $counter;

	++$counter;
	//var_dump($counter);
	if($counter == 3){
		$clearfix = '<div class="clearfix"></div>';
		$counter = 0;
	}
	else{
		$clearfix = '';
	}
?>


<!-- Product -->
<div class="col-md-3 col-sm-6 col-xs-12">
	<a href="<?php the_permalink(); ?>">
		<div class="product_wrapper text-center">
			
			<div class="product_image">
				<?php the_post_thumbnail('pro_thum_shop',array ('class' => 'img-responsive')) ?>
			</div>
			<div class="product_info">
				<div class="product_name title_h4">
					<?php 
						echo substr($product->get_title(), 0, 28);
						if (strlen($product->get_title()) > 28) echo "&nbsp;.....";
					?>
				</div>
				<div class="product_link">
					<a href="<?php the_permalink(); ?>">View Now!</a>
				</div>
			</div>
		</div>
	</a>
</div><!-- Product -->

 
<?php //echo $clearfix; ?>

<?php
/**
 * Related Products
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/related.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product, $woocommerce_loop;

if ( empty( $product ) || ! $product->exists() ) {
	return;
}

if ( ! $related = $product->get_related( $posts_per_page ) ) {
	return;
}

$args = apply_filters( 'woocommerce_related_products_args', array(
	'post_type'            => 'product',
	'ignore_sticky_posts'  => 1,
	'no_found_rows'        => 1,
	'posts_per_page'       => $posts_per_page,
	'orderby'              => $orderby,
	'post__in'             => $related,
	'post__not_in'         => array( $product->id )
) );

$products                    = new WP_Query( $args );
$woocommerce_loop['name']    = 'related';
$woocommerce_loop['columns'] = apply_filters( 'woocommerce_related_products_columns', $columns );
?>

<?php if ( $products->have_posts() ) : ?>
<div class="col-md-3">
	<div class="related products related_product_singlepage">

		<h4><?php _e( 'Related Products', 'woocommerce' ); ?></h4>

		<div class="hero__title" id="animatedHeading">
		<?php woocommerce_product_loop_start(); ?>

		<div class="related_slick_slider">
			<?php while ( $products->have_posts() ) : $products->the_post(); ?>



			<!-- Product -->
			<div class="related_item slick-dupe">				
				<div class="col-md-12 col-sm-12 col-xs-12">
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
				</div>
			</div>	<!-- Product -->

			<?php endwhile; // end of the loop. ?>
</div>
		<?php woocommerce_product_loop_end(); ?>
		</div>

	</div>
</div>



<?php endif; ?>

<?php 
wp_reset_postdata();

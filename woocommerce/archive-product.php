<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package escaperoom
 */

get_header(); ?>
	
	<div id="primary" class="container">
		<main id="main" class="site-main" role="main">

			<div class="row">
				<?php	
				if ( is_active_sidebar( 'shop-sidebar' ) ) {
				$column = 'col-md-9';
				} else {
					$column = 'col-md-12';
				}
				if ( is_active_sidebar( 'shop-sidebar' ) ) : ?>		

				<div class="col-md-3">
					<div class="sidebar">
						<?php dynamic_sidebar('shop-sidebar'); ?>
					</div>
				</div>
				<?php endif; ?>
			
		 		<div class="<?php echo $column; ?>">
		 			<div class="row">
						<?php
							/**
							 * woocommerce_before_main_content hook.
							 *
							 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
							 * @hooked woocommerce_breadcrumb - 20
							 */
							do_action( 'woocommerce_before_main_content' );
						?>

						<?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>

							<h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

						<?php
							/**
							 * woocommerce_archive_description hook.
							 *
							 * @hooked woocommerce_taxonomy_archive_description - 10
							 * @hooked woocommerce_product_archive_description - 10
							 */
							do_action( 'woocommerce_archive_description' );
						?>

						<?php
							/**
							 * woocommerce_before_shop_loop hook.
							 *
							 * @hooked woocommerce_result_count - 20
							 * @hooked woocommerce_catalog_ordering - 30
							 */
							do_action( 'woocommerce_before_shop_loop' );
						?>

						<?php endif; ?>
					</div>
					<div class="row archive_products_items">
						
							<?php 
								while ( have_posts() ) : the_post(); 
									wc_get_template_part( 'content', 'product' );
								endwhile; 
								do_action( 'woocommerce_after_shop_loop' );
							 ?>
							
					</div>	
				</div><!--#col-->
			</div><!--#row-->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

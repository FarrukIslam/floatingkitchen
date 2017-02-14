<?php
/* Template Name: Home Page */
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
 * @package floatingkitchen
 */

get_header(); ?>
	
	<?php 
		// Slider Section
		$enable_slider = get_field('slider_section_switch');
		$slider_items = get_field('slider_item');
	?>

	<?php if ($enable_slider): ?>
	<!-- home Slider -->
	<section id="homeslider" class=" container-fluid padding_bottom_0 padding_top_0">
		<!-- slider_item -->
		<?php if ($slider_items): foreach ($slider_items as $slider_item): ?>
		<div class="slider_item" style="background-image: url('<?php echo $slider_item['slider_item_image'] ?>');">
			<div class="row">
				<div class="slider_content col-md-12">
					<div class="btn">
						<a href="<?php echo $slider_item['slider_item_button_link'] ?>"><?php echo $slider_item['slider_item_button_text'] ?></a>
						<span class="ion-ios-arrow-right"></span>
					</div>
				</div>	
			</div>
		</div><!-- slider_item -->
		<?php endforeach; endif; ?>
		
	</section>
	<!-- /home Slider -->
	<?php endif; ?>

	
	<?php 
		$enable_calltoaction = get_field('call_to_action_switcher');
		$calltoaction_items = get_field('call_to_action_items');
	?>

	<?php if ($enable_calltoaction): ?>
	<section id="calltoaction" class="blue_bg padding_top_0 padding_bottom_0">
		<div class="container">
			<div class="row">
				<?php if ($calltoaction_items): foreach ($calltoaction_items as $calltoaction_item): ?>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="calltoaction_item">
						<?php if($calltoaction_item['call_to_action_icon']) : ?>
						<div class="calltoaction_icon">
							<span class="<?php echo $calltoaction_item['call_to_action_icon'] ?>"></span>
						</div>
						<?php endif; ?>
						<div class="calltoaction_content text-uppercase">
							<p><?php echo $calltoaction_item['call_to_action_title'] ?><span><?php echo $calltoaction_item['call_to_action_subtitle'] ?></span></p>
						</div>
					</div>
				</div>
				<?php endforeach; endif; ?>
			</div>
		</div>
	</section><!-- /calltoaction -->
	<?php endif; ?>

	<!-- popular_categories -->
	<section id="popular_categories" class="bottom_shadow">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section_title">Popular Categories</h2>
				</div>
			</div>
			<?php echo do_shortcode('[product_category_items]'); ?>
		</div>
	</section><!-- /popular_categories -->

	<!-- new_products -->
	<section id="new_products" class="">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section_title">What’s Hot & New!</h2>
				</div>
			</div>
			<div class="row">
				
					<?php echo do_shortcode('[featured_products per_page="12" columns="1"]');?>
				
			</div>
		</div>
	</section><!-- /new_products -->

<?php
get_footer();

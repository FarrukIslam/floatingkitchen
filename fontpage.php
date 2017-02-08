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
			<div class="row">
				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="popular_categories_item text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="">
						<a href="#"><h4 class="title_h4">Text 1</h4></a>
					</div>
				</div>

				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="popular_categories_item text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="">
						<a href="#"><h4 class="title_h4">Text 1</h4></a>
					</div>
				</div>

				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="popular_categories_item text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="">
						<a href="#"><h4 class="title_h4">Text 1</h4></a>
					</div>
				</div>

				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="popular_categories_item text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="">
						<a href="#"><h4 class="title_h4">Text 1</h4></a>
					</div>
				</div>

				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="popular_categories_item text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="">
						<a href="#"><h4 class="title_h4">Text 1</h4></a>
					</div>
				</div>

				<div class="col-md-2 col-sm-2 col-xs-12">
					<div class="popular_categories_item text-center">
						<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="">
						<a href="#"><h4 class="title_h4">Text 1</h4></a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /popular_categories -->

	<!-- new_products -->
	<section id="new_products" class="bottom_shadow">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section_title">What’s Hot & New!</h2>
				</div>
			</div>
			<div class="row">
				<div class="new_products_slider">
					<!-- Product -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="product_wrapper text-center">
							<div class="product_image">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="Product Image">
								</a>
							</div>
							<div class="product_info">
								<div class="product_name title_h4">
									<a href="#">Floating Keychain</a>
								</div>
								<div class="product_link">
									<a href="#">View Now!</a>
								</div>
							</div>
						</div>
					</div><!-- Product -->

					<!-- Product -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="product_wrapper text-center">
							<div class="product_image">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="Product Image">
								</a>
							</div>
							<div class="product_info">
								<div class="product_name title_h4">
									<a href="#">Floating Keychain</a>
								</div>
								<div class="product_link">
									<a href="#">View Now!</a>
								</div>
							</div>
						</div>
					</div><!-- Product -->


					<!-- Product -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="product_wrapper text-center">
							<div class="product_image">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="Product Image">
								</a>
							</div>
							<div class="product_info">
								<div class="product_name title_h4">
									<a href="#">Floating Keychain</a>
								</div>
								<div class="product_link">
									<a href="#">View Now!</a>
								</div>
							</div>
						</div>
					</div><!-- Product -->


					<!-- Product -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="product_wrapper text-center">
							<div class="product_image">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="Product Image">
								</a>
							</div>
							<div class="product_info">
								<div class="product_name title_h4">
									<a href="#">Floating Keychain</a>
								</div>
								<div class="product_link">
									<a href="#">View Now!</a>
								</div>
							</div>
						</div>
					</div><!-- Product -->


					<!-- Product -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="product_wrapper text-center">
							<div class="product_image">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="Product Image">
								</a>
							</div>
							<div class="product_info">
								<div class="product_name title_h4">
									<a href="#">Floating Keychain</a>
								</div>
								<div class="product_link">
									<a href="#">View Now!</a>
								</div>
							</div>
						</div>
					</div><!-- Product -->

					
					<!-- Product -->
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="product_wrapper text-center">
							<div class="product_image">
								<a href="#">
									<img src="<?php echo get_template_directory_uri(); ?>/img/cat_icon.png" class="img-responsive" alt="Product Image">
								</a>
							</div>
							<div class="product_info">
								<div class="product_name title_h4">
									<a href="#">Floating Keychain</a>
								</div>
								<div class="product_link">
									<a href="#">View Now!</a>
								</div>
							</div>
						</div>
					</div><!-- Product -->

				</div>
			</div>
		</div>
	</section><!-- /new_products -->

	<?php 
		$enable_aboutus = get_field('about_items_switcher');
		$about_section_title = get_field('section_title');
		$about_items = get_field('about_items');
	?>

	<?php if ($enable_aboutus): ?>

	<!-- about_us -->
	<section id="about_us">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h2 class="section_title"><?php echo $about_section_title; ?></h2>
				</div>
			</div>
			<div class="row">
				<?php $counter =0; ?>
				<?php if ($about_items): foreach ($about_items as $about_item): 	  
					++$counter; if($counter == 3) { 

					$border_none = 'border_right_none';
					$clearfixdiv = '<div class="clearfix"></div>';
					$counter = 0;
				  } else { $lastcolum = '';$clearfixdiv = '';}

					?>
				<div class="col-md-4 col-sm-4 col-xs-12">
					<div class="about_content border_right <?php echo $border_none; ?>">

						<div class="calltoaction_item">
							<div class="calltoaction_icon">
								<span class="<?php echo $about_item['about_call_to_action_icon']; ?>"></span>
							</div>
							<div class="calltoaction_content text-uppercase">
								<p><span class="site_color"><?php echo $about_item['about_call_to_action_title']; ?></span>
								    <div class="site_color_none"><?php echo $about_item['about_call_to_action_sub_title']; ?></div>
								</p>
							</div>
						</div>

							<h3><?php echo $about_item['about_item_title']; ?></h3>
							<p><?php echo $about_item['about_item_content']; ?></p>
					</div>	
				</div>
				<?php echo $clearfixdiv;  endforeach; endif; ?>
			</div>
		</div>
	</section><!-- /aboutcontent -->
	<?php endif; ?>

	<!-- newslatter -->
	<section id="newslatter" class="blue_bg padding_top_0 padding_bottom_0">
		<div class="container">
			<div class="row">
				<div class="col-md-9">
					<div class="subcribe">
						<div class="col-md-5">
							<p><span class="text-uppercase">subcribe</span> to our newslatter</p>
						</div>
						<div class="col-md-7">
							<div class="newslatter">
								<div class="input-group">
							      	<input type="text" class="form-control" placeholder="Search for...">
							      	<span class="input-group-btn">
							        <button class="btn btn-default" type="button">Go!</button>
							      	</span>
							    </div><!-- /input-group -->
						    </div>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 ltblue-bg" id="footerCatalogWrap">
					<div class="footerCatalog">
						<a href="#">
							<div class="header-six">Request <span class="uppercase">Free</span></div>
							<div class="header-three">Simple</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section><!-- /aboutcontent -->

<?php
get_footer();

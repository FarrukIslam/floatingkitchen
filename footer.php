<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package floatingkitchen
 */

?>

	</div><!-- #content -->

<?php 
		$enable_aboutus = get_field('about_items_switcher','options');
		$about_section_title = get_field('section_title','options');
		$about_items = get_field('about_items','options');
	?>

	<?php if ($enable_aboutus): ?>

	<!-- about_us -->
	<section id="about_us" class="top_shadow">
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
							        <button class="btn btn-default subcriber_btn" type="button">Go!</button>
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
		
	<!-- footer -->
	<footer id="footer" class="pading_top_60 padding_bottom_60">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-12">
					<div class="row">
						<div class="footer_logo">
							<?php 
							$footer_logo = get_field('footer_logo','options');
							if ($footer_logo): ?>
								<img src="<?php echo $footer_logo; ?>" class="img-responsive">
							<?php else : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive">
							<?php endif; ?>
						</div>
						<?php dynamic_sidebar( 'footer_widgets' ); ?>
					</div>
					
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="footer_right">
						<div class="aboutcontent_items padding_top_60">
							<?php 
							$about_items = get_field('about_items','options');
							if ($about_items): foreach ($about_items as $about_item): ?>
							<div class="calltoaction_item padding_top_15">
								<div class="calltoaction_icon">
									<span class="<?php echo $about_item['about_call_to_action_icon']; ?>"></span>
								</div>
								<div class="calltoaction_content text-uppercase">
									<p><span class="site_color"><?php echo $about_item['about_call_to_action_title']; ?></span>
									    <div class="site_color_none"><?php echo $about_item['about_call_to_action_sub_title']; ?></div>
									</p>
								</div>
							</div>
							<?php endforeach; endif; ?>
						</div>

						<div class="footer_righ">
							<div class="have_question site_color">
								<?php 
									$footer_right_text = get_field('footer_right_text','options');
									if ($footer_right_text): ?>
										<?php echo $footer_right_text; ?>
									<?php else : ?>
										<h3>Have Questions? Talk to an Expert todayCall 844-768-0560 <a href="#">Emailus</a></h3>
								<?php endif; ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer><!-- /footer -->
	<?php wp_footer(); ?>
	</body>
</html>
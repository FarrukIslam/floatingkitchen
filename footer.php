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

	

		<!-- footer -->
		<footer id="footer" class="pading_top_60 padding_bottom_60">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-xs-12">
						<div class="row">
							<div class="footer_logo">
								<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive">
							</div>
							<?php dynamic_sidebar( 'footer_widgets' ); ?>
						</div>
						
					</div>
					<div class="col-md-7 col-sm-7 col-xs-12">
						<div class="footer_right">
							<div class="aboutcontent_items padding_top_60">
								<?php 
								$about_items = get_field('about_items');
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
									<h3>Have Questions? Talk to an Expert todayCall 844-768-0560 <a href="#">Emailus</a></h3>
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
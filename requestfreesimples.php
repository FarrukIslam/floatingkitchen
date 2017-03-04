<?php
/* Template Name: Request Free Simples */
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



	<div id="primary" class="container padding_bottom_60 padding_top_60">
		<main id="main" class="site-main" role="main">
			<div class="container">
			        <div class="row">
			            <div class="col-sm-12 col-lg-12">
			            	<h1>Contact us <small>Request a Free Simple</small></h1>
			            </div>
			        </div>
			    </div>
			<div class="container">
			    <div class="row">
			        <div class="col-md-12">
			            <div style="padding: 45px 45px;" class="well well-sm">

			                <?php echo do_shortcode('[contact-form-7 id="198" title="Request Free Samples"]'); ?>

			            </div>
			        </div>
			    </div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();

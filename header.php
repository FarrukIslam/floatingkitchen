<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package floatingkitchen
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header class="header_container">
			<!-- <div class="header_topbar blue_bg"></div> -->
			<!-- top_bar -->
			<div class="top_bar">
				<div class="container">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<ul class="top_bar_right list-inline text-right">
								<li><span>Talk to an expart today </span>
									<a href="tel:+800-555-5555">
										<span class="site_deep_color">800-555-5555</span>
									</a></li>
								<li><a href="#"><span class="icon-chat"></span>Chat Now</a></li>
								<li><a href="#" >Help Center</a></li>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- /top_bar -->

			<!-- header -->
			<div class="header">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-12">
							<div class="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="img-responsive" alt="Logo"></a>
							</div>
						</div>
						<div class="col-md-5 col-sm-5 hidden-xs">
							<div class="search_bar_header">
				<!-- 				<div class="input-group">
								    <div class="input-group-btn">
								        <button type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">All <span class="caret"></span>
								        </button>
								        <ul class="dropdown-menu">
								            <li><a href="#">Action</a>
								            </li>
								            <li><a href="#">Another action</a>
								            </li>
								            <li><a href="#">Something else here</a>
								            </li>
								            <li role="separator" class="divider"></li>
								            <li><a href="#">Separated link</a>
								            </li>
								        </ul>        
								    </div>
								 
								    <input type="text" class="form-control" aria-label="...">

								</div> -->
								<!-- /input-group -->    
								    <?php 
						    if( class_exists('WP_Advanced_Search') ) {
						        $search = new WP_Advanced_Search('escaperoom_search');
						        $search->the_form();
						    } else {
						        echo '<h3> WP Advanced Search PLugin is inactive </h3>';
						    }
						?>   

							
							</div>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 padding_0">
							<ul class="header_right list-inline pull-right">
								<li class="singin_register">
									<a href="#">Sing In</a> Or <a href="#">Register<br> your account</a>
								</li>
								<!-- <li class="header_wishlist">
									<a href="#"><span class="ion_heart">0</span></a>
								</li> -->
									
								<li>
									<div class="shopping_cart blue_grad text-right">
										<div class="cart_toggler">
											<a class="ajaxify_cart" href="<?php echo wc_get_cart_url(); ?>" class="cart_toggler" title="<?php _e( 'View your shopping cart' ); ?>" >
												<div class="mini_cart">
												<span class="icon-cart"></span>Cart 
												<span class="cart_quantity"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?></span>
												</div>
											</a>
											<div class="header_shopping_cart_content"></div>
										</div>
									</div>
								</li>
							</ul>
							
						</div>
					</div>
					<div class="row mobile_search">
						<div class="hidden-lg hidden-md hidden-sm col-xs-12">
							<div class="search_bar">
								<input type="search" name="search" id="search" placeholder="Search Products" class="form-control">
							</div>
						</div>
						<?php 
						    if( class_exists('WP_Advanced_Search') ) {
						        $search = new WP_Advanced_Search('floatingkitchen_search');
						        $search->the_form();
						    } else {
						        echo '<h3> WP Advanced Search PLugin is inactive </h3>';
						    }
						?>                   
					</div>
				</div>
			</div>
			<!-- /header -->

			<!-- Navbar -->
			<div class="navbar navbar-default primary_menu blue_bg">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#primary_nav">
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						  <span class="icon-bar"></span>
						</button>
					</div>
			
					<div class="collapse navbar-collapse" id="primary_nav">
			



			<ul class="all_categories blue_grad list-inline pull-left categories_lists">
				<li class="dropdown">
		            <a class="dropdown-toggle icon-Menu btn btn-primary" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" data-target="#" >Shop <strong>All Products</strong></a>

		    		<ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu">

					<?php 
						$cats = get_terms('product_cat', array('hide_empty' => 0, 'orderby' => 'ASC',  'parent' =>0));
						foreach($cats as $cat) :
						$sub_cats = get_terms(array('parent' => $cat->term_id, 'taxonomy' => 'product_cat'));
						$class = count($sub_cats) > 0 ? 'angle-right' : ''; 
					?>
						<li class="dropdown-submenu <?php echo $class; ?>">
							<a href="<?php echo get_term_link( $cat->slug, $cat->taxonomy ); ?>"><?php echo $cat->name; ?></a>
							<?php if ($sub_cats) : ?>
							<!-- <ul class="dropdown-menu">
							<?php foreach ($sub_cats as $sub_cat): ?>
								<li>
									<a href="<?php echo get_term_link( $sub_cat->slug, $sub_cat->taxonomy ); ?>"><?php echo $sub_cat->name; ?></a>
									<?php 
										$sub_sub_cats = get_terms(array('parent' => $sub_cat->term_id, 'taxonomy' => 'product_cat'));
										if($sub_sub_cats) : ?>
										<ul class="dropdown-menu">
										<?php foreach ($sub_sub_cats as $sub_sub_cat) : ?>
											<li>
												<a href="<?php echo get_term_link( $sub_sub_cat->slug, $sub_sub_cat->taxonomy );?>"><?php echo $sub_sub_cat->name; ?></a>
											</li>
										<?php endforeach; ?>
										</ul>
									<?php endif; ?>
								</li>
							<?php endforeach; ?>  
							</ul> -->
						<?php endif; ?>
						</li>
					<?php endforeach; ?>
		            </ul>
		        </li>
		     
			</ul><!-- /categories -->







						<?php wp_nav_menu( 
								array(
								'menu'               => 'primary_menu',
								'theme_location'	 => 'primary_menu',
								'depth'				 => 2,
								'container'			 => 'false',
								'menu_class' 		 => 'nav navbar-nav',
								'menu_id' 			 => '',
								'fallback_cb'        => 'wp_bootstrap_navwalker::fallback',
								'walker' 			 => new wp_bootstrap_navwalker()
								) 
							); 
						?>
					</div><!-- /collapse -->
				</div><!-- /container-fluid -->
			</div><!--/ Navbar -->
	
		</header>
		<!-- /header -->
		<div id="content" class="site-content bottom_shadow padding_bottom_60">


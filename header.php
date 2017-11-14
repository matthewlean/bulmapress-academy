<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="is-fullheight">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<!-- Javascript -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="site">
		<?php bulmapress_skip_link_screen_reader_text(); ?>
		<header id="header" class="hero">
			<div class="hero-head">
				<div class="container">
					<nav id="site-navigation" class="nav main-navigation" role="navigation">
						<div class="nav-left">
							<a href="http://new.locksmiths-training.co.uk/">
							<figure class="image nav-logo">
  								<img src="<?php $custom_logo_id = get_theme_mod( 'custom_logo' );
								$image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
								echo $image[0]; ?>">
							</figure>
							</a>
							<!-- <?php bulmapress_home_link('nav-item is-brand'); ?>
							<?php bulmapress_blog_description('nav-item is-muted'); ?> -->
						</div>
						<?php bulmapress_menu_toggle(); ?>
						<?php bulmapress_navigation(); ?>
					</nav><!-- #site-navigation -->
				</div><!-- .container -->
			</div><!-- .hero-head -->
		</header><!-- .hero -->

		<div id="content" class="site-content">

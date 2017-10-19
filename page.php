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
 * @package Bulmapress
 */

get_header(); ?>

	<!-- Header image -->
	<!-- If post has featured image post, if not don't" -->
	<?php if ( has_post_thumbnail() ) : ?>
		<section class="hero is-large">
	  <div class="hero-body" style="background-image:url(<?php the_post_thumbnail_url(); ?>); background-size: cover;
	    background-repeat: no-repeat;">
	  </div>
	</section>
	<?php else : ?>
		<?php ; ?>
	<?php endif; ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content' ); ?>
			<?php bulmapress_get_comments(); ?>
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

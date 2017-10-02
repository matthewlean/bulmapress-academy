<?php
/**
 * Template name: blogHome
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Scops_UX
 */
?>

<?php get_header(); ?>

<div id="primary" class="content-area landing">
	<main id="main" class="site-main" role="main">
		<section class="main-header hero home is-medium" style="background-image:url(<?php the_post_thumbnail_url(); ?>); background-size: cover;
    background-repeat: no-repeat;" />
		  <div class="hero-body">
		    <div class="container">
		      <h1 class="title is-center">
						Keytek Academy Blog
			     </h1>
		    </div>
		  </div>
		</section>

		<?php

		bulmapress_custom_query(array(
			'post_type' => 'post',
			'post_class'	=> 'courses',
			'section_title' => 'Recent Posts',
			'section_columns' => 5,
			'section_max_posts' => 10,
			'section_button_text' => 'See all Posts'
			)
		);
		?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

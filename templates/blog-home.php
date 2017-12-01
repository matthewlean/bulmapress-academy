<?php
/**
 * Template name: blog-home
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
		<div class="hero-foot">
    <div class="container">
    	<nav class="tabs is-boxed" role="navigation">
     		<?php bulmapress_sub_navigation(); ?>
    	</nav>
    </div>
    </div>

		<!-- Editable Top Wordpress Content -->
		<section class="hero">
		<div class="hero-body">
			<div class="secondaryPage-container">
				<div id="primary" class="content-area">
					<main id="main" class="site-main wrapper post has-text-centered" role="main">
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'template-parts/content-secondaryPage' ); ?>
							<?php bulmapress_get_comments(); ?>
						<?php endwhile; ?>
					</main><!-- #main -->
				</div><!-- #primary -->
			</div>
		</div>
		</section>

		<?php

		bulmapress_custom_query(array(
			'post_type' => 'post',
			'post_class'	=> 'courses',
			'section_title' => 'Locksmith News',
			'section_columns' => 3,
			'section_max_posts' => 12,
			)
		);

		?>

	</main><!-- #main -->
</div><!-- #primary -->

<!-- Custom hero -->
<?php get_template_part('template-parts/custom-hero'); ?>

<!-- Sectiondary Text Section -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main wrapper content" role="main">
				<?php the_field('secondary_text'); ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

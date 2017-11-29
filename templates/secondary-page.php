<?php
/**
 * Template name: secondary-page
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
	<main id="main" class="site-main angled-header" role="main">
		<section class="main-header hero home is-info is-medium" style="background-image: url( <?php the_post_thumbnail_url(); ?>); background-size: cover;
    background-repeat: no-repeat;" />
		  <div class="hero-body">
				<div class="container">
					<div class="columns">
					  <div style="display:flex;justify-content:center;align-items:center;" class="column is-half">
								<?php bulmapress_the_title('is-1', FALSE); ?>
					  </div>
					  <div class="column is-half post">
							<div style="color:#fff;"><?php the_field('header-right-section'); ?></div>
					  </div>
					</div>
		  </div>
		</section>

		<!-- Subnav -->
		<div class="hero-foot">
    <div class="container">
    	<nav class="tabs is-boxed" role="navigation">
     		<?php bulmapress_sub_navigation(); ?>
    	</nav>
    </div>
    </div>
	</main>
</div>

<!-- Editable Top Wordpress Content -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main wrapper" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content-secondaryPage' ); ?>
				<?php endwhile; ?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

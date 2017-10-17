<?php
/**
 * Template name: Course
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
		<section class="main-header hero home is-medium" style="background-image: url( <?php header_image(); ?>); background-size: cover;
    background-repeat: no-repeat;" />
		  <div class="hero-body">
		    <div class="container">
		      <h1 class="title">
						Locksmith Training
			     </h1>
		      <h2 class="subtitle">
			        securing your future
			     </h2>
					 <a class="button is-dark is-large" href="/">
                <span>
                  <strong>Learn More</strong>
                </span>
            </a>
						<a class="button is-light is-large" href="/">
                 <span>
                   <strong>Apply Now <i class="fa fa-check-circle-o fa-3x" aria-hidden="true"></i></strong>
                 </span>
             </a>
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

<section class="hero">
<div class="hero-body">
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main wrapper" role="main">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'template-parts/content-course' ); ?>
					<?php bulmapress_get_comments(); ?>
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

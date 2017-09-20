<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Bulmapress
 */

get_header(); ?>

<section class="hero is-medium">
  <div class="hero-body" style="background-image:url(<?php the_post_thumbnail_url(); ?>)">
    <div class="container">
			<div class="tile is-center card-content card has-text-centered">
			<article class="tile is-child is-primary">
				<p class="subtitle">
					<?php if ( is_single() ) : ?>
						<?php bulmapress_the_title('is-2', false); ?>
					<?php else : ?>
						<?php bulmapress_the_title('is-3'); ?>
					<?php endif; ?>

					<?php if ( 'post' === get_post_type() ) : ?>
						<div class="subtitle is-6">
							<?php bulmapress_posted_on(); ?>
						</div><!-- .entry-meta -->
					<?php endif; ?>
				</p>
			</article>
		</div>
    </div>
  </div>
</section>

<div id="primary" class="content-area">
	<main id="main" class="site-main wrapper" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'template-parts/content', 'post' ); ?>
			<div class="section">
				<div class="container is-narrow">
					<?php the_post_navigation();?>
				</div>
			</div>
			<?php bulmapress_get_comments(); ?>
		<?php endwhile; ?>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

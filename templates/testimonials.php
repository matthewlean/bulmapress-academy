<?php
/**
 * Template name: testimonials
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
						<!-- Right Section if ever needed -->
						<div class="column is-half post">
							<!-- <div style="color:#fff;"><?php the_field('header-right-section'); ?></div> -->
						</div>
					</div>
				</div>
		  </div>
			<!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
				<polygon fill="white" points="0,100 100,0 100,100"/>
			</svg> -->
		</section>
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

<!-- All testimonials -->
<!-- Testimonial 1 -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<div class="box">
		  <article class="media">
		    <div class="media-left">
		      <figure class="image is-64x64">
		        <img src="<?php the_field('engineer-image-1'); ?>"></img>
		      </figure>
		    </div>
		    <div class="media-content">
		      <div class="content">
		        <p>
		          <strong><?php the_field('engineer-name-1'); ?></strong>
		          <br>
		          <?php the_field('engineer-review-1'); ?>
		        </p>
		      </div>
		    </div>
		  </article>
		</div>
		</div>
	</div>
</div>
</section>
<!-- Testimonial 2 -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<div class="box">
		  <article class="media">
		    <div class="media-left">
		      <figure class="image is-64x64">
		        <img src="<?php the_field('engineer-image-2'); ?>"></img>
		      </figure>
		    </div>
		    <div class="media-content">
		      <div class="content">
		        <p>
		          <strong><?php the_field('engineer-name-2'); ?></strong>
		          <br>
		          <?php the_field('engineer-review-2'); ?>
		        </p>
		      </div>
		    </div>
		  </article>
		</div>
		</div>
	</div>
</div>
</section>
<!-- Testimonial 3 -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<div class="box">
		  <article class="media">
		    <div class="media-left">
		      <figure class="image is-64x64">
		        <img src="<?php the_field('engineer-image-3'); ?>"></img>
		      </figure>
		    </div>
		    <div class="media-content">
		      <div class="content">
		        <p>
		          <strong><?php the_field('engineer-name-3'); ?></strong>
		          <br>
		          <?php the_field('engineer-review-3'); ?>
		        </p>
		      </div>
		    </div>
		  </article>
		</div>
		</div>
	</div>
</div>
</section>
<!-- Testimonial 4 -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<div class="box">
		  <article class="media">
		    <div class="media-left">
		      <figure class="image is-64x64">
		        <img src="<?php the_field('engineer-image-4'); ?>"></img>
		      </figure>
		    </div>
		    <div class="media-content">
		      <div class="content">
		        <p>
		          <strong><?php the_field('engineer-name-4'); ?></strong>
		          <br>
		          <?php the_field('engineer-review-4'); ?>
		        </p>
		      </div>
		    </div>
		  </article>
		</div>
		</div>
	</div>
</div>
</section>
<!-- Testimonial 5 -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<div class="box">
		  <article class="media">
		    <div class="media-left">
		      <figure class="image is-64x64">
		        <img src="<?php the_field('engineer-image-5'); ?>"></img>
		      </figure>
		    </div>
		    <div class="media-content">
		      <div class="content">
		        <p>
		          <strong><?php the_field('engineer-name-5'); ?></strong>
		          <br>
		          <?php the_field('engineer-review-5'); ?>
		        </p>
		      </div>
		    </div>
		  </article>
		</div>
		</div>
	</div>
</div>
</section>
<!-- Testimonial 6 -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<div class="box">
		  <article class="media">
		    <div class="media-left">
		      <figure class="image is-64x64">
		        <img src="<?php the_field('engineer-image-6'); ?>"></img>
		      </figure>
		    </div>
		    <div class="media-content">
		      <div class="content">
		        <p>
		          <strong><?php the_field('engineer-name-6'); ?></strong>
		          <br>
		          <?php the_field('engineer-review-6'); ?>
		        </p>
		      </div>
		    </div>
		  </article>
		</div>
		</div>
	</div>
</div>
</section>
<!-- Testimonial 7 -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<div class="box">
		  <article class="media">
		    <div class="media-left">
		      <figure class="image is-64x64">
		        <img src="<?php the_field('engineer-image-7'); ?>"></img>
		      </figure>
		    </div>
		    <div class="media-content">
		      <div class="content">
		        <p>
		          <strong><?php the_field('engineer-name-7'); ?></strong>
		          <br>
		          <?php the_field('engineer-review-7'); ?>
		        </p>
		      </div>
		    </div>
		  </article>
		</div>
		</div>
	</div>
</div>
</section>
<!-- Testimonial 8 -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<div class="box">
		  <article class="media">
		    <div class="media-left">
		      <figure class="image is-64x64">
		        <img src="<?php the_field('engineer-image-8'); ?>"></img>
		      </figure>
		    </div>
		    <div class="media-content">
		      <div class="content">
		        <p>
		          <strong><?php the_field('engineer-name-8'); ?></strong>
		          <br>
		          <?php the_field('engineer-review-8'); ?>
		        </p>
		      </div>
		    </div>
		  </article>
		</div>
		</div>
	</div>
</div>
</section>
<!-- Testimonial 9 -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<div class="box">
		  <article class="media">
		    <div class="media-left">
		      <figure class="image is-64x64">
		        <img src="<?php the_field('engineer-image-9'); ?>"></img>
		      </figure>
		    </div>
		    <div class="media-content">
		      <div class="content">
		        <p>
		          <strong><?php the_field('engineer-name-9'); ?></strong>
		          <br>
		          <?php the_field('engineer-review-9'); ?>
		        </p>
		      </div>
		    </div>
		  </article>
		</div>
		</div>
	</div>
</div>
</section>
<!-- Testimonial 10 -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<div class="box">
		  <article class="media">
		    <div class="media-left">
		      <figure class="image is-64x64">
		        <img src="<?php the_field('engineer-image-10'); ?>"></img>
		      </figure>
		    </div>
		    <div class="media-content">
		      <div class="content">
		        <p>
		          <strong><?php the_field('engineer-name-10'); ?></strong>
		          <br>
		          <?php the_field('engineer-review-10'); ?>
		        </p>
		      </div>
		    </div>
		  </article>
		</div>
		</div>
	</div>
</div>
</section>

<!-- Secondary Text Section -->
<section class="hero">
<div class="hero-body">
	<div class="secondaryPage-container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main wrapper post has-text-centered" role="main">
				<p class="has-text-centered">
					<?php the_field('secondary_text'); ?>
				</p>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div>
</div>
</section>

		</div><!-- #primary -->
	</div>
</div>
</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

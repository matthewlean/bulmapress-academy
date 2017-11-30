<?php
/**
 * Template name: course-page
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
		<section class="main-header hero home is-medium" style="background-image: url( <?php the_post_thumbnail_url(); ?>); background-size: cover;
    background-repeat: no-repeat;" />
		  <div class="hero-body">
				<div class="container">
				<div class="columns">
				  <div class="column is-half">
						<h1 class="title">
							<?php bulmapress_the_title('is-1', FALSE); ?>
				     </h1>
			      <h2 class="subtitle">
				        <?php the_field('subtitle'); ?>
				     </h2>
						 <p class="has-text-white has-text-weight-bold is-size-4 pad-bot-20">
							 <?php the_field('header-paragraph'); ?>
						</p>
							<a class="button is-white is-inverted is-outlined is-large m-b-10" href="/contact-us">Apply Now</a>
							<a class="button is-green-fill is-large" href="tel:01202711195">Call for more info <br> <i class="fa fa-phone" aria-hidden="true"></i></a>
							<a class="button is-info is-large" href="https://www.keytek.co.uk/about-keytek-locksmiths/locksmith-careers/">Work with Keytek™</a>
				  </div>
				  <div class="column is-half is-video-header">
						<?php the_field('header-video'); ?>
				  </div>
				</div>
			</div>
		  </div>
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none">
				<polygon fill="white" points="0,100 100,0 100,100"/>
			</svg>
		</section>
	</main>
</div>

<!-- Subnav -->
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
	<div class="container secondaryPage-container">
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

<!-- Callback Email Section -->
<?php get_template_part( 'template-parts/callback-email-section' ); ?>

<!-- Course Breakdown -->
<section class="hero">
	<div class="hero-body">
		<div class="container">
			<h1 class="title is-center">Course Breakdown</h1>
		</div>
	</div>

  <div id="who-is-this-guide-for" class="container m-b-40">
		<div class="columns">
			<!-- Course Breakdown 1 -->
		  <div class="column is-one-fifth has-text-centered is-one-fifth-mobile">
				<!-- Course SVG Icon -->
				<div class="picture column is-one-fifth has-text-centered">
					<img src="<?php the_field('course-breakdown-icon-1'); ?>" alt="<?php the_field('course-breakdown-title-1'); ?>">
				</div>
				<!-- Course Title -->
				<strong><?php the_field('course-breakdown-title-1'); ?></strong>
				<!-- Euro, Oval and Rim -->
				<p><?php the_field('course-breakdown-description-1'); ?></p>
			</div>

			<!-- Course Breakdown 2 -->
		  <div class="column is-one-fifth has-text-centered is-one-fifth-mobile">
				<!-- Course SVG Icon -->
				<div class="picture column is-one-fifth has-text-centered">
					<img src="<?php the_field('course-breakdown-icon-2'); ?>" alt="<?php the_field('course-breakdown-title-2'); ?>">
				</div>
				<!-- Course Title -->
				<strong><?php the_field('course-breakdown-title-2'); ?></strong>
				<!-- Euro, Oval and Rim -->
				<p><?php the_field('course-breakdown-description-2'); ?></p>
			</div>

			<!-- Course Breakdown 3 -->
		  <div class="column is-one-fifth has-text-centered is-one-fifth-mobile">
				<!-- Course SVG Icon -->
				<div class="picture column is-one-fifth has-text-centered">
					<img src="<?php the_field('course-breakdown-icon-3'); ?>" alt="<?php the_field('course-breakdown-title-3'); ?>">
				</div>
				<!-- Course Title -->
				<strong><?php the_field('course-breakdown-title-3'); ?></strong>
				<!-- Euro, Oval and Rim -->
				<p><?php the_field('course-breakdown-description-3'); ?></p>
			</div>

			<!-- Course Breakdown 4 -->
		  <div class="column is-one-fifth has-text-centered is-one-fifth-mobile">
				<!-- Course SVG Icon -->
				<div class="picture column is-one-fifth has-text-centered">
					<img src="<?php the_field('course-breakdown-icon-4'); ?>" alt="<?php the_field('course-breakdown-title-4'); ?>">
				</div>
				<!-- Course Title -->
				<strong><?php the_field('course-breakdown-title-4'); ?></strong>
				<!-- Euro, Oval and Rim -->
				<p><?php the_field('course-breakdown-description-4'); ?></p>
			</div>

			<!-- Course Breakdown 5 -->
		  <div class="column is-one-fifth has-text-centered is-one-fifth-mobile">
				<!-- Course SVG Icon -->
				<div class="picture column is-one-fifth has-text-centered">
					<img src="<?php the_field('course-breakdown-icon-5'); ?>" alt="<?php the_field('course-breakdown-title-5'); ?>">
				</div>
				<!-- Course Title -->
				<strong><?php the_field('course-breakdown-title-5'); ?></strong>
				<!-- Euro, Oval and Rim -->
				<p><?php the_field('course-breakdown-description-5'); ?></p>
			</div>
		</div>
	</div>
</section>

<!-- Quote Section -->
<?php get_template_part( 'template-parts/quote-section' ); ?>

<section class="hero">
<div class="hero-body">
	<div class="container secondaryPage-container" id="additional">
				<?php the_field('secondary_text'); ?>
				<!-- Google Maps Section -->
				<div class="google-maps m-t-40">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.653878715499!2d-1.9521893485264126!3d50.74490817941667!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4873a1514d6200c5%3A0xd94f650518a220a!2sKeytek+Locksmith+Training+Academy!5e0!3m2!1sen!2suk!4v1508423974149" width="400" height="70" frameborder="0" style="border:0" allowfullscreen=""></iframe>
				</div>
	</div>
</div>
</section>

<!-- Blog Section -->
<section id="recent-blogs" class="hero is-medium is-dark">
	<div>
	<div class="columns">
		<?php
		$args = array( 'numberposts' => 2 );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>
		<div class="column is-half section" id="custom-hero" style="background-image: url(<?php the_post_thumbnail_url();?>); background-size: cover;"; class="hero is-primary is-medium">
				<a href="<?php the_permalink(); ?>">
		    <div class="container notification is-dark p-10">
						<!-- <h1 class="title has-text-weight-bold is-size-5"> Recent Blog Post </h1> -->
			      <h1 class="title has-text-weight-bold is-size-3">
			        <?php the_title(); ?>
			      </h1>
						<h1 class="title has-text-weight-bold is-size-6"><?php the_date(); ?></h1>
		    </div>
				</a>
		</div>
		<?php endforeach; ?>
	</div>
</div>
</section>

<!-- MailChimp Section -->
<?php get_template_part( 'template-parts/mailchimp-section' ); ?>

</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

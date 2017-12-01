<?php
/**
 * Template name: course-home
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
				Keytek Academy Courses
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

		<section class="hero">
		<div class="hero-body">
			<div id="course-tiles" class="container">
				<div class="columns is-desktop">
					<!-- Course 1 -->
					<div class="column is-half-desktop">
						<article class="tile is-child notification is-dark col-1-border-t">
							<!-- Old Style for Top Course -->
							<!-- <p class="small green-highlighted-text">TOP COURSE<i class="fa fa-check" aria-hidden="true"></i></p> -->
							<h1 class="title has-text-weight-bold">8 Day - Level 4</h1>
							<p class="subtitle">‘Experience Package’</p>
							<div class="content">
								<p>
									Our Eight Day Course will provide you with a detailed understanding and practical application of locksmithing techniques. After you have completed the eight days you will be awarded a Level 4 Accreditation...
								</p>
							</div>
							<a class="button is-green is-inverted is-outlined is-medium" href="keytek-8-day-level-4-experience-package/">View</a>
						</article>
					</div>
					<!-- Course 2 -->
					<div class="column is-half-desktop">
				    <article class="tile is-child notification is-dark col-2-border-t">
							<!-- Top Course Icon -->
							<!-- <p class="small green-highlighted-text">TOP COURSE<i class="fa fa-check" aria-hidden="true"></i></p> -->
				      <p class="title has-text-weight-bold">5 Day - Level 4</p>
				      <p class="subtitle">‘The Complate Package’</p>
				      <div class="content">
				        <p>
									Our Five Day Course will provide you with a thorough and detailed understanding of locksmith techniques, as well as expose you to the practical elements of successful locksmithing. The Five Day Course will provide you with a Level 4 Accreditation...
								</p>
				      </div>
							<a class="button is-green is-inverted is-outlined is-medium" href="keytek-5-day-level-4-accredited-course">View</a>
				    </article>
				  </div>
				</div>
				<div class="columns is-desktop">
					<!-- Course 3 -->
				  <div class="column is-quater-desktop">
				    <article class="tile is-child notification is-dark col-3-border-t">
				      <p class="title has-text-weight-bold">2 Day</p>
				      <p class="subtitle">‘NDE & uPVC’</p>
				      <div class="content">
				        <p>
									The Keytek™ non-destructive entry and uPVC course covers all aspects of uPVC and wooden door lock identification and the correct tools to use, as well as bypassing and opening various types of doors and locks...
								</p>
				      </div>
							<a class="button is-green is-inverted is-outlined is-medium" href="keytek-two-day-non-destructive-entry-and-upvc-course">View</a>
				    </article>
				  </div>
					<!-- Course 4 -->
					<div class="column is-quater-desktop">
						<article class="tile is-child notification is-dark col-4-border-t">
							<p class="title has-text-weight-bold">Fitment Course</p>
							<p class="subtitle">‘Brush up Course’</p>
							<div class="content">
								<p>
									The ‘Keytek™ Fitment Course’ is aimed
									at locksmiths who perhaps wish to brush
									up on their fitting techniques.
									This course covers all aspects of lock fitting
									and encompasses a wide variety of locks.
								</p>
							</div>
							<a class="button is-green is-inverted is-outlined is-medium" href="keytek-1-day-fitment-course">View</a>
						</article>
					</div>
					<!-- Course 5 -->
					<div class="column is-quater-desktop">
						<article class="tile is-child notification is-dark col-4-border-t">
							<p class="title has-text-weight-bold">1 Day - uPVC</p>
							<p class="subtitle">‘uPVC  Insight Course’</p>
							<div class="content">
								<p>
									The Keytek™ One Day ‘uPVC Course’ is aimed at professionals who have experience as a locksmith on wooden doors but who have very little or no experience in uPVC. This course is also ideal for those already...
								</p>
							</div>
							<a class="button is-green is-inverted is-outlined is-medium" href="keytek-1-day-upvc-course">View</a>
						</article>
					</div>
					<!-- Course 6 -->
					<div class="column is-quater-desktop">
						<article class="tile is-child notification is-dark col-4-border-t">
							<p class="title has-text-weight-bold">1 Day - Non Destructive</p>
							<div class="content">
								<p>
									Being able to open a door quickly and without causing any damage is an essential locksmith skill, but it can be the confidence in the tools or processes that prevent many techniques being used on site...
								</p>
								<a class="button is-green is-inverted is-outlined is-medium" href="keytek-1-day-non-destructive-entry-course">View</a>
							</div>
						</article>
					</div>
				</div>
				<div class="tile is-ancestor">
				</div>
			</div>
		</div>
		</section>

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

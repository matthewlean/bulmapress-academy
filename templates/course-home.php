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

		<section class="hero">
		<div class="hero-body">
			<div class="container">
				<div class="tile is-ancestor">
					<!-- Course 1 -->
					<div class="tile is-parent is-6">
						<article class="tile is-child notification is-dark col-1-border-t">
							<h1 class="title has-text-weight-bold">8 Day - Level 4</h1>
							<p class="subtitle">‘Experience Package’</p>
							<div class="content">
								<p>
									This Eight Day Course will not only provide you with a
									comprehensive understanding and practical application
									of locksmith techniques, but on successful completion
									you will also be awarded a Level 4 NCFE Certificate in Locksmithing…
								</p>
							</div>
							<a class="button is-green is-inverted is-outlined is-medium" href="keytek-8-day-level-4-experience-package/">View</a>
						</article>
					</div>
					<!-- Course 2 -->
					<div class="tile is-parent is-6">
				    <article class="tile is-child notification is-dark col-2-border-t">
							<!-- <p class="small green-highlighted-text">TOP COURSE</p> -->
				      <p class="title has-text-weight-bold">5 Day - Level 4</p>
				      <p class="subtitle">‘The Complate Package’</p>
				      <div class="content">
				        <p>
									The Five Day Course will
									provide you with a
									comprehensive understanding
									and practical application of
									locksmith techniques..
								</p>
				      </div>
							<a class="button is-green is-inverted is-outlined is-medium" href="keytek-5-day-level-4-accredited-course">View</a>
				    </article>
				  </div>
				</div>
				<div class="tile is-ancestor">
					<!-- Course 3 -->
				  <div class="tile is-parent is-6">
				    <article class="tile is-child notification is-dark col-3-border-t">
				      <p class="title has-text-weight-bold">2 Day</p>
				      <p class="subtitle">‘NDE & uPVC’</p>
				      <div class="content">
				        <p>
									The Keytek™ non-destructive entry
									and uPVC course covers all aspects
									of uPVC and wooden door lock
									identification and the correct tools
									to use...
								</p>
				      </div>
							<a class="button is-green is-inverted is-outlined is-medium" href="keytek-two-day-non-destructive-entry-and-upvc-course">View</a>
				    </article>
				  </div>
					<!-- Course 4 -->
					<div class="tile is-parent is-6">
						<article class="tile is-child notification is-dark col-4-border-t">
							<p class="title has-text-weight-bold">Fitment Course</p>
							<p class="subtitle">‘Brush up Course’</p>
							<div class="content">
								<p>
									The Keytek™ non-destructive
									entry and uPVC course covers
									all aspects of uPVC and wooden
									door lock identification and the
									 correct tools to use, as well as...
								</p>
							</div>
							<a class="button is-green is-inverted is-outlined is-medium" href="keytek-1-day-non-destructive-entry-course">View</a>
						</article>
					</div>
				</div>
				<div class="tile is-ancestor">
					<!-- Course 5 -->
					<div class="tile is-parent is-6">
						<article class="tile is-child notification is-dark col-4-border-t">
							<p class="title has-text-weight-bold">1 Day - uPVC</p>
							<p class="subtitle">‘uPVC  Insight Course’</p>
							<div class="content">
								<p>
									The Five Day Course will
									provide you with a
									comprehensive understanding
									and practical application of
									locksmith techniques..
								</p>
							</div>
							<a class="button is-green is-inverted is-outlined is-medium" href="keytek-1-day-upvc-course">View</a>
						</article>
					</div>
					<!-- Course 6 -->
					<div class="tile is-parent is-6">
						<article class="tile is-child notification is-dark col-4-border-t">
							<p class="title has-text-weight-bold">1 Day - Non Destructive</p>
							<!-- <p class="subtitle">Subtitle</p> -->
							<div class="content">
								<p>
									Being able to open a door quickly
									and without causing any damage
									is an essential locksmith skill, but
									it can be the lack of confidence in the tools ..
								</p>
								<a class="button is-green is-inverted is-outlined is-medium" href="keytek-1-day-non-destructive-entry-course">View</a>
							</div>
						</article>
					</div>
				</div>
				</div>
			</div>
		</div>
		</section>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

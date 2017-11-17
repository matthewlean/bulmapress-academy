<?php
/**
 * Template name: meet-the-team
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
						<h1 class="title">
							<?php bulmapress_the_title('is-1', FALSE); ?>
				     </h1>
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

<!-- Team Section -->
<section id="the-team" class="hero">
	<div class="hero-body">
		<div class="container">
			<!-- Line One -->
			<div class="columns m-b-40 is-narrow">
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="https://www.keytek.co.uk/wp-content/uploads/2015/12/Locksmith-working-on-a-nightlatch-compressor.jpg"</img></div>
						<h2>Name Name</h2>
						<p>Job Title</p>
					</div>
				</div>
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="https://keytek.co.uk/wp-content/uploads/2015/12/Our-locksmiths-offer-a-wide-range-of-services-compressor.jpg"</img></div>
						<h2>Name Name</h2>
						<p>Job Title</p>
					</div>
				</div>
			</div>
			<!-- Line Two -->
			<div class="columns m-b-40">
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="https://3.basecamp-static.com/3443034/people/BAhpAyjHyA==--5c9f8a2fcc3818354fdbe94f412f0a8bec50bf33/avatar-130-x2"</img></div>
						<h2>Becki Hooper</h2>
						<p>Marketing Team Leader</p>
					</div>
				</div>
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="https://3.basecamp-static.com/3443034/people/BAhpAw8ezw==--c10311fe5cdca23085b45366cfca3aeb3c0f0a55/avatar-130-x2"</img></div>
						<h2>Matthew Lean</h2>
						<p>Marketing Executive</p>
					</div>
				</div>
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="https://3.basecamp-static.com/3443034/people/BAhpAyfHyA==--a059e02c61cb7e1fb9f5630da27aaec96f7a0a91/avatar-130-x2"</img></div>
						<h2>Kim Sanders</h2>
						<p>Man Kim</p>
					</div>
				</div>
			</div>

			<!-- Line Three -->
			<div class="columns m-b-40">
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="https://3.basecamp-static.com/3443034/people/BAhpA7rjTw==--6e591811787c483bff1e87a64cbe09f4778d7186/avatar-130-x2"</img></div>
						<h2>Tom Light</h2>
						<p>SEO Specialist</p>
					</div>
				</div>
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="https://3.basecamp-static.com/3443034/people/BAhpA1VmSQ==--c2b137f6a34737720908e35960cfbfde61a511d5/avatar-130-x2"</img></div>
						<h2>Wez Maynerd</h2>
						<p>Head of Creative</p>
					</div>
				</div>
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="https://3.basecamp-static.com/3443034/people/BAhpAyNySQ==--8f24852350ef207862690c0a3c0c5ff4edcdf882/avatar-130-x2"</img></div>
						<h2>Sam Osborne</h2>
						<p>Technical SEO Specialist</p>
					</div>
				</div>
			</div>

	 	</div>
	</div>
</section>

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

</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

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
						<div class="team-profile"><img src="<?php the_field('team-member-1-image'); ?>" /></img></div>
						<h2><strong><?php the_field('team-member-1-name'); ?></strong></h2>
						<p><h2><?php the_field('team-member-1-title'); ?></h2></p>
					</div>
				</div>

				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
							<div class="team-profile"><img src="<?php the_field('team-member-2-image'); ?>" /></img></div>
						<!-- Button for team member 2 -->
						<h2><strong><?php the_field('team-member-2-name'); ?></strong></h2>
						<p><h2><?php the_field('team-member-2-title'); ?></h2></p>
					</div>
				</div>
		</div>
			<!-- Line Two -->
			<div class="container">
			  <div class="notification is-center">
			    <h1 class="title"><strong>Trainers</strong></h1>
			  </div>
			</div>
			<div class="columns m-b-40 is-narrow">
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="<?php the_field('team-member-3-image'); ?>" /></img></div>
						<h2><strong><?php the_field('team-member-3-name'); ?></strong></h2>
						<p><h2><?php the_field('team-member-3-title'); ?></h2></p>
					</div>
				</div>
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="<?php the_field('team-member-4-image'); ?>" /></img></div>
						<h2><strong><?php the_field('team-member-4-name'); ?></strong></h2>
						<p><h2><?php the_field('team-member-4-title'); ?></h2></p>
					</div>
				</div>
			</div>
			<!-- Line Three -->
			<div class="container">
			  <div class="notification is-center">
			    <h1 class="title"><strong>Support Team</strong></h1>
			  </div>
			</div>
			<div class="columns m-b-40">
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="<?php the_field('team-member-5-image'); ?>" /></img></div>
						<h2><strong><?php the_field('team-member-5-name'); ?></strong></h2>
						<p><h2><?php the_field('team-member-5-title'); ?></h2></p>
					</div>
				</div>
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="<?php the_field('team-member-6-image'); ?>" /></img></div>
						<h2><strong><?php the_field('team-member-6-name'); ?></strong></h2>
						<p><h2><?php the_field('team-member-6-title'); ?></h2></p>
					</div>
				</div>
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="<?php the_field('team-member-7-image'); ?>" /></img></div>
						<h2><strong><?php the_field('team-member-7-name'); ?></strong></h2>
						<p><h2><?php the_field('team-member-7-title'); ?></h2></p>
					</div>
				</div>
			</div>
			<!-- Line Four -->
			<div class="container">
				<div class="notification is-center">
					<h1 class="title"><strong>Recruitment</strong></h1>
				</div>
			</div>
			<div class="columns m-b-40 is-narrow">
				<!-- Team Member -->
				<div class="column is-one-thirds-tablet is-quater-desktop">
					<div class="tile is-child has-text-centered">
						<div class="team-profile"><img src="<?php the_field('team-member-8-image'); ?>" /></img></div>
						<h2><strong><?php the_field('team-member-8-name'); ?></strong></h2>
						<p><h2><?php the_field('team-member-8-title'); ?></h2></p>
					</div>
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

</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

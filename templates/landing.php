<?php
/**
 * Template name: Landing
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
		    </div>
		  </div>
		</section>

		<?php

		// bulmapress_custom_query(array(
		// 	'post_type' => 'post',
		// 	'post_class'	=> 'courses',
		// 	'section_title' => 'Courses',
		// 	'section_columns' => 4,
		// 	'section_max_posts' => 7,
		// 	'section_button_text' => 'See all Posts'
		// 	)
		// );
		bulmapress_custom_query(array(
			'post_type' => 'page',
			'post_class'	=> 'pages',
			'section_title' => 'Recent Pages',
			'section_columns' => 4,
			'section_max_posts' => 4
			)
		);
		?>

<section class="hero is-large has-bg-img quote">
	<div class="hero-body">
		<div class="container has-text-centered">
			<div class="tile is-center card-content card">
				<article class="tile is-child notification is-primary">
          <p class="title">"The assessment was well worked out, a great deal of hard work and thought has obviously gone into putting then Assessment together."</p>
          <p class="subtitle">- Colin Preston</p>
        </article>
			</div>
	</div>
	</div>
</section>

<section class="hero is-medium">
  <div class="hero-body">
    <div class="container">
      <h1 class="title has-text-centered">
        Interested in becoming a locksmith?
      </h1>
			<p class="field has-text-centered">
		  <a class="button is-info is-outlined is-medium">
		    <span class="icon">
		      <i class="fa fa-sign-in"></i>
		    </span>
		    <span>Sign Up</span>
		  </a>
		  <a class="button is-success is-outlined is-medium">
		    <span class="icon">
		      <i class="fa fa-download"></i>
		    </span>
		    <span>Download our info pack</span>
		  </a>
    </div>
  </div>
</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>

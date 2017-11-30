<?php
/**
 * Recent blog Section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>

<!-- Blog Section -->
<section id="recent-blogs" class="hero is-medium is-dark">
	<div>
	<div class="columns">
		<?php
		$args = array( 'numberposts' => 1 );
		$lastposts = get_posts( $args );
		foreach($lastposts as $post) : setup_postdata($post); ?>
		<div class="column is-half" id="custom-hero" style="background-image: url(<?php the_post_thumbnail_url();?>); background-size: cover;"; class="hero is-primary is-medium">
      <div class="container notification is-dark-see-through p-10">
          <h1 class="title has-text-weight-bold is-size-5"> Recent Blog Post </h1>
      </div>
		</div>
    <div class="column is-half section hero">
      <a href="<?php the_permalink(); ?>">
		    <div class="container notification is-dark-see-through p-10">
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

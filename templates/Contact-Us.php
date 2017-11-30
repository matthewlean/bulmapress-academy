<?php
/**
 * Template name: contact-us
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

<section id="contact-form" class="hero hero-body">
	<div class="container">
		<div class="columns">
		  <div class="column is-half">
        <!-- Wordpress Content -->
				<script>
          (function($) {
          $(document).ajaxComplete(function() {
          setTimeout(
          function()
          {
          $('.wpcf7-response-output').slideUp('slow');
          // change this value to make the popup show for more or less time
          }, 4000);
          });
          })(jQuery);
        </script>
        <?php get_template_part('template-parts/simple-content'); ?>
			</div>
		  <div class="column is-half">
				<!-- Editable Top Wordpress Content -->
					<div>
						<?php the_field('secondary_text'); ?>
					</div>
			</div>
		</div>
	</div>
</section>

<!-- MailChimp Section -->
<?php get_template_part( 'template-parts/mailchimp-section' ); ?>

<?php get_sidebar(); ?>
<?php get_footer(); ?>

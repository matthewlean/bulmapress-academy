<?php
/**
 * Callback Email Section
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>

<!-- Newsletter Section -->
<section id="newsletter" class="hero is-neon-green">
  <div class="hero-body">
		<div class="container">
			<p class="is-center has-text-centered m-b-20">For more information on timings and to register<br> attendance, please contact us.</p>
		</div>
    <div class="container is-narrow">
      <!-- Begin MailChimp Signup Form -->
      <div class="columns is-vcentered">
        <div class="column is-one-third is-left is-center">
					<a class="button is-white is-inverted is-outlined is-large">01202 711 195</a>
        </div>

    <div class="column" id="callback-form">
			<div class="field">
        <!-- script to hide popups after a few seconds -->
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
          <?php echo do_shortcode( '[contact-form-7 id="576" title="Email Callback"]' ); ?>
			</div>
		</div>

    </div>
  </div>
	</div>
</section>

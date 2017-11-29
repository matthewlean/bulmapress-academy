<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bulmapress
 */
?>

</div><!-- #content -->

<footer id="colophon" class="site-footer hero" role="contentinfo">
	<div class="container">
		<div class="hero-body has-text-centered">
			<div class="site-info">
				<?php bulmapress_copyright_link(); ?>
				<p><a href="http://new.locksmiths-training.co.uk/privacy/">Privacy</a>-
					<a href="http://new.locksmiths-training.co.uk/site-map/">Sitemap</a>-
					<a href="http://new.locksmiths-training.co.uk/frequently-asked-questions/">FAQ</a>
				</p>
			</div><!-- .site-info -->
		</div>
	</div><!-- .container -->
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

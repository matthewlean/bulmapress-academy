<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Bulmapress
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('card'); ?>>
	<!-- Removed the header as it is being grabbed directly from the single.php page -->

	<!-- <?php if ( has_post_thumbnail() ): ?>
		<div class="card-image">
			<figure class="image is-16by9">
				<?php if ( is_single() ) : ?>
					<?php the_post_thumbnail(); ?>
				<?php else : ?>
					<?php the_post_thumbnail('widget'); ?>
				<?php endif; ?>
			</figure>
		</div>
	<?php endif; ?> -->


		<div class="content entry-content content-post">
		<?php if ( is_single() ) : ?>
			<?php the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'bulmapress' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bulmapress' ),
				'after'  => '</div>',
				) );
				?>
		<?php else : ?>
			<?php the_excerpt(); ?>
		<?php endif; ?>
		<div class="content entry-footer">
			<small><?php bulmapress_entry_footer(); ?></small>
		</div><!-- .entry-footer -->
	</div><!-- .entry-content -->
</div>

</article><!-- #post-## -->

<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ds-volvo
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="container">
		<?php the_title( '<h2 class="page-heading-title">', '</h2>' ); ?>
	</div>

	<div class="volvo1-inner-content">
		<div class="container">
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ds-volvo' ),
					'after'  => '</div>',
				) );
			?>

			<?php if ( get_edit_post_link() ) : ?>
				<div class="entry-footer">
					<?php
						edit_post_link(
							sprintf(
								wp_kses(
									/* translators: %s: Name of current post. Only visible to screen readers */
									__( 'Edit <span class="screen-reader-text">%s</span>', 'ds-volvo' ),
									array(
										'span' => array(
											'class' => array(),
										),
									)
								),
								get_the_title()
							),
							'<span class="edit-link">',
							'</span>'
						);
					?>
				</div><!-- .entry-footer -->
			<?php endif; ?>
		</div>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->

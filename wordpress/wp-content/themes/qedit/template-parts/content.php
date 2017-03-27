<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Qedit
 */

?>
<?php
	$post_classes = 'row padded';
	global $post_idx;
	if ($post_idx % 2 === 0) {
		$post_classes .= ' light-gray-bg';
	}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?> >
	<div class="col-sm-3 col-xs-12 image-container">
		<?php
			the_post_thumbnail( 'Latest Posts' );  
		?>
	</div>
	<div class="col-sm-9 col-xs-12 post-content">
		<header>
			<?php
			if ( is_single() ) :
				the_title( '<h5 class="entry-title">', '</h5>' );
			else :
				the_title( '<h5 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h5>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<?php qedit_posted_on(); ?>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			
			<?php
				// the_content( sprintf(
				// 	/* translators: %s: Name of current post. */
				// 	wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'qedit' ), array( 'span' => array( 'class' => array() ) ) ),
				// 	the_title( '<span class="screen-reader-text">"', '"</span>', false )
				// ) );
				if ( is_category() || is_archive() || is_home() ) {
				    the_excerpt();
				} else {
				    the_content( sprintf(
    					/* translators: %s: Name of current post. */
    					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'qedit' ), array( 'span' => array( 'class' => array() ) ) ),
    					the_title( '<span class="screen-reader-text">"', '"</span>', false )
    				) );
				}

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'qedit' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>
	

	

	<footer class="entry-footer">
		<?php qedit_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

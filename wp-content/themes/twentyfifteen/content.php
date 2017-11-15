<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
		// Post thumbnail.
		//twentyfifteen_post_thumbnail();
	?>

	<header class="entry-header">
		<?php
/*			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			endif;
		*/?>
	</header><!-- .entry-header -->

    <div class="container">
        <h2 class="text-center"><?php the_title() ?></h2>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <p><?php the_content() ?></p>
            </div>
        </div>
    </div>

	<?php
		// Author bio.
		/*if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;*/
	?>

	<footer class="entry-footer">
		<?php //twentyfifteen_entry_meta(); ?>
		<?php //edit_post_link( __( 'Edit', 'twentyfifteen' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->

</article><!-- #post-## -->

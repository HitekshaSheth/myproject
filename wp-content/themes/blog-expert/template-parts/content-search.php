<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Blog Expert
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header article-header text-center">
		<?php if ( 'post' === get_post_type() ) : ?>
			<div class="post-category ribbon alt-bgcolor primary-font mb-20">
				<span class="ribbon-span">
			   	 	<?php blog_expert_entry_category(); ?>
				</span>
			</div>
			<a href="<?php the_permalink(); ?>">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</a>
		<div class="entry-meta">
			<?php blog_expert_posted_details(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div><!-- .entry-summary -->

</article><!-- #post-## -->

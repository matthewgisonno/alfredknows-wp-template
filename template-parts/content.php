<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Alfred_Knows
 * @since Alfred Knows 1.0
 */

?>
<?php if ( is_single() ) { ?>
<div class="bg-white tailwind-css-content-block tailwind-css-article-post">
	<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 lg:py-24">
<?php } ?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php

	//get_template_part( 'template-parts/entry-header' );

	if ( ! is_search() ) {
		get_template_part( 'template-parts/featured-image' );
	}

	?>

	<div class="<?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

		<div class="entry-content">

			<?php
			if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
				the_excerpt();
			} else { ?>
			<?php if ( is_single() ) { ?>
				<h1 class="mt-2 block text-3xl text-center leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl"><?php single_post_title(); ?></h1>
				<!-- <div class="text-center">By <?php the_author_posts_link(); ?> on <?php the_time('F jS, Y'); ?>  in <?php the_category(', '); ?></div> -->
				<?php edit_post_link(__('{Edit}'), ''); ?>
			<?php } elseif ( is_category() ) { ?>
				<!-- <p class="text-sm text-gray-500"><?php the_time('F jS, Y'); ?></p> -->
				<p class="text-xl font-semibold text-gray-900 mt-2 block"><?php echo get_the_title(); ?></p>
			<?php } ?>
			<?php
				//if ( is_category() ) {
				//echo '<div class="mt-3 text-base text-gray-500">';
				
				//$content = preg_replace("/<img[^>]+\>/i", " ", get_the_content());
				
				//echo mb_strimwidth($content, 0, 300, '...');
				
				//echo '</div>';
				//echo '<div class="mt-3"><a href="' . get_the_permalink() . '">Read full story</a></div>';
				//} else {
					the_content( __( 'Read full story', 'alfredknows' ) );
				//}
			}
			?>

		</div><!-- .entry-content -->

	</div><!-- .post-inner -->

	<div class="section-inner">
		<?php
		wp_link_pages(
			array(
				'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'alfredknows' ) . '"><span class="label">' . __( 'Pages:', 'alfredknows' ) . '</span>',
				'after'       => '</nav>',
				'link_before' => '<span class="page-number">',
				'link_after'  => '</span>',
			)
		);

		edit_post_link();

		// Single bottom post meta.
		alfredknows_the_post_meta( get_the_ID(), 'single-bottom' );

		if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

			get_template_part( 'template-parts/entry-author-bio' );

		}
		?>

	</div><!-- .section-inner -->

	<?php

	if ( is_single() ) {

		get_template_part( 'template-parts/navigation' );

	}

	/**
	 *  Output comments wrapper if it's a post, or if comments are open,
	 * or if there's a comment number – and check for password.
	 * */
	if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
		?>

		<div class="comments-wrapper section-inner">

			<?php comments_template(); ?>

		</div><!-- .comments-wrapper -->

		<?php
	}
	?>

</article><!-- .post -->
<?php if ( is_single() ) { ?>
</div>
</div>
<?php } ?>
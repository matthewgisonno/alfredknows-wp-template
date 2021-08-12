<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Alfred_Knows
 * @since Alfred Knows 1.0
 */

get_header();
?>
<div class="bg-white tailwind-css-content-block tailwind-css-article-post">
	<div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8 lg:py-24">


<main id="site-content" role="main">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		global $wp_query;

		$archive_title = sprintf(
			'%1$s %2$s',
			'<span class="color-accent">' . __( 'Search:', 'alfredknows' ) . '</span>',
			'&ldquo;' . get_search_query() . '&rdquo;'
		);

		if ( $wp_query->found_posts ) {
			$archive_subtitle = sprintf(
				/* translators: %s: Number of search results. */
				_n(
					'We found %s result for your search.',
					'We found %s results for your search.',
					$wp_query->found_posts,
					'alfredknows'
				),
				number_format_i18n( $wp_query->found_posts )
			);
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'alfredknows' );
		}
	} elseif ( is_archive() && ! have_posts() ) {
		$archive_title = __( 'Nothing Found', 'alfredknows' );
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description();
	}

	if ( $archive_title || $archive_subtitle ) {
		?>

		<header class="archive-header header-footer-group">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) { ?>
					<h2 class="text-3xl tracking-tight text-center font-extrabold text-gray-900 sm:text-4xl"><?php echo wp_kses_post( $archive_title ); ?></h2>
				<?php } ?>

				<?php if ( $archive_subtitle ) { ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text">
						<div class="mt-3 sm:mt-4">
							<div class="text-xl text-center text-gray-500"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
						</div>
					</div>
				<?php } ?>

			</div><!-- .archive-header-inner -->
			
		</header><!-- .archive-header -->
		<div class="mt-3 pt-5">
		<?php
	}

	if ( have_posts() ) {

		$i = 0;

		while ( have_posts() ) {
			$i++;
			//if ( $i > 1 ) {
			//	echo '<div class="relative max-w-lg mx-auto my-8 border-t-2 h-1 border-gray-200 lg:max-w-7xl">&nbsp;</div>';
			//}
			echo '<div>';
			the_post();

			get_template_part( 'template-parts/content', get_post_type() );
			echo '</div>';

		}
	} elseif ( is_search() ) {
		?>

		<div class="no-search-results-form section-inner thin">

			<?php
			get_search_form(
				array(
					'label' => __( 'search again', 'alfredknows' ),
				)
			);
			?>

		</div><!-- .no-search-results -->

		<?php
	}
	?>
	</div>
	<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->

</div>
</div>
<?php
get_footer();

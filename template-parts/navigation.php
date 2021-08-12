<?php
/**
 * Displays the next and previous post navigation in single posts.
 *
 * @package WordPress
 * @subpackage Alfred_Knows
 * @since Alfred Knows 1.0
 */

$next_post = get_next_post();
$prev_post = get_previous_post();

if ( $next_post || $prev_post ) {

	$pagination_classes = '';

	if ( ! $next_post ) {
		$pagination_classes = ' only-one only-prev';
	} elseif ( ! $prev_post ) {
		$pagination_classes = ' only-one only-next';
	}

	?>



	<nav class="border-t border-gray-200 px-4 my-6 flex items-center justify-between sm:px-0<?php echo esc_attr( $pagination_classes ); ?>" aria-label="<?php esc_attr_e( 'Post', 'alfredknows' ); ?>" role="navigation">
		<?php if ( $prev_post ) { ?>
		<div class="-mt-px w-0 flex-1 flex">
			<a href="<?php echo esc_url( get_permalink( $prev_post->ID ) ); ?>" class="border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
				<!-- <span class="material-icons md-24">arrow_back_ios</span> -->
				<span class="material-icons md-24 mr-3">west</span>
				<?php echo wp_kses_post( get_the_title( $prev_post->ID ) ); ?>
			</a>
		</div>
		<?php } ?>
		<?php if ( $next_post ) { ?>
		<div class="-mt-px w-0 flex-1 flex justify-end">
			<a href="<?php echo esc_url( get_permalink( $next_post->ID ) ); ?>" class="border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300">
				<?php echo wp_kses_post( get_the_title( $next_post->ID ) ); ?>
				<span class="material-icons md-24 ml-3">east</span>
				<!-- <span class="material-icons md-24">arrow_forward_ios</span> -->
			</a>
		</div>
		<?php } ?>
	</nav>

	<?php
}

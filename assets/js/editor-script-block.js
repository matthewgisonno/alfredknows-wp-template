/**
 * Remove squared button style
 *
 * @since Alfred Knows 1.0
 */
/* global wp */
wp.domReady( function() {
	wp.blocks.unregisterBlockStyle( 'core/button', 'squared' );
} );

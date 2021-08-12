<?php
/**
 * Block Patterns
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern/
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @package WordPress
 * @subpackage Alfred_Knows
 * @since Alfred Knows 1.0
 */

/**
 * Register Block Pattern Category.
 */
if ( function_exists( 'register_block_pattern_category' ) ) {

	register_block_pattern_category(
		'alfredknows',
		array( 'label' => esc_html__( 'Alfred Knows', 'alfredknows' ) )
	);
}

/**
 * Register Block Patterns.
 */
if ( function_exists( 'register_block_pattern' ) ) {

	// Call to Action.
	register_block_pattern(
		'alfredknows/call-to-action',
		array(
			'title'         => esc_html__( 'Call to Action', 'alfredknows' ),
			'categories'    => array( 'alfredknows' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- wp:group {"align":"wide","style":{"color":{"background":"#ffffff"}}} -->',
					'<div class="wp-block-group alignwide has-background" style="background-color:#ffffff"><div class="wp-block-group__inner-container"><!-- wp:group -->',
					'<div class="wp-block-group"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'Support the Museum and Get Exclusive Offers', 'alfredknows' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"align":"center"} -->',
					'<p class="has-text-align-center">' . esc_html__( 'Members get access to exclusive exhibits and sales. Our memberships cost $99.99 and are billed annually.', 'alfredknows' ) . '</p>',
					'<!-- /wp:paragraph -->',
					'<!-- wp:button {"align":"center","className":"is-style-outline"} -->',
					'<div class="wp-block-button aligncenter is-style-outline"><a class="wp-block-button__link" href="#">' . esc_html__( 'Become a Member', 'alfredknows' ) . '</a></div>',
					'<!-- /wp:button --></div></div>',
					'<!-- /wp:group --></div></div>',
					'<!-- /wp:group -->',
				)
			),
		)
	);

	// Double Call to Action.
	register_block_pattern(
		'alfredknows/double-call-to-action',
		array(
			'title'         => esc_html__( 'Double Call to Action', 'alfredknows' ),
			'categories'    => array( 'alfredknows' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- wp:columns {"align":"wide"} -->',
					'<div class="wp-block-columns alignwide"><!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#ffffff"}}} -->',
					'<div class="wp-block-group has-background" style="background-color:#ffffff"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'The Museum', 'alfredknows' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"align":"center"} -->',
					'<p class="has-text-align-center">' . esc_html__( 'Award-winning exhibitions featuring internationally-renowned artists.', 'alfredknows' ) . '</p>',
					'<!-- /wp:paragraph -->',
					'<!-- wp:buttons {"align":"center"} -->',
					'<div class="wp-block-buttons aligncenter"><!-- wp:button {"className":"is-style-outline"} -->',
					'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Read More', 'alfredknows' ) . '</a></div>',
					'<!-- /wp:button --></div>',
					'<!-- /wp:buttons --></div></div>',
					'<!-- /wp:group --></div>',
					'<!-- /wp:column -->',
					'<!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:group {"style":{"color":{"background":"#ffffff"}}} -->',
					'<div class="wp-block-group has-background" style="background-color:#ffffff"><div class="wp-block-group__inner-container"><!-- wp:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'The Store', 'alfredknows' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"align":"center"} -->',
					'<p class="has-text-align-center">' . esc_html__( 'An awe-inspiring collection of books, prints, and gifts from our exhibitions.', 'alfredknows' ) . '</p>',
					'<!-- /wp:paragraph -->',
					'<!-- wp:buttons {"align":"center"} -->',
					'<div class="wp-block-buttons aligncenter"><!-- wp:button {"className":"is-style-outline"} -->',
					'<div class="wp-block-button is-style-outline"><a class="wp-block-button__link">' . esc_html__( 'Shop Now', 'alfredknows' ) . '</a></div>',
					'<!-- /wp:button --></div>',
					'<!-- /wp:buttons --></div></div>',
					'<!-- /wp:group --></div>',
					'<!-- /wp:column --></div>',
					'<!-- /wp:columns -->',
				)
			),
		)
	);

	// Event Details.
	register_block_pattern(
		'alfredknows/event-details',
		array(
			'title'         => esc_html__( 'Event Details', 'alfredknows' ),
			'categories'    => array( 'alfredknows' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- wp:group {"align":"wide","backgroundColor":"primary"} -->',
					'<div class="wp-block-group alignwide has-primary-background-color has-background"><div class="wp-block-group__inner-container"><!-- wp:columns -->',
					'<div class="wp-block-columns"><!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->',
					'<p class="has-text-align-center has-background-color has-text-color has-large-font-size">' . wp_kses_post( __( '<em>Dates</em><br>Aug 1 — Dec 1', 'alfredknows' ) ) . '</p>',
					'<!-- /wp:paragraph --></div>',
					'<!-- /wp:column -->',
					'<!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->',
					'<p class="has-text-align-center has-background-color has-text-color has-large-font-size">' . wp_kses_post( __( '<em>Location</em><br>Exhibit Hall B', 'alfredknows' ) ) . '</p>',
					'<!-- /wp:paragraph --></div>',
					'<!-- /wp:column -->',
					'<!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:paragraph {"align":"center","textColor":"background","fontSize":"large"} -->',
					'<p class="has-text-align-center has-background-color has-text-color has-large-font-size">' . wp_kses_post( __( '<em>Price</em><br>Included', 'alfredknows' ) ) . '</p>',
					'<!-- /wp:paragraph --></div>',
					'<!-- /wp:column --></div>',
					'<!-- /wp:columns --></div></div>',
					'<!-- /wp:group -->',
				)
			),
		)
	);

	// Featured Content.
	register_block_pattern(
		'alfredknows/featured-content',
		array(
			'title'         => esc_html__( 'Featured Content', 'alfredknows' ),
			'categories'    => array( 'alfredknows' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- wp:columns {"align":"wide"} -->',
					'<div class="wp-block-columns alignwide "><!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:image {"sizeSlug":"full"} -->',
					'<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/2020-three-quarters-1.png" alt="' . esc_attr__( 'Abstract Rectangles', 'alfredknows' ) . '"/></figure>',
					'<!-- /wp:image -->',
					'<!-- wp:heading -->',
					'<h2>' . esc_html__( 'Works and Days', 'alfredknows' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"fontSize":"larger"} -->',
					'<p class="has-larger-font-size">' . esc_html__( 'August 1 — December 1', 'alfredknows' ) . '</p>',
					'<!-- /wp:paragraph -->',
					'<!-- wp:button {"align":"left","className":"is-style-outline"} -->',
					'<div class="wp-block-button alignleft is-style-outline"><a class="wp-block-button__link" href="#">' . esc_html__( 'Read More', 'alfredknows' ) . '</a></div>',
					'<!-- /wp:button --></div>',
					'<!-- /wp:column -->',
					'<!-- wp:column -->',
					'<div class="wp-block-column"><!-- wp:image {sizeSlug":"full"} -->',
					'<figure class="wp-block-image size-full"><img src="' . esc_url( get_template_directory_uri() ) . '/assets/images/2020-three-quarters-2.png" alt="' . esc_attr__( 'Abstract Rectangles', 'alfredknows' ) . '"/></figure>',
					'<!-- /wp:image -->',
					'<!-- wp:heading -->',
					'<h2>' . esc_html__( 'The Life I Deserve', 'alfredknows' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"fontSize":"larger"} -->',
					'<p class="has-larger-font-size">' . esc_html__( 'August 1 — December 1', 'alfredknows' ) . '</p>',
					'<!-- /wp:paragraph -->',
					'<!-- wp:button {"align":"left","className":"is-style-outline"} -->',
					'<div class="wp-block-button alignleft is-style-outline"><a class="wp-block-button__link" href="#">' . esc_html__( 'Read More', 'alfredknows' ) . '</a></div>',
					'<!-- /wp:button --></div>',
					'<!-- /wp:column --></div>',
					'<!-- /wp:columns -->',
				)
			),
		)
	);

	// Introduction.
	register_block_pattern(
		'alfredknows/introduction',
		array(
			'title'         => esc_html__( 'Introduction', 'alfredknows' ),
			'categories'    => array( 'alfredknows' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- wp:heading {"align":"center"} -->',
					'<h2 class="has-text-align-center">' . esc_html__( 'The Premier Destination for Modern Art in Sweden', 'alfredknows' ) . '</h2>',
					'<!-- /wp:heading -->',
					'<!-- wp:paragraph {"dropCap":true} -->',
					'<p class="has-drop-cap">' . esc_html__( 'With seven floors of striking architecture, UMoMA shows exhibitions of international contemporary art, sometimes along with art historical retrospectives. Existential, political, and philosophical issues are intrinsic to our program. As visitor, you are invited to guided tours artist talks, lectures, film screenings, and other events with free admission.', 'alfredknows' ) . '</p>',
					'<!-- /wp:paragraph -->',
				)
			),
		)
	);

	// Full-Width-Color-Block.
	register_block_pattern(
		'alfredknows/full-width-color-block',
		array(
			'title'         => esc_html__( 'Full Width Color Block', 'alfredknows' ),
			'categories'    => array( 'alfredknows' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<!-- wp:columns {"align":"wide"} -->',
					'<div class="wp-block-columns alignwide full-width-color-block"><!-- wp:column -->',
					'<div class="wp-block-column">',
					'<!-- wp:paragraph {"fontSize":"larger"} -->',
					'<p class="has-larger-font-size">' . esc_html__( 'This is some default text, you should change it...', 'alfredknows' ) . '</p>',
					'<!-- /wp:paragraph --></div>',
					'<!-- /wp:column --></div>',
					'<!-- /wp:columns -->',
				)
			),
		)
	);

	// Check Marks Layout
	register_block_pattern(
		'alfredknows/check-marks-layout',
		array(
			'title'         => esc_html__( 'Check Mark Layout', 'alfredknows' ),
			'categories'    => array( 'alfredknows' ),
			'viewportWidth' => 1400,
			'content'       => implode(
				'',
				array(
					'<div class="grid grid-cols-3 gap-4">',
					'<div>',
					'<div class="flex flex-check-block">',
					'<div class="flex-initial mr-3">',
					'<span class="material-icons md-36">done</span>',
					'</div>',
					'<div class="flex-initial">',
					'<h4>' . esc_html__( 'This is a title', 'alfredknows' ) . '</h4>',
					'<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum.', 'alfredknows' ) . '</p>',
					'</div>',
					'</div>',
					'</div>',
					'<div>',
					'<div class="flex flex-check-block">',
					'<div class="flex-initial mr-3">',
					'<span class="material-icons md-36">done</span>',
					'</div>',
					'<div class="flex-initial">',
					'<h4>' . esc_html__( 'This is a title', 'alfredknows' ) . '</h4>',
					'<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum.', 'alfredknows' ) . '</p>',
					'</div>',
					'</div>',
					'</div>',
					'<div>',
					'<div class="flex flex-check-block">',
					'<div class="flex-initial mr-3">',
					'<span class="material-icons md-36">done</span>',
					'</div>',
					'<div class="flex-initial">',
					'<h4>' . esc_html__( 'This is a title', 'alfredknows' ) . '</h4>',
					'<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum.', 'alfredknows' ) . '</p>',
					'</div>',
					'</div>',
					'</div>',
					'<div>',
					'<div class="flex flex-check-block">',
					'<div class="flex-initial mr-3">',
					'<span class="material-icons md-36">done</span>',
					'</div>',
					'<div class="flex-initial">',
					'<h4>' . esc_html__( 'This is a title', 'alfredknows' ) . '</h4>',
					'<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum.', 'alfredknows' ) . '</p>',
					'</div>',
					'</div>',
					'</div>',
					'<div>',
					'<div class="flex flex-check-block">',
					'<div class="flex-initial mr-3">',
					'<span class="material-icons md-36">done</span>',
					'</div>',
					'<div class="flex-initial">',
					'<h4>' . esc_html__( 'This is a title', 'alfredknows' ) . '</h4>',
					'<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum.', 'alfredknows' ) . '</p>',
					'</div>',
					'</div>',
					'</div>',
					'<div>',
					'<div class="flex flex-check-block">',
					'<div class="flex-initial mr-3">',
					'<span class="material-icons md-36">done</span>',
					'</div>',
					'<div class="flex-initial">',
					'<h4>' . esc_html__( 'This is a title', 'alfredknows' ) . '</h4>',
					'<p>' . esc_html__( 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent interdum.', 'alfredknows' ) . '</p>',
					'</div>',
					'</div>',
					'</div>',
					'</div>',
				)
			),
		)
	);
}

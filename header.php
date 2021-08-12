<?php header('Access-Control-Allow-Origin: *'); ?>
<?php
/**
 * Header file for the Alfred Knows WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Alfred_Knows
 * @since Alfred Knows 1.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >

		<link rel="profile" href="https://gmpg.org/xfn/11">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet" href="https://rsms.me/inter/inter.css">
		<?php wp_head(); ?>
		
		
	</head>

	<body <?php body_class(); ?>>

		<?php
		wp_body_open();
		?>


<div class="relative bg-gray-50">
    <div class="relative bg-white shadow">
      <div class="max-w-7xl mx-auto px-4 sm:px-6">
        <div class="flex justify-between items-center py-6 md:justify-start md:space-x-10">
          <div class="flex justify-start w-40">
		  	<?php
				// Site title or logo.
				alfredknows_site_logo();

				// Site description.
				alfredknows_site_description();
			?>
          </div>
          <div class="-mr-2 -my-2 md:hidden">
            <button id="mobile-menu-button" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500" aria-expanded="false">
              <span class="sr-only">Open menu</span>
              <!-- Heroicon name: outline/menu -->
              <svg class="h-6 w-6" xmlns="https://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
          <nav class="hidden md:flex flex-1 justify-center items-center">
		  	<ul class="primary-menu reset-list-style">

				<?php
				if ( has_nav_menu( 'primary' ) ) {

					wp_nav_menu(
						array(
							'container'  => '',
							'items_wrap' => '%3$s',
							'theme_location' => 'primary',
						)
					);

				} elseif ( ! has_nav_menu( 'expanded' ) ) {

					wp_list_pages(
						array(
							'match_menu_classes' => true,
							'show_sub_menu_icons' => true,
							'title_li' => false,
							'walker'   => new AlfredKnows_Walker_Page(),
						)
					);

				}
				?>

			</ul>
          </nav>
          <div class="hidden md:flex items-center justify-end">
		  		<?php if ( is_active_sidebar( 'header-widget' ) ) : ?>
					<div id="header-widget-area" class="hw-widget widget-area" role="complementary">
					<?php dynamic_sidebar( 'header-widget' ); ?>
					</div>
				<?php endif; ?>
          </div>
        </div>
      </div>
  
      <!--
        Mobile menu, show/hide based on mobile menu state.
      -->
      <div id="mobile-menu" class="hidden absolute top-0 inset-x-0 z-10 p-2 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-white divide-y-2 divide-gray-50">
          <div class="pt-5 pb-6 px-5">
            <div class="flex items-center justify-between">
              <div>
				<?php
					// Site title or logo.
					alfredknows_site_logo();

					// Site description.
					alfredknows_site_description();
				?>
              </div>
              <div class="-mr-2">
                <button id="mobile-menu-close-button" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500">
                  <span class="sr-only">Close menu</span>
                  <!-- Heroicon name: outline/x -->
                  <svg class="h-6 w-6" xmlns="https://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                  </svg>
                </button>
              </div>
            </div>
            <div class="mt-6">
              <nav class="grid gap-y-8">
			  	<ul class="mobile-menu reset-list-style">

				<?php
				if ( has_nav_menu( 'primary' ) ) {

					wp_nav_menu(
						array(
							'container'  => '',
							'items_wrap' => '%3$s',
							'theme_location' => 'primary',
						)
					);

				} elseif ( ! has_nav_menu( 'expanded' ) ) {

					wp_list_pages(
						array(
							'match_menu_classes' => true,
							'show_sub_menu_icons' => true,
							'title_li' => false,
							'walker'   => new AlfredKnows_Walker_Page(),
						)
					);

				}
				?>

				</ul>
              </nav>
            </div>
          </div>
          <div class="py-6 px-5 space-y-6">
            <div id="mobile-menu-widget">
				<?php if ( is_active_sidebar( 'mobile-menu-widget' ) ) : ?>
					<?php dynamic_sidebar( 'mobile-menu-widget' ); ?>
				<?php endif; ?>
            </div>
            <div id="mobile-menu-buttons-widget">
				<?php if ( is_active_sidebar( 'mobile-menu-buttons-widget' ) ) : ?>
					<?php dynamic_sidebar( 'mobile-menu-buttons-widget' ); ?>
				<?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Alfred_Knows
 * @since Alfred Knows 1.0
 */

?>
  <footer class="bg-white" aria-labelledby="footerHeading">
    <h2 id="footerHeading" class="sr-only">Footer</h2>
    <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8">
      
	  	<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
      

      <div class="mt-8 border-t border-gray-200 pt-8 md:flex md:items-center md:justify-between">
        <div class="flex space-x-6 md:order-2">
          <?php $has_social_menu = has_nav_menu( 'social' ); ?>
          <?php if ( $has_social_menu ) { ?>

          <nav aria-label="<?php esc_attr_e( 'Social links', 'alfredknows' ); ?>" class="footer-social-wrapper">

            <ul class="social-menu footer-social reset-list-style social-icons fill-children-current-color">

              <?php
              wp_nav_menu(
                array(
                  'theme_location'  => 'social',
                  'container'       => '',
                  'container_class' => '',
                  'items_wrap'      => '%3$s',
                  'menu_id'         => '',
                  'menu_class'      => '',
                  'depth'           => 1,
                  'link_before'     => '<span class="screen-reader-text">',
                  'link_after'      => '</span>',
                  'fallback_cb'     => '',
                )
              );
              ?>

            </ul><!-- .footer-social -->

          </nav><!-- .footer-social-wrapper -->

          <?php } ?>
        </div>
        <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
			<div class="footer-copyright">
				<div class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
				<div>
					&copy;
					<?php echo date_i18n(_x( 'Y', 'copyright date format', 'alfredknows' )); ?>
				</div>
				<?php if ( is_active_sidebar( 'footer-copyright-widget' ) ) : ?>
					<?php dynamic_sidebar( 'footer-copyright-widget' ); ?>
				<?php endif; ?>
				</div>
			</div>
        </p>
      </div>
    </div>
  </footer>

		<?php wp_footer(); ?>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script>
			$(document).ready(function(){
				$('#mobile-menu-button').click(function(){
					$('#mobile-menu').slideDown();
				});
				$('#mobile-menu-close-button').click(function(){
					$('#mobile-menu').slideUp();
				});
				
			});
		</script>
	
	</body>
</html>

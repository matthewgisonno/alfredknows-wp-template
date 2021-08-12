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
			<footer id="site-footer" role="contentinfo" class="header-footer-group">

				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/manual/datetime.format.php */
								_x( 'Y', 'copyright date format', 'alfredknows' )
							);
							?>
							<!--<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>-->
							&nbsp;
							<?php
							if ( is_active_sidebar( 'footer-copyright-widget' ) ) : ?>
								<div id="footer-copyright-widget-area" class="hw-widget widget-area" role="complementary">
								<?php dynamic_sidebar( 'footer-copyright-widget' ); ?>
								</div>
							<?php endif; ?>
						</p><!-- .footer-copyright -->

						

					</div><!-- .footer-credits -->

					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'alfredknows' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'alfredknows' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<script>
			var hashAnchorURL = window.top.location.hash.substr(1).toLowerCase();
			if (hashAnchorURL != '') {
				$(function(){
					$('html, body').animate({
						scrollTop: $('#' + hashAnchorURL).offset().top
					}, 2000);
					return false;
				});
			}
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

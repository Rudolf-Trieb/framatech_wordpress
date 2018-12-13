<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?>

	</div><!-- .site-content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div>
			<?php
				/**
				 * Fires before the Twenty Fifteen footer text for footer customization.
				 *
				 * @since Twenty Fifteen 1.0
				 */
				do_action( 'twentyfifteen_credits' );
			?>

		
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
			<nav id="site-navigation" class="footer-navigation">
				<?php
					// Footer navigation menu.
					wp_nav_menu( array(
						'menu_class'     => 'footer-menu',
						'theme_location' => 'footer',
					) );
				?>
			</nav><!-- .footer-navigation -->
		<?php endif; ?>
			</div >
			<div>
			<?php
			if ( function_exists( 'the_privacy_policy_link' ) ) {
				//the_privacy_policy_link( '', '<span role="separator" aria-hidden="true"></span>' );
			}
			?>
			<!--
			<a href="<?php echo esc_url( __( 'https://#', 'twentyfifteen' ) ); ?>" class="imprint">
			-->
				<?php printf( __( 'Proudly powered by %s', 'twentyfifteen' ), 'Dipl.Ing. Rudolf Trieb' ); ?>
			<!--
			</a>
			-->
			</div>
		</div><!-- .site-info -->
	</footer><!-- .site-footer -->

</div><!-- .site -->

<?php wp_footer(); ?>

</body>
</html>

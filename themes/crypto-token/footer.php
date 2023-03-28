<?php
/**
 *  Footer
 *
 *  @package Crypto Token
 */
 
// Footer Settings.
$crypto_token_footer_widgets_enabled   = get_theme_mod( 'cryptoairdrop_footer_widgets_enabled', 'true' );
$crypto_token_footer_copyright_enabled = get_theme_mod( 'cryptoairdrop_footer_copyright_enabled', 'true' );
$crypto_token_footer_copright_text = get_theme_mod('cryptoairdrop_footer_copyright_text', __('Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Crypto Token theme by WP Frank', 'crypto-token'));
?>
	<?php
	if ( $crypto_token_footer_widgets_enabled == 'true' ) {
		// Fetch BusinessExpo Theme Footer Widget/
		get_template_part( 'sidebar', 'footer' );
	}
	?>
	<?php if ( $crypto_token_footer_copyright_enabled == 'true' ) { ?>
	<!-- Footer Copyrights -->
	<footer class="footer-copyrights">
		<div class="container">	
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="site-info">
						<?php echo wp_kses_post( $crypto_token_footer_copright_text ); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- /Footer Copyrights -->
	<?php } ?>
	<!-- Scroll To Top -->
	<a href="#" class="page-scroll-up" style="display: inline;"><i class="fa fa-chevron-up"></i></a>
	<!-- /Scroll To Top -->
	<?php wp_footer(); ?> 
</body>
</html>

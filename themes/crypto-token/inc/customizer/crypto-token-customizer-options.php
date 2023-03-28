<?php
/**
 * Customizer section options.
 *
 * @package Crypto Token
 *
 */

function crypto_token_customizer_theme_settings( $wp_customize ){
	
	$selective_refresh = isset( $wp_customize->selective_refresh ) ? 'postMessage' : 'refresh';	
		
		$wp_customize->add_setting('cryptoairdrop_footer_copyright_text',array(
			'sanitize_callback'	=> 'crypto_token_sanitize_text',
			'default'			=> __('Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Crypto token theme by WP Frank', 'crypto-token'),
			'transport'			=> $selective_refresh,
		));
		
		$wp_customize->add_control('cryptoairdrop_footer_copyright_text', array(
			'label'			=> esc_html__('Footer Copyright','crypto-token'),
			'section'		=> 'cryptoairdrop_footer_copyright',
			'priority'		=> 10,
			'type'			=> 'textarea'
		));

}
add_action( 'customize_register', 'crypto_token_customizer_theme_settings' );

function crypto_token_sanitize_text( $input ) {
		return wp_kses_post( force_balance_tags( $input ) );
}
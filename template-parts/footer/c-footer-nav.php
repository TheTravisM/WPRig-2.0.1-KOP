<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

/* // todo: Create the SCSS for the footer  */
wp_rig()->print_styles( 'wp-rig-c-footer-nav' );

?>

<!-- [ Footer - NAV ] -->
<nav class="c-footer-nav">
	<ul class="c-footer-nav_ul">
		<li class="c-footer-nav_li">
			<a class="c-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>terms-of-use">terms of use</a>
		</li>
		<li class="c-footer-nav_li">
			<a class="c-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>privacy-policy">privacy policy</a>
		</li>
		<li class="c-footer-nav_li">
			<a class="c-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>cookie-policy">cookie policy</a>
		</li>
		<li class="c-footer-nav_li">
			<a class="c-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>contact-page">contact</a>
		</li>
		<li class="c-footer-nav_li">
			<a class="c-footer-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>send-in-a-tip">Send Us A Tip</a>
		</li>
	</ul>
</nav>

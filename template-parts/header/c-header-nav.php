<?php
/**
 * Template part for displaying the header navigation menu
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

wp_rig()->print_styles( 'wp-rig-c-header-nav' );

?>

<nav class="c-header-nav">
	<ul class="c-header-nav_ul">
		<li class="c-header-nav_li">
			<a class="c-header-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>blog">The Latest</a>
		</li>
		<li class="c-header-nav_li">
			<a class="c-header-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>tag/top-story">Top Stories</a>
		</li>
		<li class="c-header-nav_li">
			<a class="c-header-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>tag/trending">Trending</a>
		</li>
		<li class="c-header-nav_li">
			<a class="c-header-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>category/podcast/">Podcast</a>
		</li>
		<li class="c-header-nav_li c-header-nav_li--contact">
			<a class="c-header-nav_link" href="<?php echo esc_url( home_url( '/' ) ); ?>contact">Contact</a>
		</li>
	</ul>
</nav>

<?php
/**
 * The template for displaying all pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_template_part( 'template-parts/header/c-header' );

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main kult-page_main">
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', 'page' );
		}
		?>
	</main><!-- #primary -->
<?php
get_sidebar();
get_template_part( 'template-parts/footer/c-footer' );

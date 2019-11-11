<?php
/**
 * Template Name: Contact Page
 *
 * When active, by adding the heading above and providing a custom name
 * this template becomes available in a drop-down panel in the editor.
 *
 * Filename can be anything.
 *
 * @link https://developer.wordpress.org/themes/template-files-section/page-template-files/#creating-custom-page-templates-for-global-use
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_template_part( 'template-parts/header/c-header' );

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main kult-contact-page_main">

		<header class="entry-header">
			<?php
				get_template_part( 'template-parts/content/entry_title', get_post_type() );
			?>
		</header><!-- .entry-header -->

		<div class="entry-content">
			<?php
				the_content(
					sprintf(
						wp_kses(
							/* translators: %s: Name of current post. Only visible to screen readers */
							__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp-rig' ),
							[
								'span' => [
									'class' => [],
								],
							]
						),
						get_the_title()
					)
				);

				wp_link_pages(
					[
						'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp-rig' ),
						'after'  => '</div>',
					]
				);
				?>
		</div><!-- .entry-content -->

			
		<!-- 
		<?php

		while ( have_posts() ) {
			the_post();

			get_template_part( 'template-parts/content/entry', 'page' );
		}
		?> 
		-->
	</main><!-- #primary -->
<?php
get_template_part( 'template-parts/footer/c-footer' );

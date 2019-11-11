<?php
/**
 * The template for displaying category archives.
 *
 * When active, applies to all category archives.
 * To target a specific category, rename file to category-{slug/id}.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#category
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

get_template_part( 'template-parts/header/c-header' );

wp_rig()->print_styles( 'wp-rig-content' );

?>
	<main id="primary" class="site-main kult-mma_main">
		<?php if ( have_posts() ) { ?>

			<header class="page-header">
				<h1 class="page-title">MMA:</h1>
				<h2>Two Men Enter, One Man Leave</h2>
			</header><!-- .page-header -->

		<?php
			while ( have_posts() ) {
				the_post();

				get_template_part( 'template-parts/content/entry', get_post_type() );
			}

			get_template_part( 'template-parts/content/pagination' );
		} else {
			get_template_part( 'template-parts/content/error' );
		}
		?>
	</main><!-- #primary -->
<?php
get_sidebar();
get_template_part( 'template-parts/footer/c-footer' );

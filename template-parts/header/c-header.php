<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp_rig
 */

namespace WP_Rig\WP_Rig;

wp_rig()->print_styles( 'wp-rig-c-header' );
/**
 * Old JS Code
 *  wp_rig()->print_script( 'wp-rig-c-header' );
 * */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- [ KULT Prefetch ] -->
	<?php get_template_part( 'template-parts/head/kult-prefetch' ); ?>

	<!-- [ KULT Meta Tags ] -->
	<?php get_template_part( 'template-parts/head/kult-meta-tags' ); ?>

	<title>Kult Of Pop</title>
	<link rel="profile" href="http://gmpg.org/xfn/11">

	<!-- [ KULT Favicons ] -->
	<?php get_template_part( 'template-parts/head/kult-favicons' ); ?>

	<!-- JS -->
	<script
		src="https://code.jquery.com/jquery-3.4.1.min.js"
		integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
		crossorigin="anonymous"></script>
		<script>
		$( window ).scroll( function () {
			if ($( this ).scrollTop() > 30 ) {
				$( '.c-header' ).addClass( 'c-header--scroll' );
				$('.c-header_logo-img').addClass('c-header_logo-img--scroll' );
			} else {
				$( '.c-header' ).removeClass( 'c-header--scroll' );
				$( '.c-header_logo-img' ).removeClass( 'c-header_logo-img--scroll' );
			}
		});
		document.addEventListener('DOMContentLoaded', function() {
			console.log( 'header JS Loaded' );
		} );
	</script>

	<?php
	if ( ! wp_rig()->is_amp() ) {
		?>
		<script>document.documentElement.classList.remove( 'no-js' );</script>
		<?php
	}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site kult-site">
	<a class="skip-link screen-reader-text" href="#primary">
		<?php esc_html_e( 'Skip to content', 'wp-rig' ); ?>
	</a>

	<!-- [ Header ] -->
	<header class="c-header">
		<!-- [ Header Container ] -->
		<section class="c-header_container">
			<!-- [ Header LOGO ] -->
			<?php get_template_part( 'template-parts/header/c-header-logo' ); ?>
			<!-- [ Header Container Inner ] -->
			<div class="c-header_container-inner">
				<!-- [ Header Nav ] -->
				<?php get_template_part( 'template-parts/header/c-header-nav' ); ?>
				<!-- [ Header Social Media ] -->
				<?php get_template_part( 'template-parts/header/c-header-social-media' ); ?>
			</div>

		</section>
	</header>

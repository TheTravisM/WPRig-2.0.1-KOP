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
	<header id="kult-header" class="c-header">
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
		<!-- Header Scroll JS  -->
		<script>
			window.addEventListener("scroll", function() {
				var kultHeader = document.getElementById("kult-header");
				var kultLogoLg = document.getElementById("kult-logo-lg");
				var kultLogoSm = document.getElementById("kult-logo-sm");

				if ( document.documentElement.scrollTop >= 30) {
					kultHeader.classList.add("c-header--scroll");
				kultLogoLg.classList.add("c-header_logo-img--scroll");
					kultLogoSm.classList.add("c-header_logo-img--scroll");
				} else {
					kultHeader.classList.remove("c-header--scroll");
					kultLogoLg.classList.remove("c-header_logo-img--scroll");
					kultLogoSm.classList.remove("c-header_logo-img--scroll");
				}
			});
		</script>

<?php
/**
 * En-tête du thème enfant SPPCM.
 *
 * Affiche le <head>, le logo, le bouton hamburger (mobile/tablette),
 * le formulaire de recherche et le menu principal (emplacement « menu-1 »).
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Underscores
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Aller au contenu', 'underscores' ); ?></a>

	<header id="masthead" class="site-header" data-js-component="Header">
		<div class="site-header__bar">
			<div class="site-branding">
				<?php if ( has_custom_logo() ) : ?>
					<?php the_custom_logo(); ?>
				<?php else : ?>
					<a class="site-title custom-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<img
							class="custom-logo"
							src="<?php echo esc_url( get_theme_file_uri( 'images/cropped-sppcm_logo_rgb.png' ) ); ?>"
							alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>"
							width="342" height="90"
						/>
					</a>
				<?php endif; ?>
			</div><!-- .site-branding -->

			<button class="menu-toggle" type="button" aria-controls="site-menu-panel" aria-expanded="false">
				<span class="menu-toggle__icon" aria-hidden="true"></span>
				<span class="screen-reader-text"><?php esc_html_e( 'Menu', 'underscores' ); ?></span>
			</button>
		</div>

		<div id="site-menu-panel" class="site-menu-panel">
			<?php get_search_form(); ?>

			<nav id="site-navigation" class="main-navigation" aria-label="<?php esc_attr_e( 'Navigation principale', 'underscores' ); ?>">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-1',
						'menu_id'        => 'primary-menu',
						'container'      => false,
					)
				);
				?>
			</nav><!-- #site-navigation -->
		</div>
	</header><!-- #masthead -->

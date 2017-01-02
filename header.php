<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tinderboxVolunteers
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<header id="masthead" class="site-header" role="banner">
		<?php
		if ( is_front_page() ) : ?>
		<div class="site-logo">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
				<img src="<?php bloginfo('template_directory');?>/images/logo.png" alt="Tinderbox Volunteer logo" />
			</a>
		</div>
		<nav id="top-site-navigation" class="top-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'menu-1', 'menu_id' => 'top-menu' ) ); ?>
		</nav><!-- #site-navigation -->
		<?php else : ?>
			<div class="btn-back arrow-back"></div>
			<div class="nav-header-text">
				<?php the_title( '<h4>', '</h4>' ); ?>
			</div>
		<?php
		endif;
		?>

	</header><!-- #masthead -->

	<div id="content" class="site-content">

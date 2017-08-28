<?php
/**
 * The header for our theme.
 *
 * @package RED_Starter_Theme
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<title>Redstarter Theme</title>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>
		<div id="page" class="hfeed site">
			<a class="skip-link screen-reader-text" href="#content"><?php esc_html( 'Skip to content' ); ?></a>
			
			<header id="masthead" class="site-header" role="banner">
			<!-- Creating the banner calling get_banner from functions.php -->

		

			
			<!-- END of calling banner -->

				<div class="site-branding">
					<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<p class="site-description"><?php bloginfo( 'description' ); ?></p>
				</div><!-- .site-branding -->
				
			
				<!-- the menu navigation journal home shop-->
				<div class="flex banner-menu">
				<nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="flex flex-jus-end">
					
					<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html( 'Primary Menu' ); ?></button>
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
					<div id="search_icon">
					<i class="fa fa-search" id="fa-search" aria-hidden="true" onclick="showHideSearch()"></i>
					</div>
					<div id="header-search"><?php get_search_form();?></div>

<!-- a function to show hide the search -->
					<script type="text/javascript">
						function showHideSearch(obj){

						    $("#header-search").toggle();

						}
					</script>

				</div>
				</nav><!-- #site-navigation -->
				</div>
			</header><!-- #masthead -->

			<div id="content" class="site-content">

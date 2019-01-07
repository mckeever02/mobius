<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package penrose
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
<div id="page" class="site">
	<header id="masthead" class="site-header">

		<nav id="site-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement" class="navbar navbar-expand-lg">
			<div class="container<?php if(is_front_page()): ?> nav-container<?php endif; ?>">
				<?php
				the_custom_logo();
				?>
				<button id="menu-icon" class="navbar-toggler hamburger hamburger--slider" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
			  	</button>
				<?php
				wp_nav_menu([
				 'theme_location'  => 'menu-1',
				 'container'       => 'div',
				 'container_id'    => 'bs4navbar',
				 'container_class' => 'collapse navbar-collapse',
				 'menu_id'         => 'primary-menu',
				 'menu_class'      => 'navbar-nav ml-auto',
				 'depth'           => 2,
				 'fallback_cb'     => 'bs4navwalker::fallback',
				 'walker'          => new bs4navwalker()
			 ]);
			 ?>
			</div>
		</nav><!-- #site-navigation -->
		
	</header><!-- #masthead -->

	<div id="content" class="site-content">

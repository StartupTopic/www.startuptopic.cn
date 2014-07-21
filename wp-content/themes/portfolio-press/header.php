<?php
/**
 * Header template
 *
 * @package Portfolio Press
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<!--
  _   _              ___ _             ____                         ______                       
 | | | | ___ _   _  |_ _( )_ __ ___   |  _ \  ___ _ __  _ __  _   _|__  / |__   __ _ _ __   __ _ 
 | |_| |/ _ \ | | |  | ||/| '_ ` _ \  | | | |/ _ \ '_ \| '_ \| | | | / /| '_ \ / _` | '_ \ / _` |
 |  _  |  __/ |_| |  | |  | | | | | | | |_| |  __/ | | | | | | |_| |/ /_| | | | (_| | | | | (_| |
 |_| |_|\___|\__, | |___| |_| |_| |_| |____/ \___|_| |_|_| |_|\__, /____|_| |_|\__,_|_| |_|\__, |
             |___/                                            |___/                        |___/ 
-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width,  user-scalable=no">
<meta name="author" content="DennyZhang" />
<meta name="copyright" content="DennyZhang.com" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="icon" href="<?php echo esc_url( get_template_directory_uri() . '/images/icon.png' ); ?>" type="image/x-icon">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link type="text/plain" rel="author" href="http://www.dennyzhang.com/humans.txt" />
<link rel="prerender"  href="/portfolio/">
<link rel="prerender"  href="/service/">
<link rel="prerender"  href="/blog/">
<link rel="prerender"  href="/contact/">
<link rel="prefrech" href="/portfolio/" >
<link rel="prefrech" href="/service/" >
<link rel="prefrech" href="/blog/" >
<link rel="prefrech" href="/contact/" >
<!--[if lt IE 9]>
<script src="<?php echo esc_url( get_template_directory_uri() . '/js/html5.js' ); ?>"></script>
<![endif]-->
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="wrapper">

	<header id="branding">
    	<div class="col-width clearfix">
        <?php $heading_tag = ( is_home() || is_front_page() ) ? 'h1' : 'div'; ?>
			<hgroup id="logo">
				<<?php echo $heading_tag; ?> id="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                <?php if ( of_get_option( 'logo', false) ) { ?>
					<img src="<?php echo esc_url( of_get_option( 'logo' ) ); ?>" alt="<?php echo bloginfo( 'name' ) ?>">
				<?php } else {
					bloginfo( 'name' );
				}?>
                </a>
                </<?php echo $heading_tag; ?>>
				<?php if ( !of_get_option( 'logo', false ) ) { ?>
                	<h2 id="site-description"><?php bloginfo( 'description' ); ?></h2>
                <?php } ?>
			</hgroup>

			<nav id="navigation" class="site-navigation primary-navigation" role="navigation">
				<h1 class="menu-toggle"><?php _e( 'Menu', 'portfolio-press' ); ?></h1>
				<a class="screen-reader-text skip-link" href="#content"><?php _e( 'Skip to content', 'portfolio-press' ); ?></a>
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
			</nav>
		</div>
	</header><!-- #branding -->

	<div id="main">
    	<div class="col-width">
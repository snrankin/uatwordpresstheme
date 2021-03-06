<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<nav id="menu" role="navigation">
<div class="inner-wrap">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
<div id="login">
	<div class="button">
    	<?php wp_loginout(); ?>
    </div>
</div>
</div>
</nav>
<header id="header" role="banner">
<div class="inner-wrap">
<section id="branding">
<div id="site-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><img src="<?php echo get_template_directory_uri(); ?>/imgs/UATlogo.png" /></a></div>
<div id="site-title"><h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php esc_attr_e( get_bloginfo( 'name' ), 'blankslate' ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a></h1></div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>
</section>
</div>
</header>
<div id="container">
<div class="inner-wrap">
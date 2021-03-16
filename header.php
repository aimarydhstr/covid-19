<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<?php wp_head(); ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
</head>
<body <?php body_class(); ?>>
<div id="wrapper" class="hfeed">
<header id="header">
<div class="con">
<div id="branding">
<div id="site-title">
<h1>
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_html( get_bloginfo( 'name' ) ); ?>" rel="home"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
</h1>
</div>
<div id="site-description"><?php bloginfo( 'description' ); ?></div>
</div>
<nav id="menu">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</nav>
</div>
</header>

<?php if(is_singular()): ?>
<div class="back"></div>
<div id="container">
<?php else : ?>
<div class="backs">
<div id="containers">
<h2>Welcome to Covid-19</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
<div id="search"><?php get_search_form(); ?></div>
</div>
</div>
<div id="containers">
<?php endif ?>
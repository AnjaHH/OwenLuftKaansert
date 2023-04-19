<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo("name") ?></title>
    <?php wp_head() ?>
    
</head>

<body>

<header id="masthead" class="site-header" role="banner">
    <div class="vertical-navigation">
        <nav class="main-navigation" role="navigation">
            <ul class="menu">
            <?php wp_nav_menu(array("theme_location" => "header-menu-location")) ?>
            </ul>
        </nav><!-- .main-navigation -->
    </div><!-- .vertical-navigation -->
    <div class="site-branding">
        <?php the_custom_logo(); ?>
        <h2 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h2>
        <p class="site-description"><?php bloginfo( 'description' ); ?></p>
    </div><!-- .site-branding -->
</header><!-- #masthead -->

<div class="top">
            <h1><?php the_title() ?></h1>
        </div>


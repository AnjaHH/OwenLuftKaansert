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

<div class="header-bg">
    
	<header role="banner">
	
		
	
		<div >	
			<a class="toggle-nav" href="#">&#9776;</a>	
		</div> <!-- .one-half right -->
		
	</header><!-- header -->
		
</div><!-- header-bg-->
<!-- full width navigation menu - not on landing page -->
<nav class="menu main">
	<div class="skip-link screen-reader-text">
        <a href="#content" title="<?php esc_attr_e( 'Skip to content', 'compass' ); ?>">
            <?php _e( 'Skip to content', 'twentyten' ); ?>
        </a>
    </div>
	<?php wp_nav_menu( array( 
        'container_class' => 'main-nav', 
        'theme_location' => 'header-menu-location' 
    ) ); ?>
</nav><!-- .main -->






<div class="top">
            <h1><?php the_title() ?></h1>
        </div>


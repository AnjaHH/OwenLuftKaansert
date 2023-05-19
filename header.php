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
		</div> 
        <div>
            <a href="https://www.instagram.com/owenluftkaensert/"><i class="bi bi-instagram"></i></a>
        </div>
        <div>
            <a href="https://www.facebook.com/owenluft?locale=da_DK"><i class="bi bi-facebook"></i></a>
        </div>
		
	</header>
		
</div>

<nav class="menu main">
    
	<?php wp_nav_menu( array( 
        'container_class' => 'main-nav', 
        'theme_location' => 'header-menu-location',

    ) ); ?>
   
</nav>






<div class="top">

    <div class="header-top">
    <h1><?php the_title() ?> </h1>
        <div id="logo" >
            <?php
            if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
            }
            ?>

        </div>
        

    </div>
        
        
</div>



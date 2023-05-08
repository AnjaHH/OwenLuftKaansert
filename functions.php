<?php 
   function kaansert_register_stylesheet() {
       wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");
       wp_enqueue_script("main", get_stylesheet_directory_uri() . "/js/main.js", [], true);
       wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css");
       wp_enqueue_style("bootstrap-icons", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css");
       wp_enqueue_style("adobe-font", "https://use.typekit.net/yhk8nuk.css");
    }

    function custom_logo_setup() {
        $config = array(
            'height'               => 292,
            'width'                => 379,
            
        );
        add_theme_support( 'custom-logo', $config );
     
    }
    add_action( 'after_setup_theme', 'custom_logo_setup' );
 

   add_action("wp_enqueue_scripts", "kaansert_register_stylesheet"); 

   function kaansert_register_menu_location() {
       register_nav_menu("header-menu-location", "Header Menu Location");
   }
   add_action("after_setup_theme", "kaansert_register_menu_location");

   function kaansert_burger_menu_scripts() {
    
	wp_enqueue_script( 'burger-menu-script', get_stylesheet_directory_uri() . '/scripts/burger-menu.js', array( 'jquery' ) );
 
}
add_action( 'wp_enqueue_scripts', 'kaansert_burger_menu_scripts' );


function to_top_button(){
    ?>
    <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="bi bi-arrow-up-circle-fill"></i></button>
    <?php
}
add_action("wp_enqueue_scripts","to_top_button");




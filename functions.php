<?php 
   function kaansert_register_stylesheet() {
       wp_enqueue_style("theme-style", get_stylesheet_directory_uri() . "/style.css");
       wp_enqueue_script("main", get_stylesheet_directory_uri() . "/js/main.js", [], true);
       wp_enqueue_style("bootstrap", "https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css");
       wp_enqueue_style("bootstrap-icons", "https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css");
    }
   add_action("wp_enqueue_scripts", "kaansert_register_stylesheet"); 

   function kaansert_register_menu_location() {
       register_nav_menu("header-menu-location", "Header Menu Location");
   }
   add_action("after_setup_theme", "kaansert_register_menu_location");




<?php

function get_navigation() {

    $templates = array();
    $templates[] = 'navigation.php';

    locate_template( $templates, TRUE);
}

/*connection of scripts */
add_action('wp_enqueue_scripts','load_styles_scripts');

function load_styles_scripts() {

    wp_enqueue_style('main-style',get_template_directory_uri(). '/css/main.css');
    wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,400,700');

    wp_enqueue_script('main-script',get_template_directory_uri().'/js/main.js');
}

//add_filter('woocommerce_enqueue_styles','__return_empty_array');

/* menu */
add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'header_menu' => 'header_menu',
        'applic_menu' => 'applic_menu',
        'prod_menu' => 'prod_menu',

    ) );
});

/*woocommerce support*/
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}




require 'created-widgets/custom-widget.php';


/*header menu widgets*/
function wpb_widgets_init() {

    register_sidebar( array(
        'name'          => 'Menu_widgets',
        'id'            => 'hover_submenu',
    ) );

}

add_action( 'widgets_init', 'wpb_widgets_init' );

add_action('wp_enqueue_scripts','reassign_scripts',9);

function reassign_scripts(){

    wp_enqueue_script('wc-add-to-cart',get_template_directory_uri().'/js/add-to-cart.js');
}
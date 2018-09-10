<?php

function get_navigation() {

    $templates = array();
    $templates[] = 'navigation.php';

    locate_template( $templates, TRUE);
}


add_action('wp_enqueue_scripts','load_styles_scripts');

function load_styles_scripts() {

    wp_enqueue_style('main-style',get_template_directory_uri(). '/css/main.css');

    wp_enqueue_script('main-script',get_template_directory_uri().'/js/main.js');
}

//add_filter('woocommerce_enqueue_styles','__return_empty_array');


add_action('after_setup_theme', function(){
    register_nav_menus( array(
        'header_menu' => 'header_menu',

    ) );
});

/*woocomm support*/
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
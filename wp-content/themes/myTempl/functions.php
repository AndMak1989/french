<?php

function get_navigation() {
	
	$templates = array();
	$templates[] = 'navigation.php';
	
	locate_template( $templates, TRUE);
}

function load_styles_scripts() {
	
	
	wp_enqueue_style('bootstrap',get_template_directory_uri().'/css/bootstrap.css');
	wp_enqueue_style('style',get_template_directory_uri().'/css/style.css');
	wp_enqueue_style('flexslider',get_template_directory_uri().'/css/flexslider.css');
	
	wp_enqueue_script('bootstrap-3.1.1',get_template_directory_uri().'/js/bootstrap-3.1.1.min.js');
	wp_enqueue_script('simpleCart',get_template_directory_uri().'/js/simpleCart.min.js');
	wp_enqueue_script('responsiveslides',get_template_directory_uri().'/js/responsiveslides.min.js');
	wp_enqueue_script('flexisel',get_template_directory_uri().'/js/jquery.flexisel.js');
	
}

add_action('wp_enqueue_scripts','load_styles_scripts');

add_filter('woocommerce_enqueue_styles','__return_empty_array');

function my_options() {
	
	
	add_settings_field('url_slide','Ссылка слайдера','display_url','general');
	register_setting('general','url_slide');
	
	add_settings_field('button_slide','Заголовок кнопки слайдера','display_button','general');
	register_setting('general','button_slide');
	
	add_settings_field('my_phone','Телефон','display_phone','discussion');
	register_setting('discussion','my_phone');
	
}

function display_url() {
	echo '<input type="text" class="regular-text" name="url_slide" value="'.esc_attr(get_option('url_slide')).'">';
}
function display_button() {
	echo '<input type="text" class="regular-text" name="button_slide" value="'.esc_attr(get_option('button_slide')).'">';
}function display_phone() {
	echo '<input type="text" class="regular-text" name="my_phone" value="'.esc_attr(get_option('my_phone')).'">';
}

add_action('admin_menu','my_options');
?>
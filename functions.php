<?php 

// Remove a versão do WP exibida no header.
remove_action( 'wp_head', 'wp_generator' );

// Função para carregamentos dos scripts
function carrega_css_scripts(){	
	wp_enqueue_style( 'animatecss', get_template_directory_uri() . '/node_modules/animate.css/animate.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/node_modules/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all');
	wp_enqueue_style( 'templatecss', get_template_directory_uri() . '/css/template.min.css', array(), '1.0', 'all');
	
	wp_enqueue_script( 'jqueryscript', get_template_directory_uri() . '/node_modules/jquery/dist/jquery.min.js', array(), null, true );	
	wp_enqueue_script( 'popperjs', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js', array(), null, true);
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/node_modules/bootstrap/dist/js/bootstrap.min.js', array(), null, true );	
	wp_enqueue_script( 'templatejs', get_template_directory_uri(). '/js/template.js', array(), null, true);
} 
add_action( 'wp_enqueue_scripts', 'carrega_css_scripts' );

// Images destacadas (dos posts)
add_theme_support( 'post-thumbnails' );

// Remove a barra admin do site
function my_function_admin_bar(){
    return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');
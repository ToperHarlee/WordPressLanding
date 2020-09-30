<?php

add_action( 'wp_enqueue_scripts', 'timber_style' );
add_action( 'wp_enqueue_scripts', 'timber_scripts' );
// add_action('wp_print_styles', 'theme_name_scripts'); // можно использовать этот хук он более поздний
function timber_style() {
    wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css' );
	wp_enqueue_style( 'main-style', get_stylesheet_uri() );
	/* wp_enqueue_script( 'script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true ); */
}


function timber_scripts() {
    //переопределение jquery на версию которая есть в проекте
    wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script( 'jquery' );


    // подключаем js файл темы
    wp_enqueue_script('libs-script', get_template_directory_uri() .'assets/js/libs.min.js', array(jquery), null, true );

    wp_enqueue_script( 'magnific-script', get_template_directory_uri() .'assets/js/jquery.magnific-popup.min.js', array(jquery), null, true );
    
    wp_enqueue_script( 'main-script', get_template_directory_uri() .'assets/js/main.js', array(jquery), null, true );

}
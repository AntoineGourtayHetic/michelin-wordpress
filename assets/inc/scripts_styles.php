<?php

function ajout_scripts() {

wp_register_script('jquerry', 'https://code.jquery.com/jquery-2.1.4.min.js', false, NULL, true);
wp_enqueue_script('jquerry');

// enregistrement d'un nouveau script
wp_register_script('slick_script', get_template_directory_uri() . '/assets/slick/slick.min.js', false, NULL, true);
wp_enqueue_script('slick_script');

// enregistrement d'un nouveau script
wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', false, NULL, true);
wp_enqueue_script('main');


wp_register_script( 'materialize-js', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/js/materialize.min.js', array('jquery'), '2.0', true );
wp_enqueue_script( 'materialize-js' );



// enregistrement d'un nouveau style
wp_register_style( 'slick_style', get_template_directory_uri() . '/assets/slick/slick.css' );
wp_enqueue_style( 'slick_style' );

// enregistrement d'un nouveau style
wp_register_style( 'slick_theme_style', get_template_directory_uri() . '/assets/slick/slick-theme.css' );
wp_enqueue_style( 'slick_theme_style' );

// enregistrement d'un nouveau style
wp_register_style( 'main_style', get_template_directory_uri() . '/assets/css/style.css' );
wp_enqueue_style( 'main_style' );

wp_register_style( 'materialize-css', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.7/css/materialize.min.css', false, NULL, 'all' );
wp_enqueue_style( 'materialize-css' );

wp_register_style('noto', 'https://fonts.googleapis.com/css?family=Noto+Sans', false, NULL, 'all' );
wp_enqueue_style( 'noto');

}
add_action( 'wp_enqueue_scripts', 'ajout_scripts' );

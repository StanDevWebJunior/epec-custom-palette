<?php
/*
Plugin Name: Custom Colors Palette by Promo EPEC
Description: un plugin pour personnaliser une palette de couleur
Version: 0.1
Author: Too Luck
*/

function mytheme_setup_theme_supported_features() {
    add_theme_support( 'editor-color-palette', array(
        array(
            'name' => __( 'tomato', 'epec-custom-palette'),
            'slug' => 'tomato',
            'color' => '#FF6347',
        ),
        array(
            'name' => __( 'purple', 'epec-custom-palette'),
            'slug' => 'purple',
            'color' => '#6128A1',
        ),
        array(
            'name' => __( 'green', 'epec-custom-palette'),
            'slug' => 'green',
            'color' => '#008000',
        ),
        array(
            'name' => __( 'orange', 'epec-custom-palette'),
            'slug' => 'orange',
            'color' => '#FF4500',
        ),
    ) );
}
 
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );


function my_scripts() {
    wp_register_style( 'prefix-style', plugins_url('app.css', __FILE__) );
    wp_enqueue_style( 'prefix-style' );
    }
    add_action('wp_enqueue_scripts','my_scripts');
    ?>
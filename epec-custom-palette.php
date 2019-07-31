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
            'name' => __( 'strong magenta', 'themeLangDomain' ),
            'slug' => 'strong-magenta',
            'color' => '#6128A1',
        ),
        array(
            'name' => __( 'light grayish magenta', 'themeLangDomain' ),
            'slug' => 'light-grayish-magenta',
            'color' => '#E94B59',
        ),
        array(
            'name' => __( 'Very Dark Gray ', 'themeLangDomain' ),
            'slug' => 'Very Dark Gray',
            'color' => '#111111',
        ),
        array(
            'name' => __( 'White', 'themeLangDomain' ),
            'slug' => 'White',
            'color' => '#FFFFFF',
        ),
        array(
            'name' => __( 'Red', 'themeLangDomain' ),
            'slug' => 'Red',
            'color' => '#FF0000',
        ),
    ) );
}
 
add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );



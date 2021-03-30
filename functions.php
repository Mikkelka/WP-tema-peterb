<?php

function peterb_files() {
    wp_enqueue_script('main-peter-jquery', get_theme_file_uri('js/jquery-min.js'), NULL, '1.0', true);
    wp_enqueue_script('main-peter-js', get_theme_file_uri('js/main.js'), NULL, '1.0', true);
    wp_enqueue_script('script-animate-on-scroll', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
    wp_enqueue_style('animate-on-scroll', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans');
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_style('peterb_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts','peterb_files' );


// This theme uses wp_nav_menu() in one location.
register_nav_menus( array(
    'menu-1' => esc_html__( 'Primary', 'mit-tema' ),
) );

add_theme_support( 'post-thumbnails' );

<!-- Theme Functions File -->
<?php

function acr_dopetrope(){
    add_theme_support('custom-logo');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_image_size('home', 600, 400, array('center', 'center'));

    register_nav_menus( array(
        'primary' => __('Primary Menu', 'acr_dopetrope') 
    ));
};

function acr_scripts(){
    wp_enqueue_style('style_css', get_stylesheet_uri( ));
    wp_enqueue_style('jquery');

    wp_enqueue_script('dropotron_js', get_template_directory_uri(). '/assets/js/jquery.dropotron.min.js');
    wp_enqueue_script('browser', get_template_directory_uri() .'/assets/js/browser.min.js');
    wp_enqueue_script('breakpoints', get_template_directory_uri() .'/assets/js/breakpoints.min.js');
    wp_enqueue_script('util', get_template_directory_uri() .'/assets/js/util.js');
    wp_enqueue_script('main', get_template_directory_uri() .'/assets/js/main.js');
}
add_action('wp_enqueue_scripts', 'acr_scripts');
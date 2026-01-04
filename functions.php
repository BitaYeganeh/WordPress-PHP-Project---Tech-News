<?php
// Theme setup: title tag, featured images, menus, custom image sizes
function technews_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_image_size('technews-card', 400, 320, true);

    // Register menus
    register_nav_menus([
        'primary' => 'Primary Menu'
    ]);
}
add_action('after_setup_theme', 'technews_setup');

// Enqueue stylesheets
function technews_scripts() {
    wp_enqueue_style(
        'technews-style', // handle
        get_stylesheet_uri(),
        array(),
        filemtime(get_template_directory() . '/style.css')
    );
}

add_action('wp_enqueue_scripts', 'technews_scripts');




function technews_widgets_init() {
    register_sidebar(array(
        'name'          => 'Sidebar',
        'id'            => 'sidebar',
        'before_widget' => '<div>',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ));
}

 add_action('widgets_init', 'technews_widgets_init');

 function custom_scripts() {
    wp_enqueue_script('cf7-popup', get_template_directory_uri() . '/script.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'custom_scripts');


function my_custom_menu_toggle_script() {
    // Make sure jQuery is loaded
    wp_enqueue_script('jquery');

    // Add inline script
    wp_add_inline_script('jquery', "
        jQuery(document).ready(function($) {
            $('#top-navi ul li:first-child').on('click', function() {
                $('#top-navi ul li:not(:first-child)').slideToggle(400);
            });
        });
    ");
}
add_action('wp_enqueue_scripts', 'my_custom_menu_toggle_script');


?>
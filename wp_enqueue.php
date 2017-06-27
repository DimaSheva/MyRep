<?php
/**
 * SCRIPTS/STYLES
 */
if (!function_exists('maxcanvas_child_scripts_styles')):

    function maxcanvas_child_scripts_styles()
    {
        // SLICK SLIDER
        wp_enqueue_script('slick-script', get_stylesheet_directory_uri() . '/js/slick/slick.min.js', array(), false, true);
        wp_enqueue_style('slick-style', get_stylesheet_directory_uri() . '/js/slick/slick.css');

        // Core styles
        wp_enqueue_style('global-style', get_stylesheet_directory_uri() . '/styles/global.css');
        if (is_front_page()):
            wp_enqueue_style('home', get_stylesheet_directory_uri() . '/styles/home.css');
        elseif (is_home() || is_single() || is_archive()):
            wp_enqueue_style('blog', get_stylesheet_directory_uri() . '/styles/blog.css');
        endif;

        wp_enqueue_script('main-script', get_stylesheet_directory_uri() . '/js/main.js', array(), false, true);
    }
endif;
add_action('wp_enqueue_scripts', 'maxcanvas_child_scripts_styles', 20);
?>
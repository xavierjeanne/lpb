<?php

/**
 * Enqueues all css and script used in the theme
 *
 * @return void
 */
function theme_enqueues_styles_scripts()
{

    // Comment reply JS
    //    if (is_singular()) {
    //        wp_enqueue_script('comment-reply');
    //    }


    //jQuery

    wp_enqueue_script('jQuery', 'https://code.jquery.com/jquery-3.5.1.min.js');
    // Popper
    wp_enqueue_script('popper', 'https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js');


    // Bootstrap : load js part from cdn
    /*wp_enqueue_script(
       'bootstrap',
       'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
       array('jQuery', 'popper'),
      '4.5.2',
       true
   );*/


    // @TODO : Uncomment what you need
    // Animate CSS
    wp_enqueue_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css');

    // Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css');


    // ENQUEUE your css below

    // ENQUEUE your js below @TODO : uncomment if you added js librairies
    wp_enqueue_script('libs', get_stylesheet_directory_uri() . '/dist/js/libs.js', array(), '1.0', true);

    // Default theme stylesheet
    wp_enqueue_style('theme', get_stylesheet_directory_uri() . '/dist/css/theme.css');

    // Default js of your theme to add your own js scripts, add dependances if needed
    //wp_enqueue_script('libs', get_stylesheet_directory_uri() . '/dist/js/libs.js');
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/dist/js/main.js', array(), '1.0', true);
}

add_action('wp_enqueue_scripts', 'theme_enqueues_styles_scripts');

// Update CSS within in Admin
function admin_style()
{
    wp_enqueue_style('admin-styles', get_stylesheet_directory_uri() . '/dist/css/admin.css');
}
add_action('admin_enqueue_scripts', 'admin_style');

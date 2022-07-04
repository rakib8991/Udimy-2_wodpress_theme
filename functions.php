<?php 
add_image_size('featured', 1100 , 418,true);
// udimy Theme function
function udimy_2_theme_fun(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme','udimy_2_theme_fun');
// udimy Theme style fun
function udimy_2_style_fun(){
    //add style
    wp_register_style('google_font','https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,400;0,700;1,300;1,400&family=Ubuntu:wght@700&display=swap');
    wp_register_style('owl_carousel_style',get_template_directory_uri().'/css/owl.carousel.min.css',array(),'2.3.4');
    wp_register_style('stylesheet',get_stylesheet_uri(),'1.0.0');

    // add scripts
    wp_register_script('script',get_template_directory_uri().'/js/script.js',array('jquery'),'1.0.0',true);
    wp_register_script('owl_carousel',get_template_directory_uri().'/js/owl.carousel.min.js',array('jquery'),'2.3.4',true);
    //enqueue style
    wp_enqueue_style('google_font');
    wp_enqueue_style('owl_carousel_style');
    wp_enqueue_style('stylesheet');

    //enqueue script
    wp_enqueue_script('jquery');
    wp_enqueue_script('owl_carousel');
    wp_enqueue_script('script');
    
}
add_action('wp_enqueue_scripts','udimy_2_style_fun');


// udimy regiser menu function
function udimy_register_menu(){
    register_nav_menus(array(
        'primary_menu'      => __('Primary Menu','udimy-2'),
    ));
}
add_action('init','udimy_register_menu');

// udimy theme weidgets function
function udimy_theme_widgets(){
    register_sidebar(array(
        'name'      => __('Sidebar Testimonials','udimy-2'),
        'id'        => 'widgets_testimonials',
        'description'   => 'The Sidebar Testimonials',
        'befor_widget'  => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'   => '<h3 class="widget_title">',
        'after_title'   => '</h3>',
    ));

    register_sidebar(array(
        'name'      => __('Front Page Image Widget','udimy-2'),
        'id'        => 'front-page-image-widget',
        'description'   => 'Front Page Image Loop',
        'before_widget' => '<aside id="front-image-widget" class="widget front-image-widget">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget_title">',
        'after_title'   => '</h3>',
    ));
    
}

add_action('widgets_init','udimy_theme_widgets');

/**
 * Filter the except length to 20 words.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
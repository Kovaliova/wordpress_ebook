<?php
function my_theme_add_custom_css_first() {
    echo '<link rel="stylesheet" href="' . get_stylesheet_directory_uri() . '/custom.css" type="text/css" media="all" />';
}
add_action('wp_head', 'my_theme_add_custom_css_first', 1);

function my_theme_enqueue_styles() {
    wp_dequeue_style('twenty-twenty-one-style');
    
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css', array(), null);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles', 20);


function my_theme_widgets_init() {
    register_sidebar(array(
        'name'          => 'Футер 1',
        'id'            => 'footer-1',
        'before_widget' => '<div class="footer-widget">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="footer-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'my_theme_widgets_init');

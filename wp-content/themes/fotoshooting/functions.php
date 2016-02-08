<?php
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support( 'automatic-feed-links' );

/**
 * Define template directory
 */
define("THEME_DIR", get_template_directory_uri());


/**
 * Enqueue scripts
 */
function enqueue_scripts() {

        wp_register_script('jquerycustom', THEME_DIR . '/js/jquery-1.12.0.min.js');
        wp_enqueue_script('jquerycustom');

        wp_register_script('custom', THEME_DIR . '/js/custom.js', 'jquerycustom');
        wp_enqueue_script('custom');

}
add_action( 'wp_enqueue_scripts', 'enqueue_scripts' );


/**
 * Localize scripts
 */
function localize(){
    if ( ! is_admin() ) {
        wp_localize_script( 'custom', 'ajax_url', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    }

}

add_action('wp_enqueue_scripts','localize');


/**
 * Register menus
 */
function register_menus() {
    register_nav_menus(
        array('main_menu' => __( 'Main Menu', '' ),
            'products_menu' => __( 'Top Right Menu', '' ),
            'services_menu' => __( 'Social Links Menu', '' )
        )
    );
}
add_action( 'init', 'register_menus' );

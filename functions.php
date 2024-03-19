<?php

/**
 * My Theme Functions
 * 
 * @link 
 * 
 * @package NewsPost
 */

//newspost theme path
$newspost_theme_path = get_template_directory() . '';
// var_dump($newspost_theme_path);

//doing ani file add this
require $newspost_theme_path . '/inc/widget/widget-footer.php';
// require($newspost_theme_path. '' );
// Include widget.php file
// require_once $newspost_theme_path.'/ins/widget/widget-footer.php';

// Theme Support
add_theme_support('html5', array('search-form', 'comment-form', 'comment-list', 'gallery', 'caption'));
add_theme_support('post-thumbnails');
add_theme_support('custom-header');
add_theme_support('title-tag');
add_theme_support('editor-styles');
// add_theme_support('custom-logo', array(
//     'height' => 480,
//     'width'  => 720,
// ));

//Theme vertion
// $newspost_theme = wp_get_theme();


// Theme CSS and JavaScript File Calling
function kat_css_js_file_call()
{
    // Enqueue the main stylesheet (style.css)
    wp_enqueue_style('kat-style', get_stylesheet_uri());

    // Register and enqueue the custom stylesheet
    wp_enqueue_style('kat-style02', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all');

    // Enqueue jQuery (included with WordPress by default)
    wp_enqueue_script('jquery');

    // Register and enqueue the custom script
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/path/to/bootstrap.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'kat_css_js_file_call');

// Theme Customization
function kat_theme_customize_register($wp_customize)
{
    // Add setting for custom logo
    $wp_customize->add_section('kat_header_area', array(
        'title'       => __('Header Area', 'katushar'),
        'description' => 'If you are interested in updating your header area!',
    ));
    add_theme_support('custom-header');

    $wp_customize->add_setting('kat_logo', array(
        'default' => get_template_directory_uri() . '/assets/img/logo.png',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'kat_logo', array(
        'label'    => 'Logo Upload',
        'setting'  => 'kat_logo',
        'section'  => 'kat_header_area',
    )));

    // Add setting for text color
    $wp_customize->add_setting('kat_theme_text_color', array(
        'default'           => '#333333',
        'sanitize_callback' => 'sanitize_hex_color',
        'transport'         => 'postMessage',
    ));

    // Add control for text color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'kat_theme_text_color', array(
        'label'       => __('Text Color', 'kat_theme'),
        'section'     => 'colors',
        'settings'    => 'kat_theme_text_color',
    )));

    // Add setting for background color
    $wp_customize->add_setting('kat_theme_background_color', array(
        'default'           => '#ffffff',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    // Add control for background color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'kat_theme_background_color', array(
        'label'       => __('Background Color', 'kat_theme'),
        'section'     => 'colors',
        'settings'    => 'kat_theme_background_color',
    )));
    // Add setting for link color
    $wp_customize->add_setting('kat_theme_link_color', array(
        'default'           => '#0073e6',
        'sanitize_callback' => 'sanitize_hex_color',
    ));

    // Add control for link color
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'kat_theme_link_color', array(
        'label'       => __('Link Color', 'kat_theme'),
        'section'     => 'colors',
        'settings'    => 'kat_theme_link_color',
    )));

    //kat_theme_customize_register end
}

add_action('customize_register', 'kat_theme_customize_register');

//register nav manus
function register_my_menus()
{
    register_nav_menus(
        array(
            'primary-menu' => __('Primary Menu'),
            'secondary-menu' => __('Secondary Menu'),
            'sidebar-menu' => __('Sidebar Menu')
        )
    );
}
add_action('init', 'register_my_menus');

function kat_theme_custom_styles() {
    // Enqueue JavaScript file for Customizer preview
    wp_enqueue_script('kat-theme-customizer', get_template_directory_uri() . '/assets/js/custom.js', array('customize-preview'), '1.0', true);
}
add_action('customize_preview_init', 'kat_theme_custom_styles');

// Register and enqueue the custom script
wp_enqueue_script('bootstrap', get_template_directory_uri() . '/bootstrap.js', array('jquery'), '1.0.0', true);

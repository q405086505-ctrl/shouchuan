<?php
/**
 * Cupshe Clone Theme Functions
 *
 * @package Cupshe_Clone
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

define('CUPSHE_THEME_VERSION', '1.0.0');
define('CUPSHE_THEME_DIR', get_template_directory());
define('CUPSHE_THEME_URI', get_template_directory_uri());

/**
 * Theme Setup
 */
function cupshe_theme_setup() {
    // Add theme support
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 38,
        'width'       => 170,
        'flex-height' => true,
        'flex-width'  => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'cupshe-clone'),
        'footer'  => __('Footer Menu', 'cupshe-clone'),
    ));

    // Load text domain
    load_theme_textdomain('cupshe-clone', CUPSHE_THEME_DIR . '/languages');
}
add_action('after_setup_theme', 'cupshe_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function cupshe_enqueue_scripts() {
    // Google Fonts
    wp_enqueue_style(
        'cupshe-google-fonts',
        'https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap',
        array(),
        null
    );

    // Swiper CSS
    wp_enqueue_style(
        'swiper-css',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css',
        array(),
        '11.0.0'
    );

    // Theme Stylesheet
    wp_enqueue_style(
        'cupshe-style',
        get_stylesheet_uri(),
        array('cupshe-google-fonts', 'swiper-css'),
        CUPSHE_THEME_VERSION
    );

    // Header CSS
    wp_enqueue_style(
        'cupshe-header',
        CUPSHE_THEME_URI . '/assets/css/header.css',
        array('cupshe-style'),
        CUPSHE_THEME_VERSION
    );

    // Footer CSS
    wp_enqueue_style(
        'cupshe-footer',
        CUPSHE_THEME_URI . '/assets/css/footer.css',
        array('cupshe-style'),
        CUPSHE_THEME_VERSION
    );

    // WooCommerce CSS
    wp_enqueue_style(
        'cupshe-woocommerce',
        CUPSHE_THEME_URI . '/assets/css/woocommerce.css',
        array('cupshe-style'),
        CUPSHE_THEME_VERSION
    );

    // Swiper JS
    wp_enqueue_script(
        'swiper-js',
        'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js',
        array(),
        '11.0.0',
        true
    );

    // Theme JS
    wp_enqueue_script(
        'cupshe-main',
        CUPSHE_THEME_URI . '/assets/js/main.js',
        array('swiper-js'),
        CUPSHE_THEME_VERSION,
        true
    );

    // Localize script
    wp_localize_script('cupshe-main', 'cupsheData', array(
        'ajaxUrl' => admin_url('admin-ajax.php'),
        'nonce'   => wp_create_nonce('cupshe_nonce'),
    ));
}
add_action('wp_enqueue_scripts', 'cupshe_enqueue_scripts');

/**
 * Register Widget Areas
 */
function cupshe_widgets_init() {
    register_sidebar(array(
        'name'          => __('Footer Column 1', 'cupshe-clone'),
        'id'            => 'footer-1',
        'description'   => __('Footer Column 1', 'cupshe-clone'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 2', 'cupshe-clone'),
        'id'            => 'footer-2',
        'description'   => __('Footer Column 2', 'cupshe-clone'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 3', 'cupshe-clone'),
        'id'            => 'footer-3',
        'description'   => __('Footer Column 3', 'cupshe-clone'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));

    register_sidebar(array(
        'name'          => __('Footer Column 4', 'cupshe-clone'),
        'id'            => 'footer-4',
        'description'   => __('Footer Column 4', 'cupshe-clone'),
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'cupshe_widgets_init');

/**
 * WooCommerce Support
 */
function cupshe_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'cupshe_woocommerce_support');

/**
 * Declare WooCommerce Support
 */
function cupshe_declare_woocommerce_support() {
    add_theme_support('woocommerce', array(
        'thumbnail_image_width' => 300,
        'single_image_width'    => 600,
        'product_grid'          => array(
            'default_rows'    => 4,
            'min_rows'        => 2,
            'max_rows'        => 8,
            'default_columns' => 4,
            'min_columns'     => 2,
            'max_columns'     => 5,
        ),
    ));
}
add_action('after_setup_theme', 'cupshe_declare_woocommerce_support');

/**
 * Custom Walker for Navigation Menu
 */
class Cupshe_Nav_Walker extends Walker_Nav_Menu {
    public function start_el(&$output, $item, $depth = 0, $args = null, $id = 0) {
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'nav-item';
        $classes[] = 'nav-l1-item';

        $output .= '<li class="' . esc_attr(implode(' ', $classes)) . '">';

        $atts = array(
            'title'  => ! empty($item->attr_title) ? $item->attr_title : '',
            'target' => ! empty($item->target) ? $item->target : '',
            'rel'    => ! empty($item->xfn) ? $item->xfn : '',
            'href'   => ! empty($item->url) ? $item->url : '',
            'class'  => 'text-400 nav-item-link nav-l1-link',
            'style'  => 'color: #000000;',
        );

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (! empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters('the_title', $item->title, $item->ID);
        $output .= '<a' . $attributes . '>' . $title . '</a>';
    }
}

/**
 * Get Home Page Sections
 */
function cupshe_get_home_sections() {
    $sections = array(
        array(
            'id' => 'homeBanner',
            'name' => __('Video Banner', 'cupshe-clone'),
            'priority' => 1,
        ),
        array(
            'id' => 'topBanner',
            'name' => __('Policy Banner', 'cupshe-clone'),
            'priority' => 2,
        ),
        array(
            'id' => 'channel',
            'name' => __('Category Grid', 'cupshe-clone'),
            'priority' => 4,
        ),
        array(
            'id' => 'activityBanner',
            'name' => __('Activity Banners', 'cupshe-clone'),
            'priority' => 6,
        ),
        array(
            'id' => 'categoryMarketingPositionB',
            'name' => __('Hot Products', 'cupshe-clone'),
            'priority' => 14,
        ),
        array(
            'id' => 'brandPromotion',
            'name' => __('Brand Promotion', 'cupshe-clone'),
            'priority' => 16,
        ),
        array(
            'id' => 'ins',
            'name' => __('Instagram Feed', 'cupshe-clone'),
            'priority' => 18,
        ),
        array(
            'id' => 'appDownload',
            'name' => __('App Download', 'cupshe-clone'),
            'priority' => 20,
        ),
    );
    return $sections;
}

/**
 * Include Template Parts
 */
function cupshe_get_template_part($slug, $name = null) {
    get_template_part('template-parts/' . $slug, $name);
}

/**
 * Customizer Settings
 */
function cupshe_customize_register($wp_customize) {
    // Top Bar Section
    $wp_customize->add_section('cupshe_topbar', array(
        'title'    => __('Top Bar', 'cupshe-clone'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('cupshe_topbar_text', array(
        'default'           => 'Subscribe & enjoy 15% off — no minimum required!',
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('cupshe_topbar_text', array(
        'label'   => __('Top Bar Text', 'cupshe-clone'),
        'section' => 'cupshe_topbar',
        'type'    => 'text',
    ));

    // Video Banner Section
    $wp_customize->add_section('cupshe_video_banner', array(
        'title'    => __('Video Banner', 'cupshe-clone'),
        'priority' => 35,
    ));

    $wp_customize->add_setting('cupshe_video_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control('cupshe_video_url', array(
        'label'   => __('Video URL', 'cupshe-clone'),
        'section' => 'cupshe_video_banner',
        'type'    => 'url',
    ));

    $wp_customize->add_setting('cupshe_video_poster', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cupshe_video_poster', array(
        'label'   => __('Video Poster Image', 'cupshe-clone'),
        'section' => 'cupshe_video_banner',
    )));

    // App Download Section
    $wp_customize->add_section('cupshe_app_download', array(
        'title'    => __('App Download', 'cupshe-clone'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('cupshe_app_phone_image', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cupshe_app_phone_image', array(
        'label'   => __('Phone Image', 'cupshe-clone'),
        'section' => 'cupshe_app_download',
    )));

    $wp_customize->add_setting('cupshe_app_qr_code', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'cupshe_app_qr_code', array(
        'label'   => __('QR Code Image', 'cupshe-clone'),
        'section' => 'cupshe_app_download',
    )));
}
add_action('customize_register', 'cupshe_customize_register');

/**
 * Add Body Classes
 */
function cupshe_body_classes($classes) {
    if (is_woocommerce() || is_cart() || is_checkout() || is_account_page()) {
        $classes[] = 'woocommerce-page';
    }
    if (is_front_page()) {
        $classes[] = 'home-page';
    }
    return $classes;
}
add_filter('body_class', 'cupshe_body_classes');

/**
 * Include WooCommerce Integration
 */
require_once CUPSHE_THEME_DIR . '/inc/woocommerce.php';

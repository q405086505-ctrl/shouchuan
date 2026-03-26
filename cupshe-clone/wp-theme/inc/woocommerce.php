<?php
/**
 * WooCommerce Integration
 *
 * @package Cupshe_Clone
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Remove default WooCommerce wrappers
 */
remove_action('woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10);
remove_action('woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10);

/**
 * Add theme wrappers
 */
function cupshe_woocommerce_wrapper_start() {
    echo '<div class="woocommerce-wrapper"><div class="container">';
}
add_action('woocommerce_before_main_content', 'cupshe_woocommerce_wrapper_start', 10);

function cupshe_woocommerce_wrapper_end() {
    echo '</div></div>';
}
add_action('woocommerce_after_main_content', 'cupshe_woocommerce_wrapper_end', 10);

/**
 * Change number of products per row
 */
function cupshe_loop_columns() {
    return 4;
}
add_filter('loop_shop_columns', 'cupshe_loop_columns');

/**
 * Change number of products per page
 */
function cupshe_products_per_page() {
    return 16;
}
add_filter('loop_shop_per_page', 'cupshe_products_per_page', 20);

/**
 * Remove default WooCommerce styles
 */
function cupshe_dequeue_woocommerce_styles($enqueue_styles) {
    unset($enqueue_styles['woocommerce-general']);
    unset($enqueue_styles['woocommerce-layout']);
    unset($enqueue_styles['woocommerce-smallscreen']);
    return $enqueue_styles;
}
add_filter('woocommerce_enqueue_styles', 'cupshe_dequeue_woocommerce_styles');

/**
 * Add to cart AJAX
 */
function cupshe_ajax_add_to_cart() {
    if (!isset($_POST['product_id'])) {
        wp_send_json_error(array('message' => 'No product ID'));
    }

    $product_id = absint($_POST['product_id']);
    $quantity = isset($_POST['quantity']) ? absint($_POST['quantity']) : 1;
    $variation_id = isset($_POST['variation_id']) ? absint($_POST['variation_id']) : 0;
    $variation = isset($_POST['variation']) ? $_POST['variation'] : array();

    $cart_item_key = WC()->cart->add_to_cart($product_id, $quantity, $variation_id, $variation);

    if ($cart_item_key) {
        wp_send_json_success(array(
            'message' => __('Product added to cart!', 'cupshe-clone'),
            'cart_count' => WC()->cart->get_cart_contents_count(),
        ));
    } else {
        wp_send_json_error(array('message' => __('Failed to add product to cart', 'cupshe-clone')));
    }
}
add_action('wp_ajax_cupshe_add_to_cart', 'cupshe_ajax_add_to_cart');
add_action('wp_ajax_nopriv_cupshe_add_to_cart', 'cupshe_ajax_add_to_cart');

/**
 * Mini cart fragment
 */
function cupshe_cart_fragments($fragments) {
    $fragments['.cart-count'] = '<span class="cart-count">' . WC()->cart->get_cart_contents_count() . '</span>';
    return $fragments;
}
add_filter('woocommerce_add_to_cart_fragments', 'cupshe_cart_fragments');

/**
 * Custom product thumbnail
 */
function cupshe_woocommerce_thumbnail() {
    global $product;
    
    $attachment_ids = $product->get_gallery_image_ids();
    $has_gallery = count($attachment_ids) > 0;
    
    echo '<div class="product-thumbnail">';
    echo $product->get_image('medium', array('class' => 'primary-image'));
    
    if ($has_gallery) {
        echo wp_get_attachment_image($attachment_ids[0], 'medium', false, array('class' => 'secondary-image'));
    }
    
    echo '</div>';
}

/**
 * Product card hover effect
 */
function cupshe_product_card_hooks() {
    add_action('woocommerce_before_shop_loop_item_title', 'cupshe_woocommerce_thumbnail', 10);
}
add_action('init', 'cupshe_product_card_hooks');

/**
 * Remove default WooCommerce breadcrumbs
 */
remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

/**
 * Custom product tabs
 */
function cupshe_product_tabs($tabs) {
    unset($tabs['reviews']);
    return $tabs;
}
add_filter('woocommerce_product_tabs', 'cupshe_product_tabs', 98);

/**
 * Related products args
 */
function cupshe_related_products_args($args) {
    $args['posts_per_page'] = 4;
    $args['columns'] = 4;
    return $args;
}
add_filter('woocommerce_related_products_args', 'cupshe_related_products_args');

/**
 * Upsell products args
 */
function cupshe_upsell_products_args($args) {
    $args['posts_per_page'] = 4;
    $args['columns'] = 4;
    return $args;
}
add_filter('woocommerce_upsell_display_args', 'cupshe_upsell_products_args');

/**
 * Cross-sell products args
 */
function cupshe_cross_sell_products_args($args) {
    $args['posts_per_page'] = 4;
    $args['columns'] = 4;
    return $args;
}
add_filter('woocommerce_cross_sells_total', 'cupshe_cross_sell_products_args');

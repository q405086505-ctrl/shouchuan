<?php
/**
 * The template for displaying product content within loops
 *
 * @package Cupshe_Clone
 */

if (!defined('ABSPATH')) {
    exit;
}

global $product;

$attachment_ids = $product->get_gallery_image_ids();
$has_gallery = count($attachment_ids) > 0;
?>
<li <?php wc_product_class('', $product); ?>>
    <div class="product-item">
        <a href="<?php the_permalink(); ?>">
            <div class="product-thumbnail" style="position: relative; overflow: hidden; padding-bottom: 150%; background: #f2f2f2;">
                <?php
                echo $product->get_image('medium', array(
                    'class' => 'primary-image',
                    'style' => 'position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;'
                ));
                
                if ($has_gallery) {
                    echo wp_get_attachment_image($attachment_ids[0], 'medium', false, array(
                        'class' => 'secondary-image',
                        'style' => 'position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; opacity: 0; transition: opacity 0.3s;'
                    ));
                }
                ?>
            </div>
            <h3 class="product-title" style="font-size: 14px; font-weight: 500; margin: 12px 0 4px; color: #04040C;">
                <?php the_title(); ?>
            </h3>
            <div class="product-price" style="font-size: 14px; color: #04040C;">
                <?php echo $product->get_price_html(); ?>
            </div>
        </a>
    </div>
</li>

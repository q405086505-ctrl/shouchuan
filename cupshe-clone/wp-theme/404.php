<?php
/**
 * The 404 page template
 *
 * @package Cupshe_Clone
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="error-404" style="padding: 120px 24px; text-align: center; max-width: 600px; margin: 0 auto;">
    <h1 style="font-size: 120px; font-weight: 700; color: #E5E5E5; margin-bottom: 24px;">404</h1>
    <p style="font-size: 24px; color: #666; margin-bottom: 32px;"><?php echo esc_html__('Page not found', 'cupshe-clone'); ?></p>
    <a href="<?php echo esc_url(home_url('/')); ?>" style="display: inline-block; background: #04040C; color: #fff; padding: 14px 32px; border-radius: 4px; text-decoration: none; font-weight: 500;"><?php echo esc_html__('Back to Home', 'cupshe-clone'); ?></a>
</div>

<?php
get_footer();

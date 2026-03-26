<?php
/**
 * The main template file
 *
 * @package Cupshe_Clone
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="page-content">
    <?php
    if (have_posts()) :
        while (have_posts()) :
            the_post();
            the_content();
        endwhile;
    else :
        ?>
        <div style="padding: 60px 24px; text-align: center;">
            <h1><?php echo esc_html__('No content found', 'cupshe-clone'); ?></h1>
        </div>
        <?php
    endif;
    ?>
</div>

<?php
get_footer();

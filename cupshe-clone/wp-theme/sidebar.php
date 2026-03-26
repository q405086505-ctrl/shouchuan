<?php
/**
 * The sidebar template
 *
 * @package Cupshe_Clone
 */

if (!defined('ABSPATH')) {
    exit;
}

if (!is_active_sidebar('sidebar-1')) {
    return;
}
?>

<aside id="secondary" class="widget-area sidebar" style="width: 300px; padding: 0 24px;">
    <?php dynamic_sidebar('sidebar-1'); ?>
</aside>

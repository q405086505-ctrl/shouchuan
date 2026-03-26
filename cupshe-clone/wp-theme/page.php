<?php
/**
 * The page template file
 *
 * @package Cupshe_Clone
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="page-content" style="padding: 60px 24px; max-width: 1200px; margin: 0 auto;">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header" style="margin-bottom: 40px;">
                <h1 class="entry-title" style="font-size: 36px; font-weight: 600;"><?php the_title(); ?></h1>
            </header>
            <div class="entry-content">
                <?php the_content(); ?>
            </div>
        </article>
        <?php
    endwhile;
    ?>
</div>

<?php
get_footer();

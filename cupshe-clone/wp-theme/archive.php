<?php
/**
 * The archive template file
 *
 * @package Cupshe_Clone
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="archive-wrapper" style="padding: 60px 24px; max-width: 1200px; margin: 0 auto;">
    <header class="archive-header" style="margin-bottom: 40px; text-align: center;">
        <?php the_archive_title('<h1 style="font-size: 36px; font-weight: 600;">', '</h1>'); ?>
        <?php the_archive_description('<div style="margin-top: 16px; color: #666;">', '</div>'); ?>
    </header>

    <?php if (have_posts()) : ?>
        <div class="posts-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px;">
            <?php while (have_posts()) : the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="entry-thumbnail" style="margin-bottom: 16px;">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail('medium', array('style' => 'width: 100%; height: auto;')); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                    <h2 style="font-size: 18px; font-weight: 600; margin-bottom: 8px;">
                        <a href="<?php the_permalink(); ?>" style="color: #04040C; text-decoration: none;"><?php the_title(); ?></a>
                    </h2>
                    <div class="entry-meta" style="font-size: 12px; color: #999; margin-bottom: 12px;">
                        <span><?php echo get_the_date(); ?></span>
                    </div>
                    <div class="entry-excerpt" style="font-size: 14px; color: #666;">
                        <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        </div>

        <div class="pagination" style="margin-top: 60px; text-align: center;">
            <?php
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => __('&larr; Previous', 'cupshe-clone'),
                'next_text' => __('Next &rarr;', 'cupshe-clone'),
            ));
            ?>
        </div>
    <?php else : ?>
        <div style="text-align: center; padding: 60px 0;">
            <p style="font-size: 18px; color: #666;"><?php echo esc_html__('No posts found.', 'cupshe-clone'); ?></p>
        </div>
    <?php endif; ?>
</div>

<?php
get_footer();

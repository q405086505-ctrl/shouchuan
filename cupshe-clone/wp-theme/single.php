<?php
/**
 * The single post template file
 *
 * @package Cupshe_Clone
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<div class="single-post-wrapper" style="padding: 60px 24px; max-width: 800px; margin: 0 auto;">
    <?php
    while (have_posts()) :
        the_post();
        ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <header class="entry-header" style="margin-bottom: 40px;">
                <h1 class="entry-title" style="font-size: 36px; font-weight: 600; margin-bottom: 16px;"><?php the_title(); ?></h1>
                <div class="entry-meta" style="font-size: 14px; color: #666;">
                    <span class="posted-on"><?php echo get_the_date(); ?></span>
                    <span class="byline"> by <span class="author vcard"><?php the_author(); ?></span></span>
                </div>
            </header>
            
            <?php if (has_post_thumbnail()) : ?>
            <div class="entry-thumbnail" style="margin-bottom: 40px;">
                <?php the_post_thumbnail('large', array('style' => 'width: 100%; height: auto;')); ?>
            </div>
            <?php endif; ?>
            
            <div class="entry-content" style="font-size: 16px; line-height: 1.8;">
                <?php the_content(); ?>
            </div>
            
            <footer class="entry-footer" style="margin-top: 40px; padding-top: 20px; border-top: 1px solid #E5E5E5;">
                <div class="entry-tags">
                    <?php the_tags('<span style="font-weight: 500;">Tags:</span> ', ', '); ?>
                </div>
            </footer>
        </article>
        
        <nav class="post-navigation" style="margin-top: 60px; display: flex; justify-content: space-between;">
            <div class="nav-previous">
                <?php previous_post_link('%link', '&larr; %title'); ?>
            </div>
            <div class="nav-next">
                <?php next_post_link('%link', '%title &rarr;'); ?>
            </div>
        </nav>
        
        <?php
        // Comments
        if (comments_open() || get_comments_number()) :
            comments_template();
        endif;
        ?>
        
        <?php
    endwhile;
    ?>
</div>

<?php
get_footer();

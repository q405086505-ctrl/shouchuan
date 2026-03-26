<?php
/**
 * The front page template file
 *
 * @package Cupshe_Clone
 */

if (!defined('ABSPATH')) {
    exit;
}

get_header();
?>

<!-- 1. homeBanner - Video Banner -->
<div id="homeBanner" data-floor-index="1">
    <div id="home-banner" class="home-banner" data-index="0">
        <div class="home-banner--swiper">
            <div class="swiper-wrapper home-banner--swiper-wrapper">
                <div class="swiper-item home-banner--swiper-item">
                    <a data-type="1" href="#" style="padding-bottom: 41.66666666666667%;">
                        <?php
                        $video_url = get_theme_mod('cupshe_video_url', 'https://media.cupshe.com/feed-img.cupshe.com/material/vc-upload-1773739714250-5-fj27n93pzz.mp4');
                        $video_poster = get_theme_mod('cupshe_video_poster', 'https://media.cupshe.com/cdn-review.cupshe.com/au/comment-service/20260318/A413E4232D914A579723102E85D3FBD9.jpg');
                        ?>
                        <video class="video-js" playsinline="true" muted loop autoplay poster="<?php echo esc_url($video_poster); ?>" style="max-width: 100%; max-height: 100%; width: 100%; background: #fff; background-position: center; background-repeat: no-repeat; background-size: cover; object-fit: fill;">
                            <source src="<?php echo esc_url($video_url); ?>" type="video/mp4">
                        </video>
                        <div style="position: absolute; bottom: 0; top: 0; right: 0; left: 0; z-index: 0;"></div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 2. topBanner - Policy Banner -->
<div id="topBanner" data-floor-index="2">
    <div class="floor-topBanner" style="background-color: #fbf8e7;">
        <div class="topBanner-content">
            <a href="#" class="topBanner-item">
                <i><img src="https://media.cupshe.com/feed-img.cupshe.com/material/website/39f34c95-4558-4ffa-b8f4-d56c102a325b_pc1%20%E6%8B%B7%E8%B4%9D.png" alt="FREE RETURNS & EXCHANGES"></i>
                <div>
                    <div class="topBanner-item-title" style="color: #04040C">FREE RETURNS &amp; EXCHANGES</div>
                    <div class="topBanner-item-desc" style="color: #04040C">For Registered Email Subscribers</div>
                </div>
            </a>
            <div class="topBanner-separator" style="background-color: #F2F1DF;"></div>
            <a href="#" class="topBanner-item">
                <i><img src="https://media.cupshe.com/feed-img.cupshe.com/material/website/44b2f37b-217c-48b8-b97c-9e941db66c00_pc2.png" alt="FREE RETURNS"></i>
                <div>
                    <div class="topBanner-item-title" style="color: #04040C">FREE RETURNS</div>
                    <div class="topBanner-item-desc" style="color: #04040C">In the App</div>
                </div>
            </a>
            <div class="topBanner-separator" style="background-color: #F2F1DF;"></div>
            <a href="#" class="topBanner-item">
                <i><img src="https://media.cupshe.com/feed-img.cupshe.com/material/website/e4c54b3f-55fb-44b1-9f0b-a4ccf60c322a_pc1.png" alt="20% OFF 2PCS+"></i>
                <div>
                    <div class="topBanner-item-title" style="color: #04040C">20% OFF 2PCS+</div>
                    <div class="topBanner-item-desc" style="color: #04040C">For New SMS Subscribers</div>
                </div>
            </a>
        </div>
    </div>
</div>

<!-- 3. spacing -->
<div id="spacing" data-floor-index="3">
    <section class="spacing" style="height: 30px;"></section>
</div>

<!-- 4. channel - YOUR GETAWAY WARDROBE -->
<div id="channel" data-floor-index="4">
    <style>
        .channel h2 { text-align: center; font-size: 36px; color: #04040C; font-weight: 600; margin-bottom: 24px; }
        .channel-images { display: flex; flex-flow: row wrap; }
        .channel-images-item img { width: 100%; background-size: cover; }
        .channel-images-item { position: relative; }
        .channel-images-item a { position: absolute; display: flex; width: 100%; height: 100%; }
        .channel-images-2 { display: grid; grid-template-columns: 2fr 1fr 1fr 1fr; }
        .channel-images-2 .channel-images-item:nth-child(1) { grid-row: span 2; }
    </style>
    <div class="channel">
        <h2 class="text-600">YOUR GETAWAY WARDROBE</h2>
        <div class="channel-images channel-images-2">
            <div class="channel-images-item">
                <div style="padding-bottom: 100%">
                    <a href="<?php echo esc_url(get_term_link('bikinis', 'product_cat')); ?>"><img src="https://feed-img.cupshe.com/material/vc-upload-1773737832059-2-oyqyjfmhp8.jpg" alt="bikinis"></a>
                </div>
            </div>
            <div class="channel-images-item">
                <div style="padding-bottom: 100%">
                    <a href="<?php echo esc_url(get_term_link('one-pieces', 'product_cat')); ?>"><img src="https://feed-img.cupshe.com/material/vc-upload-1773737857748-2-qsfl1yw0b3.jpg" alt="ONE-PIECES"></a>
                </div>
            </div>
            <div class="channel-images-item">
                <div style="padding-bottom: 100%">
                    <a href="<?php echo esc_url(get_term_link('cover-ups', 'product_cat')); ?>"><img src="https://feed-img.cupshe.com/material/vc-upload-1773738026562-2-2nkxqu24hk.jpg" alt="cover-ups"></a>
                </div>
            </div>
            <div class="channel-images-item">
                <div style="padding-bottom: 100%">
                    <a href="<?php echo esc_url(get_term_link('rompers', 'product_cat')); ?>"><img src="https://feed-img.cupshe.com/material/vc-upload-1773737913091-2-bahen4ugvf.jpg" alt="rompers"></a>
                </div>
            </div>
            <div class="channel-images-item">
                <div style="padding-bottom: 100%">
                    <a href="<?php echo esc_url(get_term_link('dresses', 'product_cat')); ?>"><img src="https://feed-img.cupshe.com/material/vc-upload-1773737878414-2-8znl3oir8r.jpg" alt="DRESSES"></a>
                </div>
            </div>
            <div class="channel-images-item">
                <div style="padding-bottom: 100%">
                    <a href="<?php echo esc_url(get_term_link('tops', 'product_cat')); ?>"><img src="https://feed-img.cupshe.com/material/vc-upload-1773737992424-2-00x2hf2sxr.jpg" alt="tops"></a>
                </div>
            </div>
            <div class="channel-images-item">
                <div style="padding-bottom: 100%">
                    <a href="<?php echo esc_url(get_term_link('bottoms', 'product_cat')); ?>"><img src="https://feed-img.cupshe.com/material/vc-upload-1773738008996-2-5hebot1qhr.jpg" alt="bottoms"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 5. spacing -->
<div id="spacing" data-floor-index="5">
    <section class="spacing" style="height: 45px;"></section>
</div>

<!-- 6. activityBanner - FAMILY GETAWAYS -->
<div id="activityBanner" data-floor-index="6">
    <style>
        .subbanner-images { display: flex; overflow: hidden; }
        .subbanner-images-item img { width: 100%; background-size: cover; }
        .subbanner-images-item { overflow: hidden; position: relative; }
        .subbanner-images-item a { position: absolute; display: flex; width: 100%; height: 100%; }
        .subbanner-style-1 .subbanner-images-item { width: 100%; }
        .subbanner-style-2 .subbanner-images-item { width: 50%; }
        .subbanner-style-3 .subbanner-images-item { width: 33.33%; }
    </style>
    <div class="subbanner subbanner-style-1">
        <div class="subbanner-images">
            <div class="subbanner-images-item">
                <div style="padding-bottom: 37.5%">
                    <a href="#"><img src="https://feed-img.cupshe.com/material/vc-upload-1773738048868-5-ejlho3qeav.jpg" alt="FAMILY GETAWAYS"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 7. spacing -->
<div id="spacing" data-floor-index="7">
    <section class="spacing" style="height: 45px;"></section>
</div>

<!-- 8. activityBanner - Styles That Travel Well -->
<div id="activityBanner" data-floor-index="8">
    <div class="subbanner subbanner-style-2">
        <div class="subbanner-images">
            <div class="subbanner-images-item">
                <div style="padding-bottom: 89.58333333333334%">
                    <a href="#"><img src="https://feed-img.cupshe.com/material/vc-upload-1773740783455-5-pn9kiap6fs.jpg" alt="Styles That Travel Well"></a>
                </div>
            </div>
            <div class="subbanner-images-item">
                <div style="padding-bottom: 89.58333333333334%">
                    <a href="#"><img src="https://feed-img.cupshe.com/material/vc-upload-1773739087446-5-3fr72ofslx.jpg" alt="PLAYFUL & PRACTICAL"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 9. spacing -->
<div id="spacing" data-floor-index="9">
    <section class="spacing" style="height: 45px;"></section>
</div>

<!-- 10. activityBanner - VACATION MODE -->
<div id="activityBanner" data-floor-index="10">
    <div class="subbanner subbanner-style-2">
        <div class="subbanner-images">
            <div class="subbanner-images-item">
                <div style="padding-bottom: 89.58333333333334%">
                    <a href="#"><img src="https://feed-img.cupshe.com/material/vc-upload-1773741137741-2-m6qqvi01ik.jpg" alt="VACATION MODE: ON"></a>
                </div>
            </div>
            <div class="subbanner-images-item">
                <div style="padding-bottom: 89.58333333333334%">
                    <a href="#"><img src="https://feed-img.cupshe.com/material/vc-upload-1773739087446-11-ywmb7fjryq.jpg" alt="SHORELINE STANDARD"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 11. spacing -->
<div id="spacing" data-floor-index="11">
    <section class="spacing" style="height: 45px;"></section>
</div>

<!-- 12. activityBanner - Off-Duty in Orlando -->
<div id="activityBanner" data-floor-index="12">
    <div class="subbanner subbanner-style-1">
        <div class="subbanner-images">
            <div class="subbanner-images-item">
                <div style="padding-bottom: 37.5%">
                    <a href="#"><img src="https://feed-img.cupshe.com/material/vc-upload-1773739364594-2-mkqb1z618d.jpg" alt="Off-Duty in Orlando"></a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 13. spacing -->
<div id="spacing" data-floor-index="13">
    <section class="spacing" style="height: 45px;"></section>
</div>

<!-- 14. categoryMarketingPositionB - WHAT'S HOT RIGHT NOW -->
<div id="categoryMarketingPositionB" data-floor-index="14">
    <section class="floor-collections">
        <header>
            <h2>WHAT'S HOT RIGHT NOW</h2>
        </header>
        <div class="collections-tab-pane">
            <?php
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 8,
                'meta_key' => 'total_sales',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
            );
            $hot_products = new WP_Query($args);
            
            if ($hot_products->have_posts()) :
                echo '<div class="products-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; padding: 0 24px;">';
                while ($hot_products->have_posts()) : $hot_products->the_post();
                    global $product;
                    ?>
                    <div class="product-item">
                        <a href="<?php the_permalink(); ?>">
                            <div class="product-image" style="position: relative; padding-bottom: 150%; background: #f2f2f2; overflow: hidden;">
                                <?php echo $product->get_image('medium', array('style' => 'position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover;')); ?>
                            </div>
                            <h3 class="product-title" style="font-size: 14px; font-weight: 500; margin: 12px 0 4px;"><?php the_title(); ?></h3>
                            <div class="product-price" style="font-size: 14px; color: #04040C;"><?php echo $product->get_price_html(); ?></div>
                        </a>
                    </div>
                    <?php
                endwhile;
                echo '</div>';
                wp_reset_postdata();
            else :
                // 示例产品数据
                $demo_products = array(
                    array(
                        'name' => 'Ribbed Bikini Set',
                        'price' => '$35.99',
                        'original_price' => '$45.99',
                        'image' => 'https://feed-img.cupshe.com/material/vc-upload-1773737832059-2-oyqyjfmhp8.jpg',
                    ),
                    array(
                        'name' => 'Floral One-Piece Swimsuit',
                        'price' => '$42.99',
                        'original_price' => '',
                        'image' => 'https://feed-img.cupshe.com/material/vc-upload-1773737857748-2-qsfl1yw0b3.jpg',
                    ),
                    array(
                        'name' => 'Boho Cover-Up Dress',
                        'price' => '$28.99',
                        'original_price' => '$38.99',
                        'image' => 'https://feed-img.cupshe.com/material/vc-upload-1773738026562-2-2nkxqu24hk.jpg',
                    ),
                    array(
                        'name' => 'High-Waisted Bikini',
                        'price' => '$39.99',
                        'original_price' => '',
                        'image' => 'https://feed-img.cupshe.com/material/vc-upload-1773737913091-2-bahen4ugvf.jpg',
                    ),
                    array(
                        'name' => 'Striped Beach Dress',
                        'price' => '$32.99',
                        'original_price' => '$42.99',
                        'image' => 'https://feed-img.cupshe.com/material/vc-upload-1773737878414-2-8znl3oir8r.jpg',
                    ),
                    array(
                        'name' => 'Crochet Swim Top',
                        'price' => '$26.99',
                        'original_price' => '',
                        'image' => 'https://feed-img.cupshe.com/material/vc-upload-1773737992424-2-00x2hf2sxr.jpg',
                    ),
                    array(
                        'name' => 'Flowy Beach Pants',
                        'price' => '$24.99',
                        'original_price' => '$32.99',
                        'image' => 'https://feed-img.cupshe.com/material/vc-upload-1773738008996-2-5hebot1qhr.jpg',
                    ),
                    array(
                        'name' => 'Tropical Print Bikini',
                        'price' => '$38.99',
                        'original_price' => '',
                        'image' => 'https://feed-img.cupshe.com/material/vc-upload-1773738048868-5-ejlho3qeav.jpg',
                    ),
                );
                ?>
                <div class="products-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 16px; padding: 0 24px;">
                    <?php foreach ($demo_products as $product) : ?>
                    <div class="product-item">
                        <a href="#">
                            <div class="product-image" style="position: relative; padding-bottom: 150%; background: #f2f2f2; overflow: hidden; border-radius: 4px;">
                                <img src="<?php echo esc_url($product['image']); ?>" alt="<?php echo esc_attr($product['name']); ?>" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; transition: transform 0.3s;">
                            </div>
                            <h3 class="product-title" style="font-size: 14px; font-weight: 500; margin: 12px 0 4px; color: #04040C;"><?php echo esc_html($product['name']); ?></h3>
                            <div class="product-price" style="font-size: 14px; color: #04040C;">
                                <?php if ($product['original_price']) : ?>
                                    <span style="text-decoration: line-through; color: #999; margin-right: 8px;"><?php echo esc_html($product['original_price']); ?></span>
                                    <span style="color: #ED3D59; font-weight: 600;"><?php echo esc_html($product['price']); ?></span>
                                <?php else : ?>
                                    <span><?php echo esc_html($product['price']); ?></span>
                                <?php endif; ?>
                            </div>
                        </a>
                    </div>
                    <?php endforeach; ?>
                </div>
                <?php
            endif;
            ?>
        </div>
    </section>
</div>

<!-- 15. spacing -->
<div id="spacing" data-floor-index="15">
    <section class="spacing" style="height: 45px;"></section>
</div>

<!-- 16. brandPromotion - THE CUPSHE WAY -->
<div id="brandPromotion" data-floor-index="16">
    <div class="home-cupsheway">
        <div class="home-cupsheway--sub-title">EVERY DAY, EVERYWHERE, EVERY WAY</div>
        <div class="home-cupsheway--title">
            <span>THE CUPSHE WAY</span>
            <div class="home-cupsheway--title-line">
                <img src="https://cdn-shopify.cupshe.com/static/9bfaa20e-e713-4d4b-9f1b-ad7b2c20e48a/Frame%201261155274.png" alt="">
            </div>
        </div>
        <div class="home-cupsheway--content">
            <div id="cupsheway-media-container" class="home-cupsheway--content-left">
                <img src="https://feed-img.cupshe.com/material/website/56ee6a51-493e-488c-acd3-c5f870e3b357_%E7%94%BB%E6%9D%BF%202.jpg" alt="OUR VALUES">
            </div>
            <div class="home-cupsheway--content-right">
                <div class="home-cupsheway--content-right-title">Turning everyday moments into adventures and inspiring women everywhere to feel <strong>confident, comfortable, and celebrated.</strong></div>
                <div class="home-cupsheway--content-right-text">
                    <div class="home-cupsheway--content-right-text-title">OUR VALUES</div>
                    <div class="home-cupsheway--content-right-text-nav">
                        <div class="home-cupsheway--content-right-text-items">
                            <div class="home-cupsheway--content-right-text-item">CELEBRATE EACH MOMENT</div>
                            <div class="home-cupsheway--content-right-text-item">EMBODY EVERY BODY</div>
                            <div class="home-cupsheway--content-right-text-item">DESIGN WITH INTENTION</div>
                            <div class="home-cupsheway--content-right-text-item">LIFT EACH OTHER UP</div>
                        </div>
                        <a id="home-cupsheway--link" href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="home-cupsheway--content-right-text-more">LEARN MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- 17. spacing -->
<div id="spacing" data-floor-index="17">
    <section class="spacing" style="height: 45px;"></section>
</div>

<!-- 18. ins - Instagram Feed -->
<div id="ins" data-floor-index="18">
    <div class="home-ins" data-index="17">
        <div class="home-ins--content" style="background-color: #FFFEEE;">
            <div class="home-ins--content-title">REAL MOMENTS, REAL STYLE</div>
            <div class="home-ins--content-text">Celebrate the everyday with style from our community, where real looks and effortless vibes come together.</div>
        </div>
        <div class="home-ins--gallery" style="display: grid; grid-template-columns: repeat(6, 1fr); gap: 8px; max-width: 1440px; margin: 0 auto; padding: 0 24px;">
            <?php for ($i = 1; $i <= 6; $i++) : ?>
            <a href="#" style="display: block;">
                <img src="https://feed-img.cupshe.com/material/website/ins-<?php echo $i; ?>.jpg" alt="Instagram" style="width: 100%; aspect-ratio: 1; object-fit: cover;">
            </a>
            <?php endfor; ?>
        </div>
    </div>
</div>

<!-- 19. spacing -->
<div id="spacing" data-floor-index="19">
    <section class="spacing" style="height: 45px;"></section>
</div>

<!-- 20. appDownload -->
<div id="appDownload" data-floor-index="20">
    <div class="floor-app-download" style="background-color: #04040C;">
        <div class="app-banner">
            <div class="phone-section">
                <div class="phone-screen">
                    <?php
                    $phone_image = get_theme_mod('cupshe_app_phone_image', 'https://feed-img.cupshe.com/material/website/35325e8b-6060-4dda-8212-15a2b10d9f57_PC-%E6%89%8B%E6%9C%BA%E4%B8%BB%E5%9B%BE.png');
                    ?>
                    <img src="<?php echo esc_url($phone_image); ?>" alt="app-download">
                </div>
            </div>
            <div class="promo-text-section">
                <p class="tagline" style="color: #CAEEEE">APP EXCLUSIVE</p>
                <h2 class="main-offer" style="color: #FFFFFF">UNLOCK 3 WELCOME COUPONS</h2>
                <ul class="benefits-list">
                    <li style="color: #FFFFFF">
                        <i><img src="https://feed-img.cupshe.com/material/website/f357ce2f-10d5-4da4-b554-8a55edbac7dc_%E5%8B%BE%E5%8F%B7.png" alt="check"></i>
                        <span>Enjoy Free Returns &amp; Exchanges in the App</span>
                    </li>
                    <li style="color: #FFFFFF">
                        <i><img src="https://feed-img.cupshe.com/material/website/f357ce2f-10d5-4da4-b554-8a55edbac7dc_%E5%8B%BE%E5%8F%B7.png" alt="check"></i>
                        <span>15% Off or Free Shipping on Your 1st App Order</span>
                    </li>
                    <li style="color: #FFFFFF">
                        <i><img src="https://feed-img.cupshe.com/material/website/f357ce2f-10d5-4da4-b554-8a55edbac7dc_%E5%8B%BE%E5%8F%B7.png" alt="check"></i>
                        <span>Real-Time Order Tracking</span>
                    </li>
                    <li style="color: #FFFFFF">
                        <i><img src="https://feed-img.cupshe.com/material/website/f357ce2f-10d5-4da4-b554-8a55edbac7dc_%E5%8B%BE%E5%8F%B7.png" alt="check"></i>
                        <span>Early Access to Special Releases</span>
                    </li>
                    <li style="color: #FFFFFF">
                        <i><img src="https://feed-img.cupshe.com/material/website/f357ce2f-10d5-4da4-b554-8a55edbac7dc_%E5%8B%BE%E5%8F%B7.png" alt="check"></i>
                        <span>App-Exclusive Deals</span>
                    </li>
                </ul>
            </div>
            <div class="download-section">
                <div class="download-header">
                    <div class="divider"></div>
                    <p class="download-title" style="color: #FFFFFF">DOWNLOAD CUPSHE APP</p>
                    <div class="divider"></div>
                </div>
                <div class="qr-and-stores">
                    <?php
                    $qr_code = get_theme_mod('cupshe_app_qr_code', 'https://feed-img.cupshe.com/material/website/7e2aca2b-d6de-4fb1-8849-5ebe1e6a0406_%E4%BA%8C%E7%BB%B4%E7%A0%81.jpg');
                    ?>
                    <div class="qr-code">
                        <img src="<?php echo esc_url($qr_code); ?>" alt="app-download-qr-code">
                    </div>
                    <a href="#" class="store-badge">
                        <img src="https://feed-img.cupshe.com/material/website/89c5e085-4c91-4cc2-b41a-d368a826bf6e_Badge.png" width="150px" style="width: 150px;" alt="app-download-google-play">
                    </a>
                    <a href="#" class="store-badge">
                        <img src="https://feed-img.cupshe.com/material/website/f0c731e7-9842-43a7-bb24-08a0aff03288_Badge-1.png" width="150px" style="width: 150px;" alt="app-download-app-store">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();

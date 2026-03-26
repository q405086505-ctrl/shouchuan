<?php
/**
 * The header for the theme
 *
 * @package Cupshe_Clone
 */

if (!defined('ABSPATH')) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no, viewport-fit=cover">
    <meta http-equiv="Accept-CH" content="Width, Viewport-Width, DPR">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>

    <style>
        @font-face {
            font-family: 'KMRMelangeGrotesk-Light';
            src: url('https://www.cupshestatic.com/shop/brand/fonts/KMRMelangeGrotesk-Light.woff2');
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'KMRMelangeGrotesk-Regular';
            src: url('https://www.cupshestatic.com/shop/brand/fonts/KMRMelangeGrotesk-Regular.woff2');
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'KMRMelangeGrotesk-SemiBold';
            src: url('https://www.cupshestatic.com/shop/brand/fonts/KMRMelangeGrotesk-SemiBold.woff2');
            font-style: normal;
            font-display: swap;
        }
        @font-face {
            font-family: 'KMRMelangeGrotesk-ExtraBold';
            src: url('https://www.cupshestatic.com/shop/brand/fonts/KMRMelangeGrotesk-ExtraBold.woff2');
            font-style: normal;
            font-display: swap;
        }
        .text-400 { font-weight: 400; }
        .text-600 { font-weight: 600; }
    </style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- SVG Icons -->
<svg style="position: absolute; width: 0px; height: 0px; overflow: hidden;">
    <symbol id="arrow_down" viewBox="0 0 16 16">
        <path d="M13.8277 6.00298C13.9526 6.12795 13.9526 6.33102 13.8277 6.45597L8.2288 12.0548C8.10385 12.1796 7.90143 12.179 7.7765 12.0541L2.17144 6.44906C2.04652 6.32415 2.04594 6.12174 2.17075 5.99676L2.62374 5.54377C2.74873 5.41909 2.95117 5.41959 3.07604 5.54446L8.00231 10.4707L12.9224 5.55068C13.0473 5.42571 13.2504 5.42571 13.3754 5.55068L13.8277 6.00298Z" fill="currentColor"></path>
    </symbol>
    <symbol id="header_logo" viewBox="0 0 167 39">
        <path d="M66.5827 1.03465C65.7703 1.12549 64.8191 1.12549 64.0542 1.03465C63.9195 0.991205 63.8284 1.0781 63.8284 1.21633C63.9631 7.70132 63.8284 14.2732 63.8284 19.8103C63.8284 30.0749 59.5799 34.7155 51.9469 34.7155C44.3139 34.7155 41.5992 29.8972 41.3733 22.1523C41.1474 15.1737 41.1474 8.23845 41.3733 1.21633C41.3733 1.08205 41.2822 0.991211 41.1474 0.991211C39.7009 1.12549 38.3019 1.12549 36.8553 0.991211C36.7206 0.991211 36.6294 1.08205 36.6294 1.21633C36.8553 8.28584 36.8553 15.308 36.6294 22.334C36.2688 33.5899 41.9598 37.5512 51.8994 37.5512C61.8389 37.5512 66.8086 31.5639 66.8086 19.6326C66.8086 15.4462 66.6739 8.10417 66.8086 1.21633C66.8086 1.08205 66.7175 0.991205 66.5827 1.03465Z" fill="#05050C"></path>
        <path d="M19.7651 2.69943C24.1007 2.69943 27.719 4.81633 29.8393 7.51775C29.8829 7.60859 30.0216 7.65203 30.1088 7.65203H30.3347C30.4695 7.65203 30.5606 7.60859 30.6042 7.47036L31.2819 4.27526C31.3255 4.05014 31.2819 3.86846 31.056 3.69073C28.0282 1.79895 23.8709 0.448242 19.5788 0.448242C9.13994 0.448242 0.646973 6.70812 0.646973 19.0896C0.646973 31.4712 8.59699 37.5493 19.7571 37.5493C23.7321 37.5493 27.8459 36.2895 30.3743 34.4885C30.5566 34.3977 30.6002 34.2634 30.6002 33.9948C30.6914 32.5533 30.9173 31.0683 31.2779 29.6268C31.3215 29.4451 31.2343 29.3582 31.0956 29.3582H30.6438C30.5527 29.3582 30.4179 29.4016 30.3743 29.4925C28.0718 33.0509 24.0492 35.3021 19.8007 35.3021C10.5825 35.3021 5.61276 28.276 5.61276 19.0936C5.61276 8.73813 11.2602 2.70337 19.7532 2.70337L19.7651 2.69943Z" fill="#05050C"></path>
        <path d="M143.973 0.986816C142.526 1.1211 141.127 1.1211 139.681 0.986816C139.546 0.986816 139.455 1.07766 139.455 1.21194L139.637 16.8794C139.637 17.0611 139.546 17.1045 139.411 17.1045C133.946 17.2388 128.386 17.2388 122.921 17.1045C122.786 17.1045 122.695 17.0611 122.695 16.8794L122.877 1.21194C122.877 1.07766 122.786 0.986816 122.651 0.986816C121.205 1.1211 119.806 1.1211 118.359 0.986816C118.224 0.986816 118.133 1.07766 118.133 1.21194C118.359 13.0524 118.359 24.8968 118.133 36.7846C118.133 36.9189 118.224 37.0097 118.359 37.0097C119.806 36.8754 121.205 36.8754 122.651 37.0097C122.786 37.0097 122.877 36.9189 122.877 36.7846C122.786 31.3383 122.695 25.7064 122.695 20.2601C122.695 20.1258 122.786 20.035 122.921 20.035C128.386 19.9007 133.946 19.9007 139.411 20.035C139.546 20.035 139.637 20.1258 139.637 20.2601C139.637 25.7064 139.546 31.3383 139.455 36.7846C139.455 36.9189 139.546 37.0097 139.681 37.0097C141.127 36.8754 142.526 36.8754 143.973 37.0097C144.108 37.0097 144.199 36.9189 144.199 36.7846C143.973 24.9442 143.973 13.0998 144.199 1.21194C144.199 1.07766 144.108 0.986816 143.973 0.986816Z" fill="#05050C"></path>
        <path d="M168.745 36.7846C168.654 35.8841 168.654 34.9837 168.745 34.1266C168.789 33.945 168.702 33.8581 168.52 33.8581C163.867 34.2175 159.123 34.4426 154.466 34.5334C154.332 34.5334 154.24 34.4426 154.24 34.3083C154.149 31.9228 154.058 26.204 154.058 20.3944C154.058 20.2601 154.149 20.1693 154.284 20.1693C158.441 20.1258 162.551 20.1693 166.756 20.3944C166.891 20.3944 166.982 20.3036 166.938 20.1693C166.847 19.2688 166.847 18.3683 166.938 17.4679C166.982 17.3336 166.895 17.2427 166.756 17.2427C162.555 17.4679 158.441 17.5113 154.284 17.4679C154.149 17.4679 154.058 17.377 154.058 17.2427C154.058 11.5239 154.149 5.93943 154.24 3.6448C154.24 3.55396 154.332 3.46312 154.466 3.46312C159.075 3.55395 163.685 3.77908 168.294 4.13848C168.476 4.13848 168.563 4.04765 168.52 3.86992C168.428 3.01289 168.428 2.11241 168.52 1.21194C168.563 1.07766 168.476 0.986816 168.337 0.986816C162.103 1.1211 155.913 1.1211 149.722 0.986816C149.588 0.986816 149.497 1.07766 149.497 1.21194C149.722 13.0524 149.722 24.9402 149.497 36.7846C149.497 36.9189 149.588 37.0097 149.722 37.0097C155.956 36.8754 162.282 36.8754 168.563 37.0097C168.698 37.0097 168.789 36.9189 168.745 36.7846Z" fill="#05050C"></path>
        <path d="M108.128 17.8726L102.12 14.8118C99.5005 13.5045 97.8716 11.7036 97.8716 8.82445C97.8716 4.99743 101.125 2.7028 104.332 2.7028C107.538 2.7028 109.753 4.41291 110.791 7.07089C110.883 7.20517 110.974 7.25257 111.061 7.25257H111.33C111.465 7.25257 111.556 7.16173 111.6 7.02745C111.826 5.81102 112.186 4.59459 112.729 3.33472C112.864 3.1096 112.821 2.88448 112.547 2.75019C110.423 1.30865 108.211 0.455566 105.001 0.455566C99.8056 0.455566 95.9178 2.93187 94.4752 6.57721C94.3841 6.75888 94.2493 6.75888 94.1582 6.57721C92.1687 3.10959 87.6983 0.992697 82.7285 0.992697L77.4417 1.08353C75.7257 1.08353 74.0097 1.08353 72.3372 0.992697C72.2025 0.992697 72.1113 1.08354 72.1113 1.21782C72.3372 13.0583 72.3372 24.9026 72.1113 36.7905C72.1113 36.9248 72.2025 37.0156 72.3372 37.0156C73.7838 36.8813 75.1828 36.8813 76.6293 37.0156C76.764 37.0156 76.8552 36.9248 76.8552 36.7905C76.764 31.7036 76.6729 26.4785 76.6729 21.3916C76.6729 21.2573 76.764 21.1665 76.8988 21.1665H81.3256C87.7419 21.1665 92.668 18.8718 94.4752 14.5906C94.5664 14.409 94.6575 14.409 94.7447 14.5906C95.6047 16.2099 97.0948 17.6989 99.6709 19.0022L104.91 21.6601C109.159 23.8205 110.197 25.8031 110.197 28.0069C110.197 32.1933 106.852 35.3015 102.56 35.3015C98.2679 35.3015 95.9178 33.0938 94.6536 30.2581C94.61 30.1238 94.4713 30.0764 94.3841 30.0764H94.067C93.9323 30.0764 93.8847 30.1199 93.8411 30.2581L92.8028 34.4919C92.7592 34.717 92.8028 34.9421 92.9851 35.0764C95.2005 36.7431 98.2719 37.5527 102.112 37.5527C109.25 37.5527 114.311 32.691 114.311 26.9248C114.311 23.0543 112.912 20.3055 108.12 17.8726H108.128ZM79.887 18.9113H76.9067C76.772 18.9113 76.6808 18.8205 76.6808 18.6862C76.6808 13.6428 76.772 8.46505 76.8631 3.469C76.8631 3.33472 76.9543 3.24388 77.089 3.24388H80.4339C86.7154 3.24388 90.1039 6.57721 90.1039 11.123C90.1039 15.9848 86.1725 18.9113 79.8909 18.9113H79.887Z" fill="#05050C"></path>
    </symbol>
    <symbol id="icon-search" viewBox="0 0 22 22" fill="none">
        <path d="M9.625 16.5C13.422 16.5 16.5 13.422 16.5 9.625C16.5 5.82804 13.422 2.75 9.625 2.75C5.82804 2.75 2.75 5.82804 2.75 9.625C2.75 13.422 5.82804 16.5 9.625 16.5Z" stroke="#04040C" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M14.4883 14.4865L19.2518 19.25" stroke="#04040C" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
    </symbol>
    <symbol id="icon-account" viewBox="0 0 25 25" fill="none">
        <path d="M11 13.75C14.0376 13.75 16.5 11.2876 16.5 8.25C16.5 5.21243 14.0376 2.75 11 2.75C7.96243 2.75 5.5 5.21243 5.5 8.25C5.5 11.2876 7.96243 13.75 11 13.75Z" stroke="#1F1F1F" stroke-width="1.44"></path>
        <path d="M2.75 18.5625C4.41461 15.6862 7.43789 13.75 11 13.75C14.5621 13.75 17.5854 15.6862 19.25 18.5625" stroke="#1F1F1F" stroke-width="1.44"></path>
    </symbol>
    <symbol id="icon-heart" viewBox="0 0 22 22" fill="none">
        <path d="M11.0006 19.2496L18.6799 11.4602C19.4859 10.6543 19.9386 9.56122 19.9386 8.42146C19.9386 7.28171 19.4859 6.18864 18.6799 5.38271C17.874 4.57679 16.7809 4.12402 15.6412 4.12402C14.5014 4.12402 13.4084 4.57679 12.6024 5.38271L11.0006 6.87459L9.39869 5.38271C8.59276 4.57679 7.49969 4.12402 6.35994 4.12402C5.22019 4.12402 4.12712 4.57679 3.32119 5.38271C2.51526 6.18864 2.0625 7.28171 2.0625 8.42146C2.0625 9.56122 2.51526 10.6543 3.32119 11.4602L11.0006 19.2496Z" stroke="#04040C" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
    </symbol>
    <symbol id="icon-bag" viewBox="0 0 22 22" fill="none">
        <path d="M16.5035 6.1875H5.74252C5.5889 6.18748 5.44057 6.24923 5.32545 6.36114C5.21034 6.47304 5.13639 6.62737 5.11752 6.79508L4.00424 19.3076C3.99394 19.4043 4.00246 19.5024 4.02922 19.5953C4.05599 19.6881 4.10039 19.7737 4.15948 19.8463C4.21858 19.9188 4.29102 19.9767 4.37201 20.0162C4.45299 20.0556 4.54067 20.0757 4.62924 20.075H17.6167C17.7053 20.0757 17.793 20.0556 17.874 20.0162C17.955 19.9767 18.0274 19.9188 18.0865 19.8463C18.1456 19.7737 18.19 19.6881 18.2168 19.5953C18.2435 19.5024 18.252 19.4043 18.2417 19.3076L17.1285 6.79508C17.1096 6.62737 17.0356 6.47304 16.9205 6.36114C16.8054 6.24923 16.6571 6.18748 16.5035 6.1875Z" stroke="#04040C" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
        <path d="M7.5625 8.9375V5.5C7.5625 4.58832 7.92466 3.71398 8.56932 3.06932C9.21398 2.42466 10.0883 2.0625 11 2.0625C11.9117 2.0625 12.786 2.42466 13.4307 3.06932C14.0753 3.71398 14.4375 4.58832 14.4375 5.5V8.9375" stroke="#04040C" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"></path>
    </symbol>
    <symbol id="icon-close" viewBox="0 0 24 24" fill="none">
        <path d="M18.75 5.25L5.25 18.75" stroke="black" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"></path>
        <path d="M18.75 18.75L5.25 5.25" stroke="black" stroke-width="1.5" stroke-linecap="square" stroke-linejoin="round"></path>
    </symbol>
</svg>

<?php if (!is_woocommerce() && !is_cart() && !is_checkout()) : ?>
<!-- Top Bar -->
<div class="pc-topbar">
    <div class="pc-topbar__container">
        <ul class="pc-topbar__list">
            <li class="pc-topbar__item">
                <a href="#"><strong><?php echo esc_html(get_theme_mod('cupshe_topbar_text', 'Subscribe & enjoy 15% off — no minimum required!')); ?></strong></a>
            </li>
        </ul>
    </div>
    <div class="pc-topbar__switch">
        <div class="international-select">
            <div class="international__content">
                <span class="international__text">$ / English</span>
                <img src="https://media.cupshe.com/static.cupshe.com/static/964b4803-d62e-4a7a-ab76-c04cca3219e5/us.png" alt="US" class="international__flag">
                <span class="international__arrow"><svg width="16" height="16"><use href="#arrow_down"></use></svg></span>
            </div>
        </div>
    </div>
</div>
<?php endif; ?>

<!-- Header -->
<div class="pc-header js-header">
    <div class="pc-header__inner">
        <div class="pc-header__logo">
            <a href="<?php echo esc_url(home_url('/')); ?>">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <svg width="170" aria-label="cupshe-logo" height="38" viewBox="0 0 167 39" xmlns="http://www.w3.org/2000/svg">
                        <use href="#header_logo"></use>
                    </svg>
                <?php endif; ?>
            </a>
        </div>
        <ul class="pc-header__actions">
            <li id="SEARCH_AREA" aria-label="search">
                <a href="<?php echo esc_url(wc_get_page_permalink('shop')); ?>">
                    <svg viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon-search"></use>
                    </svg>
                </a>
            </li>
            <li class="pc-header__item--user" aria-label="user">
                <svg viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                    <use href="#icon-account"></use>
                </svg>
                <div class="pc-header__popover logout-popover text-600">
                    <?php if (is_user_logged_in()) : ?>
                        <h4><?php echo esc_html__('Welcome!', 'cupshe-clone'); ?></h4>
                        <a class="text-400" href="<?php echo esc_url(wc_get_account_endpoint_url('dashboard')); ?>"><?php echo esc_html__('My Account', 'cupshe-clone'); ?></a>
                        <a class="text-400" href="<?php echo esc_url(wc_get_account_endpoint_url('orders')); ?>"><?php echo esc_html__('Orders', 'cupshe-clone'); ?></a>
                        <a class="text-400" href="<?php echo esc_url(wc_get_account_endpoint_url('edit-account')); ?>"><?php echo esc_html__('Edit Account', 'cupshe-clone'); ?></a>
                        <a class="text-400" href="<?php echo esc_url(wp_logout_url(home_url())); ?>"><?php echo esc_html__('Logout', 'cupshe-clone'); ?></a>
                    <?php else : ?>
                        <h4><?php echo esc_html__('Welcome!', 'cupshe-clone'); ?></h4>
                        <a class="pc-header__signin" href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>"><?php echo esc_html__('Sign In/Sign Up', 'cupshe-clone'); ?></a>
                        <a class="text-400" href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>"><?php echo esc_html__('Cupshe Club', 'cupshe-clone'); ?></a>
                        <a class="text-400" href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>"><?php echo esc_html__('Track My Order', 'cupshe-clone'); ?></a>
                    <?php endif; ?>
                </div>
            </li>
            <li aria-label="wishlist">
                <a href="<?php echo esc_url(wc_get_page_permalink('myaccount')); ?>" style="display:flex; align-items:center;">
                    <svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon-heart"></use>
                    </svg>
                </a>
            </li>
            <li aria-label="bag" style="cursor:pointer;">
                <a href="<?php echo esc_url(wc_get_cart_url()); ?>">
                    <svg width="22" height="22" viewBox="0 0 22 22" xmlns="http://www.w3.org/2000/svg">
                        <use href="#icon-bag"></use>
                    </svg>
                    <?php if (WC()->cart && WC()->cart->get_cart_contents_count() > 0) : ?>
                        <span class="cart-count"><?php echo esc_html(WC()->cart->get_cart_contents_count()); ?></span>
                    <?php endif; ?>
                </a>
            </li>
        </ul>
    </div>
</div>

<?php if (!is_woocommerce() && !is_cart() && !is_checkout()) : ?>
<!-- Navigation -->
<nav class="nav-wrap">
    <div class="nav-track">
        <div class="nav-list">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_class'     => '',
                'container'      => false,
                'items_wrap'     => '<ul id="PC_NAV_LIST">%3$s</ul>',
                'walker'         => new Cupshe_Nav_Walker(),
                'fallback_cb'    => function() {
                    echo '<ul id="PC_NAV_LIST">';
                    $default_menu_items = array(
                        'New & Trending' => '#',
                        'Bikinis' => '#',
                        'One-Pieces' => '#',
                        'Swimwear' => '#',
                        'Clothing' => '#',
                        'Cover-Ups' => '#',
                        'Accessories' => '#',
                        'Sale' => '#',
                    );
                    foreach ($default_menu_items as $title => $url) {
                        echo '<li class="nav-item nav-l1-item">';
                        echo '<a class="text-400 nav-item-link nav-l1-link" href="' . esc_url($url) . '" style="color: #000000;">' . esc_html($title) . '</a>';
                        echo '</li>';
                    }
                    echo '</ul>';
                },
            ));
            ?>
        </div>
    </div>
</nav>
<?php endif; ?>

<main class="main-content">

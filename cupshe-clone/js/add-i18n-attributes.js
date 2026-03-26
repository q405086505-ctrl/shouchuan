/**
 * 为页面内容添加 i18n 属性 / Add i18n attributes to page content
 * 运行一次即可 / Run once
 */

// 定义需要翻译的元素映射
const translationMappings = [
  // 导航栏
  { selector: '#PC_NAV_LIST li:nth-child(1) a', key: 'nav_new_trending' },
  { selector: '#PC_NAV_LIST li:nth-child(2) a', key: 'nav_crystal_bracelets' },
  { selector: '#PC_NAV_LIST li:nth-child(3) a', key: 'nav_buddha_beads' },
  { selector: '#PC_NAV_LIST li:nth-child(4) a', key: 'nav_agate_series' },
  { selector: '#PC_NAV_LIST li:nth-child(5) a', key: 'nav_sandalwood' },
  { selector: '#PC_NAV_LIST li:nth-child(6) a', key: 'nav_bodhi' },
  { selector: '#PC_NAV_LIST li:nth-child(7) a', key: 'nav_accessories' },
  { selector: '#PC_NAV_LIST li:nth-child(8) a', key: 'nav_sale' },
  
  // 政策横幅
  { selector: '.topBanner-item:nth-child(1) .topBanner-item-title', key: 'policy_free_returns' },
  { selector: '.topBanner-item:nth-child(1) .topBanner-item-desc', key: 'policy_subscribers' },
  { selector: '.topBanner-item:nth-child(2) .topBanner-item-title', key: 'policy_free_shipping' },
  { selector: '.topBanner-item:nth-child(2) .topBanner-item-desc', key: 'policy_in_app' },
  { selector: '.topBanner-item:nth-child(3) .topBanner-item-title', key: 'policy_discount' },
  { selector: '.topBanner-item:nth-child(3) .topBanner-item-desc', key: 'policy_sms' },
  
  // 分类区域
  { selector: '.channel h2', key: 'category_title' },
  
  // 热门产品
  { selector: '#categoryMarketingPositionB header h2', key: 'hot_products_title' },
  
  // 品牌故事
  { selector: '.home-cupsheway--sub-title', key: 'brand_subtitle' },
  { selector: '.home-cupsheway--title span', key: 'brand_title' },
  { selector: '.home-cupsheway--content-right-title', key: 'brand_content' },
  { selector: '.home-cupsheway--content-right-text-title', key: 'brand_values' },
  { selector: '.home-cupsheway--content-right-text-item:nth-child(1)', key: 'brand_value_1' },
  { selector: '.home-cupsheway--content-right-text-item:nth-child(2)', key: 'brand_value_2' },
  { selector: '.home-cupsheway--content-right-text-item:nth-child(3)', key: 'brand_value_3' },
  { selector: '.home-cupsheway--content-right-text-item:nth-child(4)', key: 'brand_value_4' },
  { selector: '.home-cupsheway--content-right-text-more', key: 'learn_more' },
  
  // Instagram
  { selector: '.home-ins--content-title', key: 'instagram_title' },
  { selector: '.home-ins--content-text', key: 'instagram_desc' },
  
  // APP 下载
  { selector: '.promo-text-section .tagline', key: 'app_exclusive' },
  { selector: '.promo-text-section .main-offer', key: 'app_welcome' },
  { selector: '.benefits-list li:nth-child(1) span', key: 'app_benefit_1' },
  { selector: '.benefits-list li:nth-child(2) span', key: 'app_benefit_2' },
  { selector: '.benefits-list li:nth-child(3) span', key: 'app_benefit_3' },
  { selector: '.benefits-list li:nth-child(4) span', key: 'app_benefit_4' },
  { selector: '.benefits-list li:nth-child(5) span', key: 'app_benefit_5' },
  { selector: '.download-title', key: 'download_title' },
  
  // 页脚
  { selector: '.footer__col:nth-child(1) h4', key: 'footer_customer_service' },
  { selector: '.footer__col:nth-child(1) li:nth-child(1) a', key: 'footer_contact_us' },
  { selector: '.footer__col:nth-child(1) li:nth-child(2) a', key: 'footer_shipping' },
  { selector: '.footer__col:nth-child(1) li:nth-child(3) a', key: 'footer_returns' },
  { selector: '.footer__col:nth-child(1) li:nth-child(4) a', key: 'footer_order_tracking' },
  { selector: '.footer__col:nth-child(1) li:nth-child(5) a', key: 'footer_size_guide' },
  { selector: '.footer__col:nth-child(1) li:nth-child(6) a', key: 'footer_faq' },
  
  { selector: '.footer__col:nth-child(2) h4', key: 'footer_about_us' },
  { selector: '.footer__col:nth-child(2) li:nth-child(1) a', key: 'footer_brand_story' },
  { selector: '.footer__col:nth-child(2) li:nth-child(2) a', key: 'footer_club' },
  { selector: '.footer__col:nth-child(2) li:nth-child(3) a', key: 'footer_careers' },
  { selector: '.footer__col:nth-child(2) li:nth-child(4) a', key: 'footer_press' },
  { selector: '.footer__col:nth-child(2) li:nth-child(5) a', key: 'footer_influencer' },
  { selector: '.footer__col:nth-child(2) li:nth-child(6) a', key: 'footer_affiliate' },
  
  { selector: '.footer__col:nth-child(3) h4', key: 'footer_help' },
  { selector: '.footer__col:nth-child(3) li:nth-child(1) a', key: 'footer_privacy' },
  { selector: '.footer__col:nth-child(3) li:nth-child(2) a', key: 'footer_terms' },
  { selector: '.footer__col:nth-child(3) li:nth-child(3) a', key: 'footer_accessibility' },
  { selector: '.footer__col:nth-child(3) li:nth-child(4) a', key: 'footer_personal_info' },
  
  { selector: '.footer__col:nth-child(4) h4', key: 'footer_follow_us' },
  { selector: '.footer__copyright p:first-child', key: 'footer_copyright' }
];

// 添加 data-i18n 属性
function addI18nAttributes() {
  translationMappings.forEach(mapping => {
    const element = document.querySelector(mapping.selector);
    if (element) {
      element.setAttribute('data-i18n', mapping.key);
      console.log(`Added data-i18n="${mapping.key}" to`, element);
    } else {
      console.warn(`Element not found for selector: ${mapping.selector}`);
    }
  });
  
  console.log('✅ i18n attributes added successfully!');
}

// DOM 加载完成后执行
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', addI18nAttributes);
} else {
  addI18nAttributes();
}

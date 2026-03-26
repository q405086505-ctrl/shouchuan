/**
 * 自动为页面元素添加 data-i18n 属性
 * Auto-add data-i18n attributes to page elements
 */

(function() {
  // 定义选择器和对应的翻译键
  const i18nMappings = [
    // 顶部公告栏
    { selector: '.pc-topbar__item strong', key: 'topbar_promo' },
    
    // 用户菜单
    { selector: '.pc-header__popover h4', key: 'welcome' },
    { selector: '.pc-header__signin', key: 'signin_signup' },
    { selector: '.pc-header__popover a:nth-child(2)', key: 'cupshe_club' },
    { selector: '.pc-header__popover a:nth-child(3)', key: 'track_order' },
    { selector: '.pc-header__popover a:nth-child(4)', key: 'order_history' },
    { selector: '.pc-header__popover a:nth-child(5)', key: 'sunchasers_center' },
    { selector: '.pc-header__popover a:nth-child(6)', key: 'my_messages' },
    { selector: '.pc-header__popover a:nth-child(7)', key: 'store_credit' },
    
    // 主导航
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
    
    // 分类标题
    { selector: '.channel h2', key: 'category_title' },
    
    // 热门产品标题
    { selector: '#categoryMarketingPositionB h2', key: 'hot_products_title' },
    
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
    
    // Instagram 区域
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
    
    // 页脚 - 客户服务
    { selector: '.footer__col:nth-child(1) h4', key: 'footer_customer_service' },
    { selector: '.footer__col:nth-child(1) li:nth-child(1) span', key: 'footer_contact_us' },
    { selector: '.footer__col:nth-child(1) li:nth-child(2) span', key: 'footer_shipping' },
    { selector: '.footer__col:nth-child(1) li:nth-child(3) span', key: 'footer_returns' },
    { selector: '.footer__col:nth-child(1) li:nth-child(4) span', key: 'footer_order_tracking' },
    { selector: '.footer__col:nth-child(1) li:nth-child(5) span', key: 'footer_size_guide' },
    { selector: '.footer__col:nth-child(1) li:nth-child(6) span', key: 'footer_faq' },
    
    // 页脚 - 关于我们
    { selector: '.footer__col:nth-child(2) h4', key: 'footer_about_us' },
    { selector: '.footer__col:nth-child(2) li:nth-child(1) span', key: 'footer_brand_story' },
    { selector: '.footer__col:nth-child(2) li:nth-child(2) span', key: 'footer_club' },
    { selector: '.footer__col:nth-child(2) li:nth-child(3) span', key: 'footer_careers' },
    { selector: '.footer__col:nth-child(2) li:nth-child(4) span', key: 'footer_press' },
    { selector: '.footer__col:nth-child(2) li:nth-child(5) span', key: 'footer_influencer' },
    { selector: '.footer__col:nth-child(2) li:nth-child(6) span', key: 'footer_affiliate' },
    
    // 页脚 - 帮助中心
    { selector: '.footer__col:nth-child(3) h4', key: 'footer_help' },
    { selector: '.footer__col:nth-child(3) li:nth-child(1) span', key: 'footer_privacy' },
    { selector: '.footer__col:nth-child(3) li:nth-child(2) span', key: 'footer_terms' },
    { selector: '.footer__col:nth-child(3) li:nth-child(3) span', key: 'footer_accessibility' },
    { selector: '.footer__col:nth-child(3) li:nth-child(4) span', key: 'footer_personal_info' },
    
    // 页脚 - 关注我们
    { selector: '.footer__col:nth-child(4) h4', key: 'footer_follow_us' },
    { selector: '.footer__copyright p:first-child', key: 'footer_copyright' }
  ];
  
  // 为元素添加 data-i18n 属性
  function addI18nAttributes() {
    console.log('开始添加 data-i18n 属性...');
    let addedCount = 0;
    
    i18nMappings.forEach(mapping => {
      const elements = document.querySelectorAll(mapping.selector);
      elements.forEach(element => {
        if (!element.hasAttribute('data-i18n')) {
          element.setAttribute('data-i18n', mapping.key);
          addedCount++;
          console.log(`✓ 添加 data-i18n="${mapping.key}" 到元素:`, element.textContent.trim().substring(0, 30));
        }
      });
    });
    
    console.log(`✅ 完成！共添加 ${addedCount} 个 data-i18n 属性`);
    
    // 添加完成后，触发语言初始化
    if (window.LanguageSwitcher && window.LanguageSwitcher.init) {
      window.LanguageSwitcher.init();
    }
  }
  
  // DOM 加载完成后执行
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', addI18nAttributes);
  } else {
    addI18nAttributes();
  }
})();

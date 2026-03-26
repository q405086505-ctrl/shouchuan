/**
 * 多语言翻译系统 / Multi-language Translation System
 * 支持中文和英文切换 / Support Chinese and English switching
 */

// 语言包 / Language Pack
const translations = {
  zh: {
    // 顶部导航栏 / Top Navigation
    'topbar_promo': '新用户专享 9 折优惠 — 首次订阅即享！',
    'signin_signup': '登录/注册',
    'cupshe_club': '会员俱乐部',
    'track_order': '订单追踪',
    'order_history': '订单历史',
    'sunchasers_center': '会员中心',
    'my_messages': '我的消息',
    'store_credit': '账户余额',
    'welcome': '欢迎光临！',
    
    // 主导航 / Main Navigation
    'nav_new_trending': '新品热卖',
    'nav_crystal_bracelets': '水晶手串',
    'nav_buddha_beads': '佛珠念珠',
    'nav_buddha_beads_alt': '佛珠念珠',
    'nav_agate_series': '玛瑙系列',
    'nav_sandalwood': '檀木手串',
    'nav_bodhi': '菩提子',
    'nav_accessories': '配饰配件',
    'nav_sale': '特惠专区',
    
    // 搜索和购物车 / Search & Cart
    'search_placeholder': '搜索手串、水晶、佛珠...',
    
    // 政策横幅 / Policy Banner
    'policy_free_returns': '免费退换货',
    'policy_subscribers': '注册会员专享',
    'policy_free_shipping': '免费退换',
    'policy_in_app': 'APP 下单享',
    'policy_discount': '买 2 件享 8 折',
    'policy_sms': '新短信订阅用户',
    'policy_secure_payment': '安全支付',
    'policy_quality_guarantee': '品质保证',
    'policy_authentic': '正品保障',
    
    // Instagram 区域 / Instagram Section
    'instagram_title': '真实分享 · 雅致生活',
    'instagram_desc': '来自社区的真实佩戴分享，展现东方美学与现代生活的完美融合。',
    
    // APP 下载 / App Download
    'app_exclusive': 'APP 专享礼遇',
    'app_welcome': '领取三重迎新好礼',
    'app_benefit_1': 'APP 内享受免费退换货',
    'app_benefit_2': '首单享 9 折或包邮优惠',
    'app_benefit_3': '实时订单物流追踪',
    'app_benefit_4': '新品抢先购',
    'app_benefit_5': 'APP 专属折扣',
    'download_title': '下载手串官方 APP',
    'download_app': '下载 APP',
    'category_title': '东方美学 · 匠心传承',
    'category_crystal': '水晶手串',
    'category_jade': '翡翠玉石',
    'category_sandalwood': '檀木沉香',
    'category_agate': '玛瑙琥珀',
    'category_bodhi': '菩提文玩',
    'category_honey_amber': '蜜蜡珠串',
    'category_accessories': '配饰配件',
    
    // 横幅广告 / Banners
    'banner_family': '传承经典 · 家族珍藏',
    'banner_styles': '匠心工艺 · 便携雅致',
    'banner_playful': '灵动雅致 · 实用美观',
    'banner_vacation': '禅意生活 · 静心之旅',
    'banner_shoreline': '品质典范 · 精工细作',
    'banner_orlando': '都市禅意 · 闲适时光',
    
    // 热门产品 / Hot Products
    'hot_products_title': '当季热卖推荐',
    'product_1_name': '天然紫水晶手串 - 智慧之石',
    'product_2_name': 'A 货翡翠玉石手串 - 温润典雅',
    'product_3_name': '印度小叶紫檀手串 - 佛家七宝',
    'product_4_name': '保山南红玛瑙手串 - 中国红',
    'product_5_name': '高密星月菩提手串 - 岁月包浆',
    'product_6_name': '波罗的海蜜蜡手串 - 千年琥珀',
    'product_7_name': '湖北绿松石手串 - 成功之石',
    'product_8_name': '尼泊尔金刚菩提手串 - 力量象征',
    
    // 品牌故事 / Brand Story
    'brand_subtitle': '传承千年文化 · 品味东方雅韵',
    'brand_title': '手串之道',
    'brand_content': '将传统工艺与现代美学完美融合，让每一串手串都承载着深厚的文化底蕴和美好寓意。用心甄选天然材质，传承东方智慧，为现代生活注入禅意与雅致。',
    'brand_values': '品牌理念',
    'brand_value_1': '甄选天然材质',
    'brand_value_2': '传承古法工艺',
    'brand_value_3': '融合现代设计',
    'brand_value_4': '传递美好寓意',
    'learn_more': '了解更多',
    
    // Instagram 区域 / Instagram Section
    'instagram_title': '真实分享 · 雅致生活',
    'instagram_desc': '来自社区的真实佩戴分享，展现东方美学与现代生活的完美融合。',
    
    // APP 下载 / App Download
    'app_exclusive': 'APP 专享礼遇',
    'app_welcome': '领取三重迎新好礼',
    'app_benefit_1': 'APP 内享受免费退换货',
    'app_benefit_2': '首单享 9 折或包邮优惠',
    'app_benefit_3': '实时订单物流追踪',
    'app_benefit_4': '新品抢先购',
    'app_benefit_5': 'APP 专属折扣',
    'download_title': '下载手串官方 APP',
    
    // 页脚 / Footer
    'footer_customer_service': '客户服务',
    'footer_contact_us': '联系我们',
    'footer_shipping': '配送说明',
    'footer_returns': '退换政策',
    'footer_order_tracking': '订单查询',
    'footer_size_guide': '尺寸指南',
    'footer_faq': '常见问题',
    
    'footer_about_us': '关于我们',
    'footer_brand_story': '品牌故事',
    'footer_club': '会员俱乐部',
    'footer_careers': '加入我们',
    'footer_press': '媒体报道',
    'footer_influencer': '达人合作',
    'footer_affiliate': '联盟计划',
    
    'footer_help': '帮助中心',
    'footer_privacy': '隐私政策',
    'footer_terms': '服务条款',
    'footer_accessibility': '无障碍声明',
    'footer_personal_info': '个人信息保护',
    
    'footer_follow_us': '关注我们',
    'footer_instagram': '关注我们的 Instagram',
    'footer_twitter': '关注我们的 Twitter',
    'footer_facebook': '关注我们的 Facebook',
    
    'footer_copyright': '© 2026 手串官方。All rights reserved.',
    'footer_icp': '京 ICP 备 XXXXXXXX 号',
    'footer_police': '京公网安备 XXXXXXXXXXXXXX 号',
    'footer_license': '营业执照',
    
    // 语言切换器 / Language Switcher
    'language': '语言',
    'language_zh': '中文',
    'language_en': 'English'
  },
  
  en: {
    // Top Navigation
    'topbar_promo': 'New User Exclusive 10% Off — Subscribe Now!',
    'signin_signup': 'Sign In / Sign Up',
    'cupshe_club': 'Member Club',
    'track_order': 'Track Order',
    'order_history': 'Order History',
    'sunchasers_center': 'Member Center',
    'my_messages': 'My Messages',
    'store_credit': 'Store Credit',
    'welcome': 'Welcome!',
    
    // Main Navigation
    'nav_new_trending': 'New & Trending',
    'nav_crystal_bracelets': 'Crystal Bracelets',
    'nav_buddha_beads': 'Buddha Beads',
    'nav_buddha_beads_alt': 'Buddha Beads',
    'nav_agate_series': 'Agate Series',
    'nav_sandalwood': 'Sandalwood',
    'nav_bodhi': 'Bodhi Seeds',
    'nav_accessories': 'Accessories',
    'nav_sale': 'Sale',
    
    // Search & Cart
    'search_placeholder': 'Search bracelets, crystals, beads...',
    
    // Policy Banner
    'policy_free_returns': 'FREE RETURNS & EXCHANGES',
    'policy_subscribers': 'For Registered Subscribers',
    'policy_free_shipping': 'FREE RETURNS',
    'policy_in_app': 'In the App',
    'policy_discount': '20% OFF 2PCS+',
    'policy_sms': 'For New SMS Subscribers',
    
    // Category Section
    'category_title': 'Eastern Aesthetics · Craftsmanship',
    'category_crystal': 'Crystal Bracelets',
    'category_jade': 'Jade & Gemstone',
    'category_sandalwood': 'Sandalwood & Agarwood',
    'category_agate': 'Agate & Amber',
    'category_bodhi': 'Bodhi & Textual Research',
    'category_honey_amber': 'Honey Wax Beads',
    'category_accessories': 'Accessories',
    
    // Banners
    'banner_family': 'Heritage Classics · Family Collection',
    'banner_styles': 'Craftsmanship · Portable Elegance',
    'banner_playful': 'Vivid Elegance · Practical Beauty',
    'banner_vacation': 'Zen Life · Peaceful Journey',
    'banner_shoreline': 'Quality Model · Fine Craftsmanship',
    'banner_orlando': 'Urban Zen · Leisure Time',
    
    // Hot Products
    'hot_products_title': 'WHAT\'S HOT RIGHT NOW',
    'product_1_name': 'Natural Amethyst Bracelet - Stone of Wisdom',
    'product_2_name': 'Grade A Jade Bracelet -温润 Elegant',
    'product_3_name': 'Indian Red Sandalwood - Seven Buddhist Treasures',
    'product_4_name': 'Baoshan Southern Red Agate - Chinese Red',
    'product_5_name': 'Gaomi Star Moon Bodhi - Aged Patina',
    'product_6_name': 'Baltic Honey Wax Bracelet - Millennium Amber',
    'product_7_name': 'Hubei Turquoise Bracelet - Stone of Success',
    'product_8_name': 'Nepal Diamond Bodhi - Symbol of Strength',
    
    // Brand Story
    'brand_subtitle': 'Inheriting Millennial Culture · Eastern Elegance',
    'brand_title': 'THE WAY OF BRACELETS',
    'brand_content': 'Perfectly blending traditional craftsmanship with modern aesthetics, each bracelet carries profound cultural heritage and beautiful meanings. Carefully selected natural materials, inheriting Eastern wisdom, injecting Zen and elegance into modern life.',
    'brand_values': 'OUR VALUES',
    'brand_value_1': 'Select Natural Materials',
    'brand_value_2': 'Inherit Ancient Craftsmanship',
    'brand_value_3': 'Blend Modern Design',
    'brand_value_4': 'Deliver Beautiful Meanings',
    'learn_more': 'LEARN MORE',
    
    // Instagram Section
    'instagram_title': 'REAL MOMENTS, REAL STYLE',
    'instagram_desc': 'Real wearing shares from our community, showcasing the perfect blend of Eastern aesthetics and modern life.',
    
    // App Download
    'app_exclusive': 'APP EXCLUSIVE',
    'app_welcome': 'UNLOCK 3 WELCOME COUPONS',
    'app_benefit_1': 'Enjoy Free Returns & Exchanges in the App',
    'app_benefit_2': '15% Off or Free Shipping on Your 1st App Order',
    'app_benefit_3': 'Real-Time Order Tracking',
    'app_benefit_4': 'Early Access to Special Releases',
    'app_benefit_5': 'App-Exclusive Deals',
    'download_title': 'DOWNLOAD BRACELET APP',
    
    // Footer
    'footer_customer_service': 'Customer Service',
    'footer_contact_us': 'Contact Us',
    'footer_shipping': 'Shipping & Delivery',
    'footer_returns': 'Returns & Exchanges',
    'footer_order_tracking': 'Order Tracking',
    'footer_size_guide': 'Size Guide',
    'footer_faq': 'FAQ',
    
    'footer_about_us': 'About Us',
    'footer_brand_story': 'Our Story',
    'footer_club': 'Bracelet Club',
    'footer_careers': 'Careers',
    'footer_press': 'Press',
    'footer_influencer': 'Influencer Program',
    'footer_affiliate': 'Affiliate Program',
    
    'footer_help': 'Help',
    'footer_privacy': 'Privacy Policy',
    'footer_terms': 'Terms of Service',
    'footer_accessibility': 'Accessibility',
    'footer_personal_info': 'Personal Information Protection',
    
    'footer_follow_us': 'Connect With Us',
    'footer_instagram': 'Follow us on Instagram',
    'footer_twitter': 'Follow us on Twitter',
    'footer_facebook': 'Follow us on Facebook',
    
    'footer_copyright': '© 2026 Bracelet Official. All rights reserved.',
    'footer_icp': 'ICP License No. XXXXXXXX',
    'footer_police': 'Public Security No. XXXXXXXXXXXXXX',
    'footer_license': 'Business License',
    
    // Language Switcher
    'language': 'Language',
    'language_zh': '中文',
    'language_en': 'English'
  }
};

// 当前语言 / Current language (默认英文 / Default English)
let currentLang = 'en';

/**
 * 初始化语言系统 / Initialize language system
 */
function initLanguage() {
  console.log('初始化语言系统...');
  
  // 从 localStorage 读取保存的语言设置
  const savedLang = localStorage.getItem('preferredLanguage');
  if (savedLang && translations[savedLang]) {
    currentLang = savedLang;
    console.log('从 localStorage 读取语言:', savedLang);
  } else {
    console.log('使用默认语言: en');
  }
  
  // 应用翻译
  applyTranslations();
  
  // 更新语言切换器状态
  updateLanguageSwitcher();
  
  console.log('语言系统初始化完成，当前语言:', currentLang);
}

/**
 * 应用翻译到页面 / Apply translations to page
 */
function applyTranslations() {
  console.log('应用翻译，当前语言:', currentLang);
  const elements = document.querySelectorAll('[data-i18n]');
  console.log('找到需要翻译的元素数量:', elements.length);
  
  let translatedCount = 0;
  let skippedCount = 0;
  
  elements.forEach(element => {
    const key = element.getAttribute('data-i18n');
    if (translations[currentLang] && translations[currentLang][key]) {
      // 检查是否是 HTML 属性
      const attr = element.getAttribute('data-i18n-attr');
      if (attr) {
        element.setAttribute(attr, translations[currentLang][key]);
      } else {
        element.textContent = translations[currentLang][key];
      }
      translatedCount++;
    } else {
      skippedCount++;
      console.warn('翻译键不存在:', key, '语言:', currentLang);
    }
  });
  
  console.log(`翻译完成 - 已翻译: ${translatedCount}, 跳过: ${skippedCount}`);
  
  // 更新 HTML lang 属性
  document.documentElement.lang = currentLang === 'zh' ? 'zh-CN' : 'en';
  
  // 更新 SEO 标签
  updateSEOTags();
}

/**
 * 更新 SEO 标签 / Update SEO tags
 */
function updateSEOTags() {
  const seoTranslations = {
    zh: {
      title: '手串官方旗舰店 | 2026 新款天然水晶手串_佛珠念珠_文玩饰品 - 传承东方美学【包邮】【正品保证】',
      description: '手串官方旗舰店专营天然水晶手串、翡翠玉石、檀木沉香、玛瑙琥珀、菩提子等文玩饰品。2026 年新品上市，手工串制，传承千年工艺。注册会员享 9 折优惠，全场包邮，30 天无忧退换。',
      ogTitle: '手串官方 | 天然水晶手串与文玩饰品专家',
      ogDescription: '探索 2026 新款天然水晶手串、佛珠、文玩饰品。传承东方美学，手工串制，品质保证。'
    },
    en: {
      title: 'Bracelet Official | 2026 Natural Crystal Bracelets, Buddha Beads & Eastern Jewelry',
      description: 'Shop premium natural crystal bracelets, jade, sandalwood, agate, and bodhi beads at Bracelet Official. Handcrafted with traditional techniques. New user 10% off, free shipping, 30-day returns.',
      ogTitle: 'Bracelet Official | Natural Crystal Bracelets & Eastern Jewelry Expert',
      ogDescription: 'Discover 2026 new arrivals of natural crystal bracelets, Buddha beads, and Eastern jewelry. Traditional craftsmanship, quality guaranteed.'
    }
  };
  
  // 更新标题
  document.title = seoTranslations[currentLang].title;
  
  // 更新 meta description
  const metaDesc = document.querySelector('meta[name="description"]');
  if (metaDesc) {
    metaDesc.setAttribute('content', seoTranslations[currentLang].description);
  }
  
  // 更新 Open Graph
  const ogTitle = document.querySelector('meta[property="og:title"]');
  const ogDesc = document.querySelector('meta[property="og:description"]');
  if (ogTitle) ogTitle.setAttribute('content', seoTranslations[currentLang].ogTitle);
  if (ogDesc) ogDesc.setAttribute('content', seoTranslations[currentLang].ogDescription);
}

/**
 * 切换语言 / Switch language
 * @param {string} lang - 目标语言 / Target language ('zh' or 'en')
 */
function switchLanguage(lang) {
  console.log('切换语言:', lang, '当前语言:', currentLang);
  
  if (!translations[lang]) {
    console.error('目标语言不存在:', lang);
    return;
  }
  
  currentLang = lang;
  console.log('语言已切换为:', currentLang);
  
  // 保存到 localStorage
  localStorage.setItem('preferredLanguage', lang);
  console.log('已保存到 localStorage');
  
  // 应用翻译
  applyTranslations();
  
  // 更新语言切换器状态
  updateLanguageSwitcher();
  
  // 触发语言切换事件
  window.dispatchEvent(new CustomEvent('languageChanged', { detail: { lang } }));
  console.log('语言切换完成');
}

/**
 * 更新语言切换器状态 / Update language switcher state
 */
function updateLanguageSwitcher() {
  console.log('更新语言切换器状态，当前语言:', currentLang);
  
  const langButtons = document.querySelectorAll('.lang-switch-btn');
  
  langButtons.forEach(btn => {
    // 更新按钮显示
    const langDisplay = btn.querySelector('.lang-display');
    const langIcon = btn.querySelector('.lang-icon');
    
    if (langDisplay) {
      langDisplay.textContent = currentLang === 'zh' ? '中文' : 'EN';
      console.log('更新语言显示按钮:', langDisplay.textContent);
    }
    
    // 更新 active 状态
    btn.classList.remove('active');
    if (btn.getAttribute('data-lang') === currentLang) {
      btn.classList.add('active');
    }
  });
  
  // 更新下拉菜单选中状态
  const langOptions = document.querySelectorAll('.lang-option');
  langOptions.forEach(option => {
    option.classList.remove('active');
    if (option.getAttribute('data-lang') === currentLang) {
      option.classList.add('active');
    }
  });
}

/**
 * 获取当前语言 / Get current language
 * @returns {string} 当前语言代码 / Current language code
 */
function getCurrentLanguage() {
  return currentLang;
}

/**
 * 翻译文本 / Translate text
 * @param {string} key - 翻译键 / Translation key
 * @param {string} lang - 可选，指定语言 / Optional, specify language
 * @returns {string} 翻译后的文本 / Translated text
 */
function translate(key, lang = null) {
  const targetLang = lang || currentLang;
  return translations[targetLang][key] || key;
}

// 导出函数 / Export functions
window.LanguageSwitcher = {
  init: initLanguage,
  switch: switchLanguage,
  getCurrent: getCurrentLanguage,
  translate: translate
};

// DOM 加载完成后初始化 / Initialize after DOM loaded
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', () => {
    initLanguage();
    setupLanguageSwitcherListeners();
  });
} else {
  initLanguage();
  setupLanguageSwitcherListeners();
}

/**
 * 设置语言切换器事件监听 / Setup language switcher event listeners
 */
function setupLanguageSwitcherListeners() {
  // 为语言切换按钮添加点击事件
  const langSwitcher = document.getElementById('header-language-switcher');
  if (langSwitcher) {
    const langOptions = langSwitcher.querySelectorAll('.lang-option');
    
    langOptions.forEach(option => {
      option.addEventListener('click', (e) => {
        e.stopPropagation();
        const targetLang = option.getAttribute('data-lang');
        if (targetLang && targetLang !== currentLang) {
          switchLanguage(targetLang);
          showToast(targetLang === 'zh' ? '已切换至中文' : 'Switched to English');
        }
      });
    });
    
    // 阻止点击下拉菜单时关闭
    const dropdown = langSwitcher.querySelector('.lang-dropdown');
    if (dropdown) {
      dropdown.addEventListener('click', (e) => {
        e.stopPropagation();
      });
    }
  }
  
  // 点击其他地方关闭下拉菜单
  document.addEventListener('click', () => {
    if (langSwitcher) {
      langSwitcher.classList.remove('active');
    }
  });
}

/**
 * 显示切换提示 / Show toast notification
 * @param {string} message - 提示信息 / Toast message
 */
function showToast(message) {
  // 移除已存在的 toast
  const existingToast = document.querySelector('.lang-toast');
  if (existingToast) {
    existingToast.remove();
  }
  
  // 创建新的 toast
  const toast = document.createElement('div');
  toast.className = 'lang-toast';
  toast.textContent = message;
  document.body.appendChild(toast);
  
  // 显示 toast
  setTimeout(() => {
    toast.classList.add('show');
  }, 10);
  
  // 3 秒后隐藏
  setTimeout(() => {
    toast.classList.remove('show');
    setTimeout(() => {
      toast.remove();
    }, 300);
  }, 3000);
}

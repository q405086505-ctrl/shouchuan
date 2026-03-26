/**
 * 数据分析工具集成 / Analytics Tools Integration
 * Google Analytics + 百度统计 + 事件追踪
 */

(function() {
  'use strict';
  
  // 配置 / Configuration
  const config = {
    googleAnalyticsId: 'G-XXXXXXXXXX', // 替换为您的 GA4 ID
    baiduAnalyticsId: 'XXXXXXXXXXXX',  // 替换为您的百度统计 ID
    facebookPixelId: 'XXXXXXXXXXXX',   // 替换为您的 Facebook Pixel ID
    enabled: true
  };
  
  /**
   * Google Analytics 4 集成
   */
  function initGoogleAnalytics() {
    if (!config.googleAnalyticsId || config.googleAnalyticsId === 'G-XXXXXXXXXX') {
      console.warn('Google Analytics ID 未配置');
      return;
    }
    
    // 加载 GA4 脚本
    const script = document.createElement('script');
    script.async = true;
    script.src = `https://www.googletagmanager.com/gtag/js?id=${config.googleAnalyticsId}`;
    document.head.appendChild(script);
    
    // 初始化 gtag
    window.dataLayer = window.dataLayer || [];
    function gtag() {
      window.dataLayer.push(arguments);
    }
    window.gtag = gtag;
    
    gtag('js', new Date());
    gtag('config', config.googleAnalyticsId, {
      page_title: document.title,
      page_location: window.location.href,
      language: window.LanguageSwitcher ? window.LanguageSwitcher.getCurrent() : 'en',
      send_page_view: true
    });
    
    console.log('✅ Google Analytics 4 已初始化');
  }
  
  /**
   * 百度统计集成
   */
  function initBaiduAnalytics() {
    if (!config.baiduAnalyticsId || config.baiduAnalyticsId === 'XXXXXXXXXXXX') {
      console.warn('百度统计 ID 未配置');
      return;
    }
    
    // 加载百度统计脚本
    const script = document.createElement('script');
    script.src = `https://hm.baidu.com/hm.js?${config.baiduAnalyticsId}`;
    script.async = true;
    document.head.appendChild(script);
    
    console.log('✅ 百度统计已初始化');
  }
  
  /**
   * Facebook Pixel 集成
   */
  function initFacebookPixel() {
    if (!config.facebookPixelId || config.facebookPixelId === 'XXXXXXXXXXXX') {
      return;
    }
    
    // Facebook Pixel 代码
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    
    window.fbq('init', config.facebookPixelId);
    window.fbq('track', 'PageView');
    
    console.log('✅ Facebook Pixel 已初始化');
  }
  
  /**
   * 事件追踪 / Event Tracking
   */
  const EventTracker = {
    /**
     * 追踪页面浏览 / Track page view
     */
    trackPageView(pageName) {
      if (window.gtag) {
        gtag('event', 'page_view', {
          page_title: pageName,
          page_location: window.location.href
        });
      }
      
      if (window._hmt) {
        window._hmt.push(['_trackPageview', pageName]);
      }
      
      console.log('📊 页面浏览追踪:', pageName);
    },
    
    /**
     * 追踪产品查看 / Track product view
     */
    trackProductView(product) {
      if (window.gtag) {
        gtag('event', 'view_item', {
          currency: 'CNY',
          value: product.price,
          items: [{
            item_id: product.id,
            item_name: product.name,
            category: product.category,
            price: product.price
          }]
        });
      }
      
      if (window.fbq) {
        fbq('track', 'ViewContent', {
          content_type: 'product',
          content_ids: [product.id],
          content_name: product.name,
          content_category: product.category,
          value: product.price,
          currency: 'CNY'
        });
      }
      
      console.log('📊 产品查看追踪:', product.name);
    },
    
    /**
     * 追踪添加到购物车 / Track add to cart
     */
    trackAddToCart(product) {
      if (window.gtag) {
        gtag('event', 'add_to_cart', {
          currency: 'CNY',
          value: product.price,
          items: [{
            item_id: product.id,
            item_name: product.name,
            category: product.category,
            price: product.price,
            quantity: 1
          }]
        });
      }
      
      if (window.fbq) {
        fbq('track', 'AddToCart', {
          content_ids: [product.id],
          content_name: product.name,
          content_type: 'product',
          value: product.price,
          currency: 'CNY'
        });
      }
      
      console.log('📊 添加购物车追踪:', product.name);
    },
    
    /**
     * 追踪购买 / Track purchase
     */
    trackPurchase(order) {
      if (window.gtag) {
        gtag('event', 'purchase', {
          transaction_id: order.id,
          value: order.total,
          currency: 'CNY',
          items: order.items
        });
      }
      
      if (window.fbq) {
        fbq('track', 'Purchase', {
          content_ids: order.items.map(item => item.id),
          value: order.total,
          currency: 'CNY',
          content_type: 'product'
        });
      }
      
      console.log('📊 购买追踪:', order.id);
    },
    
    /**
     * 追踪语言切换 / Track language change
     */
    trackLanguageChange(fromLang, toLang) {
      if (window.gtag) {
        gtag('event', 'language_change', {
          from_language: fromLang,
          to_language: toLang
        });
      }
      
      console.log('📊 语言切换追踪:', fromLang, '->', toLang);
    },
    
    /**
     * 追踪搜索 / Track search
     */
    trackSearch(searchTerm) {
      if (window.gtag) {
        gtag('event', 'search', {
          search_term: searchTerm
        });
      }
      
      if (window._hmt) {
        window._hmt.push(['_trackEvent', '搜索', 'search', searchTerm]);
      }
      
      console.log('📊 搜索追踪:', searchTerm);
    },
    
    /**
     * 追踪点击事件 / Track click event
     */
    trackClick(category, action, label) {
      if (window.gtag) {
        gtag('event', 'click', {
          event_category: category,
          event_action: action,
          event_label: label
        });
      }
      
      if (window._hmt) {
        window._hmt.push(['_trackEvent', category, action, label]);
      }
      
      console.log('📊 点击追踪:', category, action, label);
    }
  };
  
  /**
   * 初始化所有分析工具
   */
  function initAnalytics() {
    if (!config.enabled) {
      console.log('数据分析工具已禁用');
      return;
    }
    
    initGoogleAnalytics();
    initBaiduAnalytics();
    initFacebookPixel();
    
    // 监听语言切换事件
    window.addEventListener('languageChanged', (e) => {
      EventTracker.trackLanguageChange(
        e.detail.previousLang || 'en',
        e.detail.lang
      );
    });
    
    console.log('✅ 所有数据分析工具已初始化');
  }
  
  // DOM 加载完成后初始化
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initAnalytics);
  } else {
    initAnalytics();
  }
  
  // 导出事件追踪器
  window.Analytics = {
    init: initAnalytics,
    track: EventTracker,
    config: config
  };
  
})();

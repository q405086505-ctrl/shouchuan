/**
 * 图片懒加载 / Image Lazy Loading
 * 提升页面加载性能 / Improve page loading performance
 */

(function() {
  'use strict';
  
  // 检查浏览器是否支持 IntersectionObserver
  const hasIntersectionObserver = 'IntersectionObserver' in window;
  
  // 懒加载图片选择器
  const lazyImageSelector = 'img[data-src], img[data-lazy]';
  
  /**
   * 加载单张图片 / Load single image
   */
  function loadImage(img) {
    const src = img.getAttribute('data-src') || img.getAttribute('data-lazy');
    if (!src) return;
    
    // 添加加载动画
    img.style.opacity = '0';
    img.style.transition = 'opacity 0.3s ease';
    
    // 创建新图片对象预加载
    const tempImg = new Image();
    tempImg.onload = function() {
      img.src = src;
      img.removeAttribute('data-src');
      img.removeAttribute('data-lazy');
      img.style.opacity = '1';
      img.classList.add('loaded');
    };
    tempImg.onerror = function() {
      img.classList.add('error');
      console.error('图片加载失败:', src);
    };
    tempImg.src = src;
  }
  
  /**
   * 使用 IntersectionObserver 实现懒加载
   */
  function lazyLoadWithObserver() {
    const lazyImages = document.querySelectorAll(lazyImageSelector);
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          loadImage(img);
          observer.unobserve(img);
        }
      });
    }, {
      rootMargin: '50px 0px',
      threshold: 0.01
    });
    
    lazyImages.forEach(img => {
      imageObserver.observe(img);
    });
    
    console.log('✅ 图片懒加载已启用 (IntersectionObserver)');
  }
  
  /**
   * 降级方案：使用滚动事件实现懒加载
   */
  function lazyLoadWithScroll() {
    const lazyImages = document.querySelectorAll(lazyImageSelector);
    let ticking = false;
    
    function checkImages() {
      lazyImages.forEach(img => {
        if (img.classList.contains('loaded') || img.classList.contains('error')) {
          return;
        }
        
        const rect = img.getBoundingClientRect();
        const isVisible = (
          rect.top < window.innerHeight + 100 &&
          rect.bottom > -100 &&
          rect.left < window.innerWidth + 100 &&
          rect.right > -100
        );
        
        if (isVisible) {
          loadImage(img);
        }
      });
      ticking = false;
    }
    
    function onScroll() {
      if (!ticking) {
        requestAnimationFrame(checkImages);
        ticking = true;
      }
    }
    
    window.addEventListener('scroll', onScroll, { passive: true });
    window.addEventListener('resize', onScroll, { passive: true });
    
    // 初始检查
    checkImages();
    
    console.log('✅ 图片懒加载已启用 (Scroll Event)');
  }
  
  /**
   * 初始化懒加载
   */
  function initLazyLoading() {
    if (hasIntersectionObserver) {
      lazyLoadWithObserver();
    } else {
      lazyLoadWithScroll();
    }
  }
  
  // DOM 加载完成后初始化
  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', initLazyLoading);
  } else {
    initLazyLoading();
  }
  
  // 导出函数
  window.LazyLoader = {
    init: initLazyLoading,
    load: loadImage
  };
})();

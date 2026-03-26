/* ========================================
   CUPSHE CLONE - Main JavaScript
   ======================================== */

document.addEventListener('DOMContentLoaded', function() {
  initBackToTop();
  loadProducts();
  loadInstagramFeed();
  initProductCards();
  initHeaderScroll();
  initUserPopover();
  initNewsletterForm();
  initVideoAutoplay();
  initSmoothScroll();
  initLazyLoading();
  initScrollAnimations();
  initPageLoadAnimation();
  initParallaxEffects();
});

/* ========================================
   Back to Top Button
   ======================================== */
function initBackToTop() {
  const backToTopBtn = document.getElementById('backToTop');
  if (!backToTopBtn) return;

  window.addEventListener('scroll', function() {
    if (window.scrollY > 500) {
      backToTopBtn.classList.add('visible');
    } else {
      backToTopBtn.classList.remove('visible');
    }
  });

  backToTopBtn.addEventListener('click', function() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
  });
}

/* ========================================
   Header Scroll Effect
   ======================================== */
function initHeaderScroll() {
  const header = document.querySelector('.header');
  if (!header) return;

  let lastScroll = 0;
  window.addEventListener('scroll', function() {
    const currentScroll = window.scrollY;
    if (currentScroll > 100) {
      header.classList.add('header--scrolled');
    } else {
      header.classList.remove('header--scrolled');
    }
    lastScroll = currentScroll;
  });
}

/* ========================================
   User Popover
   ======================================== */
function initUserPopover() {
  const userAction = document.querySelector('.header__action--user');
  if (!userAction) return;

  const popover = userAction.querySelector('.header__popover');
  if (!popover) return;

  userAction.addEventListener('mouseenter', function() {
    popover.classList.add('active');
  });

  userAction.addEventListener('mouseleave', function() {
    popover.classList.remove('active');
  });
}

/* ========================================
   Load Products Data
   ======================================== */
async function loadProducts() {
  const productsGrid = document.getElementById('hotProductsGrid');
  if (!productsGrid) return;

  const products = [
    { id: 1, title: 'Ribbed Bikini Set', price: '$29.99', originalPrice: '$39.99', image: 'https://feed-img.cupshe.com/material/vc-upload-1773737832059-2-oyqyjfmhp8.jpg', badge: 'SALE' },
    { id: 2, title: 'Floral One-Piece Swimsuit', price: '$45.99', image: 'https://feed-img.cupshe.com/material/vc-upload-1773737857748-2-qsfl1yw0b3.jpg' },
    { id: 3, title: 'Boho Cover-Up Dress', price: '$35.99', image: 'https://feed-img.cupshe.com/material/vc-upload-1773738026562-2-2nkxqu24hk.jpg', badge: 'NEW' },
    { id: 4, title: 'High-Waisted Bikini', price: '$32.99', image: 'https://feed-img.cupshe.com/material/vc-upload-1773737913091-2-bahen4ugvf.jpg' },
    { id: 5, title: 'Tropical Print Bikini', price: '$38.99', originalPrice: '$48.99', image: 'https://feed-img.cupshe.com/material/vc-upload-1773737878414-2-8znl3oir8r.jpg', badge: 'SALE' },
    { id: 6, title: 'Crochet Beach Cover-Up', price: '$42.99', image: 'https://feed-img.cupshe.com/material/vc-upload-1773737992424-2-00x2hf2sxr.jpg' },
    { id: 7, title: 'Cut-Out One-Piece', price: '$55.99', image: 'https://feed-img.cupshe.com/material/vc-upload-1773738008996-2-5hebot1qhr.jpg', badge: 'BEST SELLER' },
    { id: 8, title: 'Maxi Resort Dress', price: '$48.99', image: 'https://feed-img.cupshe.com/material/website/56ee6a51-493e-488c-acd3-c5f870e3b357_%E7%94%BB%E6%9D%BF%202.jpg' }
  ];

  productsGrid.innerHTML = products.map(product => `
    <div class="product-card">
      <a href="#" class="product-card__link">
        <div class="product-card__image">
          <img src="${product.image}" alt="${product.title}">
          ${product.badge ? `<span class="product-card__badge">${product.badge}</span>` : ''}
          <div class="product-card__wishlist">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
              <path d="M11.0006 19.2496L18.6799 11.4602C19.4859 10.6543 19.9386 9.56122 19.9386 8.42146C19.9386 7.28171 19.4859 6.18864 18.6799 5.38271C17.874 4.57679 16.7809 4.12402 15.6412 4.12402C14.5014 4.12402 13.4084 4.57679 12.6024 5.38271L11.0006 6.87459L9.39869 5.38271C8.59276 4.57679 7.49969 4.12402 6.35994 4.12402C5.22019 4.12402 4.12712 4.57679 3.32119 5.38271C2.51526 6.18864 2.0625 7.28171 2.0625 8.42146C2.0625 9.56122 2.51526 10.6543 3.32119 11.4602L11.0006 19.2496Z" stroke="#04040C" stroke-width="1.2"/>
            </svg>
          </div>
        </div>
        <div class="product-card__info">
          <h3 class="product-card__title">${product.title}</h3>
          <div class="product-card__price">
            <span class="product-card__price--current">${product.price}</span>
            ${product.originalPrice ? `<span class="product-card__price--original">${product.originalPrice}</span>` : ''}
          </div>
        </div>
      </a>
    </div>
  `).join('');

  initProductCards();
}

/* ========================================
   Load Instagram Feed
   ======================================== */
async function loadInstagramFeed() {
  const instagramGrid = document.getElementById('instagramGrid');
  if (!instagramGrid) return;

  const images = [
    'https://feed-img.cupshe.com/material/vc-upload-1773737832059-2-oyqyjfmhp8.jpg',
    'https://feed-img.cupshe.com/material/vc-upload-1773737857748-2-qsfl1yw0b3.jpg',
    'https://feed-img.cupshe.com/material/vc-upload-1773738026562-2-2nkxqu24hk.jpg',
    'https://feed-img.cupshe.com/material/vc-upload-1773737913091-2-bahen4ugvf.jpg',
    'https://feed-img.cupshe.com/material/vc-upload-1773737878414-2-8znl3oir8r.jpg',
    'https://feed-img.cupshe.com/material/vc-upload-1773737992424-2-00x2hf2sxr.jpg'
  ];

  instagramGrid.innerHTML = images.map(img => `
    <a href="#" class="instagram-item">
      <img src="${img}" alt="Instagram">
    </a>
  `).join('');
}

/* ========================================
   Product Cards Interactions
   ======================================== */
function initProductCards() {
  const wishlistBtns = document.querySelectorAll('.product-card__wishlist');
  wishlistBtns.forEach(btn => {
    btn.addEventListener('click', function(e) {
      e.preventDefault();
      e.stopPropagation();
      showToast('Added to wishlist!');
    });
  });
}

/* ========================================
   Toast Notification
   ======================================== */
function showToast(message) {
  let toast = document.querySelector('.toast');
  if (!toast) {
    toast = document.createElement('div');
    toast.className = 'toast';
    document.body.appendChild(toast);
  }
  toast.textContent = message;
  toast.classList.add('active');
  setTimeout(() => {
    toast.classList.remove('active');
  }, 2000);
}

/* ========================================
   Newsletter Form
   ======================================== */
function initNewsletterForm() {
  const form = document.getElementById('newsletterForm');
  if (!form) return;

  form.addEventListener('submit', function(e) {
    e.preventDefault();
    const email = form.querySelector('input[type="email"]').value;
    if (email) {
      showToast('Thank you for subscribing!');
      form.reset();
    }
  });
}

/* ========================================
   Video Autoplay
   ======================================== */
function initVideoAutoplay() {
  const videos = document.querySelectorAll('.home-banner__video');
  videos.forEach(video => {
    video.play().catch(() => {
      // Autoplay was prevented, show controls
      video.controls = true;
    });
  });
}

/* ========================================
   Smooth Scroll
   ======================================== */
function initSmoothScroll() {
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      const href = this.getAttribute('href');
      if (href === '#') return;
      
      const target = document.querySelector(href);
      if (target) {
        e.preventDefault();
        target.scrollIntoView({
          behavior: 'smooth',
          block: 'start'
        });
      }
    });
  });
}

/* ========================================
   Lazy Loading Images
   ======================================== */
function initLazyLoading() {
  if ('IntersectionObserver' in window) {
    const lazyImages = document.querySelectorAll('img[data-src]');
    
    const imageObserver = new IntersectionObserver((entries, observer) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const img = entry.target;
          img.src = img.dataset.src;
          img.removeAttribute('data-src');
          observer.unobserve(img);
        }
      });
    }, {
      rootMargin: '50px 0px',
      threshold: 0.01
    });

    lazyImages.forEach(img => imageObserver.observe(img));
  }
}

/* ========================================
   Load More Products
   ======================================== */
let productPage = 1;
const productsPerPage = 8;

document.getElementById('loadMoreBtn')?.addEventListener('click', async function() {
  productPage++;
  const productsGrid = document.getElementById('hotProductsGrid');
  if (!productsGrid) return;

  const moreProducts = [
    { id: 9, title: 'Striped Bikini Set', price: '$34.99', image: 'https://feed-img.cupshe.com/material/vc-upload-1773737832059-2-oyqyjfmhp8.jpg' },
    { id: 10, title: 'Lace Cover-Up', price: '$28.99', image: 'https://feed-img.cupshe.com/material/vc-upload-1773737857748-2-qsfl1yw0b3.jpg', badge: 'NEW' },
    { id: 11, title: 'Vintage One-Piece', price: '$49.99', image: 'https://feed-img.cupshe.com/material/vc-upload-1773738026562-2-2nkxqu24hk.jpg' },
    { id: 12, title: 'Beach Romper', price: '$42.99', image: 'https://feed-img.cupshe.com/material/vc-upload-1773737913091-2-bahen4ugvf.jpg' }
  ];

  const newHtml = moreProducts.map(product => `
    <div class="product-card">
      <a href="#" class="product-card__link">
        <div class="product-card__image">
          <img src="${product.image}" alt="${product.title}">
          ${product.badge ? `<span class="product-card__badge">${product.badge}</span>` : ''}
          <div class="product-card__wishlist">
            <svg width="22" height="22" viewBox="0 0 22 22" fill="none">
              <path d="M11.0006 19.2496L18.6799 11.4602C19.4859 10.6543 19.9386 9.56122 19.9386 8.42146C19.9386 7.28171 19.4859 6.18864 18.6799 5.38271C17.874 4.57679 16.7809 4.12402 15.6412 4.12402C14.5014 4.12402 13.4084 4.57679 12.6024 5.38271L11.0006 6.87459L9.39869 5.38271C8.59276 4.57679 7.49969 4.12402 6.35994 4.12402C5.22019 4.12402 4.12712 4.57679 3.32119 5.38271C2.51526 6.18864 2.0625 7.28171 2.0625 8.42146C2.0625 9.56122 2.51526 10.6543 3.32119 11.4602L11.0006 19.2496Z" stroke="#04040C" stroke-width="1.2"/>
            </svg>
          </div>
        </div>
        <div class="product-card__info">
          <h3 class="product-card__title">${product.title}</h3>
          <div class="product-card__price">
            <span class="product-card__price--current">${product.price}</span>
          </div>
        </div>
      </a>
    </div>
  `).join('');

  productsGrid.insertAdjacentHTML('beforeend', newHtml);
  initProductCards();
  showToast('More products loaded!');
});

/* ========================================
   Scroll Animations
   ======================================== */
function initScrollAnimations() {
  if ('IntersectionObserver' in window) {
    const observerOptions = {
      root: null,
      rootMargin: '0px',
      threshold: 0.1
    };

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('visible');
        }
      });
    }, observerOptions);

    // Observe elements with animate-on-scroll class
    document.querySelectorAll('.animate-on-scroll').forEach(el => {
      observer.observe(el);
    });

    // Observe section titles
    document.querySelectorAll('.section-title, .channel h2, .home-cupsheway--title span').forEach(el => {
      el.classList.add('animate-on-scroll');
      observer.observe(el);
    });

    // Observe stagger items
    document.querySelectorAll('.stagger-item').forEach((el, index) => {
      el.style.animationDelay = `${index * 0.1}s`;
      observer.observe(el);
    });
  }
}

/* ========================================
   Page Load Animation
   ======================================== */
function initPageLoadAnimation() {
  // Add page-loaded class to body after a short delay
  setTimeout(() => {
    document.body.classList.add('page-loaded');
  }, 100);

  // Animate elements on scroll
  const sections = document.querySelectorAll('section');
  sections.forEach(section => {
    section.classList.add('animate-on-scroll');
  });
}

/* ========================================
   Parallax Effects
   ======================================== */
function initParallaxEffects() {
  const parallaxElements = document.querySelectorAll('.home-banner__overlay, .home-ins--content');
  
  window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    
    parallaxElements.forEach(el => {
      const speed = 0.5;
      const yPos = -(scrolled * speed);
      el.style.transform = `translateY(${yPos}px)`;
    });
  });
}

/* ========================================
   Enhanced Product Card Interactions
   ======================================== */
function enhanceProductCards() {
  const productCards = document.querySelectorAll('.product-card');
  
  productCards.forEach(card => {
    // Add quick view on double click
    card.addEventListener('dblclick', function(e) {
      e.preventDefault();
      showToast('Quick view coming soon!');
    });

    // Add keyboard navigation
    card.setAttribute('tabindex', '0');
    card.addEventListener('keypress', function(e) {
      if (e.key === 'Enter') {
        const link = this.querySelector('a');
        if (link) link.click();
      }
    });
  });
}

/* ========================================
   Image Loading Optimization
   ======================================== */
function optimizeImageLoading() {
  // Add loading="lazy" to all images below the fold
  const images = document.querySelectorAll('img');
  const heroImages = document.querySelectorAll('.home-banner img, .home-banner video');
  
  images.forEach(img => {
    if (!heroImages.includes(img)) {
      img.loading = 'lazy';
    }
  });
}

/* ========================================
   Performance Monitoring
   ======================================== */
function initPerformanceMonitoring() {
  // Log performance metrics
  if ('performance' in window) {
    window.addEventListener('load', () => {
      const perfData = performance.getEntriesByType('navigation')[0];
      console.log('Page Load Time:', perfData.loadEventEnd - perfData.startTime, 'ms');
    });
  }
}

/* ========================================
   Accessibility Enhancements
   ======================================== */
function initAccessibilityEnhancements() {
  // Add ARIA labels to interactive elements
  const buttons = document.querySelectorAll('button, .btn, .home-banner__btn');
  buttons.forEach(btn => {
    if (!btn.getAttribute('aria-label')) {
      btn.setAttribute('aria-label', btn.textContent.trim());
    }
  });

  // Add role to navigation
  const nav = document.querySelector('.nav');
  if (nav) {
    nav.setAttribute('role', 'navigation');
    nav.setAttribute('aria-label', 'Main navigation');
  }

  // Add role to main content
  const main = document.querySelector('.main');
  if (main) {
    main.setAttribute('role', 'main');
  }
}

/* ========================================
   Touch Device Optimizations
   ======================================== */
function initTouchOptimizations() {
  if ('ontouchstart' in window) {
    document.body.classList.add('touch-device');
    
    // Prevent double-tap zoom on buttons
    const buttons = document.querySelectorAll('button, .btn, .home-banner__btn, .pagination-btn');
    buttons.forEach(btn => {
      btn.addEventListener('touchend', function(e) {
        e.preventDefault();
        this.click();
      });
    });
  }
}

/* ========================================
   Initialize Additional Features
   ======================================== */
document.addEventListener('DOMContentLoaded', function() {
  enhanceProductCards();
  optimizeImageLoading();
  initPerformanceMonitoring();
  initAccessibilityEnhancements();
  initTouchOptimizations();
});

console.log('Cupshe Clone initialized successfully!');

/**
 * Cupshe Clone Theme - Main JavaScript
 *
 * @package Cupshe_Clone
 */

(function() {
    'use strict';

    document.addEventListener('DOMContentLoaded', function() {
        initBackToTop();
        initVideoAutoplay();
        initProductHover();
        initMobileMenu();
    });

    function initBackToTop() {
        var backToTopBtn = document.getElementById('backToTop');
        if (!backToTopBtn) return;

        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                backToTopBtn.classList.add('visible');
            } else {
                backToTopBtn.classList.remove('visible');
            }
        });

        backToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    }

    function initVideoAutoplay() {
        var videos = document.querySelectorAll('.home-banner video');
        videos.forEach(function(video) {
            video.play().catch(function(e) {
                console.log('Video autoplay prevented:', e);
            });
        });
    }

    function initProductHover() {
        var productItems = document.querySelectorAll('.product-item');
        productItems.forEach(function(item) {
            item.addEventListener('mouseenter', function() {
                var secondaryImg = this.querySelector('.secondary-image');
                if (secondaryImg) {
                    secondaryImg.style.opacity = '1';
                }
            });
            item.addEventListener('mouseleave', function() {
                var secondaryImg = this.querySelector('.secondary-image');
                if (secondaryImg) {
                    secondaryImg.style.opacity = '0';
                }
            });
        });
    }

    function initMobileMenu() {
        var menuToggle = document.querySelector('.menu-toggle');
        var navWrap = document.querySelector('.nav-wrap');
        
        if (menuToggle && navWrap) {
            menuToggle.addEventListener('click', function() {
                navWrap.classList.toggle('active');
            });
        }
    }

    window.cupsheAddToCart = function(productId, quantity) {
        quantity = quantity || 1;
        
        fetch(cupsheData.ajaxUrl, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'action=cupshe_add_to_cart&product_id=' + productId + '&quantity=' + quantity + '&nonce=' + cupsheData.nonce
        })
        .then(function(response) {
            return response.json();
        })
        .then(function(data) {
            if (data.success) {
                var cartCount = document.querySelector('.cart-count');
                if (cartCount) {
                    cartCount.textContent = data.data.cart_count;
                }
                showToast(data.data.message);
            } else {
                showToast(data.data.message || 'Error adding to cart');
            }
        })
        .catch(function(error) {
            console.error('Error:', error);
            showToast('Error adding to cart');
        });
    };

    function showToast(message) {
        var toast = document.querySelector('.toast');
        if (!toast) {
            toast = document.createElement('div');
            toast.className = 'toast';
            document.body.appendChild(toast);
        }
        toast.textContent = message;
        toast.classList.add('active');
        
        setTimeout(function() {
            toast.classList.remove('active');
        }, 3000);
    }

})();

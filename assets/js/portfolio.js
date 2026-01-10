/**
 * Portfolio Child Theme - COMPLETE Enhanced JavaScript
 * Includes: Scroll-to-Top, Sticky Header, Smooth Scrolling, Animations
 * 
 * @package Portfolio_Child_Theme
 */

(function($) {
    'use strict';

    /**
     * Scroll to Top Button - Creates and manages the floating button
     */
    function initScrollToTop() {
        // Create scroll to top button if it doesn't exist
        if ($('#scroll-to-top').length === 0) {
            $('body').append('<button id="scroll-to-top" aria-label="Scroll to top">↑</button>');
        }

        const $scrollBtn = $('#scroll-to-top');

        // Show/hide button based on scroll position
        $(window).on('scroll', function() {
            if ($(this).scrollTop() > 300) {
                $scrollBtn.addClass('visible');
            } else {
                $scrollBtn.removeClass('visible');
            }
        });

        // Smooth scroll to top on click
        $scrollBtn.on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: 0
            }, 600, 'swing');
        });
    }

    /**
     * Sticky Header Enhancement - Adds shadow on scroll
     */
    function initStickyHeader() {
        const $header = $('.site-header');
        
        if ($header.length === 0) {
            return; // Exit if header doesn't exist
        }

        $(window).on('scroll', function() {
            const currentScroll = $(this).scrollTop();

            if (currentScroll > 50) {
                $header.addClass('scrolled');
            } else {
                $header.removeClass('scrolled');
            }
        });
    }

    /**
     * Smooth scroll for anchor links
     */
    function initSmoothScroll() {
        $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').on('click', function(e) {
            // Check if the link has a hash
            if (this.hash !== '') {
                const target = $(this.hash);
                
                if (target.length) {
                    e.preventDefault();
                    
                    // Calculate header height for offset
                    const headerHeight = $('.site-header').outerHeight() || 0;
                    
                    $('html, body').animate({
                        scrollTop: target.offset().top - headerHeight - 20
                    }, 800, 'swing');
                }
            }
        });
    }

    /**
     * Add animation on scroll for elements
     */
    function initScrollAnimations() {
        function checkScroll() {
            $('.animate-on-scroll').each(function() {
                const elementTop = $(this).offset().top;
                const elementBottom = elementTop + $(this).outerHeight();
                const viewportTop = $(window).scrollTop();
                const viewportBottom = viewportTop + $(window).height();

                if (elementBottom > viewportTop && elementTop < viewportBottom) {
                    $(this).addClass('in-view');
                }
            });
        }

        $(window).on('scroll', checkScroll);
        checkScroll(); // Run once on load
    }

    /**
     * Service Card Hover Effects - Add color transitions
     */
    function initServiceCardEffects() {
        $('.service-card').on('mouseenter', function() {
            $(this).find('h3').css({
                'color': '#6366f1',
                'transition': 'color 0.3s ease'
            });
        }).on('mouseleave', function() {
            $(this).find('h3').css('color', '');
        });
    }

    /**
     * Form Validation Enhancement
     */
    function initFormValidation() {
        $('.portfolio-contact-form').on('submit', function(e) {
            const $form = $(this);
            const name = $form.find('#contact-name').val();
            const email = $form.find('#contact-email').val();
            const message = $form.find('#contact-message').val();

            // Basic validation
            if (!name || !email || !message) {
                e.preventDefault();
                alert('Please fill in all required fields.');
                return false;
            }

            // Email validation
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                e.preventDefault();
                alert('Please enter a valid email address.');
                return false;
            }

            // If validation passes, you can add AJAX submission here
            // For now, let it submit normally
        });
    }

    /**
     * Approach Card Number Animation
     */
    function initApproachCards() {
        $('.approach-card').on('mouseenter', function() {
            $(this).find('p[style*="font-size: 2.5rem"]').css({
                'transform': 'scale(1.1)',
                'transition': 'transform 0.3s ease'
            });
        }).on('mouseleave', function() {
            $(this).find('p[style*="font-size: 2.5rem"]').css('transform', 'scale(1)');
        });
    }

    /**
     * Navigation Active State
     */
    function initNavigationActiveState() {
        const sections = $('main > .wp-block-group, main > .wp-block-cover');
        const navLinks = $('.wp-block-navigation-item a');

        if (sections.length === 0 || navLinks.length === 0) {
            return;
        }

        $(window).on('scroll', function() {
            let current = '';
            const scrollPos = $(this).scrollTop() + 150;

            sections.each(function() {
                const sectionTop = $(this).offset().top;
                const sectionHeight = $(this).outerHeight();
                const sectionId = $(this).attr('id');

                if (scrollPos >= sectionTop && scrollPos < sectionTop + sectionHeight) {
                    current = sectionId;
                }
            });

            navLinks.removeClass('active');
            navLinks.each(function() {
                const href = $(this).attr('href');
                if (href && href.includes('#' + current)) {
                    $(this).addClass('active');
                }
            });
        });
    }

    /**
     * Lazy Load Images Enhancement
     */
    function initLazyLoading() {
        if ('IntersectionObserver' in window) {
            const imageObserver = new IntersectionObserver((entries, observer) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const img = entry.target;
                        if (img.dataset.src) {
                            img.src = img.dataset.src;
                            img.removeAttribute('data-src');
                            observer.unobserve(img);
                        }
                    }
                });
            });

            document.querySelectorAll('img[data-src]').forEach(img => {
                imageObserver.observe(img);
            });
        }
    }

    /**
     * Initialize all functions on document ready
     */
    $(document).ready(function() {
        // Core functionality
        initScrollToTop();
        initStickyHeader();
        initSmoothScroll();
        initScrollAnimations();
        
        // Enhanced interactions
        initServiceCardEffects();
        initApproachCards();
        initFormValidation();
        initNavigationActiveState();
        initLazyLoading();

        // Page load animation
        $('body').css('opacity', '0').animate({opacity: 1}, 600);

        // Log initialization
        console.log('Portfolio Theme: All scripts initialized successfully ✓');
    });

    /**
     * Window load optimization
     */
    $(window).on('load', function() {
        // Remove any loading classes
        $('body').removeClass('loading');
        
        // Trigger scroll check for animations
        $(window).trigger('scroll');
    });

})(jQuery);
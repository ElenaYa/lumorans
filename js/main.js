// Lumorans - Main JavaScript

document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // Global variables
    const body = document.body;
    const header = document.querySelector('.main-header');
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    
    // Utility functions
    const debounce = (func, wait) => {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    };

    const throttle = (func, delay) => {
        let timeoutId;
        let lastExecTime = 0;
        return function (...args) {
            const currentTime = Date.now();
            
            if (currentTime - lastExecTime > delay) {
                func.apply(this, args);
                lastExecTime = currentTime;
            } else {
                clearTimeout(timeoutId);
                timeoutId = setTimeout(() => {
                    func.apply(this, args);
                    lastExecTime = Date.now();
                }, delay - (currentTime - lastExecTime));
            }
        };
    };

    // Mobile Navigation
    class MobileNavigation {
        constructor() {
            this.init();
        }

        init() {
            if (navToggle && navMenu) {
                navToggle.addEventListener('click', this.toggleMenu.bind(this));
                
                // Close menu when clicking on nav links
                const navLinks = navMenu.querySelectorAll('.nav-link');
                navLinks.forEach(link => {
                    link.addEventListener('click', this.closeMenu.bind(this));
                });

                // Prevent scroll bleed when touching inside the menu
                navMenu.addEventListener('touchmove', (e) => {
                    if (navMenu.classList.contains('active')) {
                        e.stopPropagation();
                    }
                }, { passive: false });

                // Close menu when clicking outside
                document.addEventListener('click', (e) => {
                    if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                        this.closeMenu();
                    }
                });

                // Close menu on escape key
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape') {
                        this.closeMenu();
                    }
                });
            }
        }

        updateHeaderOffset() {
            const headerHeight = header ? header.offsetHeight : 0;
            document.documentElement.style.setProperty('--header-offset', `${headerHeight}px`);
            navMenu.style.paddingTop = headerHeight ? `${headerHeight}px` : '';
            navMenu.style.height = `calc(100dvh - ${headerHeight}px)`;
        }

        toggleMenu() {
            navMenu.classList.toggle('active');
            navToggle.classList.toggle('active');
            body.classList.toggle('nav-open');
            
            // Update aria-expanded
            const isExpanded = navMenu.classList.contains('active');
            navToggle.setAttribute('aria-expanded', isExpanded);
            navToggle.setAttribute('aria-controls', 'navMenu');

            if (isExpanded) {
                this.updateHeaderOffset();
                this._resizeHandler = this.updateHeaderOffset.bind(this);
                window.addEventListener('resize', this._resizeHandler);
            } else {
                navMenu.style.paddingTop = '';
                navMenu.style.height = '';
                document.documentElement.style.removeProperty('--header-offset');
                if (this._resizeHandler) {
                    window.removeEventListener('resize', this._resizeHandler);
                    this._resizeHandler = null;
                }
            }
        }

        closeMenu() {
            navMenu.classList.remove('active');
            navToggle.classList.remove('active');
            body.classList.remove('nav-open');
            navToggle.setAttribute('aria-expanded', false);
            navMenu.style.paddingTop = '';
            navMenu.style.height = '';
            document.documentElement.style.removeProperty('--header-offset');
            if (this._resizeHandler) {
                window.removeEventListener('resize', this._resizeHandler);
                this._resizeHandler = null;
            }
        }
    }

    // Header Scroll Effects
    class HeaderEffects {
        constructor() {
            this.lastScrollTop = 0;
            this.init();
        }

        init() {
            if (header) {
                window.addEventListener('scroll', throttle(this.handleScroll.bind(this), 16));
            }
        }

        handleScroll() {
            // Skip header hide/show while mobile menu is open
            if (document.body.classList.contains('nav-open')) {
                return;
            }
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            // Add/remove scrolled class
            if (scrollTop > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            // Hide/show header on scroll
            if (scrollTop > this.lastScrollTop && scrollTop > 200) {
                header.classList.add('hidden');
            } else {
                header.classList.remove('hidden');
            }

            this.lastScrollTop = scrollTop;
        }
    }

    // Smooth Scrolling
    class SmoothScrolling {
        constructor() {
            this.init();
        }

        init() {
            // Handle anchor links
            const anchorLinks = document.querySelectorAll('a[href^="#"]');
            anchorLinks.forEach(link => {
                link.addEventListener('click', this.handleAnchorClick.bind(this));
            });
        }

        handleAnchorClick(e) {
            const href = e.currentTarget.getAttribute('href');
            
            if (href === '#') {
                e.preventDefault();
                return;
            }

            const target = document.querySelector(href);
            if (target) {
                e.preventDefault();
                
                const headerHeight = header ? header.offsetHeight : 0;
                const targetPosition = target.offsetTop - headerHeight - 20;

                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });

                // Update URL without jumping
                history.pushState(null, null, href);
            }
        }
    }

    // Form Handling
    class FormHandler {
        constructor() {
            this.init();
        }

        init() {
            // Newsletter form
            const newsletterForm = document.getElementById('newsletterForm');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', this.handleNewsletterSubmit.bind(this));
            }

            // Contact form
            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', this.handleContactSubmit.bind(this));
            }

            // Review form
            const reviewForm = document.getElementById('reviewForm');
            if (reviewForm) {
                reviewForm.addEventListener('submit', this.handleReviewSubmit.bind(this));
                this.initRatingSystem();
            }

            // Form auto-save
            this.initAutoSave();
        }

        async handleNewsletterSubmit(e) {
            e.preventDefault();
            
            const form = e.target;
            const email = form.querySelector('input[name="email"]').value;
            const response = document.getElementById('newsletterResponse');
            
            if (!this.validateEmail(email)) {
                this.showResponse(response, 'Syötä kelvollinen sähköpostiosoite.', 'error');
                return;
            }

            try {
                this.showLoading(form);
                
                // Simulate API call
                await this.delay(1000);
                
                // In real implementation, make actual API call here
                this.showResponse(response, 'Kiitos! Uutiskirje tilattiin onnistuneesti.', 'success');
                form.reset();
                
            } catch (error) {
                this.showResponse(response, 'Virhe tilauksen käsittelyssä. Yritä uudelleen.', 'error');
            } finally {
                this.hideLoading(form);
            }
        }

        async handleContactSubmit(e) {
            e.preventDefault();
            
            const form = e.target;
            const formData = new FormData(form);
            const response = document.getElementById('contactResponse');
            
            if (!this.validateContactForm(formData)) {
                this.showResponse(response, 'Täytä kaikki pakolliset kentät oikein.', 'error');
                return;
            }

            try {
                this.showLoading(form);
                
                // Simulate API call
                await this.delay(1500);
                
                // In real implementation, make actual API call here
                this.showResponse(response, 'Viesti lähetetty onnistuneesti! Otamme yhteyttä pian.', 'success');
                form.reset();
                
            } catch (error) {
                this.showResponse(response, 'Virhe viestin lähettämisessä. Yritä uudelleen.', 'error');
            } finally {
                this.hideLoading(form);
            }
        }

        async handleReviewSubmit(e) {
            e.preventDefault();
            
            const form = e.target;
            const formData = new FormData(form);
            const response = document.getElementById('reviewResponse');
            
            if (!this.validateReviewForm(formData)) {
                this.showResponse(response, 'Täytä kaikki pakolliset kentät ja anna arvosana.', 'error');
                return;
            }

            try {
                this.showLoading(form);
                
                // Simulate API call
                await this.delay(1200);
                
                // In real implementation, make actual API call here
                this.showResponse(response, 'Arvostelu lähetetty! Kiitos palautteestasi.', 'success');
                form.reset();
                this.resetRating();
                
            } catch (error) {
                this.showResponse(response, 'Virhe arvostelun lähettämisessä. Yritä uudelleen.', 'error');
            } finally {
                this.hideLoading(form);
            }
        }

        initRatingSystem() {
            const ratingInput = document.getElementById('ratingInput');
            if (!ratingInput) return;

            const stars = ratingInput.querySelectorAll('.star-label');
            const radioInputs = ratingInput.querySelectorAll('input[type="radio"]');

            stars.forEach((star, index) => {
                star.addEventListener('mouseover', () => {
                    this.highlightStars(stars, index);
                });

                star.addEventListener('click', () => {
                    radioInputs[index].checked = true;
                    this.setRating(stars, index);
                });
            });

            ratingInput.addEventListener('mouseleave', () => {
                const checkedIndex = Array.from(radioInputs).findIndex(input => input.checked);
                if (checkedIndex >= 0) {
                    this.setRating(stars, checkedIndex);
                } else {
                    this.clearStars(stars);
                }
            });
        }

        highlightStars(stars, index) {
            stars.forEach((star, i) => {
                if (i <= index) {
                    star.classList.add('highlighted');
                } else {
                    star.classList.remove('highlighted');
                }
            });
        }

        setRating(stars, index) {
            stars.forEach((star, i) => {
                if (i <= index) {
                    star.classList.add('active');
                } else {
                    star.classList.remove('active');
                }
            });
        }

        clearStars(stars) {
            stars.forEach(star => {
                star.classList.remove('highlighted', 'active');
            });
        }

        resetRating() {
            const ratingInput = document.getElementById('ratingInput');
            if (ratingInput) {
                const stars = ratingInput.querySelectorAll('.star-label');
                this.clearStars(stars);
            }
        }

        initAutoSave() {
            const forms = document.querySelectorAll('form[data-autosave]');
            forms.forEach(form => {
                const inputs = form.querySelectorAll('input, textarea, select');
                inputs.forEach(input => {
                    input.addEventListener('input', debounce(() => {
                        this.saveFormData(form);
                    }, 1000));
                });

                // Load saved data
                this.loadFormData(form);
            });
        }

        saveFormData(form) {
            const formData = new FormData(form);
            const data = {};
            
            for (let [key, value] of formData.entries()) {
                data[key] = value;
            }
            
            const formId = form.id || 'default-form';
            localStorage.setItem(`form_${formId}`, JSON.stringify(data));
        }

        loadFormData(form) {
            const formId = form.id || 'default-form';
            const savedData = localStorage.getItem(`form_${formId}`);
            
            if (savedData) {
                try {
                    const data = JSON.parse(savedData);
                    
                    Object.keys(data).forEach(key => {
                        const input = form.querySelector(`[name="${key}"]`);
                        if (input && input.type !== 'submit') {
                            input.value = data[key];
                        }
                    });
                } catch (error) {
                    console.warn('Failed to load saved form data:', error);
                }
            }
        }

        validateEmail(email) {
            const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            return re.test(email);
        }

        validateContactForm(formData) {
            const required = ['first_name', 'last_name', 'email', 'message'];
            
            for (let field of required) {
                if (!formData.get(field) || formData.get(field).trim() === '') {
                    return false;
                }
            }
            
            return this.validateEmail(formData.get('email'));
        }

        validateReviewForm(formData) {
            const required = ['name', 'email', 'project_type', 'rating', 'review'];
            
            for (let field of required) {
                if (!formData.get(field) || formData.get(field).trim() === '') {
                    return false;
                }
            }
            
            return this.validateEmail(formData.get('email'));
        }

        showResponse(element, message, type) {
            if (!element) return;
            
            element.textContent = message;
            element.className = `form-response ${type}`;
            element.style.display = 'block';
            
            // Auto-hide after 5 seconds
            setTimeout(() => {
                element.style.display = 'none';
            }, 5000);
        }

        showLoading(form) {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = true;
                submitBtn.classList.add('loading');
                
                const originalText = submitBtn.innerHTML;
                submitBtn.dataset.originalText = originalText;
                submitBtn.innerHTML = '<div class="loading-spinner"></div> Lähetetään...';
            }
        }

        hideLoading(form) {
            const submitBtn = form.querySelector('button[type="submit"]');
            if (submitBtn) {
                submitBtn.disabled = false;
                submitBtn.classList.remove('loading');
                
                if (submitBtn.dataset.originalText) {
                    submitBtn.innerHTML = submitBtn.dataset.originalText;
                }
            }
        }

        delay(ms) {
            return new Promise(resolve => setTimeout(resolve, ms));
        }
    }

    // FAQ Accordion
    class FAQAccordion {
        constructor() {
            this.init();
        }

        init() {
            const faqItems = document.querySelectorAll('.faq-question');
            faqItems.forEach(question => {
                question.addEventListener('click', this.toggleFAQ.bind(this));
            });

            // Category filtering
            const categoryButtons = document.querySelectorAll('.category-btn');
            categoryButtons.forEach(btn => {
                btn.addEventListener('click', this.filterFAQs.bind(this));
            });
        }

        toggleFAQ(e) {
            const question = e.currentTarget;
            const answer = question.nextElementSibling;
            const icon = question.querySelector('.faq-icon');
            const isExpanded = question.getAttribute('aria-expanded') === 'true';

            // Close other open FAQs (optional - remove for multi-open)
            const allQuestions = document.querySelectorAll('.faq-question');
            allQuestions.forEach(q => {
                if (q !== question) {
                    q.setAttribute('aria-expanded', 'false');
                    q.nextElementSibling.setAttribute('aria-hidden', 'true');
                    q.classList.remove('active');
                }
            });

            // Toggle current FAQ
            question.setAttribute('aria-expanded', !isExpanded);
            answer.setAttribute('aria-hidden', isExpanded);
            question.classList.toggle('active');

            // Animate icon
            if (icon) {
                icon.style.transform = isExpanded ? 'rotate(0deg)' : 'rotate(180deg)';
            }
        }

        filterFAQs(e) {
            const activeBtn = document.querySelector('.category-btn.active');
            const clickedBtn = e.currentTarget;
            const category = clickedBtn.dataset.category;
            
            // Update active button
            if (activeBtn) activeBtn.classList.remove('active');
            clickedBtn.classList.add('active');

            // Filter FAQ items
            const faqItems = document.querySelectorAll('.faq-item');
            faqItems.forEach(item => {
                if (category === 'all' || item.dataset.category === category) {
                    item.style.display = 'block';
                    item.classList.add('animate');
                } else {
                    item.style.display = 'none';
                    item.classList.remove('animate');
                }
            });
        }
    }

    // Search Functionality
    class SearchHandler {
        constructor() {
            this.init();
        }

        init() {
            const searchForms = document.querySelectorAll('.search-form');
            searchForms.forEach(form => {
                form.addEventListener('submit', this.handleSearch.bind(this));
            });

            // Tech tabs
            const techTabs = document.querySelectorAll('.tech-tab');
            const techCategories = document.getElementById('techCategories');
            if (techTabs.length && techCategories) {
                techTabs.forEach(tab => {
                    tab.addEventListener('click', (e) => {
                        const target = tab.dataset.target;
                        // activate tab
                        document.querySelectorAll('.tech-tab.active').forEach(t => t.classList.remove('active'));
                        tab.classList.add('active');
                        // show category
                        techCategories.querySelectorAll('.tech-category').forEach(cat => {
                            cat.classList.toggle('active', cat.dataset.category === target);
                        });
                    });
                });
            }
        }

        handleSearch(e) {
            e.preventDefault();
            
            const form = e.target;
            const searchInput = form.querySelector('input[name="search"]');
            const query = searchInput.value.trim();
            
            if (query) {
                // In real implementation, perform search
                console.log('Searching for:', query);
                
                // For now, redirect to homepage with search parameter
                window.location.href = `index.php?search=${encodeURIComponent(query)}`;
            }
        }
    }

    // Performance Monitoring
    class PerformanceMonitor {
        constructor() {
            this.init();
        }

        init() {
            // Monitor page load performance
            window.addEventListener('load', () => {
                if ('performance' in window) {
                    const perfData = performance.getEntriesByType('navigation')[0];
                    console.log('Page Load Time:', perfData.loadEventEnd - perfData.loadEventStart, 'ms');
                }
            });

            // Monitor Core Web Vitals (simplified)
            this.observeWebVitals();
        }

        observeWebVitals() {
            // Largest Contentful Paint
            if ('PerformanceObserver' in window) {
                const observer = new PerformanceObserver((list) => {
                    const entries = list.getEntries();
                    const lastEntry = entries[entries.length - 1];
                    console.log('LCP:', lastEntry.startTime, 'ms');
                });
                
                try {
                    observer.observe({ entryTypes: ['largest-contentful-paint'] });
                } catch (e) {
                    // Fallback for browsers that don't support LCP
                }
            }
        }
    }

    // Initialize all components
    function initializeApp() {
        new MobileNavigation();
        new HeaderEffects();
        new SmoothScrolling();
        new FormHandler();
        new FAQAccordion();
        new SearchHandler();
  
        new PerformanceMonitor();
    }

    // Start the application
    initializeApp();

    // Global utilities
    window.Lumorans = {
        debounce,
        throttle
    };
});
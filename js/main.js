
document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    const body = document.body;
    const header = document.querySelector('.main-header');
    const navToggle = document.getElementById('navToggle');
    const navMenu = document.getElementById('navMenu');
    
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

    class MobileNavigation {
        constructor() {
            this.init();
        }

        init() {
            if (navToggle && navMenu) {
                navToggle.addEventListener('click', this.toggleMenu.bind(this));
                
                const navLinks = navMenu.querySelectorAll('.nav-link');
                navLinks.forEach(link => {
                    link.addEventListener('click', this.closeMenu.bind(this));
                });

                navMenu.addEventListener('touchmove', (e) => {
                    if (navMenu.classList.contains('active')) {
                        e.stopPropagation();
                    }
                }, { passive: false });

                document.addEventListener('click', (e) => {
                    if (!navToggle.contains(e.target) && !navMenu.contains(e.target)) {
                        this.closeMenu();
                    }
                });

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
            if (document.body.classList.contains('nav-open')) {
                return;
            }
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            
            if (scrollTop > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }

            if (scrollTop > this.lastScrollTop && scrollTop > 200) {
                header.classList.add('hidden');
            } else {
                header.classList.remove('hidden');
            }

            this.lastScrollTop = scrollTop;
        }
    }

    class SmoothScrolling {
        constructor() {
            this.init();
        }

        init() {
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

                history.pushState(null, null, href);
            }
        }
    }

    class FormHandler {
        constructor() {
            this.init();
        }

        init() {
            const newsletterForm = document.getElementById('newsletterForm');
            if (newsletterForm) {
                newsletterForm.addEventListener('submit', this.handleNewsletterSubmit.bind(this));
            }

            const contactForm = document.getElementById('contactForm');
            if (contactForm) {
                contactForm.addEventListener('submit', this.handleContactSubmit.bind(this));
            }

            const reviewForm = document.getElementById('reviewForm');
            if (reviewForm) {
                reviewForm.addEventListener('submit', this.handleReviewSubmit.bind(this));
                this.initRatingSystem();
            }

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
                
                await this.delay(1000);
                
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
                
                await this.delay(1500);
                
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
                
                await this.delay(1200);
                
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

    class FAQAccordion {
        constructor() {
            this.init();
        }

        init() {
            const faqItems = document.querySelectorAll('.faq-question');
            faqItems.forEach(question => {
                question.setAttribute('aria-expanded', 'false');
                const answer = document.getElementById(question.getAttribute('aria-controls')) || question.nextElementSibling;
                if (answer) {
                    answer.classList.remove('active');
                    answer.setAttribute('aria-hidden', 'true');
                }
                question.addEventListener('click', this.toggleFAQ.bind(this));
            });

            const categoryButtons = document.querySelectorAll('.category-btn');
            categoryButtons.forEach(btn => {
                btn.addEventListener('click', this.filterFAQs.bind(this));
            });
        }

        toggleFAQ(e) {
            const question = e.currentTarget;
            const answer = document.getElementById(question.getAttribute('aria-controls')) || question.nextElementSibling;
            const icon = question.querySelector('.faq-icon');
            const isExpanded = question.getAttribute('aria-expanded') === 'true';

            const allQuestions = document.querySelectorAll('.faq-question');
            allQuestions.forEach(q => {
                if (q !== question) {
                    q.setAttribute('aria-expanded', 'false');
                    const a = document.getElementById(q.getAttribute('aria-controls')) || q.nextElementSibling;
                    if (a) { a.setAttribute('aria-hidden', 'true'); a.classList.remove('active'); }
                    q.classList.remove('active');
                }
            });

            question.setAttribute('aria-expanded', (!isExpanded).toString());
            if (answer) {
                if (!isExpanded) { answer.classList.add('active'); answer.setAttribute('aria-hidden', 'false'); }
                else { answer.classList.remove('active'); answer.setAttribute('aria-hidden', 'true'); }
            }
            question.classList.toggle('active', !isExpanded);

            if (icon) {
                icon.style.transform = isExpanded ? 'rotate(0deg)' : 'rotate(180deg)';
            }
        }

        filterFAQs(e) {
            const activeBtn = document.querySelector('.category-btn.active');
            const clickedBtn = e.currentTarget;
            const category = clickedBtn.dataset.category;
            
            if (activeBtn) activeBtn.classList.remove('active');
            clickedBtn.classList.add('active');

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

    class SearchHandler {
        constructor() {
            this.init();
        }

        init() {
            const searchForms = document.querySelectorAll('.search-form');
            searchForms.forEach(form => {
                form.addEventListener('submit', this.handleSearch.bind(this));
            });

            const techTabs = document.querySelectorAll('.tech-tab');
            const techCategories = document.getElementById('techCategories');
            if (techTabs.length && techCategories) {
                techTabs.forEach(tab => {
                    tab.addEventListener('click', (e) => {
                        const target = tab.dataset.target;
                        document.querySelectorAll('.tech-tab.active').forEach(t => t.classList.remove('active'));
                        tab.classList.add('active');
                        techCategories.querySelectorAll('.tech-category').forEach(cat => {
                            cat.classList.toggle('active', cat.dataset.category === target);
                        });
                    });
                });
            }

            const caseTabs = document.querySelectorAll('.case-tab');
            const caseCards = document.getElementById('caseCards');
            if (caseTabs.length && caseCards) {
                caseTabs.forEach(tab => {
                    tab.addEventListener('click', () => {
                        const target = tab.dataset.target;
                        document.querySelectorAll('.case-tab.active').forEach(t => t.classList.remove('active'));
                        tab.classList.add('active');
                        caseCards.querySelectorAll('.case-card').forEach(card => {
                            card.classList.toggle('active', card.dataset.case === target);
                        });
                    });
                });
            }

            const faqQuestions = document.querySelectorAll('.faq-question');
            faqQuestions.forEach(btn => {
                const answerId = btn.getAttribute('aria-controls');
                const answer = document.getElementById(answerId);
                if (answer) {
                    answer.classList.remove('active');
                    answer.setAttribute('aria-hidden', 'true');
                    btn.setAttribute('aria-expanded', 'false');
                }
                btn.addEventListener('click', () => {
                    const expanded = btn.getAttribute('aria-expanded') === 'true';
                    document.querySelectorAll('.faq-answer').forEach(a => { a.classList.remove('active'); a.setAttribute('aria-hidden', 'true'); });
                    document.querySelectorAll('.faq-question[aria-expanded="true"]').forEach(q => q.setAttribute('aria-expanded', 'false'));
                    if (!expanded) {
                        btn.setAttribute('aria-expanded', 'true');
                        if (answer) { answer.classList.add('active'); answer.setAttribute('aria-hidden', 'false'); }
                    } else {
                        btn.setAttribute('aria-expanded', 'false');
                    }
                });
            });
            this.initLegalTOCHighlight();
        }

        handleSearch(e) {
            e.preventDefault();
            
            const form = e.target;
            const searchInput = form.querySelector('input[name="search"]');
            const query = searchInput.value.trim();
            
            if (query) {
                
                window.location.href = `index.php?search=${encodeURIComponent(query)}`;
            }
        }

        initLegalTOCHighlight() {
            const tocLinks = document.querySelectorAll('.toc a');
            const sections = Array.from(document.querySelectorAll('.legal-sections .legal-section'));
            if (!tocLinks.length || !sections.length) return;

            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const id = '#' + entry.target.id;
                        tocLinks.forEach(link => link.classList.toggle('active', link.getAttribute('href') === id));
                    }
                });
            }, { rootMargin: '-30% 0px -60% 0px', threshold: 0 });

            sections.forEach(sec => observer.observe(sec));
        }
    }

    class PerformanceMonitor {
        constructor() {
            this.init();
        }

        init() {
            window.addEventListener('load', () => {
                if ('performance' in window) {
                    const perfData = performance.getEntriesByType('navigation')[0];
                   
                }
            });

            this.observeWebVitals();
        }

        observeWebVitals() {
            if ('PerformanceObserver' in window) {
                const observer = new PerformanceObserver((list) => {
                    const entries = list.getEntries();
                    const lastEntry = entries[entries.length - 1];
                });
                
                try {
                    observer.observe({ entryTypes: ['largest-contentful-paint'] });
                } catch (e) {
                }
            }
        }
    }

    function initializeApp() {
        new MobileNavigation();
        new HeaderEffects();
        new SmoothScrolling();
        new FormHandler();
        
        const faqSection = document.querySelector('.faq-section');
        if (!faqSection || !faqSection.classList.contains('faq-static')) {
            new FAQAccordion();
        } else {
            const categoryButtons = document.querySelectorAll('.category-btn');
            categoryButtons.forEach(btn => {
                btn.addEventListener('click', () => {
                    const activeBtn = document.querySelector('.category-btn.active');
                    if (activeBtn) activeBtn.classList.remove('active');
                    btn.classList.add('active');
                    const category = btn.dataset.category;
                    document.querySelectorAll('.faq-item').forEach(item => {
                        if (category === 'all' || item.dataset.category === category) {
                            item.style.display = 'block';
                            item.classList.add('animate');
                        } else {
                            item.style.display = 'none';
                            item.classList.remove('animate');
                        }
                    });
                });
            });
        }
        new SearchHandler();
  
        new PerformanceMonitor();
    }

    initializeApp();

    window.Lumorans = {
        debounce,
        throttle
    };
});
// Lumorans - Animations JavaScript

document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // Animation Controller
    class AnimationController {
        constructor() {
            this.observerOptions = {
                root: null,
                rootMargin: '0px 0px -100px 0px',
                threshold: 0.1
            };
            
            this.reducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
            this.init();
        }

        init() {
            if (this.reducedMotion) {
                this.handleReducedMotion();
                return;
            }

            this.initIntersectionObserver();
            this.initParticleEffects();
            this.initMouseEffects();
            this.initScrollEffects();
            this.initTypingEffects();
            this.initCounterAnimations();
        }

        handleReducedMotion() {
            // Show all elements immediately for users who prefer reduced motion
            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            animatedElements.forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'none';
            });
        }

        initIntersectionObserver() {
            if ('IntersectionObserver' in window) {
                this.observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            this.animateElement(entry.target);
                            this.observer.unobserve(entry.target);
                        }
                    });
                }, this.observerOptions);

                // Observe all animated elements
                const animatedElements = document.querySelectorAll('.animate-on-scroll');
                animatedElements.forEach(el => this.observer.observe(el));
            } else {
                // Fallback for browsers without IntersectionObserver
                this.initScrollFallback();
            }
        }

        animateElement(element) {
            const delay = element.style.animationDelay || '0s';
            
            setTimeout(() => {
                element.classList.add('animate');
                
                // Add specific animation classes based on data attributes
                const animationType = element.dataset.animation;
                if (animationType) {
                    element.classList.add(animationType);
                }
                
                // Trigger custom event
                element.dispatchEvent(new CustomEvent('elementAnimated', {
                    detail: { element, type: animationType }
                }));
            }, parseFloat(delay) * 1000);
        }

        initScrollFallback() {
            const animatedElements = document.querySelectorAll('.animate-on-scroll');
            
            const checkElements = () => {
                const windowHeight = window.innerHeight;
                const scrollTop = window.pageYOffset;
                
                animatedElements.forEach(el => {
                    if (el.classList.contains('animate')) return;
                    
                    const elementTop = el.offsetTop;
                    if (elementTop < scrollTop + windowHeight - 100) {
                        this.animateElement(el);
                    }
                });
            };
            
            window.addEventListener('scroll', window.Lumorans.throttle(checkElements, 100));
            checkElements(); // Check on load
        }

        initParticleEffects() {
            const particleContainers = document.querySelectorAll('.floating-particles');
            
            particleContainers.forEach(container => {
                this.createParticles(container);
            });
        }

        createParticles(container) {
            const particleCount = 20;
            
            for (let i = 0; i < particleCount; i++) {
                const particle = document.createElement('div');
                particle.className = 'particle';
                
                // Random positioning and animation
                particle.style.left = Math.random() * 100 + '%';
                particle.style.animationDelay = Math.random() * 20 + 's';
                particle.style.animationDuration = (20 + Math.random() * 10) + 's';
                
                container.appendChild(particle);
            }
        }

        initMouseEffects() {
            // Parallax mouse movement
            const parallaxElements = document.querySelectorAll('[data-parallax]');
            
            if (parallaxElements.length > 0) {
                document.addEventListener('mousemove', (e) => {
                    const { clientX, clientY } = e;
                    const centerX = window.innerWidth / 2;
                    const centerY = window.innerHeight / 2;
                    
                    parallaxElements.forEach(el => {
                        const speed = parseFloat(el.dataset.parallax) || 0.05;
                        const x = (clientX - centerX) * speed;
                        const y = (clientY - centerY) * speed;
                        
                        el.style.transform = `translate(${x}px, ${y}px)`;
                    });
                });
            }

            // Magnetic effect for buttons
            const magneticElements = document.querySelectorAll('.magnetic');
            
            magneticElements.forEach(el => {
                el.addEventListener('mousemove', (e) => {
                    const rect = el.getBoundingClientRect();
                    const x = e.clientX - rect.left - rect.width / 2;
                    const y = e.clientY - rect.top - rect.height / 2;
                    
                    el.style.transform = `translate(${x * 0.3}px, ${y * 0.3}px)`;
                });
                
                el.addEventListener('mouseleave', () => {
                    el.style.transform = 'translate(0, 0)';
                });
            });
        }

        initScrollEffects() {
            // Parallax scrolling
            const parallaxElements = document.querySelectorAll('[data-scroll-speed]');
            
            if (parallaxElements.length > 0) {
                window.addEventListener('scroll', () => {
                    const scrolled = window.pageYOffset;
                    
                    parallaxElements.forEach(el => {
                        const speed = parseFloat(el.dataset.scrollSpeed) || 0.5;
                        const yPos = -(scrolled * speed);
                        el.style.transform = `translateY(${yPos}px)`;
                    });
                });
            }

            // Progress bar on scroll
            this.initScrollProgress();
        }

        initScrollProgress() {
            const progressBar = document.querySelector('.scroll-progress');
            if (!progressBar) return;

            window.addEventListener('scroll', () => {
                const scrollTop = window.pageYOffset;
                const docHeight = document.documentElement.scrollHeight - window.innerHeight;
                const scrollPercent = (scrollTop / docHeight) * 100;
                
                progressBar.style.width = scrollPercent + '%';
            });
        }

        initTypingEffects() {
            const typingElements = document.querySelectorAll('.typewriter-text');
            
            typingElements.forEach(el => {
                this.typeText(el);
            });
        }

        typeText(element) {
            const text = element.textContent;
            const speed = parseInt(element.dataset.speed) || 50;
            
            element.textContent = '';
            element.style.borderRight = '2px solid var(--accent-cyan)';
            
            let i = 0;
            const timer = setInterval(() => {
                if (i < text.length) {
                    element.textContent += text.charAt(i);
                    i++;
                } else {
                    clearInterval(timer);
                    // Remove cursor after typing
                    setTimeout(() => {
                        element.style.borderRight = 'none';
                    }, 1000);
                }
            }, speed);
        }

        initCounterAnimations() {
            const counters = document.querySelectorAll('.counter');
            
            counters.forEach(counter => {
                this.observer.observe(counter);
                counter.addEventListener('elementAnimated', () => {
                    this.animateCounter(counter);
                });
            });
        }

        animateCounter(element) {
            const target = parseInt(element.dataset.target) || parseInt(element.textContent);
            const duration = parseInt(element.dataset.duration) || 2000;
            const increment = target / (duration / 16); // 60fps
            
            let current = 0;
            const timer = setInterval(() => {
                current += increment;
                if (current >= target) {
                    current = target;
                    clearInterval(timer);
                }
                element.textContent = Math.floor(current);
            }, 16);
        }
    }

    // Scroll Reveal Animation Manager
    class ScrollRevealManager {
        constructor() {
            this.init();
        }

        init() {
            this.initRevealOnScroll();
            this.initStaggeredAnimations();
        }

        initRevealOnScroll() {
            const revealElements = document.querySelectorAll('.reveal');
            
            if ('IntersectionObserver' in window) {
                const revealObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('revealed');
                            revealObserver.unobserve(entry.target);
                        }
                    });
                }, {
                    threshold: 0.15
                });

                revealElements.forEach(el => revealObserver.observe(el));
            }
        }

        initStaggeredAnimations() {
            const staggerGroups = document.querySelectorAll('.stagger-group');
            
            staggerGroups.forEach(group => {
                const children = group.querySelectorAll('.stagger-item');
                const delay = parseInt(group.dataset.staggerDelay) || 100;
                
                children.forEach((child, index) => {
                    child.style.animationDelay = `${index * delay}ms`;
                });
            });
        }
    }

    // Micro Interaction Manager
    class MicroInteractionManager {
        constructor() {
            this.init();
        }

        init() {
            this.initButtonEffects();
            this.initFormEffects();
            this.initCardEffects();
            this.initIconAnimations();
        }

        initButtonEffects() {
            const buttons = document.querySelectorAll('.btn-effect');
            
            buttons.forEach(btn => {
                btn.addEventListener('click', (e) => {
                    const ripple = document.createElement('span');
                    ripple.className = 'ripple-effect';
                    
                    const rect = btn.getBoundingClientRect();
                    const size = Math.max(rect.width, rect.height);
                    const x = e.clientX - rect.left - size / 2;
                    const y = e.clientY - rect.top - size / 2;
                    
                    ripple.style.width = ripple.style.height = size + 'px';
                    ripple.style.left = x + 'px';
                    ripple.style.top = y + 'px';
                    
                    btn.appendChild(ripple);
                    
                    setTimeout(() => {
                        ripple.remove();
                    }, 600);
                });
            });
        }

        initFormEffects() {
            const formInputs = document.querySelectorAll('.form-input');
            
            formInputs.forEach(input => {
                input.addEventListener('focus', () => {
                    input.parentElement.classList.add('focused');
                });
                
                input.addEventListener('blur', () => {
                    if (!input.value) {
                        input.parentElement.classList.remove('focused');
                    }
                });
                
                // Check if input has value on load
                if (input.value) {
                    input.parentElement.classList.add('focused');
                }
            });
        }

        initCardEffects() {
            const cards = document.querySelectorAll('.interactive-card');
            
            cards.forEach(card => {
                card.addEventListener('mouseenter', () => {
                    card.style.transform = 'translateY(-10px) scale(1.02)';
                });
                
                card.addEventListener('mouseleave', () => {
                    card.style.transform = 'translateY(0) scale(1)';
                });
            });
        }

        initIconAnimations() {
            const animatedIcons = document.querySelectorAll('.icon-animated');
            
            animatedIcons.forEach(icon => {
                icon.addEventListener('mouseenter', () => {
                    icon.classList.add('animate-bounce');
                });
                
                icon.addEventListener('animationend', () => {
                    icon.classList.remove('animate-bounce');
                });
            });
        }
    }

    // Page Transition Manager
    class PageTransitionManager {
        constructor() {
            this.init();
        }

        init() {
            this.initPageEnter();
            this.initPageExit();
        }

        initPageEnter() {
            // Page enter animation
            document.body.classList.add('page-entering');
            
            setTimeout(() => {
                document.body.classList.remove('page-entering');
                document.body.classList.add('page-entered');
            }, 100);
        }

        initPageExit() {
            // Smooth page transitions
            const links = document.querySelectorAll('a[href^="/"], a[href^="./"], a[href$=".php"]');
            
            links.forEach(link => {
                link.addEventListener('click', (e) => {
                    if (link.target === '_blank') return;
                    
                    e.preventDefault();
                    
                    document.body.classList.add('page-exiting');
                    
                    setTimeout(() => {
                        window.location.href = link.href;
                    }, 300);
                });
            });
        }
    }

    // Text Animation Effects
    class TextAnimationEffects {
        constructor() {
            this.init();
        }

        init() {
            this.initTextReveal();
            this.initWordAnimation();
        }

        initTextReveal() {
            const textElements = document.querySelectorAll('.text-reveal');
            
            textElements.forEach(el => {
                const text = el.textContent;
                el.innerHTML = '';
                
                const words = text.split(' ');
                words.forEach((word, index) => {
                    const span = document.createElement('span');
                    span.textContent = word + ' ';
                    span.style.animationDelay = `${index * 0.1}s`;
                    span.classList.add('word-reveal');
                    el.appendChild(span);
                });
            });
        }

        initWordAnimation() {
            const animatedTexts = document.querySelectorAll('.animated-words');
            
            animatedTexts.forEach(el => {
                const words = el.dataset.words.split(',');
                let currentIndex = 0;
                
                setInterval(() => {
                    el.style.opacity = '0';
                    
                    setTimeout(() => {
                        currentIndex = (currentIndex + 1) % words.length;
                        el.textContent = words[currentIndex].trim();
                        el.style.opacity = '1';
                    }, 300);
                }, 3000);
            });
        }
    }

    // Loading Animation Manager
    class LoadingAnimationManager {
        constructor() {
            this.init();
        }

        init() {
            this.createPageLoader();
            this.initImageLoading();
        }

        createPageLoader() {
            if (document.querySelector('.page-loader')) return;
            
            const loader = document.createElement('div');
            loader.className = 'page-loader';
            loader.innerHTML = `
                <div class="loader-content">
                    <div class="loader-logo">Lumorans</div>
                    <div class="loader-progress">
                        <div class="loader-bar"></div>
                    </div>
                </div>
            `;
            
            document.body.appendChild(loader);
            
            window.addEventListener('load', () => {
                setTimeout(() => {
                    loader.classList.add('loaded');
                    setTimeout(() => {
                        loader.remove();
                    }, 500);
                }, 500);
            });
        }

        initImageLoading() {
            const images = document.querySelectorAll('img[data-src]');
            
            if ('IntersectionObserver' in window) {
                const imageObserver = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            const img = entry.target;
                            img.src = img.dataset.src;
                            img.classList.add('loaded');
                            imageObserver.unobserve(img);
                        }
                    });
                });

                images.forEach(img => imageObserver.observe(img));
            } else {
                // Fallback: load all images immediately
                images.forEach(img => {
                    img.src = img.dataset.src;
                    img.classList.add('loaded');
                });
            }
        }
    }

    // Performance Optimization
    class AnimationPerformance {
        constructor() {
            this.init();
        }

        init() {
            this.optimizeAnimations();
            this.handleVisibilityChange();
        }

        optimizeAnimations() {
            // Use will-change property for animated elements
            const animatedElements = document.querySelectorAll('.animate-on-scroll, .morphing-shape, .floating-particles');
            
            animatedElements.forEach(el => {
                el.style.willChange = 'transform, opacity';
                
                // Remove will-change after animation
                el.addEventListener('animationend', () => {
                    el.style.willChange = 'auto';
                });
            });
        }

        handleVisibilityChange() {
            // Pause animations when page is not visible
            document.addEventListener('visibilitychange', () => {
                const animatedElements = document.querySelectorAll('.animated-gradient, .floating-particles');
                
                if (document.hidden) {
                    animatedElements.forEach(el => {
                        el.style.animationPlayState = 'paused';
                    });
                } else {
                    animatedElements.forEach(el => {
                        el.style.animationPlayState = 'running';
                    });
                }
            });
        }
    }

    // Initialize all animation components
    function initializeAnimations() {
        new AnimationController();
        new ScrollRevealManager();
        new MicroInteractionManager();
        new PageTransitionManager();
        new TextAnimationEffects();
        new LoadingAnimationManager();
        new AnimationPerformance();
    }

    // Start animations
    initializeAnimations();

    // Global animation utilities
    window.LumoransAnimations = {
        fadeIn: (element, duration = 300) => {
            element.style.opacity = '0';
            element.style.transition = `opacity ${duration}ms ease`;
            element.style.display = 'block';
            
            requestAnimationFrame(() => {
                element.style.opacity = '1';
            });
        },
        
        fadeOut: (element, duration = 300) => {
            element.style.transition = `opacity ${duration}ms ease`;
            element.style.opacity = '0';
            
            setTimeout(() => {
                element.style.display = 'none';
            }, duration);
        },
        
        slideUp: (element, duration = 300) => {
            element.style.height = '0';
            element.style.overflow = 'hidden';
            element.style.transition = `height ${duration}ms ease`;
            
            requestAnimationFrame(() => {
                element.style.height = element.scrollHeight + 'px';
            });
        }
    };
});
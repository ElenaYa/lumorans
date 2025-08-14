// Lumorans - Cookie Management JavaScript

document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    // Cookie Management System
    class CookieManager {
        constructor() {
            this.cookieName = 'lumorans_cookie_consent';
            this.consentData = {
                essential: true, // Always required
                analytical: false,
                functional: false,
                marketing: false,
                timestamp: null,
                version: '1.0'
            };
            
            this.init();
        }

        init() {
            this.loadConsentData();
            this.initEventListeners();
            this.showBannerIfNeeded();
            this.initPageControls();
        }

        loadConsentData() {
            const saved = this.getCookie(this.cookieName);
            if (saved) {
                try {
                    const parsed = JSON.parse(decodeURIComponent(saved));
                    this.consentData = { ...this.consentData, ...parsed };
                    this.applyConsentSettings();
                } catch (error) {
                    console.warn('Failed to parse cookie consent data:', error);
                }
            }
        }

        initEventListeners() {
            // Banner buttons
            const acceptAllBtn = document.getElementById('cookieAccept');
            const customizeBtn = document.getElementById('cookieCustomize');
            const settingsBtn = document.getElementById('cookieSettings');
            const closeBtn = document.getElementById('cookieClose');
            const saveBtn = document.getElementById('cookieSave');

            if (acceptAllBtn) {
                acceptAllBtn.addEventListener('click', () => this.acceptAllCookies());
            }

            if (customizeBtn) {
                customizeBtn.addEventListener('click', () => this.showCustomizeModal());
            }

            if (settingsBtn) {
                settingsBtn.addEventListener('click', () => this.showCustomizeModal());
            }

            if (closeBtn) {
                closeBtn.addEventListener('click', () => this.hideCustomizeModal());
            }

            if (saveBtn) {
                saveBtn.addEventListener('click', () => this.saveCustomSettings());
            }

            // Page controls (on cookies.php)
            const manageCookiesBtn = document.getElementById('manageCookies');
            const acceptAllPageBtn = document.getElementById('acceptAllCookies');
            const rejectOptionalBtn = document.getElementById('rejectOptional');
            const saveSettingsBtn = document.getElementById('saveSettings');

            if (manageCookiesBtn) {
                manageCookiesBtn.addEventListener('click', () => this.showCustomizeModal());
            }

            if (acceptAllPageBtn) {
                acceptAllPageBtn.addEventListener('click', () => this.acceptAllCookies());
            }

            if (rejectOptionalBtn) {
                rejectOptionalBtn.addEventListener('click', () => this.rejectOptionalCookies());
            }

            if (saveSettingsBtn) {
                saveSettingsBtn.addEventListener('click', () => this.savePageSettings());
            }

            // Modal backdrop clicks
            const modal = document.getElementById('cookieModal');
            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        this.hideCustomizeModal();
                    }
                });
            }

            // Keyboard navigation
            document.addEventListener('keydown', (e) => {
                if (e.key === 'Escape') {
                    this.hideCustomizeModal();
                }
            });
        }

        showBannerIfNeeded() {
            if (!this.hasConsent()) {
                const banner = document.getElementById('cookieBanner');
                if (banner) {
                    banner.style.display = 'flex';
                    banner.classList.add('show');
                    
                    // Animate in
                    setTimeout(() => {
                        banner.style.transform = 'translateY(0)';
                        banner.style.opacity = '1';
                    }, 100);
                }
            }
        }

        hasConsent() {
            return this.consentData.timestamp !== null;
        }

        acceptAllCookies() {
            this.consentData = {
                essential: true,
                analytical: true,
                functional: true,
                marketing: true,
                timestamp: Date.now(),
                version: '1.0'
            };

            this.saveConsentData();
            this.hideBanner();
            this.applyConsentSettings();
            this.showNotification('Kaikki evästeet hyväksytty', 'success');
        }

        rejectOptionalCookies() {
            this.consentData = {
                essential: true,
                analytical: false,
                functional: false,
                marketing: false,
                timestamp: Date.now(),
                version: '1.0'
            };

            this.saveConsentData();
            this.hideBanner();
            this.applyConsentSettings();
            this.showNotification('Vain välttämättömät evästeet hyväksytty', 'info');
        }

        showCustomizeModal() {
            const modal = document.getElementById('cookieModal');
            if (modal) {
                // Update toggle states
                this.updateModalToggles();
                
                modal.style.display = 'flex';
                modal.classList.add('show');
                
                // Focus management
                const firstInput = modal.querySelector('input, button');
                if (firstInput) {
                    firstInput.focus();
                }
                
                // Prevent body scroll
                document.body.style.overflow = 'hidden';
            }
        }

        hideCustomizeModal() {
            const modal = document.getElementById('cookieModal');
            if (modal) {
                modal.classList.remove('show');
                modal.style.display = 'none';
                
                // Restore body scroll
                document.body.style.overflow = '';
            }
        }

        updateModalToggles() {
            const toggles = {
                'analyticalCookies': this.consentData.analytical,
                'functionalCookies': this.consentData.functional,
                'marketingCookies': this.consentData.marketing
            };

            Object.entries(toggles).forEach(([id, checked]) => {
                const toggle = document.getElementById(id);
                if (toggle) {
                    toggle.checked = checked;
                }
            });
        }

        saveCustomSettings() {
            // Get current toggle states from modal
            const analytical = document.getElementById('analyticalCookies')?.checked || false;
            const functional = document.getElementById('functionalCookies')?.checked || false;
            const marketing = document.getElementById('marketingCookies')?.checked || false;

            this.consentData = {
                essential: true,
                analytical,
                functional,
                marketing,
                timestamp: Date.now(),
                version: '1.0'
            };

            this.saveConsentData();
            this.hideCustomizeModal();
            this.hideBanner();
            this.applyConsentSettings();
            this.showNotification('Evästeasetukset tallennettu', 'success');
        }

        savePageSettings() {
            // Get current toggle states from page
            const analytical = document.getElementById('analyticsToggle')?.checked || false;
            const functional = document.getElementById('functionalToggle')?.checked || false;
            const marketing = document.getElementById('marketingToggle')?.checked || false;

            this.consentData = {
                essential: true,
                analytical,
                functional,
                marketing,
                timestamp: Date.now(),
                version: '1.0'
            };

            this.saveConsentData();
            this.applyConsentSettings();
            this.showNotification('Evästeasetukset päivitetty', 'success');
        }

        initPageControls() {
            // Initialize toggle states on cookies page
            const analyticsToggle = document.getElementById('analyticsToggle');
            const functionalToggle = document.getElementById('functionalToggle');
            const marketingToggle = document.getElementById('marketingToggle');

            if (analyticsToggle) analyticsToggle.checked = this.consentData.analytical;
            if (functionalToggle) functionalToggle.checked = this.consentData.functional;
            if (marketingToggle) marketingToggle.checked = this.consentData.marketing;
        }

        hideBanner() {
            const banner = document.getElementById('cookieBanner');
            if (banner) {
                banner.style.transform = 'translateY(100%)';
                banner.style.opacity = '0';
                
                setTimeout(() => {
                    banner.style.display = 'none';
                }, 300);
            }
        }

        saveConsentData() {
            const data = encodeURIComponent(JSON.stringify(this.consentData));
            this.setCookie(this.cookieName, data, 365);
        }

        applyConsentSettings() {
            // Apply analytical cookies
            if (this.consentData.analytical) {
                this.enableAnalytics();
            } else {
                this.disableAnalytics();
            }

            // Apply functional cookies
            if (this.consentData.functional) {
                this.enableFunctionalCookies();
            } else {
                this.disableFunctionalCookies();
            }

            // Apply marketing cookies
            if (this.consentData.marketing) {
                this.enableMarketingCookies();
            } else {
                this.disableMarketingCookies();
            }

            // Always enable essential cookies
            this.enableEssentialCookies();
        }

        enableAnalytics() {
            // Google Analytics
            if (typeof gtag !== 'undefined') {
                gtag('consent', 'update', {
                    'analytics_storage': 'granted'
                });
            }

            // Load Google Analytics if not already loaded
            if (!window.ga && !window.gtag) {
                this.loadGoogleAnalytics();
            }

            // Hotjar
            this.loadHotjar();
        }

        disableAnalytics() {
            if (typeof gtag !== 'undefined') {
                gtag('consent', 'update', {
                    'analytics_storage': 'denied'
                });
            }

            // Clear analytics cookies
            this.clearCookiesByPattern(/^_ga/);
            this.clearCookiesByPattern(/^_gid/);
            this.clearCookiesByPattern(/^_hjid/);
        }

        enableFunctionalCookies() {
            // Enable user preferences saving
            this.functionalCookiesEnabled = true;
            
            // Load user preferences
            this.loadUserPreferences();
        }

        disableFunctionalCookies() {
            this.functionalCookiesEnabled = false;
            
            // Clear functional cookies
            this.clearCookiesByPattern(/^user_preferences/);
            this.clearCookiesByPattern(/^theme_mode/);
        }

        enableMarketingCookies() {
            if (typeof gtag !== 'undefined') {
                gtag('consent', 'update', {
                    'ad_storage': 'granted'
                });
            }

            // Load marketing scripts
            this.loadMarketingScripts();
        }

        disableMarketingCookies() {
            if (typeof gtag !== 'undefined') {
                gtag('consent', 'update', {
                    'ad_storage': 'denied'
                });
            }

            // Clear marketing cookies
            this.clearCookiesByPattern(/^_fbp/);
            this.clearCookiesByPattern(/^_fbc/);
        }

        enableEssentialCookies() {
            // Essential cookies are always enabled
            // Set session cookies, CSRF tokens, etc.
            this.setCookie('session_active', 'true', 0); // Session cookie
        }

        loadGoogleAnalytics() {
            // Google Analytics 4
            const script = document.createElement('script');
            script.async = true;
            script.src = 'https://www.googletagmanager.com/gtag/js?id=GA_MEASUREMENT_ID';
            document.head.appendChild(script);

            script.onload = () => {
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());
                gtag('config', 'GA_MEASUREMENT_ID', {
                    anonymize_ip: true,
                    cookie_flags: 'secure;samesite=lax'
                });
            };
        }

        loadHotjar() {
            // Hotjar tracking code
            (function(h,o,t,j,a,r){
                h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
                h._hjSettings={hjid:123456,hjsv:6};
                a=o.getElementsByTagName('head')[0];
                r=o.createElement('script');r.async=1;
                r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
                a.appendChild(r);
            })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
        }

        loadMarketingScripts() {
            // Facebook Pixel, LinkedIn Insight, etc.
            // Add your marketing scripts here
        }

        loadUserPreferences() {
            const preferences = this.getCookie('user_preferences');
            if (preferences) {
                try {
                    const data = JSON.parse(preferences);
                    // Apply user preferences
                    if (data.theme) {
                        document.body.classList.add(`theme-${data.theme}`);
                    }
                } catch (error) {
                    console.warn('Failed to load user preferences:', error);
                }
            }
        }

        clearCookiesByPattern(pattern) {
            const cookies = document.cookie.split(';');
            
            cookies.forEach(cookie => {
                const [name] = cookie.trim().split('=');
                if (pattern.test(name)) {
                    this.deleteCookie(name);
                    // Also try to delete with different domain and path combinations
                    this.deleteCookie(name, '/');
                    this.deleteCookie(name, '/', window.location.hostname);
                    this.deleteCookie(name, '/', '.' + window.location.hostname);
                }
            });
        }

        showNotification(message, type = 'info') {
            // Create notification element
            const notification = document.createElement('div');
            notification.className = `cookie-notification ${type}`;
            notification.innerHTML = `
                <div class="notification-content">
                    <span class="notification-message">${message}</span>
                    <button class="notification-close" aria-label="Sulje ilmoitus">×</button>
                </div>
            `;

            // Add to page
            document.body.appendChild(notification);

            // Animate in
            setTimeout(() => {
                notification.classList.add('show');
            }, 100);

            // Auto-hide after 3 seconds
            setTimeout(() => {
                this.hideNotification(notification);
            }, 3000);

            // Close button
            const closeBtn = notification.querySelector('.notification-close');
            closeBtn.addEventListener('click', () => {
                this.hideNotification(notification);
            });
        }

        hideNotification(notification) {
            notification.classList.remove('show');
            setTimeout(() => {
                if (notification.parentNode) {
                    notification.parentNode.removeChild(notification);
                }
            }, 300);
        }

        // Utility methods for cookie operations
        setCookie(name, value, days, path = '/', secure = true) {
            let expires = '';
            if (days) {
                const date = new Date();
                date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
                expires = '; expires=' + date.toUTCString();
            }
            
            const secureFlag = secure && location.protocol === 'https:' ? '; Secure' : '';
            const sameSite = '; SameSite=Lax';
            
            document.cookie = `${name}=${value}${expires}; path=${path}${secureFlag}${sameSite}`;
        }

        getCookie(name) {
            const nameEQ = name + '=';
            const ca = document.cookie.split(';');
            
            for (let i = 0; i < ca.length; i++) {
                let c = ca[i];
                while (c.charAt(0) === ' ') c = c.substring(1, c.length);
                if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
            }
            return null;
        }

        deleteCookie(name, path = '/', domain = '') {
            const domainString = domain ? `; domain=${domain}` : '';
            document.cookie = `${name}=; expires=Thu, 01 Jan 1970 00:00:00 GMT; path=${path}${domainString}`;
        }

        // Public API methods
        getConsentStatus() {
            return this.consentData;
        }

        updateConsent(newConsent) {
            this.consentData = { ...this.consentData, ...newConsent, timestamp: Date.now() };
            this.saveConsentData();
            this.applyConsentSettings();
        }

        revokeConsent() {
            this.consentData = {
                essential: true,
                analytical: false,
                functional: false,
                marketing: false,
                timestamp: null,
                version: '1.0'
            };
            
            this.deleteCookie(this.cookieName);
            this.applyConsentSettings();
            this.showBannerIfNeeded();
            this.showNotification('Evästeiden suostumus peruutettu', 'info');
        }
    }

    // Additional CSS for notifications
    const notificationStyles = `
        .cookie-notification {
            position: fixed;
            top: 20px;
            right: 20px;
            background: var(--glass-bg);
            backdrop-filter: var(--glass-blur);
            border: 1px solid var(--glass-border);
            border-radius: var(--border-radius);
            padding: 1rem;
            max-width: 400px;
            z-index: 10000;
            transform: translateX(100%);
            opacity: 0;
            transition: all 0.3s ease;
        }
        
        .cookie-notification.show {
            transform: translateX(0);
            opacity: 1;
        }
        
        .cookie-notification.success {
            border-color: rgba(34, 197, 94, 0.5);
        }
        
        .cookie-notification.info {
            border-color: rgba(59, 130, 246, 0.5);
        }
        
        .notification-content {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1rem;
        }
        
        .notification-message {
            color: var(--text-primary);
            font-size: 0.9rem;
        }
        
        .notification-close {
            background: none;
            border: none;
            color: var(--text-secondary);
            font-size: 1.2rem;
            cursor: pointer;
            padding: 0;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: color 0.2s ease;
        }
        
        .notification-close:hover {
            color: var(--text-primary);
        }
        
        @media (max-width: 768px) {
            .cookie-notification {
                right: 10px;
                left: 10px;
                max-width: none;
            }
        }
    `;

    // Inject notification styles
    const styleSheet = document.createElement('style');
    styleSheet.textContent = notificationStyles;
    document.head.appendChild(styleSheet);

    // Initialize cookie manager
    const cookieManager = new CookieManager();

    // Make cookie manager globally available
    window.LumoransCookies = cookieManager;

    // Google Consent Mode initialization
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    
    // Default consent state
    gtag('consent', 'default', {
        'analytics_storage': 'denied',
        'ad_storage': 'denied',
        'functionality_storage': 'denied',
        'personalization_storage': 'denied'
    });

    // Update consent based on saved preferences
    if (cookieManager.hasConsent()) {
        const consent = cookieManager.getConsentStatus();
        gtag('consent', 'update', {
            'analytics_storage': consent.analytical ? 'granted' : 'denied',
            'ad_storage': consent.marketing ? 'granted' : 'denied',
            'functionality_storage': consent.functional ? 'granted' : 'denied',
            'personalization_storage': consent.functional ? 'granted' : 'denied'
        });
    }
});
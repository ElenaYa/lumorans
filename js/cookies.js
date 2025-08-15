
document.addEventListener('DOMContentLoaded', function() {
    'use strict';

    class CookieManager {
        constructor() {
            this.cookieName = 'lumorans_cookie_consent';
            this.consentData = {
                essential: true, 
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

            const modal = document.getElementById('cookieModal');
            if (modal) {
                modal.addEventListener('click', (e) => {
                    if (e.target === modal) {
                        this.hideCustomizeModal();
                    }
                });
            }

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
                this.updateModalToggles();
                
                modal.style.display = 'flex';
                modal.classList.add('show');
                
                const firstInput = modal.querySelector('input, button');
                if (firstInput) {
                    firstInput.focus();
                }
                
                document.body.style.overflow = 'hidden';
            }
        }

        hideCustomizeModal() {
            const modal = document.getElementById('cookieModal');
            if (modal) {
                modal.classList.remove('show');
                modal.style.display = 'none';
                
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
            if (this.consentData.analytical) {
                this.enableAnalytics();
            } else {
                this.disableAnalytics();
            }

            if (this.consentData.functional) {
                this.enableFunctionalCookies();
            } else {
                this.disableFunctionalCookies();
            }

            if (this.consentData.marketing) {
                this.enableMarketingCookies();
            } else {
                this.disableMarketingCookies();
            }

            this.enableEssentialCookies();
        }

        enableAnalytics() {
        
            this.loadHotjar();
        }

        disableAnalytics() {
            this.clearCookiesByPattern(/^_ga/);
            this.clearCookiesByPattern(/^_gid/);
            this.clearCookiesByPattern(/^_hjid/);
        }

        enableFunctionalCookies() {
            this.functionalCookiesEnabled = true;
            
            this.loadUserPreferences();
        }

        disableFunctionalCookies() {
            this.functionalCookiesEnabled = false;
            
            this.clearCookiesByPattern(/^user_preferences/);
            this.clearCookiesByPattern(/^theme_mode/);
        }

        enableMarketingCookies() {
            this.loadMarketingScripts();
        }

        disableMarketingCookies() {
            this.clearCookiesByPattern(/^_fbp/);
            this.clearCookiesByPattern(/^_fbc/);
        }

        enableEssentialCookies() {
           
            this.setCookie('session_active', 'true', 0); 
        }


        loadHotjar() {
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
          
        }

        loadUserPreferences() {
            const preferences = this.getCookie('user_preferences');
            if (preferences) {
                try {
                    const data = JSON.parse(preferences);
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
                    this.deleteCookie(name, '/');
                    this.deleteCookie(name, '/', window.location.hostname);
                    this.deleteCookie(name, '/', '.' + window.location.hostname);
                }
            });
        }

        showNotification(message, type = 'info') {
            const notification = document.createElement('div');
            notification.className = `cookie-notification ${type}`;
            notification.innerHTML = `
                <div class="notification-content">
                    <span class="notification-message">${message}</span>
                    <button class="notification-close" aria-label="Sulje ilmoitus">×</button>
                </div>
            `;

            document.body.appendChild(notification);

            setTimeout(() => {
                notification.classList.add('show');
            }, 100);

            setTimeout(() => {
                this.hideNotification(notification);
            }, 3000);

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

    const styleSheet = document.createElement('style');
    styleSheet.textContent = notificationStyles;
    document.head.appendChild(styleSheet);

    const cookieManager = new CookieManager();

    window.LumoransCookies = cookieManager;

});
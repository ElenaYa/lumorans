</main>

    <footer class="main-footer">
        <div class="footer-container">
            <!-- Newsletter Section -->
            <section class="newsletter-section glass-panel">
                <div class="newsletter-content">
                    <h3 class="newsletter-title">Tilaa Uutiskirjeemme</h3>
                    <p class="newsletter-description">Saa viimeisimmät uutiset web- ja app-suunnittelusta suoraan sähköpostiisi</p>
                    
                    <form class="newsletter-form" id="newsletterForm">
                        <div class="input-group">
                            <input type="email" id="newsletterEmail" name="email" placeholder="Sähköpostiosoitteesi" required>
                            <button type="submit" class="submit-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="m22 2-7 20-4-9-9-4z"/>
                                    <path d="M22 2 11 13"/>
                                </svg>
                                Tilaa
                            </button>
                        </div>
                        <div class="newsletter-response" id="newsletterResponse"></div>
                    </form>
                </div>
            </section>

            <!-- Footer Content -->
            <div class="footer-content">
                <div class="footer-grid">
                    <div class="footer-column">
                        <div class="footer-brand">
                            <h3 class="brand-name">Lumorans</h3>
                            <p class="brand-description">
                                Futuristinen web- ja app-suunnittelustudio, joka luo unohtumattomia digitaalisia kokemuksia huipputeknologialla ja innovatiivisella designilla.
                            </p>
                        </div>
                    </div>
                    
                    <div class="footer-column">
                        <h4 class="footer-heading">Palvelut</h4>
                        <ul class="footer-links">
                            <li><a href="services.php#web-design">Web Design</a></li>
                            <li><a href="services.php#app-design">App Design</a></li>
                            <li><a href="services.php#ui-ux">UI/UX Design</a></li>
                            <li><a href="services.php#branding">Branding</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h4 class="footer-heading">Yritys</h4>
                        <ul class="footer-links">
                            <li><a href="about.php">Tietoa Meistä</a></li>
                            <li><a href="reviews.php">Asiakasarvostelut</a></li>
                            <li><a href="faq.php">Usein Kysytyt</a></li>
                            <li><a href="contact.php">Ota Yhteyttä</a></li>
                        </ul>
                    </div>
                    
                    <div class="footer-column">
                        <h4 class="footer-heading">Yhteystiedot</h4>
                        <div class="contact-info">
                            <div class="contact-item">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                    <polyline points="22,6 12,13 2,6"/>
                                </svg>
                                <a href="mailto:admin@lumorans.com">admin@lumorans.com</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="footer-bottom">
                    <div class="footer-legal">
                        <div class="copyright">
                            <p>&copy; <?php echo date('Y'); ?> Lumorans. Kaikki oikeudet pidätetään.</p>
                        </div>
                        <div class="legal-links">
                            <a href="privacy.php">Tietosuojakäytäntö</a>
                            <a href="terms.php">Käyttöehdot</a>
                            <a href="disclaimer.php">Vastuuvapauslauseke</a>
                            <a href="cookies.php">Evästekäytäntö</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Cookie Consent Banner -->
    <div class="cookie-banner glass-panel" id="cookieBanner">
        <div class="cookie-content">
            <div class="cookie-text">
                <h4>Evästeiden Käyttö</h4>
                <p>Käytämme evästeitä parantaaksemme käyttökokemustasi ja analysoidaksemme sivuston käyttöä.</p>
                <a href="cookies.php" class="cookie-link">Lue Evästekäytäntö</a>
            </div>
            <div class="cookie-actions">
                <button class="cookie-btn cookie-settings" id="cookieSettings">Asetukset</button>
                <button class="cookie-btn cookie-customize" id="cookieCustomize">Mukauta</button>
                <button class="cookie-btn cookie-accept" id="cookieAccept">Hyväksy Kaikki</button>
            </div>
        </div>
    </div>

    <!-- Cookie Settings Modal -->
    <div class="cookie-modal" id="cookieModal">
        <div class="cookie-modal-content glass-panel">
            <div class="cookie-modal-header">
                <h3>Evästeasetukset</h3>
                <button class="cookie-close" id="cookieClose">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"/>
                        <line x1="6" y1="6" x2="18" y2="18"/>
                    </svg>
                </button>
            </div>
            
            <div class="cookie-categories">
                <div class="cookie-category">
                    <div class="category-header">
                        <label class="cookie-toggle">
                            <input type="checkbox" id="essentialCookies" checked disabled>
                            <span class="toggle-slider"></span>
                        </label>
                        <div class="category-info">
                            <h4>Välttämättömät Evästeet</h4>
                            <p>Nämä evästeet ovat välttämättömiä sivuston toiminnalle.</p>
                        </div>
                    </div>
                </div>
                
                <div class="cookie-category">
                    <div class="category-header">
                        <label class="cookie-toggle">
                            <input type="checkbox" id="analyticalCookies">
                            <span class="toggle-slider"></span>
                        </label>
                        <div class="category-info">
                            <h4>Analytiikka Evästeet</h4>
                            <p>Auttavat meitä ymmärtämään sivuston käyttöä ja parantamaan palvelua.</p>
                        </div>
                    </div>
                </div>
                
                <div class="cookie-category">
                    <div class="category-header">
                        <label class="cookie-toggle">
                            <input type="checkbox" id="marketingCookies">
                            <span class="toggle-slider"></span>
                        </label>
                        <div class="category-info">
                            <h4>Markkinointi Evästeet</h4>
                            <p>Käytetään kohdennetun mainonnan tarjoamiseen.</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="cookie-modal-actions">
                <button class="cookie-btn cookie-save" id="cookieSave">Tallenna Asetukset</button>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="js/main.js"></script>
    <script src="js/animations.js"></script>
    <script src="js/cookies.js"></script>
</body>
</html>
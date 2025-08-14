<?php include 'header.php'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-background">
        <div class="animated-gradient"></div>
    </div>
    <div class="container">
        <div class="page-header-content animate-on-scroll">
            <h1 class="page-title">Ota Yhteyttä</h1>
            <p class="page-description">
                Kerro meille projektistasi ja aloitetaan luomaan jotain uskomatonta yhdessä
            </p>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="contact-section section-padding">
    <div class="container">
        <div class="contact-content">
            <!-- Contact Form -->
            <div class="contact-form-container animate-on-scroll">
                <div class="form-header">
                    <h2 class="form-title">Lähetä Viesti</h2>
                    <p class="form-description">
                        Täytä lomake alla, niin otamme yhteyttä mahdollisimman pian. 
                        Kerro meille projektistasi ja tavoitteistasi.
                    </p>
                </div>
                
                <form class="contact-form glass-panel" id="contactForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="firstName">Etunimi</label>
                            <input type="text" id="firstName" name="first_name" required>
                            <div class="input-border"></div>
                        </div>
                        <div class="form-group">
                            <label for="lastName">Sukunimi</label>
                            <input type="text" id="lastName" name="last_name" required>
                            <div class="input-border"></div>
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Sähköposti</label>
                            <input type="email" id="email" name="email" required>
                            <div class="input-border"></div>
                        </div>
                        <div class="form-group">
                            <label for="company">Yritys (valinnainen)</label>
                            <input type="text" id="company" name="company">
                            <div class="input-border"></div>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="service">Palvelu</label>
                        <select id="service" name="service" required>
                            <option value="">Valitse palvelu</option>
                            <option value="web-design">Web Design</option>
                            <option value="app-design">App Design</option>
                            <option value="ui-ux">UI/UX Design</option>
                            <option value="branding">Branding</option>
                            <option value="consultation">Konsultointi</option>
                            <option value="other">Muu / En ole varma</option>
                        </select>
                        <div class="input-border"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="budget">Budjetti</label>
                        <select id="budget" name="budget">
                            <option value="">Valitse budjetti</option>
                            <option value="under-5k">Alle 5 000€</option>
                            <option value="5k-10k">5 000€ - 10 000€</option>
                            <option value="10k-25k">10 000€ - 25 000€</option>
                            <option value="25k-50k">25 000€ - 50 000€</option>
                            <option value="over-50k">Yli 50 000€</option>
                            <option value="discuss">Keskustellaan</option>
                        </select>
                        <div class="input-border"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="timeline">Aikataulu</label>
                        <select id="timeline" name="timeline">
                            <option value="">Valitse aikataulu</option>
                            <option value="asap">Mahdollisimman pian</option>
                            <option value="1-month">1 kuukauden sisällä</option>
                            <option value="3-months">3 kuukauden sisällä</option>
                            <option value="6-months">6 kuukauden sisällä</option>
                            <option value="flexible">Joustava</option>
                        </select>
                        <div class="input-border"></div>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Projektin Kuvaus</label>
                        <textarea id="message" name="message" rows="6" placeholder="Kerro meille projektistasi, tavoitteistasi ja visiostasi..." required></textarea>
                        <div class="input-border"></div>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="newsletter" id="newsletter">
                            <span class="checkmark"></span>
                            Haluan tilata uutiskirjeen ja saada vinkkejä web-suunnittelusta
                        </label>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" name="privacy" required>
                            <span class="checkmark"></span>
                            Hyväksyn <a href="privacy.php" target="_blank">tietosuojakäytännön</a> ja suostun tietojeni käsittelyyn
                        </label>
                    </div>
                    
                    <button type="submit" class="submit-btn">
                        <span>Lähetä Viesti</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="m22 2-7 20-4-9-9-4z"/>
                            <path d="M22 2 11 13"/>
                        </svg>
                    </button>
                    
                    <div class="form-response" id="contactResponse"></div>
                </form>
            </div>
            
            <!-- Contact Info -->
            <div class="contact-info-container animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="contact-info glass-panel">
                    <h3 class="info-title">Yhteystiedot</h3>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                        </div>
                        <div class="info-content">
                            <h4>Sähköposti</h4>
                            <a href="mailto:admin@lumorans.com">admin@lumorans.com</a>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12,6 12,12 16,14"/>
                            </svg>
                        </div>
                        <div class="info-content">
                            <h4>Vastausaika</h4>
                            <p>Vastaamme viesteihin 24 tunnin sisällä</p>
                        </div>
                    </div>
                    
                    <div class="info-item">
                        <div class="info-icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                        </div>
                        <div class="info-content">
                            <h4>Sijanti</h4>
                            <p>Suomi, Etätyö mahdollista</p>
                        </div>
                    </div>
                </div>
                
                <!-- Process Overview -->
                <div class="process-overview glass-panel">
                    <h3 class="process-title">Miten Etenemme</h3>
                    <div class="process-steps">
                        <div class="process-step">
                            <div class="step-number">1</div>
                            <div class="step-text">
                                <h4>Konsultaatio</h4>
                                <p>Kartoitamme tarpeesi ja tavoitteesi</p>
                            </div>
                        </div>
                        
                        <div class="process-step">
                            <div class="step-number">2</div>
                            <div class="step-text">
                                <h4>Tarjous</h4>
                                <p>Lähetämme räätälöidyn tarjouksen</p>
                            </div>
                        </div>
                        
                        <div class="process-step">
                            <div class="step-number">3</div>
                            <div class="step-text">
                                <h4>Suunnittelu</h4>
                                <p>Luomme visuaalisen konseptin</p>
                            </div>
                        </div>
                        
                        <div class="process-step">
                            <div class="step-number">4</div>
                            <div class="step-text">
                                <h4>Toteutus</h4>
                                <p>Kehitämme ja lanseeraamme projektin</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- FAQ Quick Links -->
                <div class="faq-links glass-panel">
                    <h3 class="faq-title">Usein Kysytyt Kysymykset</h3>
                    <div class="faq-quick-links">
                        <a href="faq.php#pricing" class="faq-link">
                            <span>Hinnoittelu</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="faq.php#timeline" class="faq-link">
                            <span>Projektin Kesto</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="faq.php#process" class="faq-link">
                            <span>Työskentelyprosessi</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </a>
                        <a href="faq.php#support" class="faq-link">
                            <span>Tuki & Ylläpito</span>
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M5 12h14"/>
                                <path d="m12 5 7 7-7 7"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="cta-background">
        <div class="animated-gradient"></div>
    </div>
    
    <div class="container">
        <div class="cta-content animate-on-scroll">
            <h2 class="cta-title">Kiire Projektiin?</h2>
            <p class="cta-description">
                Jos tarvitset pikavauhtia apua, lähetä suora sähköposti ja vastaamme samana päivänä.
            </p>
            <div class="cta-actions">
                <a href="mailto:admin@lumorans.com" class="cta-primary">
                    <span>Lähetä Suora Viesti</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                        <polyline points="22,6 12,13 2,6"/>
                    </svg>
                </a>
                <a href="faq.php" class="cta-secondary">
                    <span>Lue FAQ</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
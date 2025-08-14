<?php
// Meta variables for index page
$meta_title = "Lumorans - Futuristinen Web & App Design Studio | Innovatiivinen UI/UX";
$meta_description = "Lumorans on huippuluokan web- ja app-suunnittelustudio, joka erikoistuu futuristiseen designiin ja innovatiivisiin digitaalisiin kokemuksiin. Luo tulevaisuuden käyttöliittymät kanssamme.";
$meta_keywords = "web design, app design, ui/ux design, futuristinen suunnittelu, digitaalinen kokemus, käyttöliittymäsuunnittelu, mobiiliapplikaatiot, verkkosivujen suunnittelu, branding, lumorans";

include 'header.php';
?>

<!-- Hero Section -->
<section class="hero-section">
    <div class="hero-background">
        <div class="animated-gradient"></div>
        <div class="floating-particles"></div>
    </div>
    
    <div class="hero-container">
        <div class="hero-content">
            <div class="hero-text animate-on-scroll">
                <h1 class="hero-title">
                    <span class="title-line">Tulevaisuuden</span>
                    <span class="title-line gradient-text">Digitaalinen Kokemus</span>
                    <span class="title-line">Alkaa Tästä</span>
                </h1>
                <p class="hero-description">
                    Luomme unohtumattomia web- ja app-kokemuksia futuristisella designilla ja huipputeknologialla. 
                    Muutamme visionäärisi digitaaliseksi todellisuudeksi.
                </p>
                <div class="hero-cta">
                    <a href="contact.php" class="cta-primary">
                        <span>Aloita Projekti</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="services.php" class="cta-secondary">
                        <span>Tutustu Palveluihin</span>
                    </a>
                </div>
            </div>
            
            <div class="hero-visual animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="hero-image-container">
                    <img src="img/hero-banner.webp" alt="Futuristinen web design" class="hero-image">
                    <div class="image-overlay"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Features Section -->
<section class="features-section section-padding">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2 class="section-title">Miksi Valita Lumorans?</h2>
            <p class="section-description">
                Yhdistämme luovuuden, teknologian ja strategian luodaksemme digitaalisia kokemuksia, 
                jotka erottuvat kilpailijoista ja jättävät pysyvän vaikutuksen.
            </p>
        </div>
        
        <div class="features-grid">
            <div class="feature-card glass-panel animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                        <polyline points="2,17 12,22 22,17"/>
                        <polyline points="2,12 12,17 22,12"/>
                    </svg>
                </div>
                <h3 class="feature-title">Futuristinen Design</h3>
                <p class="feature-description">
                    Innovatiivinen glassmorphism ja neon-elementtejä hyödyntävä design, 
                    joka luo unohtumattoman visuaalisen kokemuksen.
                </p>
            </div>
            
            <div class="feature-card glass-panel animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14.5 4h-5L7 7H4a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2h-3l-2.5-3z"/>
                        <circle cx="12" cy="13" r="3"/>
                    </svg>
                </div>
                <h3 class="feature-title">Responsivinen Toteutus</h3>
                <p class="feature-description">
                    Täydellisesti responsiivinen design, joka toimii saumattomasti 
                    kaikilla laitteilla ja näyttöko'oilla.
                </p>
            </div>
            
            <div class="feature-card glass-panel animate-on-scroll" style="animation-delay: 0.3s;">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M13 2L3 14h9l-1 8 10-12h-9l1-8z"/>
                    </svg>
                </div>
                <h3 class="feature-title">Nopeat Latausajat</h3>
                <p class="feature-description">
                    Optimoitu suorituskyky ja nopeat latausajat varmistavat 
                    sujuvan käyttökokemuksen kaikille käyttäjille.
                </p>
            </div>
            
            <div class="feature-card glass-panel animate-on-scroll" style="animation-delay: 0.4s;">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="m7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                </div>
                <h3 class="feature-title">Tietoturva</h3>
                <p class="feature-description">
                    Korkean tason tietoturva ja yksityisyyden suoja 
                    kaikissa projekteissamme ja asiakastiedoissa.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="services-preview section-padding">
    <div class="container">
        <div class="section-header animate-on-scroll">
            <h2 class="section-title">Palvelumme</h2>
            <p class="section-description">
                Tarjoamme kattavan valikoiman digitaalisia palveluita, 
                jotka vievät liiketoimintasi seuraavalle tasolle.
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card glass-panel animate-on-scroll" style="animation-delay: 0.1s;">
                <div class="service-image">
                    <img src="img/service1.webp" alt="Web Design" loading="lazy">
                    <div class="service-overlay">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="2" y="4" width="20" height="16" rx="2"/>
                            <path d="m22 7-10 5L2 7"/>
                        </svg>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">Web Design</h3>
                    <p class="service-description">
                        Modernia ja responsiivista verkkosivujen suunnittelua, 
                        joka yhdistää estetiikan ja toiminnallisuuden.
                    </p>
                    <a href="services.php#web-design" class="service-link">
                        Lue Lisää
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="service-card glass-panel animate-on-scroll" style="animation-delay: 0.2s;">
                <div class="service-image">
                    <img src="img/service2.webp" alt="App Design" loading="lazy">
                    <div class="service-overlay">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <rect x="5" y="2" width="14" height="20" rx="2" ry="2"/>
                            <line x1="12" y1="18" x2="12.01" y2="18"/>
                        </svg>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">App Design</h3>
                    <p class="service-description">
                        Intuitiivisia ja visuaalisesti hämmästyttäviä 
                        mobiilisovelluksia iOS ja Android alustoille.
                    </p>
                    <a href="services.php#app-design" class="service-link">
                        Lue Lisää
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
            
            <div class="service-card glass-panel animate-on-scroll" style="animation-delay: 0.3s;">
                <div class="service-image">
                    <img src="img/service3.webp" alt="UI/UX Design" loading="lazy">
                    <div class="service-overlay">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M9 12l2 2 4-4"/>
                            <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3"/>
                            <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3"/>
                            <path d="M13 12h3c2 0 3-1 3-3s-1-3-3-3h-3"/>
                            <path d="M11 12H8c-2 0-3-1-3-3s1-3 3-3h3"/>
                        </svg>
                    </div>
                </div>
                <div class="service-content">
                    <h3 class="service-title">UI/UX Design</h3>
                    <p class="service-description">
                        Käyttäjäkeskeistä suunnittelua, joka maksimoi 
                        käytettävyyden ja parantaa asiakaskokemusta.
                    </p>
                    <a href="services.php#ui-ux" class="service-link">
                        Lue Lisää
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        
        <div class="services-cta animate-on-scroll" style="animation-delay: 0.4s;">
            <a href="services.php" class="cta-primary">
                <span>Tutustu Kaikkiin Palveluihin</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14"/>
                    <path d="m12 5 7 7-7 7"/>
                </svg>
            </a>
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
            <h2 class="cta-title">Valmis Luomaan Tulevaisuutta?</h2>
            <p class="cta-description">
                Ota yhteyttä ja aloitetaan keskustelu siitä, 
                kuinka voimme tuoda visiosi digitaaliseen maailmaan.
            </p>
            <div class="cta-actions">
                <a href="contact.php" class="cta-primary">
                    <span>Aloita Projekti</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14"/>
                        <path d="m12 5 7 7-7 7"/>
                    </svg>
                </a>
                <a href="about.php" class="cta-secondary">
                    <span>Lue Lisää Meistä</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
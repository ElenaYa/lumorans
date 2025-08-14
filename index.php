<?php
$meta_title = "Lumorans - Futuristinen Web & App Design Studio | Innovatiivinen UI/UX";
$meta_description = "Lumorans on huippuluokan web- ja app-suunnittelustudio, joka erikoistuu futuristiseen designiin ja innovatiivisiin digitaalisiin kokemuksiin. Luo tulevaisuuden käyttöliittymät kanssamme.";
$meta_keywords = "web design, app design, ui/ux design, futuristinen suunnittelu, digitaalinen kokemus, käyttöliittymäsuunnittelu, mobiiliapplikaatiot, verkkosivujen suunnittelu, branding, lumorans";

include 'header.php';
?>

<section class="hero-section">
    <div class="hero-background">
        <div class="animated-gradient"></div>
        <div class="floating-particles"></div>
    </div>
    
    <div class="container hero-container">
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
                    <a href="contact.php" class="btn btn-primary">
                        <span>Aloita Projekti</span>
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M5 12h14"/>
                            <path d="m12 5 7 7-7 7"/>
                        </svg>
                    </a>
                    <a href="services.php" class="btn btn-secondary">
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

<!-- Showcase Section -->
<section class="showcase-section section-padding">
	<div class="showcase-background">
		<div class="grid-overlay"></div>
		
		<div class="morphing-shape shape-1"></div>
		<div class="morphing-shape shape-2"></div>
		<span class="orb orb-1"></span>
		<span class="orb orb-2"></span>
		<span class="orb orb-3"></span>
	</div>

	<div class="container">
		<div class="section-header animate-on-scroll">
			<h2 class="section-title">Uuden Sukupolven Kokemukset</h2>
			<p class="section-description">
				Interaktiivisia mikrokokemuksia, reaaliaikaista dataa ja skaalautuvaa infrastruktuuria,
				jotka tekevät käyttökokemuksesta saumattoman ja elämyksellisen.
			</p>
		</div>

		<div class="showcase-cards">
			<div class="showcase-card glass-panel animate-on-scroll" style="animation-delay: 0.1s;">
				<div class="showcase-icon">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<path d="M3 12h7l-2 9 8-13h-7l2-6z"/>
					</svg>
				</div>
				<h3 class="showcase-title">Interaktiiviset Mikrokokemukset</h3>
				<p class="showcase-description">Nestemäiset animaatiot ja fyysiset efektit, jotka sitouttavat käyttäjän.</p>
			</div>

			<div class="showcase-card glass-panel animate-on-scroll" style="animation-delay: 0.2s;">
				<div class="showcase-icon">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<polyline points="3,12 9,12 12,8 15,16 21,16"/>
						<circle cx="12" cy="8" r="2"/>
					</svg>
				</div>
				<h3 class="showcase-title">Reaaliaikainen Data</h3>
				<p class="showcase-description">Live-päivitykset ja tilannekuva ilman latauksia – WebSocket/SSR.</p>
			</div>

			<div class="showcase-card glass-panel animate-on-scroll" style="animation-delay: 0.3s;">
				<div class="showcase-icon">
					<svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
						<rect x="3" y="6" width="18" height="12" rx="2"/>
						<path d="M7 10h10M7 14h6"/>
					</svg>
				</div>
				<h3 class="showcase-title">Skaalautuva Pilvi</h3>
				<p class="showcase-description">Korkea saatavuus ja suorituskyky pilvi-nativeilla ratkaisuilla.</p>
			</div>
		</div>

		<div class="showcase-marquee">
			<div class="marquee-track">
				<span>WebGL</span><span>GSAP</span><span>Three.js</span><span>SSR</span><span>PWA</span><span>WebSockets</span><span>Edge</span><span>AI</span>
				<span>WebGL</span><span>GSAP</span><span>Three.js</span><span>SSR</span><span>PWA</span><span>WebSockets</span><span>Edge</span><span>AI</span>
			</div>
		</div>
	</div>
</section>

<section class="features-section section-padding" style="padding-bottom: 0px;">
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

            <div class="feature-card glass-panel animate-on-scroll" style="animation-delay: 0.5s;">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="6" cy="6" r="3"/>
                        <circle cx="18" cy="6" r="3"/>
                        <circle cx="12" cy="18" r="3"/>
                        <line x1="8.5" y1="7.5" x2="10.5" y2="15.5"/>
                        <line x1="15.5" y1="7.5" x2="13.5" y2="15.5"/>
                    </svg>
                </div>
                <h3 class="feature-title">Integraatiot & API:t</h3>
                <p class="feature-description">
                    Rakennamme luotettavia integraatioita ja skaalautuvia API-rajapintoja, 
                    jotka yhdistävät järjestelmäsi saumattomasti.
                </p>
            </div>

            <div class="feature-card glass-panel animate-on-scroll" style="animation-delay: 0.6s;">
                <div class="feature-icon">
                    <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 17l6-6 4 4 7-7"/>
                        <polyline points="3,21 21,21"/>
                    </svg>
                </div>
                <h3 class="feature-title">SEO & Analytiikka</h3>
                <p class="feature-description">
                    Hakukoneoptimointi ja datalähtöinen analytiikka, 
                    jotka parantavat näkyvyyttä ja liiketoiminnan tuloksia.
                </p>
            </div>
        </div>
    </div>
</section>

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
            <a href="services.php" class="btn btn-primary">
                <span>Tutustu Kaikkiin Palveluihin</span>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M5 12h14"/>
                    <path d="m12 5 7 7-7 7"/>
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Vision Section -->
<section class="vision-section section-padding" style="padding-top: 0px;">
	<div class="container">
		<div class="vision-content">
			<div class="vision-text animate-on-scroll">
				<h2 class="section-title">Futuristinen Lähestymistapa</h2>
				<p class="vision-lead">
					Rakennamme digitaalisia kokemuksia, jotka yhdistävät estetiikan, suorituskyvyn ja skaalautuvuuden. 
					Hyödynnämme modernia arkkitehtuuria, mikrokäyttöliittymiä ja tarkkaan hiottuja animaatioita 
					luodaksemme saumattoman ja elämyksellisen käyttökokemuksen – kaikilla laitteilla.
				</p>

				<div class="vision-points">
					<div class="vision-point glass-panel">
						<div class="vision-icon">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<path d="M3 12l6 6L21 6"/>
							</svg>
						</div>
						<div class="vision-point-content">
							<h4>Design-Järjestelmä</h4>
							<p>Yhtenäinen komponenttikirjasto, typografia ja värit varmistavat johdonmukaisen ilmeen.</p>
						</div>
					</div>

					<div class="vision-point glass-panel">
						<div class="vision-icon">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<circle cx="12" cy="12" r="3"/>
								<path d="M19.4 15A7 7 0 1 1 21 12"/>
							</svg>
						</div>
						<div class="vision-point-content">
							<h4>Suorituskyky & Saavutettavuus</h4>
							<p>Kevyet assetit, lazy-loading ja WCAG-periaatteet ensiluokkaisen käyttökokemuksen puolesta.</p>
						</div>
					</div>

					<div class="vision-point glass-panel">
						<div class="vision-icon">
							<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
								<rect x="3" y="7" width="18" height="10" rx="2"/>
								<path d="M7 11h10"/>
							</svg>
						</div>
						<div class="vision-point-content">
							<h4>Skaalautuva Arkkitehtuuri</h4>
							<p>PWA, SSR ja reunalaskenta (Edge) takaavat nopeuden ja luotettavuuden.</p>
						</div>
					</div>
				</div>
			</div>

			<div class="vision-visual animate-on-scroll" style="animation-delay: .15s;">
				<div class="vision-image-container">
					<img src="img/futuristic-image.webp" alt="Futuristinen suunnittelu" class="vision-image" loading="lazy">
					<div class="vision-image-overlay"></div>
				</div>
			</div>
		</div>
	</div>
</section>

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
                <a href="contact.php" class="btn btn-primary">
                    <span>Aloita Projekti</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14"/>
                        <path d="m12 5 7 7-7 7"/>
                    </svg>
                </a>
                <a href="about.php" class="btn btn-secondary">
                    <span>Lue Lisää Meistä</span>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
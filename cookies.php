<?php include 'header.php'; ?>

<section class="page-header">
    <div class="page-header-background">
        <div class="animated-gradient"></div>
    </div>
    <div class="container">
        <div class="page-header-content animate-on-scroll">
            <h1 class="page-title">Evästekäytäntö</h1>
            <p class="page-description">
                Miten käytämme evästeitä sivustolla ja miten voit hallita niitä
            </p>
            <div class="last-updated">
                Päivitetty viimeksi: <?php echo date('d.m.Y', strtotime('-1 days')); ?>
            </div>
        </div>
    </div>
</section>

<section class="legal-content section-padding">
    <div class="container">
        <div class="cookie-settings-panel glass-panel animate-on-scroll" style="margin-bottom: 2rem;">
            <h3>Evästeasetukset</h3>
            <p>Voit hallita evästeasetuksiasi alla olevilla painikkeilla:</p>
            <div class="cookie-controls">
                <button class="cookie-btn manage-cookies" id="manageCookies">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 1v6m0 6v6"/>
                        <path d="m17 5-6 6-6-6"/>
                    </svg>
                    Hallitse Evästeitä
                </button>
                <button class="cookie-btn accept-all" id="acceptAllCookies">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M9 12l2 2 4-4"/>
                        <circle cx="12" cy="12" r="10"/>
                    </svg>
                    Hyväksy Kaikki
                </button>
                <button class="cookie-btn reject-optional" id="rejectOptional">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <line x1="18" y1="6" x2="6" y2="18"/>
                        <line x1="6" y1="6" x2="18" y2="18"/>
                    </svg>
                    Hylkää Valinnaiset
                </button>
            </div>
        </div>

        <div class="legal-document">
            <div class="toc-container glass-panel animate-on-scroll">
                <h3>Sisällysluettelo</h3>
                <ul class="toc">
                    <li><a href="#what-are-cookies">1. Mitä Evästeet Ovat</a></li>
                    <li><a href="#cookie-types">2. Evästetyypit</a></li>
                    <li><a href="#our-cookies">3. Meidän Käyttämämme Evästeet</a></li>
                    <li><a href="#third-party-cookies">4. Kolmannen Osapuolen Evästeet</a></li>
                    <li><a href="#cookie-management">5. Evästeiden Hallinta</a></li>
                    <li><a href="#cookie-purposes">6. Käyttötarkoitukset</a></li>
                    <li><a href="#data-retention">7. Tietojen Säilyttäminen</a></li>
                    <li><a href="#cookie-updates">8. Päivitykset</a></li>
                </ul>
            </div>
            
            <div class="legal-sections">
                <section id="what-are-cookies" class="legal-section animate-on-scroll">
                    <h2>1. Mitä Evästeet Ovat</h2>
                    
                    <p>Evästeet (cookies) ovat pieniä tekstitiedostoja, jotka verkkosivusto tallentaa kävijän laitteelle (tietokone, mobiililaite, tabletti). Evästeet mahdollistavat verkkosivuston muistamaan käyttäjän valintoja ja parantamaan käyttökokemusta.</p>
                    
                    <h3>1.1 Evästeiden Toiminta</h3>
                    <p>Evästeet toimivat seuraavasti:</p>
                    <ul>
                        <li><strong>Tallentaminen:</strong> Sivusto tallentaa pienen tiedoston laitteellesi</li>
                        <li><strong>Lukeminen:</strong> Sivusto lukee tiedon seuraavilla vierailukerroilla</li>
                        <li><strong>Muistaminen:</strong> Sivusto muistaa asetuksesi ja toimintasi</li>
                        <li><strong>Personointi:</strong> Sisältö ja toiminnot mukautetaan sinulle</li>
                    </ul>
                    
                    <h3>1.2 Evästeiden Turvallisuus</h3>
                    <p>Evästeet ovat turvallisia:</p>
                    <ul>
                        <li>Ne eivät voi sisältää viruksia tai haittaohjelmia</li>
                        <li>Ne eivät pääse käsiksi tietoihisi laitteellasi</li>
                        <li>Ne voivat sisältää vain sivuston antamia tietoja</li>
                        <li>Ne ovat rajoitettu tiettyyn verkkosivustoon</li>
                    </ul>
                    
                    <div class="cookie-info glass-panel">
                        <h4>Tärkeää Tietoa Evästeistä</h4>
                        <p>Evästeet parantavat käyttökokemustasi, mutta voit aina kieltäytyä niistä. Huomaa, että joidenkin evästeiden estäminen voi vaikuttaa sivuston toimivuuteen.</p>
                    </div>
                </section>
                
                <section id="cookie-types" class="legal-section animate-on-scroll">
                    <h2>2. Evästetyypit</h2>
                    
                    <h3>2.1 Keston Mukaan</h3>
                    <div class="cookie-types-grid">
                        <div class="cookie-type glass-panel">
                            <h4>Istuntoevästeet (Session Cookies)</h4>
                            <p>Väliaikaiset evästeet, jotka poistuvat selaimen sulkemisen yhteydessä. Tarvitaan sivuston perustoiminnoille.</p>
                        </div>
                        
                        <div class="cookie-type glass-panel">
                            <h4>Pysyvät Evästeet (Persistent Cookies)</h4>
                            <p>Säilyvät laitteella määritellyn ajan tai kunnes käyttäjä poistaa ne. Muistavat asetukset seuraavilla vierailukerroilla.</p>
                        </div>
                    </div>
                    
                    <h3>2.2 Käyttötarkoituksen Mukaan</h3>
                    <div class="cookie-purposes-grid">
                        <div class="cookie-purpose glass-panel">
                            <div class="purpose-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                    <path d="m7 11V7a5 5 0 0 1 10 0v4"/>
                                </svg>
                            </div>
                            <h4>Välttämättömät Evästeet</h4>
                            <p>Tarvitaan sivuston perustoiminnoille ja turvallisuudelle. Ei voi kieltää.</p>
                        </div>
                        
                        <div class="cookie-purpose glass-panel">
                            <div class="purpose-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/>
                                    <polyline points="3.27,6.96 12,12.01 20.73,6.96"/>
                                    <line x1="12" y1="22.08" x2="12" y2="12"/>
                                </svg>
                            </div>
                            <h4>Suorituskykyevästeet</h4>
                            <p>Keräävät tietoa sivuston käytöstä ja suorituskyvystä nimettömästi.</p>
                        </div>
                        
                        <div class="cookie-purpose glass-panel">
                            <div class="purpose-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                                    <circle cx="9" cy="7" r="4"/>
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                                </svg>
                            </div>
                            <h4>Toiminnalliset Evästeet</h4>
                            <p>Mahdollistavat mukautetut toiminnot ja paremman käyttökokemuksen.</p>
                        </div>
                        
                        <div class="cookie-purpose glass-panel">
                            <div class="purpose-icon">
                                <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <path d="M21 12c-1 0-3-1-3-3s2-3 3-3 3 1 3 3-2 3-3 3"/>
                                    <path d="M3 12c1 0 3-1 3-3s-2-3-3-3-3 1-3 3 2 3 3 3"/>
                                    <path d="M13 12h3c2 0 3-1 3-3s-1-3-3-3h-3"/>
                                    <path d="M11 12H8c-2 0-3-1-3-3s1-3 3-3h3"/>
                                </svg>
                            </div>
                            <h4>Markkinointievästeet</h4>
                            <p>Käytetään kohdennettua mainontaa ja markkinointia varten.</p>
                        </div>
                    </div>
                </section>
                
                <section id="our-cookies" class="legal-section animate-on-scroll">
                    <h2>3. Meidän Käyttämämme Evästeet</h2>
                    
                    <h3>3.1 Välttämättömät Evästeet</h3>
                    <div class="cookie-table">
                        <table class="glass-panel">
                            <thead>
                                <tr>
                                    <th>Evästeen Nimi</th>
                                    <th>Tarkoitus</th>
                                    <th>Kesto</th>
                                    <th>Tyyppi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>session_id</td>
                                    <td>Istunnon tunnistaminen</td>
                                    <td>Istunto</td>
                                    <td>HTTP</td>
                                </tr>
                                <tr>
                                    <td>csrf_token</td>
                                    <td>Turvallisuus ja CSRF-suojaus</td>
                                    <td>Istunto</td>
                                    <td>HTTP</td>
                                </tr>
                                <tr>
                                    <td>cookie_consent</td>
                                    <td>Evästeiden hyväksyntä</td>
                                    <td>12 kuukautta</td>
                                    <td>HTTP</td>
                                </tr>
                                <tr>
                                    <td>language</td>
                                    <td>Kielivalinta</td>
                                    <td>6 kuukautta</td>
                                    <td>HTTP</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <h3>3.2 Suorituskykyevästeet</h3>
                    <div class="cookie-table">
                        <table class="glass-panel">
                            <thead>
                                <tr>
                                    <th>Evästeen Nimi</th>
                                    <th>Tarkoitus</th>
                                    <th>Kesto</th>
                                    <th>Tyyppi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>_ga</td>
                                    <td>Google Analytics käyttäjätunniste</td>
                                    <td>2 vuotta</td>
                                    <td>HTTP</td>
                                </tr>
                                <tr>
                                    <td>_ga_*</td>
                                    <td>Google Analytics istunnon tila</td>
                                    <td>2 vuotta</td>
                                    <td>HTTP</td>
                                </tr>
                                <tr>
                                    <td>_gid</td>
                                    <td>Google Analytics käyttäjätunniste</td>
                                    <td>24 tuntia</td>
                                    <td>HTTP</td>
                                </tr>
                                <tr>
                                    <td>_hjid</td>
                                    <td>Hotjar käyttäjätunniste</td>
                                    <td>12 kuukautta</td>
                                    <td>HTTP</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <h3>3.3 Toiminnalliset Evästeet</h3>
                    <div class="cookie-table">
                        <table class="glass-panel">
                            <thead>
                                <tr>
                                    <th>Evästeen Nimi</th>
                                    <th>Tarkoitus</th>
                                    <th>Kesto</th>
                                    <th>Tyyppi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>user_preferences</td>
                                    <td>Käyttäjän asetukset</td>
                                    <td>6 kuukautta</td>
                                    <td>HTTP</td>
                                </tr>
                                <tr>
                                    <td>theme_mode</td>
                                    <td>Teeman valinta (dark/light)</td>
                                    <td>12 kuukautta</td>
                                    <td>HTTP</td>
                                </tr>
                                <tr>
                                    <td>form_data</td>
                                    <td>Lomakkeiden automaattitallennus</td>
                                    <td>7 päivää</td>
                                    <td>LocalStorage</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </section>
                
                <section id="third-party-cookies" class="legal-section animate-on-scroll">
                    <h2>4. Kolmannen Osapuolen Evästeet</h2>
                    
                    <h3>4.1 Google Analytics</h3>
                    <div class="third-party-service glass-panel">
                        <h4>Google Analytics 4</h4>
                        <p><strong>Tarkoitus:</strong> Sivuston käytön analysointi ja tilastointi</p>
                        <p><strong>Tietojen käsittely:</strong> Nimettömät käyttötilastot</p>
                        <p><strong>Lisätietoja:</strong> <a href="https://policies.google.com/privacy" target="_blank" rel="noopener">Google:n tietosuojakäytäntö</a></p>
                        <p><strong>Opt-out:</strong> <a href="https://tools.google.com/dlpage/gaoptout" target="_blank" rel="noopener">Google Analytics Opt-out</a></p>
                    </div>
                    
                    <h3>4.2 Hotjar</h3>
                    <div class="third-party-service glass-panel">
                        <h4>Hotjar Heatmaps & Recordings</h4>
                        <p><strong>Tarkoitus:</strong> Käyttäjäkokemuksen analysointi ja parantaminen</p>
                        <p><strong>Tietojen käsittely:</strong> Anonyymit heatmap-tiedot ja istuntotallenteet</p>
                        <p><strong>Lisätietoja:</strong> <a href="https://www.hotjar.com/legal/policies/privacy/" target="_blank" rel="noopener">Hotjar:n tietosuojakäytäntö</a></p>
                        <p><strong>Opt-out:</strong> <a href="https://www.hotjar.com/legal/compliance/opt-out" target="_blank" rel="noopener">Hotjar Opt-out</a></p>
                    </div>
                    
                    <h3>4.3 Sosiaalisen Median Liitännäiset</h3>
                    <div class="social-media-cookies">
                        <div class="social-service glass-panel">
                            <h4>LinkedIn</h4>
                            <p>Mahdollistaa sisällön jakamisen LinkedInissä</p>
                            <p><a href="https://www.linkedin.com/legal/privacy-policy" target="_blank" rel="noopener">LinkedIn Privacy Policy</a></p>
                        </div>
                        
                        <div class="social-service glass-panel">
                            <h4>Twitter/X</h4>
                            <p>Mahdollistaa sisällön jakamisen X:ssä</p>
                            <p><a href="https://twitter.com/privacy" target="_blank" rel="noopener">X Privacy Policy</a></p>
                        </div>
                        
                        <div class="social-service glass-panel">
                            <h4>Facebook</h4>
                            <p>Mahdollistaa sisällön jakamisen Facebookissa</p>
                            <p><a href="https://www.facebook.com/privacy/policy/" target="_blank" rel="noopener">Facebook Data Policy</a></p>
                        </div>
                    </div>
                </section>
                
                <section id="cookie-management" class="legal-section animate-on-scroll">
                    <h2>5. Evästeiden Hallinta</h2>
                    
                    <h3>5.1 Sivustomme Evästehallinta</h3>
                    <p>Voit hallita evästeitä sivustomme kautta:</p>
                    <ul>
                        <li><strong>Evästebanneri:</strong> Valitse ensimmäisellä vierailukerralla</li>
                        <li><strong>Evästeasetukset:</strong> Muuta asetuksia milloin tahansa</li>
                        <li><strong>Kategoriat:</strong> Hallitse eri evästetyyppejä erikseen</li>
                        <li><strong>Tallenna:</strong> Asetukset tallennetaan automaattisesti</li>
                    </ul>
                    
                    <div class="cookie-management-panel glass-panel">
                        <h4>Pikaasetusten Hallinta</h4>
                        <div class="quick-settings">
                            <div class="setting-item">
                                <label class="setting-toggle">
                                    <input type="checkbox" checked disabled>
                                    <span class="toggle-slider"></span>
                                </label>
                                <div class="setting-info">
                                    <h5>Välttämättömät</h5>
                                    <p>Aina käytössä - sivuston toiminta</p>
                                </div>
                            </div>
                            
                            <div class="setting-item">
                                <label class="setting-toggle">
                                    <input type="checkbox" id="analyticsToggle">
                                    <span class="toggle-slider"></span>
                                </label>
                                <div class="setting-info">
                                    <h5>Analytiikka</h5>
                                    <p>Google Analytics ja käyttötilastot</p>
                                </div>
                            </div>
                            
                            <div class="setting-item">
                                <label class="setting-toggle">
                                    <input type="checkbox" id="functionalToggle">
                                    <span class="toggle-slider"></span>
                                </label>
                                <div class="setting-info">
                                    <h5>Toiminnalliset</h5>
                                    <p>Mukautetut ominaisuudet ja asetukset</p>
                                </div>
                            </div>
                            
                            <div class="setting-item">
                                <label class="setting-toggle">
                                    <input type="checkbox" id="marketingToggle">
                                    <span class="toggle-slider"></span>
                                </label>
                                <div class="setting-info">
                                    <h5>Markkinointi</h5>
                                    <p>Kohdennettu mainonta ja seuranta</p>
                                </div>
                            </div>
                        </div>
                        
                        <button class="save-settings-btn" id="saveSettings">
                            Tallenna Asetukset
                        </button>
                    </div>
                    
                    <h3>5.2 Selaimen Evästeasetukset</h3>
                    <p>Voit hallita evästeitä myös selaimen asetuksista:</p>
                    
                    <div class="browser-instructions">
                        <div class="browser-item glass-panel">
                            <h4>Google Chrome</h4>
                            <p>Asetukset → Yksityisyys ja turvallisuus → Evästeet ja muut sivustotiedot</p>
                        </div>
                        
                        <div class="browser-item glass-panel">
                            <h4>Mozilla Firefox</h4>
                            <p>Asetukset → Yksityisyys ja turvallisuus → Evästeet ja sivustotiedot</p>
                        </div>
                        
                        <div class="browser-item glass-panel">
                            <h4>Safari</h4>
                            <p>Safari → Asetukset → Yksityisyys → Evästeet ja verkkosivustotiedot</p>
                        </div>
                        
                        <div class="browser-item glass-panel">
                            <h4>Microsoft Edge</h4>
                            <p>Asetukset → Evästeet ja sivuston käyttöoikeudet → Evästeiden hallinta</p>
                        </div>
                    </div>
                    
                    <h3>5.3 Mobiililaitteet</h3>
                    <p>Mobiililaitteilla evästeiden hallinta:</p>
                    <ul>
                        <li><strong>iOS Safari:</strong> Asetukset → Safari → Estä kaikki evästeet</li>
                        <li><strong>Android Chrome:</strong> Chrome → Asetukset → Sivustot → Evästeet</li>
                        <li><strong>Mobiilisovellukset:</strong> Sovelluksen omat asetukset</li>
                    </ul>
                </section>
                
                <section id="cookie-purposes" class="legal-section animate-on-scroll">
                    <h2>6. Käyttötarkoitukset Yksityiskohtaisesti</h2>
                    
                    <h3>6.1 Välttämättömät Toiminnot</h3>
                    <ul>
                        <li><strong>Istunnon hallinta:</strong> Sisäänkirjautumisen ylläpito</li>
                        <li><strong>Turvallisuus:</strong> CSRF-hyökkäysten estäminen</li>
                        <li><strong>Evästeiden suostumus:</strong> Valintojen muistaminen</li>
                        <li><strong>Lomakkeiden tiedot:</strong> Lähetyksen aikana tietojen säilyttäminen</li>
                        <li><strong>Ostoskorin sisältö:</strong> Tuotteiden muistaminen</li>
                    </ul>
                    
                    <h3>6.2 Käyttökokemuksen Parantaminen</h3>
                    <ul>
                        <li><strong>Kielivalinnat:</strong> Sivuston kielen muistaminen</li>
                        <li><strong>Teeman valinta:</strong> Tumma/vaalea tila</li>
                        <li><strong>Asettelun mukautus:</strong> Käyttäjän mieltymykset</li>
                        <li><strong>Suorituskyvyn optimointi:</strong> Nopeampi lataaminen</li>
                    </ul>
                    
                    <h3>6.3 Analytiikka ja Tilastointi</h3>
                    <ul>
                        <li><strong>Sivuston käyttö:</strong> Suosituimmat sivut ja toiminnot</li>
                        <li><strong>Käyttäjän polut:</strong> Navigointitapojen ymmärtäminen</li>
                        <li><strong>Suorituskyvyn mittaus:</strong> Latausajat ja virheet</li>
                        <li><strong>Liikenteen lähteet:</strong> Hakukoneet ja viittaavat sivustot</li>
                    </ul>
                    
                    <h3>6.4 Markkinointi ja Personointi</h3>
                    <ul>
                        <li><strong>Kohdennetus:</strong> Relevantin sisällön näyttäminen</li>
                        <li><strong>Uudelleenmarkkinointi:</strong> Kiinnostuneiden käyttäjien tavoittaminen</li>
                        <li><strong>A/B-testaus:</strong> Eri versioiden vertailu</li>
                        <li><strong>Sosiaalisen median jakaminen:</strong> Sisällön jakaminen helpoksi</li>
                    </ul>
                </section>
                
                <section id="data-retention" class="legal-section animate-on-scroll">
                    <h2>7. Tietojen Säilyttäminen</h2>
                    
                    <h3>7.1 Säilyttämisajat Evästelajeittain</h3>
                    <div class="retention-table">
                        <table class="glass-panel">
                            <thead>
                                <tr>
                                    <th>Evästelaji</th>
                                    <th>Säilyttämisaika</th>
                                    <th>Perustelu</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Istuntoevästeet</td>
                                    <td>Istunnon loppuun</td>
                                    <td>Sivuston perustoiminnot</td>
                                </tr>
                                <tr>
                                    <td>Käyttäjäasetukset</td>
                                    <td>6-12 kuukautta</td>
                                    <td>Käyttökokemuksen parantaminen</td>
                                </tr>
                                <tr>
                                    <td>Analytiikkaevästeet</td>
                                    <td>26 kuukautta</td>
                                    <td>Google Analytics standardi</td>
                                </tr>
                                <tr>
                                    <td>Markkinointievästeet</td>
                                    <td>30-90 päivää</td>
                                    <td>Kampanjoiden tehokkuus</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    
                    <h3>7.2 Automaattinen Poistaminen</h3>
                    <p>Evästeet poistuvat automaattisesti:</p>
                    <ul>
                        <li>Vanhennusajan umpeuduttua</li>
                        <li>Käyttäjän poistaessa ne manuaalisesti</li>
                        <li>Selaimen välimuistin tyhjennyksen yhteydessä</li>
                        <li>Laitteen nollauksen yhteydessä</li>
                    </ul>
                    
                    <h3>7.3 Tietojen Anonymisointi</h3>
                    <p>Analytiikkatiedot anonymisoidaan:</p>
                    <ul>
                        <li>IP-osoitteet lyhennetään</li>
                        <li>Henkilökohtaiset tunnisteet poistetaan</li>
                        <li>Aggregoidut tilastot säilytetään pidempään</li>
                        <li>Raakadata poistetaan säännöllisesti</li>
                    </ul>
                </section>
                
                <section id="cookie-updates" class="legal-section animate-on-scroll">
                    <h2>8. Päivitykset ja Muutokset</h2>
                    
                    <h3>8.1 Evästekäytännön Päivitykset</h3>
                    <p>Päivitämme evästekäytäntöä:</p>
                    <ul>
                        <li>Kun lisäämme uusia evästeitä</li>
                        <li>Kun muutamme evästeiden käyttötarkoitusta</li>
                        <li>Lainsäädännön muutosten vuoksi</li>
                        <li>Palveluntarjoajien vaihtuessa</li>
                    </ul>
                    
                    <h3>8.2 Ilmoittaminen Muutoksista</h3>
                    <p>Merkittävistä muutoksista ilmoitamme:</p>
                    <ul>
                        <li>Uudella evästebannerin ilmoituksella</li>
                        <li>Sähköpostitse rekisteröityneille käyttäjille</li>
                        <li>Sivuston etusivalla</li>
                        <li>Päivittämällä tämän sivun</li>
                    </ul>
                    
                    <h3>8.3 Uudelleensuostumus</h3>
                    <p>Pyydämme uudelleensuostumusta, jos:</p>
                    <ul>
                        <li>Lisäämme uusia evästetyyppejä</li>
                        <li>Muutamme käyttötarkoitusta merkittävästi</li>
                        <li>Vaihdamme palveluntarjoajia</li>
                        <li>Laki sitä edellyttää</li>
                    </ul>
                    
                    <h3>8.4 Yhteystiedot</h3>
                    <div class="contact-cookies glass-panel">
                        <h4>Evästeitä Koskevat Kysymykset</h4>
                        <p>Jos sinulla on kysymyksiä evästeistä tai tietosuojasta:</p>
                        <p><strong>Sähköposti:</strong> admin@lumorans.com</p>
                        <p><strong>Aihe:</strong> Evästeet / GDPR</p>
                    </div>
                    
                    <div class="version-info glass-panel">
                        <h4>Evästekäytännön Versiotiedot</h4>
                        <p><strong>Versio:</strong> 1.3</p>
                        <p><strong>Päivitetty:</strong> <?php echo date('d.m.Y', strtotime('-1 days')); ?></p>
                        <p><strong>Seuraava tarkistus:</strong> <?php echo date('d.m.Y', strtotime('+3 months')); ?></p>
                    </div>
                </section>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
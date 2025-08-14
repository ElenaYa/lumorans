<?php include 'header.php'; ?>

<!-- Page Header -->
<section class="page-header">
    <div class="page-header-background">
        <div class="animated-gradient"></div>
    </div>
    <div class="container">
        <div class="page-header-content animate-on-scroll">
            <h1 class="page-title">Usein Kysytyt Kysymykset</h1>
            <p class="page-description">
                Löydä vastaukset yleisimpiin kysymyksiin palveluistamme ja työskentelystämme
            </p>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section section-padding">
    <div class="container">
        <div class="faq-content">
            <!-- FAQ Categories -->
            <div class="faq-categories animate-on-scroll">
                <button class="category-btn active" data-category="all">Kaikki</button>
                <button class="category-btn" data-category="pricing">Hinnoittelu</button>
                <button class="category-btn" data-category="process">Prosessi</button>
                <button class="category-btn" data-category="technical">Tekniset</button>
                <button class="category-btn" data-category="support">Tuki</button>
            </div>
            
            <!-- FAQ Items -->
            <div class="faq-container">
                <!-- Pricing FAQs -->
                <div class="faq-item glass-panel animate-on-scroll" data-category="pricing" id="pricing" style="animation-delay: 0.1s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-1">
                        <span>Miten hinnoittelunne toimii?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-1" aria-hidden="true">
                        <p>Hinnoittelumme perustuu projektin laajuuteen, monimutkaisuuteen ja aikatauluun. Tarjoamme läpinäkyvää hinnoittelua ilman piilokustannuksia:</p>
                        <ul>
                            <li><strong>Web Design:</strong> 2 500€ - 15 000€</li>
                            <li><strong>App Design:</strong> 8 000€ - 25 000€</li>
                            <li><strong>UI/UX Design:</strong> 1 500€ - 10 000€</li>
                            <li><strong>Branding:</strong> 1 200€ - 8 000€</li>
                        </ul>
                        <p>Jokainen projekti on yksilöllinen, joten lähetämme aina räätälöidyn tarjouksen tarpeidesi mukaan.</p>
                    </div>
                </div>
                
                <div class="faq-item glass-panel animate-on-scroll" data-category="pricing" style="animation-delay: 0.2s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-2">
                        <span>Mitä hintaan sisältyy?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-2" aria-hidden="true">
                        <p>Hintaamme sisältyy kokonaisvaltainen palvelu:</p>
                        <ul>
                            <li>Alkukonsultointi ja strategian suunnittelu</li>
                            <li>Käyttäjätutkimus ja analyysi</li>
                            <li>Wireframe-suunnittelu ja prototyypit</li>
                            <li>Visuaalinen suunnittelu ja brändäys</li>
                            <li>Tekninen toteutus ja optimointi</li>
                            <li>Testaus ja laadunvarmistus</li>
                            <li>Lanseeraus ja käyttöönotto</li>
                            <li>3 kuukauden takuu ja tuki</li>
                        </ul>
                    </div>
                </div>
                
                <div class="faq-item glass-panel animate-on-scroll" data-category="pricing" style="animation-delay: 0.3s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-3">
                        <span>Onko mahdollista maksaa erissä?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-3" aria-hidden="true">
                        <p>Kyllä, tarjoamme joustavia maksuaikatauluja:</p>
                        <ul>
                            <li><strong>Pienemmät projektit (alle 5000€):</strong> 50% aloitusmaksu, 50% valmistuessa</li>
                            <li><strong>Keskisuuret projektit (5000€-15000€):</strong> 30% aloitusmaksu, 40% välivaiheessa, 30% valmistuessa</li>
                            <li><strong>Suuremmat projektit (yli 15000€):</strong> Neuvoteltava erämaksuohjelma</li>
                        </ul>
                        <p>Hyväksymme pankkisiirrot ja laskutuksen. Maksuaikaa voidaan sopia tapauskohtaisesti.</p>
                    </div>
                </div>
                
                <!-- Process FAQs -->
                <div class="faq-item glass-panel animate-on-scroll" data-category="process" id="timeline" style="animation-delay: 0.1s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-4">
                        <span>Kuinka kauan projekti kestää?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-4" aria-hidden="true">
                        <p>Projektin kesto riippuu palvelusta ja laajuudesta:</p>
                        <ul>
                            <li><strong>Logo & Branding:</strong> 1-2 viikkoa</li>
                            <li><strong>Web Design (yksinkertainen):</strong> 2-4 viikkoa</li>
                            <li><strong>Web Design (monimutkainen):</strong> 4-8 viikkoa</li>
                            <li><strong>App Design (MVP):</strong> 6-10 viikkoa</li>
                            <li><strong>App Design (täysi sovellus):</strong> 10-16 viikkoa</li>
                            <li><strong>UI/UX Audit:</strong> 1-2 viikkoa</li>
                        </ul>
                        <p>Voimme myös työskennellä kiireellisissä projekteissa nopeammalla aikataululla lisämaksusta.</p>
                    </div>
                </div>
                
                <div class="faq-item glass-panel animate-on-scroll" data-category="process" id="process" style="animation-delay: 0.2s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-5">
                        <span>Miltä työskentelyprosessi näyttää?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-5" aria-hidden="true">
                        <p>Työskentelymme on strukturoitu ja läpinäkyvä prosessi:</p>
                        <ol>
                            <li><strong>Kartoitus (viikko 1):</strong> Tapaamme, kartoitamme tarpeet ja luomme projektisuunnitelman</li>
                            <li><strong>Suunnittelu (viikot 2-3):</strong> Luomme wireframet, prototyypit ja visuaalisen konseptin</li>
                            <li><strong>Kehitys (viikot 4-6):</strong> Toteutamme suunnitelman ja testaamme toiminnallisuudet</li>
                            <li><strong>Viimeistely (viikko 7):</strong> Teemme viimeiset hiomise ja lanseeraamme projektin</li>
                            <li><strong>Tuki (3 kk):</strong> Tarjoamme takuun ja jatkuvaa tukea lanseerauksen jälkeen</li>
                        </ol>
                        <p>Pidämme sinut ajan tasalla koko prosessin ajan säännöllisillä päivityksillä.</p>
                    </div>
                </div>
                
                <div class="faq-item glass-panel animate-on-scroll" data-category="process" style="animation-delay: 0.3s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-6">
                        <span>Kuinka paljon mukanaoloa asiakkaalta vaaditaan?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-6" aria-hidden="true">
                        <p>Yhteistyö on onnistuneen projektin avain. Asiakkaalta toivomme:</p>
                        <ul>
                            <li>Osallistumista alkukartoitukseen (2-3 tuntia)</li>
                            <li>Palautteen antamista suunnitelmavaiheessa (1-2 tuntia viikossa)</li>
                            <li>Sisällön toimittamista sovittujen aikataulujen mukaan</li>
                            <li>Osallistumista lopputestaukseen (1-2 tuntia)</li>
                        </ul>
                        <p>Pyrimme tekemään yhteistyön mahdollisimman sujuvaksi ja vaivattomat asiakkaalle.</p>
                    </div>
                </div>
                
                <!-- Technical FAQs -->
                <div class="faq-item glass-panel animate-on-scroll" data-category="technical" style="animation-delay: 0.1s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-7">
                        <span>Mitä teknologioita käytätte?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-7" aria-hidden="true">
                        <p>Käytämme alan johtavia ja turvallisia teknologioita:</p>
                        <ul>
                            <li><strong>Frontend:</strong> React, Vue.js, Next.js, TypeScript</li>
                            <li><strong>Styling:</strong> Tailwind CSS, SCSS, CSS-in-JS</li>
                            <li><strong>Mobiili:</strong> React Native, Flutter, Swift, Kotlin</li>
                            <li><strong>Backend:</strong> Node.js, Python, PHP</li>
                            <li><strong>Tietokannat:</strong> PostgreSQL, MongoDB, Firebase</li>
                            <li><strong>Cloud:</strong> AWS, Google Cloud, Vercel</li>
                            <li><strong>Design:</strong> Figma, Adobe Creative Suite</li>
                        </ul>
                    </div>
                </div>
                
                <div class="faq-item glass-panel animate-on-scroll" data-category="technical" style="animation-delay: 0.2s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-8">
                        <span>Onko sivusto/sovellus responsiivinen?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-8" aria-hidden="true">
                        <p>Kyllä, kaikki tuotoksemme ovat täysin responsiivisia:</p>
                        <ul>
                            <li>Toimivat saumattomasti kaikilla laitteilla</li>
                            <li>Optimoitu mobililaitteille, tableteille ja työpöydälle</li>
                            <li>Nopeat latausajat kaikilla yhteyksillä</li>
                            <li>Touch-optimoitu käyttöliittymä</li>
                            <li>Retina-tuki korkeataajuusisille näytöille</li>
                        </ul>
                        <p>Testaamme kaiken huolellisesti useilla eri laitteilla ja selaimilla.</p>
                    </div>
                </div>
                
                <div class="faq-item glass-panel animate-on-scroll" data-category="technical" style="animation-delay: 0.3s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-9">
                        <span>Miten tietoturva ja saavutettavuus huomioidaan?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-9" aria-hidden="true">
                        <p>Tietoturva ja saavutettavuus ovat meille erittäin tärkeitä:</p>
                        <ul>
                            <li><strong>Tietoturva:</strong> HTTPS, turvallinen autentikointi, datan salaus</li>
                            <li><strong>Saavutettavuus:</strong> WCAG 2.1 AA -standardin mukainen</li>
                            <li><strong>Yksityisyys:</strong> GDPR-yhteensopiva, evästeet hallinnoitu</li>
                            <li><strong>Suorituskyky:</strong> Optimoitu latausnopeudet, SEO-optimoitu</li>
                            <li><strong>Ylläpito:</strong> Säännölliset päivitykset ja valvonta</li>
                        </ul>
                    </div>
                </div>
                
                <!-- Support FAQs -->
                <div class="faq-item glass-panel animate-on-scroll" data-category="support" id="support" style="animation-delay: 0.1s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-10">
                        <span>Millaista tukea tarjoatte lanseerauksen jälkeen?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-10" aria-hidden="true">
                        <p>Tarjoamme kattavaa tukea projektin lanseerauksen jälkeen:</p>
                        <ul>
                            <li><strong>3 kuukauden takuu:</strong> Korjaamme kaikki bugit ilmaiseksi</li>
                            <li><strong>Tekninen tuki:</strong> Apu ongelmatilanteissa sähköpostitse</li>
                            <li><strong>Pienet muutokset:</strong> Sisällön päivitykset ja pienet korjaukset</li>
                            <li><strong>Koulutus:</strong> Ohjeistus järjestelmän käyttöön</li>
                            <li><strong>Valvonta:</strong> Sivuston/sovelluksen toiminnan seuranta</li>
                        </ul>
                        <p>Tarjoamme myös pitkäaikaisia ylläpitosopimuksia jatkuvaa tukea varten.</p>
                    </div>
                </div>
                
                <div class="faq-item glass-panel animate-on-scroll" data-category="support" style="animation-delay: 0.2s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-11">
                        <span>Voitteko tehdä muutoksia valmiin projektin jälkeen?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-11" aria-hidden="true">
                        <p>Kyllä, tarjoamme joustavia päivitys- ja muutospalveluita:</p>
                        <ul>
                            <li><strong>Sisällön päivitykset:</strong> Tekstien, kuvien ja tietojen muutokset</li>
                            <li><strong>Toiminnallisuuden lisäykset:</strong> Uudet ominaisuudet ja moduulit</li>
                            <li><strong>Design-päivitykset:</strong> Visuaalisten elementtien muokkaukset</li>
                            <li><strong>Tekninen modernisointi:</strong> Päivitykset uusimpiin teknologioihin</li>
                        </ul>
                        <p>Hinnoittelemme muutokset työajan mukaan (85€/tunti). Suuremmille muutoksille teemme erillisen tarjouksen.</p>
                    </div>
                </div>
                
                <div class="faq-item glass-panel animate-on-scroll" data-category="support" style="animation-delay: 0.3s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-12">
                        <span>Mitä tapahtuu, jos en ole tyytyväinen lopputulokseen?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-12" aria-hidden="true">
                        <p>Asiakastyytyväisyys on meille tärkeintä. Jos et ole tyytyväinen:</p>
                        <ul>
                            <li><strong>Maksuton korjaustyö:</strong> Teemme tarvittavat muutokset ilmaiseksi</li>
                            <li><strong>Avoin kommunikaatio:</strong> Keskustelemme ongelmista ja ratkaisuista</li>
                            <li><strong>Useita korjauskierroksia:</strong> Työstämme kunnes olet tyytyväinen</li>
                            <li><strong>Rahntakuuarantia:</strong> Äärimmäisissä tapauksissa palautamme maksun</li>
                        </ul>
                        <p>Tähän asti 100% asiakkaistamme on ollut tyytyväisiä lopputulokseen!</p>
                    </div>
                </div>
                
                <!-- General FAQs -->
                <div class="faq-item glass-panel animate-on-scroll" data-category="general" style="animation-delay: 0.1s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-13">
                        <span>Työskentelettekö kansainvälisten asiakkaiden kanssa?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-13" aria-hidden="true">
                        <p>Kyllä, työskemtelemme asiakkaiden kanssa ympäri maailmaa:</p>
                        <ul>
                            <li>Englannin- ja suomenkielinen palvelu</li>
                            <li>Virtuaaliset tapaamiset ja kommunikaatio</li>
                            <li>Joustavat työajat eri aikavyöhykkeille</li>
                            <li>Kansainväliset maksutavat</li>
                            <li>Kokemus eri markkinoista ja kulttuureista</li>
                        </ul>
                    </div>
                </div>
                
                <div class="faq-item glass-panel animate-on-scroll" data-category="general" style="animation-delay: 0.2s;">
                    <button class="faq-question" aria-expanded="false" aria-controls="faq-answer-14">
                        <span>Voitteko auttaa olemassa olevan sivuston/sovelluksen parantamisessa?</span>
                        <svg class="faq-icon" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M6 9l6 6 6-6"/>
                        </svg>
                    </button>
                    <div class="faq-answer" id="faq-answer-14" aria-hidden="true">
                        <p>Ehdottomasti! Erikoisasemme on myös olemassa olevien projektien parantamisessa:</p>
                        <ul>
                            <li><strong>UX/UI Audit:</strong> Analysoimme nykyisen käyttökokemuksen</li>
                            <li><strong>Tekninen analyysi:</strong> Tunnistamme suorituskyky- ja turvallisuusongelmat</li>
                            <li><strong>Redesign:</strong> Modernisoimme ulkoasun ja toiminnallisuuden</li>
                            <li><strong>Optimointi:</strong> Parantumme nopeutta ja hakukoneoptimointia</li>
                            <li><strong>Mobiilioptimoni:</strong> Teemme sivustosta responsiivisen</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Still Have Questions -->
        <div class="faq-cta animate-on-scroll" style="animation-delay: 0.4s;">
            <div class="faq-cta-content glass-panel">
                <h3>Eikö kysymyksesi löytynyt listalta?</h3>
                <p>Ota rohkeasti yhteyttä, niin vastaamme kaikkiin kysymyksiisi henkilökohtaisesti.</p>
                <a href="contact.php" class="cta-primary">
                    <span>Kysy Meiltä</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M5 12h14"/>
                        <path d="m12 5 7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
<?php 
http_response_code(404);
include 'header.php'; 
?>

<section class="error-section">
    <div class="error-background">
        <div class="animated-gradient"></div>
        <div class="floating-particles"></div>
    </div>
    
    <div class="container">
        <div class="error-content animate-on-scroll">
            <div class="error-visual">
                <div class="error-number">404</div>
                <div class="error-glitch"></div>
            </div>
            
            <div class="error-text">
                <h1 class="error-title">Sivu Ei Löydy</h1>
                <p class="error-description">
                    Etsimäsi sivu on kadonnut digitaaliseen avaruuteen. 
                    Älä huoli, ohjaamme sinut takaisin turvallisesti kotiin.
                </p>
            </div>
            
            <div class="error-actions">
                <a href="index.php" class="btn btn-primary">
                    <span>Palaa Etusivulle</span>
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M19 12H5"/>
                        <path d="m12 19-7-7 7-7"/>
                    </svg>
                </a>
                <a href="contact.php" class="btn btn-secondary">
                    <span>Ota Yhteyttä</span>
                </a>
            </div>
            
            <div class="error-search glass-panel">
                <h3>Etsi Sivustolta</h3>
                <form class="search-form" action="index.php" method="get">
                    <input type="text" name="search" placeholder="Mitä etsit?" class="search-input">
                    <button type="submit" class="search-btn">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="11" cy="11" r="8"/>
                            <path d="m21 21-4.35-4.35"/>
                        </svg>
                        Etsi
                    </button>
                </form>
            </div>
            
            <div class="quick-links">
                <h3>Suositut Sivut</h3>
                <div class="links-grid">
                    <a href="services.php" class="quick-link glass-panel">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 2 7 12 12 22 7 12 2"/>
                            <polyline points="2,17 12,22 22,17"/>
                            <polyline points="2,12 12,17 22,12"/>
                        </svg>
                        <span>Palvelut</span>
                    </a>
                    
                    <a href="about.php" class="quick-link glass-panel">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"/>
                        </svg>
                        <span>Tietoa Meistä</span>
                    </a>
                    
                    <a href="reviews.php" class="quick-link glass-panel">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
                        </svg>
                        <span>Arvostelut</span>
                    </a>
                    
                    <a href="faq.php" class="quick-link glass-panel">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <circle cx="12" cy="12" r="10"/>
                            <path d="M9.09 9a3 3 0 0 1 5.83 1c0 2-3 3-3 3"/>
                            <line x1="12" y1="17" x2="12.01" y2="17"/>
                        </svg>
                        <span>FAQ</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
.error-section {
    min-height: 100vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}

.error-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: -1;
}

.error-content {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
    padding: 2rem;
}

.error-visual {
    position: relative;
    margin-bottom: 2rem;
}

.error-number {
    font-size: clamp(8rem, 15vw, 12rem);
    font-weight: 700;
    background: linear-gradient(135deg, var(--accent-cyan), var(--accent-magenta));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    line-height: 1;
    position: relative;
    font-family: 'Space Grotesk', sans-serif;
}

.error-glitch {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, var(--accent-cyan), var(--accent-magenta));
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
    animation: glitch 2s infinite;
}

.error-glitch::before {
    content: '404';
    position: absolute;
    top: 0;
    left: 0;
    font-size: clamp(8rem, 15vw, 12rem);
    font-weight: 700;
    font-family: 'Space Grotesk', sans-serif;
}

@keyframes glitch {
    0%, 100% { transform: translate(0); opacity: 0; }
    2% { transform: translate(-2px, 2px); opacity: 1; }
    4% { transform: translate(-2px, -2px); opacity: 0; }
    60% { transform: translate(2px, 2px); opacity: 0; }
    62% { transform: translate(2px, -2px); opacity: 1; }
    64% { transform: translate(0); opacity: 0; }
}

.error-title {
    font-size: clamp(2rem, 5vw, 3rem);
    font-weight: 600;
    margin-bottom: 1rem;
    color: var(--text-primary);
    font-family: 'Space Grotesk', sans-serif;
}

.error-description {
    font-size: 1.2rem;
    color: var(--text-secondary);
    margin-bottom: 2rem;
    line-height: 1.6;
    max-width: 500px;
    margin-left: auto;
    margin-right: auto;
}

.error-actions {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 3rem;
}

.error-actions .btn {
    padding: 0.9rem 1.75rem;
}

.error-actions .btn svg {
    transition: transform 0.3s ease;
}

.error-actions .btn:hover svg {
    transform: translateX(2px);
}

.error-search {
    max-width: 400px;
    margin: 0 auto 3rem;
    padding: 2rem;
    text-align: center;
}

.error-search h3 {
    margin-bottom: 1rem;
    color: var(--text-primary);
    font-size: 1.1rem;
}

.search-form {
    display: flex;
    gap: 0.5rem;
}

.search-input {
    flex: 1;
    padding: 0.75rem 1rem;
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.2);
    border-radius: 0.5rem;
    color: var(--text-primary);
    font-size: 1rem;
}

.search-input::placeholder {
    color: var(--text-secondary);
}

.search-btn {
    padding: 0.75rem 1rem;
    background: linear-gradient(135deg, var(--accent-cyan), var(--accent-magenta));
    border: none;
    border-radius: 0.5rem;
    color: white;
    font-weight: 500;
    cursor: pointer;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.search-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(0, 229, 255, 0.3);
}

.quick-links h3 {
    margin-bottom: 1.5rem;
    color: var(--text-primary);
    font-size: 1.1rem;
}

.links-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(150px, 1fr));
    gap: 1rem;
    max-width: 600px;
    margin: 0 auto;
}

.quick-link {
    display: flex;
    flex-direction: column;
    align-items: center;
    gap: 0.5rem;
    padding: 1.5rem 1rem;
    text-decoration: none;
    color: var(--text-secondary);
    transition: all 0.3s ease;
    border-radius: 1rem;
}

.quick-link:hover {
    color: var(--accent-cyan);
    transform: translateY(-5px);
}

.quick-link svg {
    transition: all 0.3s ease;
}

.quick-link:hover svg {
    stroke: var(--accent-cyan);
    transform: scale(1.1);
}

@media (max-width: 768px) {
    .error-actions {
        flex-direction: column;
        align-items: center;
    }
    
    .search-form {
        flex-direction: column;
    }
    
    .links-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<?php include 'footer.php'; ?>
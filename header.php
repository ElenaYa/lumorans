<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
?>
<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Lumorans">
    
    <?php if (isset($meta_title) && isset($meta_description) && isset($meta_keywords)): ?>
        <title><?php echo htmlspecialchars($meta_title); ?></title>
        <meta name="description" content="<?php echo htmlspecialchars($meta_description); ?>">
        <meta name="keywords" content="<?php echo htmlspecialchars($meta_keywords); ?>">
    <?php else: ?>
        <title>Lumorans - Web & App Design | Futuristinen Suunnittelu</title>
        <meta name="description" content="Lumorans tarjoaa huippuluokan web- ja app-suunnittelua futuristisella lähestymistavalla. Luo unelmien digitaalinen kokemus kanssamme.">
        <meta name="keywords" content="web design, app design, ui/ux, futuristinen suunnittelu, digitaalinen kokemus, käyttöliittymä">
    <?php endif; ?>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    
  
    <link rel="stylesheet" href="css/complete-styles.css">
    
    <link rel="icon" type="image/png" href="img/favicon.png">
</head>
<body class="<?php echo isset($current_page) && $current_page === 'index' ? 'home-page' : ''; ?>">
    <header class="main-header">
        <nav class="navbar glass-panel">
            <div class="nav-container">
                <div class="nav-brand">
                    <a href="index.php" class="brand-link">
                        <img src="img/logo-lum.webp" alt="Lumorans" class="brand-logo" width="32" height="32" loading="eager">
                        <span class="brand-text">Lumorans</span>
                    </a>
                </div>
                
                <div class="nav-menu" id="navMenu">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link <?php echo $current_page === 'index' ? 'active' : ''; ?>">
                                Etusivu
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link <?php echo $current_page === 'about' ? 'active' : ''; ?>">
                                Tietoa Meistä
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="services.php" class="nav-link <?php echo $current_page === 'services' ? 'active' : ''; ?>">
                                Palvelut
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="reviews.php" class="nav-link <?php echo $current_page === 'reviews' ? 'active' : ''; ?>">
                                Arvostelut
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="faq.php" class="nav-link <?php echo $current_page === 'faq' ? 'active' : ''; ?>">
                                FAQ
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link <?php echo $current_page === 'contact' ? 'active' : ''; ?> cta-button">
                                Ota Yhteyttä
                            </a>
                        </li>
                    </ul>
                </div>
                
                <div class="nav-toggle" id="navToggle">
                    <span class="nav-toggle-line"></span>
                    <span class="nav-toggle-line"></span>
                    <span class="nav-toggle-line"></span>
                </div>
            </div>
        </nav>
    </header>

    <main class="main-content">
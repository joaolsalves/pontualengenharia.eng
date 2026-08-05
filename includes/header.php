<?php
require_once __DIR__ . '/config.php';
$current_page = basename($_SERVER['PHP_SELF'], '.php');
$b = BASE_URL; // shorthand
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?= isset($meta_description) ? htmlspecialchars($meta_description) : 'Pontual Engenharia – soluções em engenharia, construção civil, manutenção predial e instalações em Rio de Janeiro, Duque de Caxias, Petrópolis, Teresópolis e região.' ?>">
    <meta name="keywords" content="engenharia Rio de Janeiro, manutenção predial RJ, construção civil, instalações elétricas, instalações hidráulicas, climatização, SPDA, gerenciamento de obras, Magé, Duque de Caxias, Guapimirim, Petrópolis, Teresópolis, Angra dos Reis, Rio Claro, Barra Mansa, engenharia civil RJ, manutenção predial Rio de Janeiro">
    <meta name="robots" content="index, follow">
    <meta name="theme-color" content="#13434d">
    <?php
    $canonical_path = strtok($_SERVER['REQUEST_URI'], '?');
    $canonical_path = rtrim($canonical_path, '/') ?: '/';
    $canonical_url  = SITE_URL . $canonical_path;
    ?>
    <link rel="canonical"    href="<?= htmlspecialchars($canonical_url) ?>">
    <link rel="sitemap"      type="application/xml" href="<?= SITE_URL ?>/sitemap.xml">
    <meta property="og:title"        content="<?= isset($page_title) ? htmlspecialchars($page_title) . ' | ' . SITE_NAME : SITE_NAME ?>">
    <meta property="og:description"  content="<?= isset($meta_description) ? htmlspecialchars($meta_description) : SITE_SLOGAN ?>">
    <meta property="og:type"         content="website">
    <meta property="og:url"          content="<?= htmlspecialchars($canonical_url) ?>">
    <meta property="og:image"        content="<?= SITE_URL ?>/assets/img/logonomeslogam.png">
    <meta property="og:image:width"  content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale"       content="pt_BR">
    <meta property="og:site_name"    content="<?= SITE_NAME ?>">
    <meta name="twitter:card"        content="summary_large_image">
    <meta name="twitter:title"       content="<?= isset($page_title) ? htmlspecialchars($page_title) . ' | ' . SITE_NAME : SITE_NAME ?>">
    <meta name="twitter:description" content="<?= isset($meta_description) ? htmlspecialchars($meta_description) : SITE_SLOGAN ?>">
    <meta name="twitter:image"       content="<?= SITE_URL ?>/assets/img/logonomeslogam.png">
    <title><?= isset($page_title) ? htmlspecialchars($page_title) . ' | ' . SITE_NAME : SITE_NAME ?></title>
    <link rel="icon"             type="image/x-icon" href="<?= $b ?>/assets/img/favicon.ico">
    <link rel="shortcut icon"    type="image/x-icon" href="<?= $b ?>/assets/img/favicon.ico">
    <link rel="icon"             type="image/png"    href="<?= $b ?>/assets/img/logo.png">
    <link rel="apple-touch-icon" sizes="180x180"     href="<?= $b ?>/assets/img/logo.png">
    <!-- /Favicon -->

    <!-- CSS crítico inline (above-the-fold) -->
    <style><?php echo file_get_contents(__DIR__ . '/../assets/css/critical.css'); ?></style>

    <!-- Preload recursos críticos -->
    <link rel="preload" href="<?= $b ?>/assets/css/style.css" as="style">
    <link rel="preload" href="<?= $b ?>/assets/img/logonomeslogam.png" as="image" fetchpriority="high">

    <!-- CSS crítico próprio -->
    <link rel="stylesheet" href="<?= $b ?>/assets/css/style.css">

    <!-- Google Fonts: Montserrat (swap) + Inter (optional) separados para controle de font-display -->
    <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!-- Montserrat: swap — headings visíveis imediatamente com fallback -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&display=swap" media="print" onload="this.media='all'">
    <!-- Inter: optional — carrega sem causar troca de layout -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=optional" media="print" onload="this.media='all'">
    <noscript>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600;700;800&family=Inter:wght@400;500;600;700&display=swap">
    </noscript>

    <!-- Font Awesome carregado de forma não-bloqueante -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" media="print" onload="this.media='all'" crossorigin="anonymous">
    <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"></noscript>

    <!-- Schema.org JSON-LD -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": ["Organization", "ProfessionalService"],
        "name": "<?= SITE_NAME ?>",
        "alternateName": "Pontual Engenharia e Construção",
        "description": "<?= SITE_SLOGAN ?>",
        "url": "<?= SITE_URL ?>",
        "telephone": "<?= SITE_PHONE ?>",
        "email": "<?= SITE_EMAIL ?>",
        "logo": {
            "@type": "ImageObject",
            "url": "<?= SITE_URL ?>/assets/img/logo.png",
            "width": 512,
            "height": 512,
            "caption": "<?= SITE_NAME ?>"
        },
        "image": {
            "@type": "ImageObject",
            "url": "<?= SITE_URL ?>/assets/img/logonomeslogam.png",
            "width": 1200,
            "height": 630,
            "caption": "<?= SITE_NAME ?> – <?= SITE_SLOGAN ?>"
        },
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Rio de Janeiro",
            "addressRegion": "RJ",
            "addressCountry": "BR"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday"],
            "opens": "08:00",
            "closes": "18:00"
        },
        "priceRange": "$$",
        "areaServed": [
            {"@type": "City", "name": "Rio de Janeiro",  "containedInPlace": {"@type": "State", "name": "Rio de Janeiro"}},
            {"@type": "City", "name": "Magé",            "containedInPlace": {"@type": "State", "name": "Rio de Janeiro"}},
            {"@type": "City", "name": "Duque de Caxias", "containedInPlace": {"@type": "State", "name": "Rio de Janeiro"}},
            {"@type": "City", "name": "Guapimirim",      "containedInPlace": {"@type": "State", "name": "Rio de Janeiro"}},
            {"@type": "City", "name": "Petrópolis",      "containedInPlace": {"@type": "State", "name": "Rio de Janeiro"}},
            {"@type": "City", "name": "Teresópolis",     "containedInPlace": {"@type": "State", "name": "Rio de Janeiro"}},
            {"@type": "City", "name": "Angra dos Reis",  "containedInPlace": {"@type": "State", "name": "Rio de Janeiro"}},
            {"@type": "City", "name": "Rio Claro",       "containedInPlace": {"@type": "State", "name": "Rio de Janeiro"}},
            {"@type": "City", "name": "Barra Mansa",     "containedInPlace": {"@type": "State", "name": "Rio de Janeiro"}}
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Serviços de Engenharia",
            "itemListElement": [
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Construções em Geral"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Gerenciamento de Obras"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Projetos de Engenharia"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Instalações Elétricas"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Instalações Hidráulicas"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Climatização"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "SPDA"}},
                {"@type": "Offer", "itemOffered": {"@type": "Service", "name": "Manutenção Predial"}}
            ]
        },
        "sameAs": [
            "https://wa.me/<?= SITE_WHATSAPP ?>"
        ]
    }
    </script>
</head>
<body>

<!-- Skip link: acessibilidade — pula navegação e vai direto ao conteúdo -->
<a href="#main-content" class="skip-link">Pular para o conteúdo</a>

<!-- Top bar -->
<div class="topbar">
    <div class="container topbar__inner">
        <span><i class="fa fa-envelope"></i> <?= SITE_EMAIL ?></span>
        <span><i class="fa fa-phone"></i> <?= SITE_PHONE ?></span>
        <div class="topbar__social">
            <a href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
            <a href="mailto:<?= SITE_EMAIL ?>" aria-label="E-mail"><i class="fa fa-envelope"></i></a>
        </div>
    </div>
</div>

<!-- Header / Navbar -->
<header class="header" id="header">
    <div class="container header__inner">
        <a href="<?= $b ?>/" class="logo" aria-label="Pontual Engenharia – <?= SITE_SLOGAN ?>">
            <img src="<?= $b ?>/assets/img/logonomeslogam.png"
                 alt="Pontual Engenharia – <?= SITE_SLOGAN ?>"
                 class="logo__img"
                 width="220" height="54"
                 onerror="this.src='<?= $b ?>/assets/img/logo.png'">
        </a>

        <button class="nav-toggle" id="navToggle" aria-label="Abrir menu" aria-expanded="false">
            <span></span><span></span><span></span>
        </button>

        <nav class="nav" id="mainNav">
            <ul class="nav__list">
                <li><a href="<?= $b ?>/"         class="nav__link <?= $current_page === 'index'    ? 'active' : '' ?>">Início</a></li>
                <li><a href="<?= $b ?>/sobre"    class="nav__link <?= $current_page === 'sobre'    ? 'active' : '' ?>">Quem Somos</a></li>
                <li><a href="<?= $b ?>/servicos" class="nav__link <?= $current_page === 'servicos' ? 'active' : '' ?>">Serviços</a></li>
                <li><a href="<?= $b ?>/obras"    class="nav__link <?= $current_page === 'obras'    ? 'active' : '' ?>">Obras</a></li>
                <li><a href="<?= $b ?>/equipe"   class="nav__link <?= $current_page === 'equipe'   ? 'active' : '' ?>">Equipe</a></li>
                <li><a href="<?= $b ?>/contato"  class="nav__link <?= $current_page === 'contato'  ? 'active' : '' ?>">Contato</a></li>
            </ul>
        </nav>
    </div>
</header>

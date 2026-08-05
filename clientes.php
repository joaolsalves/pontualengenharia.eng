<?php
$page_title       = 'Clientes';
$meta_description = 'Conheça os principais clientes da Pontual Engenharia e os segmentos que atendemos.';
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">

<div class="page-hero">
    <div class="container">
        <h1>Nossos Clientes</h1>
        <p>Empresas e instituições que confiam na Pontual Engenharia</p>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="/">Início</a>
            <i class="fa fa-chevron-right"></i>
            <span>Clientes</span>
        </nav>
    </div>
</div>

<!-- Principais clientes -->
<section class="section">
    <div class="container">
        <div class="section__header">
            <div class="section__tag">Principais clientes</div>
            <h2 class="section__title">Empresas que escolheram a Pontual</h2>
            <p class="section__subtitle">Atendemos grandes redes, comércios e empresas com o mesmo nível de dedicação e qualidade em cada serviço.</p>
        </div>
        <div class="clients__grid--lg fade-in">
            <?php
            $clients = [
                ['ampm',      'am/pm',      'Rede de conveniências'],
                ['nalin',     'Nalin',      'Comércio'],
                ['masterson', 'Masterson',  'Materiais de Construção'],
                ['amigold',   'Amigold',    'Joalheria'],
                ['dzire',     'Dzire',      'Varejo'],
                ['rocco',     'Rocco',      'Editora'],
                ['chinatown', 'ChinaTown',  'Restaurante / Gastronomia'],
                ['riosul',    'Rio Sul',    'Varejo / Aeroporto'],
            ];
            foreach ($clients as [$slug, $name, $segment]): ?>
            <div class="client-card--lg fade-in">
                <div class="client-card__logo-wrap">
                    <img src="<?= BASE_URL ?>/assets/img/clientes/<?= $slug ?>.svg"
                         alt="Logo <?= $name ?>"
                         class="client-card__logo-img"
                         loading="lazy"
                         width="130" height="54">
                </div>
                <strong><?= $name ?></strong>
                <span><?= $segment ?></span>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Segmentos -->
<section class="section section--light">
    <div class="container">
        <div class="section__header">
            <div class="section__tag">Atendemos também</div>
            <h2 class="section__title">Segmentos que atendemos</h2>
            <p class="section__subtitle">Nossa experiência cobre os mais diversos setores, sempre com o mesmo padrão de qualidade e comprometimento.</p>
        </div>
        <div class="services__grid">
            <?php
            $segments = [
                ['fa-landmark',        'Prefeituras e Órgãos Públicos',
                 'Atendemos entidades públicas com serviços de engenharia, manutenção e conservação dentro das normas técnicas e exigências do setor.'],
                ['fa-hospital',        'Clínicas e Hospitais',
                 'Ambientes de saúde demandam manutenção ágil e especializada. Atuamos garantindo segurança, conforto e conformidade técnica.'],
                ['fa-church',          'Instituições Religiosas',
                 'Igrejas, templos e centros comunitários contam com nossa equipe para conservação, reparos e projetos de melhoria.'],
                ['fa-school',          'Colégios e Universidades',
                 'Manutenção preventiva e corretiva em ambientes educacionais, assegurando o funcionamento seguro das instalações.'],
                ['fa-store',           'Comércio e Varejo',
                 'Serviços ágeis e planejados para estabelecimentos comerciais, minimizando interrupções e garantindo a operação contínua.'],
                ['fa-industry',        'Indústria e Logística',
                 'Manutenção de galpões, plantas industriais e instalações de grande porte com equipe técnica e gestão eficiente.'],
            ];
            foreach ($segments as [$icon, $title, $desc]): ?>
            <div class="service-card fade-in">
                <div class="service-card__icon"><i class="fa <?= $icon ?>"></i></div>
                <h3><?= $title ?></h3>
                <p><?= $desc ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container">
        <h2>Seja o próximo cliente Pontual</h2>
        <p>Entre em contato e receba uma proposta personalizada para sua empresa ou instituição.</p>
        <div class="btn-group">
            <a href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank" rel="noopener noreferrer" class="btn btn--primary">
                <i class="fab fa-whatsapp"></i> Chamar no WhatsApp
            </a>
            <a href="<?= BASE_URL ?>/contato" class="btn btn--outline"><i class="fa fa-envelope"></i> Enviar Mensagem</a>
        </div>
    </div>
</section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

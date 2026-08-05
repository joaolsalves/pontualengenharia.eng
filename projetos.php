<?php
$page_title       = 'Projetos';
$meta_description = 'Conheça os projetos de engenharia realizados pela Pontual Engenharia em todo o Brasil.';
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">

<?php
$projects = [
    ['fa-city',      'Residencial',    'Edifício Horizonte',        'São Paulo – SP',   '2023', 'Projeto estrutural completo de edifício residencial de 18 andares com fundação em estacas.'],
    ['fa-industry',  'Industrial',     'Galpão LogiTech',           'Guarulhos – SP',   '2023', 'Estrutura metálica para galpão logístico com 8.000 m², incluindo mezanino e plataformas.'],
    ['fa-hospital',  'Comercial',      'Centro Médico Vida',        'Campinas – SP',    '2022', 'Laudo estrutural e projeto de retrofit para ampliação de complexo médico de 3 andares.'],
    ['fa-home',      'Residencial',    'Condomínio Villa Verde',    'Cotia – SP',       '2022', 'Gerenciamento e projeto estrutural de condomínio com 40 casas em concreto armado.'],
    ['fa-bridge',    'Infraestrutura', 'Passarela Municipal',       'Santo André – SP', '2021', 'Projeto e execução de passarela metálica para pedestres com 35 metros de vão.'],
    ['fa-warehouse', 'Industrial',     'Planta Industrial NX',      'Sorocaba – SP',    '2021', 'Consultoria técnica e projeto estrutural para nova planta industrial de 12.000 m².'],
    ['fa-school',    'Institucional',  'Escola Municipal Nova Era', 'Osasco – SP',      '2020', 'Projeto estrutural e arquitetônico de escola pública com 12 salas de aula.'],
    ['fa-building',  'Comercial',      'Torre Empresarial Centro',  'São Paulo – SP',   '2020', 'Projeto estrutural de torre comercial de 22 andares no centro de São Paulo.'],
    ['fa-hotel',     'Hotelaria',      'Hotel Beira Rio',           'Ribeirão Preto –SP','2019','Projeto estrutural e gerenciamento de hotel de 8 andares com piscina e spa.'],
];
?>

<div class="page-hero">
    <div class="container">
        <h1>Nossos Projetos</h1>
        <p>Portfólio de obras e projetos realizados em todo o Brasil</p>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="/">Início</a>
            <i class="fa fa-chevron-right"></i>
            <span>Projetos</span>
        </nav>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section__header">
            <div class="section__tag">Portfólio</div>
            <h2 class="section__title">Projetos Realizados</h2>
            <p class="section__subtitle">Cada projeto é uma entrega de qualidade, segurança e comprometimento com o cliente.</p>
        </div>

        <!-- Filtros -->
        <div id="filterBar" class="filter-bar">
            <button class="btn btn--primary filter-btn active" data-filter="all">Todos</button>
            <button class="btn btn--primary-dark filter-btn" data-filter="Residencial">Residencial</button>
            <button class="btn btn--primary-dark filter-btn" data-filter="Industrial">Industrial</button>
            <button class="btn btn--primary-dark filter-btn" data-filter="Comercial">Comercial</button>
            <button class="btn btn--primary-dark filter-btn" data-filter="Infraestrutura">Infraestrutura</button>
            <button class="btn btn--primary-dark filter-btn" data-filter="Institucional">Institucional</button>
        </div>

        <div class="projects__grid" id="projectsGrid">
            <?php foreach ($projects as [$icon, $tag, $title, $location, $year, $desc]): ?>
            <div class="project-card fade-in" data-category="<?= $tag ?>">
                <div class="project-card__img">
                    <i class="fa <?= $icon ?>"></i>
                    <span class="project-card__tag"><?= $tag ?></span>
                </div>
                <div class="project-card__body">
                    <h3><?= $title ?></h3>
                    <p><?= $desc ?></p>
                    <div class="card-meta">
                        <span><i class="fa fa-map-marker-alt"></i> <?= $location ?></span>
                        <span><i class="fa fa-calendar"></i> <?= $year ?></span>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="cta-banner">
    <div class="container">
        <h2>Quer ver seu projeto aqui?</h2>
        <p>Entre em contato e vamos construir algo incrível juntos.</p>
        <a href="<?= BASE_URL ?>/contato" class="btn btn--primary-dark"><i class="fa fa-envelope"></i> Solicitar Orçamento</a>
    </div>
</section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

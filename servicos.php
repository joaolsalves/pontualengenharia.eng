<?php
$page_title       = 'Serviços de Engenharia e Manutenção Predial em Rio de Janeiro e Região';
$meta_description = 'Constru��o, projetos de engenharia, instala��es el�tricas e hidr�ulicas, climatiza��o, SPDA e manuten��o predial em Rio de Janeiro, Duque de Caxias, Petr�polis, Teres�polis, Angra dos Reis e mais.';
$schema_services = true; // flag para schema adicional
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">
<!-- Schema.org adicional para página de serviços -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Serviços de Engenharia – Pontual Engenharia",
    "description": "Lista completa de serviços de engenharia e manutenção predial no Rio de Janeiro",
    "itemListElement": [
        {"@type": "ListItem", "position": 1, "name": "Manutenção Predial"},
        {"@type": "ListItem", "position": 2, "name": "Serviços Elétricos"},
        {"@type": "ListItem", "position": 3, "name": "Sistemas de Climatização"},
        {"@type": "ListItem", "position": 4, "name": "Geradores e Sistemas Mecânicos"},
        {"@type": "ListItem", "position": 5, "name": "Projetos de Engenharia Civil"},
        {"@type": "ListItem", "position": 6, "name": "Jardinagem e Conservação de Áreas Verdes"}
    ]
}
</script>
<?php

$services = [
    [
        'fa-building',
        'Manutenção Predial',
        'Garantimos o pleno funcionamento das instalações do seu imóvel, com atendimento preventivo e corretivo ágil e especializado.',
        [
            'Manutenção preventiva e corretiva em instalações prediais',
            'Reparos estruturais e serviços gerais de conservação',
            'Inspeção e diagnóstico técnico de instalações',
        ],
    ],
    [
        'fa-bolt',
        'Serviços Elétricos',
        'Atuamos em sistemas elétricos prediais com segurança e conformidade às normas técnicas vigentes.',
        [
            'Manutenção e reparo em sistemas elétricos prediais',
            'Instalação e adequação de quadros elétricos',
            'Diagnóstico e correção de falhas elétricas',
        ],
    ],
    [
        'fa-snowflake',
        'Sistemas de Climatização',
        'Instalação e manutenção de sistemas de ar-condicionado com foco em eficiência energética e conforto térmico.',
        [
            'Instalação, manutenção e limpeza de ar-condicionado',
            'Manutenção preventiva e corretiva de sistemas de climatização',
            'Avaliação de eficiência e funcionamento dos equipamentos',
        ],
    ],
    [
        'fa-cogs',
        'Geradores e Sistemas Mecânicos',
        'Garantimos a continuidade operacional do seu negócio com manutenção especializada em geradores e sistemas mecânicos.',
        [
            'Manutenção preventiva e corretiva de geradores',
            'Inspeção e testes operacionais',
            'Diagnóstico e reparo de sistemas mecânicos',
        ],
    ],
    [
        'fa-drafting-compass',
        'Projetos de Engenharia Civil',
        'Da concepção à entrega, elaboramos e executamos projetos com rigor técnico, segurança e cumprimento de prazos.',
        [
            'Elaboração e execução de projetos de engenharia',
            'Acompanhamento técnico de obras',
            'Planejamento e gestão de serviços de construção e reforma',
        ],
    ],
    [
        'fa-leaf',
        'Jardinagem e Conservação de Áreas Verdes',
        'Valorizamos o espaço externo do seu imóvel com serviços de conservação e paisagismo que fazem a diferença.',
        [
            'Manutenção de jardins e áreas verdes',
            'Poda de plantas e árvores de pequeno porte',
            'Limpeza e conservação de espaços externos',
            'Planejamento e organização de paisagismo básico',
        ],
    ],
];
?>

<div class="page-hero">
    <div class="container">
        <h1>Nossos Serviços</h1>
        <p>Soluções completas em engenharia, manutenção e conservação</p>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?= BASE_URL ?>/">Início</a>
            <i class="fa fa-chevron-right"></i>
            <span>Serviços</span>
        </nav>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section__header">
            <div class="section__tag">O que oferecemos</div>
            <h2 class="section__title">Serviços Especializados</h2>
            <p class="section__subtitle">Oferecemos soluções completas em engenharia, manutenção predial e conservação de áreas externas, com foco em qualidade, eficiência e redução de custos operacionais.</p>
        </div>

        <?php foreach ($services as [$icon, $title, $desc, $items]): ?>
        <div class="service-detail fade-in">
            <div class="service-detail__icon">
                <i class="fa <?= $icon ?>"></i>
            </div>
            <div class="service-detail__content">
                <h3><?= $title ?></h3>
                <p><?= $desc ?></p>
                <ul class="service-detail__list">
                    <?php foreach ($items as $item): ?>
                    <li><i class="fa fa-check-circle"></i> <?= $item ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="service-detail__action">
                <a href="https://wa.me/<?= SITE_WHATSAPP ?>?text=Olá! Tenho interesse em: <?= urlencode($title) ?>"
                   target="_blank" rel="noopener noreferrer" class="btn btn--primary-dark">
                    <i class="fab fa-whatsapp"></i> Solicitar
                </a>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
</section>

<section class="cta-banner">
    <div class="container">
        <h2>Não encontrou o que procurava?</h2>
        <p>Entre em contato — analisamos sua necessidade e apresentamos a melhor solução.</p>
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

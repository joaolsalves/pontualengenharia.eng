<?php
$page_title       = 'Obras Realizadas | Portfólio de Engenharia no RJ';
$meta_description = 'Veja obras realizadas pela Pontual Engenharia: constru��o civil, instala��es, climatiza��o, SPDA e manuten��o predial em Rio de Janeiro, Duque de Caxias, Petr�polis e regi�o.';
require_once __DIR__ . '/includes/header.php';

// ── Catálogo de obras ─────────────────────────────────────────
// Cada obra: [categoria, título, local, descrição, ícone-placeholder]
// Substitua os ícones pelas imagens reais: 'foto' => 'nome-do-arquivo.jpg'
// Categorias na ordem definida pelo cliente:
$obras = [
    // 1. Construções em geral
    [
        'categoria' => 'Construções em Geral',
        'titulo'    => 'Construção de Galpão Industrial',
        'local'     => 'Duque de Caxias – RJ',
        'desc'      => 'Construção completa de galpão de 800 m² em estrutura metálica com telha trapezoidal e piso industrial.',
        'icone'     => 'fa-hard-hat',
        'foto'      => '',
    ],
    [
        'categoria' => 'Construções em Geral',
        'titulo'    => 'Reforma e Ampliação Residencial',
        'local'     => 'Barra da Tijuca – RJ',
        'desc'      => 'Ampliação de 120 m² com dois dormitórios, banheiro e varanda, integrando área nova à construção existente.',
        'icone'     => 'fa-home',
        'foto'      => '',
    ],

    // 2. Consultoria de obras
    [
        'categoria' => 'Consultoria de Obras',
        'titulo'    => 'Consultoria Técnica em Retrofit Predial',
        'local'     => 'Centro – RJ',
        'desc'      => 'Diagnóstico técnico completo e elaboração de plano de retrofit para edifício comercial dos anos 1980.',
        'icone'     => 'fa-comments',
        'foto'      => '',
    ],
    [
        'categoria' => 'Consultoria de Obras',
        'titulo'    => 'Due Diligence para Aquisição de Imóvel',
        'local'     => 'Botafogo – RJ',
        'desc'      => 'Vistoria e relatório técnico completo de edificação multifamiliar para assessoria em processo de compra.',
        'icone'     => 'fa-clipboard-check',
        'foto'      => '',
    ],

    // 3. Gerenciamento de obras
    [
        'categoria' => 'Gerenciamento de Obras',
        'titulo'    => 'Gerenciamento de Obra Comercial com ART',
        'local'     => 'Recreio dos Bandeirantes – RJ',
        'desc'      => 'Gerenciamento completo de obra de loja com 350 m², emissão de ART, cronograma e relatórios periódicos.',
        'icone'     => 'fa-tasks',
        'foto'      => '',
    ],
    [
        'categoria' => 'Gerenciamento de Obras',
        'titulo'    => 'Fiscalização e ART de Reforma Hospitalar',
        'local'     => 'Tijuca – RJ',
        'desc'      => 'Acompanhamento técnico de reforma em clínica com emissão de Anotação de Responsabilidade Técnica.',
        'icone'     => 'fa-hospital',
        'foto'      => '',
    ],

    // 4. Projetos de engenharia
    [
        'categoria' => 'Projetos de Engenharia',
        'titulo'    => 'Projeto Estrutural de Edificação Residencial',
        'local'     => 'Jacarepaguá – RJ',
        'desc'      => 'Elaboração de projeto estrutural em concreto armado para residência de 3 pavimentos.',
        'icone'     => 'fa-drafting-compass',
        'foto'      => '',
    ],
    [
        'categoria' => 'Projetos de Engenharia',
        'titulo'    => 'Projeto de Fundação e Memorial de Cálculo',
        'local'     => 'Campo Grande – RJ',
        'desc'      => 'Projeto de fundações em estacas raiz com memorial descritivo para edifício de 6 andares.',
        'icone'     => 'fa-drafting-compass',
        'foto'      => '',
    ],

    // 5. Instalações elétricas
    [
        'categoria' => 'Instalações Elétricas',
        'titulo'    => 'Instalação Elétrica Predial Completa',
        'local'     => 'Méier – RJ',
        'desc'      => 'Instalação de toda a rede elétrica de edifício residencial de 8 andares com QGBT e medidores individuais.',
        'icone'     => 'fa-bolt',
        'foto'      => '',
    ],
    [
        'categoria' => 'Instalações Elétricas',
        'titulo'    => 'Adequação de Quadro Elétrico Industrial',
        'local'     => 'Duque de Caxias – RJ',
        'desc'      => 'Modernização de quadro geral com substituição de disjuntores, banco de capacitores e correção do fator de potência.',
        'icone'     => 'fa-bolt',
        'foto'      => '',
    ],

    // 6. Instalações hidráulicas
    [
        'categoria' => 'Instalações Hidráulicas',
        'titulo'    => 'Instalação Hidrossanitária Residencial',
        'local'     => 'Ipanema – RJ',
        'desc'      => 'Execução completa de instalação de água fria, água quente e esgoto em apartamento reformado.',
        'icone'     => 'fa-faucet',
        'foto'      => '',
    ],
    [
        'categoria' => 'Instalações Hidráulicas',
        'titulo'    => 'Troca de Rede de Tubulação Predial',
        'local'     => 'Copacabana – RJ',
        'desc'      => 'Substituição completa de tubulação em ferro fundido por PVC em edifício de 12 andares sem interrupção prolongada.',
        'icone'     => 'fa-faucet',
        'foto'      => '',
    ],

    // 7. Climatização
    [
        'categoria' => 'Climatização',
        'titulo'    => 'Instalação de Sistema VRF',
        'local'     => 'Leblon – RJ',
        'desc'      => 'Instalação de sistema VRF com 20 unidades evaporadoras em escritório de advocacia de alto padrão.',
        'icone'     => 'fa-snowflake',
        'foto'      => '',
    ],
    [
        'categoria' => 'Climatização',
        'titulo'    => 'Manutenção Preventiva de 32 Splits',
        'local'     => 'Copacabana – RJ',
        'desc'      => 'Manutenção preventiva semestral em hotel boutique: higienização, recarga de gás e verificação dos circuitos.',
        'icone'     => 'fa-snowflake',
        'foto'      => '',
    ],

    // 8. SPDA
    [
        'categoria' => 'SPDA',
        'titulo'    => 'Instalação de Para-raios SPDA',
        'local'     => 'Barra da Tijuca – RJ',
        'desc'      => 'Projeto e instalação de sistema de proteção contra descargas atmosféricas em condomínio residencial de 15 andares.',
        'icone'     => 'fa-bolt',
        'foto'      => '',
    ],
    [
        'categoria' => 'SPDA',
        'titulo'    => 'Laudo e Manutenção de SPDA Existente',
        'local'     => 'Tijuca – RJ',
        'desc'      => 'Inspeção, laudo técnico e manutenção corretiva do sistema de aterramento e para-raios de escola municipal.',
        'icone'     => 'fa-bolt',
        'foto'      => '',
    ],

    // 9. Manutenção predial
    [
        'categoria' => 'Manutenção Predial',
        'titulo'    => 'Manutenção Preventiva Mensal de Condomínio',
        'local'     => 'Botafogo – RJ',
        'desc'      => 'Contrato de manutenção preventiva e corretiva abrangendo sistemas elétrico, hidráulico e estrutural.',
        'icone'     => 'fa-building',
        'foto'      => '',
    ],
    [
        'categoria' => 'Manutenção Predial',
        'titulo'    => 'Impermeabilização de Cobertura e Calhas',
        'local'     => 'Méier – RJ',
        'desc'      => 'Impermeabilização de terraço com manta asfáltica e aplicação de poliuretano líquido nas calhas.',
        'icone'     => 'fa-building',
        'foto'      => '',
    ],
];

// Categorias na ordem definida pelo cliente (não alfabética)
$categorias = [
    'Construções em Geral',
    'Consultoria de Obras',
    'Gerenciamento de Obras',
    'Projetos de Engenharia',
    'Instalações Elétricas',
    'Instalações Hidráulicas',
    'Climatização',
    'SPDA',
    'Manutenção Predial',
];
?>

<main id="main-content">

<!-- Schema.org -->
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "ItemList",
    "name": "Obras Realizadas – Pontual Engenharia",
    "description": "Portfólio de serviços de engenharia e manutenção predial executados no Rio de Janeiro",
    "numberOfItems": <?= count($obras) ?>,
    "itemListElement": [
        <?php foreach ($obras as $i => $o): ?>
        {"@type": "ListItem", "position": <?= $i+1 ?>, "name": "<?= htmlspecialchars($o['titulo']) ?>"}<?= $i < count($obras)-1 ? ',' : '' ?>
        <?php endforeach; ?>
    ]
}
</script>

<!-- Page Hero -->
<div class="page-hero">
    <div class="container">
        <h1>Obras Realizadas</h1>
        <p>Conheça alguns dos serviços que entregamos com qualidade e precisão no Rio de Janeiro</p>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?= BASE_URL ?>/">Início</a>
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            <span>Obras Realizadas</span>
        </nav>
    </div>
</div>

<!-- Intro strip com números -->
<div class="obras-strip">
    <div class="container obras-strip__grid">
        <div class="obras-strip__item fade-in">
            <i class="fa fa-hard-hat" aria-hidden="true"></i>
            <strong><span data-count="<?= count($obras) ?>" data-suffix="+"><?= count($obras) ?>+</span></strong>
            <span>Obras no portfólio</span>
        </div>
        <div class="obras-strip__item fade-in">
            <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
            <strong>Rio de Janeiro</strong>
            <span>Zona Sul, Norte, Oeste e Grande Rio</span>
        </div>
        <div class="obras-strip__item fade-in">
            <i class="fa fa-calendar-check" aria-hidden="true"></i>
            <strong>+10 anos</strong>
            <span>de experiência em campo</span>
        </div>
        <div class="obras-strip__item fade-in">
            <i class="fa fa-star" aria-hidden="true"></i>
            <strong>100%</strong>
            <span>comprometimento na entrega</span>
        </div>
    </div>
</div>

<!-- Galeria -->
<section class="section" aria-labelledby="galeria-titulo">
    <div class="container">
        <div class="section__header">
            <div class="section__tag">Portfólio</div>
            <h2 class="section__title" id="galeria-titulo">Nossa Galeria de Obras</h2>
            <p class="section__subtitle">
                Filtre por categoria ou navegue por todos os serviços executados.
                Clique em qualquer imagem para ampliar.
            </p>
        </div>

        <!-- Filtros -->
        <div class="filter-bar" role="group" aria-label="Filtrar obras por categoria">
            <button class="btn btn--primary filter-btn active" data-filter="all" aria-pressed="true">
                Todas
            </button>
            <?php foreach ($categorias as $cat): ?>
            <button class="btn btn--primary-dark filter-btn" data-filter="<?= htmlspecialchars($cat) ?>" aria-pressed="false">
                <?= htmlspecialchars($cat) ?>
            </button>
            <?php endforeach; ?>
        </div>

        <!-- Grid de obras -->
        <div class="obras-grid" id="obrasGrid">
            <?php foreach ($obras as $i => $obra): ?>
            <article class="obra-card fade-in" data-category="<?= htmlspecialchars($obra['categoria']) ?>">
                <!-- Imagem / placeholder -->
                <div class="obra-card__img" role="img" aria-label="Foto: <?= htmlspecialchars($obra['titulo']) ?>">
                    <?php if (!empty($obra['foto'])): ?>
                    <img src="<?= BASE_URL ?>/assets/img/obras/<?= htmlspecialchars($obra['foto']) ?>"
                         alt="<?= htmlspecialchars($obra['titulo']) ?> – <?= htmlspecialchars($obra['local']) ?>"
                         loading="lazy"
                         width="600" height="400">
                    <?php else: ?>
                    <div class="obra-card__placeholder" aria-hidden="true">
                        <i class="fa <?= $obra['icone'] ?>"></i>
                    </div>
                    <?php endif; ?>

                    <!-- Badge categoria -->
                    <span class="obra-card__badge"><?= htmlspecialchars($obra['categoria']) ?></span>

                    <!-- Overlay com info ao hover -->
                    <div class="obra-card__overlay" aria-hidden="true">
                        <i class="fa fa-search-plus"></i>
                    </div>
                </div>

                <!-- Corpo -->
                <div class="obra-card__body">
                    <h3 class="obra-card__title"><?= htmlspecialchars($obra['titulo']) ?></h3>
                    <p class="obra-card__local">
                        <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                        <?= htmlspecialchars($obra['local']) ?>
                    </p>
                    <p class="obra-card__desc"><?= htmlspecialchars($obra['desc']) ?></p>
                    <a href="https://wa.me/<?= SITE_WHATSAPP ?>?text=<?= urlencode('Olá! Vi a obra "' . $obra['titulo'] . '" no portfólio e gostaria de solicitar um orçamento similar.') ?>"
                       target="_blank" rel="noopener noreferrer"
                       class="obra-card__cta">
                        <i class="fab fa-whatsapp" aria-hidden="true"></i> Solicitar similar
                    </a>
                </div>
            </article>
            <?php endforeach; ?>
        </div><!-- /#obrasGrid -->

        <!-- Mensagem quando filtro não retorna resultados -->
        <p class="obras-empty" id="obrasEmpty" hidden aria-live="polite">
            Nenhuma obra encontrada para esta categoria.
        </p>
    </div>
</section>

<!-- Lightbox -->
<div class="lightbox" id="lightbox" role="dialog" aria-modal="true" aria-label="Visualizador de imagens" hidden>
    <button class="lightbox__close" id="lightboxClose" aria-label="Fechar visualizador">
        <i class="fa fa-times" aria-hidden="true"></i>
    </button>
    <button class="lightbox__nav lightbox__nav--prev" id="lightboxPrev" aria-label="Imagem anterior">
        <i class="fa fa-chevron-left" aria-hidden="true"></i>
    </button>
    <div class="lightbox__inner">
        <img src="" alt="" id="lightboxImg" class="lightbox__img">
        <div class="lightbox__caption" id="lightboxCaption"></div>
    </div>
    <button class="lightbox__nav lightbox__nav--next" id="lightboxNext" aria-label="Próxima imagem">
        <i class="fa fa-chevron-right" aria-hidden="true"></i>
    </button>
    <div class="lightbox__backdrop" id="lightboxBackdrop" aria-hidden="true"></div>
</div>

<!-- Como trabalhamos -->
<section class="section section--light" aria-labelledby="processo-titulo">
    <div class="container">
        <div class="section__header">
            <div class="section__tag">Processo</div>
            <h2 class="section__title" id="processo-titulo">Como executamos cada obra</h2>
            <p class="section__subtitle">Do primeiro contato à entrega final, seguimos um processo estruturado que garante qualidade e prazo.</p>
        </div>
        <div class="processo-grid">
            <?php
            $etapas = [
                ['fa-comments',       '01', 'Diagnóstico',      'Visita técnica gratuita para avaliação do serviço e levantamento preciso das necessidades.'],
                ['fa-file-alt',       '02', 'Proposta',         'Orçamento detalhado com escopo, materiais, prazo e condições de pagamento transparentes.'],
                ['fa-hard-hat',       '03', 'Execução',         'Equipe especializada em campo com gestão de qualidade e acompanhamento em cada etapa.'],
                ['fa-clipboard-check','04', 'Entrega',          'Vistoria final com o cliente, documentação técnica e garantia sobre os serviços executados.'],
            ];
            foreach ($etapas as $etapa): ?>
            <div class="processo-card fade-in">
                <div class="processo-card__num" aria-hidden="true"><?= $etapa[1] ?></div>
                <div class="processo-card__icon" aria-hidden="true">
                    <i class="fa <?= $etapa[0] ?>"></i>
                </div>
                <h3><?= $etapa[2] ?></h3>
                <p><?= $etapa[3] ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-banner" aria-labelledby="cta-obras-titulo">
    <div class="container">
        <h2 id="cta-obras-titulo">Quer uma obra como essas?</h2>
        <p>Entre em contato e receba um orçamento personalizado sem compromisso.</p>
        <div class="btn-group">
            <a href="https://wa.me/<?= SITE_WHATSAPP ?>?text=<?= urlencode('Olá! Vi o portfólio de obras e gostaria de solicitar um orçamento.') ?>"
               target="_blank" rel="noopener noreferrer"
               class="btn btn--primary">
                <i class="fab fa-whatsapp" aria-hidden="true"></i> Chamar no WhatsApp
            </a>
            <a href="<?= BASE_URL ?>/contato" class="btn btn--outline">
                <i class="fa fa-envelope" aria-hidden="true"></i> Enviar Mensagem
            </a>
        </div>
    </div>
</section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

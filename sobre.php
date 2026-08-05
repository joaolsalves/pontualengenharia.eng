<?php
$page_title       = 'Quem Somos | Empresa de Engenharia no RJ';
$meta_description = 'Conhe�a a Pontual Engenharia � empresa especializada em engenharia, constru��o e manuten��o predial no RJ, com mais de 10 anos de experi�ncia atendendo Rio de Janeiro e regi�o.';
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">

<div class="page-hero">
    <div class="container">
        <h1>Quem Somos</h1>
        <p>Comprometidos com qualidade, eficiência e a satisfação dos nossos clientes</p>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?= BASE_URL ?>/">Início</a>
            <i class="fa fa-chevron-right"></i>
            <span>Quem Somos</span>
        </nav>
    </div>
</div>

<!-- Sobre -->
<section class="section">
    <div class="container">
        <div class="about__grid">
            <div class="about__image-wrap fade-in">
                <div class="img-placeholder">
                    <i class="fa fa-hard-hat"></i>
                </div>
                <div class="about__badge">
                    <strong>+10</strong>
                    Anos no mercado
                </div>
            </div>
            <div class="about__content fade-in">
                <div class="section__tag">Nossa história</div>
                <h2 class="section__title">Engenharia com precisão e compromisso</h2>
                <p class="about__text">
                    Na Pontual Engenharia, desenvolvemos <strong>soluções completas em engenharia, construção civil,
                    gerenciamento de obras, instalações e manutenção predial</strong>, unindo conhecimento técnico,
                    inovação e compromisso com a excelência em cada projeto.
                </p>
                <p class="about__text">
                    Nossa equipe é formada por <strong>profissionais qualificados</strong> que somam mais de
                    <strong>10 anos de experiência</strong> na gestão e execução de obras, manutenção de sistemas prediais,
                    instalações elétricas e hidráulicas, climatização, manutenção de geradores e demais serviços
                    técnicos de engenharia.
                </p>
                <p class="about__text">
                    Atuamos desde a <strong>consultoria e elaboração de projetos</strong> até a execução,
                    gerenciamento e manutenção preventiva e corretiva, oferecendo um atendimento integrado que garante
                    mais segurança, eficiência operacional e otimização de custos para nossos clientes.
                </p>
                <p class="about__text">
                    Complementamos nossas soluções com <strong>serviços especializados de conservação de áreas externas,
                    jardinagem e paisagismo</strong>, contribuindo para a funcionalidade, valorização e preservação de
                    patrimônios residenciais, comerciais, industriais e condomínios.
                </p>
                <p class="about__text">
                    Mais do que executar serviços, entregamos <strong>soluções em engenharia com responsabilidade técnica,
                    qualidade e compromisso</strong>, construindo relações de confiança e resultados duradouros.
                </p>
                <ul class="about__list">
                    <li><i class="fa fa-check-circle"></i> Soluções eficientes e atendimento personalizado</li>
                    <li><i class="fa fa-check-circle"></i> Comprometimento, responsabilidade e atenção aos detalhes</li>
                    <li><i class="fa fa-check-circle"></i> Serviços de alta qualidade em todos os portes</li>
                    <li><i class="fa fa-check-circle"></i> Satisfação e confiança garantidas</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Missão, Visão e Valores -->
<section class="section section--light">
    <div class="container">
        <div class="section__header">
            <div class="section__tag">Identidade</div>
            <h2 class="section__title">Missão, Visão e Valores</h2>
        </div>

        <!-- Missão e Visão -->
        <div class="mv-grid">
            <div class="value-card fade-in">
                <i class="fa fa-bullseye"></i>
                <h3>Missão</h3>
                <p>Transformar desafios em soluções de engenharia, entregando obras, projetos e serviços de manutenção com <strong>excelência, responsabilidade técnica</strong> e compromisso absoluto com a qualidade, a segurança e a confiança de nossos clientes.</p>
            </div>
            <div class="value-card fade-in">
                <i class="fa fa-eye"></i>
                <h3>Visão</h3>
                <p>Ser reconhecida como referência em <strong>soluções de engenharia, construção e manutenção predial</strong>, destacando-se pela excelência, inovação, confiabilidade e compromisso com a qualidade em cada projeto.</p>
            </div>
        </div>

        <!-- Valores -->
        <div class="section__header mt-section mb-section">
            <h3 class="section__title section__title--sm">Nossos Valores</h3>
        </div>
        <div class="values__grid">
            <?php
            $values = [
                ['fa-medal',        'Qualidade e Excelência',       'Executar serviços com alto padrão técnico e atenção aos detalhes.'],
                ['fa-handshake',    'Compromisso com o Cliente',     'Ouvir, entender e atender cada necessidade com profissionalismo e transparência.'],
                ['fa-chart-line',   'Eficiência e Resultados',       'Buscar sempre soluções que otimizem recursos e reduzam custos operacionais.'],
                ['fa-leaf',         'Sustentabilidade',              'Promover práticas responsáveis na manutenção, engenharia e conservação de áreas verdes.'],
                ['fa-balance-scale','Ética e Transparência',         'Conduzir todas as relações com integridade e respeito.'],
                ['fa-lightbulb',    'Inovação e Melhoria Contínua',  'Aprimorar constantemente processos, técnicas e serviços.'],
                ['fa-shield-alt',   'Responsabilidade e Segurança',  'Garantir serviços confiáveis, seguros e duradouros.'],
            ];
            foreach ($values as [$icon, $title, $desc]): ?>
            <div class="value-card fade-in">
                <i class="fa <?= $icon ?>"></i>
                <h3><?= $title ?></h3>
                <p><?= $desc ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- Equipe -->
<section class="section">
    <div class="container">
        <div class="section__header">
            <div class="section__tag">Nosso time</div>
            <h2 class="section__title">A equipe por trás dos projetos</h2>
            <p class="section__subtitle">Profissionais especializados comprometidos com qualidade técnica e eficiência operacional.</p>
        </div>
        <div class="team__grid">
            <div class="team-card fade-in team-card--highlight">
                <div class="team-card__avatar"><i class="fa fa-user-tie"></i></div>
                <h3>Samuel de Oliveira</h3>
                <span>Diretor de Operações</span>
                <p class="team-card__bio">
                    Formado em Engenharia Civil e Administração, com aproximadamente 10 anos de experiência
                    em manutenção predial, elétrica e mecânica (geradores e climatização). Sólida experiência em
                    elaboração, planejamento e execução de projetos de engenharia civil, gestão de obras e
                    manutenções preventivas e corretivas em instalações prediais.
                </p>
            </div>
            <?php
            $team = [
                ['fa-bolt',            'Engenheiro Eletricista',          'Especialista em sistemas elétricos prediais, quadros e diagnóstico de falhas.'],
                ['fa-drafting-compass','Engenheiro Civil',                 'Elaboração e acompanhamento de projetos estruturais e obras civis.'],
                ['fa-cogs',            'Engenheiro Mecânico',              'Especialista em geradores, sistemas de climatização e mecânica predial.'],
                ['fa-ruler-combined',  'Técnico em Edificações e Cadista', 'Elaboração de plantas, detalhamentos técnicos e documentação de projetos.'],
            ];
            foreach ($team as [$icon, $role, $desc]): ?>
            <div class="team-card fade-in">
                <div class="team-card__avatar"><i class="fa <?= $icon ?>"></i></div>
                <h3><?= $role ?></h3>
                <span>Equipe Técnica</span>
                <p class="team-card__bio"><?= $desc ?></p>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="cta-banner">
    <div class="container">
        <h2>Vamos trabalhar juntos?</h2>
        <p>Entre em contato e descubra como a Pontual Engenharia pode ajudar no seu projeto.</p>
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

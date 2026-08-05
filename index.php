<?php
$page_title       = 'Engenharia e Manutenção Predial em Rio de Janeiro, Duque de Caxias, Petrópolis e Região';
$meta_description = 'Pontual Engenharia: constru��o civil, projetos, instala��es el�tricas e hidr�ulicas, climatiza��o, SPDA e manuten��o predial em Rio de Janeiro, Duque de Caxias, Petr�polis, Teres�polis e regi�o.';
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">

<!-- Hero -->
<section class="hero">
    <div class="hero__bg-pattern"></div>
    <div class="hero__shapes"><span></span><span></span><span></span></div>
    <div class="container">
        <div class="hero__content fade-in">
            <div class="hero__tag"><i class="fa fa-drafting-compass"></i> Precisão que Constrói Confiança</div>
            <h1 class="hero__title">
                Soluções completas em<br>
                <span>Engenharia</span>
            </h1>
            <p class="hero__text">
                Projetamos, construímos, gerenciamos e mantemos empreendimentos com
                <strong>excelência, responsabilidade técnica</strong> e compromisso com resultados.
            </p>
            <p class="hero__text" style="margin-top:-16px;">
                Nossa atuação reúne construção civil, gerenciamento de obras, projetos de engenharia,
                instalações elétricas e hidráulicas, climatização, SPDA e manutenção predial preventiva e corretiva —
                oferecendo um único parceiro para todas as etapas do seu empreendimento.
            </p>
            <p class="hero__text" style="margin-top:-16px;font-weight:600;color:#fff;">
                Mais do que executar serviços, entregamos segurança, qualidade e confiança em cada projeto.
            </p>
            <div class="hero__actions">
                <a href="<?= BASE_URL ?>/servicos" class="btn btn--primary"><i class="fa fa-tools"></i> Nossos Serviços</a>
                <a href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank" rel="noopener noreferrer" class="btn btn--outline">
                    <i class="fab fa-whatsapp"></i> Fale no WhatsApp
                </a>
            </div>
            <div class="hero__stats">
                <div class="hero__stat"><strong><span data-count="10" data-suffix="+">10+</span></strong><span>Anos de experiência</span></div>
                <div class="hero__stat"><strong><span data-count="4" data-suffix="">4</span></strong><span>Engenheiros especializados</span></div>
                <div class="hero__stat"><strong><span data-count="6" data-suffix="">6</span></strong><span>Áreas de atuação</span></div>
                <div class="hero__stat"><strong><span data-count="100" data-suffix="%">100%</span></strong><span>Comprometidos</span></div>
            </div>
        </div>
    </div>
</section>

<!-- Serviços preview -->
<section class="section">
    <div class="container">
        <div class="section__header">
            <div class="section__tag">O que fazemos</div>
            <h2 class="section__title">Nossos Serviços</h2>
            <p class="section__subtitle">Oferecemos soluções completas, desde pequenos reparos até a elaboração e execução de projetos técnicos.</p>
        </div>
        <div class="services__grid">
            <?php
            $services = [
                ['fa-building',        'Manutenção Predial',             'Manutenção preventiva e corretiva, reparos estruturais, serviços gerais de conservação e diagnóstico técnico de instalações.'],
                ['fa-bolt',            'Serviços Elétricos',             'Manutenção e reparo de sistemas elétricos prediais, instalação de quadros elétricos e diagnóstico de falhas.'],
                ['fa-snowflake',       'Sistemas de Climatização',       'Instalação, manutenção e limpeza de ar-condicionado, com avaliação de eficiência dos equipamentos.'],
                ['fa-cogs',            'Geradores e Sistemas Mecânicos', 'Manutenção preventiva e corretiva de geradores, inspeção, testes operacionais e reparo de sistemas mecânicos.'],
                ['fa-drafting-compass','Projetos de Engenharia Civil',   'Elaboração e execução de projetos, acompanhamento técnico de obras e gestão de serviços de construção e reforma.'],
                ['fa-leaf',            'Jardinagem e Áreas Verdes',      'Manutenção de jardins, poda de plantas e árvores, conservação de espaços externos e paisagismo básico.'],
            ];
            foreach ($services as [$icon, $title, $desc]): ?>
            <div class="service-card fade-in">
                <div class="service-card__icon"><i class="fa <?= $icon ?>"></i></div>
                <h3><?= $title ?></h3>
                <p><?= $desc ?></p>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center-mt">
            <a href="<?= BASE_URL ?>/servicos" class="btn btn--primary-dark">Ver todos os serviços <i class="fa fa-arrow-right"></i></a>
        </div>
    </div>
</section>

<!-- Numbers strip -->
<div class="numbers">
    <div class="container">
        <div class="numbers__grid">
            <div class="numbers__item"><strong><span data-count="10" data-suffix="+ anos">10+ anos</span></strong><span>de Experiência</span></div>
            <div class="numbers__item"><strong><span data-count="4" data-suffix="">4</span></strong><span>Engenheiros na Equipe</span></div>
            <div class="numbers__item"><strong><span data-count="6" data-suffix="">6</span></strong><span>Áreas de Atuação</span></div>
            <div class="numbers__item"><strong><span data-count="4" data-suffix="">4</span></strong><span>Segmentos Atendidos</span></div>
        </div>
    </div>
</div>

<!-- Quem somos preview -->
<section class="section section--light">
    <div class="container">
        <div class="about__grid">
            <div class="about__image-wrap fade-in">
                <div class="img-placeholder" role="img" aria-label="Pontual Engenharia"><i class="fa fa-hard-hat" aria-hidden="true"></i></div>
                <div class="about__badge"><strong>+10</strong>Anos de experiência</div>
            </div>
            <div class="about__content fade-in">
                <div class="section__tag">Quem somos</div>
                <h2 class="section__title">Soluções completas com quem entende do assunto</h2>
                <p class="about__text">Somos especializados em <strong>serviços de engenharia, manutenção predial e conservação de áreas externas</strong>, oferecendo soluções completas para atender às necessidades de nossos clientes com eficiência, qualidade e profissionalismo.</p>
                <p class="about__text">Contamos com profissionais com formação em <strong>Engenharia Civil e Administração</strong>, com mais de 10 anos de experiência em manutenção predial, elétrica e mecânica — incluindo geradores, sistemas de ar-condicionado e execução de projetos na construção civil.</p>
                <ul class="about__list">
                    <li><i class="fa fa-check-circle"></i> Do pequeno reparo à execução de projetos completos</li>
                    <li><i class="fa fa-check-circle"></i> Foco em segurança, desempenho e otimização de custos</li>
                    <li><i class="fa fa-check-circle"></i> Atendimento personalizado em cada etapa</li>
                    <li><i class="fa fa-check-circle"></i> Equipe com Eng. Civil, Elétrico, Mecânico e Técnico Cadista</li>
                </ul>
                <a href="<?= BASE_URL ?>/sobre" class="btn btn--primary-dark">Conheça nossa história <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<!-- Segmentos atendidos -->
<section class="section">
    <div class="container">
        <div class="section__header">
            <div class="section__tag">Atendemos também</div>
            <h2 class="section__title">Quem atendemos</h2>
            <p class="section__subtitle">Nossa expertise abrange empresas privadas, órgãos públicos e instituições dos mais variados segmentos.</p>
        </div>
        <div class="services__grid">
            <?php
            $segments = [
                ['fa-landmark', 'Prefeituras e Órgãos Públicos', 'Atendemos órgãos municipais e entidades públicas com serviços de engenharia e manutenção de alto padrão.'],
                ['fa-hospital', 'Clínicas e Hospitais',          'Manutenção predial e elétrica para ambientes de saúde que exigem segurança, agilidade e conformidade técnica.'],
                ['fa-church',   'Instituições Religiosas',       'Conservação, reparos e projetos para igrejas, templos e centros comunitários de todos os portes.'],
                ['fa-school',   'Colégios e Universidades',      'Manutenção preventiva e corretiva em ambientes educacionais, garantindo segurança e conforto.'],
                ['fa-store',    'Comércio e Varejo',             'Serviços ágeis para lojas, supermercados e estabelecimentos comerciais como am/pm, Nalin e ChinaTown.'],
                ['fa-industry', 'Indústria e Logística',         'Manutenção de galpões, plantas industriais e instalações de grande porte com gestão técnica especializada.'],
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

<!-- CTA Banner -->
<section class="cta-banner">
    <div class="container">
        <h2>Pronto para resolver seu problema?</h2>
        <p>Entre em contato agora e receba um orçamento sem compromisso. Respondemos em até 24h.</p>
        <div class="btn-group">
            <a href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank" rel="noopener noreferrer" class="btn btn--primary">
                <i class="fab fa-whatsapp"></i> Chamar no WhatsApp
            </a>
            <a href="<?= BASE_URL ?>/contato" class="btn btn--outline">
                <i class="fa fa-envelope"></i> Enviar Mensagem
            </a>
        </div>
    </div>
</section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

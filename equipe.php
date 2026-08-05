<?php
$page_title       = 'Nossa Equipe de Engenheiros | Pontual Engenharia RJ';
$meta_description = 'Equipe da Pontual Engenharia: engenheiros civil, el�trico e mec�nico com mais de 10 anos de experi�ncia atendendo Rio de Janeiro, Duque de Caxias, Petr�polis, Teres�polis e regi�o.';
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">

<div class="page-hero">
    <div class="container">
        <h1>Nossa Equipe</h1>
        <p>Profissionais especializados comprometidos com qualidade e eficiência</p>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?= BASE_URL ?>/">Início</a>
            <i class="fa fa-chevron-right"></i>
            <span>Equipe</span>
        </nav>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="section__header">
            <div class="section__tag">Nosso time</div>
            <h2 class="section__title">Quem está por trás de cada projeto</h2>
            <p class="section__subtitle">Uma equipe multidisciplinar com formação técnica sólida e anos de experiência no campo.</p>
        </div>

        <!-- Diretor em destaque -->
        <div class="director-card fade-in">
            <div class="director-card__avatar"><i class="fa fa-user-tie"></i></div>
            <div class="director-card__content">
                <div class="section__tag">Liderança</div>
                <h3>Samuel de Oliveira</h3>
                <p class="director-card__role">Diretor de Operações | Eng. Civil &amp; Administrador</p>
                <p>
                    Profissional formado em <strong>Engenharia Civil e Administração</strong>, com aproximadamente
                    <strong>10 anos de experiência</strong> nas áreas de manutenção predial, elétrica e mecânica
                    (geradores e sistemas de ar condicionado).
                </p>
                <p>
                    Ao longo da carreira, desenvolveu sólida experiência na elaboração, planejamento e execução de
                    projetos de engenharia na construção civil, além da gestão de obras e acompanhamento de
                    manutenções preventivas e corretivas em instalações prediais.
                </p>
                <p>
                    Possui forte capacidade de gestão técnica e administrativa, integrando conhecimentos de engenharia
                    com práticas de administração para otimizar processos, reduzir custos operacionais e garantir
                    eficiência e segurança nas operações.
                </p>
                <div class="director-card__skills">
                    <span><i class="fa fa-check-circle"></i> Manutenção predial, elétrica e mecânica</span>
                    <span><i class="fa fa-check-circle"></i> Geradores e sistemas de climatização</span>
                    <span><i class="fa fa-check-circle"></i> Execução de projetos de engenharia civil</span>
                    <span><i class="fa fa-check-circle"></i> Gestão de manutenção preventiva e corretiva</span>
                    <span><i class="fa fa-check-circle"></i> Coordenação de equipes e acompanhamento de obras</span>
                </div>
            </div>
        </div>

        <!-- Equipe técnica -->
        <div class="section__header mt-section mb-section">
            <div class="section__tag">Equipe técnica</div>
            <h3 class="section__title section__title--sm">Contamos também com:</h3>
        </div>
        <div class="team__grid">
            <?php
            $team = [
                ['fa-bolt',           'Engenheiro Eletricista',          'Especialista em sistemas elétricos prediais, instalação e adequação de quadros, diagnóstico e correção de falhas elétricas.'],
                ['fa-drafting-compass','Engenheiro Civil',                'Elaboração e acompanhamento de projetos estruturais, obras de construção e reforma, com foco em segurança e qualidade.'],
                ['fa-cogs',           'Engenheiro Mecânico',             'Especialista em geradores, sistemas de climatização e mecânica predial — manutenção preventiva e corretiva.'],
                ['fa-ruler-combined', 'Técnico em Edificações e Cadista', 'Elaboração de plantas técnicas, detalhamentos e documentação de projetos de engenharia e arquitetura.'],
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

<section class="cta-banner">
    <div class="container">
        <h2>Fale diretamente com nossa equipe</h2>
        <p>Estamos prontos para atender você com agilidade e expertise técnica.</p>
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

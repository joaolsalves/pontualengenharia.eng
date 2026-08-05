<?php
$page_title       = 'Página não encontrada';
$meta_description = 'A página que você procura não foi encontrada.';
http_response_code(404);
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">

<section class="page-404">
    <div class="container">
        <div class="page-404__code">404</div>
        <h1 class="page-404__title">Página não encontrada</h1>
        <p class="page-404__text">A página que você está procurando não existe ou foi movida.</p>
        <a href="<?= BASE_URL ?>/" class="btn btn--primary-dark">
            <i class="fa fa-home"></i> Voltar ao início
        </a>
    </div>
</section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

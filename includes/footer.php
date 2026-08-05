<?php $b = BASE_URL; ?>
<footer class="footer">
    <div class="container footer__grid">
        <div class="footer__brand">
            <a href="<?= $b ?>/" class="logo logo--light" aria-label="Pontual Engenharia – <?= SITE_SLOGAN ?>">
                <img src="<?= $b ?>/assets/img/logonomeslogam.png" alt="Pontual Engenharia" class="logo__img logo__img--light" loading="lazy" width="220" height="54">
            </a>
            <p>Soluções completas em engenharia, construção civil e manutenção predial em Rio de Janeiro, Duque de Caxias, Petrópolis, Teresópolis e região. <em><?= SITE_SLOGAN ?>.</em></p>
            <div class="footer__social">
                <a href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="mailto:<?= SITE_EMAIL ?>" aria-label="E-mail"><i class="fa fa-envelope"></i></a>
            </div>
        </div>

        <div class="footer__links">
            <h4>Links Rápidos</h4>
            <ul>
                <li><a href="<?= $b ?>/">Início</a></li>
                <li><a href="<?= $b ?>/sobre">Quem Somos</a></li>
                <li><a href="<?= $b ?>/servicos">Serviços</a></li>
                <li><a href="<?= $b ?>/obras">Obras Realizadas</a></li>
                <li><a href="<?= $b ?>/equipe">Nossa Equipe</a></li>
                <li><a href="<?= $b ?>/contato">Contato</a></li>
            </ul>
        </div>

        <div class="footer__services">
            <h4>Serviços</h4>
            <ul>
                <li><a href="<?= $b ?>/servicos">Manutenção Predial</a></li>
                <li><a href="<?= $b ?>/servicos">Serviços Elétricos</a></li>
                <li><a href="<?= $b ?>/servicos">Sistemas de Climatização</a></li>
                <li><a href="<?= $b ?>/servicos">Geradores e Mecânica</a></li>
                <li><a href="<?= $b ?>/servicos">Projetos de Engenharia Civil</a></li>
                <li><a href="<?= $b ?>/servicos">Jardinagem e Áreas Verdes</a></li>
            </ul>
        </div>

        <div class="footer__contact">
            <h4>Contato</h4>
            <ul>
                <li><i class="fa fa-map-marker-alt"></i> <?= SITE_ADDRESS ?></li>
                <li><i class="fa fa-phone"></i> <a href="tel:+<?= SITE_WHATSAPP ?>"><?= SITE_PHONE ?></a></li>
                <li><i class="fab fa-whatsapp"></i> <a href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank" rel="noopener noreferrer"><?= SITE_PHONE ?></a></li>
                <li><i class="fa fa-envelope"></i> <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></li>
            </ul>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="container">
            <p>&copy; <?= date('Y') ?> <?= SITE_NAME ?>. Todos os direitos reservados.</p>
            <p><?= SITE_SLOGAN ?></p>
        </div>
    </div>
</footer>

<script src="<?= $b ?>/assets/js/main.js" defer></script>
</body>
</html>

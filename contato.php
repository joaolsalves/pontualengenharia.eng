<?php
// use DEVE estar no escopo global (topo do arquivo, fora de qualquer bloco)
require_once __DIR__ . '/vendor/phpmailer/src/Exception.php';
require_once __DIR__ . '/vendor/phpmailer/src/PHPMailer.php';
require_once __DIR__ . '/vendor/phpmailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// ── AJAX POST: responde JSON antes de qualquer output HTML ────
$is_ajax = $_SERVER['REQUEST_METHOD'] === 'POST'
        && isset($_SERVER['HTTP_X_REQUESTED_WITH'])
        && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) === 'xmlhttprequest';

if ($is_ajax) {
    require_once __DIR__ . '/includes/config.php';
    require_once __DIR__ . '/includes/mail_config.php';

    header('Content-Type: application/json; charset=UTF-8');

    $name    = trim(strip_tags($_POST['name']    ?? ''));
    $email   = trim(strip_tags($_POST['email']   ?? ''));
    $phone   = trim(strip_tags($_POST['phone']   ?? ''));
    $subject = trim(strip_tags($_POST['subject'] ?? ''));
    $message = trim(strip_tags($_POST['message'] ?? ''));

    $errors = [];
    if (empty($name))                                                 $errors[] = 'Nome obrigatório.';
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = 'E-mail inválido.';
    if (empty($message))                                              $errors[] = 'Mensagem obrigatória.';

    if ($errors) {
        echo json_encode(['success' => false, 'message' => implode(' ', $errors)]);
        exit;
    }

    $mail = new PHPMailer(true);
    try {
        $mail->isSMTP();
        $mail->Host       = MAIL_HOST;
        $mail->SMTPAuth   = true;
        $mail->Username   = MAIL_USERNAME;
        $mail->Password   = MAIL_PASSWORD;
        $mail->SMTPSecure = MAIL_ENCRYPTION === 'ssl'
                            ? PHPMailer::ENCRYPTION_SMTPS
                            : PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = MAIL_PORT;
        $mail->CharSet    = 'UTF-8';
        $mail->Timeout    = 15;

        $mail->setFrom(MAIL_FROM, MAIL_FROM_NAME);
        $mail->addReplyTo($email, $name);
        $mail->addAddress(MAIL_TO, SITE_NAME);

        $assunto = $subject
            ? "[{$subject}] Contato via site – {$name}"
            : "Contato via site – {$name}";
        $mail->Subject = $assunto;
        $mail->isHTML(true);
        $mail->Body = "
        <div style='font-family:Arial,sans-serif;max-width:600px;margin:0 auto;'>
            <div style='background:#13434d;padding:20px 28px;border-radius:8px 8px 0 0;'>
                <h2 style='color:#58acac;margin:0;font-size:1.2rem;'>Nova mensagem via site</h2>
                <p style='color:rgba(255,255,255,.7);margin:4px 0 0;font-size:.85rem;'>Pontual Engenharia</p>
            </div>
            <div style='background:#f7f7f5;padding:28px;border-radius:0 0 8px 8px;'>
                <table style='width:100%;border-collapse:collapse;'>
                    <tr><td style='padding:8px 0;color:#5a7a7d;width:120px;'><strong>Nome</strong></td>
                        <td style='padding:8px 0;color:#1c2e30;'>" . htmlspecialchars($name) . "</td></tr>
                    <tr><td style='padding:8px 0;color:#5a7a7d;'><strong>E-mail</strong></td>
                        <td><a href='mailto:" . htmlspecialchars($email) . "' style='color:#178a8d;'>" . htmlspecialchars($email) . "</a></td></tr>
                    <tr><td style='padding:8px 0;color:#5a7a7d;'><strong>Telefone</strong></td>
                        <td style='color:#1c2e30;'>" . (empty($phone) ? '–' : htmlspecialchars($phone)) . "</td></tr>
                    <tr><td style='padding:8px 0;color:#5a7a7d;'><strong>Serviço</strong></td>
                        <td style='color:#1c2e30;'>" . (empty($subject) ? '–' : htmlspecialchars($subject)) . "</td></tr>
                </table>
                <hr style='border:none;border-top:1px solid #e5e7eb;margin:16px 0;'>
                <p style='color:#5a7a7d;margin:0 0 8px;'><strong>Mensagem:</strong></p>
                <p style='color:#1c2e30;line-height:1.7;white-space:pre-wrap;'>" . htmlspecialchars($message) . "</p>
            </div>
        </div>";
        $mail->AltBody = "Nome: {$name}\nE-mail: {$email}\nTelefone: {$phone}\nServiço: {$subject}\n\nMensagem:\n{$message}";

        $mail->send();
        echo json_encode(['success' => true, 'message' => 'Mensagem enviada com sucesso! Entraremos em contato em breve.']);

    } catch (Exception $e) {
        error_log('PHPMailer: ' . $mail->ErrorInfo);
        echo json_encode(['success' => false, 'message' => 'Erro ao enviar. Por favor, tente pelo WhatsApp ou e-mail diretamente.']);
    }
    exit;
}

// ── Renderização normal da página ─────────────────────────────
$page_title       = 'Contato | Orçamento de Engenharia em Rio de Janeiro e Região';
$meta_description = 'Entre em contato com a Pontual Engenharia. Solicite orçamento de construção, manutenção predial e instalações em Rio de Janeiro, Duque de Caxias, Petrópolis, Teresópolis e mais cidades do RJ.';
require_once __DIR__ . '/includes/header.php';
?>

<main id="main-content">

<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
        {
            "@type": "Question",
            "name": "Como solicitar um orçamento de manutenção predial?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Entre em contato pelo WhatsApp (21) 98953-4764, por e-mail ou preencha o formulário. Respondemos em até 24 horas."
            }
        },
        {
            "@type": "Question",
            "name": "Quais regiões do Rio de Janeiro a Pontual Engenharia atende?",
            "acceptedAnswer": {
                "@type": "Answer",
                "text": "Atendemos Rio de Janeiro, Magé, Duque de Caxias, Guapimirim, Petrópolis, Teresópolis, Angra dos Reis, Rio Claro e Barra Mansa."
            }
        }
    ]
}
</script>

<div class="page-hero">
    <div class="container">
        <h1>Entre em Contato</h1>
        <p>Solicite um orçamento ou tire suas dúvidas — respondemos em até 24h</p>
        <nav class="breadcrumb" aria-label="Breadcrumb">
            <a href="<?= BASE_URL ?>/">Início</a>
            <i class="fa fa-chevron-right"></i>
            <span>Contato</span>
        </nav>
    </div>
</div>

<section class="section">
    <div class="container">
        <div class="contact__grid">

            <!-- Info -->
            <div class="contact__info fade-in">
                <div class="section__tag">Fale conosco</div>
                <h2>Vamos conversar sobre seu projeto</h2>
                <p>Nossa equipe está pronta para atendê-lo. Use um dos canais abaixo ou preencha o formulário.</p>

                <div class="contact__items">
                    <div class="contact__item">
                        <div class="contact__item-icon"><i class="fa fa-map-marker-alt"></i></div>
                        <div class="contact__item-text">
                            <strong>Localização</strong>
                            <span><?= SITE_ADDRESS ?></span>
                        </div>
                    </div>
                    <div class="contact__item">
                        <div class="contact__item-icon"><i class="fa fa-phone"></i></div>
                        <div class="contact__item-text">
                            <strong>Comercial – Ligações</strong>
                            <span><a href="tel:+<?= SITE_WHATSAPP ?>"><?= SITE_PHONE ?></a></span>
                        </div>
                    </div>
                    <div class="contact__item">
                        <div class="contact__item-icon"><i class="fab fa-whatsapp"></i></div>
                        <div class="contact__item-text">
                            <strong>WhatsApp</strong>
                            <span>
                                <a href="https://wa.me/<?= SITE_WHATSAPP ?>?text=Olá! Gostaria de solicitar um orçamento."
                                   target="_blank" rel="noopener noreferrer"><?= SITE_PHONE ?></a>
                            </span>
                        </div>
                    </div>
                    <div class="contact__item">
                        <div class="contact__item-icon"><i class="fa fa-envelope"></i></div>
                        <div class="contact__item-text">
                            <strong>E-mail</strong>
                            <span><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></span>
                        </div>
                    </div>
                    <div class="contact__item">
                        <div class="contact__item-icon"><i class="fa fa-clock"></i></div>
                        <div class="contact__item-text">
                            <strong>Horário de atendimento</strong>
                            <span>Segunda a Sexta, das 8h às 18h</span>
                        </div>
                    </div>
                </div>

                <a href="https://wa.me/<?= SITE_WHATSAPP ?>?text=Olá! Gostaria de solicitar um orçamento."
                   target="_blank" rel="noopener noreferrer"
                   class="btn btn--primary btn--full">
                    <i class="fab fa-whatsapp"></i> Abrir conversa no WhatsApp
                </a>
            </div>

            <!-- Form -->
            <div class="fade-in">
                <div class="form-card">
                    <h3>Envie uma mensagem</h3>
                    <div id="formMsg" class="form__msg" style="display:none;"></div>
                    <form id="contactForm" class="form" novalidate>
                        <div class="form__row">
                            <div class="form__group">
                                <label for="name">Nome completo *</label>
                                <input type="text" id="name" name="name" placeholder="Seu nome" required>
                            </div>
                            <div class="form__group">
                                <label for="email">E-mail *</label>
                                <input type="email" id="email" name="email" placeholder="seu@email.com" required>
                            </div>
                        </div>
                        <div class="form__row">
                            <div class="form__group">
                                <label for="phone">Telefone / WhatsApp</label>
                                <input type="tel" id="phone" name="phone" placeholder="(21) 99999-9999">
                            </div>
                            <div class="form__group">
                                <label for="subject">Serviço de interesse</label>
                                <select id="subject" name="subject">
                                    <option value="">Selecione…</option>
                                    <option>Construções em Geral</option>
                                    <option>Consultoria de Obras</option>
                                    <option>Gerenciamento de Obras</option>
                                    <option>Projetos de Engenharia</option>
                                    <option>Instalações Elétricas</option>
                                    <option>Instalações Hidráulicas</option>
                                    <option>Climatização (Ar-condicionado)</option>
                                    <option>SPDA</option>
                                    <option>Manutenção Predial</option>
                                    <option>Outro</option>
                                </select>
                            </div>
                        </div>
                        <div class="form__group">
                            <label for="message">Mensagem *</label>
                            <textarea id="message" name="message" placeholder="Descreva sua necessidade ou projeto…" required></textarea>
                        </div>
                        <button type="submit" class="form__submit">
                            <i class="fa fa-paper-plane"></i> Enviar Mensagem
                        </button>
                        <p class="form__note">Seus dados estão seguros e não serão compartilhados.</p>
                    </form>
                </div><!-- /.form-card -->
            </div>

        </div>
    </div>
</section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

<?php
// ============================================================
//  Configuração SMTP – PHPMailer
//  PREENCHA com os dados do seu provedor de e-mail
// ============================================================

// --- Hostinger (use as credenciais do seu e-mail no painel) ---
define('MAIL_HOST',       'smtp.hostinger.com');   // ou smtp.gmail.com
define('MAIL_PORT',       465);                    // 465 SSL | 587 TLS
define('MAIL_ENCRYPTION', 'ssl');                  // 'ssl' ou 'tls'
define('MAIL_USERNAME',   'contato@jldatainfo.com'); // e-mail remetente
define('MAIL_PASSWORD',   'e2hq-9ph2-wopd-78ng');        // senha do e-mail
define('MAIL_FROM_NAME',  'Pontual Engenharia');
define('MAIL_FROM',       'nao-responder@jldatainfo.com');
define('MAIL_TO',         'joaomail@gmail.com');             // destino: pontual.engenhariaeconstrucao@gmail.com

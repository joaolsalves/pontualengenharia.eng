<?php
// ============================================================
//  Configuração SMTP – PHPMailer
//  COPIE este arquivo para mail_config.php e preencha os dados
// ============================================================
define('MAIL_HOST',       'smtp.hostinger.com');   // smtp.gmail.com | smtp.hostinger.com
define('MAIL_PORT',       465);                    // 465 = SSL | 587 = TLS
define('MAIL_ENCRYPTION', 'ssl');                  // 'ssl' ou 'tls'
define('MAIL_USERNAME',   'seuemail@seudominio.com.br');
define('MAIL_PASSWORD',   'sua_senha_aqui');
define('MAIL_FROM_NAME',  'Pontual Engenharia');
define('MAIL_FROM',       'seuemail@seudominio.com.br');
define('MAIL_TO',          SITE_EMAIL);

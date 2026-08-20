<?php
// ============================================================
//  Detecção automática de ambiente
//  – Hostinger / produção: site na raiz  → BASE_URL = ''
//  – XAMPP local:          site em /pontual → BASE_URL = '/pontual'
// ============================================================
$_host = $_SERVER['HTTP_HOST'] ?? 'localhost';
$_local_hosts = ['localhost', '127.0.0.1', '::1'];

if (in_array($_host, $_local_hosts)) {
    // Local: subfolder /pontual
    define('BASE_URL',  '/pontual');
    define('SITE_URL',  'http://localhost/pontual');
} else {
    // Produção (Hostinger): raiz do domínio
    define('BASE_URL',  '');
    define('SITE_URL',  'https://' . $_host);
}

define('SITE_NAME',      'Pontual Engenharia');
define('SITE_EMAIL',     'pontual.engenhariaeconstrucao@gmail.com');
define('SITE_PHONE',     '(21) 98953-4764');
define('SITE_WHATSAPP',  '5521989534764');
define('SITE_ADDRESS',   'Rio de Janeiro – RJ');
define('SITE_CITY',      'Rio de Janeiro');
define('SITE_STATE',     'RJ');
define('SITE_SLOGAN',    'Precisão que Constrói Confiança');

// Google Analytics 4 — coloque seu Measurement ID aqui (ex: 'G-XXXXXXXXXX')
define('GA_MEASUREMENT_ID', 'G-D9K4WX46CE');

// Cidades de atuação — usadas no SEO local
define('SITE_CITIES', 'Rio de Janeiro, Magé, Duque de Caxias, Guapimirim, Petrópolis, Teresópolis, Angra dos Reis, Rio Claro, Barra Mansa');
define('SITE_CITIES_SCHEMA', json_encode([
    'Rio de Janeiro', 'Magé', 'Duque de Caxias', 'Guapimirim',
    'Petrópolis', 'Teresópolis', 'Angra dos Reis', 'Rio Claro', 'Barra Mansa'
]));

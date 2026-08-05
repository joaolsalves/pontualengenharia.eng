<?php
/**
 * Sitemap XML dinâmico — acessível em /sitemap.xml via .htaccess
 */
require_once __DIR__ . '/includes/config.php';
header('Content-Type: application/xml; charset=UTF-8');

$pages = [
    ['loc' => '/',         'priority' => '1.0',  'changefreq' => 'weekly'],
    ['loc' => '/sobre',    'priority' => '0.8',  'changefreq' => 'monthly'],
    ['loc' => '/servicos', 'priority' => '0.9',  'changefreq' => 'monthly'],
    ['loc' => '/obras',    'priority' => '0.9',  'changefreq' => 'weekly'],
    ['loc' => '/equipe',   'priority' => '0.7',  'changefreq' => 'monthly'],
    ['loc' => '/contato',  'priority' => '0.8',  'changefreq' => 'monthly'],
];

$lastmod = date('Y-m-d');
echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $page): ?>
    <url>
        <loc><?= SITE_URL . $page['loc'] ?></loc>
        <lastmod><?= $lastmod ?></lastmod>
        <changefreq><?= $page['changefreq'] ?></changefreq>
        <priority><?= $page['priority'] ?></priority>
    </url>
<?php endforeach; ?>
</urlset>

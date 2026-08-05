# Deploy na Hostinger

## O que enviar
Envie **todos os arquivos e pastas** do projeto para a raiz `public_html/` da Hostinger:

```
public_html/
├── .htaccess
├── index.php
├── sobre.php
├── servicos.php
├── clientes.php
├── equipe.php
├── contato.php
├── projetos.php
├── 404.php
├── robots.txt
├── assets/
│   ├── css/style.css
│   ├── js/main.js
│   └── img/  (logo.svg, favicon.ico, clientes/*.svg ...)
└── includes/
    ├── config.php
    ├── header.php
    └── footer.php
```

## Checklist antes de publicar

- [ ] PHP >= 7.4 habilitado no painel da Hostinger
- [ ] `mod_rewrite` habilitado (já vem ativo na Hostinger)
- [ ] Arquivos enviados para `public_html/` (raiz), **não** para uma subpasta
- [ ] Permissões: pastas `755`, arquivos `644`

## Como o site detecta o ambiente

O `includes/config.php` detecta automaticamente:
- **localhost** → `BASE_URL = '/pontual'` (XAMPP local)
- **qualquer outro host** → `BASE_URL = ''` (Hostinger/produção)

Nenhuma alteração manual é necessária.

## Verificação pós-deploy

Acesse as URLs e confirme que carregam sem `.php`:
- `https://seudominio.com/`
- `https://seudominio.com/sobre`
- `https://seudominio.com/servicos`
- `https://seudominio.com/clientes`
- `https://seudominio.com/equipe`
- `https://seudominio.com/contato`

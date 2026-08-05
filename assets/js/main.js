// ============================================================
//  Pontual Engenharia – main.js  (performance optimized)
// ============================================================

document.addEventListener('DOMContentLoaded', () => {

    /* ---- Mobile nav toggle ---- */
    const toggle = document.getElementById('navToggle');
    const nav    = document.getElementById('mainNav');

    if (toggle && nav) {
        toggle.addEventListener('click', () => {
            const open = toggle.classList.toggle('open');
            nav.classList.toggle('open', open);
            toggle.setAttribute('aria-expanded', String(open));
        });

        document.addEventListener('click', (e) => {
            if (!toggle.contains(e.target) && !nav.contains(e.target)) {
                toggle.classList.remove('open');
                nav.classList.remove('open');
                toggle.setAttribute('aria-expanded', 'false');
            }
        }, { passive: true });
    }

    /* ---- Sticky header shadow ---- */
    const header = document.getElementById('header');
    if (header) {
        let ticking = false;
        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(() => {
                    header.classList.toggle('scrolled', window.scrollY > 40);
                    ticking = false;
                });
                ticking = true;
            }
        }, { passive: true });
    }

    /* ---- Intersection Observer: fade-in + counter ---- */
    const fadeEls   = document.querySelectorAll('.fade-in');
    const counters  = document.querySelectorAll('[data-count]');

    // Shared observer para fade-in
    if (fadeEls.length) {
        const fadeObserver = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1, rootMargin: '0px 0px -40px 0px' });

        fadeEls.forEach(el => fadeObserver.observe(el));
    }

    // Counter animation (só quando visível)
    if (counters.length) {
        const counterObserver = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    animateCounter(entry.target);
                    obs.unobserve(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(el => counterObserver.observe(el));
    }

    function animateCounter(el) {
        const target   = parseInt(el.getAttribute('data-count'), 10);
        const suffix   = el.getAttribute('data-suffix') || '';
        const duration = 1600;
        const steps    = 60;
        const increment = target / steps;
        let current = 0;
        let step    = 0;

        const timer = setInterval(() => {
            step++;
            current = Math.min(Math.round(increment * step), target);
            el.textContent = current + suffix;
            if (current >= target) clearInterval(timer);
        }, duration / steps);
    }

    /* ---- Contact form (AJAX) ---- */
    const form = document.getElementById('contactForm');
    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            const btn = form.querySelector('button[type="submit"]');
            const msg = document.getElementById('formMsg');
            const originalText = btn.textContent;

            btn.disabled = true;
            btn.textContent = 'Enviando…';

            try {
                const res  = await fetch(window.location.pathname, {
                    method: 'POST',
                    body: new FormData(form),
                    headers: { 'X-Requested-With': 'XMLHttpRequest' }
                });
                const data = await res.json();

                msg.className   = 'form__msg ' + (data.success ? 'form__msg--success' : 'form__msg--error');
                msg.textContent = data.message;
                msg.style.display = 'block';
                msg.scrollIntoView({ behavior: 'smooth', block: 'nearest' });

                if (data.success) form.reset();
            } catch {
                msg.className   = 'form__msg form__msg--error';
                msg.textContent = 'Erro ao enviar. Tente novamente.';
                msg.style.display = 'block';
            }

            btn.disabled    = false;
            btn.textContent = originalText;
        });
    }

    /* ---- Filter buttons (projetos.php) ---- */
    const filterBar = document.getElementById('filterBar');
    if (filterBar) {
        const cards = document.querySelectorAll('#projectsGrid .project-card');
        filterBar.addEventListener('click', (e) => {
            const btn = e.target.closest('.filter-btn');
            if (!btn) return;

            filterBar.querySelectorAll('.filter-btn').forEach(b => {
                b.classList.remove('active', 'btn--primary');
                b.classList.add('btn--primary-dark');
            });
            btn.classList.add('active', 'btn--primary');
            btn.classList.remove('btn--primary-dark');

            const filter = btn.dataset.filter;
            cards.forEach(card => {
                card.style.display = (filter === 'all' || card.dataset.category === filter) ? '' : 'none';
            });
        });
    }
});

/* ============================================================
   OBRAS – filtro + lightbox
   ============================================================ */
(function () {
    // ── Filtro de obras ──────────────────────────────────────
    const filterBar = document.querySelector('.filter-bar[role="group"]');
    const obrasGrid = document.getElementById('obrasGrid');
    const obrasEmpty = document.getElementById('obrasEmpty');

    if (filterBar && obrasGrid) {
        filterBar.addEventListener('click', (e) => {
            const btn = e.target.closest('.filter-btn');
            if (!btn) return;

            // Estado dos botões
            filterBar.querySelectorAll('.filter-btn').forEach(b => {
                b.classList.remove('active', 'btn--primary');
                b.classList.add('btn--primary-dark');
                b.setAttribute('aria-pressed', 'false');
            });
            btn.classList.add('active', 'btn--primary');
            btn.classList.remove('btn--primary-dark');
            btn.setAttribute('aria-pressed', 'true');

            const filter = btn.dataset.filter;
            const cards  = obrasGrid.querySelectorAll('.obra-card');
            let visible  = 0;

            cards.forEach(card => {
                const show = filter === 'all' || card.dataset.category === filter;
                card.style.display = show ? '' : 'none';
                if (show) visible++;
            });

            if (obrasEmpty) obrasEmpty.hidden = visible > 0;
        });
    }

    // ── Lightbox ────────────────────────────────────────────
    const lightbox   = document.getElementById('lightbox');
    if (!lightbox) return;

    const lbImg      = document.getElementById('lightboxImg');
    const lbCaption  = document.getElementById('lightboxCaption');
    const lbClose    = document.getElementById('lightboxClose');
    const lbPrev     = document.getElementById('lightboxPrev');
    const lbNext     = document.getElementById('lightboxNext');
    const lbBackdrop = document.getElementById('lightboxBackdrop');

    let images   = []; // { src, alt, caption }
    let current  = 0;

    function buildImageList() {
        images = [];
        document.querySelectorAll('.obra-card[style=""], .obra-card:not([style])').forEach(card => {
            const img = card.querySelector('.obra-card__img img');
            if (!img) return;
            const title = card.querySelector('.obra-card__title')?.textContent || '';
            const local = card.querySelector('.obra-card__local')?.textContent.trim() || '';
            images.push({ src: img.src, alt: img.alt, caption: `${title} — ${local}` });
        });
    }

    function openLightbox(index) {
        buildImageList();
        if (!images.length) return;
        current = index;
        showImage(current);
        lightbox.hidden = false;
        document.body.style.overflow = 'hidden';
        lbClose.focus();
    }

    function closeLightbox() {
        lightbox.hidden = true;
        document.body.style.overflow = '';
    }

    function showImage(idx) {
        if (!images[idx]) return;
        lbImg.src     = images[idx].src;
        lbImg.alt     = images[idx].alt;
        lbCaption.textContent = images[idx].caption;
        lbPrev.hidden = images.length <= 1;
        lbNext.hidden = images.length <= 1;
    }

    // Abrir ao clicar na imagem
    if (obrasGrid) {
        obrasGrid.addEventListener('click', (e) => {
            const imgWrap = e.target.closest('.obra-card__img');
            if (!imgWrap) return;
            const img = imgWrap.querySelector('img');
            if (!img) return; // placeholder sem foto real

            buildImageList();
            const allImgs = Array.from(
                document.querySelectorAll('.obra-card:not([style*="none"]) .obra-card__img img')
            );
            const idx = allImgs.indexOf(img);
            openLightbox(Math.max(0, idx));
        });
    }

    lbClose?.addEventListener('click', closeLightbox);
    lbBackdrop?.addEventListener('click', closeLightbox);

    lbPrev?.addEventListener('click', () => {
        current = (current - 1 + images.length) % images.length;
        showImage(current);
    });
    lbNext?.addEventListener('click', () => {
        current = (current + 1) % images.length;
        showImage(current);
    });

    // Teclado
    document.addEventListener('keydown', (e) => {
        if (lightbox.hidden) return;
        if (e.key === 'Escape')      closeLightbox();
        if (e.key === 'ArrowLeft')  { current = (current - 1 + images.length) % images.length; showImage(current); }
        if (e.key === 'ArrowRight') { current = (current + 1) % images.length; showImage(current); }
    });
})();

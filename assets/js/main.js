/* ─── NAVBAR ────────────────────────────────────────── */
const hamburger = document.getElementById('hamburger');
const navMenu   = document.getElementById('navMenu');
if (hamburger && navMenu) {
    hamburger.addEventListener('click', () => {
        const open = hamburger.classList.toggle('open');
        navMenu.classList.toggle('open', open);
    });
    document.addEventListener('click', e => {
        if (!hamburger.contains(e.target) && !navMenu.contains(e.target)) {
            hamburger.classList.remove('open');
            navMenu.classList.remove('open');
        }
    });
}

/* ─── SCROLL REVEAL ─────────────────────────────────── */
new IntersectionObserver((entries) => {
    entries.forEach((en, i) => {
        if (en.isIntersecting) {
            setTimeout(() => en.target.classList.add('visible'), i * 90);
        }
    });
}, { threshold: 0.1 }).observe ||
(() => {
    const io = new IntersectionObserver((entries) => {
        entries.forEach((en, i) => {
            if (en.isIntersecting) {
                setTimeout(() => en.target.classList.add('visible'), i * 90);
                io.unobserve(en.target);
            }
        });
    }, { threshold: 0.1 });
    document.querySelectorAll('.reveal').forEach(el => io.observe(el));
})();

// Clean version
const io = new IntersectionObserver((entries) => {
    entries.forEach((en, idx) => {
        if (!en.isIntersecting) return;
        setTimeout(() => en.target.classList.add('visible'), idx * 85);
        io.unobserve(en.target);
    });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal').forEach(el => io.observe(el));

/* ─── SLIDERS ────────────────────────────────────────── */
document.querySelectorAll('.slider-wrap').forEach(wrap => {
    const track  = wrap.querySelector('.slider-track');
    const slides = wrap.querySelectorAll('.slider-slide');
    if (!track || slides.length < 2) return;

    const dots = wrap.querySelectorAll('.slider-dot');
    const prev = wrap.querySelector('.slider-prev');
    const next = wrap.querySelector('.slider-next');
    let cur = 0, auto;

    const go = n => {
        cur = (n + slides.length) % slides.length;
        track.style.transform = `translateX(-${cur * 100}%)`;
        dots.forEach((d, i) => d.classList.toggle('on', i === cur));
    };

    const reset = () => { clearInterval(auto); auto = setInterval(() => go(cur + 1), 3400); };

    prev?.addEventListener('click', () => { go(cur - 1); reset(); });
    next?.addEventListener('click', () => { go(cur + 1); reset(); });
    dots.forEach((d, i) => d.addEventListener('click', () => { go(i); reset(); }));

    /* Touch / swipe */
    let sx = 0;
    wrap.addEventListener('touchstart', e => sx = e.touches[0].clientX, { passive: true });
    wrap.addEventListener('touchend',   e => {
        const dx = sx - e.changedTouches[0].clientX;
        if (Math.abs(dx) > 40) { go(dx > 0 ? cur + 1 : cur - 1); reset(); }
    });

    wrap.addEventListener('mouseenter', () => clearInterval(auto));
    wrap.addEventListener('mouseleave', () => reset());

    reset(); go(0);
});

/* ─── SKILL PILL COLORS ──────────────────────────────── */
const pillColors = ['#7B1F1F','#0F2347','#1A3566','#9E2A2A','#2A4B82','#5C1616'];
document.querySelectorAll('.skill-pill').forEach((p, i) => {
    p.addEventListener('mouseenter', () => {
        p.style.background    = pillColors[i % pillColors.length];
        p.style.borderColor   = pillColors[i % pillColors.length];
        p.style.color         = '#F6EDD9';
    });
    p.addEventListener('mouseleave', () => {
        p.style.background = '';
        p.style.borderColor = '';
        p.style.color = '';
    });
});

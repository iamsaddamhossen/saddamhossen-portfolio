/* Saddam Portfolio v6 */
(function () {
  'use strict';

  /* ── Sticky header ── */
  const hdr = document.getElementById('masthead');
  if (hdr) {
    const onScroll = () => hdr.classList.toggle('scrolled', window.scrollY > 40);
    window.addEventListener('scroll', onScroll, { passive: true });
    onScroll();
  }

  /* ── Mobile menu — FIXED: stop propagation prevents race condition ── */
  const toggleBtn = document.getElementById('menu-toggle');
  const menuIcon  = document.getElementById('menu-icon');
  const menu      = document.getElementById('primary-menu');

  if (toggleBtn && menu) {
    let menuOpen = false;

    function openMenu() {
      menuOpen = true;
      menu.classList.add('open');
      toggleBtn.setAttribute('aria-expanded', 'true');
      if (menuIcon) { menuIcon.className = 'fas fa-times'; }
      document.body.style.overflow = 'hidden';
    }

    function closeMenu() {
      menuOpen = false;
      menu.classList.remove('open');
      toggleBtn.setAttribute('aria-expanded', 'false');
      if (menuIcon) { menuIcon.className = 'fas fa-bars'; }
      document.body.style.overflow = '';
    }

    /* CRITICAL: stopPropagation prevents the document click from firing immediately */
    toggleBtn.addEventListener('click', function (e) {
      e.stopPropagation();
      menuOpen ? closeMenu() : openMenu();
    });

    /* Close when clicking a menu link */
    menu.querySelectorAll('a').forEach(a => {
      a.addEventListener('click', closeMenu);
    });

    /* Close on outside click */
    document.addEventListener('click', function (e) {
      if (menuOpen && !menu.contains(e.target) && e.target !== toggleBtn) {
        closeMenu();
      }
    });

    /* Close on Escape key */
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape' && menuOpen) closeMenu();
    });
  }

  /* ── Scroll reveal ── */
  const revealEls = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealEls.length) {
    const io = new IntersectionObserver(entries => {
      entries.forEach(e => {
        if (e.isIntersecting) { e.target.classList.add('in'); io.unobserve(e.target); }
      });
    }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' });
    revealEls.forEach(el => io.observe(el));
  } else {
    revealEls.forEach(el => el.classList.add('in'));
  }

  /* ── Smooth scroll ── */
  document.querySelectorAll('a[href*="#"]:not([href="#"])').forEach(a => {
    a.addEventListener('click', e => {
      try {
        if (a.hostname !== location.hostname) return;
        const target = document.querySelector(a.hash);
        if (!target) return;
        e.preventDefault();
        const offset = (hdr ? hdr.offsetHeight : 70) + 16;
        window.scrollTo({ top: target.getBoundingClientRect().top + window.scrollY - offset, behavior: 'smooth' });
      } catch (_) {}
    });
  });

  /* ── Portfolio filter ── */
  document.querySelectorAll('.f-btn').forEach(btn => {
    btn.addEventListener('click', () => {
      document.querySelectorAll('.f-btn').forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      const f = btn.dataset.filter;
      document.querySelectorAll('.proj-card').forEach(c => {
        c.style.display = (f === '*' || c.classList.contains(f.replace('.', ''))) ? '' : 'none';
      });
    });
  });

  /* ── Scroll to top ── */
  const topBtn = document.getElementById('scroll-top');
  if (topBtn) {
    window.addEventListener('scroll', () => {
      topBtn.classList.toggle('visible', window.scrollY > 400);
    }, { passive: true });
    topBtn.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  /* ── Contact form ── */
  const form = document.getElementById('contact-form');
  if (form) {
    form.addEventListener('submit', async e => {
      e.preventDefault();
      const btn  = form.querySelector('button[type="submit"]');
      const orig = btn.innerHTML;
      const name  = form.querySelector('[name="name"]')?.value.trim();
      const email = form.querySelector('[name="email"]')?.value.trim();
      const msg   = form.querySelector('[name="message"]')?.value.trim();
      if (!name || !email || !msg) { alert('Please fill in all required fields.'); return; }
      if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) { alert('Please enter a valid email.'); return; }
      btn.disabled = true;
      btn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending…';
      try {
        const res = await fetch(form.action, { method: 'POST', body: new FormData(form) });
        if (res.ok || res.redirected) {
          btn.innerHTML = '<i class="fas fa-check"></i> Sent!';
          form.reset();
          setTimeout(() => { btn.disabled = false; btn.innerHTML = orig; }, 4000);
        } else throw new Error();
      } catch {
        alert('Something went wrong. Email me directly: saddam.wp007@gmail.com');
        btn.disabled = false; btn.innerHTML = orig;
      }
    });
  }

})();

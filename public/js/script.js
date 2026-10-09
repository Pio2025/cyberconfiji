// Digital Fiji Forum 2026 — main script

document.addEventListener('DOMContentLoaded', function () {
  const navbar = document.getElementById('mainNavbar');

  function updateNavbarState() {
    if (window.scrollY > 40) {
      navbar.classList.add('is-scrolled');
    } else {
      navbar.classList.remove('is-scrolled');
    }
  }

  updateNavbarState();
  window.addEventListener('scroll', updateNavbarState, { passive: true });

  // Hero background slideshow — crossfade every 6s
  const slides = document.querySelectorAll('.hero-slide');
  if (slides.length > 1 && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    let current = 0;
    setInterval(function () {
      slides[current].classList.remove('is-active');
      current = (current + 1) % slides.length;
      slides[current].classList.add('is-active');
    }, 6000);
  }

  // Close mobile nav after clicking a link
  const navLinks = document.querySelectorAll('.main-navbar .nav-link');
  const collapseEl = document.getElementById('mainNavContent');
  navLinks.forEach(function (link) {
    link.addEventListener('click', function () {
      if (collapseEl.classList.contains('show')) {
        const bsCollapse = bootstrap.Collapse.getOrCreateInstance(collapseEl);
        bsCollapse.hide();
      }
    });
  });

  // Highlight active nav link based on section in view (home page only)
  const sections = document.querySelectorAll('main section[id]');
  const sectionLinks = document.querySelectorAll('.main-navbar .nav-link[data-section]');

  if (sections.length && sectionLinks.length) {
    const observer = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          const id = entry.target.getAttribute('id');
          sectionLinks.forEach(function (link) {
            link.classList.toggle('active', link.dataset.section === id);
          });
        }
      });
    }, { rootMargin: '-45% 0px -50% 0px' });

    sections.forEach(function (section) { observer.observe(section); });
  }

  // Speaker cards — tap to reveal on touch devices (hover handles the rest)
  if (window.matchMedia('(hover: none)').matches) {
    document.querySelectorAll('.speaker-card').forEach(function (card) {
      card.addEventListener('click', function () {
        document.querySelectorAll('.speaker-card.is-active').forEach(function (c) {
          if (c !== card) c.classList.remove('is-active');
        });
        card.classList.toggle('is-active');
      });
    });
  }

  // Current year in footer
  document.querySelectorAll('.js-year').forEach(function (el) {
    el.textContent = new Date().getFullYear();
  });

  // Contact form — client-side validation + fake submit (no backend)
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      if (!contactForm.checkValidity()) {
        contactForm.classList.add('was-validated');
        return;
      }
      contactForm.reset();
      contactForm.classList.remove('was-validated');
      const note = document.getElementById('formNote');
      if (note) {
        note.classList.remove('d-none');
        note.focus();
      }
    });
  }
});

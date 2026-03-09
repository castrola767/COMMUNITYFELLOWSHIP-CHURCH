/**
 * Community Fellowship Church – Kanyariri
 * main.js
 */
document.addEventListener('DOMContentLoaded', function () {

  // ── SCROLL HINT ARROW ──────────────────────────────────
  const scrollHint = document.querySelector('.scroll-hint');
  if (scrollHint) {
    scrollHint.addEventListener('click', function (e) {
      e.preventDefault();
      const target = document.getElementById('who-we-are');
      if (target) {
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      } else {
        window.scrollBy({ top: window.innerHeight * 0.85, behavior: 'smooth' });
      }
    });
    // Hide once user scrolls past hero
    window.addEventListener('scroll', function () {
      scrollHint.style.opacity = window.scrollY > 80 ? '0' : '1';
      scrollHint.style.pointerEvents = window.scrollY > 80 ? 'none' : 'auto';
      scrollHint.style.transition = 'opacity .4s';
    });
  }

  // ── HEADER SHADOW ON SCROLL ────────────────────────────
  const header = document.querySelector('.cfc-header');
  if (header) {
    window.addEventListener('scroll', () => {
      header.style.boxShadow = window.scrollY > 20
        ? '0 4px 28px rgba(0,0,0,.3)'
        : '0 2px 20px rgba(0,0,0,.25)';
    });
  }

  // ── FILTER BUTTONS (sermons & events) ──────────────────
  document.querySelectorAll('.filter-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      // Deactivate siblings
      this.closest('.filter-bar')
          .querySelectorAll('.filter-btn')
          .forEach(b => b.classList.remove('active'));
      this.classList.add('active');

      const filter = this.dataset.filter;
      const grid   = this.closest('section').querySelector('#sermonsGrid, #eventsGrid, .sermons-grid');
      if (!grid) return;

      grid.querySelectorAll('[data-category]').forEach(card => {
        const match = filter === 'all' || card.dataset.category === filter;
        card.style.display = match ? '' : 'none';
        if (match) {
          card.style.animation = 'none';
          void card.offsetWidth;
          card.style.animation = 'fadeUp .35s ease both';
        }
      });
    });
  });

  // ── AMOUNT BUTTONS (give.php) ──────────────────────────
  document.querySelectorAll('.amount-btn').forEach(btn => {
    btn.addEventListener('click', function () {
      document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('active'));
      this.classList.add('active');
      const c = document.getElementById('customAmount');
      if (c) c.value = '';
    });
  });

  document.querySelectorAll('.freq-tab').forEach(tab => {
    tab.addEventListener('click', function () {
      document.querySelectorAll('.freq-tab').forEach(t => t.classList.remove('active'));
      this.classList.add('active');
    });
  });

  // ── GIVE FORM (phone mandatory) ────────────────────────
  const giveForm = document.getElementById('giveForm');
  if (giveForm) {
    giveForm.addEventListener('submit', function (e) {
      e.preventDefault();

      // Validate phone
      const phone = this.querySelector('input[type="tel"]');
      if (!phone || phone.value.trim().length < 9) {
        phone.style.borderColor = '#e53e3e';
        phone.focus();
        let err = phone.parentElement.querySelector('.phone-error');
        if (!err) {
          err = document.createElement('small');
          err.className = 'phone-error';
          err.style.cssText = 'color:#e53e3e;font-size:.76rem;display:block;margin-top:.3rem;';
          err.textContent = '⚠️ Please enter your M-Pesa phone number to continue.';
          phone.parentElement.appendChild(err);
        }
        return;
      } else {
        phone.style.borderColor = '';
        const err = phone.parentElement.querySelector('.phone-error');
        if (err) err.remove();
      }

      // Get amount
      const activeBtn = document.querySelector('.amount-btn.active');
      const custom    = document.getElementById('customAmount');
      const amt = (custom && custom.value.trim())
        ? 'KES ' + custom.value.trim()
        : (activeBtn ? activeBtn.textContent.trim() : 'your gift');

      showSuccess('giveSuccess',
        `🙏 Thank you for your generous gift of ${amt}! We will process your M-Pesa payment shortly. God bless you!`);
      this.reset();
      document.querySelectorAll('.amount-btn').forEach(b => b.classList.remove('active'));
    });

    // Clear phone error on input
    const phoneInput = giveForm.querySelector('input[type="tel"]');
    if (phoneInput) {
      phoneInput.addEventListener('input', function () {
        this.style.borderColor = '';
        const err = this.parentElement.querySelector('.phone-error');
        if (err) err.remove();
      });
    }
  }

  // ── CONTACT FORM ───────────────────────────────────────
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      showSuccess('contactSuccess', '✅ Message sent! We\'ll get back to you soon. God bless you! 🙏');
      this.reset();
    });
  }

  // ── SHOW SUCCESS HELPER ────────────────────────────────
  function showSuccess(id, msg) {
    const el = document.getElementById(id);
    if (!el) return;
    el.textContent = msg;
    el.style.display = 'block';
    el.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    setTimeout(() => { el.style.display = 'none'; }, 8000);
  }

});

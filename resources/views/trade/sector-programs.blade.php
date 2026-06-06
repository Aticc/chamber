@extends('layouts.app')

@section('content')
@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 65%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 90%; height: 100%; background: url('{{ asset('assets/images/STRATEGIC SECTOR PROGRAMS.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>

  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Trade & Investment / Strategic Sector Programs</div>
    <h1 class="headline fade-up revealed">Strategic Sector <span class="gold-accent">Programs</span></h1>
    <div class="body-text fade-up delay-2 revealed">High-impact sectors driving systemic growth.</div>
  </div>
</div>

<!-- ========= CONTENT SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="sectors-grid">
      <div class="sector-card fade-up delay-1">
        <div class="sector-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 2L3 7l9 5 9-5-9-5z"/>
            <path d="M3 12l9 5 9-5"/>
            <path d="M3 17l9 5 9-5"/>
          </svg>
        </div>
        <h3>Agro-Industrial Value Chains</h3>
        <p>Moving from raw exports to localized processing, creating value addition and employment across agricultural value chains.</p>
      </div>
      <div class="sector-card fade-up delay-2">
        <div class="sector-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <rect x="3" y="3" width="18" height="18" rx="2"/>
            <path d="M9 8h6M9 12h6M9 16h4"/>
          </svg>
        </div>
        <h3>Energy & Critical Infrastructure</h3>
        <p>Powering the industrial base through structured energy and infrastructure investment.</p>
      </div>
      <div class="sector-card fade-up delay-3">
        <div class="sector-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
          </svg>
        </div>
        <h3>Digital Trade & Fintech</h3>
        <p>Enabling frictionless movement of value and facilitating international transactions.</p>
      </div>
      <div class="sector-card fade-up delay-1">
        <div class="sector-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <polyline points="14 2 14 8 20 8"/>
          </svg>
        </div>
        <h3>Manufacturing & Industrialization</h3>
        <p>Supporting industrial growth through capital deployment and market access.</p>
      </div>
      <div class="sector-card fade-up delay-2">
        <div class="sector-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
          </svg>
        </div>
        <h3>Logistics & Supply Chain</h3>
        <p>Optimizing trade flows through corridor development and logistics coordination.</p>
      </div>
      <div class="sector-card fade-up delay-3">
        <div class="sector-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
        </div>
        <h3>Technology & Innovation</h3>
        <p>Connecting institutional capital with technology-driven opportunities across Africa.</p>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
/* Using Global CSS Variables - No local :root override */

/* Section Background */
.full-width-white { 
  width: 100%; 
  background: var(--bg-white-2); 
  padding: 100px 0; 
  border-bottom: 1px solid var(--border-light);
}

/* Hero Section */
.hero-section {
  background-size: cover;
  background-repeat: no-repeat;
  min-height: 500px;
  display: flex;
  align-items: center;
  position: relative;
}

.hero-content {
  position: relative;
  z-index: 2;
  max-width: 700px;
  
  padding: 140px 40px 100px 40px;
}

.hero-content .breadcrumb {
  font-size: 12px;
  letter-spacing: 0.12em;
  text-transform: uppercase;
  color: var(--color-accent);
  font-weight: 500;
  margin-bottom: 25px;
}

.hero-content .headline {
  font-family: var(--font-heading);
  font-size: 64px;
  font-weight: 500;
  color: var(--color-text-lighter-2);
  margin-bottom: 25px;
  line-height: 1.15;
  letter-spacing: -0.02em;
}

.gold-accent {
  color: var(--color-accent);
}

.hero-content .body-text {
  font-size: 18px;
  color: var(--color-text-gray-2);
  max-width: 550px;
  line-height: 1.7;
  font-weight: 400;
}

/* Sectors Grid */
.wide-container {
  max-width: 1360px;
  margin: 0 auto;
  padding: 0 40px;
}

.sectors-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 35px;
  margin-top: 20px;
}

.sector-card {
  background: var(--bg-gray-2);
  border: 1px solid var(--border-light);
  border-bottom: 3px solid var(--color-accent);
  padding: 40px 32px;
  transition: all 0.3s ease;
}

.sector-card:hover {
  transform: translateY(-6px);
}

.sector-icon {
  margin-bottom: 25px;
  display: flex;
  align-items: center;
  justify-content: flex-start;
}

.sector-icon svg {
  color: var(--color-accent);
  width: 44px;
  height: 44px;
}

.sector-card h3 {
  font-size: 22px;
  font-weight: 500;
  color: var(--color-text-lighter-2);
  margin-bottom: 15px;
  line-height: 1.3;
}

.sector-card p {
  font-size: 15px;
  color: var(--color-text-gray);
  line-height: 1.7;
  margin: 0;
}

/* Animations */
.fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
  opacity: 0;
  transform: translateY(25px);
  transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
}

.fade-up.revealed, .fade-left.revealed, .fade-right.revealed, .scale-in.revealed, .glide-in.revealed {
  opacity: 1;
  transform: translateY(0);
}

.delay-1 { transition-delay: 0.1s; animation-delay: 0.1s; }
.delay-2 { transition-delay: 0.2s; animation-delay: 0.2s; }
.delay-3 { transition-delay: 0.3s; animation-delay: 0.3s; }

/* Responsive */
@media (max-width: 1200px) {
  .hero-content .headline { font-size: 52px; }
  .sectors-grid { gap: 25px; }
}

@media (max-width: 992px) {
  .sectors-grid { grid-template-columns: repeat(2, 1fr); }
  .hero-section { min-height: 420px; }
  .hero-content { margin-left: 5%; max-width: 80%; }
  .hero-content .headline { font-size: 42px; }
}

@media (max-width: 768px) {
  .wide-container { padding: 0 24px; }
  .hero-content { padding: 100px 24px 60px 24px; margin-left: 0; max-width: 100%; }
  .hero-content .headline { font-size: 36px; }
  .hero-content .body-text { font-size: 16px; }
  .full-width-white { padding: 60px 0; }
  .sectors-grid { grid-template-columns: 1fr; gap: 25px; }
  .sector-card { padding: 32px 25px; }
  .sector-card h3 { font-size: 20px; }
  .hero-section > div:first-child { opacity: 0.3; }
}

@media (max-width: 480px) {
  .hero-content .headline { font-size: 32px; }
  .sector-icon svg { width: 38px; height: 38px; }
}
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { 
      if (entry.isIntersecting) { 
        entry.target.classList.add('revealed'); 
        observer.unobserve(entry.target); 
      } 
    });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  
  // Immediately reveal hero elements that are visible
  const heroItems = document.querySelectorAll('.hero-section .fade-up');
  heroItems.forEach(el => {
    if (el.getBoundingClientRect().top < window.innerHeight - 50) {
      el.classList.add('revealed');
    }
  });
  
  window.addEventListener('scroll', function() { 
    const nav = document.getElementById('stickyNav'); 
    if (window.scrollY > 50) { 
      if (nav) nav.classList.add('scrolled'); 
      document.body.classList.add('nav-shrunk'); 
    } else { 
      if (nav) nav.classList.remove('scrolled'); 
      document.body.classList.remove('nav-shrunk'); 
    } 
  });
</script>

@endsection
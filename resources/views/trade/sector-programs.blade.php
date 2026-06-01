@extends('layouts.app')

@section('content')
@include('layouts.nav')

<!-- ========= HERO SECTION (styled like Trade & Investment) ========= -->
<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/ATICC image .png') }}'); background-position: 70% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Trade & Investment / Strategic Sector Programs</div>
    <h1 class="headline fade-up revealed">Strategic Sector <span style="color: #17015e;">Programs</span></h1>
    <div class="body-text fade-up delay-2 revealed">High-impact sectors driving systemic growth.</div>
  </div>
</div>

<!-- ========= CONTENT SECTION (styled with elegant services-grid, preserving original text) ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="sectors-grid">
      <div class="sector-card fade-up delay-1">
        <h3>Agro-Industrial Value Chains</h3>
        <p>Moving from raw exports to localized processing, creating value addition and employment across agricultural value chains.</p>
      </div>
      <div class="sector-card fade-up delay-2">
        <h3>Energy & Critical Infrastructure</h3>
        <p>Powering the industrial base through structured energy and infrastructure investment.</p>
      </div>
      <div class="sector-card fade-up delay-3">
        <h3>Digital Trade & Fintech</h3>
        <p>Enabling frictionless movement of value and facilitating international transactions.</p>
      </div>
      <div class="sector-card fade-up delay-1">
        <h3>Manufacturing & Industrialization</h3>
        <p>Supporting industrial growth through capital deployment and market access.</p>
      </div>
      <div class="sector-card fade-up delay-2">
        <h3>Logistics & Supply Chain</h3>
        <p>Optimizing trade flows through corridor development and logistics coordination.</p>
      </div>
      <div class="sector-card fade-up delay-3">
        <h3>Technology & Innovation</h3>
        <p>Connecting institutional capital with technology-driven opportunities across Africa.</p>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  :root {
    /* ========= BRAND COLORS - Light & Elegant ========= */
    --color-primary: #041931;
    --color-accent: #C49A6C;
    --color-accent-soft: #d4b08c;
    
    /* ========= TEXT COLORS - Soft & Readable ========= */
    --color-text-dark: #0e0e0e;
    --color-text-gray: #1a2c3e;
    --color-text-light: #3a4c5e;
    --color-text-lighter: #5d6f7f;
    --color-text-muted: #4a5b6b;
    --color-text-white: #ffffff;
    --color-text-offwhite: rgba(255,255,255,0.92);
    
    /* ========= BACKGROUND COLORS - Clean ========= */
    --bg-white: #ffffff;
    --bg-gray: #F5F6F8;
    --bg-card: #F8F9FA;
    
    /* ========= BORDER COLORS - Subtle ========= */
    --border-light: #e8eef2;
    --border-card: #E8EBED;
    
    /* ========= FONT WEIGHTS - Lighter ========= */
    --font-light: 300;
    --font-regular: 300;
    --font-medium: 500;
  }

  .full-width-white { width: 100%; background: var(--bg-white); padding: 80px 0; }
  
  /* Hero Section (exactly from the first style) */
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
    max-width: 900px;
    margin-left: 8%;
    padding: 40px 20px;
  }
  .hero-content .breadcrumb {
    font-size: 13px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--color-accent);
    font-weight: var(--font-regular);
  }
  .hero-content .headline {
    font-size: 58px;
    font-weight: 300;
    color: var(--color-text-white);
    margin: 20px 0 20px;
    line-height: 1.2;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  }
  .hero-content .headline span {
    color: var(--color-accent);
  }
  .hero-content .body-text {
    font-size: 18px;
    color: var(--color-text-offwhite);
    max-width: 620px;
    line-height: 1.5;
    font-weight: var(--font-light);
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  }
  
  /* Sectors Grid (styled like services-grid from first style) */
  .wide-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .sectors-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 20px;
  }
  .sector-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 35px 28px;
    transition: all 0.3s ease;
  }
  .sector-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-color: var(--color-accent-soft);
  }
  .sector-card h3 {
    font-size: 20px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 12px;
  }
  .sector-card p {
    font-size: 15px;
    color: var(--color-text-muted);
    line-height: 1.5;
    font-weight: var(--font-light);
  }
  
  /* Animations */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
  }
  .fade-up.revealed, .fade-left.revealed, .fade-right.revealed, .scale-in.revealed, .glide-in.revealed {
    opacity: 1;
    transform: translateY(0);
  }
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  
  @media (max-width: 992px) {
    .sectors-grid { grid-template-columns: repeat(2, 1fr); }
    .hero-content .headline { font-size: 48px; }
  }
  
  @media (max-width: 768px) {
    .full-width-white { padding: 50px 0; }
    .hero-content .headline { font-size: 42px; }
    .hero-section { min-height: 420px; background-position: 65% center !important; }
    .hero-content { margin-left: 5%; }
    .sectors-grid { grid-template-columns: 1fr; gap: 20px; }
    .sector-card { padding: 28px 22px; }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 34px; }
    .hero-content .body-text { font-size: 16px; }
  }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
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
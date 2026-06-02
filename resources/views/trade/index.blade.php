@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC image .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>

  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Trade & Investment</div>
    <h1 class="headline fade-up revealed">Trade & <span style="color: #17015e;">Investment</span></h1>
    <div class="body-text fade-up delay-2 revealed">Structured trade facilitation and investment coordination across African markets.</div>
  </div>
</div>

<!-- ========= OVERVIEW SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">TRADE & INVESTMENT</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Structured Market Access</h2>
    <p class="lead-text section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto 50px;">ATICC provides structured trade facilitation and investment coordination services for institutional partners seeking market access, capital deployment, and execution support across African and international markets.</p>
    
    <div class="services-grid">
      <div class="service-card fade-up delay-1">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <path d="M3 9l9-6 9 6-9 6-9-6z"/>
            <path d="M3 15l9 6 9-6"/>
          </svg>
        </div>
        <h3>Trade Facilitation</h3>
        <p>Technical infrastructure for cross-border trade, regulatory navigation, and documentation optimization.</p>
        <a href="{{ route('trade.facilitation') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card fade-up delay-2">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
        </div>
        <h3>Investment Coordination</h3>
        <p>Connecting institutional capital with vetted, execution-ready opportunities across priority sectors.</p>
        <a href="{{ route('trade.investment-coordination') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card fade-up delay-3">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
          </svg>
        </div>
        <h3>Capital Matching</h3>
        <p>Aligning institutional mandates with verified opportunities through structured due diligence.</p>
        <a href="{{ route('trade.capital-matching') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card fade-up delay-1">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <rect x="3" y="4" width="18" height="16" rx="2"/>
            <line x1="8" y1="2" x2="16" y2="2"/>
          </svg>
        </div>
        <h3>Project Validation</h3>
        <p>Triple-filter validation process ensuring commercial viability, regulatory alignment, and economic impact.</p>
        <a href="{{ route('trade.project-validation') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card fade-up delay-2">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
          </svg>
        </div>
        <h3>Institutional Partnerships</h3>
        <p>Strategic partnerships across capital, trade, and institutional ecosystems.</p>
        <a href="{{ route('trade.partnerships') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card fade-up delay-3">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <path d="M20 12V8H4v4M12 4v4M4 4h16v16H4z"/>
            <path d="M8 20v-8h8v8"/>
          </svg>
        </div>
        <h3>Infrastructure & Energy</h3>
        <p>Facilitating infrastructure and energy investment across African markets.</p>
        <a href="{{ route('trade.infrastructure') }}" class="service-link">Learn More →</a>
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
  .full-width-gray { width: 100%; background: var(--bg-gray); padding: 80px 0; }
  .breadcrumb-light { font-size: 14px; letter-spacing: 0.08em; text-transform: uppercase; color: var(--color-text-lighter); margin-bottom: 20px; font-weight: var(--font-medium); text-align: center; }
  .section-title-dark { font-size: 48px; font-weight: var(--font-regular); color: var(--color-text-dark); margin-bottom: 20px; text-align: center; }
  .section-text-dark { font-size: 16px; color: var(--color-text-light); line-height: 1.7; font-weight: var(--font-light); text-align: center; }
  
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
  
  /* Lead Text */
  .lead-text {
    font-size: 18px;
    color: var(--color-text-light);
    line-height: 1.7;
    font-weight: var(--font-light);
  }
  
  /* Services Grid */
  .services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 20px;
  }
  .service-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 35px 28px;
    transition: all 0.3s ease;
  }
  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-color: var(--color-accent-soft);
  }
  .service-icon {
    margin-bottom: 20px;
  }
  .service-icon svg {
    stroke: var(--color-primary);
  }
  .service-card h3 {
    font-size: 20px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 12px;
  }
  .service-card p {
    font-size: 15px;
    color: var(--color-text-muted);
    line-height: 1.5;
    margin-bottom: 20px;
    font-weight: var(--font-light);
  }
  .service-link {
    font-size: 13px;
    font-weight: var(--font-regular);
    color: var(--color-primary);
    text-decoration: none;
    transition: all 0.2s ease;
    display: inline-block;
  }
  .service-link:hover {
    color: var(--color-accent);
    transform: translateX(4px);
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
  .scale-in {
    transform: scale(0.96);
    transition: opacity 0.6s ease, transform 0.6s ease;
  }
  .scale-in.revealed {
    transform: scale(1);
  }
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  
  @media (max-width: 992px) {
    .services-grid { grid-template-columns: repeat(2, 1fr); }
    .section-title-dark { font-size: 36px; }
  }
  
  @media (max-width: 768px) {
    .section-title-dark { font-size: 32px; }
    .full-width-white { padding: 50px 0; }
    .hero-content .headline { font-size: 42px; }
    .hero-section { min-height: 420px; background-position: 65% center !important; }
    .hero-content { margin-left: 5%; }
    .services-grid { grid-template-columns: 1fr; gap: 20px; }
    .service-card { padding: 28px 22px; }
    .lead-text { font-size: 16px; }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 34px; }
    .hero-content .body-text { font-size: 16px; }
    .section-title-dark { font-size: 28px; }
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
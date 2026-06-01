@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/ATICC image .png') }}'); background-position: 60% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed">Home / Intelligence / Market Intelligence</div>
    <h1 class="headline fade-up revealed">Market <span style="color: #041931;">Intelligence</span></h1>
    <div class="body-text fade-up delay-2 revealed">Strategic market insights and data-driven analysis for institutional decision-making.</div>
  </div>
</div>

<!-- ========= OVERVIEW SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">MARKET INTELLIGENCE</div>
    <div class="large-statement fade-up delay-1">Data-Driven Market Insights</div>
    <div class="supporting-text fade-up delay-2">ATICC provides institutional-grade market intelligence across African economies and priority sectors.</div>
    
    <div class="services-grid">
      <div class="service-card fade-up delay-1">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.4">
            <path d="M21 12v3a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4v-3"/>
            <path d="M12 2v8m0 0-3-3m3 3 3-3"/>
            <path d="M3 3v18h18V3"/>
          </svg>
        </div>
        <h4>Macroeconomic Analysis</h4>
        <p>Comprehensive analysis of economic trends, fiscal policies, and market conditions across African markets.</p>
      </div>
      <div class="service-card fade-up delay-2">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.4">
            <rect x="3" y="3" width="18" height="18" rx="2"/>
            <path d="M7 7h10M7 12h10M7 17h6"/>
          </svg>
        </div>
        <h4>Sector Performance Data</h4>
        <p>Real-time and historical data on sector performance across priority industries.</p>
      </div>
      <div class="service-card fade-up delay-3">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.4">
            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
            <circle cx="12" cy="12" r="3"/>
          </svg>
        </div>
        <h4>Investment Climate Reports</h4>
        <p>Detailed assessments of investment environments, regulatory frameworks, and market opportunities.</p>
      </div>
      <div class="service-card fade-up delay-1">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.4">
            <path d="M3 3h18v18H3z"/>
            <path d="M7 7h4v10H7zM13 7h4v6h-4z"/>
          </svg>
        </div>
        <h4>Competitive Landscape Analysis</h4>
        <p>Strategic insights on market dynamics, key players, and competitive positioning.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= INTELLIGENCE SOURCES SECTION ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3>Intelligence Sources</h3>
        <p>ATICC integrates intelligence from global risk agencies, policy institutions, trade bodies, and proprietary data systems.</p>
      </div>
      <div class="framework-right fade-right">
        <div class="source-item">
          <span class="source-marker"></span>
          <p><strong>Primary Research:</strong> On-ground intelligence from ATICC's regional network</p>
        </div>
        <div class="source-item">
          <span class="source-marker"></span>
          <p><strong>Partner Intelligence:</strong> Verified data from global risk agencies</p>
        </div>
        <div class="source-item">
          <span class="source-marker"></span>
          <p><strong>Proprietary Analytics:</strong> ATICC's internal intelligence framework</p>
        </div>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  :root {
    --color-primary: #041931;
    --color-accent: #C49A6C;
    --color-text-dark: #0e0e0e;
    --color-text-gray: #1a2c3e;
    --color-text-light: #3a4c5e;
    --color-text-lighter: #5d6f7f;
    --color-text-muted: #4a5b6b;
    --color-text-white: #ffffff;
    --color-text-offwhite: rgba(255,255,255,0.92);
    --bg-white: #ffffff;
    --bg-gray: #F5F6F8;
    --bg-card: #F8F9FA;
    --border-light: #e8eef2;
    --border-card: #E8EBED;
    --font-light: 300;
    --font-regular: 300;
    --font-medium: 500;
  }

  .full-width-white { width: 100%; background: var(--bg-white); padding: 80px 0; }
  .full-width-gray { width: 100%; background: var(--bg-gray); padding: 80px 0; }

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
    color: #C49A6C;
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
    color: #041931;
  }
  .hero-content .body-text {
    font-size: 18px;
    color: var(--color-text-offwhite);
    max-width: 620px;
    line-height: 1.5;
    font-weight: var(--font-light);
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  }

  .wide-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .centered-eyebrow {
    font-size: 14px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #041931;
    margin-bottom: 20px;
    text-align: center;
    font-weight: var(--font-medium);
  }

  .large-statement {
    font-size: 48px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 20px;
    text-align: center;
  }

  .supporting-text {
    font-size: 16px;
    color: var(--color-text-light);
    max-width: 700px;
    margin: 0 auto;
    text-align: center;
    line-height: 1.7;
    font-weight: var(--font-light);
  }

  /* Services Grid */
  .services-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 50px;
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
    border-color: #041931;
  }

  .service-icon {
    margin-bottom: 20px;
  }

  .service-icon svg {
    stroke: #041931;
  }

  .service-card h4 {
    font-size: 20px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 12px;
  }

  .service-card p {
    font-size: 15px;
    color: var(--color-text-muted);
    line-height: 1.5;
    font-weight: var(--font-light);
  }

  /* Framework Split */
  .framework-split {
    display: flex;
    gap: 60px;
    align-items: center;
  }

  .framework-left {
    flex: 1;
  }

  .framework-left h3 {
    font-size: 32px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 16px;
  }

  .framework-left p {
    font-size: 16px;
    color: var(--color-text-light);
    line-height: 1.6;
    font-weight: var(--font-light);
  }

  .framework-right {
    flex: 1;
  }

  .source-item {
    display: flex;
    align-items: flex-start;
    gap: 16px;
    margin-bottom: 24px;
    padding: 16px 20px;
    background: var(--bg-white);
    border-radius: 12px;
    transition: all 0.3s ease;
  }

  .source-item:hover {
    transform: translateX(5px);
    box-shadow: 0 5px 15px rgba(0,0,0,0.05);
  }

  .source-marker {
    width: 10px;
    height: 10px;
    background: #041931;
    border-radius: 50%;
    margin-top: 6px;
    flex-shrink: 0;
  }

  .source-item p {
    font-size: 15px;
    color: var(--color-text-muted);
    line-height: 1.5;
    margin: 0;
    font-weight: var(--font-light);
  }

  .source-item p strong {
    color: var(--color-text-dark);
    font-weight: var(--font-medium);
  }

  /* Animations */
  .fade-up, .fade-left, .fade-right, .glide-in {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
  }

  .fade-left {
    transform: translateX(-28px);
  }

  .fade-right {
    transform: translateX(28px);
  }

  .glide-in {
    transform: translateY(40px);
  }

  .fade-up.revealed, .fade-left.revealed, .fade-right.revealed, .glide-in.revealed {
    opacity: 1;
    transform: translate(0, 0);
  }

  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  .delay-4 { transition-delay: 0.4s; }

  @media (max-width: 1100px) {
    .services-grid { grid-template-columns: repeat(2, 1fr); }
  }

  @media (max-width: 992px) {
    .framework-split { flex-direction: column; gap: 40px; }
    .large-statement { font-size: 36px; }
    .hero-content .headline { font-size: 48px; }
  }

  @media (max-width: 768px) {
    .full-width-white, .full-width-gray { padding: 50px 0; }
    .large-statement { font-size: 32px; }
    .services-grid { grid-template-columns: 1fr; gap: 20px; }
    .hero-content .headline { font-size: 42px; }
    .hero-section { min-height: 420px; background-position: 65% center !important; }
    .hero-content { margin-left: 5%; }
    .framework-left h3 { font-size: 28px; }
    .service-card { padding: 28px 22px; }
  }

  @media (max-width: 480px) {
    .hero-content .headline { font-size: 34px; }
    .hero-content .body-text { font-size: 16px; }
    .large-statement { font-size: 28px; }
  }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .glide-in');
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
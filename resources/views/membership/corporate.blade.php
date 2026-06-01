@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/Corporate Membership.png') }}'); background-position: 70% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Membership / Corporate Membership</div>
    <h1 class="headline fade-up revealed">Corporate <span style="color: #17015e;">Membership</span></h1>
    <div class="body-text fade-up delay-2 revealed">Tier II: Strategic Corporate Partners</div>
  </div>
</div>

<!-- ========= OVERVIEW SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">TIER II</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Strategic Corporate Partners</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">Targeted at Multinational Corporations and Industrial Conglomerates facilitating high-level market entry, infrastructure development, and large-scale industrial execution.</p>
    
    <div class="content-grid">
      <div class="content-card fade-up delay-1">
        <h3>Institutional Classification</h3>
        <p>Tier II - Strategic Corporate Partners</p>
      </div>
      <div class="content-card fade-up delay-2">
        <h3>Annual Fee</h3>
        <p>$2,500 per annum</p>
      </div>
      <div class="content-card fade-up delay-3">
        <h3>Accession Protocol</h3>
        <p>EOI → T&V Review → Ratification</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= KEY FEATURES ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">KEY FEATURES</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">What Corporate Membership Includes</h2>
    <div class="features-grid">
      <div class="feature-card fade-up delay-1">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
          <path d="M12 2L3 7l9 5 9-5-9-5z"/>
          <path d="M3 12l9 5 9-5"/>
        </svg>
        <h4>High-Level Market Entry Facilitation</h4>
        <p>Structured pathways for corporate expansion into African markets.</p>
      </div>
      <div class="feature-card fade-up delay-2">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
          <path d="M20 12V8H4v4M12 4v4M4 4h16v16H4z"/>
          <path d="M8 20v-8h8v8"/>
        </svg>
        <h4>Infrastructure Development Access</h4>
        <p>Priority access to infrastructure and industrial opportunities.</p>
      </div>
      <div class="feature-card fade-up delay-3">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
          <circle cx="12" cy="12" r="10"/>
          <path d="M12 8v4l3 3"/>
        </svg>
        <h4>Large-Scale Industrial Execution</h4>
        <p>Support for complex industrial and commercial projects.</p>
      </div>
      <div class="feature-card fade-up delay-1">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
          <path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"/>
          <path d="M9 3v18M15 3v18M3 9h18M3 15h18"/>
        </svg>
        <h4>Priority Deal Pipeline Access</h4>
        <p>First access to verified trade and investment opportunities.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= BENEFITS LIST ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">BENEFITS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Full Benefits of Corporate Membership</h2>
    <div class="benefits-list-wrapper fade-up delay-2">
      <ul class="benefits-list">
        <li><span class="check">✓</span> All Tier III benefits</li>
        <li><span class="check">✓</span> Priority deal pipeline access</li>
        <li><span class="check">✓</span> Direct capital facilitation</li>
        <li><span class="check">✓</span> Premium support services</li>
        <li><span class="check">✓</span> Access to all ATICC summits and forums</li>
        <li><span class="check">✓</span> Featured placement in member directory</li>
      </ul>
    </div>
  </div>
</div>

<!-- ========= CTA ========= -->
<div class="final-quote">
  <p class="scale-in" style="font-size: 18px;">Ready to join as a Corporate Member?</p>
  <a href="{{ route('access.plans') }}" class="cta-button scale-in delay-1">Apply Now →</a>
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
    --bg-card: #ffffff;
    --bg-table-row: #F8F9FC;
    
    /* ========= BORDER COLORS - Subtle ========= */
    --border-light: #e8eef2;
    --border-card: #e8eef2;
    --border-list: #eef2f6;
    
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
  .final-quote { background: var(--bg-white); text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: var(--color-text-dark); line-height: 1.4; margin-bottom: 30px; font-weight: var(--font-light); }
  
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
  
  /* Content Grid */
  .content-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 48px;
  }
  .content-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 35px 20px;
    text-align: center;
    transition: all 0.25s ease;
  }
  .content-card:hover { transform: translateY(-5px); border-color: var(--color-accent-soft); }
  .content-card h3 { font-size: 20px; font-weight: var(--font-regular); color: var(--color-text-dark); margin-bottom: 12px; }
  .content-card p { font-size: 15px; color: var(--color-text-muted); font-weight: var(--font-light); }
  
  /* Features Grid */
  .features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 48px;
  }
  .feature-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 35px 25px;
    text-align: center;
    transition: 0.2s;
  }
  .feature-card svg { margin-bottom: 20px; width: 44px; height: 44px; stroke: var(--color-primary); }
  .feature-card h4 { font-size: 20px; font-weight: var(--font-regular); color: var(--color-text-dark); margin-bottom: 12px; }
  .feature-card p { font-size: 15px; color: var(--color-text-muted); line-height: 1.5; font-weight: var(--font-light); }
  
  /* Benefits List */
  .benefits-list-wrapper {
    max-width: 700px;
    margin: 48px auto 0;
    background: var(--bg-card);
    border-radius: 24px;
    padding: 20px 35px 25px;
    border: 1px solid var(--border-list);
  }
  .benefits-list { list-style: none; padding: 0; }
  .benefits-list li {
    padding: 14px 0;
    font-size: 16px;
    color: var(--color-text-gray);
    border-bottom: 1px solid var(--border-list);
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: var(--font-light);
  }
  .benefits-list li:last-child { border-bottom: none; }
  .check { color: var(--color-primary); font-weight: var(--font-regular); font-size: 20px; }
  
  /* CTA Button */
  .cta-button {
    display: inline-block;
    background: var(--color-primary);
    color: var(--color-text-white);
    padding: 14px 42px;
    border-radius: 40px;
    text-decoration: none;
    font-weight: var(--font-regular);
    transition: all 0.3s ease;
    margin-top: 10px;
  }
  .cta-button:hover {
    background: var(--color-accent);
    color: var(--color-primary);
    transform: translateY(-2px);
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
  
  @media (max-width: 768px) {
    .section-title-dark { font-size: 32px; }
    .full-width-white, .full-width-gray { padding: 50px 0; }
    .final-quote p { font-size: 22px; }
    .hero-content .headline { font-size: 42px; }
    .hero-section { min-height: 420px; background-position: 65% center !important; }
    .hero-content { margin-left: 5%; }
    .content-grid, .features-grid { grid-template-columns: 1fr; gap: 20px; }
    .benefits-list-wrapper { padding: 20px; }
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
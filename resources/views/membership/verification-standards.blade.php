@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
    <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
      <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/STANDARD VERIFICATION.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
      </div>

  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Membership / Verification Standards</div>
    <h1 class="headline fade-up revealed">Verification <span style="color: #17015e;">Standards</span></h1>
    <div class="body-text fade-up delay-2 revealed">Trust & Verification (T&V) Protocol requirements</div>
  </div>
</div>

<!-- ========= OVERVIEW SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">VERIFICATION STANDARDS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Trust & Verification (T&V) Protocol</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC operates on strict gatekeeper logic: Zero Verification → Zero Access → Zero Transaction Visibility.</p>
    
    <div class="verification-grid">
      <div class="verification-card fade-up delay-1">
        <h3>Identity & Statutory Audit</h3>
        <p>Rigorous legal and beneficial-ownership verification of all participating entities.</p>
      </div>
      <div class="verification-card fade-up delay-2">
        <h3>Compliance & AML Screening</h3>
        <p>Anti-money laundering and regulatory "bad faith" filtering.</p>
      </div>
      <div class="verification-card fade-up delay-3">
        <h3>Execution Capability Assessment</h3>
        <p>Auditing the technical and financial capacity of the entity to deliver.</p>
      </div>
      <div class="verification-card fade-up delay-1">
        <h3>Integrity Enforcement</h3>
        <p>Zero-tolerance policy with expulsion and blacklisting for non-compliance.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= TRIPLE FILTER ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">TRIPLE-FILTER TEST</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Opportunity & Asset Screening</h2>
    <div class="filter-grid">
      <div class="filter-card fade-up delay-1">
        <div class="filter-number">01</div>
        <h4>Commercial Viability</h4>
        <p>Can it generate returns?</p>
      </div>
      <div class="filter-card fade-up delay-2">
        <div class="filter-number">02</div>
        <h4>Regulatory Alignment</h4>
        <p>Is it legally sound?</p>
      </div>
      <div class="filter-card fade-up delay-3">
        <div class="filter-number">03</div>
        <h4>Economic Contribution</h4>
        <p>Does it deliver measurable impact?</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= DOCUMENTATION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">REQUIRED DOCUMENTATION</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Documents Required for Verification</h2>
    <div class="docs-grid">
      <div class="doc-card fade-up delay-1">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
        </svg>
        <h4>Certificate of Incorporation</h4>
      </div>
      <div class="doc-card fade-up delay-2">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
        </svg>
        <h4>Corporate Profile</h4>
      </div>
      <div class="doc-card fade-up delay-3">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
        </svg>
        <h4>Proof of Address</h4>
      </div>
      <div class="doc-card fade-up delay-1">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
        </svg>
        <h4>Authorized Representative ID</h4>
      </div>
    </div>
  </div>
</div>

<!-- ========= CTA ========= -->
<div class="final-quote">
  <p class="scale-in" style="font-size: 18px;">Ready to begin the verification process?</p>
  <a href="{{ route('membership.apply') }}" class="cta-button scale-in delay-1">Start Application →</a>
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
    color: var(--color-text-dark);
    margin: 20px 0 20px;
    line-height: 1.2;
    text-shadow: none;
  }
  .hero-content .headline span {
    color: var(--color-accent);
  }
  .hero-content .body-text {
    font-size: 18px;
    color: var(--color-text-dark);
    max-width: 620px;
    line-height: 1.5;
    font-weight: var(--font-light);

  }
  
  /* Verification Grid */
  .verification-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 48px;
  }
  .verification-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 35px 25px;
    text-align: center;
    transition: all 0.25s ease;
  }
  .verification-card:hover { transform: translateY(-5px); border-color: var(--color-accent-soft); }
  .verification-card h3 { font-size: 20px; font-weight: var(--font-regular); color: var(--color-text-dark); margin-bottom: 12px; }
  .verification-card p { font-size: 15px; color: var(--color-text-muted); font-weight: var(--font-light); line-height: 1.5; }
  
  /* Filter Grid */
  .filter-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 48px;
  }
  .filter-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 35px 25px;
    text-align: center;
    transition: all 0.25s ease;
  }
  .filter-card:hover { transform: translateY(-5px); border-color: var(--color-accent-soft); }
  .filter-number {
    font-size: 48px;
    font-weight: var(--font-light);
    color: var(--color-accent);
    margin-bottom: 15px;
  }
  .filter-card h4 { font-size: 20px; font-weight: var(--font-regular); color: var(--color-text-dark); margin-bottom: 12px; }
  .filter-card p { font-size: 15px; color: var(--color-text-muted); font-weight: var(--font-light); }
  
  /* Documents Grid */
  .docs-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 48px;
  }
  .doc-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 35px 20px;
    text-align: center;
    transition: all 0.25s ease;
  }
  .doc-card:hover { transform: translateY(-5px); border-color: var(--color-accent-soft); }
  .doc-card svg { margin-bottom: 15px; width: 44px; height: 44px; stroke: var(--color-primary); }
  .doc-card h4 { font-size: 16px; font-weight: var(--font-regular); color: var(--color-text-dark); }
  
  /* CTA Button */
  .cta-button {
    display: inline-block;
    background: var(--color-primary);
    color: var(--color-text-dark);
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
    .verification-grid, .filter-grid, .docs-grid { grid-template-columns: 1fr; gap: 20px; }
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
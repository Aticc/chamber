@extends("layouts.app")

@section('content')


<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
    <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
      <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/STANDARD VERIFICATION.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
      </div>

  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Membership / Verification Standards</div>
    <h1 class="headline fade-up revealed">Verification <span class="gold-accent">Standards</span></h1>
    <div class="body-text fade-up delay-2 revealed">Trust & Verification (T&V) Protocol requirements</div>
  </div>
</div>

<!-- ========= OVERVIEW SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">VERIFICATION STANDARDS</div>
    <h2 class="section-title-dark fade-up delay-1">Trust & Verification (T&V) Protocol</h2>
    <p class="section-text-dark fade-up delay-2">ATICC operates on strict gatekeeper logic: Zero Verification → Zero Access → Zero Transaction Visibility.</p>
    
    <div class="verification-grid">
      <div class="verification-card fade-up delay-1">
        <div class="card-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 2L3 7l9 5 9-5-9-5z"/>
            <path d="M3 12l9 5 9-5"/>
            <path d="M3 17l9 5 9-5"/>
          </svg>
        </div>
        <h3>Identity & Statutory Audit</h3>
        <p>Rigorous legal and beneficial-ownership verification of all participating entities.</p>
      </div>
      <div class="verification-card fade-up delay-2">
        <div class="card-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <rect x="3" y="3" width="18" height="18" rx="2"/>
            <path d="M9 12l2 2 4-4"/>
            <path d="M7 21h10"/>
          </svg>
        </div>
        <h3>Compliance & AML Screening</h3>
        <p>Anti-money laundering and regulatory "bad faith" filtering.</p>
      </div>
      <div class="verification-card fade-up delay-3">
        <div class="card-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
            <path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
          </svg>
        </div>
        <h3>Execution Capability Assessment</h3>
        <p>Auditing the technical and financial capacity of the entity to deliver.</p>
      </div>
      <div class="verification-card fade-up delay-1">
        <div class="card-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            <path d="M12 8v4"/>
            <path d="M12 16h.01"/>
          </svg>
        </div>
        <h3>Integrity Enforcement</h3>
        <p>Zero-tolerance policy with expulsion and blacklisting for non-compliance.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= TRIPLE FILTER ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">TRIPLE-FILTER TEST</div>
    <h2 class="section-title-dark fade-up delay-1">Opportunity & Asset Screening</h2>
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
    <div class="centered-eyebrow fade-up">REQUIRED DOCUMENTATION</div>
    <h2 class="section-title-dark fade-up delay-1">Documents Required for Verification</h2>
    <div class="docs-grid">
      <div class="doc-card fade-up delay-1">
        <div class="doc-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <polyline points="14 2 14 8 20 8"/>
            <line x1="16" y1="13" x2="8" y2="13"/>
            <line x1="16" y1="17" x2="8" y2="17"/>
            <polyline points="10 9 9 9 8 9"/>
          </svg>
        </div>
        <h4>Certificate of Incorporation</h4>
      </div>
      <div class="doc-card fade-up delay-2">
        <div class="doc-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
            <polyline points="14 2 14 8 20 8"/>
            <path d="M16 13H8M16 17H8M10 9H8"/>
          </svg>
        </div>
        <h4>Corporate Profile</h4>
      </div>
      <div class="doc-card fade-up delay-3">
        <div class="doc-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
            <circle cx="12" cy="12" r="3"/>
          </svg>
        </div>
        <h4>Proof of Address</h4>
      </div>
      <div class="doc-card fade-up delay-1">
        <div class="doc-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
            <circle cx="12" cy="7" r="4"/>
            <path d="M12 3a4 4 0 1 0 0 8 4 4 0 0 0 0-8z"/>
          </svg>
        </div>
        <h4>Authorized Representative ID</h4>
      </div>
    </div>
  </div>
</div>

<!-- ========= CTA ========= -->
<div class="final-quote">
  <p class="scale-in">Ready to begin the verification process?</p>
  <a href="{{ route('membership.apply') }}" class="cta-button scale-in delay-1">Start Application →</a>
</div>

@include('layouts.footer')

<style>
  /* Using Global CSS Variables */
  .full-width-white { 
    width: 100%; 
    background: var(--bg-white-2); 
    padding: 90px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .full-width-gray { 
    width: 100%; 
    background: var(--bg-gray-2); 
    padding: 90px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .wide-container {
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 40px;
  }
  
  /* Hero Section */
  .hero-section {
    display: flex;
    align-items: center;
    position: relative;
    min-height: 60vh;
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
    font-weight: 600;
    color: var(--color-text-dark);
    margin-bottom: 25px;
    line-height: 1.15;
    letter-spacing: -0.02em;
  }
  
  .gold-accent {
    color: var(--color-accent);
  }
  
  .hero-content .body-text {
    font-size: 18px;
font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
    font-weight: 400;
  }
  
  .centered-eyebrow {
    font-size: 12px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 20px;
    text-align: center;
    font-weight: 500;
  }
  
  .section-title-dark { 
    font-family: var(--font-heading);
    font-size: 42px; 
    font-weight: 400; 
    color: var(--color-text-lighter-2); 
    margin-bottom: 20px; 
    text-align: center;
    line-height: 1.2;
  }
  
  .section-text-dark { 
    font-size: 17px; 
    color: var(--color-text-gray-2); 
    line-height: 1.7; 
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
  }
  
  /* Verification Grid */
  .verification-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 35px;
    margin-top: 60px;
  }
  
  .verification-card {
      background: var(--bg-gray-2);
    border: 1px solid var(--border-light);
    padding: 45px 32px;
    text-align: center;
    transition: all 0.3s ease;
    border-bottom: 3px solid var(--color-accent);
  }
  
  .verification-card:hover { 
    transform: translateY(-5px); 
  }
  
  .card-icon {
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .card-icon svg {
    color: var(--color-accent);
    width: 48px;
    height: 48px;
  }
  
  .verification-card h3 { 
    font-size: 22px; 
    font-weight: 500; 
    color: var(--color-text-dark); 
    margin-bottom: 15px; 
  }
  
  .verification-card p { 
    font-size: 15px; 
    color: var(--color-text-gray-2); 
    line-height: 1.7; 
    margin: 0;
  }
  
  /* Filter Grid */
  .filter-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;
    margin-top: 60px;
  }
  
  .filter-card {
    background: var(--bg-white-2);
    border: 1px solid var(--border-light);
    padding: 45px 32px;
    text-align: center;
    transition: all 0.3s ease;
    border-bottom: 3px solid var(--color-accent);
  }
  
  .filter-card:hover { 
    transform: translateY(-5px); 
  }
  
  .filter-number {
    font-size: 48px;
    font-weight: 400;
    color: var(--color-accent);
    margin-bottom: 20px;
    font-family: var(--font-heading);
  }
  
  .filter-card h4 { 
    font-size: 22px; 
    font-weight: 500; 
    color: var(--color-text-lighter-2); 
    margin-bottom: 12px; 
  }
  
  .filter-card p { 
    font-size: 15px; 
    color: var(--color-text-gray-2); 
    line-height: 1.7; 
    margin: 0;
  }
  
  /* Documents Grid */
  .docs-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 60px;
  }
  
  .doc-card {
    background: var(--bg-white-2);
    border: 1px solid var(--border-light);
    padding: 40px 25px;
    text-align: center;
    transition: all 0.3s ease;
    border-bottom: 3px solid var(--color-accent);
  }
  
  .doc-card:hover { 
    transform: translateY(-4px); 
  }
  
  .doc-icon {
    margin-bottom: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .doc-icon svg { 
    color: var(--color-accent);
    width: 44px;
    height: 44px;
  }
  
  .doc-card h4 { 
    font-size: 16px; 
    font-weight: 500; 
    color: var(--color-text-lighter-2); 
    margin: 0;
    line-height: 1.4;
  }
  
  /* CTA Button */
  .cta-button {
    display: inline-block;
    background: var(--color-accent);
    color: var(--color-primary);
    padding: 14px 42px;
    text-decoration: none;
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: all 0.3s ease;
    margin-top: 10px;
  }
  
  .cta-button:hover {
    background: var(--color-accent-light);
    transform: translateY(-2px);
  }
  
  /* Final Quote */
  .final-quote { 
    background: var(--bg-white-2); 
    text-align: center; 
    padding: 100px 20px; 
    border-top: 1px solid var(--border-light);
    border-bottom: 1px solid var(--border-light);
  }
  
  .final-quote p { 
    font-family: var(--font-heading);
    font-size: 32px; 
    color: var(--color-text-lighter-2); 
    line-height: 1.4; 
    font-weight: 400;
    margin-bottom: 30px;
  }
  
  /* Animations */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
    opacity: 0;
    will-change: transform, opacity;
  }
  
  .fade-up.revealed {
    animation: smoothFadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .scale-in.revealed {
    animation: smoothScale 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  @keyframes smoothFadeUp {
    0% { opacity: 0; transform: translateY(25px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes smoothScale {
    0% { opacity: 0; transform: scale(0.97); }
    100% { opacity: 1; transform: scale(1); }
  }
  
  .delay-1 { animation-delay: 0.1s; }
  .delay-2 { animation-delay: 0.2s; }
  .delay-3 { animation-delay: 0.3s; }
  
  /* Responsive */
  @media (max-width: 1200px) {
    .hero-content .headline { font-size: 52px; }
    .section-title-dark { font-size: 36px; }
    .docs-grid { gap: 25px; }
  }
  
  @media (max-width: 991px) {
    .hero-content { margin-left: 5%; max-width: 65%; }
    .hero-content .headline { font-size: 42px; }
    .verification-grid { gap: 25px; }
    .filter-grid { gap: 25px; }
    .docs-grid { grid-template-columns: repeat(2, 1fr); }
  }
  
  @media (max-width: 768px) {
    .wide-container { padding: 0 24px; }
    .hero-content { padding: 100px 24px 60px 24px; margin-left: 0; max-width: 100%; }
    .hero-content .headline { font-size: 36px; }
    .section-title-dark { font-size: 28px; }
    .verification-grid { grid-template-columns: 1fr; gap: 25px; }
    .filter-grid { grid-template-columns: 1fr; gap: 25px; }
    .docs-grid { grid-template-columns: 1fr; gap: 20px; }
    .verification-card, .filter-card { padding: 35px 25px; }
    .verification-card h3, .filter-card h4 { font-size: 20px; }
    .final-quote p { font-size: 24px; }
    .final-quote { padding: 80px 20px; }
    .full-width-white, .full-width-gray { padding: 60px 0; }
    .hero-section > div:first-child { opacity: 0.3; }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 32px; }
    .filter-number { font-size: 36px; }
    .card-icon svg, .doc-icon svg { width: 40px; height: 40px; }
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
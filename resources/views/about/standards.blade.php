@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/OPERATIONAL STANDARD .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Operational <span class="gold-accent">Standards</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.5;">ATICC operates under defined institutional standards governing verification, compliance, transaction integrity, and partner engagement.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">OPERATIONAL STANDARDS</div>
    <div class="large-statement fade-up delay-1">Institutional Framework</div>
    <div class="supporting-text fade-up delay-2">ATICC maintains rigorous operational standards across all institutional activities, ensuring consistency, integrity, and alignment with continental trade and investment objectives.</div>
    
    <div class="standards-grid">
      <div class="standard-card fade-up delay-1">
        <div class="standard-icon">
          <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 2L3 7l9 5 9-5-9-5z"/>
            <path d="M3 12l9 5 9-5"/>
            <path d="M3 17l9 5 9-5"/>
          </svg>
        </div>
        <h3>Verification Standards</h3>
        <p>All institutional participants undergo structured verification including identity validation, compliance screening, and capability assessment prior to engagement.</p>
      </div>
      <div class="standard-card fade-up delay-2">
        <div class="standard-icon">
          <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <rect x="3" y="3" width="18" height="18" rx="2"/>
            <path d="M9 12l2 2 4-4"/>
            <path d="M7 21h10"/>
          </svg>
        </div>
        <h3>Compliance Protocols</h3>
        <p>ATICC maintains KYC, AML, and regulatory compliance protocols aligned with international standards and institutional governance requirements.</p>
      </div>
      <div class="standard-card fade-up delay-3">
        <div class="standard-icon">
          <svg width="52" height="52" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
            <path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/>
            <circle cx="9" cy="7" r="4"/>
          </svg>
        </div>
        <h3>Transaction Integrity</h3>
        <p>Every transaction facilitated through ATICC undergoes due diligence, validation, and integrity review to ensure alignment with institutional standards.</p>
      </div>
    </div>
  </div>
</div>

<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">GOVERNANCE</div>
    <div class="large-statement fade-up delay-1">Institutional Governance</div>
    <div class="framework-split">
      <div class="framework-left fade-left">
        <div class="gov-icon-wrapper">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 2L3 7l9 5 9-5-9-5z"/>
            <path d="M3 12l9 5 9-5"/>
            <path d="M3 17l9 5 9-5"/>
          </svg>
        </div>
        <h3>Governance Framework</h3>
        <p>ATICC operates under a structured governance framework ensuring institutional integrity, operational transparency, and strategic oversight across all engagements.</p>
      </div>
      <div class="framework-right fade-right">
        <ul class="bullet-list">
          <li>Institutional oversight and strategic direction</li>
          <li>Operational management and execution</li>
          <li>Verification and compliance monitoring</li>
          <li>Transaction validation and integrity review</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">QUALITY ASSURANCE</div>
    <div class="large-statement fade-up delay-1">Quality Assurance Protocols</div>
    <div class="products-grid">
      <div class="product-card glide-in delay-1">
        <div class="product-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
            <path d="M22 4L12 14.01l-3-3"/>
          </svg>
        </div>
        <h4>Due Diligence Standards</h4>
        <p>Comprehensive due diligence applied to all institutional participants, trade opportunities, and capital mandates.</p>
      </div>
      <div class="product-card glide-in delay-2">
        <div class="product-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/>
            <path d="M14 2v6h6"/>
            <path d="M16 13H8"/>
            <path d="M16 17H8"/>
            <path d="M10 9H8"/>
          </svg>
        </div>
        <h4>Documentation Integrity</h4>
        <p>Structured documentation protocols ensuring accuracy, completeness, and regulatory alignment.</p>
      </div>
      <div class="product-card glide-in delay-3">
        <div class="product-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 8v4l3 3"/>
            <path d="M4 4l16 16"/>
          </svg>
        </div>
        <h4>Continuous Monitoring</h4>
        <p>Ongoing validation of participant status, transaction integrity, and compliance adherence.</p>
      </div>
    </div>
  </div>
</div>

<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">ETHICAL FRAMEWORK</div>
    <div class="large-statement fade-up delay-1">Ethical Standards</div>
    <div class="framework-split">
      <div class="framework-left fade-left">
        <div class="ethics-icon-wrapper">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
            <path d="M12 8v4"/>
            <path d="M12 16h.01"/>
          </svg>
        </div>
        <h3>Core Ethical Principles</h3>
        <p>ATICC operates under defined ethical standards governing institutional conduct, transaction facilitation, and partner engagement.</p>
      </div>
      <div class="framework-right fade-right">
        <ul class="bullet-list">
          <li>Transparency across all institutional activities</li>
          <li>Integrity in transaction facilitation and validation</li>
          <li>Accountability to institutional partners and stakeholders</li>
          <li>Confidentiality of sensitive institutional information</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container commitment-container">
    <div class="centered-eyebrow fade-up">INSTITUTIONAL COMMITMENT</div>
    <div class="large-statement fade-up delay-1">Commitment to Excellence</div>
    <p class="section-text-dark fade-up delay-2">ATICC is committed to maintaining the highest standards of institutional integrity, operational excellence, and strategic impact across African trade and investment facilitation.</p>
  </div>
</div>

<div class="final-quote">
  <p class="scale-in">Structure defines authority.<br>Integrity anchors capital.<br><span class="gold-accent">Execution drives value.</span></p>
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
  
  .commitment-container {
    text-align: center;
  }
  
  .commitment-container .section-text-dark {
    max-width: 700px;
    margin: 0 auto;
  }
  
  .hero-content {
    position: relative;
    z-index: 2;
    max-width: 55%;
    margin: 0;
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
  
  .large-statement {
    font-family: var(--font-heading);
    font-size: 48px;
    font-weight: 400;
    color: var(--color-text-lighter-2);
    margin-bottom: 25px;
    text-align: center;
    line-height: 1.2;
    letter-spacing: -0.01em;
  }
  
  .supporting-text {
    font-size: 17px;
    color: var(--color-text-gray-2);
    max-width: 750px;
    margin: 0 auto;
    text-align: center;
    line-height: 1.7;
  }
  
  .section-text-dark {
    font-size: 17px;
font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
  }
  
  /* Standards Grid */
  .standards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;
    margin-top: 70px;
  }
  
  .standard-card {
      background: var(--bg-gray-2);
    border: 1px solid var(--border-light);
    padding: 45px 32px;
    transition: all 0.3s ease;
    border-bottom: 3px solid var(--color-accent);
    text-align: center;
  }
  
  .standard-card:hover {
    transform: translateY(-6px);
  }
  
  .standard-icon {
    margin-bottom: 28px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .standard-icon svg {
    color: var(--color-accent);
    width: 52px;
    height: 52px;
  }
  
  .standard-card h3 {
    font-size: 22px;
    font-weight: 500;
    color: var(--color-text-dark);
    margin-bottom: 18px;
  }
  
  .standard-card p {
    font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
    margin: 0;
  }
  
  /* Framework Split */
  .framework-split {
    display: flex;
    gap: 80px;
    align-items: flex-start;
    margin-top: 50px;
  }
  
  .framework-left {
    flex: 1;
  }
  
  .gov-icon-wrapper, .ethics-icon-wrapper {
    margin-bottom: 25px;
  }
  
  .gov-icon-wrapper svg, .ethics-icon-wrapper svg {
    color: var(--color-accent);
    width: 48px;
    height: 48px;
  }
  
  .framework-left h3 {
    font-family: var(--font-heading);
    font-size: 32px;
    font-weight: 400;
    color: var(--color-text-lighter-2);
    margin-bottom: 20px;
  }
  
  .framework-left p {
    font-size: 16px;
font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
  }
  
  .framework-right {
    flex: 1;
  }
  
  /* Products Grid */
  .products-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;
    margin-top: 60px;
  }
  
  .product-card {
    background: var(--bg-white-2);
    border: 1px solid var(--border-light);
    padding: 40px 28px;
    transition: all 0.3s ease;
    border-bottom: 3px solid var(--color-accent);
    text-align: center;
  }
  
  .product-card:hover {
    transform: translateY(-4px);
  }
  
  .product-icon {
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .product-icon svg {
    color: var(--color-accent);
    width: 44px;
    height: 44px;
  }
  
  .product-card h4 {
    font-size: 20px;
    font-weight: 500;
    margin-bottom: 15px;
    color: var(--color-text-lighter-2);
  }
  
  .product-card p {
    font-size: 14px;
font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
    margin: 0;
  }
  
  /* Bullet List */
  .bullet-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .bullet-list li {
    padding: 16px 0;
    font-size: 15px;
    color: var(--color-text-gray-2);
    border-bottom: 1px solid var(--border-light);
    display: flex;
    align-items: flex-start;
    line-height: 1.6;
  }
  
  .bullet-list li:first-child {
    padding-top: 0;
  }
  
  .bullet-list li:last-child {
    border-bottom: none;
    padding-bottom: 0;
  }
  
  .bullet-list li::before {
    content: "✓";
    color: var(--color-accent);
    margin-right: 14px;
    font-weight: bold;
    flex-shrink: 0;
  }
  
  /* Final Quote */
  .final-quote {
    background: var(--bg-white-2);
    text-align: center;
    padding: 120px 20px;
    border-top: 1px solid var(--border-light);
    border-bottom: 1px solid var(--border-light);
  }
  
  .final-quote p {
    font-family: var(--font-heading);
    font-size: 42px;
    color: var(--color-text-lighter-2);
    line-height: 1.4;
    font-weight: 400;
    letter-spacing: -0.01em;
  }
  
  /* Animations */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
    opacity: 0;
    will-change: transform, opacity;
  }
  
  .fade-up.revealed {
    animation: smoothFadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .fade-left.revealed {
    animation: smoothFadeLeft 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .fade-right.revealed {
    animation: smoothFadeRight 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .scale-in.revealed {
    animation: smoothScale 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .glide-in.revealed {
    animation: smoothGlide 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  @keyframes smoothFadeUp {
    0% { opacity: 0; transform: translateY(25px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes smoothFadeLeft {
    0% { opacity: 0; transform: translateX(-25px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  
  @keyframes smoothFadeRight {
    0% { opacity: 0; transform: translateX(25px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  
  @keyframes smoothScale {
    0% { opacity: 0; transform: scale(0.97); }
    100% { opacity: 1; transform: scale(1); }
  }
  
  @keyframes smoothGlide {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  
  .delay-1 { animation-delay: 0.1s; }
  .delay-2 { animation-delay: 0.2s; }
  .delay-3 { animation-delay: 0.3s; }
  .delay-4 { animation-delay: 0.4s; }
  
  /* Responsive */
  @media (max-width: 1200px) {
    .hero-content .headline { font-size: 52px; }
    .large-statement { font-size: 42px; }
    .standards-grid, .products-grid { gap: 25px; }
  }
  
  @media (max-width: 991px) {
    .hero-content { max-width: 70%; }
    .hero-content .headline { font-size: 42px; max-width: 100% !important; }
    .hero-content .body-text { max-width: 100% !important; }
    .standards-grid, .products-grid { grid-template-columns: repeat(2, 1fr); }
    .framework-split { flex-direction: column; gap: 40px; }
  }
  
  @media (max-width: 768px) {
    .wide-container { padding: 0 24px; }
    .hero-content { padding: 100px 24px 60px 24px !important; max-width: 100%; }
    .hero-content .headline { font-size: 36px; }
    .large-statement { font-size: 32px !important; }
    .standards-grid, .products-grid { grid-template-columns: 1fr; gap: 25px; }
    .standard-card, .product-card { padding: 35px 25px; }
    .standard-card h3 { font-size: 20px; }
    .framework-left h3 { font-size: 28px; }
    .final-quote p { font-size: 26px; }
    .final-quote { padding: 80px 20px; }
    .full-width-white, .full-width-gray { padding: 60px 0; }
    .hero-section > div:first-child { opacity: 0.3; }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 32px; }
    .large-statement { font-size: 28px !important; }
    .standard-icon svg { width: 44px; height: 44px; }
    .product-icon svg { width: 38px; height: 38px; }
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
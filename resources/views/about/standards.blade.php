@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC image .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Operational Standards</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.5;">ATICC operates under defined institutional standards governing verification, compliance, transaction integrity, and partner engagement.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">OPERATIONAL STANDARDS</div>
    <div class="large-statement fade-up delay-1">Institutional Framework</div>
    <div class="supporting-text fade-up delay-2">ATICC maintains rigorous operational standards across all institutional activities, ensuring consistency, integrity, and alignment with continental trade and investment objectives.</div>
    
    <div class="standards-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; margin-top: 60px;">
      <div class="standard-card fade-up delay-1">
        <div class="standard-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#C49A6C" stroke-width="1.4">
            <path d="M12 2L3 7l9 5 9-5-9-5z"/>
            <path d="M3 12l9 5 9-5"/>
          </svg>
        </div>
        <h3>Verification Standards</h3>
        <p>All institutional participants undergo structured verification including identity validation, compliance screening, and capability assessment prior to engagement.</p>
      </div>
      <div class="standard-card fade-up delay-2">
        <div class="standard-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#C49A6C" stroke-width="1.4">
            <rect x="3" y="3" width="18" height="18" rx="2"/>
            <path d="M9 12l2 2 4-4"/>
          </svg>
        </div>
        <h3>Compliance Protocols</h3>
        <p>ATICC maintains KYC, AML, and regulatory compliance protocols aligned with international standards and institutional governance requirements.</p>
      </div>
      <div class="standard-card fade-up delay-3">
        <div class="standard-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#C49A6C" stroke-width="1.4">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
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
    <div class="large-statement fade-up delay-1" style="font-size: 36px;">Institutional Governance</div>
    <div class="framework-split" style="margin-top: 40px;">
      <div class="framework-left fade-left">
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
    <div class="large-statement fade-up delay-1" style="font-size: 36px;">Quality Assurance Protocols</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 50px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1">
        <h4>Due Diligence Standards</h4>
        <p>Comprehensive due diligence applied to all institutional participants, trade opportunities, and capital mandates.</p>
      </div>
      <div class="product-card glide-in delay-2">
        <h4>Documentation Integrity</h4>
        <p>Structured documentation protocols ensuring accuracy, completeness, and regulatory alignment.</p>
      </div>
      <div class="product-card glide-in delay-3">
        <h4>Continuous Monitoring</h4>
        <p>Ongoing validation of participant status, transaction integrity, and compliance adherence.</p>
      </div>
    </div>
  </div>
</div>

<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">ETHICAL FRAMEWORK</div>
    <div class="large-statement fade-up delay-1" style="font-size: 36px;">Ethical Standards</div>
    <div class="framework-split" style="margin-top: 40px;">
      <div class="framework-left fade-left">
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
  <div class="wide-container" style="text-align: center;">
    <div class="centered-eyebrow fade-up">INSTITUTIONAL COMMITMENT</div>
    <div class="large-statement fade-up delay-1" style="font-size: 32px;">Commitment to Excellence</div>
    <p class="section-text-dark fade-up delay-2" style="max-width: 700px; margin: 0 auto 30px auto;">ATICC is committed to maintaining the highest standards of institutional integrity, operational excellence, and strategic impact across African trade and investment facilitation.</p>
  </div>
</div>

<div class="final-quote">
  <p class="scale-in" style="font-size: 18px;">Structure defines authority.<br>Integrity anchors capital.<br>Execution drives value.</p>
</div>

@include('layouts.footer')

<style>
  :root {
    --color-primary: #041931;
    --color-accent: #C49A6C;
    --color-accent-soft: #d4b08c;
    --color-text-dark: #0e0e0e;
    --color-text-light: #3a4c5e;
    --color-text-muted: #4a5b6b;
    --bg-white: #ffffff;
    --bg-gray: #F5F6F8;
    --bg-card: #F8F9FA;
    --border-card: #E8EBED;
    --font-light: 300;
    --font-regular: 300;
    --font-medium: 500;
  }

  .full-width-white { width: 100%; background: var(--bg-white); padding: 80px 0; }
  .full-width-gray { width: 100%; background: var(--bg-gray); padding: 80px 0; }
  
  .wide-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .centered-eyebrow {
    font-size: 13px;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 15px;
    text-align: center;
    font-weight: var(--font-medium);
  }
  
  .large-statement {
    font-size: 48px;
    font-weight: var(--font-regular);
    color: var(--color-primary);
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
  
  .section-text-dark {
    font-size: 16px;
    color: var(--color-text-light);
    line-height: 1.7;
    font-weight: var(--font-light);
  }
  
  .final-quote {
    background: var(--bg-white);
    text-align: center;
    padding: 80px 20px;
  }
  
  .final-quote p {
    font-size: 28px;
    color: var(--color-text-dark);
    line-height: 1.4;
    font-weight: var(--font-light);
  }
  
  /* Hero Section */
  .hero-section {
    margin-top: 0;
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
  }
  
  .hero-content .body-text {
    font-size: 18px;
    color: var(--color-text-light);
    line-height: 1.5;
    font-weight: var(--font-light);
  }
  
  /* Standards Grid */
  .standards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    margin-top: 60px;
  }
  
  .standard-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 40px 28px;
    text-align: center;
    transition: all 0.3s ease;
  }
  
  .standard-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-color: var(--color-accent-soft);
  }
  
  .standard-icon {
    margin-bottom: 24px;
  }
  
  .standard-icon svg {
    stroke: var(--color-primary);
  }
  
  .standard-card h3 {
    font-size: 22px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 16px;
  }
  
  .standard-card p {
    font-size: 15px;
    color: var(--color-text-muted);
    line-height: 1.5;
    font-weight: var(--font-light);
  }
  
  /* Framework Split */
  .framework-split {
    display: flex;
    gap: 60px;
    align-items: flex-start;
  }
  
  .framework-left {
    flex: 1;
  }
  
  .framework-left h3 {
    font-size: 28px;
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
  
  /* Products Grid */
  .products-grid {
    display: flex;
    gap: 32px;
    flex-wrap: wrap;
  }
  
  .product-card {
    flex: 1;
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    padding: 32px 28px;
    border-radius: 20px;
    transition: all 0.3s ease;
  }
  
  .product-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-color: var(--color-accent-soft);
  }
  
  .product-card h4 {
    font-size: 20px;
    font-weight: var(--font-regular);
    margin-bottom: 12px;
    color: var(--color-text-dark);
  }
  
  .product-card p {
    font-size: 14px;
    color: var(--color-text-muted);
    line-height: 1.5;
    font-weight: var(--font-light);
  }
  
  /* Bullet List */
  .bullet-list {
    list-style: none;
    padding: 0;
  }
  
  .bullet-list li {
    padding: 12px 0;
    font-size: 15px;
    color: var(--color-text-muted);
    border-bottom: 1px solid var(--border-card);
    font-weight: var(--font-light);
  }
  
  .bullet-list li::before {
    content: "✓";
    color: var(--color-accent);
    margin-right: 12px;
    font-weight: bold;
  }
  
  /* Animations */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
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
  
  .scale-in {
    transform: scale(0.96);
  }
  
  .fade-up.revealed, .fade-left.revealed, .fade-right.revealed, .scale-in.revealed, .glide-in.revealed {
    opacity: 1;
    transform: translate(0, 0) scale(1);
  }
  
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  .delay-4 { transition-delay: 0.4s; }
  
  @media (max-width: 1100px) {
    .hero-content .headline {
      max-width: 70% !important;
      font-size: 48px;
    }
    .hero-content .body-text {
      max-width: 70% !important;
    }
  }
  
  @media (max-width: 992px) {
    .standards-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .framework-split {
      flex-direction: column;
      gap: 30px;
    }
    .large-statement {
      font-size: 36px !important;
    }
    .hero-content .headline {
      font-size: 42px;
      max-width: 80% !important;
    }
    .hero-content .body-text {
      max-width: 80% !important;
    }
  }
  
  @media (max-width: 768px) {
    .full-width-white, .full-width-gray {
      padding: 50px 0;
    }
    .standards-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }
    .large-statement {
      font-size: 28px !important;
    }
    .final-quote p {
      font-size: 22px !important;
    }
    .hero-content .headline {
      font-size: 36px;
      max-width: 100% !important;
    }
    .hero-content .body-text {
      max-width: 100% !important;
      font-size: 16px;
    }
    .hero-content {
      padding: 40px 30px !important;
    }
    .hero-section {
      min-height: 50vh !important;
    }
    .standard-card {
      padding: 28px 22px;
    }
    .hero-section > div:first-child {
      opacity: 0.3;
    }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline {
      font-size: 32px;
    }
    .large-statement {
      font-size: 24px !important;
    }
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
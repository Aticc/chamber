@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC image .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Legal & Regulatory Framework</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.5;">ATICC operates within a defined legal and regulatory framework governing institutional engagements, transaction facilitation, and partner relationships.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">LEGAL FRAMEWORK</div>
    <div class="large-statement fade-up delay-1">Regulatory Compliance</div>
    <div class="supporting-text fade-up delay-2">ATICC maintains compliance with applicable international, regional, and local regulations governing trade facilitation, investment coordination, and institutional operations.</div>
    
    <div class="legal-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 32px; margin-top: 60px;">
      <div class="legal-card fade-up delay-1">
        <div class="legal-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#C49A6C" stroke-width="1.4">
            <rect x="3" y="3" width="18" height="18" rx="2"/>
            <path d="M9 8h6M9 12h6M9 16h4"/>
          </svg>
        </div>
        <h3>Institutional Governance</h3>
        <p>ATICC operates under defined governance structures ensuring institutional integrity, operational transparency, and strategic oversight.</p>
      </div>
      <div class="legal-card fade-up delay-2">
        <div class="legal-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#C49A6C" stroke-width="1.4">
            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
          </svg>
        </div>
        <h3>Compliance Standards</h3>
        <p>KYC, AML, and regulatory compliance protocols aligned with international standards and institutional requirements.</p>
      </div>
      <div class="legal-card fade-up delay-3">
        <div class="legal-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="#C49A6C" stroke-width="1.4">
            <path d="M3 6h18M8 6V4h8v2M12 10v6M9 13h6"/>
          </svg>
        </div>
        <h3>Transaction Integrity</h3>
        <p>Structured due diligence and validation protocols ensuring transaction credibility and regulatory alignment.</p>
      </div>
    </div>
  </div>
</div>

<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">REGULATORY ALIGNMENT</div>
    <div class="large-statement fade-up delay-1" style="font-size: 36px;">Cross-Border Compliance</div>
    <div class="framework-split" style="margin-top: 40px;">
      <div class="framework-left fade-left">
        <h3>Regulatory Framework</h3>
        <p>ATICC aligns with international trade regulations, financial compliance standards, and cross-border investment frameworks governing African markets.</p>
      </div>
      <div class="framework-right fade-right">
        <ul class="bullet-list">
          <li>International financial regulations and standards</li>
          <li>AfCFTA trade facilitation protocols</li>
          <li>Cross-border investment compliance</li>
          <li>Data protection and privacy standards</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">DISCLOSURES</div>
    <div class="large-statement fade-up delay-1" style="font-size: 36px;">Institutional Disclosures</div>
    
    <div class="disclosure-section" style="margin-top: 40px;">
      <div class="disclosure-item fade-up delay-1">
        <h4>Terms of Engagement</h4>
        <p>All institutional engagements with ATICC are governed by defined terms of engagement, including verification requirements, confidentiality provisions, and operational protocols.</p>
      </div>
      <div class="disclosure-item fade-up delay-2">
        <h4>Liability Statement</h4>
        <p>ATICC acts as a facilitator and coordinator. Transaction decisions remain the sole responsibility of participating institutional partners. ATICC does not provide legal, financial, or investment advice.</p>
      </div>
      <div class="disclosure-item fade-up delay-3">
        <h4>Confidentiality Protocol</h4>
        <p>ATICC maintains strict confidentiality protocols governing institutional information, transaction data, and partner communications.</p>
      </div>
      <div class="disclosure-item fade-up delay-1">
        <h4>Conflict of Interest Policy</h4>
        <p>ATICC maintains a defined conflict of interest policy ensuring impartiality and integrity across all institutional activities.</p>
      </div>
      <div class="disclosure-item fade-up delay-2">
        <h4>Data Protection</h4>
        <p>ATICC complies with applicable data protection regulations governing the collection, storage, and processing of institutional information.</p>
      </div>
      <div class="disclosure-item fade-up delay-3">
        <h4>Governing Law</h4>
        <p>ATICC operations are governed by applicable international and regional legal frameworks, with dispute resolution protocols defined in engagement agreements.</p>
      </div>
    </div>
  </div>
</div>

<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">INTELLECTUAL PROPERTY</div>
    <div class="large-statement fade-up delay-1" style="font-size: 36px;">IP & Brand Protection</div>
    <div class="framework-split" style="margin-top: 40px;">
      <div class="framework-left fade-left">
        <h3>Intellectual Property Rights</h3>
        <p>All ATICC trademarks, brand assets, proprietary methodologies, and institutional content are protected under applicable intellectual property laws.</p>
      </div>
      <div class="framework-right fade-right">
        <ul class="bullet-list">
          <li>ATICC name and logo are registered trademarks</li>
          <li>Proprietary frameworks and methodologies are protected</li>
          <li>Unauthorized use of institutional assets is prohibited</li>
          <li>Third-party usage requires written authorization</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container" style="text-align: center;">
    <div class="centered-eyebrow fade-up">LEGAL NOTICE</div>
    <div class="large-statement fade-up delay-1" style="font-size: 32px;">Important Information</div>
    <div class="legal-notice-box" style="max-width: 800px; margin: 30px auto 0; background: #F8F9FA; border: 1px solid #E8EBED; border-radius: 20px; padding: 32px; text-align: left;">
      <p style="font-size: 14px; color: #3a4c5e; line-height: 1.6; margin-bottom: 16px;">ATICC does not provide legal, financial, or investment advice. All institutional partners are encouraged to conduct independent due diligence and seek appropriate professional counsel before entering any transaction or engagement.</p>
      <p style="font-size: 14px; color: #3a4c5e; line-height: 1.6; margin-bottom: 16px;">Information provided on this platform is for informational purposes only and does not constitute an offer, solicitation, or recommendation to buy or sell any securities or financial instruments.</p>
      <p style="font-size: 14px; color: #3a4c5e; line-height: 1.6;">ATICC reserves the right to modify, suspend, or terminate any engagement or service at its sole discretion, subject to applicable contractual obligations.</p>
    </div>
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
    --font-regular: 400;
    --font-medium: 500;
  }

  .full-width-white { width: 100%; background: var(--bg-white-2); padding: 80px 0; }
  .full-width-gray { width: 100%; background: var(--bg-gray-2); padding: 80px 0; }
  
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
  
  .final-quote {
    background: var(--bg-white-2);
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
  
  /* Legal Grid */
  .legal-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 32px;
    margin-top: 60px;
  }
  
  .legal-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 40px 28px;
    text-align: center;
    transition: all 0.3s ease;
  }
  
  .legal-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-color: var(--color-accent-soft);
  }
  
  .legal-icon {
    margin-bottom: 24px;
  }
  
  .legal-icon svg {
    stroke: var(--color-accent);
  }
  
  .legal-card h3 {
    font-size: 22px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 16px;
  }
  
  .legal-card p {
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
  
  /* Bullet List */
  .bullet-list {
    list-style: none;
    padding: 0;
  }
  
  .bullet-list li {
    padding: 12px 28px;
    font-size: 15px;
    color: var(--color-text-muted);
    border-bottom: 1px solid var(--border-card);
    font-weight: var(--font-light);
  }
  
  .bullet-list li::before {
    content: "✓";
    color: var(--color-primary);
    margin-right: 12px;
    font-weight: bold;
  }
  
  /* Disclosure Section */
  .disclosure-section {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
    margin-top: 40px;
  }
  
  .disclosure-item {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 28px 24px;
    transition: all 0.3s ease;
  }
  
  .disclosure-item:hover {
    transform: translateY(-3px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.05);
    border-color: var(--color-accent-soft);
  }
  
  .disclosure-item h4 {
    font-size: 18px;
    font-weight: var(--font-medium);
    color: var(--color-text-dark);
    margin-bottom: 12px;
  }
  
  .disclosure-item p {
    font-size: 14px;
    color: var(--color-text-muted);
    line-height: 1.6;
    font-weight: var(--font-light);
  }
  
  /* Legal Notice Box */
  .legal-notice-box {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 32px;
    text-align: left;
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
    .legal-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .disclosure-section {
      grid-template-columns: 1fr;
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
    .legal-grid {
      grid-template-columns: 1fr;
      gap: 20px;
    }
    .disclosure-section {
      gap: 16px;
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
    .legal-card {
      padding: 28px 22px;
    }
    .disclosure-item {
      padding: 20px;
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
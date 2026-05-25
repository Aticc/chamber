@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= INTELLIGENCE HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 100vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 140%; background: url('{{ asset('assets/images/ATICC web image  (1).png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Intelligence</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Intelligence</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 108%; line-height: 1.5;">ATICC delivers policy intelligence, market data, and institutional insights to enable informed decision and strategic execution.</div>
  </div>
</div>

<!-- ========= POLICY & INTELLIGENCE ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">STRATEGIC INTELLIGENCE</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Policy & Intelligence</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC provides structured policy insight and economic intelligence aligned with African and global market dynamics.</p>
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; margin-top: 50px;">
      <div class="grid-card glide-in delay-1" style="flex: 1; min-width: 250px;">
        <h4>Trade & Investment Policy Analysis</h4>
        <p>Structured examination of regulatory frameworks and policy shifts affecting cross-border trade and capital flows.</p>
      </div>
      <div class="grid-card glide-in delay-2" style="flex: 1; min-width: 250px;">
        <h4>AfCFTA-Aligned Corridor Intelligence</h4>
        <p>Strategic insights on trade corridors optimized for the African Continental Free Trade Area framework.</p>
      </div>
      <div class="grid-card glide-in delay-3" style="flex: 1; min-width: 250px;">
        <h4>Sector-Specific Insights</h4>
        <p>Deep-dive analysis across priority industries including energy, infrastructure, agro-processing, and digital trade.</p>
      </div>
      <div class="grid-card glide-in delay-4" style="flex: 1; min-width: 250px;">
        <h4>Strategic Market Entry Intelligence</h4>
        <p>Data-driven guidance for institutional capital entering African markets.</p>
      </div>
    </div>
    <p class="section-text-dark fade-up delay-3" style="text-align: center; max-width: 700px; margin: 40px auto 0; font-size: 15px;">All intelligence supports informed decision-making and institutional execution.</p>
  </div>
</div>

<!-- ========= NEWSROOM ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">INSTITUTIONAL COMMUNICATIONS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Newsroom</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC publishes institutional updates, announcements, and strategic communications.</p>
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; margin-top: 50px;">
      <div class="grid-card glide-in delay-1" style="flex: 1; min-width: 250px;">
        <h4>Official Releases & Announcements</h4>
        <p>Formal communications regarding institutional developments, partnerships, and strategic initiatives.</p>
      </div>
      <div class="grid-card glide-in delay-2" style="flex: 1; min-width: 250px;">
        <h4>Institutional Activities & Milestones</h4>
        <p>Updates on ATICC's operational progress, summits, missions, and execution milestones.</p>
      </div>
      <div class="grid-card glide-in delay-3" style="flex: 1; min-width: 250px;">
        <h4>Market Developments & Insights</h4>
        <p>Timely intelligence on African trade, investment trends, and policy shifts.</p>
      </div>
    </div>
    <p class="section-text-dark fade-up delay-3" style="text-align: center; max-width: 700px; margin: 40px auto 0; font-size: 15px;">All communications reflect ATICC's institutional position and operational activity.</p>
  </div>
</div>

<!-- ========= TRUST & VERIFICATION PROTOCOL ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">TRUST & VERIFICATION PROTOCOL</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 32px;">Zero Verification → Zero Access → Zero Transaction Visibility</div>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 700px; margin: 20px auto 0; font-size: 16px;">ATICC operates on strict gatekeeper logic with tiered vetting framework, continuous market monitoring, and integrity enforcement through zero-tolerance policy.</p>
  </div>
</div>

<!-- ========= TIERED VETTING FRAMEWORK ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3 style="font-size: 28px; font-weight: 400; margin-bottom: 20px; color: #0e0e0e;">Tiered Vetting Framework</h3>
        <p style="font-size: 16px; color: #3a4c5e; line-height: 1.6;">Every project or trade opportunity listed on the platform must pass a triple-filter test: Commercial Viability, Regulatory Alignment, and Economic Contribution.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li style="font-size: 15px;"><span>Identity & Statutory Audit:</span> Legal and beneficial-ownership verification</li>
          <li style="font-size: 15px;"><span>Compliance & AML Screening:</span> Anti-money laundering filtering</li>
          <li style="font-size: 15px;"><span>Execution Capability Assessment:</span> Technical and financial capacity audit</li>
          <li style="font-size: 15px;"><span>Integrity Enforcement:</span> Zero-tolerance policy with expulsion and blacklisting</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= DATA & INTELLIGENCE GOVERNANCE ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Data & Intelligence Governance</h3>
        <p style="font-size: 16px;">Ensuring the integrity, security, and strategic application of intelligence across ATICC's institutional ecosystem.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 15px;"><span>Intelligence Validation Protocol:</span> All data and insights are verified through multiple sources before distribution.</p>
        <p style="font-size: 15px; margin-top: 15px;"><span>Secure Information Framework:</span> Controlled access to intelligence based on membership tier and verification status.</p>
        <p style="font-size: 15px; margin-top: 15px;"><span>Strategic Application Mandate:</span> Intelligence is deployed to support transaction execution, not general distribution.</p>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= GLOBAL INTELLIGENCE NETWORK ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">GLOBAL INTELLIGENCE NETWORK</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>Regional Intelligence Hubs</h4>
        <p>Strategic intelligence nodes across Africa's major economic corridors providing on-ground data and analysis.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>International Access Points</h4>
        <p>Intelligence gathering and market insight from key financial centers including London, Dubai, New York, and Beijing.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>Partner Intelligence Integration</h4>
        <p>Verified intelligence streams from global risk agencies, policy institutions, and trade bodies.</p>
      </div>
      <div class="product-card glide-in delay-4" style="flex: 1;">
        <h4>Proprietary Data Systems</h4>
        <p>ATICC's internal intelligence framework capturing transaction data, market trends, and execution metrics.</p>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= STRATEGIC INTELLIGENCE APPLICATION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="framework-split" style="flex-direction: column; gap: 30px;">
      <div class="framework-left fade-left" style="text-align: center;">
        <h3 style="font-size: 28px;">Intelligence for Execution</h3>
        <p style="font-size: 16px; max-width: 700px; margin: 0 auto;">ATICC's intelligence framework is designed to support institutional decision-making and transaction execution, not academic or general distribution.</p>
      </div>
      <div class="framework-right fade-right" style="display: flex; flex-direction: column; gap: 20px;">
        <p style="font-size: 15px;"><span>Deal Flow Intelligence:</span> Sector and corridor-specific data to identify and validate execution-ready opportunities.</p>
        <p style="font-size: 15px;"><span>Risk & Compliance Insights:</span> Regulatory and AML intelligence to ensure transaction integrity.</p>
        <p style="font-size: 15px;"><span>Market Entry Strategy:</span> Data-driven guidance for institutional capital deployment into African markets.</p>
        <p style="font-size: 15px;"><span>Policy & Trade Intelligence:</span> AfCFTA-aligned analysis supporting cross-border trade facilitation.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= FINAL QUOTE ========= -->
<div class="final-quote">
  <p class="scale-in" style="font-size: 18px;">Structure defines authority.<br>Integrity anchors capital.<br>Execution drives value.</p>
</div>

@include('layouts.footer')

<style>
  /* Additional styles for Intelligence Page */
  .full-width-white {
    width: 100%;
    background: white;
    padding: 80px 0;
  }
  
  .full-width-gray {
    width: 100%;
    background: #F5F6F8;
    padding: 80px 0;
  }
  
  .breadcrumb-light {
    font-size: 14px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #5d6f7f;
    margin-bottom: 20px;
    font-weight: 500;
  }
  
  .section-title-dark {
    font-size: 48px;
    font-weight: 400;
    color: #0e0e0e;
    margin-bottom: 20px;
  }
  
  .section-text-dark {
    font-size: 16px;
    color: #3a4c5e;
    line-height: 1.7;
  }
  
  .products-grid {
    display: flex;
    gap: 32px;
    flex-wrap: wrap;
  }
  
  .product-card {
    flex: 1;
    background: #f5f6f8;
    padding: 32px 28px;
    border-radius: 16px;
  }
  
  .product-card h4 {
    font-size: 20px;
    font-weight: 400;
    margin-bottom: 12px;
    color: #0e0e0e;
  }
  
  .product-card p {
    font-size: 14px;
    color: #4a5e72;
    line-height: 1.5;
  }
  
  .grid-card {
    background: #f5f6f8;
    padding: 32px 28px;
    border-radius: 16px;
  }
  
  .grid-card p {
    font-size: 14px;
    color: #4a5e72;
    line-height: 1.5;
  }
  
  .grid-card h4 {
    font-size: 18px;
    font-weight: 400;
    margin-bottom: 12px;
    color: #0e0e0e;
  }
  
  .supporting-text {
    font-size: 16px;
  }
  
  .centered-eyebrow {
    font-size: 13px;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: #C49A6C;
    margin-bottom: 15px;
  }
  
  .large-statement {
    font-size: 48px;
    font-weight: 400;
    color: #031B4E;
    margin-bottom: 20px;
  }
  
  .policy-split {
    display: flex;
    gap: 60px;
    align-items: flex-start;
  }
  
  .split-left, .split-right {
    flex: 1;
  }
  
  .bullet-list {
    list-style: none;
    padding: 0;
  }
  
  .bullet-list li {
    padding: 8px 28px;
    font-size: 15px;
    color: #1A1A1A;
    border-bottom: 1px solid #E8EBED;
  }
  
  .bullet-list li::before {
    content: "✓";
    color: #031B4E;
    margin-right: 12px;
    font-weight: bold;
  }
  
  .framework-split {
    display: flex;
    gap: 60px;
    align-items: center;
  }
  
  .framework-left h3 {
    font-size: 28px;
    font-weight: 400;
    color: #0e0e0e;
    margin-bottom: 20px;
  }
  
  .framework-left p {
    font-size: 16px;
    color: #3a4c5e;
    line-height: 1.6;
  }
  
  .framework-right p {
    font-size: 15px;
    color: #1A1A1A;
    line-height: 1.6;
  }
  
  .final-quote {
    background: white;
    text-align: center;
    padding: 80px 20px;
  }
  
  .final-quote p {
    font-size: 28px;
    color: #0e0e0e;
    line-height: 1.4;
  }
  
  .section-spacer {
    height: 1px;
    background: transparent;
  }
  
  .breadcrumb {
    font-size: 13px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #C49A6C;
    margin-bottom: 15px;
  }
  
  @media (max-width: 1100px) {
    .section-title-dark {
      font-size: 38px;
    }
    .full-width-white, .full-width-gray {
      padding: 60px 0;
    }
    .large-statement {
      font-size: 32px !important;
    }
    .policy-split, .framework-split {
      flex-direction: column;
      gap: 30px;
    }
  }
  
  @media (max-width: 768px) {
    .section-title-dark {
      font-size: 32px;
    }
    .full-width-white, .full-width-gray {
      padding: 40px 0;
    }
    .products-grid {
      flex-direction: column;
    }
    .large-statement {
      font-size: 24px !important;
    }
    .final-quote p {
      font-size: 22px !important;
    }
    .hero-content h1 {
      max-width: 100% !important;
    }
    .hero-content .body-text {
      max-width: 100% !important;
    }
  }
</style>

<script>
  // Intersection Observer for smooth scroll-triggered animations
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .grid-card, .product-card');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

  animatedElements.forEach(el => observer.observe(el));

  // Nav scroll effect
  window.addEventListener('scroll', function() {
    const nav = document.getElementById('stickyNav');
    if (window.scrollY > 50) {
      nav.classList.add('scrolled');
      document.body.classList.add('nav-shrunk');
    } else {
      nav.classList.remove('scrolled');
      document.body.classList.remove('nav-shrunk');
    }
  });
</script>

@endsection
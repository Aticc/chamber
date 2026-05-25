@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= ABOUT HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 100vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 65%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC Vault .jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About Us</div>
    <h1 class="headline fade-up revealed" style="max-width: 65%;">About <span style="color: #031B4E;">ATICC</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.5;">
      ATICC is established to promote, protect, and scale the commercial interests of entities engaged with African markets. Moving beyond traditional networking, the mandate focuses on:
    </div>
    
    <!-- Styled List -->
    <div class="styled-list fade-up delay-2 revealed" style="margin-top: 25px; max-width: 50%;">
      <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px;">
        <div style="min-width: 24px; height: 24px; background: #041931; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-top: 2px;">
          <span style="color: white; font-size: 12px; font-weight: 400;">✓</span>
        </div>
        <div>
          <span style="color: #031B4E; font-weight: 400; letter-spacing: 0.08em; font-size: 13px;">STRUCTURED MARKET ENTRY:</span>
          <span style="color: #3a4c5e;"> Providing a roadmap for localized expansion.</span>
        </div>
      </div>
      
      <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px;">
        <div style="min-width: 24px; height: 24px; background: #041931; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-top: 2px;">
          <span style="color: white; font-size: 12px; font-weight: 400;">✓</span>
        </div>
        <div>
          <span style="color: #031B4E; font-weight: 400; letter-spacing: 0.08em; font-size: 13px;">CAPITAL FACILITATION:</span>
          <span style="color: #3a4c5e;"> Linking bankable projects with appropriate funding tiers.</span>
        </div>
      </div>
      
      <div style="display: flex; align-items: flex-start; gap: 15px; margin-bottom: 20px;">
        <div style="min-width: 24px; height: 24px; background: #041931; border-radius: 50%; display: flex; align-items: center; justify-content: center; margin-top: 2px;">
          <span style="color: white; font-size: 12px; font-weight: 400;">✓</span>
        </div>
        <div>
          <span style="color: #031B4E; font-weight: 400; letter-spacing: 0.08em; font-size: 13px;">TRANSACTION EXECUTION SUPPORT:</span>
          <span style="color: #3a4c5e;"> Ensuring the technical and regulatory "last mile" of business deals.</span>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========= INSTITUTIONAL IDENTITY ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">INSTITUTIONAL IDENTITY</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Official Designation</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC is a private, member-governed clearing house and institutional platform engineered to serve as a transaction-driven interface, bridging the gap between global institutional capital and vetted African market opportunities.</p>
  </div>
</div>

<!-- ========= INSTITUTIONAL POSITIONING ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">POSITIONING</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">The Gateway</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC functions as a strategic intelligence gateway, anchored by an Africa-focused institutional core and powered by a proprietary global digital interface, connecting verified stakeholders worldwide through a structured, secure, and transparent environment for African market access.</p>
  </div>
</div>

<!-- ========= PRIMARY OBJECTIVE ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3 style="font-size: 28px; font-weight: 400; margin-bottom: 20px; color: #0e0e0e;">Primary Objective</h3>
        <p style="font-size: 16px; color: #3a4c5e; line-height: 1.6;">To catalyze high-value trade and investment flows that deliver measurable outcomes and sustain value creation.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li style="font-size: 15px;"><span>De-risk African Markets:</span> Utilizing local intelligence to lower the barrier for global entry.</li>
          <li style="font-size: 15px;"><span>Deliver Measurable Outcomes:</span> Moving from "intent" to "executed" economic milestones.</li>
          <li style="font-size: 15px;"><span>Support Industrial Growth:</span> Enabling the expansion of high-impact enterprises across the continent.</li>
          <li style="font-size: 15px;"><span>Sustain Value Creation:</span> Ensuring long-term profitability and localized economic stability.</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= GOVERNANCE & LEADERSHIP ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">GOVERNANCE & LEADERSHIP</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>Office of the Group Chairman</h4>
        <p>Supreme Strategic Authority responsible for defining long-term global strategy, authorizing high-level engagements, and providing final oversight on institutional risk.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>The Secretariat-General</h4>
        <p>Translates board-level strategy into operational reality, coordinating multi-regional operations and enforcing institutional reporting systems.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>The Operations Directorate</h4>
        <p>Manages the technical and administrative ecosystem, including the Global Digital Interface, onboarding protocols, and quality control.</p>
      </div>
      <div class="product-card glide-in delay-4" style="flex: 1;">
        <h4>Advisory Board of Governors</h4>
        <p>Composed of global industry titans providing strategic foresight, market intelligence, and diplomatic bridge-building.</p>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= INSTITUTIONAL GOVERNANCE SAFEGUARDS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Institutional Governance Safeguards</h3>
        <p style="font-size: 16px;">Ensuring institutional balance and operational resilience through distributed oversight and continuity.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 15px;"><span>Strategic Oversight Committee:</span> Periodic review of chairman-level decisions and institutional direction.</p>
        <p style="font-size: 15px; margin-top: 15px;"><span>Independent Advisory Review Layer:</span> Non-executive validation of high-impact strategic engagements.</p>
        <p style="font-size: 15px; margin-top: 15px;"><span>Delegated Authority Protocols:</span> Thresholds for decentralized execution across directorates to prevent operational bottlenecks.</p>
      </div>
    </div>
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

<!-- ========= GLOBAL TRADE CORRIDORS ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">GLOBAL TRADE CORRIDORS & MARKET ACCESS</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>The Corridor Principle</h4>
        <p>Africa as a network of interconnected economic corridors, optimizing trade flows based on regional logistics and historical routes.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>Strategic Trade Facilitation</h4>
        <p>Technical "soft infrastructure" for trade: regulatory navigation, documentation optimization, and market entry intelligence.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>AfCFTA Integration</h4>
        <p>Private-sector bridge for the African Continental Free Trade Area, leveraging tariff reductions and intra-African trade preferences.</p>
      </div>
      <div class="product-card glide-in delay-4" style="flex: 1;">
        <h4>International Access Nodes</h4>
        <p>Strategic global junctions in key financial hubs: London, Dubai, New York, and Beijing.</p>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= STRATEGIC COMPARISON ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split" style="flex-direction: column; gap: 30px;">
      <div class="framework-left fade-left" style="text-align: center;">
        <h3 style="font-size: 28px;">ATICC vs Traditional Chambers</h3>
        <p style="font-size: 16px; max-width: 700px; margin: 0 auto;">ATICC differentiates itself from traditional African chambers by operating as a transaction-driven "clearinghouse" rather than a general advocacy body.</p>
      </div>
      <div class="framework-right fade-right" style="display: flex; flex-direction: column; gap: 20px;">
        <p style="font-size: 15px;"><span>From "Networking" to "Execution Engine":</span> ATICC focuses on the "last mile" of transactions, providing technical infrastructure to ensure capital closes on vetted projects.</p>
        <p style="font-size: 15px;"><span>Gatekeeper Logic:</span> ATICC uses a "Kill Switch" system to remove non-compliant entities, ensuring a trustworthy environment.</p>
        <p style="font-size: 15px;"><span>Trade Corridor Focus:</span> ATICC approaches Africa as interconnected economic corridors rather than fragmented states.</p>
        <p style="font-size: 15px;"><span>Technical Institutionality:</span> A Secretariat-General and Advisory Board of global experts building trust with institutional investors.</p>
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
  /* Additional styles for About Us - keeping same colors as homepage */
  .full-width-white {
    width: 100%;
    background: white;
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
  
  .grid-card p {
    font-size: 14px;
  }
  
  .grid-card h4 {
    font-size: 18px;
  }
  
  .supporting-text {
    font-size: 16px;
  }
  
  .centered-eyebrow {
    font-size: 13px;
  }
  
  @media (max-width: 1100px) {
    .section-title-dark {
      font-size: 38px;
    }
    .full-width-white {
      padding: 60px 0;
    }
    .large-statement {
      font-size: 32px !important;
    }
  }
  
  @media (max-width: 768px) {
    .section-title-dark {
      font-size: 32px;
    }
    .full-width-white {
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
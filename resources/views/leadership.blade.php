@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= LEADERSHIP HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 100vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 85%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: -216px; width: 100%; height: 97%; background: url('{{ asset('assets/images/IMAG FOR ATICC .jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Leadership</div> 
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Leadership</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 108%; line-height: 1.5;">ATICC operates within a defined institutional governance framework to ensure control, accountability, and execution discipline across all operations.</div>
  </div>
</div>

<!-- ========= GOVERNANCE OVERVIEW ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">GOVERNANCE STRUCTURE</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Institutional Leadership Framework</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC operates within a defined institutional governance framework to ensure control, accountability, and execution discipline across all operations.</p>
  </div>
</div>

<!-- ========= OFFICE OF THE GROUP CHAIRMAN ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3 style="font-size: 28px; font-weight: 400; margin-bottom: 20px; color: #0e0e0e;">Office of the Group Chairman</h3>
        <p style="font-size: 16px; color: #3a4c5e; line-height: 1.6;">Supreme Strategic Authority responsible for defining long-term global strategy, authorizing high-level engagements, and providing final oversight on institutional risk.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li style="font-size: 15px;"><span>Strategic Authority:</span> Defines long-term global strategy and institutional direction</li>
          <li style="font-size: 15px;"><span>Engagement Authorization:</span> Approves high-level institutional partnerships and capital mandates</li>
          <li style="font-size: 15px;"><span>Risk Oversight:</span> Provides final review and approval on institutional risk frameworks</li>
          <li style="font-size: 15px;"><span>Executive Appointments:</span> Approves senior leadership and governance positions</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ========= THE SECRETARIAT-GENERAL ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3 style="font-size: 28px; font-weight: 400; margin-bottom: 20px; color: #0e0e0e;">The Secretariat-General</h3>
        <p style="font-size: 16px; color: #3a4c5e; line-height: 1.6;">Translates board-level strategy into operational reality, coordinating multi-regional operations and enforcing institutional reporting systems.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li style="font-size: 15px;"><span>Operational Translation:</span> Converts strategic directives into actionable execution frameworks</li>
          <li style="font-size: 15px;"><span>Multi-Regional Coordination:</span> Aligns operations across Africa and international nodes</li>
          <li style="font-size: 15px;"><span>Reporting Enforcement:</span> Maintains institutional reporting and compliance systems</li>
          <li style="font-size: 15px;"><span>Stakeholder Management:</span> Coordinates engagement with members, partners, and institutions</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ========= THE OPERATIONS DIRECTORATE ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3 style="font-size: 28px; font-weight: 400; margin-bottom: 20px; color: #0e0e0e;">The Operations Directorate</h3>
        <p style="font-size: 16px; color: #3a4c5e; line-height: 1.6;">Manages the technical and administrative ecosystem, including the Global Digital Interface, onboarding protocols, and quality control.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li style="font-size: 15px;"><span>Global Digital Interface:</span> Manages the platform connecting verified stakeholders worldwide</li>
          <li style="font-size: 15px;"><span>Onboarding Protocols:</span> Executes the Trust & Verification (T&V) accession process</li>
          <li style="font-size: 15px;"><span>Quality Control:</span> Ensures institutional standards across all operations and outputs</li>
          <li style="font-size: 15px;"><span>Systems Management:</span> Oversees technical infrastructure and process integrity</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ========= ADVISORY BOARD OF GOVERNORS ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3 style="font-size: 28px; font-weight: 400; margin-bottom: 20px; color: #0e0e0e;">Advisory Board of Governors</h3>
        <p style="font-size: 16px; color: #3a4c5e; line-height: 1.6;">Composed of global industry titans providing strategic foresight, market intelligence, and diplomatic bridge-building.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li style="font-size: 15px;"><span>Strategic Foresight:</span> Provides non-executive guidance on long-term institutional positioning</li>
          <li style="font-size: 15px;"><span>Market Intelligence:</span> Offers sector-specific insights across priority industries</li>
          <li style="font-size: 15px;"><span>Diplomatic Bridge-Building:</span> Facilitates engagement with governments and multilateral institutions</li>
          <li style="font-size: 15px;"><span>Independent Validation:</span> Reviews high-impact strategic engagements and partnerships</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= INSTITUTIONAL GOVERNANCE SAFEGUARDS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">INSTITUTIONAL CONTROLS</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 32px;">Governance Safeguards</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>Strategic Oversight Committee</h4>
        <p>Periodic review of chairman-level decisions and institutional direction to ensure alignment with mandate.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>Independent Advisory Review Layer</h4>
        <p>Non-executive validation of high-impact strategic engagements and partnership approvals.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>Delegated Authority Protocols</h4>
        <p>Thresholds for decentralized execution across directorates to prevent operational bottlenecks.</p>
      </div>
      <div class="product-card glide-in delay-4" style="flex: 1;">
        <h4>Institutional Continuity Framework</h4>
        <p>Structured succession and knowledge retention protocols ensuring operational resilience.</p>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= LEADERSHIP PRINCIPLES ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="framework-split" style="flex-direction: column; gap: 30px;">
      <div class="framework-left fade-left" style="text-align: center;">
        <h3 style="font-size: 28px;">Leadership Principles</h3>
        <p style="font-size: 16px; max-width: 700px; margin: 0 auto;">ATICC's leadership framework is built on institutional discipline, execution focus, and integrity enforcement.</p>
      </div>
      <div class="framework-right fade-right" style="display: flex; flex-direction: column; gap: 20px;">
        <p style="font-size: 15px;"><span>Institutional Discipline:</span> All leadership actions operate within formal protocols aligned with institutional standards.</p>
        <p style="font-size: 15px;"><span>Execution Focus:</span> Leadership is evaluated on transaction execution and measurable outcomes, not activity.</p>
        <p style="font-size: 15px;"><span>Integrity Enforcement:</span> Zero tolerance for non-compliance across all levels of leadership and governance.</p>
        <p style="font-size: 15px;"><span>Strategic Alignment:</span> Every leadership decision must align with ATICC's mandate to structure, validate, and execute institutional-grade transactions.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= ACCOUNTABILITY FRAMEWORK ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">ACCOUNTABILITY</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 32px;">Performance & Oversight</div>
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; margin-top: 50px;">
      <div class="grid-card glide-in delay-1" style="flex: 1; min-width: 250px; text-align: center;">
        <div style="font-size: 42px; font-weight: 400; color: #17015e; margin-bottom: 15px;">✓</div>
        <h4>Quarterly Performance Reviews</h4>
        <p>Systematic evaluation of leadership execution against institutional targets.</p>
      </div>
      <div class="grid-card glide-in delay-2" style="flex: 1; min-width: 250px; text-align: center;">
        <div style="font-size: 42px; font-weight: 400; color: #17015e; margin-bottom: 15px;">✓</div>
        <h4>Annual Institutional Audit</h4>
        <p>Independent review of governance, compliance, and operational integrity.</p>
      </div>
      <div class="grid-card glide-in delay-3" style="flex: 1; min-width: 250px; text-align: center;">
        <div style="font-size: 42px; font-weight: 400; color: #17015e; margin-bottom: 15px;">✓</div>
        <h4>Continuous Compliance Monitoring</h4>
        <p>Ongoing validation of leadership alignment with institutional standards.</p>
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
  /* Additional styles for Leadership Page */
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
    color: #17015e;
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
    color: #2E4156;
    border-bottom: 1px solid #E8EBED;
  }
  
  .bullet-list li::before {
    content: "✓";
    color: #17015e;
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
    color: #2E4156;
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
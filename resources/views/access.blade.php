@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= MEMBERSHIP HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 100vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC web pics .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Membership</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Membership <span style="color: #031B4E;">Tiers & Accession</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.5;">Membership in ATICC is not an automatic right but a strategic designation. Access is granted through a curated accession process reserved for verified stakeholders who demonstrate a commitment to institutional transparency and market growth.</div>
  </div>
</div>

<!-- ========= GRAY SPACER ========= -->
<div class="gray-spacer fade-up revealed">
  <p> STRUCTURE DEFINES AUTHORITY. INTEGRITY ANCHORS CAPITAL. EXECUTION DRIVES SCALE. </p>
</div>

<!-- ========= ACCESSION PRINCIPLE ========= -->
<div class="partner-section">
  <div class="centered-eyebrow fade-up">ACCESSION PRINCIPLE</div>
  <div class="large-statement fade-up delay-1">Strategic Designation</div>
  <div class="supporting-text fade-up delay-2">Membership in ATICC is not an automatic right but a strategic designation. Access is granted through a curated accession process reserved for verified stakeholders who demonstrate a commitment to institutional transparency and market growth.</div>
</div>

<!-- ========= MEMBERSHIP TIERS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">MEMBERSHIP TIERS</div>
    <div class="large-statement fade-up delay-1">Aligned. Verified. Committed.</div>
    <div class="grid-5" style="grid-template-columns: repeat(3, 1fr);">
      <div class="grid-card glide-in delay-1">
        <h4>Tier I: Institutional & Institutional Partners</h4>
        <p>Designated for institutional wealth funds, national governments, and multilateral financial institutions. Focuses on policy alignment, G2G frameworks, and large-scale capital deployment.</p>
      </div>
      <div class="grid-card glide-in delay-2">
        <h4>Tier II: Strategic Corporate Partners</h4>
        <p>Targeted at Multinational Corporations and Industrial Conglomerates. Facilitates high-level market entry, infrastructure development, and large-scale industrial execution.</p>
      </div>
      <div class="grid-card glide-in delay-3">
        <h4>Tier III: Institutional Members</h4>
        <p>Designed for High-Growth SMEs and Accredited Service Providers. These members serve as the critical execution layer within trade value chains.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= ACCESSION PROTOCOL ========= -->
<div class="partner-section">
  <div class="centered-eyebrow fade-up">ACCESSION PROTOCOL</div>
  <div class="large-statement fade-up delay-1">The Funnel</div>
  <div class="grid-5" style="grid-template-columns: repeat(3, 1fr); margin-top: 50px;">
    <div class="grid-card glide-in delay-1" style="text-align: center;">
      <div style="font-size: 42px; font-weight: 500; color: #031B4E; margin-bottom: 15px;">01</div>
      <h4>Expression of Interest (EOI)</h4>
      <p>Initial alignment check</p>
    </div>
    <div class="grid-card glide-in delay-2" style="text-align: center;">
      <div style="font-size: 42px; font-weight: 500; color: #031B4E; margin-bottom: 15px;">02</div>
      <h4>Trust & Verification (T&V) Review</h4>
      <p>Deep-dive institutional vetting</p>
    </div>
    <div class="grid-card glide-in delay-3" style="text-align: center;">
      <div style="font-size: 42px; font-weight: 500; color: #031B4E; margin-bottom: 15px;">03</div>
      <h4>Ratification</h4>
      <p>Final approval and strategic onboarding into the ATICC ecosystem</p>
    </div>
  </div>
</div>

<!-- ========= REVENUE & SUSTAINABILITY ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3>Revenue & Sustainability Model</h3>
        <p>ATICC operates on a diversified revenue model to ensure institutional sustainability and operational independence.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li><span style="font-weight: 500;">Accession & Annual Dues:</span> Membership lifecycle fees</li>
          <li><span style="font-weight: 500;">Success-based Facilitation:</span> Fees derived from executed transactions</li>
          <li><span style="font-weight: 500;">Advisory & Intelligence Mandates:</span> Strategic consulting for market entry</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ========= TRUST & VERIFICATION ========= -->
<div class="partner-section">
  <div class="centered-eyebrow fade-up">TRUST & VERIFICATION (T&V) PROTOCOL</div>
  <div class="large-statement fade-up delay-1" style="font-size: 36px;">Zero Verification → Zero Access → Zero Transaction Visibility</div>
  <div class="grid-5" style="grid-template-columns: repeat(3, 1fr); margin-top: 50px;">
    <div class="grid-card glide-in delay-1">
      <h4>Identity & Statutory Audit</h4>
      <p>Rigorous legal and beneficial-ownership verification</p>
    </div>
    <div class="grid-card glide-in delay-2">
      <h4>Compliance & AML Screening</h4>
      <p>Anti-money laundering and regulatory "bad faith" filtering</p>
    </div>
    <div class="grid-card glide-in delay-3">
      <h4>Execution Capability Assessment</h4>
      <p>Auditing the technical and financial capacity of the entity to deliver</p>
    </div>
  </div>
</div>

<!-- ========= VETTING DETAILS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3>Continuous Market Monitoring</h3>
        <p>The T&V Protocol is not a one-time event. ATICC maintains ongoing validation to ensure that member behavior remains aligned with institutional integrity standards.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li><span style="font-weight: 500;">Triple-Filter Test:</span> Commercial Viability, Regulatory Alignment, Economic Contribution</li>
          <li><span style="font-weight: 500;">Independent Third-Party Validation:</span> Integration with global risk agencies</li>
          <li><span style="font-weight: 500;">Integrity Enforcement:</span> Zero-tolerance policy with expulsion and blacklisting</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ========= ANNUAL FEES ========= -->
<div class="partner-section">
  <div class="centered-eyebrow fade-up">COMMERCIAL STRUCTURE</div>
  <div class="large-statement fade-up delay-1" style="font-size: 36px;">Annual Accession & Membership Fees (2026/27)</div>
  <div class="grid-5" style="grid-template-columns: repeat(3, 1fr); margin-top: 50px;">
    <div class="grid-card glide-in delay-1" style="text-align: center;">
      <h4>Tier I</h4>
      <p style="font-size: 28px; font-weight: 400; color: #031B4E; margin: 15px 0;">$50,000</p>
      <p>Institutional & Institutional Partners</p>
    </div>
    <div class="grid-card glide-in delay-2" style="text-align: center;">
      <h4>Tier II</h4>
      <p style="font-size: 28px; font-weight: 400; color: #031B4E; margin: 15px 0;">$2,500</p>
      <p>Strategic Corporate Partners</p>
    </div>
    <div class="grid-card glide-in delay-3" style="text-align: center;">
      <h4>Tier III</h4>
      <p style="font-size: 28px; font-weight: 400; color: #031B4E; margin: 15px 0;">$400</p>
      <p>Institutional Members/SMEs</p>
    </div>
  </div>
  <p class="note-text fade-up delay-3" style="text-align: center; font-size: 13px; color: #7A8B9B; margin-top: 30px;">Payment does not guarantee accession. All applicants must clear the Trust & Verification Protocol.</p>
</div>

<!-- ========= STRATEGIC ACCESSION INVITATION ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3>Strategic Accession Invitation</h3>
        <p>The Africa Trade and Investment Chamber of Commerce (ATICC) formally invites your organization to undergo the Accession Protocol for institutional membership.</p>
      </div>
      <div class="framework-right fade-right">
        <p><span style="font-weight: 500">Why Your Organization Has Been Identified:</span> Our selection committee has identified your entity as a verified principal with the institutional capacity to contribute to and benefit from structured trade corridors and high-value investment pipelines.</p>
        <p style="margin-top: 20px;"><span style="font-weight: 500">Strategic Benefits of Accession:</span></p>
        <ul class="bullet-list" style="margin-top: 10px;">
          <li>The Execution Engine: Direct access to Tier-3 (execution-ready) bankable projects</li>
          <li>Trust & Verification (T&V): Protection within an ecosystem where every participant has undergone rigorous institutional vetting</li>
          <li>Capital Orchestration: A structured environment for capital deployment designed to minimize regulatory bottlenecks</li>
          <li>AfCFTA Integration: Strategic positioning to leverage the African Continental Free Trade Area</li>
        </ul>
        <p style="margin-top: 20px;"><span>The Accession Process:</span> Membership is a professional designation granted only to verified stakeholders. To begin the protocol, please submit a formal Expression of Interest (EOI) via our Global Digital Interface.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= CTA SECTION ========= -->
<div class="partner-section">
  <div class="wide-container" style="text-align: center;">
    <a href="{{ route('membership.apply') }}" class="cta-button" style="display: inline-block; background-color: #0e0e0e; color: white; border: none; padding: 16px 36px; font-size: 16px; font-weight: 600; letter-spacing: 0.05em; border-radius: 4px; text-decoration: none; text-transform: uppercase; margin-bottom: 30px;">Apply for Membership →</a>
    <div class="final-quote" style="background: transparent; padding: 0;">
      <p class="scale-in">Structure defines authority.<br>Integrity anchors capital.<br>Execution drives value.</p>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
/* Only using existing colors from homepage */
.wide-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.full-width-gray {
  width: 100%;
  background: #F5F6F8;
  padding: 80px 0;
}

.partner-section {
  width: 100%;
  background: white;
  text-align: center;
  padding: 80px;
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

.supporting-text {
  font-size: 16px;
  color: #4A5E72;
  max-width: 700px;
  margin: 0 auto;
  line-height: 1.6;
}

.grid-5 {
  display: flex;
  gap: 32px;
  flex-wrap: wrap;
  justify-content: center;
}

.grid-card {
  flex: 1;
  min-width: 250px;
  background: #F8F9FA;
  padding: 32px 28px;
  border-radius: 16px;
  text-align: left;
}

.grid-card h4 {
  font-size: 18px;
  font-weight: 400;
  color: #0e0e0e;
  margin-bottom: 12px;
}

.grid-card p {
  font-size: 14px;
  color: #4A5E72;
  line-height: 1.5;
}

.policy-split {
  display: flex;
  gap: 60px;
  align-items: flex-start;
}

.split-left, .split-right {
  flex: 1;
}

.split-left h3 {
  font-size: 28px;
  font-weight: 400;
  color: #0e0e0e;
  margin-bottom: 20px;
}

.split-left p {
  font-size: 16px;
  color: #3a4c5e;
  line-height: 1.6;
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
  color: #2E4156;
  line-height: 1.6;
}

.framework-right ul {
  margin-top: 10px;
}

.cta-button {
  transition: all 0.3s cubic-bezier(0.2, 0.9, 0.4, 1.1);
}

.cta-button:hover {
  transform: translateY(-2px);
  box-shadow: 0 8px 20px rgba(11, 31, 58, 0.12);
}

.final-quote p {
  font-size: 18px;
  color: #0e0e0e;
  line-height: 1.4;
}

.note-text {
  font-size: 13px;
  color: #7A8B9B;
}

.gray-spacer {
  background: #F5F6F8;
  text-align: center;
  padding: 40px 0;
  color: #7A8B9B;
  font-size: 12px;
  letter-spacing: 2px;
}

@media (max-width: 1024px) {
  .policy-split, .framework-split {
    flex-direction: column;
    gap: 30px;
  }
  .partner-section {
    padding: 50px 20px;
  }
  .full-width-gray {
    padding: 50px 0;
  }
}

@media (max-width: 768px) {
  .large-statement {
    font-size: 32px;
  }
  .grid-card {
    min-width: 100%;
  }
  .hero-content h1 {
    max-width: 100% !important;
  }
  .hero-content .body-text {
    max-width: 100% !important;
  }
  .final-quote p {
    font-size: 20px;
  }
}
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .grid-card');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  animatedElements.forEach(el => observer.observe(el));

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
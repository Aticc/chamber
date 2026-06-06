@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= MEMBERSHIP HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 80vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC web pics .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0 auto; padding: 140px 40px 100px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Membership</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Membership <span class="gold-accent">Tiers & Accession</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.7;">Membership in ATICC is not an automatic right but a strategic designation. Access is granted through a curated accession process reserved for verified stakeholders who demonstrate a commitment to institutional transparency and market growth.</div>
  </div>
</div>

<!-- ========= GRAY SPACER ========= -->
<div class="gray-spacer fade-up revealed">
  <p>STRUCTURE DEFINES AUTHORITY. INTEGRITY ANCHORS CAPITAL. EXECUTION DRIVES SCALE.</p>
</div>

<!-- ========= ACCESSION PRINCIPLE ========= -->
<div class="partner-section">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">ACCESSION PRINCIPLE</div>
    <div class="large-statement fade-up delay-1">Strategic Designation</div>
    <div class="supporting-text fade-up delay-2">Membership in ATICC is not an automatic right but a strategic designation. Access is granted through a curated accession process reserved for verified stakeholders who demonstrate a commitment to institutional transparency and market growth.</div>
  </div>
</div>

<!-- ========= MEMBERSHIP TIERS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">MEMBERSHIP TIERS</div>
    <div class="large-statement fade-up delay-1">Aligned. Verified. Committed.</div>
    <div class="tiers-grid">
      <div class="tier-card glide-in delay-1">
        <div class="tier-badge">Tier I</div>
        <h4>Institutional & Institutional Partners</h4>
        <p>Designated for institutional wealth funds, national governments, and multilateral financial institutions. Focuses on policy alignment, G2G frameworks, and large-scale capital deployment.</p>
      </div>
      <div class="tier-card glide-in delay-2">
        <div class="tier-badge">Tier II</div>
        <h4>Strategic Corporate Partners</h4>
        <p>Targeted at Multinational Corporations and Industrial Conglomerates. Facilitates high-level market entry, infrastructure development, and large-scale industrial execution.</p>
      </div>
      <div class="tier-card glide-in delay-3">
        <div class="tier-badge">Tier III</div>
        <h4>Institutional Members</h4>
        <p>Designed for High-Growth SMEs and Accredited Service Providers. These members serve as the critical execution layer within trade value chains.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= ACCESSION PROTOCOL ========= -->
<div class="partner-section">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">ACCESSION PROTOCOL</div>
    <div class="large-statement fade-up delay-1">The Funnel</div>
    <div class="protocol-grid">
      <div class="protocol-card glide-in delay-1">
        <div class="protocol-number">01</div>
        <h4>Expression of Interest (EOI)</h4>
        <p>Initial alignment check</p>
      </div>
      <div class="protocol-card glide-in delay-2">
        <div class="protocol-number">02</div>
        <h4>Trust & Verification (T&V) Review</h4>
        <p>Deep-dive institutional vetting</p>
      </div>
      <div class="protocol-card glide-in delay-3">
        <div class="protocol-number">03</div>
        <h4>Ratification</h4>
        <p>Final approval and strategic onboarding into the ATICC ecosystem</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= REVENUE & SUSTAINABILITY ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <div class="split-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
            <circle cx="12" cy="12" r="3"/>
          </svg>
        </div>
        <h3>Revenue & Sustainability Model</h3>
        <p>ATICC operates on a diversified revenue model to ensure institutional sustainability and operational independence.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li><span>Accession & Annual Dues:</span> Membership lifecycle fees</li>
          <li><span>Success-based Facilitation:</span> Fees derived from executed transactions</li>
          <li><span>Advisory & Intelligence Mandates:</span> Strategic consulting for market entry</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ========= TRUST & VERIFICATION ========= -->
<div class="partner-section">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">TRUST & VERIFICATION (T&V) PROTOCOL</div>
    <div class="large-statement fade-up delay-1">Zero Verification → Zero Access → Zero Transaction Visibility</div>
    <div class="tv-grid">
      <div class="tv-card glide-in delay-1">
        <div class="tv-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
            <path d="M22 4L12 14.01l-3-3"/>
          </svg>
        </div>
        <h4>Identity & Statutory Audit</h4>
        <p>Rigorous legal and beneficial-ownership verification</p>
      </div>
      <div class="tv-card glide-in delay-2">
        <div class="tv-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <rect x="3" y="3" width="18" height="18" rx="2"/>
            <path d="M9 12l2 2 4-4"/>
          </svg>
        </div>
        <h4>Compliance & AML Screening</h4>
        <p>Anti-money laundering and regulatory "bad faith" filtering</p>
      </div>
      <div class="tv-card glide-in delay-3">
        <div class="tv-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
          </svg>
        </div>
        <h4>Execution Capability Assessment</h4>
        <p>Auditing the technical and financial capacity of the entity to deliver</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= VETTING DETAILS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <div class="split-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 8v4l3 3"/>
          </svg>
        </div>
        <h3>Continuous Market Monitoring</h3>
        <p>The T&V Protocol is not a one-time event. ATICC maintains ongoing validation to ensure that member behavior remains aligned with institutional integrity standards.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li><span>Triple-Filter Test:</span> Commercial Viability, Regulatory Alignment, Economic Contribution</li>
          <li><span>Independent Third-Party Validation:</span> Integration with global risk agencies</li>
          <li><span>Integrity Enforcement:</span> Zero-tolerance policy with expulsion and blacklisting</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ========= ANNUAL FEES ========= -->
<div class="partner-section">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">COMMERCIAL STRUCTURE</div>
    <div class="large-statement fade-up delay-1">Annual Accession & Membership Fees (2026/27)</div>
    <div class="pricing-grid">
      <div class="pricing-card glide-in delay-1">
        <h4>Tier I</h4>
        <div class="price">$50,000</div>
        <p>Institutional & Institutional Partners</p>
      </div>
      <div class="pricing-card glide-in delay-2">
        <h4>Tier II</h4>
        <div class="price">$2,500</div>
        <p>Strategic Corporate Partners</p>
      </div>
      <div class="pricing-card glide-in delay-3">
        <h4>Tier III</h4>
        <div class="price">$400</div>
        <p>Institutional Members/SMEs</p>
      </div>
    </div>
    <p class="note-text fade-up delay-3">Payment does not guarantee accession. All applicants must clear the Trust & Verification Protocol.</p>
  </div>
</div>

<!-- ========= STRATEGIC ACCESSION INVITATION ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <div class="framework-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72c.127.96.362 1.903.7 2.81a2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45c.907.338 1.85.573 2.81.7A2 2 0 0122 16.92z"/>
          </svg>
        </div>
        <h3>Strategic Accession Invitation</h3>
        <p>The Africa Trade and Investment Chamber of Commerce (ATICC) formally invites your organization to undergo the Accession Protocol for institutional membership.</p>
      </div>
      <div class="framework-right fade-right">
        <div class="invite-block">
          <p><strong>Why Your Organization Has Been Identified:</strong> Our selection committee has identified your entity as a verified principal with the institutional capacity to contribute to and benefit from structured trade corridors and high-value investment pipelines.</p>
          <p><strong>Strategic Benefits of Accession:</strong></p>
          <ul class="bullet-list">
            <li>The Execution Engine: Direct access to Tier-3 (execution-ready) bankable projects</li>
            <li>Trust & Verification (T&V): Protection within an ecosystem where every participant has undergone rigorous institutional vetting</li>
            <li>Capital Orchestration: A structured environment for capital deployment designed to minimize regulatory bottlenecks</li>
            <li>AfCFTA Integration: Strategic positioning to leverage the African Continental Free Trade Area</li>
          </ul>
          <p><strong>The Accession Process:</strong> Membership is a professional designation granted only to verified stakeholders. To begin the protocol, please submit a formal Expression of Interest (EOI) via our Global Digital Interface.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========= CTA SECTION ========= -->
<div class="partner-section cta-section">
  <div class="wide-container" style="text-align: center;">
    <a href="{{ route('membership.apply') }}" class="cta-button">Apply for Membership →</a>
    <div class="final-quote">
      <p class="scale-in">Structure defines authority.<br>Integrity anchors capital.<br><span class="gold-accent">Execution drives value.</span></p>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  /* Using Global CSS Variables */
  .full-width-white { 
    width: 100%; 
    background: var(--bg-white-2); 
    padding: 80px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .full-width-gray { 
    width: 100%; 
    background: var(--bg-gray-2); 
    padding: 80px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .wide-container {
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 40px;
  }
  
  .partner-section {
    width: 100%;
    background: var(--bg-white-2);
    text-align: center;
    padding: 90px 0;
    border-bottom: 1px solid var(--border-light);
  }
  
  .cta-section {
    border-bottom: none;
  }
  
  .hero-content {
    position: relative;
    z-index: 2;
    max-width: 1400px;
    margin: 0 auto;
    padding: 140px 40px 100px 40px;
  }
  
  .breadcrumb {
    font-size: 12px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--color-accent);
    font-weight: 500;
    margin-bottom: 25px;
  }
  
  .hero-section .headline {
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
  
  .hero-section .body-text {
    font-size: 18px;
font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
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
    line-height: 1.7;
    text-align: center;
  }
  
  /* Gray Spacer */
  .gray-spacer {
    background: var(--bg-gray-2);
    text-align: center;
    padding: 35px 0;
    color: var(--color-text-muted);
    font-size: 11px;
    letter-spacing: 3px;
    border-bottom: 1px solid var(--border-light);
  }
  
  /* Tiers Grid */
  .tiers-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;
    margin-top: 60px;
  }
  
  .tier-card {
    background: var(--bg-gray-2);
    padding: 45px 32px;
    border-bottom: 3px solid var(--color-accent);
    transition: all 0.3s ease;
  }
  
  .tier-card:hover {
    transform: translateY(-6px);
  }
  
  .tier-badge {
    font-size: 12px;
    font-weight: 600;
    color: var(--color-accent);
    letter-spacing: 0.1em;
    margin-bottom: 20px;
  }
  
  .tier-card h4 {
    font-size: 22px;
    font-weight: 500;
    color: var(--color-text-dark);
    margin-bottom: 18px;
  }
  
  .tier-card p {
    font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
  }
  
  /* Protocol Grid */
  .protocol-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;
    margin-top: 60px;
  }
  
  .protocol-card {
    background: var(--bg-gray-2);
    padding: 45px 32px;
    text-align: center;
    border-bottom: 3px solid var(--color-accent);
    transition: all 0.3s ease;
  }
  
  .protocol-card:hover {
    transform: translateY(-6px);
  }
  
  .protocol-number {
    font-family: var(--font-heading);
    font-size: 48px;
    font-weight: 400;
    color: var(--color-accent);
    margin-bottom: 20px;
  }
  
  .protocol-card h4 {
    font-size: 20px;
    font-weight: 500;
    color: var(--color-text-lighter-2);
    margin-bottom: 12px;
  }
  
  .protocol-card p {
    font-size: 14px;
    color: var(--color-text-gray-2);
    line-height: 1.6;
  }
  
  /* T&V Grid */
  .tv-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;
    margin-top: 60px;
  }
  
  .tv-card {
    background: var(--bg-gray-2);
    padding: 40px 28px;
    text-align: center;
    border-bottom: 3px solid var(--color-accent);
    transition: all 0.3s ease;
  }
  
  .tv-card:hover {
    transform: translateY(-6px);
  }
  
  .tv-icon {
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .tv-icon svg {
    color: var(--color-accent);
    width: 44px;
    height: 44px;
  }
  
  .tv-card h4 {
    font-size: 20px;
    font-weight: 500;
    color: var(--color-text-lighter-2);
    margin-bottom: 15px;
  }
  
  .tv-card p {
    font-size: 14px;
    color: var(--color-text-gray-2);
    line-height: 1.6;
  }
  
  /* Pricing Grid */
  .pricing-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;
    margin-top: 60px;
  }
  
  .pricing-card {
    background: var(--bg-gray-2);
    padding: 45px 32px;
    text-align: center;
    border-bottom: 3px solid var(--color-accent);
    transition: all 0.3s ease;
  }
  
  .pricing-card:hover {
    transform: translateY(-6px);
  }
  
  .pricing-card h4 {
    font-size: 20px;
    font-weight: 500;
    color: var(--color-text-lighter-2);
    margin-bottom: 20px;
  }
  
  .price {
    font-family: var(--font-heading);
    font-size: 42px;
    font-weight: 400;
    color: var(--color-accent);
    margin: 20px 0;
  }
  
  .pricing-card p {
    font-size: 14px;
    color: var(--color-text-gray-2);
    line-height: 1.6;
  }
  
  .note-text {
    font-size: 12px;
    color: var(--color-text-muted);
    text-align: center;
    margin-top: 30px;
  }
  
  /* Policy Split */
  .policy-split {
    display: flex;
    gap: 80px;
    align-items: flex-start;
  }
  
  .split-left, .split-right {
    flex: 1;
  }
  
  .split-icon {
    margin-bottom: 25px;
  }
  
  .split-icon svg {
    color: var(--color-accent);
    width: 44px;
    height: 44px;
  }
  
  .split-left h3 {
    font-family: var(--font-heading);
    font-size: 32px;
    font-weight: 400;
    color: var(--color-text-lighter-2);
    margin-bottom: 20px;
  }
  
  .split-left p {
    font-size: 16px;
font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
  }
  
  /* Framework Split */
  .framework-split {
    display: flex;
    gap: 80px;
    align-items: flex-start;
  }
  
  .framework-left {
    flex: 1;
  }
  
  .framework-right {
    flex: 1.2;
  }
  
  .framework-icon {
    margin-bottom: 25px;
  }
  
  .framework-icon svg {
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
  
  .framework-right p {
    font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
    margin-bottom: 20px;
  }
  
  .framework-right strong {
    color: var(--color-text-lighter-2);
    font-weight: 600;
  }
  
  .invite-block {
    background: var(--bg-gray-2);
    padding: 35px;
    border-left: 3px solid var(--color-accent);
  }
  
  /* Bullet List */
  .bullet-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .bullet-list li {
    padding: 14px 0;
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
  
  .bullet-list li span {
    font-weight: 600;
    color: var(--color-text-lighter-2);
    margin-right: 6px;
  }
  
  /* CTA Button */
  .cta-button {
    display: inline-block;
    background-color: var(--color-accent);
    color: var(--color-primary);
    border: none;
    padding: 16px 40px;
    font-size: 13px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-decoration: none;
    text-transform: uppercase;
    transition: all 0.3s ease;
    margin-bottom: 50px;
  }
  
  .cta-button:hover {
    background-color: var(--color-accent-light);
    transform: translateY(-2px);
  }
  
  /* Final Quote */
  .final-quote {
    background: transparent;
    text-align: center;
    padding: 0;
  }
  
  .final-quote p {
    font-family: var(--font-heading);
    font-size: 32px;
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
    .hero-section .headline { font-size: 52px; }
    .large-statement { font-size: 42px; }
    .tiers-grid, .protocol-grid, .tv-grid, .pricing-grid { gap: 25px; }
  }
  
  @media (max-width: 991px) {
    .hero-content { max-width: 70%; }
    .hero-section .headline { font-size: 42px; max-width: 100% !important; }
    .hero-section .body-text { max-width: 100% !important; }
    .tiers-grid, .protocol-grid, .tv-grid, .pricing-grid { grid-template-columns: repeat(2, 1fr); }
    .policy-split, .framework-split { flex-direction: column; gap: 40px; }
  }
  
  @media (max-width: 768px) {
    .wide-container { padding: 0 24px; }
    .hero-content { padding: 100px 24px 60px 24px !important; max-width: 100%; }
    .hero-section .headline { font-size: 36px; }
    .large-statement { font-size: 32px !important; }
    .tiers-grid, .protocol-grid, .tv-grid, .pricing-grid { grid-template-columns: 1fr; gap: 25px; }
    .tier-card, .protocol-card, .tv-card, .pricing-card { padding: 35px 25px; }
    .price { font-size: 36px; }
    .final-quote p { font-size: 24px; }
    .partner-section { padding: 60px 0; }
    .full-width-gray { padding: 60px 0; }
    .invite-block { padding: 25px; }
    .hero-section > div:first-child { opacity: 0.3; }
  }
  
  @media (max-width: 480px) {
    .hero-section .headline { font-size: 32px; }
    .large-statement { font-size: 28px !important; }
    .protocol-number { font-size: 36px; }
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
  
  // Immediately reveal hero elements
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
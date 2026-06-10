@extends("layouts.app")

@section('content')


<div class="aticc-viewport">

  <!-- ==========================================
       01. ABOUT HERO SECTION WITH MASKED BACKGROUND
       ========================================== -->
    <section id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">

    <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
        <div style="position: absolute; top: 0; right: 0; width: 100%; height: 140%; background: url('{{ asset('assets/images/ATICC Vault .jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
      </div>    
    <div class="hero-inner-layout">
      <div class="container-max" style="width: 100%;">
        <div class="about-hero-text-container">
          <div class="breadcrumb fade-up">Home / About Us</div>
          <h1 class="about-main-title fade-up">About <span class="brand-gold-text">ATICC</span></h1>
          <p class="about-supporting-text fade-up delay-1">
            ATICC is established to promote, protect, and scale the commercial interests of entities engaged with African markets. Moving beyond traditional networking, the mandate focuses on:
          </p>
          <div class="about-bullet-stack fade-up delay-2">
            <div class="about-bullet-node">
              <div class="bullet-check-icon">✓</div>
              <div><span class="bullet-bold-label">STRUCTURED MARKET ENTRY:</span> <span class="bullet-desc-text">Providing a roadmap for localized expansion.</span></div>
            </div>
            <div class="about-bullet-node">
              <div class="bullet-check-icon">✓</div>
              <div><span class="bullet-bold-label">CAPITAL FACILITATION:</span> <span class="bullet-desc-text">Linking bankable projects with appropriate funding tiers.</span></div>
            </div>
            <div class="about-bullet-node">
              <div class="bullet-check-icon">✓</div>
              <div><span class="bullet-bold-label">TRANSACTION EXECUTION SUPPORT:</span> <span class="bullet-desc-text">Ensuring the technical and regulatory "last mile" of business deals.</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================
       02. INSTITUTIONAL OVERVIEW
       ========================================== -->
  <section id="institutional-overview" class="full-width-white border-bottom-separator">
    <div class="container-max">
      <div class="centered-heading-wrapper">
        <span class="breadcrumb-light fade-up">INSTITUTIONAL IDENTITY</span>
        <h2 class="section-title-dark fade-up delay-1">Official Designation</h2>
        <p class="section-text-dark fade-up delay-2 max-w-800">
          ATICC is a private, member-governed clearing house and institutional platform engineered to serve as a transaction-driven interface, bridging the gap between global institutional capital and vetted African market opportunities.
        </p>
      </div>
    </div>
  </section>

  <!-- ==========================================
       03. MISSION & STRATEGIC PURPOSE
       ========================================== -->
  <section id="mission-purpose" class="full-width-gray">
    <div class="container-max">
      <div class="centered-heading-wrapper">
        <span class="breadcrumb-light fade-up">POSITIONING</span>
        <h2 class="section-title-dark fade-up delay-1">The Gateway</h2>
        <p class="section-text-dark fade-up delay-2 max-w-800">
          ATICC functions as a strategic intelligence gateway, anchored by an Africa-focused institutional core and powered by a proprietary global digital interface, connecting verified stakeholders worldwide through a structured, secure, and transparent environment for African market access.
        </p>
      </div>
    </div>
  </section>

  <!-- ==========================================
       04. PRIMARY OBJECTIVE SPLIT PANEL
       ========================================== -->
  <section class="full-width-white border-top-separator">
    <div class="container-max">
      <div class="policy-split-grid">
        <div class="split-left-panel fade-left">
          <h3 class="panel-inner-heading">Primary Objective</h3>
          <p class="panel-inner-paragraph">To catalyze high-value trade and investment flows that deliver measurable outcomes and sustain value creation.</p>
        </div>
        <div class="split-right-panel fade-right">
          <ul class="clean-bullet-list">
            <li><span>De-risk African Markets:</span> Utilizing local intelligence to lower the barrier for global entry.</li>
            <li><span>Deliver Measurable Outcomes:</span> Moving from "intent" to "executed" economic milestones.</li>
            <li><span>Support Industrial Growth:</span> Enabling the expansion of high-impact enterprises across the continent.</li>
            <li><span>Sustain Value Creation:</span> Ensuring long-term profitability and localized economic stability.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================
       05. GOVERNANCE FRAMEWORK GRID
       ========================================== -->
  <section id="governance" class="full-width-white framework-background-edge">
    <div class="container-max">
      <div class="centered-heading-wrapper">
        <span class="breadcrumb-light fade-up">GOVERNANCE & LEADERSHIP</span>
        <h2 class="section-title-dark fade-up delay-1">Institutional Blueprint</h2>
      </div>
      <div class="governance-four-grid margin-top-60">
        <div class="gov-node-card glide-in delay-1">
          <div class="gov-card-header-label">01</div>
          <h4>Office of the Group Chairman</h4>
          <p>Supreme Strategic Authority responsible for defining long-term global strategy, authorizing high-level engagements, and providing final oversight on institutional risk.</p>
        </div>
        <div class="gov-node-card glide-in delay-2">
          <div class="gov-card-header-label">02</div>
          <h4>The Secretariat-General</h4>
          <p>Translates board-level strategy into operational reality, coordinating multi-regional operations and enforcing institutional reporting systems.</p>
        </div>
        <div class="gov-node-card glide-in delay-3">
          <div class="gov-card-header-label">03</div>
          <h4>The Operations Directorate</h4>
          <p>Manages the technical and administrative ecosystem, including the Global Digital Interface, onboarding protocols, and quality control.</p>
        </div>
        <div class="gov-node-card glide-in delay-4">
          <div class="gov-card-header-label">04</div>
          <h4>Advisory Board of Governors</h4>
          <p>Composed of global industry titans providing strategic foresight, market intelligence, and diplomatic bridge-building.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================
       06. INSTITUTIONAL GOVERNANCE SAFEGUARDS
       ========================================== -->
  <section class="full-width-gray border-top-separator">
    <div class="container-max">
      <div class="policy-split-grid">
        <div class="split-left-panel fade-left">
          <h3 class="panel-inner-heading">Institutional Governance Safeguards</h3>
          <p class="panel-inner-paragraph">Ensuring institutional balance and operational resilience through distributed oversight and continuity.</p>
        </div>
        <div class="split-right-panel fade-right">
          <div class="text-block-stack">
            <p class="stack-row-node"><span>Strategic Oversight Committee:</span> Periodic review of chairman-level decisions and institutional direction.</p>
            <p class="stack-row-node"><span>Independent Advisory Review Layer:</span> Non-executive validation of high-impact strategic engagements.</p>
            <p class="stack-row-node"><span>Delegated Authority Protocols:</span> Thresholds for decentralized execution across directorates to prevent operational bottlenecks.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================
       07. TRUST & VERIFICATION STATEMENT MATRIX
       ========================================== -->
  <section class="full-width-dark-navy">
    <div class="container-max">
      <div class="centered-heading-wrapper">
        <span class="breadcrumb-gold-label fade-up">TRUST & VERIFICATION PROTOCOL</span>
        <div class="large-statement-callout fade-up delay-1">
          Zero Verification <span class="divider-gold">&rarr;</span> Zero Access <span class="divider-gold">&rarr;</span> Zero Transaction Visibility
        </div>
        <p class="section-text-muted fade-up delay-2 max-w-700">
          ATICC operates on strict gatekeeper logic with a tiered vetting framework, continuous market monitoring, and integrity enforcement through a zero-tolerance policy.
        </p>
      </div>
    </div>
  </section>

  <!-- ==========================================
       08. TIERED VETTING FRAMEWORK
       ========================================== -->
  <section class="full-width-white">
    <div class="container-max">
      <div class="policy-split-grid">
        <div class="split-left-panel fade-left">
          <h3 class="panel-inner-heading">Tiered Vetting Framework</h3>
          <p class="panel-inner-paragraph">Every project or trade opportunity listed on the platform must pass a triple-filter test: Commercial Viability, Regulatory Alignment, and Economic Contribution.</p>
        </div>
        <div class="split-right-panel fade-right">
          <ul class="clean-bullet-list">
            <li><span>Identity & Statutory Audit:</span> Legal and beneficial-ownership verification</li>
            <li><span>Compliance & AML Screening:</span> Anti-money laundering filtering</li>
            <li><span>Execution Capability Assessment:</span> Technical and financial capacity audit</li>
            <li><span>Integrity Enforcement:</span> Zero-tolerance policy with expulsion and blacklisting</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================
       09. MARKET CONNECTIVITY PLATFORMS
       ========================================== -->
  <section id="regional" class="full-width-gray border-top-separator">
    <div class="container-max">
      <div class="centered-heading-wrapper">
        <span class="breadcrumb-light fade-up">GLOBAL TRADE CORRIDORS & MARKET ACCESS</span>
        <h2 class="section-title-dark fade-up delay-1">Market Connectivity Platforms</h2>
      </div>
      <div class="governance-four-grid margin-top-60">
        <div class="gov-node-card white-variant glide-in delay-1">
          <h4>The Corridor Principle</h4>
          <p>Africa as a network of interconnected economic corridors, optimizing trade flows based on regional logistics and historical routes.</p>
        </div>
        <div class="gov-node-card white-variant glide-in delay-2">
          <h4>Strategic Trade Facilitation</h4>
          <p>Technical "soft infrastructure" for trade: regulatory navigation, documentation optimization, and market entry intelligence.</p>
        </div>
        <div class="gov-node-card white-variant glide-in delay-3">
          <h4>AfCFTA Integration</h4>
          <p>Private-sector bridge for the African Continental Free Trade Area, leveraging tariff reductions and intra-African trade preferences.</p>
        </div>
        <div class="gov-node-card white-variant glide-in delay-4">
          <h4>International Access Nodes</h4>
          <p>Strategic global junctions in key financial hubs: London, Dubai, New York, and Beijing.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================
       10. ATICC VS TRADITIONAL CHAMBERS COMPARE PANEL
       ========================================== -->
  <section id="sectors" class="full-width-white">
    <div class="container-max">
      <div class="compare-vertical-wrapper">
        <div class="compare-lead-header fade-up">
          <h3 class="section-title-dark">ATICC vs Traditional Chambers</h3>
          <p class="section-text-dark max-w-700 margin-auto-centered">
            ATICC differentiates itself from traditional African chambers by operating as a transaction-driven "clearinghouse" rather than a general advocacy body.
          </p>
        </div>
        <div class="compare-matrix-rows margin-top-60 fade-up delay-1">
          <div class="compare-row-node">
            <div class="compare-label-title">From "Networking" to "Execution Engine"</div>
            <div class="compare-desc-body">ATICC focuses on the "last mile" of transactions, providing technical infrastructure to ensure capital closes on vetted projects.</div>
          </div>
          <div class="compare-row-node">
            <div class="compare-label-title">Gatekeeper Logic</div>
            <div class="compare-desc-body">ATICC uses a "Kill Switch" system to remove non-compliant entities, ensuring a trustworthy environment.</div>
          </div>
          <div class="compare-row-node">
            <div class="compare-label-title">Trade Corridor Focus</div>
            <div class="compare-desc-body">ATICC approaches Africa as interconnected economic corridors rather than fragmented states.</div>
          </div>
          <div class="compare-row-node">
            <div class="compare-label-title">Technical Institutionality</div>
            <div class="compare-desc-body">A Secretariat-General and Advisory Board of global experts building trust with institutional investors.</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================
       11. STANDARDS & COMPLIANCE
       ========================================== -->
  <section id="standards" class="full-width-gray border-top-separator">
    <div class="container-max">
      <div class="centered-heading-wrapper">
        <span class="breadcrumb-light fade-up">STANDARDS & COMPLIANCE</span>
        <h2 class="section-title-dark fade-up delay-1">Institutional Standards</h2>
        <p class="section-text-dark fade-up delay-2 max-w-700 margin-auto-centered">
          ATICC maintains rigorous institutional standards across all operations, ensuring alignment with global best practices and regulatory frameworks.
        </p>
      </div>
      <div class="governance-four-grid margin-top-60 standard-three-column-override">
        <div class="gov-node-card white-variant glide-in delay-1">
          <h4>Operational Standards</h4>
          <p>Defined protocols for verification, onboarding, and transaction execution.</p>
        </div>
        <div class="gov-node-card white-variant glide-in delay-2">
          <h4>Compliance Framework</h4>
          <p>Alignment with international regulatory and AML/KYC requirements.</p>
        </div>
        <div class="gov-node-card white-variant glide-in delay-3">
          <h4>Reporting & Accountability</h4>
          <p>Structured reporting and institutional oversight mechanisms.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================
       12. LEGAL & COMPLIANCE MATRIX PANEL
       ========================================== -->
  <section id="legal" class="full-width-white border-top-separator">
    <div class="container-max">
      <div class="centered-heading-wrapper">
        <span class="breadcrumb-light fade-up">LEGAL & COMPLIANCE</span>
        <h2 class="section-title-dark fade-up delay-1">Legal Framework</h2>
        <p class="section-text-dark fade-up delay-2 max-w-700 margin-auto-centered">
          ATICC operates within a defined legal and compliance framework designed to protect institutional integrity and transaction credibility.
        </p>
      </div>
      <div class="policy-split-grid margin-top-60">
        <div class="split-left-panel fade-left">
          <ul class="clean-bullet-list">
            <li><span>ATICC Model Clause:</span> 30-day cooling-off period for dispute resolution</li>
            <li><span>Integrity Blacklist:</span> De-accession and ecosystem blacklisting for non-compliance</li>
            <li><span>Indemnity:</span> Final fiduciary responsibility rests with principals</li>
          </ul>
        </div>
        <div class="split-right-panel fade-right">
          <ul class="clean-bullet-list">
            <li><span>Jurisdictional Alignment:</span> International arbitration hubs (Mauritius, London, Dubai)</li>
            <li><span>Dispute Facilitation:</span> High-level mediation through the Secretariat-General</li>
            <li><span>Institutional Shield:</span> Standardized legal environment for member interactions</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- ==========================================
       13. FINAL QUOTE
       ========================================== -->
  <section class="final-quote-slat">
    <div class="container-max">
      <h2 class="axiom-dark-text scale-in">
        Structure defines authority.<br>
        Integrity anchors capital.<br>
        <span class="gold-brand-text">Execution drives value.</span>
      </h2>
    </div>
  </section>

</div>

@include('layouts.footer')

<!-- ==========================================
     ATICC INSTITUTIONAL STYLESHEET
     ========================================== -->
<style>
  /* Global CSS Variables */
  body {
    font-family: var(--font-body);
    background-color: var(--bg-white-2);
    color: var(--color-text-dark);
    line-height: 1.5;
    overflow-x: hidden;
  }

  .aticc-viewport {
    width: 100%;
    overflow-x: clip;
  }

  .container-max {
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 40px;
  }

  /* Breadcrumbs */
  .breadcrumb, .breadcrumb-light, .breadcrumb-gold-label {
    font-size: 12px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    font-weight: 500;
    display: inline-block;
  }
  .breadcrumb { color: var(--color-accent); }
  .breadcrumb-light { color: var(--color-text-gray-2); }
  .breadcrumb-gold-label { color: var(--color-accent); margin-bottom: 20px; display: inline-block; }

  .brand-gold-text, .gold-brand-text, .gold-accent {
    color: var(--color-accent);
  }

  /* Hero Section - NO MASK FADE, just clean split layout */
  .about-hero-block {
    position: relative;
    background-color: #FFFFFF;
    min-height: 70vh;
    overflow: hidden;
    display: flex;
    align-items: center;
  }
  
  .hero-mask-graphic {
    position: absolute;
    top: 0;
    right: 0;
    width: 55%;
    height: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center right;
    pointer-events: none;
    z-index: 1;
  }
  
  .hero-inner-layout {
    position: relative;
    z-index: 2;
    width: 100%;
    padding: 100px 0 80px 0;
  }
  
  .about-hero-text-container {
    max-width: 680px;
    position: relative;
    z-index: 3;
  }
  
  .about-main-title {
    font-family: var(--font-heading);
    font-size: 64px;
    font-weight: 600;
    line-height: 1.1;
    color: var(--color-text-dark);
    margin: 20px 0 24px 0;
  }
  
  .about-supporting-text {
    font-size: 16px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
    margin-bottom: 32px;
  }
  
  .about-bullet-stack {
    display: flex;
    flex-direction: column;
    gap: 20px;
    margin-top: 10px;
  }
  
  .about-bullet-node {
    display: flex;
    align-items: flex-start;
    gap: 14px;
  }
  
  .bullet-check-icon {
    width: 22px;
    height: 22px;
    background-color: var(--color-accent);
    color: #0A1A2F;
    font-weight: 700;
    font-size: 13px;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    margin-top: 2px;
  }
  
  .bullet-bold-label {
    font-weight: 700;
    color: var(--color-text-dark);
    margin-right: 6px;
  }
  
  .bullet-desc-text {
    color: var(--color-text-gray-2);
    font-size: 15px;
  }

  /* Section Containers */
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
  
  .full-width-dark-navy {
    width: 100%;
    background: var(--color-primary-dark);
    padding: 90px 0;
  }
  
  .border-top-separator {
    border-top: 1px solid var(--border-light);
    border-bottom: none;
  }
  
  .border-bottom-separator {
    border-bottom: 1px solid var(--border-light);
  }
  
  .centered-heading-wrapper {
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
  }
  
  .section-title-dark {
    font-family: var(--font-heading);
    font-size: 42px;
    font-weight: 500;
    color: var(--color-text-dark);
    margin-bottom: 20px;
  }
  
  .section-text-dark {
    font-size: 16px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
  }
  
  .section-text-muted {
    font-size: 16px;
    color: rgba(255,255,255,0.75);
    line-height: 1.7;
  }
  
  .max-w-800 { max-width: 800px; margin-left: auto; margin-right: auto; }
  .max-w-700 { max-width: 700px; margin-left: auto; margin-right: auto; }
  .margin-auto-centered { margin-left: auto; margin-right: auto; }
  .margin-top-60 { margin-top: 60px; }

  /* Split Panels */
  .policy-split-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: start;
  }
  
  .split-left-panel h3, .panel-inner-heading {
    font-family: var(--font-heading);
    font-size: 28px;
    font-weight: 500;
    margin-bottom: 20px;
    color: var(--color-text-dark);
  }
  
  .split-left-panel p, .panel-inner-paragraph {
    font-size: 16px;
    color: var(--color-text-gray-2);
    line-height: 1.6;
  }
  
  .clean-bullet-list {
    list-style: none;
    padding: 0;
  }
  
  .clean-bullet-list li {
    padding: 12px 0;
    border-bottom: 1px solid var(--border-light);
    display: flex;
    align-items: flex-start;
    gap: 12px;
    font-size: 15px;
    color: var(--color-text-gray-2);
  }
  
  .clean-bullet-list li span {
    font-weight: 700;
    color: var(--color-text-dark);
    min-width: 180px;
  }
  
  .text-block-stack {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }
  
  .stack-row-node {
    font-size: 15px;
    color: var(--color-text-gray-2);
    border-left: 2px solid var(--color-accent);
    padding-left: 20px;
  }
  
  .stack-row-node span {
    font-weight: 700;
    color: var(--color-text-dark);
    display: block;
    margin-bottom: 6px;
  }

  /* Governance Grid Cards */
  .governance-four-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
  }
  
  .gov-node-card {
    background: var(--bg-gray-2);
    padding: 35px 28px;
    border-bottom: 3px solid var(--color-accent);
    transition: all 0.3s ease;
  }
  
  .gov-node-card:hover { transform: translateY(-6px); }
  
  .gov-node-card.white-variant {
    background: var(--bg-white-2);
    border: 1px solid var(--border-light);
    border-bottom: 3px solid var(--color-accent);
  }
  
  .gov-node-card.white-variant:hover { transform: translateY(-4px); }
  
  .gov-card-header-label {
    font-size: 12px;
    font-weight: 700;
    color: var(--color-accent);
    letter-spacing: 0.1em;
    margin-bottom: 20px;
  }
  
  .gov-node-card h4 {
    font-size: 20px;
    font-weight: 600;
    color: var(--color-text-dark);
    margin-bottom: 15px;
    font-family: var(--font-heading);
  }
  
  .gov-node-card p {
    font-size: 14px;
    color: var(--color-text-gray-2);
    line-height: 1.6;
  }
  
  .standard-three-column-override {
    grid-template-columns: repeat(3, 1fr);
    max-width: 1000px;
    margin: 0 auto;
  }

  /* Large Statement Callout */
  .large-statement-callout {
    font-family: var(--font-heading);
    font-size: 38px;
    font-weight: 500;
    color: #FFFFFF;
    margin: 20px 0 20px;
    line-height: 1.3;
  }
  
  .divider-gold {
    color: var(--color-accent);
    margin: 0 10px;
  }

  /* Compare Matrix */
  .compare-vertical-wrapper { max-width: 1100px; margin: 0 auto; }
  .compare-matrix-rows { display: flex; flex-direction: column; gap: 28px; }
  
  .compare-row-node {
    background: var(--bg-gray-2);
    padding: 28px 32px;
    border-left: 4px solid var(--color-accent);
    transition: all 0.2s ease;
  }
  
  .compare-row-node:hover { transform: translateX(4px); }
  
  .compare-label-title {
    font-size: 20px;
    font-weight: 600;
    color: var(--color-text-dark);
    margin-bottom: 8px;
  }
  
  .compare-desc-body {
    font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.6;
  }

  /* Final Quote Slat */
  .final-quote-slat {
    background: var(--bg-white-2);
    text-align: center;
    padding: 100px 20px;
    border-top: 1px solid var(--border-light);
  }
  
  .axiom-dark-text {
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
  
  .fade-up.revealed { animation: smoothFadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
  .fade-left.revealed { animation: slideFadeLeft 0.7s ease forwards; }
  .fade-right.revealed { animation: slideFadeRight 0.7s ease forwards; }
  .scale-in.revealed { animation: smoothScale 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
  .glide-in.revealed { animation: smoothGlide 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards; }
  
  @keyframes smoothFadeUp {
    0% { opacity: 0; transform: translateY(24px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  @keyframes slideFadeLeft {
    0% { opacity: 0; transform: translateX(-30px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  @keyframes slideFadeRight {
    0% { opacity: 0; transform: translateX(30px); }
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
    .governance-four-grid { grid-template-columns: repeat(2, 1fr); }
    .about-main-title { font-size: 48px; }
    .large-statement-callout { font-size: 32px; }
    .axiom-dark-text { font-size: 36px; }
  }
  
  @media (max-width: 768px) {
    .container-max { padding: 0 24px; }
    .policy-split-grid { grid-template-columns: 1fr; gap: 32px; }
    .governance-four-grid { grid-template-columns: 1fr; }
    .standard-three-column-override { grid-template-columns: 1fr; }
    .about-hero-text-container { max-width: 100%; }
    .about-main-title { font-size: 36px; }
    .hero-mask-graphic { width: 100%; opacity: 0.6; }
    .section-title-dark { font-size: 32px; }
    .large-statement-callout { font-size: 26px; }
    .axiom-dark-text { font-size: 28px; }
    .full-width-white, .full-width-gray { padding: 50px 0; }
    .final-quote-slat { padding: 80px 20px; }
  }
</style>

<!-- ==========================================
     TRANSITION MATRIX INTERSECTION CONTROLLER
     ========================================== -->
<script>
  document.addEventListener("DOMContentLoaded", function() {
    const animationTargets = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
    
    const operationalObserver = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('revealed');
          operationalObserver.unobserve(entry.target);
        }
      });
    }, { 
      threshold: 0.10, 
      rootMargin: '0px 0px -40px 0px' 
    });

    animationTargets.forEach(element => operationalObserver.observe(element));
  });
</script>
@endsection
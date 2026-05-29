@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 100vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC MAP .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - minimal padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Controlled execution platform <span class="headline2" style="font-size: 46px;">for institutional capital.</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">The Africa Trade & Investment Chamber of Commerce (ATICC) is a private, member-governed clearing house and institutional platform engineered to serve as a transaction-driven interface, bridging the gap between global institutional capital and vetted African market opportunities.</div>
    <button class="cta-button fade-up delay-3 revealed" onclick="document.getElementById('access').scrollIntoView({behavior: 'smooth'})">Access ATICC</button>
    <div class="icon-row">
      <div class="icon-item fade-left delay-4 revealed"><svg viewBox="0 0 24 24" stroke="currentColor"><path d="M12 2L3 7l9 5 9-5-9-5z"/><path d="M3 12l9 5 9-5"/><path d="M3 17l9 5 9-5"/><path d="M12 7v10"/></svg><span class="icon-label">VERIFIED OPPORTUNITIES</span></div>
      <div class="icon-item fade-left delay-5 revealed"><svg viewBox="0 0 24 24" stroke="currentColor"><rect x="4" y="8" width="16" height="12" rx="1"/><path d="M8 6V4h8v2"/><path d="M12 12v3"/></svg><span class="icon-label">INSTITUTIONAL STRENGTH</span></div>
      <div class="icon-item fade-left delay-6 revealed"><svg viewBox="0 0 24 24" stroke="currentColor"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/></svg><span class="icon-label">STRATEGIC EXECUTION</span></div>
      <div class="icon-item fade-left delay-7 revealed"><svg viewBox="0 0 24 24" stroke="currentColor"><path d="M21 12a9 9 0 1 0-9 9"/><path d="M12 6v6l4 2"/><path d="M16 21.5L19 18l-3-3"/></svg><span class="icon-label">MEASURABLE IMPACT</span></div>
    </div>
  </div>
</div>

<!-- ========= GRAY SPACER ========= -->
<div class="gray-spacer fade-up revealed">
  <p> STRUCTURE DEFINES AUTHORITY. INTEGRITY ANCHORS CAPITAL. EXECUTION DRIVES SCALE. </p>
</div>

<!-- ========= INSTITUTIONAL OVERVIEW SECTION ========= -->
<div id="institutional-overview" class="bg-section" style="position: relative; background-color: white; overflow: hidden; min-height: 100vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute;top: 0;right: 0;width: 87%;height: 134%;background: url('{{ asset('/assets/images/ATICC web image .png') }}') no-repeat right center;background-size: cover;mask-image: linear-gradient(to left, black 71%, transparent 100%);-webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="bg-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0 ; padding: 60px 40px;">
    <div class="breadcrumb fade-up">Home / Institutional Overview</div>
    <h2 class="section-title fade-up delay-1" style="font-size: 42px; max-width: 55%;">INSTITUTIONAL IDENTITY & MANDATE</h2>
    <div class="section-subhead fade-up delay-2" style="font-size: 20px; max-width: 50%;">Official Designation</div>
    <div class="section-text fade-up delay-3" style="font-size: 16px; max-width: 45%; line-height: 1.5;">ATICC is a private, member-governed clearing house and institutional platform engineered to serve as a transaction-driven interface, bridging the gap between global institutional capital and vetted African market opportunities.</div>
  </div>
</div>

<!-- ========= MEMBERSHIP TIERS SECTION ========= -->
<div id="trade-overview" class="partner-section section-anchor">
  <div class="centered-eyebrow fade-up" style="font-size: 13px;">MEMBERSHIP TIERS</div>
  <div class="large-statement fade-up delay-1" style="font-size: 48px;">Aligned. Verified. Committed.</div>
  <div class="supporting-text fade-up delay-2" style="font-size: 16px; max-width: 550px;">ATICC operates a curated accession model reserved for verified stakeholders who demonstrate commitment to institutional transparency and market growth.</div>
  <div class="grid-5">
    <div class="grid-card glide-in delay-1">
      <h4 style="font-size: 18px;">Tier I: Institutional & Institutional Partners</h4>
      <p style="font-size: 14px;">Institutional wealth funds, national governments, and multilateral financial institutions focusing on policy alignment, G2G frameworks, and large-scale capital deployment.</p>
    </div>
    <div class="grid-card glide-in delay-2">
      <h4 style="font-size: 18px;">Tier II: Strategic Corporate Partners</h4>
      <p style="font-size: 14px;">Multinational corporations and industrial conglomerates facilitating high-level market entry, infrastructure development, and industrial execution.</p>
    </div>
    <div class="grid-card glide-in delay-3">
      <h4 style="font-size: 18px;">Tier III: Institutional Members</h4>
      <p style="font-size: 14px;">High-growth SMEs and accredited service providers serving as the critical execution layer within trade value chains.</p>
    </div>
    <div class="grid-card glide-in delay-4">
      <h4 style="font-size: 18px;">The Accession Protocol</h4>
      <p style="font-size: 14px;">EOI → T&V Review → Ratification. Each step ensures alignment, verification, and strategic onboarding.</p>
    </div>
    <div class="grid-card glide-in delay-5">
      <h4 style="font-size: 18px;">Revenue Model</h4>
      <p style="font-size: 14px;">Accession dues, success-based facilitation fees, and advisory mandates for market entry.</p>
    </div>
  </div>
</div>

<!-- ========= TRADE & INVESTMENT OVERVIEW SECTION ========= -->
<div id="verification-intelligence" class="bg-section" style="position: relative; background-color: white; overflow: hidden; min-height: 100vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 127%; background: url('{{ asset('assets/images/ATICC web pics 2.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="bg-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-right">Home / Trade & Investment</div>
    <h2 class="section-title fade-right delay-1" style="font-size: 42px; max-width: 55%;">TRUST & VERIFICATION (T&V) PROTOCOL</h2>
    <div class="section-subhead fade-right delay-2" style="font-size: 20px; max-width: 50%;">Strategic intelligence gateway to African markets.</div>
    <div class="section-text fade-right delay-3" style="font-size: 16px; max-width: 45%; line-height: 1.5;">ATICC operates on strict gatekeeper logic: Zero Verification → Zero Access → Zero Transaction Visibility. The T&V Protocol maintains ongoing validation to ensure institutional integrity.</div>
  </div>
</div>

<!-- ========= T&V PROTOCOL DETAILS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3 style="font-size: 28px; font-weight: 400; color: #0e0e0e; margin-bottom: 20px;">TIERED VETTING FRAMEWORK</h3>
        <p style="font-size: 15px; color: #3A4C5E; line-height: 1.6;">Every project or trade opportunity listed on the platform must pass a triple-filter test: Commercial Viability, Regulatory Alignment, and Economic Contribution. ATICC integrates with global risk agencies for external assurance.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list" style="font-size: 14px;">
          <li><span>Identity & Statutory Audit:</span> Legal and beneficial-ownership verification</li>
          <li><span>Compliance & AML Screening:</span> Anti-money laundering filtering</li>
          <li><span>Execution Capability Assessment:</span> Technical and financial capacity audit</li>
          <li><span>Integrity Enforcement:</span> Zero-tolerance policy with expulsion and blacklisting</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= GLOBAL TRADE CORRIDORS ========= -->
<div class="main-content">
  <div class="wide-container" style="padding: 0 80px;">
    <div class="centered-eyebrow fade-up" style="text-align: center; font-size: 13px;">GLOBAL TRADE CORRIDORS & MARKET ACCESS</div>
    <div class="products-grid">
      <div class="product-card glide-in delay-1">
        <h4 style="font-size: 18px;">The Corridor Principle</h4>
        <p style="font-size: 13px;">Africa as a network of interconnected economic corridors, optimizing trade flows based on regional logistics and historical routes.</p>
      </div>
      <div class="product-card glide-in delay-2">
        <h4 style="font-size: 18px;">Strategic Trade Facilitation</h4>
        <p style="font-size: 13px;">Technical "soft infrastructure" for trade: regulatory navigation, documentation optimization, and market entry intelligence.</p>
      </div>
      <div class="product-card glide-in delay-3">
        <h4 style="font-size: 18px;">Vertical Sector Specialization</h4>
        <p style="font-size: 13px;">High-impact sectors: Agro-Industrial Value Chains, Energy & Critical Infrastructure, and Digital Trade & Fintech.</p>
      </div>
      <div class="product-card glide-in delay-4">
        <h4 style="font-size: 18px;">AfCFTA Integration</h4>
        <p style="font-size: 13px;">Private-sector bridge for the African Continental Free Trade Area, leveraging tariff reductions and intra-African trade preferences.</p>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= TRADE SERVICES SUB-SECTIONS ========= -->
<div id="trade-facilitation" class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Trade Facilitation</h3>
        <p style="font-size: 15px;">Technical "soft infrastructure" for trade: regulatory navigation, documentation optimization, and market entry intelligence.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 14px;"><span>Regulatory Navigation:</span> Direct guidance on localized trade laws.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Documentation Optimization:</span> Support for standardized export/import protocols.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Market Entry Intelligence:</span> Specialized strategies for entering high-barrier jurisdictions.</p>
      </div>
    </div>
  </div>
</div>

<div id="market-access" class="full-width-white">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Cross-Border Market Access</h3>
        <p style="font-size: 15px;">ATICC provides structured market access solutions for institutional partners entering African markets.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 14px;"><span>Market Entry Frameworks:</span> Structured pathways for institutional capital deployment.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Regulatory Alignment:</span> Compliance with cross-border trade and investment frameworks.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Institutional Coordination:</span> Engagement with local and regional stakeholders.</p>
      </div>
    </div>
  </div>
</div>

<div id="sector-programs" class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Strategic Sector Programs</h3>
        <p style="font-size: 15px;">ATICC prioritizes high-impact sectors that drive systemic growth across African markets.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 14px;"><span>Agro-Industrial Value Chains:</span> Moving from raw exports to localized processing.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Energy & Critical Infrastructure:</span> Powering the industrial base.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Digital Trade & Fintech:</span> Enabling frictionless movement of value.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= INVESTMENT SERVICES SUB-SECTIONS ========= -->
<div id="investment-coordination" class="full-width-white">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Investment Coordination</h3>
        <p style="font-size: 15px;">ATICC coordinates institutional investment across priority sectors and markets.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 14px;"><span>Capital Alignment:</span> Matching institutional capital with vetted opportunities.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Transaction Structuring:</span> Financial and legal frameworks for investment execution.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Portfolio Coordination:</span> Ongoing oversight of institutional investments.</p>
      </div>
    </div>
  </div>
</div>

<div id="capital-matching" class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Capital Matching</h3>
        <p style="font-size: 15px;">ATICC facilitates capital deployment by connecting institutional investors with verified, execution-ready opportunities.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 14px;"><span>Investor Alignment:</span> Matching institutional mandates with appropriate opportunities.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Due Diligence Support:</span> Verification and validation of investment opportunities.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Capital Deployment:</span> Structured pathways for institutional capital entry.</p>
      </div>
    </div>
  </div>
</div>

<div id="project-validation" class="full-width-white">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Project Validation</h3>
        <p style="font-size: 15px;">Every project or trade opportunity listed on the platform must pass a triple-filter test.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 14px;"><span>Commercial Viability:</span> Can it generate returns?</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Regulatory Alignment:</span> Is it legally sound?</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Economic Contribution:</span> Does it deliver measurable impact?</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= PARTNERSHIPS SUB-SECTIONS ========= -->
<div id="partnerships" class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Institutional Partnerships</h3>
        <p style="font-size: 15px;">ATICC engages strategic partners across capital, trade, and institutional ecosystems.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 14px;"><span>Capital Partners:</span> Institutional investors and wealth funds.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Trade Partners:</span> Corporates, industry operators, and trade bodies.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Institutional Partners:</span> Governments, multilaterals, and development institutions.</p>
      </div>
    </div>
  </div>
</div>

<div id="infrastructure" class="full-width-white">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Infrastructure & Energy</h3>
        <p style="font-size: 15px;">ATICC facilitates infrastructure and energy investment across African markets.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 14px;"><span>Project Pipeline:</span> Verified infrastructure and energy opportunities.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Capital Coordination:</span> Connecting projects with institutional capital.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Execution Support:</span> Technical and regulatory assistance for project delivery.</p>
      </div>
    </div>
  </div>
</div>

<div id="digital-trade" class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Digital Trade & Innovation</h3>
        <p style="font-size: 15px;">ATICC enables digital trade and innovation across African markets.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 14px;"><span>Digital Trade Facilitation:</span> Enabling frictionless movement of value.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Fintech Integration:</span> Connecting institutional capital with digital finance opportunities.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Innovation Coordination:</span> Structured engagement with technology partners.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= EVENTS & MISSIONS PREVIEW ========= -->
<div id="events-preview" class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">EVENTS & MISSIONS</div>
    <div class="large-statement fade-up delay-1" style="font-size: 32px; text-align: center;">Institutional Summits & Missions</div>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 700px; margin: 0 auto;">ATICC convenes institutional summits and executes targeted trade missions across priority markets.</p>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 50px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>Institutional Summits</h4>
        <p>High-level convenings aligning capital, policy, and market participants.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>Trade Missions</h4>
        <p>Targeted deployments across priority markets and sectors.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>Investment Forums</h4>
        <p>Structured engagements connecting capital with opportunities.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= EXECUTIVE CTA SECTION ========= -->
<div id="executive-cta" class="full-width-gray">
  <div class="wide-container" style="text-align: center;">
    <div class="centered-eyebrow fade-up" style="text-align: center;">EXECUTIVE ENGAGEMENT</div>
    <div class="large-statement fade-up delay-1" style="font-size: 32px; text-align: center;">Access Institutional Capital</div>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 600px; margin: 0 auto 30px auto;">ATICC provides structured access to institutional capital, verified opportunities, and execution-ready platforms.</p>
    <a href="{{ route('access.plans') }}" class="cta-button" style="display: inline-block; background-color: #041931; color: white; border: none; padding: 16px 36px; font-size: 16px; font-weight: 600; letter-spacing: 0.05em; border-radius: 4px; text-decoration: none; text-transform: uppercase;">Access ATICC →</a>
  </div>
</div>

<!-- ========= HUMAN CAPITAL SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">HUMAN CAPITAL & FELLOWSHIP PIPELINE</h3>
        <p style="font-size: 15px;">ATICC cultivates a strategic talent reserve of professionals capable of navigating cross-border African trade and investment.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 14px;"><span>Merit-Based Accession</span><br>Candidates inducted based on technical capability, leadership potential, and ethical alignment.</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Development Curriculum</span><br>Transaction Structuring | Digital Governance | Strategic Foresight</p>
        <p style="font-size: 14px; margin-top: 15px;"><span>Performance Audit</span><br>Continuous evaluation of quantitative contributions and qualitative alignment.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= EXECUTION SECTION ========= -->
<div id="execution" class="bg-section" style="position: relative; background-color: white; overflow: hidden; min-height: 100vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 130%; background: url('{{ asset('assets/images/ATICC image .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - better width constraints -->
  <div class="bg-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up">Home / Execution</div>
    <h2 class="section-title fade-up delay-1" style="font-size: 42px; max-width: 50%;">DEAL PIPELINE & EXECUTION ENGINE</h2>
    <div class="section-subhead fade-up delay-2" style="font-size: 20px; max-width: 45%;">Structured. Verified. Executed.</div>
    <div class="section-text fade-up delay-3" style="font-size: 16px; max-width: 40%; line-height: 1.5;">ATICC is an active execution system, not a passive listing platform - moving projects from "concept" to "close" with post-transaction oversight.</div>
  </div>
</div>

<!-- ========= OPPORTUNITY CLASSIFICATION ========= -->
<div class="main-content">
  <div class="centered-content">
    <div class="centered-eyebrow fade-up" style="font-size: 13px;">OPPORTUNITY CLASSIFICATION (MATURITY SCALE)</div>
    <div style="display:flex; justify-content:center; align-items:center; gap:20px; margin: 25px 0; flex-wrap:wrap;">
      <span style="font-weight:600; font-size: 13px; letter-spacing:0.1em;" class="scale-in delay-1">TIER 1: EXPLORATORY</span>
      <div style="width:30px; height:1px; background:#DADFE5;"></div>
      <span style="font-weight:600; font-size: 13px; letter-spacing:0.1em;" class="scale-in delay-2">TIER 2: STRUCTURED</span>
      <div style="width:30px; height:1px; background:#DADFE5;"></div>
      <span style="font-weight:600; font-size: 13px; letter-spacing:0.1em;" class="scale-in delay-3">TIER 3: EXECUTION-READY</span>
    </div>
    <p class="section-text fade-up delay-4" style="max-width:600px; margin:0 auto; font-size: 14px;">Tier 1: Early-stage projects. Tier 2: Feasibility studies completed. Tier 3: Fully vetted and ready for capital deployment.</p>
  </div>

  <div class="execution-steps">
    <div class="step-item fade-left delay-1">
      <div class="step-number" style="font-size: 28px;">01</div>
      <div class="step-title" style="font-size: 16px;">THE EXECUTION WORKFLOW</div>
      <div class="step-desc" style="font-size: 13px;">Ingestion → Strategic Screening → Financial Structuring → Integrity Verification → Partner Matching</div>
    </div>
    <div class="step-item fade-up delay-2">
      <div class="step-number" style="font-size: 28px;">02</div>
      <div class="step-title" style="font-size: 16px;">TRANSACTION ORCHESTRATION</div>
      <div class="step-desc" style="font-size: 13px;">Managing stakeholder alignment and resolving regulatory bottlenecks to ensure the "last mile."</div>
    </div>
    <div class="step-item fade-right delay-3">
      <div class="step-number" style="font-size: 28px;">03</div>
      <div class="step-title" style="font-size: 16px;">PERFORMANCE-BASED REVENUE</div>
      <div class="step-desc" style="font-size: 13px;">Success-based facilitation fees aligning ATICC's interests with member outcomes.</div>
    </div>
  </div>

  <!-- ========= CAPITAL FACILITATION SECTION ========= -->
  <div class="bg-section capital-section" style="position: relative; background-color: white; overflow: hidden; min-height: 450px;">
    
    <!-- Image as a soft background element on the right -->
    <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
      <div style="position: absolute; top: 0; right: 0; width: 100%; height: 170%; background: url('{{ asset('assets/images/ATICC image .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
    </div>
    
    <!-- Text content - better width constraints -->
    <div class="bg-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
      <div class="centered-eyebrow fade-left" style="text-align:left; font-size: 12px; margin-bottom: 20px;">CAPITAL FACILITATION & FIDUCIARY ALIGNMENT</div>
      <h3 class="section-subhead fade-left delay-1" style="font-size: 32px; max-width: 45%; font-weight: 600; margin-bottom: 20px;">Turning verified access into executed value.</h3>
      <div class="section-text fade-left delay-2" style="font-size: 16px; max-width: 40%; line-height: 1.5;">ATICC facilitates capital without taking custody - connecting global institutional investors with vetted opportunities that have passed the T&V Protocol.</div>
    </div>
  </div>

  <!-- ========= LEGAL FRAMEWORK ========= -->
  <div class="full-width-gray">
    <div class="wide-container">
      <div class="framework-split">
        <div class="framework-left fade-left">
          <h3 style="font-size: 24px;">LEGAL FRAMEWORK</h3>
          <p style="font-size: 14px;">An institutional shield providing standardized legal environment to govern member interactions.</p>
        </div>
        <div class="framework-right fade-right">
          <p style="font-size: 14px;"><span>ATICC Model Clause:</span> 30-day cooling-off period</p>
          <p style="font-size: 14px; margin-top: 10px;"><span>Integrity Blacklist:</span> De-accession and ecosystem blacklisting</p>
          <p style="font-size: 14px; margin-top: 10px;"><span>Indemnity:</span> Final fiduciary responsibility rests with principals</p>
        </div>
      </div>
    </div>
  </div>

  <!-- ========= FINAL QUOTE ========= -->
  <div class="final-quote">
    <p class="scale-in" style="font-size: 18px;">Structure defines authority.<br>Integrity anchors capital.<br>Execution drives value.</p>
  </div>
</div>

@include('layouts.footer')

<script>
  // Intersection Observer for smooth scroll-triggered animations
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .grid-card, .product-card, .step-item');
  
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
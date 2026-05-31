@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 70vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC MAP .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 80px 40px;">
    <h1 class="headline fade-up revealed" style="max-width: 55%; font-size: 48px; margin-bottom: 20px; color: #000000; font-weight: 300;">Controlled execution platform <span style="font-size: 46px; color: #000000; font-weight: 300;">for institutional capital.</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; font-size: 16px; line-height: 1.5; color: #000000; margin-bottom: 30px; font-weight: 300;">The Africa Trade & Investment Chamber of Commerce (ATICC) is a private, member-governed clearing house and institutional platform engineered to serve as a transaction-driven interface, bridging the gap between global institutional capital and vetted African market opportunities.</div>
    <button class="cta-button fade-up delay-3 revealed" onclick="document.getElementById('access').scrollIntoView({behavior: 'smooth'})" style="background-color: #041931; color: white; border: none; padding: 14px 32px; font-size: 14px; font-weight: 400; border-radius: 40px; cursor: pointer; margin-bottom: 40px;">Access ATICC</button>
    <div class="icon-row" style="display: flex; gap: 40px; flex-wrap: wrap;">
      <div class="icon-item fade-left delay-4 revealed" style="display: flex; align-items: center; gap: 10px;"><svg width="20" height="20" viewBox="0 0 24 24" stroke="currentColor" style="stroke: #041931;"><path d="M12 2L3 7l9 5 9-5-9-5z"/><path d="M3 12l9 5 9-5"/><path d="M3 17l9 5 9-5"/><path d="M12 7v10"/></svg><span class="icon-label" style="font-size: 11px; font-weight: 400; letter-spacing: 0.05em; color: #000000;">VERIFIED OPPORTUNITIES</span></div>
      <div class="icon-item fade-left delay-5 revealed" style="display: flex; align-items: center; gap: 10px;"><svg width="20" height="20" viewBox="0 0 24 24" stroke="currentColor" style="stroke: #041931;"><rect x="4" y="8" width="16" height="12" rx="1"/><path d="M8 6V4h8v2"/><path d="M12 12v3"/></svg><span class="icon-label" style="font-size: 11px; font-weight: 400; letter-spacing: 0.05em; color: #000000;">INSTITUTIONAL STRENGTH</span></div>
      <div class="icon-item fade-left delay-6 revealed" style="display: flex; align-items: center; gap: 10px;"><svg width="20" height="20" viewBox="0 0 24 24" stroke="currentColor" style="stroke: #041931;"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="4"/><line x1="12" y1="2" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="22"/></svg><span class="icon-label" style="font-size: 11px; font-weight: 400; letter-spacing: 0.05em; color: #000000;">STRATEGIC EXECUTION</span></div>
      <div class="icon-item fade-left delay-7 revealed" style="display: flex; align-items: center; gap: 10px;"><svg width="20" height="20" viewBox="0 0 24 24" stroke="currentColor" style="stroke: #041931;"><path d="M21 12a9 9 0 1 0-9 9"/><path d="M12 6v6l4 2"/><path d="M16 21.5L19 18l-3-3"/></svg><span class="icon-label" style="font-size: 11px; font-weight: 400; letter-spacing: 0.05em; color: #000000;">MEASURABLE IMPACT</span></div>
    </div>
  </div>
</div>

<!-- ========= GRAY SPACER ========= -->
<div class="gray-spacer fade-up revealed" style="background: #F5F6F8; padding: 16px; text-align: center; border-top: 1px solid #E8EBED; border-bottom: 1px solid #E8EBED;">
  <p style="font-size: 12px; letter-spacing: 0.1em; color: #000000; margin: 0; font-weight: 300;">STRUCTURE DEFINES AUTHORITY. INTEGRITY ANCHORS CAPITAL. EXECUTION DRIVES SCALE.</p>
</div>

<!-- ========= INSTITUTIONAL OVERVIEW ========= -->
<div id="institutional-overview" style="padding: 70px 0;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div class="breadcrumb" style="font-size: 13px; color: #C49A6C; margin-bottom: 15px; font-weight: 300;">Home / Institutional Overview</div>
    <h2 style="font-size: 42px; font-weight: 300; color: #000000; margin-bottom: 20px;">INSTITUTIONAL IDENTITY & MANDATE</h2>
    <div style="font-size: 20px; color: #000000; margin-bottom: 20px; font-weight: 300;">Official Designation</div>
    <p style="font-size: 16px; line-height: 1.6; color: #000000; max-width: 800px; font-weight: 300;">ATICC is a private, member-governed clearing house and institutional platform engineered to serve as a transaction-driven interface, bridging the gap between global institutional capital and vetted African market opportunities.</p>
  </div>
</div>

<!-- ========= MEMBERSHIP TIERS ========= -->
<div style="padding: 70px 0; background: #F5F6F8;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; font-weight: 300;">MEMBERSHIP TIERS</div>
    <h2 style="font-size: 48px; font-weight: 300; color: #000000; margin-bottom: 20px; text-align: center;">Aligned. Verified. Committed.</h2>
    <p style="font-size: 16px; color: #000000; text-align: center; max-width: 600px; margin: 0 auto 60px; font-weight: 300;">ATICC operates a curated accession model reserved for verified stakeholders who demonstrate commitment to institutional transparency and market growth.</p>
    
    <div style="display: grid; grid-template-columns: repeat(5, 1fr); gap: 30px;">
      <div style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        <h4 style="font-size: 18px; font-weight: 400; color: #000000; margin-bottom: 15px;">Tier I: Institutional & Partners</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">Institutional wealth funds, national governments, and multilateral financial institutions focusing on policy alignment and large-scale capital deployment.</p>
      </div>
      <div style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        <h4 style="font-size: 18px; font-weight: 400; color: #000000; margin-bottom: 15px;">Tier II: Strategic Corporate</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">Multinational corporations and industrial conglomerates facilitating market entry and infrastructure development.</p>
      </div>
      <div style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        <h4 style="font-size: 18px; font-weight: 400; color: #000000; margin-bottom: 15px;">Tier III: Institutional Members</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">High-growth SMEs and accredited service providers serving as the critical execution layer within trade value chains.</p>
      </div>
      <div style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        <h4 style="font-size: 18px; font-weight: 400; color: #000000; margin-bottom: 15px;">The Accession Protocol</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">EOI → T&V Review → Ratification. Each step ensures alignment, verification, and strategic onboarding.</p>
      </div>
      <div style="background: white; padding: 30px; border-radius: 16px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        <h4 style="font-size: 18px; font-weight: 400; color: #000000; margin-bottom: 15px;">Revenue Model</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">Accession dues, success-based facilitation fees, and advisory mandates for market entry.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= TRUST & VERIFICATION ========= -->
<div style="padding: 70px 0;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div class="breadcrumb" style="font-size: 13px; color: #C49A6C; margin-bottom: 15px; font-weight: 300;">Home / Trade & Investment</div>
    <h2 style="font-size: 42px; font-weight: 300; color: #000000; margin-bottom: 20px;">TRUST & VERIFICATION (T&V) PROTOCOL</h2>
    <div style="font-size: 20px; color: #000000; margin-bottom: 20px; font-weight: 300;">Strategic intelligence gateway to African markets.</div>
    <p style="font-size: 16px; line-height: 1.6; color: #000000; max-width: 800px; font-weight: 300;">ATICC operates on strict gatekeeper logic: Zero Verification → Zero Access → Zero Transaction Visibility. The T&V Protocol maintains ongoing validation to ensure institutional integrity.</p>
  </div>
</div>

<!-- ========= T&V DETAILS ========= -->
<div style="padding: 70px 0; background: #F5F6F8;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="display: flex; gap: 60px; align-items: flex-start;">
      <div style="flex: 1;">
        <h3 style="font-size: 28px; font-weight: 300; color: #000000; margin-bottom: 20px;">TIERED VETTING FRAMEWORK</h3>
        <p style="font-size: 16px; color: #000000; line-height: 1.6; font-weight: 300;">Every project or trade opportunity listed on the platform must pass a triple-filter test: Commercial Viability, Regulatory Alignment, and Economic Contribution. ATICC integrates with global risk agencies for external assurance.</p>
      </div>
      <div style="flex: 1;">
        <ul style="list-style: none; padding: 0;">
          <li style="margin-bottom: 15px; padding-left: 25px; position: relative; color: #000000; font-weight: 300;"><span style="position: absolute; left: 0; color: #C49A6C;">✓</span> <strong style="font-weight: 400;">Identity & Statutory Audit:</strong> Legal and beneficial-ownership verification</li>
          <li style="margin-bottom: 15px; padding-left: 25px; position: relative; color: #000000; font-weight: 300;"><span style="position: absolute; left: 0; color: #C49A6C;">✓</span> <strong style="font-weight: 400;">Compliance & AML Screening:</strong> Anti-money laundering filtering</li>
          <li style="margin-bottom: 15px; padding-left: 25px; position: relative; color: #000000; font-weight: 300;"><span style="position: absolute; left: 0; color: #C49A6C;">✓</span> <strong style="font-weight: 400;">Execution Capability Assessment:</strong> Technical and financial capacity audit</li>
          <li style="padding-left: 25px; position: relative; color: #000000; font-weight: 300;"><span style="position: absolute; left: 0; color: #C49A6C;">✓</span> <strong style="font-weight: 400;">Integrity Enforcement:</strong> Zero-tolerance policy with expulsion and blacklisting</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ========= GLOBAL TRADE CORRIDORS ========= -->
<div style="padding: 70px 0;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; font-weight: 300;">GLOBAL TRADE CORRIDORS & MARKET ACCESS</div>
    <div style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 40px;">
      <div style="background: #F5F6F8; padding: 30px; border-radius: 16px;">
        <h4 style="font-size: 18px; font-weight: 400; color: #000000; margin-bottom: 12px;">The Corridor Principle</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">Africa as a network of interconnected economic corridors, optimizing trade flows based on regional logistics and historical routes.</p>
      </div>
      <div style="background: #F5F6F8; padding: 30px; border-radius: 16px;">
        <h4 style="font-size: 18px; font-weight: 400; color: #000000; margin-bottom: 12px;">Strategic Trade Facilitation</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">Technical "soft infrastructure" for trade: regulatory navigation, documentation optimization, and market entry intelligence.</p>
      </div>
      <div style="background: #F5F6F8; padding: 30px; border-radius: 16px;">
        <h4 style="font-size: 18px; font-weight: 400; color: #000000; margin-bottom: 12px;">Vertical Sector Specialization</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">High-impact sectors: Agro-Industrial Value Chains, Energy & Critical Infrastructure, and Digital Trade & Fintech.</p>
      </div>
      <div style="background: #F5F6F8; padding: 30px; border-radius: 16px;">
        <h4 style="font-size: 18px; font-weight: 400; color: #000000; margin-bottom: 12px;">AfCFTA Integration</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">Private-sector bridge for the African Continental Free Trade Area, leveraging tariff reductions and intra-African trade preferences.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= TRADE FACILITATION ========= -->
<div style="padding: 70px 0; background: #F5F6F8;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="display: flex; gap: 60px; align-items: flex-start;">
      <div style="flex: 1;">
        <h3 style="font-size: 28px; font-weight: 300; color: #000000; margin-bottom: 20px;">Trade Facilitation</h3>
        <p style="font-size: 16px; color: #000000; line-height: 1.6; font-weight: 300;">Technical "soft infrastructure" for trade: regulatory navigation, documentation optimization, and market entry intelligence.</p>
      </div>
      <div style="flex: 1;">
        <p style="font-size: 15px; margin-bottom: 15px; color: #000000; font-weight: 300;"><strong style="font-weight: 400;">Regulatory Navigation:</strong> Direct guidance on localized trade laws.</p>
        <p style="font-size: 15px; margin-bottom: 15px; color: #000000; font-weight: 300;"><strong style="font-weight: 400;">Documentation Optimization:</strong> Support for standardized export/import protocols.</p>
        <p style="font-size: 15px; color: #000000; font-weight: 300;"><strong style="font-weight: 400;">Market Entry Intelligence:</strong> Specialized strategies for entering high-barrier jurisdictions.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= INVESTMENT SERVICES ========= -->
<div style="padding: 70px 0;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px;">
      <div>
        <h3 style="font-size: 28px; font-weight: 300; color: #000000; margin-bottom: 20px;">Investment Coordination</h3>
        <p style="font-size: 16px; color: #000000; line-height: 1.6; font-weight: 300;">ATICC coordinates institutional investment across priority sectors and markets.</p>
      </div>
      <div>
        <h3 style="font-size: 28px; font-weight: 300; color: #000000; margin-bottom: 20px;">Capital Matching</h3>
        <p style="font-size: 16px; color: #000000; line-height: 1.6; font-weight: 300;">ATICC facilitates capital deployment by connecting institutional investors with verified, execution-ready opportunities.</p>
      </div>
      <div>
        <h3 style="font-size: 28px; font-weight: 300; color: #000000; margin-bottom: 20px;">Project Validation</h3>
        <p style="font-size: 16px; color: #000000; line-height: 1.6; font-weight: 300;">Every project or trade opportunity listed on the platform must pass a triple-filter test.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= PARTNERSHIPS ========= -->
<div style="padding: 70px 0; background: #F5F6F8;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 40px;">
      <div>
        <h3 style="font-size: 28px; font-weight: 300; color: #000000; margin-bottom: 20px;">Institutional Partnerships</h3>
        <p style="font-size: 16px; color: #000000; line-height: 1.6; font-weight: 300;">ATICC engages strategic partners across capital, trade, and institutional ecosystems.</p>
      </div>
      <div>
        <h3 style="font-size: 28px; font-weight: 300; color: #000000; margin-bottom: 20px;">Infrastructure & Energy</h3>
        <p style="font-size: 16px; color: #000000; line-height: 1.6; font-weight: 300;">ATICC facilitates infrastructure and energy investment across African markets.</p>
      </div>
      <div>
        <h3 style="font-size: 28px; font-weight: 300; color: #000000; margin-bottom: 20px;">Digital Trade & Innovation</h3>
        <p style="font-size: 16px; color: #000000; line-height: 1.6; font-weight: 300;">ATICC enables digital trade and innovation across African markets.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= EVENTS & MISSIONS ========= -->
<div style="padding: 70px 0;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; font-weight: 300;">EVENTS & MISSIONS</div>
    <h2 style="font-size: 42px; font-weight: 300; color: #000000; margin-bottom: 20px; text-align: center;">Institutional Summits & Missions</h2>
    <p style="font-size: 16px; color: #000000; text-align: center; max-width: 700px; margin: 0 auto 50px; font-weight: 300;">ATICC convenes institutional summits and executes targeted trade missions across priority markets.</p>
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px;">
      <div style="background: #F5F6F8; padding: 30px; border-radius: 16px; text-align: center;">
        <h4 style="font-size: 20px; font-weight: 400; color: #000000; margin-bottom: 12px;">Institutional Summits</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">High-level convenings aligning capital, policy, and market participants.</p>
      </div>
      <div style="background: #F5F6F8; padding: 30px; border-radius: 16px; text-align: center;">
        <h4 style="font-size: 20px; font-weight: 400; color: #000000; margin-bottom: 12px;">Trade Missions</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">Targeted deployments across priority markets and sectors.</p>
      </div>
      <div style="background: #F5F6F8; padding: 30px; border-radius: 16px; text-align: center;">
        <h4 style="font-size: 20px; font-weight: 400; color: #000000; margin-bottom: 12px;">Investment Forums</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">Structured engagements connecting capital with opportunities.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= EXECUTION ENGINE ========= -->
<div style="padding: 70px 0; background: #F5F6F8;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div class="breadcrumb" style="font-size: 13px; color: #C49A6C; margin-bottom: 15px; font-weight: 300;">Home / Execution</div>
    <h2 style="font-size: 42px; font-weight: 300; color: #000000; margin-bottom: 20px;">DEAL PIPELINE & EXECUTION ENGINE</h2>
    <div style="font-size: 20px; color: #000000; margin-bottom: 20px; font-weight: 300;">Structured. Verified. Executed.</div>
    <p style="font-size: 16px; line-height: 1.6; color: #000000; max-width: 700px; font-weight: 300;">ATICC is an active execution system, not a passive listing platform - moving projects from "concept" to "close" with post-transaction oversight.</p>
  </div>
</div>

<!-- ========= EXECUTION STEPS ========= -->
<div style="padding: 70px 0;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 50px;">
      <div>
        <div style="font-size: 36px; font-weight: 300; color: #C49A6C; margin-bottom: 15px;">01</div>
        <h4 style="font-size: 20px; font-weight: 400; color: #000000; margin-bottom: 12px;">THE EXECUTION WORKFLOW</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">Ingestion → Strategic Screening → Financial Structuring → Integrity Verification → Partner Matching</p>
      </div>
      <div>
        <div style="font-size: 36px; font-weight: 300; color: #C49A6C; margin-bottom: 15px;">02</div>
        <h4 style="font-size: 20px; font-weight: 400; color: #000000; margin-bottom: 12px;">TRANSACTION ORCHESTRATION</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">Managing stakeholder alignment and resolving regulatory bottlenecks to ensure the "last mile."</p>
      </div>
      <div>
        <div style="font-size: 36px; font-weight: 300; color: #C49A6C; margin-bottom: 15px;">03</div>
        <h4 style="font-size: 20px; font-weight: 400; color: #000000; margin-bottom: 12px;">PERFORMANCE-BASED REVENUE</h4>
        <p style="font-size: 14px; color: #000000; line-height: 1.5; font-weight: 300;">Success-based facilitation fees aligning ATICC's interests with member outcomes.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= CAPITAL FACILITATION ========= -->
<div style="padding: 70px 0; background: #F5F6F8;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="font-size: 12px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; font-weight: 300;">CAPITAL FACILITATION & FIDUCIARY ALIGNMENT</div>
    <h3 style="font-size: 32px; font-weight: 300; color: #000000; margin-bottom: 20px;">Turning verified access into executed value.</h3>
    <p style="font-size: 16px; line-height: 1.6; color: #000000; max-width: 700px; font-weight: 300;">ATICC facilitates capital without taking custody - connecting global institutional investors with vetted opportunities that have passed the T&V Protocol.</p>
  </div>
</div>

<!-- ========= LEGAL FRAMEWORK ========= -->
<div style="padding: 70px 0;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="display: flex; gap: 60px; align-items: flex-start;">
      <div style="flex: 1;">
        <h3 style="font-size: 28px; font-weight: 300; color: #000000; margin-bottom: 20px;">LEGAL FRAMEWORK</h3>
        <p style="font-size: 16px; color: #000000; line-height: 1.6; font-weight: 300;">An institutional shield providing standardized legal environment to govern member interactions.</p>
      </div>
      <div style="flex: 1;">
        <p style="font-size: 15px; margin-bottom: 15px; color: #000000; font-weight: 300;"><strong style="font-weight: 400;">ATICC Model Clause:</strong> 30-day cooling-off period</p>
        <p style="font-size: 15px; margin-bottom: 15px; color: #000000; font-weight: 300;"><strong style="font-weight: 400;">Integrity Blacklist:</strong> De-accession and ecosystem blacklisting</p>
        <p style="font-size: 15px; color: #000000; font-weight: 300;"><strong style="font-weight: 400;">Indemnity:</strong> Final fiduciary responsibility rests with principals</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= HUMAN CAPITAL ========= -->
<div style="padding: 70px 0; background: #F5F6F8;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="display: flex; gap: 60px; align-items: flex-start;">
      <div style="flex: 1;">
        <h3 style="font-size: 28px; font-weight: 300; color: #000000; margin-bottom: 20px;">HUMAN CAPITAL & FELLOWSHIP PIPELINE</h3>
        <p style="font-size: 16px; color: #000000; line-height: 1.6; font-weight: 300;">ATICC cultivates a strategic talent reserve of professionals capable of navigating cross-border African trade and investment.</p>
      </div>
      <div style="flex: 1;">
        <p style="font-size: 15px; margin-bottom: 15px; color: #000000; font-weight: 300;"><strong style="font-weight: 400;">Merit-Based Accession</strong><br>Candidates inducted based on technical capability, leadership potential, and ethical alignment.</p>
        <p style="font-size: 15px; margin-bottom: 15px; color: #000000; font-weight: 300;"><strong style="font-weight: 400;">Development Curriculum</strong><br>Transaction Structuring | Digital Governance | Strategic Foresight</p>
        <p style="font-size: 15px; color: #000000; font-weight: 300;"><strong style="font-weight: 400;">Performance Audit</strong><br>Continuous evaluation of quantitative contributions and qualitative alignment.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= OPPORTUNITY CLASSIFICATION ========= -->
<div style="padding: 70px 0;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px; text-align: center;">
    <div style="font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; font-weight: 300;">OPPORTUNITY CLASSIFICATION (MATURITY SCALE)</div>
    <div style="display: flex; justify-content: center; align-items: center; gap: 20px; margin: 30px 0; flex-wrap: wrap;">
      <span style="font-weight: 400; font-size: 14px; color: #000000;">TIER 1: EXPLORATORY</span>
      <div style="width: 30px; height: 1px; background: #DADFE5;"></div>
      <span style="font-weight: 400; font-size: 14px; color: #000000;">TIER 2: STRUCTURED</span>
      <div style="width: 30px; height: 1px; background: #DADFE5;"></div>
      <span style="font-weight: 400; font-size: 14px; color: #000000;">TIER 3: EXECUTION-READY</span>
    </div>
    <p style="font-size: 15px; color: #000000; max-width: 600px; margin: 0 auto; font-weight: 300;">Tier 1: Early-stage projects. Tier 2: Feasibility studies completed. Tier 3: Fully vetted and ready for capital deployment.</p>
  </div>
</div>

<!-- ========= CTA ========= -->
<div id="access" style="padding: 80px 0; background: #041931; text-align: center;">
  <div style="max-width: 1400px; margin: 0 auto; padding: 0 40px;">
    <div style="font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; font-weight: 300;">EXECUTIVE ENGAGEMENT</div>
    <h2 style="font-size: 42px; font-weight: 300; color: white; margin-bottom: 20px;">Access Institutional Capital</h2>
    <p style="font-size: 16px; color: rgba(255,255,255,0.8); max-width: 600px; margin: 0 auto 30px; font-weight: 300;">ATICC provides structured access to institutional capital, verified opportunities, and execution-ready platforms.</p>
    <a href="{{ route('access.plans') }}" class="cta-button-white" style="display: inline-block; background-color: white; color: #041931; padding: 14px 36px; font-size: 14px; font-weight: 400; border-radius: 40px; text-decoration: none; text-transform: uppercase;">Access ATICC →</a>
  </div>
</div>

<!-- ========= FINAL QUOTE ========= -->
<div style="padding: 60px 20px; text-align: center;">
  <p style="font-size: 18px; color: #000000; line-height: 1.5; font-weight: 300;">Structure defines authority.<br>Integrity anchors capital.<br>Execution drives value.</p>
</div>

@include('layouts.footer')

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right');
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
    } else {
      nav.classList.remove('scrolled');
    }
  });
</script>

<style>
  .fade-up, .fade-left, .fade-right {
    opacity: 0;
    transition: all 0.6s ease;
  }
  .fade-up.revealed, .fade-left.revealed, .fade-right.revealed {
    opacity: 1;
  }
  .fade-up {
    transform: translateY(30px);
  }
  .fade-up.revealed {
    transform: translateY(0);
  }
  .fade-left {
    transform: translateX(-30px);
  }
  .fade-left.revealed {
    transform: translateX(0);
  }
  .fade-right {
    transform: translateX(30px);
  }
  .fade-right.revealed {
    transform: translateX(0);
  }
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  .delay-4 { transition-delay: 0.4s; }
  .delay-5 { transition-delay: 0.5s; }
  .delay-6 { transition-delay: 0.6s; }
  .delay-7 { transition-delay: 0.7s; }
  
  @media (max-width: 992px) {
    [style*="grid-template-columns: repeat(5, 1fr)"] {
      grid-template-columns: repeat(2, 1fr) !important;
    }
    [style*="grid-template-columns: repeat(4, 1fr)"] {
      grid-template-columns: repeat(2, 1fr) !important;
    }
    [style*="grid-template-columns: repeat(3, 1fr)"] {
      grid-template-columns: 1fr !important;
      gap: 30px !important;
    }
    [style*="display: flex; gap: 60px"] {
      flex-direction: column !important;
      gap: 40px !important;
    }
    .hero-content h1 {
      max-width: 100% !important;
      font-size: 32px !important;
    }
    .hero-content .body-text {
      max-width: 100% !important;
    }
    .hero-section {
      min-height: 60vh !important;
    }
  }
  
  @media (max-width: 768px) {
    [style*="grid-template-columns: repeat(5, 1fr)"] {
      grid-template-columns: 1fr !important;
    }
    [style*="grid-template-columns: repeat(4, 1fr)"] {
      grid-template-columns: 1fr !important;
    }
    .hero-content {
      padding: 40px 20px !important;
    }
  }
</style>

@endsection
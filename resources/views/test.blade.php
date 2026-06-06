@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= PURE CSS NO-FRAMEWORK DESIGN STYLE CODES ========= -->
<style>
  /* Base System Resets */
  .aticc-viewport * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  .aticc-viewport {
    background-color: #030d1a;
    color: #ffffff;
    font-family: var(--font-primary);
    font-size: 16px;
    line-height: 1.5;
  }

  /* Utility Enforcements */

  .font-sans-serif {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
  }
  .gold-brand-text {
    color: #c5a059;
  }
  .container-max {
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 40px;
  }

  /* Hero Architecture with Glowing Orbital Space Placement */
  .hero-block {
    position: relative;
    min-height: 100vh;
    background: radial-gradient(circle at 78% 43%, #071f3a 0%, #030d1a 60%);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding-top: 140px;
    overflow: hidden;
  }

  /* CHANGED: Adjusted to fill the entire container framework */
  .hero-globe-graphic {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('{{ asset("assets/images/home page ball .png") }}') no-repeat right center;
    background-size: cover; /* Swapped contain for cover to scale across the space */
    opacity: 0.9;
    pointer-events: none;
    z-index: 1;
  }

  .hero-inner-layout {
    position: relative;
    z-index: 2;
    flex-grow: 1;
    display: flex;
    align-items: center;
  }

  .hero-text-container {
    max-width: 760px;
  }

  .hero-main-title {
    font-size: 62px;
    font-weight: 400;
    line-height: 1.15;
    letter-spacing: -0.01em;
    margin-bottom: 25px;
  }

  .hero-supporting-text {
    font-family: var(--font-primary);
    font-size: 15px;
    line-height: 1.7;
    color: #8da2bb;
    max-width: 540px;
    margin-bottom: 45px;
  }

  .hero-action-row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 20px;
  }

  /* Button Elements */
  .btn-gold-solid {
    background-color: #c5a059;
    color: #030d1a;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 11px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    padding: 16px 32px;
    border: 1px solid #c5a059;
    cursor: pointer;
    transition: background 0.3s;
  }
  .btn-gold-solid:hover {
    background-color: #d9b874;
  }

  .btn-gold-outline {
    background: transparent;
    color: #ffffff;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 11px;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    padding: 16px 32px;
    border: 1px solid rgba(197, 160, 89, 0.4);
    cursor: pointer;
    transition: all 0.3s;
  }
  .btn-gold-outline:hover {
    border-color: #c5a059;
    background: rgba(197, 160, 89, 0.08);
  }

  .media-overview-trigger {
    display: flex;
    align-items: center;
    gap: 12px;
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 10px;
    font-weight: 600;
    letter-spacing: 1.5px;
    color: #8da2bb;
    text-decoration: none;
    margin-left: 20px;
    transition: color 0.3s;
  }
  .media-overview-trigger:hover {
    color: #c5a059;
  }
  /* MODIFIED: Increased sizing for the hero overview play icon */
  .media-overview-trigger svg {
    width: 36px;
    height: 36px;
  }

  /* Live Metrics Grid Row (Pure CSS Grid) */
  .metrics-dashboard-bar {
    background-color: #04152ed8;
    border-top: 1px solid rgba(255, 255, 255, 0.08);
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    padding: 35px 0;
    position: relative;
    z-index: 5;
    margin-top: 60px;
  }

  .metrics-layout-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
  }

  .metric-data-node {
    padding-left: 15px;
  }
  .metric-data-node:not(:last-child) {
    border-right: 1px solid rgba(255, 255, 255, 0.08);
  }

  .metric-count-header {
    font-size: 34px;
    font-weight: 300;
    color: #ffffff;
    line-height: 1;
    margin-bottom: 6px;
  }
  .metric-count-header span {
    color: #c5a059;
  }

  .metric-text-label {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 11px;
    text-transform: uppercase;
    color: #798da3;
    letter-spacing: 0.5px;
    line-height: 1.4;
  }

  /* Core Competencies Row (5 Pillars Split) */
  .competency-block {
    padding: 70px 0;
    background-color: #030d1a;
    border-bottom: 1px solid rgba(255, 255, 255, 0.04);
  }

  .competency-layout-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 30px;
  }

  /* MODIFIED: Standardized icon wrappers to accommodate larger stroke icons safely */
  .competency-node-card .icon-holder {
    color: #c5a059;
    margin-bottom: 22px;
    display: flex;
    align-items: center;
    justify-content: flex-start;
  }
  .competency-node-card .icon-holder svg {
    width: 32px;
    height: 32px;
  }

  .competency-node-card .title-label {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 1px;
    text-transform: uppercase;
    color: #ffffff;
    margin-bottom: 8px;
  }

  .competency-node-card .desc-p {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 12.5px;
    color: #6d8196;
    line-height: 1.5;
  }

  /* Axiom Core Credo Interface Styles */
  .axiom-display-block {
    background-color: #01040a;
    background-image: radial-gradient(circle at 50% 50%, #05162c 0%, #01040a 100%);
    border-top: 1px solid rgba(197, 160, 89, 0.2);
    border-bottom: 1px solid rgba(197, 160, 89, 0.2);
    padding: 120px 0;
    text-align: center;
    position: relative;
  }

  .axiom-display-block::after {
    content: "";
    position: absolute;
    right: 12%;
    top: 30%;
    bottom: 30%;
    width: 1px;
    background: linear-gradient(to bottom, transparent, #c5a059, transparent);
    opacity: 0.5;
  }

  .axiom-headline-text {
    font-size: 48px;
    font-weight: 400;
    line-height: 1.25;
    letter-spacing: -0.01em;
    text-align: center;
    margin-bottom: 30px;
  }

  .axiom-under-eyebrow {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 10px;
    text-transform: uppercase;
    color: #8da2bb;
    letter-spacing: 2.5px;
    text-align: center;
  }

  /* Ecosystem Architecture Workspace (What We Do 6-Columns) */
  .ecosystem-container-section {
    background-color: #01040a;
    padding: 100px 0;
  }

  .ecosystem-header-split {
    display: flex;
    justify-content: space-between;
    align-items: flex-end;
    margin-bottom: 60px;
  }

  .section-pre-title {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 11px;
    text-transform: uppercase;
    color: #c5a059;
    letter-spacing: 2px;
    font-weight: 600;
    margin-bottom: 10px;
    display: block;
  }

  .section-main-heading {
    font-size: 42px;
    font-weight: 400;
    color: #ffffff;
    line-height: 1.2;
  }

  .six-column-matrix-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 16px;
  }

  .matrix-node-structure {
    background-color: rgba(5, 16, 33, 0.45);
    border: 1px solid rgba(255, 255, 255, 0.04);
    display: flex;
    flex-direction: column;
    min-height: 400px;
    transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
  }

  .matrix-node-structure:hover {
    background-color: rgba(7, 22, 46, 0.8);
    border-color: rgba(197, 160, 89, 0.3);
    transform: translateY(-5px);
  }

  .matrix-node-media-box {
    height: 170px;
    background-size: cover;
    background-position: center;
    width: 100%;
  }

  .matrix-node-text-box {
    padding: 24px 20px;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .matrix-node-serial {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 11px;
    color: #c5a059;
    font-weight: 700;
    margin-bottom: 10px;
  }

  .matrix-node-title-header {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 13px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.3px;
    color: #ffffff;
    margin-bottom: 12px;
    line-height: 1.35;
  }

  .matrix-node-paragraph {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Arial, sans-serif;
    font-size: 12px;
    color: #798da3;
    line-height: 1.5;
    margin-bottom: 20px;
  }

  .matrix-node-arrow-link {
    color: #c5a059;
    text-decoration: none;
    font-size: 16px;
    font-weight: bold;
    display: inline-block;
  }

  /* Global Corporate Network Footprint */
  .institutional-trust-strip {
    background-color: #ffffff;
    padding: 55px 0;
    border-top: 1px solid #e2e8f0;
    text-align: center;
  }

  .trust-strip-header {
    font-family: var(--font-primary);
    font-size: 11px;
    font-weight: 700;
    letter-spacing: 2px;
    color: #8a99ad;
    text-transform: uppercase;
    margin-bottom: 40px;
  }

  .flex-brand-logospace {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
  }

  .flex-brand-logospace img {
    max-height: 34px;
    width: auto;
    object-fit: contain;
    filter: grayscale(100%);
    opacity: 0.75;
    transition: all 0.3s ease;
  }

  .flex-brand-logospace img:hover {
    filter: grayscale(0%);
    opacity: 1;
  }

  /* Responsive Fixes for non-framework stack layout elements */
  @media (max-width: 1024px) {
    .metrics-layout-grid, .competency-layout-grid {
      grid-template-columns: repeat(2, 1fr);
    }
    .six-column-matrix-grid {
      grid-template-columns: repeat(3, 1fr);
    }
    .hero-main-title {
      font-size: 42px;
    }
  }
  @media (max-width: 768px) {
    .metrics-layout-grid, .competency-layout-grid, .six-column-matrix-grid {
      grid-template-columns: 1fr;
    }
    .ecosystem-header-split {
      flex-direction: column;
      align-items: flex-start;
      gap: 20px;
    }
    .metric-data-node {
      border-right: none !important;
      border-bottom: 1px solid rgba(255, 255, 255, 0.08);
      padding-bottom: 15px;
    }
  }
</style>

<div class="aticc-viewport">

  <!-- ========= HERO SECTION WITH GLOBAL NETWORKS BACKGROUND GRAPHIC ========= -->
  <section class="hero-block">
    <div class="hero-globe-graphic"></div>
    
    <div class="hero-inner-layout">
      <div class="container-max" style="width: 100%;">
        <div class="hero-text-container">
          
          <h1 class="hero-main-title">
            Connecting <br>
            <span style="color: #ffffff;">Institutional Capital</span> <br>
            <span class="gold-brand-text">With Verified African <br>Market Infrastructure</span>
          </h1>
          
          <p class="hero-supporting-text">
            ATICC operates as a structured institutional platform facilitating strategic trade coordination, capital alignment, transaction execution, and verified market access across African economies.
          </p>
          
          <div class="hero-action-row">
            <button class="btn-gold-solid" onclick="document.getElementById('solutions-matrix-box').scrollIntoView({behavior: 'smooth'})">
              Institutional Access &nbsp; <span class="font-sans-serif">&rarr;</span>
            </button>
            
            <button class="btn-gold-outline">
              Strategic Engagement &nbsp; <span class="font-sans-serif">&rarr;</span>
            </button>
            
            <a href="#" class="media-overview-trigger">
              <svg fill="currentColor" class="gold-brand-text" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/></svg>
              <span>ATICC INSTITUTIONAL<br>OVERVIEW</span>
            </a>
          </div>

        </div>
      </div>
    </div>

    <!-- ========= 5-COLUMN METRICS HORIZONTAL PANEL ========= -->
    <div class="metrics-dashboard-bar">
      <div class="container-max">
        <div class="metrics-layout-grid">
          
          <div class="metric-data-node">
            <div class="metric-count-header">54<span>+</span></div>
            <div class="metric-text-label">African Countries<br>Engaged</div>
          </div>
          
          <div class="metric-data-node">
            <div class="metric-count-header">320<span>+</span></div>
            <div class="metric-text-label">Institutional<br>Partners</div>
          </div>
          
          <div class="metric-data-node">
            <div class="metric-count-header">1,200<span>+</span></div>
            <div class="metric-text-label">Verified Investment<br>Opportunities</div>
          </div>
          
          <div class="metric-data-node">
            <div class="metric-count-header">$85B<span>+</span></div>
            <div class="metric-text-label">Capital Facilitation<br>Pipeline</div>
          </div>
          
          <div class="metric-data-node">
            <div class="metric-count-header">20,000<span>+</span></div>
            <div class="metric-text-label">Global Executive<br>Network</div>
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ========= 5 PILLARS SYSTEM FRAMEWORK PANEL ========= -->
  <section class="competency-block">
    <div class="container-max">
      <div class="competency-layout-grid">
        
        <div class="competency-node-card">
          <div class="icon-holder">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z"/></svg>
          </div>
          <div class="title-label">Verified Opportunities</div>
          <div class="desc-p">Rigorous validation for credible opportunities.</div>
        </div>

        <div class="competency-node-card">
          <div class="icon-holder">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0012 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18"/></svg>
          </div>
          <div class="title-label">Institutional Coordination</div>
          <div class="desc-p">Connecting global capital with African institutions.</div>
        </div>

        <div class="competency-node-card">
          <div class="icon-holder">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 13.5l10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/></svg>
          </div>
          <div class="title-label">Transaction Execution</div>
          <div class="desc-p">End-to-end support for structured deals.</div>
        </div>

        <div class="competency-node-card">
          <div class="icon-holder">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18v-5.25m0 0a3 3 0 100-6 3 3 0 000 6zm0 11.25a8.25 8.25 0 100-16.5 8.25 8.25 0 000 16.5z"/></svg>
          </div>
          <div class="title-label">Strategic Intelligence</div>
          <div class="desc-p">Data-driven insights for informed decisions.</div>
        </div>

        <div class="competency-node-card">
          <div class="icon-holder">
            <svg fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 9l6.75 6.75M4.5 19.5h15a2.25 2.25 0 002.25-2.25V6.75A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25v10.5A2.25 2.25 0 004.5 19.5z"/></svg>
          </div>
          <div class="title-label">Cross-Border Facilitation</div>
          <div class="desc-p">Simplifying trade and investment across jurisdictions.</div>
        </div>

      </div>
    </div>
  </section>

  <!-- ========= AXIOM CENTRAL SEPARATOR LAYER ========= -->
  <div class="axiom-display-block">
    <div class="container-max">
      <h2 class="axiom-headline-text">
        Structure Defines Authority.<br>
        Verification Enables Trust.<br>
        <span class="gold-brand-text">Execution Drives Scale.</span>
      </h2>
      <div class="axiom-under-eyebrow">
        An Institutional Platform Engineered For Impact, Governed By Integrity, And Driven By Results.
      </div>
    </div>
  </div>

  <!-- ========= 6-COLUMN SYSTEM ECOSYSTEM OVERVIEW MATRIX ========= -->
  <section id="solutions-matrix-box" class="ecosystem-container-section">
    <div class="container-max">
      
      <div class="ecosystem-header-split">
        <div>
          <span class="section-pre-title">What We Do</span>
          <h2 class="section-main-heading">Powering Africa's Trade <br>and Investment Ecosystem</h2>
        </div>
        <div>
          <button class="btn-gold-outline font-sans-serif">Explore All Solutions &nbsp; &rarr;</button>
        </div>
      </div>

      <div class="six-column-matrix-grid">
        
        <!-- Element Card 01 -->
        <div class="matrix-node-structure">
          <div class="matrix-node-media-box" style="background-image: url('{{ asset('assets/images/INVESTMENT COORDINATION.png') }}');"></div>
          <div class="matrix-node-text-box">
            <div>
              <div class="matrix-node-serial">01</div>
              <div class="matrix-node-title-header">Investment Coordination</div>
              <p class="matrix-node-paragraph">Aligning institutional capital with priority sectors and bankable projects.</p>
            </div>
            <a href="#" class="matrix-node-arrow-link font-sans-serif">&rarr;</a>
          </div>
        </div>

        <!-- Element Card 02 -->
        <div class="matrix-node-structure">
          <div class="matrix-node-media-box" style="background-image: url('{{ asset('assets/images/CAPITAL MATCHING.png') }}');"></div>
          <div class="matrix-node-text-box">
            <div>
              <div class="matrix-node-serial">02</div>
              <div class="matrix-node-title-header">Capital Matching</div>
              <p class="matrix-node-paragraph">Connecting investors with verified opportunities across Africa.</p>
            </div>
            <a href="#" class="matrix-node-arrow-link font-sans-serif">&rarr;</a>
          </div>
        </div>

        <!-- Element Card 03 -->
        <div class="matrix-node-structure">
          <div class="matrix-node-media-box" style="background-image: url('{{ asset('assets/images/PROJECT VALIDATION.png') }}');"></div>
          <div class="matrix-node-text-box">
            <div>
              <div class="matrix-node-serial">03</div>
              <div class="matrix-node-title-header">Project Validation</div>
              <p class="matrix-node-paragraph">Rigorous due diligence ensuring transparency, bankability and impact readiness.</p>
            </div>
            <a href="#" class="matrix-node-arrow-link font-sans-serif">&rarr;</a>
          </div>
        </div>

        <!-- Element Card 04 -->
        <div class="matrix-node-structure">
          <div class="matrix-node-media-box" style="background-image: url('{{ asset('assets/images/INSTITUTIONAL PARTNERSHIP.png') }}');"></div>
          <div class="matrix-node-text-box">
            <div>
              <div class="matrix-node-serial">04</div>
              <div class="matrix-node-title-header">Institutional Partnerships</div>
              <p class="matrix-node-paragraph">Building strategic alliances that drive sustainable economic growth.</p>
            </div>
            <a href="#" class="matrix-node-arrow-link font-sans-serif">&rarr;</a>
          </div>
        </div>

        <!-- Element Card 05 -->
        <div class="matrix-node-structure">
          <div class="matrix-node-media-box" style="background-image: url('{{ asset('assets/images/trade-missions.jpg') }}');"></div>
          <div class="matrix-node-text-box">
            <div>
              <div class="matrix-node-serial">05</div>
              <div class="matrix-node-title-header">Trade Missions</div>
              <p class="matrix-node-paragraph">Facilitating high-level trade engagements and cross-border cooperation.</p>
            </div>
            <a href="#" class="matrix-node-arrow-link font-sans-serif">&rarr;</a>
          </div>
        </div>

        <!-- Element Card 06 -->
        <div class="matrix-node-structure">
          <div class="matrix-node-media-box" style="background-image: url('{{ asset('assets/images/market-intelligence.jpg') }}');"></div>
          <div class="matrix-node-text-box">
            <div>
              <div class="matrix-node-serial">06</div>
              <div class="matrix-node-title-header">Market Intelligence</div>
              <p class="matrix-node-paragraph">Actionable insights for smarter strategy and competitive advantage.</p>
            </div>
            <a href="#" class="matrix-node-arrow-link font-sans-serif">&rarr;</a>
          </div>
        </div>

      </div>
    </div>
  </section>

  <!-- ========= INSTITUTIONAL NETWORK TRUST STRIP (BOTTOM ROW) ========= -->
  <div class="institutional-trust-strip">
    <div class="container-max">
      <div class="trust-strip-header">Trusted By Leading Institutions Worldwide</div>
      <div class="flex-brand-logospace">
        <img src="{{ asset('assets/images/brands/afreximbank.png') }}" alt="Afreximbank">
        <img src="{{ asset('assets/images/brands/ifc.png') }}" alt="International Finance Corporation">
        <img src="{{ asset('assets/images/brands/african-union.png') }}" alt="African Union">
        <img src="{{ asset('assets/images/brands/dbsa.png') }}" alt="DBSA">
        <img src="{{ asset('assets/images/brands/isdb.png') }}" alt="Islamic Development Bank">
        <img src="{{ asset('assets/images/brands/afc.png') }}" alt="Africa Finance Corporation">
        <img src="{{ asset('assets/images/brands/undp.png') }}" alt="UNDP">
      </div>
    </div>
  </div>

</div>

@include('layouts.footer')

@endsection
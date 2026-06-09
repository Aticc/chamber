@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div class="aticc-viewport">

  <!-- ========= HERO SECTION WITH GLOBAL NETWORKS BACKGROUND GRAPHIC ========= -->
  <section class="hero-block">
  
  <div class="hero-globe-graphic" style="background-image: url('{{ asset('assets/images/home page ball .png') }}');"></div>
  
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
          
          {{-- <a href="#" class="media-overview-trigger">
            <svg fill="currentColor" class="gold-brand-text" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14.5v-9l6 4.5-6 4.5z"/></svg>
            <span>ATICC INSTITUTIONAL<br>OVERVIEW</span>
          </a> --}}
        </div>

      </div>
    </div>
  </div>

  <div class="metrics-dashboard-bar">
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
<div class="axiom-display-block" style="display: flex; align-items: center; justify-content: center; min-height: 454px; position: relative;">
  
  <!-- Background image (full container, behind everything) -->
  <div class="l" style="background-image: url('{{ asset('assets/images/ATICC SEAL .png') }}'); background-position: left center; background-size: auto 80%; background-repeat: no-repeat; position: absolute; top: -63px; left: 0; width: 100%; height: 100%; opacity: 0.15;"></div>

  <!-- Text centered -->
  <div class="container-max" style="position: relative; z-index: 90; text-align: center; max-width: 800px; padding: 2rem;">
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
          <div class="matrix-node-media-box" style="background-image: url('{{ asset('assets/images/TRADE MISSION (1).png') }}');"></div>
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
          <div class="matrix-node-media-box" style="background-image: url('{{ asset('assets/images/Market Intelligence..png') }}');"></div>
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
        {{-- <img src="{{ asset('assets/images/brands/afreximbank.png') }}" alt="Afreximbank">
        <img src="{{ asset('assets/images/brands/ifc.png') }}" alt="International Finance Corporation">
        <img src="{{ asset('assets/images/brands/african-union.png') }}" alt="African Union">
        <img src="{{ asset('assets/images/brands/dbsa.png') }}" alt="DBSA">
        <img src="{{ asset('assets/images/brands/isdb.png') }}" alt="Islamic Development Bank">
        <img src="{{ asset('assets/images/brands/afc.png') }}" alt="Africa Finance Corporation">
        <img src="{{ asset('assets/images/brands/undp.png') }}" alt="UNDP"> --}}
      </div>
    </div>
  </div>

</div>

@include('layouts.footer')

@endsection
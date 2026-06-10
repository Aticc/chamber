@extends("layouts.app")

@section('content')


<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 100% !important;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 140%; background: url('{{ asset('assets/images/institutional overview .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About / Institutional Overview</div>
    <h1 class="headline fade-up revealed">Institutional <span class="gold-accent">Overview</span></h1>
    <div class="body-text fade-up delay-2 revealed">The Africa Trade & Investment Chamber of Commerce (ATICC) is a private, member-governed clearing house and institutional platform engineered to serve as a transaction-driven interface, bridging the gap between global institutional capital and vetted African market opportunities.</div>
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

<!-- ========= TRUST & VERIFICATION SECTION ========= -->
<div class="full-width-dark-navy">
  <div class="wide-container">
    <div class="breadcrumb-gold fade-up" style="text-align: center;">TRUST & VERIFICATION PROTOCOL</div>
    <h2 class="section-title-light fade-up delay-1" style="text-align: center;">Zero Verification → Zero Access → Zero Transaction Visibility</h2>
    <p class="section-text-muted fade-up delay-2" style="text-align: center; max-width: 700px; margin: 0 auto;">ATICC operates on strict gatekeeper logic with a tiered vetting framework, continuous market monitoring, and integrity enforcement through a zero-tolerance policy.</p>
  </div>
</div>

<!-- ========= GOVERNANCE FRAMEWORK ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">GOVERNANCE & LEADERSHIP</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Institutional Blueprint</h2>
    
    <div class="governance-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 60px;">
      <div class="gov-card" style="background: var(--bg-gray-2); padding: 40px 30px; border-bottom: 2px solid var(--color-accent);">
        <div style="font-size: 12px; font-weight: 600; color: var(--color-accent); margin-bottom: 20px; letter-spacing: 0.1em;">01</div>
        <h4 style="font-size: 20px; font-weight: 500; color: var(--color-text-dark); margin-bottom: 15px;">Office of the Group Chairman</h4>
        <p style="font-size: 14px; color: var(--color-text-gray-2); line-height: 1.6;">Supreme Strategic Authority responsible for defining long-term global strategy, authorizing high-level engagements, and providing final oversight on institutional risk.</p>
      </div>
      
      <div class="gov-card" style="background: var(--bg-gray-2); padding: 40px 30px; border-bottom: 2px solid var(--color-accent);">
        <div style="font-size: 12px; font-weight: 600; color: var(--color-accent); margin-bottom: 20px; letter-spacing: 0.1em;">02</div>
        <h4 style="font-size: 20px; font-weight: 500; color: var(--color-text-dark); margin-bottom: 15px;">The Secretariat-General</h4>
        <p style="font-size: 14px; color: var(--color-text-gray-2); line-height: 1.6;">Translates board-level strategy into operational reality, coordinating multi-regional operations and enforcing institutional reporting systems.</p>
      </div>
      
      <div class="gov-card" style="background: var(--bg-gray-2); padding: 40px 30px; border-bottom: 2px solid var(--color-accent);">
        <div style="font-size: 12px; font-weight: 600; color: var(--color-accent); margin-bottom: 20px; letter-spacing: 0.1em;">03</div>
        <h4 style="font-size: 20px; font-weight: 500; color: var(--color-text-dark); margin-bottom: 15px;">The Operations Directorate</h4>
        <p style="font-size: 14px; color: var(--color-text-gray-2); line-height: 1.6;">Manages the technical and administrative ecosystem, including the Global Digital Interface, onboarding protocols, and quality control.</p>
      </div>
      
      <div class="gov-card" style="background: var(--bg-gray-2); padding: 40px 30px; border-bottom: 2px solid var(--color-accent);">
        <div style="font-size: 12px; font-weight: 600; color: var(--color-accent); margin-bottom: 20px; letter-spacing: 0.1em;">04</div>
        <h4 style="font-size: 20px; font-weight: 500; color: var(--color-text-dark); margin-bottom: 15px;">Advisory Board of Governors</h4>
        <p style="font-size: 14px; color: var(--color-text-gray-2); line-height: 1.6;">Composed of global industry titans providing strategic foresight, market intelligence, and diplomatic bridge-building.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= MARKET CONNECTIVITY ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">GLOBAL TRADE CORRIDORS & MARKET ACCESS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Market Connectivity Platforms</h2>
    
    <div class="connectivity-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 60px;">
      <div class="connectivity-card" style="background: var(--bg-white-2); padding: 35px 25px; border: 1px solid var(--border-light);">
        <h4 style="font-size: 18px; font-weight: 600; color: var(--color-text-dark); margin-bottom: 12px;">The Corridor Principle</h4>
        <p style="font-size: 14px; color: var(--color-text-gray-2); line-height: 1.6;">Africa as a network of interconnected economic corridors, optimizing trade flows based on regional logistics and historical routes.</p>
      </div>
      
      <div class="connectivity-card" style="background: var(--bg-white-2); padding: 35px 25px; border: 1px solid var(--border-light);">
        <h4 style="font-size: 18px; font-weight: 600; color: var(--color-text-dark); margin-bottom: 12px;">Strategic Trade Facilitation</h4>
        <p style="font-size: 14px; color: var(--color-text-gray-2); line-height: 1.6;">Technical "soft infrastructure" for trade: regulatory navigation, documentation optimization, and market entry intelligence.</p>
      </div>
      
      <div class="connectivity-card" style="background: var(--bg-white-2); padding: 35px 25px; border: 1px solid var(--border-light);">
        <h4 style="font-size: 18px; font-weight: 600; color: var(--color-text-dark); margin-bottom: 12px;">AfCFTA Integration</h4>
        <p style="font-size: 14px; color: var(--color-text-gray-2); line-height: 1.6;">Private-sector bridge for the African Continental Free Trade Area, leveraging tariff reductions and intra-African trade preferences.</p>
      </div>
      
      <div class="connectivity-card" style="background: var(--bg-white-2); padding: 35px 25px; border: 1px solid var(--border-light);">
        <h4 style="font-size: 18px; font-weight: 600; color: var(--color-text-dark); margin-bottom: 12px;">International Access Nodes</h4>
        <p style="font-size: 14px; color: var(--color-text-gray-2); line-height: 1.6;">Strategic global junctions in key financial hubs: London, Dubai, New York, and Beijing.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= LEGAL & COMPLIANCE ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">LEGAL & COMPLIANCE</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Legal Framework</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 700px; margin: 0 auto 60px auto;">ATICC operates within a defined legal and compliance framework designed to protect institutional integrity and transaction credibility.</p>
    
    <div class="legal-grid" style="display: grid; grid-template-columns: repeat(2, 1fr); gap: 50px; max-width: 1000px; margin: 0 auto;">
      <ul style="list-style: none; padding: 0;">
        <li style="padding: 15px 0; border-bottom: 1px solid var(--border-light); display: flex; align-items: flex-start;"><span style="color: var(--color-accent); margin-right: 15px;">✓</span><span><strong style="color: var(--color-text-dark);">ATICC Model Clause:</strong> <span style="color: var(--color-text-gray-2);">30-day cooling-off period for dispute resolution</span></span></li>
        <li style="padding: 15px 0; border-bottom: 1px solid var(--border-light); display: flex; align-items: flex-start;"><span style="color: var(--color-accent); margin-right: 15px;">✓</span><span><strong style="color: var(--color-text-dark);">Integrity Blacklist:</strong> <span style="color: var(--color-text-gray-2);">De-accession and ecosystem blacklisting for non-compliance</span></span></li>
        <li style="padding: 15px 0; display: flex; align-items: flex-start;"><span style="color: var(--color-accent); margin-right: 15px;">✓</span><span><strong style="color: var(--color-text-dark);">Indemnity:</strong> <span style="color: var(--color-text-gray-2);">Final fiduciary responsibility rests with principals</span></span></li>
      </ul>
      
      <ul style="list-style: none; padding: 0;">
        <li style="padding: 15px 0; border-bottom: 1px solid var(--border-light); display: flex; align-items: flex-start;"><span style="color: var(--color-accent); margin-right: 15px;">✓</span><span><strong style="color: var(--color-text-dark);">Jurisdictional Alignment:</strong> <span style="color: var(--color-text-gray-2);">International arbitration hubs (Mauritius, London, Dubai)</span></span></li>
        <li style="padding: 15px 0; border-bottom: 1px solid var(--border-light); display: flex; align-items: flex-start;"><span style="color: var(--color-accent); margin-right: 15px;">✓</span><span><strong style="color: var(--color-text-dark);">Dispute Facilitation:</strong> <span style="color: var(--color-text-gray-2);">High-level mediation through the Secretariat-General</span></span></li>
        <li style="padding: 15px 0; display: flex; align-items: flex-start;"><span style="color: var(--color-accent); margin-right: 15px;">✓</span><span><strong style="color: var(--color-text-dark);">Institutional Shield:</strong> <span style="color: var(--color-text-gray-2);">Standardized legal environment for member interactions</span></span></li>
      </ul>
    </div>
  </div>
</div>

<!-- ========= FINAL QUOTE ========= -->
<div class="final-quote">
  <p class="scale-in">Structure defines authority.<br>Integrity anchors capital.<br><span class="gold-accent">Execution drives value.</span></p>
</div>

@include('layouts.footer')


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
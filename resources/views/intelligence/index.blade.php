@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= INTELLIGENCE HERO SECTION ========= -->
<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/ATICC image .png') }}'); background-position: 60% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed">Home / Intelligence</div>
    <h1 class="headline fade-up revealed">Intelligence</h1>
    <div class="body-text fade-up delay-2 revealed">ATICC delivers policy intelligence, market data, and institutional insights to enable informed decision-making and strategic execution.</div>
  </div>
</div>

<!-- ========= OVERVIEW SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">STRATEGIC INTELLIGENCE</div>
    <div class="large-statement fade-up delay-1">Policy & Intelligence</div>
    <div class="supporting-text fade-up delay-2">ATICC provides structured policy insight and economic intelligence aligned with African and global market dynamics.</div>
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; margin-top: 50px;">
      <div class="grid-card glide-in delay-1">
        <h4>Trade & Investment Policy Analysis</h4>
        <p>Structured examination of regulatory frameworks and policy shifts affecting cross-border trade and capital flows.</p>
      </div>
      <div class="grid-card glide-in delay-2">
        <h4>AfCFTA-Aligned Corridor Intelligence</h4>
        <p>Strategic insights on trade corridors optimized for the African Continental Free Trade Area framework.</p>
      </div>
      <div class="grid-card glide-in delay-3">
        <h4>Sector-Specific Insights</h4>
        <p>Deep-dive analysis across priority industries including energy, infrastructure, agro-processing, and digital trade.</p>
      </div>
      <div class="grid-card glide-in delay-4">
        <h4>Strategic Market Entry Intelligence</h4>
        <p>Data-driven guidance for institutional capital entering African markets.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= INTELLIGENCE APPLICATION ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Intelligence for Execution</h3>
        <p style="font-size: 16px;">ATICC's intelligence framework is designed to support institutional decision-making and transaction execution.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 15px;"><strong>Deal Flow Intelligence:</strong> Sector and corridor-specific data to identify and validate execution-ready opportunities.</p>
        <p style="font-size: 15px; margin-top: 15px;"><strong>Risk & Compliance Insights:</strong> Regulatory and AML intelligence to ensure transaction integrity.</p>
        <p style="font-size: 15px; margin-top: 15px;"><strong>Market Entry Strategy:</strong> Data-driven guidance for institutional capital deployment into African markets.</p>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .full-width-gray { width: 100%; background: #F5F6F8; padding: 80px 0; }
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .large-statement { font-size: 48px; font-weight: 700; color: #17015e; margin-bottom: 20px; text-align: center; }
  .supporting-text { font-size: 16px; color: #4A5E72; max-width: 700px; margin: 0 auto; text-align: center; line-height: 1.6; }
  .grid-5 { display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; }
  .grid-card { flex: 1; min-width: 250px; background: #F8F9FA; padding: 32px 28px; border-radius: 16px; }
  .grid-card h4 { font-size: 18px; font-weight: 700; color: #0e0e0e; margin-bottom: 12px; }
  .grid-card p { font-size: 14px; color: #4A5E72; line-height: 1.5; }
  .framework-split { display: flex; gap: 60px; align-items: center; }
  .framework-left { flex: 1; }
  .framework-right { flex: 1; }
  
  /* Hero Section */
  .hero-section {
    background-size: cover;
    background-repeat: no-repeat;
    min-height: 500px;
    display: flex;
    align-items: center;
    position: relative;
  }
  .hero-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
    margin-left: 8%;
    padding: 40px 20px;
  }
  .hero-content .breadcrumb {
    font-size: 13px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #C49A6C;
    font-weight: 300;
  }
  .hero-content .headline {
    font-size: 58px;
    font-weight: 300;
    color: #ffffff;
    margin: 20px 0 20px;
    line-height: 1.2;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  }
  .hero-content .body-text {
    font-size: 18px;
    color: rgba(255,255,255,0.92);
    max-width: 620px;
    line-height: 1.5;
    font-weight: 300;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  }
  
  @media (max-width: 992px) {
    .framework-split { flex-direction: column; gap: 30px; }
    .large-statement { font-size: 36px; }
    .hero-content .headline { font-size: 48px; }
  }
  
  @media (max-width: 768px) {
    .large-statement { font-size: 32px; }
    .full-width-white, .full-width-gray { padding: 50px 0; }
    .hero-content .headline { font-size: 42px; }
    .hero-section { min-height: 420px; background-position: 65% center !important; }
    .hero-content { margin-left: 5%; }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 34px; }
    .hero-content .body-text { font-size: 16px; }
  }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .grid-card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  
  // Immediately reveal hero elements that are visible
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
    }
    else {
      if (nav) nav.classList.remove('scrolled');
      document.body.classList.remove('nav-shrunk');
    }
  });
</script>

@endsection
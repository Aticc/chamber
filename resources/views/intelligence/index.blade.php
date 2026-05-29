@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= INTELLIGENCE HERO SECTION ========= -->
<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/IMG_0952.png') }}'); background-position: 60% center;">
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
  @media (max-width: 768px) { .framework-split { flex-direction: column; gap: 30px; } .large-statement { font-size: 32px; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .grid-card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  window.addEventListener('scroll', function() {
    const nav = document.getElementById('stickyNav');
    if (window.scrollY > 50) { nav.classList.add('scrolled'); document.body.classList.add('nav-shrunk'); }
    else { nav.classList.remove('scrolled'); document.body.classList.remove('nav-shrunk'); }
  });
</script>
@endsection
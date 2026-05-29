@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/IMG_0952.png') }}'); background-position: 60% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed">Home / Intelligence / Market Intelligence</div>
    <h1 class="headline fade-up revealed">Market Intelligence</h1>
    <div class="body-text fade-up delay-2 revealed">Strategic market insights and data-driven analysis for institutional decision-making.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">MARKET INTELLIGENCE</div>
    <div class="large-statement fade-up delay-1">Data-Driven Market Insights</div>
    <div class="supporting-text fade-up delay-2">ATICC provides institutional-grade market intelligence across African economies and priority sectors.</div>
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; margin-top: 50px;">
      <div class="grid-card glide-in delay-1">
        <h4>Macroeconomic Analysis</h4>
        <p>Comprehensive analysis of economic trends, fiscal policies, and market conditions across African markets.</p>
      </div>
      <div class="grid-card glide-in delay-2">
        <h4>Sector Performance Data</h4>
        <p>Real-time and historical data on sector performance across priority industries.</p>
      </div>
      <div class="grid-card glide-in delay-3">
        <h4>Investment Climate Reports</h4>
        <p>Detailed assessments of investment environments, regulatory frameworks, and market opportunities.</p>
      </div>
      <div class="grid-card glide-in delay-4">
        <h4>Competitive Landscape Analysis</h4>
        <p>Strategic insights on market dynamics, key players, and competitive positioning.</p>
      </div>
    </div>
  </div>
</div>

<div class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3>Intelligence Sources</h3>
        <p>ATICC integrates intelligence from global risk agencies, policy institutions, trade bodies, and proprietary data systems.</p>
      </div>
      <div class="framework-right fade-right">
        <p><strong>Primary Research:</strong> On-ground intelligence from ATICC's regional network</p>
        <p style="margin-top: 15px;"><strong>Partner Intelligence:</strong> Verified data from global risk agencies</p>
        <p style="margin-top: 15px;"><strong>Proprietary Analytics:</strong> ATICC's internal intelligence framework</p>
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
</script>
@endsection
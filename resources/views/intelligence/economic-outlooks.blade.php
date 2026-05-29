@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/IMG_0952.png') }}'); background-position: 60% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed">Home / Intelligence / Economic Outlooks</div>
    <h1 class="headline fade-up revealed">Economic Outlooks</h1>
    <div class="body-text fade-up delay-2 revealed">Forecasts and analysis of economic trends across African markets.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">ECONOMIC FORECASTS</div>
    <div class="large-statement fade-up delay-1">Economic Outlooks</div>
    <div class="supporting-text fade-up delay-2">Strategic economic forecasts and analysis for institutional planning.</div>
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; margin-top: 50px;">
      <div class="grid-card glide-in delay-1">
        <h4>Regional Economic Outlooks</h4>
        <p>Economic forecasts for East Africa, West Africa, Southern Africa, and North Africa.</p>
      </div>
      <div class="grid-card glide-in delay-2">
        <h4>Sector Growth Projections</h4>
        <p>Growth forecasts for priority sectors including infrastructure, energy, and digital trade.</p>
      </div>
      <div class="grid-card glide-in delay-3">
        <h4>Investment Climate Forecasts</h4>
        <p>Analysis of investment conditions and capital flow projections.</p>
      </div>
      <div class="grid-card glide-in delay-4">
        <h4>Risk Outlook Reports</h4>
        <p>Strategic analysis of political, regulatory, and market risks.</p>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .large-statement { font-size: 48px; font-weight: 700; color: #17015e; margin-bottom: 20px; text-align: center; }
  .supporting-text { font-size: 16px; color: #4A5E72; max-width: 700px; margin: 0 auto; text-align: center; line-height: 1.6; }
  .grid-5 { display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; }
  .grid-card { flex: 1; min-width: 250px; background: #F8F9FA; padding: 32px 28px; border-radius: 16px; }
  .grid-card h4 { font-size: 18px; font-weight: 700; color: #0e0e0e; margin-bottom: 12px; }
  .grid-card p { font-size: 14px; color: #4A5E72; line-height: 1.5; }
  @media (max-width: 768px) { .large-statement { font-size: 32px; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .grid-card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
</script>
@endsection
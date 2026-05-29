@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/IMG_0952.png') }}'); background-position: 60% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed">Home / Intelligence / Investment Briefings</div>
    <h1 class="headline fade-up revealed">Investment Briefings</h1>
    <div class="body-text fade-up delay-2 revealed">Strategic investment insights and opportunity briefings for institutional capital.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">INVESTMENT INTELLIGENCE</div>
    <div class="large-statement fade-up delay-1">Strategic Investment Briefings</div>
    <div class="supporting-text fade-up delay-2">Tailored investment insights for institutional investors and capital partners.</div>
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; margin-top: 50px;">
      <div class="grid-card glide-in delay-1">
        <h4>Capital Deployment Briefings</h4>
        <p>Strategic guidance on capital allocation across African markets and sectors.</p>
      </div>
      <div class="grid-card glide-in delay-2">
        <h4>Opportunity Spotlights</h4>
        <p>Detailed briefings on verified investment opportunities and project pipelines.</p>
      </div>
      <div class="grid-card glide-in delay-3">
        <h4>Market Entry Strategies</h4>
        <p>Intelligence on market entry frameworks and execution pathways.</p>
      </div>
      <div class="grid-card glide-in delay-4">
        <h4>Risk Assessment Briefings</h4>
        <p>Comprehensive risk analysis for institutional investment decisions.</p>
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
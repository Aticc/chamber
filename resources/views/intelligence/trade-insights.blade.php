@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/IMG_0952.png') }}'); background-position: 60% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed">Home / Intelligence / Trade Insights</div>
    <h1 class="headline fade-up revealed">Trade Insights</h1>
    <div class="body-text fade-up delay-2 revealed">Strategic trade intelligence and cross-border market analysis.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">TRADE INTELLIGENCE</div>
    <div class="large-statement fade-up delay-1">Cross-Border Trade Insights</div>
    <div class="supporting-text fade-up delay-2">Data-driven insights on trade flows, corridors, and market access.</div>
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; margin-top: 50px;">
      <div class="grid-card glide-in delay-1">
        <h4>Corridor Performance Analysis</h4>
        <p>Intelligence on trade corridor performance, capacity, and optimization opportunities.</p>
      </div>
      <div class="grid-card glide-in delay-2">
        <h4>AfCFTA Implementation Updates</h4>
        <p>Regular updates on African Continental Free Trade Area implementation and impact.</p>
      </div>
      <div class="grid-card glide-in delay-3">
        <h4>Trade Policy Developments</h4>
        <p>Analysis of regulatory changes affecting cross-border trade and investment.</p>
      </div>
      <div class="grid-card glide-in delay-4">
        <h4>Supply Chain Intelligence</h4>
        <p>Insights on supply chain dynamics, logistics, and trade facilitation.</p>
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
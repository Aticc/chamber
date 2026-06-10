@extends("layouts.app")

@section('content')


<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
    <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
      <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ECONOMIC OUTLOOK.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
      </div>

      <div class="hero-content">
    <div class="breadcrumb fade-up revealed">Home / Intelligence / Research Publications</div>
    <h1 class="headline fade-up revealed">Research <span>Publications</span></h1>
    <div class="body-text fade-up delay-2 revealed">Institutional research and analysis for strategic decision-making.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">RESEARCH</div>
    <div class="large-statement fade-up delay-1">Research Publications</div>
    <div class="supporting-text fade-up delay-2">Comprehensive research on African markets, sectors, and investment landscapes.</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 50px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1">
        <h4>Quarterly Market Reports</h4>
        <p>Regular reports on market conditions, investment flows, and economic trends.</p>
      </div>
      <div class="product-card glide-in delay-2">
        <h4>Sector Deep Dives</h4>
        <p>In-depth research on priority sectors and emerging opportunities.</p>
      </div>
      <div class="product-card glide-in delay-3">
        <h4>Country Investment Guides</h4>
        <p>Comprehensive guides to investment environments across African markets.</p>
      </div>
      <div class="product-card glide-in delay-4">
        <h4>Policy Briefs</h4>
        <p>Strategic briefs on policy developments and regulatory frameworks.</p>
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
  .products-grid { display: flex; gap: 32px; flex-wrap: wrap; }
  .product-card { flex: 1; background: #F5F6F8; padding: 32px 28px; border-radius: 16px; }
  .product-card h4 { font-size: 20px; font-weight: 700; margin-bottom: 12px; color: #0e0e0e; }
  .product-card p { font-size: 14px; color: #4a5e72; line-height: 1.5; }
  @media (max-width: 768px) { .large-statement { font-size: 32px; } .products-grid { flex-direction: column; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .product-card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
</script>
@endsection
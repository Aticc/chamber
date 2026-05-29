@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/IMG_0950.png') }}'); background-position: 70% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About / Regional Coordination Network</div>
    <h1 class="headline fade-up revealed">Regional <span style="color: #17015e;">Coordination Network</span></h1>
    <div class="body-text fade-up delay-2 revealed">ATICC maintains strategic regional coordination hubs across Africa's major economic corridors.</div>
  </div>
</div>

<!-- ========= REGIONAL CONTENT ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">REGIONAL HUBS</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>West Africa Hub</h4>
        <p>Lagos, Nigeria - Coordinating trade and investment across ECOWAS region.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>East Africa Hub</h4>
        <p>Nairobi, Kenya - Covering EAC and Horn of Africa markets.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>Southern Africa Hub</h4>
        <p>Johannesburg, South Africa - SADC region coordination.</p>
      </div>
      <div class="product-card glide-in delay-4" style="flex: 1;">
        <h4>North Africa Hub</h4>
        <p>Casablanca, Morocco - MENA region engagement.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= INTERNATIONAL ACCESS NODES ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">INTERNATIONAL ACCESS NODES</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>London</h4>
        <p>European capital markets and institutional investors.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>Dubai</h4>
        <p>Middle East trade and investment corridor.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>New York</h4>
        <p>North American institutional capital access.</p>
      </div>
      <div class="product-card glide-in delay-4" style="flex: 1;">
        <h4>Beijing</h4>
        <p>Asia-Pacific trade and investment coordination.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= FINAL QUOTE ========= -->
<div class="final-quote">
  <p class="scale-in" style="font-size: 18px;">Structure defines authority.<br>Integrity anchors capital.<br>Execution drives value.</p>
</div>

@include('layouts.footer')

<style>
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .full-width-gray { width: 100%; background: #F5F6F8; padding: 80px 0; }
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .products-grid { display: flex; gap: 32px; flex-wrap: wrap; }
  .product-card { flex: 1; background: #f5f6f8; padding: 32px 28px; border-radius: 16px; }
  .product-card h4 { font-size: 20px; font-weight: 400; margin-bottom: 12px; color: #0e0e0e; }
  .product-card p { font-size: 14px; color: #4a5e72; line-height: 1.5; }
  .final-quote { background: white; text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: #0e0e0e; line-height: 1.4; }
  @media (max-width: 768px) { .products-grid { flex-direction: column; } .full-width-white, .full-width-gray { padding: 40px 0; } .final-quote p { font-size: 22px; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .product-card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  window.addEventListener('scroll', function() { const nav = document.getElementById('stickyNav'); if (window.scrollY > 50) { nav.classList.add('scrolled'); document.body.classList.add('nav-shrunk'); } else { nav.classList.remove('scrolled'); document.body.classList.remove('nav-shrunk'); } });
</script>
@endsection
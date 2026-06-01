@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/ATICC image .png') }}'); background-position: 70% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About / Leadership & Advisory Board</div>
    <h1 class="headline fade-up revealed">Leadership & <span style="color: #17015e;">Advisory Board</span></h1>
    <div class="body-text fade-up delay-2 revealed">ATICC's leadership framework is built on institutional discipline, execution focus, and integrity enforcement.</div>
  </div>
</div>

<!-- ========= LEADERSHIP CONTENT ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">EXECUTIVE LEADERSHIP</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1; text-align: center;">
        <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #041931, #031B4E); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;">
          <span style="color: white; font-size: 36px;">✓</span>
        </div>
        <h4>Office of the Group Chairman</h4>
        <p>Strategic authority and oversight</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1; text-align: center;">
        <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #041931, #031B4E); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;">
          <span style="color: white; font-size: 36px;">✓</span>
        </div>
        <h4>The Secretariat-General</h4>
        <p>Execution coordination</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1; text-align: center;">
        <div style="width: 100px; height: 100px; background: linear-gradient(135deg, #041931, #031B4E); border-radius: 50%; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center;">
          <span style="color: white; font-size: 36px;">✓</span>
        </div>
        <h4>The Operations Directorate</h4>
        <p>Systems and process control</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= ADVISORY BOARD ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">ADVISORY BOARD OF GOVERNORS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Global Industry Leaders</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">Composed of global industry titans providing strategic foresight, market intelligence, and diplomatic bridge-building.</p>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 50px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>Strategic Foresight</h4>
        <p>Non-executive guidance on long-term institutional positioning.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>Market Intelligence</h4>
        <p>Sector-specific insights across priority industries.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>Diplomatic Bridge-Building</h4>
        <p>Facilitating engagement with governments and multilateral institutions.</p>
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
  .section-title-dark { font-size: 48px; font-weight: 300; color: #0e0e0e; margin-bottom: 20px; text-align: center; }
  .section-text-dark { font-size: 16px; color: #3a4c5e; line-height: 1.7; }
  .products-grid { display: flex; gap: 32px; flex-wrap: wrap; }
  .product-card { flex: 1; background: #f5f6f8; padding: 32px 28px; border-radius: 16px; }
  .product-card h4 { font-size: 20px; font-weight: 300; margin-bottom: 12px; color: #0e0e0e; }
  .product-card p { font-size: 14px; color: #4a5e72; line-height: 1.5; }
  .final-quote { background: white; text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: #0e0e0e; line-height: 1.4; }
  @media (max-width: 768px) { .section-title-dark { font-size: 32px; } .products-grid { flex-direction: column; } .full-width-white, .full-width-gray { padding: 40px 0; } .final-quote p { font-size: 22px; } }
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
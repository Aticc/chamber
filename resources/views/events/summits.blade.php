@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= SUMMITS HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 65%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 90%; height: 100%; background: url('{{ asset('assets/images/Institutional Summits.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Events / Summits</div>
    <h1 class="headline fade-up revealed" style="max-width: 65%;">Institutional Summits</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 108%; line-height: 1.5;">ATICC convenes institutional summits to align capital, policy, and market participants within structured engagement environments.</div>
  </div>
</div>

<!-- ========= SUMMITS CONTENT ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">STRATEGIC CONVENINGS</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 36px;">Flagship Summits</div>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC convenes institutional summits designed to facilitate high-level dialogue, capital alignment, and transaction execution.</p>
    
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>ATICC Institutional Summit</h4>
        <p>Annual flagship summit bringing together institutional investors, policymakers, and market leaders.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>Africa Investment Summit</h4>
        <p>Focused on capital deployment, investment opportunities, and cross-border transactions.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>Trade & Infrastructure Summit</h4>
        <p>Addressing trade corridors, infrastructure development, and regional integration.</p>
      </div>
      <div class="product-card glide-in delay-4" style="flex: 1;">
        <h4>Digital Trade & Innovation Summit</h4>
        <p>Exploring digital trade, fintech, and technology-driven market access.</p>
      </div>
    </div>
    <p class="section-text-dark fade-up delay-3" style="text-align: center; max-width: 600px; margin: 40px auto 0; font-size: 14px;">Participation is structured and by invitation or verified access.</p>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= UPCOMING SUMMITS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">UPCOMING SUMMITS</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 32px;">Save the Date</div>
    <div class="upcoming-list" style="margin-top: 50px;">
      <div class="upcoming-card" style="display: flex; justify-content: space-between; align-items: center; padding: 25px; background: white; border-radius: 16px; margin-bottom: 20px; flex-wrap: wrap; gap: 15px;">
        <div>
          <div style="font-size: 12px; color: #C49A6C; margin-bottom: 5px;">Q4 2025</div>
          <h4 style="font-size: 20px; font-weight: 600; color: #031B4E;">ATICC Institutional Summit 2025</h4>
          <p style="font-size: 14px; color: #5D6F7F; margin-top: 5px;">London, United Kingdom</p>
        </div>
        <a href="#" class="upcoming-btn" style="background: #041931; color: white; padding: 10px 24px; border-radius: 30px; text-decoration: none; font-size: 13px;">Register Interest →</a>
      </div>
      <div class="upcoming-card" style="display: flex; justify-content: space-between; align-items: center; padding: 25px; background: white; border-radius: 16px; margin-bottom: 20px; flex-wrap: wrap; gap: 15px;">
        <div>
          <div style="font-size: 12px; color: #C49A6C; margin-bottom: 5px;">Q2 2026</div>
          <h4 style="font-size: 20px; font-weight: 600; color: #031B4E;">Africa Infrastructure Summit</h4>
          <p style="font-size: 14px; color: #5D6F7F; margin-top: 5px;">Nairobi, Kenya</p>
        </div>
        <a href="#" class="upcoming-btn" style="background: #041931; color: white; padding: 10px 24px; border-radius: 30px; text-decoration: none; font-size: 13px;">Register Interest →</a>
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
  .breadcrumb-light { font-size: 14px; letter-spacing: 0.08em; text-transform: uppercase; color: #5d6f7f; margin-bottom: 20px; font-weight: 400; }
  .section-title-dark { font-size: 48px; font-weight: 400; color: #0e0e0e; margin-bottom: 20px; }
  .section-text-dark { font-size: 16px; color: #3a4c5e; line-height: 1.7; }
  .products-grid { display: flex; gap: 32px; flex-wrap: wrap; }
  .product-card { flex: 1; background: #f5f6f8; padding: 32px 28px; border-radius: 16px; }
  .product-card h4 { font-size: 20px; font-weight: 400; margin-bottom: 12px; color: #0e0e0e; }
  .product-card p { font-size: 14px; color: #4a5e72; line-height: 1.5; }
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .large-statement { font-size: 48px; font-weight: 400; color: #031B4E; margin-bottom: 20px; text-align: center; }
  .final-quote { background: white; text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: #0e0e0e; line-height: 1.4; }
  .section-spacer { height: 1px; background: transparent; }
  @media (max-width: 768px) { .section-title-dark { font-size: 32px; } .full-width-white, .full-width-gray { padding: 40px 0; } .products-grid { flex-direction: column; } .large-statement { font-size: 28px !important; } .final-quote p { font-size: 22px !important; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .grid-card, .product-card');
  const observer = new IntersectionObserver((entries) => { entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } }); }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  window.addEventListener('scroll', function() { const nav = document.getElementById('stickyNav'); if (window.scrollY > 50) { nav.classList.add('scrolled'); document.body.classList.add('nav-shrunk'); } else { nav.classList.remove('scrolled'); document.body.classList.remove('nav-shrunk'); } });
</script>
@endsection
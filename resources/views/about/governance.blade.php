@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/Governance Framework.jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About / Governance Framework</div>
    <h1 class="headline fade-up revealed">Governance <span style="color: #17015e;">Framework</span></h1>
    <div class="body-text fade-up delay-2 revealed">ATICC operates within a defined institutional governance framework to ensure control, accountability, and execution discipline across all operations.</div>
  </div>
</div>

<!-- ========= GOVERNANCE & LEADERSHIP ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">GOVERNANCE & LEADERSHIP</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>Office of the Group Chairman</h4>
        <p>Supreme Strategic Authority responsible for defining long-term global strategy, authorizing high-level engagements, and providing final oversight on institutional risk.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>The Secretariat-General</h4>
        <p>Translates board-level strategy into operational reality, coordinating multi-regional operations and enforcing institutional reporting systems.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>The Operations Directorate</h4>
        <p>Manages the technical and administrative ecosystem, including the Global Digital Interface, onboarding protocols, and quality control.</p>
      </div>
      <div class="product-card glide-in delay-4" style="flex: 1;">
        <h4>Advisory Board of Governors</h4>
        <p>Composed of global industry titans providing strategic foresight, market intelligence, and diplomatic bridge-building.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= INSTITUTIONAL GOVERNANCE SAFEGUARDS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Institutional Governance Safeguards</h3>
        <p style="font-size: 16px;">Ensuring institutional balance and operational resilience through distributed oversight and continuity.</p>
      </div>
      <div class="framework-right fade-right">
        <p style="font-size: 15px;"><span>Strategic Oversight Committee:</span> Periodic review of chairman-level decisions and institutional direction.</p>
        <p style="font-size: 15px; margin-top: 15px;"><span>Independent Advisory Review Layer:</span> Non-executive validation of high-impact strategic engagements.</p>
        <p style="font-size: 15px; margin-top: 15px;"><span>Delegated Authority Protocols:</span> Thresholds for decentralized execution across directorates to prevent operational bottlenecks.</p>
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
  .framework-split { display: flex; gap: 60px; align-items: center; }
  .final-quote { background: white; text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: #0e0e0e; line-height: 1.4; }
  @media (max-width: 768px) { .products-grid { flex-direction: column; } .framework-split { flex-direction: column; gap: 30px; } .full-width-white, .full-width-gray { padding: 40px 0; } .final-quote p { font-size: 22px; } }
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
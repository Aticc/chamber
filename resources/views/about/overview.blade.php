@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/ATICC image .png') }}'); background-position: 70% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About / Institutional Overview</div>
    <h1 class="headline fade-up revealed">Institutional <span style="color: #17015e;">Overview</span></h1>
    <div class="body-text fade-up delay-2 revealed">The Africa Trade & Investment Chamber of Commerce (ATICC) is a private, member-governed clearing house and institutional platform engineered to serve as a transaction-driven interface, bridging the gap between global institutional capital and vetted African market opportunities.</div>
  </div>
</div>

<!-- ========= INSTITUTIONAL IDENTITY ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">INSTITUTIONAL IDENTITY</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Official Designation</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC is a private, member-governed clearing house and institutional platform engineered to serve as a transaction-driven interface, bridging the gap between global institutional capital and vetted African market opportunities.</p>
  </div>
</div>

<!-- ========= INSTITUTIONAL POSITIONING ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">POSITIONING</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">The Gateway</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC functions as a strategic intelligence gateway, anchored by an Africa-focused institutional core and powered by a proprietary global digital interface, connecting verified stakeholders worldwide through a structured, secure, and transparent environment for African market access.</p>
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
  .final-quote { background: white; text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: #0e0e0e; line-height: 1.4; }
  @media (max-width: 768px) { .section-title-dark { font-size: 32px; } .full-width-white, .full-width-gray { padding: 40px 0; } .final-quote p { font-size: 22px; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  window.addEventListener('scroll', function() { const nav = document.getElementById('stickyNav'); if (window.scrollY > 50) { nav.classList.add('scrolled'); document.body.classList.add('nav-shrunk'); } else { nav.classList.remove('scrolled'); document.body.classList.remove('nav-shrunk'); } });
</script>
@endsection
@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 140%; background: url('{{ asset('assets/images/Regional Coordination Network (1).jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About / Regional Coordination Network</div>
    <h1 class="headline fade-up revealed">Regional <span class="gold-accent">Coordination Network</span></h1>
    <div class="body-text fade-up delay-2 revealed">ATICC maintains strategic regional coordination hubs across Africa's major economic corridors.</div>
  </div>
</div>

<!-- ========= REGIONAL CONTENT ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">REGIONAL HUBS</div>
    <div class="regional-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 60px;">
      <div class="regional-card glide-in delay-1">
        <h4>West Africa Hub</h4>
        <p>Lagos, Nigeria - Coordinating trade and investment across ECOWAS region.</p>
      </div>
      <div class="regional-card glide-in delay-2">
        <h4>East Africa Hub</h4>
        <p>Nairobi, Kenya - Covering EAC and Horn of Africa markets.</p>
      </div>
      <div class="regional-card glide-in delay-3">
        <h4>Southern Africa Hub</h4>
        <p>Johannesburg, South Africa - SADC region coordination.</p>
      </div>
      <div class="regional-card glide-in delay-4">
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
    <div class="international-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 60px;">
      <div class="international-card glide-in delay-1">
        <h4>London</h4>
        <p>European capital markets and institutional investors.</p>
      </div>
      <div class="international-card glide-in delay-2">
        <h4>Dubai</h4>
        <p>Middle East trade and investment corridor.</p>
      </div>
      <div class="international-card glide-in delay-3">
        <h4>New York</h4>
        <p>North American institutional capital access.</p>
      </div>
      <div class="international-card glide-in delay-4">
        <h4>Beijing</h4>
        <p>Asia-Pacific trade and investment coordination.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= FINAL QUOTE ========= -->
<div class="final-quote">
  <p class="scale-in">Structure defines authority.<br>Integrity anchors capital.<br><span class="gold-accent">Execution drives value.</span></p>
</div>

@include('layouts.footer')

<style>
  /* Using Global CSS Variables */
  .full-width-white { 
    width: 100%; 
    background: var(--bg-white-2); 
    padding: 80px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .full-width-gray { 
    width: 100%; 
    background: var(--bg-gray-2); 
    padding: 80px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .wide-container {
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 40px;
  }
  
  .hero-content {
    max-width: 680px;
    padding: 120px 40px 80px 40px;
    position: relative;
    z-index: 2;
  }
  
  .breadcrumb { 
    font-size: 12px; 
    letter-spacing: 0.12em; 
    text-transform: uppercase; 
    color: var(--color-accent); 
    font-weight: 500; 
  }
  
  .hero-section .headline {
    font-family: var(--font-heading);
    font-size: 64px;
    font-weight: 600;
    line-height: 1.1;
    color: var(--color-text-dark);
    margin-bottom: 25px;
    letter-spacing: -0.02em;
  }
  
  .gold-accent { 
    color: var(--color-accent); 
  }
  
  .hero-section .body-text {
    font-size: 18px;
    line-height: 1.7;
    color: var(--color-text-gray-2);
    max-width: 550px;
  }
  
  .centered-eyebrow { 
    font-size: 12px; 
    letter-spacing: 0.12em; 
    text-transform: uppercase; 
    color: var(--color-accent); 
    margin-bottom: 20px; 
    text-align: center; 
    font-weight: 500;
  }
  
  /* Regional Cards */
  .regional-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 60px;
  }
  
  .regional-card { 
    background: var(--bg-gray-2); 
    padding: 35px 28px; 
    border-bottom: 3px solid var(--color-accent);
    transition: all 0.3s ease;
  }
  
  .regional-card:hover {
    transform: translateY(-6px);
  }
  
  .regional-card h4 { 
    font-size: 22px; 
    font-weight: 500; 
    color: var(--color-text-dark); 
    margin-bottom: 15px; 
  }
  
  .regional-card p { 
    font-size: 14px; 
    color: var(--color-text-gray-2); 
    line-height: 1.6; 
    margin: 0;
  }
  
  /* International Cards */
  .international-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 60px;
  }
  
  .international-card { 
    background: var(--bg-white-2); 
    padding: 35px 28px; 
    border: 1px solid var(--border-light);
    border-bottom: 3px solid var(--color-accent);
    transition: all 0.3s ease;
  }
  
  .international-card:hover {
    transform: translateY(-4px);
  }
  
  .international-card h4 { 
    font-size: 22px; 
    font-weight: 500; 
    color: var(--color-text-dark); 
    margin-bottom: 15px; 
  }
  
  .international-card p { 
    font-size: 14px; 
    color: var(--color-text-gray-2); 
    line-height: 1.6; 
    margin: 0;
  }
  
  /* Final Quote */
  .final-quote { 
    background: var(--bg-white-2); 
    text-align: center; 
    padding: 100px 20px; 
    border-top: 1px solid var(--border-light);
    border-bottom: 1px solid var(--border-light);
  }
  
  .final-quote p { 
    font-family: var(--font-heading);
    font-size: 42px; 
    color: var(--color-text-lighter-2); 
    line-height: 1.4; 
    font-weight: 400;
    letter-spacing: -0.01em;
  }
  
  /* Animation Classes */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
    opacity: 0;
    will-change: transform, opacity;
  }
  
  .fade-up.revealed {
    animation: smoothFadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .scale-in.revealed {
    animation: smoothScale 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .glide-in.revealed {
    animation: smoothGlide 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  @keyframes smoothFadeUp {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes smoothScale {
    0% { opacity: 0; transform: scale(0.98); }
    100% { opacity: 1; transform: scale(1); }
  }
  
  @keyframes smoothGlide {
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  
  .delay-1 { animation-delay: 0.1s; }
  .delay-2 { animation-delay: 0.2s; }
  .delay-3 { animation-delay: 0.3s; }
  .delay-4 { animation-delay: 0.4s; }
  
  /* Responsive */
  @media (max-width: 1200px) {
    .hero-section .headline { font-size: 52px; }
    .regional-grid, .international-grid { grid-template-columns: repeat(2, 1fr); }
    .final-quote p { font-size: 36px; }
  }
  
  @media (max-width: 768px) {
    .wide-container { padding: 0 24px; }
    .hero-content { padding: 100px 24px 60px 24px; }
    .hero-section .headline { font-size: 36px; }
    .regional-grid, .international-grid { grid-template-columns: 1fr; }
    .regional-card, .international-card { padding: 30px 25px; }
    .regional-card h4, .international-card h4 { font-size: 20px; }
    .final-quote p { font-size: 26px; }
    .final-quote { padding: 80px 20px; }
    .full-width-white, .full-width-gray { padding: 60px 0; }
  }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { 
      if (entry.isIntersecting) { 
        entry.target.classList.add('revealed'); 
        observer.unobserve(entry.target); 
      } 
    });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  
  window.addEventListener('scroll', function() { 
    const nav = document.getElementById('stickyNav'); 
    if (window.scrollY > 50) { 
      nav.classList.add('scrolled'); 
      document.body.classList.add('nav-shrunk'); 
    } else { 
      nav.classList.remove('scrolled'); 
      document.body.classList.remove('nav-shrunk'); 
    } 
  });
</script>
@endsection
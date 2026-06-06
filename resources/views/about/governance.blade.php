@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/Governance Framework.jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About / Governance Framework</div>
    <h1 class="headline fade-up revealed">Governance <span class="gold-accent">Framework</span></h1>
    <div class="body-text fade-up delay-2 revealed">ATICC operates within a defined institutional governance framework to ensure control, accountability, and execution discipline across all operations.</div>
  </div>
</div>

<!-- ========= GOVERNANCE & LEADERSHIP ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">GOVERNANCE & LEADERSHIP</div>
    <h2 class="section-title fade-up delay-1" style="text-align: center;">Institutional Leadership Structure</h2>
    
    <div class="governance-four-grid" style="display: grid; grid-template-columns: repeat(4, 1fr); gap: 30px; margin-top: 70px;">
      <div class="gov-card glide-in delay-1">
        <div class="gov-number">01</div>
        <h4>Office of the Group Chairman</h4>
        <p>Supreme Strategic Authority responsible for defining long-term global strategy, authorizing high-level engagements, and providing final oversight on institutional risk.</p>
      </div>
      
      <div class="gov-card glide-in delay-2">
        <div class="gov-number">02</div>
        <h4>The Secretariat-General</h4>
        <p>Translates board-level strategy into operational reality, coordinating multi-regional operations and enforcing institutional reporting systems.</p>
      </div>
      
      <div class="gov-card glide-in delay-3">
        <div class="gov-number">03</div>
        <h4>The Operations Directorate</h4>
        <p>Manages the technical and administrative ecosystem, including the Global Digital Interface, onboarding protocols, and quality control.</p>
      </div>
      
      <div class="gov-card glide-in delay-4">
        <div class="gov-number">04</div>
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
        <h3 class="framework-title">Institutional Governance Safeguards</h3>
        <p class="framework-subtitle">Ensuring institutional balance and operational resilience through distributed oversight and continuity.</p>
      </div>
      <div class="framework-right fade-right">
        <div class="safeguard-item">
          <span class="safeguard-title">Strategic Oversight Committee:</span>
          <p class="safeguard-text">Periodic review of chairman-level decisions and institutional direction.</p>
        </div>
        <div class="safeguard-item">
          <span class="safeguard-title">Independent Advisory Review Layer:</span>
          <p class="safeguard-text">Non-executive validation of high-impact strategic engagements.</p>
        </div>
        <div class="safeguard-item">
          <span class="safeguard-title">Delegated Authority Protocols:</span>
          <p class="safeguard-text">Thresholds for decentralized execution across directorates to prevent operational bottlenecks.</p>
        </div>
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
    padding: 100px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .full-width-gray { 
    width: 100%; 
    background: var(--bg-gray-2); 
    padding: 100px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .wide-container {
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 40px;
  }
  
  .hero-content {
    max-width: 700px;
    padding: 140px 40px 100px 40px;
    position: relative;
    z-index: 2;
  }
  
  .breadcrumb { 
    font-size: 12px; 
    letter-spacing: 0.12em; 
    text-transform: uppercase; 
    color: var(--color-accent); 
    font-weight: 500; 
    margin-bottom: 25px;
  }
  
  .hero-section .headline {
    font-family: var(--font-heading);
    font-size: 64px;
    font-weight: 600;
    line-height: 1.15;
    color: var(--color-text-dark);
    margin-bottom: 30px;
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
  
  .section-title {
    font-family: var(--font-heading);
    font-size: 42px;
    font-weight: 400;
    color: var(--color-text-dark);
    margin-bottom: 20px;
    line-height: 1.2;
  }
  
  /* Governance Cards Grid */
  .governance-four-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 30px;
    margin-top: 70px;
  }
  
  .gov-card { 
    background: var(--bg-gray-2); 
    padding: 45px 30px; 
    border-bottom: 3px solid var(--color-accent);
    transition: all 0.3s ease;
  }
  
  .gov-card:hover {
    transform: translateY(-6px);
  }
  
  .gov-number {
    font-size: 14px;
    font-weight: 600;
    color: var(--color-accent);
    margin-bottom: 25px;
    letter-spacing: 0.1em;
  }
  
  .gov-card h4 { 
    font-size: 22px; 
    font-weight: 500; 
    color: var(--color-text-dark); 
    margin-bottom: 18px; 
    line-height: 1.3;
  }
  
  .gov-card p { 
    font-size: 15px; 
    color: var(--color-text-gray-2); 
    line-height: 1.7; 
    margin: 0;
  }
  
  /* Framework Split Section */
  .framework-split { 
    display: flex; 
    gap: 80px; 
    align-items: flex-start; 
  }
  
  .framework-left { 
    flex: 1; 
  }
  
  .framework-right { 
    flex: 1.2; 
  }
  
  .framework-title {
    font-family: var(--font-heading);
    font-size: 38px;
    font-weight: 400;
    color: var(--color-text-dark);
    margin-bottom: 25px;
    line-height: 1.2;
  }
  
  .framework-subtitle {
    font-size: 17px;
font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
  }
  
  .safeguard-item {
    margin-bottom: 30px;
  }
  
  .safeguard-item:last-child {
    margin-bottom: 0;
  }
  
  .safeguard-title {
    font-size: 16px;
    font-weight: 600;
    color: var(--color-accent);
    display: block;
    margin-bottom: 10px;
  }
  
  .safeguard-text {
    font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
    margin: 0;
  }
  
  /* Final Quote */
  .final-quote { 
    background: var(--bg-white-2); 
    text-align: center; 
    padding: 120px 20px; 
    border-top: 1px solid var(--border-light);
    border-bottom: 1px solid var(--border-light);
  }
  
  .final-quote p { 
    font-family: var(--font-heading);
    font-size: 42px; 
    color: var(--color-text-dark); 
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
  
  .fade-left.revealed {
    animation: smoothFadeLeft 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .fade-right.revealed {
    animation: smoothFadeRight 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .scale-in.revealed {
    animation: smoothScale 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .glide-in.revealed {
    animation: smoothGlide 0.7s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  @keyframes smoothFadeUp {
    0% { opacity: 0; transform: translateY(25px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes smoothFadeLeft {
    0% { opacity: 0; transform: translateX(-25px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  
  @keyframes smoothFadeRight {
    0% { opacity: 0; transform: translateX(25px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  
  @keyframes smoothScale {
    0% { opacity: 0; transform: scale(0.97); }
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
    .section-title { font-size: 36px; }
    .framework-title { font-size: 32px; }
    .final-quote p { font-size: 36px; }
    .governance-four-grid { gap: 25px; }
  }
  
  @media (max-width: 991px) {
    .governance-four-grid { grid-template-columns: repeat(2, 1fr); }
    .framework-split { flex-direction: column; gap: 50px; }
  }
  
  @media (max-width: 768px) {
    .wide-container { padding: 0 24px; }
    .hero-content { padding: 100px 24px 60px 24px; }
    .hero-section .headline { font-size: 36px; }
    .section-title { font-size: 28px; }
    .governance-four-grid { grid-template-columns: 1fr; gap: 25px; }
    .gov-card { padding: 35px 25px; }
    .gov-card h4 { font-size: 20px; }
    .framework-title { font-size: 28px; }
    .final-quote p { font-size: 26px; }
    .final-quote { padding: 80px 20px; }
    .full-width-white, .full-width-gray { padding: 60px 0; }
    .safeguard-item { margin-bottom: 25px; }
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
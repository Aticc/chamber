@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 65%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 90%; height: 100%; background: url('{{ asset('assets/images/Mission - Strategic Purpose.jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>

  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About / Mission & Strategic Purpose</div>
    <h1 class="headline fade-up revealed">Mission & <span class="gold-accent">Strategic Purpose</span></h1>
    <div class="body-text fade-up delay-2 revealed">ATICC is established to promote, protect, and scale the commercial interests of entities engaged with African markets.</div>
  </div>
</div>

<!-- ========= CORE MANDATE ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">CORE MANDATE</div>
    <div class="large-statement fade-up delay-1" style="text-align: center;">Promote, Protect & Scale</div>
    <div class="supporting-text fade-up delay-2" style="text-align: center;">ATICC is established to promote, protect, and scale the commercial interests of entities engaged with African markets. Moving beyond traditional networking.</div>
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; margin-top: 50px;">
      <div class="grid-card glide-in delay-1" style="flex: 1; min-width: 250px;">
        <h4>Structured Market Entry</h4>
        <p>Providing a roadmap for localized expansion.</p>
      </div>
      <div class="grid-card glide-in delay-2" style="flex: 1; min-width: 250px;">
        <h4>Capital Facilitation</h4>
        <p>Linking bankable projects with appropriate funding tiers.</p>
      </div>
      <div class="grid-card glide-in delay-3" style="flex: 1; min-width: 250px;">
        <h4>Transaction Execution Support</h4>
        <p>Ensuring the technical and regulatory "last mile" of business deals.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= PRIMARY OBJECTIVE ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3 class="split-title">Primary Objective</h3>
        <p class="split-text">To catalyze high-value trade and investment flows that deliver measurable outcomes and sustain value creation.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li><span>De-risk African Markets:</span> Utilizing local intelligence to lower the barrier for global entry.</li>
          <li><span>Deliver Measurable Outcomes:</span> Moving from "intent" to "executed" economic milestones.</li>
          <li><span>Support Industrial Growth:</span> Enabling the expansion of high-impact enterprises across the continent.</li>
          <li><span>Sustain Value Creation:</span> Ensuring long-term profitability and localized economic stability.</li>
        </ul>
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
  /* Using Global CSS Variables - Institutional Color Palette */
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
  }
  
  .gold-accent { 
    color: var(--color-accent); 
  }
  
  .hero-section .body-text {
    font-size: 16px;
    line-height: 1.7;
    color: var(--color-text-gray-2);
    max-width: 550px;
  }
  
  .centered-eyebrow { 
    font-size: 12px; 
    letter-spacing: 0.12em; 
    text-transform: uppercase; 
    color: var(--color-accent); 
    margin-bottom: 15px; 
    text-align: center; 
    font-weight: 500;
  }
  
  .large-statement { 
    font-family: var(--font-heading);
    font-size: 48px; 
    font-weight: 400; 
    color: var(--color-text-dark); 
    margin-bottom: 20px; 
    text-align: center; 
  }
  
  .supporting-text { 
    font-size: 16px; 
    color: var(--color-text-gray-2); 
    max-width: 700px; 
    margin: 0 auto; 
    line-height: 1.7; 
    text-align: center; 
  }
  
  .grid-card { 
    background: var(--bg-white-2); 
    padding: 32px 28px; 
    border-bottom: 2px solid var(--color-accent);
    transition: all 0.3s ease;
  }
  
  .grid-card:hover {
    transform: translateY(-4px);
  }
  
  .grid-card h4 { 
    font-size: 18px; 
    font-weight: 500; 
    color: var(--color-text-dark); 
    margin-bottom: 12px; 
  }
  
  .grid-card p { 
    font-size: 14px; 
    color: var(--color-text-gray-2); 
    line-height: 1.6; 
  }
  
  .policy-split { 
    display: flex; 
    gap: 80px; 
    align-items: flex-start; 
  }
  
  .split-left, .split-right { 
    flex: 1; 
  }
  
  .split-title {
    font-family: var(--font-heading);
    font-size: 32px;
    font-weight: 400;
    color: var(--color-text-dark);
    margin-bottom: 20px;
  }
  
  .split-text {
    font-size: 16px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
  }
  
  .bullet-list { 
    list-style: none; 
    padding: 0; 
    margin: 0;
  }
  
  .bullet-list li { 
    padding: 16px 0;
    font-size: 15px; 
    color: var(--color-text-gray-2); 
    border-bottom: 1px solid var(--border-light);
    display: flex;
    align-items: flex-start;
  }
  
  .bullet-list li:first-child { padding-top: 0; }
  .bullet-list li:last-child { border-bottom: none; }
  
  .bullet-list li::before { 
    content: "✓"; 
    color: var(--color-accent); 
    margin-right: 16px; 
    font-weight: bold; 
  }
  
  .bullet-list li span {
    font-weight: 600;
    color: var(--color-text-dark);
    margin-right: 6px;
  }
  
  .final-quote { 
    background: var(--bg-white-2); 
    text-align: center; 
    padding: 100px 20px; 
    border-top: 1px solid var(--border-light);
    border-bottom: 1px solid var(--border-light);
  }
  
  .final-quote p { 
    font-family: var(--font-heading);
    font-size: 32px; 
    color: var(--color-text-dark); 
    line-height: 1.4; 
    font-weight: 400;
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
    0% { opacity: 0; transform: translateY(20px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes smoothFadeLeft {
    0% { opacity: 0; transform: translateX(-20px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  
  @keyframes smoothFadeRight {
    0% { opacity: 0; transform: translateX(20px); }
    100% { opacity: 1; transform: translateX(0); }
  }
  
  @keyframes smoothScale {
    0% { opacity: 0; transform: scale(0.98); }
    100% { opacity: 1; transform: scale(1); }
  }
  
  @keyframes smoothGlide {
    0% { opacity: 0; transform: translateY(15px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  
  .delay-1 { animation-delay: 0.1s; }
  .delay-2 { animation-delay: 0.2s; }
  .delay-3 { animation-delay: 0.3s; }
  .delay-4 { animation-delay: 0.4s; }
  
  /* Responsive */
  @media (max-width: 1200px) {
    .hero-section .headline { font-size: 48px; }
    .large-statement { font-size: 36px; }
    .split-title { font-size: 28px; }
  }
  
  @media (max-width: 768px) {
    .wide-container { padding: 0 24px; }
    .hero-content { padding: 100px 24px 60px 24px; }
    .hero-section .headline { font-size: 36px; }
    .large-statement { font-size: 28px; }
    .policy-split { flex-direction: column; gap: 40px; }
    .grid-card { min-width: 100%; }
    .full-width-white, .full-width-gray { padding: 50px 0; }
    .final-quote p { font-size: 24px; }
    .split-title { font-size: 24px; }
  }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .grid-card');
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
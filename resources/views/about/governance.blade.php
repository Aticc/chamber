@extends("layouts.app")

@section('content')


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
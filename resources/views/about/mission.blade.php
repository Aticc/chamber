@extends("layouts.app")

@section('content')


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
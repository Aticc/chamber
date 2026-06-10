@extends("layouts.app")

@section('content')


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
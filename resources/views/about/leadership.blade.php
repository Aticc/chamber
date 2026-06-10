@extends("layouts.app")

@section('content')


<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 65%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 90%; height: 100%; background: url('{{ asset('assets/images/Leadership - Advisory Board.jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About / Leadership & Advisory Board</div>
    <h1 class="headline fade-up revealed">Leadership & <span class="gold-accent">Advisory Board</span></h1>
    <div class="body-text fade-up delay-2 revealed">ATICC's leadership framework is built on institutional discipline, execution focus, and integrity enforcement.</div>
  </div>
</div>

<!-- ========= LEADERSHIP CONTENT ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">EXECUTIVE LEADERSHIP</div>
    <div class="leadership-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 60px;">
      <div class="leadership-card glide-in delay-1" style="text-align: center;">
        <div class="leadership-icon">
          <span>✓</span>
        </div>
        <h4>Office of the Group Chairman</h4>
        <p>Strategic authority and oversight</p>
      </div>
      <div class="leadership-card glide-in delay-2" style="text-align: center;">
        <div class="leadership-icon">
          <span>✓</span>
        </div>
        <h4>The Secretariat-General</h4>
        <p>Execution coordination</p>
      </div>
      <div class="leadership-card glide-in delay-3" style="text-align: center;">
        <div class="leadership-icon">
          <span>✓</span>
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
    
    <div class="advisory-grid" style="display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-top: 50px;">
      <div class="advisory-card glide-in delay-1">
        <h4>Strategic Foresight</h4>
        <p>Non-executive guidance on long-term institutional positioning.</p>
      </div>
      <div class="advisory-card glide-in delay-2">
        <h4>Market Intelligence</h4>
        <p>Sector-specific insights across priority industries.</p>
      </div>
      <div class="advisory-card glide-in delay-3">
        <h4>Diplomatic Bridge-Building</h4>
        <p>Facilitating engagement with governments and multilateral institutions.</p>
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
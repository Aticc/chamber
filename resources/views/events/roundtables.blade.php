@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= ROUNDTABLES HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 65%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 90%; height: 100%; background: url('{{ asset('assets/images/EXECUTIVE ROUNDTABLES.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Events / Executive Roundtables</div>
    <h1 class="headline fade-up revealed" style="max-width: 65%;">Executive Roundtables</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 108%; line-height: 1.5;">High-level strategic discussions among institutional leaders and decision-makers.</div>
  </div>
</div>

<!-- ========= ROUNDTABLES CONTENT ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">EXECUTIVE ENGAGEMENTS</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 36px;">Strategic Roundtables</div>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC hosts executive roundtables for institutional partners to address strategic market developments and transaction environments.</p>
    
    <div class="roundtables-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="roundtable-card glide-in delay-1" style="flex: 1; background: #F5F6F8; padding: 32px; border-radius: 20px;">
        <h4>Capital Allocation Roundtables</h4>
        <p>Strategic discussions on capital deployment into African markets and priority sectors.</p>
      </div>
      <div class="roundtable-card glide-in delay-2" style="flex: 1; background: #F5F6F8; padding: 32px; border-radius: 20px;">
        <h4>Trade Policy Dialogues</h4>
        <p>Engagements with policy makers and institutional stakeholders on trade frameworks.</p>
      </div>
      <div class="roundtable-card glide-in delay-3" style="flex: 1; background: #F5F6F8; padding: 32px; border-radius: 20px;">
        <h4>Sector Investment Forums</h4>
        <p>Focused roundtables on infrastructure, energy, agro-processing, and digital trade.</p>
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
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .large-statement { font-size: 48px; font-weight: 400; color: #031B4E; margin-bottom: 20px; text-align: center; }
  .final-quote { background: white; text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: #0e0e0e; line-height: 1.4; }
  @media (max-width: 768px) { .full-width-white { padding: 40px 0; } .large-statement { font-size: 28px !important; } .final-quote p { font-size: 22px !important; } }
</style>
<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  const observer = new IntersectionObserver((entries) => { entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } }); }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  window.addEventListener('scroll', function() { const nav = document.getElementById('stickyNav'); if (window.scrollY > 50) { nav.classList.add('scrolled'); document.body.classList.add('nav-shrunk'); } else { nav.classList.remove('scrolled'); document.body.classList.remove('nav-shrunk'); } });
</script>
@endsection
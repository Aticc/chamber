@extends("layouts.app")

@section('content')


<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/TRADE MISSION.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>

  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Events / Trade Missions</div>
    <h1 class="headline fade-up revealed" style="max-width: 65%;">Trade <span>Missions</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 108%; line-height: 1.5;">ATICC executes targeted trade and investment missions across priority markets and sectors.</div>
  </div>
</div>

<!-- ========= TRADE MISSIONS CONTENT ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">STRATEGIC DEPLOYMENTS</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 36px;">Market Entry Missions</div>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC executes structured trade missions designed to facilitate market entry, partnership development, and transaction execution.</p>
    
    <div class="missions-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="mission-card glide-in delay-1" style="flex: 1; background: #F5F6F8; padding: 32px; border-radius: 20px;">
        <h4>Market Entry Missions</h4>
        <p>On-ground coordination for institutional partners entering African markets</p>
      </div>
      <div class="mission-card glide-in delay-2" style="flex: 1; background: #F5F6F8; padding: 32px; border-radius: 20px;">
        <h4>Trade Facilitation Missions</h4>
        <p>Structured engagements to enable cross-border trade flows</p>
      </div>
      <div class="mission-card glide-in delay-3" style="flex: 1; background: #F5F6F8; padding: 32px; border-radius: 20px;">
        <h4>Investment Promotion Missions</h4>
        <p>Targeted deployments showcasing verified opportunities to global capital</p>
      </div>
      <div class="mission-card glide-in delay-4" style="flex: 1; background: #F5F6F8; padding: 32px; border-radius: 20px;">
        <h4>Project Validation Missions</h4>
        <p>On-ground verification of execution-ready opportunities</p>
      </div>
    </div>
  </div>
</div>

<div class="section-spacer"></div>

<!-- ========= UPCOMING MISSIONS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">UPCOMING MISSIONS</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 32px;">Scheduled Deployments</div>
    <div class="upcoming-list" style="margin-top: 50px;">
      <div class="mission-item" style="display: flex; justify-content: space-between; align-items: center; padding: 20px; background: white; border-radius: 16px; margin-bottom: 15px; flex-wrap: wrap; gap: 15px;">
        <div><h4 style="font-size: 18px; font-weight: 600; color: #031B4E;">West Africa Trade Mission</h4><p style="font-size: 14px; color: #5D6F7F;">Accra, Lagos, Abidjan • Q3 2025</p></div>
        <div><span style="display: inline-block; padding: 4px 12px; background: #E8EBED; border-radius: 20px; font-size: 11px;">Applications Open</span><a href="#" style="background: #041931; color: white; padding: 8px 20px; border-radius: 30px; text-decoration: none; font-size: 13px; margin-left: 15px;">Apply →</a></div>
      </div>
      <div class="mission-item" style="display: flex; justify-content: space-between; align-items: center; padding: 20px; background: white; border-radius: 16px; margin-bottom: 15px; flex-wrap: wrap; gap: 15px;">
        <div><h4 style="font-size: 18px; font-weight: 600; color: #031B4E;">East Africa Investment Mission</h4><p style="font-size: 14px; color: #5D6F7F;">Nairobi, Kigali, Dar es Salaam • Q1 2026</p></div>
        <div><span style="display: inline-block; padding: 4px 12px; background: #E8EBED; border-radius: 20px; font-size: 11px;">Coming Soon</span><a href="#" style="background: #041931; color: white; padding: 8px 20px; border-radius: 30px; text-decoration: none; font-size: 13px; margin-left: 15px;">Notify Me →</a></div>
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
  .large-statement { font-size: 48px; font-weight: 400; color: #031B4E; margin-bottom: 20px; text-align: center; }
  .final-quote { background: white; text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: #0e0e0e; line-height: 1.4; }
  .section-spacer { height: 1px; background: transparent; }
  @media (max-width: 768px) { .full-width-white, .full-width-gray { padding: 40px 0; } .large-statement { font-size: 28px !important; } .final-quote p { font-size: 22px !important; } }
</style>
<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  const observer = new IntersectionObserver((entries) => { entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } }); }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  window.addEventListener('scroll', function() { const nav = document.getElementById('stickyNav'); if (window.scrollY > 50) { nav.classList.add('scrolled'); document.body.classList.add('nav-shrunk'); } else { nav.classList.remove('scrolled'); document.body.classList.remove('nav-shrunk'); } });
</script>
@endsection
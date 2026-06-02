@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 65%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 90%; height: 100%; background: url('{{ asset('assets/images/Mission - Strategic Purpose.jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>

  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About / Mission & Strategic Purpose</div>
    <h1 class="headline fade-up revealed">Mission & <span style="color: #17015e;">Strategic Purpose</span></h1>
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
        <h3 style="font-size: 28px; font-weight: 400; margin-bottom: 20px; color: #0e0e0e;">Primary Objective</h3>
        <p style="font-size: 16px; color: #3a4c5e; line-height: 1.6;">To catalyze high-value trade and investment flows that deliver measurable outcomes and sustain value creation.</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li style="font-size: 15px;"><span>De-risk African Markets:</span> Utilizing local intelligence to lower the barrier for global entry.</li>
          <li style="font-size: 15px;"><span>Deliver Measurable Outcomes:</span> Moving from "intent" to "executed" economic milestones.</li>
          <li style="font-size: 15px;"><span>Support Industrial Growth:</span> Enabling the expansion of high-impact enterprises across the continent.</li>
          <li style="font-size: 15px;"><span>Sustain Value Creation:</span> Ensuring long-term profitability and localized economic stability.</li>
        </ul>
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
  .supporting-text { font-size: 16px; color: #4A5E72; max-width: 700px; margin: 0 auto; line-height: 1.6; text-align: center; }
  .grid-card { background: #F8F9FA; padding: 32px 28px; border-radius: 16px; text-align: left; }
  .grid-card h4 { font-size: 18px; font-weight: 400; color: #0e0e0e; margin-bottom: 12px; }
  .grid-card p { font-size: 14px; color: #4A5E72; line-height: 1.5; }
  .policy-split { display: flex; gap: 60px; align-items: flex-start; }
  .split-left, .split-right { flex: 1; }
  .bullet-list { list-style: none; padding: 0; }
  .bullet-list li { padding: 8px 28px; font-size: 15px; color: #1A1A1A; border-bottom: 1px solid #E8EBED; }
  .bullet-list li::before { content: "✓"; color: #031B4E; margin-right: 12px; font-weight: bold; }
  .final-quote { background: white; text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: #0e0e0e; line-height: 1.4; }
  @media (max-width: 768px) { .large-statement { font-size: 32px; } .policy-split { flex-direction: column; gap: 30px; } .grid-card { min-width: 100%; } .full-width-white, .full-width-gray { padding: 40px 0; } .final-quote p { font-size: 22px; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .grid-card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  window.addEventListener('scroll', function() { const nav = document.getElementById('stickyNav'); if (window.scrollY > 50) { nav.classList.add('scrolled'); document.body.classList.add('nav-shrunk'); } else { nav.classList.remove('scrolled'); document.body.classList.remove('nav-shrunk'); } });
</script>
@endsection
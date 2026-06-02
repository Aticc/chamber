@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= VERIFICATION HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 100vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC web pics 2.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Verification</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.5;">ATICC operates a structured verification framework to ensure institutional integrity, transaction credibility, and trusted participation across all engagements.</div>
  </div>
</div>

<!-- ========= VERIFICATION OVERVIEW ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">VERIFICATION FRAMEWORK</div>
    <div class="large-statement fade-up delay-1" style="font-size: 36px;">Trust & Verification Protocol</div>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">ATICC operates on strict gatekeeper logic. All participants, opportunities, and capital mandates enter through a defined verification pathway before engagement.</p>
  </div>
</div>

<!-- ========= VERIFICATION PRINCIPLE ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3 style="font-size: 28px; font-weight: 700; margin-bottom: 20px;">Core Verification Principle</h3>
        <p style="font-size: 16px;">Zero Verification → Zero Access → Zero Transaction Visibility</p>
      </div>
      <div class="split-right fade-right">
        <ul class="bullet-list">
          <li>No participant engages without verification</li>
          <li>No opportunity proceeds without validation</li>
          <li>No transaction executes without integrity review</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<!-- ========= KEY VERIFICATION AREAS ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">VERIFICATION AREAS</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 50px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>Institutional Verification</h4>
        <p>Identity verification, beneficial ownership review, and institutional integrity assessment.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>Opportunity Validation</h4>
        <p>Triple-filter test: Commercial Viability, Regulatory Alignment, Economic Contribution.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>Compliance Screening</h4>
        <p>KYC, AML, and regulatory compliance verification across all participants.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= CTA SECTION ========= -->
<div class="full-width-gray">
  <div class="wide-container" style="text-align: center;">
    <div class="centered-eyebrow fade-up">GET VERIFIED</div>
    <div class="large-statement fade-up delay-1" style="font-size: 32px;">Begin Your Verification Process</div>
    <a href="{{ route('verification.submit') }}" class="cta-button" style="display: inline-block; background-color: #041931; color: white; border: none; padding: 16px 36px; font-size: 16px; font-weight: 600; letter-spacing: 0.05em; border-radius: 4px; text-decoration: none; text-transform: uppercase; margin-top: 20px;">Submit Verification →</a>
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
  .section-text-dark { font-size: 16px; color: #3a4c5e; line-height: 1.7; }
  .products-grid { display: flex; gap: 32px; flex-wrap: wrap; }
  .product-card { flex: 1; background: #f5f6f8; padding: 32px 28px; border-radius: 16px; }
  .product-card h4 { font-size: 20px; font-weight: 700; margin-bottom: 12px; color: #0e0e0e; }
  .product-card p { font-size: 14px; color: #4a5e72; line-height: 1.5; }
  .policy-split { display: flex; gap: 60px; align-items: flex-start; }
  .split-left, .split-right { flex: 1; }
  .bullet-list { list-style: none; padding: 0; }
  .bullet-list li { padding: 8px 28px; font-size: 15px; color: #1A1A1A; border-bottom: 1px solid #E8EBED; }
  .bullet-list li::before { content: "✓"; color: #031B4E; margin-right: 12px; font-weight: bold; }
  .final-quote { background: white; text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: #0e0e0e; line-height: 1.4; }
  .cta-button { transition: all 0.3s ease; display: inline-block; }
  .cta-button:hover { transform: translateY(-2px); box-shadow: 0 8px 20px rgba(11, 31, 58, 0.12); }
  @media (max-width: 768px) { .products-grid { flex-direction: column; } .policy-split { flex-direction: column; gap: 30px; } .large-statement { font-size: 32px; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  window.addEventListener('scroll', function() { const nav = document.getElementById('stickyNav'); if (window.scrollY > 50) { nav.classList.add('scrolled'); } else { nav.classList.remove('scrolled'); } });
</script>
@endsection
@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
    <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
      <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/MEMBERSHIP BENEFITS (1).png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
      </div>
      
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Membership / Membership Benefits</div>
    <h1 class="headline fade-up revealed">Membership <span style="color: #17015e;">Benefits</span></h1>
    <div class="body-text fade-up delay-2 revealed">What you gain as an ATICC member</div>
  </div>
</div>
</div>

<!-- ========= TIER I ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">TIER I</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Institutional & Institutional Partners</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">Designated for institutional wealth funds, national governments, and multilateral financial institutions focusing on policy alignment, G2G frameworks, and large-scale capital deployment.</p>
  </div>
</div>

<!-- ========= TIER II ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">TIER II</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Strategic & Corporate Membership</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">For corporations, private equity firms, and family offices seeking direct investment opportunities and strategic market entry across Africa.</p>
  </div>
</div>

<!-- ========= TIER III ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">TIER III</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Individual & Professional Membership</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">For professionals, consultants, and individual investors looking to connect, learn, and participate in Africa's growing trade ecosystem.</p>
  </div>
</div>

<!-- ========= KEY BENEFITS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">KEY BENEFITS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">What All Members Receive</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">Access to verified trade opportunities, market intelligence reports, networking events, and the Trust & Verification Protocol.</p>
  </div>
</div>

<!-- ========= CTA ========= -->
<div class="final-quote">
  <p class="scale-in" style="font-size: 18px;">Ready to unlock these benefits?</p>
  <a href="{{ route('access.plans') }}" style="display: inline-block; background: #041931; color: white; padding: 14px 42px; border-radius: 40px; text-decoration: none; font-weight: 400; margin-top: 20px;">View Membership Plans →</a>
</div>

@include('layouts.footer')

<style>
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .full-width-gray { width: 100%; background: #F5F6F8; padding: 80px 0; }
  .breadcrumb-light { font-size: 14px; letter-spacing: 0.08em; text-transform: uppercase; color: #5d6f7f; margin-bottom: 20px; font-weight: 400; }
  .section-title-dark { font-size: 48px; font-weight: 400; color: #0e0e0e; margin-bottom: 20px; }
  .section-text-dark { font-size: 16px; color: #3a4c5e; line-height: 1.7; }
  .final-quote { background: white; text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: #0e0e0e; line-height: 1.4; margin-bottom: 30px; }

  .hero-section {
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 70% center;
    min-height: 600px;
    display: flex;
    align-items: center;
    position: relative;
  }
  .hero-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
    margin-left: 8%;
    padding: 40px 20px;
  }
  .hero-content .breadcrumb {
    font-size: 13px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: #C49A6C;
    font-weight: 300;
  }
  .hero-content .headline {
    font-size: 58px;
    font-weight: 400;
    color: white;
    margin: 20px 0 20px;
    line-height: 1.2;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  }
  .hero-content .headline span {
    color: #C49A6C;
  }
  .hero-content .body-text {
    font-size: 18px;
    color: white;
    max-width: 620px;
    line-height: 1.5;
    font-weight: 300;
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  }

  @media (max-width: 768px) {
    .section-title-dark { font-size: 32px; }
    .full-width-white, .full-width-gray { padding: 40px 0; }
    .final-quote p { font-size: 22px; }
    .hero-content .headline { font-size: 42px; }
    .hero-section { min-height: 450px; }
    .hero-content { margin-left: 5%; }
  }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  window.addEventListener('scroll', function() { const nav = document.getElementById('stickyNav'); if (window.scrollY > 50) { nav.classList.add('scrolled'); document.body.classList.add('nav-shrunk'); } else { nav.classList.remove('scrolled'); document.body.classList.remove('nav-shrunk'); } });
</script>

@endsection
@extends("layouts.app")

@section('content')


<!-- ========= REGISTRATION HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 65%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 90%; height: 100%; background: url('{{ asset('assets/images/Event Registration.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Events / Registration</div>
    <h1 class="headline fade-up revealed" style="max-width: 65%;">Event <span>Registration</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 108%; line-height: 1.5;">Register for ATICC institutional engagements and strategic convenings.</div>
  </div>
</div>

<!-- ========= REGISTRATION FORM ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">PARTICIPATION</div>
    <div class="large-statement fade-up delay-1" style="text-align: center; font-size: 36px;">Secure Your Invitation</div>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">Access to ATICC summits and missions is structured and based on verification status. Institutional partners and verified members receive priority access.</p>
    
    <div class="registration-form" style="max-width: 800px; margin: 50px auto 0; background: #F5F6F8; border-radius: 24px; padding: 40px;">
      <form action="#" method="POST">
        <div class="form-group" style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #2E4156;">Full Name *</label>
          <input type="text" class="form-control" style="width: 100%; padding: 12px 16px; border: 1px solid #E8EBED; border-radius: 12px;" required>
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #2E4156;">Email Address *</label>
          <input type="email" class="form-control" style="width: 100%; padding: 12px 16px; border: 1px solid #E8EBED; border-radius: 12px;" required>
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #2E4156;">Organization *</label>
          <input type="text" class="form-control" style="width: 100%; padding: 12px 16px; border: 1px solid #E8EBED; border-radius: 12px;" required>
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #2E4156;">Position / Title</label>
          <input type="text" class="form-control" style="width: 100%; padding: 12px 16px; border: 1px solid #E8EBED; border-radius: 12px;">
        </div>
        <div class="form-group" style="margin-bottom: 20px;">
          <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #2E4156;">Event of Interest *</label>
          <select class="form-control" style="width: 100%; padding: 12px 16px; border: 1px solid #E8EBED; border-radius: 12px;">
            <option value="">Select Event</option>
            <option value="summit">Institutional Summit</option>
            <option value="investment-forum">Investment Forum</option>
            <option value="trade-mission">Trade Mission</option>
            <option value="roundtable">Executive Roundtable</option>
            <option value="policy-dialogue">Policy Dialogue</option>
          </select>
        </div>
        <button type="submit" class="submit-btn" style="width: 100%; background: #041931; color: white; padding: 14px; border: none; border-radius: 12px; font-size: 16px; font-weight: 600; cursor: pointer; margin-top: 20px;">Submit Registration →</button>
      </form>
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
  @media (max-width: 768px) { .full-width-white { padding: 40px 0; } .large-statement { font-size: 28px !important; } .registration-form { padding: 25px; } .final-quote p { font-size: 22px !important; } }
</style>
<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  const observer = new IntersectionObserver((entries) => { entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } }); }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
  window.addEventListener('scroll', function() { const nav = document.getElementById('stickyNav'); if (window.scrollY > 50) { nav.classList.add('scrolled'); document.body.classList.add('nav-shrunk'); } else { nav.classList.remove('scrolled'); document.body.classList.remove('nav-shrunk'); } });
</script>
@endsection
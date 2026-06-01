@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC web pics 2.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Framework</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Verification Framework</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">ATICC's verification framework ensures institutional integrity, transaction credibility, and trusted ecosystem participation.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">FRAMEWORK OVERVIEW</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Structured Verification Pathway</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">All participants, opportunities, and capital mandates enter through a defined verification pathway to ensure validation, alignment, and execution readiness.</p>
  </div>
</div>

<div class="full-width-gray">
  <div class="wide-container">
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center;">
      <div class="grid-card" style="flex: 1; min-width: 250px; text-align: center; background: white; padding: 32px 28px; border-radius: 16px;">
        <div style="font-size: 42px; font-weight: 700; color: #031B4E; margin-bottom: 15px;">01</div>
        <h4>Identity Verification</h4>
        <p>Legal entity verification and beneficial ownership disclosure</p>
      </div>
      <div class="grid-card" style="flex: 1; min-width: 250px; text-align: center; background: white; padding: 32px 28px; border-radius: 16px;">
        <div style="font-size: 42px; font-weight: 700; color: #031B4E; margin-bottom: 15px;">02</div>
        <h4>Compliance Screening</h4>
        <p>KYC, AML, and regulatory compliance verification</p>
      </div>
      <div class="grid-card" style="flex: 1; min-width: 250px; text-align: center; background: white; padding: 32px 28px; border-radius: 16px;">
        <div style="font-size: 42px; font-weight: 700; color: #031B4E; margin-bottom: 15px;">03</div>
        <h4>Capability Assessment</h4>
        <p>Technical and financial capacity audit</p>
      </div>
    </div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Continuous Validation</h3>
        <p style="font-size: 16px;">The verification framework is not a one-time event. ATICC maintains ongoing validation to ensure member behavior remains aligned with institutional integrity standards.</p>
      </div>
      <div class="framework-right fade-right">
        <ul class="bullet-list">
          <li>Periodic review of member status and activity</li>
          <li>Continuous compliance monitoring</li>
          <li>Real-time integrity assessment</li>
          <li>Immediate action on non-compliance</li>
        </ul>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  :root {
    --color-primary: #041931;
    --color-accent: #C49A6C;
    --color-text-dark: #0e0e0e;
    --color-text-light: #3a4c5e;
    --color-text-muted: #4a5b6b;
    --bg-white: #ffffff;
    --bg-gray: #F5F6F8;
    --bg-card: #F8F9FA;
    --border-card: #E8EBED;
    --font-light: 300;
    --font-regular: 300;
    --font-medium: 500;
  }

  .full-width-white { width: 100%; background: var(--bg-white); padding: 80px 0; }
  .full-width-gray { width: 100%; background: var(--bg-gray); padding: 80px 0; }
  
  .wide-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .centered-eyebrow {
    font-size: 13px;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 15px;
    text-align: center;
    font-weight: var(--font-medium);
  }
  
  .section-title-dark {
    font-size: 48px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 20px;
    text-align: center;
  }
  
  .section-text-dark {
    font-size: 16px;
    color: var(--color-text-light);
    line-height: 1.7;
    font-weight: var(--font-light);
  }
  
  /* Hero Section */
  .hero-section {
    margin-top: 0;
  }
  
  .hero-content .breadcrumb {
    font-size: 13px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--color-accent);
    font-weight: var(--font-regular);
  }
  
  .hero-content .headline {
    font-size: 58px;
    font-weight: 300;
    color: var(--color-text-dark);
    margin: 20px 0 20px;
    line-height: 1.2;
  }
  
  .hero-content .body-text {
    font-size: 18px;
    color: var(--color-text-light);
    line-height: 1.5;
    font-weight: var(--font-light);
  }
  
  /* Grid Cards */
  .grid-card {
    background: var(--bg-white);
    border: 1px solid var(--border-card);
    transition: all 0.3s ease;
  }
  
  .grid-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-color: var(--color-accent);
  }
  
  .grid-card h4 {
    font-size: 20px;
    font-weight: var(--font-regular);
    margin-bottom: 12px;
    color: var(--color-text-dark);
  }
  
  .grid-card p {
    font-size: 14px;
    color: var(--color-text-muted);
    line-height: 1.5;
    font-weight: var(--font-light);
  }
  
  /* Framework Split */
  .framework-split {
    display: flex;
    gap: 60px;
    align-items: flex-start;
  }
  
  .framework-left {
    flex: 1;
  }
  
  .framework-left h3 {
    font-size: 28px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 20px;
  }
  
  .framework-left p {
    font-size: 16px;
    color: var(--color-text-light);
    line-height: 1.6;
    font-weight: var(--font-light);
  }
  
  .framework-right {
    flex: 1;
  }
  
  .bullet-list {
    list-style: none;
    padding: 0;
  }
  
  .bullet-list li {
    padding: 12px 0;
    font-size: 15px;
    color: var(--color-text-muted);
    border-bottom: 1px solid var(--border-card);
    font-weight: var(--font-light);
  }
  
  .bullet-list li::before {
    content: "✓";
    color: var(--color-accent);
    margin-right: 12px;
    font-weight: bold;
  }
  
  /* Animations */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
  }
  
  .fade-left {
    transform: translateX(-28px);
  }
  
  .fade-right {
    transform: translateX(28px);
  }
  
  .scale-in {
    transform: scale(0.96);
  }
  
  .fade-up.revealed, .fade-left.revealed, .fade-right.revealed, .scale-in.revealed, .glide-in.revealed {
    opacity: 1;
    transform: translate(0, 0) scale(1);
  }
  
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  .delay-4 { transition-delay: 0.4s; }
  
  @media (max-width: 1100px) {
    .hero-content .headline {
      max-width: 70% !important;
      font-size: 48px;
    }
    .hero-content .body-text {
      max-width: 70% !important;
    }
  }
  
  @media (max-width: 992px) {
    .framework-split {
      flex-direction: column;
      gap: 30px;
    }
    .section-title-dark {
      font-size: 36px;
    }
    .hero-content .headline {
      font-size: 42px;
      max-width: 80% !important;
    }
    .hero-content .body-text {
      max-width: 80% !important;
    }
  }
  
  @media (max-width: 768px) {
    .full-width-white, .full-width-gray {
      padding: 50px 0;
    }
    .section-title-dark {
      font-size: 32px;
    }
    .hero-content .headline {
      font-size: 36px;
      max-width: 100% !important;
    }
    .hero-content .body-text {
      max-width: 100% !important;
      font-size: 16px;
    }
    .hero-content {
      padding: 40px 30px !important;
    }
    .hero-section {
      min-height: 50vh !important;
    }
    .grid-5 {
      flex-direction: column;
    }
    /* Hide image overlay on mobile for better text visibility */
    .hero-section > div:first-child {
      opacity: 0.3;
    }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline {
      font-size: 32px;
    }
    .section-title-dark {
      font-size: 28px;
    }
  }
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
  
  // Immediately reveal hero elements that are visible
  const heroItems = document.querySelectorAll('.hero-section .fade-up');
  heroItems.forEach(el => {
    if (el.getBoundingClientRect().top < window.innerHeight - 50) {
      el.classList.add('revealed');
    }
  });
  
  window.addEventListener('scroll', function() { 
    const nav = document.getElementById('stickyNav'); 
    if (window.scrollY > 50) { 
      if (nav) nav.classList.add('scrolled'); 
      document.body.classList.add('nav-shrunk'); 
    } else { 
      if (nav) nav.classList.remove('scrolled'); 
      document.body.classList.remove('nav-shrunk'); 
    } 
  });
</script>

@endsection
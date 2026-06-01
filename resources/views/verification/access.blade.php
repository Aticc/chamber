@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC web pics 2.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Access</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Verification Access</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">Access to ATICC's ecosystem is granted only through a defined verification process. Participation is restricted to verified entities that meet institutional standards.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">ACCESS REQUIREMENTS</div>
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3 style="font-size: 28px;">Verification Prerequisites</h3>
        <ul class="bullet-list">
          <li>Completed verification application</li>
          <li>Submitted institutional documentation</li>
          <li>Passed due diligence review</li>
          <li>Approved by Secretariat-General</li>
        </ul>
      </div>
      <div class="split-right fade-right">
        <h3 style="font-size: 28px;">Access Levels</h3>
        <ul class="bullet-list">
          <li>Tier I: Full institutional access</li>
          <li>Tier II: Corporate partnership access</li>
          <li>Tier III: Member access</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="full-width-gray" style="text-align: center;">
  <div class="wide-container">
    <a href="{{ route('verification.submit') }}" class="cta-button" style="display: inline-block; background-color: #041931; color: white; border: none; padding: 16px 36px; font-size: 16px; font-weight: 600; letter-spacing: 0.05em; border-radius: 4px; text-decoration: none; text-transform: uppercase;">Begin Verification →</a>
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
  
  /* Policy Split */
  .policy-split {
    display: flex;
    gap: 60px;
    align-items: flex-start;
    margin-top: 20px;
  }
  
  .split-left, .split-right {
    flex: 1;
  }
  
  .split-left h3, .split-right h3 {
    font-size: 28px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 20px;
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
  
  /* CTA Button */
  .cta-button {
    transition: all 0.3s ease;
    display: inline-block;
  }
  
  .cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(11, 31, 58, 0.12);
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
  
  .fade-up.revealed, .fade-left.revealed, .fade-right.revealed, .scale-in.revealed, .glide-in.revealed {
    opacity: 1;
    transform: translate(0, 0);
  }
  
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  
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
    .policy-split {
      flex-direction: column;
      gap: 30px;
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
    .split-left h3, .split-right h3 {
      font-size: 24px;
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
@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION WITH VIDEO BACKGROUND ========= -->

<div id="hero" class="hero-section" style="position: relative; overflow: hidden; min-height: 100vh;">
  <!-- Video Background -->
  <div class="video-background">
    <video id="heroVideo" autoplay muted loop playsinline webkit-playsinline>
      <source src="{{ asset('assets/videos/APAPA PORT, LAGOS.mp4') }}" type="video/mp4">
      Your browser does not support the video tag.
    </video>
    <!-- Dark overlay for better text readability -->
    <div class="video-overlay"></div>
  </div>

  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px; color: rgba(255,255,255,0.85);">Home / Trade & Investment</div>
    <h1 class="headline fade-up revealed">Trade & <span style="color: var(--color-accent);">Investment</span></h1>
    <div class="body-text fade-up delay-2 revealed">Structured trade facilitation and investment coordination across African markets.</div>
  </div>
</div>

<!-- ========= OVERVIEW SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">TRADE & INVESTMENT</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Structured Market Access</h2>
    <p class="lead-text section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto 50px;">ATICC provides structured trade facilitation and investment coordination services for institutional partners seeking market access, capital deployment, and execution support across African and international markets.</p>
    
    <div class="services-grid">
      <div class="service-card fade-up delay-1">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <path d="M3 9l9-6 9 6-9 6-9-6z"/>
            <path d="M3 15l9 6 9-6"/>
          </svg>
        </div>
        <h3>Trade Facilitation</h3>
        <p>Technical infrastructure for cross-border trade, regulatory navigation, and documentation optimization.</p>
        <a href="{{ route('trade.facilitation') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card fade-up delay-2">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
        </div>
        <h3>Investment Coordination</h3>
        <p>Connecting institutional capital with vetted, execution-ready opportunities across priority sectors.</p>
        <a href="{{ route('trade.investment-coordination') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card fade-up delay-3">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
          </svg>
        </div>
        <h3>Capital Matching</h3>
        <p>Aligning institutional mandates with verified opportunities through structured due diligence.</p>
        <a href="{{ route('trade.capital-matching') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card fade-up delay-1">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <rect x="3" y="4" width="18" height="16" rx="2"/>
            <line x1="8" y1="2" x2="16" y2="2"/>
          </svg>
        </div>
        <h3>Project Validation</h3>
        <p>Triple-filter validation process ensuring commercial viability, regulatory alignment, and economic impact.</p>
        <a href="{{ route('trade.project-validation') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card fade-up delay-2">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
          </svg>
        </div>
        <h3>Institutional Partnerships</h3>
        <p>Strategic partnerships across capital, trade, and institutional ecosystems.</p>
        <a href="{{ route('trade.partnerships') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card fade-up delay-3">
        <div class="service-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.4">
            <path d="M20 12V8H4v4M12 4v4M4 4h16v16H4z"/>
            <path d="M8 20v-8h8v8"/>
          </svg>
        </div>
        <h3>Infrastructure & Energy</h3>
        <p>Facilitating infrastructure and energy investment across African markets.</p>
        <a href="{{ route('trade.infrastructure') }}" class="service-link">Learn More →</a>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
  }

  html, body {
    width: 100%;
    overflow-x: hidden;
  }

  .full-width-white { width: 100%; background: var(--bg-white-2); padding: 80px 0; }
  .full-width-gray { width: 100%; background: var(--bg-gray-2); padding: 80px 0; }
  .breadcrumb-light { font-size: 14px; letter-spacing: 0.08em; text-transform: uppercase; color: var(--color-text-lighter-2); margin-bottom: 20px; font-weight: var(--font-medium); text-align: center; }
  .section-title-dark { font-size: 48px; font-weight: var(--font-regular); color: var(--color-text-dark); margin-bottom: 20px; text-align: center; }
  .section-text-dark { font-size: 16px; color: var(--color-text-light); line-height: 1.7; font-weight: var(--font-light); text-align: center; }
  
  /* Hero Section with Video Background - FULL SCREEN */
  .hero-section {
    position: relative;
    width: 100%;
    height: 100vh;
    min-height: 600px;
    display: flex;
    align-items: center;
    overflow: hidden;
  }
  
  .video-background {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
  }
  
  .video-background video {
    position: absolute;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    transform: translate(-50%, -50%);
    object-fit: cover;
    /* Video clarity enhancements */
    image-rendering: crisp-edges;
    image-rendering: high-quality;
    /* Slight brightness and contrast boost for clarity */
    filter: brightness(1.05) contrast(1.08) saturate(1.1);
  }
  
  /* For different aspect ratios */
  @media (min-aspect-ratio: 16/9) {
    .video-background video {
      width: 100%;
      height: auto;
    }
  }
  
  @media (max-aspect-ratio: 16/9) {
    .video-background video {
      width: auto;
      height: 100%;
    }
  }
  
  .video-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: linear-gradient(135deg, rgba(0,0,0,0.55) 0%, rgba(0,0,0,0.0) 100%);
    z-index: 1;
  }
  
  .hero-content {
    position: relative;
    z-index: 2;
    max-width: 900px;
    width: 90%;
    padding: 40px 20px;
    margin-left: 8%;
  }
  
  .hero-content .breadcrumb {
    font-size: 14px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: rgba(255,255,255,0.9);
    font-weight: var(--font-regular);
    text-shadow: 0 1px 3px rgba(0,0,0,0.3);
  }
  
  .hero-content .headline {
    font-size: 72px;
    font-weight: 400;
    color: var(--color-text-white);
    margin: 20px 0 20px;
    line-height: 1.2;
    text-shadow: 0 2px 6px rgba(0,0,0,0.35);
  }
  
  .hero-content .headline span {
    color: var(--color-accent);
  }
  
  .hero-content .body-text {
    font-size: 20px;
    color: rgba(255,255,255,0.94);
    max-width: 620px;
    line-height: 1.6;
    font-weight: var(--font-light);
    text-shadow: 0 1px 3px rgba(0,0,0,0.3);
  }
  
  /* Lead Text */
  .lead-text {
    font-size: 18px;
    color: var(--color-text-light);
    line-height: 1.7;
    font-weight: var(--font-light);
  }
  
  /* Services Grid */
  .services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 20px;
    max-width: 1200px;
    margin-left: auto;
    margin-right: auto;
    padding: 0 20px;
  }
  
  .wide-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .service-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 35px 28px;
    transition: all 0.3s ease;
  }
  
  .service-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-color: var(--color-accent-soft);
  }
  
  .service-icon {
    margin-bottom: 20px;
  }
  
  .service-icon svg {
    stroke: var(--color-primary);
  }
  
  .service-card h3 {
    font-size: 20px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 12px;
  }
  
  .service-card p {
    font-size: 15px;
    color: var(--color-text-muted);
    line-height: 1.5;
    margin-bottom: 20px;
    font-weight: var(--font-light);
  }
  
  .service-link {
    font-size: 13px;
    font-weight: var(--font-regular);
    color: var(--color-primary);
    text-decoration: none;
    transition: all 0.2s ease;
    display: inline-block;
  }
  
  .service-link:hover {
    color: var(--color-accent);
    transform: translateX(4px);
  }
  
  /* Animations */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
  }
  
  .fade-up.revealed, .fade-left.revealed, .fade-right.revealed, .scale-in.revealed, .glide-in.revealed {
    opacity: 1;
    transform: translateY(0);
  }
  
  .scale-in {
    transform: scale(0.96);
    transition: opacity 0.6s ease, transform 0.6s ease;
  }
  
  .scale-in.revealed {
    transform: scale(1);
  }
  
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  
  @media (max-width: 992px) {
    .services-grid { grid-template-columns: repeat(2, 1fr); }
    .section-title-dark { font-size: 36px; }
    .hero-content .headline { font-size: 56px; }
    .hero-section { height: 90vh; }
  }
  
  @media (max-width: 768px) {
    .section-title-dark { font-size: 32px; }
    .full-width-white { padding: 50px 0; }
    .hero-content .headline { font-size: 44px; }
    .hero-section { height: 80vh; min-height: 500px; }
    .hero-content { margin-left: 5%; width: 95%; }
    .hero-content .body-text { font-size: 18px; }
    .services-grid { grid-template-columns: 1fr; gap: 20px; }
    .service-card { padding: 28px 22px; }
    .lead-text { font-size: 16px; }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 34px; }
    .hero-content .body-text { font-size: 16px; }
    .section-title-dark { font-size: 28px; }
    .hero-section { height: 70vh; min-height: 450px; }
  }
</style>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const video = document.getElementById('heroVideo');
    
    if (video) {
      // Set video playback rate to 0.7 (slower)
      // You can adjust this value: 0.5 = half speed, 0.75 = 75% speed, etc.
      video.playbackRate = 0.65;
      
      // Additional quality settings for better clarity
      video.setAttribute('preload', 'auto');
      
      // Force higher quality if available
      if (video.videoWidth > 0) {
        console.log('Video resolution:', video.videoWidth, 'x', video.videoHeight);
      }
      
      // Attempt to play
      video.play().then(function() {
        console.log('Video playing at speed:', video.playbackRate);
      }).catch(function(error) {
        console.log("Auto-play was prevented:", error);
        // Add a subtle click-to-play indicator if needed
        const heroSection = document.querySelector('.hero-section');
        if (heroSection) {
          heroSection.style.cursor = 'pointer';
          heroSection.addEventListener('click', function() {
            video.play();
          });
        }
      });
      
      // Optional: Apply additional video processing for clarity
      // This creates a subtle sharpening effect using CSS
      video.style.transform = 'translate(-50%, -50%) scale(1.01)';
    }
  });

  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
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
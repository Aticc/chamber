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
    
    <div class="benefits-grid">
      <div class="benefit-card fade-up delay-1">
        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="1.4">
          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
          <circle cx="12" cy="10" r="3"/>
        </svg>
        <h4>Verified Trade Opportunities</h4>
        <p>Access to vetted, execution-ready trade and investment opportunities across African markets.</p>
      </div>
      <div class="benefit-card fade-up delay-2">
        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="1.4">
          <rect x="3" y="3" width="18" height="18" rx="2"/>
          <path d="M9 8h6M9 12h6M9 16h4"/>
        </svg>
        <h4>Market Intelligence Reports</h4>
        <p>Strategic insights, sector analysis, and economic intelligence for informed decision-making.</p>
      </div>
      <div class="benefit-card fade-up delay-3">
        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="1.4">
          <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
        </svg>
        <h4>Networking Events</h4>
        <p>Institutional summits, executive roundtables, and trade missions for strategic connections.</p>
      </div>
      <div class="benefit-card fade-up delay-1">
        <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="var(--color-primary)" stroke-width="1.4">
          <path d="M3 9l9-6 9 6-9 6-9-6z"/>
          <path d="M3 15l9 6 9-6"/>
        </svg>
        <h4>Trust & Verification Protocol</h4>
        <p>Structured verification ensuring institutional integrity and transaction credibility.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= CTA ========= -->
<div class="final-quote">
  <p class="scale-in" style="font-size: 18px;">Ready to unlock these benefits?</p>
  <a href="{{ route('access.plans') }}" class="cta-button scale-in delay-1">View Membership Plans →</a>
</div>

@include('layouts.footer')

<style>
  :root {
    /* ========= BRAND COLORS - Light & Elegant ========= */
    --color-primary: #041931;
    --color-accent: #C49A6C;
    --color-accent-soft: #d4b08c;
    
    /* ========= TEXT COLORS - Soft & Readable ========= */
    --color-text-dark: #0e0e0e;
    --color-text-gray: #1a2c3e;
    --color-text-light: #3a4c5e;
    --color-text-lighter: #5d6f7f;
    --color-text-muted: #4a5b6b;
    --color-text-white: #ffffff;
    --color-text-offwhite: rgba(255,255,255,0.92);
    
    /* ========= BACKGROUND COLORS - Clean ========= */
    --bg-white: #ffffff;
    --bg-gray: #F5F6F8;
    --bg-card: #ffffff;
    
    /* ========= BORDER COLORS - Subtle ========= */
    --border-light: #e8eef2;
    --border-card: #e8eef2;
    --border-list: #eef2f6;
    
    /* ========= FONT WEIGHTS - Lighter ========= */
    --font-light: 300;
    --font-regular: 400;
    --font-medium: 500;
  }

  .full-width-white { width: 100%; background: var(--bg-white); padding: 80px 0; }
  .full-width-gray { width: 100%; background: var(--bg-gray); padding: 80px 0; }
  .breadcrumb-light { font-size: 14px; letter-spacing: 0.08em; text-transform: uppercase; color: var(--color-text-lighter); margin-bottom: 20px; font-weight: var(--font-medium); text-align: center; }
  .section-title-dark { font-size: 48px; font-weight: var(--font-regular); color: var(--color-text-dark); margin-bottom: 20px; text-align: center; }
  .section-text-dark { font-size: 16px; color: var(--color-text-light); line-height: 1.7; font-weight: var(--font-light); text-align: center; }
  .final-quote { background: var(--bg-white); text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: var(--color-text-dark); line-height: 1.4; margin-bottom: 30px; font-weight: var(--font-light); }
  
  /* Hero Section */
  .hero-section {
    background-size: cover;
    background-repeat: no-repeat;
    min-height: 500px;
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
    color: var(--color-accent);
    font-weight: var(--font-regular);
  }
  .hero-content .headline {
    font-size: 58px;
    font-weight: 400;
    color: var(--color-text-dark);
    margin: 20px 0 20px;
    line-height: 1.2;
    text-shadow: none;
  }
  .hero-content .headline span {
    color: var(--color-accent);
  }
  .hero-content .body-text {
    font-size: 18px;
    color: var(--color-text-dark);
    max-width: 620px;
    line-height: 1.5;
    font-weight: var(--font-light);
  }
  
  /* Benefits Grid */
  .benefits-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 48px;
  }
  .benefit-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 40px 28px;
    text-align: center;
    transition: all 0.25s ease;
  }
  .benefit-card:hover { 
    transform: translateY(-5px); 
    border-color: var(--color-accent-soft); 
    box-shadow: 0 10px 30px rgba(0,0,0,0.05);
  }
  .benefit-card svg { 
    margin-bottom: 20px; 
    width: 44px; 
    height: 44px; 
    stroke: var(--color-primary);
  }
  .benefit-card h4 { 
    font-size: 20px; 
    font-weight: var(--font-regular); 
    color: var(--color-text-dark); 
    margin-bottom: 12px; 
  }
  .benefit-card p { 
    font-size: 15px; 
    color: var(--color-text-muted); 
    font-weight: var(--font-light); 
    line-height: 1.5; 
  }
  
  /* CTA Button */
  .cta-button {
    display: inline-block;
    background: var(--color-primary);
    color: var(--color-text-white);
    padding: 14px 42px;
    border-radius: 40px;
    text-decoration: none;
    font-weight: var(--font-regular);
    transition: all 0.3s ease;
    margin-top: 10px;
  }
  .cta-button:hover {
    background: var(--color-accent);
    color: var(--color-primary);
    transform: translateY(-2px);
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
    .benefits-grid {
      grid-template-columns: repeat(2, 1fr);
    }
  }
  
  @media (max-width: 768px) {
    .section-title-dark { font-size: 32px; }
    .full-width-white, .full-width-gray { padding: 50px 0; }
    .final-quote p { font-size: 22px; }
    .hero-content .headline { font-size: 42px; }
    .hero-section { min-height: 420px; background-position: 65% center !important; }
    .hero-content { margin-left: 5%; }
    .benefits-grid { grid-template-columns: 1fr; gap: 20px; }
    .benefit-card { padding: 30px 20px; }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 34px; }
    .hero-content .body-text { font-size: 16px; }
  }
</style>

<script>
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
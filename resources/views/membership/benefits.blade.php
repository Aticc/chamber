@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
    <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
      <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/MEMBERSHIP BENEFITS (1).png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
    </div>

  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Membership / Membership Benefits</div>
    <h1 class="headline fade-up revealed">Membership <span class="gold-accent">Benefits</span></h1>
    <div class="body-text fade-up delay-2 revealed">What you gain as an ATICC member</div>
  </div>
</div>

<!-- ========= TIER I ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="tier-badge fade-up">TIER I</div>
    <h2 class="section-title-dark fade-up delay-1">Institutional & Institutional Partners</h2>
    <p class="section-text-dark fade-up delay-2">Designated for institutional wealth funds, national governments, and multilateral financial institutions focusing on policy alignment, G2G frameworks, and large-scale capital deployment.</p>
  </div>
</div>

<!-- ========= TIER II ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="tier-badge fade-up">TIER II</div>
    <h2 class="section-title-dark fade-up delay-1">Strategic & Corporate Membership</h2>
    <p class="section-text-dark fade-up delay-2">For corporations, private equity firms, and family offices seeking direct investment opportunities and strategic market entry across Africa.</p>
  </div>
</div>

<!-- ========= TIER III ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="tier-badge fade-up">TIER III</div>
    <h2 class="section-title-dark fade-up delay-1">Individual & Professional Membership</h2>
    <p class="section-text-dark fade-up delay-2">For professionals, consultants, and individual investors looking to connect, learn, and participate in Africa's growing trade ecosystem.</p>
  </div>
</div>

<!-- ========= KEY BENEFITS ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">KEY BENEFITS</div>
    <h2 class="section-title-dark fade-up delay-1">What All Members Receive</h2>
    <p class="section-text-dark fade-up delay-2">Access to verified trade opportunities, market intelligence reports, networking events, and the Trust & Verification Protocol.</p>
    
    <div class="benefits-grid">
      <div class="benefit-card fade-up delay-1">
        <div class="benefit-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
        </div>
        <h4>Verified Trade Opportunities</h4>
        <p>Access to vetted, execution-ready trade and investment opportunities across African markets.</p>
      </div>
      <div class="benefit-card fade-up delay-2">
        <div class="benefit-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <rect x="3" y="3" width="18" height="18" rx="2"/>
            <path d="M9 8h6M9 12h6M9 16h4"/>
          </svg>
        </div>
        <h4>Market Intelligence Reports</h4>
        <p>Strategic insights, sector analysis, and economic intelligence for informed decision-making.</p>
      </div>
      <div class="benefit-card fade-up delay-3">
        <div class="benefit-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
          </svg>
        </div>
        <h4>Networking Events</h4>
        <p>Institutional summits, executive roundtables, and trade missions for strategic connections.</p>
      </div>
      <div class="benefit-card fade-up delay-1">
        <div class="benefit-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 2L3 7l9 5 9-5-9-5z"/>
            <path d="M3 12l9 5 9-5"/>
            <path d="M3 17l9 5 9-5"/>
          </svg>
        </div>
        <h4>Trust & Verification Protocol</h4>
        <p>Structured verification ensuring institutional integrity and transaction credibility.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= CTA ========= -->
<div class="final-quote">
  <p class="scale-in">Ready to unlock these benefits?</p>
  <a href="{{ route('access.plans') }}" class="cta-button scale-in delay-1">View Membership Plans →</a>
</div>

@include('layouts.footer')

<style>
  /* Using Global CSS Variables */
  .full-width-white { 
    width: 100%; 
    background: var(--bg-white-2); 
    padding: 80px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .full-width-gray { 
    width: 100%; 
    background: var(--bg-gray-2); 
    padding: 80px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .wide-container {
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 40px;
  }
  
  /* Hero Section */
  .hero-section {
    display: flex;
    align-items: center;
    position: relative;
    min-height: 60vh;
  }
  
  .hero-content {
    position: relative;
    z-index: 2;
    max-width: 700px;
    padding: 140px 40px 100px 40px;
  }
  
  .hero-content .breadcrumb {
    font-size: 12px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--color-accent);
    font-weight: 500;
    margin-bottom: 25px;
  }
  
  .hero-content .headline {
    font-family: var(--font-heading);
    font-size: 64px;
    font-weight: 600;
    color: var(--color-text-dark);
    margin-bottom: 25px;
    line-height: 1.15;
    letter-spacing: -0.02em;
  }
  
  .gold-accent {
    color: var(--color-accent);
  }
  
  .hero-content .body-text {
    font-size: 18px;
font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
    font-weight: 400;
  }
  
  /* Tier Badges */
  .tier-badge {
    font-size: 12px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 20px;
    text-align: center;
    font-weight: 500;
  }
  
  .centered-eyebrow {
    font-size: 12px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 20px;
    text-align: center;
    font-weight: 500;
  }
  
  .section-title-dark { 
    font-family: var(--font-heading);
    font-size: 42px; 
    font-weight: 400; 
    color: var(--color-text-lighter-2); 
    margin-bottom: 20px; 
    text-align: center;
    line-height: 1.2;
  }
  
  .section-text-dark { 
    font-size: 17px; 
    color: var(--color-text-gray-2); 
    line-height: 1.7; 
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
  }
  
  /* Benefits Grid */
  .benefits-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 35px;
    margin-top: 60px;
  }
  
  .benefit-card {
    background: var(--bg-white-2);
    border: 1px solid var(--border-light);
    padding: 45px 32px;
    text-align: center;
    transition: all 0.3s ease;
    border-bottom: 3px solid var(--color-accent);
  }
  
  .benefit-card:hover { 
    transform: translateY(-5px); 
  }
  
  .benefit-icon {
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .benefit-icon svg { 
    color: var(--color-accent);
    width: 48px;
    height: 48px;
  }
  
  .benefit-card h4 { 
    font-size: 22px; 
    font-weight: 500; 
    color: var(--color-text-dark); 
    margin-bottom: 15px; 
  }
  
  .benefit-card p { 
    font-size: 15px; 
    color: var(--color-text-gray-2); 
    line-height: 1.7; 
    margin: 0;
  }
  
  /* CTA Button */
  .cta-button {
    display: inline-block;
    background: var(--color-accent);
    color: var(--color-primary);
    padding: 14px 42px;
    text-decoration: none;
    font-weight: 600;
    font-size: 13px;
    letter-spacing: 1px;
    text-transform: uppercase;
    transition: all 0.3s ease;
    margin-top: 10px;
  }
  
  .cta-button:hover {
    background: var(--color-accent-light);
    transform: translateY(-2px);
  }
  
  /* Final Quote */
  .final-quote { 
    background: var(--bg-white-2); 
    text-align: center; 
    padding: 100px 20px; 
    border-top: 1px solid var(--border-light);
    border-bottom: 1px solid var(--border-light);
  }
  
  .final-quote p { 
    font-family: var(--font-heading);
    font-size: 32px; 
    color: var(--color-text-lighter-2); 
    line-height: 1.4; 
    font-weight: 400;
    margin-bottom: 30px;
  }
  
  /* Animations */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
    opacity: 0;
    will-change: transform, opacity;
  }
  
  .fade-up.revealed {
    animation: smoothFadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  .scale-in.revealed {
    animation: smoothScale 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
  }
  
  @keyframes smoothFadeUp {
    0% { opacity: 0; transform: translateY(25px); }
    100% { opacity: 1; transform: translateY(0); }
  }
  
  @keyframes smoothScale {
    0% { opacity: 0; transform: scale(0.97); }
    100% { opacity: 1; transform: scale(1); }
  }
  
  .delay-1 { transition-delay: 0.1s; animation-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; animation-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; animation-delay: 0.3s; }
  
  /* Responsive */
  @media (max-width: 1200px) {
    .hero-content .headline { font-size: 52px; }
    .section-title-dark { font-size: 36px; }
  }
  
  @media (max-width: 991px) {
    .hero-content { margin-left: 5%; max-width: 65%; }
    .hero-content .headline { font-size: 42px; }
    .benefits-grid { gap: 25px; }
  }
  
  @media (max-width: 768px) {
    .wide-container { padding: 0 24px; }
    .hero-content { padding: 100px 24px 60px 24px; margin-left: 0; max-width: 100%; }
    .hero-content .headline { font-size: 36px; }
    .section-title-dark { font-size: 28px; }
    .benefits-grid { grid-template-columns: 1fr; gap: 25px; }
    .benefit-card { padding: 35px 25px; }
    .benefit-card h4 { font-size: 20px; }
    .final-quote p { font-size: 24px; }
    .final-quote { padding: 80px 20px; }
    .full-width-white, .full-width-gray { padding: 60px 0; }
    .hero-section > div:first-child { opacity: 0.3; }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 32px; }
    .section-title-dark { font-size: 24px; }
    .benefit-icon svg { width: 40px; height: 40px; }
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
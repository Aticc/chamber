@extends("layouts.app")

@section('content')


<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/INSTITUTIONAL MEMBERSHIP.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Membership / Institutional Membership</div>
    <h1 class="headline fade-up revealed">Institutional <span class="gold-accent">Membership</span></h1>
    <div class="body-text fade-up delay-2 revealed">Tier I: Institutional & Institutional Partners</div>
  </div>
</div>

<!-- ========= OVERVIEW SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">TIER I</div>
    <h2 class="section-title-dark fade-up delay-1">Institutional & Institutional Partners</h2>
    <p class="section-text-dark fade-up delay-2">Designated for institutional wealth funds, national governments, and multilateral financial institutions focusing on policy alignment, G2G frameworks, and large-scale capital deployment.</p>
    
    <div class="content-grid">
      <div class="content-card fade-up delay-1">
        <div class="card-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M3 9l9-6 9 6v9a2 2 0 01-2 2H5a2 2 0 01-2-2V9z"/>
            <path d="M9 22V12h6v10"/>
          </svg>
        </div>
        <h3>Institutional Classification</h3>
        <p>Tier I - Private Institutional Mandate (Non-Sovereign)</p>
      </div>
      <div class="content-card fade-up delay-2">
        <div class="card-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
            <path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/>
          </svg>
        </div>
        <h3>Annual Fee</h3>
        <p>$50,000 (3-5 members)</p>
      </div>
      <div class="content-card fade-up delay-3">
        <div class="card-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M22 11.08V12a10 10 0 11-5.93-9.14"/>
            <path d="M22 4L12 14.01l-3-3"/>
            <path d="M6 12h.01"/>
          </svg>
        </div>
        <h3>Accession Protocol</h3>
        <p>EOI → T&V Review → Ratification</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= KEY FEATURES ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">KEY FEATURES</div>
    <h2 class="section-title-dark fade-up delay-1">What Institutional Membership Includes</h2>
    <div class="features-grid">
      <div class="feature-card fade-up delay-1">
        <div class="feature-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M12 2L3 7l9 5 9-5-9-5z"/>
            <path d="M3 12l9 5 9-5"/>
            <path d="M3 17l9 5 9-5"/>
          </svg>
        </div>
        <h4>Policy Alignment & G2G Frameworks</h4>
        <p>Strategic engagement with governments and multilateral institutions.</p>
      </div>
      <div class="feature-card fade-up delay-2">
        <div class="feature-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M20 12V8H4v4M12 4v4M4 4h16v16H4z"/>
            <path d="M8 20v-8h8v8"/>
            <path d="M16 12h.01"/>
          </svg>
        </div>
        <h4>Large-Scale Capital Deployment</h4>
        <p>Access to execution-ready investment opportunities across Africa.</p>
      </div>
      <div class="feature-card fade-up delay-3">
        <div class="feature-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 8v4l3 3"/>
            <path d="M12 16h.01"/>
          </svg>
        </div>
        <h4>Strategic Investment Committee Access</h4>
        <p>Participation in institutional investment committees and decision-making.</p>
      </div>
      <div class="feature-card fade-up delay-1">
        <div class="feature-icon">
          <svg width="44" height="44" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M19 3H5a2 2 0 00-2 2v14a2 2 0 002 2h14a2 2 0 002-2V5a2 2 0 00-2-2z"/>
            <path d="M9 3v18M15 3v18M3 9h18M3 15h18"/>
          </svg>
        </div>
        <h4>Dedicated Relationship Management</h4>
        <p>Personalized institutional relationship support and coordination.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= BENEFITS LIST ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">BENEFITS</div>
    <h2 class="section-title-dark fade-up delay-1">Full Benefits of Institutional Membership</h2>
    <div class="benefits-list-wrapper fade-up delay-2">
      <ul class="benefits-list">
        <li><span class="check">✓</span> All Tier II & Tier III benefits</li>
        <li><span class="check">✓</span> Strategic investment committee access</li>
        <li><span class="check">✓</span> Dedicated relationship manager</li>
        <li><span class="check">✓</span> Custom intelligence reports</li>
        <li><span class="check">✓</span> Priority access to all ATICC summits and missions</li>
        <li><span class="check">✓</span> Direct capital facilitation and co-investment opportunities</li>
      </ul>
    </div>
  </div>
</div>

<!-- ========= CTA ========= -->
<div class="final-quote">
  <p class="scale-in">Ready to join as an Institutional Member?</p>
  <a href="{{ route('access.plans') }}" class="cta-button scale-in delay-1">Apply Now →</a>
</div>

@include('layouts.footer')

<style>
  /* Using Global CSS Variables */
  .full-width-white { 
    width: 100%; 
    background: var(--bg-white-2); 
    padding: 90px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .full-width-gray { 
    width: 100%; 
    background: var(--bg-gray-2); 
    padding: 90px 0; 
    border-bottom: 1px solid var(--border-light);
  }
  
  .wide-container {
    max-width: 1360px;
    margin: 0 auto;
    padding: 0 40px;
  }
  
  .hero-content {
    position: relative;
    z-index: 2;
    max-width: 55%;
    margin: 0;
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
    margin-bottom: 25px;
    text-align: center;
    line-height: 1.2;
  }
  
  .section-text-dark {
    font-size: 17px;
font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.7;
    text-align: center;
    max-width: 800px;
    margin: 0 auto;
  }
  
  /* Content Grid */
  .content-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 35px;
    margin-top: 60px;
  }
  
  .content-card {
    background: var(--bg-gray-2);
    border: 1px solid var(--border-light);
    padding: 45px 30px;
    text-align: center;
    transition: all 0.3s ease;
    border-bottom: 3px solid var(--color-accent);
  }
  
  .content-card:hover {
    transform: translateY(-6px);
  }
  
  .card-icon {
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .card-icon svg {
    color: var(--color-accent);
    width: 48px;
    height: 48px;
  }
  
  .content-card h3 {
    font-size: 22px;
    font-weight: 500;
    color: var(--color-text-dark);
    margin-bottom: 15px;
  }
  
  .content-card p {
    font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.6;
    margin: 0;
  }
  
  /* Features Grid */
  .features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 35px;
    margin-top: 60px;
  }
  
  .feature-card {
    background: var(--bg-white-2);
    border: 1px solid var(--border-light);
    padding: 40px 30px;
    text-align: center;
    transition: all 0.3s ease;
    border-bottom: 3px solid var(--color-accent);
  }
  
  .feature-card:hover {
    transform: translateY(-4px);
  }
  
  .feature-icon {
    margin-bottom: 25px;
    display: flex;
    justify-content: center;
    align-items: center;
  }
  
  .feature-icon svg {
    color: var(--color-accent);
    width: 44px;
    height: 44px;
  }
  
  .feature-card h4 {
    font-size: 20px;
    font-weight: 500;
    color: var(--color-text-lighter-2);
    margin-bottom: 15px;
  }
  
  .feature-card p {
    font-size: 15px;
    color: var(--color-text-gray-2);
    line-height: 1.6;
    margin: 0;
  }
  
  /* Benefits List */
  .benefits-list-wrapper {
    max-width: 750px;
    margin: 50px auto 0;
    background: var(--bg-gray-2);
    padding: 30px 45px;
    border: 1px solid var(--border-light);
  }
  
  .benefits-list {
    list-style: none;
    padding: 0;
    margin: 0;
  }
  
  .benefits-list li {
    padding: 16px 0;
    font-size: 16px;
    color: var(--color-text-gray-2);
    border-bottom: 1px solid var(--border-light);
    display: flex;
    align-items: center;
    gap: 14px;
    line-height: 1.6;
  }
  
  .benefits-list li:last-child {
    border-bottom: none;
    padding-bottom: 0;
  }
  
  .benefits-list li:first-child {
    padding-top: 0;
  }
  
  .check {
    color: var(--color-accent);
    font-weight: bold;
    font-size: 18px;
    flex-shrink: 0;
  }
  
  /* CTA Button */
  .cta-button {
    display: inline-block;
    background: var(--color-accent);
    color: var(--color-primary);
    padding: 16px 48px;
    text-decoration: none;
    font-weight: 600;
    font-size: 14px;
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
  }
  
  .final-quote p {
    font-family: var(--font-heading);
    font-size: 32px;
    color: var(--color-text-lighter-2);
    line-height: 1.4;
    font-weight: 400;
    margin-bottom: 35px;
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
  
  .delay-1 { animation-delay: 0.1s; }
  .delay-2 { animation-delay: 0.2s; }
  .delay-3 { animation-delay: 0.3s; }
  
  /* Responsive */
  @media (max-width: 1200px) {
    .hero-content .headline { font-size: 52px; }
    .section-title-dark { font-size: 36px; }
  }
  
  @media (max-width: 991px) {
    .hero-content { max-width: 70%; }
    .hero-content .headline { font-size: 42px; }
    .content-grid { grid-template-columns: repeat(2, 1fr); }
    .features-grid { grid-template-columns: 1fr; }
  }
  
  @media (max-width: 768px) {
    .wide-container { padding: 0 24px; }
    .hero-content { padding: 100px 24px 60px 24px !important; max-width: 100%; }
    .hero-content .headline { font-size: 36px; }
    .section-title-dark { font-size: 28px; }
    .content-grid { grid-template-columns: 1fr; gap: 25px; }
    .content-card, .feature-card { padding: 35px 25px; }
    .benefits-list-wrapper { padding: 25px; margin: 40px 20px 0; }
    .final-quote p { font-size: 26px; }
    .final-quote { padding: 80px 20px; }
    .full-width-white, .full-width-gray { padding: 60px 0; }
    .hero-section > div:first-child { opacity: 0.3; }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 32px; }
    .card-icon svg, .feature-icon svg { width: 38px; height: 38px; }
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
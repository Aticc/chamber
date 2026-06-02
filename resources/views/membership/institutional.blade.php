@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; width: 121%; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/INSTITUTIONAL MEMBERSHIP.jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Membership / Institutional Membership</div>
    <h1 class="headline fade-up revealed" style="max-width: 100%;">Institutional <span style="color: #17015e;">Membership</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 100%; line-height: 1.5;">Tier I: Institutional & Institutional Partners</div>
  </div>
</div>
</div>

<!-- ========= OVERVIEW SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">TIER I</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Institutional & Institutional Partners</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">Designated for institutional wealth funds, national governments, and multilateral financial institutions focusing on policy alignment, G2G frameworks, and large-scale capital deployment.</p>
    
    <div class="content-grid">
      <div class="content-card fade-up delay-1">
        <h3>Institutional Classification</h3>
        <p>Tier I - Private Institutional Mandate (Non-Sovereign)</p>
      </div>
      <div class="content-card fade-up delay-2">
        <h3>Annual Fee</h3>
        <p>$50,000 (3-5 members)</p>
      </div>
      <div class="content-card fade-up delay-3">
        <h3>Accession Protocol</h3>
        <p>EOI → T&V Review → Ratification</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= KEY FEATURES ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">KEY FEATURES</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">What Institutional Membership Includes</h2>
    <div class="features-grid">
      <div class="feature-card fade-up delay-1">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#C49A6C" stroke-width="1.4">
          <path d="M12 2L3 7l9 5 9-5-9-5z"/>
          <path d="M3 12l9 5 9-5"/>
        </svg>
        <h4>Policy Alignment & G2G Frameworks</h4>
        <p>Strategic engagement with governments and multilateral institutions.</p>
      </div>
      <div class="feature-card fade-up delay-2">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#C49A6C" stroke-width="1.4">
          <path d="M20 12V8H4v4M12 4v4M4 4h16v16H4z"/>
          <path d="M8 20v-8h8v8"/>
        </svg>
        <h4>Large-Scale Capital Deployment</h4>
        <p>Access to execution-ready investment opportunities across Africa.</p>
      </div>
      <div class="feature-card fade-up delay-3">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#C49A6C" stroke-width="1.4">
          <circle cx="12" cy="12" r="10"/>
          <path d="M12 8v4l3 3"/>
        </svg>
        <h4>Strategic Investment Committee Access</h4>
        <p>Participation in institutional investment committees and decision-making.</p>
      </div>
      <div class="feature-card fade-up delay-1">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#C49A6C" stroke-width="1.4">
          <path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"/>
          <path d="M9 3v18M15 3v18M3 9h18M3 15h18"/>
        </svg>
        <h4>Dedicated Relationship Management</h4>
        <p>Personalized institutional relationship support and coordination.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= BENEFITS LIST ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="breadcrumb-light fade-up" style="text-align: center;">BENEFITS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Full Benefits of Institutional Membership</h2>
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
  <p class="scale-in" style="font-size: 18px;">Ready to join as an Institutional Member?</p>
  <a href="{{ route('access.plans') }}" class="cta-button scale-in delay-1">Apply Now →</a>
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
    --bg-table-row: #F8F9FC;
    
    /* ========= BORDER COLORS - Subtle ========= */
    --border-light: #e8eef2;
    --border-card: #e8eef2;
    --border-list: #eef2f6;
    
    /* ========= FONT WEIGHTS - Lighter ========= */
    --font-light: 300;
    --font-regular: 300;
    --font-medium: 500;
  }

  .full-width-white { width: 100%; background: var(--bg-white); padding: 80px 0; }
  .full-width-gray { width: 100%; background: var(--bg-gray); padding: 80px 0; }
  .breadcrumb-light { font-size: 14px; letter-spacing: 0.08em; text-transform: uppercase; color: var(--color-text-lighter); margin-bottom: 20px; font-weight: var(--font-medium); }
  .section-title-dark { font-size: 48px; font-weight: var(--font-regular); color: var(--color-text-dark); margin-bottom: 20px; }
  .section-text-dark { font-size: 16px; color: var(--color-text-light); line-height: 1.7; font-weight: var(--font-light); }
  .final-quote { background: var(--bg-white); text-align: center; padding: 80px 20px; }
  .final-quote p { font-size: 28px; color: var(--color-text-dark); line-height: 1.4; margin-bottom: 30px; font-weight: var(--font-light); }
  
  /* Hero Section */
  .hero-section {
    margin-top: 0;
  }
  .hero-content {
    position: relative;
    z-index: 2;
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
  .hero-content .headline span {
    color: var(--color-accent);
  }
  .hero-content .body-text {
    font-size: 18px;
    color: var(--color-text-light);
    max-width: 620px;
    line-height: 1.5;
    font-weight: var(--font-light);
  }
  
  /* Content Grid */
  .content-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 48px;
  }
  .content-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 35px 20px;
    text-align: center;
    transition: all 0.25s ease;
  }
  .content-card:hover { transform: translateY(-5px); border-color: var(--color-accent-soft); }
  .content-card h3 { font-size: 20px; font-weight: var(--font-regular); color: var(--color-text-dark); margin-bottom: 12px; }
  .content-card p { font-size: 15px; color: var(--color-text-muted); font-weight: var(--font-light); }
  
  /* Features Grid */
  .features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 48px;
  }
  .feature-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    border-radius: 20px;
    padding: 35px 25px;
    text-align: center;
    transition: 0.2s;
  }
  .feature-card svg { margin-bottom: 20px; width: 44px; height: 44px; stroke: var(--color-primary); }
  .feature-card h4 { font-size: 20px; font-weight: var(--font-regular); color: var(--color-text-dark); margin-bottom: 12px; }
  .feature-card p { font-size: 15px; color: var(--color-text-muted); line-height: 1.5; font-weight: var(--font-light); }
  
  /* Benefits List */
  .benefits-list-wrapper {
    max-width: 700px;
    margin: 48px auto 0;
    background: var(--bg-card);
    border-radius: 24px;
    padding: 20px 35px 25px;
    border: 1px solid var(--border-list);
  }
  .benefits-list { list-style: none; padding: 0; }
  .benefits-list li {
    padding: 14px 0;
    font-size: 16px;
    color: var(--color-text-gray);
    border-bottom: 1px solid var(--border-list);
    display: flex;
    align-items: center;
    gap: 12px;
    font-weight: var(--font-light);
  }
  .benefits-list li:last-child { border-bottom: none; }
  .check { color: var(--color-primary); font-weight: var(--font-regular); font-size: 20px; }
  
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
  
  @media (max-width: 1100px) {
    .hero-content {
      max-width: 70% !important;
    }
    .hero-content .headline {
      font-size: 48px;
    }
  }
  
  @media (max-width: 992px) {
    .hero-content {
      max-width: 80% !important;
    }
    .hero-content .headline {
      font-size: 42px;
    }
  }
  
  @media (max-width: 768px) {
    .section-title-dark { font-size: 32px; }
    .full-width-white, .full-width-gray { padding: 50px 0; }
    .final-quote p { font-size: 22px; }
    .hero-content .headline { font-size: 36px; }
    .hero-content { max-width: 100% !important; padding: 40px 30px !important; }
    .hero-section { min-height: 70vh !important; }
    .content-grid, .features-grid { grid-template-columns: 1fr; gap: 20px; }
    .benefits-list-wrapper { padding: 20px; }
    /* Hide image overlay on mobile for better text visibility */
    .hero-section > div:first-child {
      opacity: 0.3;
    }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 32px; }
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
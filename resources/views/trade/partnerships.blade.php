@extends("layouts.app")

@section('content')


<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
    <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
      <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/INSTITUTIONAL PARTNERSHIP.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
      </div>


<div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Trade & Investment / Institutional Partnerships</div>
    <h1 class="headline fade-up revealed">Institutional <span style="color: #17015e;">Partnerships</span></h1>
    <div class="body-text fade-up delay-2 revealed">Strategic collaboration across capital, trade, and institutional ecosystems.</div>
  </div>
</div>

<!-- ========= CONTENT SECTION (Styled with the wide-container & light elegance) ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <!-- The breadcrumb-light and section-title-dark (optional but keeps elegance) -->
    <div class="breadcrumb-light fade-up" style="text-align: center;">PARTNERSHIP FRAMEWORK</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Strategic Collaboration Ecosystem</h2>
    <p class="lead-text section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto 50px;">ATICC engages strategic partners across capital, trade, and institutional ecosystems to facilitate structured engagement and execution.</p>
    
    <!-- Content split layout inside the elegant container -->
    <div class="content-split">
      <div class="content-left">
        <h2>Partnership Framework</h2>
        <p>ATICC engages strategic partners across capital, trade, and institutional ecosystems to facilitate structured engagement and execution.</p>
        <ul class="feature-list">
          <li><span class="check-mark">✓</span> <strong>Capital Partners:</strong> Institutional investors and wealth funds</li>
          <li><span class="check-mark">✓</span> <strong>Trade Partners:</strong> Corporates, industry operators, and trade bodies</li>
          <li><span class="check-mark">✓</span> <strong>Institutional Partners:</strong> Governments, multilaterals, and development institutions</li>
          <li><span class="check-mark">✓</span> <strong>Service Partners:</strong> Legal, financial, and advisory firms</li>
        </ul>
      </div>
      <div class="content-right">
        <div class="info-card">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.5" style="margin-bottom: 20px;">
            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
            <circle cx="12" cy="12" r="3"/>
          </svg>
          <h3>Become a Partner</h3>
          <p>ATICC welcomes strategic partnerships aligned with institutional standards and execution frameworks.</p>
          <a href="{{ route('contact.partnership') }}" class="partner-btn">Inquire About Partnership →</a>
        </div>
      </div>
    </div>
  </div>
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
    --bg-card: #F8F9FA;
    
    /* ========= BORDER COLORS - Subtle ========= */
    --border-light: #e8eef2;
    --border-card: #E8EBED;
    
    /* ========= FONT WEIGHTS - Lighter ========= */
    --font-light: 300;
    --font-regular: 300;
    --font-medium: 500;
  }

  .full-width-white { width: 100%; background: var(--bg-white-2); padding: 80px 0; }
  .full-width-gray { width: 100%; background: var(--bg-gray-2); padding: 80px 0; }
  .breadcrumb-light { font-size: 14px; letter-spacing: 0.08em; text-transform: uppercase; color: var(--color-text-lighter-2); margin-bottom: 20px; font-weight: var(--font-medium); text-align: center; }
  .section-title-dark { font-size: 48px; font-weight: var(--font-regular); color: var(--color-text-dark); margin-bottom: 20px; text-align: center; }
  .section-text-dark { font-size: 16px; color: var(--color-text-light); line-height: 1.7; font-weight: var(--font-light); text-align: center; }
  
  /* Hero Section (exactly from the first style) */
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
    font-weight: 300;
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
  
  /* Lead Text */
  .lead-text {
    font-size: 18px;
    color: var(--color-text-light);
    line-height: 1.7;
    font-weight: var(--font-light);
  }
  
  /* Content Split Layout */
  .wide-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .content-split {
    display: flex;
    gap: 60px;
    align-items: flex-start;
    margin-top: 20px;
  }
  .content-left {
    flex: 1.5;
  }
  .content-left h2 {
    font-size: 32px;
    color: var(--color-text-dark);
    margin-bottom: 20px;
    font-weight: var(--font-regular);
  }
  .content-left p {
    font-size: 16px;
    color: var(--color-text-light);
    line-height: 1.6;
    margin-bottom: 20px;
    font-weight: var(--font-light);
  }
  .feature-list {
    list-style: none;
    padding: 0;
  }
  .feature-list li {
    padding: 12px 0;
    font-size: 15px;
    color: var(--color-text-muted);
    border-bottom: 1px solid var(--border-card);
    font-weight: var(--font-light);
  }
  .feature-list li strong {
    color: var(--color-text-dark);
    font-weight: var(--font-medium);
  }
  .check-mark {
    color: var(--color-accent);
    margin-right: 12px;
    font-weight: var(--font-light);
  }
  .content-right {
    flex: 1;
  }
  .info-card {
    background: var(--bg-card);
    padding: 32px;
    border-radius: 20px;
    border: 1px solid var(--border-card);
    transition: all 0.3s ease;
  }
  .info-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-color: var(--color-accent-soft);
  }
  .info-card svg {
    stroke: var(--color-primary);
  }
  .info-card h3 {
    font-size: 20px;
    color: var(--color-text-dark);
    margin-bottom: 15px;
    font-weight: var(--font-regular);
  }
  .info-card p {
    font-size: 14px;
    color: var(--color-text-muted);
    line-height: 1.5;
    margin-bottom: 20px;
    font-weight: var(--font-light);
  }
  .partner-btn {
    display: inline-block;
    background: var(--color-accent);
    color: #000000;
    padding: 12px 24px;
    border-radius: 40px;
    text-decoration: none;
    font-size: 14px;
    font-weight: var(--font-regular);
    transition: all 0.3s ease;
  }
  .partner-btn:hover {
    background: #b08a5c;
    transform: translateY(-2px);
  }
  
  /* Animations (exactly from the first style) */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
  }
  .fade-up.revealed, .fade-left.revealed, .fade-right.revealed, .scale-in.revealed, .glide-in.revealed {
    opacity: 1;
    transform: translateY(0);
  }
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  
  @media (max-width: 992px) {
    .content-split { flex-direction: column; gap: 40px; }
    .section-title-dark { font-size: 36px; }
    .hero-content .headline { font-size: 48px; }
  }
  
  @media (max-width: 768px) {
    .section-title-dark { font-size: 32px; }
    .full-width-white { padding: 50px 0; }
    .hero-content .headline { font-size: 42px; }
    .hero-section { min-height: 420px; background-position: 65% center !important; }
    .hero-content { margin-left: 5%; }
    .content-left h2 { font-size: 28px; }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 34px; }
    .hero-content .body-text { font-size: 16px; }
    .section-title-dark { font-size: 28px; }
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
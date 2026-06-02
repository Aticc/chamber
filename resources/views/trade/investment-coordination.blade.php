@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
    <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
      <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/INVESTMENT COORDINATION.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
      </div>

  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Trade & Investment / Investment Coordination</div>
    <h1 class="headline fade-up revealed">Investment <span style="color: #17015e;">Coordination</span></h1>
    <div class="body-text fade-up delay-2 revealed">Connecting institutional capital with verified opportunities.</div>
  </div>
</div>

<!-- ========= INVESTMENT COORDINATION SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="content-split">
      <div class="content-left">
        <h2>Capital Alignment</h2>
        <p>ATICC coordinates institutional investment across priority sectors and markets, ensuring capital meets vetted, execution-ready opportunities.</p>
        <ul class="feature-list">
          <li><span class="check-mark">✓</span> <strong>Capital Alignment:</strong> Matching institutional capital with vetted opportunities</li>
          <li><span class="check-mark">✓</span> <strong>Transaction Structuring:</strong> Financial and legal frameworks for investment execution</li>
          <li><span class="check-mark">✓</span> <strong>Portfolio Coordination:</strong> Ongoing oversight of institutional investments</li>
          <li><span class="check-mark">✓</span> <strong>Exit Strategy Support:</strong> Structured pathways for capital realization</li>
        </ul>
      </div>
      <div class="content-right">
        <div class="info-card">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.5" style="margin-bottom: 20px;">
            <path d="M21 12a9 9 0 1 0-9 9"/>
            <path d="M12 6v6l4 2"/>
            <path d="M16 21.5L19 18l-3-3"/>
          </svg>
          <h3>Investment Focus</h3>
          <ul>
            <li>Infrastructure</li>
            <li>Energy</li>
            <li>Agro-Processing</li>
            <li>Technology</li>
            <li>Trade Finance</li>
          </ul>
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
    --bg-card: #ffffff;
    --bg-info: #F8F9FA;
    
    /* ========= BORDER COLORS - Subtle ========= */
    --border-light: #e8eef2;
    --border-card: #e8eef2;
    
    /* ========= FONT WEIGHTS - Lighter ========= */
    --font-light: 300;
    --font-regular: 300;
    --font-medium: 500;
  }

  .full-width-white { width: 100%; background: var(--bg-white); padding: 80px 0; }
  
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
    font-weight: 300;
    color: var(--color-text-white);
    margin: 20px 0 20px;
    line-height: 1.2;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
  }
  .hero-content .headline span {
    color: var(--color-accent);
  }
  .hero-content .body-text {
    font-size: 18px;
    color: var(--color-text-offwhite);
    max-width: 620px;
    line-height: 1.5;
    font-weight: var(--font-light);
    text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
  }
  
  /* Content Split */
  .wide-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .content-split {
    display: flex;
    gap: 60px;
    align-items: flex-start;
  }
  .content-left {
    flex: 1.5;
  }
  .content-left h2 {
    font-size: 32px;
    color: var(--color-text-dark);
    margin-bottom: 20px;
    font-weight: var(--font-light);
  }
  .content-left p {
    font-size: 16px;
    color: var(--color-text-dark);
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
    color: var(--color-text-dark);
    border-bottom: 1px solid var(--border-light);
    font-weight: var(--font-light);
  }
  .feature-list li strong {
    color: var(--color-text-dark);
    font-weight: var(--font-regular);
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
    background: var(--bg-info);
    padding: 32px;
    border-radius: 16px;
    border: 1px solid var(--border-card);
  }
  .info-card svg {
    margin-bottom: 20px;
  }
  .info-card h3 {
    font-size: 20px;
    color: var(--color-text-dark);
    margin-bottom: 15px;
    font-weight: var(--font-regular);
  }
  .info-card ul {
    list-style: none;
    padding: 0;
  }
  .info-card li {
    padding: 8px 0;
    font-size: 14px;
    color: var(--color-text-dark);
    font-weight: var(--font-light);
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
    .content-split { flex-direction: column; }
    .hero-section { min-height: 420px; }
    .hero-content .headline { font-size: 42px; }
    .hero-content { margin-left: 5%; }
  }
  
  @media (max-width: 768px) {
    .full-width-white { padding: 50px 0; }
    .hero-content .headline { font-size: 34px; }
    .hero-content .body-text { font-size: 16px; }
    .content-left h2 { font-size: 28px; }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline { font-size: 28px; }
    .hero-content .body-text { font-size: 14px; }
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
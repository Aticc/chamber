@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh !important;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 65%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 90%; height: 100%; background: url('{{ asset('assets/images/TRADE FACILITATION .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>

  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Trade & Investment / Trade Facilitation</div>
    <h1 class="headline fade-up revealed">Trade <span class="gold-accent">Facilitation</span></h1>
    <div class="body-text fade-up delay-2 revealed">Technical infrastructure for cross-border trade execution.</div>
  </div>
</div>

<!-- ========= TRADE FACILITATION SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="content-split">
      <div class="content-left">
        <h2>Structured Trade Support</h2>
        <p>ATICC provides technical "soft infrastructure" for trade, enabling institutional partners to navigate complex regulatory environments and execute cross-border transactions efficiently.</p>
        <ul class="feature-list">
          <li><span class="check-mark">✓</span> <strong>Regulatory Navigation:</strong> Direct guidance on localized trade laws and compliance requirements</li>
          <li><span class="check-mark">✓</span> <strong>Documentation Optimization:</strong> Support for standardized export/import protocols</li>
          <li><span class="check-mark">✓</span> <strong>Market Entry Intelligence:</strong> Specialized strategies for entering high-barrier jurisdictions</li>
          <li><span class="check-mark">✓</span> <strong>Trade Finance Coordination:</strong> Connecting traders with appropriate capital partners</li>
        </ul>
      </div>
      <div class="content-right">
        <div class="info-card">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.3">
            <path d="M21 12a9 9 0 1 0-9 9"/>
            <path d="M12 6v6l4 2"/>
            <path d="M16 21.5L19 18l-3-3"/>
          </svg>
          <h3>Why Trade Facilitation Matters</h3>
          <p>Effective trade facilitation reduces transaction costs, minimizes delays, and ensures regulatory compliance across borders.</p>
          <p>ATICC's framework provides institutional partners with the technical infrastructure needed to execute cross-border trade at scale.</p>
        </div>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
/* Using Global CSS Variables - No local :root override */

.full-width-white { 
  width: 100%; 
  background: var(--bg-white-2); 
  padding: 90px 0; 
  border-bottom: 1px solid var(--border-light);
}

/* Hero Section */
.hero-section {
  background-size: cover;
  background-repeat: no-repeat;
  min-height: 60vh;
  display: flex;
  align-items: center;
  position: relative;
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
  font-weight: 500;
  color: var(--color-text-lighter-2);
  margin: 0 0 25px 0;
  line-height: 1.15;
  letter-spacing: -0.02em;
}

.gold-accent {
  color: var(--color-accent);
}

.hero-content .body-text {
  font-size: 18px;
  color: var(--color-text-gray-2);
  max-width: 550px;
  line-height: 1.7;
  font-weight: 400;
}

/* Content Split */
.wide-container {
  max-width: 1360px;
  margin: 0 auto;
  padding: 0 40px;
}

.content-split {
  display: flex;
  gap: 80px;
  align-items: flex-start;
}

.content-left {
  flex: 1.5;
}

.content-left h2 {
  font-family: var(--font-heading);
  font-size: 38px;
  font-weight: 400;
  color: var(--color-text-lighter-2);
  margin-bottom: 25px;
  line-height: 1.2;
  letter-spacing: -0.01em;
}

.content-left p {
  font-size: 17px;
  color: var(--color-text-gray-2);
  line-height: 1.7;
  margin-bottom: 30px;
}

.feature-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.feature-list li {
  padding: 18px 0;
  font-size: 16px;
  color: var(--color-text-gray-2);
  border-bottom: 1px solid var(--border-light);
  display: flex;
  align-items: flex-start;
  line-height: 1.6;
}

.feature-list li:first-child {
  padding-top: 0;
}

.feature-list li:last-child {
  border-bottom: none;
}

.feature-list li strong {
  color: var(--color-text-lighter-2);
  font-weight: 600;
  margin-right: 6px;
}

.check-mark {
  color: var(--color-accent);
  margin-right: 14px;
  font-weight: bold;
  flex-shrink: 0;
}

.content-right {
  flex: 1;
}

.info-card {
  background: var(--bg-gray-2);
  padding: 40px 32px;
  border-radius: 20px;
  border: 1px solid var(--border-light);
  border-bottom: 3px solid var(--color-accent);
  transition: all 0.3s ease;
}

.info-card:hover {
  transform: translateY(-4px);
}

.info-card svg {
  margin-bottom: 24px;
  color: var(--color-accent);
}

.info-card h3 {
  font-family: var(--font-heading);
  font-size: 22px;
  font-weight: 500;
  color: var(--color-text-lighter-2);
  margin-bottom: 18px;
}

.info-card p {
  font-size: 15px;
  color: var(--color-text-gray);
  line-height: 1.7;
  margin-bottom: 16px;
}

.info-card p:last-child {
  margin-bottom: 0;
}

/* Animations */
.fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
  opacity: 0;
  will-change: transform, opacity;
}

.fade-up.revealed {
  animation: smoothFadeUp 0.8s cubic-bezier(0.16, 1, 0.3, 1) forwards;
}

@keyframes smoothFadeUp {
  0% { opacity: 0; transform: translateY(25px); }
  100% { opacity: 1; transform: translateY(0); }
}

.delay-1 { animation-delay: 0.1s; }
.delay-2 { animation-delay: 0.2s; }
.delay-3 { animation-delay: 0.3s; }

/* Responsive */
@media (max-width: 1200px) {
  .hero-content .headline { font-size: 52px; }
  .content-left h2 { font-size: 32px; }
  .content-split { gap: 50px; }
}

@media (max-width: 991px) {
  .hero-content { margin-left: 5%; max-width: 65%; }
  .hero-content .headline { font-size: 42px; }
  .content-split { flex-direction: column; gap: 40px; }
}

@media (max-width: 768px) {
  .wide-container { padding: 0 24px; }
  .hero-content { padding: 100px 24px 60px 24px; margin-left: 0; max-width: 100%; }
  .hero-content .headline { font-size: 36px; }
  .hero-content .body-text { font-size: 16px; }
  .content-left h2 { font-size: 28px; }
  .full-width-white { padding: 60px 0; }
  .feature-list li { padding: 15px 0; }
  .info-card { padding: 32px 25px; }
  .hero-section > div:first-child { opacity: 0.3; }
}

@media (max-width: 480px) {
  .hero-content .headline { font-size: 32px; }
  .content-left h2 { font-size: 24px; }
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
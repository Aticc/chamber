@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 65%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 90%; height: 100%; background: url('{{ asset('assets/images/Due Diligence Standards.jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>

  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Due Diligence</div>
    <h1 class="headline fade-up revealed">Due <span class="gold-accent">Diligence</span> Standards</h1>
    <div class="body-text fade-up delay-2 revealed">ATICC applies rigorous due diligence standards across all institutional engagements and transaction validations.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">DUE DILIGENCE STANDARDS</div>
    <h2 class="section-title-dark fade-up delay-1">Rigorous Validation Framework</h2>
    <p class="section-text-dark fade-up delay-2">Every project, trade opportunity, or institutional participant listed on the platform undergoes comprehensive due diligence before engagement.</p>
  </div>
</div>

<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3>Due Diligence Components</h3>
        <ul class="bullet-list">
          <li>Identity & Statutory Audit</li>
          <li>Beneficial Ownership Verification</li>
          <li>Financial Capacity Assessment</li>
          <li>Technical Capability Review</li>
          <li>Regulatory Compliance Check</li>
        </ul>
      </div>
      <div class="split-right fade-right">
        <h3>Third-Party Validation</h3>
        <p>ATICC integrates with global risk agencies and independent auditors to provide external assurance for high-value transactions and institutional verifications.</p>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
/* Using Global CSS Variables - No local :root override */

/* Section Backgrounds */
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

/* Centered Content */
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
  letter-spacing: -0.01em;
}

.section-text-dark {
  font-size: 17px;
  color: var(--color-text-gray-2);
  line-height: 1.7;
  text-align: center;
  max-width: 800px;
  margin: 0 auto;
}

/* Policy Split */
.policy-split {
  display: flex;
  gap: 80px;
  align-items: flex-start;
}

.split-left, .split-right {
  flex: 1;
}

.split-left h3, .split-right h3 {
  font-family: var(--font-heading);
  font-size: 32px;
  font-weight: 400;
  color: var(--color-text-lighter-2);
  margin-bottom: 25px;
  line-height: 1.2;
}

.split-right p {
  font-size: 17px;
  color: var(--color-text-gray-2);
  line-height: 1.7;
  font-weight: 400;
}

/* Bullet List */
.bullet-list {
  list-style: none;
  padding: 0;
  margin: 0;
}

.bullet-list li {
  padding: 16px 0;
  font-size: 16px;
  color: var(--color-text-gray);
  border-bottom: 1px solid var(--border-light);
  display: flex;
  align-items: center;
  line-height: 1.6;
}

.bullet-list li:first-child {
  padding-top: 0;
}

.bullet-list li:last-child {
  border-bottom: none;
  padding-bottom: 0;
}

.bullet-list li::before {
  content: "✓";
  color: var(--color-accent);
  margin-right: 14px;
  font-weight: bold;
  font-size: 16px;
}

/* Animations */
.fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
  opacity: 0;
  transform: translateY(25px);
  transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
}

.fade-left {
  transform: translateX(-25px);
}

.fade-right {
  transform: translateX(25px);
}

.scale-in {
  transform: scale(0.96);
}

.fade-up.revealed, .fade-left.revealed, .fade-right.revealed, .scale-in.revealed, .glide-in.revealed {
  opacity: 1;
  transform: translate(0, 0) scale(1);
}

.delay-1 { transition-delay: 0.1s; animation-delay: 0.1s; }
.delay-2 { transition-delay: 0.2s; animation-delay: 0.2s; }
.delay-3 { transition-delay: 0.3s; animation-delay: 0.3s; }
.delay-4 { transition-delay: 0.4s; animation-delay: 0.4s; }

/* Responsive */
@media (max-width: 1200px) {
  .hero-content .headline { font-size: 52px; }
  .section-title-dark { font-size: 36px; }
  .split-left h3, .split-right h3 { font-size: 28px; }
}

@media (max-width: 991px) {
  .policy-split { flex-direction: column; gap: 40px; }
  .hero-content { max-width: 70%; }
  .hero-content .headline { font-size: 42px; }
}

@media (max-width: 768px) {
  .wide-container { padding: 0 24px; }
  .hero-content { padding: 100px 24px 60px 24px; max-width: 100%; }
  .hero-content .headline { font-size: 36px; }
  .hero-content .body-text { font-size: 16px; }
  .full-width-white, .full-width-gray { padding: 60px 0; }
  .section-title-dark { font-size: 28px; }
  .split-left h3, .split-right h3 { font-size: 24px; }
  .bullet-list li { padding: 12px 0; }
  .hero-section > div:first-child { opacity: 0.3; }
}

@media (max-width: 480px) {
  .hero-content .headline { font-size: 32px; }
  .section-title-dark { font-size: 24px; }
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
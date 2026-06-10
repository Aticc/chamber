@extends("layouts.app")

@section('content')


<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/Compliance Protocols.jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Compliance</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Compliance <span class="gold-accent">Protocols</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">ATICC maintains rigorous compliance protocols aligned with international regulatory standards and institutional governance requirements.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">COMPLIANCE PROTOCOLS</div>
    <div class="framework-split">
      <div class="split-left fade-left">
        <div class="section-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.3">
            <path d="M12 2L3 7l9 5 9-5-9-5z"/>
            <path d="M3 12l9 5 9-5"/>
            <path d="M3 17l9 5 9-5"/>
          </svg>
        </div>
        <h3>KYC & AML Framework</h3>
        <ul class="bullet-list">
          <li><span>Know Your Customer (KYC) procedures</span></li>
          <li><span>Anti-Money Laundering (AML) screening</span></li>
          <li><span>Sanctions list verification</span></li>
          <li><span>PEP (Politically Exposed Persons) checks</span></li>
        </ul>
      </div>
      <div class="split-right fade-right">
        <div class="section-icon">
          <svg width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="var(--color-accent)" stroke-width="1.3">
            <rect x="3" y="3" width="18" height="18" rx="2"/>
            <path d="M9 12l2 2 4-4"/>
            <path d="M7 21h10"/>
          </svg>
        </div>
        <h3>Regulatory Alignment</h3>
        <ul class="bullet-list">
          <li><span>International financial regulations</span></li>
          <li><span>Cross-border trade compliance</span></li>
          <li><span>Data protection standards</span></li>
          <li><span>Industry-specific requirements</span></li>
        </ul>
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

.wide-container {
  max-width: 1360px;
  margin: 0 auto;
  padding: 0 40px;
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

/* Hero Section */
.hero-section {
  margin-top: 0;
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

.gold-accent {
  color: var(--color-accent);
}

.hero-content .body-text {
  font-size: 18px;
  color: var(--color-text-gray);
  line-height: 1.7;
  font-weight: 400;
}

/* Framework Split */
.framework-split {
  display: flex;
  gap: 80px;
  align-items: flex-start;
  margin-top: 40px;
}

.split-left, .split-right {
  flex: 1;
}

.section-icon {
  margin-bottom: 25px;
}

.section-icon svg {
  color: var(--color-accent);
}

.split-left h3, .split-right h3 {
  font-family: var(--font-heading);
  font-size: 32px;
  font-weight: 400;
  color: var(--color-text-lighter-2);
  margin-bottom: 25px;
  letter-spacing: -0.01em;
}

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
  flex-shrink: 0;
}

.bullet-list li span {
  color: var(--color-text-gray);
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

.fade-up.revealed, .fade-left.revealed, .fade-right.revealed, .scale-in.revealed, .glide-in.revealed {
  opacity: 1;
  transform: translate(0, 0);
}

.delay-1 { transition-delay: 0.1s; animation-delay: 0.1s; }
.delay-2 { transition-delay: 0.2s; animation-delay: 0.2s; }
.delay-3 { transition-delay: 0.3s; animation-delay: 0.3s; }

/* Responsive */
@media (max-width: 1200px) {
  .hero-content .headline {
    font-size: 52px;
  }
  .split-left h3, .split-right h3 {
    font-size: 28px;
  }
}

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
  .framework-split {
    flex-direction: column;
    gap: 50px;
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
  .wide-container {
    padding: 0 24px;
  }
  .hero-content {
    padding: 100px 24px 60px 24px !important;
    max-width: 100%;
  }
  .hero-content .headline {
    font-size: 36px;
    max-width: 100% !important;
  }
  .hero-content .body-text {
    max-width: 100% !important;
    font-size: 16px;
  }
  .full-width-white {
    padding: 60px 0;
  }
  .split-left h3, .split-right h3 {
    font-size: 28px;
  }
  .hero-section {
    min-height: 50vh !important;
  }
  /* Hide image overlay on mobile for better text visibility */
  .hero-section > div:first-child {
    opacity: 0.3;
  }
  .section-icon svg {
    width: 40px;
    height: 40px;
  }
}

@media (max-width: 480px) {
  .hero-content .headline {
    font-size: 32px;
  }
  .split-left h3, .split-right h3 {
    font-size: 24px;
  }
  .bullet-list li {
    font-size: 14px;
    padding: 14px 0;
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
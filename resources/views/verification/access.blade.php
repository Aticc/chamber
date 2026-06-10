@extends("layouts.app")

@section('content')


<div id="hero" class="hero-section" style="position: relative; background-color: var(--bg-white-2); overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/Verification Access.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Access</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Verification <span class="gold-accent">Access</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">Access to ATICC's ecosystem is granted only through a defined verification process. Participation is restricted to verified entities that meet institutional standards.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">ACCESS REQUIREMENTS</div>
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3>Verification Prerequisites</h3>
        <ul class="bullet-list">
          <li>Completed verification application</li>
          <li>Submitted institutional documentation</li>
          <li>Passed due diligence review</li>
          <li>Approved by Secretariat-General</li>
        </ul>
      </div>
      <div class="split-right fade-right">
        <h3>Access Levels</h3>
        <ul class="bullet-list">
          <li>Tier I: Full institutional access</li>
          <li>Tier II: Corporate partnership access</li>
          <li>Tier III: Member access</li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="full-width-gray" style="text-align: center;">
  <div class="wide-container">
    <a href="{{ route('verification.submit') }}" class="cta-button">Begin Verification →</a>
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
  padding: 80px 0; 
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


.gold-accent {
  color: var(--color-accent);
}

.hero-content .body-text {
  font-size: 18px;
  color: var(--color-text-gray);
  line-height: 1.7;
  font-weight: 400;
}

/* Policy Split */
.policy-split {
  display: flex;
  gap: 80px;
  align-items: flex-start;
  margin-top: 40px;
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
  letter-spacing: -0.01em;
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
  align-items: flex-start;
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

/* CTA Button */
.cta-button {
  display: inline-block;
  background: var(--color-accent);
  color: var(--color-primary);
  border: none;
  padding: 16px 42px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.1em;
  text-decoration: none;
  text-transform: uppercase;
  transition: all 0.3s ease;
  cursor: pointer;
}

.cta-button:hover {
  background: var(--color-accent-light);
  transform: translateY(-2px);
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
  .hero-content .headline { font-size: 52px; }
  .split-left h3, .split-right h3 { font-size: 28px; }
  .policy-split { gap: 50px; }
}

@media (max-width: 992px) {
  .hero-content { max-width: 70%; }
  .hero-content .headline { font-size: 42px; max-width: 100% !important; }
  .hero-content .body-text { max-width: 100% !important; }
  .policy-split { flex-direction: column; gap: 40px; }
}

@media (max-width: 768px) {
  .wide-container { padding: 0 24px; }
  .hero-content { padding: 100px 24px 60px 24px !important; max-width: 100%; }
  .hero-content .headline { font-size: 36px; }
  .hero-content .body-text { font-size: 16px; }
  .full-width-white, .full-width-gray { padding: 60px 0; }
  .split-left h3, .split-right h3 { font-size: 28px; }
  .bullet-list li { padding: 14px 0; font-size: 15px; }
  .hero-section > div:first-child { opacity: 0.3; }
  .cta-button { padding: 14px 32px; font-size: 12px; }
}

@media (max-width: 480px) {
  .hero-content .headline { font-size: 32px; }
  .split-left h3, .split-right h3 { font-size: 24px; }
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
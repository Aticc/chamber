@extends("layouts.app")

@section('content')


<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/Office Locations.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Contact / Office Locations</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Office <span>Locations</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.5;">ATICC institutional offices, regional coordination hubs, and representative locations across Africa.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">OUR PRESENCE</div>
    <div class="large-statement fade-up delay-1">Global & Regional Offices</div>
    <div class="supporting-text fade-up delay-2">ATICC maintains strategic office locations to facilitate continental coordination, institutional engagement, and cross-border operational support.</div>
    
    <!-- Headquarters - No Blue BG -->
    <div class="headquarters-card fade-up delay-1" style="background: #F8F9FA; border: 1px solid #E8EBED; border-radius: 24px; padding: 40px; margin-top: 50px;">
      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 25px;">
        <div style="width: 50px; height: 50px; background: #041931; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <h2 style="font-size: 24px; font-weight: 400; color: #0e0e0e; margin: 0;">Headquarters</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
        <div>
          <p style="font-weight: 600; margin-bottom: 8px; color: #0e0e0e;">Lagos, Nigeria</p>
          <p style="color: #4a5e72; line-height: 1.6;">ATICC Central Secretariat<br>Plot 14B, Admiralty Way, Lekki Phase 1<br>Lagos, Nigeria</p>
          <p style="margin-top: 12px; color: #4a5e72;"><strong>Tel:</strong> +234 1 234 5678</p>
          <p style="color: #4a5e72;"><strong>Email:</strong> secretariat@aticchamber.org</p>
        </div>
        <div>
          <p style="font-weight: 600; margin-bottom: 8px; color: #0e0e0e;">Hours of Operation</p>
          <p style="color: #4a5e72;">Monday – Thursday: 9:00 AM – 5:00 PM WAT<br>Friday: 9:00 AM – 1:00 PM WAT</p>
        </div>
      </div>
    </div>
    
    <!-- Regional Offices Grid -->
    <div class="offices-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; margin-top: 50px;">
      <div class="office-card glide-in delay-1">
        <h4>West Africa Regional Hub</h4>
        <p>Accra, Ghana</p>
        <p class="contact-info">+233 30 123 4567</p>
        <p class="contact-email">westafrica@aticchamber.org</p>
      </div>
      <div class="office-card glide-in delay-2">
        <h4>East Africa Regional Hub</h4>
        <p>Nairobi, Kenya</p>
        <p class="contact-info">+254 20 123 4567</p>
        <p class="contact-email">eastafrica@aticchamber.org</p>
      </div>
      <div class="office-card glide-in delay-3">
        <h4>Southern Africa Hub</h4>
        <p>Johannesburg, South Africa</p>
        <p class="contact-info">+27 11 123 4567</p>
        <p class="contact-email">southernafrica@aticchamber.org</p>
      </div>
      <div class="office-card glide-in delay-4">
        <h4>North Africa Hub</h4>
        <p>Casablanca, Morocco</p>
        <p class="contact-info">+212 522 123 456</p>
        <p class="contact-email">northafrica@aticchamber.org</p>
      </div>
      <div class="office-card glide-in delay-5">
        <h4>Central Africa Hub</h4>
        <p>Yaoundé, Cameroon</p>
        <p class="contact-info">+237 222 123 456</p>
        <p class="contact-email">centralafrica@aticchamber.org</p>
      </div>
      <div class="office-card glide-in delay-6">
        <h4>International Representative</h4>
        <p>London, United Kingdom</p>
        <p class="contact-info">+44 20 1234 5678</p>
        <p class="contact-email">international@aticchamber.org</p>
      </div>
    </div>
  </div>
</div>

<!-- Map Section -->
<div class="full-width-gray" style="padding: 0; background: #e0e4e8;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253682.0143711447!2d3.119047492110849!3d6.548790050011115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae68280c1%3A0xdc9e87a367c3d9cb!2sLagos%2C%20Nigeria!5e0!3m2!1sen!2suk!4v1700000000000!5m2!1sen!2suk" 
    style="width: 100%; height: 400px; border: 0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<div class="full-width-white" style="text-align: center; padding: 60px 20px;">
  <p style="font-size: 18px; color: #0e0e0e; line-height: 1.4;">Structure defines authority.<br>Integrity anchors capital.<br>Execution drives value.</p>
</div>

@include('layouts.footer')

<style>

  .full-width-white { width: 100%; background: var(--bg-white-2); padding: 80px 0; }
  .full-width-gray { width: 100%; background: var(--bg-gray-2); padding: 80px 0; }
  
  .wide-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  
  .centered-eyebrow {
    font-size: 13px;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: var(--color-accent);
    margin-bottom: 15px;
    text-align: center;
    font-weight: var(--font-medium);
  }
  
  .large-statement {
    font-size: 48px;
    font-weight: var(--font-regular);
    color: var(--color-primary);
    margin-bottom: 20px;
    text-align: center;
  }
  
  .supporting-text {
    font-size: 16px;
    color: var(--color-text-light);
    max-width: 700px;
    margin: 0 auto;
    text-align: center;
    line-height: 1.7;
    font-weight: var(--font-light);
  }
  
  /* Hero Section */
  .hero-section {
    margin-top: 0;
  }
  
  .hero-content .breadcrumb {
    font-size: 13px;
    letter-spacing: 0.12em;
    text-transform: uppercase;
    color: var(--color-accent);
    font-weight: var(--font-regular);
  }
  
  .hero-content .body-text {
    font-size: 18px;
    color: var(--color-text-light);
    line-height: 1.5;
    font-weight: var(--font-light);
  }
  
  /* Office Cards */
  .office-card {
    background: var(--bg-card);
    border: 1px solid var(--border-card);
    padding: 32px 28px;
    border-radius: 20px;
    transition: all 0.3s ease;
  }
  
  .office-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-color: var(--color-accent);
  }
  
  .office-card h4 {
    font-size: 18px;
    font-weight: var(--font-medium);
    color: var(--color-text-dark);
    margin-bottom: 15px;
  }
  
  .office-card p {
    font-size: 14px;
    color: var(--color-text-muted);
    line-height: 1.5;
    margin-bottom: 5px;
    font-weight: var(--font-light);
  }
  
  .office-card .contact-info {
    color: var(--color-accent);
    font-size: 13px;
    margin-top: 10px;
  }
  
  .office-card .contact-email {
    font-size: 13px;
  }
  
  /* Animations */
  .fade-up, .glide-in {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
  }
  
  .fade-up.revealed, .glide-in.revealed {
    opacity: 1;
    transform: translateY(0);
  }
  
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  .delay-4 { transition-delay: 0.4s; }
  .delay-5 { transition-delay: 0.5s; }
  .delay-6 { transition-delay: 0.6s; }
  
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
    .large-statement {
      font-size: 36px !important;
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
    .full-width-white, .full-width-gray {
      padding: 50px 0;
    }
    .large-statement {
      font-size: 28px !important;
    }
    .hero-content .headline {
      font-size: 36px;
      max-width: 100% !important;
    }
    .hero-content .body-text {
      max-width: 100% !important;
      font-size: 16px;
    }
    .hero-content {
      padding: 40px 30px !important;
    }
    .hero-section {
      min-height: 50vh !important;
    }
    .headquarters-card {
      padding: 25px !important;
    }
    .headquarters-card h2 {
      font-size: 20px !important;
    }
    .offices-grid {
      gap: 20px !important;
    }
    .office-card {
      padding: 24px 20px;
    }
    .hero-section > div:first-child {
      opacity: 0.3;
    }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline {
      font-size: 32px;
    }
    .large-statement {
      font-size: 24px !important;
    }
  }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .glide-in');
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
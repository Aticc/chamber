@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/contact us .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Contact Us</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Contact Us</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.5;">Institutional Engagement & Strategic Submissions. ATICC manages all institutional correspondence, engagement requests, and transaction-related inquiries through a centralized verification framework.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">INSTITUTIONAL ENGAGEMENT</div>
    <div class="large-statement fade-up delay-1">Centralized Coordination Framework</div>
    <div class="supporting-text fade-up delay-2">The African Trade & Investment Chamber of Commerce (ATICCs) manages institutional correspondence, strategic engagement requests, transaction-related inquiries, and operational submissions through a centralized coordination and verification framework.</div>
    
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; margin-top: 50px;">
      <div class="grid-card glide-in delay-1">
        <h4>General Inquiries</h4>
        <p>Secretariat coordination, institutional information, and general correspondence.</p>
      </div>
      <div class="grid-card glide-in delay-2">
        <h4>Strategic Partnerships</h4>
        <p>Bilateral engagements, institutional alliances, and collaborative frameworks.</p>
      </div>
      <div class="grid-card glide-in delay-3">
        <h4>Transaction Submission</h4>
        <p>Trade finance, capital deployment, and cross-border transaction facilitation.</p>
      </div>
      <div class="grid-card glide-in delay-4">
        <h4>Verification Support</h4>
        <p>Compliance validation, due diligence, and institutional credentialing.</p>
      </div>
      <div class="grid-card glide-in delay-5">
        <h4>Media Relations</h4>
        <p>Press inquiries, interviews, and official communications.</p>
      </div>
    </div>
  </div>
</div>

<div class="full-width-gray">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3>Centralized Coordination Framework</h3>
        <p>This structure supports operational alignment, institutional validation, and professional cross-border engagement standards prior to assignment to the appropriate coordination desk or sector division.</p>
      </div>
      <div class="framework-right fade-right">
        <p><strong>Operational Alignment:</strong> All submissions routed through secretariat coordination</p>
        <p style="margin-top: 15px;"><strong>Institutional Validation:</strong> Verification protocols ensure compliance standards</p>
        <p style="margin-top: 15px;"><strong>Cross-Border Standards:</strong> Professional engagement framework for international partners</p>
      </div>
    </div>
  </div>
</div>

<!-- Contact Form -->
<div class="full-width-white" style="background-color: #F7F7F5;">
  <div class="wide-container" style="max-width: 800px;">
    <div class="centered-eyebrow fade-up">GENERAL SUBMISSION</div>
    <div class="large-statement fade-up delay-1" style="font-size: 36px;">Send an Inquiry</div>
    
    <div class="contact-form-wrapper" style="background: white; border-radius: 24px; padding: 50px; margin-top: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
      <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        
        @if(session('success'))
          <div style="background: #E8F5E9; color: #2E7D32; padding: 15px 20px; border-radius: 12px; margin-bottom: 30px; border-left: 3px solid #2E7D32;">{{ session('success') }}</div>
        @endif
        
        @if(session('error'))
          <div style="background: #FFEBEE; color: #C62828; padding: 15px 20px; border-radius: 12px; margin-bottom: 30px; border-left: 3px solid #C62828;">{{ session('error') }}</div>
        @endif

        <input type="hidden" name="form_type" value="general">

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Legal Entity Representative <span style="color: #C62828;">*</span></label>
          <input type="text" name="representative" class="aticc-input-field" value="{{ old('representative') }}" required>
          @error('representative')<span style="color: #C62828; font-size: 11px;">{{ $message }}</span>@enderror
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Registering Institution / Corporate Entity</label>
          <input type="text" name="institution" class="aticc-input-field" value="{{ old('institution') }}">
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Corporate Email Address <span style="color: #C62828;">*</span></label>
          <input type="email" name="email" class="aticc-input-field" value="{{ old('email') }}" required>
          @error('email')<span style="color: #C62828; font-size: 11px;">{{ $message }}</span>@enderror
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Telecommunications Contact Number</label>
          <input type="tel" name="phone" class="aticc-input-field" value="{{ old('phone') }}">
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Primary Engagement Classification <span style="color: #C62828;">*</span></label>
          <select name="classification" class="aticc-input-field" required>
            <option value="">Select Classification</option>
            <option value="101-G">[Code: 101-G] General Institutional & Secretariat Coordination</option>
            <option value="202-S">[Code: 202-S] Strategic Partnerships & Bilateral Engagements</option>
            <option value="303-I">[Code: 303-I] Capital Deployment & Investment Engagement</option>
            <option value="404-T">[Code: 404-T] Trade Corridor & Cross-Border Coordination</option>
            <option value="505-M">[Code: 505-M] Membership & Institutional Access</option>
            <option value="606-V">[Code: 606-V] Verification & Compliance Services</option>
            <option value="707-E">[Code: 707-E] Events & Institutional Engagements</option>
            <option value="808-C">[Code: 808-C] Media Relations & Public Communications</option>
            <option value="909-X">[Code: 909-X] Technical Support & Systems Coordination</option>
          </select>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Submission Brief / Engagement Summary <span style="color: #C62828;">*</span></label>
          <textarea name="message" rows="5" class="aticc-input-field" required>{{ old('message') }}</textarea>
          @error('message')<span style="color: #C62828; font-size: 11px;">{{ $message }}</span>@enderror
        </div>

        <div class="legal-disclosure" style="border: 1px solid #D9DEE7; background-color: #F7F7F5; border-radius: 16px; padding: 24px; margin: 32px 0;">
          <h4 style="font-size: 11px; font-weight: 700; color: #041931; margin-bottom: 12px;">REGULATORY & COMPLIANCE NOTICE</h4>
          <p style="font-size: 12px; color: #5D6F7F;">All submissions are subject to internal review, verification, and institutional coordination procedures managed in accordance with ATICC operational standards and engagement protocols.</p>
          <p style="font-size: 12px; color: #5D6F7F; margin-top: 12px;">ATICCs reserves the right to request supplementary documentation, institutional credentials, corporate registration records, or verification materials where necessary prior to initiating formal engagement processes.</p>
        </div>

        <button type="submit" class="aticc-submit">EXECUTE SUBMISSION</button>
      </form>
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
  :root {
    --color-primary: #041931;
    --color-accent: #C49A6C;
    --color-text-dark: #0e0e0e;
    --color-text-light: #3a4c5e;
    --color-text-muted: #4a5b6b;
    --bg-white: #ffffff;
    --bg-gray: #F5F6F8;
    --border-card: #E8EBED;
    --font-light: 300;
    --font-regular: 300;
    --font-medium: 500;
  }

  .full-width-white { width: 100%; background: var(--bg-white); padding: 80px 0; }
  .full-width-gray { width: 100%; background: var(--bg-gray); padding: 80px 0; }
  
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
  
  .hero-content .headline {
    font-size: 58px;
    font-weight: 300;
    color: var(--color-text-dark);
    margin: 20px 0 20px;
    line-height: 1.2;
  }
  
  .hero-content .body-text {
    font-size: 18px;
    color: var(--color-text-light);
    line-height: 1.5;
    font-weight: var(--font-light);
  }
  
  /* Grid Cards */
  .grid-card {
    flex: 1;
    min-width: 200px;
    background: var(--bg-white);
    border: 1px solid var(--border-card);
    padding: 32px 28px;
    border-radius: 20px;
    transition: all 0.3s ease;
  }
  
  .grid-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.08);
    border-color: var(--color-accent);
  }
  
  .grid-card h4 {
    font-size: 18px;
    font-weight: var(--font-medium);
    color: var(--color-text-dark);
    margin-bottom: 12px;
  }
  
  .grid-card p {
    font-size: 14px;
    color: var(--color-text-muted);
    line-height: 1.5;
    font-weight: var(--font-light);
  }
  
  /* Framework Split */
  .framework-split {
    display: flex;
    gap: 60px;
    align-items: center;
  }
  
  .framework-left {
    flex: 1;
  }
  
  .framework-left h3 {
    font-size: 28px;
    font-weight: var(--font-regular);
    color: var(--color-text-dark);
    margin-bottom: 15px;
  }
  
  .framework-left p {
    font-size: 16px;
    color: var(--color-text-light);
    line-height: 1.6;
    font-weight: var(--font-light);
  }
  
  .framework-right {
    flex: 1;
  }
  
  .framework-right p {
    font-size: 15px;
    color: var(--color-text-muted);
    padding: 12px 20px;
    background: var(--bg-white);
    border-radius: 12px;
    border-left: 3px solid var(--color-accent);
    font-weight: var(--font-light);
  }
  
  /* Form Styles */
  .aticc-input-field {
    width: 100%;
    padding: 14px 16px;
    border: 1px solid #D9DEE7;
    border-radius: 12px;
    font-size: 14px;
    transition: all 0.2s;
  }
  
  .aticc-input-field:focus {
    border-color: var(--color-primary);
    outline: none;
    box-shadow: 0 0 0 2px rgba(4, 25, 49, 0.1);
  }
  
  .aticc-submit {
    background-color: var(--color-primary);
    color: white;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 16px 32px;
    border-radius: 40px;
    border: none;
    cursor: pointer;
    width: 100%;
    transition: all 0.3s ease;
  }
  
  .aticc-submit:hover {
    background-color: var(--color-accent);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
  }
  
  /* Animations */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
  }
  
  .fade-left {
    transform: translateX(-28px);
  }
  
  .fade-right {
    transform: translateX(28px);
  }
  
  .fade-up.revealed, .fade-left.revealed, .fade-right.revealed, .scale-in.revealed, .glide-in.revealed {
    opacity: 1;
    transform: translate(0, 0);
  }
  
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  .delay-4 { transition-delay: 0.4s; }
  .delay-5 { transition-delay: 0.5s; }
  
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
      gap: 30px;
    }
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
    .contact-form-wrapper {
      padding: 25px !important;
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
    .hero-section > div:first-child {
      opacity: 0.3;
    }
  }
  
  @media (max-width: 480px) {
    .hero-content .headline {
      font-size: 32px;
    }
  }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in, .grid-card');
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
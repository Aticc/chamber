@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/Verification Support.jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Contact / Verification Support</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Verification <span>Support</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.5;">Request verification services, compliance validation, and institutional credentialing support.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">VERIFICATION SUPPORT</div>
    <div class="large-statement fade-up delay-1">Request Verification Services</div>
    <div class="supporting-text fade-up delay-2">ATICC provides institutional verification, compliance validation, due diligence support, and credentialing services.</div>
    
    <div class="framework-split" style="margin-top: 50px;">
      <div class="framework-left fade-left">
        <h3>Verification Framework</h3>
        <p>Our verification services ensure institutional credibility, regulatory compliance, and operational integrity across all engagements.</p>
      </div>
      <div class="framework-right fade-right">
        <p><strong>Institutional Verification</strong> - Validate corporate credentials and registration</p>
        <p style="margin-top: 15px;"><strong>Compliance Validation</strong> - Ensure regulatory alignment</p>
        <p style="margin-top: 15px;"><strong>Due Diligence</strong> - Comprehensive background verification</p>
      </div>
    </div>
    
    <div class="contact-form-wrapper" style="max-width: 800px; margin: 50px auto 0; background: white; border-radius: 24px; padding: 50px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border: 1px solid #E8EBED;">
      <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <input type="hidden" name="form_type" value="verification">
        
        @if(session('success'))
          <div style="background: #E8F5E9; color: #2E7D32; padding: 15px; border-radius: 12px; margin-bottom: 30px; border-left: 3px solid #2E7D32;">{{ session('success') }}</div>
        @endif

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Requesting Entity <span style="color: #C62828;">*</span></label>
          <input type="text" name="institution" class="aticc-input-field" style="width: 100%; padding: 14px 16px; border: 1px solid #D9DEE7; border-radius: 12px; font-size: 14px;" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Contact Person <span style="color: #C62828;">*</span></label>
          <input type="text" name="representative" class="aticc-input-field" style="width: 100%; padding: 14px 16px; border: 1px solid #D9DEE7; border-radius: 12px; font-size: 14px;" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Email <span style="color: #C62828;">*</span></label>
          <input type="email" name="email" class="aticc-input-field" style="width: 100%; padding: 14px 16px; border: 1px solid #D9DEE7; border-radius: 12px; font-size: 14px;" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Verification Service Type</label>
          <select name="classification" class="aticc-input-field" style="width: 100%; padding: 14px 16px; border: 1px solid #D9DEE7; border-radius: 12px; font-size: 14px;">
            <option value="">Select Service</option>
            <option value="institutional">Institutional Verification</option>
            <option value="compliance">Compliance Validation</option>
            <option value="due_diligence">Due Diligence Support</option>
            <option value="credentialing">Credentialing Services</option>
          </select>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Additional Information <span style="color: #C62828;">*</span></label>
          <textarea name="message" rows="5" class="aticc-input-field" style="width: 100%; padding: 14px 16px; border: 1px solid #D9DEE7; border-radius: 12px; font-size: 14px;" required></textarea>
        </div>

        <div class="legal-disclosure" style="border: 1px solid #E8EBED; background-color: #F8F9FA; border-radius: 16px; padding: 24px; margin: 32px 0;">
          <h4 style="font-size: 11px; font-weight: 700; color: #041931; margin-bottom: 12px; text-transform: uppercase;">VERIFICATION NOTICE</h4>
          <p style="font-size: 12px; color: #5D6F7F; line-height: 1.5;">All verification requests are subject to ATICC's internal review and validation protocols. Additional documentation may be required.</p>
        </div>

        <button type="submit" class="aticc-submit" style="background-color: #041931; color: white; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; padding: 16px 32px; border-radius: 40px; width: 100%; border: none; cursor: pointer; transition: all 0.3s ease;">REQUEST VERIFICATION SUPPORT</button>
      </form>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>

  .full-width-white { width: 100%; background: var(--bg-white-2); padding: 80px 0; }
  
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
  
  /* Framework Split */
  .framework-split {
    display: flex;
    gap: 60px;
    align-items: center;
    margin-bottom: 50px;
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
    padding: 12px 20px;
    background: var(--bg-white-2);
    border-radius: 12px;
    border-left: 3px solid var(--color-accent);
    font-weight: var(--font-light);
    font-size: 15px;
    color: var(--color-text-muted);
  }
  
  /* Form Styles */
  .aticc-input-field {
    transition: all 0.3s ease;
  }
  
  .aticc-input-field:focus {
    border-color: var(--color-primary);
    outline: none;
    box-shadow: 0 0 0 2px rgba(4, 25, 49, 0.1);
  }
  
  .aticc-submit:hover {
    background-color: var(--color-accent) !important;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(4, 25, 49, 0.12);
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
  
  .fade-up.revealed, .fade-left.revealed, .fade-right.revealed {
    opacity: 1;
    transform: translate(0, 0);
  }
  
  .delay-1 { transition-delay: 0.1s; }
  .delay-2 { transition-delay: 0.2s; }
  .delay-3 { transition-delay: 0.3s; }
  
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
    .full-width-white {
      padding: 50px 0;
    }
    .large-statement {
      font-size: 28px !important;
    }
    .contact-form-wrapper {
      padding: 25px !important;
      margin: 30px 15px 0 !important;
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
    .framework-left h3 {
      font-size: 24px;
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
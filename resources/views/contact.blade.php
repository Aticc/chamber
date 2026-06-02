@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= CONTACT HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/contact us .png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 40%, transparent 90%); -webkit-mask-image: linear-gradient(to left, black 40%, transparent 90%);"></div>
  </div>
  
  <!-- Text content -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Contact Us</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%; font-size: 48px;">CONTACT US</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 55%; line-height: 1.5; font-size: 16px; color: #3a4c5e;">
      Institutional Engagement & Strategic Submissions  ATICC manages all institutional correspondence, engagement requests, and transaction-related inquiries through a centralized verification framework.
    </div>
  </div>
</div>

<!-- ========= CONTACT SECTION ========= -->
<div class="aticc-contact-canvas" style="background-color: #F7F7F5; padding: 80px 0;">
  <div class="wide-container" style="max-width: 1000px; margin: 0 auto; padding: 0 20px;">
    
    <!-- Location Info -->
    <div class="location-info" style="text-align: center; margin-bottom: 50px;">
      {{-- <div style="display: inline-flex; align-items: center; gap: 8px; background: white; padding: 12px 24px; border-radius: 40px; border: 1px solid #D9DEE7;">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.5">
          <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
          <circle cx="12" cy="10" r="3"/>
        </svg>
        <span style="font-size: 14px; color: #041931; font-weight: 400;">HQ: Lagos, Nigeria</span>
      </div> --}}
    </div>

    <!-- Institutional Notice -->
    <div class="institutional-notice" style="margin-bottom: 50px; text-align: center;">
      <div class="notice-line" style="width: 50px; height: 2px; background: #C49A6C; margin: 0 auto 25px;"></div>
      <p style="font-size: 16px; color: #2E4156; line-height: 1.6; max-width: 800px; margin: 0 auto; font-weight: 400;">
        The African Trade & Investment Chamber of Commerce (ATICC) manages institutional correspondence, strategic engagement requests, transaction-related inquiries, and operational submissions through a centralized coordination and verification framework.
      </p>
      <p style="font-size: 14px; color: #7A8B9B; line-height: 1.6; max-width: 700px; margin: 20px auto 0;">
        This structure supports operational alignment, institutional validation, and professional cross-border engagement standards prior to assignment to the appropriate coordination desk or sector division.
      </p>
    </div>

    <!-- Contact Form -->
    <div class="contact-form-wrapper" style="max-width: 800px; margin: 0 auto; background: white; border-radius: 2px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border: 1px solid #D9DEE7;">
      <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        
        <!-- Success/Error Messages -->
        @if(session('success'))
          <div style="background: #E8F5E9; color: #2E7D32; padding: 15px 20px; border-radius: 2px; margin-bottom: 30px; border-left: 3px solid #2E7D32;">
            {{ session('success') }}
          </div>
        @endif
        
        @if(session('error'))
          <div style="background: #FFEBEE; color: #C62828; padding: 15px 20px; border-radius: 2px; margin-bottom: 30px; border-left: 3px solid #C62828;">
            {{ session('error') }}
          </div>
        @endif

        <!-- Field 01: Legal Entity Representative -->
        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">
            Legal Entity Representative <span style="color: #C62828;">*</span>
          </label>
          <input type="text" name="representative" class="aticc-input-field" value="{{ old('representative') }}" required 
                 style="width: 100%; padding: 12px 14px; border: 1px solid #D9DEE7; border-radius: 2px; font-size: 14px; font-family: 'Montserrat', sans-serif; background: white; transition: all 0.2s;">
          <small style="display: block; margin-top: 5px; font-size: 11px; color: #7A8B9B;">
            Enter the legal full name of the authorized representative submitting this institutional request.
          </small>
          @error('representative')
            <span style="color: #C62828; font-size: 11px; margin-top: 5px; display: block;">{{ $message }}</span>
          @enderror
        </div>

        <!-- Field 02: Registering Institution / Corporate Entity -->
        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">
            Registering Institution / Corporate Entity
          </label>
          <input type="text" name="institution" class="aticc-input-field" value="{{ old('institution') }}" 
                 style="width: 100%; padding: 12px 14px; border: 1px solid #D9DEE7; border-radius: 2px; font-size: 14px; font-family: 'Montserrat', sans-serif; background: white;">
          <small style="display: block; margin-top: 5px; font-size: 11px; color: #7A8B9B;">
            Full registered name of the corporate entity, investment group, development institution, trade organization, or affiliated institution.
          </small>
        </div>

        <!-- Field 03: Corporate Electronic Address -->
        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">
            Corporate Email Address <span style="color: #C62828;">*</span>
          </label>
          <input type="email" name="email" class="aticc-input-field" value="{{ old('email') }}" required 
                 style="width: 100%; padding: 12px 14px; border: 1px solid #D9DEE7; border-radius: 2px; font-size: 14px; font-family: 'Montserrat', sans-serif; background: white;">
          <small style="display: block; margin-top: 5px; font-size: 11px; color: #7A8B9B;">
            Official corporate or institutional email address.
          </small>
          @error('email')
            <span style="color: #C62828; font-size: 11px; margin-top: 5px; display: block;">{{ $message }}</span>
          @enderror
        </div>

        <!-- Field 04: Telecommunications Contact Number -->
        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">
            Telecommunications Contact Number
          </label>
          <input type="tel" name="phone" class="aticc-input-field" value="{{ old('phone') }}" 
                 style="width: 100%; padding: 12px 14px; border: 1px solid #D9DEE7; border-radius: 2px; font-size: 14px; font-family: 'Montserrat', sans-serif; background: white;">
          <small style="display: block; margin-top: 5px; font-size: 11px; color: #7A8B9B;">
            Direct institutional telephone number including international dialing code.
          </small>
        </div>

        <!-- Field 05: Primary Engagement Classification (Dropdown) -->
        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">
            Primary Engagement Classification <span style="color: #C62828;">*</span>
          </label>
          <select name="classification" class="aticc-input-field" required 
                  style="width: 100%; padding: 12px 14px; border: 1px solid #D9DEE7; border-radius: 2px; font-size: 13px; font-family: 'Montserrat', sans-serif; background-color: #F7F7F5; color: #041931; cursor: pointer;">
            <option value="">Select Classification</option>
            <option value="101-G" {{ old('classification') == '101-G' ? 'selected' : '' }}>[Code: 101-G] General Institutional & Secretariat Coordination</option>
            <option value="202-S" {{ old('classification') == '202-S' ? 'selected' : '' }}>[Code: 202-S] Strategic Partnerships & Bilateral Engagements</option>
            <option value="303-I" {{ old('classification') == '303-I' ? 'selected' : '' }}>[Code: 303-I] Capital Deployment & Investment Engagement</option>
            <option value="404-T" {{ old('classification') == '404-T' ? 'selected' : '' }}>[Code: 404-T] Trade Corridor & Cross-Border Coordination</option>
            <option value="505-M" {{ old('classification') == '505-M' ? 'selected' : '' }}>[Code: 505-M] Membership & Institutional Access</option>
            <option value="606-V" {{ old('classification') == '606-V' ? 'selected' : '' }}>[Code: 606-V] Verification & Compliance Services</option>
            <option value="707-E" {{ old('classification') == '707-E' ? 'selected' : '' }}>[Code: 707-E] Events & Institutional Engagements</option>
            <option value="808-C" {{ old('classification') == '808-C' ? 'selected' : '' }}>[Code: 808-C] Media Relations & Public Communications</option>
            <option value="909-X" {{ old('classification') == '909-X' ? 'selected' : '' }}>[Code: 909-X] Technical Support & Systems Coordination</option>
          </select>
          @error('classification')
            <span style="color: #C62828; font-size: 11px; margin-top: 5px; display: block;">{{ $message }}</span>
          @enderror
        </div>

        <!-- Field 06: Submission Brief / Engagement Summary -->
        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">
            Submission Brief / Engagement Summary <span style="color: #C62828;">*</span>
          </label>
          <textarea name="message" rows="5" class="aticc-input-field" required 
                    style="width: 100%; padding: 12px 14px; border: 1px solid #D9DEE7; border-radius: 2px; font-size: 14px; font-family: 'Montserrat', sans-serif; background: white; resize: vertical;">{{ old('message') }}</textarea>
          <small style="display: block; margin-top: 5px; font-size: 11px; color: #7A8B9B;">
            Provide a concise and structured overview of your inquiry, engagement request, institutional proposal, or transaction-related submission.
          </small>
          @error('message')
            <span style="color: #C62828; font-size: 11px; margin-top: 5px; display: block;">{{ $message }}</span>
          @enderror
        </div>

        <!-- LEGAL DISCLOSURE BOX -->
        <div class="legal-disclosure" style="border: 1px solid #D9DEE7; background-color: #F7F7F5; border-left: 2px solid #C7CCD6; padding: 24px; margin: 32px 0;">
          <h4 style="font-size: 11px; font-weight: 700; color: #041931; margin-bottom: 12px; text-transform: uppercase; letter-spacing: 0.5px;">REGULATORY & COMPLIANCE NOTICE</h4>
          <p style="font-size: 12px; color: #5D6F7F; line-height: 1.5; margin: 0;">
            All submissions are subject to internal review, verification, and institutional coordination procedures managed in accordance with ATICC operational standards and engagement protocols.
          </p>
          <p style="font-size: 12px; color: #5D6F7F; line-height: 1.5; margin-top: 12px;">
            ATICC reserves the right to request supplementary documentation, institutional credentials, corporate registration records, or verification materials where necessary prior to initiating formal engagement processes.
          </p>
        </div>

        <!-- SUBMIT BUTTON -->
        <button type="submit" class="aticc-submit" style="background-color: #041931; color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; padding: 16px 32px; border-radius: 2px; border: none; cursor: pointer; width: 100%; transition: all 0.3s ease;">
          EXECUTE SUBMISSION
        </button>
      </form>
    </div>
  </div>
</div>

<!-- ========= MAP SECTION ========= -->
<div class="map-section" style="width: 100%; height: 400px; background: #e0e4e8;">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d253682.0143711447!2d3.119047492110849!3d6.548790050011115!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b2ae68280c1%3A0xdc9e87a367c3d9cb!2sLagos%2C%20Nigeria!5e0!3m2!1sen!2suk!4v1700000000000!5m2!1sen!2suk" 
    style="width: 100%; height: 100%; border: 0;"
    allowfullscreen="" 
    loading="lazy">
  </iframe>
</div>

<!-- ========= FINAL QUOTE ========= -->
<div class="final-quote" style="background: white; text-align: center; padding: 60px 20px;">
  <p style="font-size: 18px; color: #0e0e0e; line-height: 1.4;">Structure defines authority.<br>Integrity anchors capital.<br>Execution drives value.</p>
</div>

@include('layouts.footer')

<style>
  /* Contact Page Specific CSS Custom Overrides */
  .aticc-contact-canvas {
    background-color: #F7F7F5;
  }

  .aticc-input-field {
    border: 1px solid #D9DEE7;
    border-radius: 2px;
    transition: all 0.2s ease;
    font-family: 'Montserrat', sans-serif;
  }

  .aticc-input-field:focus {
    border-color: #041931;
    outline: none;
    box-shadow: 0 0 0 2px rgba(4, 25, 49, 0.1);
  }

  .aticc-submit {
    background-color: #041931;
    color: #FFFFFF;
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 1px;
    padding: 16px 32px;
    border-radius: 2px;
    border: none;
    cursor: pointer;
    transition: all 0.3s ease;
  }

  .aticc-submit:hover {
    background-color: #0a2a4a;
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
  }

  /* Hero Section Overrides */
  .hero-section .headline {
    font-weight: 300;
  }

  /* Responsive */
  @media (max-width: 768px) {
    .contact-form-wrapper {
      padding: 25px !important;
    }
    
    .aticc-submit {
      padding: 14px 24px;
      font-size: 12px;
    }
    
    .hero-content h1 {
      max-width: 100% !important;
      font-size: 32px !important;
    }
    
    .hero-content .body-text {
      max-width: 100% !important;
      font-size: 14px !important;
    }
    
    .institutional-notice p {
      font-size: 13px;
    }
  }
</style>

<script>
  // Intersection Observer for smooth scroll-triggered animations
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .glide-in');
  
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15, rootMargin: '0px 0px -50px 0px' });

  animatedElements.forEach(el => observer.observe(el));

  // Nav scroll effect
  window.addEventListener('scroll', function() {
    const nav = document.getElementById('stickyNav');
    if (window.scrollY > 50) {
      nav.classList.add('scrolled');
      document.body.classList.add('nav-shrunk');
    } else {
      nav.classList.remove('scrolled');
      document.body.classList.remove('nav-shrunk');
    }
  });
</script>

@endsection
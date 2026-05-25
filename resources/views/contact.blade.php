@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= CONTACT HERO SECTION ========= -->
<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  
  <!-- Image as a soft background element on the right -->
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 122%; background: url('{{ asset('assets/images/a2ea0b8a-ea9f-443a-a73e-015309fbdd02.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 40%, transparent 90%); -webkit-mask-image: linear-gradient(to left, black 40%, transparent 90%);"></div>
  </div>
  
  <!-- Text content - consistent padding -->
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Contact</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%; font-size: 48px; font-weight: 400;">Contact</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.5; font-size: 20px; color: #4A5E72;">All institutional inquiries and engagements are managed through defined communication channels. Engagement is structured and aligned with ATICC's institutional framework.</div>
  </div>
</div>

<!-- ========= CONTACT SECTION ========= -->
<div class="full-width-white">
  <div class="wide-container">
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-error">{{ session('error') }}</div>
    @endif
    
    <div class="contact-grid" style="display: flex; gap: 60px; flex-wrap: wrap;">
      
      <!-- Left Side - Contact Information -->
      <div class="contact-info" style="flex: 1; min-width: 300px;">
        <h2 style="font-size: 32px; font-weight: 400; color: #0e0e0e; margin-bottom: 30px;">Contact</h2>
        
        <div class="contact-details" style="margin-bottom: 40px;">
          <div class="contact-item" style="display: flex; align-items: flex-start; gap: 16px; margin-bottom: 28px;">
            <div class="contact-icon" style="width: 24px; height: 24px; color: #031B4E; flex-shrink: 0;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                <polyline points="22,6 12,13 2,6"/>
              </svg>
            </div>
            <div class="contact-text">
              <h4 style="font-size: 14px; font-weight: 500; color: #031B4E; margin-bottom: 6px; letter-spacing: 0.08em;">EMAIL</h4>
              <a href="mailto:support@aticchamber.org" style="font-size: 16px; color: #3a4c5e; text-decoration: none; line-height: 1.5;">support@aticchamber.org</a>
            </div>
          </div>
          
          <div class="contact-item" style="display: flex; align-items: flex-start; gap: 16px; margin-bottom: 28px;">
            <div class="contact-icon" style="width: 24px; height: 24px; color: #031B4E; flex-shrink: 0;">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                <circle cx="12" cy="10" r="3"/>
              </svg>
            </div>
            <div class="contact-text">
              <h4 style="font-size: 14px; font-weight: 500; color: #031B4E; margin-bottom: 6px; letter-spacing: 0.08em;">ADDRESS</h4>
              <p style="font-size: 16px; color: #3a4c5e; line-height: 1.5;">6th Floor, Focus,<br>London E14 8HU,<br>United Kingdom</p>
            </div>
          </div>
        </div>
        
         <div class="institutional-note" style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #E8EBED;">
          <p style="font-size: 16px; color: #3a4c5e; line-height: 1.6;">Institutional engagement and submissions</p>
        </div>
      </div>

      <!-- Right Side - Contact Form -->
      <div class="contact-form-wrapper" style="flex: 1.5; min-width: 350px;">
        <div class="contact-form" style="background: #F8F9FA; padding: 40px; border-radius: 20px;">
          <h3 style="font-size: 24px; font-weight: 400; color: #0e0e0e; margin-bottom: 28px;">Send a Message</h3>
          <form action="{{ route('contact.send') }}" method="POST">
            @csrf
            <div class="form-group" style="margin-bottom: 20px;">
              <label style="display: block; font-size: 13px; font-weight: 500; color: #2E4156; margin-bottom: 8px;">Full Name <span class="required">*</span></label>
              <input type="text" name="name" value="{{ old('name') }}" required style="width: 100%; padding: 12px 16px; border: 1px solid #DADFE5; border-radius: 12px; font-size: 14px; font-family: inherit;">
              @error('name') <span class="field-error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
              <label style="display: block; font-size: 13px; font-weight: 500; color: #2E4156; margin-bottom: 8px;">Email Address <span class="required">*</span></label>
              <input type="email" name="email" value="{{ old('email') }}" required style="width: 100%; padding: 12px 16px; border: 1px solid #DADFE5; border-radius: 12px; font-size: 14px; font-family: inherit;">
              @error('email') <span class="field-error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group" style="margin-bottom: 20px;">
              <label style="display: block; font-size: 13px; font-weight: 500; color: #2E4156; margin-bottom: 8px;">Subject <span class="required">*</span></label>
              <select name="subject" required style="width: 100%; padding: 12px 16px; border: 1px solid #DADFE5; border-radius: 12px; font-size: 14px; font-family: inherit; background: white;">
                <option value="General Inquiry" {{ old('subject') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
                <option value="Investment Opportunity" {{ old('subject') == 'Investment Opportunity' ? 'selected' : '' }}>Investment Opportunity</option>
                <option value="Partnership Proposal" {{ old('subject') == 'Partnership Proposal' ? 'selected' : '' }}>Partnership Proposal</option>
                <option value="Membership Access" {{ old('subject') == 'Membership Access' ? 'selected' : '' }}>Membership Access</option>
                <option value="Media Inquiry" {{ old('subject') == 'Media Inquiry' ? 'selected' : '' }}>Media Inquiry</option>
                <option value="Other" {{ old('subject') == 'Other' ? 'selected' : '' }}>Other</option>
              </select>
              @error('subject') <span class="field-error">{{ $message }}</span> @enderror
            </div>
            <div class="form-group" style="margin-bottom: 24px;">
              <label style="display: block; font-size: 13px; font-weight: 500; color: #2E4156; margin-bottom: 8px;">Message <span class="required">*</span></label>
              <textarea name="message" rows="5" required style="width: 100%; padding: 12px 16px; border: 1px solid #DADFE5; border-radius: 12px; font-size: 14px; font-family: inherit; resize: vertical;">{{ old('message') }}</textarea>
              @error('message') <span class="field-error">{{ $message }}</span> @enderror
            </div>
            <button type="submit" style="width: 100%; background: #041931; color: white; border: none; padding: 14px 32px; font-size: 14px; font-weight: 500; letter-spacing: 0.05em; border-radius: 40px; cursor: pointer; transition: all 0.3s ease;">Send Message →</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- ========= SUBMIT OPPORTUNITY SECTION ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    @if(session('success_opp'))
        <div class="alert alert-success">{{ session('success_opp') }}</div>
    @endif
    @if(session('error_opp'))
        <div class="alert alert-error">{{ session('error_opp') }}</div>
    @endif
    
    <div class="centered-eyebrow fade-up" style="text-align: center; font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px;">Submit Opportunity</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center; font-size: 36px; font-weight: 400;">Capital Mandates & Partnership Proposals</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 700px; margin: 0 auto 40px auto; font-size: 16px; color: #3a4c5e;">Capital mandates, investment opportunities, and partnership proposals are submitted through the ATICC intake process. All submissions are subject to verification, qualification, and institutional review prior to engagement.</p>
    
    <div class="opportunity-form-wrapper" style="max-width: 800px; margin: 0 auto;">
      <div class="opportunity-form" style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
        <form action="{{ route('contact.opportunity') }}" method="POST">
          @csrf
          <div class="form-group" style="margin-bottom: 20px;">
            <label style="display: block; font-size: 13px; font-weight: 500; color: #2E4156; margin-bottom: 8px;">Your Name / Organization <span class="required">*</span></label>
            <input type="text" name="opp_name" value="{{ old('opp_name') }}" required style="width: 100%; padding: 12px 16px; border: 1px solid #DADFE5; border-radius: 12px; font-size: 14px; font-family: inherit;">
            @error('opp_name') <span class="field-error">{{ $message }}</span> @enderror
          </div>
          <div class="form-group" style="margin-bottom: 20px;">
            <label style="display: block; font-size: 13px; font-weight: 500; color: #2E4156; margin-bottom: 8px;">Email Address <span class="required">*</span></label>
            <input type="email" name="opp_email" value="{{ old('opp_email') }}" required style="width: 100%; padding: 12px 16px; border: 1px solid #DADFE5; border-radius: 12px; font-size: 14px; font-family: inherit;">
            @error('opp_email') <span class="field-error">{{ $message }}</span> @enderror
          </div>
          <div class="form-group" style="margin-bottom: 20px;">
            <label style="display: block; font-size: 13px; font-weight: 500; color: #2E4156; margin-bottom: 8px;">Opportunity Type <span class="required">*</span></label>
            <select name="opp_type" required style="width: 100%; padding: 12px 16px; border: 1px solid #DADFE5; border-radius: 12px; font-size: 14px; font-family: inherit; background: white;">
              <option value="Capital Mandate" {{ old('opp_type') == 'Capital Mandate' ? 'selected' : '' }}>Capital Mandate</option>
              <option value="Investment Opportunity" {{ old('opp_type') == 'Investment Opportunity' ? 'selected' : '' }}>Investment Opportunity</option>
              <option value="Partnership Proposal" {{ old('opp_type') == 'Partnership Proposal' ? 'selected' : '' }}>Partnership Proposal</option>
              <option value="Strategic Project" {{ old('opp_type') == 'Strategic Project' ? 'selected' : '' }}>Strategic Project</option>
            </select>
            @error('opp_type') <span class="field-error">{{ $message }}</span> @enderror
          </div>
          <div class="form-group" style="margin-bottom: 24px;">
            <label style="display: block; font-size: 13px; font-weight: 500; color: #2E4156; margin-bottom: 8px;">Opportunity Description <span class="required">*</span></label>
            <textarea name="opp_description" rows="6" placeholder="Please provide detailed information about the opportunity, including sector, geography, value, and any relevant documentation..." required style="width: 100%; padding: 12px 16px; border: 1px solid #DADFE5; border-radius: 12px; font-size: 14px; font-family: inherit; resize: vertical;">{{ old('opp_description') }}</textarea>
            @error('opp_description') <span class="field-error">{{ $message }}</span> @enderror
          </div>
          <button type="submit" style="width: 100%; background: #041931; color: white; border: none; padding: 14px 32px; font-size: 14px; font-weight: 500; letter-spacing: 0.05em; border-radius: 40px; cursor: pointer; transition: all 0.3s ease;">Submit for Review →</button>
          <p style="font-size: 12px; color: #7A8B9B; margin-top: 20px; text-align: center;">All submissions are confidential and will be reviewed by the ATICC Secretariat.</p>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- ========= MAP SECTION ========= -->
<div class="map-section" style="width: 100%; height: 400px; background: #e0e4e8;">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5313202459247!2d-0.025999884229992!3d51.50072957963592!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487602e4e67b5ad3%3A0x6b0f8fbfd3b7f3d0!2sCanary%20Wharf%2C%20London!5e0!3m2!1sen!2suk!4v1700000000000!5m2!1sen!2suk" 
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
  /* Global Styles */
  .wide-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }

  .full-width-white {
    width: 100%;
    background: white;
    padding: 80px 0;
  }

  .full-width-gray {
    width: 100%;
    background: #F5F6F8;
    padding: 80px 0;
  }

  .breadcrumb {
    font-size: 13px;
    letter-spacing: 0.08em;
    text-transform: uppercase;
    color: #C49A6C;
    margin-bottom: 15px;
  }

  .headline {
    font-size: 48px;
    font-weight: 400;
    color: #0e0e0e;
    margin-bottom: 20px;
  }

  .body-text {
    font-size: 16px;
    color: #3A4C5E;
    line-height: 1.7;
  }

  .centered-eyebrow {
    font-size: 13px;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: #C49A6C;
    margin-bottom: 15px;
  }

  .section-title-dark {
    font-size: 48px;
    font-weight: 400;
    color: #0e0e0e;
    margin-bottom: 20px;
  }

  .section-text-dark {
    font-size: 16px;
    color: #3a4c5e;
    line-height: 1.7;
  }

  /* Alert Styles */
  .alert {
    padding: 15px 20px;
    border-radius: 10px;
    margin-bottom: 30px;
    font-size: 14px;
  }
  .alert-success {
    background: #E8F5E9;
    color: #28a745;
    border: 1px solid #28a745;
  }
  .alert-error {
    background: #FEF2E8;
    color: #dc3545;
    border: 1px solid #dc3545;
  }
  
  .required {
    color: #dc3545;
  }
  
  .field-error {
    color: #dc3545;
    font-size: 11px;
    display: block;
    margin-top: 5px;
  }

  /* Form Styles */
  .form-group input:focus,
  .form-group select:focus,
  .form-group textarea:focus {
    outline: none;
    border-color: #031B4E !important;
    box-shadow: 0 0 0 3px rgba(23, 1, 94, 0.1);
  }

  button[type="submit"]:hover {
    background: #031B4E !important;
    transform: translateY(-2px);
  }

  /* Contact Item Hover */
  .contact-item:hover .contact-icon {
    transform: scale(1.05);
    transition: transform 0.2s ease;
  }

  .contact-text a:hover {
    color: #031B4E !important;
  }

  /* Animations */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
    opacity: 0;
    transition: all 0.6s cubic-bezier(0.2, 0.9, 0.4, 1.1);
  }

  .fade-up.revealed { opacity: 1; transform: translateY(0); }
  .fade-up { transform: translateY(30px); }
  .fade-left.revealed { opacity: 1; transform: translateX(0); }
  .fade-left { transform: translateX(-30px); }
  .fade-right.revealed { opacity: 1; transform: translateX(0); }
  .fade-right { transform: translateX(30px); }
  .scale-in.revealed { opacity: 1; transform: scale(1); }
  .scale-in { transform: scale(0.95); }
  .glide-in.revealed { opacity: 1; transform: translateY(0); }
  .glide-in { transform: translateY(20px); }

  /* Responsive */
  @media (max-width: 1100px) {
    .full-width-white, .full-width-gray {
      padding: 60px 0;
    }
    .section-title-dark {
      font-size: 38px;
    }
    .headline {
      font-size: 38px;
    }
  }

  @media (max-width: 768px) {
    .full-width-white, .full-width-gray {
      padding: 40px 0;
    }
    .section-title-dark {
      font-size: 32px;
    }
    .headline {
      font-size: 32px;
    }
    .hero-content h1 {
      max-width: 100% !important;
    }
    .hero-content .body-text {
      max-width: 100% !important;
    }
    .contact-grid {
      flex-direction: column;
    }
    .contact-form-wrapper,
    .contact-info {
      min-width: 100%;
    }
    .contact-form,
    .opportunity-form {
      padding: 25px;
    }
  }

  @media (max-width: 480px) {
    .wide-container {
      padding: 0 15px;
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
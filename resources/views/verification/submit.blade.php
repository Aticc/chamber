@extends("layouts.app")

@section('content')


<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/Verification Submission.jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Submit</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Verification <span>Submission</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">Submit your institutional information to begin the verification process.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="contact-form-wrapper" style="max-width: 800px; margin: 0 auto; background: white; border-radius: 20px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border: 1px solid #E8EBED;">
      <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        
        @if(session('success'))
          <div style="background: #E8F5E9; color: #2E7D32; padding: 15px 20px; border-radius: 2px; margin-bottom: 30px; border-left: 3px solid #2E7D32;">{{ session('success') }}</div>
        @endif
        
        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Legal Entity Name <span style="color: #C62828;">*</span></label>
          <input type="text" name="legal_name" class="aticc-input-field" required style="width: 100%; padding: 12px 14px; border: 1px solid #D9DEE7; border-radius: 2px; font-size: 14px;">
        </div>
        
        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Institution Type <span style="color: #C62828;">*</span></label>
          <select name="institution_type" class="aticc-input-field" required style="width: 100%; padding: 12px 14px; border: 1px solid #D9DEE7; border-radius: 2px;">
            <option value="">Select Type</option>
            <option value="institutional_investor">Institutional Investor</option>
            <option value="development_partner">Development Partner</option>
            <option value="private_sector">Private Sector Leader</option>
            <option value="family_office">Family Office</option>
            <option value="service_partner">Service Partner</option>
          </select>
        </div>
        
        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Primary Contact Email <span style="color: #C62828;">*</span></label>
          <input type="email" name="email" class="aticc-input-field" required style="width: 100%; padding: 12px 14px; border: 1px solid #D9DEE7; border-radius: 2px;">
        </div>
        
        <div class="legal-disclosure" style="border: 1px solid #E8EBED; background-color: #F8F9FA; border-left: 2px solid #C49A6C; padding: 24px; margin: 32px 0; border-radius: 12px;">
          <h4 style="font-size: 11px; font-weight: 700; color: #041931; margin-bottom: 12px; text-transform: uppercase;">VERIFICATION NOTICE</h4>
          <p style="font-size: 12px; color: #5D6F7F; line-height: 1.5;">All submissions are subject to internal review, verification, and institutional coordination procedures. ATICC reserves the right to request supplementary documentation.</p>
        </div>
        
        <button type="submit" class="aticc-submit" style="background-color: #041931; color: #FFFFFF; font-weight: 600; text-transform: uppercase; letter-spacing: 1px; padding: 16px 32px; border-radius: 4px; border: none; cursor: pointer; width: 100%; transition: all 0.3s ease;">Submit Verification →</button>
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
  
  /* Form Styles */
  .aticc-input-field {
    transition: all 0.3s ease;
  }
  
  .aticc-input-field:focus {
    outline: none;
    border-color: var(--color-accent);
    box-shadow: 0 0 0 2px rgba(196, 154, 108, 0.1);
  }
  
  .aticc-submit:hover {
    background-color: var(--color-accent) !important;
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(4, 25, 49, 0.12);
  }
  
  /* Animations */
  .fade-up, .fade-left, .fade-right, .scale-in, .glide-in {
    opacity: 0;
    transform: translateY(28px);
    transition: opacity 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1), transform 0.7s cubic-bezier(0.2, 0.9, 0.3, 1.1);
  }
  
  .fade-up.revealed {
    opacity: 1;
    transform: translateY(0);
  }
  
  .delay-2 { transition-delay: 0.2s; }
  
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
    .contact-form-wrapper {
      padding: 25px !important;
      margin: 0 15px;
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
    /* Hide image overlay on mobile for better text visibility */
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
@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/STRATEGIC PARTNERSHIPS.jpeg') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 55%; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Contact / Strategic Partnership</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Strategic <span>Partnerships</span></h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%; line-height: 1.5;">Engage with ATICC through bilateral partnerships, institutional alliances, and collaborative frameworks.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">STRATEGIC PARTNERSHIPS</div>
    <div class="large-statement fade-up delay-1">Partner With ATICC</div>
    <div class="supporting-text fade-up delay-2">ATICC welcomes strategic partnership proposals from institutional investors, development finance institutions, trade organizations, and corporate entities aligned with our continental mandate.</div>
    
    <div class="framework-split" style="margin-top: 50px;">
      <div class="framework-left fade-left">
        <h3>Partnership Framework</h3>
        <p>All partnership proposals undergo institutional review, alignment assessment, and strategic validation prior to formal engagement.</p>
      </div>
      <div class="framework-right fade-right">
        <p><strong>Institutional Alliances</strong> -Strategic cooperation with development institutions</p>
        <p style="margin-top: 15px;"><strong>Corporate Partnerships</strong> -Private sector engagement and collaboration</p>
        <p style="margin-top: 15px;"><strong>Technical Cooperation</strong> -Knowledge sharing and capacity building</p>
      </div>
    </div>
    
    <div class="contact-form-wrapper" style="max-width: 800px; margin: 50px auto 0; background: white; border-radius: 24px; padding: 50px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border: 1px solid #E8EBED;">
      <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <input type="hidden" name="form_type" value="partnership">
        
        @if(session('success'))
          <div style="background: #E8F5E9; color: #2E7D32; padding: 15px; border-radius: 12px; margin-bottom: 30px; border-left: 3px solid #2E7D32;">{{ session('success') }}</div>
        @endif

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Organization Name <span style="color: #C62828;">*</span></label>
          <input type="text" name="institution" class="aticc-input-field" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Primary Contact Person <span style="color: #C62828;">*</span></label>
          <input type="text" name="representative" class="aticc-input-field" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Title / Position</label>
          <input type="text" name="title" class="aticc-input-field">
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Email Address <span style="color: #C62828;">*</span></label>
          <input type="email" name="email" class="aticc-input-field" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Phone Number</label>
          <input type="tel" name="phone" class="aticc-input-field">
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Partnership Category</label>
          <select name="classification" class="aticc-input-field">
            <option value="">Select Category</option>
            <option value="institutional">Institutional Alliance</option>
            <option value="corporate">Corporate Partnership</option>
            <option value="development">Development Finance Partnership</option>
            <option value="technical">Technical Cooperation</option>
          </select>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Proposal Summary <span style="color: #C62828;">*</span></label>
          <textarea name="message" rows="6" class="aticc-input-field" required></textarea>
          <small style="font-size: 11px; color: #7A8B9B; display: block; margin-top: 5px;">Outline the strategic value, scope, and objectives of the proposed partnership.</small>
        </div>

        <div class="legal-disclosure" style="border: 1px solid #E8EBED; background-color: #F8F9FA; border-radius: 16px; padding: 24px; margin: 32px 0;">
          <h4 style="font-size: 11px; font-weight: 700; color: #041931; margin-bottom: 12px; text-transform: uppercase;">PARTNERSHIP NOTICE</h4>
          <p style="font-size: 12px; color: #5D6F7F; line-height: 1.5;">All partnership proposals are subject to institutional review, alignment assessment, and strategic validation prior to formal engagement. ATICC reserves the right to request supplementary documentation where necessary.</p>
        </div>

        <button type="submit" class="aticc-submit">SUBMIT PARTNERSHIP PROPOSAL</button>
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
    width: 100%;
    border: none;
    cursor: pointer;
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
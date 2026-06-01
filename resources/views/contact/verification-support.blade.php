@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/ATICC image .png') }}'); background-position: 60% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed">Home / Contact / Verification Support</div>
    <h1 class="headline fade-up revealed">Verification Support</h1>
    <div class="body-text fade-up delay-2 revealed">Request verification services, compliance validation, and institutional credentialing support.</div>
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
        <p><strong>Institutional Verification</strong> -Validate corporate credentials and registration</p>
        <p style="margin-top: 15px;"><strong>Compliance Validation</strong> -Ensure regulatory alignment</p>
        <p style="margin-top: 15px;"><strong>Due Diligence</strong> -Comprehensive background verification</p>
      </div>
    </div>
    
    <div class="contact-form-wrapper" style="max-width: 800px; margin: 50px auto 0; background: white; border-radius: 24px; padding: 50px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
      <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <input type="hidden" name="form_type" value="verification">
        
        @if(session('success'))
          <div style="background: #E8F5E9; color: #2E7D32; padding: 15px; border-radius: 12px; margin-bottom: 30px;">{{ session('success') }}</div>
        @endif

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600;">Requesting Entity <span style="color: #C62828;">*</span></label>
          <input type="text" name="institution" class="aticc-input-field" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600;">Contact Person <span style="color: #C62828;">*</span></label>
          <input type="text" name="representative" class="aticc-input-field" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600;">Email <span style="color: #C62828;">*</span></label>
          <input type="email" name="email" class="aticc-input-field" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600;">Verification Service Type</label>
          <select name="classification" class="aticc-input-field">
            <option value="">Select Service</option>
            <option value="institutional">Institutional Verification</option>
            <option value="compliance">Compliance Validation</option>
            <option value="due_diligence">Due Diligence Support</option>
            <option value="credentialing">Credentialing Services</option>
          </select>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600;">Additional Information <span style="color: #C62828;">*</span></label>
          <textarea name="message" rows="5" class="aticc-input-field" required></textarea>
        </div>

        <button type="submit" class="aticc-submit">REQUEST VERIFICATION SUPPORT</button>
      </form>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .large-statement { font-size: 48px; font-weight: 700; color: #17015e; margin-bottom: 20px; text-align: center; }
  .supporting-text { font-size: 16px; color: #4A5E72; max-width: 700px; margin: 0 auto; text-align: center; line-height: 1.6; }
  .framework-split { display: flex; gap: 60px; align-items: center; margin-bottom: 50px; }
  .framework-left { flex: 1; }
  .framework-left h3 { font-size: 28px; font-weight: 700; color: #17015e; margin-bottom: 15px; }
  .framework-right { flex: 1; }
  .framework-right p { padding: 12px 20px; background: #F8F9FA; border-radius: 12px; border-left: 3px solid #C49A6C; }
  .aticc-input-field { width: 100%; padding: 14px 16px; border: 1px solid #D9DEE7; border-radius: 12px; }
  .aticc-input-field:focus { border-color: #17015e; outline: none; }
  .aticc-submit { background-color: #17015e; color: white; font-weight: 700; text-transform: uppercase; padding: 16px 32px; border-radius: 40px; width: 100%; border: none; cursor: pointer; }
  .aticc-submit:hover { background-color: #2a0a7a; transform: translateY(-2px); }
  @media (max-width: 768px) { .framework-split { flex-direction: column; gap: 30px; } .large-statement { font-size: 32px; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
</script>

@endsection
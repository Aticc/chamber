@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/ATICC image .png') }}'); background-position: 60% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed">Home / Contact / Institutional Inquiry</div>
    <h1 class="headline fade-up revealed">Institutional Inquiry</h1>
    <div class="body-text fade-up delay-2 revealed">Submit a formal inquiry to the ATICC Secretariat through our centralized coordination framework.</div>
  </div>
</div>



<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">INSTITUTIONAL INQUIRY</div>
    <div class="large-statement fade-up delay-1">Submit Your Inquiry</div>
    <div class="supporting-text fade-up delay-2">All institutional inquiries are processed through the ATICC Secretariat Coordination Desk. Please provide complete and accurate information to facilitate timely review.</div>
    
    <div class="contact-form-wrapper" style="max-width: 800px; margin: 50px auto 0; background: white; border-radius: 24px; padding: 50px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
      <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <input type="hidden" name="form_type" value="inquiry">
        
        @if(session('success'))
          <div style="background: #E8F5E9; color: #2E7D32; padding: 15px 20px; border-radius: 12px; margin-bottom: 30px;">{{ session('success') }}</div>
        @endif

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Full Name <span style="color: #C62828;">*</span></label>
          <input type="text" name="representative" class="aticc-input-field" value="{{ old('representative') }}" required>
          @error('representative')<span style="color: #C62828; font-size: 11px;">{{ $message }}</span>@enderror
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Institution / Organization <span style="color: #C62828;">*</span></label>
          <input type="text" name="institution" class="aticc-input-field" value="{{ old('institution') }}" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Corporate Email <span style="color: #C62828;">*</span></label>
          <input type="email" name="email" class="aticc-input-field" value="{{ old('email') }}" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Contact Number</label>
          <input type="tel" name="phone" class="aticc-input-field" value="{{ old('phone') }}">
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Inquiry Type</label>
          <select name="classification" class="aticc-input-field">
            <option value="">Select Inquiry Type</option>
            <option value="general">General Institutional Inquiry</option>
            <option value="membership">Membership Information</option>
            <option value="trade">Trade & Investment Inquiry</option>
            <option value="verification">Verification Services</option>
            <option value="events">Events & Missions</option>
          </select>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600; color: #041931; margin-bottom: 8px;">Inquiry Details <span style="color: #C62828;">*</span></label>
          <textarea name="message" rows="5" class="aticc-input-field" required>{{ old('message') }}</textarea>
        </div>

        <div class="legal-disclosure" style="border: 1px solid #D9DEE7; background-color: #F7F7F5; border-radius: 16px; padding: 24px; margin: 32px 0;">
          <h4 style="font-size: 11px; font-weight: 700; color: #041931;">SUBMISSION ACKNOWLEDGMENT</h4>
          <p style="font-size: 12px; color: #5D6F7F;">By submitting this inquiry, you acknowledge that ATICC will review your request and respond through official channels within 5-7 business days.</p>
        </div>

        <button type="submit" class="aticc-submit">SUBMIT INQUIRY</button>
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
  .aticc-input-field { width: 100%; padding: 14px 16px; border: 1px solid #D9DEE7; border-radius: 12px; font-size: 14px; }
  .aticc-input-field:focus { border-color: #17015e; outline: none; box-shadow: 0 0 0 2px rgba(23,1,94,0.1); }
  .aticc-submit { background-color: #17015e; color: white; font-weight: 700; text-transform: uppercase; padding: 16px 32px; border-radius: 40px; width: 100%; border: none; cursor: pointer; }
  .aticc-submit:hover { background-color: #2a0a7a; transform: translateY(-2px); }
  @media (max-width: 768px) { .large-statement { font-size: 32px; } .contact-form-wrapper { padding: 25px !important; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .grid-card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
</script>

@endsection
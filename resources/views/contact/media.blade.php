@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/ATICC image .png') }}'); background-position: 60% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed">Home / Contact / Media Relations</div>
    <h1 class="headline fade-up revealed">Media Relations</h1>
    <div class="body-text fade-up delay-2 revealed">ATICC Media Relations & Public Communications Desk – Press inquiries, interviews, and official statements.</div>
  </div>
</div>



<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">MEDIA RELATIONS</div>
    <div class="large-statement fade-up delay-1">Contact the Media Desk</div>
    <div class="supporting-text fade-up delay-2">All media inquiries are reviewed by the ATICC Communications Desk. Please allow 48-72 hours for response.</div>
    
    <div class="contact-form-wrapper" style="max-width: 800px; margin: 50px auto 0; background: white; border-radius: 24px; padding: 50px; box-shadow: 0 4px 20px rgba(0,0,0,0.05);">
      <form action="{{ route('contact.send') }}" method="POST">
        @csrf
        <input type="hidden" name="form_type" value="media">
        
        @if(session('success'))
          <div style="background: #E8F5E9; color: #2E7D32; padding: 15px; border-radius: 12px; margin-bottom: 30px;">{{ session('success') }}</div>
        @endif

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600;">Media Outlet / Organization <span style="color: #C62828;">*</span></label>
          <input type="text" name="institution" class="aticc-input-field" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600;">Journalist Name <span style="color: #C62828;">*</span></label>
          <input type="text" name="representative" class="aticc-input-field" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600;">Email <span style="color: #C62828;">*</span></label>
          <input type="email" name="email" class="aticc-input-field" required>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600;">Phone Number</label>
          <input type="tel" name="phone" class="aticc-input-field">
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600;">Inquiry Type</label>
          <select name="classification" class="aticc-input-field">
            <option value="">Select Type</option>
            <option value="press_release">Press Release Request</option>
            <option value="interview">Interview Request</option>
            <option value="statement">Official Statement Request</option>
            <option value="media_accreditation">Media Accreditation</option>
          </select>
        </div>

        <div class="form-group" style="margin-bottom: 25px;">
          <label style="display: block; font-size: 13px; font-weight: 600;">Message / Inquiry Details <span style="color: #C62828;">*</span></label>
          <textarea name="message" rows="5" class="aticc-input-field" required></textarea>
        </div>

        <div class="legal-disclosure" style="border: 1px solid #D9DEE7; background-color: #F7F7F5; border-radius: 16px; padding: 24px; margin: 32px 0;">
          <h4 style="font-size: 11px; font-weight: 700; color: #041931;">MEDIA PROTOCOL</h4>
          <p style="font-size: 12px; color: #5D6F7F;">All media inquiries are reviewed by the ATICC Communications Desk. Please allow 48-72 hours for response.</p>
        </div>

        <button type="submit" class="aticc-submit">SUBMIT MEDIA INQUIRY</button>
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
  .aticc-input-field { width: 100%; padding: 14px 16px; border: 1px solid #D9DEE7; border-radius: 12px; }
  .aticc-input-field:focus { border-color: #17015e; outline: none; }
  .aticc-submit { background-color: #17015e; color: white; font-weight: 700; text-transform: uppercase; padding: 16px 32px; border-radius: 40px; width: 100%; border: none; cursor: pointer; }
  .aticc-submit:hover { background-color: #2a0a7a; transform: translateY(-2px); }
  @media (max-width: 768px) { .large-statement { font-size: 32px; } .contact-form-wrapper { padding: 25px !important; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
</script>

@endsection
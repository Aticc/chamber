@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC web pics 2.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Submit</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Verification Submission</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">Submit your institutional information to begin the verification process.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="contact-form-wrapper" style="max-width: 800px; margin: 0 auto; background: white; border-radius: 2px; padding: 40px; box-shadow: 0 4px 20px rgba(0,0,0,0.05); border: 1px solid #D9DEE7;">
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
        
        <div class="legal-disclosure" style="border: 1px solid #D9DEE7; background-color: #F7F7F5; border-left: 2px solid #C7CCD6; padding: 24px; margin: 32px 0;">
          <h4 style="font-size: 11px; font-weight: 700; color: #041931; margin-bottom: 12px; text-transform: uppercase;">VERIFICATION NOTICE</h4>
          <p style="font-size: 12px; color: #5D6F7F; line-height: 1.5;">All submissions are subject to internal review, verification, and institutional coordination procedures. ATICC reserves the right to request supplementary documentation.</p>
        </div>
        
        <button type="submit" class="aticc-submit" style="background-color: #041931; color: #FFFFFF; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; padding: 16px 32px; border-radius: 2px; border: none; cursor: pointer; width: 100%;">Submit Verification →</button>
      </form>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .aticc-input-field:focus { outline: none; border-color: #041931; box-shadow: 0 0 0 2px rgba(4, 25, 49, 0.1); }
  @media (max-width: 768px) { .contact-form-wrapper { padding: 25px !important; } }
</style>
@endsection
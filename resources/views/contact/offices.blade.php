@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/ATICC image .png') }}'); background-position: 60% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed">Home / Contact / Office Locations</div>
    <h1 class="headline fade-up revealed">Office Locations</h1>
    <div class="body-text fade-up delay-2 revealed">ATICC institutional offices, regional coordination hubs, and representative locations across Africa.</div>
  </div>
</div>



<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">OUR PRESENCE</div>
    <div class="large-statement fade-up delay-1">Global & Regional Offices</div>
    <div class="supporting-text fade-up delay-2">ATICC maintains strategic office locations to facilitate continental coordination, institutional engagement, and cross-border operational support.</div>
    
    <!-- Headquarters -->
    <div class="headquarters-card fade-up delay-1" style="background: linear-gradient(135deg, #17015e 0%, #2a0a7a 100%); border-radius: 24px; padding: 50px; margin-top: 50px; color: white;">
      <div style="display: flex; align-items: center; gap: 15px; margin-bottom: 30px;">
        <div style="width: 60px; height: 60px; background: rgba(255,255,255,0.2); border-radius: 50%; display: flex; align-items: center; justify-content: center;">
          <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
        </div>
        <h2 style="font-size: 28px; font-weight: 700;">Headquarters</h2>
      </div>
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
        <div>
          <p style="font-weight: 600; margin-bottom: 8px;">Lagos, Nigeria</p>
          <p style="opacity: 0.9; line-height: 1.6;">ATICC Central Secretariat<br>Plot 14B, Admiralty Way, Lekki Phase 1<br>Lagos, Nigeria</p>
          <p style="margin-top: 12px;"><strong>Tel:</strong> +234 1 234 5678</p>
          <p><strong>Email:</strong> secretariat@aticc.org</p>
        </div>
        <div>
          <p style="font-weight: 600; margin-bottom: 8px;">Hours of Operation</p>
          <p style="opacity: 0.9;">Monday – Thursday: 9:00 AM – 5:00 PM WAT<br>Friday: 9:00 AM – 1:00 PM WAT</p>
        </div>
      </div>
    </div>
    
    <!-- Regional Offices Grid -->
    <div class="grid-5" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 32px; margin-top: 50px;">
      <div class="grid-card glide-in delay-1">
        <h4>🌍 West Africa Regional Hub</h4>
        <p>Accra, Ghana</p>
        <p style="font-size: 13px; color: #C49A6C;">+233 30 123 4567</p>
        <p style="font-size: 13px;">westafrica@aticc.org</p>
      </div>
      <div class="grid-card glide-in delay-2">
        <h4>🌍 East Africa Regional Hub</h4>
        <p>Nairobi, Kenya</p>
        <p style="font-size: 13px; color: #C49A6C;">+254 20 123 4567</p>
        <p style="font-size: 13px;">eastafrica@aticc.org</p>
      </div>
      <div class="grid-card glide-in delay-3">
        <h4>🌍 Southern Africa Hub</h4>
        <p>Johannesburg, South Africa</p>
        <p style="font-size: 13px; color: #C49A6C;">+27 11 123 4567</p>
        <p style="font-size: 13px;">southernafrica@aticc.org</p>
      </div>
      <div class="grid-card glide-in delay-4">
        <h4>🌍 North Africa Hub</h4>
        <p>Casablanca, Morocco</p>
        <p style="font-size: 13px; color: #C49A6C;">+212 522 123 456</p>
        <p style="font-size: 13px;">northafrica@aticc.org</p>
      </div>
      <div class="grid-card glide-in delay-5">
        <h4>🌍 Central Africa Hub</h4>
        <p>Yaoundé, Cameroon</p>
        <p style="font-size: 13px; color: #C49A6C;">+237 222 123 456</p>
        <p style="font-size: 13px;">centralafrica@aticc.org</p>
      </div>
      <div class="grid-card glide-in delay-6">
        <h4>🌐 International Representative</h4>
        <p>London, United Kingdom</p>
        <p style="font-size: 13px; color: #C49A6C;">+44 20 1234 5678</p>
        <p style="font-size: 13px;">international@aticc.org</p>
      </div>
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
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .full-width-gray { width: 100%; background: #F5F6F8; padding: 80px 0; }
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .large-statement { font-size: 48px; font-weight: 700; color: #17015e; margin-bottom: 20px; text-align: center; }
  .supporting-text { font-size: 16px; color: #4A5E72; max-width: 700px; margin: 0 auto; text-align: center; line-height: 1.6; }
  .grid-card { background: #F8F9FA; padding: 32px 28px; border-radius: 16px; transition: all 0.3s ease; }
  .grid-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
  .grid-card h4 { font-size: 18px; font-weight: 700; color: #0e0e0e; margin-bottom: 15px; }
  @media (max-width: 768px) { .large-statement { font-size: 32px; } .headquarters-card { padding: 30px !important; } }
</style>

<script>
  const animatedElements = document.querySelectorAll('.fade-up, .glide-in, .grid-card');
  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('revealed'); observer.unobserve(entry.target); } });
  }, { threshold: 0.15 });
  animatedElements.forEach(el => observer.observe(el));
</script>

@endsection
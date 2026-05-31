@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC web pics 2.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Framework</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Verification Framework</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">ATICC's verification framework ensures institutional integrity, transaction credibility, and trusted ecosystem participation.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">FRAMEWORK OVERVIEW</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Structured Verification Pathway</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">All participants, opportunities, and capital mandates enter through a defined verification pathway to ensure validation, alignment, and execution readiness.</p>
  </div>
</div>

<div class="full-width-gray">
  <div class="wide-container">
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center;">
      <div class="grid-card" style="flex: 1; min-width: 250px; text-align: center; background: white; padding: 32px 28px; border-radius: 16px;">
        <div style="font-size: 42px; font-weight: 700; color: #031B4E; margin-bottom: 15px;">01</div>
        <h4>Identity Verification</h4>
        <p>Legal entity verification and beneficial ownership disclosure</p>
      </div>
      <div class="grid-card" style="flex: 1; min-width: 250px; text-align: center; background: white; padding: 32px 28px; border-radius: 16px;">
        <div style="font-size: 42px; font-weight: 700; color: #031B4E; margin-bottom: 15px;">02</div>
        <h4>Compliance Screening</h4>
        <p>KYC, AML, and regulatory compliance verification</p>
      </div>
      <div class="grid-card" style="flex: 1; min-width: 250px; text-align: center; background: white; padding: 32px 28px; border-radius: 16px;">
        <div style="font-size: 42px; font-weight: 700; color: #031B4E; margin-bottom: 15px;">03</div>
        <h4>Capability Assessment</h4>
        <p>Technical and financial capacity audit</p>
      </div>
    </div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="framework-split">
      <div class="framework-left fade-left">
        <h3 style="font-size: 28px;">Continuous Validation</h3>
        <p style="font-size: 16px;">The verification framework is not a one-time event. ATICC maintains ongoing validation to ensure member behavior remains aligned with institutional integrity standards.</p>
      </div>
      <div class="framework-right fade-right">
        <ul class="bullet-list">
          <li>Periodic review of member status and activity</li>
          <li>Continuous compliance monitoring</li>
          <li>Real-time integrity assessment</li>
          <li>Immediate action on non-compliance</li>
        </ul>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .full-width-gray { width: 100%; background: #F5F6F8; padding: 80px 0; }
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .section-title-dark { font-size: 48px; font-weight: 700; color: #0e0e0e; margin-bottom: 20px; text-align: center; }
  .section-text-dark { font-size: 16px; color: #3a4c5e; line-height: 1.7; }
  .grid-card { background: white; padding: 32px 28px; border-radius: 16px; box-shadow: 0 2px 10px rgba(0,0,0,0.05); }
  .grid-card h4 { font-size: 20px; font-weight: 700; margin-bottom: 12px; color: #0e0e0e; }
  .grid-card p { font-size: 14px; color: #4a5e72; line-height: 1.5; }
  .framework-split { display: flex; gap: 60px; align-items: flex-start; }
  .bullet-list { list-style: none; padding: 0; }
  .bullet-list li { padding: 8px 28px; font-size: 15px; color: #1A1A1A; border-bottom: 1px solid #E8EBED; }
  .bullet-list li::before { content: "✓"; color: #031B4E; margin-right: 12px; font-weight: bold; }
  @media (max-width: 768px) { .framework-split { flex-direction: column; gap: 30px; } .grid-5 { flex-direction: column; } }
</style>
@endsection
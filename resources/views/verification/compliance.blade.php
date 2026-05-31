@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC web pics 2.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Compliance</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Compliance Protocols</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">ATICC maintains rigorous compliance protocols aligned with international regulatory standards and institutional governance requirements.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">COMPLIANCE PROTOCOLS</div>
    <div class="framework-split">
      <div class="split-left fade-left">
        <h3 style="font-size: 28px;">KYC & AML Framework</h3>
        <ul class="bullet-list">
          <li>Know Your Customer (KYC) procedures</li>
          <li>Anti-Money Laundering (AML) screening</li>
          <li>Sanctions list verification</li>
          <li>PEP (Politically Exposed Persons) checks</li>
        </ul>
      </div>
      <div class="split-right fade-right">
        <h3 style="font-size: 28px;">Regulatory Alignment</h3>
        <ul class="bullet-list">
          <li>International financial regulations</li>
          <li>Cross-border trade compliance</li>
          <li>Data protection standards</li>
          <li>Industry-specific requirements</li>
        </ul>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .framework-split { display: flex; gap: 60px; align-items: flex-start; }
  .split-left, .split-right { flex: 1; }
  .bullet-list { list-style: none; padding: 0; }
  .bullet-list li { padding: 8px 0; font-size: 15px; color: #1A1A1A; border-bottom: 1px solid #E8EBED; }
  .bullet-list li::before { content: "✓"; color: #031B4E; margin-right: 12px; font-weight: bold; }
  @media (max-width: 768px) { .framework-split { flex-direction: column; gap: 30px; } }
</style>
@endsection
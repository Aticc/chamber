@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC web pics 2.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Due Diligence</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Due Diligence Standards</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">ATICC applies rigorous due diligence standards across all institutional engagements and transaction validations.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">DUE DILIGENCE STANDARDS</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Rigorous Validation Framework</h2>
    <p class="section-text-dark fade-up delay-2" style="text-align: center; max-width: 800px; margin: 0 auto;">Every project, trade opportunity, or institutional participant listed on the platform undergoes comprehensive due diligence before engagement.</p>
  </div>
</div>

<div class="full-width-gray">
  <div class="wide-container">
    <div class="policy-split">
      <div class="split-left fade-left">
        <h3 style="font-size: 28px;">Due Diligence Components</h3>
        <ul class="bullet-list">
          <li>Identity & Statutory Audit</li>
          <li>Beneficial Ownership Verification</li>
          <li>Financial Capacity Assessment</li>
          <li>Technical Capability Review</li>
          <li>Regulatory Compliance Check</li>
        </ul>
      </div>
      <div class="split-right fade-right">
        <h3 style="font-size: 28px;">Third-Party Validation</h3>
        <p style="font-size: 16px;">ATICC integrates with global risk agencies and independent auditors to provide external assurance for high-value transactions and institutional verifications.</p>
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
  .policy-split { display: flex; gap: 60px; align-items: flex-start; }
  .split-left, .split-right { flex: 1; }
  .bullet-list { list-style: none; padding: 0; }
  .bullet-list li { padding: 8px 0; font-size: 15px; color: #1A1A1A; border-bottom: 1px solid #E8EBED; }
  .bullet-list li::before { content: "✓"; color: #031B4E; margin-right: 12px; font-weight: bold; }
  @media (max-width: 768px) { .policy-split { flex-direction: column; gap: 30px; } }
</style>
@endsection
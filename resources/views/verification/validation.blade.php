@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC web pics 2.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Validation</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Institutional Validation</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">ATICC validates institutional participants against defined credibility, capability, and execution readiness standards.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">INSTITUTIONAL VALIDATION</div>
    <h2 class="section-title-dark fade-up delay-1" style="text-align: center;">Validation Framework</h2>
    <div class="grid-5" style="display: flex; gap: 32px; flex-wrap: wrap; justify-content: center; margin-top: 40px;">
      <div class="grid-card" style="flex: 1; min-width: 250px;">
        <h4>Credibility Assessment</h4>
        <p>Verification of institutional track record and market reputation</p>
      </div>
      <div class="grid-card" style="flex: 1; min-width: 250px;">
        <h4>Capability Review</h4>
        <p>Assessment of technical and operational capacity</p>
      </div>
      <div class="grid-card" style="flex: 1; min-width: 250px;">
        <h4>Readiness Evaluation</h4>
        <p>Determination of execution readiness status</p>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .section-title-dark { font-size: 48px; font-weight: 700; color: #0e0e0e; margin-bottom: 20px; text-align: center; }
  .grid-card { background: #F5F6F8; padding: 32px 28px; border-radius: 16px; }
  .grid-card h4 { font-size: 20px; font-weight: 700; margin-bottom: 12px; color: #0e0e0e; }
  .grid-card p { font-size: 14px; color: #4a5e72; line-height: 1.5; }
  @media (max-width: 768px) { .grid-5 { flex-direction: column; } }
</style>
@endsection
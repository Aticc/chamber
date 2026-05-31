@extends("layouts.app")

@section('content')

@include('layouts.nav')

<div id="hero" class="hero-section" style="position: relative; background-color: white; overflow: hidden; min-height: 60vh;">
  <div style="position: absolute; top: 0; right: 0; width: 55%; height: 100%; pointer-events: none;">
    <div style="position: absolute; top: 0; right: 0; width: 100%; height: 100%; background: url('{{ asset('assets/images/ATICC web pics 2.png') }}') no-repeat right center; background-size: cover; mask-image: linear-gradient(to left, black 71%, transparent 100%); -webkit-mask-image: linear-gradient(to left, black 71%, transparent 100%);"></div>
  </div>
  <div class="hero-content" style="position: relative; z-index: 2; max-width: 1400px; margin: 0; padding: 60px 40px;">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / Verification / Risk Assessment</div>
    <h1 class="headline fade-up revealed" style="max-width: 55%;">Risk Assessment</h1>
    <div class="body-text fade-up delay-2 revealed" style="max-width: 50%;">ATICC incorporates structured risk-awareness protocols across the transaction lifecycle to identify potential execution barriers.</div>
  </div>
</div>

<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up">RISK ASSESSMENT FRAMEWORK</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 50px; flex-wrap: wrap;">
      <div class="product-card" style="flex: 1;">
        <h4>Operational Risk</h4>
        <p>Assessment of execution capability, technical infrastructure, and process integrity</p>
      </div>
      <div class="product-card" style="flex: 1;">
        <h4>Regulatory Risk</h4>
        <p>Compliance with local and international regulatory frameworks</p>
      </div>
      <div class="product-card" style="flex: 1;">
        <h4>Financial Risk</h4>
        <p>Evaluation of capital adequacy, transaction viability, and counterparty exposure</p>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
  .full-width-white { width: 100%; background: white; padding: 80px 0; }
  .centered-eyebrow { font-size: 13px; letter-spacing: 0.15em; text-transform: uppercase; color: #C49A6C; margin-bottom: 15px; text-align: center; }
  .products-grid { display: flex; gap: 32px; flex-wrap: wrap; }
  .product-card { flex: 1; background: #F5F6F8; padding: 32px 28px; border-radius: 16px; }
  .product-card h4 { font-size: 20px; font-weight: 700; margin-bottom: 12px; color: #0e0e0e; }
  .product-card p { font-size: 14px; color: #4a5e72; line-height: 1.5; }
  @media (max-width: 768px) { .products-grid { flex-direction: column; } }
</style>
@endsection
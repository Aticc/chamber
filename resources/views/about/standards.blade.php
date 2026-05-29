@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div id="hero" class="hero-section" style="background-image: url('{{ asset('assets/images/IMG_0950.png') }}'); background-position: 70% center;">
  <div class="hero-content">
    <div class="breadcrumb fade-up revealed" style="margin-bottom: 20px;">Home / About / Institutional Standards</div>
    <h1 class="headline fade-up revealed">Institutional <span style="color: #17015e;">Standards</span></h1>
    <div class="body-text fade-up delay-2 revealed">ATICC maintains rigorous institutional standards across all operations, ensuring alignment with global best practices and regulatory frameworks.</div>
  </div>
</div>

<!-- ========= STANDARDS CONTENT ========= -->
<div class="full-width-white">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">OPERATIONAL STANDARDS</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>Verification Standards</h4>
        <p>Defined protocols for identity verification, KYC, and AML compliance.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>Onboarding Standards</h4>
        <p>Structured accession process for verified stakeholders.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>Transaction Standards</h4>
        <p>Controlled execution framework for institutional-grade transactions.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= COMPLIANCE FRAMEWORK ========= -->
<div class="full-width-gray">
  <div class="wide-container">
    <div class="centered-eyebrow fade-up" style="text-align: center;">COMPLIANCE FRAMEWORK</div>
    <div class="products-grid" style="display: flex; gap: 32px; margin-top: 60px; flex-wrap: wrap;">
      <div class="product-card glide-in delay-1" style="flex: 1;">
        <h4>Regulatory Alignment</h4>
        <p>Alignment with international regulatory and AML/KYC requirements.</p>
      </div>
      <div class="product-card glide-in delay-2" style="flex: 1;">
        <h4>Reporting & Accountability</h4>
        <p>Structured reporting and institutional oversight mechanisms.</p>
      </div>
      <div class="product-card glide-in delay-3" style="flex: 1;">
        <h4>Audit
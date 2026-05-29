@extends('layouts.app')

@section('content')
@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div class="subpage-hero">
  <div class="subpage-hero-content">
    <div class="breadcrumb">Home / Membership / Verification Standards</div>
    <h1>Verification Standards</h1>
    <p>Trust & Verification (T&V) Protocol requirements</p>
  </div>
</div>

<!-- ========= OVERVIEW SECTION ========= -->
<div class="subpage-section">
  <div class="wide-container">
    <div class="centered-eyebrow">VERIFICATION STANDARDS</div>
    <h2 class="section-title">Trust & Verification (T&V) Protocol</h2>
    <p class="section-description">ATICC operates on strict gatekeeper logic: Zero Verification → Zero Access → Zero Transaction Visibility.</p>
    
    <div class="verification-grid">
      <div class="verification-card">
        <h3>Identity & Statutory Audit</h3>
        <p>Rigorous legal and beneficial-ownership verification of all participating entities.</p>
      </div>
      <div class="verification-card">
        <h3>Compliance & AML Screening</h3>
        <p>Anti-money laundering and regulatory "bad faith" filtering.</p>
      </div>
      <div class="verification-card">
        <h3>Execution Capability Assessment</h3>
        <p>Auditing the technical and financial capacity of the entity to deliver.</p>
      </div>
      <div class="verification-card">
        <h3>Integrity Enforcement</h3>
        <p>Zero-tolerance policy with expulsion and blacklisting for non-compliance.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= TRIPLE FILTER ========= -->
<div class="subpage-section gray-bg">
  <div class="wide-container">
    <div class="centered-eyebrow">TRIPLE-FILTER TEST</div>
    <h2 class="section-title">Opportunity & Asset Screening</h2>
    <div class="filter-grid">
      <div class="filter-card">
        <div class="filter-number">01</div>
        <h4>Commercial Viability</h4>
        <p>Can it generate returns?</p>
      </div>
      <div class="filter-card">
        <div class="filter-number">02</div>
        <h4>Regulatory Alignment</h4>
        <p>Is it legally sound?</p>
      </div>
      <div class="filter-card">
        <div class="filter-number">03</div>
        <h4>Economic Contribution</h4>
        <p>Does it deliver measurable impact?</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= DOCUMENTATION ========= -->
<div class="subpage-section">
  <div class="wide-container">
    <div class="centered-eyebrow">REQUIRED DOCUMENTATION</div>
    <h2 class="section-title">Documents Required for Verification</h2>
    <div class="docs-grid">
      <div class="doc-card">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
        </svg>
        <h4>Certificate of Incorporation</h4>
      </div>
      <div class="doc-card">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
        </svg>
        <h4>Corporate Profile</h4>
      </div>
      <div class="doc-card">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
        </svg>
        <h4>Proof of Address</h4>
      </div>
      <div class="doc-card">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
          <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
          <polyline points="14 2 14 8 20 8"/>
        </svg>
        <h4>Authorized Representative ID</h4>
      </div>
    </div>
  </div>
</div>

<!-- ========= CTA ========= -->
<div class="subpage-cta">
  <div class="wide-container">
    <h3>Ready to begin the verification process?</h3>
    <a href="{{ route('membership.apply') }}" class="cta-button">Start Application →</a>
  </div>
</div>

@include('layouts.footer')

<style>
  /* Same styles with additions */
  .subpage-hero {
    background: linear-gradient(135deg, #F5F6F8 0%, #EDEFF2 100%);
    text-align: center;
    padding: 80px 20px;
    border-bottom: 1px solid #E8EBED;
  }
  .subpage-hero .breadcrumb {
    font-size: 13px;
    letter-spacing: 0.1em;
    text-transform: uppercase;
    color: #C49A6C;
    margin-bottom: 20px;
  }
  .subpage-hero h1 {
    font-size: 48px;
    color: #17015e;
    margin-bottom: 10px;
    font-weight: 700;
  }
  .subpage-hero p {
    font-size: 18px;
    color: #5D6F7F;
  }
  .subpage-section {
    padding: 80px 0;
  }
  .gray-bg {
    background: #F8F9FA;
  }
  .wide-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
  }
  .centered-eyebrow {
    font-size: 12px;
    letter-spacing: 0.15em;
    text-transform: uppercase;
    color: #C49A6C;
    text-align: center;
    margin-bottom: 15px;
  }
  .section-title {
    font-size: 36px;
    font-weight: 700;
    color: #17015e;
    text-align: center;
    margin-bottom: 20px;
  }
  .section-description {
    font-size: 16px;
    color: #4A5E72;
    text-align: center;
    max-width: 800px;
    margin: 0 auto 40px;
    line-height: 1.6;
  }
  .verification-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 40px;
  }
  .verification-card {
    background: white;
    border: 1px solid #E8EBED;
    border-radius: 16px;
    padding: 30px;
    text-align: center;
  }
  .verification-card h3 {
    font-size: 18px;
    font-weight: 700;
    color: #17015e;
    margin-bottom: 10px;
  }
  .verification-card p {
    font-size: 14px;
    color: #4A5E72;
  }
  .filter-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 40px;
  }
  .filter-card {
    background: white;
    border: 1px solid #E8EBED;
    border-radius: 16px;
    padding: 30px;
    text-align: center;
  }
  .filter-number {
    font-size: 42px;
    font-weight: 700;
    color: #C49A6C;
    margin-bottom: 15px;
  }
  .filter-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #17015e;
    margin-bottom: 10px;
  }
  .filter-card p {
    font-size: 14px;
    color: #4A5E72;
  }
  .docs-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 20px;
    margin-top: 40px;
  }
  .doc-card {
    background: white;
    border: 1px solid #E8EBED;
    border-radius: 16px;
    padding: 30px;
    text-align: center;
  }
  .doc-card svg {
    margin-bottom: 15px;
  }
  .doc-card h4 {
    font-size: 16px;
    font-weight: 600;
    color: #17015e;
  }
  .subpage-cta {
    background: #17015e;
    padding: 60px 20px;
    text-align: center;
  }
  .subpage-cta h3 {
    font-size: 28px;
    color: white;
    margin-bottom: 20px;
  }
  .cta-button {
    display: inline-block;
    background: white;
    color: #17015e;
    padding: 14px 36px;
    border-radius: 40px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
  }
  .cta-button:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.2);
  }
  @media (max-width: 768px) {
    .subpage-hero h1 { font-size: 32px; }
    .section-title { font-size: 28px; }
    .verification-grid, .filter-grid, .docs-grid { grid-template-columns: 1fr; }
  }
</style>
@endsection
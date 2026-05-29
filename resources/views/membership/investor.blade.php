@extends('layouts.app')

@section('content')
@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div class="subpage-hero">
  <div class="subpage-hero-content">
    <div class="breadcrumb">Home / Membership / Investor Access</div>
    <h1>Investor Access</h1>
    <p>Direct access to verified investment opportunities across Africa</p>
  </div>
</div>

<!-- ========= OVERVIEW SECTION ========= -->
<div class="subpage-section">
  <div class="wide-container">
    <div class="centered-eyebrow">INVESTOR ACCESS</div>
    <h2 class="section-title">Capital Deployment Opportunities</h2>
    <p class="section-description">ATICC provides institutional investors with structured access to verified, execution-ready investment opportunities across African markets.</p>
    
    <div class="content-grid">
      <div class="content-card">
        <h3>Investment Types</h3>
        <p>Direct Investment, Co-Investment, SPV Participation</p>
      </div>
      <div class="content-card">
        <h3>Sector Focus</h3>
        <p>Infrastructure, Energy, Trade Finance, Technology</p>
      </div>
      <div class="content-card">
        <h3>Ticket Size</h3>
        <p>$10M – $500M+</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= KEY FEATURES ========= -->
<div class="subpage-section gray-bg">
  <div class="wide-container">
    <div class="centered-eyebrow">KEY FEATURES</div>
    <h2 class="section-title">What Investor Access Includes</h2>
    <div class="features-grid">
      <div class="feature-card">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
          <path d="M12 2L3 7l9 5 9-5-9-5z"/>
          <path d="M3 12l9 5 9-5"/>
        </svg>
        <h4>Verified Deal Flow</h4>
        <p>Access to Tier 3 execution-ready investment opportunities.</p>
      </div>
      <div class="feature-card">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
          <circle cx="12" cy="12" r="10"/>
          <path d="M12 8v4l3 3"/>
        </svg>
        <h4>Due Diligence Support</h4>
        <p>Comprehensive verification and validation of opportunities.</p>
      </div>
      <div class="feature-card">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
          <path d="M20 12V8H4v4M12 4v4M4 4h16v16H4z"/>
          <path d="M8 20v-8h8v8"/>
        </svg>
        <h4>Capital Matching</h4>
        <p>Strategic alignment of institutional capital with opportunities.</p>
      </div>
      <div class="feature-card">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
          <path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"/>
          <path d="M9 3v18M15 3v18M3 9h18M3 15h18"/>
        </svg>
        <h4>Transaction Structuring</h4>
        <p>Financial and legal framework support for investments.</p>
      </div>
    </div>
  </div>
</div>

<!-- ========= BENEFITS LIST ========= -->
<div class="subpage-section">
  <div class="wide-container">
    <div class="centered-eyebrow">BENEFITS</div>
    <h2 class="section-title">Benefits for Institutional Investors</h2>
    <div class="benefits-list-wrapper">
      <ul class="benefits-list">
        <li><span class="check">✓</span> Access to verified, bankable projects</li>
        <li><span class="check">✓</span> Co-investment opportunities with institutional partners</li>
        <li><span class="check">✓</span> Dedicated investment coordination support</li>
        <li><span class="check">✓</span> Regular investment briefings and market intelligence</li>
        <li><span class="check">✓</span> Access to ATICC investment forums and roundtables</li>
      </ul>
    </div>
  </div>
</div>

<!-- ========= CTA ========= -->
<div class="subpage-cta">
  <div class="wide-container">
    <h3>Ready to access investment opportunities?</h3>
    <a href="{{ route('access.plans') }}" class="cta-button">Get Started →</a>
  </div>
</div>

@include('layouts.footer')

<style>
  /* Same styles as above */
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
  .content-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-top: 40px;
  }
  .content-card {
    background: white;
    border: 1px solid #E8EBED;
    border-radius: 16px;
    padding: 30px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  }
  .content-card h3 {
    font-size: 18px;
    font-weight: 700;
    color: #17015e;
    margin-bottom: 10px;
  }
  .content-card p {
    font-size: 14px;
    color: #4A5E72;
  }
  .features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
    margin-top: 40px;
  }
  .feature-card {
    background: white;
    border: 1px solid #E8EBED;
    border-radius: 16px;
    padding: 30px;
    text-align: center;
  }
  .feature-card svg {
    margin-bottom: 20px;
  }
  .feature-card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #17015e;
    margin-bottom: 10px;
  }
  .feature-card p {
    font-size: 14px;
    color: #4A5E72;
    line-height: 1.5;
  }
  .benefits-list-wrapper {
    max-width: 600px;
    margin: 0 auto;
  }
  .benefits-list {
    list-style: none;
    padding: 0;
  }
  .benefits-list li {
    padding: 12px 0;
    font-size: 16px;
    color: #2E4156;
    border-bottom: 1px solid #E8EBED;
  }
  .check {
    color: #28a745;
    margin-right: 12px;
    font-weight: bold;
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
    .content-grid, .features-grid { grid-template-columns: 1fr; }
  }
</style>
@endsection
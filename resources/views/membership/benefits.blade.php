@extends('layouts.app')

@section('content')
@include('layouts.nav')

<!-- ========= HERO SECTION ========= -->
<div class="subpage-hero">
  <div class="subpage-hero-content">
    <div class="breadcrumb">Home / Membership / Membership Benefits</div>
    <h1>Membership Benefits</h1>
    <p>What you gain as an ATICC member</p>
  </div>
</div>

<!-- ========= BENEFITS BY TIER ========= -->
<div class="subpage-section">
  <div class="wide-container">
    <div class="centered-eyebrow">BENEFITS BY TIER</div>
    <h2 class="section-title">Benefits Across All Membership Tiers</h2>
    
    <div class="benefits-table-wrapper">
      <table class="benefits-table">
        <thead>
          <tr>
            <th>Benefit</th>
            <th>Tier I</th>
            <th>Tier II</th>
            <th>Tier III</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Access to Verified Trade Opportunities</td><td>✓</td><td>✓</td><td>✓</td></tr>
          <tr><td>Market Intelligence Reports</td><td>Premium</td><td>Standard</td><td>Basic</td></tr>
          <tr><td>Networking Events Access</td><td>All Access</td><td>All Events</td><td>Selected Events</td></tr>
          <tr><td>Trust & Verification Protocol</td><td>✓</td><td>✓</td><td>✓</td></tr>
          <tr><td>Capital Facilitation</td><td>✓</td><td>✓</td><td>—</td></tr>
          <tr><td>Transaction Execution Support</td><td>✓</td><td>✓</td><td>—</td></tr>
          <tr><td>Dedicated Relationship Manager</td><td>✓</td><td>—</td><td>—</td></tr>
          <tr><td>Custom Intelligence Reports</td><td>✓</td><td>—</td><td>—</td></tr>
          <tr><td>Policy & G2G Framework Access</td><td>✓</td><td>—</td><td>—</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- ========= CTA ========= -->
<div class="subpage-cta">
  <div class="wide-container">
    <h3>Ready to unlock these benefits?</h3>
    <a href="{{ route('access.plans') }}" class="cta-button">View Membership Plans →</a>
  </div>
</div>

@include('layouts.footer')

<style>
  /* Same styles with table addition */
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
  .benefits-table-wrapper {
    overflow-x: auto;
    margin-top: 40px;
  }
  .benefits-table {
    width: 100%;
    border-collapse: collapse;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
  }
  .benefits-table th {
    background: #17015e;
    color: white;
    padding: 15px 20px;
    text-align: center;
    font-weight: 600;
  }
  .benefits-table td {
    padding: 12px 20px;
    border-bottom: 1px solid #E8EBED;
    text-align: center;
    color: #2E4156;
  }
  .benefits-table td:first-child {
    text-align: left;
    font-weight: 600;
    background: #F8F9FA;
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
    .benefits-table th, .benefits-table td { padding: 10px; font-size: 12px; }
  }
</style>
@endsection
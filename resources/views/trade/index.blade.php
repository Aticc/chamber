@extends('layouts.app')

@section('content')
@include('layouts.nav')

<div class="subpage-hero">
  <div class="subpage-hero-content">
    <div class="breadcrumb">Home / Trade & Investment</div>
    <h1>Trade & Investment</h1>
    <p>Structured trade facilitation and investment coordination across African markets.</p>
  </div>
</div>

<div class="subpage-section">
  <div class="wide-container">
    <div class="overview-content">
      <p class="lead-text">ATICC provides structured trade facilitation and investment coordination services for institutional partners seeking market access, capital deployment, and execution support across African and international markets.</p>
    </div>
    <div class="services-grid">
      <div class="service-card">
        <div class="service-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
            <path d="M3 9l9-6 9 6-9 6-9-6z"/>
            <path d="M3 15l9 6 9-6"/>
          </svg>
        </div>
        <h3>Trade Facilitation</h3>
        <p>Technical infrastructure for cross-border trade, regulatory navigation, and documentation optimization.</p>
        <a href="{{ route('trade.facilitation') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card">
        <div class="service-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
            <circle cx="12" cy="10" r="3"/>
          </svg>
        </div>
        <h3>Investment Coordination</h3>
        <p>Connecting institutional capital with vetted, execution-ready opportunities across priority sectors.</p>
        <a href="{{ route('trade.investment-coordination') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card">
        <div class="service-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
            <circle cx="12" cy="12" r="10"/>
            <path d="M12 6v6l4 2"/>
          </svg>
        </div>
        <h3>Capital Matching</h3>
        <p>Aligning institutional mandates with verified opportunities through structured due diligence.</p>
        <a href="{{ route('trade.capital-matching') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card">
        <div class="service-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
            <rect x="3" y="4" width="18" height="16" rx="2"/>
            <line x1="8" y1="2" x2="16" y2="2"/>
          </svg>
        </div>
        <h3>Project Validation</h3>
        <p>Triple-filter validation process ensuring commercial viability, regulatory alignment, and economic impact.</p>
        <a href="{{ route('trade.project-validation') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card">
        <div class="service-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
          </svg>
        </div>
        <h3>Institutional Partnerships</h3>
        <p>Strategic partnerships across capital, trade, and institutional ecosystems.</p>
        <a href="{{ route('trade.partnerships') }}" class="service-link">Learn More →</a>
      </div>
      <div class="service-card">
        <div class="service-icon">
          <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#17015e" stroke-width="1.5">
            <path d="M20 12V8H4v4M12 4v4M4 4h16v16H4z"/>
            <path d="M8 20v-8h8v8"/>
          </svg>
        </div>
        <h3>Infrastructure & Energy</h3>
        <p>Facilitating infrastructure and energy investment across African markets.</p>
        <a href="{{ route('trade.infrastructure') }}" class="service-link">Learn More →</a>
      </div>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
.subpage-hero {
  background: linear-gradient(135deg, #F5F6F8 0%, #EDEFF2 100%);
  text-align: center;
  padding: 80px 80px;
  border-bottom: 1px solid #E8EBED;
}
.subpage-hero .breadcrumb {
  font-size: 13px;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: #5d6f7f;
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
  color: #2E4156;
}
.subpage-section {
  padding: 80px 0;
  background: white;
}
.wide-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}
.overview-content {
  text-align: center;
  margin-bottom: 60px;
}
.lead-text {
  font-size: 18px;
  color: #3A4C5E;
  max-width: 800px;
  margin: 0 auto;
  line-height: 1.6;
}
.services-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}
.service-card {
  background: #F8F9FA;
  padding: 32px;
  border-radius: 20px;
  border: 1px solid #E8EBED;
  transition: all 0.3s ease;
}
.service-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}
.service-icon {
  margin-bottom: 20px;
}
.service-card h3 {
  font-size: 20px;
  color: #17015e;
  margin-bottom: 12px;
  font-weight: 600;
}
.service-card p {
  font-size: 14px;
  color: #4A5E72;
  line-height: 1.5;
  margin-bottom: 20px;
}
.service-link {
  font-size: 13px;
  font-weight: 600;
  color: #17015e;
  text-decoration: none;
  transition: all 0.2s ease;
}
.service-link:hover {
  color: #C49A6C;
  transform: translateX(4px);
  display: inline-block;
}
@media (max-width: 992px) {
  .services-grid { grid-template-columns: repeat(2, 1fr); }
  .subpage-hero { padding: 60px 40px; }
  .subpage-hero h1 { font-size: 36px; }
}
@media (max-width: 768px) {
  .services-grid { grid-template-columns: 1fr; }
  .subpage-hero { padding: 40px 20px; }
  .subpage-hero h1 { font-size: 28px; }
}
</style>
@endsection
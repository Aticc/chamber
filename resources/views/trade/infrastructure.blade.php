@extends('layouts.app')

@section('content')
@include('layouts.nav')

<div class="subpage-hero">
  <div class="subpage-hero-content">
    <div class="breadcrumb">Home / Trade & Investment / Infrastructure & Energy</div>
    <h1>Infrastructure & Energy</h1>
    <p>Powering the industrial base through strategic investment.</p>
  </div>
</div>

<div class="subpage-section">
  <div class="wide-container">
    <div class="content-split">
      <div class="content-left">
        <h2>Infrastructure Investment</h2>
        <p>ATICC facilitates infrastructure and energy investment across African markets, connecting institutional capital with verified projects.</p>
        <ul class="feature-list">
          <li><strong>Project Pipeline:</strong> Verified infrastructure and energy opportunities</li>
          <li><strong>Capital Coordination:</strong> Connecting projects with institutional capital</li>
          <li><strong>Execution Support:</strong> Technical and regulatory assistance for project delivery</li>
          <li><strong>Risk Mitigation:</strong> Structured approaches to infrastructure investment risk</li>
        </ul>
      </div>
      <div class="content-right">
        <div class="info-card">
          <h3>Sector Focus</h3>
          <ul>
            <li>Renewable Energy</li>
            <li>Transportation & Logistics</li>
            <li>Power Generation & Distribution</li>
            <li>Water & Sanitation</li>
            <li>Digital Infrastructure</li>
          </ul>
        </div>
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
.content-split {
  display: flex;
  gap: 60px;
  align-items: flex-start;
}
.content-left {
  flex: 1.5;
}
.content-left h2 {
  font-size: 32px;
  color: #17015e;
  margin-bottom: 20px;
  font-weight: 600;
}
.content-left p {
  font-size: 16px;
  color: #4A5E72;
  line-height: 1.6;
  margin-bottom: 20px;
}
.feature-list {
  list-style: none;
  padding: 0;
}
.feature-list li {
  padding: 12px 0;
  font-size: 15px;
  color: #2E4156;
  border-bottom: 1px solid #E8EBED;
}
.feature-list li strong {
  color: #17015e;
}
.content-right {
  flex: 1;
}
.info-card {
  background: #F8F9FA;
  padding: 32px;
  border-radius: 20px;
  border: 1px solid #E8EBED;
}
.info-card h3 {
  font-size: 20px;
  color: #17015e;
  margin-bottom: 15px;
  font-weight: 600;
}
.info-card ul {
  list-style: none;
  padding: 0;
}
.info-card li {
  padding: 8px 0;
  font-size: 14px;
  color: #4A5E72;
}
@media (max-width: 992px) {
  .content-split { flex-direction: column; }
  .subpage-hero { padding: 60px 40px; }
  .subpage-hero h1 { font-size: 36px; }
}
@media (max-width: 768px) {
  .subpage-hero { padding: 40px 20px; }
  .subpage-hero h1 { font-size: 28px; }
  .content-left h2 { font-size: 28px; }
}
</style>
@endsection
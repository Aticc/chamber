@extends('layouts.app')

@section('content')
@include('layouts.nav')

<div class="subpage-hero">
  <div class="subpage-hero-content">
    <div class="breadcrumb">Home / Trade & Investment / Strategic Sector Programs</div>
    <h1>Strategic Sector Programs</h1>
    <p>High-impact sectors driving systemic growth.</p>
  </div>
</div>

<div class="subpage-section">
  <div class="wide-container">
    <div class="sectors-grid">
      <div class="sector-card">
        <h3>Agro-Industrial Value Chains</h3>
        <p>Moving from raw exports to localized processing, creating value addition and employment across agricultural value chains.</p>
      </div>
      <div class="sector-card">
        <h3>Energy & Critical Infrastructure</h3>
        <p>Powering the industrial base through structured energy and infrastructure investment.</p>
      </div>
      <div class="sector-card">
        <h3>Digital Trade & Fintech</h3>
        <p>Enabling frictionless movement of value and facilitating international transactions.</p>
      </div>
      <div class="sector-card">
        <h3>Manufacturing & Industrialization</h3>
        <p>Supporting industrial growth through capital deployment and market access.</p>
      </div>
      <div class="sector-card">
        <h3>Logistics & Supply Chain</h3>
        <p>Optimizing trade flows through corridor development and logistics coordination.</p>
      </div>
      <div class="sector-card">
        <h3>Technology & Innovation</h3>
        <p>Connecting institutional capital with technology-driven opportunities across Africa.</p>
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
.sectors-grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 30px;
}
.sector-card {
  background: #F8F9FA;
  padding: 32px;
  border-radius: 20px;
  border: 1px solid #E8EBED;
  transition: all 0.3s ease;
}
.sector-card:hover {
  transform: translateY(-5px);
  box-shadow: 0 10px 30px rgba(0,0,0,0.08);
}
.sector-card h3 {
  font-size: 20px;
  color: #17015e;
  margin-bottom: 12px;
  font-weight: 600;
}
.sector-card p {
  font-size: 14px;
  color: #4A5E72;
  line-height: 1.5;
}
@media (max-width: 992px) {
  .sectors-grid { grid-template-columns: repeat(2, 1fr); }
  .subpage-hero { padding: 60px 40px; }
  .subpage-hero h1 { font-size: 36px; }
}
@media (max-width: 768px) {
  .sectors-grid { grid-template-columns: 1fr; }
  .subpage-hero { padding: 40px 20px; }
  .subpage-hero h1 { font-size: 28px; }
}
</style>
@endsection
@extends('layouts.app')

@section('content')
@include('layouts.nav')

<div class="subpage-hero">
  <div class="subpage-hero-content">
    <div class="breadcrumb">Home / Trade & Investment / Institutional Partnerships</div>
    <h1>Institutional Partnerships</h1>
    <p>Strategic collaboration across capital, trade, and institutional ecosystems.</p>
  </div>
</div>

<div class="subpage-section">
  <div class="wide-container">
    <div class="content-split">
      <div class="content-left">
        <h2>Partnership Framework</h2>
        <p>ATICC engages strategic partners across capital, trade, and institutional ecosystems to facilitate structured engagement and execution.</p>
        <ul class="feature-list">
          <li><strong>Capital Partners:</strong> Institutional investors and wealth funds</li>
          <li><strong>Trade Partners:</strong> Corporates, industry operators, and trade bodies</li>
          <li><strong>Institutional Partners:</strong> Governments, multilaterals, and development institutions</li>
          <li><strong>Service Partners:</strong> Legal, financial, and advisory firms</li>
        </ul>
      </div>
      <div class="content-right">
        <div class="info-card">
          <h3>Become a Partner</h3>
          <p>ATICC welcomes strategic partnerships aligned with institutional standards and execution frameworks.</p>
          <a href="{{ route('contact.partnership') }}" class="partner-btn">Inquire About Partnership →</a>
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
.info-card p {
  font-size: 14px;
  color: #4A5E72;
  line-height: 1.5;
  margin-bottom: 20px;
}
.partner-btn {
  display: inline-block;
  background: #17015e;
  color: white;
  padding: 12px 24px;
  border-radius: 40px;
  text-decoration: none;
  font-size: 14px;
  font-weight: 600;
  transition: all 0.3s ease;
}
.partner-btn:hover {
  background: #2a0280;
  transform: translateY(-2px);
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
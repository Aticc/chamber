@extends('layouts.app')

@section('content')
@include('layouts.nav')

<div class="subpage-hero">
  <div class="subpage-hero-content">
    <div class="breadcrumb">Home / Trade & Investment / Trade Facilitation</div>
    <h1>Trade Facilitation</h1>
    <p>Technical infrastructure for cross-border trade execution.</p>
  </div>
</div>

<div class="subpage-section">
  <div class="wide-container">
    <div class="content-split">
      <div class="content-left">
        <h2>Structured Trade Support</h2>
        <p>ATICC provides technical "soft infrastructure" for trade, enabling institutional partners to navigate complex regulatory environments and execute cross-border transactions efficiently.</p>
        <ul class="feature-list">
          <li><strong>Regulatory Navigation:</strong> Direct guidance on localized trade laws and compliance requirements</li>
          <li><strong>Documentation Optimization:</strong> Support for standardized export/import protocols</li>
          <li><strong>Market Entry Intelligence:</strong> Specialized strategies for entering high-barrier jurisdictions</li>
          <li><strong>Trade Finance Coordination:</strong> Connecting traders with appropriate capital partners</li>
        </ul>
      </div>
      <div class="content-right">
        <div class="info-card">
          <h3>Why Trade Facilitation Matters</h3>
          <p>Effective trade facilitation reduces transaction costs, minimizes delays, and ensures regulatory compliance across borders.</p>
          <p>ATICC's framework provides institutional partners with the technical infrastructure needed to execute cross-border trade at scale.</p>
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
  margin-bottom: 15px;
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
@extends('layouts.app')

@section('content')
@include('layouts.nav')

<div class="subpage-hero">
  <div class="subpage-hero-content">
    <div class="breadcrumb">Home / Trade & Investment / Project Validation</div>
    <h1>Project Validation</h1>
    <p>Triple-filter validation for institutional-grade opportunities.</p>
  </div>
</div>

<div class="subpage-section">
  <div class="wide-container">
    <div class="content-split">
      <div class="content-left">
        <h2>Triple-Filter Test</h2>
        <p>Every project or trade opportunity listed on the platform must pass a rigorous triple-filter validation process.</p>
        <div class="validation-steps">
          <div class="validation-step">
            <div class="step-number">1</div>
            <div class="step-content">
              <h3>Commercial Viability</h3>
              <p>Can it generate returns? Assessment of financial feasibility and market potential.</p>
            </div>
          </div>
          <div class="validation-step">
            <div class="step-number">2</div>
            <div class="step-content">
              <h3>Regulatory Alignment</h3>
              <p>Is it legally sound? Verification of compliance with local and international regulations.</p>
            </div>
          </div>
          <div class="validation-step">
            <div class="step-number">3</div>
            <div class="step-content">
              <h3>Economic Contribution</h3>
              <p>Does it deliver measurable impact? Evaluation of developmental and economic outcomes.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="content-right">
        <div class="info-card">
          <h3>Validation Benefits</h3>
          <ul>
            <li>Reduced Investment Risk</li>
            <li>Verified Opportunity Pipeline</li>
            <li>Institutional-Grade Due Diligence</li>
            <li>Execution-Ready Projects</li>
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
  margin-bottom: 30px;
  font-weight: 600;
}
.validation-steps {
  display: flex;
  flex-direction: column;
  gap: 25px;
}
.validation-step {
  display: flex;
  gap: 20px;
  align-items: flex-start;
}
.step-number {
  width: 48px;
  height: 48px;
  background: #17015e;
  color: white;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  font-weight: 700;
  flex-shrink: 0;
}
.step-content h3 {
  font-size: 18px;
  color: #17015e;
  margin-bottom: 8px;
  font-weight: 600;
}
.step-content p {
  font-size: 14px;
  color: #4A5E72;
  line-height: 1.5;
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
  .validation-step { flex-direction: column; text-align: center; }
  .step-number { margin: 0 auto; }
}
</style>
@endsection
@extends("layouts.app")

@section('content')

@include('layouts.nav')

<!-- ========= PLANS HERO SECTION ========= -->
<div class="plans-hero-section">
  <div class="plans-hero-content">
    <div class="breadcrumb fade-up revealed">Home / Access Plans</div>
    <h1 class="headline fade-up revealed">Choose Your <span style="color: #031B4E;">Membership Path</span></h1>
    <div class="body-text fade-up delay-2 revealed">Select the membership tier that aligns with your institutional goals and market entry strategy. All plans include our Trust & Verification Protocol.</div>
  </div>
</div>

<!-- ========= GRAY SPACER ========= -->
<div class="gray-spacer fade-up revealed">
  <p> STRUCTURE DEFINES AUTHORITY. INTEGRITY ANCHORS CAPITAL. EXECUTION DRIVES SCALE. </p>
</div>

<!-- ========= PLANS SECTION ========= -->
<div class="plans-section">
  <div class="wide-container">
    <div class="plans-header">
      <div class="centered-eyebrow fade-up">MEMBERSHIP PLANS</div>
      <div class="large-statement fade-up delay-1">Choose Your Path to African Markets</div>
      <div class="supporting-text fade-up delay-2">Select the membership tier that aligns with your institutional goals and market entry strategy.</div>
    </div>
    
    <div class="plans-grid">
      <!-- Tier I - Standard -->
      <div class="plan-card fade-up delay-2">
        <div class="plan-badge">Popular</div>
        <div class="plan-tier">Tier I</div>
        <div class="plan-name">Institutional Members</div>
        <div class="plan-description">High-growth SMEs and accredited service providers</div>
        <div class="plan-price-range">
          <div class="price-range"> $400</div>
          <div class="price-period">per annum</div>
        </div>
        <ul class="plan-features">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Critical execution layer within trade value chains</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Access to verified trade opportunities</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Market intelligence reports</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Networking events access</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Trust & Verification Protocol</li>
        </ul>
        <button class="plan-btn" onclick="selectPlan('tier1', 'Tier I: Institutional Members', '$200 - $400 per annum')">Get Started →</button>
      </div>

      <!-- Tier II - Professional -->
      <div class="plan-card featured fade-up delay-3">
        <div class="plan-badge">Recommended</div>
        <div class="plan-tier">Tier II</div>
        <div class="plan-name">Strategic Corporate Partners</div>
        <div class="plan-description">Multinational corporations and industrial conglomerates</div>
        <div class="plan-price-range">
          <div class="price-range"> $2,500</div>
          <div class="price-period">per annum</div>
        </div>
        <ul class="plan-features">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>High-level market entry facilitation</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Infrastructure development access</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Large-scale industrial execution</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Priority deal pipeline access</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All Tier I benefits</li>
        </ul>
        <button class="plan-btn" onclick="selectPlan('tier2', 'Tier II: Strategic Corporate Partners', '$1,000 - $2,500 per annum')">Get Started →</button>
      </div>

      <!-- Tier III - Enterprise -->
      <div class="plan-card fade-up delay-4">
        <div class="plan-badge">Enterprise</div>
        <div class="plan-tier">Tier III</div>
        <div class="plan-name">Institutional & Institutional Partners</div>
        <div class="plan-description">For institutional wealth funds, governments, and multilateral institutions</div>
        <div class="plan-price-range">
          <div class="price-range">$50,000</div>
          <div class="price-period">(3-5 members)</div>
        </div>
        <ul class="plan-features">
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Policy alignment & G2G frameworks</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Large-scale capital deployment</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Strategic investment committee access</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>Dedicated relationship management</li>
          <li><svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#28a745" stroke-width="2"><polyline points="20 6 9 17 4 12"/></svg>All Tier I & Tier II benefits</li>
        </ul>
        <button class="plan-btn" onclick="selectPlan('tier3', 'Tier III: Institutional & Institutional Partners', '$50,000 (3-5 members)')">Contact Us →</button>
      </div>
    </div>

    <!-- Comparison Table -->
    <div class="comparison-table-wrapper fade-up delay-5">
      <h3 class="comparison-title">Compare All Plans</h3>
      <div class="table-responsive">
        <table class="comparison-table">
          <thead>
            <tr>
              <th>Features</th>
              <th>Tier I<br><span>$400/yr</span></th>
              <th>Tier II<br><span>$2,500/yr</span></th>
              <th>Tier III<br><span>$50,000</span></th>
            </tr>
          </thead>
          <tbody>
            <tr><td>Structured Market Entry</td><td>✓</td><td>✓</td><td>✓</td>
            </tr>
            <tr><td>Capital Facilitation</td><td>-</td><td>✓</td><td>✓</td>
            </tr>
            <tr><td>Transaction Execution Support</td><td>-</td><td>✓</td><td>✓</td>
            </tr>
            <tr><td>Trust & Verification (T&V) Protocol</td><td>✓</td><td>✓</td><td>✓</td>
            </tr>
            <tr><td>Global Trade Corridor Access</td><td>Basic</td><td>Premium</td><td>All Access</td>
            </tr>
            <tr><td>Policy Alignment & G2G Frameworks</td><td>-</td><td>-</td><td>✓</td>
            </tr>
            <tr><td>Dedicated Relationship Manager</td><td>-</td><td>-</td><td>✓</td>
            </tr>
            <tr><td>Custom Intelligence Reports</td><td>-</td><td>-</td><td>✓</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Accession Protocol Info -->
    <div class="accession-info fade-up">
      <div class="accession-icon">
        <svg width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="#041931" stroke-width="1.5">
          <path d="M12 2L3 7l9 5 9-5-9-5z"/>
          <path d="M3 12l9 5 9-5"/>
          <path d="M3 17l9 5 9-5"/>
        </svg>
      </div>
      <h4>The Accession Protocol</h4>
      <p>All members must complete the Accession Protocol: <span>Expression of Interest (EOI)</span> → <span>Trust & Verification (T&V) Review</span> → <span>Ratification</span>. Payment does not guarantee accession. All applicants must clear the Trust & Verification Protocol.</p>
    </div>
  </div>
</div>

@include('layouts.footer')

<style>
.plans-hero-section {
  background: linear-gradient(135deg, #F5F6F8 0%, #EDEFF2 100%);
  text-align: center;
  padding: 80px 80px;
  border-bottom: 1px solid #E8EBED;
}

.plans-hero-content .breadcrumb {
  font-size: 13px;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  color: #5d6f7f;
  margin-bottom: 20px;
}

.plans-hero-content .headline {
  font-size: 48px;
  color: #0e0e0e;
  margin-bottom: 20px;
  font-weight: 300;
}

.plans-hero-content .body-text {
  font-size: 16px;
  color: #3A4C5E;
  max-width: 700px;
  margin: 0 auto;
  line-height: 1.6;
}

.plans-section {
  padding: 80px 0;
  background: white;
}

.plans-header {
  text-align: center;
  margin-bottom: 50px;
}

.plans-grid {
  display: flex;
  gap: 30px;
  justify-content: center;
  margin-bottom: 60px;
  flex-wrap: wrap;
}

.plan-card {
  flex: 1;
  min-width: 300px;
  max-width: 380px;
  background: #F8F9FA;
  border-radius: 24px;
  padding: 32px;
  position: relative;
  transition: all 0.3s ease;
  border: 1px solid #E8EBED;
}

.plan-card:hover {
  transform: translateY(-10px);
  box-shadow: 0 20px 40px rgba(0,0,0,0.1);
}

.plan-card.featured {
  border: 2px solid #041931;
  background: white;
  transform: scale(1.02);
}

.plan-card.featured:hover {
  transform: scale(1.02) translateY(-10px);
}

.plan-badge {
  position: absolute;
  top: -12px;
  left: 50%;
  transform: translateX(-50%);
  background: #041931;
  color: white;
  padding: 5px 15px;
  border-radius: 20px;
  font-size: 12px;
  font-weight: 600;
}

.plan-tier {
  font-size: 14px;
  color: #C49A6C;
  letter-spacing: 1px;
  margin-bottom: 10px;
  text-align: center;
}

.plan-name {
  font-size: 22px;
  font-weight: 300;
  color: #031B4E;
  margin-bottom: 15px;
  text-align: center;
}

.plan-description {
  font-size: 13px;
  color: #7A8B9B;
  text-align: center;
  margin-bottom: 20px;
}

.plan-price-range {
  text-align: center;
  margin-bottom: 25px;
  padding-bottom: 20px;
  border-bottom: 1px solid #E8EBED;
}

.price-range {
  font-size: 32px;
  font-weight: 300;
  color: #031B4E;
}

.price-period {
  font-size: 12px;
  color: #7A8B9B;
  margin-top: 5px;
}

.plan-features {
  list-style: none;
  padding: 0;
  margin-bottom: 30px;
}

.plan-features li {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 8px 0;
  font-size: 13px;
  color: #2E4156;
}

.plan-features li svg {
  flex-shrink: 0;
}

.plan-btn {
  width: 100%;
  background: #041931;
  color: white;
  border: none;
  padding: 14px;
  border-radius: 40px;
  font-size: 14px;
  font-weight: 600;
  cursor: pointer;
  transition: all 0.3s ease;
}

.plan-btn:hover {
  background: #031B4E;
  transform: translateY(-2px);
}

.comparison-table-wrapper {
  max-width: 1000px;
  margin: 0 auto 40px;
  background: #F8F9FA;
  border-radius: 24px;
  padding: 40px;
}

.comparison-title {
  font-size: 28px;
  font-weight: 300;
  color: #031B4E;
  text-align: center;
  margin-bottom: 30px;
}

.table-responsive {
  overflow-x: auto;
}

.comparison-table {
  width: 100%;
  border-collapse: collapse;
}

.comparison-table th,
.comparison-table td {
  padding: 12px 15px;
  text-align: center;
  border-bottom: 1px solid #E8EBED;
}

.comparison-table th:first-child,
.comparison-table td:first-child {
  text-align: left;
  font-weight: 600;
  background: white;
}

.comparison-table th {
  background: #041931;
  color: white;
  font-weight: 600;
}

.comparison-table th span {
  font-size: 11px;
  font-weight: normal;
  color: #C49A6C;
}

.comparison-table td {
  background: white;
  color: #2E4156;
  font-size: 14px;
}

.accession-info {
  max-width: 800px;
  margin: 0 auto;
  text-align: center;
  padding: 30px;
  background: #F8F9FA;
  border-radius: 20px;
  border-left: 4px solid #C49A6C;
}

.accession-icon {
  margin-bottom: 15px;
}

.accession-info h4 {
  font-size: 18px;
  font-weight: 300;
  color: #031B4E;
  margin-bottom: 10px;
}

.accession-info p {
  font-size: 14px;
  color: #4A5E72;
  line-height: 1.6;
}

@media (max-width: 992px) {
  .plans-hero-section {
    padding: 60px 40px;
  }
  .plans-hero-content .headline {
    font-size: 36px;
  }
  .comparison-table-wrapper {
    padding: 25px;
  }
  .comparison-title {
    font-size: 24px;
  }
}

@media (max-width: 768px) {
  .plans-hero-section {
    padding: 40px 20px;
  }
  .plans-hero-content .headline {
    font-size: 28px;
  }
  .plans-section {
    padding: 50px 20px;
  }
  .plan-card {
    min-width: 280px;
  }
  .plan-card.featured {
    transform: scale(1);
  }
  .plan-card.featured:hover {
    transform: translateY(-10px);
  }
  .price-range {
    font-size: 28px;
  }
  .comparison-table th,
  .comparison-table td {
    padding: 8px 10px;
    font-size: 12px;
  }
}
</style>

<script>
function selectPlan(tier, name, price) {
    // Store in localStorage
    localStorage.setItem('selectedTier', tier);
    localStorage.setItem('selectedPlan', name);
    localStorage.setItem('selectedPrice', price);
    
    // Redirect to application form with query parameters
    window.location.href = `{{ route('membership.apply') }}?tier=${encodeURIComponent(tier)}&plan=${encodeURIComponent(name)}&price=${encodeURIComponent(price)}`;
}

const animatedElements = document.querySelectorAll('.fade-up, .fade-left, .fade-right, .scale-in, .plan-card');
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('revealed');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.15 });

animatedElements.forEach(el => observer.observe(el));

window.addEventListener('scroll', function() {
    const nav = document.getElementById('stickyNav');
    if (window.scrollY > 50) {
        nav.classList.add('scrolled');
        document.body.classList.add('nav-shrunk');
    } else {
        nav.classList.remove('scrolled');
        document.body.classList.remove('nav-shrunk');
    }
});
</script>
@endsection
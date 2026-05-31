<!-- TOP NAVIGATION - FULLY RESPONSIVE WITH AUTH (8 PRIMARY MENU ITEMS) -->
<div class="top-nav" id="stickyNav">
  <div class="nav-logo" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
    <img src="{{ asset('assets/images/ATICC FINAL LOGO  (2).png') }}" width="100" height="86" alt="ATICC Logo">
  </div>
  
  <!-- Mobile Hamburger Button -->
  <div class="mobile-toggle" id="mobileToggle">
    <span></span>
    <span></span>
    <span></span>
  </div>
  
  <div class="nav-right" id="navMenu">
    <div class="nav-menu">
      @guest
        <!-- 8 PRIMARY NAVIGATION MENU ITEMS FOR GUESTS -->
        
        <!-- 1. HOME -->
        <div class="nav-dropdown">
          <a href="{{ route('home') }}">Home</a>
        </div>
        
        <!-- 2. ABOUT with Dropdown -->
        <div class="nav-dropdown">
          <a href="{{ route('about') }}">About</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">About</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Institutional Overview <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('about.overview') }}">Institutional Overview</a>
                <a href="{{ route('about.mission') }}">Mission & Strategic Purpose</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Governance & Leadership <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('about.governance') }}">Governance Framework</a>
                <a href="{{ route('about.leadership') }}">Leadership & Advisory Board</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Standards & Compliance <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('about.regional') }}">Regional Coordination Network</a>
                <a href="{{ route('about.standards') }}">Institutional Standards</a>
                <a href="{{ route('about.legal') }}">Legal & Compliance</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Strategic Sectors <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('about.sectors') }}">Strategic Sectors</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- 3. MEMBERSHIP with Dropdown -->
        <div class="nav-dropdown">
          <a href="{{ route('membership') }}">Membership</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Membership</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Membership Types <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('membership.institutional') }}">Institutional Membership</a>
                <a href="{{ route('membership.corporate') }}">Corporate Membership</a>
                <a href="{{ route('membership.investor') }}">Investor Access</a>
                <a href="{{ route('membership.verified') }}">Verified Partner Access</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Benefits & Standards <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('membership.benefits') }}">Membership Benefits</a>
                <a href="{{ route('membership.verification-standards') }}">Verification Standards</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Application <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('membership.apply') }}">Membership Application</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- 4. TRADE & INVESTMENT with Dropdown -->
        <div class="nav-dropdown">
          <a href="{{ route('trade.index') }}">Trade & Investment</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Trade & Investment</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Trade Services <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('trade.facilitation') }}">Trade Facilitation</a>
                <a href="{{ route('trade.market-access') }}">Cross-Border Market Access</a>
                <a href="{{ route('trade.sector-programs') }}">Strategic Sector Programs</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Investment Services <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('trade.investment-coordination') }}">Investment Coordination</a>
                <a href="{{ route('trade.capital-matching') }}">Capital Matching</a>
                <a href="{{ route('trade.project-validation') }}">Project Validation</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Partnerships <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('trade.partnerships') }}">Institutional Partnerships</a>
                <a href="{{ route('trade.infrastructure') }}">Infrastructure & Energy</a>
                <a href="{{ route('trade.digital') }}">Digital Trade & Innovation</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- 5. INTELLIGENCE with Dropdown -->
        <div class="nav-dropdown">
          <a href="{{ route('intelligence.index') }}">Intelligence</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Intelligence</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Market Intelligence <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('intelligence.market') }}">Market Intelligence</a>
                <a href="{{ route('intelligence.sector-reports') }}">Sector Reports</a>
                <a href="{{ route('intelligence.briefings') }}">Investment Briefings</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Insights & Research <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('intelligence.trade-insights') }}">Trade Insights</a>
                <a href="{{ route('intelligence.research') }}">Research Publications</a>
                <a href="{{ route('intelligence.economic-outlooks') }}">Economic Outlooks</a>
                <a href="{{ route('intelligence.strategic-reports') }}">Strategic Reports</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- 6. EVENTS & MISSIONS with Dropdown -->
        <div class="nav-dropdown">
          <a href="{{ route('events.index') }}">Events & Missions</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Events & Missions</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Events <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('events.summits') }}">Institutional Summits</a>
                <a href="{{ route('events.investment-forums') }}">Investment Forums</a>
                <a href="{{ route('events.roundtables') }}">Executive Roundtables</a>
                <a href="{{ route('events.policy-dialogues') }}">Policy Dialogues</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Missions <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('events.trade-missions') }}">Trade Missions</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Registration <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('events.upcoming') }}">Upcoming Events</a>
                <a href="{{ route('events.register') }}">Event Registration</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- 7. VERIFICATION with Dropdown -->
        <div class="nav-dropdown">
          <a href="{{ route('verification.index') }}">Verification</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Verification</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Framework & Standards <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('verification.framework') }}">Verification Framework</a>
                <a href="{{ route('verification.due-diligence') }}">Due Diligence Standards</a>
                <a href="{{ route('verification.validation') }}">Institutional Validation</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Compliance & Risk <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('verification.compliance') }}">Compliance Protocols</a>
                <a href="{{ route('verification.risk-assessment') }}">Risk Assessment</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Access <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('verification.access') }}">Verification Access</a>
                <a href="{{ route('verification.submit') }}">Verification Submission</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- 8. CONTACT with Dropdown -->
        <div class="nav-dropdown">
          <a href="{{ route('contact.index') }}">Contact</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Contact</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">General Inquiries <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('contact.inquiry') }}">Institutional Inquiry</a>
                <a href="{{ route('contact.partnership') }}">Partnership Request</a>
                <a href="{{ route('contact.media') }}">Media & Communications</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Support <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('contact.verification-support') }}">Verification Support</a>
                <a href="{{ route('contact.transaction') }}">Transaction Submission</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Locations <span class="group-arrow">›</span></div>
              <div class="sub-dropdown">
                <a href="{{ route('contact.offices') }}">Office Locations</a>
              </div>
            </div>
          </div>
        </div>
        
      @else
        <!-- AUTHENTICATED USER NAVIGATION -->
        <div class="nav-dropdown">
          <a href="{{ route('dashboard') }}">Dashboard</a>
        </div>
        
        <div class="nav-dropdown">
          <a href="#">Membership</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Membership</span>
            </div>
            <a href="{{ route('member.profile') }}">My Membership</a>
            <a href="#">Member Benefits</a>
            <a href="#">Verification Status</a>
          </div>
        </div>
        
        <div class="nav-dropdown">
          <a href="#">Trade & Investment</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Trade & Investment</span>
            </div>
            <a href="#">Available Opportunities</a>
            <a href="#">My Deals</a>
            <a href="#">Capital Matching</a>
          </div>
        </div>
        
        <div class="nav-dropdown">
          <a href="#">Intelligence</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Intelligence</span>
            </div>
            <a href="#">Member Reports</a>
            <a href="#">Private Briefings</a>
          </div>
        </div>
        
        <div class="nav-dropdown">
          <a href="{{ route('events.index') }}">Events</a>
        </div>
        
        <div class="nav-dropdown">
          <a href="#">Verification</a>
        </div>
        
        <div class="nav-dropdown">
          <a href="#">Support</a>
        </div>
      @endguest
    </div>
    
    @guest
      <a class="nav-btn" href="{{ route('access.plans') }}">Access ATICC</a>
    @else
      <div class="nav-user">
        <div class="user-dropdown">
          <button class="user-dropdown-btn">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
              <circle cx="12" cy="8" r="4"/>
              <path d="M5 20v-2a7 7 0 0 1 14 0v2"/>
            </svg>
            <span class="user-name">{{ Auth::user()->name ?? 'My Account' }}</span>
            <svg class="dropdown-arrow" width="12" height="12" viewBox="0 0 12 12" fill="none">
              <path d="M3 4.5L6 7.5L9 4.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <div class="user-dropdown-menu">
            <a href="{{ route('dashboard') }}">Dashboard</a>
            <a href="{{ route('member.profile') }}">Profile</a>
            <a href="#">Settings</a>
            <hr>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
          </div>
        </div>
      </div>
    @endguest
  </div>
</div>

<div class="nav-overlay" id="navOverlay"></div>

<!-- The rest of your CSS and JavaScript remains exactly the same -->

<style>
/* ===== NAVIGATION DROPDOWN STYLES ===== */
.nav-dropdown {
  position: relative;
  display: inline-block;
}

.nav-dropdown > a {
  display: flex;
  align-items: center;
  cursor: pointer;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  min-width: 280px;
  background: #FFFFFF;
  border: 1px solid #E8EBED;
  border-radius: 16px;
  box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.15);
  opacity: 0;
  visibility: hidden;
  transform: translateY(-8px);
  transition: opacity 0.25s ease, visibility 0.25s ease, transform 0.25s ease;
  z-index: 1001;
  padding: 16px 20px;
  text-transform: capitalize;
  pointer-events: none;
}

.nav-dropdown:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
  pointer-events: auto;
}

/* Right-aligned dropdown for last items */
.nav-dropdown:last-child .dropdown-menu,
.nav-dropdown:nth-last-child(2) .dropdown-menu {
  left: auto;
  right: 0;
}

/* Dropdown Group Styles */
.dropdown-group {
  margin-bottom: 8px;
  position: relative;
}

.group-link {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 0;
  font-size: 13px;
  font-weight: 600;
  color: #17015e;
  border-bottom: 1px solid #F5F6F8;
  transition: all 0.2s ease;
}

.group-link:hover {
  color: #031B4E;
}

.group-arrow {
  font-size: 16px;
  color: #C49A6C;
}

/* SUB-DROPDOWN - EXACTLY LIKE THE FIRST DROPDOWN */
.sub-dropdown {
  position: absolute;
  top: -10px;
  left: 100%;
  min-width: 260px;
  background: #FFFFFF;
  border: 1px solid #E8EBED;
  border-radius: 16px;
  box-shadow: 0 20px 35px -10px rgba(0, 0, 0, 0.15);
  padding: 12px 0;
  opacity: 0;
  visibility: hidden;
  transform: translateX(-10px);
  transition: all 0.25s ease;
  z-index: 1002;
  pointer-events: none;
}

/* Hover on group-link shows sub-dropdown */
.dropdown-group:hover .sub-dropdown {
  opacity: 1;
  visibility: visible;
  transform: translateX(0);
  pointer-events: auto;
}

/* Sub-dropdown links - same style as main dropdown links */
.sub-dropdown a {
  display: block;
  padding: 10px 20px;
  font-size: 13px;
  color: #4A5E72;
  text-decoration: none;
  transition: all 0.2s ease;
  white-space: nowrap;
  text-transform: capitalize;
}

.sub-dropdown a:hover {
  background: #F5F6F8;
  color: #031B4E;
}

/* Right-aligned sub-dropdown for groups near the edge */
.nav-dropdown:last-child .dropdown-group .sub-dropdown,
.nav-dropdown:nth-last-child(2) .dropdown-group .sub-dropdown {
  left: auto;
  right: 100%;
}

/* Direct links in dropdown */
.dropdown-menu > a {
  display: block;
  padding: 10px 0;
  font-size: 13px;
  color: #4A5E72;
  text-decoration: none;
  border-bottom: 1px solid #F5F6F8;
}

.dropdown-menu > a:hover {
  color: #031B4E;
  transform: translateX(4px);
}

.dropdown-header {
  display: none;
}

/* Mobile only class */
.mobile-only {
  display: none;
}

/* ===== RESPONSIVE MOBILE STYLES ===== */
@media (max-width: 950px) {
  .mobile-only {
    display: flex !important;
  }
  
  .nav-dropdown {
    width: 100%;
    position: static;
  }
  
  .dropdown-menu {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    min-width: 100%;
    max-width: none;
    height: 100vh;
    border-radius: 0;
    border: none;
    box-shadow: none;
    padding: 70px 24px 30px;
    margin: 0;
    overflow-y: auto;
    background: #FFFFFF;
    opacity: 0;
    visibility: hidden;
    transform: translateX(100%);
    transition: transform 0.3s ease, opacity 0.3s ease;
    pointer-events: none;
    z-index: 1002;
  }
  
  .nav-dropdown.mobile-open .dropdown-menu {
    opacity: 1;
    visibility: visible;
    transform: translateX(0);
    pointer-events: auto;
  }
  
  .dropdown-header {
    display: flex;
    align-items: center;
    gap: 15px;
    margin-bottom: 25px;
    padding-bottom: 15px;
    border-bottom: 1px solid #E8EBED;
    position: sticky;
    top: 0;
    background: white;
    z-index: 10;
  }
  
  .back-btn {
    background: none;
    border: none;
    font-size: 16px;
    font-weight: 500;
    color: #031B4E;
    cursor: pointer;
    padding: 8px 0;
  }
  
  .dropdown-title {
    font-size: 18px;
    font-weight: 600;
    color: #031B4E;
  }
  
  .group-link {
    font-size: 16px;
    padding: 14px 0;
  }
  
  /* Mobile: sub-dropdown becomes click-to-expand */
  .sub-dropdown {
    position: static;
    width: 100%;
    box-shadow: none;
    border: none;
    padding-left: 20px;
    margin-top: 5px;
    opacity: 1;
    visibility: visible;
    transform: none;
    display: none;
    background: transparent;
  }
  
  .dropdown-group.open .sub-dropdown {
    display: block;
  }
  
  .sub-dropdown a {
    padding: 10px 0;
    font-size: 14px;
    white-space: normal;
  }
  
  .group-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .group-link::after {
    content: "▼";
    font-size: 10px;
    color: #C49A6C;
    transition: transform 0.2s ease;
  }
  
  .dropdown-group.open .group-link::after {
    transform: rotate(180deg);
  }
  
  .nav-dropdown.mobile-open {
    overflow: hidden;
  }
  
  body.menu-open {
    overflow: hidden;
  }
}

/* Desktop styles */
@media (min-width: 951px) {
  .dropdown-menu {
    min-width: 320px;
  }
  
  .dropdown-group {
    position: relative;
  }
}

/* ===== EXISTING NAVIGATION STYLES (PRESERVED) ===== */
.top-nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 16px 8px;
  background: #FFFFFF;
  border-bottom: 1px solid #E8EBED;
  z-index: 1000;
  transition: all 0.3s ease;
  box-sizing: border-box;
}

.top-nav.scrolled {
  padding: 10px 19px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
}

.nav-logo {
  cursor: pointer;
  flex-shrink: 0;
}

.nav-logo img {
  width: auto;
  height: 177px;
  transition: height 0.3s ease;
  background: transparent;
  mix-blend-mode: multiply;
}

.top-nav.scrolled .nav-logo img {
  height: 100px;
}

.nav-right {
  display: flex;
  align-items: center;
  gap: 40px;
}

.nav-menu {
  display: flex;
  gap: 32px;
}

.nav-menu a {
  font-size: 12px;
  font-weight: 500;
  color: #0e0e0e;
  text-decoration: none;
  letter-spacing: 0.03em;
  transition: color 0.2s ease;
  white-space: nowrap;
}

.nav-menu a:hover {
  color: #031B4E;
}

.nav-btn {
  padding: 10px 28px;
  border-radius: 1px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.05em;
  text-decoration: none;
  transition: all 0.2s ease;
  background: #041931;
  color: #FFFFFF;
  border: none;
  cursor: pointer;
  white-space: nowrap;
  display: inline-block;
}

.nav-btn:hover {
  background: #031B4E;
  transform: translateY(-1px);
  color: white;
}

.nav-user {
  position: relative;
}

.user-dropdown {
  position: relative;
}

.user-dropdown-btn {
  display: flex;
  align-items: center;
  gap: 8px;
  padding: 8px 16px;
  background: #F5F6F7;
  border: 1px solid #E8EBED;
  border-radius: 40px;
  cursor: pointer;
  font-size: 14px;
  font-weight: 500;
  color: #0e0e0e;
  transition: all 0.2s ease;
}

.user-dropdown-btn:hover {
  background: #EDEFF2;
  border-color: #031B4E;
}

.user-dropdown-btn:hover svg {
  stroke: #041931;
}

.dropdown-arrow {
  transition: transform 0.2s ease;
}

.user-dropdown.open .dropdown-arrow {
  transform: rotate(180deg);
}

.user-dropdown-menu {
  position: absolute;
  top: calc(100% + 10px);
  right: 0;
  min-width: 220px;
  background: #FFFFFF;
  border: 1px solid #E8EBED;
  border-radius: 12px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  opacity: 0;
  visibility: hidden;
  transform: translateY(-10px);
  transition: all 0.2s ease;
  z-index: 1001;
}

.user-dropdown.open .user-dropdown-menu {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

.user-dropdown-menu a {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 12px 16px;
  font-size: 13px;
  color: #0e0e0e;
  text-decoration: none;
  transition: background 0.2s ease;
}

.user-dropdown-menu a:hover {
  background: #F5F6F7;
  color: #031B4E;
}

.user-dropdown-menu a svg {
  stroke: #7A8B9B;
}

.user-dropdown-menu a:hover svg {
  stroke: #041931;
}

.user-dropdown-menu hr {
  margin: 8px 0;
  border: none;
  border-top: 1px solid #E8EBED;
}

.mobile-toggle {
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 30px;
  height: 21px;
  cursor: pointer;
  z-index: 1002;
}

.mobile-toggle span {
  display: block;
  height: 2px;
  width: 100%;
  background: #0e0e0e;
  transition: all 0.3s ease;
  border-radius: 2px;
}

.mobile-toggle.open span:nth-child(1) {
  transform: translateY(9px) rotate(45deg);
}

.mobile-toggle.open span:nth-child(2) {
  opacity: 0;
}

.mobile-toggle.open span:nth-child(3) {
  transform: translateY(-9px) rotate(-45deg);
}

.nav-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.5);
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
  z-index: 999;
}

.nav-overlay.open {
  opacity: 1;
  visibility: visible;
}

@media (max-width: 1100px) {
  .top-nav { padding: 16px 40px; }
  .top-nav.scrolled { padding: 10px 40px; }
  .nav-menu { gap: 24px; }
}

@media (max-width: 950px) {
  .top-nav { padding: 12px 24px; }
  .top-nav.scrolled { padding: 8px 24px; }
  .mobile-toggle { display: flex; }
  
  .nav-right {
    position: fixed;
    top: 0;
    right: -100%;
    width: 280px;
    height: 100vh;
    background: #FFFFFF;
    flex-direction: column;
    justify-content: flex-start;
    align-items: flex-start;
    padding: 80px 24px 40px;
    gap: 30px;
    box-shadow: -5px 0 30px rgba(0, 0, 0, 0.1);
    transition: right 0.3s ease;
    z-index: 1001;
  }
  
  .nav-right.open { right: 0; }
  
  .nav-menu {
    flex-direction: column;
    gap: 20px;
    width: 100%;
  }
  
  .nav-menu > .nav-dropdown > a {
    font-size: 16px;
    padding: 10px 0;
    width: 100%;
    white-space: normal;
  }
  
  .nav-btn {
    width: 100%;
    text-align: center;
    padding: 12px 24px;
  }
  
  .nav-user { width: 100%; }
  .user-dropdown { width: 100%; }
  .user-dropdown-btn { width: 100%; justify-content: space-between; padding: 12px 16px; }
  
  .user-dropdown-menu {
    position: static;
    width: 100%;
    margin-top: 10px;
    box-shadow: none;
    border: 1px solid #E8EBED;
  }
  
  .user-dropdown:not(.open) .user-dropdown-menu { display: none; }
  .user-dropdown.open .user-dropdown-menu { display: block; opacity: 1; visibility: visible; transform: none; }
}

@media (max-width: 480px) {
  .top-nav { padding: 8px 16px; }
  .nav-logo img { height: 100px; }
  .top-nav.scrolled .nav-logo img { height: 100px; }
  .nav-right { width: 100%; right: -100%; }
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
  const mobileToggle = document.getElementById('mobileToggle');
  const navMenu = document.getElementById('navMenu');
  const navOverlay = document.getElementById('navOverlay');
  const userDropdown = document.querySelector('.user-dropdown');
  const stickyNav = document.getElementById('stickyNav');
  
  function closeMobileMenu() {
    if (mobileToggle) mobileToggle.classList.remove('open');
    if (navMenu) navMenu.classList.remove('open');
    if (navOverlay) navOverlay.classList.remove('open');
    document.body.classList.remove('menu-open');
    document.body.style.overflow = '';
    document.querySelectorAll('.nav-dropdown.mobile-open').forEach(dropdown => {
      dropdown.classList.remove('mobile-open');
    });
    document.querySelectorAll('.dropdown-group.open').forEach(group => {
      group.classList.remove('open');
    });
  }
  
  function openMobileMenu() {
    if (mobileToggle) mobileToggle.classList.add('open');
    if (navMenu) navMenu.classList.add('open');
    if (navOverlay) navOverlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }
  
  if (mobileToggle) {
    mobileToggle.addEventListener('click', function(e) {
      e.stopPropagation();
      if (navMenu && navMenu.classList.contains('open')) {
        closeMobileMenu();
      } else {
        openMobileMenu();
      }
    });
  }
  
  if (navOverlay) {
    navOverlay.addEventListener('click', function() {
      closeMobileMenu();
      if (userDropdown) userDropdown.classList.remove('open');
    });
  }
  
  // Mobile dropdown toggle - open submenu
  const navDropdowns = document.querySelectorAll('.nav-dropdown');
  navDropdowns.forEach(dropdown => {
    const dropdownLink = dropdown.querySelector(':scope > a');
    if (dropdownLink && dropdown.querySelector('.dropdown-menu')) {
      dropdownLink.addEventListener('click', function(e) {
        if (window.innerWidth <= 950) {
          e.preventDefault();
          e.stopPropagation();
          navDropdowns.forEach(d => {
            if (d !== dropdown && d.classList.contains('mobile-open')) {
              d.classList.remove('mobile-open');
            }
          });
          dropdown.classList.toggle('mobile-open');
        }
      });
    }
  });
  
  // Mobile: toggle sub-dropdown when clicking group-link
  const groupLinks = document.querySelectorAll('.dropdown-group .group-link');
  groupLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      if (window.innerWidth <= 950) {
        e.preventDefault();
        const parentGroup = this.closest('.dropdown-group');
        parentGroup.classList.toggle('open');
      }
    });
  });
  
  // Close menu when clicking a link
  const navLinks = document.querySelectorAll('.dropdown-menu a, .sub-dropdown a, .nav-menu > .nav-dropdown > a[href^="#"], .nav-menu > .nav-dropdown > a[href^="/"]');
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      if (window.innerWidth <= 950) {
        setTimeout(() => {
          closeMobileMenu();
        }, 300);
      }
    });
  });
  
  if (userDropdown) {
    const dropdownBtn = userDropdown.querySelector('.user-dropdown-btn');
    dropdownBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      userDropdown.classList.toggle('open');
    });
    
    document.addEventListener('click', function(e) {
      if (userDropdown && !userDropdown.contains(e.target)) {
        userDropdown.classList.remove('open');
      }
    });
  }
  
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      stickyNav.classList.add('scrolled');
    } else {
      stickyNav.classList.remove('scrolled');
    }
  });
  
  window.addEventListener('resize', function() {
    if (window.innerWidth > 950) {
      closeMobileMenu();
      if (userDropdown) userDropdown.classList.remove('open');
      document.querySelectorAll('.nav-dropdown.mobile-open').forEach(dropdown => {
        dropdown.classList.remove('mobile-open');
      });
      document.querySelectorAll('.dropdown-group.open').forEach(group => {
        group.classList.remove('open');
      });
    }
  });
});

function closeSubMenu(btn) {
  const dropdown = btn.closest('.nav-dropdown');
  if (dropdown) {
    dropdown.classList.remove('mobile-open');
  }
}

function scrollToSection(sectionId) {
  const element = document.getElementById(sectionId);
  if (element) {
    const navHeight = document.getElementById('stickyNav').offsetHeight;
    const elementPosition = element.getBoundingClientRect().top + window.pageYOffset;
    const offsetPosition = elementPosition - navHeight - 20;
    
    window.scrollTo({
      top: offsetPosition,
      behavior: 'smooth'
    });
  }
  // Close mobile menu if open
  const mobileToggle = document.getElementById('mobileToggle');
  const navMenu = document.getElementById('navMenu');
  const navOverlay = document.getElementById('navOverlay');
  if (mobileToggle && mobileToggle.classList.contains('open')) {
    mobileToggle.classList.remove('open');
    if (navMenu) navMenu.classList.remove('open');
    if (navOverlay) navOverlay.classList.remove('open');
    document.body.style.overflow = '';
  }
}
</script>
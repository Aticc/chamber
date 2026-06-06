<div class="top-nav" id="stickyNav">
  <div class="nav-logo" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
    <img src="{{ asset('assets/images/ATICC FINAL LOGO  (2).png') }}" alt="ATICC Logo">
  </div>
  
  <div class="mobile-toggle" id="mobileToggle">
    <span></span>
    <span></span>
    <span></span>
  </div>
  
  <div class="nav-right" id="navMenu">
    <div class="nav-menu">
      @guest
        <!-- HOME -->
        <div class="nav-dropdown">
          <a href="{{ route('home') }}">Home</a>
        </div>
        
        <!-- ABOUT -->
        <div class="nav-dropdown">
          <a href="{{ route('about') }}">About</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">About</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Institutional Overview</div>
              <div class="sub-dropdown">
                <a href="{{ route('about.overview') }}">Institutional Overview</a>
                <a href="{{ route('about.mission') }}">Mission & Strategic Purpose</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Governance & Leadership</div>
              <div class="sub-dropdown">
                <a href="{{ route('about.governance') }}">Governance Framework</a>
                <a href="{{ route('about.leadership') }}">Leadership & Advisory Board</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Standards & Compliance</div>
              <div class="sub-dropdown">
                <a href="{{ route('about.regional') }}">Regional Coordination Network</a>
                <a href="{{ route('about.standards') }}">Institutional Standards</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- MEMBERSHIP -->
        <div class="nav-dropdown">
          <a href="{{ route('membership') }}">Membership</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Membership</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Membership Types</div>
              <div class="sub-dropdown">
                <a href="{{ route('membership.institutional') }}">Institutional Membership</a>
                <a href="{{ route('membership.corporate') }}">Corporate Membership</a>
                <a href="{{ route('membership.investor') }}">Investor Access</a>
                <a href="{{ route('membership.verified') }}">Verified Partner Access</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Benefits & Standards</div>
              <div class="sub-dropdown">
                <a href="{{ route('membership.benefits') }}">Membership Benefits</a>
                <a href="{{ route('membership.verification-standards') }}">Verification Standards</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Application</div>
              <div class="sub-dropdown">
                <a href="{{ route('membership.apply') }}">Membership Application</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- TRADE & INVESTMENT -->
        <div class="nav-dropdown">
          <a href="{{ route('trade.index') }}">Trade & Investment</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Trade & Investment</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Trade Services</div>
              <div class="sub-dropdown">
                <a href="{{ route('trade.facilitation') }}">Trade Facilitation</a>
                <a href="{{ route('trade.market-access') }}">Cross-Border Market Access</a>
                <a href="{{ route('trade.sector-programs') }}">Strategic Sector Programs</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Investment Services</div>
              <div class="sub-dropdown">
                <a href="{{ route('trade.investment-coordination') }}">Investment Coordination</a>
                <a href="{{ route('trade.capital-matching') }}">Capital Matching</a>
                <a href="{{ route('trade.project-validation') }}">Project Validation</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Partnerships</div>
              <div class="sub-dropdown">
                <a href="{{ route('trade.partnerships') }}">Institutional Partnerships</a>
                <a href="{{ route('trade.infrastructure') }}">Infrastructure & Energy</a>
                <a href="{{ route('trade.digital') }}">Digital Trade & Innovation</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- INTELLIGENCE -->
        <div class="nav-dropdown">
          <a href="{{ route('intelligence.index') }}">Intelligence</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Intelligence</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Market Intelligence</div>
              <div class="sub-dropdown">
                <a href="{{ route('intelligence.market') }}">Market Intelligence</a>
                <a href="{{ route('intelligence.sector-reports') }}">Sector Reports</a>
                <a href="{{ route('intelligence.briefings') }}">Investment Briefings</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Insights & Research</div>
              <div class="sub-dropdown">
                <a href="{{ route('intelligence.trade-insights') }}">Trade Insights</a>
                <a href="{{ route('intelligence.research') }}">Research Publications</a>
                <a href="{{ route('intelligence.economic-outlooks') }}">Economic Outlooks</a>
                <a href="{{ route('intelligence.strategic-reports') }}">Strategic Reports</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- EVENTS & MISSIONS -->
        <div class="nav-dropdown">
          <a href="{{ route('events.index') }}">Events & Missions</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Events & Missions</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Events</div>
              <div class="sub-dropdown">
                <a href="{{ route('events.summits') }}">Institutional Summits</a>
                <a href="{{ route('events.investment-forums') }}">Investment Forums</a>
                <a href="{{ route('events.roundtables') }}">Executive Roundtables</a>
                <a href="{{ route('events.policy-dialogues') }}">Policy Dialogues</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Missions</div>
              <div class="sub-dropdown">
                <a href="{{ route('events.trade-missions') }}">Trade Missions</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Registration</div>
              <div class="sub-dropdown">
                <a href="{{ route('events.upcoming') }}">Upcoming Events</a>
                <a href="{{ route('events.register') }}">Event Registration</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- VERIFICATION -->
        <div class="nav-dropdown">
          <a href="#">Verification</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Verification</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Framework & Standards</div>
              <div class="sub-dropdown">
                <a href="{{ route('verification.framework') }}">Verification Framework</a>
                <a href="{{ route('verification.due-diligence') }}">Due Diligence Standards</a>
                <a href="{{ route('verification.validation') }}">Institutional Validation</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Compliance & Risk</div>
              <div class="sub-dropdown">
                <a href="{{ route('verification.compliance') }}">Compliance Protocols</a>
                <a href="{{ route('verification.risk-assessment') }}">Risk Assessment</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Access</div>
              <div class="sub-dropdown">
                <a href="{{ route('verification.access') }}">Verification Access</a>
                <a href="{{ route('verification.submit') }}">Verification Submission</a>
              </div>
            </div>
          </div>
        </div>
        
        <!-- CONTACT -->
        <div class="nav-dropdown">
          <a href="{{ route('contact.index') }}">Contact</a>
          <div class="dropdown-menu">
            <div class="dropdown-header mobile-only">
              <button class="back-btn" onclick="closeSubMenu(this)">← Back</button>
              <span class="dropdown-title">Contact</span>
            </div>
            <div class="dropdown-group">
              <div class="group-link">General Inquiries</div>
              <div class="sub-dropdown">
                <a href="{{ route('contact.inquiry') }}">Institutional Inquiry</a>
                <a href="{{ route('contact.partnership') }}">Partnership Request</a>
                <a href="{{ route('contact.media') }}">Media & Communications</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Support</div>
              <div class="sub-dropdown">
                <a href="{{ route('contact.verification-support') }}">Verification Support</a>
                <a href="{{ route('contact.transaction') }}">Transaction Submission</a>
              </div>
            </div>
            <div class="dropdown-group">
              <div class="group-link">Locations</div>
              <div class="sub-dropdown">
                <a href="{{ route('contact.offices') }}">Office Locations</a>
              </div>
            </div>
          </div>
        </div>
        
      @else
        <!-- AUTHENTICATED STATES -->
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

<style>
/* ===== BASE NAVIGATION CONFIGURATION ===== */
.top-nav {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 15px 50px;
  background: var(--nav-bg, #030d1a);
  border-bottom: 1px solid var(--nav-border, rgba(255, 255, 255, 0.08));
  z-index: 1000;
  transition: all 0.3s ease;
  box-sizing: border-box;
}

.top-nav.scrolled {
  padding: 10px 50px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
  background: rgba(3, 13, 26, 0.95);
  backdrop-filter: blur(12px);
}

.nav-logo {
  cursor: pointer;
  flex-shrink: 0;
  display: flex;
  align-items: center;
}

.nav-logo img {
  width: auto;
  height: 120px;
  transition: height 0.3s ease;
  object-fit: contain;
  filter: brightness(0) invert(1);
}

.top-nav.scrolled .nav-logo img {
  height: 120px;
}

.nav-right {
  display: flex;
  align-items: center;
  gap: 35px;
  flex-shrink: 1;
  overflow: visible;
}

.nav-menu {
  display: flex;
  gap: 25px;
  align-items: center;
  flex-wrap: nowrap;
}

/* Base Primary Links */
.nav-menu > .nav-dropdown > a {
  font-size: 13px;
  font-weight: 500;
  color: var(--nav-text, #8da2bb);
  text-decoration: none;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  transition: all 0.25s ease;
  white-space: nowrap;
  position: relative;
  padding: 8px 0;
}

.nav-menu > .nav-dropdown > a::after {
  content: '';
  position: absolute;
  bottom: -2px;
  left: 0;
  width: 0;
  height: 2px;
  background: var(--nav-accent, #c5a059);
  transition: width 0.3s ease;
}

/* Retain top-level link focus color states when traversing down inside dropdown spaces */
.nav-menu > .nav-dropdown:hover > a {
  color: #FFFFFF !important;
}

.nav-menu > .nav-dropdown:hover > a::after {
  width: 100%;
}

/* ===== DROPDOWN MENU ARCHITECTURE ===== */
.nav-dropdown {
  position: relative;
  display: inline-block;
}

.nav-dropdown > a {
  display: flex;
  align-items: center;
  cursor: pointer;
}

/* Interactive safety node overlay bridging layout coordinates */
.nav-dropdown::after {
  content: '';
  position: absolute;
  top: 100%;
  left: 0;
  width: 100%;
  height: 25px;
  background: transparent;
  z-index: 1000;
}

.dropdown-menu {
  position: absolute;
  top: calc(100% + 20px);
  left: 50%;
  transform: translateX(-50%) translateY(10px);
  min-width: 320px;
  background: linear-gradient(180deg, #041224 0%, #020a14 100%);
  border: 1px solid rgba(197, 160, 89, 0.15);
  border-radius: 6px;
  box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6), 
              inset 0 1px 0 rgba(255, 255, 255, 0.05);
  opacity: 0;
  visibility: hidden;
  transition: opacity 0.3s cubic-bezier(0.16, 1, 0.3, 1), 
              visibility 0.3s cubic-bezier(0.16, 1, 0.3, 1), 
              transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  z-index: 1001;
  padding: 16px 0;
  pointer-events: none;
}

.nav-dropdown:hover .dropdown-menu {
  opacity: 1;
  visibility: visible;
  transform: translateX(-50%) translateY(0);
  pointer-events: auto;
}

/* Structural Layout End Axis Mirroring Overrides */
.nav-dropdown:last-child .dropdown-menu,
.nav-dropdown:nth-last-child(2) .dropdown-menu {
  left: auto;
  right: 0;
  transform: translateY(10px);
}

.nav-dropdown:last-child:hover .dropdown-menu,
.nav-dropdown:nth-last-child(2):hover .dropdown-menu {
  transform: translateY(0);
}

/* ===== DROPDOWN COLUMNS & GROUPS ===== */
.dropdown-group {
  position: relative;
  margin-bottom: 4px;
}

.dropdown-group:last-child {
  margin-bottom: 0;
}

.dropdown-group > .group-link {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 12px 24px;
  font-size: 12px;
  font-weight: 600;
  color: #FFFFFF;
  text-transform: uppercase;
  letter-spacing: 0.08em;
  transition: all 0.25s ease;
  cursor: pointer;
}

.dropdown-group:has(.sub-dropdown) > .group-link::after {
  content: '→';
  font-size: 11px;
  opacity: 0.3;
  transition: transform 0.25s ease, opacity 0.25s ease;
}

.dropdown-group:hover > .group-link {
  background: linear-gradient(90deg, rgba(197, 160, 89, 0.08) 0%, rgba(197, 160, 89, 0) 100%);
  color: #c5a059;
  padding-left: 28px;
}

.dropdown-group:hover > .group-link::after {
  opacity: 1;
  transform: translateX(4px);
  color: #c5a059;
}

/* ===== NESTED SECONDARY LAYER SUB-DROPDOWNS ===== */
.sub-dropdown {
  position: absolute;
  top: -6px;
  left: calc(100% + 15px); /* Clean 15px split spacing structure */
  min-width: 300px;
  background: #020b16;
  border: 1px solid rgba(197, 160, 89, 0.18);
  border-radius: 6px;
  box-shadow: 20px 20px 50px rgba(0, 0, 0, 0.6);
  padding: 16px 0;
  opacity: 0;
  visibility: hidden;
  transform: translateX(12px);
  transition: opacity 0.3s cubic-bezier(0.16, 1, 0.3, 1), 
              visibility 0.3s cubic-bezier(0.16, 1, 0.3, 1), 
              transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
  z-index: 1002;
  pointer-events: none;
}

.dropdown-group:hover .sub-dropdown {
  opacity: 1;
  visibility: visible;
  transform: translateX(0);
  pointer-events: auto;
}

/* Lateral tracking protection bridge over 15px empty spaces */
.dropdown-group::after {
  content: '';
  position: absolute;
  top: 0;
  right: -22px;
  width: 27px;
  height: 100%;
  background: transparent;
  z-index: 1000;
}

/* Nested Layer Element Properties */
.sub-dropdown a {
  display: block;
  padding: 11px 28px; /* Roomy airspace values */
  font-size: 13px;
  font-weight: 400;
  color: #a0aec0;
  text-decoration: none;
  line-height: 1.4;
  transition: all 0.25s cubic-bezier(0.16, 1, 0.3, 1);
  white-space: nowrap;
  position: relative;
}

/* Premium micro-interaction accent marker styling */
.sub-dropdown a::before {
  content: '';
  position: absolute;
  left: 16px;
  top: 50%;
  transform: translateY(-50%) scaleY(0.3);
  width: 2px;
  height: 12px;
  background: #c5a059;
  opacity: 0;
  transition: opacity 0.25s ease, transform 0.25s ease;
}

.sub-dropdown a:hover {
  background: rgba(255, 255, 255, 0.02);
  color: #FFFFFF;
  padding-left: 34px;
}

.sub-dropdown a:hover::before {
  opacity: 1;
  transform: translateY(-50%) scaleY(1);
}

/* Reverse Axis Geometry Matrix Logic Rules */
.nav-dropdown:last-child .dropdown-group .sub-dropdown,
.nav-dropdown:nth-last-child(2) .dropdown-group .sub-dropdown {
  left: auto;
  right: calc(100% + 15px);
  transform: translateX(-12px);
}

.nav-dropdown:last-child .dropdown-group:hover .sub-dropdown,
.nav-dropdown:nth-last-child(2) .dropdown-group:hover .sub-dropdown {
  transform: translateX(0);
}

.nav-dropdown:last-child .dropdown-group::after,
.nav-dropdown:nth-last-child(2) .dropdown-group::after {
  right: auto;
  left: -22px;
}

/* Alternative Fallback direct-level elements styling */
.dropdown-menu > a {
  display: block;
  padding: 12px 24px;
  font-size: 13px;
  font-weight: 400;
  color: #a0aec0;
  text-decoration: none;
  transition: all 0.2s ease;
}

.dropdown-menu > a:hover {
  background: linear-gradient(90deg, rgba(197, 160, 89, 0.08) 0%, rgba(197, 160, 89, 0) 100%);
  color: #c5a059;
  padding-left: 30px;
}

/* ===== CTA ACTION BUTTON STYLE ===== */
.nav-btn {
  padding: 10px 24px;
  border-radius: 2px;
  font-size: 12px;
  font-weight: 600;
  letter-spacing: 0.08em;
  text-transform: uppercase;
  text-decoration: none;
  transition: all 0.3s ease;
  background: transparent;
  color: #FFFFFF;
  border: 1px solid #8da2bb;
  cursor: pointer;
  white-space: nowrap;
  display: inline-block;
  flex-shrink: 0;
}

.nav-btn:hover {
  background: #FFFFFF;
  color: #030d1a !important;
  border-color: #FFFFFF;
  transform: translateY(-1px);
}

/* ===== USER ACCOUNTS PORTAL CONTROLS ===== */
.nav-user {
  position: relative;
  flex-shrink: 0;
}

.user-dropdown-btn {
  display: flex;
  align-items: center;
  gap: 10px;
  padding: 8px 18px;
  background: rgba(197, 160, 89, 0.05);
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 2px;
  cursor: pointer;
  font-size: 13px;
  font-weight: 400;
  color: #8da2bb;
  transition: all 0.2s ease;
}

.user-dropdown-btn:hover {
  background: #0a2a4e;
  border-color: #c5a059;
  color: #FFFFFF;
}

.dropdown-arrow {
  transition: transform 0.2s ease;
}

.user-dropdown.open .dropdown-arrow {
  transform: rotate(180deg);
}

.user-dropdown-menu {
  position: absolute;
  top: calc(100% + 12px);
  right: 0;
  min-width: 220px;
  background: #05162b;
  border: 1px solid rgba(255, 255, 255, 0.08);
  border-radius: 4px;
  box-shadow: 0 10px 30px rgba(0, 0, 0, 0.5);
  opacity: 0;
  visibility: hidden;
  transform: translateY(-8px);
  transition: all 0.2s ease;
  z-index: 1001;
  overflow: hidden;
}

.user-dropdown.open .user-dropdown-menu {
  opacity: 1;
  visibility: visible;
  transform: translateY(0);
}

.user-dropdown-menu a {
  display: block;
  padding: 12px 24px;
  font-size: 13px;
  font-weight: 400;
  color: #8da2bb;
  text-decoration: none;
  transition: all 0.2s ease;
}

.user-dropdown-menu a:hover {
  background: rgba(197, 160, 89, 0.08);
  color: #FFFFFF;
}

.user-dropdown-menu hr {
  margin: 8px 0;
  border: none;
  border-top: 1px solid rgba(255, 255, 255, 0.08);
}

/* ===== TOGGLE CONTROLS FOR MOBILE RUNTIME ===== */
.mobile-toggle {
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 30px;
  height: 21px;
  cursor: pointer;
  z-index: 1002;
  flex-shrink: 0;
}

.mobile-toggle span {
  display: block;
  height: 2px;
  width: 100%;
  background: #FFFFFF;
  transition: all 0.3s ease;
  border-radius: 2px;
}

.mobile-toggle.open span:nth-child(1) { transform: translateY(9px) rotate(45deg); }
.mobile-toggle.open span:nth-child(2) { opacity: 0; transform: scaleX(0); }
.mobile-toggle.open span:nth-child(3) { transform: translateY(-9px) rotate(-45deg); }

.nav-overlay {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.6);
  opacity: 0;
  visibility: hidden;
  transition: all 0.3s ease;
  z-index: 999;
  backdrop-filter: blur(4px);
}

.nav-overlay.open {
  opacity: 1;
  visibility: visible;
}

.mobile-only {
  display: none;
}

/* ===== SYSTEM LAYOUT RESPONSIVE BREAKPOINTS ===== */
@media (max-width: 1400px) {
  .top-nav { padding: 15px 40px; }
  .nav-right { gap: 30px; }
  .nav-menu { gap: 20px; }
}

@media (max-width: 1300px) {
  .top-nav { padding: 12px 35px; }
  .nav-right { gap: 25px; }
  .nav-menu { gap: 18px; }
  .nav-menu > .nav-dropdown > a { font-size: 12px; }
}

@media (max-width: 1200px) {
  .top-nav { padding: 12px 30px; }
  .nav-right { gap: 20px; }
  .nav-menu { gap: 15px; }
}

@media (max-width: 1100px) {
  .top-nav { padding: 12px 25px; }
  .nav-right { gap: 15px; }
  .nav-menu { gap: 12px; }
  .nav-menu > .nav-dropdown > a { font-size: 11px; }
}

/* MOBILE AND TABLET DRAWER OVERRIDES */
@media (max-width: 950px) {
  .mobile-toggle { display: flex; }
  .mobile-only { display: flex !important; }
  .nav-dropdown::after, .dropdown-group::after { display: none; }
  .top-nav { padding: 12px 20px; }
  .nav-logo img { height: 120px; }
  .top-nav.scrolled .nav-logo img { height: 120px; }
  
  .nav-right {
    position: fixed;
    top: 0;
    right: -100%;
    width: 320px;
    height: 100vh;
    background: #030d1a;
    flex-direction: column;
    justify-content: flex-start;
    align-items: stretch;
    padding: 80px 24px 40px;
    gap: 30px;
    box-shadow: -8px 0 32px rgba(0, 0, 0, 0.3);
    transition: right 0.35s cubic-bezier(0.2, 0.9, 0.4, 1);
    z-index: 1001;
    overflow-y: auto;
  }
  
  .nav-right.open { right: 0; }
  .nav-menu { flex-direction: column; gap: 16px; width: 100%; }
  .nav-menu > .nav-dropdown { width: 100%; position: static; }
  
  .nav-menu > .nav-dropdown > a {
    font-size: 16px;
    font-weight: 400;
    padding: 12px 0;
    width: 100%;
    white-space: normal;
    display: block;
  }
  
  .nav-menu > .nav-dropdown > a::after { display: none; }
  
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
    padding: 70px 24px 40px;
    margin: 0;
    overflow-y: auto;
    background: #030d1a;
    opacity: 0;
    visibility: hidden;
    transform: translateX(100%);
    transition: transform 0.35s ease, opacity 0.3s ease;
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
    gap: 16px;
    margin-bottom: 32px;
    padding-bottom: 16px;
    border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    position: sticky;
    top: 0;
    background: #030d1a;
    z-index: 10;
  }
  
  .back-btn {
    background: none;
    border: none;
    font-size: 16px;
    font-weight: 400;
    color: #8da2bb;
    cursor: pointer;
    padding: 8px 0;
    display: flex;
    align-items: center;
    gap: 6px;
  }
  
  .dropdown-title { font-size: 18px; font-weight: 500; color: #FFFFFF; }
  .dropdown-group > .group-link { padding: 14px 0; font-size: 15px; font-weight: 400; }
  
  .sub-dropdown {
    position: static;
    width: 100%;
    box-shadow: none;
    border: none;
    padding: 0 0 0 20px;
    margin-top: 8px;
    opacity: 1;
    visibility: visible;
    display: none;
    background: transparent;
    pointer-events: auto;
    transform: none;
  }
  
  .dropdown-group.open .sub-dropdown { display: block; }
  
  .sub-dropdown a {
    padding: 10px 0;
    font-size: 14px;
    font-weight: 400;
    white-space: normal;
    color: #8da2bb;
  }
  
  .sub-dropdown a::before { display: none; }
  
  .dropdown-group > .group-link {
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  
  .dropdown-group > .group-link::after {
    content: "▼" !important;
    font-size: 10px;
    color: #8da2bb;
    opacity: 1;
    transform: none !important;
    transition: transform 0.2s ease;
  }
  
  .dropdown-group.open > .group-link::after { transform: rotate(180deg) !important; }
  .nav-btn { width: 100%; text-align: center; padding: 14px 24px; font-size: 14px; font-weight: 400; border-radius: 2px; }
  .nav-user { width: 100%; }
  .user-dropdown { width: 100%; }
  .user-dropdown-btn { width: 100%; justify-content: space-between; padding: 12px 16px; font-weight: 400; border-radius: 2px; }
  .user-dropdown-menu { position: static; width: 100%; margin-top: 12px; box-shadow: none; border: 1px solid rgba(255, 255, 255, 0.08); }
  .user-dropdown:not(.open) .user-dropdown-menu { display: none; }
  .user-dropdown.open .user-dropdown-menu { display: block; opacity: 1; visibility: visible; transform: none; }
}

@media (max-width: 480px) {
  .top-nav { padding: 10px 16px; }
  .nav-logo img { height: 120px; }
  .top-nav.scrolled .nav-logo img { height: 120px; }
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
  
  // Sticky Navbar Classing Tracker
  window.addEventListener('scroll', function() {
    if (window.scrollY > 20) {
      stickyNav.classList.add('scrolled');
    } else {
      stickyNav.classList.remove('scrolled');
    }
  });

  function closeMobileMenu() {
    if (mobileToggle) mobileToggle.classList.remove('open');
    if (navMenu) navMenu.classList.remove('open');
    if (navOverlay) navOverlay.classList.remove('open');
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
  
  // Mobile Dropdown Handling
  const navDropdowns = document.querySelectorAll('.nav-dropdown');
  navDropdowns.forEach(dropdown => {
    const dropdownLink = dropdown.querySelector(':scope > a');
    const hasDropdownMenu = dropdown.querySelector('.dropdown-menu');
    
    if (dropdownLink && hasDropdownMenu) {
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
  
  // Mobile Group Toggles
  const groupLinks = document.querySelectorAll('.dropdown-group > .group-link');
  groupLinks.forEach(link => {
    link.addEventListener('click', function(e) {
      if (window.innerWidth <= 950) {
        e.preventDefault();
        const parentGroup = this.closest('.dropdown-group');
        parentGroup.classList.toggle('open');
      }
    });
  });
  
  // Click actions out of active drawer layouts
  const navLinks = document.querySelectorAll('.dropdown-menu a, .sub-dropdown a');
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      if (window.innerWidth <= 950) {
        setTimeout(() => {
          closeMobileMenu();
        }, 300);
      }
    });
  });
  
  // Authenticated User Dropdown Events
  if (userDropdown) {
    const dropdownBtn = userDropdown.querySelector('.user-dropdown-btn');
    dropdownBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      userDropdown.classList.toggle('open');
    });
    
    document.addEventListener('click', function() {
      userDropdown.classList.remove('open');
    });
  }
});

function closeSubMenu(button) {
  const dropdown = button.closest('.nav-dropdown');
  if (dropdown) {
    dropdown.classList.remove('mobile-open');
  }
}
</script>
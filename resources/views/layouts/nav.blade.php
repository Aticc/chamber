<!-- TOP NAVIGATION - FULLY RESPONSIVE WITH AUTH (FIXED) -->
<div class="top-nav" id="stickyNav">
  <div class="nav-logo" onclick="window.scrollTo({top: 0, behavior: 'smooth'})">
    {{-- <img src="{{ asset('assets/images/IMG_0963.PNG') }}" width="100" height="86" alt="ATICC Logo"> --}}
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
        <a href="/#">Home</a>
        <a href="{{ route('about') }}">About Us</a>
        <a href="{{ route('access') }}">Membership</a>
        <a href="{{ route('verification') }}">Verification</a>
        <a href="{{ route('leadership') }}">Leadership</a>
        <a href="{{ route('event') }}">Engagements</a>
        <a href="{{ route('contact') }}">Contact</a>
      @else
        <a href="{{ route('dashboard') }}">Dashboard</a>
        <a href="{{ route('membership.apply') }}">Membership</a>
        <a href="{{ route('event') }}">Engagements</a>
        <a href="{{ route('contact') }}">Support</a>
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
            <a href="{{ route('dashboard') }}">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <rect x="3" y="3" width="7" height="7"/>
                <rect x="14" y="3" width="7" height="7"/>
                <rect x="14" y="14" width="7" height="7"/>
                <rect x="3" y="14" width="7" height="7"/>
              </svg>
              Dashboard
            </a>
            <a href="{{ route('membership.apply') }}">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M19 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V5a2 2 0 0 0-2-2z"/>
                <path d="M9 3v18M15 3v18M3 9h18M3 15h18"/>
              </svg>
              Apply for Membership
            </a>
            <hr>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"/>
                <polyline points="16 17 21 12 16 7"/>
                <line x1="21" y1="12" x2="9" y2="12"/>
              </svg>
              Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
          </div>
        </div>
      </div>
    @endguest
  </div>
</div>

<!-- Add overlay div outside nav -->
<div class="nav-overlay" id="navOverlay"></div>

<style>
/* ===== RESPONSIVE NAVIGATION STYLES (FIXED) ===== */
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

/* Scrolled state */
.top-nav.scrolled {
  padding: 10px 19px;
  box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
}

/* Logo */
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

/* Navigation Right Container */
.nav-right {
  display: flex;
  align-items: center;
  gap: 40px;
}

/* Navigation Menu */
.nav-menu {
  display: flex;
  gap: 32px;
}

.nav-menu a {
  font-size: 12px;
  font-weight: 400;
  color: #0e0e0e;
  text-decoration: none;
  letter-spacing: 0.03em;
  transition: color 0.2s ease;
  white-space: nowrap;
}

.nav-menu a:hover {
  color: #17015e;
}

/* Navigation Button */
.nav-btn {
  padding: 10px 28px;
  border-radius: 1px;
  font-size: 13px;
  font-weight: 600;
  letter-spacing: 0.05em;
  text-decoration: none;
  transition: all 0.2s ease;
  background: #17015e;
  color: #FFFFFF;
  border: none;
  cursor: pointer;
  white-space: nowrap;
  display: inline-block;
}

.nav-btn:hover {
  background: #2a0a8a;
  transform: translateY(-1px);
  color: white;
}

/* User Dropdown Styles */
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
  border-color: #17015e;
}

.user-dropdown-btn:hover svg {
  stroke: #17015e;
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
  color: #17015e;
}

.user-dropdown-menu a svg {
  stroke: #7A8B9B;
}

.user-dropdown-menu a:hover svg {
  stroke: #17015e;
}

.user-dropdown-menu hr {
  margin: 8px 0;
  border: none;
  border-top: 1px solid #E8EBED;
}

/* Mobile Toggle Button */
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

/* Overlay */
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

/* ===== RESPONSIVE BREAKPOINTS ===== */
@media (max-width: 1100px) {
  .top-nav {
    padding: 16px 40px;
  }
  
  .top-nav.scrolled {
    padding: 10px 40px;
  }
  
  .nav-menu {
    gap: 24px;
  }
}

@media (max-width: 950px) {
  .top-nav {
    padding: 12px 24px;
  }
  
  .top-nav.scrolled {
    padding: 8px 24px;
  }
  
  .mobile-toggle {
    display: flex;
  }
  
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
  
  .nav-right.open {
    right: 0;
  }
  
  .nav-menu {
    flex-direction: column;
    gap: 20px;
    width: 100%;
  }
  
  .nav-menu a {
    font-size: 16px;
    padding: 8px 0;
    width: 100%;
    white-space: normal;
  }
  
  .nav-btn {
    width: 100%;
    text-align: center;
    padding: 12px 24px;
  }
  
  .nav-user {
    width: 100%;
  }
  
  .user-dropdown {
    width: 100%;
  }
  
  .user-dropdown-btn {
    width: 100%;
    justify-content: space-between;
    padding: 12px 16px;
  }
  
  .user-dropdown-menu {
    position: static;
    width: 100%;
    margin-top: 10px;
    box-shadow: none;
    border: 1px solid #E8EBED;
  }
  
  .user-dropdown:not(.open) .user-dropdown-menu {
    display: none;
  }
  
  .user-dropdown.open .user-dropdown-menu {
    display: block;
    opacity: 1;
    visibility: visible;
    transform: none;
  }
}

@media (max-width: 480px) {
  .top-nav {
    padding: 8px 16px;
  }
  
  .nav-logo img {
    height: 100px;
  }
  
  .top-nav.scrolled .nav-logo img {
    height: 100px;
  }
  
  .nav-right {
    width: 100%;
    right: -100%;
  }
}
</style>

<script>
// ===== RESPONSIVE NAVIGATION SCRIPT (FIXED) =====
document.addEventListener('DOMContentLoaded', function() {
  const mobileToggle = document.getElementById('mobileToggle');
  const navMenu = document.getElementById('navMenu');
  const navOverlay = document.getElementById('navOverlay');
  const userDropdown = document.querySelector('.user-dropdown');
  const stickyNav = document.getElementById('stickyNav');
  
  // Function to close mobile menu
  function closeMobileMenu() {
    if (mobileToggle) mobileToggle.classList.remove('open');
    if (navMenu) navMenu.classList.remove('open');
    if (navOverlay) navOverlay.classList.remove('open');
    document.body.style.overflow = '';
  }
  
  // Function to open mobile menu
  function openMobileMenu() {
    if (mobileToggle) mobileToggle.classList.add('open');
    if (navMenu) navMenu.classList.add('open');
    if (navOverlay) navOverlay.classList.add('open');
    document.body.style.overflow = 'hidden';
  }
  
  // Toggle mobile menu
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
  
  // Close menu when clicking overlay
  if (navOverlay) {
    navOverlay.addEventListener('click', function() {
      closeMobileMenu();
      // Also close any open dropdowns
      if (userDropdown) userDropdown.classList.remove('open');
    });
  }
  
  // Close menu when clicking a navigation link (mobile)
  const navLinks = document.querySelectorAll('.nav-menu a');
  navLinks.forEach(link => {
    link.addEventListener('click', function() {
      if (window.innerWidth <= 950) {
        closeMobileMenu();
      }
    });
  });
  
  // User dropdown toggle
  if (userDropdown) {
    const dropdownBtn = userDropdown.querySelector('.user-dropdown-btn');
    dropdownBtn.addEventListener('click', function(e) {
      e.stopPropagation();
      userDropdown.classList.toggle('open');
    });
    
    // Close dropdown when clicking outside
    document.addEventListener('click', function(e) {
      if (userDropdown && !userDropdown.contains(e.target)) {
        userDropdown.classList.remove('open');
      }
    });
  }
  
  // Navbar scroll effect
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      stickyNav.classList.add('scrolled');
    } else {
      stickyNav.classList.remove('scrolled');
    }
  });
  
  // Handle window resize - reset mobile menu if resizing to desktop
  window.addEventListener('resize', function() {
    if (window.innerWidth > 950) {
      closeMobileMenu();
      if (userDropdown) userDropdown.classList.remove('open');
    }
  });
  
  // Prevent body scroll when mobile menu is open
  document.body.addEventListener('touchmove', function(e) {
    if (navMenu && navMenu.classList.contains('open')) {
      e.preventDefault();
    }
  }, { passive: false });
});
</script>
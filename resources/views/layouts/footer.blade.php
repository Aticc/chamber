<!-- FOOTER -->
<footer id="footer">
  <div class="footer-container">
    <div class="footer-grid">
      <div class="footer-col">
        <div class="footer-logo-img">
          <img src="{{ asset('assets/images/IMG_0964.PNG') }}" alt="ATICC Logo">
        </div>
        <div class="footer-desc">Connecting institutional capital with verified opportunities. Executing transactions that transform Africa.</div>
      </div>
      <div class="footer-col">
        <h4>CONTACT</h4>
        <p>support@aticchamber.org</p>
        <p>6th Floor, Focus, London E14 8HU</p>
      </div>
      <div class="footer-col">
        <h4>QUICK LINKS</h4>
        <a href="#hero">Institution</a>
        <a href="#access">Access</a>
        <a href="#intelligence">Intelligence</a>
        <a href="#partner">Institute</a>
        <a href="#execution">Execution</a>
      </div>
      <div class="footer-col">
        <h4>FOLLOW</h4>
        <div class="social-icons">
          <a href="#" class="social-icon" aria-label="LinkedIn">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/>
              <rect x="2" y="9" width="4" height="12"/>
              <circle cx="4" cy="4" r="2"/>
            </svg>
          </a>
          <a href="#" class="social-icon" aria-label="X">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M4 4l11.733 16h4.267l-11.733-16z"/>
              <path d="M4 20l6.768-6.768"/>
              <path d="M20 4l-6.768 6.768"/>
            </svg>
          </a>
          <a href="#" class="social-icon" aria-label="YouTube">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"/>
              <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
    <div class="bottom-bar">
      <span>© {{ date('Y') }} ATICC. All Rights Reserved.</span>
      <span>Privacy Policy | Terms of Use</span>
    </div>
  </div>
</footer>

<style>

/* Footer Styles */
footer {
  background: #0e0e0e;
  color: #a0a8b2;
  padding: 60px 0 20px;
}

.footer-container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 0 20px;
}

.footer-grid {
  display: grid;
  grid-template-columns: repeat(4, 1fr);
  gap: 40px;
  margin-bottom: 40px;
}

.footer-col h4 {
  color: white;
  font-size: 14px;
  font-weight: 600;
  letter-spacing: 0.08em;
  margin-bottom: 20px;
}

.footer-col p {
  font-size: 13px;
  line-height: 1.6;
  margin-bottom: 6px;
  color: #a0a8b2;
}

.footer-col a {
  display: block;
  font-size: 13px;
  color: #a0a8b2;
  text-decoration: none;
  margin-bottom: 8px;
  transition: color 0.2s ease;
}

.footer-col a:hover {
  color: white;
}

.footer-logo-img img {
  max-width: 160px;
  margin-bottom: 15px;
}

.footer-desc {
  font-size: 13px;
  line-height: 1.5;
  color: #a0a8b2;
  max-width: 250px;
}

.social-icons {
  display: flex;
  flex-direction: row;
  gap: 24px;
  align-items: center;
}

.social-icon {
  display: flex;
  align-items: center;
  gap: 8px;
  color: #a0a8b2;
  text-decoration: none;
  font-size: 13px;
  transition: all 0.2s ease;
}

.social-icon svg {
  width: 16px;
  height: 16px;
  transition: all 0.2s ease;
}

.social-icon:hover {
  color: white;
}

.social-icon:hover svg {
  transform: translateY(-2px);
}

.bottom-bar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding-top: 30px;
  border-top: 1px solid rgba(255,255,255,0.1);
  font-size: 12px;
  color: #7a8b9b;
}

.bottom-bar span:last-child {
  display: flex;
  gap: 20px;
}

@media (max-width: 1024px) {
  .footer-grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
  }
  .social-icons {
    flex-direction: row;
    flex-wrap: wrap;
  }
}

@media (max-width: 768px) {
  .footer-grid {
    grid-template-columns: 1fr;
    gap: 30px;
  }
  .bottom-bar {
    flex-direction: column;
    gap: 10px;
    text-align: center;
  }
  .social-icons {
    justify-content: flex-start;
  }
}
</style>
@extends('layouts.member')

@section('title', 'Dashboard')

@section('content')
<div class="member-dashboard">
    <!-- Welcome Banner -->
    <div class="welcome-banner">
        <div class="welcome-text">
            <h1>Welcome back, {{ $member->first_name }} {{ $member->last_name }}</h1>
            <p>ATICC Institutional Portal - Secure Operational Platform for Verified Members</p>
        </div>
        <div class="welcome-date">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                <line x1="16" y1="2" x2="16" y2="6"/>
                <line x1="8" y1="2" x2="8" y2="6"/>
                <line x1="3" y1="10" x2="21" y2="10"/>
            </svg>
            <span>{{ now()->format('l, F j, Y') }}</span>
        </div>
    </div>

    <!-- Status Cards -->
    <div class="status-cards">
        <div class="status-card">
            <div class="status-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M22 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
            </div>
            <div class="status-info">
                <div class="status-label">Institutional Standing</div>
                <div class="status-value active">Active / Good Standing</div>
            </div>
        </div>
        <div class="status-card">
            <div class="status-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
            </div>
            <div class="status-info">
                <div class="status-label">Membership Classification</div>
                <div class="status-value">{{ $member->membership_level ?? $member->selected_tier ?? 'Institutional Member' }}</div>
            </div>
        </div>
        <div class="status-card">
            <div class="status-icon">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <polyline points="20 6 9 17 4 12"/>
                </svg>
            </div>
            <div class="status-info">
                <div class="status-label">Verification Status</div>
                <div class="status-value verified">Verified / Cleared</div>
            </div>
        </div>
    </div>

    <!-- Section 1: Trust & Verification Status -->
    <div class="section-card">
        <div class="section-header">
            <h3>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M12 2L3 7l9 5 9-5-9-5z"/>
                    <path d="M3 12l9 5 9-5"/>
                    <path d="M3 17l9 5 9-5"/>
                </svg>
                Trust & Verification (T&V) Status
            </h3>
            <span class="badge">Active</span>
        </div>
        <div class="section-body">
            <p>ATICC operates under a strict, mandatory Trust & Verification (T&V) framework engineered to preserve institutional integrity, transaction credibility, and ecosystem trust standards.</p>
            <div class="verification-list">
                <div class="verification-item">
                    <div class="check-circle success"></div>
                    <span>KYC Review Status: <strong>Completed</strong></span>
                </div>
                <div class="verification-item">
                    <div class="check-circle success"></div>
                    <span>AML Review Status: <strong>Completed</strong></span>
                </div>
                <div class="verification-item">
                    <div class="check-circle success"></div>
                    <span>Corporate Registry Status: <strong>Verified</strong></span>
                </div>
                <div class="verification-item">
                    <div class="check-circle success"></div>
                    <span>Annual Renewal Status: <strong>Current</strong></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 2: Authorized Trade Corridors -->
    <div class="section-card">
        <div class="section-header">
            <h3>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="2" y1="12" x2="22" y2="12"/>
                    <path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
                </svg>
                Authorized Trade Corridors
            </h3>
            <span class="badge">Active</span>
        </div>
        <div class="section-body">
            <div class="corridors-grid">
                <div class="corridor-tag">Federal Republic of Nigeria</div>
                <div class="corridor-tag">Republic of Rwanda</div>
                <div class="corridor-tag">United Kingdom</div>
                <div class="corridor-tag">East Africa Regional Corridor</div>
                <div class="corridor-tag">Southern Africa Regional Corridor</div>
                <div class="corridor-tag">West Africa Regional Corridor</div>
            </div>
        </div>
    </div>

    <!-- Section 3: Institutional Documents Vault -->
    <div class="section-card">
        <div class="section-header">
            <h3>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                    <line x1="9" y1="9" x2="15" y2="15"/>
                    <line x1="15" y1="9" x2="9" y2="15"/>
                </svg>
                Institutional Documents Vault
            </h3>
            <span class="badge">Secure Access</span>
        </div>
        <div class="section-body">
            <div class="documents-grid">
                <a href="#" class="document-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                    </svg>
                    Certificate of Institutional Membership
                </a>
                <a href="#" class="document-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                    </svg>
                    T&V Compliance Status Report
                </a>
                <a href="#" class="document-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                    </svg>
                    GRC Protocols
                </a>
                <a href="#" class="document-link">
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                    </svg>
                    Institutional Governance Framework
                </a>
            </div>
        </div>
    </div>

    <!-- Section 4: Secretariat Communications -->
    <div class="section-card">
        <div class="section-header">
            <h3>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                    <polyline points="22,6 12,13 2,6"/>
                </svg>
                Secretariat Communications
            </h3>
            <span class="badge">Official</span>
        </div>
        <div class="section-body">
            <div class="communications-list">
                <div class="communication-item">
                    <div class="comm-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                        </svg>
                    </div>
                    <div class="comm-content">
                        <h4>Q3 2025 Trade Corridor Updates</h4>
                        <p>Important updates regarding East Africa and Southern Africa trade corridors.</p>
                        <span class="comm-date">June 1, 2025</span>
                    </div>
                </div>
                <div class="communication-item">
                    <div class="comm-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2a10 10 0 0 1 10 10c0 5.52-4.48 10-10 10S2 17.52 2 12 6.48 2 12 2z"/>
                            <line x1="12" y1="8" x2="12" y2="12"/>
                            <circle cx="12" cy="16" r="0.5" fill="currentColor"/>
                        </svg>
                    </div>
                    <div class="comm-content">
                        <h4>Annual T&V Renewal Notice</h4>
                        <p>Annual Trust & Verification renewal documentation required.</p>
                        <span class="comm-date">May 28, 2025</span>
                    </div>
                </div>
                <div class="communication-item">
                    <div class="comm-icon">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/>
                        </svg>
                    </div>
                    <div class="comm-content">
                        <h4>West Africa Infrastructure Mandate</h4>
                        <p>New infrastructure development opportunities available.</p>
                        <span class="comm-date">May 20, 2025</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 5: Opportunities Pipeline -->
    <div class="section-card">
        <div class="section-header">
            <h3>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M22 12h-4l-3 9-4-18-3 9H2"/>
                </svg>
                Opportunities Pipeline
            </h3>
            <span class="badge">Active</span>
        </div>
        <div class="section-body">
            <div class="opportunities-list">
                <div class="opportunity-item">
                    <div class="opp-status vetting">Under Review</div>
                    <div class="opp-details">
                        <h4>Lagos-Ibadan Railway Infrastructure</h4>
                        <p>$500M infrastructure financing opportunity in Nigeria</p>
                        <div class="opp-meta">Infrastructure • West Africa</div>
                    </div>
                </div>
                <div class="opportunity-item">
                    <div class="opp-status matching">Corridor Matching</div>
                    <div class="opp-details">
                        <h4>Kigali Logistics Hub Development</h4>
                        <p>Strategic Partnership in Rwanda</p>
                        <div class="opp-meta">Logistics • East Africa</div>
                    </div>
                </div>
                <div class="opportunity-item">
                    <div class="opp-status diligence">Due Diligence</div>
                    <div class="opp-details">
                        <h4>Green Energy Initiative</h4>
                        <p>Renewable energy project portfolio</p>
                        <div class="opp-meta">Energy • East Africa</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 6: Membership Profile -->
    <div class="section-card">
        <div class="section-header">
            <h3>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
                Membership Profile
            </h3>
        </div>
        <div class="section-body">
            <div class="profile-grid">
                <div class="profile-field">
                    <label>Organization</label>
                    <p>{{ $member->org_name }}</p>
                </div>
                <div class="profile-field">
                    <label>Member Since</label>
                    <p>{{ $member->created_at ? $member->created_at->format('F j, Y') : 'N/A' }}</p>
                </div>
                <div class="profile-field">
                    <label>Renewal Date</label>
                    <p>{{ date('F j, Y', strtotime('+1 year')) }}</p>
                </div>
                <div class="profile-field">
                    <label>Primary Contact</label>
                    <p>{{ $member->first_name }} {{ $member->last_name }}</p>
                </div>
                <div class="profile-field">
                    <label>Email</label>
                    <p>{{ $member->email }}</p>
                </div>
                <div class="profile-field">
                    <label>Phone</label>
                    <p>{{ $member->phone ?? 'Not provided' }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Section 7: Governance Resources -->
    <div class="section-card">
        <div class="section-header">
            <h3>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M4 4h16v16H4z"/>
                    <line x1="8" y1="8" x2="16" y2="8"/>
                    <line x1="8" y1="12" x2="16" y2="12"/>
                    <line x1="8" y1="16" x2="12" y2="16"/>
                </svg>
                Governance & Compliance Resources
            </h3>
        </div>
        <div class="section-body">
            <div class="resources-list">
                <a href="#" class="resource-link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                        <polyline points="14 2 14 8 20 8"/>
                    </svg>
                    Institutional Governance Framework
                </a>
                <a href="#" class="resource-link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                        <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                    </svg>
                    T&V Regulatory Standards
                </a>
                <a href="#" class="resource-link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M4 4h16v16H4z"/>
                        <line x1="8" y1="8" x2="16" y2="8"/>
                        <line x1="8" y1="12" x2="16" y2="12"/>
                        <line x1="8" y1="16" x2="12" y2="16"/>
                    </svg>
                    Membership Terms & Obligations
                </a>
                <a href="#" class="resource-link">
                    <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M20 6L9 17l-5-5"/>
                    </svg>
                    Legal & Compliance Notices
                </a>
            </div>
        </div>
    </div>

    <!-- Section 8: Support -->
    <div class="section-card">
        <div class="section-header">
            <h3>
                <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <circle cx="12" cy="12" r="10"/>
                    <path d="M12 16v-4M12 8h.01"/>
                </svg>
                Support & Coordination
            </h3>
        </div>
        <div class="section-body">
            <p>For inquiries regarding onboarding, compliance, or system issues, contact the Secretariat-General.</p>
            <div class="support-buttons">
                <a href="mailto:secretariat@aticchamber.org" class="btn-primary">Email Secretariat</a>
                <a href="#" class="btn-secondary">Secure Messaging</a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="portal-footer">
        <p>ATICC operates as a private, member-governed clearinghouse for secure trade facilitation and transaction-driven capital deployment.</p>
        <p class="footer-quote">"Structure Defines Authority. Integrity Anchors Capital. Execution Drives Scale."</p>
    </div>
</div>

<style>
.member-dashboard {
    max-width: 1200px;
    margin: 0 auto;
}

/* Welcome Banner */
.welcome-banner {
    background: linear-gradient(135deg, #041931 0%, #031B4E 100%);
    border-radius: 20px;
    padding: 28px 32px;
    margin-bottom: 28px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.welcome-text h1 {
    font-size: 24px;
    font-weight: 600;
    color: white;
    margin-bottom: 8px;
}

.welcome-text p {
    font-size: 14px;
    color: rgba(255,255,255,0.8);
}

.welcome-date {
    display: flex;
    align-items: center;
    gap: 8px;
    color: rgba(255,255,255,0.9);
    background: rgba(255,255,255,0.15);
    padding: 8px 16px;
    border-radius: 30px;
    font-size: 13px;
}

/* Status Cards */
.status-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-bottom: 28px;
}

.status-card {
    background: white;
    border-radius: 16px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 16px;
    border: 1px solid #E8ECEF;
}

.status-icon {
    width: 48px;
    height: 48px;
    background: #F5F7FA;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #031B4E;
}

.status-info {
    flex: 1;
}

.status-label {
    font-size: 11px;
    font-weight: 600;
    color: #7A8B9B;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    margin-bottom: 4px;
}

.status-value {
    font-size: 15px;
    font-weight: 600;
    color: #1A2C3E;
}

.status-value.active { color: #2E7D32; }
.status-value.verified { color: #031B4E; }

/* Section Cards */
.section-card {
    background: white;
    border-radius: 20px;
    border: 1px solid #E8ECEF;
    margin-bottom: 24px;
    overflow: hidden;
}

.section-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 16px 24px;
    background: #F8F9FA;
    border-bottom: 1px solid #E8ECEF;
}

.section-header h3 {
    font-size: 15px;
    font-weight: 600;
    color: #031B4E;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.badge {
    font-size: 10px;
    padding: 3px 10px;
    background: #041931;
    color: white;
    border-radius: 30px;
}

.section-body {
    padding: 20px;
}

.section-body p {
    font-size: 13px;
    color: #5D6F7F;
    line-height: 1.5;
    margin-bottom: 16px;
}

/* Verification List */
.verification-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.verification-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 13px;
    color: #1A2C3E;
    padding: 6px 0;
}

.check-circle {
    width: 16px;
    height: 16px;
    border-radius: 50%;
}

.check-circle.success { background: #2E7D32; }

/* Corridors Grid */
.corridors-grid {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
}

.corridor-tag {
    background: #F5F7FA;
    padding: 6px 14px;
    border-radius: 30px;
    font-size: 12px;
    color: #1A2C3E;
    border: 1px solid #E8ECEF;
}

/* Documents Grid */
.documents-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 12px;
}

.document-link {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px;
    background: #F8F9FA;
    border-radius: 10px;
    text-decoration: none;
    color: #1A2C3E;
    font-size: 12px;
    transition: all 0.2s;
}

.document-link:hover {
    background: #041931;
    color: white;
}

.document-link:hover svg {
    stroke: white;
}

/* Communications List */
.communications-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.communication-item {
    display: flex;
    gap: 12px;
    padding: 14px;
    background: #F8F9FA;
    border-radius: 12px;
}

.comm-icon {
    width: 36px;
    height: 36px;
    background: white;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #031B4E;
}

.comm-content {
    flex: 1;
}

.comm-content h4 {
    font-size: 14px;
    font-weight: 600;
    color: #031B4E;
    margin-bottom: 4px;
}

.comm-content p {
    font-size: 12px;
    color: #5D6F7F;
    margin-bottom: 4px;
}

.comm-date {
    font-size: 10px;
    color: #C49A6C;
}

/* Opportunities List */
.opportunities-list {
    display: flex;
    flex-direction: column;
    gap: 12px;
}

.opportunity-item {
    display: flex;
    gap: 12px;
    padding: 14px;
    background: #F8F9FA;
    border-radius: 12px;
}

.opp-status {
    font-size: 10px;
    font-weight: 600;
    padding: 3px 10px;
    border-radius: 20px;
    min-width: 100px;
    text-align: center;
    height: fit-content;
}

.opp-status.vetting { background: #FFF3E0; color: #F57C00; }
.opp-status.matching { background: #E3F2FD; color: #1976D2; }
.opp-status.diligence { background: #E8F5E9; color: #2E7D32; }

.opp-details {
    flex: 1;
}

.opp-details h4 {
    font-size: 14px;
    font-weight: 600;
    color: #031B4E;
    margin-bottom: 4px;
}

.opp-details p {
    font-size: 12px;
    color: #5D6F7F;
    margin-bottom: 4px;
}

.opp-meta {
    font-size: 10px;
    color: #C49A6C;
}

/* Profile Grid */
.profile-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 16px;
}

.profile-field label {
    font-size: 10px;
    font-weight: 600;
    color: #7A8B9B;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    display: block;
    margin-bottom: 4px;
}

.profile-field p {
    font-size: 13px;
    color: #1A2C3E;
    margin: 0;
}

/* Resources List */
.resources-list {
    display: flex;
    flex-direction: column;
    gap: 10px;
}

.resource-link {
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 0;
    font-size: 13px;
    color: #031B4E;
    text-decoration: none;
    border-bottom: 1px solid #E8ECEF;
    transition: color 0.2s;
}

.resource-link svg {
    flex-shrink: 0;
}

.resource-link:hover {
    color: #C49A6C;
}

/* Support Buttons */
.support-buttons {
    display: flex;
    gap: 12px;
    margin-top: 16px;
}

.btn-primary, .btn-secondary {
    padding: 10px 20px;
    border-radius: 30px;
    text-decoration: none;
    font-size: 12px;
    font-weight: 400;
    transition: all 0.2s;
}

.btn-primary {
    background: #041931;
    color: white;
}

.btn-primary:hover {
    background: #031B4E;
}

.btn-secondary {
    background: #F5F7FA;
    color: #1A2C3E;
    border: 1px solid #E8ECEF;
}

.btn-secondary:hover {
    background: #E8ECEF;
}

/* Portal Footer */
.portal-footer {
    margin-top: 32px;
    padding: 20px;
    text-align: center;
    background: #F8F9FA;
    border-radius: 16px;
}

.portal-footer p {
    font-size: 11px;
    color: #7A8B9B;
    margin-bottom: 8px;
}

.portal-footer .footer-quote {
    font-size: 12px;
    font-weight: 400;
    color: #031B4E;
}

/* Responsive */
@media (max-width: 1024px) {
    .status-cards {
        grid-template-columns: repeat(2, 1fr);
    }
    .documents-grid {
        grid-template-columns: 1fr;
    }
    .profile-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .status-cards {
        grid-template-columns: 1fr;
    }
    .welcome-banner {
        flex-direction: column;
        text-align: center;
    }
    .support-buttons {
        flex-direction: column;
    }
    .opportunity-item {
        flex-direction: column;
    }
    .opp-status {
        width: fit-content;
    }
}
</style>
@endsection
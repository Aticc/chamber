@extends('layouts.member')

@section('title', 'Tier I Portal')

@section('content')
<div class="tier-dashboard">
    <div class="tier-header">
        <h1>Tier I Portal</h1>
        <p>Institutional Members - SMEs and Accredited Service Providers</p>
        <div class="tier-badge">Tier I Access</div>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-card">
            <div class="card-header">
                <h3>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <polyline points="22 12 18 12 15 21 9 3 6 12 2 12"/>
                    </svg>
                    Your Benefits
                </h3>
            </div>
            <div class="card-body">
                <ul class="benefits-list">
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2E7D32" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        Critical execution layer within trade value chains
                    </li>
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2E7D32" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        Access to verified trade opportunities
                    </li>
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2E7D32" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        Market intelligence reports
                    </li>
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2E7D32" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        Networking events access
                    </li>
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2E7D32" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        Trust & Verification Protocol
                    </li>
                </ul>
            </div>
        </div>

        <div class="dashboard-card">
            <div class="card-header">
                <h3>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v4M12 22v-4M4 12H2M22 12h-2M19.07 4.93l-2.83 2.83M6.34 17.66l-2.83 2.83M17.66 6.34l2.83-2.83M4.93 19.07l2.83-2.83"/>
                    </svg>
                    Available Opportunities
                </h3>
            </div>
            <div class="card-body">
                <div class="opportunity-item">
                    <h4>Trade Finance Opportunities</h4>
                    <p>Access to verified trade finance deals starting from $100K</p>
                    <a href="#" class="btn-sm">View Details →</a>
                </div>
                <div class="opportunity-item">
                    <h4>Supplier Registration</h4>
                    <p>Register as a verified supplier in our ecosystem</p>
                    <a href="#" class="btn-sm">Register →</a>
                </div>
            </div>
        </div>

        <div class="dashboard-card">
            <div class="card-header">
                <h3>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="3" width="18" height="18" rx="2" ry="2"/>
                        <line x1="9" y1="9" x2="15" y2="15"/>
                        <line x1="15" y1="9" x2="9" y2="15"/>
                    </svg>
                    Resources
                </h3>
            </div>
            <div class="card-body">
                <a href="#" class="resource-link">Market Intelligence Report Q2 2025</a>
                <a href="#" class="resource-link">Trade Facilitation Guide</a>
                <a href="#" class="resource-link">Compliance Checklist</a>
            </div>
        </div>

        <div class="dashboard-card">
            <div class="card-header">
                <h3>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    Upcoming Events
                </h3>
            </div>
            <div class="card-body">
                <div class="event-item">
                    <span class="event-date">Jun 15, 2025</span>
                    <h4>SME Trade Webinar</h4>
                    <p>Online - Free for Tier I members</p>
                </div>
                <div class="event-item">
                    <span class="event-date">Jul 20, 2025</span>
                    <h4>Networking Mixer</h4>
                    <p>Lagos, Nigeria</p>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.tier-dashboard {
    max-width: 1200px;
    margin: 0 auto;
}

.tier-header {
    background: linear-gradient(135deg, #041931 0%, #031B4E 100%);
    border-radius: 20px;
    padding: 28px 32px;
    margin-bottom: 28px;
    color: white;
    position: relative;
}

.tier-header h1 {
    font-size: 28px;
    font-weight: 600;
    margin-bottom: 8px;
}

.tier-header p {
    font-size: 14px;
    opacity: 0.9;
}

.tier-badge {
    position: absolute;
    top: 20px;
    right: 30px;
    background: #C49A6C;
    padding: 5px 14px;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 600;
}

.dashboard-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.dashboard-card {
    background: white;
    border-radius: 20px;
    border: 1px solid #E8ECEF;
    overflow: hidden;
}

.card-header {
    padding: 16px 20px;
    background: #F8F9FA;
    border-bottom: 1px solid #E8ECEF;
}

.card-header h3 {
    font-size: 15px;
    font-weight: 600;
    color: #031B4E;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.card-body {
    padding: 20px;
}

.benefits-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.benefits-list li {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 8px 0;
    color: #1A2C3E;
    font-size: 13px;
}

.opportunity-item, .event-item {
    margin-bottom: 16px;
    padding-bottom: 12px;
    border-bottom: 1px solid #F0F2F5;
}

.opportunity-item:last-child, .event-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.opportunity-item h4, .event-item h4 {
    font-size: 14px;
    font-weight: 600;
    color: #031B4E;
    margin-bottom: 4px;
}

.opportunity-item p, .event-item p {
    font-size: 12px;
    color: #5D6F7F;
    margin-bottom: 8px;
}

.event-date {
    font-size: 10px;
    color: #C49A6C;
    display: block;
    margin-bottom: 5px;
}

.btn-sm {
    display: inline-block;
    padding: 5px 12px;
    background: #041931;
    color: white;
    text-decoration: none;
    border-radius: 20px;
    font-size: 11px;
    transition: all 0.2s;
}

.btn-sm:hover {
    background: #031B4E;
}

.resource-link {
    display: block;
    padding: 8px 0;
    color: #031B4E;
    text-decoration: none;
    border-bottom: 1px solid #F0F2F5;
    font-size: 13px;
}

.resource-link:hover {
    color: #C49A6C;
}

@media (max-width: 768px) {
    .dashboard-grid {
        grid-template-columns: 1fr;
    }
    .tier-badge {
        position: static;
        margin-top: 15px;
        display: inline-block;
    }
}
</style>
@endsection
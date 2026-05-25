@extends('layouts.member')

@section('title', 'Tier III Portal')

@section('content')
<div class="tier-dashboard">
    <div class="tier-header">
        <h1>Tier III Portal</h1>
        <p>Institutional & Institutional Partners - Wealth Funds, Governments, and Multilateral Institutions</p>
        <div class="tier-badge">Tier III Access</div>
    </div>

    <div class="dashboard-grid">
        <div class="dashboard-card">
            <div class="card-header">
                <h3>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"/>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
                    </svg>
                    Your Benefits
                </h3>
            </div>
            <div class="card-body">
                <ul class="benefits-list">
                    <li>✓ Policy alignment & G2G frameworks</li>
                    <li>✓ Large-scale capital deployment</li>
                    <li>✓ Strategic investment committee access</li>
                    <li>✓ Dedicated relationship management</li>
                    <li>✓ All Tier I & Tier II benefits</li>
                </ul>
            </div>
        </div>

        <div class="dashboard-card">
            <div class="card-header">
                <h3>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v4M12 22v-4M4 12H2M22 12h-2M19.07 4.93l-2.83 2.83M6.34 17.66l-2.83 2.83M17.66 6.34l2.83-2.83M4.93 19.07l2.83-2.83"/>
                    </svg>
                    Capital Deployment Opportunities
                </h3>
            </div>
            <div class="card-body">
                <div class="opportunity-item">
                    <h4>Infrastructure Fund - $2B</h4>
                    <p>Pan-African infrastructure development fund</p>
                    <a href="#" class="btn-sm">View Details →</a>
                </div>
                <div class="opportunity-item">
                    <h4>Energy Transition Fund - $1.5B</h4>
                    <p>Renewable energy projects across Africa</p>
                    <a href="#" class="btn-sm">View Details →</a>
                </div>
                <div class="opportunity-item">
                    <h4>Trade Facilitation Program</h4>
                    <p>AfCFTA-aligned trade corridor development</p>
                    <a href="#" class="btn-sm">Learn More →</a>
                </div>
            </div>
        </div>

        <div class="dashboard-card">
            <div class="card-header">
                <h3>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/>
                        <polyline points="9 22 9 12 15 12 15 22"/>
                    </svg>
                    G2G & Policy Frameworks
                </h3>
            </div>
            <div class="card-body">
                <div class="policy-item">
                    <h4>Bilateral Investment Treaties</h4>
                    <p>Access to government-to-government frameworks</p>
                </div>
                <div class="policy-item">
                    <h4>AfCFTA Implementation</h4>
                    <p>Strategic alignment with continental trade agenda</p>
                </div>
                <div class="policy-item">
                    <h4>Investment Promotion Agreements</h4>
                    <p>Direct engagement with investment promotion agencies</p>
                </div>
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
                    Exclusive Events
                </h3>
            </div>
            <div class="card-body">
                <div class="event-item">
                    <span class="event-date">May 15-17, 2025</span>
                    <h4>Summit of African Leaders</h4>
                    <p>Addis Ababa, Ethiopia - By Invitation Only</p>
                </div>
                <div class="event-item">
                    <span class="event-date">Jun 20, 2025</span>
                    <h4>Ministerial Roundtable</h4>
                    <p>Virtual - Exclusive for Tier III</p>
                </div>
                <div class="event-item">
                    <span class="event-date">Nov 2-4, 2025</span>
                    <h4>ATICC Women in Power Summit</h4>
                    <p>Kigali, Rwanda</p>
                </div>
            </div>
        </div>

        <div class="dashboard-card full-width">
            <div class="card-header">
                <h3>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 12h-4l-3 9-4-18-3 9H2"/>
                    </svg>
                    Strategic Investment Pipeline
                </h3>
            </div>
            <div class="card-body">
                <table class="pipeline-table">
                    <thead>
                        <tr>
                            <th>Project</th>
                            <th>Sector</th>
                            <th>Value</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr><td>Lagos-Abidjan Highway</td><td>Infrastructure</td><td>$4.5B</td><td>Under Review</td></tr>
                        <tr><td>Great Inga Dam</td><td>Energy</td><td>$14B</td><td>Matching</td></tr>
                        <tr><td>Trans-African Railway</td><td>Logistics</td><td>$8B</td><td>Vetting</td></tr>
                        <tr><td>Digital Trade Corridor</td><td>Technology</td><td>$500M</td><td>Active</td></tr>
                    </tbody>
                </table>
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
    background: linear-gradient(135deg, #17015e 0%, #2a0280 100%);
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

.dashboard-card.full-width {
    grid-column: span 2;
}

.card-header {
    padding: 16px 20px;
    background: #F8F9FA;
    border-bottom: 1px solid #E8ECEF;
}

.card-header h3 {
    font-size: 15px;
    font-weight: 600;
    color: #17015e;
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
    padding: 8px 0;
    color: #1A2C3E;
    font-size: 13px;
}

.opportunity-item, .event-item, .policy-item {
    margin-bottom: 16px;
    padding-bottom: 12px;
    border-bottom: 1px solid #F0F2F5;
}

.opportunity-item:last-child, .event-item:last-child, .policy-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.opportunity-item h4, .event-item h4, .policy-item h4 {
    font-size: 14px;
    font-weight: 600;
    color: #17015e;
    margin-bottom: 4px;
}

.opportunity-item p, .event-item p, .policy-item p {
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
    background: #17015e;
    color: white;
    text-decoration: none;
    border-radius: 20px;
    font-size: 11px;
    transition: all 0.2s;
}

.btn-sm:hover {
    background: #2a0280;
}

.pipeline-table {
    width: 100%;
    border-collapse: collapse;
}

.pipeline-table th, .pipeline-table td {
    padding: 10px;
    text-align: left;
    border-bottom: 1px solid #F0F2F5;
    font-size: 13px;
}

.pipeline-table th {
    background: #F8F9FA;
    font-weight: 600;
    color: #17015e;
}

@media (max-width: 768px) {
    .dashboard-grid {
        grid-template-columns: 1fr;
    }
    .dashboard-card.full-width {
        grid-column: span 1;
    }
    .pipeline-table {
        display: block;
        overflow-x: auto;
    }
    .tier-badge {
        position: static;
        margin-top: 15px;
        display: inline-block;
    }
}
</style>
@endsection
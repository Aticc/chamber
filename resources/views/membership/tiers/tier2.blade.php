@extends('layouts.member')

@section('title', 'Tier II Portal')

@section('content')
<div class="tier-dashboard">
    <div class="tier-header">
        <h1>Tier II Portal</h1>
        <p>Strategic Corporate Partners - Multinational Corporations and Industrial Conglomerates</p>
        <div class="tier-badge">Tier II Access</div>
    </div>

    <div class="dashboard-grid">
        <!-- Your Benefits - Dynamic from Database -->
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
                    @forelse($benefits as $benefit)
                    <li>
                        <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="#2E7D32" stroke-width="2">
                            <polyline points="20 6 9 17 4 12"/>
                        </svg>
                        {{ $benefit->benefit }}
                    </li>
                    @empty
                    <li>No benefits available</li>
                    @endforelse
                </ul>
            </div>
        </div>

        <!-- Strategic Opportunities - Dynamic from Database -->
        <div class="dashboard-card">
            <div class="card-header">
                <h3>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M12 2v4M12 22v-4M4 12H2M22 12h-2M19.07 4.93l-2.83 2.83M6.34 17.66l-2.83 2.83M17.66 6.34l2.83-2.83M4.93 19.07l2.83-2.83"/>
                    </svg>
                    Strategic Opportunities
                </h3>
            </div>
            <div class="card-body">
                @forelse($opportunities as $opportunity)
                <div class="opportunity-item">
                    <h4>{{ $opportunity->title }}</h4>
                    <p>{{ $opportunity->description }}</p>
                    @if($opportunity->button_link)
                    <a href="{{ $opportunity->button_link }}" class="btn-sm">{{ $opportunity->button_text ?? 'View Details →' }}</a>
                    @endif
                </div>
                @empty
                <p>No opportunities available</p>
                @endforelse
            </div>
        </div>

        <!-- Deal Pipeline - Dynamic from Database -->
        <div class="dashboard-card">
            <div class="card-header">
                <h3>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <path d="M22 12h-4l-3 9-4-18-3 9H2"/>
                    </svg>
                    Deal Pipeline
                </h3>
            </div>
            <div class="card-body">
                @forelse($deals as $deal)
                <div class="deal-item">
                    <div class="deal-status {{ strtolower(str_replace(' ', '', $deal->status)) }}">
                        {{ $deal->status ?? 'Active' }}
                    </div>
                    <h4>{{ $deal->title }}</h4>
                    <p>{{ $deal->description }}</p>
                    @if($deal->sector)
                    <div class="deal-meta">{{ $deal->sector }}</div>
                    @endif
                </div>
                @empty
                <p>No deals available</p>
                @endforelse
            </div>
        </div>

        <!-- Strategic Events - Dynamic from Database -->
        <div class="dashboard-card">
            <div class="card-header">
                <h3>
                    <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                        <line x1="16" y1="2" x2="16" y2="6"/>
                        <line x1="8" y1="2" x2="8" y2="6"/>
                        <line x1="3" y1="10" x2="21" y2="10"/>
                    </svg>
                    Strategic Events
                </h3>
            </div>
            <div class="card-body">
                @forelse($events as $event)
                <div class="event-item">
                    <span class="event-date">{{ $event->event_date ? $event->event_date->format('M d, Y') : 'TBA' }}</span>
                    <h4>{{ $event->title }}</h4>
                    <p>{{ $event->location ?? 'Virtual Event' }}</p>
                    @if($event->button_link)
                    <a href="{{ $event->button_link }}" class="event-link">Learn More →</a>
                    @endif
                </div>
                @empty
                <p>No events scheduled</p>
                @endforelse
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

.opportunity-item, .event-item, .deal-item {
    margin-bottom: 16px;
    padding-bottom: 12px;
    border-bottom: 1px solid #F0F2F5;
}

.opportunity-item:last-child, .event-item:last-child, .deal-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.opportunity-item h4, .event-item h4, .deal-item h4 {
    font-size: 14px;
    font-weight: 600;
    color: #031B4E;
    margin-bottom: 4px;
}

.opportunity-item p, .event-item p, .deal-item p {
    font-size: 12px;
    color: #5D6F7F;
    margin-bottom: 8px;
}

.deal-status {
    display: inline-block;
    padding: 3px 10px;
    border-radius: 20px;
    font-size: 10px;
    font-weight: 600;
    margin-bottom: 8px;
}

.deal-status.active { background: #E8F5E9; color: #2E7D32; }
.deal-status.matching { background: #E3F2FD; color: #1976D2; }
.deal-status.vetting { background: #FFF3E0; color: #F57C00; }
.deal-status.diligence { background: #E8F5E9; color: #2E7D32; }

.deal-meta {
    font-size: 10px;
    color: #C49A6C;
    margin-top: 4px;
}

.event-date {
    font-size: 10px;
    color: #C49A6C;
    display: block;
    margin-bottom: 5px;
}

.event-link {
    display: inline-block;
    margin-top: 8px;
    font-size: 11px;
    color: #031B4E;
    text-decoration: none;
}

.event-link:hover {
    text-decoration: underline;
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
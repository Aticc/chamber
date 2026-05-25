@extends('layouts.member')

@section('title', 'Events')

@section('content')
<div class="events-page">
    <div class="events-header">
        <h1>Institutional Events</h1>
        <p>Strategic convenings, summits, and missions for ATICC members</p>
    </div>

    <!-- Upcoming Events -->
    <div class="section-card">
        <div class="card-header">
            <h3>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="3" y1="10" x2="21" y2="10"/>
                    <circle cx="12" cy="15" r="1"/>
                    <circle cx="16" cy="15" r="1"/>
                    <circle cx="8" cy="15" r="1"/>
                </svg>
                Upcoming Events
            </h3>
            <span class="badge">{{ $member->membership_level ?? 'Member' }}</span>
        </div>
        <div class="card-body">
            @forelse($upcomingEvents as $event)
            <div class="event-card">
                @if($event->featured_image)
                <div class="event-image">
                    <img src="{{ Storage::url($event->featured_image) }}" alt="{{ $event->title }}">
                </div>
                @endif
                
                <div class="event-details">
                    <h3>{{ $event->title }}</h3>
                    <div class="event-meta">
                        <span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            {{ $event->location }}
                        </span>
                        <span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <circle cx="12" cy="12" r="10"/>
                                <line x1="12" y1="8" x2="12" y2="12"/>
                                <line x1="12" y1="16" x2="12.01" y2="16"/>
                            </svg>
                            {{ $event->is_invitation_only ? 'By Invitation Only' : $event->getAccessBadgeAttribute() }}
                        </span>
                        <span>
                            <svg width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20 7h-4.18A3 3 0 0 0 16 5.18V4a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
                                <line x1="16" y1="21" x2="16" y2="16"/>
                                <line x1="8" y1="21" x2="8" y2="21"/>
                                <line x1="12" y1="21" x2="12" y2="21"/>
                                <line x1="12" y1="11" x2="8" y2="16"/>
                                <line x1="12" y1="11" x2="16" y2="16"/>
                            </svg>
                            {{ ucfirst($event->event_type) }}
                        </span>
                    </div>
                    <p>{{ Str::limit($event->description, 200) }}</p>
                    <div class="event-access">
                         <div class="date-day">{{ $event->start_date->format('d') }}</div>
                    <div class="date-month">{{ strtoupper($event->start_date->format('M')) }}</div>
                    <div class="date-year">{{ $event->start_date->format('Y') }}</div>
                </div>
                        @if($event->memberHasAccess($member))
                            <span class="access-badge granted">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <polyline points="20 6 9 17 4 12"/>
                                </svg>
                                Access Granted
                            </span>
                            @if($event->registration_link)
                                <a href="{{ $event->registration_link }}" target="_blank" class="btn-register">Register Now →</a>
                            @else
                                <a href="#" class="btn-register">Express Interest →</a>
                            @endif
                            <div class="">
                   
                        @else
                            <span class="access-badge locked">
                                <svg width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                    <rect x="3" y="11" width="18" height="11" rx="2" ry="2"/>
                                    <path d="M7 11V7a5 5 0 0 1 10 0v4"/>
                                </svg>
                                {{ $event->getAccessBadgeAttribute() }} Only
                            </span>
                        @endif
                    </div>
                </div>
            </div>
            @empty
            <p class="no-events">No upcoming events at this time.</p>
            @endforelse
        </div>
    </div>

    <!-- Past Events -->
    <div class="section-card">
        <div class="card-header">
            <h3>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <rect x="2" y="4" width="20" height="18" rx="2" ry="2"/>
                    <line x1="8" y1="2" x2="8" y2="6"/>
                    <line x1="16" y1="2" x2="16" y2="6"/>
                    <path d="M22 10H2"/>
                </svg>
                Past Events
            </h3>
        </div>
        <div class="card-body">
            <div class="past-events-grid">
                @forelse($pastEvents as $event)
                <div class="past-event">
                    @if($event->featured_image)
                    <div class="past-event-image">
                        <img src="{{ Storage::url($event->featured_image) }}" alt="{{ $event->title }}">
                    </div>
                    @endif
                    <div class="past-event-date">{{ $event->start_date->format('M Y') }}</div>
                    <h4>{{ $event->title }}</h4>
                    <p>{{ Str::limit($event->description, 80) }}</p>
                    @if($event->highlights_link)
                        <a href="{{ $event->highlights_link }}" class="view-resource">View Highlights →</a>
                    @endif
                </div>
                @empty
                <p class="no-events">No past events to display.</p>
                @endforelse
            </div>
        </div>
    </div>

    <!-- Trade Missions -->
    <div class="section-card">
        <div class="card-header">
            <h3>
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M2 20h.01M7 20h.01M12 20h.01M17 20h.01M22 20h.01M2 4h.01M7 4h.01M12 4h.01M17 4h.01M22 4h.01M4 4v16M20 4v16"/>
                </svg>
                Trade Missions
            </h3>
        </div>
        <div class="card-body">
            <div class="missions-grid">
                @forelse($missions as $mission)
                <div class="mission-card">
                    @if($mission->featured_image)
                    <div class="mission-image">
                        <img src="{{ Storage::url($mission->featured_image) }}" alt="{{ $mission->title }}">
                    </div>
                    @endif
                    <h4>{{ $mission->title }}</h4>
                    <p>{{ $mission->start_date->format('F Y') }} • {{ $mission->location }}</p>
                    <span class="mission-status">{{ $mission->getAccessBadgeAttribute() }}</span>
                    @if($mission->memberHasAccess($member) && $mission->registration_link)
                        <a href="{{ $mission->registration_link }}" target="_blank" class="btn-sm">Express Interest</a>
                    @elseif($mission->memberHasAccess($member))
                        <a href="#" class="btn-sm">Contact Secretariat</a>
                    @else
                        <a href="{{ route('access.plans') }}" class="btn-sm locked">Upgrade to Access</a>
                    @endif
                </div>
                @empty
                <p class="no-events">No upcoming trade missions.</p>
                @endforelse
            </div>
        </div>
    </div>
</div>

<style>
.events-page {
    max-width: 1200px;
    margin: 0 auto;
}

.events-header {
    margin-bottom: 32px;
}

.events-header h1 {
    font-size: 28px;
    font-weight: 600;
    color: #031B4E;
    margin-bottom: 8px;
}

.events-header p {
    font-size: 14px;
    color: #7A8B9B;
}

.section-card {
    background: white;
    border-radius: 20px;
    border: 1px solid #E8ECEF;
    margin-bottom: 28px;
    overflow: hidden;
}

.card-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 18px 24px;
    background: #F8F9FA;
    border-bottom: 1px solid #E8ECEF;
}

.card-header h3 {
    font-size: 16px;
    font-weight: 600;
    color: #031B4E;
    margin: 0;
    display: flex;
    align-items: center;
    gap: 8px;
}

.badge {
    font-size: 11px;
    padding: 4px 12px;
    background: #041931;
    color: white;
    border-radius: 30px;
}

.card-body {
    padding: 24px;
}

.event-card {
    display: flex;
    gap: 24px;
    padding: 20px;
    background: #F8F9FA;
    border-radius: 16px;
    margin-bottom: 20px;
}

.event-card:last-child {
    margin-bottom: 0;
}

.event-image {
    width: 120px;
    height: 120px;
    border-radius: 12px;
    overflow: hidden;
    flex-shrink: 0;
}

.event-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.event-date-large {
    text-align: center;
    min-width: 80px;
    padding: 12px;
    background: white;
    border-radius: 12px;
    border: 1px solid #E8ECEF;
    flex-shrink: 0;
}

.date-day {
    font-size: 28px;
    font-weight: 700;
    color: #031B4E;
}

.date-month {
    font-size: 12px;
    font-weight: 600;
    color: #C49A6C;
    text-transform: uppercase;
}

.date-year {
    font-size: 11px;
    color: #7A8B9B;
}

.event-details {
    flex: 1;
}

.event-details h3 {
    font-size: 18px;
    font-weight: 600;
    color: #031B4E;
    margin-bottom: 8px;
}

.event-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 16px;
    margin-bottom: 12px;
}

.event-meta span {
    display: flex;
    align-items: center;
    gap: 4px;
    font-size: 12px;
    color: #7A8B9B;
}

.event-details p {
    font-size: 14px;
    color: #5D6F7F;
    line-height: 1.5;
    margin-bottom: 16px;
}

.event-access {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
}

.access-badge {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 12px;
    padding: 4px 12px;
    border-radius: 20px;
}

.access-badge.granted {
    background: #E8F5E9;
    color: #2E7D32;
}

.access-badge.locked {
    background: #FFEBEE;
    color: #C62828;
}

.btn-register {
    padding: 8px 20px;
    background: #041931;
    color: white;
    text-decoration: none;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 500;
    transition: all 0.2s;
    display: inline-block;
}

.btn-register:hover {
    background: #031B4E;
}

/* Past Events Grid */
.past-events-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.past-event {
    padding: 16px;
    background: #F8F9FA;
    border-radius: 12px;
}

.past-event-image {
    width: 100%;
    height: 150px;
    border-radius: 10px;
    overflow: hidden;
    margin-bottom: 12px;
}

.past-event-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.past-event-date {
    font-size: 11px;
    color: #C49A6C;
    margin-bottom: 8px;
}

.past-event h4 {
    font-size: 15px;
    font-weight: 600;
    color: #031B4E;
    margin-bottom: 6px;
}

.past-event p {
    font-size: 13px;
    color: #5D6F7F;
    margin-bottom: 10px;
}

.view-resource {
    font-size: 12px;
    color: #C49A6C;
    text-decoration: none;
}

.view-resource:hover {
    text-decoration: underline;
}

/* Missions Grid */
.missions-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
}

.mission-card {
    padding: 20px;
    background: #F8F9FA;
    border-radius: 16px;
    text-align: center;
}

.mission-image {
    width: 80px;
    height: 80px;
    border-radius: 12px;
    overflow: hidden;
    margin: 0 auto 12px;
}

.mission-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.mission-card h4 {
    font-size: 16px;
    font-weight: 600;
    color: #031B4E;
    margin-bottom: 8px;
}

.mission-card p {
    font-size: 13px;
    color: #5D6F7F;
    margin-bottom: 12px;
}

.mission-status {
    display: inline-block;
    padding: 4px 10px;
    background: white;
    border-radius: 20px;
    font-size: 10px;
    font-weight: 600;
    color: #031B4E;
    margin-bottom: 16px;
}

.btn-sm {
    display: inline-block;
    padding: 8px 20px;
    background: white;
    color: #031B4E;
    text-decoration: none;
    border-radius: 30px;
    font-size: 12px;
    font-weight: 500;
    border: 1px solid #E8ECEF;
    transition: all 0.2s;
}

.btn-sm:hover {
    background: #041931;
    color: white;
}

.btn-sm.locked {
    opacity: 0.6;
    cursor: not-allowed;
}

.no-events {
    text-align: center;
    padding: 40px;
    color: #7A8B9B;
}

/* Responsive */
@media (max-width: 1024px) {
    .past-events-grid, .missions-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .event-card {
        flex-direction: column;
    }
    .event-image {
        width: 100%;
        height: 180px;
    }
    .event-date-large {
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 100%;
    }
    .past-events-grid, .missions-grid {
        grid-template-columns: 1fr;
    }
    .past-event-image {
        height: 120px;
    }
}
</style>
@endsection
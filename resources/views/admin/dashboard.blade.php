@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
<div class="dashboard">
    <!-- Welcome Section -->
    <div class="welcome-card">
        <div class="welcome-content">
            <h1>Welcome back, {{ auth()->guard('admin')->user()->name ?? 'Admin' }}</h1>
            <p>Here's what's happening with your membership applications today.</p>
        </div>
        <div class="welcome-date">
            <div class="date">{{ now()->format('l, F j, Y') }}</div>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="stats-grid">
        <div class="stat-card">
            <div class="stat-icon blue">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                    <polyline points="14 2 14 8 20 8"/>
                    <line x1="16" y1="13" x2="8" y2="13"/>
                    <line x1="16" y1="17" x2="8" y2="17"/>
                    <polyline points="10 9 9 9 8 9"/>
                </svg>
            </div>
            <div class="stat-info">
                <div class="stat-value">{{ number_format($stats['total_applications']) }}</div>
                <div class="stat-label">Total Applications</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon orange">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="12" y1="8" x2="12" y2="12"/>
                    <line x1="12" y1="16" x2="12.01" y2="16"/>
                </svg>
            </div>
            <div class="stat-info">
                <div class="stat-value">{{ number_format($stats['pending_applications']) }}</div>
                <div class="stat-label">Pending Review</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon purple">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"/>
                </svg>
            </div>
            <div class="stat-info">
                <div class="stat-value">{{ number_format($stats['under_review_applications']) }}</div>
                <div class="stat-label">Under Review</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon green">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/>
                    <polyline points="22 4 12 14.01 9 11.01"/>
                </svg>
            </div>
            <div class="stat-info">
                <div class="stat-value">{{ number_format($stats['approved_applications']) }}</div>
                <div class="stat-label">Approved</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon red">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <circle cx="12" cy="12" r="10"/>
                    <line x1="18" y1="6" x2="6" y2="18"/>
                </svg>
            </div>
            <div class="stat-info">
                <div class="stat-value">{{ number_format($stats['rejected_applications']) }}</div>
                <div class="stat-label">Rejected</div>
            </div>
        </div>
        <div class="stat-card">
            <div class="stat-icon teal">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                    <circle cx="12" cy="7" r="4"/>
                </svg>
            </div>
            <div class="stat-info">
                <div class="stat-value">{{ number_format($stats['total_members']) }}</div>
                <div class="stat-label">Total Members</div>
            </div>
        </div>
    </div>

    <!-- Recent Activity Section -->
    <div class="recent-grid">
        <!-- Recent Applications -->
        <div class="recent-card">
            <div class="card-header">
                <h3>Recent Applications</h3>
                <a href="{{ route('admin.membership.applications') }}" class="view-link">View All →</a>
            </div>
            <div class="card-body">
                @forelse($stats['recent_applications'] as $app)
                <div class="activity-item">
                    <div class="activity-icon pending">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
                            <polyline points="14 2 14 8 20 8"/>
                        </svg>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">{{ Str::limit($app->legal_name, 40) }}</div>
                        <div class="activity-meta">{{ $app->tier_name }} • {{ $app->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="activity-status">
                        <span class="status-badge status-{{ $app->status }}">
                            {{ ucfirst(str_replace('_', ' ', $app->status)) }}
                        </span>
                    </div>
                </div>
                @empty
                <div class="empty-state">No applications found</div>
                @endforelse
            </div>
        </div>

        <!-- Recent Members -->
        <div class="recent-card">
            <div class="card-header">
                <h3>Recent Members</h3>
                <a href="{{ route('admin.members.index') }}" class="view-link">View All →</a>
            </div>
            <div class="card-body">
                @forelse($stats['recent_members'] as $member)
                <div class="activity-item">
                    <div class="activity-icon member">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
                            <circle cx="12" cy="7" r="4"/>
                        </svg>
                    </div>
                    <div class="activity-content">
                        <div class="activity-title">{{ Str::limit($member->org_name, 35) }}</div>
                        <div class="activity-meta">{{ $member->email }} • Joined {{ $member->created_at->diffForHumans() }}</div>
                    </div>
                    <div class="activity-status">
                        <span class="status-badge status-{{ $member->status }}">
                            {{ ucfirst($member->status) }}
                        </span>
                    </div>
                </div>
                @empty
                <div class="empty-state">No members found</div>
                @endforelse
            </div>
        </div>
    </div>
</div>

<style>
.dashboard {
    max-width: 1400px;
    margin: 0 auto;
}

/* Welcome Card */
.welcome-card {
    background: linear-gradient(135deg, #0B1F3A 0%, #1A3A5C 100%);
    border-radius: 24px;
    padding: 28px 32px;
    margin-bottom: 32px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.welcome-content h1 {
    font-size: 24px;
    font-weight: 600;
    color: white;
    margin-bottom: 8px;
}

.welcome-content p {
    font-size: 14px;
    color: rgba(255,255,255,0.7);
}

.welcome-date .date {
    font-size: 14px;
    color: rgba(255,255,255,0.8);
    background: rgba(255,255,255,0.1);
    padding: 8px 16px;
    border-radius: 30px;
}

/* Stats Grid */
.stats-grid {
    display: grid;
    grid-template-columns: repeat(6, 1fr);
    gap: 20px;
    margin-bottom: 32px;
}

.stat-card {
    background: white;
    border-radius: 20px;
    padding: 20px;
    display: flex;
    align-items: center;
    gap: 16px;
    box-shadow: 0 1px 3px rgba(0,0,0,0.05);
    border: 1px solid #E8ECEF;
    transition: all 0.2s ease;
}

.stat-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 20px rgba(0,0,0,0.08);
}

.stat-icon {
    width: 48px;
    height: 48px;
    border-radius: 16px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.stat-icon.blue { background: #E3F2FD; color: #1976D2; }
.stat-icon.orange { background: #FFF3E0; color: #F57C00; }
.stat-icon.purple { background: #F3E5F5; color: #7B1FA2; }
.stat-icon.green { background: #E8F5E9; color: #388E3C; }
.stat-icon.red { background: #FFEBEE; color: #D32F2F; }
.stat-icon.teal { background: #E0F2F1; color: #00796B; }

.stat-info {
    flex: 1;
}

.stat-value {
    font-size: 28px;
    font-weight: 700;
    color: #1A2C3E;
    line-height: 1.2;
}

.stat-label {
    font-size: 12px;
    color: #7A8B9B;
    margin-top: 4px;
}

/* Recent Activity Grid */
.recent-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 24px;
}

.recent-card {
    background: white;
    border-radius: 20px;
    border: 1px solid #E8ECEF;
    overflow: hidden;
}

.card-header {
    padding: 20px 24px;
    border-bottom: 1px solid #E8ECEF;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.card-header h3 {
    font-size: 16px;
    font-weight: 600;
    color: #1A2C3E;
    margin: 0;
}

.view-link {
    font-size: 13px;
    color: #C49A6C;
    text-decoration: none;
    font-weight: 500;
}

.view-link:hover {
    text-decoration: underline;
}

.card-body {
    padding: 0;
}

.activity-item {
    display: flex;
    align-items: center;
    gap: 16px;
    padding: 16px 24px;
    border-bottom: 1px solid #F0F2F5;
    transition: background 0.2s;
}

.activity-item:hover {
    background: #F8F9FA;
}

.activity-icon {
    width: 36px;
    height: 36px;
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.activity-icon.pending { background: #FFF3E0; color: #F57C00; }
.activity-icon.member { background: #E3F2FD; color: #1976D2; }

.activity-content {
    flex: 1;
}

.activity-title {
    font-size: 14px;
    font-weight: 500;
    color: #1A2C3E;
    margin-bottom: 4px;
}

.activity-meta {
    font-size: 12px;
    color: #7A8B9B;
}

.activity-status {
    flex-shrink: 0;
}

.status-badge {
    display: inline-block;
    padding: 4px 10px;
    border-radius: 20px;
    font-size: 11px;
    font-weight: 500;
}

.status-pending { background: #FFF3CD; color: #856404; }
.status-under_review { background: #E3F2FD; color: #1976D2; }
.status-approved { background: #E8F5E9; color: #2E7D32; }
.status-rejected { background: #FFEBEE; color: #C62828; }
.status-deferred { background: #ECEFF1; color: #546E7A; }

.empty-state {
    text-align: center;
    padding: 48px;
    color: #7A8B9B;
    font-size: 14px;
}

/* Responsive */
@media (max-width: 1200px) {
    .stats-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .stats-grid {
        grid-template-columns: repeat(2, 1fr);
    }
    .recent-grid {
        grid-template-columns: 1fr;
    }
    .welcome-card {
        flex-direction: column;
        text-align: center;
    }
}
</style>
@endsection
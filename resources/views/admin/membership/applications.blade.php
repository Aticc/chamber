@extends('layouts.admin')

@section('title', 'Membership Applications')

@section('content')
<div class="applications-page">
    <!-- Page Header -->
    <div class="page-header">
        <div>
            <h1>Membership Applications</h1>
            <p class="subtitle">Review and manage membership accession requests</p>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="stats-row">
        <div class="stat-card">
            <div class="stat-value">{{ $stats['total'] }}</div>
            <div class="stat-label">Total Applications</div>
        </div>
        <div class="stat-card pending">
            <div class="stat-value">{{ $stats['pending'] }}</div>
            <div class="stat-label">Pending Review</div>
        </div>
        <div class="stat-card under-review">
            <div class="stat-value">{{ $stats['under_review'] }}</div>
            <div class="stat-label">Under Review</div>
        </div>
        <div class="stat-card approved">
            <div class="stat-value">{{ $stats['approved'] }}</div>
            <div class="stat-label">Approved</div>
        </div>
        <div class="stat-card rejected">
            <div class="stat-value">{{ $stats['rejected'] }}</div>
            <div class="stat-label">Rejected</div>
        </div>
    </div>

    <!-- Filter Tabs -->
    <div class="filter-tabs">
        <a href="{{ route('admin.membership.applications') }}" class="filter-tab {{ !request('status') ? 'active' : '' }}">All</a>
        <a href="{{ route('admin.membership.applications', ['status' => 'pending']) }}" class="filter-tab {{ request('status') == 'pending' ? 'active' : '' }}">Pending</a>
        <a href="{{ route('admin.membership.applications', ['status' => 'under_review']) }}" class="filter-tab {{ request('status') == 'under_review' ? 'active' : '' }}">Under Review</a>
        <a href="{{ route('admin.membership.applications', ['status' => 'approved']) }}" class="filter-tab {{ request('status') == 'approved' ? 'active' : '' }}">Approved</a>
        <a href="{{ route('admin.membership.applications', ['status' => 'rejected']) }}" class="filter-tab {{ request('status') == 'rejected' ? 'active' : '' }}">Rejected</a>
        <a href="{{ route('admin.membership.applications', ['status' => 'deferred']) }}" class="filter-tab {{ request('status') == 'deferred' ? 'active' : '' }}">Deferred</a>
    </div>

    <!-- Search Bar -->
    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search by organization name, email, or reference..." class="search-input">
    </div>

    <!-- Applications Table -->
    <div class="table-container">
        <table class="applications-table">
            <thead>
                <tr>
                    <th>Ref #</th>
                    <th>Organization</th>
                    <th>Contact Person</th>
                    <th>Tier</th>
                    <th>Submitted</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($applications as $app)
                <tr>
                    <td data-label="Ref #">#{{ $app->id }}</td>
                    <td data-label="Organization">
                        <strong>{{ $app->legal_name }}</strong><br>
                        <span class="text-muted">{{ $app->country_registration }}</span>
                    </td>
                    <td data-label="Contact Person">
                        {{ $app->contact_name }}<br>
                        <span class="text-muted">{{ $app->contact_email }}</span>
                    </td>
                    <td data-label="Tier">
                        <span class="tier-badge">{{ $app->tier_name }}</span>
                    </td>
                    <td data-label="Submitted">
                        {{ $app->created_at->format('M d, Y') }}<br>
                        <span class="text-muted">{{ $app->created_at->diffForHumans() }}</span>
                    </td>
                    <td data-label="Status">
                        <span class="status-badge status-{{ $app->status }}">
                            {{ ucfirst(str_replace('_', ' ', $app->status)) }}
                        </span>
                    </td>
                    <td data-label="Actions">
                        <a href="{{ route('admin.membership.show', $app->id) }}" class="btn-view">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
                                <circle cx="12" cy="12" r="3"/>
                            </svg>
                            Review
                        </a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="empty-state">
                        <div class="empty-icon">📋</div>
                        <p>No membership applications found</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <!-- Pagination -->
    <div class="pagination">
        {{ $applications->links() }}
    </div>
</div>

<style>
.applications-page {
    max-width: 1400px;
    margin: 0 auto;
}

.page-header {
    margin-bottom: 28px;
}

.page-header h1 {
    font-size: 28px;
    font-weight: 600;
    color: #1A2C3E;
    margin-bottom: 6px;
}

.page-header .subtitle {
    font-size: 14px;
    color: #7A8B9B;
}

.stats-row {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 20px;
    margin-bottom: 28px;
}

.stat-card {
    background: white;
    border-radius: 16px;
    padding: 20px;
    text-align: center;
    border: 1px solid #E8ECEF;
}

.stat-value {
    font-size: 32px;
    font-weight: 700;
    color: #1A2C3E;
    line-height: 1.2;
}

.stat-label {
    font-size: 12px;
    color: #7A8B9B;
    margin-top: 6px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.stat-card.pending .stat-value { color: #F57C00; }
.stat-card.under-review .stat-value { color: #1976D2; }
.stat-card.approved .stat-value { color: #2E7D32; }
.stat-card.rejected .stat-value { color: #C62828; }

.filter-tabs {
    display: flex;
    gap: 8px;
    flex-wrap: wrap;
    margin-bottom: 24px;
}

.filter-tab {
    padding: 8px 20px;
    background: white;
    border: 1px solid #E8ECEF;
    border-radius: 30px;
    text-decoration: none;
    font-size: 13px;
    font-weight: 500;
    color: #5D6F7F;
    transition: all 0.2s;
}

.filter-tab:hover {
    border-color: #C49A6C;
    color: #C49A6C;
}

.filter-tab.active {
    background: #C49A6C;
    border-color: #C49A6C;
    color: white;
}

.search-bar {
    margin-bottom: 24px;
}

.search-input {
    width: 100%;
    max-width: 350px;
    padding: 12px 16px;
    border: 1px solid #E8ECEF;
    border-radius: 12px;
    font-size: 14px;
    transition: all 0.2s;
}

.search-input:focus {
    outline: none;
    border-color: #C49A6C;
    box-shadow: 0 0 0 3px rgba(196,154,108,0.1);
}

.table-container {
    background: white;
    border-radius: 20px;
    border: 1px solid #E8ECEF;
    overflow-x: auto;
}

.applications-table {
    width: 100%;
    border-collapse: collapse;
}

.applications-table th {
    text-align: left;
    padding: 16px 20px;
    background: #F8F9FA;
    font-size: 12px;
    font-weight: 600;
    color: #5D6F7F;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    border-bottom: 1px solid #E8ECEF;
}

.applications-table td {
    padding: 16px 20px;
    font-size: 14px;
    color: #1A2C3E;
    border-bottom: 1px solid #F0F2F5;
}

.applications-table tr:hover td {
    background: #F8F9FA;
}

.text-muted {
    font-size: 12px;
    color: #7A8B9B;
}

.tier-badge {
    display: inline-block;
    padding: 4px 12px;
    background: #E3F2FD;
    color: #1976D2;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
}

.status-badge {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
}

.status-pending { background: #FFF3E0; color: #F57C00; }
.status-under_review { background: #E3F2FD; color: #1976D2; }
.status-approved { background: #E8F5E9; color: #2E7D32; }
.status-rejected { background: #FFEBEE; color: #C62828; }
.status-deferred { background: #ECEFF1; color: #546E7A; }

.btn-view {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 8px 16px;
    background: #E8ECEF;
    color: #1A2C3E;
    text-decoration: none;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 500;
    transition: all 0.2s;
}

.btn-view:hover {
    background: #C49A6C;
    color: white;
}

.empty-state {
    text-align: center;
    padding: 60px;
    color: #7A8B9B;
}

.empty-icon {
    font-size: 48px;
    margin-bottom: 16px;
}

.pagination {
    margin-top: 28px;
    display: flex;
    justify-content: center;
}

@media (max-width: 1024px) {
    .stats-row {
        grid-template-columns: repeat(3, 1fr);
    }
    .applications-table th {
        display: none;
    }
    .applications-table td {
        display: block;
        padding: 12px 16px;
    }
    .applications-table td:before {
        content: attr(data-label);
        font-weight: 600;
        font-size: 11px;
        color: #5D6F7F;
        display: block;
        margin-bottom: 4px;
        text-transform: uppercase;
    }
}

@media (max-width: 768px) {
    .stats-row {
        grid-template-columns: repeat(2, 1fr);
    }
}
</style>

<script>
document.getElementById('searchInput')?.addEventListener('keyup', function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll('.applications-table tbody tr');
    
    rows.forEach(row => {
        if (row.querySelector('.empty-state')) return;
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});
</script>
@endsection
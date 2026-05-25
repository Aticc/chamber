@extends('layouts.admin')

@section('title', 'Members')

@section('content')
<div class="members-page">
    <div class="page-header">
        <div>
            <h1>Members</h1>
            <p class="subtitle">Manage approved ATICC members</p>
        </div>
    </div>

    <div class="stats-row">
        <div class="stat-card">
            <div class="stat-value">{{ $stats['total'] ?? 0 }}</div>
            <div class="stat-label">Total Members</div>
        </div>
        <div class="stat-card approved">
            <div class="stat-value">{{ $stats['approved'] ?? 0 }}</div>
            <div class="stat-label">Approved</div>
        </div>
        <div class="stat-card pending">
            <div class="stat-value">{{ $stats['pending'] ?? 0 }}</div>
            <div class="stat-label">Pending</div>
        </div>
        <div class="stat-card deferred">
            <div class="stat-value">{{ $stats['deferred'] ?? 0 }}</div>
            <div class="stat-label">Deferred</div>
        </div>
    </div>

    <div class="filter-tabs">
        <a href="{{ route('admin.members.index') }}" class="filter-tab {{ !request('status') ? 'active' : '' }}">All</a>
        <a href="{{ route('admin.members.index', ['status' => 'approved']) }}" class="filter-tab {{ request('status') == 'approved' ? 'active' : '' }}">Approved</a>
        <a href="{{ route('admin.members.index', ['status' => 'pending']) }}" class="filter-tab {{ request('status') == 'pending' ? 'active' : '' }}">Pending</a>
        <a href="{{ route('admin.members.index', ['status' => 'deferred']) }}" class="filter-tab {{ request('status') == 'deferred' ? 'active' : '' }}">Deferred</a>
    </div>

    <div class="search-bar">
        <input type="text" id="searchInput" placeholder="Search members by name or email..." class="search-input">
    </div>

    <div class="table-container">
        <table class="members-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Organization</th>
                    <th>Contact Person</th>
                    <th>Email</th>
                    <th>Tier</th>
                    <th>Status</th>
                    <th>Joined</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @forelse($members as $member)
                <tr>
                    <td data-label="ID">#{{ $member->id }}</td>
                    <td data-label="Organization">
                        <strong>{{ $member->org_name }}</strong><br>
                        <span class="text-muted">{{ $member->country ?? 'No country' }}</span>
                    </td>
                    <td data-label="Contact Person">
                        {{ $member->first_name }} {{ $member->last_name }}<br>
                        <span class="text-muted">{{ $member->position ?? 'No position' }}</span>
                    </td>
                    <td data-label="Email">{{ $member->email }}</td>
                    <td data-label="Tier">{{ $member->membership_level ?? $member->selected_tier ?? 'N/A' }}</td>
                    <td data-label="Status">
                        <span class="status-badge status-{{ $member->status }}">
                            {{ ucfirst($member->status) }}
                        </span>
                    </td>
                    <td data-label="Joined">{{ $member->created_at->format('M d, Y') }}</td>
                    <td data-label="Actions">
                        <div class="action-buttons">
                            <a href="{{ route('admin.members.show', $member->id) }}" class="btn-view">View</a>
                            <a href="{{ route('admin.members.login-as', $member->id) }}" class="btn-impersonate">Login</a>
                        </div>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="empty-state">
                        <div class="empty-icon">👥</div>
                        <p>No members found</p>
                    </td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="pagination">
        {{ $members->links() }}
    </div>
</div>

<style>
.members-page {
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
    grid-template-columns: repeat(4, 1fr);
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
}

.stat-label {
    font-size: 12px;
    color: #7A8B9B;
    margin-top: 6px;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.stat-card.approved .stat-value { color: #2E7D32; }
.stat-card.pending .stat-value { color: #F57C00; }
.stat-card.deferred .stat-value { color: #1976D2; }

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
}

.search-input:focus {
    outline: none;
    border-color: #C49A6C;
}

.table-container {
    background: white;
    border-radius: 20px;
    border: 1px solid #E8ECEF;
    overflow-x: auto;
}

.members-table {
    width: 100%;
    border-collapse: collapse;
}

.members-table th {
    text-align: left;
    padding: 16px 20px;
    background: #F8F9FA;
    font-size: 12px;
    font-weight: 600;
    color: #5D6F7F;
    text-transform: uppercase;
    border-bottom: 1px solid #E8ECEF;
}

.members-table td {
    padding: 16px 20px;
    font-size: 14px;
    color: #1A2C3E;
    border-bottom: 1px solid #F0F2F5;
}

.members-table tr:hover td {
    background: #F8F9FA;
}

.text-muted {
    font-size: 12px;
    color: #7A8B9B;
}

.status-badge {
    display: inline-block;
    padding: 5px 12px;
    border-radius: 20px;
    font-size: 12px;
    font-weight: 500;
}

.status-approved { background: #E8F5E9; color: #2E7D32; }
.status-pending { background: #FFF3E0; color: #F57C00; }
.status-under_review { background: #E3F2FD; color: #1976D2; }
.status-rejected { background: #FFEBEE; color: #C62828; }
.status-deferred { background: #ECEFF1; color: #546E7A; }

.action-buttons {
    display: flex;
    gap: 8px;
}

.btn-view, .btn-impersonate {
    padding: 6px 14px;
    border-radius: 8px;
    font-size: 12px;
    font-weight: 500;
    text-decoration: none;
    transition: all 0.2s;
}

.btn-view {
    background: #E8ECEF;
    color: #1A2C3E;
}

.btn-view:hover {
    background: #C49A6C;
    color: white;
}

.btn-impersonate {
    background: #E3F2FD;
    color: #1976D2;
}

.btn-impersonate:hover {
    background: #1976D2;
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
        grid-template-columns: repeat(2, 1fr);
    }
    .members-table th {
        display: none;
    }
    .members-table td {
        display: block;
        padding: 12px 16px;
    }
    .members-table td:before {
        content: attr(data-label);
        font-weight: 600;
        font-size: 11px;
        color: #5D6F7F;
        display: block;
        margin-bottom: 4px;
    }
}
</style>

<script>
document.getElementById('searchInput')?.addEventListener('keyup', function() {
    const searchTerm = this.value.toLowerCase();
    const rows = document.querySelectorAll('.members-table tbody tr');
    
    rows.forEach(row => {
        if (row.querySelector('.empty-state')) return;
        const text = row.textContent.toLowerCase();
        row.style.display = text.includes(searchTerm) ? '' : 'none';
    });
});
</script>
@endsection